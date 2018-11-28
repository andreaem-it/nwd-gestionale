<?php

/* expertations/details.html.twig */
class __TwigTemplate_071bc45c92e7e68a6b6fe3b4c85808d19e3a9130ce3e6ec31c3f8808ad26f168 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/details.html.twig"));

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
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-11\">
                <h3>Preventivi <small>Computometrico</small></h3>
            </div>
            <div class=\"col-1\">
                <div class=\"btn-group float-right\">
                    <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                        <i class=\"mdi mdi-delete mr-0\"></i>
                    </a>
                    <a href=\"\" class=\"btn btn-secondary btn-sm float-right \">
                        <i class=\"mdi mdi-pencil mr-0\"></i>
                    </a>
                    <a href=\"\" class=\"btn btn-success btn-sm float-right\" id=\"print\">
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
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                echo "                <div class=\"alert alert-";
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
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
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
                                        <td class=\"border text-center\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">22.20</td>
                                        <td class=\"border text-center\">";
        // line 64
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 64, $this->source); })()) * 22.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">11.80</td>
                                        <td class=\"border text-center\">";
        // line 76
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 76, $this->source); })()) * 11.8), "html", null, true);
        echo "</td>
                                    </tr>
                                        ";
        // line 78
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
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
                                            <td class=\"border text-center\">5.60</td>
                                            <td class=\"border text-center\">";
            // line 89
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 89, $this->source); })()) * 5.6), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
        }
        // line 92
        echo "                                        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 92, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 92, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 93
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 101, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">14.90</td>
                                            <td class=\"border text-center\">";
            // line 103
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 103, $this->source); })()) * 14.9), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
        }
        // line 106
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 106, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 107
            echo "                                            <tr>
                                                <td class=\"border text-center\">15.1.5.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                        Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "</td>
                                                <td class=\"border text-center\">26.90</td>
                                                <td class=\"border text-center\">";
            // line 117
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 117, $this->source); })()) * 26.9), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
        }
        // line 120
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">9.90</td>
                                        <td class=\"border text-center\">";
        // line 134
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 134, $this->source); })()) * 9.9), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">6.30</td>
                                        <td class=\"border text-center\">";
        // line 146
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 146, $this->source); })()) * 6.3), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 159
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 159, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 159, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 160
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 168
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 168, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">3.10</td>
                                            <td class=\"border text-center\">";
            // line 170
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 170, $this->source); })()) * 3.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 173
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 173, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 173, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 174
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 182, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">10.60</td>
                                            <td class=\"border text-center\">";
            // line 184
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 184, $this->source); })()) * 10.6), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 187
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 187, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 188
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 196
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 196, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">13.40</td>
                                            <td class=\"border text-center\">";
            // line 198
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 198, $this->source); })()) * 13.4), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 201
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
        // line 213
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 213, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">26.20</td>
                                        <td class=\"border text-center\">";
        // line 215
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 215, $this->source); })()) * 26.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 225, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">13.80</td>
                                        <td class=\"border text-center\">";
        // line 227
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 227, $this->source); })()) * 13.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 237, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">12.60</td>
                                        <td class=\"border text-center\">";
        // line 239
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 239, $this->source); })()) * 12.6), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 252
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 252, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 252, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 253
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 261
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 261, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">5.70</td>
                                            <td class=\"border text-center\">";
            // line 263
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 263, $this->source); })()) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 266
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 266, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 266, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 267
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 275
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 275, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">15.30</td>
                                            <td class=\"border text-center\">";
            // line 277
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 277, $this->source); })()) * 15.3), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 280
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 280, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 281
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 289
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 289, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">";
            // line 291
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 291, $this->source); })()) * 27.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 294
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
        // line 307
        echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 307, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">";
        // line 309
        echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 309, $this->source); })()) * 25), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 311
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 311, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 311, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 312
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 320
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 320, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">8.0</td>
                                            <td class=\"border text-center\">";
            // line 322
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 322, $this->source); })()) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 325
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 325, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 325, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 326
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 334
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 334, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">";
            // line 336
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 336, $this->source); })()) * 12.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 339
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 339, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 340
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 348
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 348, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">";
            // line 350
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 350, $this->source); })()) * 12.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 353
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 353, $this->source); })()), "antenna", array()) != 0)) {
            // line 354
            echo "                                    <tr>
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
                                        <td class=\"border text-center\">331.00</td>
                                        <td class=\"border text-center\">331.00</td>
                                    </tr>
                                        ";
            // line 375
            if (((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 375, $this->source); })()) < 5)) {
                // line 376
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.162.1</td>
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
                                                <td class=\"border text-center\">176.00</td>
                                                <td class=\"border text-center\">176.00</td>
                                            </tr>
                                        ";
            } elseif (((            // line 391
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 391, $this->source); })()) > 6) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 391, $this->source); })()) < 10))) {
                // line 392
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.162.2</td>
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
                                                <td class=\"border text-center\">253.00</td>
                                                <td class=\"border text-center\">253.00</td>
                                            </tr>
                                        ";
            } elseif (((            // line 407
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 407, $this->source); })()) > 11) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 407, $this->source); })()) < 15))) {
                // line 408
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.162.3</td>
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
                                                <td class=\"border text-center\">333.00</td>
                                                <td class=\"border text-center\">333.00</td>
                                            </tr>
                                        ";
            }
            // line 424
            echo "                                    ";
        }
        // line 425
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 432, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">41.00</td>
                                        <td class=\"border text-center\">";
        // line 434
        echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 434, $this->source); })()) * 41), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 443
        echo twig_escape_filter($this->env, (isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 443, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">3.20</td>
                                        <td class=\"border text-center\">";
        // line 445
        echo twig_escape_filter($this->env, ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 445, $this->source); })()) * 3.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 447
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 447, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 447, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 448
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 456
            echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 456, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">8</td>
                                            <td class=\"border text-center\">";
            // line 458
            echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 458, $this->source); })()) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 461
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 461, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 461, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
            // line 462
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 470
            echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 470, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">";
            // line 472
            echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 472, $this->source); })()) * 12.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 475
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 475, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 476
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.32</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 483
            echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 483, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">";
            // line 485
            echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 485, $this->source); })()) * 12.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 488
        echo "                                    ";
        if (((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 488, $this->source); })()) != 0)) {
            // line 489
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
            // line 499
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 499, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">89.00</td>
                                            <td class=\"border text-center\">";
            // line 501
            echo twig_escape_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 501, $this->source); })()) * 89), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong>ronzatore per EMERGENZE</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 510
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 510, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">20.00</td>
                                            <td class=\"border text-center\">";
            // line 512
            echo twig_escape_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 512, $this->source); })()) * 20), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 515
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 515, $this->source); })()), "numPreseTelefono", array()) != 0)) {
            // line 516
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
            // line 526
            echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 526, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">26.20</td>
                                            <td class=\"border text-center\">";
            // line 528
            echo twig_escape_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 528, $this->source); })()) * 26.2), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 537
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 537, $this->source); })()), 0), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">1.70</td>
                                            <td class=\"border text-center\">";
            // line 539
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 539, $this->source); })()) * 1.7), 1), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 541
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 541, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 541, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
                // line 542
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.20.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                        Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">";
                // line 550
                echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 550, $this->source); })()), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">8</td>
                                                <td class=\"border text-center\">";
                // line 552
                echo twig_escape_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 552, $this->source); })()) * 8), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 555
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 555, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 555, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
                // line 556
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.20.2</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                        Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">";
                // line 564
                echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 564, $this->source); })()), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">12.9</td>
                                                <td class=\"border text-center\">";
                // line 566
                echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 566, $this->source); })()) * 12.9), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 569
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 569, $this->source); })()), "opereMurariePietra", array()) == 1)) {
                // line 570
                echo "                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
                // line 576
                echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 576, $this->source); })()), "html", null, true);
                echo "</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">";
                // line 578
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 578, $this->source); })()) * 12.1), 1), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 580
            echo "                                    ";
        }
        // line 581
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 581, $this->source); })()), "numPreseDati", array()) != 0) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 581, $this->source); })()), "level", array()) == 3))) {
            // line 582
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
            // line 592
            echo twig_escape_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 592, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">91.00</td>
                                            <td class=\"border text-center\">";
            // line 594
            echo twig_escape_filter($this->env, ((isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 594, $this->source); })()) * 26.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 597
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 597, $this->source); })()), "campanello", array()) != 0)) {
            // line 598
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
                                            <td class=\"border text-center\">28</td>
                                            <td class=\"border text-center\">28</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">20</td>
                                            <td class=\"border text-center\">20</td>
                                        </tr>
                                    ";
        }
        // line 625
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
                                        <td class=\"border text-center\">139</td>
                                        <td class=\"border text-center\">139</td>
                                    </tr>
                                    <tr>
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
                                        <td class=\"border text-center\">96</td>
                                        <td class=\"border text-center\">192</td>
                                    </tr>
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
                                        <td class=\"border text-center\">";
        // line 667
        echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 667, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">";
        // line 669
        echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 669, $this->source); })()) * 25), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 671
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 671, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 671, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 672
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 680
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 680, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">8</td>
                                            <td class=\"border text-center\">";
            // line 682
            echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 682, $this->source); })()) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 685
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 685, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 685, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
            // line 686
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 694
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 694, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">";
            // line 696
            echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 696, $this->source); })()) * 12.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 699
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 699, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 700
            echo "                                        <td class=\"border text-center\">15.3.20.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 706
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 706, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">12.1</td>
                                        <td class=\"border text-center\">";
            // line 708
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 708, $this->source); })()) * 12.1), 1), "html", null, true);
            echo "</td>
                                    ";
        }
        // line 710
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
        // line 722
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 722, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">";
        // line 724
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 724, $this->source); })()), "pianiCasa", array()) * 100), "html", null, true);
        echo "</td>
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
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">113.00</td>
                                        <td class=\"border text-center\">113.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 754
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 754, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">";
        // line 756
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 756, $this->source); })()), "pianiCasa", array()) * 100), "html", null, true);
        echo "</td>
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
                                    <tr>
                                        <td class=\"border text-center\">15.6.220.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Centralino tipo appartamento incassato a parete 36  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">43.00</td>
                                        <td class=\"border text-center\">43.00</td>
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
                                        <td class=\"border text-center\">";
        // line 794
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 794, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">67.00</td>
                                        <td class=\"border text-center\">";
        // line 796
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 796, $this->source); })()), "numCircuiti", array()) * 67), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Sezionatore Quadro Generale</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 40 a 63A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
                                    </tr>
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
                                        <td class=\"border text-center\">";
        // line 831
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 831, $this->source); })()), "pianiCasa", array()) * 15) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">1.80</td>
                                        <td class=\"border text-center\">";
        // line 833
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 833, $this->source); })()), "pianiCasa", array()) * 15) * 3) * twig_number_format_filter($this->env, 1.8, 2)), "html", null, true);
        echo "</td>
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
                                        <td class=\"border text-center\">";
        // line 845
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 845, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">2.80</td>
                                        <td class=\"border text-center\">";
        // line 847
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 847, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_number_format_filter($this->env, 2.8, 2)), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 856
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 856, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">3.30</td>
                                        <td class=\"border text-center\">";
        // line 858
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 858, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_number_format_filter($this->env, 3.3, 2)), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 868
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 868, $this->source); })()), "pianiCasa", array()) * 4), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">8.40</td>
                                        <td class=\"border text-center\">";
        // line 870
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 870, $this->source); })()), "pianiCasa", array()) * 4) * twig_number_format_filter($this->env, 8.4, 2)), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.180.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Traccia su muratura di qualsiasi genere esclusa quella in pietra e in calcestruzzo. <br>
                                                Per larghezza della traccia fino a 10 cm al metro lineare.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 880
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 880, $this->source); })()), "pianiCasa", array()) * 2) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">0.80</td>
                                        <td class=\"border text-center\">";
        // line 882
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 882, $this->source); })()), "pianiCasa", array()) * 2) * 3) * twig_number_format_filter($this->env, 0.8, 2)), "html", null, true);
        echo "</td>
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
                                        <td class=\"border text-center\">";
        // line 899
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 899, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">14.30</td>
                                        <td class=\"border text-center\">";
        // line 901
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 901, $this->source); })()), "pianiCasa", array()) * twig_number_format_filter($this->env, 14.3, 2)), "html", null, true);
        echo "</td>
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
                                        <td class=\"border text-center\">6.20</td>
                                        <td class=\"border text-center\">124</td>
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
                                        <td class=\"border text-center\">3.50</td>
                                        <td class=\"border text-center\">70</td>
                                    </tr>
                                    ";
        // line 941
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 941, $this->source); })()), "spd", array()) == "1")) {
            // line 942
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.202</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">191</td>
                                            <td class=\"border text-center\">191</td>
                                        </tr>
                                    ";
        } else {
            // line 954
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">239</td>
                                            <td class=\"border text-center\">239</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">125</td>
                                            <td class=\"border text-center\">125</td>
                                        </tr>
                                    ";
        }
        // line 977
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.7.60.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Puntazza a croce per dispersione, realizzate in acciaio zincato a fuoco di dimensioni 50*50*5mm,<br>
                                                da conficcare in terreno di media consistenza all'interno di pozzetto ispezionabile, fornita e posta in opera.<br>
                                                Di lunghezza pari a 1,5 mt
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">43.80</td>
                                        <td class=\"border text-center\">43.80</td>
                                    </tr>
                                    ";
        // line 990
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 990, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 991
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Escluse le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">49.20</td>
                                            <td class=\"border text-center\">49.20</td>
                                        </tr>
                                    ";
        } else {
            // line 1003
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.160.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Nodo equipotenziale, costituito da barretta in rame forata. Comprese le opere murarie.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">79.20</td>
                                            <td class=\"border text-center\">79.20</td>
                                        </tr>
                                    ";
        }
        // line 1015
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1015, $this->source); })()), "level", array()) == 3)) {
            // line 1016
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
            // line 1028
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1028, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27</td>
                                            <td class=\"border text-center\">";
            // line 1030
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1030, $this->source); })()) * 27), "html", null, true);
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
            // line 1041
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1041, $this->source); })()), "pianiCasa", array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">";
            // line 1043
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1043, $this->source); })()), "pianiCasa", array()) * 40), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1046
        echo "
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 1052
        echo twig_escape_filter($this->env, twig_round((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1052, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 1055
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1055, $this->source); })()) != 0)) {
            // line 1056
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO ";
            // line 1058
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1058, $this->source); })()), "sconto", array()), "html", null, true);
            echo "%</td>
                                            <td class=\"border text-center\">
                                                ";
            // line 1060
            echo twig_escape_filter($this->env, twig_round((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1060, $this->source); })()), "2"), "html", null, true);
            echo " €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1067
            echo twig_escape_filter($this->env, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1067, $this->source); })()) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1067, $this->source); })())), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1071
            echo "                                            <tr>
                                                <td colspan=\"3\" class=\"border-0\"></td>
                                                <td class=\"border\"><strong>TOTALE</strong></td>
                                                <td class=\"border text-center\">
                                                    <strong>";
            // line 1075
            $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1075, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1075, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1075, $this->source); })()));
            echo " ";
            echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 1075, $this->source); })()), "2"), "html", null, true);
            echo " €</strong>
                                                </td>
                                            </tr>
                                    ";
        }
        // line 1079
        echo "                                    ";
        // line 1086
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

    // line 1099
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1100
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
        // line 1127
        echo "        @page {
            size: landscape;
            margin: 0; }
        @media print {
            * {
                font-size: 0.9em!important;
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
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1178
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1179
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
        return "expertations/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1735 => 1179,  1726 => 1178,  1666 => 1127,  1638 => 1100,  1629 => 1099,  1607 => 1086,  1605 => 1079,  1596 => 1075,  1590 => 1071,  1583 => 1067,  1573 => 1060,  1568 => 1058,  1564 => 1056,  1562 => 1055,  1556 => 1052,  1548 => 1046,  1542 => 1043,  1537 => 1041,  1523 => 1030,  1518 => 1028,  1504 => 1016,  1501 => 1015,  1487 => 1003,  1473 => 991,  1471 => 990,  1456 => 977,  1431 => 954,  1417 => 942,  1415 => 941,  1372 => 901,  1367 => 899,  1347 => 882,  1342 => 880,  1329 => 870,  1324 => 868,  1311 => 858,  1306 => 856,  1294 => 847,  1289 => 845,  1274 => 833,  1269 => 831,  1231 => 796,  1226 => 794,  1185 => 756,  1180 => 754,  1147 => 724,  1142 => 722,  1128 => 710,  1123 => 708,  1118 => 706,  1110 => 700,  1107 => 699,  1101 => 696,  1096 => 694,  1086 => 686,  1083 => 685,  1077 => 682,  1072 => 680,  1062 => 672,  1060 => 671,  1055 => 669,  1050 => 667,  1006 => 625,  977 => 598,  974 => 597,  968 => 594,  963 => 592,  951 => 582,  948 => 581,  945 => 580,  940 => 578,  935 => 576,  927 => 570,  924 => 569,  918 => 566,  913 => 564,  903 => 556,  900 => 555,  894 => 552,  889 => 550,  879 => 542,  877 => 541,  872 => 539,  867 => 537,  855 => 528,  850 => 526,  838 => 516,  835 => 515,  829 => 512,  824 => 510,  812 => 501,  807 => 499,  795 => 489,  792 => 488,  786 => 485,  781 => 483,  772 => 476,  769 => 475,  763 => 472,  758 => 470,  748 => 462,  745 => 461,  739 => 458,  734 => 456,  724 => 448,  722 => 447,  717 => 445,  712 => 443,  700 => 434,  695 => 432,  686 => 425,  683 => 424,  665 => 408,  663 => 407,  646 => 392,  644 => 391,  627 => 376,  625 => 375,  602 => 354,  599 => 353,  593 => 350,  588 => 348,  578 => 340,  575 => 339,  569 => 336,  564 => 334,  554 => 326,  551 => 325,  545 => 322,  540 => 320,  530 => 312,  528 => 311,  523 => 309,  518 => 307,  503 => 294,  497 => 291,  492 => 289,  482 => 281,  479 => 280,  473 => 277,  468 => 275,  458 => 267,  455 => 266,  449 => 263,  444 => 261,  434 => 253,  431 => 252,  426 => 239,  421 => 237,  408 => 227,  403 => 225,  390 => 215,  385 => 213,  371 => 201,  365 => 198,  360 => 196,  350 => 188,  347 => 187,  341 => 184,  336 => 182,  326 => 174,  323 => 173,  317 => 170,  312 => 168,  302 => 160,  299 => 159,  294 => 146,  289 => 144,  276 => 134,  271 => 132,  257 => 120,  251 => 117,  246 => 115,  236 => 107,  233 => 106,  227 => 103,  222 => 101,  212 => 93,  209 => 92,  203 => 89,  198 => 87,  188 => 79,  186 => 78,  181 => 76,  176 => 74,  163 => 64,  158 => 62,  125 => 31,  119 => 30,  110 => 27,  105 => 26,  100 => 25,  96 => 24,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <div class=\"btn-group float-right\">
                    <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                        <i class=\"mdi mdi-delete mr-0\"></i>
                    </a>
                    <a href=\"\" class=\"btn btn-secondary btn-sm float-right \">
                        <i class=\"mdi mdi-pencil mr-0\"></i>
                    </a>
                    <a href=\"\" class=\"btn btn-success btn-sm float-right\" id=\"print\">
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
                <div class=\"card\">
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
                                        <td class=\"border text-center\">22.20</td>
                                        <td class=\"border text-center\">{{ qtyPL * 22.20 }}</td>
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
                                        <td class=\"border text-center\">11.80</td>
                                        <td class=\"border text-center\">{{ qtyPL * 11.80 }}</td>
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
                                            <td class=\"border text-center\">5.60</td>
                                            <td class=\"border text-center\">{{ qtyPL * 5.60 }}</td>
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
                                            <td class=\"border text-center\">14.90</td>
                                            <td class=\"border text-center\">{{ qtyPL * 14.90 }}</td>
                                        </tr>
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
                                                <td class=\"border text-center\">26.90</td>
                                                <td class=\"border text-center\">{{ qtyPL * 26.90 }}</td>
                                            </tr>
                                        {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPC }}</td>
                                        <td class=\"border text-center\">9.90</td>
                                        <td class=\"border text-center\">{{ qtyPC * 9.90 }}</td>
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
                                        <td class=\"border text-center\">6.30</td>
                                        <td class=\"border text-center\">{{ qtyPC * 6.30 }}</td>
                                    </tr>
                                    {#<tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">-</td>
                                        <td class=\"border text-center\">9.00</td>
                                        <td class=\"border text-center\">-</td>
                                    </tr>#}
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
                                            <td class=\"border text-center\">3.10</td>
                                            <td class=\"border text-center\">{{ qtyPC * 3.10 }}</td>
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
                                            <td class=\"border text-center\">10.60</td>
                                            <td class=\"border text-center\">{{ qtyPC * 10.60 }}</td>
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
                                            <td class=\"border text-center\">13.40</td>
                                            <td class=\"border text-center\">{{ qtyPC * 13.40 }}</td>
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
                                        <td class=\"border text-center\">26.20</td>
                                        <td class=\"border text-center\">{{ qtyPP * 26.20 }}</td>
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
                                        <td class=\"border text-center\">13.80</td>
                                        <td class=\"border text-center\">{{ qtyPP * 13.80 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ qtyPP }}</td>
                                        <td class=\"border text-center\">12.60</td>
                                        <td class=\"border text-center\">{{ qtyPP * 12.60 }}</td>
                                    </tr>
                                    {#<tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">-</td>
                                        <td class=\"border text-center\">4.80</td>
                                        <td class=\"border text-center\">-</td>
                                    </tr>#}
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
                                            <td class=\"border text-center\">5.70</td>
                                            <td class=\"border text-center\">{{ qtyPP * 5.70 }}</td>
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
                                            <td class=\"border text-center\">15.30</td>
                                            <td class=\"border text-center\">{{ qtyPP * 15.30 }}</td>
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
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">{{ qtyPP * 27.20 }}</td>
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
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">{{ qtyPS * 25}}</td>
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
                                            <td class=\"border text-center\">8.0</td>
                                            <td class=\"border text-center\">{{ qtyPS * 8.0 }}</td>
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
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">{{ qtyPS * 12.9 }}</td>
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
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">{{ qtyPS * 12.1 }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if item.antenna != 0 %}
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
                                        <td class=\"border text-center\">331.00</td>
                                        <td class=\"border text-center\">331.00</td>
                                    </tr>
                                        {% if qtyPT < 5 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.162.1</td>
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
                                                <td class=\"border text-center\">176.00</td>
                                                <td class=\"border text-center\">176.00</td>
                                            </tr>
                                        {% elseif qtyPT > 6 and qtyPT < 10 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.162.2</td>
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
                                                <td class=\"border text-center\">253.00</td>
                                                <td class=\"border text-center\">253.00</td>
                                            </tr>
                                        {% elseif qtyPT > 11 and qtyPT < 15 %}
                                            <tr>
                                                <td class=\"border text-center\">15.3.162.3</td>
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
                                                <td class=\"border text-center\">333.00</td>
                                                <td class=\"border text-center\">333.00</td>
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
                                        <td class=\"border text-center\">41.00</td>
                                        <td class=\"border text-center\">{{ qtyPT * 41 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ calcTVCable }}</td>
                                        <td class=\"border text-center\">3.20</td>
                                        <td class=\"border text-center\">{{ calcTVCable  * 3.20}}</td>
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
                                    {% endif %}
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
                                            <td class=\"border text-center\">89.00</td>
                                            <td class=\"border text-center\">{{ qtyTR * 89.00 }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90.0</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong>ronzatore per EMERGENZE</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ qtyTR }}</td>
                                            <td class=\"border text-center\">20.00</td>
                                            <td class=\"border text-center\">{{ qtyTR * 20.00 }}</td>
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
                                            <td class=\"border text-center\">26.20</td>
                                            <td class=\"border text-center\">{{ qtyTP * 26.20 }}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.4.210.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ calcTPCable|number_format(0) }}</td>
                                            <td class=\"border text-center\">1.70</td>
                                            <td class=\"border text-center\">{{ (calcTPCable * 1.70)|number_format(1) }}</td>
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
                                                <td class=\"border text-center\">{{ qtyTP }}</td>
                                                <td class=\"border text-center\">8</td>
                                                <td class=\"border text-center\">{{ qtyTP  * 8}}</td>
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
                                        {% endif %}
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
                                            <td class=\"border text-center\">91.00</td>
                                            <td class=\"border text-center\">{{ qtyPD * 26.20 }}</td>
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
                                            <td class=\"border text-center\">28</td>
                                            <td class=\"border text-center\">28</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">20</td>
                                            <td class=\"border text-center\">20</td>
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
                                        <td class=\"border text-center\">139</td>
                                        <td class=\"border text-center\">139</td>
                                    </tr>
                                    <tr>
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
                                        <td class=\"border text-center\">96</td>
                                        <td class=\"border text-center\">192</td>
                                    </tr>
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
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">{{ qtyPST * 25 }}</td>
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
                                            <td class=\"border text-center\">8</td>
                                            <td class=\"border text-center\">{{ qtyPST  * 8}}</td>
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
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">{{ qtyPST * 12.9 }}</td>
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
                                        <td class=\"border text-center\">12.1</td>
                                        <td class=\"border text-center\">{{ (qtyPST * 12.10)|number_format(1)}}</td>
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
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 100 }}</td>
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
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">113.00</td>
                                        <td class=\"border text-center\">113.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.21.10.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa }}</td>
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 100 }}</td>
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
                                    <tr>
                                        <td class=\"border text-center\">15.6.220.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Centralino tipo appartamento incassato a parete 36  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">43.00</td>
                                        <td class=\"border text-center\">43.00</td>
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
                                        <td class=\"border text-center\">67.00</td>
                                        <td class=\"border text-center\">{{ item.numCircuiti * 67 }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Sezionatore Quadro Generale</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.06.10.8</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Interruttore automatico magnetotermico Caratteristica C. Potere di interruzione 6KA. Bipolare da 40 a 63A.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
                                    </tr>
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
                                        <td class=\"border text-center\">1.80</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * 15 * 3) * 1.80|number_format(2) }}</td>
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
                                        <td class=\"border text-center\">2.80</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * 15 * 2) * 2.80|number_format(2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">15.5.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Tubazione flessibile in PVC autoestinguente serie pesante IMQ. Diametro esterno mm 32. Al metro.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ item.pianiCasa * 15 * 2 }}</td>
                                        <td class=\"border text-center\">3.30</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * 15 * 2) * 3.30|number_format(2) }}</td>
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
                                        <td class=\"border text-center\">8.40</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * 4) * 8.40|number_format(2) }}</td>
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
                                        <td class=\"border text-center\">0.80</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa * 2 * 3) * 0.80|number_format(2) }}</td>
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
                                        <td class=\"border text-center\">14.30</td>
                                        <td class=\"border text-center\">{{ (item.pianiCasa) * 14.3|number_format(2) }}</td>
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
                                        <td class=\"border text-center\">6.20</td>
                                        <td class=\"border text-center\">124</td>
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
                                        <td class=\"border text-center\">3.50</td>
                                        <td class=\"border text-center\">70</td>
                                    </tr>
                                    {% if item.spd == \"1\" %}
                                        <tr>
                                            <td class=\"border text-center\">15.7.202</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">191</td>
                                            <td class=\"border text-center\">191</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">239</td>
                                            <td class=\"border text-center\">239</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">125</td>
                                            <td class=\"border text-center\">125</td>
                                        </tr>
                                    {% endif %}
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
                                        <td class=\"border text-center\">43.80</td>
                                        <td class=\"border text-center\">43.80</td>
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
                                            <td class=\"border text-center\">49.20</td>
                                            <td class=\"border text-center\">49.20</td>
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
                                            <td class=\"border text-center\">79.20</td>
                                            <td class=\"border text-center\">79.20</td>
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
                                            <td class=\"border text-center\">27</td>
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
                                            {{ total|round('2') }} €
                                        </td>
                                    </tr>
                                    {% if sconto != 0 %}
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO {{ item.sconto }}%</td>
                                            <td class=\"border text-center\">
                                                {{ sconto|round('2') }} €
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
            size: landscape;
            margin: 0; }
        @media print {
            * {
                font-size: 0.9em!important;
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
{% endblock %}", "expertations/details.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/details.html.twig");
    }
}
