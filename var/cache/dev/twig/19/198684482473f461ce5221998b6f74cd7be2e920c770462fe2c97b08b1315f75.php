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
        echo "<script src=\"";
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
        echo "        ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 14
        echo "        ";
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
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 221, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 239, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 271, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 279
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 279, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 282, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 299, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 314, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 319, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 322, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 327, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 335, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 338, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 351, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 356, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 359, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 364, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 367, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 377, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 380, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 390, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                            </td>
                                            <td>
                                                ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 393, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 410, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 422, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 425, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 430, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 433, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 436
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 436, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 437
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 444
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 444, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 447
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 447, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 451
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 451, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 453
        echo "                                    </tbody>
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
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 467, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 479, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 482, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 487, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 490
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 490, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 493
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 493, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 494
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 501
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 501, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 504
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 504, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 508
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 508, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 510
        echo "                                    </tbody>
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
        // line 524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 524, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 536, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 539, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 556
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 556, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 568
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 568, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 571
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 571, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 576
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 576, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 579
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 579, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 582
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 582, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 583
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 590
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 590, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 593
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 593, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 597
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 597, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 599
        echo "                                    </tbody>
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
        // line 613
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 613, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 625
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 625, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 628
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 628, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 633
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 633, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 636
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 636, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 639
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 639, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 640
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 647
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 647, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 650
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 650, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 654
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 654, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 656
        echo "                                    </tbody>
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
        // line 670
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 670, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 682
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 682, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 685
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 685, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 690
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 690, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 693
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 693, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 696
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 696, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 697
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 704
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 704, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 707
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 707, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 711
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 711, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 713
        echo "                                    </tbody>
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
        // line 727
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 727, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 739, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 742
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 742, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 747
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 747, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 750, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 760
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 760, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 763
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 763, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 768
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 768, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 771
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 771, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 781
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 781, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 784
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 784, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 789
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 789, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 792
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 792, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 802
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 802, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 805
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 805, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 810
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 810, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 813
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 813, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 816
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 816, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 817
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 824
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 824, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 827
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 827, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 831
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 831, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 833
        echo "                                    </tbody>
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
        // line 847
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 847, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 859
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 859, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 862
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 862, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 867
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 867, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 870
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 870, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 875
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 875, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 878
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 878, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 883
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 883, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 886
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 886, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 889
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 889, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 890
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 897
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 897, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 900
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 900, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 904
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 904, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 906
        echo "                                    </tbody>
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
        // line 920
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 920, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 932
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 932, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 935
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 935, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 940
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 940, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 943
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 943, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 948
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 948, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 951
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 951, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 968
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 968, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 980
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 980, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 983
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 983, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 988
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 988, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 991
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 991, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 996
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 996, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 999
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 999, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1009
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1009, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1012
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1012, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 1029
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1029, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 1041
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1041, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1044
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1044, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1049
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1049, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1052
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1052, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1057
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1057, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1060
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1060, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1065
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1065, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1068
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1068, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1073
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1073, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1076
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1076, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 1086
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1086, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1089
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1089, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 1106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1106, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 1118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1118, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1121, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1126, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1129, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1134, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1137, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1142, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1145, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1150, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1153, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1158, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1161, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 1171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1171, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1174, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 1191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1191, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 1203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1203, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1206, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1211, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1214, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 1224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1224, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1227, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 1244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1244, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 1256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1256, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1259, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1264, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1267, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1272, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1275, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1280, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1283, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 1293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1293, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1296, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 1306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1306, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1309, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 1326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1326, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 1338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1338, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1341, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 1358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1358, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 1370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1370, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1373, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1376
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1376, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 1377
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1384
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1384, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1387
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1387, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1391
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1391, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1393
        echo "                                    </tbody>
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
        // line 1407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1407, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 1419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1419, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1422, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 1439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1439, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 1451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1451, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1454, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1459
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1459, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1462, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 1472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1472, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1475, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 1485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1485, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1488
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1488, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1493, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1496, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1501, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1504, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1509, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1512, $this->source); })()), "opt21_6Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1517, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1520, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1525, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1528
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1528, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1533, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1536, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 1546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1546, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1549
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1549, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1554, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1557
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1557, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 1567
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1567, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1570
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1570, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1575
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1575, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1578
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1578, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 1588
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1588, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1591
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1591, $this->source); })()), "opt21_14Value", []), 'label');
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
        // line 1613
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1613, $this->source); })()), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">

                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                <tr>
                                    <th class=\"firstHead\">TIPOLOGIA</th>
                                    ";
        // line 1623
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1623, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 1624
            echo "                                        <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1626
        echo "                                    ";
        // line 1631
        echo "                                    <th class=\"itemHead\">
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                ";
        // line 1636
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1636, $this->source); })())) + 1);
        // line 1637
        echo "                            <tbody>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1639
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1639, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >";
        // line 1645
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1645, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1647, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1648
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 1649
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1652
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1655
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1655, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1657
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1657, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1658
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 1659
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1662
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1665
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1665, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1667, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1668
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 1669
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1672
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1675
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1675, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1677
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1677, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1678
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 1679
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1682
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1685
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1685, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1687
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1687, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1688
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 1689
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1692
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1694
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1694, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1700
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1700, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1702
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1702, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1703
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 1704
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1707
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1710
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1710, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1712
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1712, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1713
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 1714
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1717
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1719
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1719, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1725
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1725, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1727, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1728
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 1729
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1732
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1735
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1735, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1737, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1738
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 1739
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1742
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1745
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1745, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1747, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1748
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 1749
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1752
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1755
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1755, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1757
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1757, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1758
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 1759
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1762
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1765
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1765, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1767
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1767, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1768
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 1769
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1772
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1775
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1775, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1777, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1778
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 1779
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1782
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1785
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1785, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1787, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1788
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 1789
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1792
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1795
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1795, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1797, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1798
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 1799
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1802
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1805
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1805, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1807
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1807, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1808
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 1809
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1812
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1814
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1814, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1820
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1820, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1822
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1822, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1823
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 1824
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1827
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1830
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1830, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1832, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1833
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 1834
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1837
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1840
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1840, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1842
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1842, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1843
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 1844
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1847
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1850
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1850, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1852, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1853
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 1854
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1857
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1860
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1860, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1862, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1863
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 1864
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1867
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1869
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1869, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1875
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1875, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1877
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1877, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1878
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 1879
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1882
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1885
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1885, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1887, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1888
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 1889
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1892
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1895
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1895, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1897
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1897, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1898
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 1899
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1902
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1905
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1905, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1907, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1908
            echo "                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 1909
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                    </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1912
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1916
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1916, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1918, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1919
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 1920
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1923
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1926
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1926, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1928
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1928, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1929
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 1930
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1933
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 1935
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1935, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1941
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1941, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1943
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1943, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1944
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 1945
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1948
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1951
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1951, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1953
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1953, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1954
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 1955
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1958
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1961
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1961, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1963
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1963, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1964
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 1965
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1968
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1971
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1971, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1973
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1973, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1974
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 1975
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1978
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1981
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1981, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1983
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1983, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1984
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 1985
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1988
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 1991
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1991, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 1993
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1993, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1994
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 1995
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1998
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2001
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2001, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2003
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2003, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2004
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 2005
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2008
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2011
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2011, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2013
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2013, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2014
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 2015
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2018
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2021
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2021, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2023
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2023, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2024
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 2025
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2028
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2031
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2031, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2033
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2033, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2034
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 2035
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2038
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2041
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2041, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2043
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2043, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2044
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 2045
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2048
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2051
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2051, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2053
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2053, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2054
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 2055
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2058
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2061
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2061, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2063, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2064
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 2065
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2068
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2071
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2071, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2073
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2073, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2074
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 2075
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2078
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2081
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2081, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2083
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2083, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2084
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 2085
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2088
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2091
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2091, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2093
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2093, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2094
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 2095
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2098
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2101, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2103, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2104
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 2105
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2108
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2111, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2113, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2114
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 2115
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2118
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2121, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2123, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2124
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 2125
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2128
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 2130
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2130, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2136, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2138, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2139
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 2140
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2143
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2146, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2148, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2149
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2156, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2158, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2159
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2166, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2168, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2169
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 2170
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2173
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2176, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2178, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2179
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 2180
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2183
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2186, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2188, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2189
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 2190
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2193
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2196, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2198, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2199
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 2200
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2203
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 2205
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2205, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2211, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2213, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2214
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 2215
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2218
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2221, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2223, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2224
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 2225
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2228
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2231, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2233, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2234
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 2235
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2238
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2241, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2243, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2244
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 2245
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2248
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2251, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2253, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2254
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 2255
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2258
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2261, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2263, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2264
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
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
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 2270
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2270, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2276, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2278, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2279
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 2280
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2283
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 2286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 2286, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 2288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2288, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2289
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 2290
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2293
        echo "                                </tr>
                                <tr>
                                    <td class=\"row-title\" colspan=\"";
        // line 2295
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2295, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    ";
        // line 2303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2303, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2304
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 2305
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2308
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 2313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2313, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2314
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 2315
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
        // line 2318
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 2323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2323, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2324
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 2325
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
        // line 2328
        echo "                                </tr>
                            </tbody>

                            <div class=\"row\">
                                <div class=\"col-9\"></div>
                                <div class=\"col-3\">
                                    <div class=\"card card-generate \">
                                        <div class=\"card-body pt-2 pb-4\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    ";
        // line 2338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2338, $this->source); })()), "submit", []), 'widget');
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
        // line 2349
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2349, $this->source); })()), 'form_end');
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
        // line 2359
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2359, $this->source); })()), "id", []), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 2360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2360, $this->source); })()), "id", []), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 2361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2361, $this->source); })()), "id", []), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 2362
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2362, $this->source); })()), "id", []), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 2363
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2363, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 2369
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2369, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', false);
                        \$(\"#form_val64_\" + i ).prop('disabled', false);
                    }
                    },10000);
                //check();
            });

            \$('#appbundle_expertationsadvanced_submit').click(function(e) {
                //e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 65; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                }
                \$('#appbundle_expertationsadvanced_father').val(";
        // line 2383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2383, $this->source); })()), "id", []), "html", null, true);
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
        // line 2400
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2400, $this->source); })()), "html", null, true);
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
        // line 2412
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2412, $this->source); })()), "html", null, true);
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
        // line 2456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2462
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2463
        echo "    <style>
        .form-control {
            width: 100px;
            min-width: 100px;
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
            width: 100%!important;
            text-align: center!important;
            background-color: transparent;
            border: none!important;
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
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 2560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2562
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2563
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
            if (\$(window).scrollTop() > 630) {
                //\$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scrolled\")
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('93.2%');
                \$('.firstHead').width('13%');
                \$('.itemHead').width('8%');

            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
                //\$('#buttons').removeClass('fixed-top').removeClass('fixed');
                console.log(\"top\");
                //\$('.selector').fixedHeaderTable('destroy');
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
        return array (  4621 => 2563,  4612 => 2562,  4600 => 2560,  4501 => 2463,  4492 => 2462,  4480 => 2460,  4473 => 2456,  4426 => 2412,  4411 => 2400,  4391 => 2383,  4374 => 2369,  4365 => 2363,  4361 => 2362,  4357 => 2361,  4353 => 2360,  4349 => 2359,  4336 => 2349,  4322 => 2338,  4310 => 2328,  4299 => 2325,  4296 => 2324,  4292 => 2323,  4285 => 2318,  4274 => 2315,  4271 => 2314,  4267 => 2313,  4260 => 2308,  4251 => 2305,  4248 => 2304,  4244 => 2303,  4233 => 2295,  4229 => 2293,  4220 => 2290,  4217 => 2289,  4213 => 2288,  4208 => 2286,  4203 => 2283,  4194 => 2280,  4191 => 2279,  4187 => 2278,  4182 => 2276,  4173 => 2270,  4169 => 2268,  4160 => 2265,  4157 => 2264,  4153 => 2263,  4148 => 2261,  4143 => 2258,  4134 => 2255,  4131 => 2254,  4127 => 2253,  4122 => 2251,  4117 => 2248,  4108 => 2245,  4105 => 2244,  4101 => 2243,  4096 => 2241,  4091 => 2238,  4082 => 2235,  4079 => 2234,  4075 => 2233,  4070 => 2231,  4065 => 2228,  4056 => 2225,  4053 => 2224,  4049 => 2223,  4044 => 2221,  4039 => 2218,  4030 => 2215,  4027 => 2214,  4023 => 2213,  4018 => 2211,  4009 => 2205,  4005 => 2203,  3996 => 2200,  3993 => 2199,  3989 => 2198,  3984 => 2196,  3979 => 2193,  3970 => 2190,  3967 => 2189,  3963 => 2188,  3958 => 2186,  3953 => 2183,  3944 => 2180,  3941 => 2179,  3937 => 2178,  3932 => 2176,  3927 => 2173,  3918 => 2170,  3915 => 2169,  3911 => 2168,  3906 => 2166,  3901 => 2163,  3892 => 2160,  3889 => 2159,  3885 => 2158,  3880 => 2156,  3875 => 2153,  3866 => 2150,  3863 => 2149,  3859 => 2148,  3854 => 2146,  3849 => 2143,  3840 => 2140,  3837 => 2139,  3833 => 2138,  3828 => 2136,  3819 => 2130,  3815 => 2128,  3806 => 2125,  3803 => 2124,  3799 => 2123,  3794 => 2121,  3789 => 2118,  3780 => 2115,  3777 => 2114,  3773 => 2113,  3768 => 2111,  3763 => 2108,  3754 => 2105,  3751 => 2104,  3747 => 2103,  3742 => 2101,  3737 => 2098,  3728 => 2095,  3725 => 2094,  3721 => 2093,  3716 => 2091,  3711 => 2088,  3702 => 2085,  3699 => 2084,  3695 => 2083,  3690 => 2081,  3685 => 2078,  3676 => 2075,  3673 => 2074,  3669 => 2073,  3664 => 2071,  3659 => 2068,  3650 => 2065,  3647 => 2064,  3643 => 2063,  3638 => 2061,  3633 => 2058,  3624 => 2055,  3621 => 2054,  3617 => 2053,  3612 => 2051,  3607 => 2048,  3598 => 2045,  3595 => 2044,  3591 => 2043,  3586 => 2041,  3581 => 2038,  3572 => 2035,  3569 => 2034,  3565 => 2033,  3560 => 2031,  3555 => 2028,  3546 => 2025,  3543 => 2024,  3539 => 2023,  3534 => 2021,  3529 => 2018,  3520 => 2015,  3517 => 2014,  3513 => 2013,  3508 => 2011,  3503 => 2008,  3494 => 2005,  3491 => 2004,  3487 => 2003,  3482 => 2001,  3477 => 1998,  3468 => 1995,  3465 => 1994,  3461 => 1993,  3456 => 1991,  3451 => 1988,  3442 => 1985,  3439 => 1984,  3435 => 1983,  3430 => 1981,  3425 => 1978,  3416 => 1975,  3413 => 1974,  3409 => 1973,  3404 => 1971,  3399 => 1968,  3390 => 1965,  3387 => 1964,  3383 => 1963,  3378 => 1961,  3373 => 1958,  3364 => 1955,  3361 => 1954,  3357 => 1953,  3352 => 1951,  3347 => 1948,  3338 => 1945,  3335 => 1944,  3331 => 1943,  3326 => 1941,  3317 => 1935,  3313 => 1933,  3304 => 1930,  3301 => 1929,  3297 => 1928,  3292 => 1926,  3287 => 1923,  3278 => 1920,  3275 => 1919,  3271 => 1918,  3266 => 1916,  3260 => 1912,  3251 => 1909,  3248 => 1908,  3244 => 1907,  3239 => 1905,  3234 => 1902,  3225 => 1899,  3222 => 1898,  3218 => 1897,  3213 => 1895,  3208 => 1892,  3199 => 1889,  3196 => 1888,  3192 => 1887,  3187 => 1885,  3182 => 1882,  3173 => 1879,  3170 => 1878,  3166 => 1877,  3161 => 1875,  3152 => 1869,  3148 => 1867,  3139 => 1864,  3136 => 1863,  3132 => 1862,  3127 => 1860,  3122 => 1857,  3113 => 1854,  3110 => 1853,  3106 => 1852,  3101 => 1850,  3096 => 1847,  3087 => 1844,  3084 => 1843,  3080 => 1842,  3075 => 1840,  3070 => 1837,  3061 => 1834,  3058 => 1833,  3054 => 1832,  3049 => 1830,  3044 => 1827,  3035 => 1824,  3032 => 1823,  3028 => 1822,  3023 => 1820,  3014 => 1814,  3010 => 1812,  3001 => 1809,  2998 => 1808,  2994 => 1807,  2989 => 1805,  2984 => 1802,  2975 => 1799,  2972 => 1798,  2968 => 1797,  2963 => 1795,  2958 => 1792,  2949 => 1789,  2946 => 1788,  2942 => 1787,  2937 => 1785,  2932 => 1782,  2923 => 1779,  2920 => 1778,  2916 => 1777,  2911 => 1775,  2906 => 1772,  2897 => 1769,  2894 => 1768,  2890 => 1767,  2885 => 1765,  2880 => 1762,  2871 => 1759,  2868 => 1758,  2864 => 1757,  2859 => 1755,  2854 => 1752,  2845 => 1749,  2842 => 1748,  2838 => 1747,  2833 => 1745,  2828 => 1742,  2819 => 1739,  2816 => 1738,  2812 => 1737,  2807 => 1735,  2802 => 1732,  2793 => 1729,  2790 => 1728,  2786 => 1727,  2781 => 1725,  2772 => 1719,  2768 => 1717,  2759 => 1714,  2756 => 1713,  2752 => 1712,  2747 => 1710,  2742 => 1707,  2733 => 1704,  2730 => 1703,  2726 => 1702,  2721 => 1700,  2712 => 1694,  2708 => 1692,  2699 => 1689,  2696 => 1688,  2692 => 1687,  2687 => 1685,  2682 => 1682,  2673 => 1679,  2670 => 1678,  2666 => 1677,  2661 => 1675,  2656 => 1672,  2647 => 1669,  2644 => 1668,  2640 => 1667,  2635 => 1665,  2630 => 1662,  2621 => 1659,  2618 => 1658,  2614 => 1657,  2609 => 1655,  2604 => 1652,  2595 => 1649,  2592 => 1648,  2588 => 1647,  2583 => 1645,  2574 => 1639,  2570 => 1637,  2568 => 1636,  2561 => 1631,  2559 => 1626,  2550 => 1624,  2546 => 1623,  2533 => 1613,  2508 => 1591,  2502 => 1588,  2489 => 1578,  2483 => 1575,  2475 => 1570,  2469 => 1567,  2456 => 1557,  2450 => 1554,  2442 => 1549,  2436 => 1546,  2423 => 1536,  2417 => 1533,  2409 => 1528,  2403 => 1525,  2395 => 1520,  2389 => 1517,  2381 => 1512,  2375 => 1509,  2367 => 1504,  2361 => 1501,  2353 => 1496,  2347 => 1493,  2339 => 1488,  2333 => 1485,  2320 => 1475,  2314 => 1472,  2301 => 1462,  2295 => 1459,  2287 => 1454,  2281 => 1451,  2266 => 1439,  2246 => 1422,  2240 => 1419,  2225 => 1407,  2209 => 1393,  2203 => 1391,  2196 => 1387,  2190 => 1384,  2181 => 1377,  2179 => 1376,  2173 => 1373,  2167 => 1370,  2152 => 1358,  2132 => 1341,  2126 => 1338,  2111 => 1326,  2091 => 1309,  2085 => 1306,  2072 => 1296,  2066 => 1293,  2053 => 1283,  2047 => 1280,  2039 => 1275,  2033 => 1272,  2025 => 1267,  2019 => 1264,  2011 => 1259,  2005 => 1256,  1990 => 1244,  1970 => 1227,  1964 => 1224,  1951 => 1214,  1945 => 1211,  1937 => 1206,  1931 => 1203,  1916 => 1191,  1896 => 1174,  1890 => 1171,  1877 => 1161,  1871 => 1158,  1863 => 1153,  1857 => 1150,  1849 => 1145,  1843 => 1142,  1835 => 1137,  1829 => 1134,  1821 => 1129,  1815 => 1126,  1807 => 1121,  1801 => 1118,  1786 => 1106,  1766 => 1089,  1760 => 1086,  1747 => 1076,  1741 => 1073,  1733 => 1068,  1727 => 1065,  1719 => 1060,  1713 => 1057,  1705 => 1052,  1699 => 1049,  1691 => 1044,  1685 => 1041,  1670 => 1029,  1650 => 1012,  1644 => 1009,  1631 => 999,  1625 => 996,  1617 => 991,  1611 => 988,  1603 => 983,  1597 => 980,  1582 => 968,  1562 => 951,  1556 => 948,  1548 => 943,  1542 => 940,  1534 => 935,  1528 => 932,  1513 => 920,  1497 => 906,  1491 => 904,  1484 => 900,  1478 => 897,  1469 => 890,  1467 => 889,  1461 => 886,  1455 => 883,  1447 => 878,  1441 => 875,  1433 => 870,  1427 => 867,  1419 => 862,  1413 => 859,  1398 => 847,  1382 => 833,  1376 => 831,  1369 => 827,  1363 => 824,  1354 => 817,  1352 => 816,  1346 => 813,  1340 => 810,  1332 => 805,  1326 => 802,  1313 => 792,  1307 => 789,  1299 => 784,  1293 => 781,  1280 => 771,  1274 => 768,  1266 => 763,  1260 => 760,  1247 => 750,  1241 => 747,  1233 => 742,  1227 => 739,  1212 => 727,  1196 => 713,  1190 => 711,  1183 => 707,  1177 => 704,  1168 => 697,  1166 => 696,  1160 => 693,  1154 => 690,  1146 => 685,  1140 => 682,  1125 => 670,  1109 => 656,  1103 => 654,  1096 => 650,  1090 => 647,  1081 => 640,  1079 => 639,  1073 => 636,  1067 => 633,  1059 => 628,  1053 => 625,  1038 => 613,  1022 => 599,  1016 => 597,  1009 => 593,  1003 => 590,  994 => 583,  992 => 582,  986 => 579,  980 => 576,  972 => 571,  966 => 568,  951 => 556,  931 => 539,  925 => 536,  910 => 524,  894 => 510,  888 => 508,  881 => 504,  875 => 501,  866 => 494,  864 => 493,  858 => 490,  852 => 487,  844 => 482,  838 => 479,  823 => 467,  807 => 453,  801 => 451,  794 => 447,  788 => 444,  779 => 437,  777 => 436,  771 => 433,  765 => 430,  757 => 425,  751 => 422,  736 => 410,  716 => 393,  710 => 390,  697 => 380,  691 => 377,  678 => 367,  672 => 364,  664 => 359,  658 => 356,  650 => 351,  644 => 348,  631 => 338,  625 => 335,  617 => 330,  611 => 327,  603 => 322,  597 => 319,  589 => 314,  583 => 311,  568 => 299,  548 => 282,  542 => 279,  534 => 274,  528 => 271,  513 => 259,  493 => 242,  487 => 239,  479 => 234,  473 => 231,  460 => 221,  454 => 218,  446 => 213,  440 => 210,  425 => 198,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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

                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                <tr>
                                    <th class=\"firstHead\">TIPOLOGIA</th>
                                    {% for itm in item.name %}
                                        <th class=\"text-center itemHead\">{{ itm }}</th>
                                    {% endfor %}
                                    {#{% for item in count %}
                                        <th>
                                            {{ func.room(item) }}
                                        </th>
                                    {% endfor %}#}
                                    <th class=\"itemHead\">
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                {% set colCount = count|length + 1 %}
                            <tbody>
                                <tr>
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
                                    <td class=\"row-title\" colspan=\"{{ colCount + 1 }}\">
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
        .form-control {
            width: 100px;
            min-width: 100px;
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
            width: 100%!important;
            text-align: center!important;
            background-color: transparent;
            border: none!important;
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
            if (\$(window).scrollTop() > 630) {
                //\$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scrolled\")
                \$('thead').css('position','fixed').css('top','63px').css('background','#FFF').width('93.2%');
                \$('.firstHead').width('13%');
                \$('.itemHead').width('8%');

            } else {
                \$('thead').css('position','relative').css('top','63px').css('background','#FFF').width('100%');
                //\$('#buttons').removeClass('fixed-top').removeClass('fixed');
                console.log(\"top\");
                //\$('.selector').fixedHeaderTable('destroy');
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
