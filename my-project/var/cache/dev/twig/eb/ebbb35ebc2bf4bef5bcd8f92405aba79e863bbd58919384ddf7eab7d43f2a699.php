<?php

/* currencies/index.html.twig */
class __TwigTemplate_8cc10f6e3119b575ab642b5b95f132c4a8e51583864ab0f0311f7897cda1e94e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "currencies/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currencies/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currencies/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CurrenciesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"\" style=\"text-align: center\">
    <button id=\"getUsd\" class=\"btn btn-info\">GET USD</button>
    <button id=\"getEur\" class=\"btn btn-info\">GET EUR</button>
    </h1>
<div id=\"table\"></div>
    <table class=\"table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Usd</th>
            <th scope=\"col\">Eur</th>
            <th scope=\"col\">Date</th>
        </tr>
        </thead>
        <tbody id=\"table_body_currencies\"></tbody>
    </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
    <script>
        \$(function () {
            \$.ajax({
                url:        '/usd',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                    \$.each(data, function (i, item) {
                        \$(\"#table_body_currencies\").append(
                            \"<tr><td>\"+ (i+1) +\"</td>\" +
                            \"<td>\"+item.name_usd+\"</td>\" +
                            \"<td>\"+item.name_eur+\"</td>\" +
                            \"<td>\"+item.date+\"</td>\" +
                            \"</tr>\"
                        );
                    });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });

        \$(\"#getUsd\").click(function () {
            \$.ajax({
                url:        '/usd',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                        \$.each(data, function (i, item) {
                            \$(\"#table_body_currencies\").append(
                                \"<tr><td>\"+ (i+1) +\"</td>\" +
                                \"<td>\"+item.name_usd+\"</td>\" +
                                \"<td>\"+item.name_eur+\"</td>\" +
                                \"<td>\"+item.date+\"</td>\" +
                                \"</tr>\"
                            );
                        });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });
        \$(\"#getEur\").click(function () {
            \$.ajax({
                url:        '/eur',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                    \$.each(data, function (i, item) {
                        \$(\"#table_body_currencies\").append(
                            \"<tr><td>\"+ (i+1) +\"</td>\" +
                            \"<td>\"+item.name_usd+\"</td>\" +
                            \"<td>\"+item.name_eur+\"</td>\" +
                            \"<td>\"+item.date+\"</td>\" +
                            \"</tr>\"
                        );
                    });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "currencies/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  107 => 31,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello CurrenciesController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"\" style=\"text-align: center\">
    <button id=\"getUsd\" class=\"btn btn-info\">GET USD</button>
    <button id=\"getEur\" class=\"btn btn-info\">GET EUR</button>
    </h1>
<div id=\"table\"></div>
    <table class=\"table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Usd</th>
            <th scope=\"col\">Eur</th>
            <th scope=\"col\">Date</th>
        </tr>
        </thead>
        <tbody id=\"table_body_currencies\"></tbody>
    </table>
</div>

{% endblock %}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js\"></script>
    <script>
        \$(function () {
            \$.ajax({
                url:        '/usd',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                    \$.each(data, function (i, item) {
                        \$(\"#table_body_currencies\").append(
                            \"<tr><td>\"+ (i+1) +\"</td>\" +
                            \"<td>\"+item.name_usd+\"</td>\" +
                            \"<td>\"+item.name_eur+\"</td>\" +
                            \"<td>\"+item.date+\"</td>\" +
                            \"</tr>\"
                        );
                    });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });

        \$(\"#getUsd\").click(function () {
            \$.ajax({
                url:        '/usd',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                        \$.each(data, function (i, item) {
                            \$(\"#table_body_currencies\").append(
                                \"<tr><td>\"+ (i+1) +\"</td>\" +
                                \"<td>\"+item.name_usd+\"</td>\" +
                                \"<td>\"+item.name_eur+\"</td>\" +
                                \"<td>\"+item.date+\"</td>\" +
                                \"</tr>\"
                            );
                        });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });
        \$(\"#getEur\").click(function () {
            \$.ajax({
                url:        '/eur',
                type:       'Get',
                dataType:   'json',
                async:      true,
                success: function(data, status) {
                    \$('#table_body_currencies').html('');
                    \$.each(data, function (i, item) {
                        \$(\"#table_body_currencies\").append(
                            \"<tr><td>\"+ (i+1) +\"</td>\" +
                            \"<td>\"+item.name_usd+\"</td>\" +
                            \"<td>\"+item.name_eur+\"</td>\" +
                            \"<td>\"+item.date+\"</td>\" +
                            \"</tr>\"
                        );
                    });
                },
                error : function(xhr, textStatus, errorThrown) {
                    alert('Ajax request failed.');
                }
            });
        });
    </script>

{% endblock %}
", "currencies/index.html.twig", "C:\\Users\\garst\\Desktop\\symphony\\my-project\\templates\\currencies\\index.html.twig");
    }
}
