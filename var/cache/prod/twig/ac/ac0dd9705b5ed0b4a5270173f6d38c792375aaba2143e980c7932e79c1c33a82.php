<?php

/* expertations/show.html.twig */
class __TwigTemplate_73ffa35db06410bcf3fa722ce64036899536b107999e7af0118d255c859475ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/show.html.twig", 1);
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
        echo "Mostra Preventivo";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-10\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"card float-right mb-2 w-sm-100 mw-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <div class=\"btn-group\">
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"print();\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_dettaglio_id", array("id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Computometrico
                            </a>
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", array()), "floor" => "0")), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Avanzato
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mb-sm-2\">
            <div class=\"col-md-4\">
                <div class=\"card card-grey mbgitmd-4\">
                    <div class=\"card-body \">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", array()), "html", null, true);
        echo "</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <strong>Tipo impianto:</strong>  ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                <strong>Piani edificio:</strong>  ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                <strong>Riscaldamento:</strong>  ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                <strong>Trifase:</strong>  ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "trifase", array()) == true)) {
            echo " Si ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                            </div>
                            <div class=\"col-sm-6\">
                                <strong>Livello impianto:</strong> ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()), "html", null, true);
        echo " <br/>
                                <strong>Fornitura elettrica:</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                <strong>Metratura ambienti:</strong> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "squareMeters", array()), "html", null, true);
        echo " m² <br />
                                <strong>Opere murarie:</strong> ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == 0)) {
            echo " No ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == 1)) {
            echo " Intonaco ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "opereMurarie", array()) == 2)) {
            echo " Mattone/Pietra ";
        }
        // line 66
        echo "                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-4\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title title-dettagli\">
                            Dettaglio Preventivo ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) == 1)) {
            echo " Base ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) == 2)) {
            echo " Standard ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) == 3)) {
            echo " Domotico ";
        }
        // line 79
        echo "                        </h5>
                        <div class=\"scrollable\" style=\"overflow-x: scroll\">
                            <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center table-header\" style=\"background-color: #f2f8f9;\">
                                    <th style=\"max-width: 50px;\">
                                        Piano
                                    </th>
                                    <th class=\"tbl-lg ambient-td\">
                                        Ambiente
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Nome
                                    </th>
                                    <th>
                                        Punti prese
                                    </th>
                                    <th>
                                        Punti Luce
                                    </th>
                                    <th>
                                        Prese TV
                                    </th>
                                    ";
        // line 102
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c1n", array()))) {
            // line 103
            echo "                                        <th>
                                            ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c1n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 107
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c2n", array()))) {
            // line 108
            echo "                                        <th>
                                            ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c2n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 112
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c3n", array()))) {
            // line 113
            echo "                                        <th>
                                            ";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c3n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 117
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c4n", array()))) {
            // line 118
            echo "                                        <th>
                                            ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c4n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 122
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c5n", array()))) {
            // line 123
            echo "                                        <th>
                                            ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c5n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 127
        echo "                                </tr>
                                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "floor", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 129
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 131
            if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "floor", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["key"]] ?? null) : null) == 0)) {
                // line 132
                echo "                                                T
                                            ";
            } else {
                // line 134
                echo "                                                ";
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "floor", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            ";
            }
            // line 136
            echo "                                        </td>
                                        <td class=\"ambient-td\">
                                            ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "convertAIDtoName", array(0 => (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "ambient", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[$context["key"]] ?? null) : null)), "method"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 141
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[$context["key"]] ?? null) : null), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 144
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pp", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[$context["key"]] ?? null) : null), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 147
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pl", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[$context["key"]] ?? null) : null), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 150
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pt", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[$context["key"]] ?? null) : null), "html", null, true);
            echo "
                                        </td>
                                        ";
            // line 152
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c1n", array()))) {
                // line 153
                echo "                                            <td>
                                                ";
                // line 154
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c1v", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 157
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c2n", array()))) {
                // line 158
                echo "                                            <td>
                                                ";
                // line 159
                echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c2v", array())) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 162
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c3n", array()))) {
                // line 163
                echo "                                            <td>
                                                ";
                // line 164
                echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c3v", array())) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 167
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c4n", array()))) {
                // line 168
                echo "                                            <td>
                                                ";
                // line 169
                echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c4v", array())) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 172
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c5n", array()))) {
                // line 173
                echo "                                            <td>
                                                ";
                // line 174
                echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "c5v", array())) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[$context["key"]] ?? null) : null), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 177
            echo "                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-md-3\">
                                <strong>Circuiti:</strong> ";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "numCircuiti", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-md-3\">
                                <strong>Prese Telefono / Dati:</strong> ";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "numPreseTelefonoDati", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> ";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "illumSicurezza", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-md-6\">
                                <strong>SPD:</strong>
                                ";
        // line 198
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 ";
        }
        // line 199
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni ";
        }
        // line 200
        echo "                            </div>
                            <div class=\"col-md-6\">
                                <strong>Impianti ausiliari e risparmio energetico:</strong>
                                ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono ";
        }
        // line 204
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi ";
        }
        // line 205
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica ";
        }
        // line 206
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Totale
                            </div>
                            <div class=\"col-sm-6 text-right text-black\">
                                ";
        // line 223
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                ";
        // line 231
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["vat"] ?? null), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto (";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sconto", array()), "html", null, true);
        echo " %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                - ";
        // line 239
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sconto"] ?? null), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>";
        // line 247
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["grand_total"] ?? null), 2, "."), "html", null, true);
        echo " €</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    ";
    }

    // line 258
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 259
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/scrollbar.css"), "html", null, true);
        echo "\">

    <style>
    td {
        text-align: center!important;
    }
    @media print {
        .sidebar {
            display: none;
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
        .title-dettagli {
            display: none;
        }
        .brand-logo-mini img {
            margin-left: 3vw;
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
    <link rel=\"stylesheet\" href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
    }

    // line 314
    public function block_javascripts($context, array $blocks = array())
    {
        // line 315
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
    ";
        // line 322
        if ((($context["generated"] ?? null) == true)) {
            // line 323
            echo "        <script>
            \$(document).ready(function() {
                toastr.success(\"Preventivo Generato\");
            })
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "expertations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 323,  606 => 322,  597 => 316,  592 => 315,  589 => 314,  583 => 312,  526 => 259,  523 => 258,  509 => 247,  498 => 239,  492 => 236,  484 => 231,  473 => 223,  454 => 206,  449 => 205,  444 => 204,  440 => 203,  435 => 200,  430 => 199,  426 => 198,  417 => 192,  411 => 189,  405 => 186,  397 => 180,  389 => 177,  383 => 174,  380 => 173,  377 => 172,  371 => 169,  368 => 168,  365 => 167,  359 => 164,  356 => 163,  353 => 162,  347 => 159,  344 => 158,  341 => 157,  335 => 154,  332 => 153,  330 => 152,  325 => 150,  319 => 147,  313 => 144,  307 => 141,  301 => 138,  297 => 136,  291 => 134,  287 => 132,  285 => 131,  281 => 129,  277 => 128,  274 => 127,  268 => 124,  265 => 123,  262 => 122,  256 => 119,  253 => 118,  250 => 117,  244 => 114,  241 => 113,  238 => 112,  232 => 109,  229 => 108,  226 => 107,  220 => 104,  217 => 103,  215 => 102,  190 => 79,  182 => 78,  168 => 66,  160 => 65,  156 => 64,  152 => 63,  148 => 62,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  109 => 44,  103 => 43,  93 => 42,  89 => 41,  71 => 26,  65 => 23,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "expertations/show.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.html.twig");
    }
}
