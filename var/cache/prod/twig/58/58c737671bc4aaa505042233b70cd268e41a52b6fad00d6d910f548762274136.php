<?php

/* expertations/details.html.twig */
class __TwigTemplate_b44fcc11759f4974072c1e60dc57fa97c2c9a709f8c32483fa145da07d64b6fb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
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
        echo twig_escape_filter($this->env, ($context["qtyPL"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">22.20</td>
                                        <td class=\"border\">";
        // line 47
        echo twig_escape_filter($this->env, (($context["qtyPL"] ?? null) * 22.2), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPL"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">11.80</td>
                                        <td class=\"border\">";
        // line 59
        echo twig_escape_filter($this->env, (($context["qtyPL"] ?? null) * 11.8), "html", null, true);
        echo "</td>
                                    </tr>
                                    ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == "0")) {
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
            echo twig_escape_filter($this->env, ($context["qtyPL"] ?? null), "html", null, true);
            echo "</td>
                                        <td class=\"border\">5.60</td>
                                        <td class=\"border\">";
            // line 72
            echo twig_escape_filter($this->env, (($context["qtyPL"] ?? null) * 5.6), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 74
($context["item"] ?? null), "opereMurarie", array()) == "1")) {
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
            echo twig_escape_filter($this->env, ($context["qtyPL"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">14.90</td>
                                            <td class=\"border\">";
            // line 85
            echo twig_escape_filter($this->env, (($context["qtyPL"] ?? null) * 14.9), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "opereMurarie", array()) == "2")) {
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
            echo twig_escape_filter($this->env, ($context["qtyPL"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">26.90</td>
                                            <td class=\"border\">";
            // line 98
            echo twig_escape_filter($this->env, (($context["qtyPL"] ?? null) * 26.9), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPC"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">9.90</td>
                                        <td class=\"border\">";
        // line 115
        echo twig_escape_filter($this->env, (($context["qtyPC"] ?? null) * 9.9), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPC"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">6.30</td>
                                        <td class=\"border\">";
        // line 127
        echo twig_escape_filter($this->env, (($context["qtyPC"] ?? null) * 6.3), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == 0)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPC"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">3.10</td>
                                            <td class=\"border\">";
            // line 151
            echo twig_escape_filter($this->env, (($context["qtyPC"] ?? null) * 3.1), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 153
($context["item"] ?? null), "opereMurarie", array()) == 1)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPC"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">10.60</td>
                                            <td class=\"border\">";
            // line 164
            echo twig_escape_filter($this->env, (($context["qtyPC"] ?? null) * 10.6), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 166
($context["item"] ?? null), "opereMurarie", array()) == 2)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPC"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">13.40</td>
                                            <td class=\"border\">";
            // line 177
            echo twig_escape_filter($this->env, (($context["qtyPC"] ?? null) * 13.4), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">26.20</td>
                                        <td class=\"border\">";
        // line 194
        echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 26.2), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">13.80</td>
                                        <td class=\"border\">";
        // line 206
        echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 13.8), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
        echo "</td>
                                        <td class=\"border\">12.60</td>
                                        <td class=\"border\">";
        // line 218
        echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 12.6), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == 0)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">5.70</td>
                                            <td class=\"border\">";
            // line 242
            echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 5.7), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 244
($context["item"] ?? null), "opereMurarie", array()) == 1)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">15.30</td>
                                            <td class=\"border\">";
            // line 255
            echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 15.3), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 257
($context["item"] ?? null), "opereMurarie", array()) == 2)) {
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
            echo twig_escape_filter($this->env, ($context["qtyPP"] ?? null), "html", null, true);
            echo "</td>
                                            <td class=\"border\">27.20</td>
                                            <td class=\"border\">";
            // line 268
            echo twig_escape_filter($this->env, (($context["qtyPP"] ?? null) * 27.2), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_round(($context["total"] ?? null), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">IVA 22%</td>
                                        <td class=\"border\">
                                            ";
        // line 282
        echo twig_escape_filter($this->env, twig_round(($context["vat"] ?? null), "2"), "html", null, true);
        echo " €
                                        </td>
                                    </tr>
                                    ";
        // line 285
        if ((($context["sconto"] ?? null) != 0)) {
            // line 286
            echo "                                    <tr>
                                        <td colspan=\"3\" class=\"border-0\"></td>
                                        <td class=\"border\">SCONTO ";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sconto", array()), "html", null, true);
            echo "%</td>
                                        <td class=\"border\">
                                            ";
            // line 290
            echo twig_escape_filter($this->env, twig_round(($context["sconto"] ?? null), "2"), "html", null, true);
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
        $context["grandtotal"] = ((($context["total"] ?? null) + ($context["vat"] ?? null)) - ($context["sconto"] ?? null));
        echo " ";
        echo twig_escape_filter($this->env, twig_round(($context["grandtotal"] ?? null), "2"), "html", null, true);
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
    }

    // line 312
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 340
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  557 => 340,  527 => 313,  524 => 312,  504 => 298,  498 => 294,  491 => 290,  486 => 288,  482 => 286,  480 => 285,  474 => 282,  464 => 275,  458 => 271,  452 => 268,  447 => 266,  437 => 258,  435 => 257,  430 => 255,  425 => 253,  415 => 245,  413 => 244,  408 => 242,  403 => 240,  393 => 232,  391 => 231,  375 => 218,  370 => 216,  357 => 206,  352 => 204,  339 => 194,  334 => 192,  320 => 180,  314 => 177,  309 => 175,  299 => 167,  297 => 166,  292 => 164,  287 => 162,  277 => 154,  275 => 153,  270 => 151,  265 => 149,  255 => 141,  253 => 140,  237 => 127,  232 => 125,  219 => 115,  214 => 113,  200 => 101,  194 => 98,  189 => 96,  179 => 88,  177 => 87,  172 => 85,  167 => 83,  157 => 75,  155 => 74,  150 => 72,  145 => 70,  135 => 62,  133 => 61,  128 => 59,  123 => 57,  110 => 47,  105 => 45,  75 => 17,  69 => 16,  60 => 13,  55 => 12,  50 => 11,  46 => 10,  37 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "expertations/details.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/details.html.twig");
    }
}
