<?php

/* expertations/edit.advanced.html.twig */
class __TwigTemplate_dc1eaa33b2f8da771982860668153274f9febd134591ec186efc1f676826beb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/edit.advanced.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/edit.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/edit.advanced.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
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
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
                </div>
            </div>
            ";
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), [0 => "jquery.collection.html.twig"], true);
        // line 12
        echo "            ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 13
        echo "            ";
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 20, $this->source); })()), "uidToSurName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 20, $this->source); })()), "uidToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Data Generazione</strong>
                                <p><small>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->source); })()), "date", []), "d/m/Y"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Tipo Impianto</strong>
                                <p><small>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 28, $this->source); })()), "plantIntToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->source); })()), "tipo", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>Kw Enel</strong>
                                <p><small>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->source); })()), "kw", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>Piani</strong>
                                <p><small>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Riscaldamento</strong>
                                <p><small>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 40, $this->source); })()), "heatingIntToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), "riscaldamento", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 43, $this->source); })()), "opereMurarie", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Opere Murarie </strong><br>
                                <strong>";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "opereMurarieIntonaco", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Intonaco </strong><br>
                                <strong>";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), "opereMurariePietra", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 49, $this->source); })()), "sconto", []), "html", null, true);
        echo "</small></p>
                        </div>-->
                        </div>
                        <div class=\"row mt-2\">
                            <div class=\"col-lg-1\">
                                <strong>Livello </strong>
                                <p><small>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->source); })()), "level", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1\">
                                <strong>Metratura</strong>
                                <p><small>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->source); })()), "squareMeters", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->source); })()), "trifase", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 66, $this->source); })()), "numCircuiti", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "illumSicurezza", []) >= 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "illumSicurezza", []), "html", null, true);
        echo "<br>
                                <strong>";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "lampada", []) == 1)) {
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 74, $this->source); })()), "spd", []) == 1)) {
            echo "SPD ad arrivo linea, Tolleranza R1";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 74, $this->source); })()), "spd", []) == 2)) {
            echo "SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni";
        }
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Imp. Ausiliari</strong>
                                <p><small>";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", []) == 1)) {
            echo "Campanello, citofono e videocitofono";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", []) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "impAusiliari", []) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica";
        }
        echo " </small></p>
                            </div>
                        </div>
                        <div class=\"row mt-2\">
                            <div class=\"col-lg-2\">
                                <strong>";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->source); })()), "campanello", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Campanello</strong><br>
                                <strong>";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "citVid", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Citofono</strong><br>
                                <strong>";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 85, $this->source); })()), "citVid", []) == 2)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;VideoCitofono</strong><br>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 88, $this->source); })()), "antenna", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Antenna</strong><br>
                                <strong>";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->source); })()), "allarme", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Allarme</strong><br>
                                <strong>";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), "illumEsterna", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 94, $this->source); })()), "numPreseDati", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Prese Telefono</strong>
                                <p><small>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->source); })()), "numPreseTelefono", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Sconto</strong>
                                <p><small>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 102, $this->source); })()), "sconto", []), "html", null, true);
        echo " %</small></p>
                            </div>
                            <div class=\"col-lg-2\">

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
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
        echo "
                            <div class=\"wrapper1\" style=\"height: 30px;\">
                                ";
        // line 117
        $context["floor"] = 0;
        // line 118
        echo "                                <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 121
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 121, $this->source); })()) - 1);
        // line 122
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 122, $this->source); })()), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 122, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 123
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 123, $this->source); })()) + 1);
        // line 124
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->source); })()), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 124, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                            </div>
                            ";
        // line 133
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 133, $this->source); })())) + 1);
        // line 134
        echo "
                            <div class=\"wrapper2\">
                                <div class=\"row\">
                                    <div class=\"col-3 pr-0\">
                                        <table class=\"table-1 table table-bordered \">
                                            <th class=\"firstHead\">TIPOLOGIA</th>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 141
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 141, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    PUNTI PRESA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong >";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 147, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 152, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 157, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 162, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 167, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 171
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 171, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    PUNTI COMANDO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 177, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 182, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 186
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 186, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 192, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 197, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 202, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 207, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 212, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 217, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 222, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 227, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 232, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 236
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 236, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    RISCALDAMENTO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 242, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 247, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 252, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 257, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 262, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 266
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 266, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    QUADRO ELETTRICO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 272, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 277, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 282, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 287, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 292, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 296
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 296, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    SERVIZI PREDISPOSIZIONE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 302, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 307, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 312, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 317
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 317, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 322, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 327
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 327, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 332, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 337, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 342, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 347, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 352, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 357, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 362
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 362, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 367, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 372, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 377, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 382
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 382, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 387, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 392
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 392, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 397, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 401
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 401, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 407, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 412
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 412, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 417, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 422
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 422, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 427
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 427, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 432
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 432, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 437, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 441
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 441, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    PREDISPOSIZIONE AUTOMATISMI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 447, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 452
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 452, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 457
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 457, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 462, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 467
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 467, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 472
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 472, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 476
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 476, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    ASPIRAZIONE CENTRALIZZATA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 482
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 482, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 487
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 487, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 491
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 491, $this->source); })()) + 2), "html", null, true);
        echo "\">
                                                    RESOCONTO PLACCHE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 503</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 505</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 506</strong>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <style>
                                        .tableWide-wrapper {
                                            overflow-x: auto;
                                            border-right: 2px solid #797979;
                                            box-sizing: border-box;
                                            width: 100%;
                                        }

                                        .tableScrollTop {
                                            overflow-x: scroll;
                                            box-sizing: border-box;
                                            margin: 0;
                                            height:0px;
                                            width: 100%;
                                        }

                                        .tableWide {
                                            width: 1500px;
                                            table-layout: fixed;
                                            margin-top: 0 !important;
                                        }
                                    </style>
                                    <script>
                                        \$(function(){ 'use strict';
                                            \$(\".tableScrollTop\").scroll(function() {
                                                \$(\".tableWide-wrapper\").scrollLeft(\$(\".tableScrollTop\").scrollLeft());
                                            });
                                            \$(\".tableWide-wrapper\").scroll(function() {
                                                \$(\".tableScrollTop\").scrollLeft(\$(\".tableWide-wrapper\").scrollLeft());
                                            });
                                        });
                                        \$(document).ready(function(){
                                            \$('#scrollMaster').width(\$('#mainTable').width());
                                        })
                                    </script>

                                    <div class=\"col-9 pl-0\" style=\"overflow:auto;\">
                                        <div class=\"tableScrollTop\"><div id=\"scrollMaster\" style=\"width:2000px; height:20px;\"></div></div>

                                        <div id=\"topTable\" class=\"tableWide-wrapper\" tabindex=\"0\">
                                                <table class=\"table table-bordered\">
                                                    <thead>
                                                        <tr>
                                                            ";
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 556, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 557
            echo "                                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        echo "                                                            <th class=\"itemHead\">
                                                                Sistemi
                                                            </th>
                                                            <th class=\"itemHead\">
                                                                TOTALI
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        <div class=\"tableWide-wrapper\" tabindex=\"0\">
                                                <table id=\"mainTable\" class=\"table table-bordered\">
                                                    <tbody>
                                                <tr id=\"firstItem\">
                                                    <td class=\"row-title\" colspan=\"";
        // line 573
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 573, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>

                                                <tr>
                                                    ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 577, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 578
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 579
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 579, $this->source); })())), "html", null, true);
            echo ",1)\" id=\"form_val1_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val1_total\"><strong>0</strong></i>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 588, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 589
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 590
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 590, $this->source); })())), "html", null, true);
            echo ",2)\" id=\"form_val2_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val2_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 598, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 599
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 600
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 600, $this->source); })())), "html", null, true);
            echo ",3)\" id=\"form_val3_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val3_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    ";
        // line 609
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 609, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 610
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 611
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 611, $this->source); })())), "html", null, true);
            echo ",4)\" id=\"form_val4_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val4_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 619, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 620
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 621
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 621, $this->source); })())), "html", null, true);
            echo ",5)\" id=\"form_val5_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 624
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val5_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 629
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 629, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 632
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 632, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 633
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 634
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 634, $this->source); })())), "html", null, true);
            echo ",6)\" id=\"form_val6_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val6_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 642
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 642, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 643
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 644
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 644, $this->source); })())), "html", null, true);
            echo ",7)\" id=\"form_val7_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 647
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val7_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 652
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 652, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 655, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 656
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 657
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 657, $this->source); })())), "html", null, true);
            echo ",8)\" id=\"form_val8_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 660
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val8_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 665
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 665, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 666
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 667
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 667, $this->source); })())), "html", null, true);
            echo ",9)\" id=\"form_val9_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val9_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 675, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 676
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 677
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 677, $this->source); })())), "html", null, true);
            echo ",10)\" id=\"form_val10_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 680
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val10_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 685, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 686
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 687
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 687, $this->source); })())), "html", null, true);
            echo ",11)\" id=\"form_val11_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val11_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 695
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 695, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 696
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 697
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 697, $this->source); })())), "html", null, true);
            echo ",12)\" id=\"form_val12_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val12_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 706, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 707
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 708
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 708, $this->source); })())), "html", null, true);
            echo ",13)\" id=\"form_val13_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 711
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val13_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 716, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 717
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 718
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 718, $this->source); })())), "html", null, true);
            echo ",14)\" id=\"form_val14_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 721
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val14_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 726, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 727
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 728
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 728, $this->source); })())), "html", null, true);
            echo ",15)\" id=\"form_val15_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val15_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 736
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 736, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 737
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 738
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 738, $this->source); })())), "html", null, true);
            echo ",16)\" id=\"form_val16_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val16_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 746
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 746, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 749, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 750
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 751
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 751, $this->source); })())), "html", null, true);
            echo ",17)\" id=\"form_val17_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val17_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 759, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 760
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 761
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 761, $this->source); })())), "html", null, true);
            echo ",18)\" id=\"form_val18_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val18_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 769, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 770
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 771
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 771, $this->source); })())), "html", null, true);
            echo ",19)\" id=\"form_val19_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val19_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 779
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 779, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 780
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 781
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 781, $this->source); })())), "html", null, true);
            echo ",30)\" id=\"form_val20_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 784
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val20_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 789, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 790
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 791
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 791, $this->source); })())), "html", null, true);
            echo ",21)\" id=\"form_val21_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val21_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 799
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 799, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 802
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 802, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 803
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 804
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 804, $this->source); })())), "html", null, true);
            echo ",22)\" id=\"form_val22_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 807
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val22_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 812, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 813
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 814
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 814, $this->source); })())), "html", null, true);
            echo ",23)\" id=\"form_val23_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val23_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 822
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 822, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 823
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 824
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 824, $this->source); })())), "html", null, true);
            echo ",24)\" id=\"form_val24_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 827
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val24_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 832, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 833
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 834
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 834, $this->source); })())), "html", null, true);
            echo ",25)\" id=\"form_val25_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 837
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val25_total\"><strong>0</strong></i>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 843, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 844
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 845
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 845, $this->source); })())), "html", null, true);
            echo ",26)\" id=\"form_val26_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val26_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 853
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 853, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 856, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 857
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 858
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 858, $this->source); })())), "html", null, true);
            echo ",27)\" id=\"form_val27_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val27_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 866, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 867
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 868
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 868, $this->source); })())), "html", null, true);
            echo ",28)\" id=\"form_val28_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val28_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 876, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 877
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 878
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 878, $this->source); })())), "html", null, true);
            echo ",29)\" id=\"form_val29_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 881
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val29_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 886
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 886, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 887
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 888
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 888, $this->source); })())), "html", null, true);
            echo ",30)\" id=\"form_val30_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val30_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 896
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 896, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 897
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 898
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 898, $this->source); })())), "html", null, true);
            echo ",31)\" id=\"form_val31_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 901
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val31_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 906
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 906, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 907
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 908
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 908, $this->source); })())), "html", null, true);
            echo ",32)\" id=\"form_val32_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 911
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val32_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 916, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 917
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 918
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 918, $this->source); })())), "html", null, true);
            echo ",33)\" id=\"form_val33_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 921
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val33_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 926
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 926, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 927
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 928
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 928, $this->source); })())), "html", null, true);
            echo ",34)\" id=\"form_val34_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 931
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val34_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 936
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 936, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 937
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 938
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 938, $this->source); })())), "html", null, true);
            echo ",35)\" id=\"form_val35_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 941
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val35_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 946, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 947
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 948
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 948, $this->source); })())), "html", null, true);
            echo ",36)\" id=\"form_val36_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 951
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val36_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 956
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 956, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 957
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 958
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 958, $this->source); })())), "html", null, true);
            echo ",37)\" id=\"form_val37_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 961
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val37_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 966, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 967
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 968
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 968, $this->source); })())), "html", null, true);
            echo ",38)\" id=\"form_val38_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 971
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val38_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 976
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 976, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 977
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 978
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 978, $this->source); })())), "html", null, true);
            echo ",39)\" id=\"form_val39_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 981
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val39_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 986, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 987
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 988
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 988, $this->source); })())), "html", null, true);
            echo ",40)\" id=\"form_val40_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 991
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val40_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 996, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 997
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 998
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 998, $this->source); })())), "html", null, true);
            echo ",41)\" id=\"form_val41_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1001
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val41_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1006, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1007
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1008
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1008, $this->source); })())), "html", null, true);
            echo ",42)\" id=\"form_val42_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val42_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1016, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1017
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1018
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1018, $this->source); })())), "html", null, true);
            echo ",43)\" id=\"form_val43_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val43_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1026
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1026, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1027
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1028
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1028, $this->source); })())), "html", null, true);
            echo ",44)\" id=\"form_val44_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val44_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1036
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1036, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1037
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1038
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1038, $this->source); })())), "html", null, true);
            echo ",45)\" id=\"form_val45_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1041
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val45_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1046, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1047
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1048
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1048, $this->source); })())), "html", null, true);
            echo ",46)\" id=\"form_val46_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1051
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val46_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1056
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1056, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1059
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1059, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1060
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1061
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1061, $this->source); })())), "html", null, true);
            echo ",47)\" id=\"form_val47_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1064
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val47_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1069, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1070
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1071
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1071, $this->source); })())), "html", null, true);
            echo ",48)\" id=\"form_val48_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1074
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val48_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1079
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1079, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1080
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1081
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1081, $this->source); })())), "html", null, true);
            echo ",49)\" id=\"form_val49_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val49_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1089
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1089, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1090
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1091
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1091, $this->source); })())), "html", null, true);
            echo ",50)\" id=\"form_val50_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1094
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val50_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1099
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1099, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1100
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1101
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1101, $this->source); })())), "html", null, true);
            echo ",51)\" id=\"form_val51_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1104
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val51_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1109, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1110
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1111
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1111, $this->source); })())), "html", null, true);
            echo ",52)\" id=\"form_val52_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1114
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val52_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1119, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1120
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1121
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1121, $this->source); })())), "html", null, true);
            echo ",53)\" id=\"form_val53_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1124
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val53_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1129
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1129, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1132, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1133
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1134
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1134, $this->source); })())), "html", null, true);
            echo ",54)\" id=\"form_val54_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1137
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val54_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1142, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1143
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1144
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1144, $this->source); })())), "html", null, true);
            echo ",55)\" id=\"form_val55_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1147
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val55_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1152, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1153
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1154
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1154, $this->source); })())), "html", null, true);
            echo ",56)\" id=\"form_val56_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1157
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val56_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1162, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1163
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1164
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1164, $this->source); })())), "html", null, true);
            echo ",57)\" id=\"form_val57_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1167
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val57_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1172, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1173
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1174
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1174, $this->source); })())), "html", null, true);
            echo ",58)\" id=\"form_val58_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1177
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val58_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1182, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1183
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1184
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1184, $this->source); })())), "html", null, true);
            echo ",59)\" id=\"form_val59_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1187
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val59_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1192
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1192, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1195, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1196
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1197
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1197, $this->source); })())), "html", null, true);
            echo ",60)\" id=\"form_val60_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1200
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val60_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1205, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1206
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1207
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1207, $this->source); })())), "html", null, true);
            echo ",61)\" id=\"form_val61_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1210
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val61_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1215
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1215, $this->source); })()) + 2), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1218, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1219
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1220
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1220, $this->source); })())), "html", null, true);
            echo ",62)\" id=\"form_val62_";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1223
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val62_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1228, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1229
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1230
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1230, $this->source); })())), "html", null, true);
            echo ",63)\" id=\"form_val63_";
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
        // line 1233
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val63_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1238, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1239
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal(";
            // line 1240
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1240, $this->source); })())), "html", null, true);
            echo ",64)\" id=\"form_val64_";
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
        // line 1243
        echo "                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val64_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <script>
                                            \$(document).load( function(){
                                                \$(\".scroll\").on(\"scroll\",function(){
                                                    \$(\"div:not(this)\").scrollLeft(\$(this).scrollLeft());
                                                });
                                            })

                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-9\"></div>
                            <div class=\"col-3\">
                                <div class=\"card card-generate \">
                                    <div class=\"card-body pt-2 pb-4\">
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                ";
        // line 1269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1269, $this->source); })()), "submit", []), 'widget');
        echo "
                                                <!--<a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3 \">Genera</a>-->
                                            </div>
                                            <div class=\"col-6\">
                                                <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3 \">Annulla</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-1\" data-toggle=\"collapse\" href=\"#collapse-1\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-1\">
                                Ingresso Linee Enel e Telecom
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-2\" data-toggle=\"collapse\" href=\"#collapse-2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-2\">
                                Predisposizione Domotica
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-3\" data-toggle=\"collapse\" href=\"#collapse-3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-3\">
                                Impianto Satellitare
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-4\" data-toggle=\"collapse\" href=\"#collapse-4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-4\">
                                Diffusione Sonora
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-5\" data-toggle=\"collapse\" href=\"#collapse-5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-5\">
                                Sorround Soggiorno
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-6\" data-toggle=\"collapse\" href=\"#collapse-6\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-6\">
                                Connettorizzazione Dati
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-7\" data-toggle=\"collapse\" href=\"#collapse-7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-7\">
                                Videosorveglianza Esterna
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-8\" data-toggle=\"collapse\" href=\"#collapse-8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-8\">
                                Predisposizione Allarme
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-9\" data-toggle=\"collapse\" href=\"#collapse-9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-9\">
                                Rilevazione Fumi
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-10\" data-toggle=\"collapse\" href=\"#collapse-10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-10\">
                                Allagamento e Gas
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-11\" data-toggle=\"collapse\" href=\"#collapse-11\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-11\">
                                Motorizzazione Tapparelle
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-12\" data-toggle=\"collapse\" href=\"#collapse-12\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-12\">
                                Cavi Motorizzazione Tapparelle
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-13\" data-toggle=\"collapse\" href=\"#collapse-13\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-13\">
                                Centralino Telefonico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-14\" data-toggle=\"collapse\" href=\"#collapse-14\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-14\">
                                Impianto Citofonico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-15\" data-toggle=\"collapse\" href=\"#collapse-15\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-15\">
                                Impianto VideoCitofono
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-16\" data-toggle=\"collapse\" href=\"#collapse-16\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-16\">
                                Rilevatori Luminosità
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-17\" data-toggle=\"collapse\" href=\"#collapse-17\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-17\">
                                Illuminazione Esterna
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-18\" data-toggle=\"collapse\" href=\"#collapse-18\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-18\">
                                Predisposizione Fotovoltaico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-19\" data-toggle=\"collapse\" href=\"#collapse-19\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-19\">
                                Sonde Temperatura
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-20\" data-toggle=\"collapse\" href=\"#collapse-20\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-20\">
                                Cronotermostati
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-21\" data-toggle=\"collapse\" href=\"#collapse-21\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-21\">
                                Armadio Rack
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-22\" data-toggle=\"collapse\" href=\"#collapse-22\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-22\">
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
        // line 1368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1368, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1380, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1383, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1388, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1391, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1401, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1404, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1409, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1412, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1429, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1441, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1444, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1449, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1452, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1469, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1481, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1484
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1484, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1489
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1489, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1492, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1497
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1497, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1500, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1505
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1505, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1508, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1518
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1518, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1521
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1521, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1526
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1526, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1529
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1529, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1534, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1537, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1547, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1550
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1550, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1560
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1560, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1563, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1580
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1580, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1592
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1592, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1595
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1595, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1600, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1603
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1603, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1606
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1606, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1607
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1614
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1614, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1617
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1617, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1621
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1621, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1623
        echo "                                        </tbody>
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
        // line 1637
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1637, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1649
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1649, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1652
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1652, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1657
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1657, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1660
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1660, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1663
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1663, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1664
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1671
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1671, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1674, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1678
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1678, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1680
        echo "                                        </tbody>
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
        // line 1694
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1694, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1706, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1709, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1726, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1738
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1738, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1741
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1741, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1746
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1746, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1749
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1749, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1752
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1752, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1753
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1760
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1760, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1763
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1763, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1767
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1767, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1769
        echo "                                        </tbody>
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
        // line 1783
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1783, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1795
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1795, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1798
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1798, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1803
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1803, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1806
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1806, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1809
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1809, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1810
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1817
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1817, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1820
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1820, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1824
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1824, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1826
        echo "                                        </tbody>
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
        // line 1840
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1840, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1852
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1852, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1855
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1855, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1860
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1860, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1863
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1863, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1866
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1866, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1867
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1874
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1874, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1877
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1877, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1881
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1881, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1883
        echo "                                        </tbody>
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
        // line 1897
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1897, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1909
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1909, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1912
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1912, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1917
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1917, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1920
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1920, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1930
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1930, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1933
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1933, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1938
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1938, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1941
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1941, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1951
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1951, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1954
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1954, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1959
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1959, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1962
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1962, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1972
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1972, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1975
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1975, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1980
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1980, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1983
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1983, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1986
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1986, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1987
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1994
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1994, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1997
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1997, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2001
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2001, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2003
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-11\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2017
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2017, $this->source); })()), "opt11Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione motori
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2029
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2029, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2032
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2032, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2037
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2037, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2040
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2040, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2045
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2045, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2048
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2048, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2053
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2053, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2056
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2056, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 2059
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2059, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 2060
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 2067
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2067, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 2070
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2070, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2074
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2074, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2076
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2090
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2090, $this->source); })()), "opt12Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione motori
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2102, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2105, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2110, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2113, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2118, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2121, $this->source); })()), "opt12_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-13\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2138, $this->source); })()), "opt13Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                CENTRALINO TELEFONICO 2 LINEE ESTERNE E 8 INTERNI.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2150, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2153, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2158, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2161, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2166, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2169, $this->source); })()), "opt13_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2179, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2182, $this->source); })()), "opt13_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-14\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2199, $this->source); })()), "opt14Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Citofonico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2211, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2214, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2219, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2222, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2227, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2230, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2235, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2238, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2243, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2246, $this->source); })()), "opt14_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2256, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2259, $this->source); })()), "opt14_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-15\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2276, $this->source); })()), "opt15Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Videocitofonico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2288, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2291, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2296, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2299, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2304, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2307, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2312, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2315, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2320, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2323, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2328, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2331, $this->source); })()), "opt15_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2341, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2344, $this->source); })()), "opt15_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-16\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2361, $this->source); })()), "opt16Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione rilevatori luminosità
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2373, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2376, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2381, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2384, $this->source); })()), "opt16_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione rilevatori luminosità
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2394, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2397, $this->source); })()), "opt16_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-17\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2414, $this->source); })()), "opt17Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione cavidotti esterni Lato anteriore e posteriore per illuminazione esterna pozzetti ogni 10mt circa per rendere più facile la predisposizione dell'illuminazione definitiva. Misura ipotetica da verificare in loco.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2426, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2429, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2434, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2437, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2442, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2445, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2450, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2453, $this->source); })()), "opt17_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Linea elettrica per accensioni 2 linee di accensioni separate.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2463, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2466, $this->source); })()), "opt17_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Collegamento stagno nei pozzetti
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2476, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2479, $this->source); })()), "opt17_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-18\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2496, $this->source); })()), "opt18Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Tubazione per predisposizione impianto fotovoltaico: due tubazioni dai pannelli al locale tecnico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2508, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2511
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2511, $this->source); })()), "opt18_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-19\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2528
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2528, $this->source); })()), "opt19Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Allaccio TERMOSTATI (l'esatta quantità e in funzione del progetto termoidraulico, appena ci verrà consegnato aggiorneremo la nostra offerta).
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2540, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2543, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 2546
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2546, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 2547
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 2554
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2554, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 2557
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2557, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2561
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2561, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2563
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-20\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2577
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2577, $this->source); })()), "opt20Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Cronotermostato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2589
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2589, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2592
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2592, $this->source); })()), "opt20_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-21\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                ";
        // line 2609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2609, $this->source); })()), "opt21Enabled", []), 'widget');
        echo "
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Armadio Rack
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2621
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2621, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2624
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2624, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2629
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2629, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2632, $this->source); })()), "opt21_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Prese di alimentazione
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2642
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2642, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2645
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2645, $this->source); })()), "opt21_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Patch Panel
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2655, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2658
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2658, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2663
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2663, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2666
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2666, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2671
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2671, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2674
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2674, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2679
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2679, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2682
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2682, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2687
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2687, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2690
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2690, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2695
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2695, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2698
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2698, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2703
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2703, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2706, $this->source); })()), "opt21_9Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Mensole
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2716
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2716, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2719
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2719, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2724
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2724, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2727
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2727, $this->source); })()), "opt21_11Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Pannelli ciechi di copertura finale
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2737
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2737, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2740
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2740, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2745
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2745, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2748
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2748, $this->source); })()), "opt21_13Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Ventilazione forzata
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2758
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2758, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2761
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2761, $this->source); })()), "opt21_14Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
            <script src=\"";
        // line 2779
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/syncscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 2780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dragscroll.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 2781
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2781, $this->source); })()), 'form_end');
        echo "
            <script>
                \$(document).ready( function () {
                    for (i=1; i < 64; i++) {
                        update(";
        // line 2785
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expAdv"]) || array_key_exists("expAdv", $context) ? $context["expAdv"] : (function () { throw new Twig_Error_Runtime('Variable "expAdv" does not exist.', 2785, $this->source); })()), "father", []), "html", null, true);
        echo ",'val' + i, 'val' + i);
                    }
                    for(i=0; i < ";
        // line 2787
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2787, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', true);
                        \$(\"#form_val64_\" + i ).prop('disabled', true);
                    }
                    window.setTimeout(function() {
                        calculate(62);
                        for(i=0; i < ";
        // line 2793
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2793, $this->source); })()), "html", null, true);
        echo "; i++) {
                            \$(\"#form_val63_\" + i ).prop('disabled', false);
                            \$(\"#form_val64_\" + i ).prop('disabled', false);
                        }
                    },10000);

                    \$('#linked-scrollbar-fixed-2').on('scroll', function() {
                        \$('#linked-scrollbar-fixed-1').scrollLeft(\$(this).scrollLeft());
                    });

                });

                \$('#appbundle_expertationsadvanced_submit').click(function(e) {
                    //e.preventDefault();
                    toastr.info(\"Genero Preventivo\");
                    for(var i = 1; i < 65; i++) {
                        \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                    }
                    \$('#appbundle_expertationsadvanced_father').val(";
        // line 2811
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2811, $this->source); })()), "id", []), "html", null, true);
        echo ");
                    \$('#appbundle_expertationsadvanced_fatherFloor').val(0);
                    //\$('#appbundle_expertationsadvanced_submit').trigger('click')
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
                        url: '/ajax/get/expData/adv/' + exp + '/' + field,
                        success: function (data) {
                            for (var i = 0; i < ";
        // line 2828
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2828, $this->source); })()), "html", null, true);
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
        // line 2840
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2840, $this->source); })()), "html", null, true);
        echo "; i++) {
                        var ind = i +1;
                        var values = parseInt(\$('#form_val1_' + ind ).val()) + parseInt(\$('#form_val6_' + ind ).val());
                        \$('#form_val' + field + '_' + ind ).val(values)
                    }
                }
                function check(i,f) {

                    var v = \$(\"#form_val62_\" + i).val(); //Let's say this is the value from PHP....
                    var preVal = 0;

                    \$(\"#form_val62_\" + i).val(v);

                    \$(\"#form_val\" + f + \"_\" + i).on(\"change keyup keydown\", function(event) {
                        let currVal = parseInt(\$(\"#form_val\" + f + \"_\" + i).val());

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
                \$(window).bind('scroll', function () {
                    if (\$(window).scrollTop() > 430) {
                        \$('#topTable').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','overlay');
                        \$('.itemHead').width('100');
                        \$('#firstItem').height('86');
                    } else {
                        \$('#topTable').css('position','').css('top','63px').css('background','#FFF').width('100%');
                        \$('#firstItem').height('39');
                    }
                });
                \$(document).ready(function () {
                    \$(window).keydown(function(event){
                        if(event.keyCode == 13) {
                            event.preventDefault();
                            return false;
                        }
                    });
                    \$('#nav-hide-btn-icon').trigger('click');
                    \$('button[data-toggle=\"collapse\"]').click(function(){
                        //log the id of the target
                        if(\$(this).hasClass('btn-success')) {
                            \$('.btn-addon-' + id).switchClass('btn-outline-primary', 'btn-success')
                        } else {
                            \$(this).switchClass('btn-outline-primary', 'btn-primary');
                        }
                    });
                });
                function checkedAddon(id) {
                    if(\$('.btn-addon-' + id).hasClass('btn-success')) {

                    } else {
                        \$('.btn-addon-' + id).switchClass('btn-primary', 'btn-success').removeClass('collapse');
                    }
                }
                for (i=1; i < 21; i++) {
                    \$('#appbundle_expertationsadvanced_opt' + i + 'Enabled').click( function () {
                        \$('.btn-addon-' + i).switchClass('btn-primary', 'btn-success');
                    });
                }
                function calcLineTotal(c,v) {
                    var currentVal = 0;
                    c = c + 1;
                    for (i = 1; i < c; i++) {
                        //\$('form_val' + v + '_' . i ).each(function() {
                        //currentVal = currentVal + \$('form_val' + v + '_' . c).val();
                        currentVal += parseInt(\$('form_val' + v + '_' . c).val());
                        console.log(currentVal)
                        //})
                    }
                    \$('#form_val' + v + '_total').val(currentVal);
                    console.log(currentVal)

                }
                /*\$(document).ready( function() {
                    for (i = 1; i < 64; i++) {
                        calcLineTotal( ";
        // line 2932
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2932, $this->source); })()), "html", null, true);
        echo " ,  i);
                        console.log(i);
                    }
                })*/
            </script>
        </div>
    </div>
    <script src=\"";
        // line 2939
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2941
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2942
        echo "    <style>
        thead {
            z-index: 1000;
        }
        .table td {
            padding: 0;
            min-height: 40px;
            height: 40px;
            font-size: 10px;
            min-width:100px;
        }
        .table tr:hover {
            background-color: #F0F0EE;
        }
        .table td input:focus {
            background-color: #F0F0EE;
        }
        .table th {
            text-align: center;
            font-size:9px;
            padding: 18px 8px;
        }
        .form-control {
            /*border:none!important;*/
            text-align: center!important;
            background-color: transparent;
            border: none!important;
            width: 100px;
            min-width: 100px;
            padding: 0!important;
        }
        td strong {
            padding-left:5px;
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
        .row-title {
            background-color: #EEE;
            padding-left: 20px!important;
        }
        .table-1 {
            float:left;
        }
        .table-2 {
            width: 80%;
            overflow: auto;
        }
        .itemHead {
            min-width: 100px;
        }
        .fakeInput {
            width: 100px!important;
            height: 40px!important;
        }
        .fakeInput {
            text-align: center!important;
        }
        .fakeInput i strong {
            font-size: 14px;
            font-style: normal;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 3062
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3064
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3065
        echo "    <script>


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/edit.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5292 => 3065,  5283 => 3064,  5271 => 3062,  5149 => 2942,  5140 => 2941,  5128 => 2939,  5118 => 2932,  5023 => 2840,  5008 => 2828,  4988 => 2811,  4967 => 2793,  4958 => 2787,  4953 => 2785,  4946 => 2781,  4942 => 2780,  4938 => 2779,  4917 => 2761,  4911 => 2758,  4898 => 2748,  4892 => 2745,  4884 => 2740,  4878 => 2737,  4865 => 2727,  4859 => 2724,  4851 => 2719,  4845 => 2716,  4832 => 2706,  4826 => 2703,  4818 => 2698,  4812 => 2695,  4804 => 2690,  4798 => 2687,  4790 => 2682,  4784 => 2679,  4776 => 2674,  4770 => 2671,  4762 => 2666,  4756 => 2663,  4748 => 2658,  4742 => 2655,  4729 => 2645,  4723 => 2642,  4710 => 2632,  4704 => 2629,  4696 => 2624,  4690 => 2621,  4675 => 2609,  4655 => 2592,  4649 => 2589,  4634 => 2577,  4618 => 2563,  4612 => 2561,  4605 => 2557,  4599 => 2554,  4590 => 2547,  4588 => 2546,  4582 => 2543,  4576 => 2540,  4561 => 2528,  4541 => 2511,  4535 => 2508,  4520 => 2496,  4500 => 2479,  4494 => 2476,  4481 => 2466,  4475 => 2463,  4462 => 2453,  4456 => 2450,  4448 => 2445,  4442 => 2442,  4434 => 2437,  4428 => 2434,  4420 => 2429,  4414 => 2426,  4399 => 2414,  4379 => 2397,  4373 => 2394,  4360 => 2384,  4354 => 2381,  4346 => 2376,  4340 => 2373,  4325 => 2361,  4305 => 2344,  4299 => 2341,  4286 => 2331,  4280 => 2328,  4272 => 2323,  4266 => 2320,  4258 => 2315,  4252 => 2312,  4244 => 2307,  4238 => 2304,  4230 => 2299,  4224 => 2296,  4216 => 2291,  4210 => 2288,  4195 => 2276,  4175 => 2259,  4169 => 2256,  4156 => 2246,  4150 => 2243,  4142 => 2238,  4136 => 2235,  4128 => 2230,  4122 => 2227,  4114 => 2222,  4108 => 2219,  4100 => 2214,  4094 => 2211,  4079 => 2199,  4059 => 2182,  4053 => 2179,  4040 => 2169,  4034 => 2166,  4026 => 2161,  4020 => 2158,  4012 => 2153,  4006 => 2150,  3991 => 2138,  3971 => 2121,  3965 => 2118,  3957 => 2113,  3951 => 2110,  3943 => 2105,  3937 => 2102,  3922 => 2090,  3906 => 2076,  3900 => 2074,  3893 => 2070,  3887 => 2067,  3878 => 2060,  3876 => 2059,  3870 => 2056,  3864 => 2053,  3856 => 2048,  3850 => 2045,  3842 => 2040,  3836 => 2037,  3828 => 2032,  3822 => 2029,  3807 => 2017,  3791 => 2003,  3785 => 2001,  3778 => 1997,  3772 => 1994,  3763 => 1987,  3761 => 1986,  3755 => 1983,  3749 => 1980,  3741 => 1975,  3735 => 1972,  3722 => 1962,  3716 => 1959,  3708 => 1954,  3702 => 1951,  3689 => 1941,  3683 => 1938,  3675 => 1933,  3669 => 1930,  3656 => 1920,  3650 => 1917,  3642 => 1912,  3636 => 1909,  3621 => 1897,  3605 => 1883,  3599 => 1881,  3592 => 1877,  3586 => 1874,  3577 => 1867,  3575 => 1866,  3569 => 1863,  3563 => 1860,  3555 => 1855,  3549 => 1852,  3534 => 1840,  3518 => 1826,  3512 => 1824,  3505 => 1820,  3499 => 1817,  3490 => 1810,  3488 => 1809,  3482 => 1806,  3476 => 1803,  3468 => 1798,  3462 => 1795,  3447 => 1783,  3431 => 1769,  3425 => 1767,  3418 => 1763,  3412 => 1760,  3403 => 1753,  3401 => 1752,  3395 => 1749,  3389 => 1746,  3381 => 1741,  3375 => 1738,  3360 => 1726,  3340 => 1709,  3334 => 1706,  3319 => 1694,  3303 => 1680,  3297 => 1678,  3290 => 1674,  3284 => 1671,  3275 => 1664,  3273 => 1663,  3267 => 1660,  3261 => 1657,  3253 => 1652,  3247 => 1649,  3232 => 1637,  3216 => 1623,  3210 => 1621,  3203 => 1617,  3197 => 1614,  3188 => 1607,  3186 => 1606,  3180 => 1603,  3174 => 1600,  3166 => 1595,  3160 => 1592,  3145 => 1580,  3125 => 1563,  3119 => 1560,  3106 => 1550,  3100 => 1547,  3087 => 1537,  3081 => 1534,  3073 => 1529,  3067 => 1526,  3059 => 1521,  3053 => 1518,  3040 => 1508,  3034 => 1505,  3026 => 1500,  3020 => 1497,  3012 => 1492,  3006 => 1489,  2998 => 1484,  2992 => 1481,  2977 => 1469,  2957 => 1452,  2951 => 1449,  2943 => 1444,  2937 => 1441,  2922 => 1429,  2902 => 1412,  2896 => 1409,  2888 => 1404,  2882 => 1401,  2869 => 1391,  2863 => 1388,  2855 => 1383,  2849 => 1380,  2834 => 1368,  2732 => 1269,  2704 => 1243,  2691 => 1240,  2688 => 1239,  2684 => 1238,  2677 => 1233,  2664 => 1230,  2661 => 1229,  2657 => 1228,  2650 => 1223,  2639 => 1220,  2636 => 1219,  2632 => 1218,  2626 => 1215,  2619 => 1210,  2608 => 1207,  2605 => 1206,  2601 => 1205,  2594 => 1200,  2583 => 1197,  2580 => 1196,  2576 => 1195,  2570 => 1192,  2563 => 1187,  2552 => 1184,  2549 => 1183,  2545 => 1182,  2538 => 1177,  2527 => 1174,  2524 => 1173,  2520 => 1172,  2513 => 1167,  2502 => 1164,  2499 => 1163,  2495 => 1162,  2488 => 1157,  2477 => 1154,  2474 => 1153,  2470 => 1152,  2463 => 1147,  2452 => 1144,  2449 => 1143,  2445 => 1142,  2438 => 1137,  2427 => 1134,  2424 => 1133,  2420 => 1132,  2414 => 1129,  2407 => 1124,  2396 => 1121,  2393 => 1120,  2389 => 1119,  2382 => 1114,  2371 => 1111,  2368 => 1110,  2364 => 1109,  2357 => 1104,  2346 => 1101,  2343 => 1100,  2339 => 1099,  2332 => 1094,  2321 => 1091,  2318 => 1090,  2314 => 1089,  2307 => 1084,  2296 => 1081,  2293 => 1080,  2289 => 1079,  2282 => 1074,  2271 => 1071,  2268 => 1070,  2264 => 1069,  2257 => 1064,  2246 => 1061,  2243 => 1060,  2239 => 1059,  2233 => 1056,  2226 => 1051,  2215 => 1048,  2212 => 1047,  2208 => 1046,  2201 => 1041,  2190 => 1038,  2187 => 1037,  2183 => 1036,  2176 => 1031,  2165 => 1028,  2162 => 1027,  2158 => 1026,  2151 => 1021,  2140 => 1018,  2137 => 1017,  2133 => 1016,  2126 => 1011,  2115 => 1008,  2112 => 1007,  2108 => 1006,  2101 => 1001,  2090 => 998,  2087 => 997,  2083 => 996,  2076 => 991,  2065 => 988,  2062 => 987,  2058 => 986,  2051 => 981,  2040 => 978,  2037 => 977,  2033 => 976,  2026 => 971,  2015 => 968,  2012 => 967,  2008 => 966,  2001 => 961,  1990 => 958,  1987 => 957,  1983 => 956,  1976 => 951,  1965 => 948,  1962 => 947,  1958 => 946,  1951 => 941,  1940 => 938,  1937 => 937,  1933 => 936,  1926 => 931,  1915 => 928,  1912 => 927,  1908 => 926,  1901 => 921,  1890 => 918,  1887 => 917,  1883 => 916,  1876 => 911,  1865 => 908,  1862 => 907,  1858 => 906,  1851 => 901,  1840 => 898,  1837 => 897,  1833 => 896,  1826 => 891,  1815 => 888,  1812 => 887,  1808 => 886,  1801 => 881,  1790 => 878,  1787 => 877,  1783 => 876,  1776 => 871,  1765 => 868,  1762 => 867,  1758 => 866,  1751 => 861,  1740 => 858,  1737 => 857,  1733 => 856,  1727 => 853,  1720 => 848,  1709 => 845,  1706 => 844,  1702 => 843,  1694 => 837,  1683 => 834,  1680 => 833,  1676 => 832,  1669 => 827,  1658 => 824,  1655 => 823,  1651 => 822,  1644 => 817,  1633 => 814,  1630 => 813,  1626 => 812,  1619 => 807,  1608 => 804,  1605 => 803,  1601 => 802,  1595 => 799,  1588 => 794,  1577 => 791,  1574 => 790,  1570 => 789,  1563 => 784,  1552 => 781,  1549 => 780,  1545 => 779,  1538 => 774,  1527 => 771,  1524 => 770,  1520 => 769,  1513 => 764,  1502 => 761,  1499 => 760,  1495 => 759,  1488 => 754,  1477 => 751,  1474 => 750,  1470 => 749,  1464 => 746,  1457 => 741,  1446 => 738,  1443 => 737,  1439 => 736,  1432 => 731,  1421 => 728,  1418 => 727,  1414 => 726,  1407 => 721,  1396 => 718,  1393 => 717,  1389 => 716,  1382 => 711,  1371 => 708,  1368 => 707,  1364 => 706,  1356 => 700,  1345 => 697,  1342 => 696,  1338 => 695,  1331 => 690,  1320 => 687,  1317 => 686,  1313 => 685,  1306 => 680,  1295 => 677,  1292 => 676,  1288 => 675,  1281 => 670,  1270 => 667,  1267 => 666,  1263 => 665,  1256 => 660,  1245 => 657,  1242 => 656,  1238 => 655,  1232 => 652,  1225 => 647,  1214 => 644,  1211 => 643,  1207 => 642,  1200 => 637,  1189 => 634,  1186 => 633,  1182 => 632,  1176 => 629,  1169 => 624,  1158 => 621,  1155 => 620,  1151 => 619,  1144 => 614,  1133 => 611,  1130 => 610,  1126 => 609,  1118 => 603,  1107 => 600,  1104 => 599,  1100 => 598,  1093 => 593,  1082 => 590,  1079 => 589,  1075 => 588,  1067 => 582,  1056 => 579,  1053 => 578,  1049 => 577,  1042 => 573,  1026 => 559,  1017 => 557,  1013 => 556,  945 => 491,  938 => 487,  930 => 482,  921 => 476,  914 => 472,  906 => 467,  898 => 462,  890 => 457,  882 => 452,  874 => 447,  865 => 441,  858 => 437,  850 => 432,  842 => 427,  834 => 422,  826 => 417,  818 => 412,  810 => 407,  801 => 401,  794 => 397,  786 => 392,  778 => 387,  770 => 382,  762 => 377,  754 => 372,  746 => 367,  738 => 362,  730 => 357,  722 => 352,  714 => 347,  706 => 342,  698 => 337,  690 => 332,  682 => 327,  674 => 322,  666 => 317,  658 => 312,  650 => 307,  642 => 302,  633 => 296,  626 => 292,  618 => 287,  610 => 282,  602 => 277,  594 => 272,  585 => 266,  578 => 262,  570 => 257,  562 => 252,  554 => 247,  546 => 242,  537 => 236,  530 => 232,  522 => 227,  514 => 222,  506 => 217,  498 => 212,  490 => 207,  482 => 202,  474 => 197,  466 => 192,  457 => 186,  450 => 182,  442 => 177,  433 => 171,  426 => 167,  418 => 162,  410 => 157,  402 => 152,  394 => 147,  385 => 141,  376 => 134,  374 => 133,  361 => 124,  359 => 123,  354 => 122,  352 => 121,  347 => 119,  344 => 118,  342 => 117,  337 => 115,  321 => 102,  314 => 98,  307 => 94,  296 => 90,  288 => 89,  280 => 88,  270 => 85,  262 => 84,  254 => 83,  240 => 78,  229 => 74,  218 => 70,  208 => 69,  202 => 66,  191 => 62,  185 => 59,  178 => 55,  169 => 49,  158 => 45,  150 => 44,  142 => 43,  136 => 40,  129 => 36,  122 => 32,  115 => 28,  108 => 24,  99 => 20,  88 => 13,  85 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                                {% set floor = 0 %}
                                <!--<div id=\"\" class=\"float-left\">
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
                        </div>-->
                            </div>
                            {% set colCount = count|length + 1 %}

                            <div class=\"wrapper2\">
                                <div class=\"row\">
                                    <div class=\"col-3 pr-0\">
                                        <table class=\"table-1 table table-bordered \">
                                            <th class=\"firstHead\">TIPOLOGIA</th>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    PUNTI PRESA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong >{{ titles.0.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.1.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.2.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.3.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.4.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    PUNTI COMANDO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.5.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.6.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.7.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.8.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.9.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.10.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.11.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.12.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.13.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.14.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.15.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    RISCALDAMENTO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.16.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.17.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.18.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.19.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.20.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    QUADRO ELETTRICO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.21.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.22.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.23.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.24.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.25.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    SERVIZI PREDISPOSIZIONE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.26.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.27.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.28.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.29.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.30.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.31.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.32.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.33.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.34.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.35.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.36.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.37.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.38.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.39.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.40.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.41.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.42.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.43.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.44.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.45.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.46.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.47.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.48.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.49.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.50.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.51.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.52.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    PREDISPOSIZIONE AUTOMATISMI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.53.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.54.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.55.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.56.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.57.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.58.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    ASPIRAZIONE CENTRALIZZATA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.59.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ titles.60.description }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\">
                                                    RESOCONTO PLACCHE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 503</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 505</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Supporti 506</strong>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <style>
                                        .tableWide-wrapper {
                                            overflow-x: auto;
                                            border-right: 2px solid #797979;
                                            box-sizing: border-box;
                                            width: 100%;
                                        }

                                        .tableScrollTop {
                                            overflow-x: scroll;
                                            box-sizing: border-box;
                                            margin: 0;
                                            height:0px;
                                            width: 100%;
                                        }

                                        .tableWide {
                                            width: 1500px;
                                            table-layout: fixed;
                                            margin-top: 0 !important;
                                        }
                                    </style>
                                    <script>
                                        \$(function(){ 'use strict';
                                            \$(\".tableScrollTop\").scroll(function() {
                                                \$(\".tableWide-wrapper\").scrollLeft(\$(\".tableScrollTop\").scrollLeft());
                                            });
                                            \$(\".tableWide-wrapper\").scroll(function() {
                                                \$(\".tableScrollTop\").scrollLeft(\$(\".tableWide-wrapper\").scrollLeft());
                                            });
                                        });
                                        \$(document).ready(function(){
                                            \$('#scrollMaster').width(\$('#mainTable').width());
                                        })
                                    </script>

                                    <div class=\"col-9 pl-0\" style=\"overflow:auto;\">
                                        <div class=\"tableScrollTop\"><div id=\"scrollMaster\" style=\"width:2000px; height:20px;\"></div></div>

                                        <div id=\"topTable\" class=\"tableWide-wrapper\" tabindex=\"0\">
                                                <table class=\"table table-bordered\">
                                                    <thead>
                                                        <tr>
                                                            {% for itm in item.name %}
                                                                <th class=\"text-center itemHead\">{{ itm }}</th>
                                                            {% endfor %}
                                                            <th class=\"itemHead\">
                                                                Sistemi
                                                            </th>
                                                            <th class=\"itemHead\">
                                                                TOTALI
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        <div class=\"tableWide-wrapper\" tabindex=\"0\">
                                                <table id=\"mainTable\" class=\"table table-bordered\">
                                                    <tbody>
                                                <tr id=\"firstItem\">
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>

                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},1)\" id=\"form_val1_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val1_total\"><strong>0</strong></i>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},2)\" id=\"form_val2_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val2_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},3)\" id=\"form_val3_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val3_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},4)\" id=\"form_val4_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val4_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},5)\" id=\"form_val5_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val5_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},6)\" id=\"form_val6_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val6_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},7)\" id=\"form_val7_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val7_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},8)\" id=\"form_val8_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val8_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},9)\" id=\"form_val9_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val9_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},10)\" id=\"form_val10_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val10_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},11)\" id=\"form_val11_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val11_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},12)\" id=\"form_val12_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val12_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},13)\" id=\"form_val13_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val13_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},14)\" id=\"form_val14_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val14_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},15)\" id=\"form_val15_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val15_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},16)\" id=\"form_val16_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val16_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},17)\" id=\"form_val17_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val17_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},18)\" id=\"form_val18_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val18_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},19)\" id=\"form_val19_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val19_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},30)\" id=\"form_val20_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val20_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},21)\" id=\"form_val21_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val21_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},22)\" id=\"form_val22_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val22_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},23)\" id=\"form_val23_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val23_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},24)\" id=\"form_val24_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val24_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},25)\" id=\"form_val25_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val25_total\"><strong>0</strong></i>
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},26)\" id=\"form_val26_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val26_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},27)\" id=\"form_val27_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val27_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},28)\" id=\"form_val28_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val28_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},29)\" id=\"form_val29_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val29_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},30)\" id=\"form_val30_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val30_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},31)\" id=\"form_val31_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val31_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},32)\" id=\"form_val32_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val32_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},33)\" id=\"form_val33_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val33_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},34)\" id=\"form_val34_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val34_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},35)\" id=\"form_val35_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val35_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},36)\" id=\"form_val36_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val36_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},37)\" id=\"form_val37_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val37_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},38)\" id=\"form_val38_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val38_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},39)\" id=\"form_val39_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val39_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},40)\" id=\"form_val40_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val40_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},41)\" id=\"form_val41_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val41_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},42)\" id=\"form_val42_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val42_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},43)\" id=\"form_val43_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val43_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},44)\" id=\"form_val44_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val44_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},45)\" id=\"form_val45_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val45_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},46)\" id=\"form_val46_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val46_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},47)\" id=\"form_val47_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val47_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},48)\" id=\"form_val48_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val48_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},49)\" id=\"form_val49_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val49_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},50)\" id=\"form_val50_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val50_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},51)\" id=\"form_val51_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val51_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},52)\" id=\"form_val52_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val52_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},53)\" id=\"form_val53_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val53_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},54)\" id=\"form_val54_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val54_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},55)\" id=\"form_val55_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val55_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},56)\" id=\"form_val56_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val56_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},57)\" id=\"form_val57_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val57_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},58)\" id=\"form_val58_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val58_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},59)\" id=\"form_val59_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val59_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},60)\" id=\"form_val60_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val60_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},61)\" id=\"form_val61_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val61_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 2 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},62)\" id=\"form_val62_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val62_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},63)\" id=\"form_val63_{{ item }}\" onchange=\"check({{ item }},63)\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val63_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" onChange=\"calcLineTotal({{ count|length }},64)\" id=\"form_val64_{{ item }}\" onchange=\"check({{ item }},64)\">
                                                        </td>
                                                    {% endfor %}
                                                    <td class=\"fakeInput\">
                                                        <i id=\"form_val64_total\"><strong>0</strong></i>
                                                    </td>
                                                </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <script>
                                            \$(document).load( function(){
                                                \$(\".scroll\").on(\"scroll\",function(){
                                                    \$(\"div:not(this)\").scrollLeft(\$(this).scrollLeft());
                                                });
                                            })

                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-9\"></div>
                            <div class=\"col-3\">
                                <div class=\"card card-generate \">
                                    <div class=\"card-body pt-2 pb-4\">
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                {{ form_widget(form.submit) }}
                                                <!--<a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3 \">Genera</a>-->
                                            </div>
                                            <div class=\"col-6\">
                                                <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3 \">Annulla</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-1\" data-toggle=\"collapse\" href=\"#collapse-1\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-1\">
                                Ingresso Linee Enel e Telecom
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-2\" data-toggle=\"collapse\" href=\"#collapse-2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-2\">
                                Predisposizione Domotica
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-3\" data-toggle=\"collapse\" href=\"#collapse-3\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-3\">
                                Impianto Satellitare
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-4\" data-toggle=\"collapse\" href=\"#collapse-4\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-4\">
                                Diffusione Sonora
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-5\" data-toggle=\"collapse\" href=\"#collapse-5\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-5\">
                                Sorround Soggiorno
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-6\" data-toggle=\"collapse\" href=\"#collapse-6\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-6\">
                                Connettorizzazione Dati
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-7\" data-toggle=\"collapse\" href=\"#collapse-7\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-7\">
                                Videosorveglianza Esterna
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-8\" data-toggle=\"collapse\" href=\"#collapse-8\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-8\">
                                Predisposizione Allarme
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-9\" data-toggle=\"collapse\" href=\"#collapse-9\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-9\">
                                Rilevazione Fumi
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-10\" data-toggle=\"collapse\" href=\"#collapse-10\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-10\">
                                Allagamento e Gas
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-11\" data-toggle=\"collapse\" href=\"#collapse-11\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-11\">
                                Motorizzazione Tapparelle
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-12\" data-toggle=\"collapse\" href=\"#collapse-12\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-12\">
                                Cavi Motorizzazione Tapparelle
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-13\" data-toggle=\"collapse\" href=\"#collapse-13\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-13\">
                                Centralino Telefonico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-14\" data-toggle=\"collapse\" href=\"#collapse-14\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-14\">
                                Impianto Citofonico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-15\" data-toggle=\"collapse\" href=\"#collapse-15\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-15\">
                                Impianto VideoCitofono
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-16\" data-toggle=\"collapse\" href=\"#collapse-16\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-16\">
                                Rilevatori Luminosità
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-17\" data-toggle=\"collapse\" href=\"#collapse-17\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-17\">
                                Illuminazione Esterna
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-18\" data-toggle=\"collapse\" href=\"#collapse-18\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-18\">
                                Predisposizione Fotovoltaico
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-19\" data-toggle=\"collapse\" href=\"#collapse-19\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-19\">
                                Sonde Temperatura
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-20\" data-toggle=\"collapse\" href=\"#collapse-20\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-20\">
                                Cronotermostati
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-21\" data-toggle=\"collapse\" href=\"#collapse-21\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-21\">
                                Armadio Rack
                            </a>
                            <a class=\"btn btn-primary ml-1 mb-2 collapsed btn-addon-22\" data-toggle=\"collapse\" href=\"#collapse-22\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapse-22\">
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt4_3Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt5_3Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt7_3Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt8_3Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt9_3Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
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
                                        {% if item.opereMurariePietra == 1 %}
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
                                        {% else %}
                                            {{ form_widget(form.opt10_9Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-11\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt11Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione motori
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt11_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt11_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt11_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt11_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt11_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt11_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt11_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt11_4Value) }}
                                            </td>
                                        </tr>
                                        {% if item.opereMurariePietra == 1 %}
                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    {{ form_widget(form.opt11_5Value) }}
                                                </td>
                                                <td>
                                                    {{ form_label(form.opt11_5Value) }}
                                                </td>
                                            </tr>
                                        {% else %}
                                            {{ form_widget(form.opt11_5Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt12Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione motori
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt12_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt12_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt12_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt12_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt12_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt12_3Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-13\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt13Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                CENTRALINO TELEFONICO 2 LINEE ESTERNE E 8 INTERNI.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt13_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt13_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt13_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt13_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt13_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt13_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt13_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt13_4Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-14\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt14Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Citofonico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_4Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_5Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_5Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt14_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt14_6Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-15\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt15Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Impianto Videocitofonico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_4Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_5Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_5Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_6Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Trasporto e imballo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt15_7Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt15_7Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-16\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt16Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione rilevatori luminosità
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt16_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt16_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt16_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt16_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione rilevatori luminosità
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt16_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt16_3Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-17\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt17Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Predisposizione cavidotti esterni Lato anteriore e posteriore per illuminazione esterna pozzetti ogni 10mt circa per rendere più facile la predisposizione dell'illuminazione definitiva. Misura ipotetica da verificare in loco.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_4Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Linea elettrica per accensioni 2 linee di accensioni separate.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_5Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_5Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Collegamento stagno nei pozzetti
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt17_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt17_6Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-18\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt18Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Tubazione per predisposizione impianto fotovoltaico: due tubazioni dai pannelli al locale tecnico
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt18_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt18_1Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-19\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt19Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Allaccio TERMOSTATI (l'esatta quantità e in funzione del progetto termoidraulico, appena ci verrà consegnato aggiorneremo la nostra offerta).
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt19_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt19_1Value) }}
                                            </td>
                                        </tr>
                                        {% if item.opereMurariePietra == 1 %}
                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    {{ form_widget(form.opt19_2Value) }}
                                                </td>
                                                <td>
                                                    {{ form_label(form.opt19_2Value) }}
                                                </td>
                                            </tr>
                                        {% else %}
                                            {{ form_widget(form.opt19_2Value, { 'attr': { 'class': 'hidden'} }) }}
                                        {% endif %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-20\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt20Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Cronotermostato
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt20_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt20_1Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse mt-1 mb-2\" id=\"collapse-21\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <div class=\"custom-control custom-checkbox\">
                                                {{ form_widget(form.opt21Enabled) }}
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan=\"2\">
                                                Armadio Rack
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_1Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_1Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_2Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_2Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Prese di alimentazione
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_3Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_3Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Patch Panel
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_4Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_4Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_5Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_5Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_6Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_6Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_6Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_7Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_7Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_8Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_8Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_9Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_9Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Mensole
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_10Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_10Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_11Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_11Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Pannelli ciechi di copertura finale
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_12Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_12Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_13Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_13Value) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                Ventilazione forzata
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                {{ form_widget(form.opt21_14Value) }}
                                            </td>
                                            <td>
                                                {{ form_label(form.opt21_14Value) }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
            <script src=\"{{ asset(\"js/syncscroll.js\") }}\"></script>
            <script src=\"{{ asset(\"js/dragscroll.js\") }}\"></script>
            {{ form_end(form) }}
            <script>
                \$(document).ready( function () {
                    for (i=1; i < 64; i++) {
                        update({{ expAdv.father }},'val' + i, 'val' + i);
                    }
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

                    \$('#linked-scrollbar-fixed-2').on('scroll', function() {
                        \$('#linked-scrollbar-fixed-1').scrollLeft(\$(this).scrollLeft());
                    });

                });

                \$('#appbundle_expertationsadvanced_submit').click(function(e) {
                    //e.preventDefault();
                    toastr.info(\"Genero Preventivo\");
                    for(var i = 1; i < 65; i++) {
                        \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                    }
                    \$('#appbundle_expertationsadvanced_father').val({{ item.id }});
                    \$('#appbundle_expertationsadvanced_fatherFloor').val(0);
                    //\$('#appbundle_expertationsadvanced_submit').trigger('click')
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
                        url: '/ajax/get/expData/adv/' + exp + '/' + field,
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
                        \$('#form_val' + field + '_' + ind ).val(values)
                    }
                }
                function check(i,f) {

                    var v = \$(\"#form_val62_\" + i).val(); //Let's say this is the value from PHP....
                    var preVal = 0;

                    \$(\"#form_val62_\" + i).val(v);

                    \$(\"#form_val\" + f + \"_\" + i).on(\"change keyup keydown\", function(event) {
                        let currVal = parseInt(\$(\"#form_val\" + f + \"_\" + i).val());

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
                \$(window).bind('scroll', function () {
                    if (\$(window).scrollTop() > 430) {
                        \$('#topTable').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','overlay');
                        \$('.itemHead').width('100');
                        \$('#firstItem').height('86');
                    } else {
                        \$('#topTable').css('position','').css('top','63px').css('background','#FFF').width('100%');
                        \$('#firstItem').height('39');
                    }
                });
                \$(document).ready(function () {
                    \$(window).keydown(function(event){
                        if(event.keyCode == 13) {
                            event.preventDefault();
                            return false;
                        }
                    });
                    \$('#nav-hide-btn-icon').trigger('click');
                    \$('button[data-toggle=\"collapse\"]').click(function(){
                        //log the id of the target
                        if(\$(this).hasClass('btn-success')) {
                            \$('.btn-addon-' + id).switchClass('btn-outline-primary', 'btn-success')
                        } else {
                            \$(this).switchClass('btn-outline-primary', 'btn-primary');
                        }
                    });
                });
                function checkedAddon(id) {
                    if(\$('.btn-addon-' + id).hasClass('btn-success')) {

                    } else {
                        \$('.btn-addon-' + id).switchClass('btn-primary', 'btn-success').removeClass('collapse');
                    }
                }
                for (i=1; i < 21; i++) {
                    \$('#appbundle_expertationsadvanced_opt' + i + 'Enabled').click( function () {
                        \$('.btn-addon-' + i).switchClass('btn-primary', 'btn-success');
                    });
                }
                function calcLineTotal(c,v) {
                    var currentVal = 0;
                    c = c + 1;
                    for (i = 1; i < c; i++) {
                        //\$('form_val' + v + '_' . i ).each(function() {
                        //currentVal = currentVal + \$('form_val' + v + '_' . c).val();
                        currentVal += parseInt(\$('form_val' + v + '_' . c).val());
                        console.log(currentVal)
                        //})
                    }
                    \$('#form_val' + v + '_total').val(currentVal);
                    console.log(currentVal)

                }
                /*\$(document).ready( function() {
                    for (i = 1; i < 64; i++) {
                        calcLineTotal( {{ colCount }} ,  i);
                        console.log(i);
                    }
                })*/
            </script>
        </div>
    </div>
    <script src=\"{{ asset('js/jquery.toastr.js') }}\" type=\"text/javascript\"></script>
{% endblock %}
{% block stylesheets %}
    <style>
        thead {
            z-index: 1000;
        }
        .table td {
            padding: 0;
            min-height: 40px;
            height: 40px;
            font-size: 10px;
            min-width:100px;
        }
        .table tr:hover {
            background-color: #F0F0EE;
        }
        .table td input:focus {
            background-color: #F0F0EE;
        }
        .table th {
            text-align: center;
            font-size:9px;
            padding: 18px 8px;
        }
        .form-control {
            /*border:none!important;*/
            text-align: center!important;
            background-color: transparent;
            border: none!important;
            width: 100px;
            min-width: 100px;
            padding: 0!important;
        }
        td strong {
            padding-left:5px;
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
        .row-title {
            background-color: #EEE;
            padding-left: 20px!important;
        }
        .table-1 {
            float:left;
        }
        .table-2 {
            width: 80%;
            overflow: auto;
        }
        .itemHead {
            min-width: 100px;
        }
        .fakeInput {
            width: 100px!important;
            height: 40px!important;
        }
        .fakeInput {
            text-align: center!important;
        }
        .fakeInput i strong {
            font-size: 14px;
            font-style: normal;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script>


    </script>
{% endblock %}
", "expertations/edit.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/edit.advanced.html.twig");
    }
}
