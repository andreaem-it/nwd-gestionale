<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_b419ff5ec026ca786510f3566b7f6de4c9b5a9a14bc18a4d4ac46833c7e68752 extends Twig_Template
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
    public function block_title($context, array $blocks = array())
    {
        echo "Preventivo";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "jquery.collection.html.twig"), true);
        // line 12
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <strong>Cliente</strong>
                            <p><small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "client", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Tipo Impianto</strong>
                            <p><small>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "tipo", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Kw Enel</strong>
                            <p><small>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "kw", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Piani</strong>
                            <p><small>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pianiCasa", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Riscaldamento</strong>
                            <p><small>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "riscaldamento", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Opere Murarie</strong>
                            <p><small>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), "convertOMtoName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array())), "method"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1 \">
                            <strong>Trifase</strong>
                            <p>
                                <small>
                                    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "trifase", array()) == 0)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sconto", array()), "html", null, true);
        echo "</small></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <strong>Livello </strong>
                            <p><small>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Metri Quadrati</strong>
                            <p><small>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "squareMeters", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Data Generazione</strong>
                            <p><small>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Prezzo Preliminare</strong>
                            <p><small>";
        // line 73
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", array()), 2), "html", null, true);
        echo " €</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Illum. Sicurezza</strong>
                            <p><small>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "illumSicurezza", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-1\">
                            <strong>SPD</strong>
                            <p><small>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "spd", array()), "html", null, true);
        echo "</small></p>
                        </div>
                        <div class=\"col-lg-2 \">
                            <strong>Imp. Ausiliari</strong>
                            <p><small>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "impAusiliari", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"\" class=\"float-left\">
                            <h4 class=\"float-left mt-2\"><strong>Piano</strong> ";
        // line 98
        echo twig_escape_filter($this->env, ($context["floor"] ?? null), "html", null, true);
        echo "</h4>
                            <div class=\"btn-group float-right ml-3\">
                                ";
        // line 100
        $context["oldFloor"] = (($context["floor"] ?? null) - 1);
        // line 101
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "floor" => ($context["oldFloor"] ?? null))), "html", null, true);
        echo "\">-</a>
                                ";
        // line 102
        $context["newFloor"] = (($context["floor"] ?? null) + 1);
        // line 103
        echo "                                <a class=\"btn btn-secondary btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "floor" => ($context["newFloor"] ?? null))), "html", null, true);
        echo "\">+</a>
                            </div>

                        </div>
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>
                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["count"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 119
            echo "                                        <th>
                                            ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), "room", array(0 => $context["item"]), "method"), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                    <th>
                                        Sistemi
                                    </th>
                                </tr>
                            </thead>
                                ";
        // line 128
        $context["colCount"] = (twig_length_filter($this->env, ($context["count"] ?? null)) + 1);
        // line 129
        echo "                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 0, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 140
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val1_";
            // line 141
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 1, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val2_";
            // line 151
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 2, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 160
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val3_";
            // line 161
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 3, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 170
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val4_";
            // line 171
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 4, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 180
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val5_";
            // line 181
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 5, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 195
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val6_";
            // line 196
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 6, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 205
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val7_";
            // line 206
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 7, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 220
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val8_";
            // line 221
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 8, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 230
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val9_";
            // line 231
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 9, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 240
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val10_";
            // line 241
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 10, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 250
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val11_";
            // line 251
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 11, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 260
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val12_";
            // line 261
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 12, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 270
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val13_";
            // line 271
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 13, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 280
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val14_";
            // line 281
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 14, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 290
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val15_";
            // line 291
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 297
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 15, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 300
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val16_";
            // line 301
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 16, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 315
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val17_";
            // line 316
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 17, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 325
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val18_";
            // line 326
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 18, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 335
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val19_";
            // line 336
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 19, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 345
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val20_";
            // line 346
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 20, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 355
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val21_";
            // line 356
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 21, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 370
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val22_";
            // line 371
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 22, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 380
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val23_";
            // line 381
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 23, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 390
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val24_";
            // line 391
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 24, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 400
            echo "                                    <td>
                                        <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val25_";
            // line 401
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                    </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 25, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 411
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val26_";
            // line 412
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 26, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 421
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val27_";
            // line 422
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 27, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 436
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val28_";
            // line 437
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 443
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 28, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 446
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val29_";
            // line 447
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 29, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 456
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val30_";
            // line 457
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 30, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 466
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val31_";
            // line 467
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 473
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 31, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 476
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val32_";
            // line 477
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 483
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 32, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 486
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val33_";
            // line 487
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 493
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 33, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 496
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val34_";
            // line 497
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 500
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 503
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 34, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 506
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val35_";
            // line 507
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 510
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 513
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 35, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 515
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 516
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val36_";
            // line 517
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 523
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 36, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 526
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val37_";
            // line 527
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 37, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 536
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val38_";
            // line 537
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 38, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 546
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val39_";
            // line 547
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 553
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 39, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 556
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val40_";
            // line 557
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 563
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 40, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 566
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val41_";
            // line 567
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 41, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 576
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val42_";
            // line 577
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 583
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 42, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 585
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 586
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val43_";
            // line 587
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 593
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 43, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 596
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val44_";
            // line 597
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 603
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 44, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 606
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val45_";
            // line 607
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 613
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 45, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 616
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val46_";
            // line 617
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 628
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 46, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 630
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 631
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val47_";
            // line 632
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 638
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 47, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 641
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val48_";
            // line 642
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 645
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 648
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 48, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 651
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val49_";
            // line 652
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 658
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 49, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 661
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val50_";
            // line 662
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 665
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 668
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 50, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 670
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 671
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val51_";
            // line 672
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 678
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 51, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 681
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val52_";
            // line 682
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 688
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 52, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 690
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 691
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val53_";
            // line 692
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 703
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 53, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 706
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val54_";
            // line 707
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 713
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 54, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 715
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 716
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val55_";
            // line 717
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 723
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 55, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 725
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 726
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val56_";
            // line 727
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 733
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 56, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 736
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val57_";
            // line 737
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 740
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 743
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 57, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 746
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val58_";
            // line 747
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 753
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 58, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 755
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 756
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val59_";
            // line 757
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 768
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 59, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 770
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 771
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val60_";
            // line 772
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>";
        // line 778
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), 60, array()), "description", array()), "html", null, true);
        echo "</strong>
                                    </td>
                                    ";
        // line 780
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 781
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val61_";
            // line 782
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
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
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 796
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val62_";
            // line 797
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 805
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 806
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val63_";
            // line 807
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" onchange=\"check(";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ",63)\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 810
        echo "                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["colCount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 816
            echo "                                        <td>
                                            <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" id=\"form_val64_";
            // line 817
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" onchange=\"check(";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ",64)\">
                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 820
        echo "                                </tr>
                            </tbody>
                            ";
        // line 822
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", array()), 'widget');
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
        // line 840
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(document).ready( function () {
                update(";
        // line 850
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "html", null, true);
        echo ",'pp','val1');
                update(";
        // line 851
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "html", null, true);
        echo ",'pl','val8');
                update(";
        // line 852
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "html", null, true);
        echo ",'c1v','val6');
                update(";
        // line 853
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "html", null, true);
        echo ",'c2v','val41');
                for(i=0; i < ";
        // line 854
        echo twig_escape_filter($this->env, ($context["colCount"] ?? null), "html", null, true);
        echo "; i++) {
                    \$(\"#form_val63_\" + i ).prop('disabled', true);
                    \$(\"#form_val64_\" + i ).prop('disabled', true);
                }
                window.setTimeout(function() {
                    calculate(62);
                    for(i=0; i < ";
        // line 860
        echo twig_escape_filter($this->env, ($context["colCount"] ?? null), "html", null, true);
        echo "; i++) {
                        \$(\"#form_val63_\" + i ).prop('disabled', false);
                        \$(\"#form_val64_\" + i ).prop('disabled', false);
                    }
                    },10000);
                //check();
            });

            \$('#generateBtn').click(function(e) {
                e.preventDefault();
                toastr.info(\"Genero Preventivo\");
                for(var i = 1; i < 65; i++) {
                    \$('#appbundle_expertationsadvanced_val' + i).val(collect('val' + i));
                }
                \$('#appbundle_expertationsadvanced_father').val(";
        // line 874
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "html", null, true);
        echo ");
                \$('#appbundle_expertationsadvanced_fatherFloor').val('1');
                \$('#appbundle_expertationsadvanced_submit').trigger('click')

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
        // line 892
        echo twig_escape_filter($this->env, ($context["colCount"] ?? null), "html", null, true);
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
            function calculate(field) {
                for(var i = 0; i < ";
        // line 904
        echo twig_escape_filter($this->env, ($context["colCount"] ?? null), "html", null, true);
        echo "; i++) {
                    var ind = i +1;
                    var values = parseInt(\$('#form_val1_' + ind ).val()) + parseInt(\$('#form_val6_' + ind ).val());
                    console.log(values);
                    \$('#form_val' + field + '_' + ind ).val(values)
                }
            }
            function check(i,f) {

                var v = \$(\"#form_val62_\" + i).val(); //Let's say this is the value from PHP....
                var preVal = 0;

                \$(\"#form_val62_\" + i).val(v);

                \$(\"#form_val\" + f + \"_\" + i).on(\"change keyup keydown\", function(event) {
                    let currVal = parseInt(\$(\"#form_val\" + f + \"_\" + i).val());

                    console.log(preVal);
                    console.log(currVal);

                    // store current positions in variables
                    var start = this.selectionStart,
                        end = this.selectionEnd;

                    if (!currVal || currVal == 0) {
                        preVal = 0;
                        \$(\"#form_val62_\" + i).val(v);
                    } else if (currVal <= v) {
                        \$(\"#form_val62_\" + i).val((v - currVal) == 0 ? 0 : (v - currVal));
                        preVal = currVal;
                    } else {
                        \$(\"#form_val\" + f + \"_\" + i).val(v);
                    }

                    this.setSelectionRange(start, end);

                });
            }
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                \$('#buttons').css('left','84%');git
            }
        </script>
    </div>
</div>
    <script src=\"";
        // line 948
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.collection').collection();
    </script>
    <script src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 954
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 955
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
            z-index:1;
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
        .fixed {
            top: 63px;
            right: 0px;
            left: 96%;
            background: white;
            width: 66px;
            border: 1px lightgrey solid;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .wrapper2 {
            width: 100%;
            overflow: hidden;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 1005
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
    }

    // line 1007
    public function block_javascripts($context, array $blocks = array())
    {
        // line 1008
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fixedheadertable.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#scroll-r').click(function(e) {
            e.preventDefault();
            \$(\".table-2\").animate({'left':'-=300px'}).scrollLeft();
            console.log(\$(\".table-2\").width());
            \$(\"#scroll-r\").attr(\"enabled\",\"enabled\");
            console.log(\$(\".table-2\").position())

        });
        \$('#scroll-l').click(function(e) {
            e.preventDefault();
            console.log(\$(\".table-2\").position());
            if (\$(\".table-2\").position.left >= 0) {
                return;
            }
            \$(\".table-2\").animate({'left': '+=300px'}).scrollLeft()
        });
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 333) {
                \$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scrolled\")
                /*\$('.selector').fixedHeaderTable({
                    footer: false,
                    cloneHeadToFoot: false,
                    fixedColumn: false
                });*/
            } else {
                \$('#buttons').removeClass('fixed-top').removeClass('fixed');
                console.log(\"top\");
                \$('.selector').fixedHeaderTable('destroy');
            }
        });


    </script>
";
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
        return array (  2205 => 1008,  2202 => 1007,  2196 => 1005,  2144 => 955,  2141 => 954,  2135 => 952,  2128 => 948,  2081 => 904,  2066 => 892,  2045 => 874,  2028 => 860,  2019 => 854,  2015 => 853,  2011 => 852,  2007 => 851,  2003 => 850,  1990 => 840,  1969 => 822,  1965 => 820,  1954 => 817,  1951 => 816,  1947 => 815,  1940 => 810,  1929 => 807,  1926 => 806,  1922 => 805,  1915 => 800,  1906 => 797,  1903 => 796,  1899 => 795,  1887 => 785,  1878 => 782,  1875 => 781,  1871 => 780,  1866 => 778,  1861 => 775,  1852 => 772,  1849 => 771,  1845 => 770,  1840 => 768,  1830 => 760,  1821 => 757,  1818 => 756,  1814 => 755,  1809 => 753,  1804 => 750,  1795 => 747,  1792 => 746,  1788 => 745,  1783 => 743,  1778 => 740,  1769 => 737,  1766 => 736,  1762 => 735,  1757 => 733,  1752 => 730,  1743 => 727,  1740 => 726,  1736 => 725,  1731 => 723,  1726 => 720,  1717 => 717,  1714 => 716,  1710 => 715,  1705 => 713,  1700 => 710,  1691 => 707,  1688 => 706,  1684 => 705,  1679 => 703,  1669 => 695,  1660 => 692,  1657 => 691,  1653 => 690,  1648 => 688,  1643 => 685,  1634 => 682,  1631 => 681,  1627 => 680,  1622 => 678,  1617 => 675,  1608 => 672,  1605 => 671,  1601 => 670,  1596 => 668,  1591 => 665,  1582 => 662,  1579 => 661,  1575 => 660,  1570 => 658,  1565 => 655,  1556 => 652,  1553 => 651,  1549 => 650,  1544 => 648,  1539 => 645,  1530 => 642,  1527 => 641,  1523 => 640,  1518 => 638,  1513 => 635,  1504 => 632,  1501 => 631,  1497 => 630,  1492 => 628,  1482 => 620,  1473 => 617,  1470 => 616,  1466 => 615,  1461 => 613,  1456 => 610,  1447 => 607,  1444 => 606,  1440 => 605,  1435 => 603,  1430 => 600,  1421 => 597,  1418 => 596,  1414 => 595,  1409 => 593,  1404 => 590,  1395 => 587,  1392 => 586,  1388 => 585,  1383 => 583,  1378 => 580,  1369 => 577,  1366 => 576,  1362 => 575,  1357 => 573,  1352 => 570,  1343 => 567,  1340 => 566,  1336 => 565,  1331 => 563,  1326 => 560,  1317 => 557,  1314 => 556,  1310 => 555,  1305 => 553,  1300 => 550,  1291 => 547,  1288 => 546,  1284 => 545,  1279 => 543,  1274 => 540,  1265 => 537,  1262 => 536,  1258 => 535,  1253 => 533,  1248 => 530,  1239 => 527,  1236 => 526,  1232 => 525,  1227 => 523,  1222 => 520,  1213 => 517,  1210 => 516,  1206 => 515,  1201 => 513,  1196 => 510,  1187 => 507,  1184 => 506,  1180 => 505,  1175 => 503,  1170 => 500,  1161 => 497,  1158 => 496,  1154 => 495,  1149 => 493,  1144 => 490,  1135 => 487,  1132 => 486,  1128 => 485,  1123 => 483,  1118 => 480,  1109 => 477,  1106 => 476,  1102 => 475,  1097 => 473,  1092 => 470,  1083 => 467,  1080 => 466,  1076 => 465,  1071 => 463,  1066 => 460,  1057 => 457,  1054 => 456,  1050 => 455,  1045 => 453,  1040 => 450,  1031 => 447,  1028 => 446,  1024 => 445,  1019 => 443,  1014 => 440,  1005 => 437,  1002 => 436,  998 => 435,  993 => 433,  983 => 425,  974 => 422,  971 => 421,  967 => 420,  962 => 418,  957 => 415,  948 => 412,  945 => 411,  941 => 410,  936 => 408,  930 => 404,  921 => 401,  918 => 400,  914 => 399,  909 => 397,  904 => 394,  895 => 391,  892 => 390,  888 => 389,  883 => 387,  878 => 384,  869 => 381,  866 => 380,  862 => 379,  857 => 377,  852 => 374,  843 => 371,  840 => 370,  836 => 369,  831 => 367,  821 => 359,  812 => 356,  809 => 355,  805 => 354,  800 => 352,  795 => 349,  786 => 346,  783 => 345,  779 => 344,  774 => 342,  769 => 339,  760 => 336,  757 => 335,  753 => 334,  748 => 332,  743 => 329,  734 => 326,  731 => 325,  727 => 324,  722 => 322,  717 => 319,  708 => 316,  705 => 315,  701 => 314,  696 => 312,  686 => 304,  677 => 301,  674 => 300,  670 => 299,  665 => 297,  660 => 294,  651 => 291,  648 => 290,  644 => 289,  639 => 287,  634 => 284,  625 => 281,  622 => 280,  618 => 279,  613 => 277,  608 => 274,  599 => 271,  596 => 270,  592 => 269,  587 => 267,  582 => 264,  573 => 261,  570 => 260,  566 => 259,  561 => 257,  556 => 254,  547 => 251,  544 => 250,  540 => 249,  535 => 247,  530 => 244,  521 => 241,  518 => 240,  514 => 239,  509 => 237,  504 => 234,  495 => 231,  492 => 230,  488 => 229,  483 => 227,  478 => 224,  469 => 221,  466 => 220,  462 => 219,  457 => 217,  447 => 209,  438 => 206,  435 => 205,  431 => 204,  426 => 202,  421 => 199,  412 => 196,  409 => 195,  405 => 194,  400 => 192,  390 => 184,  381 => 181,  378 => 180,  374 => 179,  369 => 177,  364 => 174,  355 => 171,  352 => 170,  348 => 169,  343 => 167,  338 => 164,  329 => 161,  326 => 160,  322 => 159,  317 => 157,  312 => 154,  303 => 151,  300 => 150,  296 => 149,  291 => 147,  286 => 144,  277 => 141,  274 => 140,  270 => 139,  265 => 137,  255 => 129,  253 => 128,  246 => 123,  237 => 120,  234 => 119,  230 => 118,  211 => 103,  209 => 102,  204 => 101,  202 => 100,  197 => 98,  191 => 95,  178 => 85,  171 => 81,  164 => 77,  157 => 73,  150 => 69,  143 => 65,  136 => 61,  127 => 55,  120 => 50,  116 => 48,  112 => 46,  110 => 45,  101 => 39,  94 => 35,  87 => 31,  80 => 27,  73 => 23,  66 => 19,  55 => 12,  53 => 11,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
