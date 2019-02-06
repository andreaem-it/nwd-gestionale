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
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 61, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 62, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 62, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 63
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 63, $this->source); })()), [0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 63, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 63, $this->source); })()), "getPriceByCode", [0 => "15.1.12.2"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 74, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 75, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 75, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 76
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 76, $this->source); })()), [0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 76, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 76, $this->source); })()), "getPriceByCode", [0 => "15.1.1"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 88, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 89
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 89, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 89, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 90
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 90, $this->source); })()), [0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 90, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 90, $this->source); })()), "getPriceByCode", [0 => "15.1.3.1"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 103
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 103, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 104, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 104, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method")), 2), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 106
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 106, $this->source); })()), [0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 106, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 106, $this->source); })()), "getPriceByCode", [0 => "15.1.4.1"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 117, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 118
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 118, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 119, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 119, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 120
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 120, $this->source); })()), [0 => ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 120, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 120, $this->source); })()), "getPriceByCode", [0 => "15.1.5.1"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 147
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 147, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 148
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 148, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 148, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 149
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 149, $this->source); })()), [0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 149, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 149, $this->source); })()), "getPriceByCode", [0 => "15.1.15.1"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 160
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 160, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 161
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 161, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 161, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 162
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 162, $this->source); })()), [0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 162, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 162, $this->source); })()), "getPriceByCode", [0 => "15.1.2"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 187, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 188
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 188, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 189
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 189, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 189, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 190
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 190, $this->source); })()), [0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 190, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 190, $this->source); })()), "getPriceByCode", [0 => "15.1.3.2"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 202, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 203
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 203, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 204
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 204, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 204, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 205
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 205, $this->source); })()), [0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 205, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 205, $this->source); })()), "getPriceByCode", [0 => "15.1.4.2"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 217, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 218
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 218, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 219, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 219, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 220
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 220, $this->source); })()), [0 => ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 220, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 220, $this->source); })()), "getPriceByCode", [0 => "15.1.5.2"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 249, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 250
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 250, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 251
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 251, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 251, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 252
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 252, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 252, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 252, $this->source); })()), "getPriceByCode", [0 => "15.2.21.1"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 262, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 263
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 263, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 264
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 264, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 264, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 265
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 265, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 265, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 265, $this->source); })()), "getPriceByCode", [0 => "15.2.1"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 276, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 277
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 277, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 278
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 278, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 278, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 279
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 279, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 279, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 279, $this->source); })()), "getPriceByCode", [0 => "15.2.2"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 291, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 292
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 292, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 293
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 293, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 293, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 294
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 294, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 294, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 294, $this->source); })()), "getPriceByCode", [0 => "15.2.3"], "method"))]);
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
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 306, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 307
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 307, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 308
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 308, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 308, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method")), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 309
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 309, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 309, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 309, $this->source); })()), "getPriceByCode", [0 => "15.2.4"], "method"))]);
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
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 320, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 321
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 321, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 322
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 322, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 322, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 323
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 323, $this->source); })()), [0 => ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 323, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 323, $this->source); })()), "getPriceByCode", [0 => "15.2.41.3"], "method"))]);
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
            if (((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 440, $this->source); })()) < 5)) {
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
            } elseif (((            // line 457
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 457, $this->source); })()) > 6) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 457, $this->source); })()) < 10))) {
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
            } elseif (((            // line 474
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 474, $this->source); })()) > 11) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 474, $this->source); })()) < 15))) {
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
        echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 500, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 501
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 501, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 502
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 502, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 502, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 503
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 503, $this->source); })()), [0 => ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 503, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 503, $this->source); })()), "getPriceByCode", [0 => "15.3.110.1"], "method"))]);
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
        // line 1004
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1004, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1004, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1004, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1004, $this->source); })()), 25, [])), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1005
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1005, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1006
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1006, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1006, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1006, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1006, $this->source); })()), 25, [])) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1006, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1007
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1007, $this->source); })()), [0 => ((((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 22, []) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 23, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 24, [])) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1007, $this->source); })()), 25, [])) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1007, $this->source); })()), "getPriceByCode", [0 => "15.6.10.8"], "method"))]);
        // line 1008
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
        // line 1020
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1020, $this->source); })()), "numCircuiti", []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1021
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1021, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1022
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1022, $this->source); })()), "numCircuiti", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1022, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1023
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1023, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1023, $this->source); })()), "numCircuiti", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1023, $this->source); })()), "getPriceByCode", [0 => "15.6.52.1"], "method"))]);
        // line 1024
        echo "                                    </tr>

                                    ";
        // line 1026
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1026, $this->source); })()), 25, []) > 0)) {
            // line 1027
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
            // line 1037
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1037, $this->source); })()), 25, []), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1038
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1038, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method"), 2), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">";
            // line 1039
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1039, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1039, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method")), 2), "html", null, true);
            echo "</td>
                                        ";
            // line 1040
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1040, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 1040, $this->source); })()), 25, []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1040, $this->source); })()), "getPriceByCode", [0 => "15.06.10.8"], "method"))]);
            // line 1041
            echo "                                    </tr>
                                    ";
        }
        // line 1043
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
        // line 1062
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1062, $this->source); })()), "pianiCasa", []) * 15) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1063
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1063, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1064
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1064, $this->source); })()), "pianiCasa", []) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1064, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1065
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1065, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1065, $this->source); })()), "pianiCasa", []) * 15) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1065, $this->source); })()), "getPriceByCode", [0 => "15.4.110.12"], "method"))]);
        // line 1066
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
        // line 1077
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1077, $this->source); })()), "pianiCasa", []) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1078
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1078, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1079
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1079, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1079, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1080
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1080, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1080, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1080, $this->source); })()), "getPriceByCode", [0 => "15.5.10.3"], "method"))]);
        // line 1081
        echo "                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 1089
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1089, $this->source); })()), "pianiCasa", []) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1090
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1090, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1091
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1091, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1091, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1092
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1092, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1092, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1092, $this->source); })()), "getPriceByCode", [0 => "15.5.10.4"], "method"))]);
        // line 1093
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
        // line 1102
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1102, $this->source); })()), "pianiCasa", []) * 4), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1103
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1103, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1104
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1104, $this->source); })()), "pianiCasa", []) * 4) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1104, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1105
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1105, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1105, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1105, $this->source); })()), "getPriceByCode", [0 => "15.5.180.1"], "method"))]);
        // line 1106
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
        // line 1115
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1115, $this->source); })()), "pianiCasa", []) * 2) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1116
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1116, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1117
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1117, $this->source); })()), "pianiCasa", []) * 2) * 3) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1117, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1118
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1118, $this->source); })()), [0 => (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1118, $this->source); })()), "pianiCasa", []) * 15) * 2) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1118, $this->source); })()), "getPriceByCode", [0 => "15.5.180.2"], "method"))]);
        // line 1119
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
        // line 1135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1135, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1136, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1137
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1137, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1137, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1138
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1138, $this->source); })()), [0 => (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1138, $this->source); })()), "pianiCasa", []) * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1138, $this->source); })()), "getPriceByCode", [0 => "15.5.80.8"], "method"))]);
        // line 1139
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
        // line 1159
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1159, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1160
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1160, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1161
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1161, $this->source); })()), [0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1161, $this->source); })()), "getPriceByCode", [0 => "15.4.21.40"], "method"))]);
        // line 1162
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
        // line 1176
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1176, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1177
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1177, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method")), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1178
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1178, $this->source); })()), [0 => (20 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1178, $this->source); })()), "getPriceByCode", [0 => "15.4.110.10"], "method"))]);
        // line 1179
        echo "                                    </tr>
                                    ";
        // line 1180
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1180, $this->source); })()), "spd", []) == "1")) {
            // line 1181
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1181, $this->source); })()), "trifase", []) == 0)) {
                // line 1182
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
                // line 1191
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1191, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1192
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1192, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1193
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1193, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1193, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
                // line 1194
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
                // line 1203
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1203, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1204
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1204, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1205
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1205, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1205, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method")]);
                // line 1206
                echo "                                            </tr>
                                        ";
            } else {
                // line 1208
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
                // line 1217
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1217, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1218
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1218, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1219
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1219, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1219, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
                // line 1220
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
                // line 1229
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1229, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"), 2), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">";
                // line 1230
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1230, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method")), 2), "html", null, true);
                echo "</td>
                                                ";
                // line 1231
                $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1231, $this->source); })()), [0 => (3 * twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1231, $this->source); })()), "getPriceByCode", [0 => "15.7.202"], "method"))]);
                // line 1232
                echo "                                            </tr>
                                        ";
            }
            // line 1234
            echo "                                    ";
        } else {
            // line 1235
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1243
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1243, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1244
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1244, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1245
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1245, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1245, $this->source); })()), "getPriceByCode", [0 => "15.7.204.4"], "method")]);
            // line 1246
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
            // line 1255
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1255, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1256
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1256, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1257
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1257, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1257, $this->source); })()), "getPriceByCode", [0 => "15.7.201"], "method")]);
            // line 1258
            echo "                                        </tr>
                                    ";
        }
        // line 1260
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.5.260.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Pozzetto in resina completo di coperchio carrabile. 300x300mm
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">";
        // line 1268
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1268, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1269
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1269, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1270
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1270, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1270, $this->source); })()), "getPriceByCode", [0 => "15.5.260.1"], "method")]);
        // line 1271
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
        // line 1282
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1282, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">";
        // line 1283
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1283, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method"), 2), "html", null, true);
        echo "</td>
                                        ";
        // line 1284
        $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1284, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1284, $this->source); })()), "getPriceByCode", [0 => "15.7.60.1"], "method")]);
        // line 1285
        echo "                                    </tr>
                                    ";
        // line 1286
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1286, $this->source); })()), "opereMurarie", []) == 0)) {
            // line 1287
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Escluse le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1295
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1295, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1296
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1296, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1297
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1297, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1297, $this->source); })()), "getPriceByCode", [0 => "15.2.160.1"], "method")]);
            // line 1298
            echo "                                        </tr>
                                    ";
        } else {
            // line 1300
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Comprese le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">";
            // line 1308
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1308, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">";
            // line 1309
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1309, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method"), 2), "html", null, true);
            echo "</td>
                                            ";
            // line 1310
            $context["prices"] = twig_array_merge((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1310, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["fun"]) || array_key_exists("fun", $context) ? $context["fun"] : (function () { throw new Twig_Error_Runtime('Variable "fun" does not exist.', 1310, $this->source); })()), "getPriceByCode", [0 => "15.2.160.2"], "method")]);
            // line 1311
            echo "                                        </tr>
                                    ";
        }
        // line 1313
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1313, $this->source); })()), "level", []) == 3)) {
            // line 1314
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
            // line 1326
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1326, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">";
            // line 1328
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1328, $this->source); })()) * 27), "html", null, true);
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
            // line 1339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1339, $this->source); })()), "pianiCasa", []), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">";
            // line 1341
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1341, $this->source); })()), "pianiCasa", []) * 40), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1344
        echo "
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 1350
        $context["total"] = 0;
        // line 1351
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1351, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 1352
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 1353
                echo "                                                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1353, $this->source); })()) + $context["column"]);
                // line 1354
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1355
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1356
        echo "                                            ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1356, $this->source); })()), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 1359
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1359, $this->source); })()) != 0)) {
            // line 1360
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO ";
            // line 1362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1362, $this->source); })()), "sconto", []), "html", null, true);
            echo "%</td>
                                            <td class=\"border text-center\">
                                                ";
            // line 1364
            $context["sconto"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1364, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1364, $this->source); })()), "sconto", [])) / 100);
            // line 1365
            echo "                                                ";
            echo twig_escape_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1365, $this->source); })()), "html", null, true);
            echo " €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1372
            echo twig_escape_filter($this->env, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1372, $this->source); })()) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1372, $this->source); })())), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1376
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1380
            $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1380, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1380, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1380, $this->source); })()));
            echo " ";
            echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 1380, $this->source); })()), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 1384
        echo "                                    ";
        if ($this->env->isDebug()) {
            // line 1391
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 1391, $this->source); })()));
        }
        // line 1392
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

    // line 1404
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1405
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
        // line 1432
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

    // line 1498
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1499
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
        return array (  2635 => 1499,  2626 => 1498,  2551 => 1432,  2523 => 1405,  2514 => 1404,  2493 => 1392,  2490 => 1391,  2487 => 1384,  2478 => 1380,  2472 => 1376,  2465 => 1372,  2454 => 1365,  2452 => 1364,  2447 => 1362,  2443 => 1360,  2441 => 1359,  2434 => 1356,  2428 => 1355,  2422 => 1354,  2419 => 1353,  2414 => 1352,  2409 => 1351,  2407 => 1350,  2399 => 1344,  2393 => 1341,  2388 => 1339,  2374 => 1328,  2369 => 1326,  2355 => 1314,  2352 => 1313,  2348 => 1311,  2346 => 1310,  2342 => 1309,  2338 => 1308,  2328 => 1300,  2324 => 1298,  2322 => 1297,  2318 => 1296,  2314 => 1295,  2304 => 1287,  2302 => 1286,  2299 => 1285,  2297 => 1284,  2293 => 1283,  2289 => 1282,  2276 => 1271,  2274 => 1270,  2270 => 1269,  2266 => 1268,  2256 => 1260,  2252 => 1258,  2250 => 1257,  2246 => 1256,  2242 => 1255,  2231 => 1246,  2229 => 1245,  2225 => 1244,  2221 => 1243,  2211 => 1235,  2208 => 1234,  2204 => 1232,  2202 => 1231,  2198 => 1230,  2194 => 1229,  2183 => 1220,  2181 => 1219,  2177 => 1218,  2173 => 1217,  2162 => 1208,  2158 => 1206,  2156 => 1205,  2152 => 1204,  2148 => 1203,  2137 => 1194,  2135 => 1193,  2131 => 1192,  2127 => 1191,  2116 => 1182,  2113 => 1181,  2111 => 1180,  2108 => 1179,  2106 => 1178,  2102 => 1177,  2098 => 1176,  2082 => 1162,  2080 => 1161,  2076 => 1160,  2072 => 1159,  2050 => 1139,  2048 => 1138,  2044 => 1137,  2040 => 1136,  2036 => 1135,  2018 => 1119,  2016 => 1118,  2012 => 1117,  2008 => 1116,  2004 => 1115,  1993 => 1106,  1991 => 1105,  1987 => 1104,  1983 => 1103,  1979 => 1102,  1968 => 1093,  1966 => 1092,  1962 => 1091,  1958 => 1090,  1954 => 1089,  1944 => 1081,  1942 => 1080,  1938 => 1079,  1934 => 1078,  1930 => 1077,  1917 => 1066,  1915 => 1065,  1911 => 1064,  1907 => 1063,  1903 => 1062,  1882 => 1043,  1878 => 1041,  1876 => 1040,  1872 => 1039,  1868 => 1038,  1864 => 1037,  1852 => 1027,  1850 => 1026,  1846 => 1024,  1844 => 1023,  1840 => 1022,  1836 => 1021,  1832 => 1020,  1818 => 1008,  1816 => 1007,  1812 => 1006,  1808 => 1005,  1804 => 1004,  1792 => 994,  1788 => 992,  1786 => 991,  1782 => 990,  1778 => 989,  1774 => 988,  1765 => 981,  1762 => 980,  1758 => 978,  1756 => 977,  1752 => 976,  1748 => 975,  1744 => 974,  1735 => 967,  1732 => 966,  1728 => 964,  1726 => 963,  1722 => 962,  1718 => 961,  1714 => 960,  1705 => 953,  1702 => 952,  1698 => 950,  1696 => 949,  1692 => 948,  1688 => 947,  1684 => 946,  1675 => 939,  1673 => 938,  1656 => 923,  1654 => 922,  1650 => 921,  1646 => 920,  1642 => 919,  1630 => 909,  1626 => 907,  1624 => 906,  1620 => 905,  1616 => 904,  1612 => 903,  1598 => 891,  1596 => 890,  1593 => 889,  1591 => 888,  1587 => 887,  1583 => 886,  1579 => 885,  1564 => 872,  1562 => 871,  1558 => 870,  1554 => 869,  1550 => 868,  1534 => 854,  1528 => 852,  1526 => 851,  1521 => 850,  1519 => 849,  1514 => 848,  1512 => 847,  1507 => 845,  1504 => 844,  1500 => 842,  1498 => 841,  1495 => 840,  1493 => 839,  1490 => 838,  1488 => 837,  1474 => 825,  1472 => 824,  1468 => 823,  1464 => 822,  1460 => 821,  1446 => 809,  1443 => 808,  1441 => 807,  1437 => 806,  1433 => 805,  1429 => 804,  1421 => 798,  1418 => 797,  1414 => 795,  1412 => 794,  1408 => 793,  1404 => 792,  1400 => 791,  1390 => 783,  1387 => 782,  1383 => 780,  1381 => 779,  1377 => 778,  1373 => 777,  1369 => 776,  1359 => 768,  1357 => 767,  1354 => 766,  1352 => 765,  1348 => 764,  1344 => 763,  1340 => 762,  1325 => 749,  1321 => 747,  1319 => 746,  1315 => 745,  1311 => 744,  1307 => 743,  1295 => 733,  1293 => 732,  1275 => 716,  1273 => 715,  1269 => 714,  1265 => 713,  1252 => 702,  1248 => 700,  1246 => 699,  1242 => 698,  1238 => 697,  1227 => 688,  1225 => 687,  1221 => 686,  1217 => 685,  1203 => 673,  1200 => 672,  1196 => 670,  1194 => 669,  1190 => 668,  1186 => 667,  1182 => 666,  1170 => 656,  1167 => 655,  1164 => 654,  1161 => 614,  1159 => 613,  1155 => 612,  1151 => 611,  1147 => 610,  1137 => 602,  1135 => 601,  1131 => 600,  1127 => 599,  1123 => 598,  1111 => 588,  1108 => 587,  1104 => 585,  1102 => 584,  1098 => 583,  1094 => 582,  1090 => 581,  1080 => 573,  1078 => 572,  1074 => 571,  1070 => 570,  1066 => 569,  1054 => 559,  1051 => 558,  1048 => 516,  1046 => 515,  1042 => 514,  1038 => 513,  1034 => 512,  1024 => 504,  1022 => 503,  1018 => 502,  1014 => 501,  1010 => 500,  1001 => 493,  998 => 492,  994 => 490,  992 => 489,  988 => 488,  984 => 487,  970 => 475,  968 => 474,  965 => 473,  963 => 472,  959 => 471,  955 => 470,  941 => 458,  939 => 457,  936 => 456,  934 => 455,  930 => 454,  926 => 453,  912 => 441,  910 => 440,  907 => 439,  905 => 438,  901 => 437,  897 => 436,  877 => 418,  874 => 417,  870 => 415,  868 => 414,  864 => 413,  860 => 412,  856 => 411,  846 => 403,  843 => 402,  839 => 400,  837 => 399,  833 => 398,  829 => 397,  825 => 396,  815 => 388,  812 => 387,  808 => 385,  806 => 384,  802 => 383,  798 => 382,  794 => 381,  784 => 373,  782 => 372,  779 => 371,  777 => 370,  773 => 369,  769 => 368,  765 => 367,  750 => 354,  745 => 351,  743 => 350,  739 => 349,  735 => 348,  731 => 347,  722 => 340,  719 => 339,  715 => 337,  713 => 336,  709 => 335,  705 => 334,  701 => 333,  692 => 326,  690 => 325,  687 => 324,  685 => 323,  681 => 322,  677 => 321,  673 => 320,  663 => 312,  659 => 310,  657 => 309,  653 => 308,  649 => 307,  645 => 306,  635 => 298,  632 => 297,  628 => 295,  626 => 294,  622 => 293,  618 => 292,  614 => 291,  604 => 283,  601 => 282,  597 => 280,  595 => 279,  591 => 278,  587 => 277,  583 => 276,  573 => 268,  571 => 267,  568 => 266,  566 => 265,  562 => 264,  558 => 263,  554 => 262,  543 => 253,  541 => 252,  537 => 251,  533 => 250,  529 => 249,  515 => 237,  511 => 235,  509 => 234,  505 => 233,  501 => 232,  497 => 231,  488 => 224,  485 => 223,  481 => 221,  479 => 220,  475 => 219,  471 => 218,  467 => 217,  457 => 209,  454 => 208,  450 => 206,  448 => 205,  444 => 204,  440 => 203,  436 => 202,  426 => 194,  423 => 193,  419 => 191,  417 => 190,  413 => 189,  409 => 188,  405 => 187,  395 => 179,  392 => 178,  388 => 176,  386 => 175,  382 => 174,  378 => 173,  374 => 172,  365 => 165,  363 => 164,  360 => 163,  358 => 162,  354 => 161,  350 => 160,  346 => 159,  335 => 150,  333 => 149,  329 => 148,  325 => 147,  321 => 146,  296 => 123,  292 => 121,  290 => 120,  286 => 119,  282 => 118,  278 => 117,  268 => 109,  265 => 108,  262 => 107,  260 => 106,  255 => 104,  251 => 103,  247 => 102,  237 => 94,  234 => 93,  230 => 91,  228 => 90,  224 => 89,  220 => 88,  216 => 87,  206 => 79,  204 => 78,  201 => 77,  199 => 76,  195 => 75,  191 => 74,  187 => 73,  176 => 64,  174 => 63,  170 => 62,  166 => 61,  162 => 60,  145 => 45,  143 => 44,  125 => 28,  119 => 27,  110 => 24,  105 => 23,  100 => 22,  96 => 21,  84 => 12,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
