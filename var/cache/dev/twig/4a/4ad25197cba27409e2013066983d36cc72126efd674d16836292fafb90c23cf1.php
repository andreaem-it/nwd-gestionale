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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
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
                                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 187, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 188
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 189
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 202, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 203
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 204
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 212, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 213
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 214
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 222, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 223
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 224
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 232, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 233
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 234
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 242, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 243
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 244
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 252, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 253
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 254
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 262, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 263
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 264
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 272, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 273
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 274
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 282, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 283
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 284
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 297, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 298
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 299
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 307, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 308
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 309
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 317, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 318
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 319
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 327, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 328
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 329
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 337, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 338
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 339
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 12 Moduli</strong>
                                    </td>
                                    ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 352, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 353
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 354
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 362, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 363
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 364
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 372, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 373
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 374
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 382, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 383
            echo "                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 384
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                    </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 393, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 394
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 395
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 403, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 404
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 405
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme Gas predisposizione</strong>
                                    </td>
                                    ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 418, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 419
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 420
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 428, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 429
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 430
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 438, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 439
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 440
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 448, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 449
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 450
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 458, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 459
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 460
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    ";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 468, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 469
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 470
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    ";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 478, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 479
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 480
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 488, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 489
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 490
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 498, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 499
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 500
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 508, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 509
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 510
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 518, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 519
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 520
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 528, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 529
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 530
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    ";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 538, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 539
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    ";
        // line 548
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 548, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 549
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 550
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 553
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    ";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 558, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 559
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 560
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    ";
        // line 568
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 568, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 569
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 570
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 578, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 579
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 580
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 588, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 589
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 590
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 598, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 599
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
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
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Touch 3,5\" a colori o EQ40</strong>
                                    </td>
                                    ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 613, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 614
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 615
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    ";
        // line 623
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 623, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 624
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 625
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 633, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 634
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 635
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    ";
        // line 643
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 643, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 644
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 645
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    ";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 653, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 654
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    ";
        // line 663
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 663, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 664
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 665
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    ";
        // line 673
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 673, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 674
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 675
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 678
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore zanzariera/tenda</strong>
                                    </td>
                                    ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 688, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 689
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    ";
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 698, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 699
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    ";
        // line 708
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 708, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 709
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 710
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 713
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    ";
        // line 718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 718, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 719
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 720
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 723
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 728, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 729
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
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
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    ";
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 738, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 739
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
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
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bocchette</strong>
                                    </td>
                                    ";
        // line 753
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 753, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 754
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 755
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 763, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 764
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 765
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 778, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 779
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 780
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 788
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 788, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 789
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 790
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 798, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 799
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 800
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 803
        echo "                                </tr>
                            </tbody>
                            ";
        // line 805
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 805, $this->source); })()), "submit", array()), 'widget');
        echo "
                            <div class=\"row\">
                                <div class=\"col-9\"></div>
                                <div class=\"col-3\">
                                    <div class=\"card card-generate \">
                                        <div class=\"card-body pt-2 pb-4\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    <a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3\">Genera</a>
                                                </div>
                                                <div class=\"col-6\">
                                                    <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3\">Annulla</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 823
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 823, $this->source); })()), 'form_end');
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(document).ready( function () {
                update(";
        // line 831
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 831, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 832
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 832, $this->source); })()), "id", array()), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 833
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 833, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 834
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 834, $this->source); })()), "id", array()), "html", null, true);
        echo ",'c2v','val41');
                }
            );

            \$('#generateBtn').click(function(e) {
                e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 64; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                    \$('#appbundle_expertationsadvanced_submit').trigger('click')
                }

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
        // line 860
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 860, $this->source); })())), "html", null, true);
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
        </script>
    </div>
