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
            <div class=\"col-12\">
                <h3>Preventivi <small>Computometrico</small></h3>
            </div>
        </div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
                                        <td class=\"border\">15.1.12.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                            P.to luce semplice su canalizzazione in traccia o in vista <br>
                                            con un cavo non propagante l'incendio con sezione minima 1,5 mmq. <br>
                                            <strong>Per P.to luce con conduttore di protezione.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">22.20</td>
                                        <td class=\"border\">";
        // line 51
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 51, $this->source); })()) * 22.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">11.80</td>
                                        <td class=\"border\">";
        // line 63
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 63, $this->source); })()) * 11.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 65, $this->source); })()), "opereMurarie", array()) == "0")) {
            // line 66
            echo "                                    <tr>
                                        <td class=\"border\">15.1.3.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                            </small>
                                        </td>
                                        <td class=\"border\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border\">5.60</td>
                                        <td class=\"border\">";
            // line 76
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 76, $this->source); })()) * 5.6), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->source); })()), "opereMurarie", array()) == "1")) {
            // line 79
            echo "                                        <tr>
                                            <td class=\"border\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">14.90</td>
                                            <td class=\"border\">";
            // line 89
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 89, $this->source); })()) * 14.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 91
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->source); })()), "opereMurarie", array()) == "2")) {
            // line 92
            echo "                                        <tr>
                                            <td class=\"border\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">26.90</td>
                                            <td class=\"border\">";
            // line 102
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 102, $this->source); })()) * 26.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 105
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">9.90</td>
                                        <td class=\"border\">";
        // line 119
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 119, $this->source); })()) * 9.9), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">6.30</td>
                                        <td class=\"border\">";
        // line 131
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 131, $this->source); })()) * 6.3), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 144
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 144, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 145
            echo "                                        <tr>
                                            <td class=\"border\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 153, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">3.10</td>
                                            <td class=\"border\">";
            // line 155
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 155, $this->source); })()) * 3.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 157
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 157, $this->source); })()), "opereMurarie", array()) == 1)) {
            // line 158
            echo "                                        <tr>
                                            <td class=\"border\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 166, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">10.60</td>
                                            <td class=\"border\">";
            // line 168
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 168, $this->source); })()) * 10.6), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 170
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 170, $this->source); })()), "opereMurarie", array()) == 2)) {
            // line 171
            echo "                                        <tr>
                                            <td class=\"border\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 179, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">13.40</td>
                                            <td class=\"border\">";
            // line 181
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 181, $this->source); })()) * 13.4), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 184
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.21.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to allaccio per presa monofase su canalizzazione in traccia o in vista <br>
                                                con cavo non propagante l'incendio di sezione idonea<br>
                                                <strong>Per allaccio monofase con carico massimo di 16A.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">26.20</td>
                                        <td class=\"border\">";
        // line 198
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 198, $this->source); })()) * 26.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 208, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">13.80</td>
                                        <td class=\"border\">";
        // line 210
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 210, $this->source); })()) * 13.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 220, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">12.60</td>
                                        <td class=\"border\">";
        // line 222
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 222, $this->source); })()) * 12.6), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 235
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 235, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 236
            echo "                                        <tr>
                                            <td class=\"border\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 244
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 244, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">5.70</td>
                                            <td class=\"border\">";
            // line 246
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 246, $this->source); })()) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 248
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 248, $this->source); })()), "opereMurarie", array()) == 1)) {
            // line 249
            echo "                                        <tr>
                                            <td class=\"border\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 257
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 257, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">15.30</td>
                                            <td class=\"border\">";
            // line 259
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 259, $this->source); })()) * 15.3), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 261
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 261, $this->source); })()), "opereMurarie", array()) == 2)) {
            // line 262
            echo "                                        <tr>
                                            <td class=\"border\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 270
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 270, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">27.20</td>
                                            <td class=\"border\">";
            // line 272
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 272, $this->source); })()) * 27.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 275
        echo "                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>SERVIZI</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto TV terrestre</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 288, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">41.00</td>
                                        <td class=\"border\">";
        // line 290
        echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 290, $this->source); })()) * 41), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border\"></td>
                                        <td class=\"border\">3.20</td>
                                        <td class=\"border\"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto Telefonico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.3.210.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa telefonica</strong> con presa ad 1 coppia
                                            </small>
                                        </td>
                                        <td class=\"border\">";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 313, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">26.40</td>
                                        <td class=\"border\">";
        // line 315
        echo twig_escape_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 315, $this->source); })()) * 26.4), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.4.210.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border\"></td>
                                        <td class=\"border\">1.70</td>
                                        <td class=\"border\"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI RISCALDAMENTO</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio TERMOSTATI </i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia <br>
                                                per alimentare dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione<br>
                                                (<strong>termostato</strong>, umidostato, flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">100</td>
                                        <td class=\"border\">100</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio CALDAIA o POMPA DI CALORE</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (<strong>bruciatore</strong>, elettropompa, compressore, aerotermo, unità termoventilante, aspiratore, ventilconvettore, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">113</td>
                                        <td class=\"border\">113</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.10.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">100</td>
                                        <td class=\"border\">100</td>
                                    </tr>
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border\">
                                            ";
        // line 384
        echo twig_escape_filter($this->env, twig_round((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 384, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">IVA 22%</td>
                                        <td class=\"border\">
                                            ";
        // line 391
        echo twig_escape_filter($this->env, twig_round((isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 391, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 394
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 394, $this->source); })()) != 0)) {
            // line 395
            echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SCONTO ";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 397, $this->source); })()), "sconto", array()), "html", null, true);
            echo "%</td>
                                        <td class=\"border\">
                                            ";
            // line 399
            echo twig_escape_filter($this->env, twig_round((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 399, $this->source); })()), "2"), "html", null, true);
            echo " €
                                        </td>
                                    </tr>
                                    ";
        }
        // line 403
        echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\"><strong>TOTALE</strong></td>
                                        <td class=\"border\">
                                            <strong>";
        // line 407
        $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 407, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 407, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 407, $this->source); })()));
        echo " ";
        echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 407, $this->source); })()), "2"), "html", null, true);
        echo " €</strong>
                                        </td>
                                    </tr>
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

    // line 421
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 422
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 449
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  712 => 449,  676 => 422,  667 => 421,  641 => 407,  635 => 403,  628 => 399,  623 => 397,  619 => 395,  617 => 394,  611 => 391,  601 => 384,  529 => 315,  524 => 313,  498 => 290,  493 => 288,  478 => 275,  472 => 272,  467 => 270,  457 => 262,  455 => 261,  450 => 259,  445 => 257,  435 => 249,  433 => 248,  428 => 246,  423 => 244,  413 => 236,  410 => 235,  405 => 222,  400 => 220,  387 => 210,  382 => 208,  369 => 198,  364 => 196,  350 => 184,  344 => 181,  339 => 179,  329 => 171,  327 => 170,  322 => 168,  317 => 166,  307 => 158,  305 => 157,  300 => 155,  295 => 153,  285 => 145,  282 => 144,  277 => 131,  272 => 129,  259 => 119,  254 => 117,  240 => 105,  234 => 102,  229 => 100,  219 => 92,  217 => 91,  212 => 89,  207 => 87,  197 => 79,  195 => 78,  190 => 76,  185 => 74,  175 => 66,  173 => 65,  168 => 63,  163 => 61,  150 => 51,  145 => 49,  112 => 18,  106 => 17,  97 => 14,  92 => 13,  87 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Computometrico {% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Computometrico</small></h3>
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
                                        <td class=\"border\">15.1.12.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                            P.to luce semplice su canalizzazione in traccia o in vista <br>
                                            con un cavo non propagante l'incendio con sezione minima 1,5 mmq. <br>
                                            <strong>Per P.to luce con conduttore di protezione.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPL }}</td>
                                        <td class=\"border\">22.20</td>
                                        <td class=\"border\">{{ qtyPL * 22.20 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to luce in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPL }}</td>
                                        <td class=\"border\">11.80</td>
                                        <td class=\"border\">{{ qtyPL * 11.80 }}</td>
                                    </tr>
                                    {% if item.opereMurarie == '0' %}
                                    <tr>
                                        <td class=\"border\">15.1.3.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPL }}</td>
                                        <td class=\"border\">5.60</td>
                                        <td class=\"border\">{{ qtyPL * 5.60 }}</td>
                                    </tr>
                                    {% elseif item.opereMurarie == '1' %}
                                        <tr>
                                            <td class=\"border\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPL }}</td>
                                            <td class=\"border\">14.90</td>
                                            <td class=\"border\">{{ qtyPL * 14.90 }}</td>
                                        </tr>
                                    {% elseif item.opereMurarie == '2' %}
                                        <tr>
                                            <td class=\"border\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPL }}</td>
                                            <td class=\"border\">26.90</td>
                                            <td class=\"border\">{{ qtyPL * 26.90 }}</td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti di Comando</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPC }}</td>
                                        <td class=\"border\">9.90</td>
                                        <td class=\"border\">{{ qtyPC * 9.90 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to di comando in traccia</strong> per distanza non superiori a 60mt. <br>
                                                Sono esclusi i conduttori e le opere murarie.
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPC }}</td>
                                        <td class=\"border\">6.30</td>
                                        <td class=\"border\">{{ qtyPC * 6.30 }}</td>
                                    </tr>
                                    {#<tr>
                                        <td class=\"border\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">9.00</td>
                                        <td class=\"border\">-</td>
                                    </tr>#}
                                    {% if item.opereMurarie == 0 %}
                                        <tr>
                                            <td class=\"border\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPC }}</td>
                                            <td class=\"border\">3.10</td>
                                            <td class=\"border\">{{ qtyPC * 3.10 }}</td>
                                        </tr>
                                    {% elseif item.opereMurarie == 1 %}
                                        <tr>
                                            <td class=\"border\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPC }}</td>
                                            <td class=\"border\">10.60</td>
                                            <td class=\"border\">{{ qtyPC * 10.60 }}</td>
                                        </tr>
                                    {% elseif item.opereMurarie == 2 %}
                                        <tr>
                                            <td class=\"border\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPC }}</td>
                                            <td class=\"border\">13.40</td>
                                            <td class=\"border\">{{ qtyPC * 13.40 }}</td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Punti Presa</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.21.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to allaccio per presa monofase su canalizzazione in traccia o in vista <br>
                                                con cavo non propagante l'incendio di sezione idonea<br>
                                                <strong>Per allaccio monofase con carico massimo di 16A.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPP }}</td>
                                        <td class=\"border\">26.20</td>
                                        <td class=\"border\">{{ qtyPP * 26.20 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Canalizzazione per <strong>P.to Presa in traccia</strong> per distanza non superiori a 60 mt. <br>
                                                Sono esclusi i conduttori e le opere murarie<br>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPP }}</td>
                                        <td class=\"border\">13.80</td>
                                        <td class=\"border\">{{ qtyPP * 13.80 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPP }}</td>
                                        <td class=\"border\">12.60</td>
                                        <td class=\"border\">{{ qtyPP * 12.60 }}</td>
                                    </tr>
                                    {#<tr>
                                        <td class=\"border\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">4.80</td>
                                        <td class=\"border\">-</td>
                                    </tr>#}
                                    {% if item.opereMurarie == 0 %}
                                        <tr>
                                            <td class=\"border\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPP }}</td>
                                            <td class=\"border\">5.70</td>
                                            <td class=\"border\">{{ qtyPP * 5.70 }}</td>
                                        </tr>
                                    {% elseif item.opereMurarie == 1 %}
                                        <tr>
                                            <td class=\"border\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPP }}</td>
                                            <td class=\"border\">15.30</td>
                                            <td class=\"border\">{{ qtyPP * 15.30 }}</td>
                                        </tr>
                                    {% elseif item.opereMurarie == 2 %}
                                        <tr>
                                            <td class=\"border\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">{{ qtyPP }}</td>
                                            <td class=\"border\">27.20</td>
                                            <td class=\"border\">{{ qtyPP * 27.20 }}</td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>SERVIZI</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto TV terrestre</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyPT }}</td>
                                        <td class=\"border\">41.00</td>
                                        <td class=\"border\">{{ qtyPT * 41 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.4.230.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Cavo coassiale per impianti di antenna TV  al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border\"></td>
                                        <td class=\"border\">3.20</td>
                                        <td class=\"border\"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Impianto Telefonico</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.3.210.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa telefonica</strong> con presa ad 1 coppia
                                            </small>
                                        </td>
                                        <td class=\"border\">{{ qtyTP }}</td>
                                        <td class=\"border\">26.40</td>
                                        <td class=\"border\">{{ qtyTP * 26.40 }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.4.210.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Linea telefonica in cavo multicoppie a 2 coppie al metro per linea dorsale
                                            </small>
                                        </td>
                                        <td class=\"border\"></td>
                                        <td class=\"border\">1.70</td>
                                        <td class=\"border\"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><strong>IMPIANTO DI RISCALDAMENTO</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio TERMOSTATI </i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.10.0</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia <br>
                                                per alimentare dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione<br>
                                                (<strong>termostato</strong>, umidostato, flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">100</td>
                                        <td class=\"border\">100</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio CALDAIA o POMPA DI CALORE</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.40.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di potenza di apparecchiature tecnologiche, eseguito sottotraccia,<br>
                                                per alimentare dal quadro elettrico di centrale o di zona, una apparecchiatura di potenza <br>
                                                (<strong>bruciatore</strong>, elettropompa, compressore, aerotermo, unità termoventilante, aspiratore, ventilconvettore, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">113</td>
                                        <td class=\"border\">113</td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"5\" class=\"border table-light\"><i>Allaccio collettori</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">13.21.10.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Collegamento elettrico di regolazione di impianti tecnologici, eseguito sottotraccia per alimentare <br>
                                                dal quadro elettrico di centrale o di zona una apparecchiatura di regololazione (termostato, umidostato,<br>
                                                flussostato, sonda di temperatura, pressostato, ecc.)
                                            </small>
                                        </td>
                                        <td class=\"border\">1</td>
                                        <td class=\"border\">100</td>
                                        <td class=\"border\">100</td>
                                    </tr>
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border\">
                                            {{ total|round('2') }} €
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">IVA 22%</td>
                                        <td class=\"border\">
                                            {{ vat|round('2') }} €
                                        </td>
                                    </tr>
                                    {% if sconto != 0 %}
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SCONTO {{ item.sconto }}%</td>
                                        <td class=\"border\">
                                            {{ sconto|round('2') }} €
                                        </td>
                                    </tr>
                                    {% endif %}
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\"><strong>TOTALE</strong></td>
                                        <td class=\"border\">
                                            <strong>{%  set grandtotal = total + vat - sconto %} {{ grandtotal|round('2') }} €</strong>
                                        </td>
                                    </tr>
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

{% endblock %}
{% block javascripts %}{% endblock %}", "expertations/details.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/details.html.twig");
    }
}
