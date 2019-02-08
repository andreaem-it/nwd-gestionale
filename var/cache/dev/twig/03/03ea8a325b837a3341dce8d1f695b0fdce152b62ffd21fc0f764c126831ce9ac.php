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


        <div class=\"row mt-1\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <!--<div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 124
        $context["oldFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 124, $this->source); })()) - 1);
        // line 125
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 125, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 125, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 126
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 126, $this->source); })()) + 1);
        // line 127
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 127, $this->source); })())]), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>-->
                    </div>
                        ";
        // line 136
        $context["colCount"] = (twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 136, $this->source); })())) + 1);
        // line 137
        echo "
                        <div class=\"wrapper2\">
                        <div class=\"row\">
                            <div class=\"col-3 pr-0\">
                                <table class=\"table-1 table table-bordered \">
                                    <th class=\"firstHead\">TIPOLOGIA</th>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 144
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 144, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PUNTI PRESA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong >";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 150, $this->source); })()), 0, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 155, $this->source); })()), 1, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 160, $this->source); })()), 2, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 165, $this->source); })()), 3, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 170, $this->source); })()), 4, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 174
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 174, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PUNTI COMANDO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 180, $this->source); })()), 5, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 185, $this->source); })()), 6, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 189
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 189, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 195, $this->source); })()), 7, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 200, $this->source); })()), 8, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 205, $this->source); })()), 9, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 210, $this->source); })()), 10, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 215, $this->source); })()), 11, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 220, $this->source); })()), 12, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 225, $this->source); })()), 13, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 230, $this->source); })()), 14, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 235, $this->source); })()), 15, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 239
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 239, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            RISCALDAMENTO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 245, $this->source); })()), 16, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 250, $this->source); })()), 17, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 255, $this->source); })()), 18, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 260, $this->source); })()), 19, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 265, $this->source); })()), 20, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 269
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 269, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            QUADRO ELETTRICO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 275, $this->source); })()), 21, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 280, $this->source); })()), 22, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 285, $this->source); })()), 23, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 290, $this->source); })()), 24, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 295, $this->source); })()), 25, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 299
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 299, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            SERVIZI PREDISPOSIZIONE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 305, $this->source); })()), 26, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 310, $this->source); })()), 27, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 315, $this->source); })()), 28, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 320, $this->source); })()), 29, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 325
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 325, $this->source); })()), 30, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 330
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 330, $this->source); })()), 31, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 335, $this->source); })()), 32, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 340, $this->source); })()), 33, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 345, $this->source); })()), 34, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 350
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 350, $this->source); })()), 35, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 355, $this->source); })()), 36, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 360, $this->source); })()), 37, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 365
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 365, $this->source); })()), 38, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 370, $this->source); })()), 39, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 375, $this->source); })()), 40, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 380, $this->source); })()), 41, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 385
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 385, $this->source); })()), 42, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 390, $this->source); })()), 43, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 395, $this->source); })()), 44, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 400
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 400, $this->source); })()), 45, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 404
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 404, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 410
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 410, $this->source); })()), 46, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 415
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 415, $this->source); })()), 47, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 420
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 420, $this->source); })()), 48, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 425
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 425, $this->source); })()), 49, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 430
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 430, $this->source); })()), 50, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 435
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 435, $this->source); })()), 51, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 440, $this->source); })()), 52, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 444
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 444, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            PREDISPOSIZIONE AUTOMATISMI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 450, $this->source); })()), 53, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 455
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 455, $this->source); })()), 54, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 460, $this->source); })()), 55, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 465
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 465, $this->source); })()), 56, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 470
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 470, $this->source); })()), 57, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 475
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 475, $this->source); })()), 58, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 479
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 479, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            ASPIRAZIONE CENTRALIZZATA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 485
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 485, $this->source); })()), 59, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>";
        // line 490
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 490, $this->source); })()), 60, []), "description", []), "html", null, true);
        echo "</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"row-title\" colspan=\"";
        // line 494
        echo twig_escape_filter($this->env, ((isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 494, $this->source); })()) + 1), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 558, $this->source); })()), 0, []), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 559
            echo "                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "                                            <th class=\"itemHead\">
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 583
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 583, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 584
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 590, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 591
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 598, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 599
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 605, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 606
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 622, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 623
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 639, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 640
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 646, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 647
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 653, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 654
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 660, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 661
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 668, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 669
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 675, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 676
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 682, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 683
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 689, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 690
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 706, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 707
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 713, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 714
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 720, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 721
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 727, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 728
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 744, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 745
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 751
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 751, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 752
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 758, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 759
            echo "                                            <td>
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
        echo "                                            </td>
                                        </tr>
                                        <tr>
                                            ";
        // line 766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 766, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 767
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 783, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 784
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 790, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 791
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 797, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 798
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 804
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 804, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 805
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 811, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 812
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 818, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 819
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 825, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 826
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 832, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 833
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 839, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 840
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 846, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 847
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 853
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 853, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 854
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 860
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 860, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 861
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 867, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 868
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 874, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 875
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 881, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 882
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 888, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 889
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 895
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 895, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 896
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 902, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 903
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 909, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 910
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 926
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 926, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 927
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 933, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 934
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 940
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 940, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 941
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 947
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 947, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 948
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 954, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 955
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 961, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 962
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 978
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 978, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 979
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 985
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 985, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 986
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 992, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 993
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 999, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1000
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1006, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1007
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1023
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1023, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1024
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1040
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1040, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1041
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1047
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1047, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1048
            echo "                                                <td>
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
        echo "                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
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
        // line 1067
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1067, $this->source); })()), "submit", []), 'widget');
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
        // line 1166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1166, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1178, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1181, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1186, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1189, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1199, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1202, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1207, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1210, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1227, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1239, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1242, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1247, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1250, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1267, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1279
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1279, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1282, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1287, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1290, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1295, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1298, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1303, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1306, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1316, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1319, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1324, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1327, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1332, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1335, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1345, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1348, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1358, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1361, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1378, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1390, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1393, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1398, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1401, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1404
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1404, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1405
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1412
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1412, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1415, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1419
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1419, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1421
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
        // line 1435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1435, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1447, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1450, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1455, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1458
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1458, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1461
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1461, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1462
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1469
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1469, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1472
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1472, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1476
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1476, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1478
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
        // line 1492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1492, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1504, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1507
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1507, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1524, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1536, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1539, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1544, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1547, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1550
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1550, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1551
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1558
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1558, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1561
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1561, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1565
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1565, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1567
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
        // line 1581
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1581, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1593
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1593, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1596
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1596, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1601
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1601, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1604
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1604, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1607
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1607, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1608
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1615
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1615, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1618
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1618, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1622
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1622, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1624
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
        // line 1638
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1638, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1650
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1650, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1653
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1653, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1658
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1658, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1661
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1661, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1664
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1664, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1665
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1672
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1672, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1675
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1675, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1679
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1679, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1681
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
        // line 1695
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1695, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1707
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1707, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1710, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1715
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1715, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1718, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1728
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1728, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1731
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1731, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1736, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1739, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1749
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1749, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1752
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1752, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1757
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1757, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1760
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1760, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1770
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1770, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1773
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1773, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1778
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1778, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1781
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1781, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1784
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1784, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1785
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1792
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1792, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1795
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1795, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1799
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1799, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1801
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
        // line 1815
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1815, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 1827
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1827, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1830
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1830, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1835
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1835, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1838
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1838, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1843
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1843, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1846
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1846, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1851
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1851, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1854
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1854, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1857
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1857, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1858
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1865
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1865, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1868
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1868, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1872
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1872, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1874
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
        // line 1888
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1888, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 1900
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1900, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1903
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1903, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1908
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1908, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1911
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1911, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1916
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1916, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1919
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1919, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 1936
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1936, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 1948
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1948, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1951
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1951, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1956
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1956, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1959
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1959, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1964
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1964, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1967
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1967, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1977
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1977, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1980
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1980, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 1997
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1997, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 2009
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2009, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2012
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2012, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2017
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2017, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2020
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2020, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2025
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2025, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2028
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2028, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2033
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2033, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2036
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2036, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2041
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2041, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2044
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2044, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 2054
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2054, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2057
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2057, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 2074
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2074, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 2086
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2086, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2089
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2089, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2094
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2094, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2097
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2097, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2102, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2105, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2110, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2113, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2118, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2121, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2126, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2129, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 2139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2139, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2142, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 2159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2159, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 2171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2171, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2174, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2179, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2182, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 2192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2192, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2195, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 2212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2212, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 2224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2224, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2227, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2232, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2235, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2240, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2243, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2248, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2251, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 2261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2261, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2264, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 2274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2274, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2277, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 2294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2294, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 2306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2306, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2309, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 2326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2326, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 2338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2338, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2341, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 2344
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2344, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 2345
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 2352
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2352, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 2355
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2355, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 2359
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2359, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 2361
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
        // line 2375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2375, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 2387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2387, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2390, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 2407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2407, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 2419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2419, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2422, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2427, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2430, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 2440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2440, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2443, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 2453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2453, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2456
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2456, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2461, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2464, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2469, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2472, $this->source); })()), "opt21_6Value", []), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2485, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2488
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2488, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2493, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2496, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2501, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2504, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 2514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2514, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2517, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2522
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2522, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2525, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 2535
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2535, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2538
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2538, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2543, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2546, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 2556
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2556, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2559, $this->source); })()), "opt21_14Value", []), 'label');
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
        // line 2577
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2577, $this->source); })()), 'form_end');
        echo "
        <script>
            \$(document).ready( function () {
                update(";
        // line 2580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2580, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 2581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2581, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 2582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2582, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 2583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2583, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 2584
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2584, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 2590
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2590, $this->source); })()), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', false);
                        \$(\"#form_val64_\" + i ).prop('disabled', false);
                    }
                    },10000);
                //check();
                    \$('.linked-scrollbar-fixed-2').on('scroll', function() {
                        \$('.linked-scrollbar-fixed-1').scrollLeft(\$(this).scrollLeft());
                    });


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
        // line 2620
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2620, $this->source); })()), 0, []), "id", []), "html", null, true);
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
        // line 2637
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2637, $this->source); })()), "html", null, true);
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
        // line 2649
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2649, $this->source); })()), "html", null, true);
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
        // line 2693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2699
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2700
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
        // line 2805
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2807
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2808
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
        return array (  4912 => 2808,  4903 => 2807,  4891 => 2805,  4784 => 2700,  4775 => 2699,  4763 => 2697,  4756 => 2693,  4709 => 2649,  4694 => 2637,  4674 => 2620,  4641 => 2590,  4632 => 2584,  4628 => 2583,  4624 => 2582,  4620 => 2581,  4616 => 2580,  4610 => 2577,  4589 => 2559,  4583 => 2556,  4570 => 2546,  4564 => 2543,  4556 => 2538,  4550 => 2535,  4537 => 2525,  4531 => 2522,  4523 => 2517,  4517 => 2514,  4504 => 2504,  4498 => 2501,  4490 => 2496,  4484 => 2493,  4476 => 2488,  4470 => 2485,  4462 => 2480,  4456 => 2477,  4448 => 2472,  4442 => 2469,  4434 => 2464,  4428 => 2461,  4420 => 2456,  4414 => 2453,  4401 => 2443,  4395 => 2440,  4382 => 2430,  4376 => 2427,  4368 => 2422,  4362 => 2419,  4347 => 2407,  4327 => 2390,  4321 => 2387,  4306 => 2375,  4290 => 2361,  4284 => 2359,  4277 => 2355,  4271 => 2352,  4262 => 2345,  4260 => 2344,  4254 => 2341,  4248 => 2338,  4233 => 2326,  4213 => 2309,  4207 => 2306,  4192 => 2294,  4172 => 2277,  4166 => 2274,  4153 => 2264,  4147 => 2261,  4134 => 2251,  4128 => 2248,  4120 => 2243,  4114 => 2240,  4106 => 2235,  4100 => 2232,  4092 => 2227,  4086 => 2224,  4071 => 2212,  4051 => 2195,  4045 => 2192,  4032 => 2182,  4026 => 2179,  4018 => 2174,  4012 => 2171,  3997 => 2159,  3977 => 2142,  3971 => 2139,  3958 => 2129,  3952 => 2126,  3944 => 2121,  3938 => 2118,  3930 => 2113,  3924 => 2110,  3916 => 2105,  3910 => 2102,  3902 => 2097,  3896 => 2094,  3888 => 2089,  3882 => 2086,  3867 => 2074,  3847 => 2057,  3841 => 2054,  3828 => 2044,  3822 => 2041,  3814 => 2036,  3808 => 2033,  3800 => 2028,  3794 => 2025,  3786 => 2020,  3780 => 2017,  3772 => 2012,  3766 => 2009,  3751 => 1997,  3731 => 1980,  3725 => 1977,  3712 => 1967,  3706 => 1964,  3698 => 1959,  3692 => 1956,  3684 => 1951,  3678 => 1948,  3663 => 1936,  3643 => 1919,  3637 => 1916,  3629 => 1911,  3623 => 1908,  3615 => 1903,  3609 => 1900,  3594 => 1888,  3578 => 1874,  3572 => 1872,  3565 => 1868,  3559 => 1865,  3550 => 1858,  3548 => 1857,  3542 => 1854,  3536 => 1851,  3528 => 1846,  3522 => 1843,  3514 => 1838,  3508 => 1835,  3500 => 1830,  3494 => 1827,  3479 => 1815,  3463 => 1801,  3457 => 1799,  3450 => 1795,  3444 => 1792,  3435 => 1785,  3433 => 1784,  3427 => 1781,  3421 => 1778,  3413 => 1773,  3407 => 1770,  3394 => 1760,  3388 => 1757,  3380 => 1752,  3374 => 1749,  3361 => 1739,  3355 => 1736,  3347 => 1731,  3341 => 1728,  3328 => 1718,  3322 => 1715,  3314 => 1710,  3308 => 1707,  3293 => 1695,  3277 => 1681,  3271 => 1679,  3264 => 1675,  3258 => 1672,  3249 => 1665,  3247 => 1664,  3241 => 1661,  3235 => 1658,  3227 => 1653,  3221 => 1650,  3206 => 1638,  3190 => 1624,  3184 => 1622,  3177 => 1618,  3171 => 1615,  3162 => 1608,  3160 => 1607,  3154 => 1604,  3148 => 1601,  3140 => 1596,  3134 => 1593,  3119 => 1581,  3103 => 1567,  3097 => 1565,  3090 => 1561,  3084 => 1558,  3075 => 1551,  3073 => 1550,  3067 => 1547,  3061 => 1544,  3053 => 1539,  3047 => 1536,  3032 => 1524,  3012 => 1507,  3006 => 1504,  2991 => 1492,  2975 => 1478,  2969 => 1476,  2962 => 1472,  2956 => 1469,  2947 => 1462,  2945 => 1461,  2939 => 1458,  2933 => 1455,  2925 => 1450,  2919 => 1447,  2904 => 1435,  2888 => 1421,  2882 => 1419,  2875 => 1415,  2869 => 1412,  2860 => 1405,  2858 => 1404,  2852 => 1401,  2846 => 1398,  2838 => 1393,  2832 => 1390,  2817 => 1378,  2797 => 1361,  2791 => 1358,  2778 => 1348,  2772 => 1345,  2759 => 1335,  2753 => 1332,  2745 => 1327,  2739 => 1324,  2731 => 1319,  2725 => 1316,  2712 => 1306,  2706 => 1303,  2698 => 1298,  2692 => 1295,  2684 => 1290,  2678 => 1287,  2670 => 1282,  2664 => 1279,  2649 => 1267,  2629 => 1250,  2623 => 1247,  2615 => 1242,  2609 => 1239,  2594 => 1227,  2574 => 1210,  2568 => 1207,  2560 => 1202,  2554 => 1199,  2541 => 1189,  2535 => 1186,  2527 => 1181,  2521 => 1178,  2506 => 1166,  2404 => 1067,  2387 => 1052,  2376 => 1049,  2373 => 1048,  2369 => 1047,  2365 => 1045,  2354 => 1042,  2351 => 1041,  2347 => 1040,  2343 => 1038,  2334 => 1035,  2331 => 1034,  2327 => 1033,  2321 => 1030,  2317 => 1028,  2308 => 1025,  2305 => 1024,  2301 => 1023,  2297 => 1021,  2288 => 1018,  2285 => 1017,  2281 => 1016,  2275 => 1013,  2271 => 1011,  2262 => 1008,  2259 => 1007,  2255 => 1006,  2251 => 1004,  2242 => 1001,  2239 => 1000,  2235 => 999,  2231 => 997,  2222 => 994,  2219 => 993,  2215 => 992,  2211 => 990,  2202 => 987,  2199 => 986,  2195 => 985,  2191 => 983,  2182 => 980,  2179 => 979,  2175 => 978,  2171 => 976,  2162 => 973,  2159 => 972,  2155 => 971,  2149 => 968,  2145 => 966,  2136 => 963,  2133 => 962,  2129 => 961,  2125 => 959,  2116 => 956,  2113 => 955,  2109 => 954,  2105 => 952,  2096 => 949,  2093 => 948,  2089 => 947,  2085 => 945,  2076 => 942,  2073 => 941,  2069 => 940,  2065 => 938,  2056 => 935,  2053 => 934,  2049 => 933,  2045 => 931,  2036 => 928,  2033 => 927,  2029 => 926,  2025 => 924,  2016 => 921,  2013 => 920,  2009 => 919,  2003 => 916,  1999 => 914,  1990 => 911,  1987 => 910,  1983 => 909,  1979 => 907,  1970 => 904,  1967 => 903,  1963 => 902,  1959 => 900,  1950 => 897,  1947 => 896,  1943 => 895,  1939 => 893,  1930 => 890,  1927 => 889,  1923 => 888,  1919 => 886,  1910 => 883,  1907 => 882,  1903 => 881,  1899 => 879,  1890 => 876,  1887 => 875,  1883 => 874,  1879 => 872,  1870 => 869,  1867 => 868,  1863 => 867,  1859 => 865,  1850 => 862,  1847 => 861,  1843 => 860,  1839 => 858,  1830 => 855,  1827 => 854,  1823 => 853,  1819 => 851,  1810 => 848,  1807 => 847,  1803 => 846,  1799 => 844,  1790 => 841,  1787 => 840,  1783 => 839,  1779 => 837,  1770 => 834,  1767 => 833,  1763 => 832,  1759 => 830,  1750 => 827,  1747 => 826,  1743 => 825,  1739 => 823,  1730 => 820,  1727 => 819,  1723 => 818,  1719 => 816,  1710 => 813,  1707 => 812,  1703 => 811,  1699 => 809,  1690 => 806,  1687 => 805,  1683 => 804,  1679 => 802,  1670 => 799,  1667 => 798,  1663 => 797,  1659 => 795,  1650 => 792,  1647 => 791,  1643 => 790,  1639 => 788,  1630 => 785,  1627 => 784,  1623 => 783,  1619 => 781,  1610 => 778,  1607 => 777,  1603 => 776,  1597 => 773,  1593 => 771,  1584 => 768,  1581 => 767,  1577 => 766,  1572 => 763,  1563 => 760,  1560 => 759,  1556 => 758,  1552 => 756,  1543 => 753,  1540 => 752,  1536 => 751,  1532 => 749,  1523 => 746,  1520 => 745,  1516 => 744,  1512 => 742,  1503 => 739,  1500 => 738,  1496 => 737,  1490 => 734,  1486 => 732,  1477 => 729,  1474 => 728,  1470 => 727,  1466 => 725,  1457 => 722,  1454 => 721,  1450 => 720,  1446 => 718,  1437 => 715,  1434 => 714,  1430 => 713,  1426 => 711,  1417 => 708,  1414 => 707,  1410 => 706,  1406 => 704,  1397 => 701,  1394 => 700,  1390 => 699,  1384 => 696,  1380 => 694,  1371 => 691,  1368 => 690,  1364 => 689,  1360 => 687,  1351 => 684,  1348 => 683,  1344 => 682,  1340 => 680,  1331 => 677,  1328 => 676,  1324 => 675,  1320 => 673,  1311 => 670,  1308 => 669,  1304 => 668,  1299 => 665,  1290 => 662,  1287 => 661,  1283 => 660,  1279 => 658,  1270 => 655,  1267 => 654,  1263 => 653,  1259 => 651,  1250 => 648,  1247 => 647,  1243 => 646,  1239 => 644,  1230 => 641,  1227 => 640,  1223 => 639,  1219 => 637,  1210 => 634,  1207 => 633,  1203 => 632,  1197 => 629,  1193 => 627,  1184 => 624,  1181 => 623,  1177 => 622,  1173 => 620,  1164 => 617,  1161 => 616,  1157 => 615,  1151 => 612,  1147 => 610,  1138 => 607,  1135 => 606,  1131 => 605,  1127 => 603,  1118 => 600,  1115 => 599,  1111 => 598,  1106 => 595,  1097 => 592,  1094 => 591,  1090 => 590,  1086 => 588,  1077 => 585,  1074 => 584,  1070 => 583,  1066 => 581,  1057 => 578,  1054 => 577,  1050 => 576,  1043 => 572,  1030 => 561,  1021 => 559,  1017 => 558,  950 => 494,  943 => 490,  935 => 485,  926 => 479,  919 => 475,  911 => 470,  903 => 465,  895 => 460,  887 => 455,  879 => 450,  870 => 444,  863 => 440,  855 => 435,  847 => 430,  839 => 425,  831 => 420,  823 => 415,  815 => 410,  806 => 404,  799 => 400,  791 => 395,  783 => 390,  775 => 385,  767 => 380,  759 => 375,  751 => 370,  743 => 365,  735 => 360,  727 => 355,  719 => 350,  711 => 345,  703 => 340,  695 => 335,  687 => 330,  679 => 325,  671 => 320,  663 => 315,  655 => 310,  647 => 305,  638 => 299,  631 => 295,  623 => 290,  615 => 285,  607 => 280,  599 => 275,  590 => 269,  583 => 265,  575 => 260,  567 => 255,  559 => 250,  551 => 245,  542 => 239,  535 => 235,  527 => 230,  519 => 225,  511 => 220,  503 => 215,  495 => 210,  487 => 205,  479 => 200,  471 => 195,  462 => 189,  455 => 185,  447 => 180,  438 => 174,  431 => 170,  423 => 165,  415 => 160,  407 => 155,  399 => 150,  390 => 144,  381 => 137,  379 => 136,  366 => 127,  364 => 126,  359 => 125,  357 => 124,  352 => 122,  346 => 119,  331 => 107,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                                            {% for itm in item.0.name %}
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
        {{ form_end(form) }}
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
                    \$('.linked-scrollbar-fixed-2').on('scroll', function() {
                        \$('.linked-scrollbar-fixed-1').scrollLeft(\$(this).scrollLeft());
                    });


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
