<?php

/* expertations/show.advanced.html.twig */
class __TwigTemplate_118086d1fbb3743417cedcf2713ae546d6ba62857a9445055826edf747971c26 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/show.advanced.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.advanced.html.twig"));

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

        echo "Mostra Preventivo";
        
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
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-10\">
                <h3>Preventivi <small>Mostra > Avanzato</small></h3>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"card float-right mb-2 w-sm-100 mw-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_dettaglio_avanzato_id", ["pid" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 14, $this->source); })()), "pid", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">
                                Computometrico
                            </a>
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_modifica_avanzato", ["pid" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->source); })()), "pid", [])]), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-sm float-right\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a id=\"print\" href=\"\" class=\"btn btn-success btn-sm float-right\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\" id=\"page\">
                <div class=\"card-body\">
                    <table class=\"table table-bordered table-responsive-md\">
                        <tr>
                            <td><strong>CLIENTE</strong></td>
                            <td class=\"text-center\">Proposta n. ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "pid", []), "html", null, true);
        echo " del ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "date", []), "d.m.Y"), "html", null, true);
        echo " per <br/> ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 37, $this->source); })()), "uidToGenre", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "client", [])], "method") == 1)) {
            echo "Egregio Signor ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 37, $this->source); })()), "uidToGenre", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "client", [])], "method") == 2)) {
            echo "Gentile Signora ";
        } else {
            echo "Spett.le ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 37, $this->source); })()), "uidToSurName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 37, $this->source); })()), "uidToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "client", [])], "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>PIANI CASA</strong></td>
                            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 39, $this->source); })()), "pianiCasa", []), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>CIVILE</strong></td>
                            <td>";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 41, $this->source); })()), "tipo", []) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>DOMOTICO</strong></td>
                            <td>";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 43, $this->source); })()), "level", []) == 3)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>DATA</strong></td>
                            <td class=\"text-center\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 47, $this->source); })()), "date", []), "d.m.y"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>METRI QUADRI (TOTALI)</strong></td>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 49, $this->source); })()), "squareMeters", []), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>DISTANZA QUADRO TOUCH</strong></td>
                            <td>-</td>
                            <td class=\"text-center\"><strong>ENEL KW</strong></td>
                            <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 53, $this->source); })()), "kw", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>TIPO CLIMA</strong></td>
                            <td class=\"text-center\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 57, $this->source); })()), "heatingIntToName", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 57, $this->source); })()), "riscaldamento", [])], "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>OPERE MURARIE</strong></td>
                            <td>";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 59, $this->source); })()), "opereMurarie", []) != 0)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>INTONACO</strong></td>
                            <td>";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 61, $this->source); })()), "opereMurarieIntonaco", []) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>PIETRA</strong></td>
                            <td>";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 63, $this->source); })()), "opereMurariePietra", []) == 2)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                        </tr>
                    </table>
                    <table class=\"table table-bordered mt-3\">
                        <tr>
                            <td class=\"text-center mt-3\">
                                <strong>PIANO 1: TERRA</strong>
                            </td>
                        </tr>
                    </table>
                    <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>
                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                    <tr class=\"mt-3\">
                                        <th><strong>TIPOLOGIA</strong></th>
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 85, $this->source); })()), "name", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            echo "                                            <th class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</th>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                        <th class=\"text-center\">Sistemi</th>
                                        <th class=\"text-center\"><strong>TOTALE</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 102, $this->source); })()), 0, []), "val1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 103
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->source); })()), 0, []), "val1", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 108
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 109
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 109, $this->source); })()), "html", null, true);
            }
            // line 110
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 118, $this->source); })()), 0, []), "val2", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 119
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 123, $this->source); })()), 0, []), "val2", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 124
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 125
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 125, $this->source); })()), "html", null, true);
            }
            // line 126
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 134, $this->source); })()), 0, []), "val3", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 135
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 139, $this->source); })()), 0, []), "val3", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 140
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 141
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 141, $this->source); })()), "html", null, true);
            }
            // line 142
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                        </strong>
                                    </td>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 149, $this->source); })()), 0, []), "val4", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 150
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 154, $this->source); })()), 0, []), "val4", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 155
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 156
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 156, $this->source); })()), "html", null, true);
            }
            // line 157
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 165, $this->source); })()), 0, []), "val5", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 166
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 170, $this->source); })()), 0, []), "val5", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 171
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 172
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 172, $this->source); })()), "html", null, true);
            }
            // line 173
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 186, $this->source); })()), 0, []), "val6", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 187
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->source); })()), 0, []), "val6", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 192
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 193
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 193, $this->source); })()), "html", null, true);
            }
            // line 194
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 202, $this->source); })()), 0, []), "val7", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 203
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 207, $this->source); })()), 0, []), "val7", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 208
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 209
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 209, $this->source); })()), "html", null, true);
            }
            // line 210
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 223, $this->source); })()), 0, []), "val8", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 224
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 228, $this->source); })()), 0, []), "val8", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 229
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 230
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 230, $this->source); })()), "html", null, true);
            }
            // line 231
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 239, $this->source); })()), 0, []), "val9", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 240
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 244, $this->source); })()), 0, []), "val9", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 245
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 246
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 246, $this->source); })()), "html", null, true);
            }
            // line 247
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 255, $this->source); })()), 0, []), "val10", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 256
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 260, $this->source); })()), 0, []), "val10", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 261
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 262
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 262, $this->source); })()), "html", null, true);
            }
            // line 263
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 271, $this->source); })()), 0, []), "val11", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 272
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 276, $this->source); })()), 0, []), "val11", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 277
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 278
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 278, $this->source); })()), "html", null, true);
            }
            // line 279
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 287, $this->source); })()), 0, []), "val12", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 288
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 292, $this->source); })()), 0, []), "val12", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 293
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 294
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 294, $this->source); })()), "html", null, true);
            }
            // line 295
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 303, $this->source); })()), 0, []), "val13", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 304
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 308, $this->source); })()), 0, []), "val13", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 309
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 310
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 310, $this->source); })()), "html", null, true);
            }
            // line 311
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 319, $this->source); })()), 0, []), "val14", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 320
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 324, $this->source); })()), 0, []), "val14", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 325
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 326
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 326, $this->source); })()), "html", null, true);
            }
            // line 327
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 335, $this->source); })()), 0, []), "val15", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 336
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 340, $this->source); })()), 0, []), "val15", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 341
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 342
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 342, $this->source); })()), "html", null, true);
            }
            // line 343
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 351, $this->source); })()), 0, []), "val16", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 352
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 356, $this->source); })()), 0, []), "val16", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 357
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 358
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 358, $this->source); })()), "html", null, true);
            }
            // line 359
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 372, $this->source); })()), 0, []), "val17", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 373
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 377, $this->source); })()), 0, []), "val17", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 378
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 379
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 379, $this->source); })()), "html", null, true);
            }
            // line 380
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    ";
        // line 388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 388, $this->source); })()), 0, []), "val18", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 389
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 393, $this->source); })()), 0, []), "val18", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 394
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 395
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 395, $this->source); })()), "html", null, true);
            }
            // line 396
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    ";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 404, $this->source); })()), 0, []), "val19", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 405
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 409, $this->source); })()), 0, []), "val19", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 410
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 411
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 411, $this->source); })()), "html", null, true);
            }
            // line 412
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 420, $this->source); })()), 0, []), "val20", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 421
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 425, $this->source); })()), 0, []), "val20", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 426
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 427
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 427, $this->source); })()), "html", null, true);
            }
            // line 428
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 436, $this->source); })()), 0, []), "val21", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 437
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 441, $this->source); })()), 0, []), "val21", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 442
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 443
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 443, $this->source); })()), "html", null, true);
            }
            // line 444
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 12 Moduli</strong>
                                    </td>
                                    ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 457, $this->source); })()), 0, []), "val22", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 458
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 462, $this->source); })()), 0, []), "val22", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 463
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 464
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 464, $this->source); })()), "html", null, true);
            }
            // line 465
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 473, $this->source); })()), 0, []), "val23", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 474
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 476
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 478, $this->source); })()), 0, []), "val23", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 479
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 480
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 480, $this->source); })()), "html", null, true);
            }
            // line 481
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    ";
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 489, $this->source); })()), 0, []), "val24", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 490
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 494
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 494, $this->source); })()), 0, []), "val24", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 495
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 496
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 496, $this->source); })()), "html", null, true);
            }
            // line 497
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 505, $this->source); })()), 0, []), "val25", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 506
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 510, $this->source); })()), 0, []), "val25", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 511
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 512
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 512, $this->source); })()), "html", null, true);
            }
            // line 513
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 521, $this->source); })()), 0, []), "val26", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 522
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 526, $this->source); })()), 0, []), "val26", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 527
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 528
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 528, $this->source); })()), "html", null, true);
            }
            // line 529
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    ";
        // line 537
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 537, $this->source); })()), 0, []), "val27", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 538
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 542
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 542, $this->source); })()), 0, []), "val27", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 543
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 544
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 544, $this->source); })()), "html", null, true);
            }
            // line 545
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 546
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme Gas predisposizione</strong>
                                    </td>
                                    ";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 558, $this->source); })()), 0, []), "val28", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 559
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 563, $this->source); })()), 0, []), "val28", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 564
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 565
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 565, $this->source); })()), "html", null, true);
            }
            // line 566
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    ";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 574, $this->source); })()), 0, []), "val29", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 575
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 579, $this->source); })()), 0, []), "val29", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 580
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 581
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 581, $this->source); })()), "html", null, true);
            }
            // line 582
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 590, $this->source); })()), 0, []), "val30", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 591
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 595, $this->source); })()), 0, []), "val30", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 596
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 597
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 597, $this->source); })()), "html", null, true);
            }
            // line 598
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 606, $this->source); })()), 0, []), "val31", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 607
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 609
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 611, $this->source); })()), 0, []), "val31", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 612
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 613
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 613, $this->source); })()), "html", null, true);
            }
            // line 614
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 615
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    ";
        // line 622
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 622, $this->source); })()), 0, []), "val32", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 623
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 627, $this->source); })()), 0, []), "val32", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 628
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 629
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 629, $this->source); })()), "html", null, true);
            }
            // line 630
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 631
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    ";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 638, $this->source); })()), 0, []), "val33", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 639
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 643
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 643, $this->source); })()), 0, []), "val33", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 644
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 645
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 645, $this->source); })()), "html", null, true);
            }
            // line 646
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 647
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 654, $this->source); })()), 0, []), "val34", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 655
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 659, $this->source); })()), 0, []), "val34", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 660
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 661
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 661, $this->source); })()), "html", null, true);
            }
            // line 662
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    ";
        // line 670
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 670, $this->source); })()), 0, []), "val35", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 671
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 675, $this->source); })()), 0, []), "val35", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 676
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 677
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 677, $this->source); })()), "html", null, true);
            }
            // line 678
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    ";
        // line 686
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 686, $this->source); })()), 0, []), "val36", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 687
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 691
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 691, $this->source); })()), 0, []), "val36", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 692
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 693
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 693, $this->source); })()), "html", null, true);
            }
            // line 694
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    ";
        // line 702
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 702, $this->source); })()), 0, []), "val37", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 703
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 705
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 707, $this->source); })()), 0, []), "val37", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 708
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 709
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 709, $this->source); })()), "html", null, true);
            }
            // line 710
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 711
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    ";
        // line 718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 718, $this->source); })()), 0, []), "val38", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 719
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 721
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 723, $this->source); })()), 0, []), "val38", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 724
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 725
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 725, $this->source); })()), "html", null, true);
            }
            // line 726
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 727
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    ";
        // line 734
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 734, $this->source); })()), 0, []), "val39", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 735
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 737
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 739, $this->source); })()), 0, []), "val39", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 740
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 741
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 741, $this->source); })()), "html", null, true);
            }
            // line 742
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 743
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 750, $this->source); })()), 0, []), "val40", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 751
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 755
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 755, $this->source); })()), 0, []), "val40", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 756
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 757
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 757, $this->source); })()), "html", null, true);
            }
            // line 758
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    ";
        // line 766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 766, $this->source); })()), 0, []), "val41", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 767
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 769
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 771
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 771, $this->source); })()), 0, []), "val41", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 772
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 773
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 773, $this->source); })()), "html", null, true);
            }
            // line 774
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    ";
        // line 782
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 782, $this->source); })()), 0, []), "val42", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 783
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 787, $this->source); })()), 0, []), "val42", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 788
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 789
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 789, $this->source); })()), "html", null, true);
            }
            // line 790
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    ";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 798, $this->source); })()), 0, []), "val43", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 799
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 803, $this->source); })()), 0, []), "val43", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 804
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 805
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 805, $this->source); })()), "html", null, true);
            }
            // line 806
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 807
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    ";
        // line 814
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 814, $this->source); })()), 0, []), "val44", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 815
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 819
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 819, $this->source); })()), 0, []), "val44", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 820
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 821
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 821, $this->source); })()), "html", null, true);
            }
            // line 822
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 823
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    ";
        // line 830
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 830, $this->source); })()), 0, []), "val45", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 831
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 833
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 835
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 835, $this->source); })()), 0, []), "val45", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 836
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 837
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 837, $this->source); })()), "html", null, true);
            }
            // line 838
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    ";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 846, $this->source); })()), 0, []), "val46", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 847
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 851
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 851, $this->source); })()), 0, []), "val46", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 852
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 853
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 853, $this->source); })()), "html", null, true);
            }
            // line 854
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 855
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Touch 3,5\" a colori o EQ40</strong>
                                    </td>
                                    ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 867, $this->source); })()), 0, []), "val47", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 868
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 870
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 872
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 872, $this->source); })()), 0, []), "val47", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 873
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 874
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 874, $this->source); })()), "html", null, true);
            }
            // line 875
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    ";
        // line 883
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 883, $this->source); })()), 0, []), "val48", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 884
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 888, $this->source); })()), 0, []), "val48", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 889
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 890
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 890, $this->source); })()), "html", null, true);
            }
            // line 891
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 892
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    ";
        // line 899
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 899, $this->source); })()), 0, []), "val49", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 900
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 902
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 904, $this->source); })()), 0, []), "val49", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 905
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 906
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 906, $this->source); })()), "html", null, true);
            }
            // line 907
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 908
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    ";
        // line 915
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 915, $this->source); })()), 0, []), "val50", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 916
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 918
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 920
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 920, $this->source); })()), 0, []), "val50", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 921
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 922
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 922, $this->source); })()), "html", null, true);
            }
            // line 923
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 924
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    ";
        // line 931
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 931, $this->source); })()), 0, []), "val51", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 932
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 934
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 936
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 936, $this->source); })()), 0, []), "val51", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 937
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 938
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 938, $this->source); })()), "html", null, true);
            }
            // line 939
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    ";
        // line 947
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 947, $this->source); })()), 0, []), "val52", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 948
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 950
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 952, $this->source); })()), 0, []), "val52", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 953
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 954
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 954, $this->source); })()), "html", null, true);
            }
            // line 955
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 956
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    ";
        // line 963
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 963, $this->source); })()), 0, []), "val53", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 964
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 968
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 968, $this->source); })()), 0, []), "val53", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 969
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 970
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 970, $this->source); })()), "html", null, true);
            }
            // line 971
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 972
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore zanzariera/tenda</strong>
                                    </td>
                                    ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 984, $this->source); })()), 0, []), "val54", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 985
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 989
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 989, $this->source); })()), 0, []), "val54", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 990
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 991
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 991, $this->source); })()), "html", null, true);
            }
            // line 992
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 993
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    ";
        // line 1000
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1000, $this->source); })()), 0, []), "val55", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1001
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1005
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1005, $this->source); })()), 0, []), "val55", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1006
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1007
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1007, $this->source); })()), "html", null, true);
            }
            // line 1008
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1009
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    ";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1016, $this->source); })()), 0, []), "val56", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1017
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1019
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1021
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1021, $this->source); })()), 0, []), "val56", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1022
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1023
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1023, $this->source); })()), "html", null, true);
            }
            // line 1024
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1025
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    ";
        // line 1032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1032, $this->source); })()), 0, []), "val57", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1033
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1035
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1037
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1037, $this->source); })()), 0, []), "val57", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1038
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1039
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1039, $this->source); })()), "html", null, true);
            }
            // line 1040
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1041
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    ";
        // line 1048
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1048, $this->source); })()), 0, []), "val58", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1049
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1051
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1053
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1053, $this->source); })()), 0, []), "val58", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1054
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1055
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1055, $this->source); })()), "html", null, true);
            }
            // line 1056
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1057
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    ";
        // line 1064
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1064, $this->source); })()), 0, []), "val59", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1065
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1067
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1069, $this->source); })()), 0, []), "val59", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1070
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1071
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1071, $this->source); })()), "html", null, true);
            }
            // line 1072
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1073
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bocchette</strong>
                                    </td>
                                    ";
        // line 1085
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1085, $this->source); })()), 0, []), "val60", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1086
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1088
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1090
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1090, $this->source); })()), 0, []), "val60", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1091
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1092
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1092, $this->source); })()), "html", null, true);
            }
            // line 1093
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1094
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    ";
        // line 1101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1101, $this->source); })()), 0, []), "val61", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1102
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1104
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1106, $this->source); })()), 0, []), "val61", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1107
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1108
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1108, $this->source); })()), "html", null, true);
            }
            // line 1109
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1110
        echo "                                        </strong>
                                    </td>
                                </tr>
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
        // line 1122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1122, $this->source); })()), 0, []), "val62", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1123
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1125
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1127, $this->source); })()), 0, []), "val62", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1128
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1129
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1129, $this->source); })()), "html", null, true);
            }
            // line 1130
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1131
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 1138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1138, $this->source); })()), 0, []), "val63", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1139
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1143, $this->source); })()), 0, []), "val63", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1144
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1145
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1145, $this->source); })()), "html", null, true);
            }
            // line 1146
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1147
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 1154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1154, $this->source); })()), 0, []), "val64", []));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1155
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1157
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1159, $this->source); })()), 0, []), "val64", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1160
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1161
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1161, $this->source); })()), "html", null, true);
            }
            // line 1162
            echo "                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1163
        echo "                                        </strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 1174
        echo "            ";
        // line 1175
        echo "            ";
        // line 1176
        echo "                ";
        // line 1177
        echo "                    ";
        // line 1178
        echo "                        ";
        // line 1179
        echo "                            ";
        // line 1180
        echo "                                ";
        // line 1181
        echo "                            ";
        // line 1182
        echo "                            ";
        // line 1183
        echo "                                ";
        // line 1184
        echo "                            ";
        // line 1185
        echo "                        ";
        // line 1186
        echo "                        ";
        // line 1187
        echo "                            ";
        // line 1188
        echo "                                ";
        // line 1189
        echo "                            ";
        // line 1190
        echo "                            ";
        // line 1191
        echo "                                ";
        // line 1192
        echo "                                ";
        // line 1193
        echo "                            ";
        // line 1194
        echo "                        ";
        // line 1195
        echo "                        ";
        // line 1196
        echo "                            ";
        // line 1197
        echo "                                ";
        // line 1198
        echo "                            ";
        // line 1199
        echo "                            ";
        // line 1200
        echo "                                ";
        // line 1201
        echo "                                ";
        // line 1202
        echo "                            ";
        // line 1203
        echo "                        ";
        // line 1204
        echo "                        ";
        // line 1205
        echo "                            ";
        // line 1206
        echo "                                ";
        // line 1207
        echo "                            ";
        // line 1208
        echo "                            ";
        // line 1209
        echo "                                ";
        // line 1210
        echo "                                ";
        // line 1211
        echo "                            ";
        // line 1212
        echo "                        ";
        // line 1213
        echo "                    ";
        // line 1214
        echo "                ";
        // line 1215
        echo "            ";
        // line 1216
        echo "        ";
        // line 1217
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1220
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1221
        echo "    <style>
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
    <style type=\"text/css\" media=\"print\">
        @page { size: landscape; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1243
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1244
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
            console.log(\$(\".table-2\").position())
            if (\$(\".table-2\").position.left >= 0) {
                return;
            }
            \$(\".table-2\").animate({'left': '+=300px'}).scrollLeft()
        });
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 333) {
                \$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scolled\")
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
        \$('#print').click(function(e) {
            e.preventDefault();
            window.print();
            return false;
        })

    </script>
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/show.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4612 => 1244,  4603 => 1243,  4572 => 1221,  4563 => 1220,  4551 => 1217,  4549 => 1216,  4547 => 1215,  4545 => 1214,  4543 => 1213,  4541 => 1212,  4539 => 1211,  4537 => 1210,  4535 => 1209,  4533 => 1208,  4531 => 1207,  4529 => 1206,  4527 => 1205,  4525 => 1204,  4523 => 1203,  4521 => 1202,  4519 => 1201,  4517 => 1200,  4515 => 1199,  4513 => 1198,  4511 => 1197,  4509 => 1196,  4507 => 1195,  4505 => 1194,  4503 => 1193,  4501 => 1192,  4499 => 1191,  4497 => 1190,  4495 => 1189,  4493 => 1188,  4491 => 1187,  4489 => 1186,  4487 => 1185,  4485 => 1184,  4483 => 1183,  4481 => 1182,  4479 => 1181,  4477 => 1180,  4475 => 1179,  4473 => 1178,  4471 => 1177,  4469 => 1176,  4467 => 1175,  4465 => 1174,  4453 => 1163,  4439 => 1162,  4434 => 1161,  4431 => 1160,  4414 => 1159,  4410 => 1157,  4401 => 1155,  4397 => 1154,  4388 => 1147,  4374 => 1146,  4369 => 1145,  4366 => 1144,  4349 => 1143,  4345 => 1141,  4336 => 1139,  4332 => 1138,  4323 => 1131,  4309 => 1130,  4304 => 1129,  4301 => 1128,  4284 => 1127,  4280 => 1125,  4271 => 1123,  4267 => 1122,  4253 => 1110,  4239 => 1109,  4234 => 1108,  4231 => 1107,  4214 => 1106,  4210 => 1104,  4201 => 1102,  4197 => 1101,  4188 => 1094,  4174 => 1093,  4169 => 1092,  4166 => 1091,  4149 => 1090,  4145 => 1088,  4136 => 1086,  4132 => 1085,  4118 => 1073,  4104 => 1072,  4099 => 1071,  4096 => 1070,  4079 => 1069,  4075 => 1067,  4066 => 1065,  4062 => 1064,  4053 => 1057,  4039 => 1056,  4034 => 1055,  4031 => 1054,  4014 => 1053,  4010 => 1051,  4001 => 1049,  3997 => 1048,  3988 => 1041,  3974 => 1040,  3969 => 1039,  3966 => 1038,  3949 => 1037,  3945 => 1035,  3936 => 1033,  3932 => 1032,  3923 => 1025,  3909 => 1024,  3904 => 1023,  3901 => 1022,  3884 => 1021,  3880 => 1019,  3871 => 1017,  3867 => 1016,  3858 => 1009,  3844 => 1008,  3839 => 1007,  3836 => 1006,  3819 => 1005,  3815 => 1003,  3806 => 1001,  3802 => 1000,  3793 => 993,  3779 => 992,  3774 => 991,  3771 => 990,  3754 => 989,  3750 => 987,  3741 => 985,  3737 => 984,  3723 => 972,  3709 => 971,  3704 => 970,  3701 => 969,  3684 => 968,  3680 => 966,  3671 => 964,  3667 => 963,  3658 => 956,  3644 => 955,  3639 => 954,  3636 => 953,  3619 => 952,  3615 => 950,  3606 => 948,  3602 => 947,  3593 => 940,  3579 => 939,  3574 => 938,  3571 => 937,  3554 => 936,  3550 => 934,  3541 => 932,  3537 => 931,  3528 => 924,  3514 => 923,  3509 => 922,  3506 => 921,  3489 => 920,  3485 => 918,  3476 => 916,  3472 => 915,  3463 => 908,  3449 => 907,  3444 => 906,  3441 => 905,  3424 => 904,  3420 => 902,  3411 => 900,  3407 => 899,  3398 => 892,  3384 => 891,  3379 => 890,  3376 => 889,  3359 => 888,  3355 => 886,  3346 => 884,  3342 => 883,  3333 => 876,  3319 => 875,  3314 => 874,  3311 => 873,  3294 => 872,  3290 => 870,  3281 => 868,  3277 => 867,  3263 => 855,  3249 => 854,  3244 => 853,  3241 => 852,  3224 => 851,  3220 => 849,  3211 => 847,  3207 => 846,  3198 => 839,  3184 => 838,  3179 => 837,  3176 => 836,  3159 => 835,  3155 => 833,  3146 => 831,  3142 => 830,  3133 => 823,  3119 => 822,  3114 => 821,  3111 => 820,  3094 => 819,  3090 => 817,  3081 => 815,  3077 => 814,  3068 => 807,  3054 => 806,  3049 => 805,  3046 => 804,  3029 => 803,  3025 => 801,  3016 => 799,  3012 => 798,  3003 => 791,  2989 => 790,  2984 => 789,  2981 => 788,  2964 => 787,  2960 => 785,  2951 => 783,  2947 => 782,  2938 => 775,  2924 => 774,  2919 => 773,  2916 => 772,  2899 => 771,  2895 => 769,  2886 => 767,  2882 => 766,  2873 => 759,  2859 => 758,  2854 => 757,  2851 => 756,  2834 => 755,  2830 => 753,  2821 => 751,  2817 => 750,  2808 => 743,  2794 => 742,  2789 => 741,  2786 => 740,  2769 => 739,  2765 => 737,  2756 => 735,  2752 => 734,  2743 => 727,  2729 => 726,  2724 => 725,  2721 => 724,  2704 => 723,  2700 => 721,  2691 => 719,  2687 => 718,  2678 => 711,  2664 => 710,  2659 => 709,  2656 => 708,  2639 => 707,  2635 => 705,  2626 => 703,  2622 => 702,  2613 => 695,  2599 => 694,  2594 => 693,  2591 => 692,  2574 => 691,  2570 => 689,  2561 => 687,  2557 => 686,  2548 => 679,  2534 => 678,  2529 => 677,  2526 => 676,  2509 => 675,  2505 => 673,  2496 => 671,  2492 => 670,  2483 => 663,  2469 => 662,  2464 => 661,  2461 => 660,  2444 => 659,  2440 => 657,  2431 => 655,  2427 => 654,  2418 => 647,  2404 => 646,  2399 => 645,  2396 => 644,  2379 => 643,  2375 => 641,  2366 => 639,  2362 => 638,  2353 => 631,  2339 => 630,  2334 => 629,  2331 => 628,  2314 => 627,  2310 => 625,  2301 => 623,  2297 => 622,  2288 => 615,  2274 => 614,  2269 => 613,  2266 => 612,  2249 => 611,  2245 => 609,  2236 => 607,  2232 => 606,  2223 => 599,  2209 => 598,  2204 => 597,  2201 => 596,  2184 => 595,  2180 => 593,  2171 => 591,  2167 => 590,  2158 => 583,  2144 => 582,  2139 => 581,  2136 => 580,  2119 => 579,  2115 => 577,  2106 => 575,  2102 => 574,  2093 => 567,  2079 => 566,  2074 => 565,  2071 => 564,  2054 => 563,  2050 => 561,  2041 => 559,  2037 => 558,  2023 => 546,  2009 => 545,  2004 => 544,  2001 => 543,  1984 => 542,  1980 => 540,  1971 => 538,  1967 => 537,  1958 => 530,  1944 => 529,  1939 => 528,  1936 => 527,  1919 => 526,  1915 => 524,  1906 => 522,  1902 => 521,  1893 => 514,  1879 => 513,  1874 => 512,  1871 => 511,  1854 => 510,  1850 => 508,  1841 => 506,  1837 => 505,  1828 => 498,  1814 => 497,  1809 => 496,  1806 => 495,  1789 => 494,  1785 => 492,  1776 => 490,  1772 => 489,  1763 => 482,  1749 => 481,  1744 => 480,  1741 => 479,  1724 => 478,  1720 => 476,  1711 => 474,  1707 => 473,  1698 => 466,  1684 => 465,  1679 => 464,  1676 => 463,  1659 => 462,  1655 => 460,  1646 => 458,  1642 => 457,  1628 => 445,  1614 => 444,  1609 => 443,  1606 => 442,  1589 => 441,  1585 => 439,  1576 => 437,  1572 => 436,  1563 => 429,  1549 => 428,  1544 => 427,  1541 => 426,  1524 => 425,  1520 => 423,  1511 => 421,  1507 => 420,  1498 => 413,  1484 => 412,  1479 => 411,  1476 => 410,  1459 => 409,  1455 => 407,  1446 => 405,  1442 => 404,  1433 => 397,  1419 => 396,  1414 => 395,  1411 => 394,  1394 => 393,  1390 => 391,  1381 => 389,  1377 => 388,  1368 => 381,  1354 => 380,  1349 => 379,  1346 => 378,  1329 => 377,  1325 => 375,  1316 => 373,  1312 => 372,  1298 => 360,  1284 => 359,  1279 => 358,  1276 => 357,  1259 => 356,  1255 => 354,  1246 => 352,  1242 => 351,  1233 => 344,  1219 => 343,  1214 => 342,  1211 => 341,  1194 => 340,  1190 => 338,  1181 => 336,  1177 => 335,  1168 => 328,  1154 => 327,  1149 => 326,  1146 => 325,  1129 => 324,  1125 => 322,  1116 => 320,  1112 => 319,  1103 => 312,  1089 => 311,  1084 => 310,  1081 => 309,  1064 => 308,  1060 => 306,  1051 => 304,  1047 => 303,  1038 => 296,  1024 => 295,  1019 => 294,  1016 => 293,  999 => 292,  995 => 290,  986 => 288,  982 => 287,  973 => 280,  959 => 279,  954 => 278,  951 => 277,  934 => 276,  930 => 274,  921 => 272,  917 => 271,  908 => 264,  894 => 263,  889 => 262,  886 => 261,  869 => 260,  865 => 258,  856 => 256,  852 => 255,  843 => 248,  829 => 247,  824 => 246,  821 => 245,  804 => 244,  800 => 242,  791 => 240,  787 => 239,  778 => 232,  764 => 231,  759 => 230,  756 => 229,  739 => 228,  735 => 226,  726 => 224,  722 => 223,  708 => 211,  694 => 210,  689 => 209,  686 => 208,  669 => 207,  665 => 205,  656 => 203,  652 => 202,  643 => 195,  629 => 194,  624 => 193,  621 => 192,  604 => 191,  600 => 189,  591 => 187,  587 => 186,  573 => 174,  559 => 173,  554 => 172,  551 => 171,  534 => 170,  530 => 168,  521 => 166,  517 => 165,  508 => 158,  494 => 157,  489 => 156,  486 => 155,  469 => 154,  465 => 152,  456 => 150,  452 => 149,  444 => 143,  430 => 142,  425 => 141,  422 => 140,  405 => 139,  401 => 137,  392 => 135,  388 => 134,  379 => 127,  365 => 126,  360 => 125,  357 => 124,  340 => 123,  336 => 121,  327 => 119,  323 => 118,  314 => 111,  300 => 110,  295 => 109,  292 => 108,  275 => 107,  271 => 105,  262 => 103,  258 => 102,  242 => 88,  233 => 86,  229 => 85,  200 => 63,  191 => 61,  182 => 59,  177 => 57,  170 => 53,  163 => 49,  158 => 47,  147 => 43,  138 => 41,  133 => 39,  115 => 37,  95 => 20,  86 => 14,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mostra Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-10\">
                <h3>Preventivi <small>Mostra > Avanzato</small></h3>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"card float-right mb-2 w-sm-100 mw-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <div class=\"btn-group\">
                            <a href=\"{{ url('preventivi_dettaglio_avanzato_id', {'pid' : data.pid}) }}\" class=\"btn btn-primary btn-sm\">
                                Computometrico
                            </a>
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"{{ url('preventivi_modifica_avanzato', {'pid': data.pid}) }}\" class=\"btn btn-secondary btn-sm float-right\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a id=\"print\" href=\"\" class=\"btn btn-success btn-sm float-right\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\" id=\"page\">
                <div class=\"card-body\">
                    <table class=\"table table-bordered table-responsive-md\">
                        <tr>
                            <td><strong>CLIENTE</strong></td>
                            <td class=\"text-center\">Proposta n. {{ data.pid }} del {{ data.date|date(\"d.m.Y\") }} per <br/> {% if func.uidToGenre(data.client) == 1 %}Egregio Signor {% elseif func.uidToGenre(data.client) == 2 %}Gentile Signora {% else %}Spett.le {% endif %}{{ func.uidToSurName(data.client) }} {{ func.uidToName(data.client) }}</td>
                            <td class=\"text-center\"><strong>PIANI CASA</strong></td>
                            <td>{{ data.pianiCasa }}</td>
                            <td class=\"text-center\"><strong>CIVILE</strong></td>
                            <td>{% if data.tipo == 1 %}SI{% else %}NO{% endif %}</td>
                            <td class=\"text-center\"><strong>DOMOTICO</strong></td>
                            <td>{% if data.level == 3 %}SI{% else %}NO{% endif %}</td>
                        </tr>
                        <tr>
                            <td><strong>DATA</strong></td>
                            <td class=\"text-center\">{{ data.date|date(\"d.m.y\") }}</td>
                            <td class=\"text-center\"><strong>METRI QUADRI (TOTALI)</strong></td>
                            <td>{{ data.squareMeters }}</td>
                            <td class=\"text-center\"><strong>DISTANZA QUADRO TOUCH</strong></td>
                            <td>-</td>
                            <td class=\"text-center\"><strong>ENEL KW</strong></td>
                            <td>{{ data.kw }}</td>
                        </tr>
                        <tr>
                            <td><strong>TIPO CLIMA</strong></td>
                            <td class=\"text-center\">{{ func.heatingIntToName(data.riscaldamento) }}</td>
                            <td class=\"text-center\"><strong>OPERE MURARIE</strong></td>
                            <td>{% if data.opereMurarie != 0 %}SI{% else %}NO{% endif %}</td>
                            <td class=\"text-center\"><strong>INTONACO</strong></td>
                            <td>{% if data.opereMurarieIntonaco == 1 %}SI{% else %}NO{% endif %}</td>
                            <td class=\"text-center\"><strong>PIETRA</strong></td>
                            <td>{% if data.opereMurariePietra == 2 %}SI{% else %}NO{% endif %}</td>
                        </tr>
                    </table>
                    <table class=\"table table-bordered mt-3\">
                        <tr>
                            <td class=\"text-center mt-3\">
                                <strong>PIANO 1: TERRA</strong>
                            </td>
                        </tr>
                    </table>
                    <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"\" disabled=\"disabled\"> < </a>
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-r\" href=\"#\"> > </a>
                        </div>
                    </div>
                    <div class=\"wrapper2\">
                        <div class=\"div2\">
                            <table class=\"table-2 table table-bordered  mt-3 mr-2 selector\" style=\"position:relative\">
                                <thead>
                                    <tr class=\"mt-3\">
                                        <th><strong>TIPOLOGIA</strong></th>
                                        {% for item in data.name %}
                                            <th class=\"text-center\">{{ item }}</th>
                                        {% endfor %}
                                        <th class=\"text-center\">Sistemi</th>
                                        <th class=\"text-center\"><strong>TOTALE</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    {% for data in item.0.val1 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val1 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    {% for data in item.0.val2 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val2 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    {% for data in item.0.val3 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val3 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    {% for data in item.0.val4 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val4 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    {% for data in item.0.val5 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val5 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    {% for data in item.0.val6 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val6 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    {% for data in item.0.val7 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val7 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    {% for data in item.0.val8 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val8 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    {% for data in item.0.val9 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val9 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    {% for data in item.0.val10 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val10 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    {% for data in item.0.val11 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val11 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    {% for data in item.0.val12 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val12 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val13 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val13 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    {% for data in item.0.val14 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val14 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val15 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val15 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    {% for data in item.0.val16 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val16 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    {% for data in item.0.val17 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val17 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    {% for data in item.0.val18 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val18 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    {% for data in item.0.val19 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val19 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    {% for data in item.0.val20 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val20 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    {% for data in item.0.val21 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val21 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        QUADRO ELETTRICO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 12 Moduli</strong>
                                    </td>
                                    {% for data in item.0.val22 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val22 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    {% for data in item.0.val23 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val23 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    {% for data in item.0.val24 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val24 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    {% for data in item.0.val25 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val25 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    {% for data in item.0.val26 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val26 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    {% for data in item.0.val27 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val27 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        SERVIZI PREDISPOSIZIONE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme Gas predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val28 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val28 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val29 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val29 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val30 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val30 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val31 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val31 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    {% for data in item.0.val32 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val32 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    {% for data in item.0.val33 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val33 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    {% for data in item.0.val34 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val34 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    {% for data in item.0.val35 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val35 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    {% for data in item.0.val36 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val36 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    {% for data in item.0.val37 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val37 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    {% for data in item.0.val38 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val38 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val39 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val39 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    {% for data in item.0.val40 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val40 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    {% for data in item.0.val41 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val41 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    {% for data in item.0.val42 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val42 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    {% for data in item.0.val43 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val43 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    {% for data in item.0.val44 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val44 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    {% for data in item.0.val45 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val45 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    {% for data in item.0.val46 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val46 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        AUDIO-VIDEO E HOME THEATER PREDISPOSIZIONI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Touch 3,5\" a colori o EQ40</strong>
                                    </td>
                                    {% for data in item.0.val47 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val47 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    {% for data in item.0.val48 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val48 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    {% for data in item.0.val49 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val49 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    {% for data in item.0.val50 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val50 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    {% for data in item.0.val51 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val51 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    {% for data in item.0.val52 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val52 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    {% for data in item.0.val53 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val53 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PREDISPOSIZIONE AUTOMATISMI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore zanzariera/tenda</strong>
                                    </td>
                                    {% for data in item.0.val54 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val54 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    {% for data in item.0.val55 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val55 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    {% for data in item.0.val56 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val56 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    {% for data in item.0.val57 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val57 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    {% for data in item.0.val58 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val58 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    {% for data in item.0.val59 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val59 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ASPIRAZIONE CENTRALIZZATA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bocchette</strong>
                                    </td>
                                    {% for data in item.0.val60 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val60 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    {% for data in item.0.val61 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val61 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RESOCONTO PLACCHE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 503</strong>
                                    </td>
                                    {% for data in item.0.val62 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val62 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    {% for data in item.0.val63 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val63 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    {% for data in item.0.val64 %}
                                        <td class=\"text-center\">{{ data }}</td>
                                    {% endfor %}
                                    <td class=\"text-center\">
                                        <strong>
                                        {% for total in item.0.val64 %}
                                            {% set sum = total + sum ?? 0 %}
                                            {% if loop.last %}{{ sum }}{% endif %}
                                        {% endfor %}
                                        </strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {#<div class=\"row\">#}
            {#<div class=\"col-8\"></div>#}
            {#<div class=\"col-4\">#}
                {#<div class=\"card mt-2\">#}
                    {#<div class=\"card-body\">#}
                        {#<div class=\"row\">#}
                            {#<div class=\"col-6\">#}
                                {#<strong>TOTALE LORDO</strong>#}
                            {#</div>#}
                            {#<div class=\"col-6\">#}
                                {#{{ total|number_format(2) }} €#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"row\">#}
                            {#<div class=\"col-6\">#}
                                {#<strong>IVA (22%)</strong>#}
                            {#</div>#}
                            {#<div class=\"col-6\">#}
                                {#{% set vat = total * 22 / 100 %}#}
                                {#{{ vat|number_format(2) }} €#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"row\">#}
                            {#<div class=\"col-6\">#}
                                {#<strong>SCONTO ({{ data.sconto }} %)</strong>#}
                            {#</div>#}
                            {#<div class=\"col-6\">#}
                                {#{% set sconto = total * data.sconto / 100 %}#}
                                {#{{ (sconto)|number_format(2) }} €#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"row\">#}
                            {#<div class=\"col-6\">#}
                                {#<strong>TOTALE NETTO</strong>#}
                            {#</div>#}
                            {#<div class=\"col-6\">#}
                                {#{% set gtotal = total + vat - sconto %}#}
                                {#{{ gtotal|number_format(2) }} €#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    </div>
</div>
{% endblock body %}
{% block stylesheets %}
    <style>
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
    <style type=\"text/css\" media=\"print\">
        @page { size: landscape; }
    </style>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset(\"js/jquery.fixedheadertable.min.js\") }}\"></script>
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
            console.log(\$(\".table-2\").position())
            if (\$(\".table-2\").position.left >= 0) {
                return;
            }
            \$(\".table-2\").animate({'left': '+=300px'}).scrollLeft()
        });
        \$(window).bind('scroll', function () {
            if (\$(window).scrollTop() > 333) {
                \$('#buttons').addClass('fixed-top').addClass('fixed').animate();
                console.log(\"scolled\")
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
        \$('#print').click(function(e) {
            e.preventDefault();
            window.print();
            return false;
        })

    </script>
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
    </script>
{% endblock %}
", "expertations/show.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.advanced.html.twig");
    }
}
