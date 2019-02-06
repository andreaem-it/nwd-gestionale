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
                                    <div class=\"col-9 pl-0\" style=\"overflow:auto;\">
                                            <div class=\"scroll\" style=\"overflow:auto;display:inline-block;\">
                                                <table id=\"linked-scrollbar-fixed-1\" class=\"table-2 table table-bordered\">
                                                    <thead>
                                                        <tr>
                                                            ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 520, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 521
            echo "                                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                                                            <th class=\"itemHead\">
                                                                Sistemi
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class=\"scroll\" style=\"overflow:auto;display:inline-block;top: -8px;position:relative\">
                                                <table id=\"linked-scrollbar-fixed-2\" class=\"table-2 table table-bordered\" >
                                                    <tbody>
                                                <tr id=\"firstItem\">
                                                    <td class=\"row-title\" colspan=\"";
        // line 534
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 534, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>

                                                <tr>
                                                    ";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 538, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 539
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 540
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 545, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 546
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 552
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 552, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 553
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 554
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 560
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 560, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 561
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 562
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 567, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 568
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 569
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 572
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 574
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 574, $this->source); })()) + 1), "html", null, true);
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 579
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 584, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 585
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 586
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 591
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 591, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 594
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 594, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 595
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 596
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 601
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 601, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 602
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 603
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 608, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 609
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 610
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 615, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 616
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
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

                                                    ";
        // line 630
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 630, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 631
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 632
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 637, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 638
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 639
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 644
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 644, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 645
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 646
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 651, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 652
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 653
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 656
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 658
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 658, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 661, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 662
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 663
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 668, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 669
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
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
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 728, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 729
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 730
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 735
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 735, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 738, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 739
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 740
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 743
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 745, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 746
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 752
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 752, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 753
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 754
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 757
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 759, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 760
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 761
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 766, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 767
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
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
                                                    ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 773, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 774
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 775
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 780
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 780, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 781
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 782
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 787, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 788
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 789
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 794, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 795
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 796
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 799
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 801
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 801, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 802
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 803
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 806
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 808
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 808, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 809
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 810
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 815, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 816
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 822
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 822, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 823
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 824
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 827
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 829
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 829, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 830
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 831
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 834
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 836, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 837
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 838
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 841
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 843, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 844
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 845
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 850
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 850, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 851
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 852
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 855
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 857
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 857, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 858
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 859
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 862
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 864
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 864, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 865
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 866
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 871, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 872
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 873
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 878
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 878, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 881, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 882
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
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
                                                    ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 916, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 917
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 918
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 921
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 923, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 924
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 925
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 930
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 930, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 933, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 934
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
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
                                                    ";
        // line 968
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 968, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 969
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 970
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 973
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 975
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 975, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 978
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 978, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 979
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
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
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
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
                                                    <td class=\"row-title\" colspan=\"";
        // line 992
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 992, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 995
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 995, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 996
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 997
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1002, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1003
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 1004
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
        // line 1007
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1009
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1009, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1010
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 1011
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
        // line 1014
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
        // line 1037
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1037, $this->source); })()), "submit", []), 'widget');
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
        // line 1136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1136, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1148, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1151, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1156, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1159, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1169, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1172, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1177, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1180, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1197, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1209, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1212, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1217, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1220, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1237, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1249, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1252, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1257, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1260, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1265, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1268, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1273, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1276, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1286, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1289, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1294, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1297, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1302, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1305, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1315, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1318, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1328, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1331, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1348, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1360, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1363, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1368, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1371, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1374
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1374, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1375
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1382
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1382, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1385
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1385, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1389
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1389, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1391
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
        // line 1405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1405, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1417
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1417, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1420, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1425, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1428, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1431
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1431, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1432
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1439
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1439, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1442
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1442, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1446
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1446, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1448
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
        // line 1462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1462, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1474
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1474, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1477, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1494
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1494, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1506
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1506, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1509, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1514, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1517, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1520
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1520, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1521
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1528
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1528, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1531
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1531, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1535
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1535, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1537
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
        // line 1551
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1551, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1563, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1566, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1571
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1571, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1574
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1574, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1577
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1577, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1578
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1585
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1585, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1588
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1588, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1592
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1592, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1594
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
        // line 1608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1608, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1620
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1620, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1623
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1623, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1628
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1628, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1631
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1631, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1634
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1634, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1635
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1642
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1642, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1645
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1645, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1649
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1649, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1651
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
        // line 1665
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1665, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1677
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1677, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1680
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1680, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1685
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1685, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1688
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1688, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1698
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1698, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1701
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1701, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1706, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1709, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1719
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1719, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1722
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1722, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1727
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1727, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1730
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1730, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1740
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1740, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1743
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1743, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1748
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1748, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1751
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1751, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1754
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1754, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1755
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1762
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1762, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1765
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1765, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1769
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1769, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1771
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
        // line 1785
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1785, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 1797
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1797, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1800
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1800, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1805
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1805, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1808
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1808, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1813
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1813, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1816
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1816, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1821
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1821, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1824
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1824, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1827
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1827, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1828
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1835
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1835, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1838
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1838, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1842
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1842, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1844
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
        // line 1858
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1858, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 1870
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1870, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1873
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1873, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1878
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1878, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1881
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1881, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1886
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1886, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1889
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1889, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 1906
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1906, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 1918
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1918, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1921
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1921, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1926
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1926, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1929
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1929, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1934
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1934, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1937
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1937, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1947
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1947, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1950
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1950, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 1967
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1967, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 1979
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1979, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1982
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1982, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1987
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1987, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1990
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1990, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1995
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1995, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1998
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1998, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2003
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2003, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2006
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2006, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2011
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2011, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2014
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2014, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 2024
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2024, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2027
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2027, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 2044
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2044, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 2056
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2056, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2059
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2059, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2064
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2064, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2067
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2067, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2072
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2072, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2075
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2075, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2080
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2080, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2083
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2083, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2088
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2088, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2091
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2091, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2096
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2096, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2099
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2099, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 2109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2109, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2112, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 2129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2129, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 2141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2141, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2144, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2149, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2152, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 2162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2162, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2165, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 2182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2182, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 2194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2194, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2197, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2202, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2205, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2210, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2213, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2218, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2221, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 2231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2231, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2234, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 2244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2244, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2247, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 2264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2264, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 2276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2276, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2279
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2279, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 2296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2296, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 2308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2308, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2311, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 2314
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2314, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 2315
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 2322
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2322, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 2325
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2325, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2329
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2329, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2331
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
        // line 2345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2345, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 2357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2357, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2360, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 2377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2377, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 2389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2389, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2392, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2397, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2400, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 2410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2410, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2413, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 2423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2423, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2426, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2431
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2431, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2434, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2439, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2442, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2447, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2450, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2455, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2458
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2458, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2463, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2466, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2471
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2471, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2474
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2474, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 2484
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2484, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2487, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2492, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2495, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 2505
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2505, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2508, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2513, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2516, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 2526
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2526, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2529
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2529, $this->source); })()), "opt21_14Value", []), 'label');
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
            ";
        // line 2547
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2547, $this->source); })()), 'form_end');
        echo "
            <script>
                \$(document).ready( function () {
                    for (i=1; i < 64; i++) {
                        update(";
        // line 2551
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expAdv"]) || array_key_exists("expAdv", $context) ? $context["expAdv"] : (function () { throw new Twig_Error_Runtime('Variable "expAdv" does not exist.', 2551, $this->source); })()), "father", []), "html", null, true);
        echo ",'val' + i, 'val' + i);
                    }
                    for(i=0; i < ";
        // line 2553
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2553, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', true);
                        \$(\"#form_val64_\" + i ).prop('disabled', true);
                    }
                    window.setTimeout(function() {
                        calculate(62);
                        for(i=0; i < ";
        // line 2559
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2559, $this->source); })()), "html", null, true);
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
        // line 2577
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2577, $this->source); })()), "id", []), "html", null, true);
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
        // line 2594
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2594, $this->source); })()), "html", null, true);
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
        // line 2607
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2607, $this->source); })()), "html", null, true);
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
        // line 2647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2653
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2654
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
        // line 2762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2764
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2765
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 430) {
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','auto');
                \$('.itemHead').width('100');
                \$('#firstItem').height('63');
            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
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
        return array (  4863 => 2765,  4854 => 2764,  4842 => 2762,  4732 => 2654,  4723 => 2653,  4711 => 2651,  4704 => 2647,  4661 => 2607,  4645 => 2594,  4625 => 2577,  4604 => 2559,  4595 => 2553,  4590 => 2551,  4583 => 2547,  4562 => 2529,  4556 => 2526,  4543 => 2516,  4537 => 2513,  4529 => 2508,  4523 => 2505,  4510 => 2495,  4504 => 2492,  4496 => 2487,  4490 => 2484,  4477 => 2474,  4471 => 2471,  4463 => 2466,  4457 => 2463,  4449 => 2458,  4443 => 2455,  4435 => 2450,  4429 => 2447,  4421 => 2442,  4415 => 2439,  4407 => 2434,  4401 => 2431,  4393 => 2426,  4387 => 2423,  4374 => 2413,  4368 => 2410,  4355 => 2400,  4349 => 2397,  4341 => 2392,  4335 => 2389,  4320 => 2377,  4300 => 2360,  4294 => 2357,  4279 => 2345,  4263 => 2331,  4257 => 2329,  4250 => 2325,  4244 => 2322,  4235 => 2315,  4233 => 2314,  4227 => 2311,  4221 => 2308,  4206 => 2296,  4186 => 2279,  4180 => 2276,  4165 => 2264,  4145 => 2247,  4139 => 2244,  4126 => 2234,  4120 => 2231,  4107 => 2221,  4101 => 2218,  4093 => 2213,  4087 => 2210,  4079 => 2205,  4073 => 2202,  4065 => 2197,  4059 => 2194,  4044 => 2182,  4024 => 2165,  4018 => 2162,  4005 => 2152,  3999 => 2149,  3991 => 2144,  3985 => 2141,  3970 => 2129,  3950 => 2112,  3944 => 2109,  3931 => 2099,  3925 => 2096,  3917 => 2091,  3911 => 2088,  3903 => 2083,  3897 => 2080,  3889 => 2075,  3883 => 2072,  3875 => 2067,  3869 => 2064,  3861 => 2059,  3855 => 2056,  3840 => 2044,  3820 => 2027,  3814 => 2024,  3801 => 2014,  3795 => 2011,  3787 => 2006,  3781 => 2003,  3773 => 1998,  3767 => 1995,  3759 => 1990,  3753 => 1987,  3745 => 1982,  3739 => 1979,  3724 => 1967,  3704 => 1950,  3698 => 1947,  3685 => 1937,  3679 => 1934,  3671 => 1929,  3665 => 1926,  3657 => 1921,  3651 => 1918,  3636 => 1906,  3616 => 1889,  3610 => 1886,  3602 => 1881,  3596 => 1878,  3588 => 1873,  3582 => 1870,  3567 => 1858,  3551 => 1844,  3545 => 1842,  3538 => 1838,  3532 => 1835,  3523 => 1828,  3521 => 1827,  3515 => 1824,  3509 => 1821,  3501 => 1816,  3495 => 1813,  3487 => 1808,  3481 => 1805,  3473 => 1800,  3467 => 1797,  3452 => 1785,  3436 => 1771,  3430 => 1769,  3423 => 1765,  3417 => 1762,  3408 => 1755,  3406 => 1754,  3400 => 1751,  3394 => 1748,  3386 => 1743,  3380 => 1740,  3367 => 1730,  3361 => 1727,  3353 => 1722,  3347 => 1719,  3334 => 1709,  3328 => 1706,  3320 => 1701,  3314 => 1698,  3301 => 1688,  3295 => 1685,  3287 => 1680,  3281 => 1677,  3266 => 1665,  3250 => 1651,  3244 => 1649,  3237 => 1645,  3231 => 1642,  3222 => 1635,  3220 => 1634,  3214 => 1631,  3208 => 1628,  3200 => 1623,  3194 => 1620,  3179 => 1608,  3163 => 1594,  3157 => 1592,  3150 => 1588,  3144 => 1585,  3135 => 1578,  3133 => 1577,  3127 => 1574,  3121 => 1571,  3113 => 1566,  3107 => 1563,  3092 => 1551,  3076 => 1537,  3070 => 1535,  3063 => 1531,  3057 => 1528,  3048 => 1521,  3046 => 1520,  3040 => 1517,  3034 => 1514,  3026 => 1509,  3020 => 1506,  3005 => 1494,  2985 => 1477,  2979 => 1474,  2964 => 1462,  2948 => 1448,  2942 => 1446,  2935 => 1442,  2929 => 1439,  2920 => 1432,  2918 => 1431,  2912 => 1428,  2906 => 1425,  2898 => 1420,  2892 => 1417,  2877 => 1405,  2861 => 1391,  2855 => 1389,  2848 => 1385,  2842 => 1382,  2833 => 1375,  2831 => 1374,  2825 => 1371,  2819 => 1368,  2811 => 1363,  2805 => 1360,  2790 => 1348,  2770 => 1331,  2764 => 1328,  2751 => 1318,  2745 => 1315,  2732 => 1305,  2726 => 1302,  2718 => 1297,  2712 => 1294,  2704 => 1289,  2698 => 1286,  2685 => 1276,  2679 => 1273,  2671 => 1268,  2665 => 1265,  2657 => 1260,  2651 => 1257,  2643 => 1252,  2637 => 1249,  2622 => 1237,  2602 => 1220,  2596 => 1217,  2588 => 1212,  2582 => 1209,  2567 => 1197,  2547 => 1180,  2541 => 1177,  2533 => 1172,  2527 => 1169,  2514 => 1159,  2508 => 1156,  2500 => 1151,  2494 => 1148,  2479 => 1136,  2377 => 1037,  2352 => 1014,  2341 => 1011,  2338 => 1010,  2334 => 1009,  2330 => 1007,  2319 => 1004,  2316 => 1003,  2312 => 1002,  2308 => 1000,  2299 => 997,  2296 => 996,  2292 => 995,  2286 => 992,  2282 => 990,  2273 => 987,  2270 => 986,  2266 => 985,  2262 => 983,  2253 => 980,  2250 => 979,  2246 => 978,  2240 => 975,  2236 => 973,  2227 => 970,  2224 => 969,  2220 => 968,  2216 => 966,  2207 => 963,  2204 => 962,  2200 => 961,  2196 => 959,  2187 => 956,  2184 => 955,  2180 => 954,  2176 => 952,  2167 => 949,  2164 => 948,  2160 => 947,  2156 => 945,  2147 => 942,  2144 => 941,  2140 => 940,  2136 => 938,  2127 => 935,  2124 => 934,  2120 => 933,  2114 => 930,  2110 => 928,  2101 => 925,  2098 => 924,  2094 => 923,  2090 => 921,  2081 => 918,  2078 => 917,  2074 => 916,  2070 => 914,  2061 => 911,  2058 => 910,  2054 => 909,  2050 => 907,  2041 => 904,  2038 => 903,  2034 => 902,  2030 => 900,  2021 => 897,  2018 => 896,  2014 => 895,  2010 => 893,  2001 => 890,  1998 => 889,  1994 => 888,  1990 => 886,  1981 => 883,  1978 => 882,  1974 => 881,  1968 => 878,  1964 => 876,  1955 => 873,  1952 => 872,  1948 => 871,  1944 => 869,  1935 => 866,  1932 => 865,  1928 => 864,  1924 => 862,  1915 => 859,  1912 => 858,  1908 => 857,  1904 => 855,  1895 => 852,  1892 => 851,  1888 => 850,  1884 => 848,  1875 => 845,  1872 => 844,  1868 => 843,  1864 => 841,  1855 => 838,  1852 => 837,  1848 => 836,  1844 => 834,  1835 => 831,  1832 => 830,  1828 => 829,  1824 => 827,  1815 => 824,  1812 => 823,  1808 => 822,  1804 => 820,  1795 => 817,  1792 => 816,  1788 => 815,  1784 => 813,  1775 => 810,  1772 => 809,  1768 => 808,  1764 => 806,  1755 => 803,  1752 => 802,  1748 => 801,  1744 => 799,  1735 => 796,  1732 => 795,  1728 => 794,  1724 => 792,  1715 => 789,  1712 => 788,  1708 => 787,  1704 => 785,  1695 => 782,  1692 => 781,  1688 => 780,  1684 => 778,  1675 => 775,  1672 => 774,  1668 => 773,  1664 => 771,  1655 => 768,  1652 => 767,  1648 => 766,  1644 => 764,  1635 => 761,  1632 => 760,  1628 => 759,  1624 => 757,  1615 => 754,  1612 => 753,  1608 => 752,  1604 => 750,  1595 => 747,  1592 => 746,  1588 => 745,  1584 => 743,  1575 => 740,  1572 => 739,  1568 => 738,  1562 => 735,  1558 => 733,  1549 => 730,  1546 => 729,  1542 => 728,  1537 => 725,  1528 => 722,  1525 => 721,  1521 => 720,  1517 => 718,  1508 => 715,  1505 => 714,  1501 => 713,  1497 => 711,  1488 => 708,  1485 => 707,  1481 => 706,  1477 => 704,  1468 => 701,  1465 => 700,  1461 => 699,  1455 => 696,  1451 => 694,  1442 => 691,  1439 => 690,  1435 => 689,  1431 => 687,  1422 => 684,  1419 => 683,  1415 => 682,  1411 => 680,  1402 => 677,  1399 => 676,  1395 => 675,  1391 => 673,  1382 => 670,  1379 => 669,  1375 => 668,  1371 => 666,  1362 => 663,  1359 => 662,  1355 => 661,  1349 => 658,  1345 => 656,  1336 => 653,  1333 => 652,  1329 => 651,  1325 => 649,  1316 => 646,  1313 => 645,  1309 => 644,  1305 => 642,  1296 => 639,  1293 => 638,  1289 => 637,  1285 => 635,  1276 => 632,  1273 => 631,  1269 => 630,  1264 => 627,  1255 => 624,  1252 => 623,  1248 => 622,  1244 => 620,  1235 => 617,  1232 => 616,  1228 => 615,  1224 => 613,  1215 => 610,  1212 => 609,  1208 => 608,  1204 => 606,  1195 => 603,  1192 => 602,  1188 => 601,  1184 => 599,  1175 => 596,  1172 => 595,  1168 => 594,  1162 => 591,  1158 => 589,  1149 => 586,  1146 => 585,  1142 => 584,  1138 => 582,  1129 => 579,  1126 => 578,  1122 => 577,  1116 => 574,  1112 => 572,  1103 => 569,  1100 => 568,  1096 => 567,  1092 => 565,  1083 => 562,  1080 => 561,  1076 => 560,  1071 => 557,  1062 => 554,  1059 => 553,  1055 => 552,  1051 => 550,  1042 => 547,  1039 => 546,  1035 => 545,  1031 => 543,  1022 => 540,  1019 => 539,  1015 => 538,  1008 => 534,  995 => 523,  986 => 521,  982 => 520,  952 => 493,  945 => 489,  937 => 484,  928 => 478,  921 => 474,  913 => 469,  905 => 464,  897 => 459,  889 => 454,  881 => 449,  872 => 443,  865 => 439,  857 => 434,  849 => 429,  841 => 424,  833 => 419,  825 => 414,  817 => 409,  808 => 403,  801 => 399,  793 => 394,  785 => 389,  777 => 384,  769 => 379,  761 => 374,  753 => 369,  745 => 364,  737 => 359,  729 => 354,  721 => 349,  713 => 344,  705 => 339,  697 => 334,  689 => 329,  681 => 324,  673 => 319,  665 => 314,  657 => 309,  649 => 304,  640 => 298,  633 => 294,  625 => 289,  617 => 284,  609 => 279,  601 => 274,  592 => 268,  585 => 264,  577 => 259,  569 => 254,  561 => 249,  553 => 244,  544 => 238,  537 => 234,  529 => 229,  521 => 224,  513 => 219,  505 => 214,  497 => 209,  489 => 204,  481 => 199,  473 => 194,  464 => 188,  457 => 184,  449 => 179,  440 => 173,  433 => 169,  425 => 164,  417 => 159,  409 => 154,  401 => 149,  392 => 143,  383 => 136,  381 => 135,  368 => 126,  366 => 125,  361 => 124,  359 => 123,  354 => 121,  351 => 120,  349 => 119,  344 => 117,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                                    <div class=\"col-9 pl-0\" style=\"overflow:auto;\">
                                            <div class=\"scroll\" style=\"overflow:auto;display:inline-block;\">
                                                <table id=\"linked-scrollbar-fixed-1\" class=\"table-2 table table-bordered\">
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
                                            <div class=\"scroll\" style=\"overflow:auto;display:inline-block;top: -8px;position:relative\">
                                                <table id=\"linked-scrollbar-fixed-2\" class=\"table-2 table table-bordered\" >
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
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('70.2%').css('overflow','auto');
                \$('.itemHead').width('100');
                \$('#firstItem').height('63');
            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
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
