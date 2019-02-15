<?php

namespace App\Controller;

use App\Entity\Currencies;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class CurrenciesController extends AbstractController
{

    /**
     * @Route("/", name="currencies")
     */
    public function index()
    {
        return $this->render("currencies/index.html.twig");
    }

    /**
     * @Route("/{name}", name="currencies_show")
     */
    public function show($name)
    {
        $base_v = '';
        if ($name === 'usd') $base_v = 'EUR';
        if ($name === 'eur') $base_v = 'USD';

        $result_json = file_get_contents('https://api.exchangeratesapi.io/latest?base='.strtoupper($name).'&symbols='.$base_v);
        $result = json_decode($result_json, true);
        $result_date = $result["date"];
        $entityManager = $this->getDoctrine()->getManager();

        $object = $this->getDoctrine()->getRepository(Currencies::class)->findOneBy([
            "name_".$name => 1,
            'added_date' => "$result_date",
        ]);
        if ( is_null($object) ) {
            $currencies = new Currencies();
            $currencies->setNameUsd($name==='usd'? 1 : $result['rates'][$base_v]);
            $currencies->setNameEur($name==='eur'? 1 : $result['rates'][$base_v]);
            $currencies->setAddedDate($result["date"]);

            // tell Doctrine you want to (eventually) save the Currencies (no queries yet)
            $entityManager->persist($currencies);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }


        $currencies = $this->getDoctrine()
            ->getRepository(Currencies::class)
            ->findBy(["name_".$name => 1],["id"=> "DESC"]);

        $jsonData = array();
        $idx = 0;
        foreach($currencies as $currencie) {
            $temp = array(
                'name_usd' => $currencie->getNameUsd(),
                'name_eur' => $currencie->getNameEur(),
                'date' => $currencie->getAddedDate(),
            );
            $jsonData[$idx++] = $temp;
        }
        if (!$currencies) {
            throw $this->createNotFoundException(
                'No currencies found for name '.$name
            );
        }
        return  new JsonResponse($jsonData);
    }

}
