<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_220f25c12a12468fd8951b66b94af79451757cd6021c89e91db3e2bf6269ff01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/new.advanced.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

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

        echo "Preventivo";
        
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
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
            </div>
        </div>
        ";
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), array(0 => "jquery.collection.html.twig"), true);
        // line 12
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 19, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->source); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 27, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })()), "kw", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 39, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Opere Murarie </strong><br>
                            <strong>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 43, $this->source); })()), "opereMurarieIntonaco", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Intonaco </strong><br>
                            <strong>";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Pietra</strong>
                        </div>
                        <!--<div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 48, $this->source); })()), "sconto", array()), "html", null, true);
        echo "</small></p>
                        </div>-->
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->source); })()), "level", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>Metratura</strong>
                            <p><small>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 58, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 61, $this->source); })()), "trifase", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Trifase </strong><br>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Circuiti</strong>
                            <p><small>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 65, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->source); })()), "illumSicurezza", array()) >= 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "<br>
                            <strong>";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "lampada", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Lampada fornita </strong><br>
                        </div>
                        <div class=\"col-lg-3\">
                            <strong>SPD</strong>
                            <p><small>";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 73, $this->source); })()), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea, Tolleranza R1";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 73, $this->source); })()), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni";
        }
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 77, $this->source); })()), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 77, $this->source); })()), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 77, $this->source); })()), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica";
        }
        echo " </small></p>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 82, $this->source); })()), "campanello", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Campanello</strong><br>
                            <strong>";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->source); })()), "citVid", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Citofono</strong><br>
                            <strong>";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "citVid", array()) == 2)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;VideoCitofono</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->source); })()), "antenna", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Antenna</strong><br>
                            <strong>";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 88, $this->source); })()), "allarme", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Allarme</strong><br>
                            <strong>";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->source); })()), "illumEsterna", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illuminazione Esterna</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Dati</strong>
                            <p><small>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 93, $this->source); })()), "numPreseDati", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Telefono</strong>
                            <p><small>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->source); })()), "numPreseTelefono", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Totale Preliminare</strong>
                            <p><small>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 105, $this->source); })()), "price", array()), "html", null, true);
        echo " €</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 120
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 120, $this->source); })()) - 1);
        // line 121
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 121, $this->source); })()), "id", array()), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 121, $this->source); })()))), "html", null, true);
        echo "\">-</a>
                                ";
        // line 122
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 122, $this->source); })()) + 1);
        // line 123
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 123, $this->source); })()), "id", array()), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 123, $this->source); })()))), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>
                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 139
            echo "                                        <th>
                                            ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 140, $this->source); })()), "room", array(0 => $context["item"]), "method"), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                    <th>
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                ";
        // line 148
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 148, $this->source); })())) + 1);
        // line 149
        echo "                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 157, $this->source); })()), 0, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 159, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 160
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 161
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 167, $this->source); })()), 1, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 169, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 170
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 171
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 177, $this->source); })()), 2, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 179, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 180
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 181
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 187, $this->source); })()), 3, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 189, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 190
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 191
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 197, $this->source); })()), 4, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 199, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 200
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 201
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 212, $this->source); })()), 5, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 214, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 215
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 216
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 222, $this->source); })()), 6, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 224, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 225
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 226
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 237, $this->source); })()), 7, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 239, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 240
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 241
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 247, $this->source); })()), 8, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 249, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 250
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 251
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 257, $this->source); })()), 9, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 259, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 260
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 261
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 267, $this->source); })()), 10, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 269, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 270
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 271
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 277, $this->source); })()), 11, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 279, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 280
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 281
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 287, $this->source); })()), 12, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 289, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 290
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 291
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 297
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 297, $this->source); })()), 13, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 299, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 300
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 301
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 307, $this->source); })()), 14, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 309, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 310
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 311
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 317
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 317, $this->source); })()), 15, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 319, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 320
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 321
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 332, $this->source); })()), 16, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 334, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 335
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 336
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 342, $this->source); })()), 17, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 344, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 345
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 346
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 352, $this->source); })()), 18, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 354, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 355
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 356
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 362
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 362, $this->source); })()), 19, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 364, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 365
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 366
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 372, $this->source); })()), 20, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 374, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 375
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 376
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 387, $this->source); })()), 21, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 389, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 390
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 391
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 397, $this->source); })()), 22, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 399, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 400
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 401
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 407, $this->source); })()), 23, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 409, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 410
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 411
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 417, $this->source); })()), 24, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 419, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 420
            echo "                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 421
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                    </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 428, $this->source); })()), 25, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 430, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 431
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 432
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 438
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 438, $this->source); })()), 26, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 440, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 441
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 442
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 453, $this->source); })()), 27, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 455, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 456
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 457
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 463, $this->source); })()), 28, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 465, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 466
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 467
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 473
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 473, $this->source); })()), 29, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 475, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 476
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 477
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 483
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 483, $this->source); })()), 30, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 485, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 486
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 487
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 493
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 493, $this->source); })()), 31, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 495, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 496
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 497
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 500
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 503
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 503, $this->source); })()), 32, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 505, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 506
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 507
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 510
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 513
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 513, $this->source); })()), 33, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 515
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 515, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 516
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 517
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 523
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 523, $this->source); })()), 34, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 525, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 526
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 527
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 533, $this->source); })()), 35, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 535, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 536
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 537
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 543, $this->source); })()), 36, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 545, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 546
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 547
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 553
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 553, $this->source); })()), 37, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 555, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 556
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 557
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 563
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 563, $this->source); })()), 38, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 565, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 566
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 567
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 573, $this->source); })()), 39, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 575, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 576
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 577
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 583, $this->source); })()), 40, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 585
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 585, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 586
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 587
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 593
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 593, $this->source); })()), 41, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 595, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 596
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 597
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 603
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 603, $this->source); })()), 42, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 605, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 606
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 607
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 613
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 613, $this->source); })()), 43, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 615, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 616
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 617
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 623
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 623, $this->source); })()), 44, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 625
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 625, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 626
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 627
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 633
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 633, $this->source); })()), 45, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 635, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 636
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 637
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 648
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 648, $this->source); })()), 46, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 650, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 651
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 652
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 658
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 658, $this->source); })()), 47, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 660, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 661
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 662
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 665
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 668
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 668, $this->source); })()), 48, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 670
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 670, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 671
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 672
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 678
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 678, $this->source); })()), 49, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 680, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 681
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 682
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 688
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 688, $this->source); })()), 50, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 690
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 690, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 691
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 692
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 698
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 698, $this->source); })()), 51, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 700
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 700, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 701
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 702
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 705
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 708
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 708, $this->source); })()), 52, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 710
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 710, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 711
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 712
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 723
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 723, $this->source); })()), 53, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 725
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 725, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 726
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 727
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 733
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 733, $this->source); })()), 54, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 735, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 736
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 737
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 740
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 743
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 743, $this->source); })()), 55, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 745, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 746
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 747
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 753
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 753, $this->source); })()), 56, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 755
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 755, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 756
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 757
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 763
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 763, $this->source); })()), 57, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 765, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 766
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 767
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 770
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 773
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 773, $this->source); })()), 58, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 775, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 776
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 777
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 788
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 788, $this->source); })()), 59, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 790, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 791
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 792
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 795
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 798
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 798, $this->source); })()), 60, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 800, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 801
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 802
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 815, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 816
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 817
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 820
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 825, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 826
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 827
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" onchange=\"check(";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ",63)\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 835
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 835, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 836
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 837
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" onchange=\"check(";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ",64)\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 840
        echo "                                </tr>
                            </tbody>
                            ";
        // line 842
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 842, $this->source); })()), "submit", array()), 'widget');
        echo "
                            <div class=\"row\">
                                <div class=\"col-9\"></div>
                                <div class=\"col-3\">
                                    <div class=\"card card-generate \">
                                        <div class=\"card-body pt-2 pb-4\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    <a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3 animsition-link\">Genera</a>
                                                </div>
                                                <div class=\"col-6\">
                                                    <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3 animsition-link\">Annulla</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 860
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 860, $this->source); })()), 'form_end');
        echo "
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(document).ready( function () {
                update(";
        // line 870
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 870, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 871
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 871, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 872
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 872, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 873
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 873, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 874
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 874, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 880
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 880, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', false);
                        \$(\"#form_val64_\" + i ).prop('disabled', false);
                    }
                    },10000);
                //check();
            });

            \$('#generateBtn').click(function(e) {
                e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 65; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                }
                \$('#appbundle_expertationsadvanced_father').val(";
        // line 894
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 894, $this->source); })()), "id", array()), "html", null, true);
        echo ");
                \$('#appbundle_expertationsadvanced_fatherFloor').val(0);
                \$('#appbundle_expertationsadvanced_submit').trigger('click')
            });

            function collect(valn) {
                var arr = [];
                \$('input[id^=\"form_' + valn + '_\"]').each(function() {
                    arr.push(\$(this).val());
                });
                return arr.join(\",\");
            }

            function update(exp,field,valn){
                \$.ajax({
                    url: '/ajax/get/expData/' + exp + '/' + field,
                    success: function (data) {
                        for (var i = 0; i < ";
        // line 911
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 911, $this->source); })()), "html", null, true);
        echo "; i++) {
                            var numbersArray = data.split(',');
                            \$.each(numbersArray, function(index, value) {
                                var ind = index +1;
                                \$('#form_'+ valn + '_' + ind).val(value);
                            });

                        }
                    }
                })
            }
            function calculate(field) {
                for(var i = 0; i < ";
        // line 923
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 923, $this->source); })()), "html", null, true);
        echo "; i++) {
                    var ind = i +1;
                    var values = parseInt(\$('#form_val1_' + ind ).val()) + parseInt(\$('#form_val6_' + ind ).val());
                    console.log(values);
                    \$('#form_val' + field + '_' + ind ).val(values)
                }
            }
            function check(i,f) {

                var v = \$(\"#form_val62_\" + i).val(); //Let's say this is the value from PHP....
                var preVal = 0;

                \$(\"#form_val62_\" + i).val(v);

                \$(\"#form_val\" + f + \"_\" + i).on(\"change keyup keydown\", function(event) {
                    let currVal = parseInt(\$(\"#form_val\" + f + \"_\" + i).val());

                    console.log(preVal);
                    console.log(currVal);

                    // store current positions in variables
                    var start = this.selectionStart,
                        end = this.selectionEnd;

                    if (!currVal || currVal == 0) {
                        preVal = 0;
                        \$(\"#form_val62_\" + i).val(v);
                    } else if (currVal <= v) {
                        \$(\"#form_val62_\" + i).val((v - currVal) == 0 ? 0 : (v - currVal));
                        preVal = currVal;
                    } else {
                        \$(\"#form_val\" + f + \"_\" + i).val(v);
                    }

                    this.setSelectionRange(start, end);

                });
            }
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                \$('#buttons').css('left','84%');
            }
        </script>
    </div>
</div>
    <script src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 973
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 974
        echo "    <style>
        .form-control {

            width: 100px;
            min-width: 100px;

        }
        .table td {
            min-width: 210px;
        }
        .table td:hover {
            background-color: #F0F0EE;
        }
        .table th {
            text-align: center;
        }
        .form-control {
            border:none!important;
            width: 150px!important;
            text-align: center!important;
            background-color: transparent;
        }
        select {
            width:100%!important;
        }
        #form_client {
            max-width:85%;
        }
        .input-group label {
            font-size: 13px;
            line-height: 1;
            vertical-align: top;
        }
        .card-generate {
            position: fixed;
            bottom: 0px;
            right: 0px;
            border-top: 1px solid #CCCCCC;
            border-left: 1px solid #CCCCCC;
            border-top-left-radius: 5px;
            z-index:1;
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
        .fixed {
            top: 63px;
            right: 0px;
            left: 96%;
            background: white;
            width: 66px;
            border: 1px lightgrey solid;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .wrapper2 {
            width: 100%;
            overflow: hidden;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 1039
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1041
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1042
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#scroll-r').click(function(e) {
            e.preventDefault();
            \$(\".table-2\").animate({'left':'-=300px'}).scrollLeft();
            console.log(\$(\".table-2\").width());
            \$(\"#scroll-r\").attr(\"enabled\",\"enabled\");
            console.log(\$(\".table-2\").position())

        });
        \$('#scroll-l').click(function(e) {
            e.preventDefault();
            console.log(\$(\".table-2\").position());
            if (\$(\".table-2\").position.left >= 0) {
                return;
            }
            \$(\".table-2\").animate({'left': '+=300px'}).scrollLeft()
        });
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 333) {
                \$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scrolled\")
                /*\$('.selector').fixedHeaderTable({
                    footer: false,
                    cloneHeadToFoot: false,
                    fixedColumn: false
                });*/
            } else {
                \$('#buttons').removeClass('fixed-top').removeClass('fixed');
                console.log(\"top\");
                \$('.selector').fixedHeaderTable('destroy');
            }
        });


    </script>
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/new.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2388 => 1042,  2379 => 1041,  2367 => 1039,  2300 => 974,  2291 => 973,  2279 => 971,  2272 => 967,  2225 => 923,  2210 => 911,  2190 => 894,  2173 => 880,  2164 => 874,  2160 => 873,  2156 => 872,  2152 => 871,  2148 => 870,  2135 => 860,  2114 => 842,  2110 => 840,  2099 => 837,  2096 => 836,  2092 => 835,  2085 => 830,  2074 => 827,  2071 => 826,  2067 => 825,  2060 => 820,  2051 => 817,  2048 => 816,  2044 => 815,  2032 => 805,  2023 => 802,  2020 => 801,  2016 => 800,  2011 => 798,  2006 => 795,  1997 => 792,  1994 => 791,  1990 => 790,  1985 => 788,  1975 => 780,  1966 => 777,  1963 => 776,  1959 => 775,  1954 => 773,  1949 => 770,  1940 => 767,  1937 => 766,  1933 => 765,  1928 => 763,  1923 => 760,  1914 => 757,  1911 => 756,  1907 => 755,  1902 => 753,  1897 => 750,  1888 => 747,  1885 => 746,  1881 => 745,  1876 => 743,  1871 => 740,  1862 => 737,  1859 => 736,  1855 => 735,  1850 => 733,  1845 => 730,  1836 => 727,  1833 => 726,  1829 => 725,  1824 => 723,  1814 => 715,  1805 => 712,  1802 => 711,  1798 => 710,  1793 => 708,  1788 => 705,  1779 => 702,  1776 => 701,  1772 => 700,  1767 => 698,  1762 => 695,  1753 => 692,  1750 => 691,  1746 => 690,  1741 => 688,  1736 => 685,  1727 => 682,  1724 => 681,  1720 => 680,  1715 => 678,  1710 => 675,  1701 => 672,  1698 => 671,  1694 => 670,  1689 => 668,  1684 => 665,  1675 => 662,  1672 => 661,  1668 => 660,  1663 => 658,  1658 => 655,  1649 => 652,  1646 => 651,  1642 => 650,  1637 => 648,  1627 => 640,  1618 => 637,  1615 => 636,  1611 => 635,  1606 => 633,  1601 => 630,  1592 => 627,  1589 => 626,  1585 => 625,  1580 => 623,  1575 => 620,  1566 => 617,  1563 => 616,  1559 => 615,  1554 => 613,  1549 => 610,  1540 => 607,  1537 => 606,  1533 => 605,  1528 => 603,  1523 => 600,  1514 => 597,  1511 => 596,  1507 => 595,  1502 => 593,  1497 => 590,  1488 => 587,  1485 => 586,  1481 => 585,  1476 => 583,  1471 => 580,  1462 => 577,  1459 => 576,  1455 => 575,  1450 => 573,  1445 => 570,  1436 => 567,  1433 => 566,  1429 => 565,  1424 => 563,  1419 => 560,  1410 => 557,  1407 => 556,  1403 => 555,  1398 => 553,  1393 => 550,  1384 => 547,  1381 => 546,  1377 => 545,  1372 => 543,  1367 => 540,  1358 => 537,  1355 => 536,  1351 => 535,  1346 => 533,  1341 => 530,  1332 => 527,  1329 => 526,  1325 => 525,  1320 => 523,  1315 => 520,  1306 => 517,  1303 => 516,  1299 => 515,  1294 => 513,  1289 => 510,  1280 => 507,  1277 => 506,  1273 => 505,  1268 => 503,  1263 => 500,  1254 => 497,  1251 => 496,  1247 => 495,  1242 => 493,  1237 => 490,  1228 => 487,  1225 => 486,  1221 => 485,  1216 => 483,  1211 => 480,  1202 => 477,  1199 => 476,  1195 => 475,  1190 => 473,  1185 => 470,  1176 => 467,  1173 => 466,  1169 => 465,  1164 => 463,  1159 => 460,  1150 => 457,  1147 => 456,  1143 => 455,  1138 => 453,  1128 => 445,  1119 => 442,  1116 => 441,  1112 => 440,  1107 => 438,  1102 => 435,  1093 => 432,  1090 => 431,  1086 => 430,  1081 => 428,  1075 => 424,  1066 => 421,  1063 => 420,  1059 => 419,  1054 => 417,  1049 => 414,  1040 => 411,  1037 => 410,  1033 => 409,  1028 => 407,  1023 => 404,  1014 => 401,  1011 => 400,  1007 => 399,  1002 => 397,  997 => 394,  988 => 391,  985 => 390,  981 => 389,  976 => 387,  966 => 379,  957 => 376,  954 => 375,  950 => 374,  945 => 372,  940 => 369,  931 => 366,  928 => 365,  924 => 364,  919 => 362,  914 => 359,  905 => 356,  902 => 355,  898 => 354,  893 => 352,  888 => 349,  879 => 346,  876 => 345,  872 => 344,  867 => 342,  862 => 339,  853 => 336,  850 => 335,  846 => 334,  841 => 332,  831 => 324,  822 => 321,  819 => 320,  815 => 319,  810 => 317,  805 => 314,  796 => 311,  793 => 310,  789 => 309,  784 => 307,  779 => 304,  770 => 301,  767 => 300,  763 => 299,  758 => 297,  753 => 294,  744 => 291,  741 => 290,  737 => 289,  732 => 287,  727 => 284,  718 => 281,  715 => 280,  711 => 279,  706 => 277,  701 => 274,  692 => 271,  689 => 270,  685 => 269,  680 => 267,  675 => 264,  666 => 261,  663 => 260,  659 => 259,  654 => 257,  649 => 254,  640 => 251,  637 => 250,  633 => 249,  628 => 247,  623 => 244,  614 => 241,  611 => 240,  607 => 239,  602 => 237,  592 => 229,  583 => 226,  580 => 225,  576 => 224,  571 => 222,  566 => 219,  557 => 216,  554 => 215,  550 => 214,  545 => 212,  535 => 204,  526 => 201,  523 => 200,  519 => 199,  514 => 197,  509 => 194,  500 => 191,  497 => 190,  493 => 189,  488 => 187,  483 => 184,  474 => 181,  471 => 180,  467 => 179,  462 => 177,  457 => 174,  448 => 171,  445 => 170,  441 => 169,  436 => 167,  431 => 164,  422 => 161,  419 => 160,  415 => 159,  410 => 157,  400 => 149,  398 => 148,  391 => 143,  382 => 140,  379 => 139,  375 => 138,  356 => 123,  354 => 122,  349 => 121,  347 => 120,  342 => 118,  336 => 115,  323 => 105,  316 => 101,  309 => 97,  302 => 93,  291 => 89,  283 => 88,  275 => 87,  265 => 84,  257 => 83,  249 => 82,  235 => 77,  224 => 73,  213 => 69,  203 => 68,  197 => 65,  186 => 61,  180 => 58,  173 => 54,  164 => 48,  153 => 44,  145 => 43,  137 => 42,  131 => 39,  124 => 35,  117 => 31,  110 => 27,  103 => 23,  96 => 19,  85 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
            </div>
        </div>
        {% form_theme form 'jquery.collection.html.twig' %}
        {{ form_start(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>{{ func.uidToName(item.client) }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>{{ item.date|date(\"d/m/Y\") }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Tipo Impianto</strong>
                            <p><small>{{ func.plantIntToName(item.tipo) }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>{{ item.kw }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>{{ item.pianiCasa }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>{{ func.heatingIntToName(item.riscaldamento) }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>{% if item.opereMurarie == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Opere Murarie </strong><br>
                            <strong>{% if item.opereMurarieIntonaco == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Intonaco </strong><br>
                            <strong>{% if item.opereMurariePietra == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Pietra</strong>
                        </div>
                        <!--<div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>{{ item.sconto }}</small></p>
                        </div>-->
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>{{ item.level }}</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>Metratura</strong>
                            <p><small>{{ item.squareMeters }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>{% if item.trifase == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Trifase </strong><br>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Circuiti</strong>
                            <p><small>{{ item.numCircuiti }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>{% if item.illumSicurezza >= 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;{{ item.illumSicurezza }}<br>
                            <strong>{% if item.lampada == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Lampada fornita </strong><br>
                        </div>
                        <div class=\"col-lg-3\">
                            <strong>SPD</strong>
                            <p><small>{% if item.spd == 1 %}SPD ad arrivo linea, Tolleranza R1{% elseif item.spd == 2 %}SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni{% endif %}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>{% if item.impAusiliari == 1 %}Campanello, citofono e videocitofono{% elseif item.impAusiliari == 2 %}Campanello, citofono e antintrusione, Controllo carichi{% elseif item.impAusiliari == 3 %}Campanello, citofono e antintrusione, Controllo carichi, Domotica{% endif %} </small></p>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-2\">
                            <strong>{% if item.campanello == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Campanello</strong><br>
                            <strong>{% if item.citVid == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Citofono</strong><br>
                            <strong>{% if item.citVid == 2 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;VideoCitofono</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>{% if item.antenna == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Predisposizione Antenna</strong><br>
                            <strong>{% if item.allarme == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Predisposizione Allarme</strong><br>
                            <strong>{% if item.illumEsterna == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Illuminazione Esterna</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Dati</strong>
                            <p><small>{{ item.numPreseDati }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Telefono</strong>
                            <p><small>{{ item.numPreseTelefono }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Sconto</strong>
                            <p><small>{{ item.sconto }} %</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Totale Preliminare</strong>
                            <p><small>{{ item.price }} €</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> {{ floor }}</h4>
                            <div class=\"btn-group float-right ml-3\">
                                {% set oldFloor = floor - 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.id, 'floor': oldFloor }) }}\">-</a>
                                {% set newFloor = floor + 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.id, 'floor': newFloor }) }}\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>
                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    {% for item in count %}
                                        <th>
                                            {{ func.room(item) }}
                                        </th>
                                    {% endfor %}
                                    <th>
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                {% set colCount = count|length + 1 %}
                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >{{ titles.0.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.1.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.2.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.3.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.4.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.5.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.6.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.7.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.8.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.9.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.10.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.11.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.12.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.13.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.14.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.15.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.16.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.17.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.18.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.19.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.20.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.21.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.22.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.23.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.24.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_{{ item }}\">
                                    </td>
                                    {% endfor %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.25.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.26.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.27.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.28.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.29.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.30.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.31.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.32.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.33.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.34.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.35.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.36.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.37.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.38.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.39.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.40.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.41.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.42.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.43.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.44.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.45.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.46.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.47.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.48.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.49.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.50.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.51.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.52.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.53.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.54.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.55.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.56.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.57.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.58.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.59.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>{{ titles.60.description }}</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_{{ item }}\" onchange=\"check({{ item }},63)\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    {% for item in 1..colCount %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_{{ item }}\" onchange=\"check({{ item }},64)\">
                                        </td>
                                    {% endfor %}
                                </tr>
                            </tbody>
                            {{ form_widget(form.submit) }}
                            <div class=\"row\">
                                <div class=\"col-9\"></div>
                                <div class=\"col-3\">
                                    <div class=\"card card-generate \">
                                        <div class=\"card-body pt-2 pb-4\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    <a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3 animsition-link\">Genera</a>
                                                </div>
                                                <div class=\"col-6\">
                                                    <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3 animsition-link\">Annulla</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ form_end(form) }}
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(document).ready( function () {
                update({{ item.id }},'pp','val1');
                update({{ item.id }},'pl','val8');
                update({{ item.id }},'c1v','val6');
                update({{ item.id }},'c2v','val41');
                for(i=0; i < {{ colCount }}; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < {{ colCount }}; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', false);
                        \$(\"#form_val64_\" + i ).prop('disabled', false);
                    }
                    },10000);
                //check();
            });

            \$('#generateBtn').click(function(e) {
                e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 65; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                }
                \$('#appbundle_expertationsadvanced_father').val({{ item.id }});
                \$('#appbundle_expertationsadvanced_fatherFloor').val(0);
                \$('#appbundle_expertationsadvanced_submit').trigger('click')
            });

            function collect(valn) {
                var arr = [];
                \$('input[id^=\"form_' + valn + '_\"]').each(function() {
                    arr.push(\$(this).val());
                });
                return arr.join(\",\");
            }

            function update(exp,field,valn){
                \$.ajax({
                    url: '/ajax/get/expData/' + exp + '/' + field,
                    success: function (data) {
                        for (var i = 0; i < {{ colCount }}; i++) {
                            var numbersArray = data.split(',');
                            \$.each(numbersArray, function(index, value) {
                                var ind = index +1;
                                \$('#form_'+ valn + '_' + ind).val(value);
                            });

                        }
                    }
                })
            }
            function calculate(field) {
                for(var i = 0; i < {{ colCount }}; i++) {
                    var ind = i +1;
                    var values = parseInt(\$('#form_val1_' + ind ).val()) + parseInt(\$('#form_val6_' + ind ).val());
                    console.log(values);
                    \$('#form_val' + field + '_' + ind ).val(values)
                }
            }
            function check(i,f) {

                var v = \$(\"#form_val62_\" + i).val(); //Let's say this is the value from PHP....
                var preVal = 0;

                \$(\"#form_val62_\" + i).val(v);

                \$(\"#form_val\" + f + \"_\" + i).on(\"change keyup keydown\", function(event) {
                    let currVal = parseInt(\$(\"#form_val\" + f + \"_\" + i).val());

                    console.log(preVal);
                    console.log(currVal);

                    // store current positions in variables
                    var start = this.selectionStart,
                        end = this.selectionEnd;

                    if (!currVal || currVal == 0) {
                        preVal = 0;
                        \$(\"#form_val62_\" + i).val(v);
                    } else if (currVal <= v) {
                        \$(\"#form_val62_\" + i).val((v - currVal) == 0 ? 0 : (v - currVal));
                        preVal = currVal;
                    } else {
                        \$(\"#form_val\" + f + \"_\" + i).val(v);
                    }

                    this.setSelectionRange(start, end);

                });
            }
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                \$('#buttons').css('left','84%');
            }
        </script>
    </div>
</div>
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"{{ asset('js/jquery.toastr.js') }}\" type=\"text/javascript\"></script>
{% endblock %}
{% block stylesheets %}
    <style>
        .form-control {

            width: 100px;
            min-width: 100px;

        }
        .table td {
            min-width: 210px;
        }
        .table td:hover {
            background-color: #F0F0EE;
        }
        .table th {
            text-align: center;
        }
        .form-control {
            border:none!important;
            width: 150px!important;
            text-align: center!important;
            background-color: transparent;
        }
        select {
            width:100%!important;
        }
        #form_client {
            max-width:85%;
        }
        .input-group label {
            font-size: 13px;
            line-height: 1;
            vertical-align: top;
        }
        .card-generate {
            position: fixed;
            bottom: 0px;
            right: 0px;
            border-top: 1px solid #CCCCCC;
            border-left: 1px solid #CCCCCC;
            border-top-left-radius: 5px;
            z-index:1;
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
        .fixed {
            top: 63px;
            right: 0px;
            left: 96%;
            background: white;
            width: 66px;
            border: 1px lightgrey solid;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .wrapper2 {
            width: 100%;
            overflow: hidden;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset(\"js/jquery.fixedheadertable.min.js\") }}\"></script>
    <script>
        \$('#scroll-r').click(function(e) {
            e.preventDefault();
            \$(\".table-2\").animate({'left':'-=300px'}).scrollLeft();
            console.log(\$(\".table-2\").width());
            \$(\"#scroll-r\").attr(\"enabled\",\"enabled\");
            console.log(\$(\".table-2\").position())

        });
        \$('#scroll-l').click(function(e) {
            e.preventDefault();
            console.log(\$(\".table-2\").position());
            if (\$(\".table-2\").position.left >= 0) {
                return;
            }
            \$(\".table-2\").animate({'left': '+=300px'}).scrollLeft()
        });
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 333) {
                \$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scrolled\")
                /*\$('.selector').fixedHeaderTable({
                    footer: false,
                    cloneHeadToFoot: false,
                    fixedColumn: false
                });*/
            } else {
                \$('#buttons').removeClass('fixed-top').removeClass('fixed');
                console.log(\"top\");
                \$('.selector').fixedHeaderTable('destroy');
            }
        });


    </script>
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
    </script>
{% endblock %}
", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
