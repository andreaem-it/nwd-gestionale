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
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 139, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 185, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 208, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 225, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 237, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 240, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 245, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 248, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 256, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 261, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 277, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 282, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 285, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 306, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 316, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 319, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 336, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 351, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 356, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 359, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 362
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 362, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 363
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 370
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 373, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 377
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 377, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 379
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
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 393, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 405, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 408, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 413, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 416, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 419
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 419, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 420
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 427, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 430
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 430, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 434
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 434, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 436
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
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 450, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 462, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 465, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 482, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 494
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 494, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 497
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 497, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 502
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 502, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 505
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 505, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 508
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 508, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 509
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 516
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 516, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 519
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 519, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 523
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 523, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 525
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
        // line 539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 539, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 551
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 551, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 554, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 559, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 562
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 562, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 565
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 565, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 566
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 573
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 573, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 576
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 576, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 580
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 580, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 582
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
        // line 596
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 596, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 608, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 611
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 611, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 616
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 616, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 619
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 619, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 622
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 622, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 623
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 630
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 630, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 633
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 633, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 637
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 637, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 639
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
        // line 653
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 653, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 665
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 665, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 668
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 668, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 673
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 673, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 676
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 676, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 686
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 686, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 689
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 689, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 694
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 694, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 697
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 697, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 707
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 707, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 710, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 715
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 715, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 718, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 728
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 728, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 731
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 731, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 736, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 739, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 742
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 742, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 743
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 750
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 750, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 753
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 753, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 757
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 757, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 759
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
        // line 773
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 773, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 785
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 785, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 788
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 788, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 793
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 793, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 796
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 796, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 801
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 801, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 804
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 804, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 809
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 809, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 812
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 812, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 815
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 815, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 816
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 823
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 823, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 826
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 826, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 830
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 830, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 832
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
        // line 846
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 846, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 858
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 858, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 861
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 861, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 866
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 866, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 869
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 869, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 874
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 874, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 877
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 877, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 894
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 894, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 906
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 906, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 909
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 909, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 914
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 914, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 917
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 917, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 922
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 922, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 925
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 925, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 935
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 935, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 938
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 938, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 955
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 955, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 967
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 967, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 970
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 970, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 975
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 975, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 978
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 978, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 983
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 983, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 986
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 986, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 991
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 991, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 994
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 994, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 999
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 999, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1002
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1002, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 1012
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1012, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1015
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1015, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 1032
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1032, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 1044
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1044, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1047
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1047, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1052
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1052, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1055
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1055, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1060
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1060, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1063
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1063, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1068
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1068, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1071
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1071, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1076
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1076, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1079
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1079, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1084
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1084, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1087
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1087, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 1097
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1097, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1100, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 1117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1117, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 1129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1129, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1132, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1137, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1140, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 1150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1150, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1153, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 1170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1170, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 1182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1182, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1185, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1190, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1193, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1198, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1201, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1206, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1209, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 1219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1219, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1222, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 1232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1232, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1235, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 1252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1252, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 1264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1264, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1267, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 1284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1284, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 1296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1296, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1299, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1302
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1302, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1303
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1310
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1310, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1313
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1313, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1317
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1317, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1319
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
        // line 1333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1333, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 1345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1345, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1348, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 1365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1365, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 1377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1377, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1380, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1385, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1388, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 1398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1398, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1401, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 1411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1411, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1414, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1419, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1422, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1427, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1430, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1435, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1438, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1443, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1446, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1451, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1454, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1459
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1459, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1462, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 1472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1472, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1475, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1480, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1483, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 1493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1493, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1496, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1501, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1504, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 1514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1514, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1517, $this->source); })()), "opt21_14Value", []), 'label');
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
            <div class=\"row mt-1\">
                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 1539
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1539, $this->source); })()), 'form_start');
        echo "
                            <div class=\"wrapper1\" style=\"height: 30px;\">
                                ";
        // line 1541
        $context["floor"] = 0;
        // line 1542
        echo "                                <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 1543
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1543, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 1545
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1545, $this->source); })()) - 1);
        // line 1546
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1546, $this->source); })()), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 1546, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 1547
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1547, $this->source); })()) + 1);
        // line 1548
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1548, $this->source); })()), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 1548, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                            </div>
                            ";
        // line 1557
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1557, $this->source); })())) + 1);
        // line 1558
        echo "
                            <div class=\"wrapper2\">
                                <div class=\"row\">
                                    <div class=\"col-3 pr-0\">
                                        <table class=\"table-1 table table-bordered \">
                                            <th class=\"firstHead\">TIPOLOGIA</th>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1565
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1565, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI PRESA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong >";
        // line 1571
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1571, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1576
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1576, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1581, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1586
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1586, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1591
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1591, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1595
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1595, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI COMANDO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1601
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1601, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1606
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1606, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1610
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1610, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1616
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1616, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1621
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1621, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1626
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1626, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1631
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1631, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1636
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1636, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1641
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1641, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1646
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1646, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1651
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1651, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1656
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1656, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1660
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1660, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    RISCALDAMENTO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1666
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1666, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1671
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1671, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1676
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1676, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1681
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1681, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1686
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1686, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1690
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1690, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    QUADRO ELETTRICO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1696
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1696, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1701
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1701, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1706
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1706, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1711
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1711, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1716
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1716, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1720
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1720, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    SERVIZI PREDISPOSIZIONE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1726
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1726, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1731
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1731, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1736
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1736, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1741
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1741, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1746
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1746, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1751
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1751, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1756
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1756, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1761
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1761, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1766
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1766, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1771
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1771, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1776
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1776, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1781
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1781, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1786
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1786, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1791
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1791, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1796
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1796, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1801
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1801, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1806
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1806, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1811
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1811, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1816
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1816, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1821
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1821, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1825
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1825, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1831
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1831, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1836
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1836, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1841
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1841, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1846
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1846, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1851
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1851, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1856
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1856, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1861
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1861, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1865
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1865, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PREDISPOSIZIONE AUTOMATISMI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1871
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1871, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1876
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1876, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1881
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1881, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1886
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1886, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1891
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1891, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1896
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1896, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1900
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1900, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ASPIRAZIONE CENTRALIZZATA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1906
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1906, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 1911
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1911, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 1915
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1915, $this->source); })()) + 1), "html", null, true);
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
                                        <table class=\"table-2 table table-bordered\">
                                            <div class=\"linked-scrollbar-fixed\">
                                                <thead class=\"linked-scrollbar-fixed\">
                                                <tr>
                                                    ";
        // line 1942
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1942, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 1943
            echo "                                                        <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1945
        echo "                                                    <th class=\"itemHead\">
                                                        Sistemi
                                                    </th>
                                                </tr>
                                                </thead>
                                            </div>
                                            <div class=\"linked-scrollbar-fixed\">
                                                <tbody class=\"linked-scrollbar-fixed\">
                                                <tr id=\"firstItem\">
                                                    <td class=\"row-title\" colspan=\"";
        // line 1954
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1954, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>

                                                <tr>
                                                    ";
        // line 1958
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1958, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1959
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 1960
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1963
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1965
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1965, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1966
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 1967
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1970
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1972
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1972, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1973
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 1974
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1977
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 1980
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1980, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1981
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 1982
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1985
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1987
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1987, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1988
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 1989
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1992
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1994
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1994, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1997
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1997, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1998
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 1999
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2002
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2004
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2004, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2005
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 2006
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2009
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2011
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2011, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2014
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2014, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2015
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 2016
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2019
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2021
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2021, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2022
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 2023
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2026
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2028
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2028, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2029
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 2030
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2033
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2035, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2036
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 2037
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2040
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2042
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2042, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2043
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 2044
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2047
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 2050
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2050, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2051
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 2052
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2055
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2057
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2057, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2058
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 2059
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2062
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2064
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2064, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2065
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 2066
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2069
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2071
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2071, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2072
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 2073
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2076
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2078
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2078, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2081
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2081, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2082
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 2083
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2086
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2088
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2088, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2089
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 2090
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2093
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2095
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2095, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2096
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 2097
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2100
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2102, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2103
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 2104
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2107
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2109, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2110
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 2111
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2114
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2116
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2116, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2119, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2120
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 2121
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2124
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2126, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2127
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 2128
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2131
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2133, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2134
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 2135
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2138
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2140, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2141
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 2142
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2145
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2148, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2149
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 2150
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2153
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2155
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2155, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2158, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2159
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 2160
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2163
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2165, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2166
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 2167
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2170
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2172, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2173
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 2174
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2177
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2179, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2180
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 2181
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2184
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2186, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2187
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 2188
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2191
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2193, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2194
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 2195
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2198
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2200, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2201
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 2202
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2205
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2207, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2208
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 2209
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2212
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2214, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2215
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 2216
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2219
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2221, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2222
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 2223
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2226
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2228, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2229
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 2230
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2233
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2235, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2236
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 2237
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2240
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2242, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2243
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 2244
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2247
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2249, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2250
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 2251
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2254
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2256, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2257
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 2258
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2261
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2263, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2264
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 2265
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2268
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2270, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2271
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 2272
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2275
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2277, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2278
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 2279
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2282
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2284, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2285
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 2286
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2289
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2291, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2292
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 2293
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2296
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2298
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2298, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2301, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2302
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 2303
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2306
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2308, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2309
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 2310
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2313
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2315, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2316
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 2317
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2320
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2322, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2323
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 2324
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2327
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2329, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2330
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 2331
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2334
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2336, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2337
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 2338
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2341
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2343, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2344
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 2345
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2348
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2350
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2350, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2353, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2354
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 2355
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2358
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2360, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2361
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 2362
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2365
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2367, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2368
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 2369
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2372
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2374, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2375
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 2376
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2379
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2381, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2382
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 2383
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2386
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2388, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2389
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 2390
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2393
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2395
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2395, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2398, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2399
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 2400
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2403
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2405, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2406
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 2407
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2410
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 2412
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2412, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 2415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2415, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2416
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 2417
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2420
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2422, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2423
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 2424
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
        // line 2427
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 2429
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2429, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2430
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 2431
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
        // line 2434
        echo "                                                </tr>
                                                </tbody>
                                            </div>
                                        </table>
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
        // line 2449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2449, $this->source); })()), "submit", []), 'widget');
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
                        ";
        // line 2460
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2460, $this->source); })()), 'form_end');
        echo "
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
            ";
        if ($this->env->isDebug()) {
            // line 2539
            \Symfony\Component\VarDumper\VarDumper::dump(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2539, $this->source); })()), "pid", []));
        }
        // line 2540
        echo "            <script>
                \$(document).ready( function () {
                    /*update(";
        // line 2542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2542, $this->source); })()), "id", []), "html", null, true);
        echo ",'pp','val1');
                    update(";
        // line 2543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2543, $this->source); })()), "id", []), "html", null, true);
        echo ",'pl','val8');
                    update(";
        // line 2544
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2544, $this->source); })()), "id", []), "html", null, true);
        echo ",'c1v','val6');
                    update(";
        // line 2545
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2545, $this->source); })()), "id", []), "html", null, true);
        echo ",'c2v','val41');*/
                    for (i=1; i < 64; i++) {
                        update(";
        // line 2547
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expAdv"]) || array_key_exists("expAdv", $context) ? $context["expAdv"] : (function () { throw new Twig_Error_Runtime('Variable "expAdv" does not exist.', 2547, $this->source); })()), "pid", []), "html", null, true);
        echo ",'val' + i, 'val' + i);
                    }
                    for(i=0; i < ";
        // line 2549
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2549, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', true);
                        \$(\"#form_val64_\" + i ).prop('disabled', true);
                    }
                    window.setTimeout(function() {
                        calculate(62);
                        for(i=0; i < ";
        // line 2555
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2555, $this->source); })()), "html", null, true);
        echo "; i++) {
                            \$(\"#form_val63_\" + i ).prop('disabled', false);
                            \$(\"#form_val64_\" + i ).prop('disabled', false);
                        }
                    },10000);
                    //check();

                    \$('.linked-scrollbar-fixed').scroll(function(){
                        \$('.linked-scrollbar-fixed').scrollTop(\$(this).scrollTop());
                    })

                    /*\$('.linked-scrollbar-fixed').attr(\"data-scrolling\", \"false\");

                    \$('.linked-scrollbar-fixed').scroll(function(){
                        console.log(\"scrolled-y\");
                        if(\$(this).attr(\"data-scrolling\") == \"false\"){
                            \$('.linked-scrollbar-fixed').not(this).attr(\"data-scrolling\", \"true\");
                            \$('.linked-scrollbar-fixed').not(this).scrollTop(\$(this).scrollLeft());
                        }
                        \$(this).attr(\"data-scrolling\", \"false\");
                    });*/

                });

                \$('#appbundle_expertationsadvanced_submit').click(function(e) {
                    //e.preventDefault();
                    toastr.info(\"Genero Preventivo\");
                    for(var i = 1; i < 65; i++) {
                        \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                    }
                    \$('#appbundle_expertationsadvanced_father').val(";
        // line 2585
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2585, $this->source); })()), "id", []), "html", null, true);
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
                        url: '/ajax/get/expData/' + exp + '/' + field,
                        success: function (data) {
                            for (var i = 0; i < ";
        // line 2602
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2602, $this->source); })()), "html", null, true);
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
        // line 2614
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2614, $this->source); })()), "html", null, true);
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
        // line 2658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2664
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2665
        echo "    <style>
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
        // line 2770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2772
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2773
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        /*\$('#scroll-r').click(function(e) {
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
        });*/
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 430) {
                console.log(\"scrolled\")
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('93.2%').css('overflow','auto');
                \$('.itemHead').width('100');
                \$('#firstItem').height('78');
            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
                console.log(\"top\");
                \$('#firstItem').height('31');
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
            /*\$('.selector').fixedHeaderTable({
                footer: true,
                cloneHeadToFoot: true,
                fixedColumn: true
            });*/
            /*\$(\".selector\").CongelarFilaColumna({
                Columnas:  1
            });*/
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
        return "expertations/edit.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4888 => 2773,  4879 => 2772,  4867 => 2770,  4760 => 2665,  4751 => 2664,  4739 => 2662,  4732 => 2658,  4685 => 2614,  4670 => 2602,  4650 => 2585,  4617 => 2555,  4608 => 2549,  4603 => 2547,  4598 => 2545,  4594 => 2544,  4590 => 2543,  4586 => 2542,  4582 => 2540,  4579 => 2539,  4496 => 2460,  4482 => 2449,  4465 => 2434,  4454 => 2431,  4451 => 2430,  4447 => 2429,  4443 => 2427,  4432 => 2424,  4429 => 2423,  4425 => 2422,  4421 => 2420,  4412 => 2417,  4409 => 2416,  4405 => 2415,  4399 => 2412,  4395 => 2410,  4386 => 2407,  4383 => 2406,  4379 => 2405,  4375 => 2403,  4366 => 2400,  4363 => 2399,  4359 => 2398,  4353 => 2395,  4349 => 2393,  4340 => 2390,  4337 => 2389,  4333 => 2388,  4329 => 2386,  4320 => 2383,  4317 => 2382,  4313 => 2381,  4309 => 2379,  4300 => 2376,  4297 => 2375,  4293 => 2374,  4289 => 2372,  4280 => 2369,  4277 => 2368,  4273 => 2367,  4269 => 2365,  4260 => 2362,  4257 => 2361,  4253 => 2360,  4249 => 2358,  4240 => 2355,  4237 => 2354,  4233 => 2353,  4227 => 2350,  4223 => 2348,  4214 => 2345,  4211 => 2344,  4207 => 2343,  4203 => 2341,  4194 => 2338,  4191 => 2337,  4187 => 2336,  4183 => 2334,  4174 => 2331,  4171 => 2330,  4167 => 2329,  4163 => 2327,  4154 => 2324,  4151 => 2323,  4147 => 2322,  4143 => 2320,  4134 => 2317,  4131 => 2316,  4127 => 2315,  4123 => 2313,  4114 => 2310,  4111 => 2309,  4107 => 2308,  4103 => 2306,  4094 => 2303,  4091 => 2302,  4087 => 2301,  4081 => 2298,  4077 => 2296,  4068 => 2293,  4065 => 2292,  4061 => 2291,  4057 => 2289,  4048 => 2286,  4045 => 2285,  4041 => 2284,  4037 => 2282,  4028 => 2279,  4025 => 2278,  4021 => 2277,  4017 => 2275,  4008 => 2272,  4005 => 2271,  4001 => 2270,  3997 => 2268,  3988 => 2265,  3985 => 2264,  3981 => 2263,  3977 => 2261,  3968 => 2258,  3965 => 2257,  3961 => 2256,  3957 => 2254,  3948 => 2251,  3945 => 2250,  3941 => 2249,  3937 => 2247,  3928 => 2244,  3925 => 2243,  3921 => 2242,  3917 => 2240,  3908 => 2237,  3905 => 2236,  3901 => 2235,  3897 => 2233,  3888 => 2230,  3885 => 2229,  3881 => 2228,  3877 => 2226,  3868 => 2223,  3865 => 2222,  3861 => 2221,  3857 => 2219,  3848 => 2216,  3845 => 2215,  3841 => 2214,  3837 => 2212,  3828 => 2209,  3825 => 2208,  3821 => 2207,  3817 => 2205,  3808 => 2202,  3805 => 2201,  3801 => 2200,  3797 => 2198,  3788 => 2195,  3785 => 2194,  3781 => 2193,  3777 => 2191,  3768 => 2188,  3765 => 2187,  3761 => 2186,  3757 => 2184,  3748 => 2181,  3745 => 2180,  3741 => 2179,  3737 => 2177,  3728 => 2174,  3725 => 2173,  3721 => 2172,  3717 => 2170,  3708 => 2167,  3705 => 2166,  3701 => 2165,  3697 => 2163,  3688 => 2160,  3685 => 2159,  3681 => 2158,  3675 => 2155,  3671 => 2153,  3662 => 2150,  3659 => 2149,  3655 => 2148,  3650 => 2145,  3641 => 2142,  3638 => 2141,  3634 => 2140,  3630 => 2138,  3621 => 2135,  3618 => 2134,  3614 => 2133,  3610 => 2131,  3601 => 2128,  3598 => 2127,  3594 => 2126,  3590 => 2124,  3581 => 2121,  3578 => 2120,  3574 => 2119,  3568 => 2116,  3564 => 2114,  3555 => 2111,  3552 => 2110,  3548 => 2109,  3544 => 2107,  3535 => 2104,  3532 => 2103,  3528 => 2102,  3524 => 2100,  3515 => 2097,  3512 => 2096,  3508 => 2095,  3504 => 2093,  3495 => 2090,  3492 => 2089,  3488 => 2088,  3484 => 2086,  3475 => 2083,  3472 => 2082,  3468 => 2081,  3462 => 2078,  3458 => 2076,  3449 => 2073,  3446 => 2072,  3442 => 2071,  3438 => 2069,  3429 => 2066,  3426 => 2065,  3422 => 2064,  3418 => 2062,  3409 => 2059,  3406 => 2058,  3402 => 2057,  3398 => 2055,  3389 => 2052,  3386 => 2051,  3382 => 2050,  3377 => 2047,  3368 => 2044,  3365 => 2043,  3361 => 2042,  3357 => 2040,  3348 => 2037,  3345 => 2036,  3341 => 2035,  3337 => 2033,  3328 => 2030,  3325 => 2029,  3321 => 2028,  3317 => 2026,  3308 => 2023,  3305 => 2022,  3301 => 2021,  3297 => 2019,  3288 => 2016,  3285 => 2015,  3281 => 2014,  3275 => 2011,  3271 => 2009,  3262 => 2006,  3259 => 2005,  3255 => 2004,  3251 => 2002,  3242 => 1999,  3239 => 1998,  3235 => 1997,  3229 => 1994,  3225 => 1992,  3216 => 1989,  3213 => 1988,  3209 => 1987,  3205 => 1985,  3196 => 1982,  3193 => 1981,  3189 => 1980,  3184 => 1977,  3175 => 1974,  3172 => 1973,  3168 => 1972,  3164 => 1970,  3155 => 1967,  3152 => 1966,  3148 => 1965,  3144 => 1963,  3135 => 1960,  3132 => 1959,  3128 => 1958,  3121 => 1954,  3110 => 1945,  3101 => 1943,  3097 => 1942,  3067 => 1915,  3060 => 1911,  3052 => 1906,  3043 => 1900,  3036 => 1896,  3028 => 1891,  3020 => 1886,  3012 => 1881,  3004 => 1876,  2996 => 1871,  2987 => 1865,  2980 => 1861,  2972 => 1856,  2964 => 1851,  2956 => 1846,  2948 => 1841,  2940 => 1836,  2932 => 1831,  2923 => 1825,  2916 => 1821,  2908 => 1816,  2900 => 1811,  2892 => 1806,  2884 => 1801,  2876 => 1796,  2868 => 1791,  2860 => 1786,  2852 => 1781,  2844 => 1776,  2836 => 1771,  2828 => 1766,  2820 => 1761,  2812 => 1756,  2804 => 1751,  2796 => 1746,  2788 => 1741,  2780 => 1736,  2772 => 1731,  2764 => 1726,  2755 => 1720,  2748 => 1716,  2740 => 1711,  2732 => 1706,  2724 => 1701,  2716 => 1696,  2707 => 1690,  2700 => 1686,  2692 => 1681,  2684 => 1676,  2676 => 1671,  2668 => 1666,  2659 => 1660,  2652 => 1656,  2644 => 1651,  2636 => 1646,  2628 => 1641,  2620 => 1636,  2612 => 1631,  2604 => 1626,  2596 => 1621,  2588 => 1616,  2579 => 1610,  2572 => 1606,  2564 => 1601,  2555 => 1595,  2548 => 1591,  2540 => 1586,  2532 => 1581,  2524 => 1576,  2516 => 1571,  2507 => 1565,  2498 => 1558,  2496 => 1557,  2483 => 1548,  2481 => 1547,  2476 => 1546,  2474 => 1545,  2469 => 1543,  2466 => 1542,  2464 => 1541,  2459 => 1539,  2434 => 1517,  2428 => 1514,  2415 => 1504,  2409 => 1501,  2401 => 1496,  2395 => 1493,  2382 => 1483,  2376 => 1480,  2368 => 1475,  2362 => 1472,  2349 => 1462,  2343 => 1459,  2335 => 1454,  2329 => 1451,  2321 => 1446,  2315 => 1443,  2307 => 1438,  2301 => 1435,  2293 => 1430,  2287 => 1427,  2279 => 1422,  2273 => 1419,  2265 => 1414,  2259 => 1411,  2246 => 1401,  2240 => 1398,  2227 => 1388,  2221 => 1385,  2213 => 1380,  2207 => 1377,  2192 => 1365,  2172 => 1348,  2166 => 1345,  2151 => 1333,  2135 => 1319,  2129 => 1317,  2122 => 1313,  2116 => 1310,  2107 => 1303,  2105 => 1302,  2099 => 1299,  2093 => 1296,  2078 => 1284,  2058 => 1267,  2052 => 1264,  2037 => 1252,  2017 => 1235,  2011 => 1232,  1998 => 1222,  1992 => 1219,  1979 => 1209,  1973 => 1206,  1965 => 1201,  1959 => 1198,  1951 => 1193,  1945 => 1190,  1937 => 1185,  1931 => 1182,  1916 => 1170,  1896 => 1153,  1890 => 1150,  1877 => 1140,  1871 => 1137,  1863 => 1132,  1857 => 1129,  1842 => 1117,  1822 => 1100,  1816 => 1097,  1803 => 1087,  1797 => 1084,  1789 => 1079,  1783 => 1076,  1775 => 1071,  1769 => 1068,  1761 => 1063,  1755 => 1060,  1747 => 1055,  1741 => 1052,  1733 => 1047,  1727 => 1044,  1712 => 1032,  1692 => 1015,  1686 => 1012,  1673 => 1002,  1667 => 999,  1659 => 994,  1653 => 991,  1645 => 986,  1639 => 983,  1631 => 978,  1625 => 975,  1617 => 970,  1611 => 967,  1596 => 955,  1576 => 938,  1570 => 935,  1557 => 925,  1551 => 922,  1543 => 917,  1537 => 914,  1529 => 909,  1523 => 906,  1508 => 894,  1488 => 877,  1482 => 874,  1474 => 869,  1468 => 866,  1460 => 861,  1454 => 858,  1439 => 846,  1423 => 832,  1417 => 830,  1410 => 826,  1404 => 823,  1395 => 816,  1393 => 815,  1387 => 812,  1381 => 809,  1373 => 804,  1367 => 801,  1359 => 796,  1353 => 793,  1345 => 788,  1339 => 785,  1324 => 773,  1308 => 759,  1302 => 757,  1295 => 753,  1289 => 750,  1280 => 743,  1278 => 742,  1272 => 739,  1266 => 736,  1258 => 731,  1252 => 728,  1239 => 718,  1233 => 715,  1225 => 710,  1219 => 707,  1206 => 697,  1200 => 694,  1192 => 689,  1186 => 686,  1173 => 676,  1167 => 673,  1159 => 668,  1153 => 665,  1138 => 653,  1122 => 639,  1116 => 637,  1109 => 633,  1103 => 630,  1094 => 623,  1092 => 622,  1086 => 619,  1080 => 616,  1072 => 611,  1066 => 608,  1051 => 596,  1035 => 582,  1029 => 580,  1022 => 576,  1016 => 573,  1007 => 566,  1005 => 565,  999 => 562,  993 => 559,  985 => 554,  979 => 551,  964 => 539,  948 => 525,  942 => 523,  935 => 519,  929 => 516,  920 => 509,  918 => 508,  912 => 505,  906 => 502,  898 => 497,  892 => 494,  877 => 482,  857 => 465,  851 => 462,  836 => 450,  820 => 436,  814 => 434,  807 => 430,  801 => 427,  792 => 420,  790 => 419,  784 => 416,  778 => 413,  770 => 408,  764 => 405,  749 => 393,  733 => 379,  727 => 377,  720 => 373,  714 => 370,  705 => 363,  703 => 362,  697 => 359,  691 => 356,  683 => 351,  677 => 348,  662 => 336,  642 => 319,  636 => 316,  623 => 306,  617 => 303,  604 => 293,  598 => 290,  590 => 285,  584 => 282,  576 => 277,  570 => 274,  557 => 264,  551 => 261,  543 => 256,  537 => 253,  529 => 248,  523 => 245,  515 => 240,  509 => 237,  494 => 225,  474 => 208,  468 => 205,  460 => 200,  454 => 197,  439 => 185,  419 => 168,  413 => 165,  405 => 160,  399 => 157,  386 => 147,  380 => 144,  372 => 139,  366 => 136,  351 => 124,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                                        <table class=\"table-2 table table-bordered\">
                                            <div class=\"linked-scrollbar-fixed\">
                                                <thead class=\"linked-scrollbar-fixed\">
                                                <tr>
                                                    {% for itm in item.name %}
                                                        <th class=\"text-center itemHead\">{{ itm }}</th>
                                                    {% endfor %}
                                                    <th class=\"itemHead\">
                                                        Sistemi
                                                    </th>
                                                </tr>
                                                </thead>
                                            </div>
                                            <div class=\"linked-scrollbar-fixed\">
                                                <tbody class=\"linked-scrollbar-fixed\">
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
                                            </div>
                                        </table>
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
                        {{ form_end(form) }}
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
            {% dump(item.pid) %}
            <script>
                \$(document).ready( function () {
                    /*update({{ item.id }},'pp','val1');
                    update({{ item.id }},'pl','val8');
                    update({{ item.id }},'c1v','val6');
                    update({{ item.id }},'c2v','val41');*/
                    for (i=1; i < 64; i++) {
                        update({{ expAdv.pid }},'val' + i, 'val' + i);
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
                    //check();

                    \$('.linked-scrollbar-fixed').scroll(function(){
                        \$('.linked-scrollbar-fixed').scrollTop(\$(this).scrollTop());
                    })

                    /*\$('.linked-scrollbar-fixed').attr(\"data-scrolling\", \"false\");

                    \$('.linked-scrollbar-fixed').scroll(function(){
                        console.log(\"scrolled-y\");
                        if(\$(this).attr(\"data-scrolling\") == \"false\"){
                            \$('.linked-scrollbar-fixed').not(this).attr(\"data-scrolling\", \"true\");
                            \$('.linked-scrollbar-fixed').not(this).scrollTop(\$(this).scrollLeft());
                        }
                        \$(this).attr(\"data-scrolling\", \"false\");
                    });*/

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
        /*\$('#scroll-r').click(function(e) {
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
        });*/
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 430) {
                console.log(\"scrolled\")
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('93.2%').css('overflow','auto');
                \$('.itemHead').width('100');
                \$('#firstItem').height('78');
            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
                console.log(\"top\");
                \$('#firstItem').height('31');
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
            /*\$('.selector').fixedHeaderTable({
                footer: true,
                cloneHeadToFoot: true,
                fixedColumn: true
            });*/
            /*\$(\".selector\").CongelarFilaColumna({
                Columnas:  1
            });*/
        });
        function checkedAddon(id) {
            \$('.collapse-' + id).switchClass('btn-primary', 'btn-success');
        }
    </script>
{% endblock %}
", "expertations/edit.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/edit.advanced.html.twig");
    }
}
