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
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Computometrico</small></h3>
            </div>
        </div>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
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
        // line 45
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">22.20</td>
                                        <td class=\"border\">";
        // line 47
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 47, $this->source); })()) * 22.2), "html", null, true);
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
        // line 57
        echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">11.80</td>
                                        <td class=\"border\">";
        // line 59
        echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 59, $this->source); })()) * 11.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 61, $this->source); })()), "opereMurarie", array()) == "0")) {
            // line 62
            echo "                                    <tr>
                                        <td class=\"border\">15.1.3.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>NON Intonacate.</strong> <br>
                                                Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                            </small>
                                        </td>
                                        <td class=\"border\">";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border\">5.60</td>
                                        <td class=\"border\">";
            // line 72
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 72, $this->source); })()) * 5.6), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 74, $this->source); })()), "opereMurarie", array()) == "1")) {
            // line 75
            echo "                                        <tr>
                                            <td class=\"border\">15.1.4.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature <strong>Intonacate.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">14.90</td>
                                            <td class=\"border\">";
            // line 85
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 85, $this->source); })()) * 14.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->source); })()), "opereMurarie", array()) == "2")) {
            // line 88
            echo "                                        <tr>
                                            <td class=\"border\">15.1.5.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per P.to luce per opere murarie su murature in <strong>mattone pieno, calcestruzzo o pietra.</strong> <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 96, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">26.90</td>
                                            <td class=\"border\">";
            // line 98
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 98, $this->source); })()) * 26.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 101
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
        // line 113
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">9.90</td>
                                        <td class=\"border\">";
        // line 115
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 115, $this->source); })()) * 9.9), "html", null, true);
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
        // line 125
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">6.30</td>
                                        <td class=\"border\">";
        // line 127
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 127, $this->source); })()) * 6.3), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">9.00</td>
                                        <td class=\"border\">-</td>
                                    </tr>
                                    ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 140, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 141
            echo "                                        <tr>
                                            <td class=\"border\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 149, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">3.10</td>
                                            <td class=\"border\">";
            // line 151
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 151, $this->source); })()) * 3.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 153
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 153, $this->source); })()), "opereMurarie", array()) == 1)) {
            // line 154
            echo "                                        <tr>
                                            <td class=\"border\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 162, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">10.60</td>
                                            <td class=\"border\">";
            // line 164
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 164, $this->source); })()) * 10.6), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 166
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 166, $this->source); })()), "opereMurarie", array()) == 2)) {
            // line 167
            echo "                                        <tr>
                                            <td class=\"border\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 175
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 175, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">13.40</td>
                                            <td class=\"border\">";
            // line 177
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 177, $this->source); })()) * 13.4), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 180
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
        // line 192
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 192, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">26.20</td>
                                        <td class=\"border\">";
        // line 194
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 194, $this->source); })()) * 26.2), "html", null, true);
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
        // line 204
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 204, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">13.80</td>
                                        <td class=\"border\">";
        // line 206
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 206, $this->source); })()) * 13.8), "html", null, true);
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
        // line 216
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 216, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border\">12.60</td>
                                        <td class=\"border\">";
        // line 218
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 218, $this->source); })()) * 12.6), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"border\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">4.80</td>
                                        <td class=\"border\">-</td>
                                    </tr>
                                    ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 231, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 232
            echo "                                        <tr>
                                            <td class=\"border\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 240
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 240, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">5.70</td>
                                            <td class=\"border\">";
            // line 242
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 242, $this->source); })()) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 244
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 244, $this->source); })()), "opereMurarie", array()) == 1)) {
            // line 245
            echo "                                        <tr>
                                            <td class=\"border\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 253
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 253, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">15.30</td>
                                            <td class=\"border\">";
            // line 255
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 255, $this->source); })()) * 15.3), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 257
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 257, $this->source); })()), "opereMurarie", array()) == 2)) {
            // line 258
            echo "                                        <tr>
                                            <td class=\"border\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border\">";
            // line 266
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 266, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border\">27.20</td>
                                            <td class=\"border\">";
            // line 268
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 268, $this->source); })()) * 27.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 271
        echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border\">
                                            ";
        // line 275
        echo twig_escape_filter($this->env, twig_round((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 275, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">IVA 22%</td>
                                        <td class=\"border\">
                                            ";
        // line 282
        echo twig_escape_filter($this->env, twig_round((isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 282, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 285
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 285, $this->source); })()) != 0)) {
            // line 286
            echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SCONTO ";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 288, $this->source); })()), "sconto", array()), "html", null, true);
            echo "%</td>
                                        <td class=\"border\">
                                            ";
            // line 290
            echo twig_escape_filter($this->env, twig_round((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 290, $this->source); })()), "2"), "html", null, true);
            echo " €
                                        </td>
                                    </tr>
                                    ";
        }
        // line 294
        echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\"><strong>TOTALE</strong></td>
                                        <td class=\"border\">
                                            <strong>";
        // line 298
        $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 298, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 298, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 298, $this->source); })()));
        echo " ";
        echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 298, $this->source); })()), "2"), "html", null, true);
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

    // line 312
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 313
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

    // line 340
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
        return array (  593 => 340,  557 => 313,  548 => 312,  522 => 298,  516 => 294,  509 => 290,  504 => 288,  500 => 286,  498 => 285,  492 => 282,  482 => 275,  476 => 271,  470 => 268,  465 => 266,  455 => 258,  453 => 257,  448 => 255,  443 => 253,  433 => 245,  431 => 244,  426 => 242,  421 => 240,  411 => 232,  409 => 231,  393 => 218,  388 => 216,  375 => 206,  370 => 204,  357 => 194,  352 => 192,  338 => 180,  332 => 177,  327 => 175,  317 => 167,  315 => 166,  310 => 164,  305 => 162,  295 => 154,  293 => 153,  288 => 151,  283 => 149,  273 => 141,  271 => 140,  255 => 127,  250 => 125,  237 => 115,  232 => 113,  218 => 101,  212 => 98,  207 => 96,  197 => 88,  195 => 87,  190 => 85,  185 => 83,  175 => 75,  173 => 74,  168 => 72,  163 => 70,  153 => 62,  151 => 61,  146 => 59,  141 => 57,  128 => 47,  123 => 45,  93 => 17,  87 => 16,  78 => 13,  73 => 12,  68 => 11,  64 => 10,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
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
                                    <tr>
                                        <td class=\"border\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">9.00</td>
                                        <td class=\"border\">-</td>
                                    </tr>
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
                                    <tr>
                                        <td class=\"border\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border\">-</td>
                                        <td class=\"border\">4.80</td>
                                        <td class=\"border\">-</td>
                                    </tr>
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
