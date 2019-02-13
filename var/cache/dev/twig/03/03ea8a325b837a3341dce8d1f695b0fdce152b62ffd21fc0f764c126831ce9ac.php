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
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <!--<div id=\"\" class=\"float-left\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["oldFloor"]) || array_key_exists("oldFloor", $context) ? $context["oldFloor"] : (function () { throw new Twig_Error_Runtime('Variable "oldFloor" does not exist.', 124, $this->source); })())]), "html", null, true);
        echo "\">-</a>
                                ";
        // line 125
        $context["newFloor"] = ((isset($context["floor"]) || array_key_exists("floor", $context) ? $context["floor"] : (function () { throw new Twig_Error_Runtime('Variable "floor" does not exist.', 125, $this->source); })()) + 1);
        // line 126
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 126, $this->source); })()), 0, []), "pid", []), "floor" => (isset($context["newFloor"]) || array_key_exists("newFloor", $context) ? $context["newFloor"] : (function () { throw new Twig_Error_Runtime('Variable "newFloor" does not exist.', 126, $this->source); })())]), "html", null, true);
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
        // line 557
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 557, $this->source); })()), 0, []), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["itm"]) {
            // line 558
            echo "                                                <th class=\"text-center itemHead\">";
            echo twig_escape_filter($this->env, $context["itm"], "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 582, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 583
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 589, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 590
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 597
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 597, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 598
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 604, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 605
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 621
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 621, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 622
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 638, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 639
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 645, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 646
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 652
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 652, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 653
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 659, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 660
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>

                                            ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 667, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 668
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 674, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 675
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 681, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 682
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 688, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 689
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 705, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 706
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 712, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 713
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 719, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 720
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 726, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 727
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 743, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 744
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 750, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 751
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 757, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 758
            echo "                                            <td>
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
        echo "                                            </td>
                                        </tr>
                                        <tr>
                                            ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 765, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 766
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 782
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 782, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 783
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 789, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 790
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 796, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 797
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 803, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 804
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 810, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 811
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 817
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 817, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 818
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 824
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 824, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 825
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 831, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 832
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 838
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 838, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 839
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 845
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 845, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 846
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 852, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 853
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 859
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 859, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 860
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 866, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 867
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 873, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 874
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 880, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 881
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 887, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 888
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 894
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 894, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 895
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 901, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 902
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 908
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 908, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 909
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 925
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 925, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 926
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 932
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 932, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 933
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 939
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 939, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 940
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 946, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 947
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 953
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 953, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 954
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 960, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 961
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 977, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 978
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 984, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 985
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 991
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 991, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 992
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 998
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 998, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 999
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1005
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1005, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1006
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1022
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1022, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1023
            echo "                                                <td>
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
        echo "                                        </tr>
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
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1039, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1040
            echo "                                                <td>
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
        echo "                                        </tr>
                                        <tr>
                                            ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 1046, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1047
            echo "                                                <td>
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
        // line 1066
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1066, $this->source); })()), "submit", []), 'widget');
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
        // line 1165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1165, $this->source); })()), "opt1Enabled", []), 'widget');
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
        // line 1177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1177, $this->source); })()), "opt1_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1180, $this->source); })()), "opt1_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1185, $this->source); })()), "opt1_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1188, $this->source); })()), "opt1_2Value", []), 'label');
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
        // line 1198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1198, $this->source); })()), "opt1_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1201, $this->source); })()), "opt1_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1206, $this->source); })()), "opt1_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1209, $this->source); })()), "opt1_4Value", []), 'label');
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
        // line 1226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1226, $this->source); })()), "opt2Enabled", []), 'widget');
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
        // line 1238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1238, $this->source); })()), "opt2_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1241, $this->source); })()), "opt2_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1246, $this->source); })()), "opt2_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1249, $this->source); })()), "opt2_2Value", []), 'label');
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
        // line 1266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1266, $this->source); })()), "opt3Enabled", []), 'widget');
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
        // line 1278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1278, $this->source); })()), "opt3_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1281, $this->source); })()), "opt3_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1286, $this->source); })()), "opt3_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1289, $this->source); })()), "opt3_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1294, $this->source); })()), "opt3_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1297, $this->source); })()), "opt3_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1302, $this->source); })()), "opt3_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1305, $this->source); })()), "opt3_4Value", []), 'label');
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
        // line 1315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1315, $this->source); })()), "opt3_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1318, $this->source); })()), "opt3_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1323, $this->source); })()), "opt3_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1326, $this->source); })()), "opt3_6Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1331, $this->source); })()), "opt3_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1334, $this->source); })()), "opt3_7Value", []), 'label');
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
        // line 1344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1344, $this->source); })()), "opt3_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1347, $this->source); })()), "opt3_8Value", []), 'label');
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
        // line 1357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1357, $this->source); })()), "opt3_9Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1360, $this->source); })()), "opt3_9Value", []), 'label');
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
        // line 1377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1377, $this->source); })()), "opt4Enabled", []), 'widget');
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
        // line 1389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1389, $this->source); })()), "opt4_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1392, $this->source); })()), "opt4_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1397, $this->source); })()), "opt4_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1400, $this->source); })()), "opt4_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1403
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1403, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1404
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1411
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1411, $this->source); })()), "opt4_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1414
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1414, $this->source); })()), "opt4_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1418
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1418, $this->source); })()), "opt4_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1420
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
        // line 1434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1434, $this->source); })()), "opt5Enabled", []), 'widget');
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
        // line 1446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1446, $this->source); })()), "opt5_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1449, $this->source); })()), "opt5_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1454, $this->source); })()), "opt5_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1457, $this->source); })()), "opt5_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1460
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1460, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1461
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1468, $this->source); })()), "opt5_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1471
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1471, $this->source); })()), "opt5_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1475
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1475, $this->source); })()), "opt5_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1477
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
        // line 1491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1491, $this->source); })()), "opt6Enabled", []), 'widget');
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
        // line 1503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1503, $this->source); })()), "opt6_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1506
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1506, $this->source); })()), "opt6_1Value", []), 'label');
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
        // line 1523
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1523, $this->source); })()), "opt7Enabled", []), 'widget');
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
        // line 1535
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1535, $this->source); })()), "opt7_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1538
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1538, $this->source); })()), "opt7_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1543, $this->source); })()), "opt7_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1546, $this->source); })()), "opt7_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1549
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1549, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1550
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1557
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1557, $this->source); })()), "opt7_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1560
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1560, $this->source); })()), "opt7_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1564
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1564, $this->source); })()), "opt7_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1566
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
        // line 1580
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1580, $this->source); })()), "opt8Enabled", []), 'widget');
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
        // line 1592
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1592, $this->source); })()), "opt8_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1595
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1595, $this->source); })()), "opt8_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1600, $this->source); })()), "opt8_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1603
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1603, $this->source); })()), "opt8_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1606
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1606, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1607
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1614
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1614, $this->source); })()), "opt8_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1617
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1617, $this->source); })()), "opt8_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1621
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1621, $this->source); })()), "opt8_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1623
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
        // line 1637
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1637, $this->source); })()), "opt9Enabled", []), 'widget');
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
        // line 1649
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1649, $this->source); })()), "opt9_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1652
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1652, $this->source); })()), "opt9_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1657
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1657, $this->source); })()), "opt9_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1660
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1660, $this->source); })()), "opt9_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1663
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1663, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1664
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1671
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1671, $this->source); })()), "opt9_3Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1674, $this->source); })()), "opt9_3Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1678
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1678, $this->source); })()), "opt9_3Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1680
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
        // line 1694
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1694, $this->source); })()), "opt10Enabled", []), 'widget');
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
        // line 1706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1706, $this->source); })()), "opt10_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1709, $this->source); })()), "opt10_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1714, $this->source); })()), "opt10_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1717
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1717, $this->source); })()), "opt10_2Value", []), 'label');
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
        // line 1727
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1727, $this->source); })()), "opt10_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1730
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1730, $this->source); })()), "opt10_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1735
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1735, $this->source); })()), "opt10_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1738
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1738, $this->source); })()), "opt10_4Value", []), 'label');
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
        // line 1748
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1748, $this->source); })()), "opt10_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1751
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1751, $this->source); })()), "opt10_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1756
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1756, $this->source); })()), "opt10_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1759
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1759, $this->source); })()), "opt10_6Value", []), 'label');
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
        // line 1769
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1769, $this->source); })()), "opt10_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1772
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1772, $this->source); })()), "opt10_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1777
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1777, $this->source); })()), "opt10_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1780
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1780, $this->source); })()), "opt10_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1783
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1783, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1784
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1791
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1791, $this->source); })()), "opt10_9Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1794
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1794, $this->source); })()), "opt10_9Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1798
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1798, $this->source); })()), "opt10_9Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1800
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
        // line 1814
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1814, $this->source); })()), "opt11Enabled", []), 'widget');
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
        // line 1826
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1826, $this->source); })()), "opt11_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1829
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1829, $this->source); })()), "opt11_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1834
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1834, $this->source); })()), "opt11_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1837
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1837, $this->source); })()), "opt11_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1842
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1842, $this->source); })()), "opt11_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1845
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1845, $this->source); })()), "opt11_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1850
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1850, $this->source); })()), "opt11_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1853
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1853, $this->source); })()), "opt11_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 1856
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1856, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 1857
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 1864
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1864, $this->source); })()), "opt11_5Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 1867
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1867, $this->source); })()), "opt11_5Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1871
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1871, $this->source); })()), "opt11_5Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 1873
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
        // line 1887
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1887, $this->source); })()), "opt12Enabled", []), 'widget');
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
        // line 1899
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1899, $this->source); })()), "opt12_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1902
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1902, $this->source); })()), "opt12_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1907
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1907, $this->source); })()), "opt12_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1910
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1910, $this->source); })()), "opt12_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1915
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1915, $this->source); })()), "opt12_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1918
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1918, $this->source); })()), "opt12_3Value", []), 'label');
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
        // line 1935
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1935, $this->source); })()), "opt13Enabled", []), 'widget');
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
        // line 1947
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1947, $this->source); })()), "opt13_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1950
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1950, $this->source); })()), "opt13_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1955
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1955, $this->source); })()), "opt13_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1958
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1958, $this->source); })()), "opt13_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 1963
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1963, $this->source); })()), "opt13_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1966
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1966, $this->source); })()), "opt13_3Value", []), 'label');
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
        // line 1976
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1976, $this->source); })()), "opt13_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 1979
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1979, $this->source); })()), "opt13_4Value", []), 'label');
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
        // line 1996
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1996, $this->source); })()), "opt14Enabled", []), 'widget');
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
        // line 2008
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2008, $this->source); })()), "opt14_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2011
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2011, $this->source); })()), "opt14_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2016
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2016, $this->source); })()), "opt14_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2019
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2019, $this->source); })()), "opt14_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2024
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2024, $this->source); })()), "opt14_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2027
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2027, $this->source); })()), "opt14_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2032
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2032, $this->source); })()), "opt14_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2035
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2035, $this->source); })()), "opt14_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2040
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2040, $this->source); })()), "opt14_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2043
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2043, $this->source); })()), "opt14_5Value", []), 'label');
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
        // line 2053
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2053, $this->source); })()), "opt14_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2056
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2056, $this->source); })()), "opt14_6Value", []), 'label');
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
        // line 2073
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2073, $this->source); })()), "opt15Enabled", []), 'widget');
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
        // line 2085
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2085, $this->source); })()), "opt15_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2088
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2088, $this->source); })()), "opt15_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2093
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2093, $this->source); })()), "opt15_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2096
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2096, $this->source); })()), "opt15_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2101, $this->source); })()), "opt15_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2104, $this->source); })()), "opt15_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2109, $this->source); })()), "opt15_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2112, $this->source); })()), "opt15_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2117, $this->source); })()), "opt15_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2120, $this->source); })()), "opt15_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2125, $this->source); })()), "opt15_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2128, $this->source); })()), "opt15_6Value", []), 'label');
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
        // line 2138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2138, $this->source); })()), "opt15_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2141, $this->source); })()), "opt15_7Value", []), 'label');
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
        // line 2158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2158, $this->source); })()), "opt16Enabled", []), 'widget');
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
        // line 2170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2170, $this->source); })()), "opt16_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2173, $this->source); })()), "opt16_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2178, $this->source); })()), "opt16_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2181, $this->source); })()), "opt16_2Value", []), 'label');
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
        // line 2191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2191, $this->source); })()), "opt16_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2194, $this->source); })()), "opt16_3Value", []), 'label');
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
        // line 2211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2211, $this->source); })()), "opt17Enabled", []), 'widget');
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
        // line 2223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2223, $this->source); })()), "opt17_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2226, $this->source); })()), "opt17_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2231, $this->source); })()), "opt17_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2234, $this->source); })()), "opt17_2Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2239, $this->source); })()), "opt17_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2242, $this->source); })()), "opt17_3Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2247, $this->source); })()), "opt17_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2250, $this->source); })()), "opt17_4Value", []), 'label');
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
        // line 2260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2260, $this->source); })()), "opt17_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2263, $this->source); })()), "opt17_5Value", []), 'label');
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
        // line 2273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2273, $this->source); })()), "opt17_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2276, $this->source); })()), "opt17_6Value", []), 'label');
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
        // line 2293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2293, $this->source); })()), "opt18Enabled", []), 'widget');
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
        // line 2305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2305, $this->source); })()), "opt18_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2308, $this->source); })()), "opt18_1Value", []), 'label');
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
        // line 2325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2325, $this->source); })()), "opt19Enabled", []), 'widget');
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
        // line 2337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2337, $this->source); })()), "opt19_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2340, $this->source); })()), "opt19_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    ";
        // line 2343
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2343, $this->source); })()), 0, []), "opereMurariePietra", []) == 1)) {
            // line 2344
            echo "                                        <tr>
                                            <td colspan=\"2\">
                                                MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"width: 210px\">
                                                ";
            // line 2351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2351, $this->source); })()), "opt19_2Value", []), 'widget');
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 2354
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2354, $this->source); })()), "opt19_2Value", []), 'label');
            echo "
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 2358
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2358, $this->source); })()), "opt19_2Value", []), 'widget', ["attr" => ["class" => "hidden"]]);
            echo "
                                    ";
        }
        // line 2360
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
        // line 2374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2374, $this->source); })()), "opt20Enabled", []), 'widget');
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
        // line 2386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2386, $this->source); })()), "opt20_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2389, $this->source); })()), "opt20_1Value", []), 'label');
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
        // line 2406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2406, $this->source); })()), "opt21Enabled", []), 'widget');
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
        // line 2418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2418, $this->source); })()), "opt21_1Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2421, $this->source); })()), "opt21_1Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2426, $this->source); })()), "opt21_2Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2429, $this->source); })()), "opt21_2Value", []), 'label');
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
        // line 2439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2439, $this->source); })()), "opt21_3Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2442, $this->source); })()), "opt21_3Value", []), 'label');
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
        // line 2452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2452, $this->source); })()), "opt21_4Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2455, $this->source); })()), "opt21_4Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2460
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2460, $this->source); })()), "opt21_5Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2463, $this->source); })()), "opt21_5Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2468, $this->source); })()), "opt21_6Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2471
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2471, $this->source); })()), "opt21_6Value", []), 'label');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2484, $this->source); })()), "opt21_7Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2487, $this->source); })()), "opt21_7Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2492, $this->source); })()), "opt21_8Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2495, $this->source); })()), "opt21_8Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2500, $this->source); })()), "opt21_9Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2503, $this->source); })()), "opt21_9Value", []), 'label');
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
        // line 2513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2513, $this->source); })()), "opt21_10Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2516, $this->source); })()), "opt21_10Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2521
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2521, $this->source); })()), "opt21_11Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2524
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2524, $this->source); })()), "opt21_11Value", []), 'label');
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
        // line 2534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2534, $this->source); })()), "opt21_12Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2537, $this->source); })()), "opt21_12Value", []), 'label');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 210px\">
                                            ";
        // line 2542
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2542, $this->source); })()), "opt21_13Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2545
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2545, $this->source); })()), "opt21_13Value", []), 'label');
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
        // line 2555
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2555, $this->source); })()), "opt21_14Value", []), 'widget');
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 2558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2558, $this->source); })()), "opt21_14Value", []), 'label');
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
        // line 2576
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2576, $this->source); })()), 'form_end');
        echo "
        <script>
            \$(document).ready( function () {
                update(";
        // line 2579
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2579, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 2580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2580, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 2581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2581, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 2582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2582, $this->source); })()), 0, []), "id", []), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 2583
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2583, $this->source); })()), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 2589
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2589, $this->source); })()), "html", null, true);
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
        // line 2619
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2619, $this->source); })()), 0, []), "id", []), "html", null, true);
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
        // line 2636
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2636, $this->source); })()), "html", null, true);
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
        // line 2648
        echo twig_escape_filter($this->env, (isset($context["colCount"]) || array_key_exists("colCount", $context) ? $context["colCount"] : (function () { throw new Twig_Error_Runtime('Variable "colCount" does not exist.', 2648, $this->source); })()), "html", null, true);
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
        // line 2692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 2696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2698
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2699
        echo "    <style>
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
        // line 2804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2806
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2807
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
        return array (  4908 => 2807,  4899 => 2806,  4887 => 2804,  4780 => 2699,  4771 => 2698,  4759 => 2696,  4752 => 2692,  4705 => 2648,  4690 => 2636,  4670 => 2619,  4637 => 2589,  4628 => 2583,  4624 => 2582,  4620 => 2581,  4616 => 2580,  4612 => 2579,  4606 => 2576,  4585 => 2558,  4579 => 2555,  4566 => 2545,  4560 => 2542,  4552 => 2537,  4546 => 2534,  4533 => 2524,  4527 => 2521,  4519 => 2516,  4513 => 2513,  4500 => 2503,  4494 => 2500,  4486 => 2495,  4480 => 2492,  4472 => 2487,  4466 => 2484,  4458 => 2479,  4452 => 2476,  4444 => 2471,  4438 => 2468,  4430 => 2463,  4424 => 2460,  4416 => 2455,  4410 => 2452,  4397 => 2442,  4391 => 2439,  4378 => 2429,  4372 => 2426,  4364 => 2421,  4358 => 2418,  4343 => 2406,  4323 => 2389,  4317 => 2386,  4302 => 2374,  4286 => 2360,  4280 => 2358,  4273 => 2354,  4267 => 2351,  4258 => 2344,  4256 => 2343,  4250 => 2340,  4244 => 2337,  4229 => 2325,  4209 => 2308,  4203 => 2305,  4188 => 2293,  4168 => 2276,  4162 => 2273,  4149 => 2263,  4143 => 2260,  4130 => 2250,  4124 => 2247,  4116 => 2242,  4110 => 2239,  4102 => 2234,  4096 => 2231,  4088 => 2226,  4082 => 2223,  4067 => 2211,  4047 => 2194,  4041 => 2191,  4028 => 2181,  4022 => 2178,  4014 => 2173,  4008 => 2170,  3993 => 2158,  3973 => 2141,  3967 => 2138,  3954 => 2128,  3948 => 2125,  3940 => 2120,  3934 => 2117,  3926 => 2112,  3920 => 2109,  3912 => 2104,  3906 => 2101,  3898 => 2096,  3892 => 2093,  3884 => 2088,  3878 => 2085,  3863 => 2073,  3843 => 2056,  3837 => 2053,  3824 => 2043,  3818 => 2040,  3810 => 2035,  3804 => 2032,  3796 => 2027,  3790 => 2024,  3782 => 2019,  3776 => 2016,  3768 => 2011,  3762 => 2008,  3747 => 1996,  3727 => 1979,  3721 => 1976,  3708 => 1966,  3702 => 1963,  3694 => 1958,  3688 => 1955,  3680 => 1950,  3674 => 1947,  3659 => 1935,  3639 => 1918,  3633 => 1915,  3625 => 1910,  3619 => 1907,  3611 => 1902,  3605 => 1899,  3590 => 1887,  3574 => 1873,  3568 => 1871,  3561 => 1867,  3555 => 1864,  3546 => 1857,  3544 => 1856,  3538 => 1853,  3532 => 1850,  3524 => 1845,  3518 => 1842,  3510 => 1837,  3504 => 1834,  3496 => 1829,  3490 => 1826,  3475 => 1814,  3459 => 1800,  3453 => 1798,  3446 => 1794,  3440 => 1791,  3431 => 1784,  3429 => 1783,  3423 => 1780,  3417 => 1777,  3409 => 1772,  3403 => 1769,  3390 => 1759,  3384 => 1756,  3376 => 1751,  3370 => 1748,  3357 => 1738,  3351 => 1735,  3343 => 1730,  3337 => 1727,  3324 => 1717,  3318 => 1714,  3310 => 1709,  3304 => 1706,  3289 => 1694,  3273 => 1680,  3267 => 1678,  3260 => 1674,  3254 => 1671,  3245 => 1664,  3243 => 1663,  3237 => 1660,  3231 => 1657,  3223 => 1652,  3217 => 1649,  3202 => 1637,  3186 => 1623,  3180 => 1621,  3173 => 1617,  3167 => 1614,  3158 => 1607,  3156 => 1606,  3150 => 1603,  3144 => 1600,  3136 => 1595,  3130 => 1592,  3115 => 1580,  3099 => 1566,  3093 => 1564,  3086 => 1560,  3080 => 1557,  3071 => 1550,  3069 => 1549,  3063 => 1546,  3057 => 1543,  3049 => 1538,  3043 => 1535,  3028 => 1523,  3008 => 1506,  3002 => 1503,  2987 => 1491,  2971 => 1477,  2965 => 1475,  2958 => 1471,  2952 => 1468,  2943 => 1461,  2941 => 1460,  2935 => 1457,  2929 => 1454,  2921 => 1449,  2915 => 1446,  2900 => 1434,  2884 => 1420,  2878 => 1418,  2871 => 1414,  2865 => 1411,  2856 => 1404,  2854 => 1403,  2848 => 1400,  2842 => 1397,  2834 => 1392,  2828 => 1389,  2813 => 1377,  2793 => 1360,  2787 => 1357,  2774 => 1347,  2768 => 1344,  2755 => 1334,  2749 => 1331,  2741 => 1326,  2735 => 1323,  2727 => 1318,  2721 => 1315,  2708 => 1305,  2702 => 1302,  2694 => 1297,  2688 => 1294,  2680 => 1289,  2674 => 1286,  2666 => 1281,  2660 => 1278,  2645 => 1266,  2625 => 1249,  2619 => 1246,  2611 => 1241,  2605 => 1238,  2590 => 1226,  2570 => 1209,  2564 => 1206,  2556 => 1201,  2550 => 1198,  2537 => 1188,  2531 => 1185,  2523 => 1180,  2517 => 1177,  2502 => 1165,  2400 => 1066,  2383 => 1051,  2372 => 1048,  2369 => 1047,  2365 => 1046,  2361 => 1044,  2350 => 1041,  2347 => 1040,  2343 => 1039,  2339 => 1037,  2330 => 1034,  2327 => 1033,  2323 => 1032,  2317 => 1029,  2313 => 1027,  2304 => 1024,  2301 => 1023,  2297 => 1022,  2293 => 1020,  2284 => 1017,  2281 => 1016,  2277 => 1015,  2271 => 1012,  2267 => 1010,  2258 => 1007,  2255 => 1006,  2251 => 1005,  2247 => 1003,  2238 => 1000,  2235 => 999,  2231 => 998,  2227 => 996,  2218 => 993,  2215 => 992,  2211 => 991,  2207 => 989,  2198 => 986,  2195 => 985,  2191 => 984,  2187 => 982,  2178 => 979,  2175 => 978,  2171 => 977,  2167 => 975,  2158 => 972,  2155 => 971,  2151 => 970,  2145 => 967,  2141 => 965,  2132 => 962,  2129 => 961,  2125 => 960,  2121 => 958,  2112 => 955,  2109 => 954,  2105 => 953,  2101 => 951,  2092 => 948,  2089 => 947,  2085 => 946,  2081 => 944,  2072 => 941,  2069 => 940,  2065 => 939,  2061 => 937,  2052 => 934,  2049 => 933,  2045 => 932,  2041 => 930,  2032 => 927,  2029 => 926,  2025 => 925,  2021 => 923,  2012 => 920,  2009 => 919,  2005 => 918,  1999 => 915,  1995 => 913,  1986 => 910,  1983 => 909,  1979 => 908,  1975 => 906,  1966 => 903,  1963 => 902,  1959 => 901,  1955 => 899,  1946 => 896,  1943 => 895,  1939 => 894,  1935 => 892,  1926 => 889,  1923 => 888,  1919 => 887,  1915 => 885,  1906 => 882,  1903 => 881,  1899 => 880,  1895 => 878,  1886 => 875,  1883 => 874,  1879 => 873,  1875 => 871,  1866 => 868,  1863 => 867,  1859 => 866,  1855 => 864,  1846 => 861,  1843 => 860,  1839 => 859,  1835 => 857,  1826 => 854,  1823 => 853,  1819 => 852,  1815 => 850,  1806 => 847,  1803 => 846,  1799 => 845,  1795 => 843,  1786 => 840,  1783 => 839,  1779 => 838,  1775 => 836,  1766 => 833,  1763 => 832,  1759 => 831,  1755 => 829,  1746 => 826,  1743 => 825,  1739 => 824,  1735 => 822,  1726 => 819,  1723 => 818,  1719 => 817,  1715 => 815,  1706 => 812,  1703 => 811,  1699 => 810,  1695 => 808,  1686 => 805,  1683 => 804,  1679 => 803,  1675 => 801,  1666 => 798,  1663 => 797,  1659 => 796,  1655 => 794,  1646 => 791,  1643 => 790,  1639 => 789,  1635 => 787,  1626 => 784,  1623 => 783,  1619 => 782,  1615 => 780,  1606 => 777,  1603 => 776,  1599 => 775,  1593 => 772,  1589 => 770,  1580 => 767,  1577 => 766,  1573 => 765,  1568 => 762,  1559 => 759,  1556 => 758,  1552 => 757,  1548 => 755,  1539 => 752,  1536 => 751,  1532 => 750,  1528 => 748,  1519 => 745,  1516 => 744,  1512 => 743,  1508 => 741,  1499 => 738,  1496 => 737,  1492 => 736,  1486 => 733,  1482 => 731,  1473 => 728,  1470 => 727,  1466 => 726,  1462 => 724,  1453 => 721,  1450 => 720,  1446 => 719,  1442 => 717,  1433 => 714,  1430 => 713,  1426 => 712,  1422 => 710,  1413 => 707,  1410 => 706,  1406 => 705,  1402 => 703,  1393 => 700,  1390 => 699,  1386 => 698,  1380 => 695,  1376 => 693,  1367 => 690,  1364 => 689,  1360 => 688,  1356 => 686,  1347 => 683,  1344 => 682,  1340 => 681,  1336 => 679,  1327 => 676,  1324 => 675,  1320 => 674,  1316 => 672,  1307 => 669,  1304 => 668,  1300 => 667,  1295 => 664,  1286 => 661,  1283 => 660,  1279 => 659,  1275 => 657,  1266 => 654,  1263 => 653,  1259 => 652,  1255 => 650,  1246 => 647,  1243 => 646,  1239 => 645,  1235 => 643,  1226 => 640,  1223 => 639,  1219 => 638,  1215 => 636,  1206 => 633,  1203 => 632,  1199 => 631,  1193 => 628,  1189 => 626,  1180 => 623,  1177 => 622,  1173 => 621,  1169 => 619,  1160 => 616,  1157 => 615,  1153 => 614,  1147 => 611,  1143 => 609,  1134 => 606,  1131 => 605,  1127 => 604,  1123 => 602,  1114 => 599,  1111 => 598,  1107 => 597,  1102 => 594,  1093 => 591,  1090 => 590,  1086 => 589,  1082 => 587,  1073 => 584,  1070 => 583,  1066 => 582,  1062 => 580,  1053 => 577,  1050 => 576,  1046 => 575,  1039 => 571,  1026 => 560,  1017 => 558,  1013 => 557,  946 => 493,  939 => 489,  931 => 484,  922 => 478,  915 => 474,  907 => 469,  899 => 464,  891 => 459,  883 => 454,  875 => 449,  866 => 443,  859 => 439,  851 => 434,  843 => 429,  835 => 424,  827 => 419,  819 => 414,  811 => 409,  802 => 403,  795 => 399,  787 => 394,  779 => 389,  771 => 384,  763 => 379,  755 => 374,  747 => 369,  739 => 364,  731 => 359,  723 => 354,  715 => 349,  707 => 344,  699 => 339,  691 => 334,  683 => 329,  675 => 324,  667 => 319,  659 => 314,  651 => 309,  643 => 304,  634 => 298,  627 => 294,  619 => 289,  611 => 284,  603 => 279,  595 => 274,  586 => 268,  579 => 264,  571 => 259,  563 => 254,  555 => 249,  547 => 244,  538 => 238,  531 => 234,  523 => 229,  515 => 224,  507 => 219,  499 => 214,  491 => 209,  483 => 204,  475 => 199,  467 => 194,  458 => 188,  451 => 184,  443 => 179,  434 => 173,  427 => 169,  419 => 164,  411 => 159,  403 => 154,  395 => 149,  386 => 143,  377 => 136,  375 => 135,  362 => 126,  360 => 125,  355 => 124,  353 => 123,  348 => 121,  342 => 118,  324 => 103,  317 => 99,  310 => 95,  299 => 91,  291 => 90,  283 => 89,  273 => 86,  265 => 85,  257 => 84,  243 => 79,  232 => 75,  221 => 71,  211 => 70,  205 => 67,  194 => 63,  188 => 60,  181 => 56,  172 => 50,  161 => 46,  153 => 45,  145 => 44,  139 => 41,  132 => 37,  125 => 33,  118 => 29,  111 => 25,  102 => 21,  91 => 14,  88 => 13,  86 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
