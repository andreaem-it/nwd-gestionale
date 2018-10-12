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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), array(0 => "jquery.collection.html.twig"), true);
        // line 12
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 19, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 23, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->source); })()), "kw", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 35, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Opere Murarie</strong>
                            <p><small>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 39, $this->source); })()), "convertOMtoName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "opereMurarie", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Trifase</strong>
                            <p>
                                <small>
                                    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), "trifase", array()) == 0)) {
            // line 46
            echo "                                        No
                                    ";
        } else {
            // line 48
            echo "                                        Si
                                    ";
        }
        // line 50
        echo "                                </small>
                            </p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Sconto</strong>
                            <p><small>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->source); })()), "sconto", array()), "html", null, true);
        echo "</small></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 61, $this->source); })()), "level", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Metri Quadrati</strong>
                            <p><small>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 65, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Prezzo Preliminare</strong>
                            <p><small>";
        // line 73
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 73, $this->source); })()), "price", array()), 2), "html", null, true);
        echo " €</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Illum. Sicurezza</strong>
                            <p><small>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 77, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>SPD</strong>
                            <p><small>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 81, $this->source); })()), "spd", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 85, $this->source); })()), "impAusiliari", array()), "html", null, true);
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
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
        echo "
                        <table class=\"table table-responsive\" style=\"overflow-y: visible\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "                                        <th>
                                            ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 102, $this->source); })()), "room", array(0 => $context["item"]), "method"), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                    ";
        // line 110
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
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 122, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 123
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val1_";
            // line 124
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 132, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val2_";
            // line 134
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 142, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 143
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val3_";
            // line 144
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 152, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 153
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val4_";
            // line 154
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 162, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 163
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val5_";
            // line 164
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 177, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 178
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val6_";
            // line 179
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    <td>
                                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 188, $this->source); })()), "val7", array()), 'widget');
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
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 216, $this->source); })()), "val8", array()), 'widget');
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
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 239, $this->source); })()), "val9", array()), 'widget');
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
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 262, $this->source); })()), "val10", array()), 'widget');
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
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 285, $this->source); })()), "val11", array()), 'widget');
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
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 308, $this->source); })()), "val12", array()), 'widget');
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
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 331, $this->source); })()), "val13", array()), 'widget');
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
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->source); })()), "val14", array()), 'widget');
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
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 377, $this->source); })()), "val15", array()), 'widget');
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
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 400, $this->source); })()), "val16", array()), 'widget');
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
        // line 428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 428, $this->source); })()), "val17", array()), 'widget');
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
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 451, $this->source); })()), "val18", array()), 'widget');
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
        // line 474
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 474, $this->source); })()), "val19", array()), 'widget');
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
        // line 497
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 497, $this->source); })()), "val20", array()), 'widget');
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
        // line 520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 520, $this->source); })()), "val21", array()), 'widget');
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
        // line 548
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 548, $this->source); })()), "val22", array()), 'widget');
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
        // line 571
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 571, $this->source); })()), "val23", array()), 'widget');
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
        // line 594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 594, $this->source); })()), "val24", array()), 'widget');
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
        // line 617
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 617, $this->source); })()), "val25", array()), 'widget');
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
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 640, $this->source); })()), "val26", array()), 'widget');
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
        // line 663
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 663, $this->source); })()), "val27", array()), 'widget');
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
        // line 691
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 691, $this->source); })()), "val28", array()), 'widget');
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
        // line 714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 714, $this->source); })()), "val29", array()), 'widget');
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
        // line 737
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 737, $this->source); })()), "val30", array()), 'widget');
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
        // line 760
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 760, $this->source); })()), "val31", array()), 'widget');
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
        // line 783
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 783, $this->source); })()), "val32", array()), 'widget');
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
        // line 806
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 806, $this->source); })()), "val33", array()), 'widget');
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
        // line 829
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 829, $this->source); })()), "val34", array()), 'widget');
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
        // line 852
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 852, $this->source); })()), "val35", array()), 'widget');
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
        // line 875
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 875, $this->source); })()), "val36", array()), 'widget');
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
        // line 898
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 898, $this->source); })()), "val37", array()), 'widget');
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
        // line 921
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 921, $this->source); })()), "val38", array()), 'widget');
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
        // line 944
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 944, $this->source); })()), "val39", array()), 'widget');
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
        // line 967
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 967, $this->source); })()), "val40", array()), 'widget');
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
        // line 990
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 990, $this->source); })()), "val41", array()), 'widget');
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
        // line 1013
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1013, $this->source); })()), "val42", array()), 'widget');
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
        // line 1036
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1036, $this->source); })()), "val43", array()), 'widget');
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
        // line 1059
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1059, $this->source); })()), "val44", array()), 'widget');
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
        // line 1082
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1082, $this->source); })()), "val45", array()), 'widget');
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
        // line 1105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1105, $this->source); })()), "val46", array()), 'widget');
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
        // line 1133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1133, $this->source); })()), "val47", array()), 'widget');
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
        // line 1156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1156, $this->source); })()), "val48", array()), 'widget');
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
        // line 1179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1179, $this->source); })()), "val49", array()), 'widget');
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
        // line 1202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1202, $this->source); })()), "val50", array()), 'widget');
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
        // line 1225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1225, $this->source); })()), "val51", array()), 'widget');
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
        // line 1248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1248, $this->source); })()), "val52", array()), 'widget');
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
        // line 1271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1271, $this->source); })()), "val53", array()), 'widget');
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
        // line 1299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1299, $this->source); })()), "val54", array()), 'widget');
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
        // line 1322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1322, $this->source); })()), "val55", array()), 'widget');
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
        // line 1345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1345, $this->source); })()), "val56", array()), 'widget');
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
        // line 1368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1368, $this->source); })()), "val57", array()), 'widget');
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
        // line 1391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1391, $this->source); })()), "val58", array()), 'widget');
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
        // line 1414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1414, $this->source); })()), "val59", array()), 'widget');
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
        // line 1442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1442, $this->source); })()), "val60", array()), 'widget');
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
        // line 1465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1465, $this->source); })()), "val61", array()), 'widget');
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
        // line 1493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1493, $this->source); })()), "val62", array()), 'widget');
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
        // line 1516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1516, $this->source); })()), "val63", array()), 'widget');
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
        // line 1539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1539, $this->source); })()), "val64", array()), 'widget');
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
        // line 1558
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1558, $this->source); })()), 'form_end');
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 1564
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1564, $this->source); })()), 'form_end');
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
    <script src=\"";
        // line 1593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1598
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1599
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
        return array (  2013 => 1599,  2004 => 1598,  1989 => 1593,  1957 => 1564,  1948 => 1558,  1926 => 1539,  1900 => 1516,  1874 => 1493,  1843 => 1465,  1817 => 1442,  1786 => 1414,  1760 => 1391,  1734 => 1368,  1708 => 1345,  1682 => 1322,  1656 => 1299,  1625 => 1271,  1599 => 1248,  1573 => 1225,  1547 => 1202,  1521 => 1179,  1495 => 1156,  1469 => 1133,  1438 => 1105,  1412 => 1082,  1386 => 1059,  1360 => 1036,  1334 => 1013,  1308 => 990,  1282 => 967,  1256 => 944,  1230 => 921,  1204 => 898,  1178 => 875,  1152 => 852,  1126 => 829,  1100 => 806,  1074 => 783,  1048 => 760,  1022 => 737,  996 => 714,  970 => 691,  939 => 663,  913 => 640,  887 => 617,  861 => 594,  835 => 571,  809 => 548,  778 => 520,  752 => 497,  726 => 474,  700 => 451,  674 => 428,  643 => 400,  617 => 377,  591 => 354,  565 => 331,  539 => 308,  513 => 285,  487 => 262,  461 => 239,  435 => 216,  404 => 188,  396 => 182,  387 => 179,  384 => 178,  380 => 177,  368 => 167,  359 => 164,  356 => 163,  352 => 162,  345 => 157,  336 => 154,  333 => 153,  329 => 152,  322 => 147,  313 => 144,  310 => 143,  306 => 142,  299 => 137,  290 => 134,  287 => 133,  283 => 132,  276 => 127,  267 => 124,  264 => 123,  260 => 122,  246 => 110,  244 => 105,  235 => 102,  232 => 101,  228 => 100,  220 => 95,  207 => 85,  200 => 81,  193 => 77,  186 => 73,  179 => 69,  172 => 65,  165 => 61,  156 => 55,  149 => 50,  145 => 48,  141 => 46,  139 => 45,  130 => 39,  123 => 35,  116 => 31,  109 => 27,  102 => 23,  95 => 19,  84 => 12,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
        {% form_theme form 'jquery.collection.html.twig' %}
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
                        <table class=\"table table-responsive\" style=\"overflow-y: visible\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    {% for item in count %}
                                        <th>
                                            {{ func.room(item) }}
                                        </th>
                                    {% endfor %}
                                    {#{% for i in 0..count|length %}
                                        <th>
                                            {{ item.[index0.loop].ambient }}
                                        </th>
                                    {% endfor %}#}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val1_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val2_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val3_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val4_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val5_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" id=\"form_val6_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
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
