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
                        <button type=\"button\"
                                class=\"add-another-collection-widget\"
                                data-list=\"#fields-list\">Add</button>
                        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), 'form_start');
        echo "
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
                                    <td id=\"fields-list\"
                                        data-prototype=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->source); })()), "val1", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\"
                                        data-widget-tags=\"";
        // line 146
        echo twig_escape_filter($this->env, "");
        echo "\">
                                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "val1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val1"]) {
            // line 148
            echo "
                                        ";
            // line 149
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["val1"], 'widget');
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->source); })()), "val2", array()), 'widget');
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
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->source); })()), "val3", array()), 'widget');
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
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 206, $this->source); })()), "val4", array()), 'widget');
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
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->source); })()), "val5", array()), 'widget');
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
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 257, $this->source); })()), "val6", array()), 'widget');
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
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 280, $this->source); })()), "val7", array()), 'widget');
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
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 308, $this->source); })()), "val8", array()), 'widget');
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
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 331, $this->source); })()), "val9", array()), 'widget');
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
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->source); })()), "val10", array()), 'widget');
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
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 377, $this->source); })()), "val11", array()), 'widget');
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
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 400, $this->source); })()), "val12", array()), 'widget');
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
        // line 423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 423, $this->source); })()), "val13", array()), 'widget');
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
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 446, $this->source); })()), "val14", array()), 'widget');
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
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 469, $this->source); })()), "val15", array()), 'widget');
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
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 492, $this->source); })()), "val16", array()), 'widget');
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
        // line 520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 520, $this->source); })()), "val17", array()), 'widget');
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
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 543, $this->source); })()), "val18", array()), 'widget');
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
        // line 566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 566, $this->source); })()), "val19", array()), 'widget');
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
        // line 589
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 589, $this->source); })()), "val20", array()), 'widget');
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
        // line 612
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 612, $this->source); })()), "val21", array()), 'widget');
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
        // line 631
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 631, $this->source); })()), 'form_end');
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 637
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 637, $this->source); })()), 'form_end');
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

    // line 667
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 668
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
        return array (  894 => 668,  885 => 667,  845 => 637,  836 => 631,  814 => 612,  788 => 589,  762 => 566,  736 => 543,  710 => 520,  679 => 492,  653 => 469,  627 => 446,  601 => 423,  575 => 400,  549 => 377,  523 => 354,  497 => 331,  471 => 308,  440 => 280,  414 => 257,  383 => 229,  357 => 206,  331 => 183,  305 => 160,  294 => 151,  286 => 149,  283 => 148,  279 => 147,  275 => 146,  271 => 145,  220 => 97,  204 => 84,  197 => 80,  190 => 76,  183 => 72,  176 => 68,  169 => 64,  162 => 60,  153 => 54,  146 => 49,  142 => 47,  138 => 45,  136 => 44,  127 => 38,  120 => 34,  113 => 30,  106 => 26,  99 => 22,  92 => 18,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                        <button type=\"button\"
                                class=\"add-another-collection-widget\"
                                data-list=\"#fields-list\">Add</button>
                        {{ form_start(form) }}
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
                                    <td id=\"fields-list\"
                                        data-prototype=\"{{ form_widget(form.val1.vars.prototype)|e }}\"
                                        data-widget-tags=\"{{ ''|e }}\">
                                        {% for val1 in form.val1 %}

                                        {{ form_widget(val1) }}
                                    {% endfor %}
                                    </td>


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
