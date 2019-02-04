<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_d6ea4ebd930538c05aa2291f88d6a8159fe31a8a71ca741f215ee4103f940fdf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/new.advanced.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 21, $this->source); })()), "uidToSurName", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), 0, []), "client", [])], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 21, $this->source); })()), "uidToName", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), 0, []), "client", [])], "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->source); })()), 0, []), "date", []), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 29, $this->source); })()), "plantIntToName", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->source); })()), 0, []), "tipo", [])], "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), 0, []), "kw", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 37, $this->source); })()), 0, []), "pianiCasa", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 41, $this->source); })()), "heatingIntToName", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), 0, []), "riscaldamento", [])], "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), 0, []), "opereMurarie", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Opere Murarie </strong><br>
                            <strong>";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), 0, []), "opereMurarieIntonaco", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Intonaco </strong><br>
                            <strong>";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 46, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->source); })()), 0, []), "sconto", []), "html", null, true);
        echo "</small></p>
                        </div>-->
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 56, $this->source); })()), 0, []), "level", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>Metratura</strong>
                            <p><small>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->source); })()), 0, []), "squareMeters", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->source); })()), 0, []), "trifase", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 67, $this->source); })()), 0, []), "numCircuiti", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), 0, []), "illumSicurezza", []) >= 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), 0, []), "illumSicurezza", []), "html", null, true);
        echo "<br>
                            <strong>";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 71, $this->source); })()), 0, []), "lampada", []) == 1)) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 75, $this->source); })()), 0, []), "spd", []) == 1)) {
            echo "SPD ad arrivo linea, Tolleranza R1";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 75, $this->source); })()), 0, []), "spd", []) == 2)) {
            echo "SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni";
        }
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), 0, []), "impAusiliari", []) == 1)) {
            echo "Campanello, citofono e videocitofono";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), 0, []), "impAusiliari", []) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 79, $this->source); })()), 0, []), "impAusiliari", []) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica";
        }
        echo " </small></p>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), 0, []), "campanello", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Campanello</strong><br>
                            <strong>";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 85, $this->source); })()), 0, []), "citVid", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Citofono</strong><br>
                            <strong>";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 86, $this->source); })()), 0, []), "citVid", []) == 2)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;VideoCitofono</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->source); })()), 0, []), "antenna", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Antenna</strong><br>
                            <strong>";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), 0, []), "allarme", []) == 1)) {
            echo "<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>";
        } else {
            echo "<i class=\"fa fa-times text-danger\"></i>";
        }
        echo "&nbsp;Predisposizione Allarme</strong><br>
                            <strong>";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->source); })()), 0, []), "illumEsterna", []) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 95, $this->source); })()), 0, []), "numPreseDati", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Telefono</strong>
                            <p><small>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->source); })()), 0, []), "numPreseTelefono", []), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 103, $this->source); })()), 0, []), "sconto", []), "html", null, true);
        echo " %</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Totale Preliminare</strong>
                            <p><small>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->source); })()), 0, []), "price", []), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 362, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 363
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 377, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 379
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 419, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 420
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 434, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 436
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 508, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 509
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 523, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 525
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 565, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 566
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 580, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 582
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 622, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 623
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 637, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 639
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 742, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 743
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 757, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 759
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 815, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 816
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 830, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 832
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1302, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1303
            echo "                                        <tr>
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
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1317, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1319
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
                        <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 1542
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1542, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 1544
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1544, $this->source); })()) - 1);
        // line 1545
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1545, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 1545, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 1546
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 1546, $this->source); })()) + 1);
        // line 1547
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1547, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 1547, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                    </div>
                        ";
        // line 1556
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 1556, $this->source); })())) + 1);
        // line 1557
        echo "
                        <div class=\"wrapper2\">
                        <div class=\"row\">
                            <div class=\"col-3 pr-0\">
                                <table class=\"table-1 table table-bordered \">
                                    <th class=\"firstHead\">TIPOLOGIA</th>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1564
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1564, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PUNTI PRESA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong >";
        // line 1570
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1570, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1575
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1575, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1580, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1585
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1585, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1590
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1590, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1594
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1594, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PUNTI COMANDO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1600
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1600, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1605
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1605, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1609
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1609, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1615
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1615, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1620
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1620, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1625
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1625, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1630
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1630, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1635
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1635, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1640
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1640, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1645
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1645, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1650
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1650, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1655
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1655, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1659
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1659, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            RISCALDAMENTO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1665
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1665, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1670
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1670, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1675
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1675, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1680
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1680, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1685
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1685, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1689
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1689, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            QUADRO ELETTRICO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1695
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1695, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1700
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1700, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1705
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1705, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1710
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1710, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1715
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1715, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1719
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1719, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            SERVIZI PREDISPOSIZIONE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1725
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1725, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1730
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1730, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1735
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1735, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1740
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1740, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1745
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1745, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1750
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1750, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1755
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1755, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1760
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1760, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1765
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1765, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1770
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1770, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1775
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1775, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1780
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1780, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1785
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1785, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1790
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1790, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1795
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1795, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1800
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1800, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1805
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1805, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1810
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1810, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1815
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1815, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1820
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1820, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1824
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1824, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1830
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1830, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1835
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1835, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1840
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1840, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1845
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1845, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1850
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1850, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1855
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1855, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1860
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1860, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1864
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1864, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PREDISPOSIZIONE AUTOMATISMI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1870
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1870, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1875
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1875, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1880
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1880, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1885
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1885, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1890
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1890, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1895
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1895, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1899
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1899, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            ASPIRAZIONE CENTRALIZZATA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1905
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1905, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 1910
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 1910, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 1914
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1914, $this->source); })()) + 1), "html", null, true);
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
        // line 1941
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1941, $this->source); })()), 0, []), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 1942
            echo "                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1944
        echo "                                            <th class=\"itemHead\">
                                                Sistemi
                                            </th>
                                        </tr>
                                    </thead>
                                    </div>
                                    <div class=\"linked-scrollbar-fixed\">
                                        <tbody class=\"linked-scrollbar-fixed\">
                                        <tr id=\"firstItem\">
                                            <td class=\"row-title\" colspan=\"";
        // line 1953
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1953, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>

                                        <tr>
                                            ";
        // line 1957
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1957, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1958
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 1959
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1962
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1964
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1964, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1965
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 1966
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1969
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1971
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1971, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1972
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 1973
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1976
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 1979
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1979, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1980
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 1981
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1984
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1986, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1987
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 1988
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1991
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 1993
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1993, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 1996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1996, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1997
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 1998
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2001
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2003
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2003, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2004
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
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
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2010
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2010, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2013
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2013, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2014
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2020
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2020, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2021
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 2022
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2025
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2027
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2027, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2028
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 2029
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2032
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2034, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2035
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 2036
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2039
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2041
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2041, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2042
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 2043
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2046
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 2049
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2049, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2050
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 2051
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2054
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2056
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2056, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2057
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 2058
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2061
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2063, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2064
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2070
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2070, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2071
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 2072
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2075
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2077
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2077, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2080
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2080, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2081
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 2082
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2085
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2087
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2087, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2088
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 2089
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2092
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2094
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2094, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2095
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 2096
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2099
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2101, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2102
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 2103
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2106
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2108, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2109
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 2110
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2113
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2115
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2115, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2118, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2119
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 2120
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2123
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2125, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2126
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 2127
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2130
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2132, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2133
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 2134
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2137
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2139, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2140
            echo "                                            <td>
                                                <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 2141
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                            </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2144
        echo "                                            </td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2147, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2148
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 2149
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2152
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2154
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2154, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2157, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2158
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 2159
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2162
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2164, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2165
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 2166
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2169
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2171, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2172
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 2173
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2176
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2178, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2179
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2185, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2186
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 2187
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2190
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2192, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2193
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 2194
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2197
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2199, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2200
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 2201
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2204
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2206, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2207
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 2208
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2211
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2213, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2214
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2220, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2221
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 2222
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2225
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2227, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2228
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 2229
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2232
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2234, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2235
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 2236
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2239
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2241, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2242
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 2243
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2246
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2248, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2249
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 2250
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2253
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2255, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2256
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 2257
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2260
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2262, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2263
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 2264
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2267
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2269, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2270
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 2271
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2274
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2276, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2277
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 2278
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2281
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2283, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2284
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 2285
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2288
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2290, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2291
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 2292
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2295
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2297
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2297, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2300, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2301
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 2302
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2305
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2307, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2308
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 2309
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2312
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2314, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2315
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 2316
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2319
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2321, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2322
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 2323
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2326
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2328, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2329
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 2330
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2333
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2335, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2336
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 2337
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2340
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2342, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2343
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 2344
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2347
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2349
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2349, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2352, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2353
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 2354
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2357
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2359, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2360
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 2361
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2364
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2366, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2367
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 2368
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2371
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2373, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2374
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 2375
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2378
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2380, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2381
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 2382
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2385
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2387, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2388
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 2389
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2392
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2394
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2394, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2397, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2398
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 2399
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2402
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2404, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2405
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 2406
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2409
        echo "                                        </tr>
                                        <tr>
                                            <td class=\"row-title\" colspan=\"";
        // line 2411
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2411, $this->source); })()) + 1), "html", null, true);
        echo "\"></td>
                                        </tr>
                                        <tr>
                                            ";
        // line 2414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2414, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2415
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 2416
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                                </td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2419
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2421, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2422
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 2423
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
        // line 2426
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 2428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2428, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2429
            echo "                                                <td>
                                                    <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 2430
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
        // line 2433
        echo "                                        </tr>
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
        // line 2448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2448, $this->source); })()), "submit", []), 'widget');
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
        // line 2459
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2459, $this->source); })()), 'form_end');
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
        <script>
            \$(document).ready( function () {
                update(";
        // line 2540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2540, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 2541
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2541, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 2542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2542, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 2543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2543, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 2544
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2544, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 2550
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2550, $this->source); })()), "html", null, true);
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
        // line 2580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2580, $this->source); })()), 0, []), "id", []), "html", null, true);
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
        // line 2597
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2597, $this->source); })()), "html", null, true);
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
        // line 2609
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2609, $this->source); })()), "html", null, true);
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
        // line 2653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2659
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2660
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
        // line 2765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2767
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2768
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
        return "expertations/new.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4872 => 2768,  4863 => 2767,  4851 => 2765,  4744 => 2660,  4735 => 2659,  4723 => 2657,  4716 => 2653,  4669 => 2609,  4654 => 2597,  4634 => 2580,  4601 => 2550,  4592 => 2544,  4588 => 2543,  4584 => 2542,  4580 => 2541,  4576 => 2540,  4492 => 2459,  4478 => 2448,  4461 => 2433,  4450 => 2430,  4447 => 2429,  4443 => 2428,  4439 => 2426,  4428 => 2423,  4425 => 2422,  4421 => 2421,  4417 => 2419,  4408 => 2416,  4405 => 2415,  4401 => 2414,  4395 => 2411,  4391 => 2409,  4382 => 2406,  4379 => 2405,  4375 => 2404,  4371 => 2402,  4362 => 2399,  4359 => 2398,  4355 => 2397,  4349 => 2394,  4345 => 2392,  4336 => 2389,  4333 => 2388,  4329 => 2387,  4325 => 2385,  4316 => 2382,  4313 => 2381,  4309 => 2380,  4305 => 2378,  4296 => 2375,  4293 => 2374,  4289 => 2373,  4285 => 2371,  4276 => 2368,  4273 => 2367,  4269 => 2366,  4265 => 2364,  4256 => 2361,  4253 => 2360,  4249 => 2359,  4245 => 2357,  4236 => 2354,  4233 => 2353,  4229 => 2352,  4223 => 2349,  4219 => 2347,  4210 => 2344,  4207 => 2343,  4203 => 2342,  4199 => 2340,  4190 => 2337,  4187 => 2336,  4183 => 2335,  4179 => 2333,  4170 => 2330,  4167 => 2329,  4163 => 2328,  4159 => 2326,  4150 => 2323,  4147 => 2322,  4143 => 2321,  4139 => 2319,  4130 => 2316,  4127 => 2315,  4123 => 2314,  4119 => 2312,  4110 => 2309,  4107 => 2308,  4103 => 2307,  4099 => 2305,  4090 => 2302,  4087 => 2301,  4083 => 2300,  4077 => 2297,  4073 => 2295,  4064 => 2292,  4061 => 2291,  4057 => 2290,  4053 => 2288,  4044 => 2285,  4041 => 2284,  4037 => 2283,  4033 => 2281,  4024 => 2278,  4021 => 2277,  4017 => 2276,  4013 => 2274,  4004 => 2271,  4001 => 2270,  3997 => 2269,  3993 => 2267,  3984 => 2264,  3981 => 2263,  3977 => 2262,  3973 => 2260,  3964 => 2257,  3961 => 2256,  3957 => 2255,  3953 => 2253,  3944 => 2250,  3941 => 2249,  3937 => 2248,  3933 => 2246,  3924 => 2243,  3921 => 2242,  3917 => 2241,  3913 => 2239,  3904 => 2236,  3901 => 2235,  3897 => 2234,  3893 => 2232,  3884 => 2229,  3881 => 2228,  3877 => 2227,  3873 => 2225,  3864 => 2222,  3861 => 2221,  3857 => 2220,  3853 => 2218,  3844 => 2215,  3841 => 2214,  3837 => 2213,  3833 => 2211,  3824 => 2208,  3821 => 2207,  3817 => 2206,  3813 => 2204,  3804 => 2201,  3801 => 2200,  3797 => 2199,  3793 => 2197,  3784 => 2194,  3781 => 2193,  3777 => 2192,  3773 => 2190,  3764 => 2187,  3761 => 2186,  3757 => 2185,  3753 => 2183,  3744 => 2180,  3741 => 2179,  3737 => 2178,  3733 => 2176,  3724 => 2173,  3721 => 2172,  3717 => 2171,  3713 => 2169,  3704 => 2166,  3701 => 2165,  3697 => 2164,  3693 => 2162,  3684 => 2159,  3681 => 2158,  3677 => 2157,  3671 => 2154,  3667 => 2152,  3658 => 2149,  3655 => 2148,  3651 => 2147,  3646 => 2144,  3637 => 2141,  3634 => 2140,  3630 => 2139,  3626 => 2137,  3617 => 2134,  3614 => 2133,  3610 => 2132,  3606 => 2130,  3597 => 2127,  3594 => 2126,  3590 => 2125,  3586 => 2123,  3577 => 2120,  3574 => 2119,  3570 => 2118,  3564 => 2115,  3560 => 2113,  3551 => 2110,  3548 => 2109,  3544 => 2108,  3540 => 2106,  3531 => 2103,  3528 => 2102,  3524 => 2101,  3520 => 2099,  3511 => 2096,  3508 => 2095,  3504 => 2094,  3500 => 2092,  3491 => 2089,  3488 => 2088,  3484 => 2087,  3480 => 2085,  3471 => 2082,  3468 => 2081,  3464 => 2080,  3458 => 2077,  3454 => 2075,  3445 => 2072,  3442 => 2071,  3438 => 2070,  3434 => 2068,  3425 => 2065,  3422 => 2064,  3418 => 2063,  3414 => 2061,  3405 => 2058,  3402 => 2057,  3398 => 2056,  3394 => 2054,  3385 => 2051,  3382 => 2050,  3378 => 2049,  3373 => 2046,  3364 => 2043,  3361 => 2042,  3357 => 2041,  3353 => 2039,  3344 => 2036,  3341 => 2035,  3337 => 2034,  3333 => 2032,  3324 => 2029,  3321 => 2028,  3317 => 2027,  3313 => 2025,  3304 => 2022,  3301 => 2021,  3297 => 2020,  3293 => 2018,  3284 => 2015,  3281 => 2014,  3277 => 2013,  3271 => 2010,  3267 => 2008,  3258 => 2005,  3255 => 2004,  3251 => 2003,  3247 => 2001,  3238 => 1998,  3235 => 1997,  3231 => 1996,  3225 => 1993,  3221 => 1991,  3212 => 1988,  3209 => 1987,  3205 => 1986,  3201 => 1984,  3192 => 1981,  3189 => 1980,  3185 => 1979,  3180 => 1976,  3171 => 1973,  3168 => 1972,  3164 => 1971,  3160 => 1969,  3151 => 1966,  3148 => 1965,  3144 => 1964,  3140 => 1962,  3131 => 1959,  3128 => 1958,  3124 => 1957,  3117 => 1953,  3106 => 1944,  3097 => 1942,  3093 => 1941,  3063 => 1914,  3056 => 1910,  3048 => 1905,  3039 => 1899,  3032 => 1895,  3024 => 1890,  3016 => 1885,  3008 => 1880,  3000 => 1875,  2992 => 1870,  2983 => 1864,  2976 => 1860,  2968 => 1855,  2960 => 1850,  2952 => 1845,  2944 => 1840,  2936 => 1835,  2928 => 1830,  2919 => 1824,  2912 => 1820,  2904 => 1815,  2896 => 1810,  2888 => 1805,  2880 => 1800,  2872 => 1795,  2864 => 1790,  2856 => 1785,  2848 => 1780,  2840 => 1775,  2832 => 1770,  2824 => 1765,  2816 => 1760,  2808 => 1755,  2800 => 1750,  2792 => 1745,  2784 => 1740,  2776 => 1735,  2768 => 1730,  2760 => 1725,  2751 => 1719,  2744 => 1715,  2736 => 1710,  2728 => 1705,  2720 => 1700,  2712 => 1695,  2703 => 1689,  2696 => 1685,  2688 => 1680,  2680 => 1675,  2672 => 1670,  2664 => 1665,  2655 => 1659,  2648 => 1655,  2640 => 1650,  2632 => 1645,  2624 => 1640,  2616 => 1635,  2608 => 1630,  2600 => 1625,  2592 => 1620,  2584 => 1615,  2575 => 1609,  2568 => 1605,  2560 => 1600,  2551 => 1594,  2544 => 1590,  2536 => 1585,  2528 => 1580,  2520 => 1575,  2512 => 1570,  2503 => 1564,  2494 => 1557,  2492 => 1556,  2479 => 1547,  2477 => 1546,  2472 => 1545,  2470 => 1544,  2465 => 1542,  2459 => 1539,  2434 => 1517,  2428 => 1514,  2415 => 1504,  2409 => 1501,  2401 => 1496,  2395 => 1493,  2382 => 1483,  2376 => 1480,  2368 => 1475,  2362 => 1472,  2349 => 1462,  2343 => 1459,  2335 => 1454,  2329 => 1451,  2321 => 1446,  2315 => 1443,  2307 => 1438,  2301 => 1435,  2293 => 1430,  2287 => 1427,  2279 => 1422,  2273 => 1419,  2265 => 1414,  2259 => 1411,  2246 => 1401,  2240 => 1398,  2227 => 1388,  2221 => 1385,  2213 => 1380,  2207 => 1377,  2192 => 1365,  2172 => 1348,  2166 => 1345,  2151 => 1333,  2135 => 1319,  2129 => 1317,  2122 => 1313,  2116 => 1310,  2107 => 1303,  2105 => 1302,  2099 => 1299,  2093 => 1296,  2078 => 1284,  2058 => 1267,  2052 => 1264,  2037 => 1252,  2017 => 1235,  2011 => 1232,  1998 => 1222,  1992 => 1219,  1979 => 1209,  1973 => 1206,  1965 => 1201,  1959 => 1198,  1951 => 1193,  1945 => 1190,  1937 => 1185,  1931 => 1182,  1916 => 1170,  1896 => 1153,  1890 => 1150,  1877 => 1140,  1871 => 1137,  1863 => 1132,  1857 => 1129,  1842 => 1117,  1822 => 1100,  1816 => 1097,  1803 => 1087,  1797 => 1084,  1789 => 1079,  1783 => 1076,  1775 => 1071,  1769 => 1068,  1761 => 1063,  1755 => 1060,  1747 => 1055,  1741 => 1052,  1733 => 1047,  1727 => 1044,  1712 => 1032,  1692 => 1015,  1686 => 1012,  1673 => 1002,  1667 => 999,  1659 => 994,  1653 => 991,  1645 => 986,  1639 => 983,  1631 => 978,  1625 => 975,  1617 => 970,  1611 => 967,  1596 => 955,  1576 => 938,  1570 => 935,  1557 => 925,  1551 => 922,  1543 => 917,  1537 => 914,  1529 => 909,  1523 => 906,  1508 => 894,  1488 => 877,  1482 => 874,  1474 => 869,  1468 => 866,  1460 => 861,  1454 => 858,  1439 => 846,  1423 => 832,  1417 => 830,  1410 => 826,  1404 => 823,  1395 => 816,  1393 => 815,  1387 => 812,  1381 => 809,  1373 => 804,  1367 => 801,  1359 => 796,  1353 => 793,  1345 => 788,  1339 => 785,  1324 => 773,  1308 => 759,  1302 => 757,  1295 => 753,  1289 => 750,  1280 => 743,  1278 => 742,  1272 => 739,  1266 => 736,  1258 => 731,  1252 => 728,  1239 => 718,  1233 => 715,  1225 => 710,  1219 => 707,  1206 => 697,  1200 => 694,  1192 => 689,  1186 => 686,  1173 => 676,  1167 => 673,  1159 => 668,  1153 => 665,  1138 => 653,  1122 => 639,  1116 => 637,  1109 => 633,  1103 => 630,  1094 => 623,  1092 => 622,  1086 => 619,  1080 => 616,  1072 => 611,  1066 => 608,  1051 => 596,  1035 => 582,  1029 => 580,  1022 => 576,  1016 => 573,  1007 => 566,  1005 => 565,  999 => 562,  993 => 559,  985 => 554,  979 => 551,  964 => 539,  948 => 525,  942 => 523,  935 => 519,  929 => 516,  920 => 509,  918 => 508,  912 => 505,  906 => 502,  898 => 497,  892 => 494,  877 => 482,  857 => 465,  851 => 462,  836 => 450,  820 => 436,  814 => 434,  807 => 430,  801 => 427,  792 => 420,  790 => 419,  784 => 416,  778 => 413,  770 => 408,  764 => 405,  749 => 393,  733 => 379,  727 => 377,  720 => 373,  714 => 370,  705 => 363,  703 => 362,  697 => 359,  691 => 356,  683 => 351,  677 => 348,  662 => 336,  642 => 319,  636 => 316,  623 => 306,  617 => 303,  604 => 293,  598 => 290,  590 => 285,  584 => 282,  576 => 277,  570 => 274,  557 => 264,  551 => 261,  543 => 256,  537 => 253,  529 => 248,  523 => 245,  515 => 240,  509 => 237,  494 => 225,  474 => 208,  468 => 205,  460 => 200,  454 => 197,  439 => 185,  419 => 168,  413 => 165,  405 => 160,  399 => 157,  386 => 147,  380 => 144,  372 => 139,  366 => 136,  351 => 124,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                            <p><small>{{ func.uidToSurName(item.0.client) }} {{ func.uidToName(item.0.client) }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>{{ item.0.date|date(\"d/m/Y\") }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Tipo Impianto</strong>
                            <p><small>{{ func.plantIntToName(item.0.tipo) }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>{{ item.0.kw }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>{{ item.0.pianiCasa }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>{{ func.heatingIntToName(item.0.riscaldamento) }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>{% if item.0.opereMurarie == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Opere Murarie </strong><br>
                            <strong>{% if item.0.opereMurarieIntonaco == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Intonaco </strong><br>
                            <strong>{% if item.0.opereMurariePietra == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Pietra</strong>
                        </div>
                        <!--<div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>{{ item.0.sconto }}</small></p>
                        </div>-->
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>{{ item.0.level }}</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>Metratura</strong>
                            <p><small>{{ item.0.squareMeters }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>{% if item.0.trifase == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Trifase </strong><br>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Circuiti</strong>
                            <p><small>{{ item.0.numCircuiti }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>{% if item.0.illumSicurezza >= 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Illum. Sicurezza </strong>&nbsp;&nbsp;{{ item.0.illumSicurezza }}<br>
                            <strong>{% if item.0.lampada == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Lampada fornita </strong><br>
                        </div>
                        <div class=\"col-lg-3\">
                            <strong>SPD</strong>
                            <p><small>{% if item.0.spd == 1 %}SPD ad arrivo linea, Tolleranza R1{% elseif item.0.spd == 2 %}SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni{% endif %}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>{% if item.0.impAusiliari == 1 %}Campanello, citofono e videocitofono{% elseif item.0.impAusiliari == 2 %}Campanello, citofono e antintrusione, Controllo carichi{% elseif item.0.impAusiliari == 3 %}Campanello, citofono e antintrusione, Controllo carichi, Domotica{% endif %} </small></p>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-lg-2\">
                            <strong>{% if item.0.campanello == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Campanello</strong><br>
                            <strong>{% if item.0.citVid == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Citofono</strong><br>
                            <strong>{% if item.0.citVid == 2 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;VideoCitofono</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>{% if item.0.antenna == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Predisposizione Antenna</strong><br>
                            <strong>{% if item.0.allarme == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Predisposizione Allarme</strong><br>
                            <strong>{% if item.0.illumEsterna == 1 %}<i class=\"fa fa-check text-success\" style=\"margin-left:-5px\"></i>{% else %}<i class=\"fa fa-times text-danger\"></i>{% endif %}&nbsp;Illuminazione Esterna</strong><br>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Dati</strong>
                            <p><small>{{ item.0.numPreseDati }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Prese Telefono</strong>
                            <p><small>{{ item.0.numPreseTelefono }}</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Sconto</strong>
                            <p><small>{{ item.0.sconto }} %</small></p>
                        </div>
                        <div class=\"col-lg-2\">
                            <strong>Totale Preliminare</strong>
                            <p><small>{{ item.0.price }} €</small></p>
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                                    {% if item.0.opereMurariePietra == 1 %}
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
                        <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> {{ floor }}</h4>
                            <div class=\"btn-group float-right ml-3\">
                                {% set oldFloor = floor - 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.0.pid, 'floor': oldFloor }) }}\">-</a>
                                {% set newFloor = floor + 1 %}
                                <a class=\"btn btn-secondary btn-sm\" href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.0.pid, 'floor': newFloor }) }}\">+</a>
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
                                            {% for itm in item.0.name %}
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
        <script>
            \$(document).ready( function () {
                update({{ item.0.id }},'pp','val1');
                update({{ item.0.id }},'pl','val8');
                update({{ item.0.id }},'c1v','val6');
                update({{ item.0.id }},'c2v','val41');
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
                \$('#appbundle_expertationsadvanced_father').val({{ item.0.id }});
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
", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