</div>
    <script src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 880
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 881
        echo "    <style>
        .form-control {

            width: 100px;
            min-width: 100px;

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
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
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
        return array (  1928 => 914,  1893 => 881,  1884 => 880,  1872 => 878,  1865 => 874,  1848 => 860,  1819 => 834,  1815 => 833,  1811 => 832,  1807 => 831,  1796 => 823,  1775 => 805,  1771 => 803,  1762 => 800,  1759 => 799,  1755 => 798,  1748 => 793,  1739 => 790,  1736 => 789,  1732 => 788,  1725 => 783,  1716 => 780,  1713 => 779,  1709 => 778,  1697 => 768,  1688 => 765,  1685 => 764,  1681 => 763,  1674 => 758,  1665 => 755,  1662 => 754,  1658 => 753,  1646 => 743,  1637 => 740,  1634 => 739,  1630 => 738,  1623 => 733,  1614 => 730,  1611 => 729,  1607 => 728,  1600 => 723,  1591 => 720,  1588 => 719,  1584 => 718,  1577 => 713,  1568 => 710,  1565 => 709,  1561 => 708,  1554 => 703,  1545 => 700,  1542 => 699,  1538 => 698,  1531 => 693,  1522 => 690,  1519 => 689,  1515 => 688,  1503 => 678,  1494 => 675,  1491 => 674,  1487 => 673,  1480 => 668,  1471 => 665,  1468 => 664,  1464 => 663,  1457 => 658,  1448 => 655,  1445 => 654,  1441 => 653,  1434 => 648,  1425 => 645,  1422 => 644,  1418 => 643,  1411 => 638,  1402 => 635,  1399 => 634,  1395 => 633,  1388 => 628,  1379 => 625,  1376 => 624,  1372 => 623,  1365 => 618,  1356 => 615,  1353 => 614,  1349 => 613,  1337 => 603,  1328 => 600,  1325 => 599,  1321 => 598,  1314 => 593,  1305 => 590,  1302 => 589,  1298 => 588,  1291 => 583,  1282 => 580,  1279 => 579,  1275 => 578,  1268 => 573,  1259 => 570,  1256 => 569,  1252 => 568,  1245 => 563,  1236 => 560,  1233 => 559,  1229 => 558,  1222 => 553,  1213 => 550,  1210 => 549,  1206 => 548,  1199 => 543,  1190 => 540,  1187 => 539,  1183 => 538,  1176 => 533,  1167 => 530,  1164 => 529,  1160 => 528,  1153 => 523,  1144 => 520,  1141 => 519,  1137 => 518,  1130 => 513,  1121 => 510,  1118 => 509,  1114 => 508,  1107 => 503,  1098 => 500,  1095 => 499,  1091 => 498,  1084 => 493,  1075 => 490,  1072 => 489,  1068 => 488,  1061 => 483,  1052 => 480,  1049 => 479,  1045 => 478,  1038 => 473,  1029 => 470,  1026 => 469,  1022 => 468,  1015 => 463,  1006 => 460,  1003 => 459,  999 => 458,  992 => 453,  983 => 450,  980 => 449,  976 => 448,  969 => 443,  960 => 440,  957 => 439,  953 => 438,  946 => 433,  937 => 430,  934 => 429,  930 => 428,  923 => 423,  914 => 420,  911 => 419,  907 => 418,  895 => 408,  886 => 405,  883 => 404,  879 => 403,  872 => 398,  863 => 395,  860 => 394,  856 => 393,  848 => 387,  839 => 384,  836 => 383,  832 => 382,  825 => 377,  816 => 374,  813 => 373,  809 => 372,  802 => 367,  793 => 364,  790 => 363,  786 => 362,  779 => 357,  770 => 354,  767 => 353,  763 => 352,  751 => 342,  742 => 339,  739 => 338,  735 => 337,  728 => 332,  719 => 329,  716 => 328,  712 => 327,  705 => 322,  696 => 319,  693 => 318,  689 => 317,  682 => 312,  673 => 309,  670 => 308,  666 => 307,  659 => 302,  650 => 299,  647 => 298,  643 => 297,  631 => 287,  622 => 284,  619 => 283,  615 => 282,  608 => 277,  599 => 274,  596 => 273,  592 => 272,  585 => 267,  576 => 264,  573 => 263,  569 => 262,  562 => 257,  553 => 254,  550 => 253,  546 => 252,  539 => 247,  530 => 244,  527 => 243,  523 => 242,  516 => 237,  507 => 234,  504 => 233,  500 => 232,  493 => 227,  484 => 224,  481 => 223,  477 => 222,  470 => 217,  461 => 214,  458 => 213,  454 => 212,  447 => 207,  438 => 204,  435 => 203,  431 => 202,  419 => 192,  410 => 189,  407 => 188,  403 => 187,  396 => 182,  387 => 179,  384 => 178,  380 => 177,  368 => 167,  359 => 164,  356 => 163,  352 => 162,  345 => 157,  336 => 154,  333 => 153,  329 => 152,  322 => 147,  313 => 144,  310 => 143,  306 => 142,  299 => 137,  290 => 134,  287 => 133,  283 => 132,  276 => 127,  267 => 124,  264 => 123,  260 => 122,  246 => 110,  244 => 105,  235 => 102,  232 => 101,  228 => 100,  220 => 95,  207 => 85,  200 => 81,  193 => 77,  186 => 73,  179 => 69,  172 => 65,  165 => 61,  156 => 55,  149 => 50,  145 => 48,  141 => 46,  139 => 45,  130 => 39,  123 => 35,  116 => 31,  109 => 27,  102 => 23,  95 => 19,  84 => 12,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_{{ item }}\">
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
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_{{ item }}\">
                                    </td>
                                    {% endfor %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_{{ item }}\">
                                        </td>
                                    {% endfor %}
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
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    {% for item in 1..count|length %}
                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_{{ item }}\">
                                        </td>
                                    {% endfor %}
                                </tr>
                            </tbody>
                            {{ form_widget(form.submit) }}
                            <div class=\"row\">
                                <div class=\"col-9\"></div>
                                <div class=\"col-3\">
                                    <div class=\"card card-generate \">
                                        <div class=\"card-body pt-2 pb-4\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    <a href=\"\" id=\"generateBtn\" class=\"btn btn-success btn-block btn-sm mt-3\">Genera</a>
                                                </div>
                                                <div class=\"col-6\">
                                                    <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3\">Annulla</a>
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
        <script>
            \$(document).ready( function () {
                update({{ item.id }},'pp','val1');
                update({{ item.id }},'pl','val8');
                update({{ item.id }},'c1v','val6');
                update({{ item.id }},'c2v','val41');
                }
            );

            \$('#generateBtn').click(function(e) {
                e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 64; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                    \$('#appbundle_expertationsadvanced_submit').trigger('click')
                }

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
                        for (var i = 0; i < {{ count|length }}; i++) {
                            var numbersArray = data.split(',');
                            \$.each(numbersArray, function(index, value) {
                                var ind = index +1;
                                \$('#form_'+ valn + '_' + ind).val(value);
                            });

                        }
                    }
                })
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
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
