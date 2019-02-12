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
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), 'form_start');
        echo "
                            <div class=\"wrapper1\" style=\"height: 30px;\">
                                ";
        // line 118
        $context["floor"] = 0;
        // line 119
        echo "                                <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 122
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 122, $this->source); })()) - 1);
        // line 123
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 123, $this->source); })()), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 123, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 124
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 124, $this->source); })()) + 1);
        // line 125
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 125, $this->source); })()), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 125, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                            </div>
                            ";
        // line 134
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 134, $this->source); })())) + 1);
        // line 135
        echo "
                            <div class=\"wrapper2\">
                                <div class=\"row\">
                                    <div class=\"col-3 pr-0\">
                                        <table class=\"table-1 table table-bordered \">
                                            <th class=\"firstHead\">TIPOLOGIA</th>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 142
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 142, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI PRESA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong >";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 148, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 153, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 158, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 163, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 168, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 172
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 172, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PUNTI COMANDO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 178, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 183, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 187
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 187, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 193, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 198, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 203, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 208, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 213, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 218, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 223, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 228, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 233, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 237
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 237, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    RISCALDAMENTO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 243, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 248, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 253, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 258, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 263, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 267
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 267, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    QUADRO ELETTRICO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 273, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 278, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 283, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 288, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 293, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 297
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 297, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    SERVIZI PREDISPOSIZIONE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 303, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 308
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 308, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 313, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 318, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 323, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 328, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 333, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 338
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 338, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 343, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 348
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 348, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 353, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 358
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 358, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 363, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 368, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 373, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 378
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 378, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 383, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 388
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 388, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 393, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 398
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 398, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 402
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 402, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 408, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 413
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 413, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 418, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 423, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 428, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 433, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 438
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 438, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 442
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 442, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    PREDISPOSIZIONE AUTOMATISMI
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 448
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 448, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 453, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 458, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 463, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 468
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 468, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 473
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 473, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 477
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 477, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                                    ASPIRAZIONE CENTRALIZZATA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 483
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 483, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>";
        // line 488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 488, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"row-title\" colspan=\"";
        // line 492
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 492, $this->source); })()) + 1), "html", null, true);
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
        // line 557
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 557, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 558
            echo "                                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
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
        // line 571
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 571, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>

                                                <tr>
                                                    ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 575, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 576
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 582, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 583
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 584
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 587
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 589, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 590
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 591
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 597
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 597, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 598
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 599
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 604, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 605
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 606
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 609
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 611
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 611, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 614
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 614, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 615
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 616
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 621
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 621, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 622
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 623
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 626
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 628
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 628, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 631, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 632
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 633
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 638, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 639
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 640
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 643
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 645, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 646
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 647
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 652
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 652, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 653
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 654
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 659, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 660
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 661
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 664
        echo "                                                </tr>
                                                <tr>

                                                    ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 667, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 668
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 669
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 674, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 675
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 676
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 681, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 682
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 683
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 688, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 689
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 690
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 695
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 695, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 698, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 699
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 700
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 705, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 706
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 707
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 712, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 713
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 714
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 719, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 720
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 721
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 724
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 726, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 727
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 728
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 733
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 733, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 736
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 736, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 737
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 738
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 743, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 744
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 745
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 748
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 750, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 751
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 752
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 757, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 758
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 759
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 762
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 765, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 766
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
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
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 772
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 772, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 775, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 776
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
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
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 782
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 782, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 783
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 784
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 787
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 789, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 790
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 791
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 796, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 797
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 798
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 803, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 804
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 805
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 808
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 810, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 811
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 812
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 817
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 817, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 818
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 819
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 822
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 824
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 824, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 825
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 826
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 829
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 831, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 832
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 833
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 838
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 838, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 839
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 840
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 845
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 845, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 846
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 847
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 852, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 853
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 854
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 857
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 859
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 859, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 860
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 861
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 866, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 867
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 868
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 873, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 874
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 875
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 878
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 880, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 881
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 882
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 887, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 888
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 889
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 892
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 894
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 894, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 895
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 896
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 899
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 901, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 902
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 903
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 906
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 908
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 908, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 909
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 910
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 915
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 915, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 918, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 919
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 920
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 925
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 925, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 926
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 927
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 930
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 932
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 932, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 933
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 934
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 937
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 939
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 939, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 940
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 941
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 944
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 946, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 947
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 948
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 951
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 953
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 953, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 954
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 955
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 960, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 961
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 962
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 965
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 967
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 967, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 970
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 970, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 971
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 972
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 975
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 977, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 978
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 979
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 982
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 984, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 985
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 986
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 991
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 991, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 992
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 993
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 996
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 998
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 998, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 999
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 1000
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1005
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1005, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1006
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 1007
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1010
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1012
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1012, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1015
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1015, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1016
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 1017
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1020
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1022
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1022, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1023
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 1024
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1027
        echo "                                                </tr>
                                                <tr>
                                                    <td class=\"row-title\" colspan=\"";
        // line 1029
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1029, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                                </tr>
                                                <tr>
                                                    ";
        // line 1032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1032, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1033
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 1034
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                        </td>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1037
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1039, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1040
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 1041
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
        // line 1044
        echo "                                                </tr>
                                                <tr>
                                                    ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1046, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1047
            echo "                                                        <td>
                                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 1048
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
        // line 1051
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
        // line 1074
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1074, $this->source); })()), "submit", []), 'widget');
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
        // line 1173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1173, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1185, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1188, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1193, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1196, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1206, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1209, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1214, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1217, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1234, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1246, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1249, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1254, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1257, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1274, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1286, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1289, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1294, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1297, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1302, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1305, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1310, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1313, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1323, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1326, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1331, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1334, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1339, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1342, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1352, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1355, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1365, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1368, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1385, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1397, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1400, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1405, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1408, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1411
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1411, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1412
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1419, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1422
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1422, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1426
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1426, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1428
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
        // line 1442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1442, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1454, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1457, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1462, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1465, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1468
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1468, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1469
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1476
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1476, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1479
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1479, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1483
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1483, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1485
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
        // line 1499
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1499, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1511
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1511, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1514, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1531
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1531, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1543, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1546, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1551
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1551, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1554, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1557
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1557, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1558
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1565
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1565, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1568
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1568, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1572
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1572, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1574
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
        // line 1588
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1588, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1600, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1603
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1603, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1608, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1611
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1611, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1614
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1614, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1615
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1622
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1622, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1625
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1625, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1629
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1629, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1631
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
        // line 1645
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1645, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1657
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1657, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1660
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1660, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1665
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1665, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1668
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1668, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1671
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1671, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1672
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1679
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1679, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1682
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1682, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1686
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1686, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1688
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
        // line 1702
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1702, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1714, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1717
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1717, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1722
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1722, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1725
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1725, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1735
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1735, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1738
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1738, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1743
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1743, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1746
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1746, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1756
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1756, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1759
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1759, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1764
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1764, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1767
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1767, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1777
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1777, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1780
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1780, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1785
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1785, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1788
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1788, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1791
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1791, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1792
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1799
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1799, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1802
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1802, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1806
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1806, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1808
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
        // line 1822
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1822, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 1834
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1834, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1837
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1837, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1842
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1842, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1845
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1845, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1850
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1850, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1853
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1853, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1858
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1858, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1861
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1861, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 1864
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1864, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1865
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 1872
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1872, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 1875
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1875, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 1879
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1879, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 1881
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
        // line 1895
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1895, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 1907
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1907, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1910
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1910, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1915
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1915, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1918
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1918, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1923
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1923, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1926
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1926, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 1943
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1943, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 1955
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1955, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1958
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1958, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1963
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1963, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1966
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1966, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 1971
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1971, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1974
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1974, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1984
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1984, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 1987
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1987, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 2004
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2004, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 2016
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2016, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2019
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2019, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2024
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2024, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2027
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2027, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2032
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2032, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2035
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2035, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2040
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2040, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2043
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2043, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2048
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2048, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2051
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2051, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 2061
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2061, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2064
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2064, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 2081
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2081, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 2093
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2093, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2096
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2096, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2101, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2104, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2109, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2112, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2117, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2120, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2125, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2128, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2133, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2136, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 2146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2146, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2149, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 2166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2166, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 2178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2178, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2181, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2186, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2189, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 2199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2199, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2202, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 2219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2219, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 2231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2231, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2234, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2239, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2242, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2247, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2250, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2255, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2258, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 2268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2268, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2271, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 2281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2281, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2284, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 2301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2301, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 2313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2313, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2316, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 2333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2333, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 2345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2345, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2348, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        ";
        // line 2351
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2351, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 2352
            echo "                                            <tr>
                                                <td colspan=\"2\">
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"width: 210px\">
                                                    ";
            // line 2359
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2359, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 2362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2362, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                                </td>
                                            </tr>
                                        ";
        } else {
            // line 2366
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2366, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                        ";
        }
        // line 2368
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
        // line 2382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2382, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 2394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2394, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2397, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 2414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2414, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 2426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2426, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2429, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2434, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2437, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 2447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2447, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2450, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 2460
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2460, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2463, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2468, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2471
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2471, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2476, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2479, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2484
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2484, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2487, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2492, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2495, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2500, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2503, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2508, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2511
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2511, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 2521
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2521, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2524, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2529
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2529, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2532
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2532, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 2542
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2542, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2545
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2545, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 2550
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2550, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2553
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2553, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 2563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2563, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 2566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2566, $this->source); })()), "opt21_14Value", []), 'label');
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
        // line 2584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/syncscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 2585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dragscroll.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 2586
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2586, $this->source); })()), 'form_end');
        echo "
            <script>
                \$(document).ready( function () {
                    for (i=1; i < 64; i++) {
                        update(";
        // line 2590
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["expAdv"]) || array_key_exists("expAdv", $context) ? $context["expAdv"] : (function () { throw new Twig_Error_Runtime('Variable "expAdv" does not exist.', 2590, $this->source); })()), "father", []), "html", null, true);
        echo ",'val' + i, 'val' + i);
                    }
                    for(i=0; i < ";
        // line 2592
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2592, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', true);
                        \$(\"#form_val64_\" + i ).prop('disabled', true);
                    }
                    window.setTimeout(function() {
                        calculate(62);
                        for(i=0; i < ";
        // line 2598
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2598, $this->source); })()), "html", null, true);
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
        // line 2616
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2616, $this->source); })()), "id", []), "html", null, true);
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
        // line 2633
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2633, $this->source); })()), "html", null, true);
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
        // line 2646
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2646, $this->source); })()), "html", null, true);
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
        // line 2686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2692
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2693
        echo "    <style>
        thead {
            z-index: 1000;
        }
        .table td {
            padding: 0;
            min-height: 40px;
            height: 40px;
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
        // line 2801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2803
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2804
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
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


    </script>
    <script>
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
        return array (  4905 => 2804,  4896 => 2803,  4884 => 2801,  4774 => 2693,  4765 => 2692,  4753 => 2690,  4746 => 2686,  4703 => 2646,  4687 => 2633,  4667 => 2616,  4646 => 2598,  4637 => 2592,  4632 => 2590,  4625 => 2586,  4621 => 2585,  4617 => 2584,  4596 => 2566,  4590 => 2563,  4577 => 2553,  4571 => 2550,  4563 => 2545,  4557 => 2542,  4544 => 2532,  4538 => 2529,  4530 => 2524,  4524 => 2521,  4511 => 2511,  4505 => 2508,  4497 => 2503,  4491 => 2500,  4483 => 2495,  4477 => 2492,  4469 => 2487,  4463 => 2484,  4455 => 2479,  4449 => 2476,  4441 => 2471,  4435 => 2468,  4427 => 2463,  4421 => 2460,  4408 => 2450,  4402 => 2447,  4389 => 2437,  4383 => 2434,  4375 => 2429,  4369 => 2426,  4354 => 2414,  4334 => 2397,  4328 => 2394,  4313 => 2382,  4297 => 2368,  4291 => 2366,  4284 => 2362,  4278 => 2359,  4269 => 2352,  4267 => 2351,  4261 => 2348,  4255 => 2345,  4240 => 2333,  4220 => 2316,  4214 => 2313,  4199 => 2301,  4179 => 2284,  4173 => 2281,  4160 => 2271,  4154 => 2268,  4141 => 2258,  4135 => 2255,  4127 => 2250,  4121 => 2247,  4113 => 2242,  4107 => 2239,  4099 => 2234,  4093 => 2231,  4078 => 2219,  4058 => 2202,  4052 => 2199,  4039 => 2189,  4033 => 2186,  4025 => 2181,  4019 => 2178,  4004 => 2166,  3984 => 2149,  3978 => 2146,  3965 => 2136,  3959 => 2133,  3951 => 2128,  3945 => 2125,  3937 => 2120,  3931 => 2117,  3923 => 2112,  3917 => 2109,  3909 => 2104,  3903 => 2101,  3895 => 2096,  3889 => 2093,  3874 => 2081,  3854 => 2064,  3848 => 2061,  3835 => 2051,  3829 => 2048,  3821 => 2043,  3815 => 2040,  3807 => 2035,  3801 => 2032,  3793 => 2027,  3787 => 2024,  3779 => 2019,  3773 => 2016,  3758 => 2004,  3738 => 1987,  3732 => 1984,  3719 => 1974,  3713 => 1971,  3705 => 1966,  3699 => 1963,  3691 => 1958,  3685 => 1955,  3670 => 1943,  3650 => 1926,  3644 => 1923,  3636 => 1918,  3630 => 1915,  3622 => 1910,  3616 => 1907,  3601 => 1895,  3585 => 1881,  3579 => 1879,  3572 => 1875,  3566 => 1872,  3557 => 1865,  3555 => 1864,  3549 => 1861,  3543 => 1858,  3535 => 1853,  3529 => 1850,  3521 => 1845,  3515 => 1842,  3507 => 1837,  3501 => 1834,  3486 => 1822,  3470 => 1808,  3464 => 1806,  3457 => 1802,  3451 => 1799,  3442 => 1792,  3440 => 1791,  3434 => 1788,  3428 => 1785,  3420 => 1780,  3414 => 1777,  3401 => 1767,  3395 => 1764,  3387 => 1759,  3381 => 1756,  3368 => 1746,  3362 => 1743,  3354 => 1738,  3348 => 1735,  3335 => 1725,  3329 => 1722,  3321 => 1717,  3315 => 1714,  3300 => 1702,  3284 => 1688,  3278 => 1686,  3271 => 1682,  3265 => 1679,  3256 => 1672,  3254 => 1671,  3248 => 1668,  3242 => 1665,  3234 => 1660,  3228 => 1657,  3213 => 1645,  3197 => 1631,  3191 => 1629,  3184 => 1625,  3178 => 1622,  3169 => 1615,  3167 => 1614,  3161 => 1611,  3155 => 1608,  3147 => 1603,  3141 => 1600,  3126 => 1588,  3110 => 1574,  3104 => 1572,  3097 => 1568,  3091 => 1565,  3082 => 1558,  3080 => 1557,  3074 => 1554,  3068 => 1551,  3060 => 1546,  3054 => 1543,  3039 => 1531,  3019 => 1514,  3013 => 1511,  2998 => 1499,  2982 => 1485,  2976 => 1483,  2969 => 1479,  2963 => 1476,  2954 => 1469,  2952 => 1468,  2946 => 1465,  2940 => 1462,  2932 => 1457,  2926 => 1454,  2911 => 1442,  2895 => 1428,  2889 => 1426,  2882 => 1422,  2876 => 1419,  2867 => 1412,  2865 => 1411,  2859 => 1408,  2853 => 1405,  2845 => 1400,  2839 => 1397,  2824 => 1385,  2804 => 1368,  2798 => 1365,  2785 => 1355,  2779 => 1352,  2766 => 1342,  2760 => 1339,  2752 => 1334,  2746 => 1331,  2738 => 1326,  2732 => 1323,  2719 => 1313,  2713 => 1310,  2705 => 1305,  2699 => 1302,  2691 => 1297,  2685 => 1294,  2677 => 1289,  2671 => 1286,  2656 => 1274,  2636 => 1257,  2630 => 1254,  2622 => 1249,  2616 => 1246,  2601 => 1234,  2581 => 1217,  2575 => 1214,  2567 => 1209,  2561 => 1206,  2548 => 1196,  2542 => 1193,  2534 => 1188,  2528 => 1185,  2513 => 1173,  2411 => 1074,  2386 => 1051,  2375 => 1048,  2372 => 1047,  2368 => 1046,  2364 => 1044,  2353 => 1041,  2350 => 1040,  2346 => 1039,  2342 => 1037,  2333 => 1034,  2330 => 1033,  2326 => 1032,  2320 => 1029,  2316 => 1027,  2307 => 1024,  2304 => 1023,  2300 => 1022,  2296 => 1020,  2287 => 1017,  2284 => 1016,  2280 => 1015,  2274 => 1012,  2270 => 1010,  2261 => 1007,  2258 => 1006,  2254 => 1005,  2250 => 1003,  2241 => 1000,  2238 => 999,  2234 => 998,  2230 => 996,  2221 => 993,  2218 => 992,  2214 => 991,  2210 => 989,  2201 => 986,  2198 => 985,  2194 => 984,  2190 => 982,  2181 => 979,  2178 => 978,  2174 => 977,  2170 => 975,  2161 => 972,  2158 => 971,  2154 => 970,  2148 => 967,  2144 => 965,  2135 => 962,  2132 => 961,  2128 => 960,  2124 => 958,  2115 => 955,  2112 => 954,  2108 => 953,  2104 => 951,  2095 => 948,  2092 => 947,  2088 => 946,  2084 => 944,  2075 => 941,  2072 => 940,  2068 => 939,  2064 => 937,  2055 => 934,  2052 => 933,  2048 => 932,  2044 => 930,  2035 => 927,  2032 => 926,  2028 => 925,  2024 => 923,  2015 => 920,  2012 => 919,  2008 => 918,  2002 => 915,  1998 => 913,  1989 => 910,  1986 => 909,  1982 => 908,  1978 => 906,  1969 => 903,  1966 => 902,  1962 => 901,  1958 => 899,  1949 => 896,  1946 => 895,  1942 => 894,  1938 => 892,  1929 => 889,  1926 => 888,  1922 => 887,  1918 => 885,  1909 => 882,  1906 => 881,  1902 => 880,  1898 => 878,  1889 => 875,  1886 => 874,  1882 => 873,  1878 => 871,  1869 => 868,  1866 => 867,  1862 => 866,  1858 => 864,  1849 => 861,  1846 => 860,  1842 => 859,  1838 => 857,  1829 => 854,  1826 => 853,  1822 => 852,  1818 => 850,  1809 => 847,  1806 => 846,  1802 => 845,  1798 => 843,  1789 => 840,  1786 => 839,  1782 => 838,  1778 => 836,  1769 => 833,  1766 => 832,  1762 => 831,  1758 => 829,  1749 => 826,  1746 => 825,  1742 => 824,  1738 => 822,  1729 => 819,  1726 => 818,  1722 => 817,  1718 => 815,  1709 => 812,  1706 => 811,  1702 => 810,  1698 => 808,  1689 => 805,  1686 => 804,  1682 => 803,  1678 => 801,  1669 => 798,  1666 => 797,  1662 => 796,  1658 => 794,  1649 => 791,  1646 => 790,  1642 => 789,  1638 => 787,  1629 => 784,  1626 => 783,  1622 => 782,  1618 => 780,  1609 => 777,  1606 => 776,  1602 => 775,  1596 => 772,  1592 => 770,  1583 => 767,  1580 => 766,  1576 => 765,  1571 => 762,  1562 => 759,  1559 => 758,  1555 => 757,  1551 => 755,  1542 => 752,  1539 => 751,  1535 => 750,  1531 => 748,  1522 => 745,  1519 => 744,  1515 => 743,  1511 => 741,  1502 => 738,  1499 => 737,  1495 => 736,  1489 => 733,  1485 => 731,  1476 => 728,  1473 => 727,  1469 => 726,  1465 => 724,  1456 => 721,  1453 => 720,  1449 => 719,  1445 => 717,  1436 => 714,  1433 => 713,  1429 => 712,  1425 => 710,  1416 => 707,  1413 => 706,  1409 => 705,  1405 => 703,  1396 => 700,  1393 => 699,  1389 => 698,  1383 => 695,  1379 => 693,  1370 => 690,  1367 => 689,  1363 => 688,  1359 => 686,  1350 => 683,  1347 => 682,  1343 => 681,  1339 => 679,  1330 => 676,  1327 => 675,  1323 => 674,  1319 => 672,  1310 => 669,  1307 => 668,  1303 => 667,  1298 => 664,  1289 => 661,  1286 => 660,  1282 => 659,  1278 => 657,  1269 => 654,  1266 => 653,  1262 => 652,  1258 => 650,  1249 => 647,  1246 => 646,  1242 => 645,  1238 => 643,  1229 => 640,  1226 => 639,  1222 => 638,  1218 => 636,  1209 => 633,  1206 => 632,  1202 => 631,  1196 => 628,  1192 => 626,  1183 => 623,  1180 => 622,  1176 => 621,  1172 => 619,  1163 => 616,  1160 => 615,  1156 => 614,  1150 => 611,  1146 => 609,  1137 => 606,  1134 => 605,  1130 => 604,  1126 => 602,  1117 => 599,  1114 => 598,  1110 => 597,  1105 => 594,  1096 => 591,  1093 => 590,  1089 => 589,  1085 => 587,  1076 => 584,  1073 => 583,  1069 => 582,  1065 => 580,  1056 => 577,  1053 => 576,  1049 => 575,  1042 => 571,  1029 => 560,  1020 => 558,  1016 => 557,  948 => 492,  941 => 488,  933 => 483,  924 => 477,  917 => 473,  909 => 468,  901 => 463,  893 => 458,  885 => 453,  877 => 448,  868 => 442,  861 => 438,  853 => 433,  845 => 428,  837 => 423,  829 => 418,  821 => 413,  813 => 408,  804 => 402,  797 => 398,  789 => 393,  781 => 388,  773 => 383,  765 => 378,  757 => 373,  749 => 368,  741 => 363,  733 => 358,  725 => 353,  717 => 348,  709 => 343,  701 => 338,  693 => 333,  685 => 328,  677 => 323,  669 => 318,  661 => 313,  653 => 308,  645 => 303,  636 => 297,  629 => 293,  621 => 288,  613 => 283,  605 => 278,  597 => 273,  588 => 267,  581 => 263,  573 => 258,  565 => 253,  557 => 248,  549 => 243,  540 => 237,  533 => 233,  525 => 228,  517 => 223,  509 => 218,  501 => 213,  493 => 208,  485 => 203,  477 => 198,  469 => 193,  460 => 187,  453 => 183,  445 => 178,  436 => 172,  429 => 168,  421 => 163,  413 => 158,  405 => 153,  397 => 148,  388 => 142,  379 => 135,  377 => 134,  364 => 125,  362 => 124,  357 => 123,  355 => 122,  350 => 120,  347 => 119,  345 => 118,  340 => 116,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
            min-height: 40px;
            height: 40px;
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
                \$('#firstItem').height('86');
            } else {
                \$('#topTable').css('position','').css('top','63px').css('background','#FFF').width('100%');
                \$('#firstItem').height('39');
            }
        });


    </script>
    <script>
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
    </script>
{% endblock %}
", "expertations/edit.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/edit.advanced.html.twig");
    }
}
