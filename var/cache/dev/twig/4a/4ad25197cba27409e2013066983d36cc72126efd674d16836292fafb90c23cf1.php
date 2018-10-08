<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_7b1eb858727820c19e03d5a0d22cf038f70b97f2d2df5e39460dce1b8f1705b7 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 18, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 22, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 26, $this->source); })()), "kw", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 34, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Opere Murarie</strong>
                            <p><small>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 38, $this->source); })()), "convertOMtoName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 38, $this->source); })()), "opereMurarie", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Trifase</strong>
                            <p>
                                <small>
                                    ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "trifase", array()) == 0)) {
            // line 45
            echo "                                        No
                                    ";
        } else {
            // line 47
            echo "                                        Si
                                    ";
        }
        // line 49
        echo "                                </small>
                            </p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->source); })()), "sconto", array()), "html", null, true);
        echo "</small></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->source); })()), "level", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Metri Quadrati</strong>
                            <p><small>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 64, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->source); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Prezzo Preliminare</strong>
                            <p><small>";
        // line 72
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 72, $this->source); })()), "price", array()), 2), "html", null, true);
        echo " €</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Illum. Sicurezza</strong>
                            <p><small>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>SPD</strong>
                            <p><small>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 80, $this->source); })()), "spd", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "impAusiliari", array()), "html", null, true);
        echo " </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 640
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 640, $this->source); })()), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 645
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 646
        echo "    <style>
        .form-control {
            width: 100%!important;
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
    </style>

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
        return array (  787 => 646,  778 => 645,  763 => 640,  204 => 84,  197 => 80,  190 => 76,  183 => 72,  176 => 68,  169 => 64,  162 => 60,  153 => 54,  146 => 49,  142 => 47,  138 => 45,  136 => 44,  127 => 38,  120 => 34,  113 => 30,  106 => 26,  99 => 22,  92 => 18,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
        {{ form_start(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>{{ func.uidToName(item.client) }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
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
                            <strong>Opere Murarie</strong>
                            <p><small>{{ func.convertOMtoName(item.opereMurarie) }}</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Trifase</strong>
                            <p>
                                <small>
                                    {% if item.trifase == 0 %}
                                        No
                                    {% else %}
                                        Si
                                    {% endif %}
                                </small>
                            </p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>{{ item.sconto }}</small></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>{{ item.level }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Metri Quadrati</strong>
                            <p><small>{{ item.squareMeters }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>{{ item.date|date(\"d/m/Y\") }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Prezzo Preliminare</strong>
                            <p><small>{{ item.price|round(2) }} €</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Illum. Sicurezza</strong>
                            <p><small>{{ item.illumSicurezza }}</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>SPD</strong>
                            <p><small>{{ item.spd }}</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>{{ item.impAusiliari }} </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}

    </div>
</div>
{% endblock %}
{% block stylesheets %}
    <style>
        .form-control {
            width: 100%!important;
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
    </style>

{% endblock %}", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
