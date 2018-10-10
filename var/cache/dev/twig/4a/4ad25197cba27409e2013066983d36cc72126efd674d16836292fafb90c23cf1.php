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
                        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), 'form_start');
        echo "
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 99, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 100
            echo "                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                </tr>
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
                                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 118, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            echo "                                        <td>
                                            ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->source); })()), "val1", array()), "vars", array()), "prototype", array()), 'widget');
            echo "
                                        </td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), "val2", array()), 'widget');
        echo "
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
                                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "val3", array()), 'widget');
        echo "
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
                                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->source); })()), "val4", array()), 'widget');
        echo "
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
                                        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->source); })()), "val5", array()), 'widget');
        echo "
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
                                        ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 226, $this->source); })()), "val6", array()), 'widget');
        echo "
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
                                        ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 249, $this->source); })()), "val7", array()), 'widget');
        echo "
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
                                        ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 277, $this->source); })()), "val8", array()), 'widget');
        echo "
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
                                        ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->source); })()), "val9", array()), 'widget');
        echo "
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
                                        ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 323, $this->source); })()), "val10", array()), 'widget');
        echo "
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
                                        ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->source); })()), "val11", array()), 'widget');
        echo "
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
                                        ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 369, $this->source); })()), "val12", array()), 'widget');
        echo "
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
                                        ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 392, $this->source); })()), "val13", array()), 'widget');
        echo "
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
                                        ";
        // line 415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 415, $this->source); })()), "val14", array()), 'widget');
        echo "
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
                                        ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 438, $this->source); })()), "val15", array()), 'widget');
        echo "
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
                                        ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 461, $this->source); })()), "val16", array()), 'widget');
        echo "
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
                                        ";
        // line 489
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 489, $this->source); })()), "val17", array()), 'widget');
        echo "
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
                                        ";
        // line 512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 512, $this->source); })()), "val18", array()), 'widget');
        echo "
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
                                        ";
        // line 535
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 535, $this->source); })()), "val19", array()), 'widget');
        echo "
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
                                        ";
        // line 558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 558, $this->source); })()), "val20", array()), 'widget');
        echo "
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
                                        ";
        // line 581
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 581, $this->source); })()), "val21", array()), 'widget');
        echo "
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
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 12 Moduli</strong>
                                    </td>
                                    <td>
                                        ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 609, $this->source); })()), "val22", array()), 'widget');
        echo "
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
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    <td>
                                        ";
        // line 632
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 632, $this->source); })()), "val23", array()), 'widget');
        echo "
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
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    <td>
                                        ";
        // line 655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 655, $this->source); })()), "val24", array()), 'widget');
        echo "
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
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    <td>
                                        ";
        // line 678
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 678, $this->source); })()), "val25", array()), 'widget');
        echo "
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
                                        <strong>Sezionatore</strong>
                                    </td>
                                    <td>
                                        ";
        // line 701
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 701, $this->source); })()), "val26", array()), 'widget');
        echo "
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
                                        <strong>MTD</strong>
                                    </td>
                                    <td>
                                        ";
        // line 724
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 724, $this->source); })()), "val27", array()), 'widget');
        echo "
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
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme Gas predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 752
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 752, $this->source); })()), "val28", array()), 'widget');
        echo "
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
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 775
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 775, $this->source); })()), "val29", array()), 'widget');
        echo "
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
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 798
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 798, $this->source); })()), "val30", array()), 'widget');
        echo "
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
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 821
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 821, $this->source); })()), "val31", array()), 'widget');
        echo "
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
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    <td>
                                        ";
        // line 844
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 844, $this->source); })()), "val32", array()), 'widget');
        echo "
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
                                        <strong>Telefono</strong>
                                    </td>
                                    <td>
                                        ";
        // line 867
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 867, $this->source); })()), "val33", array()), 'widget');
        echo "
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
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    <td>
                                        ";
        // line 890
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 890, $this->source); })()), "val34", array()), 'widget');
        echo "
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
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    <td>
                                        ";
        // line 913
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 913, $this->source); })()), "val35", array()), 'widget');
        echo "
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
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    <td>
                                        ";
        // line 936
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 936, $this->source); })()), "val36", array()), 'widget');
        echo "
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
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    <td>
                                        ";
        // line 959
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 959, $this->source); })()), "val37", array()), 'widget');
        echo "
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
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    <td>
                                        ";
        // line 982
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 982, $this->source); })()), "val38", array()), 'widget');
        echo "
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
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1005
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1005, $this->source); })()), "val39", array()), 'widget');
        echo "
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
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1028
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1028, $this->source); })()), "val40", array()), 'widget');
        echo "
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
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1051
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1051, $this->source); })()), "val41", array()), 'widget');
        echo "
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
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1074
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1074, $this->source); })()), "val42", array()), 'widget');
        echo "
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
                                        <strong>TV frutti</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1097
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1097, $this->source); })()), "val43", array()), 'widget');
        echo "
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
                                        <strong>SAT frutti</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1120, $this->source); })()), "val44", array()), 'widget');
        echo "
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
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1143, $this->source); })()), "val45", array()), 'widget');
        echo "
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
                                        <strong>Parabola</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1166, $this->source); })()), "val46", array()), 'widget');
        echo "
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
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Touch 3,5\" a colori o EQ40</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1194, $this->source); })()), "val47", array()), 'widget');
        echo "
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
                                        <strong>Equinox 41</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1217, $this->source); })()), "val48", array()), 'widget');
        echo "
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
                                        <strong>Equinox 73</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1240, $this->source); })()), "val49", array()), 'widget');
        echo "
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
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1263, $this->source); })()), "val50", array()), 'widget');
        echo "
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
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1286, $this->source); })()), "val51", array()), 'widget');
        echo "
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
                                        <strong>Diffusori</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1309, $this->source); })()), "val52", array()), 'widget');
        echo "
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
                                        <strong>Surround</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1332, $this->source); })()), "val53", array()), 'widget');
        echo "
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
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore zanzariera/tenda</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1360, $this->source); })()), "val54", array()), 'widget');
        echo "
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
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1383, $this->source); })()), "val55", array()), 'widget');
        echo "
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
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1406, $this->source); })()), "val56", array()), 'widget');
        echo "
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
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1429, $this->source); })()), "val57", array()), 'widget');
        echo "
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
                                        <strong>Basculante</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1452, $this->source); })()), "val58", array()), 'widget');
        echo "
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
                                        <strong>Cancello</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1475, $this->source); })()), "val59", array()), 'widget');
        echo "
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
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bocchette</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1503, $this->source); })()), "val60", array()), 'widget');
        echo "
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
                                        <strong>Motore</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1526
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1526, $this->source); })()), "val61", array()), 'widget');
        echo "
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
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1554, $this->source); })()), "val62", array()), 'widget');
        echo "
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
                                        <strong>Supporti 504</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1577
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1577, $this->source); })()), "val63", array()), 'widget');
        echo "
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
                                        <strong>Supporti 506</strong>
                                    </td>
                                    <td>
                                        ";
        // line 1600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1600, $this->source); })()), "val64", array()), 'widget');
        echo "
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
                            ";
        // line 1619
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1619, $this->source); })()), 'form_end');
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 1625
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1625, $this->source); })()), 'form_end');
        echo "
        <script>
            jQuery(document).ready(function () {
                jQuery('.add-another-collection-widget').click(function (e) {
                    var list = jQuery(jQuery(this).attr('data-list'));
                    // Try to find the counter of the list
                    var counter = list.data('widget-counter') | list.children().length;
                    // If the counter does not exist, use the length of the list
                    if (!counter) { counter = list.children().length; }

                    // grab the prototype template
                    var newWidget = list.attr('data-prototype');
                    // replace the \"__name__\" used in the id and name of the prototype
                    // with a number that's unique to your emails
                    // end name attribute looks like name=\"contact[emails][2]\"
                    newWidget = newWidget.replace(/__name__/g, counter);
                    // Increase the counter
                    counter++;
                    // And store it, the length cannot be used if deleting widgets is allowed
                    list.data(' widget-counter', counter);

                    // create a new list element and add it to the list
                    var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
                    newElem.appendTo(list);
                });
            });
        </script>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1655
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1656
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
        return array (  2015 => 1656,  2006 => 1655,  1966 => 1625,  1957 => 1619,  1935 => 1600,  1909 => 1577,  1883 => 1554,  1852 => 1526,  1826 => 1503,  1795 => 1475,  1769 => 1452,  1743 => 1429,  1717 => 1406,  1691 => 1383,  1665 => 1360,  1634 => 1332,  1608 => 1309,  1582 => 1286,  1556 => 1263,  1530 => 1240,  1504 => 1217,  1478 => 1194,  1447 => 1166,  1421 => 1143,  1395 => 1120,  1369 => 1097,  1343 => 1074,  1317 => 1051,  1291 => 1028,  1265 => 1005,  1239 => 982,  1213 => 959,  1187 => 936,  1161 => 913,  1135 => 890,  1109 => 867,  1083 => 844,  1057 => 821,  1031 => 798,  1005 => 775,  979 => 752,  948 => 724,  922 => 701,  896 => 678,  870 => 655,  844 => 632,  818 => 609,  787 => 581,  761 => 558,  735 => 535,  709 => 512,  683 => 489,  652 => 461,  626 => 438,  600 => 415,  574 => 392,  548 => 369,  522 => 346,  496 => 323,  470 => 300,  444 => 277,  413 => 249,  387 => 226,  356 => 198,  330 => 175,  304 => 152,  278 => 129,  270 => 123,  261 => 120,  258 => 119,  254 => 118,  240 => 106,  229 => 100,  225 => 99,  217 => 94,  204 => 84,  197 => 80,  190 => 76,  183 => 72,  176 => 68,  169 => 64,  162 => 60,  153 => 54,  146 => 49,  142 => 47,  138 => 45,  136 => 44,  127 => 38,  120 => 34,  113 => 30,  106 => 26,  99 => 22,  92 => 18,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                        {{ form_start(form) }}
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    {% for i in 0..count %}
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    {% endfor %}
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
                                        {% for i in 0..count %}
                                        <td>
                                            {{ form_widget(form.val1.vars.prototype) }}
                                        </td>
                                        {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val2) }}
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
                                        {{ form_widget(form.val3) }}
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
                                        {{ form_widget(form.val4) }}
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
                                        {{ form_widget(form.val5) }}
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
                                        {{ form_widget(form.val6) }}
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
                                        {{ form_widget(form.val7) }}
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
                                        {{ form_widget(form.val8) }}
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
                                        {{ form_widget(form.val9) }}
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
                                        {{ form_widget(form.val10) }}
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
                                        {{ form_widget(form.val11) }}
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
                                        {{ form_widget(form.val12) }}
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
                                        {{ form_widget(form.val13) }}
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
                                        {{ form_widget(form.val14) }}
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
                                        {{ form_widget(form.val15) }}
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
                                        {{ form_widget(form.val16) }}
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
                                        {{ form_widget(form.val17) }}
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
                                        {{ form_widget(form.val18) }}
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
                                        {{ form_widget(form.val19) }}
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
                                        {{ form_widget(form.val20) }}
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
                                        {{ form_widget(form.val21) }}
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
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 12 Moduli</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val22) }}
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
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val23) }}
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
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val24) }}
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
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val25) }}
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
                                        <strong>Sezionatore</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val26) }}
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
                                        <strong>MTD</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val27) }}
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
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme Gas predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val28) }}
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
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val29) }}
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
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val30) }}
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
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val31) }}
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
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val32) }}
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
                                        <strong>Telefono</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val33) }}
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
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val34) }}
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
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val35) }}
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
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val36) }}
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
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val37) }}
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
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val38) }}
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
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val39) }}
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
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val40) }}
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
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val41) }}
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
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val42) }}
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
                                        <strong>TV frutti</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val43) }}
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
                                        <strong>SAT frutti</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val44) }}
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
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val45) }}
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
                                        <strong>Parabola</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val46) }}
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
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Touch 3,5\" a colori o EQ40</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val47) }}
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
                                        <strong>Equinox 41</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val48) }}
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
                                        <strong>Equinox 73</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val49) }}
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
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val50) }}
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
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val51) }}
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
                                        <strong>Diffusori</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val52) }}
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
                                        <strong>Surround</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val53) }}
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
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore zanzariera/tenda</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val54) }}
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
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val55) }}
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
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val56) }}
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
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val57) }}
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
                                        <strong>Basculante</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val58) }}
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
                                        <strong>Cancello</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val59) }}
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
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bocchette</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val60) }}
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
                                        <strong>Motore</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val61) }}
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
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val62) }}
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
                                        <strong>Supporti 504</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val63) }}
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
                                        <strong>Supporti 506</strong>
                                    </td>
                                    <td>
                                        {{ form_widget(form.val64) }}
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
                            {{ form_end(form) }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
        <script>
            jQuery(document).ready(function () {
                jQuery('.add-another-collection-widget').click(function (e) {
                    var list = jQuery(jQuery(this).attr('data-list'));
                    // Try to find the counter of the list
                    var counter = list.data('widget-counter') | list.children().length;
                    // If the counter does not exist, use the length of the list
                    if (!counter) { counter = list.children().length; }

                    // grab the prototype template
                    var newWidget = list.attr('data-prototype');
                    // replace the \"__name__\" used in the id and name of the prototype
                    // with a number that's unique to your emails
                    // end name attribute looks like name=\"contact[emails][2]\"
                    newWidget = newWidget.replace(/__name__/g, counter);
                    // Increase the counter
                    counter++;
                    // And store it, the length cannot be used if deleting widgets is allowed
                    list.data(' widget-counter', counter);

                    // create a new list element and add it to the list
                    var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
                    newElem.appendTo(list);
                });
            });
        </script>
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
