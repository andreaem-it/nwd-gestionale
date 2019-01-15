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
        echo "                                    ";
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
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 106, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 107
            echo "                                        <tr>
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
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                P.to di comando su canalizzazione in traccia o in vista
                                                con un cavo non propagante l'incendio <br>
                                                <strong>Per P.to di comando.</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">9.90</td>
                                        <td class=\"border text-center\">";
        // line 145
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 145, $this->source); })()) * 9.9), "html", null, true);
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
        // line 155
        echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">6.30</td>
                                        <td class=\"border text-center\">";
        // line 157
        echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 157, $this->source); })()) * 6.3), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 159, $this->source); })()), 7, array()) > 0)) {
            // line 160
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 167, $this->source); })()), 7, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">9.00</td>
                                        <td class=\"border text-center\">";
            // line 169
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 169, $this->source); })()), 7, array()) * 9), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        }
        // line 172
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 172, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 172, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 173
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.3.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 181, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">3.10</td>
                                            <td class=\"border text-center\">";
            // line 183
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 183, $this->source); })()) * 3.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 186
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 186, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 186, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 187
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.4.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 195, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">10.60</td>
                                            <td class=\"border text-center\">";
            // line 197
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 197, $this->source); })()) * 10.6), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 200
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 200, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 201
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.5.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 209
            echo twig_escape_filter($this->env, (isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 209, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">13.40</td>
                                            <td class=\"border text-center\">";
            // line 211
            echo twig_escape_filter($this->env, ((isset($context["qtyPC"]) || array_key_exists("qtyPC", $context) ? $context["qtyPC"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPC" does not exist.', 211, $this->source); })()) * 13.4), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 214
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 214, $this->source); })()), 3, array()) != null)) {
            // line 215
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.1.15.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    P.to di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 222, $this->source); })()), 3, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">9.00 </td>
                                            <td class=\"border text-center\">";
            // line 224
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 224, $this->source); })()), 3, array()) * 9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 227
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
        // line 239
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 239, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">26.20</td>
                                        <td class=\"border text-center\">";
        // line 241
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 241, $this->source); })()) * 26.2), "html", null, true);
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
        // line 251
        echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 251, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">13.80</td>
                                        <td class=\"border text-center\">";
        // line 253
        echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 253, $this->source); })()) * 13.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 255
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 255, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 255, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 256
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 264, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">5.70</td>
                                            <td class=\"border text-center\">";
            // line 266
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 266, $this->source); })()) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 269
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 269, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 269, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 270
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 278
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 278, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">15.30</td>
                                            <td class=\"border text-center\">";
            // line 280
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 280, $this->source); })()) * 15.3), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 283
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 283, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 284
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to di comando per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 292
            echo twig_escape_filter($this->env, (isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 292, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">";
            // line 294
            echo twig_escape_filter($this->env, ((isset($context["qtyPP"]) || array_key_exists("qtyPP", $context) ? $context["qtyPP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPP" does not exist.', 294, $this->source); })()) * 27.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 297
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 297, $this->source); })()), 3, array()) > 0)) {
            // line 298
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 306, $this->source); })()), 3, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">12.60</td>
                                        <td class=\"border text-center\">";
            // line 308
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 308, $this->source); })()), 3, array()) * 12.6), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        }
        // line 311
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 311, $this->source); })()), 4, array()) > 0)) {
            // line 312
            echo "                                    <tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 319, $this->source); })()), 4, array()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">4.80</td>
                                        <td class=\"border text-center\">";
            // line 321
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 321, $this->source); })()), 4, array()) * 4.8), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        }
        // line 324
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 324, $this->source); })()), 5, array()) > 0)) {
            // line 325
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.2.42</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Per allaccio ventilatori e o aspiratori
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 332, $this->source); })()), 5, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">6.40</td>
                                            <td class=\"border text-center\">";
            // line 334
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 334, $this->source); })()), 5, array()) * 6.4), "html", null, true);
            echo "</td>
                                        </tr>
                                        </tr>
                                    ";
        }
        // line 338
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
        // line 351
        echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 351, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">";
        // line 353
        echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 353, $this->source); })()) * 25), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 355
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 355, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 355, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 356
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>NON Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 364
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 364, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">8.0</td>
                                            <td class=\"border text-center\">";
            // line 366
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 366, $this->source); })()) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 369
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 369, $this->source); })()), "opereMurarieIntonaco", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 369, $this->source); })()), "opereMurariePietra", array()) == 0))) {
            // line 370
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature <br>
                                                    <strong>Intonacate.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 378
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 378, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">";
            // line 380
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 380, $this->source); })()) * 12.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 383
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 383, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 384
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature in <br>
                                                    <strong>mattone pieno, calcestruzzo pietra.</strong> Sono esclusi l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 392
            echo twig_escape_filter($this->env, (isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 392, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.20</td>
                                            <td class=\"border text-center\">";
            // line 394
            echo twig_escape_filter($this->env, ((isset($context["qtyPS"]) || array_key_exists("qtyPS", $context) ? $context["qtyPS"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPS" does not exist.', 394, $this->source); })()) * 12.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 397
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 397, $this->source); })()), "antenna", array()) > 0)) {
            // line 398
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
                                            <td class=\"border text-center\">331.00</td>
                                            <td class=\"border text-center\">331.00</td>
                                        </tr>
                                        ";
            // line 419
            if (((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 419, $this->source); })()) < 5)) {
                // line 420
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
            } elseif (((            // line 435
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 435, $this->source); })()) > 6) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 435, $this->source); })()) < 10))) {
                // line 436
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
            } elseif (((            // line 451
(isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 451, $this->source); })()) > 11) && ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 451, $this->source); })()) < 15))) {
                // line 452
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
            // line 468
            echo "                                    ";
        }
        // line 469
        echo "                                    <tr>
                                        <td class=\"border text-center\">15.3.110.1</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Incremento al punto presa di servizio per <strong>presa di ricezione TV terrestre</strong>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
        // line 476
        echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 476, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">41.00</td>
                                        <td class=\"border text-center\">";
        // line 478
        echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 478, $this->source); })()) * 41), "html", null, true);
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
        // line 487
        echo twig_escape_filter($this->env, (isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 487, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">3.20</td>
                                        <td class=\"border text-center\">";
        // line 489
        echo twig_escape_filter($this->env, ((isset($context["calcTVCable"]) || array_key_exists("calcTVCable", $context) ? $context["calcTVCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTVCable" does not exist.', 489, $this->source); })()) * 3.2), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 532
        echo "                                    ";
        if (((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 532, $this->source); })()) != 0)) {
            // line 533
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
            // line 543
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 543, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">89.00</td>
                                            <td class=\"border text-center\">";
            // line 545
            echo twig_escape_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 545, $this->source); })()) * 89), "html", null, true);
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
            // line 554
            echo twig_escape_filter($this->env, (isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 554, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">20.00</td>
                                            <td class=\"border text-center\">";
            // line 556
            echo twig_escape_filter($this->env, ((isset($context["qtyTR"]) || array_key_exists("qtyTR", $context) ? $context["qtyTR"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTR" does not exist.', 556, $this->source); })()) * 20), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 559
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 559, $this->source); })()), "numPreseTelefono", array()) != 0)) {
            // line 560
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
            // line 570
            echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 570, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">26.20</td>
                                            <td class=\"border text-center\">";
            // line 572
            echo twig_escape_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 572, $this->source); })()) * 26.2), "html", null, true);
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
            // line 581
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 581, $this->source); })()), 0), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">1.70</td>
                                            <td class=\"border text-center\">";
            // line 583
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["calcTPCable"]) || array_key_exists("calcTPCable", $context) ? $context["calcTPCable"] : (function () { throw new Twig_Error_Runtime('Variable "calcTPCable" does not exist.', 583, $this->source); })()) * 1.7), 2), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            // line 585
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 585, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 585, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
                // line 586
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.20.1</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                        Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">";
                // line 594
                echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 594, $this->source); })()), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">8.00</td>
                                                <td class=\"border text-center\">";
                // line 596
                echo twig_escape_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 596, $this->source); })()) * 8), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 599
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 599, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 599, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
                // line 600
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.3.20.2</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                        Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">";
                // line 608
                echo twig_escape_filter($this->env, (isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 608, $this->source); })()), "html", null, true);
                echo "</td>
                                                <td class=\"border text-center\">12.9</td>
                                                <td class=\"border text-center\">";
                // line 610
                echo twig_escape_filter($this->env, ((isset($context["qtyPT"]) || array_key_exists("qtyPT", $context) ? $context["qtyPT"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPT" does not exist.', 610, $this->source); })()) * 12.9), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 613
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 613, $this->source); })()), "opereMurariePietra", array()) == 1)) {
                // line 614
                echo "                                            <td class=\"border text-center\">15.3.20.3</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
                // line 620
                echo twig_escape_filter($this->env, (isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 620, $this->source); })()), "html", null, true);
                echo "</td>
                                            <td class=\"border text-center\">12.1</td>
                                            <td class=\"border text-center\">";
                // line 622
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyTP"]) || array_key_exists("qtyTP", $context) ? $context["qtyTP"] : (function () { throw new Twig_Error_Runtime('Variable "qtyTP" does not exist.', 622, $this->source); })()) * 12.1), 1), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 624
            echo "                                    ";
        }
        // line 625
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 625, $this->source); })()), "numPreseDati", array()) != 0) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 625, $this->source); })()), "level", array()) == 3))) {
            // line 626
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
            // line 636
            echo twig_escape_filter($this->env, (isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 636, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">91.00</td>
                                            <td class=\"border text-center\">";
            // line 638
            echo twig_escape_filter($this->env, ((isset($context["qtyPD"]) || array_key_exists("qtyPD", $context) ? $context["qtyPD"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPD" does not exist.', 638, $this->source); })()) * 26.2), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 641
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 641, $this->source); })()), "campanello", array()) != 0)) {
            // line 642
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
                                            <td class=\"border text-center\">28.00</td>
                                            <td class=\"border text-center\">28.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">20.00</td>
                                            <td class=\"border text-center\">20.00</td>
                                        </tr>
                                    ";
        }
        // line 669
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
                                        <td class=\"border text-center\">139.00</td>
                                        <td class=\"border text-center\">139.00</td>
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
                                    ";
        // line 698
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 698, $this->source); })()), 14, array()) > 0)) {
            // line 699
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
            // line 709
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 709, $this->source); })()), 14, array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">64.00</td>
                                            <td class=\"border text-center\">";
            // line 711
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 711, $this->source); })()), 14, array()) * 64), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 714
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
        // line 727
        echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 727, $this->source); })()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">25.00</td>
                                        <td class=\"border text-center\">";
        // line 729
        echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 729, $this->source); })()) * 25), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 731
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 731, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 731, $this->source); })()), "opereMurarieIntonaco", array()) == 0))) {
            // line 732
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. <br>
                                                    Sono esclusi: l’intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 740
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 740, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">8.00</td>
                                            <td class=\"border text-center\">";
            // line 742
            echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 742, $this->source); })()) * 8), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 745
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 745, $this->source); })()), "opereMurarie", array()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 745, $this->source); })()), "opereMurarieIntonaco", array()) == 1))) {
            // line 746
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.3.20.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature Intonacate. <br>
                                                    Sono esclusi: l'intonaco, la rasatura e la tinteggiatura
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">";
            // line 754
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 754, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">12.9</td>
                                            <td class=\"border text-center\">";
            // line 756
            echo twig_escape_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 756, $this->source); })()) * 12.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 759
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 759, $this->source); })()), "opereMurariePietra", array()) == 1)) {
            // line 760
            echo "                                        <td class=\"border text-center\">15.3.20.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">";
            // line 766
            echo twig_escape_filter($this->env, (isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 766, $this->source); })()), "html", null, true);
            echo "</td>
                                        <td class=\"border text-center\">12.1</td>
                                        <td class=\"border text-center\">";
            // line 768
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["qtyPST"]) || array_key_exists("qtyPST", $context) ? $context["qtyPST"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPST" does not exist.', 768, $this->source); })()) * 12.1), 1), "html", null, true);
            echo "</td>
                                    ";
        }
        // line 770
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
        // line 782
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 782, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">";
        // line 784
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 784, $this->source); })()), "pianiCasa", array()) * 100), "html", null, true);
        echo "</td>
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
                                        <td class=\"border text-center\">";
        // line 796
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 796, $this->source); })()), 20, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">41.90</td>
                                        <td class=\"border text-center\">";
        // line 798
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 798, $this->source); })()), 20, array()) * 41.9), "html", null, true);
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
                                        <td class=\"border text-center\">";
        // line 812
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 812, $this->source); })()), 18, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">113.00</td>
                                        <td class=\"border text-center\">";
        // line 814
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 814, $this->source); })()), 18, array()) * 113), "html", null, true);
        echo "</td>
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
        // line 828
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 828, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">100.00</td>
                                        <td class=\"border text-center\">";
        // line 830
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 830, $this->source); })()), "pianiCasa", array()) * 100), "html", null, true);
        echo "</td>
                                    </tr>
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
                                        <td class=\"border text-center\">";
        // line 842
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 842, $this->source); })()), 17, array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\"> 16.30 </td>
                                        <td class=\"border text-center\">";
        // line 844
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 844, $this->source); })()), 17, array()) * 16.3), "html", null, true);
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
                                    ";
        // line 860
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 860, $this->source); })()), 22, array()) > 0)) {
            // line 861
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.1</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 12  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">26.00</td>
                                            <td class=\"border text-center\">26.00</td>
                                        </tr>
                                    ";
        }
        // line 873
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 873, $this->source); })()), 23, array()) > 0)) {
            // line 874
            echo "                                        <tr>
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
                                    ";
        }
        // line 886
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 886, $this->source); })()), 24, array()) > 0)) {
            // line 887
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 54  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">70.00</td>
                                            <td class=\"border text-center\">70.00</td>
                                        </tr>
                                    ";
        }
        // line 899
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 899, $this->source); })()), 25, array()) > 0)) {
            // line 900
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.6.220.5</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Centralino tipo appartamento incassato a parete 72  moduli. <strong>PER CITOFONO E/O CENTRALINO</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">103.00</td>
                                            <td class=\"border text-center\">103.00</td>
                                        </tr>
                                    ";
        }
        // line 912
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
        // line 923
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 923, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">67.00</td>
                                        <td class=\"border text-center\">";
        // line 925
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 925, $this->source); })()), "numCircuiti", array()) * 67), "html", null, true);
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
                                        <td class=\"border text-center\">";
        // line 937
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 937, $this->source); })()), 22, array()) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 937, $this->source); })()), 23, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 937, $this->source); })()), 24, array())) + twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 937, $this->source); })()), 25, array())), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
                                    </tr>
                                    ";
        // line 941
        if ((twig_get_attribute($this->env, $this->source, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new Twig_Error_Runtime('Variable "itemsArray" does not exist.', 941, $this->source); })()), 25, array()) > 0)) {
            // line 942
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
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
                                    </tr>
                                    ";
        }
        // line 957
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
        // line 976
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 976, $this->source); })()), "pianiCasa", array()) * 15) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">1.80</td>
                                        <td class=\"border text-center\">";
        // line 978
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 978, $this->source); })()), "pianiCasa", array()) * 15) * 3) * twig_number_format_filter($this->env, 1.8, 2)), "html", null, true);
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
        // line 990
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 990, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">2.80</td>
                                        <td class=\"border text-center\">";
        // line 992
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 992, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_number_format_filter($this->env, 2.8, 2)), "html", null, true);
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
        // line 1001
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1001, $this->source); })()), "pianiCasa", array()) * 15) * 2), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">3.30</td>
                                        <td class=\"border text-center\">";
        // line 1003
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1003, $this->source); })()), "pianiCasa", array()) * 15) * 2) * twig_number_format_filter($this->env, 3.3, 2)), "html", null, true);
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
        // line 1013
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1013, $this->source); })()), "pianiCasa", array()) * 4), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">8.40</td>
                                        <td class=\"border text-center\">";
        // line 1015
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1015, $this->source); })()), "pianiCasa", array()) * 4) * twig_number_format_filter($this->env, 8.4, 2)), "html", null, true);
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
        // line 1025
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1025, $this->source); })()), "pianiCasa", array()) * 2) * 3), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">0.80</td>
                                        <td class=\"border text-center\">";
        // line 1027
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1027, $this->source); })()), "pianiCasa", array()) * 2) * 3) * twig_number_format_filter($this->env, 0.8, 2)), "html", null, true);
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
        // line 1044
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1044, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                                        <td class=\"border text-center\">14.30</td>
                                        <td class=\"border text-center\">";
        // line 1046
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1046, $this->source); })()), "pianiCasa", array()) * twig_number_format_filter($this->env, 14.3, 2)), "html", null, true);
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
                                        <td class=\"border text-center\">124.00</td>
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
                                        <td class=\"border text-center\">70.00</td>
                                    </tr>
                                    ";
        // line 1086
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1086, $this->source); })()), "spd", array()) == "1")) {
            // line 1087
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1087, $this->source); })()), "trifase", array()) == 0)) {
                // line 1088
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">191.00</td>
                                                <td class=\"border text-center\">191.00</td>
                                            </tr>
                                        ";
            } else {
                // line 1100
                echo "                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">3</td>
                                                <td class=\"border text-center\">191.00</td>
                                                <td class=\"border text-center\">573.00</td>
                                            </tr>
                                        ";
            }
            // line 1112
            echo "                                    ";
        } else {
            // line 1113
            echo "                                        <tr>
                                            <td class=\"border text-center\">15.7.204.4</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Limitatore di sovratensioni (SPD) Tipo 2. Quadripolare per reti TT (esecuzione 3+1).
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">239.00</td>
                                            <td class=\"border text-center\">239.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">125.00</td>
                                            <td class=\"border text-center\">125.00</td>
                                        </tr>
                                    ";
        }
        // line 1136
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
        // line 1149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1149, $this->source); })()), "opereMurarie", array()) == 0)) {
            // line 1150
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
            // line 1162
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
        // line 1174
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1174, $this->source); })()), "level", array()) == 3)) {
            // line 1175
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
            // line 1187
            echo twig_escape_filter($this->env, (isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1187, $this->source); })()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">27.00</td>
                                            <td class=\"border text-center\">";
            // line 1189
            echo twig_escape_filter($this->env, ((isset($context["qtyPL"]) || array_key_exists("qtyPL", $context) ? $context["qtyPL"] : (function () { throw new Twig_Error_Runtime('Variable "qtyPL" does not exist.', 1189, $this->source); })()) * 27), "html", null, true);
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
            // line 1200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1200, $this->source); })()), "pianiCasa", array()), "html", null, true);
            echo "</td>
                                            <td class=\"border text-center\">40</td>
                                            <td class=\"border text-center\">";
            // line 1202
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1202, $this->source); })()), "pianiCasa", array()) * 40), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 1205
        echo "
                                    <!-- TOTALI -->
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SUBTOTALE</td>
                                        <td class=\"border text-center\">
                                            ";
        // line 1211
        echo twig_escape_filter($this->env, twig_round((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1211, $this->source); })()), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 1214
        if (((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1214, $this->source); })()) != 0)) {
            // line 1215
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\">SCONTO ";
            // line 1217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1217, $this->source); })()), "sconto", array()), "html", null, true);
            echo "%</td>
                                            <td class=\"border text-center\">
                                                ";
            // line 1219
            echo twig_escape_filter($this->env, twig_round((isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1219, $this->source); })()), "2"), "html", null, true);
            echo " €
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE SCONTATO</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1226
            echo twig_escape_filter($this->env, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1226, $this->source); })()) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1226, $this->source); })())), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 1230
            echo "                                        <tr>
                                            <td colspan=\"3\" class=\"border-0\"></td>
                                            <td class=\"border\"><strong>TOTALE</strong></td>
                                            <td class=\"border text-center\">
                                                <strong>";
            // line 1234
            $context["grandtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1234, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1234, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1234, $this->source); })()));
            echo " ";
            echo twig_escape_filter($this->env, twig_round((isset($context["grandtotal"]) || array_key_exists("grandtotal", $context) ? $context["grandtotal"] : (function () { throw new Twig_Error_Runtime('Variable "grandtotal" does not exist.', 1234, $this->source); })()), "2"), "html", null, true);
            echo " €</strong>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 1238
        echo "                                    ";
        // line 1245
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

    // line 1258
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1259
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
        // line 1286
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

    // line 1352
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1353
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
        return array (  1963 => 1353,  1954 => 1352,  1879 => 1286,  1851 => 1259,  1842 => 1258,  1820 => 1245,  1818 => 1238,  1809 => 1234,  1803 => 1230,  1796 => 1226,  1786 => 1219,  1781 => 1217,  1777 => 1215,  1775 => 1214,  1769 => 1211,  1761 => 1205,  1755 => 1202,  1750 => 1200,  1736 => 1189,  1731 => 1187,  1717 => 1175,  1714 => 1174,  1700 => 1162,  1686 => 1150,  1684 => 1149,  1669 => 1136,  1644 => 1113,  1641 => 1112,  1627 => 1100,  1613 => 1088,  1610 => 1087,  1608 => 1086,  1565 => 1046,  1560 => 1044,  1540 => 1027,  1535 => 1025,  1522 => 1015,  1517 => 1013,  1504 => 1003,  1499 => 1001,  1487 => 992,  1482 => 990,  1467 => 978,  1462 => 976,  1441 => 957,  1424 => 942,  1422 => 941,  1415 => 937,  1400 => 925,  1395 => 923,  1382 => 912,  1368 => 900,  1365 => 899,  1351 => 887,  1348 => 886,  1334 => 874,  1331 => 873,  1317 => 861,  1315 => 860,  1296 => 844,  1291 => 842,  1276 => 830,  1271 => 828,  1254 => 814,  1249 => 812,  1232 => 798,  1227 => 796,  1212 => 784,  1207 => 782,  1193 => 770,  1188 => 768,  1183 => 766,  1175 => 760,  1172 => 759,  1166 => 756,  1161 => 754,  1151 => 746,  1148 => 745,  1142 => 742,  1137 => 740,  1127 => 732,  1125 => 731,  1120 => 729,  1115 => 727,  1100 => 714,  1094 => 711,  1089 => 709,  1077 => 699,  1075 => 698,  1044 => 669,  1015 => 642,  1012 => 641,  1006 => 638,  1001 => 636,  989 => 626,  986 => 625,  983 => 624,  978 => 622,  973 => 620,  965 => 614,  962 => 613,  956 => 610,  951 => 608,  941 => 600,  938 => 599,  932 => 596,  927 => 594,  917 => 586,  915 => 585,  910 => 583,  905 => 581,  893 => 572,  888 => 570,  876 => 560,  873 => 559,  867 => 556,  862 => 554,  850 => 545,  845 => 543,  833 => 533,  830 => 532,  825 => 489,  820 => 487,  808 => 478,  803 => 476,  794 => 469,  791 => 468,  773 => 452,  771 => 451,  754 => 436,  752 => 435,  735 => 420,  733 => 419,  710 => 398,  707 => 397,  701 => 394,  696 => 392,  686 => 384,  683 => 383,  677 => 380,  672 => 378,  662 => 370,  659 => 369,  653 => 366,  648 => 364,  638 => 356,  636 => 355,  631 => 353,  626 => 351,  611 => 338,  604 => 334,  599 => 332,  590 => 325,  587 => 324,  581 => 321,  576 => 319,  567 => 312,  564 => 311,  558 => 308,  553 => 306,  543 => 298,  540 => 297,  534 => 294,  529 => 292,  519 => 284,  516 => 283,  510 => 280,  505 => 278,  495 => 270,  492 => 269,  486 => 266,  481 => 264,  471 => 256,  469 => 255,  464 => 253,  459 => 251,  446 => 241,  441 => 239,  427 => 227,  421 => 224,  416 => 222,  407 => 215,  404 => 214,  398 => 211,  393 => 209,  383 => 201,  380 => 200,  374 => 197,  369 => 195,  359 => 187,  356 => 186,  350 => 183,  345 => 181,  335 => 173,  332 => 172,  326 => 169,  321 => 167,  312 => 160,  310 => 159,  305 => 157,  300 => 155,  287 => 145,  282 => 143,  257 => 120,  251 => 117,  246 => 115,  236 => 107,  233 => 106,  227 => 103,  222 => 101,  212 => 93,  209 => 92,  203 => 89,  198 => 87,  188 => 79,  186 => 78,  181 => 76,  176 => 74,  163 => 64,  158 => 62,  125 => 31,  119 => 30,  110 => 27,  105 => 26,  100 => 25,  96 => 24,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                                    {% if itemsArray.7 > 0 %}
                                    <tr>
                                        <td class=\"border text-center\">15.1.15.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.7 }}</td>
                                        <td class=\"border text-center\">9.00</td>
                                        <td class=\"border text-center\">{{ itemsArray.7 * 9.00 }}</td>
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
                                    {% if itemsArray.3 != null %}
                                        <tr>
                                            <td class=\"border text-center\">15.1.15.2</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    P.to di comando aggiuntivo sulla stessa scatola. Per P.to di comando aggiuntivo.
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">{{ itemsArray.3 }}</td>
                                            <td class=\"border text-center\">9.00 </td>
                                            <td class=\"border text-center\">{{ itemsArray.3 * 9.00 }}</td>
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
                                    {% if itemsArray.3 > 0 %}
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.3</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Punto presa elettrica da collegare alla linea di alimentazione compensata a parte come allaccio elettrico. <br>
                                                Pt.o presa elettrica 2P+T 10/16A + UNEL. (Schuko Bipasso)<br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.3 }}</td>
                                        <td class=\"border text-center\">12.60</td>
                                        <td class=\"border text-center\">{{ itemsArray.3 * 12.60 }}</td>
                                    </tr>
                                    {% endif %}
                                    {% if itemsArray.4 > 0 %}
                                    <tr>
                                        <td class=\"border text-center\">15.2.41.2</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Presa elettrica aggiuntiva sulla stessa scatola 2P+T 10A o 16A o 10/16A (Bipresa) <br>
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.4 }}</td>
                                        <td class=\"border text-center\">4.80</td>
                                        <td class=\"border text-center\">{{ itemsArray.4 * 4.80 }}</td>
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
                                            <td class=\"border text-center\">6.40</td>
                                            <td class=\"border text-center\">{{ itemsArray.5 * 6.40 }}</td>
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
                                            <td class=\"border text-center\">{{ (calcTPCable * 1.70)|number_format(2) }}</td>
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
                                            <td class=\"border text-center\">28.00</td>
                                            <td class=\"border text-center\">28.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.3.90</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Incremento al punto presa di servizio per segnalatore acustico di tipo a <strong> SUONERIA</strong>
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">20.00</td>
                                            <td class=\"border text-center\">20.00</td>
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
                                        <td class=\"border text-center\">139.00</td>
                                        <td class=\"border text-center\">139.00</td>
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
                                            <td class=\"border text-center\">64.00</td>
                                            <td class=\"border text-center\">{{ itemsArray.14 * 64.00 }}</td>
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
                                            <td class=\"border text-center\">8.00</td>
                                            <td class=\"border text-center\">{{ qtyPST  * 8.00}}</td>
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
                                        <td colspan=\"5\" class=\"border table-light\"><i>Termostato</i></td>
                                    </tr>
                                    <tr>
                                        <td class=\"border text-center\">13.19.10.4</td>
                                        <td class=\"text-small border\" style=\"max-width: 300px\">
                                            <small>
                                                Termostato elettronico da parete.
                                            </small>
                                        </td>
                                        <td class=\"border text-center\">{{ itemsArray.20 }}</td>
                                        <td class=\"border text-center\">41.90</td>
                                        <td class=\"border text-center\">{{ itemsArray.20 * 41.90 }}</td>
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
                                        <td class=\"border text-center\">113.00</td>
                                        <td class=\"border text-center\">{{ itemsArray.18 * 113.00 }}</td>
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
                                        <td class=\"border text-center\"> 16.30 </td>
                                        <td class=\"border text-center\">{{ itemsArray.17 * 16.30 }}</td>
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
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">26.00</td>
                                            <td class=\"border text-center\">26.00</td>
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
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">43.00</td>
                                            <td class=\"border text-center\">43.00</td>
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
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">70.00</td>
                                            <td class=\"border text-center\">70.00</td>
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
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">103.00</td>
                                            <td class=\"border text-center\">103.00</td>
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
                                        <td class=\"border text-center\">{{ itemsArray.22 + itemsArray.23 + itemsArray.24 + itemsArray.25 }}</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
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
                                        <td class=\"border text-center\">1</td>
                                        <td class=\"border text-center\">42.00</td>
                                        <td class=\"border text-center\">42.00</td>
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
                                        <td class=\"border text-center\">124.00</td>
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
                                        <td class=\"border text-center\">70.00</td>
                                    </tr>
                                    {% if item.spd == \"1\" %}
                                        {% if item.trifase == 0 %}
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">1</td>
                                                <td class=\"border text-center\">191.00</td>
                                                <td class=\"border text-center\">191.00</td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td class=\"border text-center\">15.7.202</td>
                                                <td class=\"text-small border\" style=\"max-width: 300px\">
                                                    <small>
                                                        Scaricatore per corrente di fulmine N-PE  SPD Tipo 1
                                                    </small>
                                                </td>
                                                <td class=\"border text-center\">3</td>
                                                <td class=\"border text-center\">191.00</td>
                                                <td class=\"border text-center\">573.00</td>
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
                                            <td class=\"border text-center\">239.00</td>
                                            <td class=\"border text-center\">239.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"border text-center\">15.7.201</td>
                                            <td class=\"text-small border\" style=\"max-width: 300px\">
                                                <small>
                                                    Scaricatore per corrente di fulmine N-PE SPD Tipo 2
                                                </small>
                                            </td>
                                            <td class=\"border text-center\">1</td>
                                            <td class=\"border text-center\">125.00</td>
                                            <td class=\"border text-center\">125.00</td>
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
