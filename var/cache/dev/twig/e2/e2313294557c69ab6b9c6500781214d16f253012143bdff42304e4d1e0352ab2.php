<?php

/* default/index.html.twig */
class __TwigTemplate_25932c5350254c030ec7da03a4fa172202bc424ce812b01c15db59a014d2f205 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", array()), "username", array()), "html", null, true);
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
            <div class=\"col-3\">

            </div>
            <div class=\"col-3\">

            </div>
        </div>
    </div>
</div>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('#widget-1').hover( function() {
            zoom('#widget-1');
        });
        \$('#widget-2').hover( function() {
            zoom('#widget-2');
        });

        function zoom(item) {
            \$(item).toggleClass('zoomOut','zoom');
        }
        \$('#expCounter').animateNumber({ number: ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["expCount"]) || array_key_exists("expCount", $context) ? $context["expCount"] : (function () { throw new Twig_Error_Runtime('Variable "expCount" does not exist.', 102, $this->source); })()), "html", null, true);
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

    // line 121
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 122
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.all.min.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
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
        return array (  239 => 126,  226 => 123,  221 => 122,  212 => 121,  183 => 102,  167 => 89,  93 => 18,  80 => 8,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <h3>Dashboard <small> Benvenuto, {{ app.user.username }} !</small></h3>
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
            <div class=\"col-3\">

            </div>
            <div class=\"col-3\">

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
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome.all.min.css') }}\">

{% endblock %}
{% block javascripts %}
{% endblock %}", "default/index.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/default/index.html.twig");
    }
}
