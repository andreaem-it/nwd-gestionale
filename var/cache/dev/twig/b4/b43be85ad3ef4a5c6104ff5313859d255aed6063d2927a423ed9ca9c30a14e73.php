<?php

/* expertations/details.advanced.html.twig */
class __TwigTemplate_6059e7fd1243934c86c32b6f953d0796e7b7fb5c7d66e10897664a79580f6ad8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/details.advanced.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.advanced.html.twig"));

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

        echo "Computometrico ";
        
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
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <h3>Preventivi <small>Computometrico</small></h3>
                </div>
                <div class=\"col-1\">
                    <div class=\"btn-group float-right action-buttons\">
                        <a href=\"\" class=\"btn btn-danger btn-sm float-right animsition-link\">
                            <i class=\"mdi mdi-delete mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-secondary btn-sm float-right animsition-link\">
                            <i class=\"mdi mdi-pencil mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-success btn-sm float-right \" id=\"print\">
                            <i class=\"mdi mdi-printer mr-0\"></i>
                        </a>
                    </div>
                </div>
            </div>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 27
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\" id=\"page\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover border-o\">
                                    <thead>
                                    <tr>
                                        <th class=\"no-wrap border\">ARTICOLO</th>
                                        <th class=\"border\" style=\"max-width: 300px\">DESCRIZIONE</th>
                                        <th class=\"no-wrap border\">QUANTITÁ</th>
                                        <th class=\"no-wrap border\">PREZZO NETTO UNITARIO</th>
                                        <th class=\"no-wrap border\">PREZZO NETTO TOTALE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 47
        $context["prices"] = array();
        // line 48
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>PUNTI LUCE – COMANDO - PRESA</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Luce</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.12.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to luce semplice su canalizzazione in traccia o in vista <br>
                                                con un cavo non propagante l'incendio con sezione minima 1,5 mmq. <br>
                                                <strong>Per P.to luce con conduttore di protezione.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 64, $this->source); })()), "getPriceByCode", array(0 => "15.1.12.2"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 65
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 65, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 65, $this->source); })()), "getPriceByCode", array(0 => "15.1.12.2"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 66
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 66, $this->source); })()), array(0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 66, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 66, $this->source); })()), "getPriceByCode", array(0 => "15.1.12.2"), "method"))));
        // line 67
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 77, $this->source); })()), "getPriceByCode", array(0 => "15.1.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 78, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 78, $this->source); })()), "getPriceByCode", array(0 => "15.1.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 79
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 79, $this->source); })()), array(0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 79, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 79, $this->source); })()), "getPriceByCode", array(0 => "15.1.1"), "method"))));
        // line 80
        echo "                                    </tr>
                                    ";
        // line 81
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 81, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 81, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 82
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 91
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 91, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 92
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 92, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 92, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 93
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 93, $this->source); })()), array(0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 93, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 93, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.1"), "method"))));
            // line 94
            echo "                                        </tr>
                                    ";
        }
        // line 96
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 96, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 96, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 97
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 106
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 106, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 107, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 107, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.1"), "method")), 2), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 109
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 109, $this->source); })()), array(0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 109, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 109, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.1"), "method"))));
            // line 110
            echo "                                    ";
        }
        // line 111
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 111, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 112
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 121
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 121, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 122
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 122, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 122, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 123
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 123, $this->source); })()), array(0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 123, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 123, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.1"), "method"))));
            // line 124
            echo "                                        </tr>
                                    ";
        }
        // line 126
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                N.B.: il montaggio dei corpi illuminanti è escluso dalla presente offerta. Una volta che questi saranno stati definiti potremo fare un'offerta per<br>
                                                l'installazione se quantificabile, altrimenti procederemo nelle lavorazioni in economia con le tariffe orarie pattuite in fase di contratto. <br>
                                                Nel caso non venissero definiti prima della fine dei lavori o l'eventuale installazione non sia di nostra competenza, da parte nostra provvederemo <br>
                                                all'installazione di almeno un portalampade per ambiente. Eventuali accessori, se necessari, tipo tubazione rame e/o cavo in seta, verranno conteggiati<br>
                                                a parte con rendicontazione finale.
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 150
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 150, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 151
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 151, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 151, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 152
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 152, $this->source); })()), array(0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 152, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 152, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.1"), "method"))));
        // line 153
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 163
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 163, $this->source); })()), "getPriceByCode", array(0 => "15.1.2"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 164
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 164, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 164, $this->source); })()), "getPriceByCode", array(0 => "15.1.2"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 165
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 165, $this->source); })()), array(0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 165, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 165, $this->source); })()), "getPriceByCode", array(0 => "15.1.2"), "method"))));
        // line 166
        echo "                                    </tr>
                                    ";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 167, $this->source); })()), 7, array()) > 0)) {
            // line 168
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 175, $this->source); })()), 7, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 176
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 176, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 177
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 177, $this->source); })()), 7, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 177, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 178
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 178, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 178, $this->source); })()), 7, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 178, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method"))));
            // line 179
            echo "                                    </tr>
                                    ";
        }
        // line 181
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 181, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 181, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 182
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 190, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 191
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 191, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 192
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 192, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 192, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 193
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 193, $this->source); })()), array(0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 193, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 193, $this->source); })()), "getPriceByCode", array(0 => "15.1.3.2"), "method"))));
            // line 194
            echo "                                        </tr>
                                    ";
        }
        // line 196
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 196, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 196, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 197
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 205, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 206
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 206, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 207
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 207, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 207, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 208
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 208, $this->source); })()), array(0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 208, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 208, $this->source); })()), "getPriceByCode", array(0 => "15.1.4.2"), "method"))));
            // line 209
            echo "                                        </tr>
                                    ";
        }
        // line 211
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 211, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 212
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 220
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 220, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 221
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 221, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 222
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 222, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 222, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 223
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 223, $this->source); })()), array(0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 223, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 223, $this->source); })()), "getPriceByCode", array(0 => "15.1.5.2"), "method"))));
            // line 224
            echo "                                        </tr>
                                    ";
        }
        // line 226
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 226, $this->source); })()), 3, array()) != null)) {
            // line 227
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.15.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    P.to di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 234, $this->source); })()), 3, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 235
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 235, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 236
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 236, $this->source); })()), 3, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 236, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 237
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 237, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 237, $this->source); })()), 3, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 237, $this->source); })()), "getPriceByCode", array(0 => "15.1.15.2"), "method"))));
            // line 238
            echo "                                        </tr>
                                    ";
        }
        // line 240
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.21.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to allaccio per presa monofase su canalizzazione in traccia o in vista <br>
                                                con cavo non propagante l'incendio di sezione idonea<br>
                                                <strong>Per allaccio monofase con carico massimo di 16A.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 252, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 253
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 253, $this->source); })()), "getPriceByCode", array(0 => "15.2.21.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 254
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 254, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 254, $this->source); })()), "getPriceByCode", array(0 => "15.2.21.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 255
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 255, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 255, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 255, $this->source); })()), "getPriceByCode", array(0 => "15.2.21.1"), "method"))));
        // line 256
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 265, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 266
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 266, $this->source); })()), "getPriceByCode", array(0 => "15.2.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 267
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 267, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 267, $this->source); })()), "getPriceByCode", array(0 => "15.2.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 268
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 268, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 268, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 268, $this->source); })()), "getPriceByCode", array(0 => "15.2.1"), "method"))));
        // line 269
        echo "                                    </tr>
                                    ";
        // line 270
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 270, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 270, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 271
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 279, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 280
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 280, $this->source); })()), "getPriceByCode", array(0 => "15.2.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 281
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 281, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 281, $this->source); })()), "getPriceByCode", array(0 => "15.2.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 282
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 282, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 282, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 282, $this->source); })()), "getPriceByCode", array(0 => "15.2.2"), "method"))));
            // line 283
            echo "                                        </tr>
                                    ";
        }
        // line 285
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 285, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 285, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 286
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 294, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 295
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 295, $this->source); })()), "getPriceByCode", array(0 => "15.2.3"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 296
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 296, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 296, $this->source); })()), "getPriceByCode", array(0 => "15.2.3"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 297
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 297, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 297, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 297, $this->source); })()), "getPriceByCode", array(0 => "15.2.3"), "method"))));
            // line 298
            echo "                                        </tr>
                                    ";
        }
        // line 300
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 300, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 301
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 309
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 309, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 310
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 310, $this->source); })()), "getPriceByCode", array(0 => "15.2.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 311
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 311, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 311, $this->source); })()), "getPriceByCode", array(0 => "15.2.4"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 312
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 312, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 312, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 312, $this->source); })()), "getPriceByCode", array(0 => "15.2.4"), "method"))));
            // line 313
            echo "                                        </tr>
                                    ";
        }
        // line 315
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 323, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 324
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 324, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.3"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 325
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 325, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 325, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.3"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 326
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 326, $this->source); })()), array(0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 326, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 326, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.3"), "method"))));
        // line 327
        echo "                                    </tr>
                                    ";
        // line 328
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 328, $this->source); })()), 4, array()) > 0)) {
            // line 329
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 336, $this->source); })()), 4, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 337
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 337, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.2"), "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 338
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 338, $this->source); })()), 4, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 338, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.2"), "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 339
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 339, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 339, $this->source); })()), 4, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 339, $this->source); })()), "getPriceByCode", array(0 => "15.2.41.2"), "method"))));
            // line 340
            echo "                                    </tr>
                                    ";
        }
        // line 342
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 342, $this->source); })()), 5, array()) > 0)) {
            // line 343
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Per allaccio ventilatori e o aspiratori
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 350, $this->source); })()), 5, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 351
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 351, $this->source); })()), "getPriceByCode", array(0 => "15.2.42"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 352
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 352, $this->source); })()), 5, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 352, $this->source); })()), "getPriceByCode", array(0 => "15.2.42"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 353
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 353, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 353, $this->source); })()), 5, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 353, $this->source); })()), "getPriceByCode", array(0 => "15.2.42"), "method"))));
            // line 354
            echo "                                        </tr>
                                        </tr>
                                    ";
        }
        // line 357
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>SERVIZI</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa di Servizio: TV Terrestre, TV Satellitare, Emergenza, Telefono, Rete Dati, Citofonia</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                PUNTO PRESA DI SERVIZIO in traccia sono escluse le opere murarie
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 370, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 371
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 371, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 372
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 372, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 372, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 373
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 373, $this->source); })()), array(0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 373, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 373, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method"))));
        // line 374
        echo "                                    </tr>
                                    ";
        // line 375
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 375, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 375, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 376
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 384
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 384, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 385
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 385, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 386
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 386, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 386, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 387
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 387, $this->source); })()), array(0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 387, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 387, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method"))));
            // line 388
            echo "                                        </tr>
                                    ";
        }
        // line 390
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 390, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 390, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 391
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 399, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 400
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 400, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 401
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 401, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 401, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 402
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 402, $this->source); })()), array(0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 402, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 402, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method"))));
            // line 403
            echo "                                        </tr>
                                    ";
        }
        // line 405
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 405, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 406
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 414
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 414, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 415
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 415, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 416
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 416, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 416, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 417
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 417, $this->source); })()), array(0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 417, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 417, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method"))));
            // line 418
            echo "                                        </tr>
                                    ";
        }
        // line 420
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 420, $this->source); })()), "antenna", array()) > 0)) {
            // line 421
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto TV terrestre</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.151.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Impianto di ricezione di segnale TV digitale terrestre <strong>costituito da antenna di ricezione TV in <br>
                                                        banda UHF o VHF</strong>, idonea alla ricezione di segnale TV digitale terrestre con guadagno <br>
                                                    compreso superiore a 13 dB,  con possibilità di installazione con polarizzazione verticale o <br>
                                                    orizzontale, <strong>completa di palo e di sistemi di fissaggio su tetto o su copertura piana di <br>
                                                        qualsiasi natura, di cavi di collegamento fino all'impianto di amplificazione.</strong> Il tutto posto in <br>
                                                    opera a qualsiasi altezza, con tutto quanto occorre per dare il lavoro finito , incluse le eventuali <br>
                                                    opere murarie per il fissaggio ed il ripristino di eventuali parti  di copertura interessate. <br>
                                                    <strong>Sistema con due antenne</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 439
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 439, $this->source); })()), "getPriceByCode", array(0 => "15.3.151.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 440
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 440, $this->source); })()), "getPriceByCode", array(0 => "15.3.151.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 441
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 441, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 441, $this->source); })()), "getPriceByCode", array(0 => "15.3.151.2"), "method")));
            // line 442
            echo "                                        </tr>
                                        ";
            // line 443
            if (((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 443, $this->source); })()) < 5)) {
                // line 444
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.161.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione  fino a 5 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 456
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 456, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.1"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 457
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 457, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.1"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 458
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 458, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 458, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.1"), "method")));
                // line 459
                echo "                                            </tr>
                                        ";
            } elseif (((            // line 460
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 460, $this->source); })()) > 6) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 460, $this->source); })()) < 10))) {
                // line 461
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.161.2</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione da 6 a 10 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 473
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 473, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.2"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 474
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 474, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.2"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 475
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 475, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 475, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.2"), "method")));
                // line 476
                echo "                                            </tr>
                                        ";
            } elseif (((            // line 477
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 477, $this->source); })()) > 11) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 477, $this->source); })()) < 15))) {
                // line 478
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.161.3</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione da 11 a 15 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 490
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 490, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.3"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 491
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 491, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.3"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 492
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 492, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 492, $this->source); })()), "getPriceByCode", array(0 => "15.3.161.3"), "method")));
                // line 493
                echo "                                            </tr>
                                        ";
            }
            // line 495
            echo "                                    ";
        }
        // line 496
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 503
        echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 503, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 504
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 504, $this->source); })()), "getPriceByCode", array(0 => "15.3.110.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 505
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 505, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 505, $this->source); })()), "getPriceByCode", array(0 => "15.3.110.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 506
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 506, $this->source); })()), array(0 => ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 506, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 506, $this->source); })()), "getPriceByCode", array(0 => "15.3.110.1"), "method"))));
        // line 507
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 515, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 516
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 516, $this->source); })()), "getPriceByCode", array(0 => "15.4.230"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 517
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 517, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 517, $this->source); })()), "getPriceByCode", array(0 => "15.4.230"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 518
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 518, $this->source); })()), array(0 => ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 518, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 518, $this->source); })()), "getPriceByCode", array(0 => "15.4.230"), "method"))));
        // line 519
        echo "                                    </tr>
                                    ";
        // line 561
        echo "                                    ";
        if (((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 561, $this->source); })()) != 0)) {
            // line 562
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto chiamata emergenza con tiranti dal bagno e delle camere da letto</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.40.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>impianto di chiamata</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 572, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 573
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 573, $this->source); })()), "getPriceByCode", array(0 => "15.3.40.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 574
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 574, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 574, $this->source); })()), "getPriceByCode", array(0 => "15.3.40.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 575
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 575, $this->source); })()), array(0 => ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 575, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 575, $this->source); })()), "getPriceByCode", array(0 => "15.3.40.1"), "method"))));
            // line 576
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong>ronzatore per EMERGENZE</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 584
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 584, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 585
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 585, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 586
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 586, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 586, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 587
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 587, $this->source); })()), array(0 => ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 587, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 587, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method"))));
            // line 588
            echo "                                        </tr>
                                    ";
        }
        // line 590
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 590, $this->source); })()), "numPreseTelefono", array()) != 0)) {
            // line 591
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto Telefonico</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>presa telefonica</strong> con presa ad 1 coppia
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 601
            echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 601, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 602
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 602, $this->source); })()), "getPriceByCode", array(0 => "15.3.210.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 603
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 603, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 603, $this->source); })()), "getPriceByCode", array(0 => "15.3.210.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 604
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 604, $this->source); })()), array(0 => ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 604, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 604, $this->source); })()), "getPriceByCode", array(0 => "15.3.210.1"), "method"))));
            // line 605
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.240.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 613
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 613, $this->source); })()), 0), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 614
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 614, $this->source); })()), "getPriceByCode", array(0 => "15.4.240.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 615
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 615, $this->source); })()), 0) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 615, $this->source); })()), "getPriceByCode", array(0 => "15.4.240.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 616
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 616, $this->source); })()), array(0 => ((isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 616, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 616, $this->source); })()), "getPriceByCode", array(0 => "15.4.240.1"), "method"))));
            // line 617
            echo "                                        </tr>
                                        ";
            // line 657
            echo "                                    ";
        }
        // line 658
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 658, $this->source); })()), "numPreseDati", array()) != 0) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 658, $this->source); })()), "level", array()) == 3))) {
            // line 659
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Connettorizzazione punti trasmissione dati.</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.220.6</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>connettore tipo RJ45</strong> con cavo UTP cat. 6
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 669
            echo twig_escape_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 669, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 670
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 670, $this->source); })()), "getPriceByCode", array(0 => "15.3.220.6"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 671
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_number_format_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 671, $this->source); })()), 0) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 671, $this->source); })()), "getPriceByCode", array(0 => "15.3.220.6"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 672
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 672, $this->source); })()), array(0 => ((isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 672, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 672, $this->source); })()), "getPriceByCode", array(0 => "15.3.220.6"), "method"))));
            // line 673
            echo "                                        </tr>
                                    ";
        }
        // line 675
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 675, $this->source); })()), "campanello", array()) != 0)) {
            // line 676
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Segnalatore Acustico</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di suoneria. Con pulsante <br>
                                                    con targa.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 688
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 688, $this->source); })()), "getPriceByCode", array(0 => "15.3.80.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 689
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 689, $this->source); })()), "getPriceByCode", array(0 => "15.3.80.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 690
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 690, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 690, $this->source); })()), "getPriceByCode", array(0 => "15.3.80.4"), "method")));
            // line 691
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 700
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 700, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 701
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 701, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 702
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 702, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 702, $this->source); })()), "getPriceByCode", array(0 => "15.3.90"), "method")));
            // line 703
            echo "                                        </tr>
                                    ";
        }
        // line 705
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Orologio Astronomico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.6.170.39</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore deviatore orario giornaliero e settimanale (ris. Carica 100h) digitale ad 1 uscita.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">";
        // line 716
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 716, $this->source); })()), "getPriceByCode", array(0 => "15.6.170.39"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 717
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 717, $this->source); })()), "getPriceByCode", array(0 => "15.6.170.39"), "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 718
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 718, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 718, $this->source); })()), "getPriceByCode", array(0 => "15.6.170.39"), "method")));
        // line 719
        echo "                                    </tr>
                                    <!--<tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto Citofonico o Videocitofonico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.52.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>impianto citofonico o videocitofonico, sistema a 2 fili.
                                                    Per impianto base fino a 26 interni.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">2</td>
                                        <td class=\"border text-center\">96.00</td>
                                        <td class=\"border text-center\">192.00</td>
                                    </tr>-->
                                    ";
        // line 735
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 735, $this->source); })()), 14, array()) > 0)) {
            // line 736
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Lampade emergenza</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.8.180.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PLAFONIERA DI EMERGENZA INSTALLABILE SU SCATOLE PORTAFRUTTO. Su placca in alluminio anodizzato o in plastica.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 746
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 746, $this->source); })()), 14, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 747
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 747, $this->source); })()), "getPriceByCode", array(0 => "15.8.180.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 748
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 748, $this->source); })()), 14, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 748, $this->source); })()), "getPriceByCode", array(0 => "15.8.180.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 749
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 749, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 749, $this->source); })()), 14, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 749, $this->source); })()), "getPriceByCode", array(0 => "15.8.180.1"), "method"))));
            // line 750
            echo "                                        </tr>
                                    ";
        }
        // line 752
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI RISCALDAMENTO</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa di Servizio</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                PUNTO PRESA DI SERVIZIO in traccia. Sono escluse le opere murarie
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 765
        echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 765, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 766
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 766, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 767
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 767, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 767, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 768
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 768, $this->source); })()), array(0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 768, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 768, $this->source); })()), "getPriceByCode", array(0 => "15.3.10"), "method"))));
        // line 769
        echo "                                    </tr>
                                    ";
        // line 770
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 770, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 770, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 771
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 779
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 779, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 780
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 780, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 781
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 781, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 781, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 782
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 782, $this->source); })()), array(0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 782, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 782, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.1"), "method"))));
            // line 783
            echo "                                        </tr>
                                    ";
        }
        // line 785
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 785, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 785, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
            // line 786
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 794
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 794, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 795
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 795, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 796
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 796, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 796, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 797
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 797, $this->source); })()), array(0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 797, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 797, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.2"), "method"))));
            // line 798
            echo "                                        </tr>
                                    ";
        }
        // line 800
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 800, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 801
            echo "                                        <td class=\"border text-center\">15.3.20.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 807
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 807, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 808
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 808, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 809
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 809, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 809, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 810
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 810, $this->source); })()), array(0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 810, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 810, $this->source); })()), "getPriceByCode", array(0 => "15.3.20.3"), "method"))));
            // line 811
            echo "                                    ";
        }
        // line 812
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio di regolazione </i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia <br>
                                                per alimentare dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione<br>
                                                (<strong>termostato</strong>, umidostato, flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 824
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 824, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 825
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 825, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 826
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 826, $this->source); })()), "pianiCasa", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 826, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 827
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 827, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 827, $this->source); })()), "pianiCasa", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 827, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method"))));
        // line 828
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Termostato</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.19.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Termostato elettronico da parete.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">
                                            ";
        // line 840
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 840, $this->source); })()), 20, array()) == 0)) {
            // line 841
            echo "                                            1
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 842
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 842, $this->source); })()), 20, array()) == 1)) {
            // line 843
            echo "                                            1
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 844
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 844, $this->source); })()), 20, array()) > 1)) {
            // line 845
            echo "                                            2
                                            ";
        }
        // line 847
        echo "                                        </td>
                                        <td class=\"border text-center\">";
        // line 848
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 848, $this->source); })()), "getPriceByCode", array(0 => "13.19.10.4"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 850
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 850, $this->source); })()), 20, array()) == 0)) {
            // line 851
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 851, $this->source); })()), "getPriceByCode", array(0 => "13.19.10.4"), "method"), 2), "html", null, true);
            echo "
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 852
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 852, $this->source); })()), 20, array()) == 1)) {
            // line 853
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 853, $this->source); })()), "getPriceByCode", array(0 => "13.19.10.4"), "method"), 2), "html", null, true);
            echo "
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 854
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 854, $this->source); })()), 20, array()) > 1)) {
            // line 855
            echo "                                                ";
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 855, $this->source); })()), "getPriceByCode", array(0 => "13.19.10.4"), "method"), 2) * 2), "html", null, true);
            echo "
                                            ";
        }
        // line 857
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio di Potenza</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (<strong>bruciatore</strong>, elettropompa, compressore, aerotermo, unità termoventilante, aspiratore, ventilconvettore, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 871
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 871, $this->source); })()), 18, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 872
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 872, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 873
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 873, $this->source); })()), 18, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 873, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 874
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 874, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 874, $this->source); })()), 18, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 874, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method"))));
        // line 875
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio Condizionatori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (bruciatore, elettropompa, compressore, <strong>aerotermo</strong>, unità termoventilante, aspiratore, <strong>ventilconvettore</strong>, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 888
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 888, $this->source); })()), 17, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 889
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 889, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 890
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 890, $this->source); })()), 17, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 890, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 891
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 891, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 891, $this->source); })()), 17, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 891, $this->source); })()), "getPriceByCode", array(0 => "13.21.40.1"), "method"))));
        // line 892
        echo "                                    </tr>
                                    ";
        // line 893
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 893, $this->source); })()), 19, array()) > 0)) {
            // line 894
            echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 906
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 906, $this->source); })()), 19, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 907
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 907, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 908
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 908, $this->source); })()), 19, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 908, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 909
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 909, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 909, $this->source); })()), 19, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 909, $this->source); })()), "getPriceByCode", array(0 => "13.21.10"), "method"))));
            // line 910
            echo "                                    </tr>
                                    ";
        }
        // line 912
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Collegamento Testine nei collettori per Ambiente</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.70.7</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Per allaccio elettrico incluso il collegamento all'apparecchio
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 922
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 922, $this->source); })()), 17, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 923
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 923, $this->source); })()), "getPriceByCode", array(0 => "15.2.70.7"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 924
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 924, $this->source); })()), 17, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 924, $this->source); })()), "getPriceByCode", array(0 => "15.2.70.7"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 925
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 925, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 925, $this->source); })()), 17, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 925, $this->source); })()), "getPriceByCode", array(0 => "15.2.70.7"), "method"))));
        // line 926
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                QUADRI ELETTRICI PER IMPIANTO ELETTRICO, SERVIZI E PREDISPOSIZIONI DOMOTICHE: LE ESATTE QUANTITA' E TIPOLOGIE DEI VARI APPARATI <br>
                                                SARANNO CONTEGGIATI AL TERMINE DELLE LAVORAZIONI IN MODO DA RISPETTARE L'ESATTO COORDINAMENTO DELLE PROTEZIONI COME DA <br>
                                                NORMATIVA. ALTRIMENTI PER UN'ESATTA DEFINZIONE DEI QUADRI ELETTRICI E' NECESSARIO, PRIMA DELL'INIZIO DELLE LAVORAZIONI,  <br>
                                                AVERE IL PROGETTO DEGLI IMPIANTI TECNOLOGICI E L'ESATTA TIPOLOGIA DI UTILIZZATORI CHE VERRANNO INSTALLATI <br>
                                                (AD ESEMPIO FORNI, LAVATRICI, SAUNE, CONZIONATORI, PISCINE ECC...)
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quadri elettrici per impianto elettrico e predisposizione domotica.</i></td>
                                    </tr>
                                    ";
        // line 941
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 941, $this->source); })()), 22, array()) > 0)) {
            // line 942
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 12  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 949
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 949, $this->source); })()), 22, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 950
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 950, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 951
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 951, $this->source); })()), 22, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 951, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.1"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 952
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 952, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 952, $this->source); })()), 22, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 952, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.1"), "method"))));
            // line 953
            echo "                                        </tr>
                                    ";
        }
        // line 955
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 955, $this->source); })()), 23, array()) > 0)) {
            // line 956
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 36  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 963
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 963, $this->source); })()), 23, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 964
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 964, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.3"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 965
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 965, $this->source); })()), 23, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 965, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.3"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 966
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 966, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 966, $this->source); })()), 23, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 966, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.3"), "method"))));
            // line 967
            echo "                                        </tr>
                                    ";
        }
        // line 969
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 969, $this->source); })()), 24, array()) > 0)) {
            // line 970
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 54  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 977
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 977, $this->source); })()), 24, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 978
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 978, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 979
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 979, $this->source); })()), 24, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 979, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.4"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 980
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 980, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 980, $this->source); })()), 24, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 980, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.4"), "method"))));
            // line 981
            echo "                                        </tr>
                                    ";
        }
        // line 983
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 983, $this->source); })()), 25, array()) > 0)) {
            // line 984
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.5</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 72  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 991
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 991, $this->source); })()), 25, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 992
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 992, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.5"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 993
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 993, $this->source); })()), 25, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 993, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.5"), "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 994
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 994, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 994, $this->source); })()), 25, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 994, $this->source); })()), "getPriceByCode", array(0 => "15.6.220.5"), "method"))));
            // line 995
            echo "                                        </tr>
                                    ";
        }
        // line 997
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Sezionatore Quadro Generale</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.6.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 40 a 63A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1007
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 22, array()) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 23, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 24, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 25, array())), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1008
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1008, $this->source); })()), "getPriceByCode", array(0 => "15.6.10.8"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1009
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1009, $this->source); })()), 22, array()) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1009, $this->source); })()), 23, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1009, $this->source); })()), 24, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1009, $this->source); })()), 25, array())) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1009, $this->source); })()), "getPriceByCode", array(0 => "15.6.10.8"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1010
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1010, $this->source); })()), array(0 => ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1010, $this->source); })()), 22, array()) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1010, $this->source); })()), 23, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1010, $this->source); })()), 24, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1010, $this->source); })()), 25, array())) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1010, $this->source); })()), "getPriceByCode", array(0 => "15.6.10.8"), "method"))));
        // line 1011
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Interruttori magnetotermici differenziali: circuiti luce di ogni piano, Forza motrice di ogni piano, allarme, impianto antenna,<br>
                                                Domotica, centralino telefonico, linea luce esterna.</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.52.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore magnetotermico differenziale fino a 32A, potere di interruzione 4,5KA, I.d. 0,03A
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1023
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1023, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1024
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1024, $this->source); })()), "getPriceByCode", array(0 => "15.6.52.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1025
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1025, $this->source); })()), "numCircuiti", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1025, $this->source); })()), "getPriceByCode", array(0 => "15.6.52.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1026
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1026, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1026, $this->source); })()), "numCircuiti", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1026, $this->source); })()), "getPriceByCode", array(0 => "15.6.52.1"), "method"))));
        // line 1027
        echo "                                    </tr>

                                    ";
        // line 1029
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1029, $this->source); })()), 25, array()) > 0)) {
            // line 1030
            echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Differenziale puro</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 10 a 32A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 1040
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1040, $this->source); })()), 25, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1041
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1041, $this->source); })()), "getPriceByCode", array(0 => "15.06.10.8"), "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1042
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1042, $this->source); })()), 25, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1042, $this->source); })()), "getPriceByCode", array(0 => "15.06.10.8"), "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 1043
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1043, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1043, $this->source); })()), 25, array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1043, $this->source); })()), "getPriceByCode", array(0 => "15.06.10.8"), "method"))));
            // line 1044
            echo "                                    </tr>
                                    ";
        }
        // line 1046
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                QUOTA LINEE DORSALI: LE ESATTE QUANTITA' E TIPOLOGIE DEI CAVI E DEI CORRUGATI  SARANNO CONTEGGIATE AL TERMINE DELLE LAVORAZIONI <br>
                                                IN QUANTO ALLO STATO ATTUALE NON E' POSSOBILE DETERMINARE L'ESATTA POSIZIONE DELLE SCATOLE DI DERIVAZIONE E DELLA COLONNA MONTANTE <br>
                                                PER MOTIVI ARCHITETTONICI E/O STRUTTURALI.
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quota cavi linea dorsale per impianto elettrico linee dorsali</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.110.12</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea Elettrica in cavo unipolare isolato in PVC, NO7V-K  1*6mmq al metro
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1065
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1065, $this->source); })()), "pianiCasa", array()) * 15) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1066
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1066, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.12"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1067
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1067, $this->source); })()), "pianiCasa", array()) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1067, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.12"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1068
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1068, $this->source); })()), array(0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1068, $this->source); })()), "pianiCasa", array()) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1068, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.12"), "method"))));
        // line 1069
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quota corrugati per dorsale e relativa traccia</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 25. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1080
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1080, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1081
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1081, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.3"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1082
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1082, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1082, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.3"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1083
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1083, $this->source); })()), array(0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1083, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1083, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.3"), "method"))));
        // line 1084
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1092
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1092, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1093
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1093, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.4"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1094
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1094, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1094, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.4"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1095
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1095, $this->source); })()), array(0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1095, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1095, $this->source); })()), "getPriceByCode", array(0 => "15.5.10.4"), "method"))));
        // line 1096
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1105
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1105, $this->source); })()), "pianiCasa", array()) * 4), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1106, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1107
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1107, $this->source); })()), "pianiCasa", array()) * 4) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1107, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.1"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1108
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1108, $this->source); })()), array(0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1108, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1108, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.1"), "method"))));
        // line 1109
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1118, $this->source); })()), "pianiCasa", array()) * 2) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1119
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1119, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.2"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1120
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1120, $this->source); })()), "pianiCasa", array()) * 2) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1120, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.2"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1121
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1121, $this->source); })()), array(0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1121, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1121, $this->source); })()), "getPriceByCode", array(0 => "15.5.180.2"), "method"))));
        // line 1122
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <i>
                                                Scatole derivazione per predisposizione domotica. Queste scatole consentono in futuro di poter allocare in campo <br>
                                                eventuali dispositivi domotici.
                                            </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.80.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Scatola di derivazione in plastica da incasso. Dimensioni assimilabili a mm 392x152x70.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1138, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1139
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1139, $this->source); })()), "getPriceByCode", array(0 => "15.5.80.8"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1140
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1140, $this->source); })()), "pianiCasa", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1140, $this->source); })()), "getPriceByCode", array(0 => "15.5.80.8"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1141
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1141, $this->source); })()), array(0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1141, $this->source); })()), "pianiCasa", array()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1141, $this->source); })()), "getPriceByCode", array(0 => "15.5.80.8"), "method"))));
        // line 1142
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>INGRESSO LINEA ELETTRICA ENEL DIMENSIONATA PER FORNITURA 4,5KW</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <i>
                                                Ingresso linea cavi impianto elettrico misura ipotetica: <u>L'esatta misura e/o sezione verrà conteggiata nel momento in cui verrà <br>
                                                    stabilita la posizione del contatore e la fornitura di allaccio se monofase o trifase</u>
                                            </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.21.40</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea Elettrica in cavo multipolare isolato in EPR sotto guaina di PVC, sigla RG70R 0,6/1KV o FG70R 0,6/1KV 2*10mmq al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">20</td>
                                        <td class=\"border text-center\">";
        // line 1162
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1162, $this->source); })()), "getPriceByCode", array(0 => "15.4.21.40"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1163
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1163, $this->source); })()), "getPriceByCode", array(0 => "15.4.21.40"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1164
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1164, $this->source); })()), array(0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1164, $this->source); })()), "getPriceByCode", array(0 => "15.4.21.40"), "method"))));
        // line 1165
        echo "                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI MESSA A TERRA</strong></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.110.10</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                LINEA ELETTRICA IN CAVO UNIPOLARE ISOLATO IN PVC.  Linea elettrica in cavo <br>
                                                unipolare isolato in sigla di designazione NO7V-K (norme CEI 20-20 , CEI 20-22,<br>
                                                CEI 20-35) del tipo non propagante l'incendio. 16 mm2
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">20</td>
                                        <td class=\"border text-center\">";
        // line 1179
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1179, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.10"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1180
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1180, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.10"), "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1181
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1181, $this->source); })()), array(0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1181, $this->source); })()), "getPriceByCode", array(0 => "15.4.110.10"), "method"))));
        // line 1182
        echo "                                    </tr>
                                    ";
        // line 1183
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1183, $this->source); })()), "spd", array()) == "1")) {
            // line 1184
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1184, $this->source); })()), "trifase", array()) == 0)) {
                // line 1185
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.7.201</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine Unipolare  SPD Tipo 1. <br>
                                                        Per ogni polo di fase protetto.
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 1194
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1194, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1195
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1195, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1196
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1196, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1196, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method")));
                // line 1197
                echo "                                            </tr>
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 1206
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1206, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1207
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1207, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1208
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1208, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1208, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method")));
                // line 1209
                echo "                                            </tr>
                                        ";
            } else {
                // line 1211
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.7.201</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine Unipolare  SPD Tipo 1. <br>
                                                        Per ogni polo di fase protetto.
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 1220
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1220, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1221
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1221, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1222
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1222, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1222, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method")));
                // line 1223
                echo "                                            </tr>
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">";
                // line 1232
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1232, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1233
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1233, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method")), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1234
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1234, $this->source); })()), array(0 => (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1234, $this->source); })()), "getPriceByCode", array(0 => "15.7.202"), "method"))));
                // line 1235
                echo "                                            </tr>
                                        ";
            }
            // line 1237
            echo "                                    ";
        } else {
            // line 1238
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1246
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1246, $this->source); })()), "getPriceByCode", array(0 => "15.7.204.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1247
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1247, $this->source); })()), "getPriceByCode", array(0 => "15.7.204.4"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1248
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1248, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1248, $this->source); })()), "getPriceByCode", array(0 => "15.7.204.4"), "method")));
            // line 1249
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1258
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1258, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1259
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1259, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1260
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1260, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1260, $this->source); })()), "getPriceByCode", array(0 => "15.7.201"), "method")));
            // line 1261
            echo "                                        </tr>
                                    ";
        }
        // line 1263
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.5.260.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Pozzetto in resina completo di coperchio carrabile. 300x300mm
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">";
        // line 1271
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1271, $this->source); })()), "getPriceByCode", array(0 => "15.5.260.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1272
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1272, $this->source); })()), "getPriceByCode", array(0 => "15.5.260.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1273
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1273, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1273, $this->source); })()), "getPriceByCode", array(0 => "15.5.260.1"), "method")));
        // line 1274
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.7.60.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Puntazza a croce per dispersione, realizzate in acciaio zincato a fuoco di dimensioni 50*50*5mm,<br>
                                                da conficcare in terreno di media consistenza all'interno di pozzetto ispezionabile, fornita e posta in opera.<br>
                                                Di lunghezza pari a 1,5 mt
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">";
        // line 1285
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1285, $this->source); })()), "getPriceByCode", array(0 => "15.7.60.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1286
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1286, $this->source); })()), "getPriceByCode", array(0 => "15.7.60.1"), "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1287
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1287, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1287, $this->source); })()), "getPriceByCode", array(0 => "15.7.60.1"), "method")));
        // line 1288
        echo "                                    </tr>
                                    ";
        // line 1289
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1289, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 1290
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Escluse le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1298
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1298, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1299
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1299, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.1"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1300
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1300, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1300, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.1"), "method")));
            // line 1301
            echo "                                        </tr>
                                    ";
        } else {
            // line 1303
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Comprese le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1311
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1311, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1312
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1312, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.2"), "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1313
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1313, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1313, $this->source); })()), "getPriceByCode", array(0 => "15.2.160.2"), "method")));
            // line 1314
            echo "                                        </tr>
                                    ";
        }
        // line 1316
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1316, $this->source); })()), "level", array()) == 3)) {
            // line 1317
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.31</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera.<br>
                                                    Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare <br>
                                                    il lavoro finito. E’ esclusa la quota di carpenteria. Relè passo-passo 1 contatto 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1329
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1329, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">";
            // line 1331
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1331, $this->source); })()) * 27), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.44</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera.<br>
                                                    Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare<br>
                                                    il lavoro finito. E’ esclusa la quota di carpenteria. Trasformatore BTS secondario 24V 40VA
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1342, $this->source); })()), "pianiCasa", array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">";
            // line 1344
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1344, $this->source); })()), "pianiCasa", array()) * 40), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1347
        echo "
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 1353
        $context["total"] = 0;
        // line 1354
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1354, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 1355
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 1356
                echo "                                                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1356, $this->source); })()) + $context["column"]);
                // line 1357
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1358
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1359
        echo "                                            ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1359, $this->source); })()), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 1362
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1362, $this->source); })()) != 0)) {
            // line 1363
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO ";
            // line 1365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1365, $this->source); })()), "sconto", array()), "html", null, true);
            echo "%</td>
                                            <td class=\"border text-center\">
                                                ";
            // line 1367
            $context["sconto"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1367, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1367, $this->source); })()), "sconto", array())) / 100);
            // line 1368
            echo "                                                ";
            echo twig_escape_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1368, $this->source); })()), "html", null, true);
            echo " €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1375
            echo twig_escape_filter($this->env, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1375, $this->source); })()) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1375, $this->source); })())), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1379
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1383
            $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1383, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1383, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1383, $this->source); })()));
            echo " ";
            echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 1383, $this->source); })()), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 1387
        echo "                                    ";
        if ($this->env->isDebug()) {
            // line 1394
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1394, $this->source); })()));
        }
        // line 1395
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1407
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1408
        echo "    <style>
        .no-wrap {
            max-width: 130px;
            width: 130px;
            white-space: pre-wrap!important; /* css-3 */
            white-space: -moz-pre-wrap!important; /* Mozilla, since 1999 */
            white-space: -pre-wrap!important; /* Opera 4-6 */
            white-space: -o-pre-wrap!important; /* Opera 7 */
            word-wrap: break-word!important; /* Internet Explorer 5.5+ */
        }
        .description {
            max-width: 300px;
            white-space: pre-wrap!important; /* css-3 */
            white-space: -moz-pre-wrap!important; /* Mozilla, since 1999 */
            white-space: -pre-wrap!important; /* Opera 4-6 */
            white-space: -o-pre-wrap!important; /* Opera 7 */
            word-wrap: break-word!important; /* Internet Explorer 5.5+ */
        }
        td {
            height: 65px!important;
        }
        .text-small {
            font-size: 10px!important;
        }
    </style>
    <style type=\"text/css\">
        ";
        // line 1435
        echo "        @page {
            /*size: landscape;*/
            margin: 0; }
        @media print {
            * {
                font-size: 0.9em!important;
            }
            small {
                font-size: 0.8em!important;
            }
            #page {
                max-width: 23cm!important;
                width: 23cm!important;
            }
            .footer {
                display: none;
            }
            .sf-toolbar {
                display: none;
            }
            .top-title {
                display: none;
            }
            .navbar {
                display: none;
            }
            .navbar-toggler {
                display: none;
            }
            .nav-hide-btn {
                display: none;
            }
            .title-dettagli {
                display: none;
            }
            .ambient-td {
                display: none;
            }
            .ambient-th {
                display: none;
            }
            a {
                text-decoration: none!important;
                color: #000000!important;
            }
            .card-grey {
                border: 1px solid #EEEEEE!important;
            }
            .card {
                padding: 0!important;
                margin: 0!important;
            }
            .table-header {
                background-color: #EEEEEE!important;
            }
            .table td {
                padding: 0px 20px!important;
                margin-left:5px;
                height: 40px!important;
            }
            .action-buttons {
                display: none;
            }
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1501
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1502
        echo "    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
        \$('#print').click(function(e) {
            e.preventDefault();
            window.print();
            return false;
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/details.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2635 => 1502,  2626 => 1501,  2551 => 1435,  2523 => 1408,  2514 => 1407,  2493 => 1395,  2490 => 1394,  2487 => 1387,  2478 => 1383,  2472 => 1379,  2465 => 1375,  2454 => 1368,  2452 => 1367,  2447 => 1365,  2443 => 1363,  2441 => 1362,  2434 => 1359,  2428 => 1358,  2422 => 1357,  2419 => 1356,  2414 => 1355,  2409 => 1354,  2407 => 1353,  2399 => 1347,  2393 => 1344,  2388 => 1342,  2374 => 1331,  2369 => 1329,  2355 => 1317,  2352 => 1316,  2348 => 1314,  2346 => 1313,  2342 => 1312,  2338 => 1311,  2328 => 1303,  2324 => 1301,  2322 => 1300,  2318 => 1299,  2314 => 1298,  2304 => 1290,  2302 => 1289,  2299 => 1288,  2297 => 1287,  2293 => 1286,  2289 => 1285,  2276 => 1274,  2274 => 1273,  2270 => 1272,  2266 => 1271,  2256 => 1263,  2252 => 1261,  2250 => 1260,  2246 => 1259,  2242 => 1258,  2231 => 1249,  2229 => 1248,  2225 => 1247,  2221 => 1246,  2211 => 1238,  2208 => 1237,  2204 => 1235,  2202 => 1234,  2198 => 1233,  2194 => 1232,  2183 => 1223,  2181 => 1222,  2177 => 1221,  2173 => 1220,  2162 => 1211,  2158 => 1209,  2156 => 1208,  2152 => 1207,  2148 => 1206,  2137 => 1197,  2135 => 1196,  2131 => 1195,  2127 => 1194,  2116 => 1185,  2113 => 1184,  2111 => 1183,  2108 => 1182,  2106 => 1181,  2102 => 1180,  2098 => 1179,  2082 => 1165,  2080 => 1164,  2076 => 1163,  2072 => 1162,  2050 => 1142,  2048 => 1141,  2044 => 1140,  2040 => 1139,  2036 => 1138,  2018 => 1122,  2016 => 1121,  2012 => 1120,  2008 => 1119,  2004 => 1118,  1993 => 1109,  1991 => 1108,  1987 => 1107,  1983 => 1106,  1979 => 1105,  1968 => 1096,  1966 => 1095,  1962 => 1094,  1958 => 1093,  1954 => 1092,  1944 => 1084,  1942 => 1083,  1938 => 1082,  1934 => 1081,  1930 => 1080,  1917 => 1069,  1915 => 1068,  1911 => 1067,  1907 => 1066,  1903 => 1065,  1882 => 1046,  1878 => 1044,  1876 => 1043,  1872 => 1042,  1868 => 1041,  1864 => 1040,  1852 => 1030,  1850 => 1029,  1846 => 1027,  1844 => 1026,  1840 => 1025,  1836 => 1024,  1832 => 1023,  1818 => 1011,  1816 => 1010,  1812 => 1009,  1808 => 1008,  1804 => 1007,  1792 => 997,  1788 => 995,  1786 => 994,  1782 => 993,  1778 => 992,  1774 => 991,  1765 => 984,  1762 => 983,  1758 => 981,  1756 => 980,  1752 => 979,  1748 => 978,  1744 => 977,  1735 => 970,  1732 => 969,  1728 => 967,  1726 => 966,  1722 => 965,  1718 => 964,  1714 => 963,  1705 => 956,  1702 => 955,  1698 => 953,  1696 => 952,  1692 => 951,  1688 => 950,  1684 => 949,  1675 => 942,  1673 => 941,  1656 => 926,  1654 => 925,  1650 => 924,  1646 => 923,  1642 => 922,  1630 => 912,  1626 => 910,  1624 => 909,  1620 => 908,  1616 => 907,  1612 => 906,  1598 => 894,  1596 => 893,  1593 => 892,  1591 => 891,  1587 => 890,  1583 => 889,  1579 => 888,  1564 => 875,  1562 => 874,  1558 => 873,  1554 => 872,  1550 => 871,  1534 => 857,  1528 => 855,  1526 => 854,  1521 => 853,  1519 => 852,  1514 => 851,  1512 => 850,  1507 => 848,  1504 => 847,  1500 => 845,  1498 => 844,  1495 => 843,  1493 => 842,  1490 => 841,  1488 => 840,  1474 => 828,  1472 => 827,  1468 => 826,  1464 => 825,  1460 => 824,  1446 => 812,  1443 => 811,  1441 => 810,  1437 => 809,  1433 => 808,  1429 => 807,  1421 => 801,  1418 => 800,  1414 => 798,  1412 => 797,  1408 => 796,  1404 => 795,  1400 => 794,  1390 => 786,  1387 => 785,  1383 => 783,  1381 => 782,  1377 => 781,  1373 => 780,  1369 => 779,  1359 => 771,  1357 => 770,  1354 => 769,  1352 => 768,  1348 => 767,  1344 => 766,  1340 => 765,  1325 => 752,  1321 => 750,  1319 => 749,  1315 => 748,  1311 => 747,  1307 => 746,  1295 => 736,  1293 => 735,  1275 => 719,  1273 => 718,  1269 => 717,  1265 => 716,  1252 => 705,  1248 => 703,  1246 => 702,  1242 => 701,  1238 => 700,  1227 => 691,  1225 => 690,  1221 => 689,  1217 => 688,  1203 => 676,  1200 => 675,  1196 => 673,  1194 => 672,  1190 => 671,  1186 => 670,  1182 => 669,  1170 => 659,  1167 => 658,  1164 => 657,  1161 => 617,  1159 => 616,  1155 => 615,  1151 => 614,  1147 => 613,  1137 => 605,  1135 => 604,  1131 => 603,  1127 => 602,  1123 => 601,  1111 => 591,  1108 => 590,  1104 => 588,  1102 => 587,  1098 => 586,  1094 => 585,  1090 => 584,  1080 => 576,  1078 => 575,  1074 => 574,  1070 => 573,  1066 => 572,  1054 => 562,  1051 => 561,  1048 => 519,  1046 => 518,  1042 => 517,  1038 => 516,  1034 => 515,  1024 => 507,  1022 => 506,  1018 => 505,  1014 => 504,  1010 => 503,  1001 => 496,  998 => 495,  994 => 493,  992 => 492,  988 => 491,  984 => 490,  970 => 478,  968 => 477,  965 => 476,  963 => 475,  959 => 474,  955 => 473,  941 => 461,  939 => 460,  936 => 459,  934 => 458,  930 => 457,  926 => 456,  912 => 444,  910 => 443,  907 => 442,  905 => 441,  901 => 440,  897 => 439,  877 => 421,  874 => 420,  870 => 418,  868 => 417,  864 => 416,  860 => 415,  856 => 414,  846 => 406,  843 => 405,  839 => 403,  837 => 402,  833 => 401,  829 => 400,  825 => 399,  815 => 391,  812 => 390,  808 => 388,  806 => 387,  802 => 386,  798 => 385,  794 => 384,  784 => 376,  782 => 375,  779 => 374,  777 => 373,  773 => 372,  769 => 371,  765 => 370,  750 => 357,  745 => 354,  743 => 353,  739 => 352,  735 => 351,  731 => 350,  722 => 343,  719 => 342,  715 => 340,  713 => 339,  709 => 338,  705 => 337,  701 => 336,  692 => 329,  690 => 328,  687 => 327,  685 => 326,  681 => 325,  677 => 324,  673 => 323,  663 => 315,  659 => 313,  657 => 312,  653 => 311,  649 => 310,  645 => 309,  635 => 301,  632 => 300,  628 => 298,  626 => 297,  622 => 296,  618 => 295,  614 => 294,  604 => 286,  601 => 285,  597 => 283,  595 => 282,  591 => 281,  587 => 280,  583 => 279,  573 => 271,  571 => 270,  568 => 269,  566 => 268,  562 => 267,  558 => 266,  554 => 265,  543 => 256,  541 => 255,  537 => 254,  533 => 253,  529 => 252,  515 => 240,  511 => 238,  509 => 237,  505 => 236,  501 => 235,  497 => 234,  488 => 227,  485 => 226,  481 => 224,  479 => 223,  475 => 222,  471 => 221,  467 => 220,  457 => 212,  454 => 211,  450 => 209,  448 => 208,  444 => 207,  440 => 206,  436 => 205,  426 => 197,  423 => 196,  419 => 194,  417 => 193,  413 => 192,  409 => 191,  405 => 190,  395 => 182,  392 => 181,  388 => 179,  386 => 178,  382 => 177,  378 => 176,  374 => 175,  365 => 168,  363 => 167,  360 => 166,  358 => 165,  354 => 164,  350 => 163,  346 => 162,  335 => 153,  333 => 152,  329 => 151,  325 => 150,  321 => 149,  296 => 126,  292 => 124,  290 => 123,  286 => 122,  282 => 121,  278 => 120,  268 => 112,  265 => 111,  262 => 110,  260 => 109,  255 => 107,  251 => 106,  247 => 105,  237 => 97,  234 => 96,  230 => 94,  228 => 93,  224 => 92,  220 => 91,  216 => 90,  206 => 82,  204 => 81,  201 => 80,  199 => 79,  195 => 78,  191 => 77,  187 => 76,  176 => 67,  174 => 66,  170 => 65,  166 => 64,  162 => 63,  145 => 48,  143 => 47,  125 => 31,  119 => 30,  110 => 27,  105 => 26,  100 => 25,  96 => 24,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Computometrico {% endblock %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <h3>Preventivi <small>Computometrico</small></h3>
                </div>
                <div class=\"col-1\">
                    <div class=\"btn-group float-right action-buttons\">
                        <a href=\"\" class=\"btn btn-danger btn-sm float-right animsition-link\">
                            <i class=\"mdi mdi-delete mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-secondary btn-sm float-right animsition-link\">
                            <i class=\"mdi mdi-pencil mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-success btn-sm float-right \" id=\"print\">
                            <i class=\"mdi mdi-printer mr-0\"></i>
                        </a>
                    </div>
                </div>
            </div>
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\" id=\"page\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover border-o\">
                                    <thead>
                                    <tr>
                                        <th class=\"no-wrap border\">ARTICOLO</th>
                                        <th class=\"border\" style=\"max-width: 300px\">DESCRIZIONE</th>
                                        <th class=\"no-wrap border\">QUANTITÁ</th>
                                        <th class=\"no-wrap border\">PREZZO NETTO UNITARIO</th>
                                        <th class=\"no-wrap border\">PREZZO NETTO TOTALE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% set prices = [] %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>PUNTI LUCE – COMANDO - PRESA</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Luce</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.12.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to luce semplice su canalizzazione in traccia o in vista <br>
                                                con un cavo non propagante l'incendio con sezione minima 1,5 mmq. <br>
                                                <strong>Per P.to luce con conduttore di protezione.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPL }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.12.2')|number_format(2)  }}</td>
                                        <td class=\"border text-center\">{{ (qtyPL * fun.getPriceByCode('15.1.12.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPL * fun.getPriceByCode('15.1.12.2')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPL }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPL * fun.getPriceByCode('15.1.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPL * fun.getPriceByCode('15.1.1')]) %}
                                    </tr>
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.3.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPL }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.3.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPL * fun.getPriceByCode('15.1.3.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPL * fun.getPriceByCode('15.1.3.1')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarieIntonaco == 1 and item.opereMurariePietra == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPL }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.4.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPL * fun.getPriceByCode('15.1.4.1'))|number_format(2) }}</td>
                                        </tr>
                                        {% set prices = prices|merge([qtyPL * fun.getPriceByCode('15.1.4.1')]) %}
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPL }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.5.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPL * fun.getPriceByCode('15.1.5.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPL * fun.getPriceByCode('15.1.5.1')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                N.B.: il montaggio dei corpi illuminanti è escluso dalla presente offerta. Una volta che questi saranno stati definiti potremo fare un'offerta per<br>
                                                l'installazione se quantificabile, altrimenti procederemo nelle lavorazioni in economia con le tariffe orarie pattuite in fase di contratto. <br>
                                                Nel caso non venissero definiti prima della fine dei lavori o l'eventuale installazione non sia di nostra competenza, da parte nostra provvederemo <br>
                                                all'installazione di almeno un portalampade per ambiente. Eventuali accessori, se necessari, tipo tubazione rame e/o cavo in seta, verranno conteggiati<br>
                                                a parte con rendicontazione finale.
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPC }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.15.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPC * fun.getPriceByCode('15.1.15.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPC * fun.getPriceByCode('15.1.15.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPC }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.2')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPC * fun.getPriceByCode('15.1.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPC * fun.getPriceByCode('15.1.2')]) %}
                                    </tr>
                                    {% if itemsArray.7 > 0 %}
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.7 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.15.2')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.7 * fun.getPriceByCode('15.1.15.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.7  * fun.getPriceByCode('15.1.15.2')]) %}
                                    </tr>
                                    {% endif %}
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPC }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.3.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPC * fun.getPriceByCode('15.1.3.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPC * fun.getPriceByCode('15.1.3.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarieIntonaco == 1 and item.opereMurariePietra == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPC }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.4.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPC * fun.getPriceByCode('15.1.4.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPC * fun.getPriceByCode('15.1.4.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPC }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.5.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPC * fun.getPriceByCode('15.1.5.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPC * fun.getPriceByCode('15.1.5.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if itemsArray.3 != null %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.15.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    P.to di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.3 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.15.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.3 * fun.getPriceByCode('15.1.15.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.3 * fun.getPriceByCode('15.1.15.2')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.21.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to allaccio per presa monofase su canalizzazione in traccia o in vista <br>
                                                con cavo non propagante l'incendio di sezione idonea<br>
                                                <strong>Per allaccio monofase con carico massimo di 16A.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPP }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.21.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.21.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPP }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.1')]) %}
                                    </tr>
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPP }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarieIntonaco == 1 and item.opereMurariePietra == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPP }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.3'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.3')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPP }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.4')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.4'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.4')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPP }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.41.3')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPP * fun.getPriceByCode('15.2.41.3'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPP * fun.getPriceByCode('15.2.41.3')]) %}
                                    </tr>
                                    {% if itemsArray.4 > 0 %}
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.4 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.41.2')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.4 * fun.getPriceByCode('15.2.41.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.4 * fun.getPriceByCode('15.2.41.2')]) %}
                                    </tr>
                                    {% endif %}
                                    {% if itemsArray.5 > 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Per allaccio ventilatori e o aspiratori
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.5 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.42')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.5 * fun.getPriceByCode('15.2.42'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.5 * fun.getPriceByCode('15.2.42')]) %}
                                        </tr>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>SERVIZI</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa di Servizio: TV Terrestre, TV Satellitare, Emergenza, Telefono, Rete Dati, Citofonia</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                PUNTO PRESA DI SERVIZIO in traccia sono escluse le opere murarie
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPS }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPS * fun.getPriceByCode('15.3.10'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPS * fun.getPriceByCode('15.3.10')]) %}
                                    </tr>
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPS }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPS * fun.getPriceByCode('15.3.20.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPS * fun.getPriceByCode('15.3.20.1')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarieIntonaco == 1 and item.opereMurariePietra == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPS }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPS * fun.getPriceByCode('15.3.20.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPS * fun.getPriceByCode('15.3.20.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPS }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPS * fun.getPriceByCode('15.3.20.3'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPS * fun.getPriceByCode('15.3.20.3')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.antenna > 0 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto TV terrestre</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.151.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Impianto di ricezione di segnale TV digitale terrestre <strong>costituito da antenna di ricezione TV in <br>
                                                        banda UHF o VHF</strong>, idonea alla ricezione di segnale TV digitale terrestre con guadagno <br>
                                                    compreso superiore a 13 dB,  con possibilità di installazione con polarizzazione verticale o <br>
                                                    orizzontale, <strong>completa di palo e di sistemi di fissaggio su tetto o su copertura piana di <br>
                                                        qualsiasi natura, di cavi di collegamento fino all'impianto di amplificazione.</strong> Il tutto posto in <br>
                                                    opera a qualsiasi altezza, con tutto quanto occorre per dare il lavoro finito , incluse le eventuali <br>
                                                    opere murarie per il fissaggio ed il ripristino di eventuali parti  di copertura interessate. <br>
                                                    <strong>Sistema con due antenne</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.151.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.151.2')|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.3.151.2')]) %}
                                        </tr>
                                        {% if qtyPT < 5 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.161.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione  fino a 5 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.1')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.1')|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.3.161.1')]) %}
                                            </tr>
                                        {% elseif qtyPT > 6 and qtyPT < 10 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.161.2</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione da 6 a 10 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.2')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.2')|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.3.161.2')]) %}
                                            </tr>
                                        {% elseif qtyPT > 11 and qtyPT < 15 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.161.3</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Amplificatore da palo per segnale TV digitale terrestre, per banda larga UHF - VHF, completo di <br>
                                                        alimentatore e quota di cavo a basse perdite per linea montante su canalizzazione predisposta, <br>
                                                        per la distribuzione del segnale derivato dalle antenne di ricezione, fino ai partitori. Posto in <br>
                                                        opera su palo o all'interno completo degli accessori necessari per dare l'opera finita e <br>
                                                        funzionante. <strong>Per alimentazione da 11 a 15 prese</strong>
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.3')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.161.3')|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.3.161.3')]) %}
                                            </tr>
                                        {% endif %}
                                    {% endif %}
                                    <tr>
                                        <td class=\"border text-center\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPT }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.110.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPT * fun.getPriceByCode('15.3.110.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPT * fun.getPriceByCode('15.3.110.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ calcTVCable }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.230')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (calcTVCable * fun.getPriceByCode('15.4.230'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([calcTVCable * fun.getPriceByCode('15.4.230')]) %}
                                    </tr>
                                    {#{% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPT }}</td>
                                            <td class=\"border text-center\">8</td>
                                            <td class=\"border text-center\">{{ qtyPT  * 8}}</td>
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 1  %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPT }}</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">{{ qtyPT * 12.9 }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.32</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPT }}</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">{{ qtyPT  * 12.1}}</td>
                                        </tr>
                                    {% endif %}#}
                                    {% if qtyTR != 0 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto chiamata emergenza con tiranti dal bagno e delle camere da letto</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.40.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>impianto di chiamata</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyTR }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.40.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyTR * fun.getPriceByCode('15.3.40.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyTR * fun.getPriceByCode('15.3.40.1')]) %}
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong>ronzatore per EMERGENZE</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyTR }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.90')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyTR * fun.getPriceByCode('15.3.90'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyTR * fun.getPriceByCode('15.3.90')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.numPreseTelefono != 0 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Impianto Telefonico</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>presa telefonica</strong> con presa ad 1 coppia
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyTP }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.210.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyTP * fun.getPriceByCode('15.3.210.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyTP * fun.getPriceByCode('15.3.210.1')]) %}
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.240.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ calcTPCable|number_format(0) }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.240.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (calcTPCable|number_format(0) * fun.getPriceByCode('15.4.240.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([calcTPCable * fun.getPriceByCode('15.4.240.1')]) %}
                                        </tr>
                                        {#{% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.20.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                        Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">{{ qtyTP }}</td>
                                                <td class=\"border text-center\">8.00</td>
                                                <td class=\"border text-center\">{{ qtyTP  * 8.00}}</td>
                                            </tr>
                                        {% endif %}
                                        {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 1  %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.20.2</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                        Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">{{ qtyPT }}</td>
                                                <td class=\"border text-center\">12.9</td>
                                                <td class=\"border text-center\">{{ qtyPT * 12.9 }}</td>
                                            </tr>
                                        {% endif %}
                                        {% if item.opereMurariePietra == 1 %}
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyTP }}</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">{{ (qtyTP * 12.10)|number_format(1)}}</td>
                                        {% endif %}#}
                                    {% endif %}
                                    {% if item.numPreseDati != 0 and item.level == 3 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Connettorizzazione punti trasmissione dati.</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.220.6</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>connettore tipo RJ45</strong> con cavo UTP cat. 6
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPD }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.220.6')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPD|number_format(0) * fun.getPriceByCode('15.3.220.6'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPD * fun.getPriceByCode('15.3.220.6')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.campanello != 0 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Segnalatore Acustico</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di suoneria. Con pulsante <br>
                                                    con targa.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.80.4')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.80.4')|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.3.80.4')]) %}
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.90')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.90')|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.3.90')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Orologio Astronomico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.6.170.39</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore deviatore orario giornaliero e settimanale (ris. Carica 100h) digitale ad 1 uscita.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.170.39')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.170.39')|number_format(2) }}</td>
                                        {% set prices = prices|merge([fun.getPriceByCode('15.6.170.39')]) %}
                                    </tr>
                                    <!--<tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto Citofonico o Videocitofonico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.52.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>impianto citofonico o videocitofonico, sistema a 2 fili.
                                                    Per impianto base fino a 26 interni.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">2</td>
                                        <td class=\"border text-center\">96.00</td>
                                        <td class=\"border text-center\">192.00</td>
                                    </tr>-->
                                    {% if itemsArray.14 > 0 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><i>Lampade emergenza</i></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.8.180.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PLAFONIERA DI EMERGENZA INSTALLABILE SU SCATOLE PORTAFRUTTO. Su placca in alluminio anodizzato o in plastica.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.14 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.8.180.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.14 * fun.getPriceByCode('15.8.180.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.14 * fun.getPriceByCode('15.8.180.1')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI RISCALDAMENTO</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa di Servizio</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.3.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                PUNTO PRESA DI SERVIZIO in traccia. Sono escluse le opere murarie
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPST }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPST * fun.getPriceByCode('15.3.10'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPST * fun.getPriceByCode('15.3.10')]) %}
                                    </tr>
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPST }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPST * fun.getPriceByCode('15.3.20.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPST * fun.getPriceByCode('15.3.20.1')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurarie == 1 and item.opereMurarieIntonaco == 1  %}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPST }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (qtyPST * fun.getPriceByCode('15.3.20.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([qtyPST * fun.getPriceByCode('15.3.20.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.opereMurariePietra == 1 %}
                                        <td class=\"border text-center\">15.3.20.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPST }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (qtyPST * fun.getPriceByCode('15.3.20.3'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([qtyPST * fun.getPriceByCode('15.3.20.3')]) %}
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio di regolazione </i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia <br>
                                                per alimentare dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione<br>
                                                (<strong>termostato</strong>, umidostato, flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('13.21.10')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * fun.getPriceByCode('13.21.10'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([item.pianiCasa * fun.getPriceByCode('13.21.10')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Termostato</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.19.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Termostato elettronico da parete.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">
                                            {% if itemsArray.20 == 0 %}
                                            1
                                            {% elseif itemsArray.20 == 1 %}
                                            1
                                            {% elseif itemsArray.20 > 1 %}
                                            2
                                            {% endif %}
                                        </td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('13.19.10.4')|number_format(2) }}</td>
                                        <td class=\"border text-center\">
                                            {% if itemsArray.20 == 0 %}
                                                {{ fun.getPriceByCode('13.19.10.4')|number_format(2) }}
                                            {% elseif itemsArray.20 == 1 %}
                                                {{ fun.getPriceByCode('13.19.10.4')|number_format(2) }}
                                            {% elseif itemsArray.20 > 1 %}
                                                {{ fun.getPriceByCode('13.19.10.4')|number_format(2) * 2 }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio di Potenza</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (<strong>bruciatore</strong>, elettropompa, compressore, aerotermo, unità termoventilante, aspiratore, ventilconvettore, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.18 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('13.21.40.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.18 * fun.getPriceByCode('13.21.40.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.18 * fun.getPriceByCode('13.21.40.1')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio Condizionatori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (bruciatore, elettropompa, compressore, <strong>aerotermo</strong>, unità termoventilante, aspiratore, <strong>ventilconvettore</strong>, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.17 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('13.21.40.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.17 * fun.getPriceByCode('13.21.40.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.17 * fun.getPriceByCode('13.21.40.1')]) %}
                                    </tr>
                                    {%  if itemsArray.19 > 0 %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.19 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('13.21.10')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.19 * fun.getPriceByCode('13.21.10'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.19 * fun.getPriceByCode('13.21.10')]) %}
                                    </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Collegamento Testine nei collettori per Ambiente</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.70.7</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Per allaccio elettrico incluso il collegamento all'apparecchio
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.17 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.70.7')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.17 * fun.getPriceByCode('15.2.70.7'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.17 * fun.getPriceByCode('15.2.70.7')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                QUADRI ELETTRICI PER IMPIANTO ELETTRICO, SERVIZI E PREDISPOSIZIONI DOMOTICHE: LE ESATTE QUANTITA' E TIPOLOGIE DEI VARI APPARATI <br>
                                                SARANNO CONTEGGIATI AL TERMINE DELLE LAVORAZIONI IN MODO DA RISPETTARE L'ESATTO COORDINAMENTO DELLE PROTEZIONI COME DA <br>
                                                NORMATIVA. ALTRIMENTI PER UN'ESATTA DEFINZIONE DEI QUADRI ELETTRICI E' NECESSARIO, PRIMA DELL'INIZIO DELLE LAVORAZIONI,  <br>
                                                AVERE IL PROGETTO DEGLI IMPIANTI TECNOLOGICI E L'ESATTA TIPOLOGIA DI UTILIZZATORI CHE VERRANNO INSTALLATI <br>
                                                (AD ESEMPIO FORNI, LAVATRICI, SAUNE, CONZIONATORI, PISCINE ECC...)
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quadri elettrici per impianto elettrico e predisposizione domotica.</i></td>
                                    </tr>
                                    {% if (itemsArray.22 > 0) %}
                                        <tr>
                                            <td class=\"border text-center\">15.6.220.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 12  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.22 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.220.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.22 * fun.getPriceByCode('15.6.220.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.22 * fun.getPriceByCode('15.6.220.1')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if (itemsArray.23 > 0) %}
                                        <tr>
                                            <td class=\"border text-center\">15.6.220.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 36  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.23 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.220.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.23 * fun.getPriceByCode('15.6.220.3'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.23 * fun.getPriceByCode('15.6.220.3')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if (itemsArray.24 > 0) %}
                                        <tr>
                                            <td class=\"border text-center\">15.6.220.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 54  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.24 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.220.4')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.24 * fun.getPriceByCode('15.6.220.4'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.24 * fun.getPriceByCode('15.6.220.4')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if (itemsArray.25 > 0) %}
                                        <tr>
                                            <td class=\"border text-center\">15.6.220.5</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 72  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.25 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.220.5')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.25 * fun.getPriceByCode('15.6.220.5'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.25 * fun.getPriceByCode('15.6.220.5')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Sezionatore Quadro Generale</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.6.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 40 a 63A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.22 + itemsArray.23 + itemsArray.24 + itemsArray.25 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.10.8')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((itemsArray.22 + itemsArray.23 + itemsArray.24 + itemsArray.25) * fun.getPriceByCode('15.6.10.8'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(itemsArray.22 + itemsArray.23 + itemsArray.24 + itemsArray.25) * fun.getPriceByCode('15.6.10.8')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Interruttori magnetotermici differenziali: circuiti luce di ogni piano, Forza motrice di ogni piano, allarme, impianto antenna,<br>
                                                Domotica, centralino telefonico, linea luce esterna.</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.52.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore magnetotermico differenziale fino a 32A, potere di interruzione 4,5KA, I.d. 0,03A
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.numCircuiti }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.52.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (item.numCircuiti * fun.getPriceByCode('15.6.52.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([item.numCircuiti * fun.getPriceByCode('15.6.52.1')]) %}
                                    </tr>

                                    {% if itemsArray.25 > 0 %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Differenziale puro</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 10 a 32A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.25 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.06.10.8')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.25 * fun.getPriceByCode('15.06.10.8'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.25 * fun.getPriceByCode('15.06.10.8')]) %}
                                    </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <strong>
                                                QUOTA LINEE DORSALI: LE ESATTE QUANTITA' E TIPOLOGIE DEI CAVI E DEI CORRUGATI  SARANNO CONTEGGIATE AL TERMINE DELLE LAVORAZIONI <br>
                                                IN QUANTO ALLO STATO ATTUALE NON E' POSSOBILE DETERMINARE L'ESATTA POSIZIONE DELLE SCATOLE DI DERIVAZIONE E DELLA COLONNA MONTANTE <br>
                                                PER MOTIVI ARCHITETTONICI E/O STRUTTURALI.
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quota cavi linea dorsale per impianto elettrico linee dorsali</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.110.12</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea Elettrica in cavo unipolare isolato in PVC, NO7V-K  1*6mmq al metro
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 15 * 3 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.110.12')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa * 15 * 3) * fun.getPriceByCode('15.4.110.12'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa * 15 * 3) * fun.getPriceByCode('15.4.110.12')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Quota corrugati per dorsale e relativa traccia</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 25. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 15 * 2 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.10.3')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.10.3'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.10.3')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 15 * 2 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.10.4')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.10.4'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.10.4')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 4 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.180.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa * 4) * fun.getPriceByCode('15.5.180.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.180.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 2 * 3 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.180.2')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa * 2 * 3) * fun.getPriceByCode('15.5.180.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa * 15 * 2) * fun.getPriceByCode('15.5.180.2')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <i>
                                                Scatole derivazione per predisposizione domotica. Queste scatole consentono in futuro di poter allocare in campo <br>
                                                eventuali dispositivi domotici.
                                            </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.80.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Scatola di derivazione in plastica da incasso. Dimensioni assimilabili a mm 392x152x70.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa  }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.80.8')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ ((item.pianiCasa) * fun.getPriceByCode('15.5.80.8'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([(item.pianiCasa) * fun.getPriceByCode('15.5.80.8')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>INGRESSO LINEA ELETTRICA ENEL DIMENSIONATA PER FORNITURA 4,5KW</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\">
                                            <i>
                                                Ingresso linea cavi impianto elettrico misura ipotetica: <u>L'esatta misura e/o sezione verrà conteggiata nel momento in cui verrà <br>
                                                    stabilita la posizione del contatore e la fornitura di allaccio se monofase o trifase</u>
                                            </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.21.40</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea Elettrica in cavo multipolare isolato in EPR sotto guaina di PVC, sigla RG70R 0,6/1KV o FG70R 0,6/1KV 2*10mmq al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">20</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.21.40')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (20 * fun.getPriceByCode('15.4.21.40'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([20 * fun.getPriceByCode('15.4.21.40')]) %}
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI MESSA A TERRA</strong></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.110.10</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                LINEA ELETTRICA IN CAVO UNIPOLARE ISOLATO IN PVC.  Linea elettrica in cavo <br>
                                                unipolare isolato in sigla di designazione NO7V-K (norme CEI 20-20 , CEI 20-22,<br>
                                                CEI 20-35) del tipo non propagante l'incendio. 16 mm2
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">20</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.110.10')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (20 * fun.getPriceByCode('15.4.110.10'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([20 * fun.getPriceByCode('15.4.110.10')]) %}
                                    </tr>
                                    {% if item.spd == \"1\" %}
                                        {% if item.trifase == 0 %}
                                            <tr>
                                                <td class=\"border text-center\">15.7.201</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine Unipolare  SPD Tipo 1. <br>
                                                        Per ogni polo di fase protetto.
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.201')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.201'))|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.7.201')]) %}
                                            </tr>
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.202')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.202'))|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.7.202')]) %}
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td class=\"border text-center\">15.7.201</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine Unipolare  SPD Tipo 1. <br>
                                                        Per ogni polo di fase protetto.
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.201')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.201'))|number_format(2) }}</td>
                                                {% set prices = prices|merge([fun.getPriceByCode('15.7.201')]) %}
                                            </tr>
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.202')|number_format(2) }}</td>
                                                <td class=\"border text-center\">{{ (3 * fun.getPriceByCode('15.7.202'))|number_format(2) }}</td>
                                                {% set prices = prices|merge([3 * fun.getPriceByCode('15.7.202')]) %}
                                            </tr>
                                        {% endif %}
                                    {% else %}
                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.204.4')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.204.4'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.7.204.4')]) %}
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.201')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.201'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.7.201')]) %}
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td class=\"border text-center\">15.5.260.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Pozzetto in resina completo di coperchio carrabile. 300x300mm
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.260.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (fun.getPriceByCode('15.5.260.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([fun.getPriceByCode('15.5.260.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.7.60.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Puntazza a croce per dispersione, realizzate in acciaio zincato a fuoco di dimensioni 50*50*5mm,<br>
                                                da conficcare in terreno di media consistenza all'interno di pozzetto ispezionabile, fornita e posta in opera.<br>
                                                Di lunghezza pari a 1,5 mt
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.7.60.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (fun.getPriceByCode('15.7.60.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([fun.getPriceByCode('15.7.60.1')]) %}
                                    </tr>
                                    {% if item.opereMurarie == 0 %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.160.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Escluse le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.160.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (fun.getPriceByCode('15.2.160.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.2.160.1')]) %}
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td class=\"border text-center\">15.2.160.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Comprese le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.160.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (fun.getPriceByCode('15.2.160.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([fun.getPriceByCode('15.2.160.2')]) %}
                                        </tr>
                                    {% endif %}
                                    {% if item.level == 3 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.31</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera.<br>
                                                    Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare <br>
                                                    il lavoro finito. E’ esclusa la quota di carpenteria. Relè passo-passo 1 contatto 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyPL }}</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">{{ qtyPL * 27 }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.44</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera.<br>
                                                    Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare<br>
                                                    il lavoro finito. E’ esclusa la quota di carpenteria. Trasformatore BTS secondario 24V 40VA
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ item.pianiCasa }}</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">{{ item.pianiCasa * 40 }}</td>
                                        </tr>
                                    {% endif %}

                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            {% set total = 0 %}
                                            {% for row in prices|batch(2) %}
                                                {% for column in row %}
                                                    {% set total = total + column %}
                                                {% endfor %}
                                            {% endfor %}
                                            {{ total }} €
                                        </td>
                                    </tr>
                                    {% if sconto != 0 %}
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO {{ item.sconto }}%</td>
                                            <td class=\"border text-center\">
                                                {% set sconto = (total * item.sconto) / 100  %}
                                                {{ sconto }} €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>{{ (total - sconto)|round('2') }} €</strong>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>{%  set grandtotal = total + vat - sconto %} {{ grandtotal|round('2') }} €</strong>
                                            </td>
                                        </tr>
                                    {% endif %}
                                    {#<tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">IVA 22%</td>
                                        <td class=\"border text-center\">
                                            {{ vat|round('2') }} €
                                        </td>
                                    </tr>#}
{% dump(prices) %}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block stylesheets %}
    <style>
        .no-wrap {
            max-width: 130px;
            width: 130px;
            white-space: pre-wrap!important; /* css-3 */
            white-space: -moz-pre-wrap!important; /* Mozilla, since 1999 */
            white-space: -pre-wrap!important; /* Opera 4-6 */
            white-space: -o-pre-wrap!important; /* Opera 7 */
            word-wrap: break-word!important; /* Internet Explorer 5.5+ */
        }
        .description {
            max-width: 300px;
            white-space: pre-wrap!important; /* css-3 */
            white-space: -moz-pre-wrap!important; /* Mozilla, since 1999 */
            white-space: -pre-wrap!important; /* Opera 4-6 */
            white-space: -o-pre-wrap!important; /* Opera 7 */
            word-wrap: break-word!important; /* Internet Explorer 5.5+ */
        }
        td {
            height: 65px!important;
        }
        .text-small {
            font-size: 10px!important;
        }
    </style>
    <style type=\"text/css\">
        {# TODO: Fix print CSS #}
        @page {
            /*size: landscape;*/
            margin: 0; }
        @media print {
            * {
                font-size: 0.9em!important;
            }
            small {
                font-size: 0.8em!important;
            }
            #page {
                max-width: 23cm!important;
                width: 23cm!important;
            }
            .footer {
                display: none;
            }
            .sf-toolbar {
                display: none;
            }
            .top-title {
                display: none;
            }
            .navbar {
                display: none;
            }
            .navbar-toggler {
                display: none;
            }
            .nav-hide-btn {
                display: none;
            }
            .title-dettagli {
                display: none;
            }
            .ambient-td {
                display: none;
            }
            .ambient-th {
                display: none;
            }
            a {
                text-decoration: none!important;
                color: #000000!important;
            }
            .card-grey {
                border: 1px solid #EEEEEE!important;
            }
            .card {
                padding: 0!important;
                margin: 0!important;
            }
            .table-header {
                background-color: #EEEEEE!important;
            }
            .table td {
                padding: 0px 20px!important;
                margin-left:5px;
                height: 40px!important;
            }
            .action-buttons {
                display: none;
            }
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
        \$('#print').click(function(e) {
            e.preventDefault();
            window.print();
            return false;
        })
    </script>
{% endblock %}", "expertations/details.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/details.advanced.html.twig");
    }
}
