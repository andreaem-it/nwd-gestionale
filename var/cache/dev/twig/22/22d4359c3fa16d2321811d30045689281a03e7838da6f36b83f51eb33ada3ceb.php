<?php

/* default/index.html.twig */
class __TwigTemplate_0cf7903c69c3d0f3b051d605b35c6ae20402b4a99a8440973c48b92bc0ad293b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-12\">
                <h3>Dashboard <small> Benvenuto, ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", array()), "username", array())), "html", null, true);
        echo " !</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-1\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <h3>Oggi</h3>
                                <h1 class=\"mt-3 time card-title text-white\" style=\"font-size: 20px\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s"), "html", null, true);
        echo "</h1>
                            </div>
                            <div class=\"col-3\">
                                <i class=\"mdi mdi-clock text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                        <script>
                            var clock = 0;
                            var interval_msec = 1000;
                            \$(document).ready( function() {
                                clock = setTimeout(\"UpdateClock()\", interval_msec);
                            });
                            function UpdateClock(){
                                clearTimeout(clock);
                                var dt_now = new Date();
                                var hh\t= dt_now.getUTCHours();
                                var mm\t= dt_now.getUTCMinutes();
                                var ss\t= dt_now.getUTCSeconds();
                                var dd  = dt_now.getUTCDate();
                                var mo  = dt_now.getUTCMonth() + 1;
                                var yy  = dt_now.getUTCFullYear();
                                if(dd < 10){
                                    dd = \"0\" + dd;
                                }
                                if(mo < 10){
                                    mo = \"0\" + mo;
                                }
                                if(hh < 10){
                                    hh = \"0\" + hh;
                                }
                                if(mm < 10){
                                    mm = \"0\" + mm;
                                }
                                if(ss < 10){
                                    ss = \"0\" + ss;
                                }
                                \$(\".time\").html(dd + \"/\" + mo + \"/\" + yy + \" \" + hh + \":\" + mm + \":\" + ss);
                                clock = setTimeout(\"UpdateClock()\", interval_msec);

                            }
                        </script>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-3 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-2\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <h3>Preventivi</h3>
                                <h1 class=\"mt-3 card-title text-white\" id=\"expCounter\" style=\"font-size: 20px\">
                                    0
                                </h1>
                            </div>
                            <div class=\"col-3\">
                                <i class=\"mdi mdi-file-document text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-3\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-10\">
                                <h3>Annunci</h3>
                                <p><small>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["announcements"]) || array_key_exists("announcements", $context) ? $context["announcements"] : (function () { throw new Twig_Error_Runtime('Variable "announcements" does not exist.', 86, $this->source); })()), "datetime", array()), "d-m-Y"), "html", null, true);
        echo "</small> - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["announcements"]) || array_key_exists("announcements", $context) ? $context["announcements"] : (function () { throw new Twig_Error_Runtime('Variable "announcements" does not exist.', 86, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-2\">
                                <i class=\"mdi mdi-exclamation text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12\">
                <div class=\"card card-body\">
                    <div class=\"card-title\">
                        <h4>Ultimi preventivi generati da ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</h4>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Data
                                </th>
                                <th>
                                    Cliente
                                </th>
                                <th>
                                    Prezzo
                                </th>
                                <th>
                                    Scadenza
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expertations"]) || array_key_exists("expertations", $context) ? $context["expertations"] : (function () { throw new Twig_Error_Runtime('Variable "expertations" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 125
            echo "                                <tr>
                                    <td>
                                        ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"py-1\">
                                        ";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 134, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td>
                                        ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €
                                    </td>
                                    <td>
                                        ";
            // line 141
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('#widget-1').hover( function() {
            zoom('#widget-1');
        });
        \$('#widget-2').hover( function() {
            zoom('#widget-2');
        });
        \$('#widget-3').hover( function() {
            zoom('#widget-3');
        });

        function zoom(item) {
            \$(item).toggleClass('zoomOut','zoom');
        }
        \$('#expCounter').animateNumber({ number: ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["expCount"]) || array_key_exists("expCount", $context) ? $context["expCount"] : (function () { throw new Twig_Error_Runtime('Variable "expCount" does not exist.', 170, $this->source); })()), "html", null, true);
        echo " });
    </script>
    <style>
        .zoom {
            -webkit-transition: all .2s ease-in-out;
            transition: all .5s ease-in-out;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            font-size: 32px!important;
        }
        .zoomOut {
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            font-size: 20px!important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 190
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 193,  325 => 190,  316 => 189,  287 => 170,  268 => 154,  257 => 145,  247 => 141,  241 => 138,  234 => 134,  230 => 133,  224 => 130,  218 => 127,  214 => 125,  210 => 124,  183 => 100,  164 => 86,  93 => 18,  80 => 8,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Dashboard{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-12\">
                <h3>Dashboard <small> Benvenuto, {{ app.user.username|capitalize }} !</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-1\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <h3>Oggi</h3>
                                <h1 class=\"mt-3 time card-title text-white\" style=\"font-size: 20px\">{{ \"now\"|date(\"d/m/Y H:i:s\") }}</h1>
                            </div>
                            <div class=\"col-3\">
                                <i class=\"mdi mdi-clock text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                        <script>
                            var clock = 0;
                            var interval_msec = 1000;
                            \$(document).ready( function() {
                                clock = setTimeout(\"UpdateClock()\", interval_msec);
                            });
                            function UpdateClock(){
                                clearTimeout(clock);
                                var dt_now = new Date();
                                var hh\t= dt_now.getUTCHours();
                                var mm\t= dt_now.getUTCMinutes();
                                var ss\t= dt_now.getUTCSeconds();
                                var dd  = dt_now.getUTCDate();
                                var mo  = dt_now.getUTCMonth() + 1;
                                var yy  = dt_now.getUTCFullYear();
                                if(dd < 10){
                                    dd = \"0\" + dd;
                                }
                                if(mo < 10){
                                    mo = \"0\" + mo;
                                }
                                if(hh < 10){
                                    hh = \"0\" + hh;
                                }
                                if(mm < 10){
                                    mm = \"0\" + mm;
                                }
                                if(ss < 10){
                                    ss = \"0\" + ss;
                                }
                                \$(\".time\").html(dd + \"/\" + mo + \"/\" + yy + \" \" + hh + \":\" + mm + \":\" + ss);
                                clock = setTimeout(\"UpdateClock()\", interval_msec);

                            }
                        </script>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-3 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-2\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <h3>Preventivi</h3>
                                <h1 class=\"mt-3 card-title text-white\" id=\"expCounter\" style=\"font-size: 20px\">
                                    0
                                </h1>
                            </div>
                            <div class=\"col-3\">
                                <i class=\"mdi mdi-file-document text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mt-4\">
                <div class=\"card card-revenue\" id=\"widget-3\">
                    <div class=\"card-body pb-0\" style=\"min-height: 150px\">
                        <div class=\"row\">
                            <div class=\"col-10\">
                                <h3>Annunci</h3>
                                <p><small>{{ announcements.datetime|date(\"d-m-Y\") }}</small> - {{ announcements.description }}</p>
                            </div>
                            <div class=\"col-2\">
                                <i class=\"mdi mdi-exclamation text-white\" style=\"font-size: 3em\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-12\">
                <div class=\"card card-body\">
                    <div class=\"card-title\">
                        <h4>Ultimi preventivi generati da {{ app.user.username }}</h4>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Data
                                </th>
                                <th>
                                    Cliente
                                </th>
                                <th>
                                    Prezzo
                                </th>
                                <th>
                                    Scadenza
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for item in expertations %}
                                <tr>
                                    <td>
                                        {{ item.id }}
                                    </td>
                                    <td class=\"py-1\">
                                        {{ item.date|date(\"d-m-Y\") }}
                                    </td>
                                    <td>
                                        <a href=\"{{ url('vedi_clienti', { id : item.client}) }}\">
                                            {{ functions.uidToName(item.client) }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ item.price }} €
                                    </td>
                                    <td>
                                        {{ item.expiration|date(\"d-m-Y\") }}
                                    </td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src=\"{{ asset('js/jquery.animateNumber.min.js') }}\"></script>

    <script>
        \$('#widget-1').hover( function() {
            zoom('#widget-1');
        });
        \$('#widget-2').hover( function() {
            zoom('#widget-2');
        });
        \$('#widget-3').hover( function() {
            zoom('#widget-3');
        });

        function zoom(item) {
            \$(item).toggleClass('zoomOut','zoom');
        }
        \$('#expCounter').animateNumber({ number: {{ expCount }} });
    </script>
    <style>
        .zoom {
            -webkit-transition: all .2s ease-in-out;
            transition: all .5s ease-in-out;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            font-size: 32px!important;
        }
        .zoomOut {
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            font-size: 20px!important;
        }
    </style>
{% endblock %}
{% block stylesheets %}


{% endblock %}
{% block javascripts %}
{% endblock %}", "default/index.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/default/index.html.twig");
    }
}
