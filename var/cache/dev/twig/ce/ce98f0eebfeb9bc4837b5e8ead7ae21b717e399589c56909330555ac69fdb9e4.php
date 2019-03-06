<?php

/* expertations/details.advanced.html.twig */
class __TwigTemplate_97c37020b4099d5ec261983bf2464804924b500755a57b6ef49fd038e8866ef5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/details.advanced.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.advanced.html.twig"));

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

        echo "Computometrico ";
        
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
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <h3>Preventivi <small>Computometrico</small></h3>
                </div>
                <div class=\"col-1\">
                    <div class=\"btn-group float-right action-buttons\">
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo_avanzato", ["pid" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->source); })()), "pid", [])]), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-sm float-right \">
                            <i class=\"fa fa-chevron-left mr-0\"></i> &nbsp; Indietro
                        </a>
                        <a href=\"\" class=\"btn btn-success btn-sm float-right \" id=\"print\">
                            <i class=\"mdi mdi-printer mr-0\"></i>
                        </a>
                    </div>
                </div>
            </div>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 44
        $context["prices"] = [];
        // line 45
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
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 60, $this->source); })()), 8, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 61, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 62, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 62, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 63
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 63, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 63, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 63, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method"))]);
        // line 64
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
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 73, $this->source); })()), 8, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 74, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 75, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 75, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 76
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 76, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 76, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 76, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method"))]);
        // line 77
        echo "                                    </tr>
                                    ";
        // line 78
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "opereMurarieIntonaco", []) == 0))) {
            // line 79
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 87, $this->source); })()), 8, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 88, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 89
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 89, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 89, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 90
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 90, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 90, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 90, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method"))]);
            // line 91
            echo "                                        </tr>
                                    ";
        }
        // line 93
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 93, $this->source); })()), "opereMurarieIntonaco", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 93, $this->source); })()), "opereMurariePietra", []) == 0))) {
            // line 94
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 102, $this->source); })()), 8, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 103
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 103, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 104, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 104, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method")), 2), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 106
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 106, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 106, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 106, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method"))]);
            // line 107
            echo "                                    ";
        }
        // line 108
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 108, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 109
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 117, $this->source); })()), 8, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 118
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 118, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 119, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 119, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 120
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 120, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 120, $this->source); })()), 8, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 120, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method"))]);
            // line 121
            echo "                                        </tr>
                                    ";
        }
        // line 123
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
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 146, $this->source); })()), 6, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 147
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 147, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 148
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 148, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 148, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 149
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 149, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 149, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 149, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method"))]);
        // line 150
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
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 159, $this->source); })()), 6, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 160
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 160, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 161
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 161, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 161, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 162
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 162, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 162, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 162, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method"))]);
        // line 163
        echo "                                    </tr>
                                    ";
        // line 164
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 164, $this->source); })()), 7, []) > 0)) {
            // line 165
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 172, $this->source); })()), 7, []), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 173
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 173, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 174
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 174, $this->source); })()), 7, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 174, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 175
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 175, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 175, $this->source); })()), 7, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 175, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method"))]);
            // line 176
            echo "                                    </tr>
                                    ";
        }
        // line 178
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 178, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 178, $this->source); })()), "opereMurarieIntonaco", []) == 0))) {
            // line 179
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 187, $this->source); })()), 6, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 188
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 188, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 189
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 189, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 189, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 190
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 190, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 190, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 190, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method"))]);
            // line 191
            echo "                                        </tr>
                                    ";
        }
        // line 193
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 193, $this->source); })()), "opereMurarieIntonaco", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 193, $this->source); })()), "opereMurariePietra", []) == 0))) {
            // line 194
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 202, $this->source); })()), 6, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 203
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 203, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 204
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 204, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 204, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 205
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 205, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 205, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 205, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method"))]);
            // line 206
            echo "                                        </tr>
                                    ";
        }
        // line 208
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 208, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 209
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 217, $this->source); })()), 6, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 218
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 218, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 219, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 219, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 220
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 220, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 220, $this->source); })()), 6, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 220, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method"))]);
            // line 221
            echo "                                        </tr>
                                    ";
        }
        // line 223
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 223, $this->source); })()), 3, []) != null)) {
            // line 224
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.15.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    P.to di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 231, $this->source); })()), 3, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 232
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 232, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 233
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 233, $this->source); })()), 3, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 233, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 234
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 234, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 234, $this->source); })()), 3, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 234, $this->source); })()), "getPriceByCode", [0 => "15.1.15.2"], "method"))]);
            // line 235
            echo "                                        </tr>
                                    ";
        }
        // line 237
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
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 249, $this->source); })()), 1, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 250
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 250, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 251
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 251, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 251, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 252
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 252, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 252, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 252, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"))]);
        // line 253
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
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 262, $this->source); })()), 1, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 263
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 263, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 264
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 264, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 264, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 265
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 265, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 265, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 265, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method"))]);
        // line 266
        echo "                                    </tr>
                                    ";
        // line 267
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 267, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 267, $this->source); })()), "opereMurarieIntonaco", []) == 0))) {
            // line 268
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 276, $this->source); })()), 1, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 277
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 277, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 278
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 278, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 278, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 279
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 279, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 279, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 279, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method"))]);
            // line 280
            echo "                                        </tr>
                                    ";
        }
        // line 282
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 282, $this->source); })()), "opereMurarieIntonaco", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 282, $this->source); })()), "opereMurariePietra", []) == 0))) {
            // line 283
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 291, $this->source); })()), 1, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 292
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 292, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 293
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 293, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 293, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 294
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 294, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 294, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 294, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method"))]);
            // line 295
            echo "                                        </tr>
                                    ";
        }
        // line 297
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 297, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 298
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 306, $this->source); })()), 1, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 307
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 307, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 308
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 308, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 308, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 309
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 309, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 309, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 309, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method"))]);
            // line 310
            echo "                                        </tr>
                                    ";
        }
        // line 312
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 320, $this->source); })()), 1, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 321
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 321, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 322
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 322, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 322, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 323
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 323, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 323, $this->source); })()), 1, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 323, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method"))]);
        // line 324
        echo "                                    </tr>
                                    ";
        // line 325
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 325, $this->source); })()), 4, []) > 0)) {
            // line 326
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 333, $this->source); })()), 4, []), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 334
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 334, $this->source); })()), "getPriceByCode", [0 => "15.2.41.2"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 335
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 335, $this->source); })()), 4, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 335, $this->source); })()), "getPriceByCode", [0 => "15.2.41.2"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 336
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 336, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 336, $this->source); })()), 4, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 336, $this->source); })()), "getPriceByCode", [0 => "15.2.41.2"], "method"))]);
            // line 337
            echo "                                    </tr>
                                    ";
        }
        // line 339
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 339, $this->source); })()), 5, []) > 0)) {
            // line 340
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Per allaccio ventilatori e o aspiratori
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 347, $this->source); })()), 5, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 348
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 348, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 349
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 349, $this->source); })()), 5, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 349, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 350
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 350, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 350, $this->source); })()), 5, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 350, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"))]);
            // line 351
            echo "                                        </tr>
                                        </tr>
                                    ";
        }
        // line 354
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
        // line 367
        echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 367, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 368
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 368, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 369
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 369, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 369, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 370
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 370, $this->source); })()), [0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 370, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 370, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"))]);
        // line 371
        echo "                                    </tr>
                                    ";
        // line 372
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 372, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 372, $this->source); })()), "opereMurarieIntonaco", []) == 0))) {
            // line 373
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 381, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 382
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 382, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 383
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 383, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 383, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 384
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 384, $this->source); })()), [0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 384, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 384, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method"))]);
            // line 385
            echo "                                        </tr>
                                    ";
        }
        // line 387
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 387, $this->source); })()), "opereMurarieIntonaco", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 387, $this->source); })()), "opereMurariePietra", []) == 0))) {
            // line 388
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 396
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 396, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 397
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 397, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 398
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 398, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 398, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 399
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 399, $this->source); })()), [0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 399, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 399, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method"))]);
            // line 400
            echo "                                        </tr>
                                    ";
        }
        // line 402
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 402, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 403
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 411
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 411, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 412
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 412, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 413
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 413, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 413, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 414
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 414, $this->source); })()), [0 => ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 414, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 414, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"))]);
            // line 415
            echo "                                        </tr>
                                    ";
        }
        // line 417
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 417, $this->source); })()), "antenna", []) > 0)) {
            // line 418
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
            // line 436
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 436, $this->source); })()), "getPriceByCode", [0 => "15.3.151.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 437
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 437, $this->source); })()), "getPriceByCode", [0 => "15.3.151.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 438
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 438, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 438, $this->source); })()), "getPriceByCode", [0 => "15.3.151.2"], "method")]);
            // line 439
            echo "                                        </tr>
                                        ";
            // line 440
            if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 440, $this->source); })()), 43, []) < 5)) {
                // line 441
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
                // line 453
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 453, $this->source); })()), "getPriceByCode", [0 => "15.3.161.1"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 454
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 454, $this->source); })()), "getPriceByCode", [0 => "15.3.161.1"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 455
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 455, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 455, $this->source); })()), "getPriceByCode", [0 => "15.3.161.1"], "method")]);
                // line 456
                echo "                                            </tr>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 457
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 457, $this->source); })()), 43, []) > 6) && (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 457, $this->source); })()), 43, []) < 10))) {
                // line 458
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
                // line 470
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 470, $this->source); })()), "getPriceByCode", [0 => "15.3.161.2"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 471
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 471, $this->source); })()), "getPriceByCode", [0 => "15.3.161.2"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 472
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 472, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 472, $this->source); })()), "getPriceByCode", [0 => "15.3.161.2"], "method")]);
                // line 473
                echo "                                            </tr>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 474
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 474, $this->source); })()), 43, []) > 11) && (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 474, $this->source); })()), 43, []) < 15))) {
                // line 475
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
                // line 487
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 487, $this->source); })()), "getPriceByCode", [0 => "15.3.161.3"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 488
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 488, $this->source); })()), "getPriceByCode", [0 => "15.3.161.3"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 489
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 489, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 489, $this->source); })()), "getPriceByCode", [0 => "15.3.161.3"], "method")]);
                // line 490
                echo "                                            </tr>
                                        ";
            }
            // line 492
            echo "                                    ";
        }
        // line 493
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 500
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 500, $this->source); })()), 43, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 501
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 501, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 502
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 502, $this->source); })()), 43, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 502, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 503
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 503, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 503, $this->source); })()), 43, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 503, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method"))]);
        // line 504
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 512
        echo twig_escape_filter($this->env, (isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 512, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 513
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 513, $this->source); })()), "getPriceByCode", [0 => "15.4.230"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 514
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 514, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 514, $this->source); })()), "getPriceByCode", [0 => "15.4.230"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 515
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 515, $this->source); })()), [0 => ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 515, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 515, $this->source); })()), "getPriceByCode", [0 => "15.4.230"], "method"))]);
        // line 516
        echo "                                    </tr>
                                    ";
        // line 558
        echo "                                    ";
        if (((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 558, $this->source); })()) != 0)) {
            // line 559
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
            // line 569
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 569, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 570
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 570, $this->source); })()), "getPriceByCode", [0 => "15.3.40.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 571
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 571, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 571, $this->source); })()), "getPriceByCode", [0 => "15.3.40.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 572
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 572, $this->source); })()), [0 => ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 572, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 572, $this->source); })()), "getPriceByCode", [0 => "15.3.40.1"], "method"))]);
            // line 573
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong>ronzatore per EMERGENZE</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 581
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 581, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 582
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 582, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 583
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 583, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 583, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 584
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 584, $this->source); })()), [0 => ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 584, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 584, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method"))]);
            // line 585
            echo "                                        </tr>
                                    ";
        }
        // line 587
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 587, $this->source); })()), "numPreseTelefono", []) != 0)) {
            // line 588
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
            // line 598
            echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 598, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 599
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 599, $this->source); })()), "getPriceByCode", [0 => "15.3.210.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 600
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 600, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 600, $this->source); })()), "getPriceByCode", [0 => "15.3.210.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 601
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 601, $this->source); })()), [0 => ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 601, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 601, $this->source); })()), "getPriceByCode", [0 => "15.3.210.1"], "method"))]);
            // line 602
            echo "                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.240.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 610
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 610, $this->source); })()), 0), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 611
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 611, $this->source); })()), "getPriceByCode", [0 => "15.4.240.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 612
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 612, $this->source); })()), 0) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 612, $this->source); })()), "getPriceByCode", [0 => "15.4.240.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 613
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 613, $this->source); })()), [0 => ((isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 613, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 613, $this->source); })()), "getPriceByCode", [0 => "15.4.240.1"], "method"))]);
            // line 614
            echo "                                        </tr>
                                        ";
            // line 654
            echo "                                    ";
        }
        // line 655
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 655, $this->source); })()), "numPreseDati", []) != 0) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 655, $this->source); })()), "level", []) == 3))) {
            // line 656
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
            // line 666
            echo twig_escape_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 666, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 667
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 667, $this->source); })()), "getPriceByCode", [0 => "15.3.220.6"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 668
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_number_format_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 668, $this->source); })()), 0) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 668, $this->source); })()), "getPriceByCode", [0 => "15.3.220.6"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 669
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 669, $this->source); })()), [0 => ((isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 669, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 669, $this->source); })()), "getPriceByCode", [0 => "15.3.220.6"], "method"))]);
            // line 670
            echo "                                        </tr>
                                    ";
        }
        // line 672
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 672, $this->source); })()), "campanello", []) != 0)) {
            // line 673
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
            // line 685
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 685, $this->source); })()), "getPriceByCode", [0 => "15.3.80.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 686
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 686, $this->source); })()), "getPriceByCode", [0 => "15.3.80.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 687
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 687, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 687, $this->source); })()), "getPriceByCode", [0 => "15.3.80.4"], "method")]);
            // line 688
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
            // line 697
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 697, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 698
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 698, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 699
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 699, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 699, $this->source); })()), "getPriceByCode", [0 => "15.3.90"], "method")]);
            // line 700
            echo "                                        </tr>
                                    ";
        }
        // line 702
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
        // line 713
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 713, $this->source); })()), "getPriceByCode", [0 => "15.6.170.39"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 714
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 714, $this->source); })()), "getPriceByCode", [0 => "15.6.170.39"], "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 715
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 715, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 715, $this->source); })()), "getPriceByCode", [0 => "15.6.170.39"], "method")]);
        // line 716
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
        // line 732
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 732, $this->source); })()), 14, []) > 0)) {
            // line 733
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
            // line 743
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 743, $this->source); })()), 14, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 744
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 744, $this->source); })()), "getPriceByCode", [0 => "15.8.180.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 745
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 745, $this->source); })()), 14, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 745, $this->source); })()), "getPriceByCode", [0 => "15.8.180.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 746
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 746, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 746, $this->source); })()), 14, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 746, $this->source); })()), "getPriceByCode", [0 => "15.8.180.1"], "method"))]);
            // line 747
            echo "                                        </tr>
                                    ";
        }
        // line 749
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
        // line 762
        echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 762, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 763
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 763, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 764
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 764, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 764, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 765
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 765, $this->source); })()), [0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 765, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 765, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"))]);
        // line 766
        echo "                                    </tr>
                                    ";
        // line 767
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 767, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 767, $this->source); })()), "opereMurarieIntonaco", []) == 0))) {
            // line 768
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 776
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 776, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 777
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 777, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 778
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 778, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 778, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 779
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 779, $this->source); })()), [0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 779, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 779, $this->source); })()), "getPriceByCode", [0 => "15.3.20.1"], "method"))]);
            // line 780
            echo "                                        </tr>
                                    ";
        }
        // line 782
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 782, $this->source); })()), "opereMurarie", []) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 782, $this->source); })()), "opereMurarieIntonaco", []) == 1))) {
            // line 783
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 791
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 791, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 792
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 792, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 793
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 793, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 793, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 794
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 794, $this->source); })()), [0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 794, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 794, $this->source); })()), "getPriceByCode", [0 => "15.3.20.2"], "method"))]);
            // line 795
            echo "                                        </tr>
                                    ";
        }
        // line 797
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 797, $this->source); })()), "opereMurariePietra", []) == 1)) {
            // line 798
            echo "                                        <td class=\"border text-center\">15.3.20.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 804
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 804, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 805
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 805, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 806
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 806, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 806, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 807
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 807, $this->source); })()), [0 => ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 807, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 807, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"))]);
            // line 808
            echo "                                    ";
        }
        // line 809
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
        // line 821
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 821, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 822
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 822, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 823
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 823, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 823, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 824
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 824, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 824, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 824, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method"))]);
        // line 825
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
        // line 837
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 837, $this->source); })()), 20, []) == 0)) {
            // line 838
            echo "                                            1
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 839
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 839, $this->source); })()), 20, []) == 1)) {
            // line 840
            echo "                                            1
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 841
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 841, $this->source); })()), 20, []) > 1)) {
            // line 842
            echo "                                            2
                                            ";
        }
        // line 844
        echo "                                        </td>
                                        <td class=\"border text-center\">";
        // line 845
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 845, $this->source); })()), "getPriceByCode", [0 => "13.19.10.4"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 847
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 847, $this->source); })()), 20, []) == 0)) {
            // line 848
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 848, $this->source); })()), "getPriceByCode", [0 => "13.19.10.4"], "method"), 2), "html", null, true);
            echo "
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 849
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 849, $this->source); })()), 20, []) == 1)) {
            // line 850
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 850, $this->source); })()), "getPriceByCode", [0 => "13.19.10.4"], "method"), 2), "html", null, true);
            echo "
                                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 851
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 851, $this->source); })()), 20, []) > 1)) {
            // line 852
            echo "                                                ";
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 852, $this->source); })()), "getPriceByCode", [0 => "13.19.10.4"], "method"), 2) * 2), "html", null, true);
            echo "
                                            ";
        }
        // line 854
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
        // line 868
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 868, $this->source); })()), 18, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 869
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 869, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 870
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 870, $this->source); })()), 18, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 870, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 871
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 871, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 871, $this->source); })()), 18, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 871, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method"))]);
        // line 872
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
        // line 885
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 885, $this->source); })()), 17, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 886
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 886, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 887
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 887, $this->source); })()), 17, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 887, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 888
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 888, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 888, $this->source); })()), 17, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 888, $this->source); })()), "getPriceByCode", [0 => "13.21.40.1"], "method"))]);
        // line 889
        echo "                                    </tr>
                                    ";
        // line 890
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 890, $this->source); })()), 19, []) > 0)) {
            // line 891
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
            // line 903
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 903, $this->source); })()), 19, []), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 904
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 904, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 905
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 905, $this->source); })()), 19, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 905, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 906
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 906, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 906, $this->source); })()), 19, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 906, $this->source); })()), "getPriceByCode", [0 => "13.21.10"], "method"))]);
            // line 907
            echo "                                    </tr>
                                    ";
        }
        // line 909
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
        // line 919
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 919, $this->source); })()), 17, []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 920
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 920, $this->source); })()), "getPriceByCode", [0 => "15.2.70.7"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 921
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 921, $this->source); })()), 17, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 921, $this->source); })()), "getPriceByCode", [0 => "15.2.70.7"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 922
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 922, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 922, $this->source); })()), 17, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 922, $this->source); })()), "getPriceByCode", [0 => "15.2.70.7"], "method"))]);
        // line 923
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
        // line 938
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 938, $this->source); })()), 22, []) > 0)) {
            // line 939
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 12  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 946
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 946, $this->source); })()), 22, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 947
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 947, $this->source); })()), "getPriceByCode", [0 => "15.6.220.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 948
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 948, $this->source); })()), 22, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 948, $this->source); })()), "getPriceByCode", [0 => "15.6.220.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 949
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 949, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 949, $this->source); })()), 22, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 949, $this->source); })()), "getPriceByCode", [0 => "15.6.220.1"], "method"))]);
            // line 950
            echo "                                        </tr>
                                    ";
        }
        // line 952
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 952, $this->source); })()), 23, []) > 0)) {
            // line 953
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 36  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 960
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 960, $this->source); })()), 23, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 961
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 961, $this->source); })()), "getPriceByCode", [0 => "15.6.220.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 962
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 962, $this->source); })()), 23, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 962, $this->source); })()), "getPriceByCode", [0 => "15.6.220.3"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 963
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 963, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 963, $this->source); })()), 23, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 963, $this->source); })()), "getPriceByCode", [0 => "15.6.220.3"], "method"))]);
            // line 964
            echo "                                        </tr>
                                    ";
        }
        // line 966
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 966, $this->source); })()), 24, []) > 0)) {
            // line 967
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 54  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 974
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 974, $this->source); })()), 24, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 975
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 975, $this->source); })()), "getPriceByCode", [0 => "15.6.220.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 976
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 976, $this->source); })()), 24, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 976, $this->source); })()), "getPriceByCode", [0 => "15.6.220.4"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 977
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 977, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 977, $this->source); })()), 24, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 977, $this->source); })()), "getPriceByCode", [0 => "15.6.220.4"], "method"))]);
            // line 978
            echo "                                        </tr>
                                    ";
        }
        // line 980
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 980, $this->source); })()), 25, []) > 0)) {
            // line 981
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.5</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 72  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 988
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 988, $this->source); })()), 25, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 989
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 989, $this->source); })()), "getPriceByCode", [0 => "15.6.220.5"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 990
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 990, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 990, $this->source); })()), "getPriceByCode", [0 => "15.6.220.5"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 991
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 991, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 991, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 991, $this->source); })()), "getPriceByCode", [0 => "15.6.220.5"], "method"))]);
            // line 992
            echo "                                        </tr>
                                    ";
        }
        // line 994
        echo "                                    <tr>
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
        // line 1005
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1005, $this->source); })()), "numCircuiti", []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1006
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1006, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1007
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1007, $this->source); })()), "numCircuiti", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1007, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1008
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1008, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1008, $this->source); })()), "numCircuiti", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1008, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method"))]);
        // line 1009
        echo "                                    </tr>
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
                                        <td class=\"border text-center\">";
        // line 1020
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1020, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1020, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1020, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1020, $this->source); })()), 25, [])), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1021
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1021, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1022
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1022, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1022, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1022, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1022, $this->source); })()), 25, [])) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1022, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1023
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1023, $this->source); })()), [0 => ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1023, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1023, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1023, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1023, $this->source); })()), 25, [])) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1023, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method"))]);
        // line 1024
        echo "                                    </tr>


                                    ";
        // line 1027
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1027, $this->source); })()), 25, []) > 0)) {
            // line 1028
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
            // line 1038
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1038, $this->source); })()), 25, []), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1039
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1039, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1040
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1040, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1040, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 1041
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1041, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1041, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1041, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method"))]);
            // line 1042
            echo "                                    </tr>
                                    ";
        }
        // line 1044
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
        // line 1063
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1063, $this->source); })()), "pianiCasa", []) * 15) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1064
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1064, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1065
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1065, $this->source); })()), "pianiCasa", []) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1065, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1066
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1066, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1066, $this->source); })()), "pianiCasa", []) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1066, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method"))]);
        // line 1067
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
        // line 1078
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1078, $this->source); })()), "pianiCasa", []) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1079
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1079, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1080
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1080, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1080, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1081
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1081, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1081, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1081, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method"))]);
        // line 1082
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1090
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1090, $this->source); })()), "pianiCasa", []) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1091
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1091, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1092
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1092, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1092, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1093
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1093, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1093, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1093, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method"))]);
        // line 1094
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
        // line 1103
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1103, $this->source); })()), "pianiCasa", []) * 4), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1104
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1104, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1105
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1105, $this->source); })()), "pianiCasa", []) * 4) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1105, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1106
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1106, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1106, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1106, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method"))]);
        // line 1107
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
        // line 1116
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1116, $this->source); })()), "pianiCasa", []) * 2) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1117
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1117, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1118, $this->source); })()), "pianiCasa", []) * 2) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1118, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1119
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1119, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1119, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1119, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method"))]);
        // line 1120
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
        // line 1136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1136, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1137
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1137, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1138
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1138, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1138, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1139
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1139, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1139, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1139, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method"))]);
        // line 1140
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
        // line 1160
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1160, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1161
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1161, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1162
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1162, $this->source); })()), [0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1162, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method"))]);
        // line 1163
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
        // line 1177
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1177, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1178
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1178, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1179
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1179, $this->source); })()), [0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1179, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method"))]);
        // line 1180
        echo "                                    </tr>
                                    ";
        // line 1181
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1181, $this->source); })()), "spd", []) == "1")) {
            // line 1182
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1182, $this->source); })()), "trifase", []) == 0)) {
                // line 1183
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
                // line 1192
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1192, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1193
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1193, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1194
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1194, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1194, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
                // line 1195
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
                // line 1204
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1204, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1205
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1205, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1206
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1206, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1206, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method")]);
                // line 1207
                echo "                                            </tr>
                                        ";
            } else {
                // line 1209
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
                // line 1218
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1218, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1219
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1219, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1220
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1220, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1220, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
                // line 1221
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
                // line 1230
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1230, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1231
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1231, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method")), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1232
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1232, $this->source); })()), [0 => (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1232, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"))]);
                // line 1233
                echo "                                            </tr>
                                        ";
            }
            // line 1235
            echo "                                    ";
        } else {
            // line 1236
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1244
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1244, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1245
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1245, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1246
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1246, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1246, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method")]);
            // line 1247
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
            // line 1256
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1256, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1257
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1257, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1258
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1258, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1258, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
            // line 1259
            echo "                                        </tr>
                                    ";
        }
        // line 1261
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.5.260.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Pozzetto in resina completo di coperchio carrabile. 300x300mm
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">";
        // line 1269
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1269, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1270
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1270, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1271
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1271, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1271, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method")]);
        // line 1272
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
        // line 1283
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1283, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1284
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1284, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1285
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1285, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1285, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method")]);
        // line 1286
        echo "                                    </tr>
                                    ";
        // line 1287
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1287, $this->source); })()), "opereMurarie", []) == 0)) {
            // line 1288
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Escluse le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1296
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1296, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1297
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1297, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1298
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1298, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1298, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method")]);
            // line 1299
            echo "                                        </tr>
                                    ";
        } else {
            // line 1301
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Comprese le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1309
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1309, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1310
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1310, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1311
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1311, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1311, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method")]);
            // line 1312
            echo "                                        </tr>
                                    ";
        }
        // line 1314
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1314, $this->source); })()), "level", []) == 3)) {
            // line 1315
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
            // line 1327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1327, $this->source); })()), 8, []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">";
            // line 1329
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1329, $this->source); })()), 8, []) * 27), "html", null, true);
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
            // line 1340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1340, $this->source); })()), "pianiCasa", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">";
            // line 1342
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1342, $this->source); })()), "pianiCasa", []) * 40), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1345
        echo "
                                    <!-- INIZIO BLOCCHI AGGIONTE -->
                                    ";
        // line 1347
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1347, $this->source); })()), "opt1Enabled", []) == 1)) {
            // line 1348
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">1. PRIMA AGGIUNTA POSSIBILE: predisposizione per ingresso linee ENEL e TELECOM realizzate con cavidotto interrato. Le esatte misure verranno conteggiate alla fine dei lavori appena verranno definite le ubicazioni.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione tubazione esterna interrata per ingresso Linea telefonica. Misura ipotetica da verificare in loco.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Tubazione flessibile in polietilene a doppia parete. Diametro esterno 50 mm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1361, $this->source); })()), "opt11Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1362
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1362, $this->source); })()), "getPriceByCode", [0 => "15.5.210.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1363
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1363, $this->source); })()), "opt11Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1363, $this->source); })()), "getPriceByCode", [0 => "15.5.210.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.260.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Pozzetto in resina completo di coperchio carrabile 300 x 300 mm.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1372, $this->source); })()), "opt12Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1373
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1373, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1374
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1374, $this->source); })()), "opt12Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1374, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Ingresso linea cavi impianto elettrico misura stimata in base alla posizione comunicata del contatore ENEL.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.210.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Tubazione flessibile in polietilene a doppia parete. Diametro esterno 63 mm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1386, $this->source); })()), "opt13Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1387
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1387, $this->source); })()), "getPriceByCode", [0 => "15.5.210.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1388
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1388, $this->source); })()), "opt13Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1388, $this->source); })()), "getPriceByCode", [0 => "15.5.210.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.260.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Pozzetto in cemento completo di coperchio carrabile 300 x 300 mm.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1397, $this->source); })()), "opt14Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1398
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1398, $this->source); })()), "getPriceByCode", [0 => "15.5.260.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1399
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1399, $this->source); })()), "opt14Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1399, $this->source); })()), "getPriceByCode", [0 => "15.5.260.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1402
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1402, $this->source); })()), "opt2Enabled", []) == 1)) {
            // line 1403
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">2. SECONDA AGGIUNTA POSSIBILE: completamento predisposizione per domotica con Relè passo passo. I punti di comando, in questo caso, diventano in bassa tensione,<br> i frutti tutti pulsanti ed i cavi del tipo da utilizzare in impianti domotici. In futuro questa scelta eviterà di dover risfilare l'impianto e cambiare la serie civile.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.31</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, <br>E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Relè passo-passo 1 contatto 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1416
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1416, $this->source); })()), "opt21Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1417
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1417, $this->source); })()), "getPriceByCode", [0 => "15.6.170.31"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1418
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1418, $this->source); })()), "opt21Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1418, $this->source); })()), "getPriceByCode", [0 => "15.6.170.31"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.44</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, <br>E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Trasformatore BTS secondario 24V 40VA
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1427, $this->source); })()), "opt22Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1428
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1428, $this->source); })()), "getPriceByCode", [0 => "15.6.170.44"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1429
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1429, $this->source); })()), "opt22Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1429, $this->source); })()), "getPriceByCode", [0 => "15.6.170.44"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1432
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1432, $this->source); })()), "opt3Enabled", []) == 1)) {
            // line 1433
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">3. TERZA AGGIUNTA POSSIBILE: impianto di antenna satellitare, completo di antenna ed accessori, considerato per ogni punto Tv terrestre predisposto.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Impianto di ricezione SATELLITARE</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.171.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Impianto di ricezione di segnale TV satellitare costituito da antenna parabolica in alluminio, idonea alla ricezione di segnale TV satellitare,<br>
                                                    completa di palo e di sistemi di fissaggio su tetto, su parete o su copertura piana di qualsiasi natura, di cavi di collegamento fino all'impianto di amplificazione.<br>
                                                    Il tutto posto in opera con tutto quanto occorre per dare il lavoro finito, in copertura a qualsiasi altezza, incluse le eventuali opere murarie per il fissaggio <br>
                                                    ed il ripristino di eventuali parti  di copertura interessate. Per antenna parabolica di diametro pari a 80 cm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1449
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1449, $this->source); })()), "opt31Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1450
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1450, $this->source); })()), "getPriceByCode", [0 => "15.3.171.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1451
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1451, $this->source); })()), "opt31Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1451, $this->source); })()), "getPriceByCode", [0 => "15.3.171.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                            inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore ad un’uscita
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1461
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1461, $this->source); })()), "opt32Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1462
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1462, $this->source); })()), "getPriceByCode", [0 => "15.3.172.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1463
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1463, $this->source); })()), "opt32Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1463, $this->source); })()), "getPriceByCode", [0 => "15.3.172.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a due uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1473
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1473, $this->source); })()), "opt33Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1474
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1474, $this->source); })()), "getPriceByCode", [0 => "15.3.172.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1475
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1475, $this->source); })()), "opt33Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1475, $this->source); })()), "getPriceByCode", [0 => "15.3.172.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a quattro uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1485, $this->source); })()), "opt34Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1486
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1486, $this->source); })()), "getPriceByCode", [0 => "15.3.172.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1487
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1487, $this->source); })()), "opt34Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1487, $this->source); })()), "getPriceByCode", [0 => "15.3.172.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Impianto Satellitare Multiswitch centralizzato per più di 4 punti SATELLITE.\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.174.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese,<br>
                                                    completo di convertitore, alimentatore, con ingressi derivati dall'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e <br>
                                                    degli accessori necessari per dare l'opera finita e funzionante. Sistema base con multiswitch radiale a 4 uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1501
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1501, $this->source); })()), "opt35Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1502
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1502, $this->source); })()), "getPriceByCode", [0 => "15.3.174.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1503
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1503, $this->source); })()), "opt35Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1503, $this->source); })()), "getPriceByCode", [0 => "15.3.174.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a due uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1513
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1513, $this->source); })()), "opt36Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1514
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1514, $this->source); })()), "getPriceByCode", [0 => "15.3.172.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1515
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1515, $this->source); })()), "opt36Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1515, $this->source); })()), "getPriceByCode", [0 => "15.3.172.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese,<br>
                                                    completo di convertitore, alimentatore, con ingressi derivati dall'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e <br>
                                                    degli accessori necessari per dare l'opera finita e funzionante. Amplificazione  finale per alimentazione fino a 60 prese
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1526
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1526, $this->source); })()), "opt37Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1527
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1527, $this->source); })()), "getPriceByCode", [0 => "15.3.172.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1528
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1528, $this->source); })()), "opt37Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1528, $this->source); })()), "getPriceByCode", [0 => "15.3.172.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.110.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per presa di ricezione TV satellitare
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1537
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1537, $this->source); })()), "opt38Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1538
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1538, $this->source); })()), "getPriceByCode", [0 => "15.3.110.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1539
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1539, $this->source); })()), "opt38Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1539, $this->source); })()), "getPriceByCode", [0 => "15.3.110.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Cavo per dorsale Satellite.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.230.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1551
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1551, $this->source); })()), "opt39Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1552
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1552, $this->source); })()), "getPriceByCode", [0 => "15.4.230"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1553
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1553, $this->source); })()), "opt39Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1553, $this->source); })()), "getPriceByCode", [0 => "15.4.230"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1556
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1556, $this->source); })()), "opt4Enabled", []) == 1)) {
            // line 1557
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">4. QUARTA AGGIUNTA POSSIBILE: oneri di predisposizione per diffusione sonora per gli ambienti dell'abitazione\t\t\t\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione modulo comandi diffusione sonora.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1570
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1570, $this->source); })()), "opt41Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1571
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1571, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1572
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1572, $this->source); })()), "opt41Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1572, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1584, $this->source); })()), "opt42Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1586
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1586, $this->source); })()), "opt42Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 1589
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1599
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1599, $this->source); })()), "opt43Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1600
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1600, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1601
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1601, $this->source); })()), "opt43Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1601, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1604
        echo "                                    ";
        // line 1605
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1605, $this->source); })()), "opt5Enabled", []) == 1)) {
            // line 1606
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">5. QUINTA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto sorround soggiorno</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione modulo surround salone.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1619
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1619, $this->source); })()), "opt51Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1620
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1620, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1621
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1621, $this->source); })()), "opt51Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1621, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1633
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1633, $this->source); })()), "opt52Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1635
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1635, $this->source); })()), "opt52Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 1638
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1648
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1648, $this->source); })()), "opt53Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1649
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1649, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1650
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1650, $this->source); })()), "opt53Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1650, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1653
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1653, $this->source); })()), "opt6Enabled", []) == 1)) {
            // line 1654
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">6. SESTA AGGIUNTA POSSIBILE: connettorizzazione dei punti di trasmissione dati predisposti e conteggiati nella proposta C.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Connettorizzazione punti trasmissione dati.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.220.6</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>connettore tipo RJ45</strong> con cavo UTP cat. 6
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1667
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1667, $this->source); })()), "opt61Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1668
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1668, $this->source); })()), "getPriceByCode", [0 => "15.3.220.6"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1669
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1669, $this->source); })()), "opt61Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1669, $this->source); })()), "getPriceByCode", [0 => "15.3.220.6"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1672
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1672, $this->source); })()), "opt7Enabled", []) == 1)) {
            // line 1673
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">7. SETTIMA AGGIUNTA POSSIBILE: oneri di predisposizione per videosorveglianza esterna.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1686
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1686, $this->source); })()), "opt71Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1687
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1687, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1688
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1688, $this->source); })()), "opt71Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1688, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1700
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1700, $this->source); })()), "opt72Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1702
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1702, $this->source); })()), "opt72Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        ";
            // line 1708
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1715
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1715, $this->source); })()), "opt73Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1716
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1716, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1717
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1717, $this->source); })()), "opt73Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1717, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1720
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1720, $this->source); })()), "opt8Enabled", []) == 1)) {
            // line 1721
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">8. OTTAVA AGGIUNTA POSSIBILE: oneri di predisposizione per sistema di rilevazione allarme.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1734
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1734, $this->source); })()), "opt81Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1735
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1735, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1736
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1736, $this->source); })()), "opt81Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1736, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1748
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1748, $this->source); })()), "opt82Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1750
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1750, $this->source); })()), "opt82Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.</strong></td>
                                        </tr>
                                        ";
            // line 1756
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1763
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1763, $this->source); })()), "opt83Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1764
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1764, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1765
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1765, $this->source); })()), "opt83Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1765, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1768
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1768, $this->source); })()), "opt9Enabled", []) == 1)) {
            // line 1769
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">9. NONA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto di rilevazione fumi. \t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione rilevazione fumi\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1782
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1782, $this->source); })()), "opt91Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1783
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1783, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1784
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1784, $this->source); })()), "opt91Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1784, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1796
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1796, $this->source); })()), "opt92Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1798
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1798, $this->source); })()), "opt92Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t</strong></td>
                                        </tr>
                                        ";
            // line 1804
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1811
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1811, $this->source); })()), "opt93Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1812
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1812, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1813
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1813, $this->source); })()), "opt93Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1813, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1816
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1816, $this->source); })()), "opt10Enabled", []) == 1)) {
            // line 1817
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">10. DECIMA AGGIUNTA POSSIBILE: predisposizioni per rilevatori sonde allagamento e gas.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione sonde allagamento</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1830
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1830, $this->source); })()), "opt101Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1831
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1831, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1832
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1832, $this->source); })()), "opt101Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1832, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1844
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1844, $this->source); })()), "opt102Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1846
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1846, $this->source); })()), "opt102Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione elettrovalvola ACQUA</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1858
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1858, $this->source); })()), "opt103Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1859
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1859, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1860
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1860, $this->source); })()), "opt103Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1860, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1872
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1872, $this->source); })()), "opt104Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1874
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1874, $this->source); })()), "opt104Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione rilevatori gas</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1886
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1886, $this->source); })()), "opt105Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1887
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1887, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1888
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1888, $this->source); })()), "opt105Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1888, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1900
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1900, $this->source); })()), "opt106Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1902
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1902, $this->source); })()), "opt106Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione elettrovalvola GAS.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1914
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1914, $this->source); })()), "opt107Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1915
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1915, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1916
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1916, $this->source); })()), "opt107Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1916, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1928
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1928, $this->source); })()), "opt108Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1930
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1930, $this->source); })()), "opt108Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1942
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1942, $this->source); })()), "opt109Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1943
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1943, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1944
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1944, $this->source); })()), "opt109Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1944, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1947
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1947, $this->source); })()), "opt11Enabled", []) == 1)) {
            // line 1948
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">11. UNDICESIMA AGGIUNTA POSSIBILE: oneri di predisposizione per motorizzazione di tapparelle, persiane, zanzariere, tende e/o oscuranti.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1961
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1961, $this->source); })()), "opt111Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1962
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1962, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1963
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1963, $this->source); })()), "opt111Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1963, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1975
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1975, $this->source); })()), "opt112Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">";
            // line 1977
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1977, $this->source); })()), "opt112Value", []) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Canalizzazione per P.to Presa in traccia per distanza non superiori a 60 mt. Sono esclusi i conduttori e le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 1986
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1986, $this->source); })()), "opt113Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1987
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1987, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1988
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 1988, $this->source); })()), "opt113Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1988, $this->source); })()), "getPriceByCode", [0 => "15.3.10"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: <br>
                                                    la chiusura della traccia, l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati<br>
                                                    all'interno della traccia onde evitare uno spessore troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2000
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2000, $this->source); })()), "opt113Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\"> 5.70 </td>
                                            <td class=\"border text-center\">";
            // line 2002
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2002, $this->source); })()), "opt113Value", []) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t</strong></td>
                                        </tr>
                                        ";
            // line 2008
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2015
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2015, $this->source); })()), "opt114Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2016
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2016, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2017
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2017, $this->source); })()), "opt114Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2017, $this->source); })()), "getPriceByCode", [0 => "15.3.20.3"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 2020
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2020, $this->source); })()), "opt12Enabled", []) == 1)) {
            // line 2021
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">12. DODICESIMA AGGIUNTA POSSIBILE: oneri per passaggio cavi e collegamento di motorizzazioni per tapparelle, persiane, zanzariere, tende e/o oscuranti.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di motori monofasi o in c.c. di piccola potenza (serrande meccanizzate etc.).<br>
                                                    Con pulsante doppio senza chiave.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2035
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2035, $this->source); })()), "opt121Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2036
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2036, $this->source); })()), "getPriceByCode", [0 => "15.3.80.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2037
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2037, $this->source); })()), "opt121Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2037, $this->source); })()), "getPriceByCode", [0 => "15.3.80.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    COMPENSO AGGIUNTIVO AL PUNTO ALLACCIO ELETTRICO PER COLLEGAMENTO AD APPARECCHIATURA DI CONTROLLO E/O COMANDO. Per collegamento motore tenda
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2046
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2046, $this->source); })()), "opt122Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2047
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2047, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2048
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2048, $this->source); })()), "opt122Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2048, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.21.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO ALLACCIO PER PRESA MONOFASE O TRIFASE SU CANALIZZAZIONE IN TRACCIA O SU TUBAZIONE IN VISTA CON CAVO NON PROPAGANTE L'INCENDIO.<br>
                                                    Per allaccio monofase con carico max 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2058
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2058, $this->source); })()), "opt123Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2059
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2059, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2060
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2060, $this->source); })()), "opt123Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2060, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 2063
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2063, $this->source); })()), "opt13Enabled", []) == 1)) {
            // line 2064
            echo "                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">13. TREDICESIMA AGGIUNTA POSSIBILE: impianto citofonico (solo audio)\t\t\t\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di motori monofasi o in c.c. di piccola potenza (serrande meccanizzate etc.).<br>
                                                    Con pulsante doppio senza chiave.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2078
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2078, $this->source); })()), "opt121Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2079
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2079, $this->source); })()), "getPriceByCode", [0 => "15.3.80.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2080
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2080, $this->source); })()), "opt121Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2080, $this->source); })()), "getPriceByCode", [0 => "15.3.80.2"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    COMPENSO AGGIUNTIVO AL PUNTO ALLACCIO ELETTRICO PER COLLEGAMENTO AD APPARECCHIATURA DI CONTROLLO E/O COMANDO. Per collegamento motore tenda
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2089
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2089, $this->source); })()), "opt122Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2090
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2090, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2091
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2091, $this->source); })()), "opt122Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2091, $this->source); })()), "getPriceByCode", [0 => "15.2.42"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.21.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO ALLACCIO PER PRESA MONOFASE O TRIFASE SU CANALIZZAZIONE IN TRACCIA O SU TUBAZIONE IN VISTA CON CAVO NON PROPAGANTE L'INCENDIO.<br>
                                                    Per allaccio monofase con carico max 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 2101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2101, $this->source); })()), "opt123Value", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2102
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2102, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 2103
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemAdv"]) || array_key_exists("itemAdv", $context) ? $context["itemAdv"] : (function () { throw new Twig_Error_Runtime('Variable "itemAdv" does not exist.', 2103, $this->source); })()), "opt123Value", []) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 2103, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2)), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 2106
        echo "                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 2111
        $context["total"] = 0;
        // line 2112
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 2112, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 2113
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 2114
                echo "                                                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2114, $this->source); })()) + $context["column"]);
                // line 2115
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2116
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2117
        echo "                                            ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2117, $this->source); })()), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 2120
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 2120, $this->source); })()) != 0)) {
            // line 2121
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO ";
            // line 2123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2123, $this->source); })()), "sconto", []), "html", null, true);
            echo "%</td>
                                            <td class=\"border text-center\">
                                                ";
            // line 2125
            $context["sconto"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2125, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2125, $this->source); })()), "sconto", [])) / 100);
            // line 2126
            echo "                                                ";
            echo twig_escape_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 2126, $this->source); })()), "html", null, true);
            echo " €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 2133
            echo twig_escape_filter($this->env, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2133, $this->source); })()) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 2133, $this->source); })())), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 2137
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 2141
            $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 2141, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 2141, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 2141, $this->source); })()));
            echo " ";
            echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 2141, $this->source); })()), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 2145
        echo "                                    ";
        // line 2152
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

    // line 2164
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2165
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
        // line 2192
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

    // line 2258
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2259
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
        return array (  3878 => 2259,  3869 => 2258,  3794 => 2192,  3766 => 2165,  3757 => 2164,  3736 => 2152,  3734 => 2145,  3725 => 2141,  3719 => 2137,  3712 => 2133,  3701 => 2126,  3699 => 2125,  3694 => 2123,  3690 => 2121,  3688 => 2120,  3681 => 2117,  3675 => 2116,  3669 => 2115,  3666 => 2114,  3661 => 2113,  3656 => 2112,  3654 => 2111,  3647 => 2106,  3641 => 2103,  3637 => 2102,  3633 => 2101,  3620 => 2091,  3616 => 2090,  3612 => 2089,  3600 => 2080,  3596 => 2079,  3592 => 2078,  3576 => 2064,  3573 => 2063,  3567 => 2060,  3563 => 2059,  3559 => 2058,  3546 => 2048,  3542 => 2047,  3538 => 2046,  3526 => 2037,  3522 => 2036,  3518 => 2035,  3502 => 2021,  3499 => 2020,  3493 => 2017,  3489 => 2016,  3485 => 2015,  3476 => 2008,  3468 => 2002,  3463 => 2000,  3448 => 1988,  3444 => 1987,  3440 => 1986,  3428 => 1977,  3423 => 1975,  3408 => 1963,  3404 => 1962,  3400 => 1961,  3385 => 1948,  3382 => 1947,  3376 => 1944,  3372 => 1943,  3368 => 1942,  3353 => 1930,  3348 => 1928,  3333 => 1916,  3329 => 1915,  3325 => 1914,  3310 => 1902,  3305 => 1900,  3290 => 1888,  3286 => 1887,  3282 => 1886,  3267 => 1874,  3262 => 1872,  3247 => 1860,  3243 => 1859,  3239 => 1858,  3224 => 1846,  3219 => 1844,  3204 => 1832,  3200 => 1831,  3196 => 1830,  3181 => 1817,  3178 => 1816,  3172 => 1813,  3168 => 1812,  3164 => 1811,  3155 => 1804,  3147 => 1798,  3142 => 1796,  3127 => 1784,  3123 => 1783,  3119 => 1782,  3104 => 1769,  3101 => 1768,  3095 => 1765,  3091 => 1764,  3087 => 1763,  3078 => 1756,  3070 => 1750,  3065 => 1748,  3050 => 1736,  3046 => 1735,  3042 => 1734,  3027 => 1721,  3024 => 1720,  3018 => 1717,  3014 => 1716,  3010 => 1715,  3001 => 1708,  2993 => 1702,  2988 => 1700,  2973 => 1688,  2969 => 1687,  2965 => 1686,  2950 => 1673,  2947 => 1672,  2941 => 1669,  2937 => 1668,  2933 => 1667,  2918 => 1654,  2915 => 1653,  2909 => 1650,  2905 => 1649,  2901 => 1648,  2889 => 1638,  2884 => 1635,  2879 => 1633,  2864 => 1621,  2860 => 1620,  2856 => 1619,  2841 => 1606,  2838 => 1605,  2836 => 1604,  2830 => 1601,  2826 => 1600,  2822 => 1599,  2810 => 1589,  2805 => 1586,  2800 => 1584,  2785 => 1572,  2781 => 1571,  2777 => 1570,  2762 => 1557,  2759 => 1556,  2753 => 1553,  2749 => 1552,  2745 => 1551,  2730 => 1539,  2726 => 1538,  2722 => 1537,  2710 => 1528,  2706 => 1527,  2702 => 1526,  2688 => 1515,  2684 => 1514,  2680 => 1513,  2667 => 1503,  2663 => 1502,  2659 => 1501,  2642 => 1487,  2638 => 1486,  2634 => 1485,  2621 => 1475,  2617 => 1474,  2613 => 1473,  2600 => 1463,  2596 => 1462,  2592 => 1461,  2579 => 1451,  2575 => 1450,  2571 => 1449,  2553 => 1433,  2550 => 1432,  2544 => 1429,  2540 => 1428,  2536 => 1427,  2524 => 1418,  2520 => 1417,  2516 => 1416,  2501 => 1403,  2498 => 1402,  2492 => 1399,  2488 => 1398,  2484 => 1397,  2472 => 1388,  2468 => 1387,  2464 => 1386,  2449 => 1374,  2445 => 1373,  2441 => 1372,  2429 => 1363,  2425 => 1362,  2421 => 1361,  2406 => 1348,  2404 => 1347,  2400 => 1345,  2394 => 1342,  2389 => 1340,  2375 => 1329,  2370 => 1327,  2356 => 1315,  2353 => 1314,  2349 => 1312,  2347 => 1311,  2343 => 1310,  2339 => 1309,  2329 => 1301,  2325 => 1299,  2323 => 1298,  2319 => 1297,  2315 => 1296,  2305 => 1288,  2303 => 1287,  2300 => 1286,  2298 => 1285,  2294 => 1284,  2290 => 1283,  2277 => 1272,  2275 => 1271,  2271 => 1270,  2267 => 1269,  2257 => 1261,  2253 => 1259,  2251 => 1258,  2247 => 1257,  2243 => 1256,  2232 => 1247,  2230 => 1246,  2226 => 1245,  2222 => 1244,  2212 => 1236,  2209 => 1235,  2205 => 1233,  2203 => 1232,  2199 => 1231,  2195 => 1230,  2184 => 1221,  2182 => 1220,  2178 => 1219,  2174 => 1218,  2163 => 1209,  2159 => 1207,  2157 => 1206,  2153 => 1205,  2149 => 1204,  2138 => 1195,  2136 => 1194,  2132 => 1193,  2128 => 1192,  2117 => 1183,  2114 => 1182,  2112 => 1181,  2109 => 1180,  2107 => 1179,  2103 => 1178,  2099 => 1177,  2083 => 1163,  2081 => 1162,  2077 => 1161,  2073 => 1160,  2051 => 1140,  2049 => 1139,  2045 => 1138,  2041 => 1137,  2037 => 1136,  2019 => 1120,  2017 => 1119,  2013 => 1118,  2009 => 1117,  2005 => 1116,  1994 => 1107,  1992 => 1106,  1988 => 1105,  1984 => 1104,  1980 => 1103,  1969 => 1094,  1967 => 1093,  1963 => 1092,  1959 => 1091,  1955 => 1090,  1945 => 1082,  1943 => 1081,  1939 => 1080,  1935 => 1079,  1931 => 1078,  1918 => 1067,  1916 => 1066,  1912 => 1065,  1908 => 1064,  1904 => 1063,  1883 => 1044,  1879 => 1042,  1877 => 1041,  1873 => 1040,  1869 => 1039,  1865 => 1038,  1853 => 1028,  1851 => 1027,  1846 => 1024,  1844 => 1023,  1840 => 1022,  1836 => 1021,  1832 => 1020,  1819 => 1009,  1817 => 1008,  1813 => 1007,  1809 => 1006,  1805 => 1005,  1792 => 994,  1788 => 992,  1786 => 991,  1782 => 990,  1778 => 989,  1774 => 988,  1765 => 981,  1762 => 980,  1758 => 978,  1756 => 977,  1752 => 976,  1748 => 975,  1744 => 974,  1735 => 967,  1732 => 966,  1728 => 964,  1726 => 963,  1722 => 962,  1718 => 961,  1714 => 960,  1705 => 953,  1702 => 952,  1698 => 950,  1696 => 949,  1692 => 948,  1688 => 947,  1684 => 946,  1675 => 939,  1673 => 938,  1656 => 923,  1654 => 922,  1650 => 921,  1646 => 920,  1642 => 919,  1630 => 909,  1626 => 907,  1624 => 906,  1620 => 905,  1616 => 904,  1612 => 903,  1598 => 891,  1596 => 890,  1593 => 889,  1591 => 888,  1587 => 887,  1583 => 886,  1579 => 885,  1564 => 872,  1562 => 871,  1558 => 870,  1554 => 869,  1550 => 868,  1534 => 854,  1528 => 852,  1526 => 851,  1521 => 850,  1519 => 849,  1514 => 848,  1512 => 847,  1507 => 845,  1504 => 844,  1500 => 842,  1498 => 841,  1495 => 840,  1493 => 839,  1490 => 838,  1488 => 837,  1474 => 825,  1472 => 824,  1468 => 823,  1464 => 822,  1460 => 821,  1446 => 809,  1443 => 808,  1441 => 807,  1437 => 806,  1433 => 805,  1429 => 804,  1421 => 798,  1418 => 797,  1414 => 795,  1412 => 794,  1408 => 793,  1404 => 792,  1400 => 791,  1390 => 783,  1387 => 782,  1383 => 780,  1381 => 779,  1377 => 778,  1373 => 777,  1369 => 776,  1359 => 768,  1357 => 767,  1354 => 766,  1352 => 765,  1348 => 764,  1344 => 763,  1340 => 762,  1325 => 749,  1321 => 747,  1319 => 746,  1315 => 745,  1311 => 744,  1307 => 743,  1295 => 733,  1293 => 732,  1275 => 716,  1273 => 715,  1269 => 714,  1265 => 713,  1252 => 702,  1248 => 700,  1246 => 699,  1242 => 698,  1238 => 697,  1227 => 688,  1225 => 687,  1221 => 686,  1217 => 685,  1203 => 673,  1200 => 672,  1196 => 670,  1194 => 669,  1190 => 668,  1186 => 667,  1182 => 666,  1170 => 656,  1167 => 655,  1164 => 654,  1161 => 614,  1159 => 613,  1155 => 612,  1151 => 611,  1147 => 610,  1137 => 602,  1135 => 601,  1131 => 600,  1127 => 599,  1123 => 598,  1111 => 588,  1108 => 587,  1104 => 585,  1102 => 584,  1098 => 583,  1094 => 582,  1090 => 581,  1080 => 573,  1078 => 572,  1074 => 571,  1070 => 570,  1066 => 569,  1054 => 559,  1051 => 558,  1048 => 516,  1046 => 515,  1042 => 514,  1038 => 513,  1034 => 512,  1024 => 504,  1022 => 503,  1018 => 502,  1014 => 501,  1010 => 500,  1001 => 493,  998 => 492,  994 => 490,  992 => 489,  988 => 488,  984 => 487,  970 => 475,  968 => 474,  965 => 473,  963 => 472,  959 => 471,  955 => 470,  941 => 458,  939 => 457,  936 => 456,  934 => 455,  930 => 454,  926 => 453,  912 => 441,  910 => 440,  907 => 439,  905 => 438,  901 => 437,  897 => 436,  877 => 418,  874 => 417,  870 => 415,  868 => 414,  864 => 413,  860 => 412,  856 => 411,  846 => 403,  843 => 402,  839 => 400,  837 => 399,  833 => 398,  829 => 397,  825 => 396,  815 => 388,  812 => 387,  808 => 385,  806 => 384,  802 => 383,  798 => 382,  794 => 381,  784 => 373,  782 => 372,  779 => 371,  777 => 370,  773 => 369,  769 => 368,  765 => 367,  750 => 354,  745 => 351,  743 => 350,  739 => 349,  735 => 348,  731 => 347,  722 => 340,  719 => 339,  715 => 337,  713 => 336,  709 => 335,  705 => 334,  701 => 333,  692 => 326,  690 => 325,  687 => 324,  685 => 323,  681 => 322,  677 => 321,  673 => 320,  663 => 312,  659 => 310,  657 => 309,  653 => 308,  649 => 307,  645 => 306,  635 => 298,  632 => 297,  628 => 295,  626 => 294,  622 => 293,  618 => 292,  614 => 291,  604 => 283,  601 => 282,  597 => 280,  595 => 279,  591 => 278,  587 => 277,  583 => 276,  573 => 268,  571 => 267,  568 => 266,  566 => 265,  562 => 264,  558 => 263,  554 => 262,  543 => 253,  541 => 252,  537 => 251,  533 => 250,  529 => 249,  515 => 237,  511 => 235,  509 => 234,  505 => 233,  501 => 232,  497 => 231,  488 => 224,  485 => 223,  481 => 221,  479 => 220,  475 => 219,  471 => 218,  467 => 217,  457 => 209,  454 => 208,  450 => 206,  448 => 205,  444 => 204,  440 => 203,  436 => 202,  426 => 194,  423 => 193,  419 => 191,  417 => 190,  413 => 189,  409 => 188,  405 => 187,  395 => 179,  392 => 178,  388 => 176,  386 => 175,  382 => 174,  378 => 173,  374 => 172,  365 => 165,  363 => 164,  360 => 163,  358 => 162,  354 => 161,  350 => 160,  346 => 159,  335 => 150,  333 => 149,  329 => 148,  325 => 147,  321 => 146,  296 => 123,  292 => 121,  290 => 120,  286 => 119,  282 => 118,  278 => 117,  268 => 109,  265 => 108,  262 => 107,  260 => 106,  255 => 104,  251 => 103,  247 => 102,  237 => 94,  234 => 93,  230 => 91,  228 => 90,  224 => 89,  220 => 88,  216 => 87,  206 => 79,  204 => 78,  201 => 77,  199 => 76,  195 => 75,  191 => 74,  187 => 73,  176 => 64,  174 => 63,  170 => 62,  166 => 61,  162 => 60,  145 => 45,  143 => 44,  125 => 28,  119 => 27,  110 => 24,  105 => 23,  100 => 22,  96 => 21,  84 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                        <a href=\"{{ url('mostra_preventivo_avanzato', {'pid': item.pid}) }}\" class=\"btn btn-secondary btn-sm float-right \">
                            <i class=\"fa fa-chevron-left mr-0\"></i> &nbsp; Indietro
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
                                        <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.12.2')|number_format(2)  }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.8 * fun.getPriceByCode('15.1.12.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.8 * fun.getPriceByCode('15.1.12.2')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.8 * fun.getPriceByCode('15.1.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.8 * fun.getPriceByCode('15.1.1')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.3.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.8 * fun.getPriceByCode('15.1.3.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.8 * fun.getPriceByCode('15.1.3.1')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.4.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.8 * fun.getPriceByCode('15.1.4.1'))|number_format(2) }}</td>
                                        </tr>
                                        {% set prices = prices|merge([itemsArray.8 * fun.getPriceByCode('15.1.4.1')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.5.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.8 * fun.getPriceByCode('15.1.5.1'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.8 * fun.getPriceByCode('15.1.5.1')]) %}
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
                                        <td class=\"border text-center\">{{ itemsArray.6 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.15.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.6 * fun.getPriceByCode('15.1.15.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.6 * fun.getPriceByCode('15.1.15.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.6 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.2')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.6 * fun.getPriceByCode('15.1.2'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.6 * fun.getPriceByCode('15.1.2')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.6 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.3.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.6 * fun.getPriceByCode('15.1.3.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.6 * fun.getPriceByCode('15.1.3.2')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.6 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.4.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.6 * fun.getPriceByCode('15.1.4.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.6 * fun.getPriceByCode('15.1.4.2')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.6 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.1.5.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.6 * fun.getPriceByCode('15.1.5.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.6 * fun.getPriceByCode('15.1.5.2')]) %}
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
                                        <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.21.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.21.1')]) %}
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.1')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.2'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.2')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.3'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.3')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.4')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.4'))|number_format(2) }}</td>
                                            {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.4')]) %}
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
                                        <td class=\"border text-center\">{{ itemsArray.1 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.41.3')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.1 * fun.getPriceByCode('15.2.41.3'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.1 * fun.getPriceByCode('15.2.41.3')]) %}
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
                                        {% if itemsArray.43 < 5 %}
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
                                        {% elseif itemsArray.43 > 6 and itemsArray.43 < 10 %}
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
                                        {% elseif itemsArray.43 > 11 and itemsArray.43 < 15 %}
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
                                        <td class=\"border text-center\">{{ itemsArray.43 }}</td>
                                        <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.110.1')|number_format(2) }}</td>
                                        <td class=\"border text-center\">{{ (itemsArray.43 * fun.getPriceByCode('15.3.110.1'))|number_format(2) }}</td>
                                        {% set prices = prices|merge([itemsArray.43 * fun.getPriceByCode('15.3.110.1')]) %}
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
                                            <td class=\"border text-center\">{{ itemsArray.43 }}</td>
                                            <td class=\"border text-center\">8</td>
                                            <td class=\"border text-center\">{{ itemsArray.43  * 8}}</td>
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
                                            <td class=\"border text-center\">{{ itemsArray.43 }}</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">{{ itemsArray.43 * 12.9 }}</td>
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
                                            <td class=\"border text-center\">{{ itemsArray.43 }}</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">{{ itemsArray.43  * 12.1}}</td>
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
                                                <td class=\"border text-center\">{{ itemsArray.43 }}</td>
                                                <td class=\"border text-center\">12.9</td>
                                                <td class=\"border text-center\">{{ itemsArray.43 * 12.9 }}</td>
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
                                            <td class=\"border text-center\">{{ itemsArray.8 }}</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">{{ itemsArray.8 * 27 }}</td>
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

                                    <!-- INIZIO BLOCCHI AGGIONTE -->
                                    {% if itemAdv.opt1Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">1. PRIMA AGGIUNTA POSSIBILE: predisposizione per ingresso linee ENEL e TELECOM realizzate con cavidotto interrato. Le esatte misure verranno conteggiate alla fine dei lavori appena verranno definite le ubicazioni.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione tubazione esterna interrata per ingresso Linea telefonica. Misura ipotetica da verificare in loco.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Tubazione flessibile in polietilene a doppia parete. Diametro esterno 50 mm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt11Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.210.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt11Value * fun.getPriceByCode('15.5.210.1')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.260.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Pozzetto in resina completo di coperchio carrabile 300 x 300 mm.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt12Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.260.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt12Value * fun.getPriceByCode('15.5.260.1')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Ingresso linea cavi impianto elettrico misura stimata in base alla posizione comunicata del contatore ENEL.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.210.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Tubazione flessibile in polietilene a doppia parete. Diametro esterno 63 mm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt13Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.210.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt13Value * fun.getPriceByCode('15.5.210.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.5.260.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Pozzetto in cemento completo di coperchio carrabile 300 x 300 mm.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt14Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.5.260.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt14Value * fun.getPriceByCode('15.5.260.3')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt2Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">2. SECONDA AGGIUNTA POSSIBILE: completamento predisposizione per domotica con Relè passo passo. I punti di comando, in questo caso, diventano in bassa tensione,<br> i frutti tutti pulsanti ed i cavi del tipo da utilizzare in impianti domotici. In futuro questa scelta eviterà di dover risfilare l'impianto e cambiare la serie civile.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Relè Passo Passo ed alimentatori già suddivisi per piano: NECESSARI PER LA GESTIONE DELL'ILLUMINAZIONE IN BASSA TENSIONE\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.31</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, <br>E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Relè passo-passo 1 contatto 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt21Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.170.31')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt21Value * fun.getPriceByCode('15.6.170.31')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.6.170.44</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, <br>E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Trasformatore BTS secondario 24V 40VA
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt22Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.6.170.44')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt22Value * fun.getPriceByCode('15.6.170.44')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt3Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">3. TERZA AGGIUNTA POSSIBILE: impianto di antenna satellitare, completo di antenna ed accessori, considerato per ogni punto Tv terrestre predisposto.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Impianto di ricezione SATELLITARE</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.171.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Impianto di ricezione di segnale TV satellitare costituito da antenna parabolica in alluminio, idonea alla ricezione di segnale TV satellitare,<br>
                                                    completa di palo e di sistemi di fissaggio su tetto, su parete o su copertura piana di qualsiasi natura, di cavi di collegamento fino all'impianto di amplificazione.<br>
                                                    Il tutto posto in opera con tutto quanto occorre per dare il lavoro finito, in copertura a qualsiasi altezza, incluse le eventuali opere murarie per il fissaggio <br>
                                                    ed il ripristino di eventuali parti  di copertura interessate. Per antenna parabolica di diametro pari a 80 cm
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt31Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.171.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt31Value * fun.getPriceByCode('15.3.171.1')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                            inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore ad un’uscita
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt32Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.172.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt32Value * fun.getPriceByCode('15.3.172.1')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a due uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt33Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.172.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt33Value * fun.getPriceByCode('15.3.172.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a quattro uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt34Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.172.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt34Value * fun.getPriceByCode('15.3.172.3')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Impianto Satellitare Multiswitch centralizzato per più di 4 punti SATELLITE.\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.174.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese,<br>
                                                    completo di convertitore, alimentatore, con ingressi derivati dall'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e <br>
                                                    degli accessori necessari per dare l'opera finita e funzionante. Sistema base con multiswitch radiale a 4 uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt35Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.174.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt35Value * fun.getPriceByCode('15.3.174.1')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto,<br>
                                                    inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l'opera finita e funzionante. Convertitore a due uscite
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt36Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.172.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt36Value * fun.getPriceByCode('15.3.172.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.172.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese,<br>
                                                    completo di convertitore, alimentatore, con ingressi derivati dall'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e <br>
                                                    degli accessori necessari per dare l'opera finita e funzionante. Amplificazione  finale per alimentazione fino a 60 prese
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt37Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.172.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt37Value * fun.getPriceByCode('15.3.172.3')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.110.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per presa di ricezione TV satellitare
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt38Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.110.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt38Value * fun.getPriceByCode('15.3.110.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Cavo per dorsale Satellite.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.230.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt39Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.4.230')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt39Value * fun.getPriceByCode('15.4.230')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt4Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">4. QUARTA AGGIUNTA POSSIBILE: oneri di predisposizione per diffusione sonora per gli ambienti dell'abitazione\t\t\t\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione modulo comandi diffusione sonora.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt41Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt41Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt42Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt42Value * 8 }}</td>
                                        </tr>
                                        {# TODO: Gestire maggiorazioni a seconda del tipo op #}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt43Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt43Value * fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {# TODO inserisci OPT5#}
                                    {% if itemAdv.opt5Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">5. QUINTA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto sorround soggiorno</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione modulo surround salone.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt51Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt51Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt52Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt52Value * 8 }}</td>
                                        </tr>
                                        {# TODO: Gestire maggiorazioni a seconda del tipo op #}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt53Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt53Value * fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt6Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">6. SESTA AGGIUNTA POSSIBILE: connettorizzazione dei punti di trasmissione dati predisposti e conteggiati nella proposta C.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Connettorizzazione punti trasmissione dati.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.220.6</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per <strong>connettore tipo RJ45</strong> con cavo UTP cat. 6
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt61Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.220.6')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt61Value * fun.getPriceByCode('15.3.220.6')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt7Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">7. SETTIMA AGGIUNTA POSSIBILE: oneri di predisposizione per videosorveglianza esterna.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt71Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt71Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt72Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt72Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        {# TODO gestisci op #}
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt73Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt73Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt8Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">8. OTTAVA AGGIUNTA POSSIBILE: oneri di predisposizione per sistema di rilevazione allarme.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione videosorveglianza</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt81Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt81Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt82Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt82Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.</strong></td>
                                        </tr>
                                        {# TODO gestisci op #}
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt83Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt83Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt9Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">9. NONA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto di rilevazione fumi. \t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione rilevazione fumi\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt91Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt91Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt92Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt92Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t</strong></td>
                                        </tr>
                                        {# TODO gestisci op #}
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt93Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt93Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt10Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">10. DECIMA AGGIUNTA POSSIBILE: predisposizioni per rilevatori sonde allagamento e gas.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione sonde allagamento</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt101Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt101Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt102Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt102Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione elettrovalvola ACQUA</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt103Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt103Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt104Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt104Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione rilevatori gas</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt105Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt105Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt106Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt106Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione elettrovalvola GAS.</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt107Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt107Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt108Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt108Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t\t\t\t</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt109Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt109Value * fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt11Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">11. UNDICESIMA AGGIUNTA POSSIBILE: oneri di predisposizione per motorizzazione di tapparelle, persiane, zanzariere, tende e/o oscuranti.\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.10</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt111Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt111Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: la chiusura della traccia,<br>
                                                    l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati all'interno della traccia onde evitare uno spessore<br>
                                                    troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt112Value }}</td>
                                            <td class=\"border text-center\"> 8.00 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt112Value * 8 }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Canalizzazione per P.to Presa in traccia per distanza non superiori a 60 mt. Sono esclusi i conduttori e le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt113Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt113Value * fun.getPriceByCode('15.3.10')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">N.P.10_PS</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa per opere murarie su murature NON Intonacate o fissaggio con collari<br>
                                                    e/o schiume poliuretaniche su pannelli in cartongesso, fibrocemento, fibrolegno e pannellature similari. Sono esclusi: <br>
                                                    la chiusura della traccia, l’intonaco, la rasatura e la tinteggiatura.  Nella muratura i corrugati vengono solamente fissati<br>
                                                    all'interno della traccia onde evitare uno spessore troppo alto che vada poi a discapito dell'intonaco stesso.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt113Value }}</td>
                                            <td class=\"border text-center\"> 5.70 </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt113Value * 5.7 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>MAGGIORAZIONE per tracce su pietra per PUNTI PRESA di SERVIZIO.\t</strong></td>
                                        </tr>
                                        {# TODO gestisci op #}
                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt114Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt114Value * fun.getPriceByCode('15.3.20.3')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt12Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">12. DODICESIMA AGGIUNTA POSSIBILE: oneri per passaggio cavi e collegamento di motorizzazioni per tapparelle, persiane, zanzariere, tende e/o oscuranti.</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di motori monofasi o in c.c. di piccola potenza (serrande meccanizzate etc.).<br>
                                                    Con pulsante doppio senza chiave.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt121Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.80.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt121Value * fun.getPriceByCode('15.3.80.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    COMPENSO AGGIUNTIVO AL PUNTO ALLACCIO ELETTRICO PER COLLEGAMENTO AD APPARECCHIATURA DI CONTROLLO E/O COMANDO. Per collegamento motore tenda
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt122Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.42')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt122Value * fun.getPriceByCode('15.2.42')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.21.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO ALLACCIO PER PRESA MONOFASE O TRIFASE SU CANALIZZAZIONE IN TRACCIA O SU TUBAZIONE IN VISTA CON CAVO NON PROPAGANTE L'INCENDIO.<br>
                                                    Per allaccio monofase con carico max 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt123Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt123Value * fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if itemAdv.opt13Enabled == 1 %}
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\">13. TREDICESIMA AGGIUNTA POSSIBILE: impianto citofonico (solo audio)\t\t\t\t</td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"5\" class=\"border table-light\"><strong>Predisposizione motori</strong></td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.80.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per impianto di comando di motori monofasi o in c.c. di piccola potenza (serrande meccanizzate etc.).<br>
                                                    Con pulsante doppio senza chiave.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt121Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.3.80.2')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt121Value * fun.getPriceByCode('15.3.80.2')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    COMPENSO AGGIUNTIVO AL PUNTO ALLACCIO ELETTRICO PER COLLEGAMENTO AD APPARECCHIATURA DI CONTROLLO E/O COMANDO. Per collegamento motore tenda
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt122Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.42')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt122Value * fun.getPriceByCode('15.2.42')|number_format(2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.2.21.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    PUNTO ALLACCIO PER PRESA MONOFASE O TRIFASE SU CANALIZZAZIONE IN TRACCIA O SU TUBAZIONE IN VISTA CON CAVO NON PROPAGANTE L'INCENDIO.<br>
                                                    Per allaccio monofase con carico max 16A
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemAdv.opt123Value }}</td>
                                            <td class=\"border text-center\">{{ fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
                                            <td class=\"border text-center\">{{ itemAdv.opt123Value * fun.getPriceByCode('15.2.21.1')|number_format(2) }}</td>
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
