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
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.CongelarFilaColumna.js"), "html", null, true);
        echo "\"></script>
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
                </div>
            </div>
            ";
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), [0 => "jquery.collection.html.twig"], true);
        // line 13
        echo "            ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 14
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
            <div class=\"mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <strong>Cliente</strong>
                                <p><small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 21, $this->source); })()), "uidToSurName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 21, $this->source); })()), "uidToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Data Generazione</strong>
                                <p><small>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->source); })()), "date", []), "d/m/Y"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Tipo Impianto</strong>
                                <p><small>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 29, $this->source); })()), "plantIntToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->source); })()), "tipo", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>Kw Enel</strong>
                                <p><small>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), "kw", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>Piani</strong>
                                <p><small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 37, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Riscaldamento</strong>
                                <p><small>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 41, $this->source); })()), "heatingIntToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "riscaldamento", [])], "method"), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "opereMurarie", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Opere Murarie </strong><br>
                                <strong>";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), "opereMurarieIntonaco", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Intonaco </strong><br>
                                <strong>";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 46, $this->source); })()), "opereMurariePietra", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Pietra</strong>
                            </div>
                            <!--<div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->source); })()), "sconto", []), "html", null, true);
        echo "</small></p>
                        </div>-->
                        </div>
                        <div class=\"row mt-2\">
                            <div class=\"col-lg-1\">
                                <strong>Livello </strong>
                                <p><small>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 56, $this->source); })()), "level", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1\">
                                <strong>Metratura</strong>
                                <p><small>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->source); })()), "squareMeters", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->source); })()), "trifase", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Trifase </strong><br>
                            </div>
                            <div class=\"col-lg-1 \">
                                <strong>Circuiti</strong>
                                <p><small>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 67, $this->source); })()), "numCircuiti", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "illumSicurezza", []) >= 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "illumSicurezza", []), "html", null, true);
        echo "<br>
                                <strong>";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 71, $this->source); })()), "lampada", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Lampada fornita </strong><br>
                            </div>
                            <div class=\"col-lg-3\">
                                <strong>SPD</strong>
                                <p><small>";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 75, $this->source); })()), "spd", []) == 1)) {
            echo "SPD ad arrivo linea, Tolleranza R1";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 75, $this->source); })()), "spd", []) == 2)) {
            echo "SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni";
        }
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2 \">
                                <strong>Imp. Ausiliari</strong>
                                <p><small>";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), "impAusiliari", []) == 1)) {
            echo "Campanello, citofono e videocitofono";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), "impAusiliari", []) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), "impAusiliari", []) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica";
        }
        echo " </small></p>
                            </div>
                        </div>
                        <div class=\"row mt-2\">
                            <div class=\"col-lg-2\">
                                <strong>";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "campanello", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Campanello</strong><br>
                                <strong>";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 85, $this->source); })()), "citVid", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Citofono</strong><br>
                                <strong>";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 86, $this->source); })()), "citVid", []) == 2)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;VideoCitofono</strong><br>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->source); })()), "antenna", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Antenna</strong><br>
                                <strong>";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), "allarme", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Allarme</strong><br>
                                <strong>";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->source); })()), "illumEsterna", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illuminazione Esterna</strong><br>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Prese Dati</strong>
                                <p><small>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 95, $this->source); })()), "numPreseDati", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Prese Telefono</strong>
                                <p><small>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->source); })()), "numPreseTelefono", []), "html", null, true);
        echo "</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Sconto</strong>
                                <p><small>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 103, $this->source); })()), "sconto", []), "html", null, true);
        echo " %</small></p>
                            </div>
                            <div class=\"col-lg-2\">
                                <strong>Totale Preliminare</strong>
                                <p><small>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->source); })()), "price", []), "html", null, true);
        echo " €</small></p>
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
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), 'form_start');
        echo "
                            <div class=\"wrapper1\" style=\"height: 30px;\">
                                ";
        // line 119
        $context["floor"] = 0;
        // line 120
        echo "                                <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 123
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 123, $this->source); })()) - 1);
        // line 124
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->source); })()), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 124, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 125
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 125, $this->source); })()) + 1);
        // line 126
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 126, $this->source); })()), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 126, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                            </div>
                            ";
        // line 135
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 135, $this->source); })())) + 1);
        // line 136
        echo "
                            <div class=\"wrapper2\">
                                <div class=\"row\">
                                    <div class=\"col-3 pr-0\">
                                        <table class=\"table-1 table table-bordered \">
                                            <th class=\"firstHead\">TIPOLOGIA</th>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 143
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 143, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI PRESA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong >";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 149, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 154, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 159, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 164, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 169, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 173
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 173, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI COMANDO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 179, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 184, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 188
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 188, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 194, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 199, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 204, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 209, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 214, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 219, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 224, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 229, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 234, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 238
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 238, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    RISCALDAMENTO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 244, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 249, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 254, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 259, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 264, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 268
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 268, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    QUADRO ELETTRICO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 274, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 279, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 284, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 289, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 294, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 298
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 298, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    SERVIZI PREDISPOSIZIONE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 304, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 309, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 314, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 319, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 324, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 329, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 334, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 339, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 344, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 349, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 354, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 359
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 359, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 364
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 364, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 369
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 369, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 374
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 374, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 379, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 384, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 389, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 394, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 399
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 399, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 403
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 403, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 409
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 409, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 414, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 419
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 419, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 424, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 429, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 434, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 439
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 439, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 443
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 443, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PREDISPOSIZIONE AUTOMATISMI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 449
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 449, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 454
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 454, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 459
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 459, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 464, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 469
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 469, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 474
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 474, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 478
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 478, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ASPIRAZIONE CENTRALIZZATA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 484
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 484, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 489
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 489, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 493
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 493, $this->source); })()) + 1), "html", null, true);
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
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 558, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 559
            echo "                                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "                                                            <th class=\"itemHead\">
                                                                Sistemi
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
        // line 572
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 572, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>

                                                <tr>
                                                    ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 576, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 577
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 578
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 581
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 583
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 583, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 584
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 585
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 588
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 590, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 591
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 592
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 595
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 598, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 599
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 600
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 605, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 606
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
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
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 612
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 612, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 615, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 616
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 622, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 623
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 624
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 629
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 629, $this->source); })()) + 1), "html", null, true);
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 634
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 639, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 640
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 641
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 646, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 647
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 648
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 651
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 653, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 654
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 655
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 660, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 661
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
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
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 668, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 669
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 670
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 675, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 676
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 677
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 680
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 682, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 683
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 684
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 689, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 690
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 691
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 694
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 696
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 696, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 699, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 700
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 701
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 704
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 706, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 707
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 708
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 711
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 713, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 714
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 715
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 720, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 721
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 722
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 725
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 727, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 728
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 729
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 734
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 734, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 737, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 738
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 739
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 742
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 744, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 745
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 746
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 749
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 751
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 751, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 752
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 753
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 758, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 759
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 760
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 766, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 767
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 768
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 771
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 773
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 773, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 776, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 777
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 778
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 781
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 783, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 784
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 785
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 788
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 790, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 791
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 797, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 798
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 799
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 802
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 804
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 804, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 805
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 806
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 811, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 812
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 813
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 816
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 818, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 819
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 820
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 823
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 825, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 826
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 827
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 832, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 833
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 834
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 837
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 839, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 840
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 841
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 846, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 847
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 848
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 851
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 853
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 853, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 854
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 855
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 860
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 860, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 861
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 862
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 867, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 868
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 869
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 872
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 874, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 875
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 876
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 879
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 881, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 882
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 883
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 888, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 889
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 890
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 893
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 895
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 895, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 896
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 897
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 900
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 902, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 903
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 904
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 909, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 910
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 911
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 914
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 916
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 916, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 919
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 919, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 920
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 921
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 924
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 926
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 926, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 927
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 928
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 931
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 933, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 934
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 935
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 938
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 940
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 940, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 941
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 942
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 945
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 947
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 947, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 948
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 949
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 952
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 954, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 955
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 956
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 959
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 961, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 962
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 963
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 968
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 968, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 971
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 971, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 972
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 973
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 976
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 978
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 978, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 979
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 980
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 983
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 985
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 985, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 986
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 987
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 990
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 992, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 993
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 994
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 997
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 999, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1000
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 1001
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1004
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1006, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1007
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 1008
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1013
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1013, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1016, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1017
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 1018
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1023
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1023, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1024
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 1025
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1028
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1030
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1030, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1033
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1033, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1034
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 1035
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1038
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1040
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1040, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1041
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 1042
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
        // line 1045
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1047
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1047, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1048
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 1049
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
        // line 1052
        echo "                                                </tr>
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
        // line 1075
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1075, $this->source); })()), "submit", []), 'widget');
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
        // line 1174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1174, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1186, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1189, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1194, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1197, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1207, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1210, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1215, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1218, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1235, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1247, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1250, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1255, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1258, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1275, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1287, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1290, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1295, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1298, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1303, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1306, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1311, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1314, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1324, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1327, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1332, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1335, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1340, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1343, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1353, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1356, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1366, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1369, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1386, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1398, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1401, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1406, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1409, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1412
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1412, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1413
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1420
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1420, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1423
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1423, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1427
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1427, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1429
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
        // line 1443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1443, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1455, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1458
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1458, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1463, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1466, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1469
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1469, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1470
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1477
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1477, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1480, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1484
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1484, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1486
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
        // line 1500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1500, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1512, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1515
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1515, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1532
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1532, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1544, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1547, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1552
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1552, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1555
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1555, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1558
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1558, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1559
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1566
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1566, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1569
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1569, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1573
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1573, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1575
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
        // line 1589
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1589, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1601
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1601, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1604
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1604, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1609, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1612
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1612, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1615
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1615, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1616
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1623
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1623, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1626
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1626, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1630
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1630, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1632
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
        // line 1646
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1646, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1658
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1658, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1661
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1661, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1666
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1666, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1669
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1669, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1672
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1672, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1673
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1680
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1680, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1683
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1683, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1687
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1687, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1689
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
        // line 1703
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1703, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1715
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1715, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1718, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1723
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1723, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1726, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1736, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1739, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1744
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1744, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1747
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1747, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1757
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1757, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1760
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1760, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1765
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1765, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1768
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1768, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1778
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1778, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1781
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1781, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1786
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1786, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1789
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1789, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1792
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1792, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1793
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1800
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1800, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1803
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1803, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1807
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1807, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1809
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
        // line 1823
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1823, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 1835
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1835, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1838
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1838, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1843
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1843, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1846
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1846, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1851
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1851, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1854
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1854, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1859
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1859, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1862
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1862, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1865
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1865, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1866
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1873
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1873, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1876
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1876, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1880
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1880, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1882
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
        // line 1896
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1896, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 1908
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1908, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1911
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1911, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1916
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1916, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1919
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1919, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1924
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1924, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1927
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1927, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 1944
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1944, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 1956
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1956, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1959
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1959, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1964
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1964, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1967
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1967, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1972
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1972, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1975
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1975, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1985
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1985, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1988
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1988, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 2005
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2005, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 2017
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2017, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2020
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2020, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2025
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2025, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2028
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2028, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2033
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2033, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2036
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2036, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2041
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2041, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2044
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2044, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2049
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2049, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2052
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2052, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 2062
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2062, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2065
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2065, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 2082
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2082, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 2094
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2094, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2097
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2097, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2102, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2105, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2110, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2113, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2118, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2121, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2126, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2129, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2134, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2137, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 2147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2147, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2150, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 2167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2167, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 2179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2179, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2182, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2187, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2190, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 2200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2200, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2203, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 2220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2220, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 2232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2232, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2235, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2240, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2243, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2248, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2251, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2256, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2259, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 2269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2269, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2272, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 2282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2282, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2285, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 2302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2302, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 2314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2314, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2317, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 2334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2334, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 2346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2346, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2349, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 2352
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2352, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 2353
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 2360
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2360, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 2363
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2363, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2367
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2367, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2369
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
        // line 2383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2383, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 2395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2395, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2398, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 2415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2415, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 2427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2427, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2430, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2435, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2438, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 2448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2448, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2451, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 2461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2461, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2464, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2469, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2472, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2477, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2480, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2485, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2488
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2488, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2493, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2496, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2501, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2504, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2509, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2512, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 2522
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2522, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2525, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2530, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2533, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 2543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2543, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2546, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2551
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2551, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2554, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 2564
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2564, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2567
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2567, $this->source); })()), "opt21_14Value", []), 'label');
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
        // line 2585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/syncscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 2586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dragscroll.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 2587
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2587, $this->source); })()), 'form_end');
        echo "
            <script>
                \$(document).ready( function () {
                    for (i=1; i < 64; i++) {
                        update(";
        // line 2591
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expAdv"]) || array_key_exists("expAdv", $context) ? $context["expAdv"] : (function () { throw new Twig_Error_Runtime('Variable "expAdv" does not exist.', 2591, $this->source); })()), "father", []), "html", null, true);
        echo ",'val' + i, 'val' + i);
                    }
                    for(i=0; i < ";
        // line 2593
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2593, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', true);
                        \$(\"#form_val64_\" + i ).prop('disabled', true);
                    }
                    window.setTimeout(function() {
                        calculate(62);
                        for(i=0; i < ";
        // line 2599
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2599, $this->source); })()), "html", null, true);
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
        // line 2617
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2617, $this->source); })()), "id", []), "html", null, true);
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
        // line 2634
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2634, $this->source); })()), "html", null, true);
        echo "; i++) {
                                var numbersArray = data.split(',');
                                console.log(\"GET \" + valn)
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
        // line 2647
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2647, $this->source); })()), "html", null, true);
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
            </script>
        </div>
    </div>
    <script src=\"";
        // line 2687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2693
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2694
        echo "    <style>
        thead {
            z-index: 1000;
        }
        .table td {
            padding: 0;
            min-height: 33px;
            height: 33px;
            font-size: 10px;
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
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 2802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2804
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2805
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 430) {
                \$('#topTable').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','overlay');
                \$('.itemHead').width('100');
                \$('#firstItem').height('79');
            } else {
                \$('#topTable').css('position','').css('top','63px').css('background','#FFF').width('100%');
                \$('#firstItem').height('31');
            }
        });


    </script>
    <script>
        \$(document).ready(function () {
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
        return array (  4909 => 2805,  4900 => 2804,  4888 => 2802,  4778 => 2694,  4769 => 2693,  4757 => 2691,  4750 => 2687,  4707 => 2647,  4691 => 2634,  4671 => 2617,  4650 => 2599,  4641 => 2593,  4636 => 2591,  4629 => 2587,  4625 => 2586,  4621 => 2585,  4600 => 2567,  4594 => 2564,  4581 => 2554,  4575 => 2551,  4567 => 2546,  4561 => 2543,  4548 => 2533,  4542 => 2530,  4534 => 2525,  4528 => 2522,  4515 => 2512,  4509 => 2509,  4501 => 2504,  4495 => 2501,  4487 => 2496,  4481 => 2493,  4473 => 2488,  4467 => 2485,  4459 => 2480,  4453 => 2477,  4445 => 2472,  4439 => 2469,  4431 => 2464,  4425 => 2461,  4412 => 2451,  4406 => 2448,  4393 => 2438,  4387 => 2435,  4379 => 2430,  4373 => 2427,  4358 => 2415,  4338 => 2398,  4332 => 2395,  4317 => 2383,  4301 => 2369,  4295 => 2367,  4288 => 2363,  4282 => 2360,  4273 => 2353,  4271 => 2352,  4265 => 2349,  4259 => 2346,  4244 => 2334,  4224 => 2317,  4218 => 2314,  4203 => 2302,  4183 => 2285,  4177 => 2282,  4164 => 2272,  4158 => 2269,  4145 => 2259,  4139 => 2256,  4131 => 2251,  4125 => 2248,  4117 => 2243,  4111 => 2240,  4103 => 2235,  4097 => 2232,  4082 => 2220,  4062 => 2203,  4056 => 2200,  4043 => 2190,  4037 => 2187,  4029 => 2182,  4023 => 2179,  4008 => 2167,  3988 => 2150,  3982 => 2147,  3969 => 2137,  3963 => 2134,  3955 => 2129,  3949 => 2126,  3941 => 2121,  3935 => 2118,  3927 => 2113,  3921 => 2110,  3913 => 2105,  3907 => 2102,  3899 => 2097,  3893 => 2094,  3878 => 2082,  3858 => 2065,  3852 => 2062,  3839 => 2052,  3833 => 2049,  3825 => 2044,  3819 => 2041,  3811 => 2036,  3805 => 2033,  3797 => 2028,  3791 => 2025,  3783 => 2020,  3777 => 2017,  3762 => 2005,  3742 => 1988,  3736 => 1985,  3723 => 1975,  3717 => 1972,  3709 => 1967,  3703 => 1964,  3695 => 1959,  3689 => 1956,  3674 => 1944,  3654 => 1927,  3648 => 1924,  3640 => 1919,  3634 => 1916,  3626 => 1911,  3620 => 1908,  3605 => 1896,  3589 => 1882,  3583 => 1880,  3576 => 1876,  3570 => 1873,  3561 => 1866,  3559 => 1865,  3553 => 1862,  3547 => 1859,  3539 => 1854,  3533 => 1851,  3525 => 1846,  3519 => 1843,  3511 => 1838,  3505 => 1835,  3490 => 1823,  3474 => 1809,  3468 => 1807,  3461 => 1803,  3455 => 1800,  3446 => 1793,  3444 => 1792,  3438 => 1789,  3432 => 1786,  3424 => 1781,  3418 => 1778,  3405 => 1768,  3399 => 1765,  3391 => 1760,  3385 => 1757,  3372 => 1747,  3366 => 1744,  3358 => 1739,  3352 => 1736,  3339 => 1726,  3333 => 1723,  3325 => 1718,  3319 => 1715,  3304 => 1703,  3288 => 1689,  3282 => 1687,  3275 => 1683,  3269 => 1680,  3260 => 1673,  3258 => 1672,  3252 => 1669,  3246 => 1666,  3238 => 1661,  3232 => 1658,  3217 => 1646,  3201 => 1632,  3195 => 1630,  3188 => 1626,  3182 => 1623,  3173 => 1616,  3171 => 1615,  3165 => 1612,  3159 => 1609,  3151 => 1604,  3145 => 1601,  3130 => 1589,  3114 => 1575,  3108 => 1573,  3101 => 1569,  3095 => 1566,  3086 => 1559,  3084 => 1558,  3078 => 1555,  3072 => 1552,  3064 => 1547,  3058 => 1544,  3043 => 1532,  3023 => 1515,  3017 => 1512,  3002 => 1500,  2986 => 1486,  2980 => 1484,  2973 => 1480,  2967 => 1477,  2958 => 1470,  2956 => 1469,  2950 => 1466,  2944 => 1463,  2936 => 1458,  2930 => 1455,  2915 => 1443,  2899 => 1429,  2893 => 1427,  2886 => 1423,  2880 => 1420,  2871 => 1413,  2869 => 1412,  2863 => 1409,  2857 => 1406,  2849 => 1401,  2843 => 1398,  2828 => 1386,  2808 => 1369,  2802 => 1366,  2789 => 1356,  2783 => 1353,  2770 => 1343,  2764 => 1340,  2756 => 1335,  2750 => 1332,  2742 => 1327,  2736 => 1324,  2723 => 1314,  2717 => 1311,  2709 => 1306,  2703 => 1303,  2695 => 1298,  2689 => 1295,  2681 => 1290,  2675 => 1287,  2660 => 1275,  2640 => 1258,  2634 => 1255,  2626 => 1250,  2620 => 1247,  2605 => 1235,  2585 => 1218,  2579 => 1215,  2571 => 1210,  2565 => 1207,  2552 => 1197,  2546 => 1194,  2538 => 1189,  2532 => 1186,  2517 => 1174,  2415 => 1075,  2390 => 1052,  2379 => 1049,  2376 => 1048,  2372 => 1047,  2368 => 1045,  2357 => 1042,  2354 => 1041,  2350 => 1040,  2346 => 1038,  2337 => 1035,  2334 => 1034,  2330 => 1033,  2324 => 1030,  2320 => 1028,  2311 => 1025,  2308 => 1024,  2304 => 1023,  2300 => 1021,  2291 => 1018,  2288 => 1017,  2284 => 1016,  2278 => 1013,  2274 => 1011,  2265 => 1008,  2262 => 1007,  2258 => 1006,  2254 => 1004,  2245 => 1001,  2242 => 1000,  2238 => 999,  2234 => 997,  2225 => 994,  2222 => 993,  2218 => 992,  2214 => 990,  2205 => 987,  2202 => 986,  2198 => 985,  2194 => 983,  2185 => 980,  2182 => 979,  2178 => 978,  2174 => 976,  2165 => 973,  2162 => 972,  2158 => 971,  2152 => 968,  2148 => 966,  2139 => 963,  2136 => 962,  2132 => 961,  2128 => 959,  2119 => 956,  2116 => 955,  2112 => 954,  2108 => 952,  2099 => 949,  2096 => 948,  2092 => 947,  2088 => 945,  2079 => 942,  2076 => 941,  2072 => 940,  2068 => 938,  2059 => 935,  2056 => 934,  2052 => 933,  2048 => 931,  2039 => 928,  2036 => 927,  2032 => 926,  2028 => 924,  2019 => 921,  2016 => 920,  2012 => 919,  2006 => 916,  2002 => 914,  1993 => 911,  1990 => 910,  1986 => 909,  1982 => 907,  1973 => 904,  1970 => 903,  1966 => 902,  1962 => 900,  1953 => 897,  1950 => 896,  1946 => 895,  1942 => 893,  1933 => 890,  1930 => 889,  1926 => 888,  1922 => 886,  1913 => 883,  1910 => 882,  1906 => 881,  1902 => 879,  1893 => 876,  1890 => 875,  1886 => 874,  1882 => 872,  1873 => 869,  1870 => 868,  1866 => 867,  1862 => 865,  1853 => 862,  1850 => 861,  1846 => 860,  1842 => 858,  1833 => 855,  1830 => 854,  1826 => 853,  1822 => 851,  1813 => 848,  1810 => 847,  1806 => 846,  1802 => 844,  1793 => 841,  1790 => 840,  1786 => 839,  1782 => 837,  1773 => 834,  1770 => 833,  1766 => 832,  1762 => 830,  1753 => 827,  1750 => 826,  1746 => 825,  1742 => 823,  1733 => 820,  1730 => 819,  1726 => 818,  1722 => 816,  1713 => 813,  1710 => 812,  1706 => 811,  1702 => 809,  1693 => 806,  1690 => 805,  1686 => 804,  1682 => 802,  1673 => 799,  1670 => 798,  1666 => 797,  1662 => 795,  1653 => 792,  1650 => 791,  1646 => 790,  1642 => 788,  1633 => 785,  1630 => 784,  1626 => 783,  1622 => 781,  1613 => 778,  1610 => 777,  1606 => 776,  1600 => 773,  1596 => 771,  1587 => 768,  1584 => 767,  1580 => 766,  1575 => 763,  1566 => 760,  1563 => 759,  1559 => 758,  1555 => 756,  1546 => 753,  1543 => 752,  1539 => 751,  1535 => 749,  1526 => 746,  1523 => 745,  1519 => 744,  1515 => 742,  1506 => 739,  1503 => 738,  1499 => 737,  1493 => 734,  1489 => 732,  1480 => 729,  1477 => 728,  1473 => 727,  1469 => 725,  1460 => 722,  1457 => 721,  1453 => 720,  1449 => 718,  1440 => 715,  1437 => 714,  1433 => 713,  1429 => 711,  1420 => 708,  1417 => 707,  1413 => 706,  1409 => 704,  1400 => 701,  1397 => 700,  1393 => 699,  1387 => 696,  1383 => 694,  1374 => 691,  1371 => 690,  1367 => 689,  1363 => 687,  1354 => 684,  1351 => 683,  1347 => 682,  1343 => 680,  1334 => 677,  1331 => 676,  1327 => 675,  1323 => 673,  1314 => 670,  1311 => 669,  1307 => 668,  1302 => 665,  1293 => 662,  1290 => 661,  1286 => 660,  1282 => 658,  1273 => 655,  1270 => 654,  1266 => 653,  1262 => 651,  1253 => 648,  1250 => 647,  1246 => 646,  1242 => 644,  1233 => 641,  1230 => 640,  1226 => 639,  1222 => 637,  1213 => 634,  1210 => 633,  1206 => 632,  1200 => 629,  1196 => 627,  1187 => 624,  1184 => 623,  1180 => 622,  1176 => 620,  1167 => 617,  1164 => 616,  1160 => 615,  1154 => 612,  1150 => 610,  1141 => 607,  1138 => 606,  1134 => 605,  1130 => 603,  1121 => 600,  1118 => 599,  1114 => 598,  1109 => 595,  1100 => 592,  1097 => 591,  1093 => 590,  1089 => 588,  1080 => 585,  1077 => 584,  1073 => 583,  1069 => 581,  1060 => 578,  1057 => 577,  1053 => 576,  1046 => 572,  1033 => 561,  1024 => 559,  1020 => 558,  952 => 493,  945 => 489,  937 => 484,  928 => 478,  921 => 474,  913 => 469,  905 => 464,  897 => 459,  889 => 454,  881 => 449,  872 => 443,  865 => 439,  857 => 434,  849 => 429,  841 => 424,  833 => 419,  825 => 414,  817 => 409,  808 => 403,  801 => 399,  793 => 394,  785 => 389,  777 => 384,  769 => 379,  761 => 374,  753 => 369,  745 => 364,  737 => 359,  729 => 354,  721 => 349,  713 => 344,  705 => 339,  697 => 334,  689 => 329,  681 => 324,  673 => 319,  665 => 314,  657 => 309,  649 => 304,  640 => 298,  633 => 294,  625 => 289,  617 => 284,  609 => 279,  601 => 274,  592 => 268,  585 => 264,  577 => 259,  569 => 254,  561 => 249,  553 => 244,  544 => 238,  537 => 234,  529 => 229,  521 => 224,  513 => 219,  505 => 214,  497 => 209,  489 => 204,  481 => 199,  473 => 194,  464 => 188,  457 => 184,  449 => 179,  440 => 173,  433 => 169,  425 => 164,  417 => 159,  409 => 154,  401 => 149,  392 => 143,  383 => 136,  381 => 135,  368 => 126,  366 => 125,  361 => 124,  359 => 123,  354 => 121,  351 => 120,  349 => 119,  344 => 117,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Preventivo{% endblock %}
{% block body %}
    <script src=\"{{ asset('js/jquery.CongelarFilaColumna.js') }}\"></script>
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        <div class=\"tableWide-wrapper\" tabindex=\"0\">
                                                <table id=\"mainTable\" class=\"table table-bordered\">
                                                    <tbody>
                                                <tr id=\"firstItem\">
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>

                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>

                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>

                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\"></td>
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_{{ item }}\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_{{ item }}\" onchange=\"check({{ item }},63)\">
                                                        </td>
                                                    {% endfor %}
                                                </tr>
                                                <tr>
                                                    {% for item in 1..colCount %}
                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_{{ item }}\" onchange=\"check({{ item }},64)\">
                                                        </td>
                                                    {% endfor %}
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
                                console.log(\"GET \" + valn)
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
        thead {
            z-index: 1000;
        }
        .table td {
            padding: 0;
            min-height: 33px;
            height: 33px;
            font-size: 10px;
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
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset(\"js/jquery.fixedheadertable.min.js\") }}\"></script>
    <script>
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 430) {
                \$('#topTable').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','overlay');
                \$('.itemHead').width('100');
                \$('#firstItem').height('79');
            } else {
                \$('#topTable').css('position','').css('top','63px').css('background','#FFF').width('100%');
                \$('#firstItem').height('31');
            }
        });


    </script>
    <script>
        \$(document).ready(function () {
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
    </script>
{% endblock %}
", "expertations/edit.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/edit.advanced.html.twig");
    }
}
