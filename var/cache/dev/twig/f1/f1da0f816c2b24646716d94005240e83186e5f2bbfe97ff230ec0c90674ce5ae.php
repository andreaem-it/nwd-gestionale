<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_c4f0f4a885777f1f8e252d1ae96d6e2876fd31922b97df97e60885a7c97d2fed extends Twig_Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 13
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 20, $this->source); })()), "uidToSurName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 20, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->source); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 28, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->source); })()), "kw", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 40, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 43, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Opere Murarie </strong><br>
                            <strong>";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "opereMurarieIntonaco", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Intonaco </strong><br>
                            <strong>";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Pietra</strong>
                        </div>
                        <!--<div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 49, $this->source); })()), "sconto", array()), "html", null, true);
        echo "</small></p>
                        </div>-->
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->source); })()), "level", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>Metratura</strong>
                            <p><small>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->source); })()), "trifase", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Trifase </strong><br>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Circuiti</strong>
                            <p><small>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 66, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "illumSicurezza", array()) >= 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "<br>
                            <strong>";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "lampada", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Lampada fornita </strong><br>
                        </div>
                        <div class=\"col-lg-3\">
                            <strong>SPD</strong>
                            <p><small>";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 74, $this->source); })()), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea, Tolleranza R1";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 74, $this->source); })()), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni";
        }
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica";
        }
        echo " </small></p>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->source); })()), "campanello", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Campanello</strong><br>
                            <strong>";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "citVid", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Citofono</strong><br>
                            <strong>";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 85, $this->source); })()), "citVid", array()) == 2)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;VideoCitofono</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 88, $this->source); })()), "antenna", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Antenna</strong><br>
                            <strong>";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->source); })()), "allarme", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Allarme</strong><br>
                            <strong>";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), "illumEsterna", array()) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illuminazione Esterna</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Dati</strong>
                            <p><small>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 94, $this->source); })()), "numPreseDati", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Telefono</strong>
                            <p><small>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->source); })()), "numPreseTelefono", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 102, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Totale Preliminare</strong>
                            <p><small>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 106, $this->source); })()), "price", array()), "html", null, true);
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
                        <h4 class=\"card-title\">Aggiunte</h4>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-1\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-1\">
                            Ingresso Linee Enel e Telecom
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-2\">
                            Predisposizione Domotica
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-3\">
                            Impianto Satellitare
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-4\">
                            Diffusione Sonora
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-5\">
                            Sorround Soggiorno
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-6\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-6\">
                            Connettorizzazione Dati
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-7\">
                            Videosorveglianza Esterna
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-8\">
                            Predisposizione Allarme
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-9\">
                            Rilevazione Fumi
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-10\">
                            Allagamento e Gas
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-11\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-11\">
                            Motorizzazione Tapparelle
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-12\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-12\">
                            Cavi Motorizzazione Tapparelle
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-13\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-13\">
                            Centralino Telefonico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-14\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-14\">
                            Impianto Citofonico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-15\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-15\">
                            Impianto VideoCitofono
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-16\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-16\">
                            Rilevatori Luminosità
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-17\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-17\">
                            Illuminazione Esterna
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-18\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-18\">
                            Predisposizione Fotovoltaico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-19\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-19\">
                            Sonde Temperatura
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-20\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-20\">
                            Cronotermostati
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-21\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-21\">
                            Armadio Rack
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-22\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-22\">
                            B-Ticino LivingNow
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-1\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->source); })()), "opt1Enabled", array()), 'widget');
        echo "
                                            </div>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione tubazione esterna interrata per ingresso Linea telefonica. Misura ipotetica da verificare in loco.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 209, $this->source); })()), "opt1_1Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 212, $this->source); })()), "opt1_1Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 217, $this->source); })()), "opt1_2Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 220, $this->source); })()), "opt1_2Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Ingresso linea cavi impianto elettrico misura stimata in base alla posizione comunicata del contatore ENEL.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 230, $this->source); })()), "opt1_3Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 233, $this->source); })()), "opt1_3Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->source); })()), "opt1_4Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->source); })()), "opt1_4Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->source); })()), "opt2Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->source); })()), "opt2_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->source); })()), "opt2_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 278, $this->source); })()), "opt2_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 281, $this->source); })()), "opt2_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->source); })()), "opt3Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto di ricezione SATELLITARE.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->source); })()), "opt3_1Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->source); })()), "opt3_1Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 318, $this->source); })()), "opt3_2Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 321, $this->source); })()), "opt3_2Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->source); })()), "opt3_3Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 329, $this->source); })()), "opt3_3Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 334, $this->source); })()), "opt3_4Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 337, $this->source); })()), "opt3_4Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Satellitare Multiswitch centralizzato per più di 4 punti SATELLITE.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 347, $this->source); })()), "opt3_5Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 350, $this->source); })()), "opt3_5Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->source); })()), "opt3_6Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 358, $this->source); })()), "opt3_6Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 363, $this->source); })()), "opt3_7Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 366, $this->source); })()), "opt3_7Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Incremento al punto presa di servizio per presa di ricezione TV satellitare
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 376, $this->source); })()), "opt3_8Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 379, $this->source); })()), "opt3_8Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 389, $this->source); })()), "opt3_9Value", array()), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 392, $this->source); })()), "opt3_9Value", array()), 'label');
        echo "
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 409, $this->source); })()), "opt4Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione modulo comandi diffusione sonora.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 421, $this->source); })()), "opt4_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 424, $this->source); })()), "opt4_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 429, $this->source); })()), "opt4_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 432
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 432, $this->source); })()), "opt4_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 442, $this->source); })()), "opt4_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 445, $this->source); })()), "opt4_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-5\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 462, $this->source); })()), "opt5Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione modulo surround
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 474
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 474, $this->source); })()), "opt5_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 477, $this->source); })()), "opt5_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 482, $this->source); })()), "opt5_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 485, $this->source); })()), "opt5_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 495, $this->source); })()), "opt5_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 498
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 498, $this->source); })()), "opt5_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 515
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 515, $this->source); })()), "opt6Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Connettorizzazione punti trasmissione dati.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 527
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 527, $this->source); })()), "opt6_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 530, $this->source); })()), "opt6_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-7\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 547, $this->source); })()), "opt7Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione videosorveglianza
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 559, $this->source); })()), "opt7_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 562, $this->source); })()), "opt7_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 567
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 567, $this->source); })()), "opt7_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 570
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 570, $this->source); })()), "opt7_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 580
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 580, $this->source); })()), "opt7_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 583
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 583, $this->source); })()), "opt7_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 600, $this->source); })()), "opt8Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevazione allarme.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 612
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 612, $this->source); })()), "opt8_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 615, $this->source); })()), "opt8_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 620
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 620, $this->source); })()), "opt8_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 623
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 623, $this->source); })()), "opt8_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 633
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 633, $this->source); })()), "opt8_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 636
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 636, $this->source); })()), "opt8_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-9\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 653
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 653, $this->source); })()), "opt9Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevazione fumi
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 665
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 665, $this->source); })()), "opt9_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 668
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 668, $this->source); })()), "opt9_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 673
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 673, $this->source); })()), "opt9_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 676
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 676, $this->source); })()), "opt9_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 686
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 686, $this->source); })()), "opt9_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 689
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 689, $this->source); })()), "opt9_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-10\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            ";
        // line 706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 706, $this->source); })()), "opt10Enabled", array()), 'widget');
        echo "
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione sonde allagamento.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 718, $this->source); })()), "opt10_1Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 721
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 721, $this->source); })()), "opt10_1Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 726, $this->source); })()), "opt10_2Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 729
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 729, $this->source); })()), "opt10_2Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione sonde allagamento.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 739, $this->source); })()), "opt10_3Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 742
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 742, $this->source); })()), "opt10_3Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 747
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 747, $this->source); })()), "opt10_4Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 750, $this->source); })()), "opt10_4Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevatori gas
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 760
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 760, $this->source); })()), "opt10_5Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 763
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 763, $this->source); })()), "opt10_5Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 768
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 768, $this->source); })()), "opt10_6Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 771
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 771, $this->source); })()), "opt10_6Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione elettrovalvola GAS.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 781
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 781, $this->source); })()), "opt10_7Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 784
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 784, $this->source); })()), "opt10_7Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 789
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 789, $this->source); })()), "opt10_8Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 792
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 792, $this->source); })()), "opt10_8Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 802
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 802, $this->source); })()), "opt10_9Value", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 805
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 805, $this->source); })()), "opt10_9Value", array()), 'label');
        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-11\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            UNDICESIMA AGGIUNTA POSSIBILE: oneri di predisposizione per motorizzazione di tapparelle, persiane, zanzariere, tende e/o oscuranti.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DODICESIMA AGGIUNTA POSSIBILE: oneri per passaggio cavi e collegamento di motorizzazioni per tapparelle, persiane, zanzariere, tende e/o oscuranti.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-13\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            TREDICESIMA AGGIUNTA POSSIBILE: centralino telefonico con 2 linee esterne e 8 linee interne.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-14\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            QUATTORDICESIMA AGGIUNTA POSSIBILE: impianto citofonico (solo audio)
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-15\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            QUINDICESIMA AGGIUNTA POSSIBILE: impianto videocitofonico a colori in esecuzione a muro
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-16\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            SEDICESIMA AGGIUNTA POSSIBILE: predisposizioni per rilevatori  luminosità.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-17\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIASSETTESIMA AGGIUNTA POSSIBILE: esempio di soluzione per la  predisposizione di  illuminazione esterna con 20 punti luce.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-18\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIOTTESIMA AGGIUNTA POSSIBILE: predisposizione per impianto fotovoltaico
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-19\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIANNOVESIMA AGGIUNTA POSSIBILE: punti presa di servizio per le sonde di temperatura di ogni ambiente, tranne le due conteggiate nella proposta C.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-20\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTESIMA AGGIUNTA POSSIBILE: cronotermostati ambiente
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-21\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTUNESIMA AGGIUNTA POSSIBILE: armadio rack
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-22\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTUNESIMA AGGIUNTA POSSIBILE: Placche e frutti marca BTicino serie Living-Now. Le esatte quantità verranno conteggiate a fine lavori.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-1\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 904
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 904, $this->source); })()), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 907
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 907, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 909
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 909, $this->source); })()) - 1);
        // line 910
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 910, $this->source); })()), "pid", array()), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 910, $this->source); })()))), "html", null, true);
        echo "\">-</a>
                                ";
        // line 911
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 911, $this->source); })()) + 1);
        // line 912
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 912, $this->source); })()), "pid", array()), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 912, $this->source); })()))), "html", null, true);
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
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 927, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 928
            echo "                                        <th>
                                            ";
            // line 929
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 929, $this->source); })()), "room", array(0 => $context["item"]), "method"), "html", null, true);
            echo "
                                            ";
            // line 931
            echo "                                        </th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "                                    <th>
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                ";
        // line 938
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 938, $this->source); })())) + 1);
        // line 939
        echo "                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >";
        // line 947
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 947, $this->source); })()), 0, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 949
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 949, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 950
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 951
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 954
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 957
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 957, $this->source); })()), 1, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 959
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 959, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 960
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 961
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 967
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 967, $this->source); })()), 2, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 969
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 969, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 970
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 971
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 974
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 977
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 977, $this->source); })()), 3, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 979
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 979, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 980
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 981
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 987
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 987, $this->source); })()), 4, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 989
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 989, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 990
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 991
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 994
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1002
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1002, $this->source); })()), 5, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1004
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1004, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1005
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 1006
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1009
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1012
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1012, $this->source); })()), 6, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1014
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1014, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1015
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 1016
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1019
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1027
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1027, $this->source); })()), 7, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1029
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1029, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1030
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 1031
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1034
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1037
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1037, $this->source); })()), 8, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1039, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1040
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 1041
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1044
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1047
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1047, $this->source); })()), 9, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1049
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1049, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1050
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 1051
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1057
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1057, $this->source); })()), 10, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1059
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1059, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1060
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 1061
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1064
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1067
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1067, $this->source); })()), 11, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1069, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1070
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 1071
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1074
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1077
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1077, $this->source); })()), 12, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1079
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1079, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1080
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 1081
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1087
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1087, $this->source); })()), 13, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1089
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1089, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1090
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 1091
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1094
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1097
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1097, $this->source); })()), 14, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1099
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1099, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1100
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 1101
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1104
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1107, $this->source); })()), 15, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1109, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1110
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 1111
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1114
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1122, $this->source); })()), 16, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1124, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1125
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 1126
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1129
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1132, $this->source); })()), 17, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1134, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1135
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 1136
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1139
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1142, $this->source); })()), 18, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1144, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1145
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 1146
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1149
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1152, $this->source); })()), 19, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1154, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1155
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 1156
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1159
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1162, $this->source); })()), 20, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1164, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1165
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 1166
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1169
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1177, $this->source); })()), 21, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1179, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1180
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 1181
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1184
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1187, $this->source); })()), 22, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1189, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1190
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 1191
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1194
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1197, $this->source); })()), 23, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1199, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1200
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 1201
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1204
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1207, $this->source); })()), 24, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1209, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1210
            echo "                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 1211
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                    </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1214
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1218, $this->source); })()), 25, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1220, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1221
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 1222
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1225
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1228, $this->source); })()), 26, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1230, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1231
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 1232
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1235
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1243, $this->source); })()), 27, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1245, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1246
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 1247
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1250
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1253, $this->source); })()), 28, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1255, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1256
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 1257
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1260
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1263, $this->source); })()), 29, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1265, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1266
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 1267
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1270
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1273, $this->source); })()), 30, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1275, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1276
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 1277
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1280
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1283, $this->source); })()), 31, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1285, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1286
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 1287
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1290
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1293, $this->source); })()), 32, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1295, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1296
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 1297
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1300
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1303, $this->source); })()), 33, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1305, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1306
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 1307
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1310
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1313, $this->source); })()), 34, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1315, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1316
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 1317
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1320
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1323, $this->source); })()), 35, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1325, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1326
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 1327
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1330
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1333, $this->source); })()), 36, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1335, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1336
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 1337
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1340
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1343, $this->source); })()), 37, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1345, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1346
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 1347
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1350
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1353, $this->source); })()), 38, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1355, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1356
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 1357
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1360
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1363, $this->source); })()), 39, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1365, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1366
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 1367
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1370
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1373, $this->source); })()), 40, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1375, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1376
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 1377
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1380
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1383, $this->source); })()), 41, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1385, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1386
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 1387
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1390
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1393, $this->source); })()), 42, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1395, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1396
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 1397
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1400
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1403
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1403, $this->source); })()), 43, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1405, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1406
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 1407
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1410
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1413
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1413, $this->source); })()), 44, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1415, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1416
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 1417
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1420
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1423, $this->source); })()), 45, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1425, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1426
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 1427
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1430
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1438
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1438, $this->source); })()), 46, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1440, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1441
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 1442
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1445
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1448
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1448, $this->source); })()), 47, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1450, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1451
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 1452
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1455
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1458, $this->source); })()), 48, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1460, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1461
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 1462
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1465
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1468
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1468, $this->source); })()), 49, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1470, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1471
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 1472
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1475
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1478
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1478, $this->source); })()), 50, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1480
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1480, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1481
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 1482
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1485
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1488, $this->source); })()), 51, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1490, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1491
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 1492
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1495
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1498
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1498, $this->source); })()), 52, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1500, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1501
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 1502
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1505
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1513
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1513, $this->source); })()), 53, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1515
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1515, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1516
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 1517
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1520
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1523
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1523, $this->source); })()), 54, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1525, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1526
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 1527
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1530
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1533, $this->source); })()), 55, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1535, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1536
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 1537
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1540
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1543, $this->source); })()), 56, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1545, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1546
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 1547
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1550
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1553
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1553, $this->source); })()), 57, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1555, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1556
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 1557
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1560
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1563
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1563, $this->source); })()), 58, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1565, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1566
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 1567
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1570
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1578
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1578, $this->source); })()), 59, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1580, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1581
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 1582
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1585
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1588
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1588, $this->source); })()), 60, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1590, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1591
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 1592
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1595
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
        // line 1605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1605, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1606
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 1607
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1610
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 1615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1615, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1616
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 1617
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
        // line 1620
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 1625
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1625, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1626
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 1627
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
        // line 1630
        echo "                                </tr>
                            </tbody>
                            ";
        // line 1632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1632, $this->source); })()), "submit", array()), 'widget');
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
        // line 1650
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1650, $this->source); })()), 'form_end');
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
        // line 1660
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1660, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 1661
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1661, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 1662
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1662, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 1663
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1663, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 1664
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1664, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 1670
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1670, $this->source); })()), "html", null, true);
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
        // line 1684
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1684, $this->source); })()), "id", array()), "html", null, true);
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
        // line 1701
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1701, $this->source); })()), "html", null, true);
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
        // line 1713
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1713, $this->source); })()), "html", null, true);
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
        // line 1757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 1761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1763
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1764
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
            /*border:none!important;*/
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
        .collapsed {
            color: #308ee0;
            background-color: transparent;
            background-image: none;
            border: 1px solid #308ee0!important;
        }
        .custom-control-label::before,
        .custom-control-label::after {
            top: 0rem;
            width: 1.5rem;
            height: 1.5rem;
        }
        .custom-control-label {
            font-size: 16px!important;
        }
        .custom-form-control {
            float: left!important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 1845
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1847
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1848
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
            \$('button[data-toggle=\"collapse\"]').click(function(){
                //log the id of the target
                \$(this).switchClass('btn-outline-primary','btn-primary');
            });
        });
        function checkedAddon(id) {
            \$('.collapse-' + id).switchClass('btn-primary', 'btn-success');
        }
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
        return array (  3469 => 1848,  3460 => 1847,  3448 => 1845,  3365 => 1764,  3356 => 1763,  3344 => 1761,  3337 => 1757,  3290 => 1713,  3275 => 1701,  3255 => 1684,  3238 => 1670,  3229 => 1664,  3225 => 1663,  3221 => 1662,  3217 => 1661,  3213 => 1660,  3200 => 1650,  3179 => 1632,  3175 => 1630,  3164 => 1627,  3161 => 1626,  3157 => 1625,  3150 => 1620,  3139 => 1617,  3136 => 1616,  3132 => 1615,  3125 => 1610,  3116 => 1607,  3113 => 1606,  3109 => 1605,  3097 => 1595,  3088 => 1592,  3085 => 1591,  3081 => 1590,  3076 => 1588,  3071 => 1585,  3062 => 1582,  3059 => 1581,  3055 => 1580,  3050 => 1578,  3040 => 1570,  3031 => 1567,  3028 => 1566,  3024 => 1565,  3019 => 1563,  3014 => 1560,  3005 => 1557,  3002 => 1556,  2998 => 1555,  2993 => 1553,  2988 => 1550,  2979 => 1547,  2976 => 1546,  2972 => 1545,  2967 => 1543,  2962 => 1540,  2953 => 1537,  2950 => 1536,  2946 => 1535,  2941 => 1533,  2936 => 1530,  2927 => 1527,  2924 => 1526,  2920 => 1525,  2915 => 1523,  2910 => 1520,  2901 => 1517,  2898 => 1516,  2894 => 1515,  2889 => 1513,  2879 => 1505,  2870 => 1502,  2867 => 1501,  2863 => 1500,  2858 => 1498,  2853 => 1495,  2844 => 1492,  2841 => 1491,  2837 => 1490,  2832 => 1488,  2827 => 1485,  2818 => 1482,  2815 => 1481,  2811 => 1480,  2806 => 1478,  2801 => 1475,  2792 => 1472,  2789 => 1471,  2785 => 1470,  2780 => 1468,  2775 => 1465,  2766 => 1462,  2763 => 1461,  2759 => 1460,  2754 => 1458,  2749 => 1455,  2740 => 1452,  2737 => 1451,  2733 => 1450,  2728 => 1448,  2723 => 1445,  2714 => 1442,  2711 => 1441,  2707 => 1440,  2702 => 1438,  2692 => 1430,  2683 => 1427,  2680 => 1426,  2676 => 1425,  2671 => 1423,  2666 => 1420,  2657 => 1417,  2654 => 1416,  2650 => 1415,  2645 => 1413,  2640 => 1410,  2631 => 1407,  2628 => 1406,  2624 => 1405,  2619 => 1403,  2614 => 1400,  2605 => 1397,  2602 => 1396,  2598 => 1395,  2593 => 1393,  2588 => 1390,  2579 => 1387,  2576 => 1386,  2572 => 1385,  2567 => 1383,  2562 => 1380,  2553 => 1377,  2550 => 1376,  2546 => 1375,  2541 => 1373,  2536 => 1370,  2527 => 1367,  2524 => 1366,  2520 => 1365,  2515 => 1363,  2510 => 1360,  2501 => 1357,  2498 => 1356,  2494 => 1355,  2489 => 1353,  2484 => 1350,  2475 => 1347,  2472 => 1346,  2468 => 1345,  2463 => 1343,  2458 => 1340,  2449 => 1337,  2446 => 1336,  2442 => 1335,  2437 => 1333,  2432 => 1330,  2423 => 1327,  2420 => 1326,  2416 => 1325,  2411 => 1323,  2406 => 1320,  2397 => 1317,  2394 => 1316,  2390 => 1315,  2385 => 1313,  2380 => 1310,  2371 => 1307,  2368 => 1306,  2364 => 1305,  2359 => 1303,  2354 => 1300,  2345 => 1297,  2342 => 1296,  2338 => 1295,  2333 => 1293,  2328 => 1290,  2319 => 1287,  2316 => 1286,  2312 => 1285,  2307 => 1283,  2302 => 1280,  2293 => 1277,  2290 => 1276,  2286 => 1275,  2281 => 1273,  2276 => 1270,  2267 => 1267,  2264 => 1266,  2260 => 1265,  2255 => 1263,  2250 => 1260,  2241 => 1257,  2238 => 1256,  2234 => 1255,  2229 => 1253,  2224 => 1250,  2215 => 1247,  2212 => 1246,  2208 => 1245,  2203 => 1243,  2193 => 1235,  2184 => 1232,  2181 => 1231,  2177 => 1230,  2172 => 1228,  2167 => 1225,  2158 => 1222,  2155 => 1221,  2151 => 1220,  2146 => 1218,  2140 => 1214,  2131 => 1211,  2128 => 1210,  2124 => 1209,  2119 => 1207,  2114 => 1204,  2105 => 1201,  2102 => 1200,  2098 => 1199,  2093 => 1197,  2088 => 1194,  2079 => 1191,  2076 => 1190,  2072 => 1189,  2067 => 1187,  2062 => 1184,  2053 => 1181,  2050 => 1180,  2046 => 1179,  2041 => 1177,  2031 => 1169,  2022 => 1166,  2019 => 1165,  2015 => 1164,  2010 => 1162,  2005 => 1159,  1996 => 1156,  1993 => 1155,  1989 => 1154,  1984 => 1152,  1979 => 1149,  1970 => 1146,  1967 => 1145,  1963 => 1144,  1958 => 1142,  1953 => 1139,  1944 => 1136,  1941 => 1135,  1937 => 1134,  1932 => 1132,  1927 => 1129,  1918 => 1126,  1915 => 1125,  1911 => 1124,  1906 => 1122,  1896 => 1114,  1887 => 1111,  1884 => 1110,  1880 => 1109,  1875 => 1107,  1870 => 1104,  1861 => 1101,  1858 => 1100,  1854 => 1099,  1849 => 1097,  1844 => 1094,  1835 => 1091,  1832 => 1090,  1828 => 1089,  1823 => 1087,  1818 => 1084,  1809 => 1081,  1806 => 1080,  1802 => 1079,  1797 => 1077,  1792 => 1074,  1783 => 1071,  1780 => 1070,  1776 => 1069,  1771 => 1067,  1766 => 1064,  1757 => 1061,  1754 => 1060,  1750 => 1059,  1745 => 1057,  1740 => 1054,  1731 => 1051,  1728 => 1050,  1724 => 1049,  1719 => 1047,  1714 => 1044,  1705 => 1041,  1702 => 1040,  1698 => 1039,  1693 => 1037,  1688 => 1034,  1679 => 1031,  1676 => 1030,  1672 => 1029,  1667 => 1027,  1657 => 1019,  1648 => 1016,  1645 => 1015,  1641 => 1014,  1636 => 1012,  1631 => 1009,  1622 => 1006,  1619 => 1005,  1615 => 1004,  1610 => 1002,  1600 => 994,  1591 => 991,  1588 => 990,  1584 => 989,  1579 => 987,  1574 => 984,  1565 => 981,  1562 => 980,  1558 => 979,  1553 => 977,  1548 => 974,  1539 => 971,  1536 => 970,  1532 => 969,  1527 => 967,  1522 => 964,  1513 => 961,  1510 => 960,  1506 => 959,  1501 => 957,  1496 => 954,  1487 => 951,  1484 => 950,  1480 => 949,  1475 => 947,  1465 => 939,  1463 => 938,  1456 => 933,  1449 => 931,  1445 => 929,  1442 => 928,  1438 => 927,  1419 => 912,  1417 => 911,  1412 => 910,  1410 => 909,  1405 => 907,  1399 => 904,  1297 => 805,  1291 => 802,  1278 => 792,  1272 => 789,  1264 => 784,  1258 => 781,  1245 => 771,  1239 => 768,  1231 => 763,  1225 => 760,  1212 => 750,  1206 => 747,  1198 => 742,  1192 => 739,  1179 => 729,  1173 => 726,  1165 => 721,  1159 => 718,  1144 => 706,  1124 => 689,  1118 => 686,  1105 => 676,  1099 => 673,  1091 => 668,  1085 => 665,  1070 => 653,  1050 => 636,  1044 => 633,  1031 => 623,  1025 => 620,  1017 => 615,  1011 => 612,  996 => 600,  976 => 583,  970 => 580,  957 => 570,  951 => 567,  943 => 562,  937 => 559,  922 => 547,  902 => 530,  896 => 527,  881 => 515,  861 => 498,  855 => 495,  842 => 485,  836 => 482,  828 => 477,  822 => 474,  807 => 462,  787 => 445,  781 => 442,  768 => 432,  762 => 429,  754 => 424,  748 => 421,  733 => 409,  713 => 392,  707 => 389,  694 => 379,  688 => 376,  675 => 366,  669 => 363,  661 => 358,  655 => 355,  647 => 350,  641 => 347,  628 => 337,  622 => 334,  614 => 329,  608 => 326,  600 => 321,  594 => 318,  586 => 313,  580 => 310,  565 => 298,  545 => 281,  539 => 278,  531 => 273,  525 => 270,  510 => 258,  490 => 241,  484 => 238,  476 => 233,  470 => 230,  457 => 220,  451 => 217,  443 => 212,  437 => 209,  422 => 197,  328 => 106,  321 => 102,  314 => 98,  307 => 94,  296 => 90,  288 => 89,  280 => 88,  270 => 85,  262 => 84,  254 => 83,  240 => 78,  229 => 74,  218 => 70,  208 => 69,  202 => 66,  191 => 62,  185 => 59,  178 => 55,  169 => 49,  158 => 45,  150 => 44,  142 => 43,  136 => 40,  129 => 36,  122 => 32,  115 => 28,  108 => 24,  99 => 20,  88 => 13,  85 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
        {% form_theme form 'bootstrap_4_layout.html.twig' %}
        {{ form_start(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>{{ func.uidToSurName(item.client) }} {{ func.uidToName(item.client) }}</small></p>
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
                        <h4 class=\"card-title\">Aggiunte</h4>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-1\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-1\">
                            Ingresso Linee Enel e Telecom
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-2\">
                            Predisposizione Domotica
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-3\">
                            Impianto Satellitare
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-4\">
                            Diffusione Sonora
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-5\">
                            Sorround Soggiorno
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-6\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-6\">
                            Connettorizzazione Dati
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-7\">
                            Videosorveglianza Esterna
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-8\">
                            Predisposizione Allarme
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-9\">
                            Rilevazione Fumi
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-10\">
                            Allagamento e Gas
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-11\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-11\">
                            Motorizzazione Tapparelle
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-12\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-12\">
                            Cavi Motorizzazione Tapparelle
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-13\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-13\">
                            Centralino Telefonico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-14\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-14\">
                            Impianto Citofonico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-15\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-15\">
                            Impianto VideoCitofono
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-16\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-16\">
                            Rilevatori Luminosità
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-17\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-17\">
                            Illuminazione Esterna
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-18\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-18\">
                            Predisposizione Fotovoltaico
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-19\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-19\">
                            Sonde Temperatura
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-20\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-20\">
                            Cronotermostati
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-21\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-21\">
                            Armadio Rack
                        </a>
                        <a class=\"btn btn-primary ml-1 mb-2 collapsed\" data-toggle=\"collapse\" href=\"#collapse-22\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-22\">
                            B-Ticino LivingNow
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-1\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt1Enabled) }}
                                            </div>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione tubazione esterna interrata per ingresso Linea telefonica. Misura ipotetica da verificare in loco.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt1_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt1_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt1_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt1_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Ingresso linea cavi impianto elettrico misura stimata in base alla posizione comunicata del contatore ENEL.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt1_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt1_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt1_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt1_4Value) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt2Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt2_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt2_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt2_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt2_2Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt3Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto di ricezione SATELLITARE.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_4Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Satellitare Multiswitch centralizzato per più di 4 punti SATELLITE.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_5Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_5Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_6Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_7Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_7Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Incremento al punto presa di servizio per presa di ricezione TV satellitare
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_8Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_8Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt3_9Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt3_9Value) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt4Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione modulo comandi diffusione sonora.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt4_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt4_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt4_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt4_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt4_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt4_3Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-5\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt5Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione modulo surround
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt5_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt5_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt5_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt5_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt5_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt5_3Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt6Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Connettorizzazione punti trasmissione dati.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt6_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt6_1Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-7\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt7Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione videosorveglianza
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt7_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt7_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt7_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt7_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt7_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt7_3Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt8Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevazione allarme.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt8_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt8_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt8_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt8_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt8_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt8_3Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-9\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt9Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevazione fumi
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt9_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt9_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt9_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt9_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt9_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt9_3Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-10\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <div class=\"custom-control custom-checkbox\">
                                            {{ form_widget(form.opt10Enabled) }}
                                        </div>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione sonde allagamento.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_1Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_1Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_2Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_2Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione sonde allagamento.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_3Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_3Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_4Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_4Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione rilevatori gas
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_5Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_5Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_6Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_6Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            Predisposizione elettrovalvola GAS.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_7Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_7Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_8Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_8Value) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\">
                                            MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            {{ form_widget(form.opt10_9Value) }}
                                        </td>
                                        <td>
                                            {{ form_label(form.opt10_9Value) }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-11\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            UNDICESIMA AGGIUNTA POSSIBILE: oneri di predisposizione per motorizzazione di tapparelle, persiane, zanzariere, tende e/o oscuranti.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DODICESIMA AGGIUNTA POSSIBILE: oneri per passaggio cavi e collegamento di motorizzazioni per tapparelle, persiane, zanzariere, tende e/o oscuranti.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-13\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            TREDICESIMA AGGIUNTA POSSIBILE: centralino telefonico con 2 linee esterne e 8 linee interne.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-14\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            QUATTORDICESIMA AGGIUNTA POSSIBILE: impianto citofonico (solo audio)
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-15\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            QUINDICESIMA AGGIUNTA POSSIBILE: impianto videocitofonico a colori in esecuzione a muro
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-16\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            SEDICESIMA AGGIUNTA POSSIBILE: predisposizioni per rilevatori  luminosità.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-17\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIASSETTESIMA AGGIUNTA POSSIBILE: esempio di soluzione per la  predisposizione di  illuminazione esterna con 20 punti luce.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-18\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIOTTESIMA AGGIUNTA POSSIBILE: predisposizione per impianto fotovoltaico
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-19\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            DICIANNOVESIMA AGGIUNTA POSSIBILE: punti presa di servizio per le sonde di temperatura di ogni ambiente, tranne le due conteggiate nella proposta C.
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-20\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTESIMA AGGIUNTA POSSIBILE: cronotermostati ambiente
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-21\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTUNESIMA AGGIUNTA POSSIBILE: armadio rack
                        </div>
                    </div>
                </div>
                <div class=\"collapse mt-1 mb-2\" id=\"collapse-22\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            VENTUNESIMA AGGIUNTA POSSIBILE: Placche e frutti marca BTicino serie Living-Now. Le esatte quantità verranno conteggiate a fine lavori.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-1\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> {{ floor }}</h4>
                            <div class=\"btn-group float-right ml-3\">
                                {% set oldFloor = floor - 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.pid, 'floor': oldFloor }) }}\">-</a>
                                {% set newFloor = floor + 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.pid, 'floor': newFloor }) }}\">+</a>
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
                                            {#{{ item.name }}#}
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
            /*border:none!important;*/
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
        .collapsed {
            color: #308ee0;
            background-color: transparent;
            background-image: none;
            border: 1px solid #308ee0!important;
        }
        .custom-control-label::before,
        .custom-control-label::after {
            top: 0rem;
            width: 1.5rem;
            height: 1.5rem;
        }
        .custom-control-label {
            font-size: 16px!important;
        }
        .custom-form-control {
            float: left!important;
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
            \$('button[data-toggle=\"collapse\"]').click(function(){
                //log the id of the target
                \$(this).switchClass('btn-outline-primary','btn-primary');
            });
        });
        function checkedAddon(id) {
            \$('.collapse-' + id).switchClass('btn-primary', 'btn-success');
        }
    </script>
{% endblock %}
", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
