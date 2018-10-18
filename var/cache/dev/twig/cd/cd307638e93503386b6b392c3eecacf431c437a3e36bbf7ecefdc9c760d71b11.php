<?php

/* expertations/show.advanced.html.twig */
class __TwigTemplate_7ce9f836c9f21da71d7084526f4ed7abda3d0df3f88dfc9522f6ea7f295b8da4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/show.advanced.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
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
    public function block_title($context, array $blocks = array())
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
    public function block_body($context, array $blocks = array())
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
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"print();\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <table class=\"table table-bordered table-responsive\">
                        <tr>
                            <td><strong>CLIENTE</strong></td>
                            <td class=\"text-center\">Proposta n. ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "id", array()), "html", null, true);
        echo " del ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "date", array()), "d.m.Y"), "html", null, true);
        echo " per <br/> Egregio Signor ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 34, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>PIANI CASA</strong></td>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>CIVILE</strong></td>
                            <td>";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->source); })()), "tipo", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>DOMOTICO</strong></td>
                            <td>";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 40, $this->source); })()), "level", array()) == 3)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>DATA</strong></td>
                            <td class=\"text-center\">";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 44, $this->source); })()), "date", array()), "d.m.y"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>METRI QUADRI (TOTALI)</strong></td>
                            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 46, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>DISTANZA QUADRO TOUCH</strong></td>
                            <td>-</td>
                            <td class=\"text-center\"><strong>ENEL KW</strong></td>
                            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 50, $this->source); })()), "kw", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>TIPO CLIMA</strong></td>
                            <td class=\"text-center\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 54, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 54, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>OPERE MURARIE</strong></td>
                            <td>";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 56, $this->source); })()), "opereMurarie", array()) != 0)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>INTONACO</strong></td>
                            <td>";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 58, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>PIETRA</strong></td>
                            <td>";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 60, $this->source); })()), "opereMurarie", array()) == 2)) {
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
                    <table class=\"table table-bordered table-responsive mt-3\">
                        <tr class=\"mt-3\">
                            <td><strong>TIPOLOGIA</strong></td>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 73, $this->source); })()), "name", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
            echo "                                <td>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            <td><strong>TOTALE</strong></td>
                        </tr>
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->source); })()), 0, array()), "val1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 88
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                            <td class=\"text-center\">
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->source); })()), 0, array()), "val1", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 92
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 93
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 93, $this->source); })()), "html", null, true);
            }
            // line 94
            echo "                                ";
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
        // line 95
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Prese esterne a parete</strong>
                            </td>
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->source); })()), 0, array()), "val2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 102
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            <td class=\"text-center\">
                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 105, $this->source); })()), 0, array()), "val2", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 106
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 107
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 107, $this->source); })()), "html", null, true);
            }
            // line 108
            echo "                                ";
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
        // line 109
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                            </td>
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->source); })()), 0, array()), "val3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 116
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            <td class=\"text-center\">
                                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 119, $this->source); })()), 0, array()), "val3", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 120
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 121
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 121, $this->source); })()), "html", null, true);
            }
            // line 122
            echo "                                ";
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
        // line 123
        echo "                            </td>
                        <tr>
                            <td>
                                <strong>Bipolare</strong>
                            </td>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 128, $this->source); })()), 0, array()), "val4", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 129
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                            <td class=\"text-center\">
                                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 132, $this->source); })()), 0, array()), "val4", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 133
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 134
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 134, $this->source); })()), "html", null, true);
            }
            // line 135
            echo "                                ";
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
        // line 136
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Ventilatore / Estrattore Aria</strong>
                            </td>
                            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 142, $this->source); })()), 0, array()), "val5", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 143
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                            <td class=\"text-center\">
                                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 146, $this->source); })()), 0, array()), "val5", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 147
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 148
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 148, $this->source); })()), "html", null, true);
            }
            // line 149
            echo "                                ";
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
        // line 150
        echo "                            </td>
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
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 161, $this->source); })()), 0, array()), "val6", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 162
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                            <td class=\"text-center\">
                                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 165, $this->source); })()), 0, array()), "val6", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 166
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 167
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 167, $this->source); })()), "html", null, true);
            }
            // line 168
            echo "                                ";
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
        // line 169
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Comandi Agg.vi</strong>
                            </td>
                            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 175, $this->source); })()), 0, array()), "val7", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 176
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                            <td class=\"text-center\">
                                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 179, $this->source); })()), 0, array()), "val7", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 180
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 181
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 181, $this->source); })()), "html", null, true);
            }
            // line 182
            echo "                                ";
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
        // line 183
        echo "                            </td>
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
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 194, $this->source); })()), 0, array()), "val8", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 195
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                            <td class=\"text-center\">
                                ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 198, $this->source); })()), 0, array()), "val8", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 199
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 200
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 200, $this->source); })()), "html", null, true);
            }
            // line 201
            echo "                                ";
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
        // line 202
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Punti Lice esterni a parete</strong>
                            </td>
                            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 208, $this->source); })()), 0, array()), "val9", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 209
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                            <td class=\"text-center\">
                                ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 212, $this->source); })()), 0, array()), "val9", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 213
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 214
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 214, $this->source); })()), "html", null, true);
            }
            // line 215
            echo "                                ";
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
        // line 216
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Dimmer</strong>
                            </td>
                            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 222, $this->source); })()), 0, array()), "val10", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 223
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                            <td class=\"text-center\">
                                ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 226, $this->source); })()), 0, array()), "val10", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 227
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 228
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 228, $this->source); })()), "html", null, true);
            }
            // line 229
            echo "                                ";
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
        // line 230
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Predisposizione LED parete o incasso</strong>
                            </td>
                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 236, $this->source); })()), 0, array()), "val11", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 237
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                            <td class=\"text-center\">
                                ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 240, $this->source); })()), 0, array()), "val11", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 241
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 242
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 242, $this->source); })()), "html", null, true);
            }
            // line 243
            echo "                                ";
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
        // line 244
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Sensori accendiluce/contatto porta</strong>
                            </td>
                            ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 250, $this->source); })()), 0, array()), "val12", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 251
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                            <td class=\"text-center\">
                                ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 254, $this->source); })()), 0, array()), "val12", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 255
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 256
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 256, $this->source); })()), "html", null, true);
            }
            // line 257
            echo "                                ";
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
        // line 258
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Luci emergenza predisposizione</strong>
                            </td>
                            ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 264, $this->source); })()), 0, array()), "val13", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 265
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                            <td class=\"text-center\">
                                ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 268, $this->source); })()), 0, array()), "val13", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 269
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 270
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 270, $this->source); })()), "html", null, true);
            }
            // line 271
            echo "                                ";
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
        // line 272
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Lampada Emergenza</strong>
                            </td>
                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 278, $this->source); })()), 0, array()), "val14", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 279
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                            <td class=\"text-center\">
                                ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 282, $this->source); })()), 0, array()), "val14", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 283
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 284
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 284, $this->source); })()), "html", null, true);
            }
            // line 285
            echo "                                ";
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
        // line 286
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Segnapasso LED predisposizione</strong>
                            </td>
                            ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 292, $this->source); })()), 0, array()), "val15", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 293
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "                            <td class=\"text-center\">
                                ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 296, $this->source); })()), 0, array()), "val15", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 297
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 298
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 298, $this->source); })()), "html", null, true);
            }
            // line 299
            echo "                                ";
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
        // line 300
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Sensore luminosità</strong>
                            </td>
                            ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 306, $this->source); })()), 0, array()), "val16", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 307
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                            <td class=\"text-center\">
                                ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 310, $this->source); })()), 0, array()), "val16", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 311
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 312
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 312, $this->source); })()), "html", null, true);
            }
            // line 313
            echo "                                ";
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
        // line 314
        echo "                            </td>
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
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 325, $this->source); })()), 0, array()), "val17", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 326
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                            <td class=\"text-center\">
                                ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 329, $this->source); })()), 0, array()), "val17", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 330
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 331
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 331, $this->source); })()), "html", null, true);
            }
            // line 332
            echo "                                ";
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
        // line 333
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Caldaia/Pompa di calore</strong>
                            </td>
                            ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 339, $this->source); })()), 0, array()), "val18", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 340
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                            <td class=\"text-center\">
                                ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 343, $this->source); })()), 0, array()), "val18", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 344
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 345
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 345, $this->source); })()), "html", null, true);
            }
            // line 346
            echo "                                ";
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
        // line 347
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Terra ai collettori</strong>
                            </td>
                            ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 353, $this->source); })()), 0, array()), "val19", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 354
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "                            <td class=\"text-center\">
                                ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 357, $this->source); })()), 0, array()), "val19", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 358
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 359
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 359, $this->source); })()), "html", null, true);
            }
            // line 360
            echo "                                ";
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
        // line 361
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Termostato</strong>
                            </td>
                            ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 367, $this->source); })()), 0, array()), "val20", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 368
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "                            <td class=\"text-center\">
                                ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 371, $this->source); })()), 0, array()), "val20", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 372
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 373
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 373, $this->source); })()), "html", null, true);
            }
            // line 374
            echo "                                ";
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
        // line 375
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Sensore Umidità</strong>
                            </td>
                            ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 381, $this->source); })()), 0, array()), "val21", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 382
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "                            <td class=\"text-center\">
                                ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 385, $this->source); })()), 0, array()), "val21", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 386
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 387
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 387, $this->source); })()), "html", null, true);
            }
            // line 388
            echo "                                ";
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
        // line 389
        echo "                            </td>
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
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 400, $this->source); })()), 0, array()), "val22", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 401
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                            <td class=\"text-center\">
                                ";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 404, $this->source); })()), 0, array()), "val22", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 405
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 406
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 406, $this->source); })()), "html", null, true);
            }
            // line 407
            echo "                                ";
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
        // line 408
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Quadro 36 Moduli</strong>
                            </td>
                            ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 414, $this->source); })()), 0, array()), "val23", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 415
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "                            <td class=\"text-center\">
                                ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 418, $this->source); })()), 0, array()), "val23", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 419
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 420
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 420, $this->source); })()), "html", null, true);
            }
            // line 421
            echo "                                ";
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
        // line 422
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Quadro 54 Moduli</strong>
                            </td>
                            ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 428, $this->source); })()), 0, array()), "val24", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 429
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "                            <td class=\"text-center\">
                                ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 432, $this->source); })()), 0, array()), "val24", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 433
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 434
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 434, $this->source); })()), "html", null, true);
            }
            // line 435
            echo "                                ";
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
        // line 436
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Quadro 72 Moduli</strong>
                            </td>
                            ";
        // line 442
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 442, $this->source); })()), 0, array()), "val25", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 443
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "                            <td class=\"text-center\">
                                ";
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 446, $this->source); })()), 0, array()), "val25", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 447
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 448
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 448, $this->source); })()), "html", null, true);
            }
            // line 449
            echo "                                ";
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
        // line 450
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Sezionatore</strong>
                            </td>
                            ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 456, $this->source); })()), 0, array()), "val26", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 457
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "                            <td class=\"text-center\">
                                ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 460, $this->source); })()), 0, array()), "val26", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 461
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 462
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 462, $this->source); })()), "html", null, true);
            }
            // line 463
            echo "                                ";
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
        // line 464
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>MTD</strong>
                            </td>
                            ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 470, $this->source); })()), 0, array()), "val27", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 471
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                            <td class=\"text-center\">
                                ";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 474, $this->source); })()), 0, array()), "val27", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 475
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 476
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 476, $this->source); })()), "html", null, true);
            }
            // line 477
            echo "                                ";
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
        // line 478
        echo "                            </td>
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
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 489, $this->source); })()), 0, array()), "val28", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 490
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        echo "                            <td class=\"text-center\">
                                ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 493, $this->source); })()), 0, array()), "val28", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 494
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 495
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 495, $this->source); })()), "html", null, true);
            }
            // line 496
            echo "                                ";
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
        // line 497
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Allagamento predisposizione</strong>
                            </td>
                            ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 503, $this->source); })()), 0, array()), "val29", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 504
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        echo "                            <td class=\"text-center\">
                                ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 507, $this->source); })()), 0, array()), "val29", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 508
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 509
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 509, $this->source); })()), "html", null, true);
            }
            // line 510
            echo "                                ";
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
        // line 511
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Allarme predisposizione</strong>
                            </td>
                            ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 517, $this->source); })()), 0, array()), "val30", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 518
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "                            <td class=\"text-center\">
                                ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 521, $this->source); })()), 0, array()), "val30", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 522
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 523
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 523, $this->source); })()), "html", null, true);
            }
            // line 524
            echo "                                ";
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
        // line 525
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Rilevatore di fumo predisposizione</strong>
                            </td>
                            ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 531, $this->source); })()), 0, array()), "val31", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 532
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        echo "                            <td class=\"text-center\">
                                ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 535, $this->source); })()), 0, array()), "val31", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 536
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 537
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 537, $this->source); })()), "html", null, true);
            }
            // line 538
            echo "                                ";
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
        // line 539
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Centralino telefonico</strong>
                            </td>
                            ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 545, $this->source); })()), 0, array()), "val32", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 546
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 548
        echo "                            <td class=\"text-center\">
                                ";
        // line 549
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 549, $this->source); })()), 0, array()), "val32", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 550
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 551
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 551, $this->source); })()), "html", null, true);
            }
            // line 552
            echo "                                ";
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
        // line 553
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Telefono</strong>
                            </td>
                            ";
        // line 559
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 559, $this->source); })()), 0, array()), "val33", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 560
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo "                            <td class=\"text-center\">
                                ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 563, $this->source); })()), 0, array()), "val33", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 564
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 565
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 565, $this->source); })()), "html", null, true);
            }
            // line 566
            echo "                                ";
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
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Citofono Interno</strong>
                            </td>
                            ";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 573, $this->source); })()), 0, array()), "val34", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 574
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 576
        echo "                            <td class=\"text-center\">
                                ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 577, $this->source); })()), 0, array()), "val34", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 578
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 579
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 579, $this->source); })()), "html", null, true);
            }
            // line 580
            echo "                                ";
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
        // line 581
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Citofono Esterno</strong>
                            </td>
                            ";
        // line 587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 587, $this->source); })()), 0, array()), "val35", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 588
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                            <td class=\"text-center\">
                                ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 591, $this->source); })()), 0, array()), "val35", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 592
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 593
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 593, $this->source); })()), "html", null, true);
            }
            // line 594
            echo "                                ";
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
        // line 595
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Videocitofono a parete</strong>
                            </td>
                            ";
        // line 601
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 601, $this->source); })()), 0, array()), "val36", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 602
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 604
        echo "                            <td class=\"text-center\">
                                ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 605, $this->source); })()), 0, array()), "val36", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 606
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 607
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 607, $this->source); })()), "html", null, true);
            }
            // line 608
            echo "                                ";
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
        // line 609
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Videocitofono esterno</strong>
                            </td>
                            ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 615, $this->source); })()), 0, array()), "val37", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 616
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "                            <td class=\"text-center\">
                                ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 619, $this->source); })()), 0, array()), "val37", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 620
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 621
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 621, $this->source); })()), "html", null, true);
            }
            // line 622
            echo "                                ";
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
        // line 623
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Campanello suoneria</strong>
                            </td>
                            ";
        // line 629
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 629, $this->source); })()), 0, array()), "val38", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 630
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 632
        echo "                            <td class=\"text-center\">
                                ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 633, $this->source); })()), 0, array()), "val38", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 634
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 635
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 635, $this->source); })()), "html", null, true);
            }
            // line 636
            echo "                                ";
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
        // line 637
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Dati predisposizione</strong>
                            </td>
                            ";
        // line 643
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 643, $this->source); })()), 0, array()), "val39", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 644
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "                            <td class=\"text-center\">
                                ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 647, $this->source); })()), 0, array()), "val39", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 648
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 649
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 649, $this->source); })()), "html", null, true);
            }
            // line 650
            echo "                                ";
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
        // line 651
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Telecamere predisposizione</strong>
                            </td>
                            ";
        // line 657
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 657, $this->source); })()), 0, array()), "val40", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 658
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 660
        echo "                            <td class=\"text-center\">
                                ";
        // line 661
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 661, $this->source); })()), 0, array()), "val40", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 662
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 663
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 663, $this->source); })()), "html", null, true);
            }
            // line 664
            echo "                                ";
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
        // line 665
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tiranti e/o pulsanti emergenza</strong>
                            </td>
                            ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 671, $this->source); })()), 0, array()), "val41", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 672
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 674
        echo "                            <td class=\"text-center\">
                                ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 675, $this->source); })()), 0, array()), "val41", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 676
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 677
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 677, $this->source); })()), "html", null, true);
            }
            // line 678
            echo "                                ";
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
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Ronzatore emergenza</strong>
                            </td>
                            ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 685, $this->source); })()), 0, array()), "val42", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 686
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo "                            <td class=\"text-center\">
                                ";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 689, $this->source); })()), 0, array()), "val42", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 690
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 691
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 691, $this->source); })()), "html", null, true);
            }
            // line 692
            echo "                                ";
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
        // line 693
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>TV frutti</strong>
                            </td>
                            ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 699, $this->source); })()), 0, array()), "val43", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 700
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                            <td class=\"text-center\">
                                ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 703, $this->source); })()), 0, array()), "val43", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 704
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 705
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 705, $this->source); })()), "html", null, true);
            }
            // line 706
            echo "                                ";
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
        // line 707
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SAT frutti</strong>
                            </td>
                            ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 713, $this->source); })()), 0, array()), "val44", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 714
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 716
        echo "                            <td class=\"text-center\">
                                ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 717, $this->source); })()), 0, array()), "val44", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 718
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 719
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 719, $this->source); })()), "html", null, true);
            }
            // line 720
            echo "                                ";
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
        // line 721
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Antenna terrestre</strong>
                            </td>
                            ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 727, $this->source); })()), 0, array()), "val45", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 728
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "                            <td class=\"text-center\">
                                ";
        // line 731
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 731, $this->source); })()), 0, array()), "val45", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 732
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 733
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 733, $this->source); })()), "html", null, true);
            }
            // line 734
            echo "                                ";
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
        // line 735
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Parabola</strong>
                            </td>
                            ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 741, $this->source); })()), 0, array()), "val46", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 742
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 744
        echo "                            <td class=\"text-center\">
                                ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 745, $this->source); })()), 0, array()), "val46", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 746
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 747
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 747, $this->source); })()), "html", null, true);
            }
            // line 748
            echo "                                ";
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
        // line 749
        echo "                            </td>
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
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 760, $this->source); })()), 0, array()), "val47", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 761
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        echo "                            <td class=\"text-center\">
                                ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 764, $this->source); })()), 0, array()), "val47", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 765
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 766
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 766, $this->source); })()), "html", null, true);
            }
            // line 767
            echo "                                ";
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
        // line 768
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Equinox 41</strong>
                            </td>
                            ";
        // line 774
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 774, $this->source); })()), 0, array()), "val48", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 775
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 777
        echo "                            <td class=\"text-center\">
                                ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 778, $this->source); })()), 0, array()), "val48", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 779
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 780
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 780, $this->source); })()), "html", null, true);
            }
            // line 781
            echo "                                ";
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
        // line 782
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Equinox 73</strong>
                            </td>
                            ";
        // line 788
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 788, $this->source); })()), 0, array()), "val49", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 789
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo "                            <td class=\"text-center\">
                                ";
        // line 792
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 792, $this->source); })()), 0, array()), "val49", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 793
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 794
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 794, $this->source); })()), "html", null, true);
            }
            // line 795
            echo "                                ";
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
        // line 796
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Keypad Vantage</strong>
                            </td>
                            ";
        // line 802
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 802, $this->source); })()), 0, array()), "val50", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 803
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        echo "                            <td class=\"text-center\">
                                ";
        // line 806
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 806, $this->source); })()), 0, array()), "val50", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 807
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 808
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 808, $this->source); })()), "html", null, true);
            }
            // line 809
            echo "                                ";
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
        // line 810
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Comandi diffusione sonora</strong>
                            </td>
                            ";
        // line 816
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 816, $this->source); })()), 0, array()), "val51", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 817
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 819
        echo "                            <td class=\"text-center\">
                                ";
        // line 820
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 820, $this->source); })()), 0, array()), "val51", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 821
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 822
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 822, $this->source); })()), "html", null, true);
            }
            // line 823
            echo "                                ";
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
        // line 824
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Diffusori</strong>
                            </td>
                            ";
        // line 830
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 830, $this->source); })()), 0, array()), "val52", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 831
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 833
        echo "                            <td class=\"text-center\">
                                ";
        // line 834
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 834, $this->source); })()), 0, array()), "val52", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 835
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 836
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 836, $this->source); })()), "html", null, true);
            }
            // line 837
            echo "                                ";
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
        // line 838
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Surround</strong>
                            </td>
                            ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 844, $this->source); })()), 0, array()), "val53", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 845
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 847
        echo "                            <td class=\"text-center\">
                                ";
        // line 848
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 848, $this->source); })()), 0, array()), "val53", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 849
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 850
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 850, $this->source); })()), "html", null, true);
            }
            // line 851
            echo "                                ";
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
        // line 852
        echo "                            </td>
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
        // line 863
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 863, $this->source); })()), 0, array()), "val54", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 864
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
        echo "                            <td class=\"text-center\">
                                ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 867, $this->source); })()), 0, array()), "val54", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 868
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 869
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 869, $this->source); })()), "html", null, true);
            }
            // line 870
            echo "                                ";
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
        // line 871
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Motore persiana/ lucernai/ grata</strong>
                            </td>
                            ";
        // line 877
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 877, $this->source); })()), 0, array()), "val55", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 878
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "                            <td class=\"text-center\">
                                ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 881, $this->source); })()), 0, array()), "val55", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 882
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 883
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 883, $this->source); })()), "html", null, true);
            }
            // line 884
            echo "                                ";
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
        // line 885
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Motore tapparella / oscurante</strong>
                            </td>
                            ";
        // line 891
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 891, $this->source); })()), 0, array()), "val56", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 892
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 894
        echo "                            <td class=\"text-center\">
                                ";
        // line 895
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 895, $this->source); })()), 0, array()), "val56", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 896
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 897
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 897, $this->source); })()), "html", null, true);
            }
            // line 898
            echo "                                ";
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
        // line 899
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>P.to comando motori</strong>
                            </td>
                            ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 905, $this->source); })()), 0, array()), "val57", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 906
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 908
        echo "                            <td class=\"text-center\">
                                ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 909, $this->source); })()), 0, array()), "val57", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 910
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 911
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 911, $this->source); })()), "html", null, true);
            }
            // line 912
            echo "                                ";
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
        // line 913
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Basculante</strong>
                            </td>
                            ";
        // line 919
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 919, $this->source); })()), 0, array()), "val58", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 920
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "                            <td class=\"text-center\">
                                ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 923, $this->source); })()), 0, array()), "val58", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 924
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 925
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 925, $this->source); })()), "html", null, true);
            }
            // line 926
            echo "                                ";
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
        // line 927
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Cancello</strong>
                            </td>
                            ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 933, $this->source); })()), 0, array()), "val59", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 934
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 936
        echo "                            <td class=\"text-center\">
                                ";
        // line 937
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 937, $this->source); })()), 0, array()), "val59", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 938
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 939
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 939, $this->source); })()), "html", null, true);
            }
            // line 940
            echo "                                ";
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
        // line 941
        echo "                            </td>
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
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 952, $this->source); })()), 0, array()), "val60", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 953
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 955
        echo "                            <td class=\"text-center\">
                                ";
        // line 956
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 956, $this->source); })()), 0, array()), "val60", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 957
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 958
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 958, $this->source); })()), "html", null, true);
            }
            // line 959
            echo "                                ";
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
        // line 960
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Motore</strong>
                            </td>
                            ";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 966, $this->source); })()), 0, array()), "val61", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 967
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 969
        echo "                            <td class=\"text-center\">
                                ";
        // line 970
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 970, $this->source); })()), 0, array()), "val61", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 971
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 972
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 972, $this->source); })()), "html", null, true);
            }
            // line 973
            echo "                                ";
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
        // line 974
        echo "                            </td>
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
        // line 985
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 985, $this->source); })()), 0, array()), "val62", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 986
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        echo "                            <td class=\"text-center\">
                                ";
        // line 989
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 989, $this->source); })()), 0, array()), "val62", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 990
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 991
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 991, $this->source); })()), "html", null, true);
            }
            // line 992
            echo "                                ";
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
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Supporti 504</strong>
                            </td>
                            ";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 999, $this->source); })()), 0, array()), "val63", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1000
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1002
        echo "                            <td class=\"text-center\">
                                ";
        // line 1003
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1003, $this->source); })()), 0, array()), "val63", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1004
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1005
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1005, $this->source); })()), "html", null, true);
            }
            // line 1006
            echo "                                ";
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
        // line 1007
        echo "                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Supporti 506</strong>
                            </td>
                            ";
        // line 1013
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1013, $this->source); })()), 0, array()), "val64", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1014
            echo "                                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1016
        echo "                            <td class=\"text-center\">
                                ";
        // line 1017
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1017, $this->source); })()), 0, array()), "val64", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1018
            echo "                                    ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1019
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1019, $this->source); })()), "html", null, true);
            }
            // line 1020
            echo "                                ";
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
        // line 1021
        echo "                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
        return array (  4294 => 1021,  4280 => 1020,  4275 => 1019,  4272 => 1018,  4255 => 1017,  4252 => 1016,  4243 => 1014,  4239 => 1013,  4231 => 1007,  4217 => 1006,  4212 => 1005,  4209 => 1004,  4192 => 1003,  4189 => 1002,  4180 => 1000,  4176 => 999,  4168 => 993,  4154 => 992,  4149 => 991,  4146 => 990,  4129 => 989,  4126 => 988,  4117 => 986,  4113 => 985,  4100 => 974,  4086 => 973,  4081 => 972,  4078 => 971,  4061 => 970,  4058 => 969,  4049 => 967,  4045 => 966,  4037 => 960,  4023 => 959,  4018 => 958,  4015 => 957,  3998 => 956,  3995 => 955,  3986 => 953,  3982 => 952,  3969 => 941,  3955 => 940,  3950 => 939,  3947 => 938,  3930 => 937,  3927 => 936,  3918 => 934,  3914 => 933,  3906 => 927,  3892 => 926,  3887 => 925,  3884 => 924,  3867 => 923,  3864 => 922,  3855 => 920,  3851 => 919,  3843 => 913,  3829 => 912,  3824 => 911,  3821 => 910,  3804 => 909,  3801 => 908,  3792 => 906,  3788 => 905,  3780 => 899,  3766 => 898,  3761 => 897,  3758 => 896,  3741 => 895,  3738 => 894,  3729 => 892,  3725 => 891,  3717 => 885,  3703 => 884,  3698 => 883,  3695 => 882,  3678 => 881,  3675 => 880,  3666 => 878,  3662 => 877,  3654 => 871,  3640 => 870,  3635 => 869,  3632 => 868,  3615 => 867,  3612 => 866,  3603 => 864,  3599 => 863,  3586 => 852,  3572 => 851,  3567 => 850,  3564 => 849,  3547 => 848,  3544 => 847,  3535 => 845,  3531 => 844,  3523 => 838,  3509 => 837,  3504 => 836,  3501 => 835,  3484 => 834,  3481 => 833,  3472 => 831,  3468 => 830,  3460 => 824,  3446 => 823,  3441 => 822,  3438 => 821,  3421 => 820,  3418 => 819,  3409 => 817,  3405 => 816,  3397 => 810,  3383 => 809,  3378 => 808,  3375 => 807,  3358 => 806,  3355 => 805,  3346 => 803,  3342 => 802,  3334 => 796,  3320 => 795,  3315 => 794,  3312 => 793,  3295 => 792,  3292 => 791,  3283 => 789,  3279 => 788,  3271 => 782,  3257 => 781,  3252 => 780,  3249 => 779,  3232 => 778,  3229 => 777,  3220 => 775,  3216 => 774,  3208 => 768,  3194 => 767,  3189 => 766,  3186 => 765,  3169 => 764,  3166 => 763,  3157 => 761,  3153 => 760,  3140 => 749,  3126 => 748,  3121 => 747,  3118 => 746,  3101 => 745,  3098 => 744,  3089 => 742,  3085 => 741,  3077 => 735,  3063 => 734,  3058 => 733,  3055 => 732,  3038 => 731,  3035 => 730,  3026 => 728,  3022 => 727,  3014 => 721,  3000 => 720,  2995 => 719,  2992 => 718,  2975 => 717,  2972 => 716,  2963 => 714,  2959 => 713,  2951 => 707,  2937 => 706,  2932 => 705,  2929 => 704,  2912 => 703,  2909 => 702,  2900 => 700,  2896 => 699,  2888 => 693,  2874 => 692,  2869 => 691,  2866 => 690,  2849 => 689,  2846 => 688,  2837 => 686,  2833 => 685,  2825 => 679,  2811 => 678,  2806 => 677,  2803 => 676,  2786 => 675,  2783 => 674,  2774 => 672,  2770 => 671,  2762 => 665,  2748 => 664,  2743 => 663,  2740 => 662,  2723 => 661,  2720 => 660,  2711 => 658,  2707 => 657,  2699 => 651,  2685 => 650,  2680 => 649,  2677 => 648,  2660 => 647,  2657 => 646,  2648 => 644,  2644 => 643,  2636 => 637,  2622 => 636,  2617 => 635,  2614 => 634,  2597 => 633,  2594 => 632,  2585 => 630,  2581 => 629,  2573 => 623,  2559 => 622,  2554 => 621,  2551 => 620,  2534 => 619,  2531 => 618,  2522 => 616,  2518 => 615,  2510 => 609,  2496 => 608,  2491 => 607,  2488 => 606,  2471 => 605,  2468 => 604,  2459 => 602,  2455 => 601,  2447 => 595,  2433 => 594,  2428 => 593,  2425 => 592,  2408 => 591,  2405 => 590,  2396 => 588,  2392 => 587,  2384 => 581,  2370 => 580,  2365 => 579,  2362 => 578,  2345 => 577,  2342 => 576,  2333 => 574,  2329 => 573,  2321 => 567,  2307 => 566,  2302 => 565,  2299 => 564,  2282 => 563,  2279 => 562,  2270 => 560,  2266 => 559,  2258 => 553,  2244 => 552,  2239 => 551,  2236 => 550,  2219 => 549,  2216 => 548,  2207 => 546,  2203 => 545,  2195 => 539,  2181 => 538,  2176 => 537,  2173 => 536,  2156 => 535,  2153 => 534,  2144 => 532,  2140 => 531,  2132 => 525,  2118 => 524,  2113 => 523,  2110 => 522,  2093 => 521,  2090 => 520,  2081 => 518,  2077 => 517,  2069 => 511,  2055 => 510,  2050 => 509,  2047 => 508,  2030 => 507,  2027 => 506,  2018 => 504,  2014 => 503,  2006 => 497,  1992 => 496,  1987 => 495,  1984 => 494,  1967 => 493,  1964 => 492,  1955 => 490,  1951 => 489,  1938 => 478,  1924 => 477,  1919 => 476,  1916 => 475,  1899 => 474,  1896 => 473,  1887 => 471,  1883 => 470,  1875 => 464,  1861 => 463,  1856 => 462,  1853 => 461,  1836 => 460,  1833 => 459,  1824 => 457,  1820 => 456,  1812 => 450,  1798 => 449,  1793 => 448,  1790 => 447,  1773 => 446,  1770 => 445,  1761 => 443,  1757 => 442,  1749 => 436,  1735 => 435,  1730 => 434,  1727 => 433,  1710 => 432,  1707 => 431,  1698 => 429,  1694 => 428,  1686 => 422,  1672 => 421,  1667 => 420,  1664 => 419,  1647 => 418,  1644 => 417,  1635 => 415,  1631 => 414,  1623 => 408,  1609 => 407,  1604 => 406,  1601 => 405,  1584 => 404,  1581 => 403,  1572 => 401,  1568 => 400,  1555 => 389,  1541 => 388,  1536 => 387,  1533 => 386,  1516 => 385,  1513 => 384,  1504 => 382,  1500 => 381,  1492 => 375,  1478 => 374,  1473 => 373,  1470 => 372,  1453 => 371,  1450 => 370,  1441 => 368,  1437 => 367,  1429 => 361,  1415 => 360,  1410 => 359,  1407 => 358,  1390 => 357,  1387 => 356,  1378 => 354,  1374 => 353,  1366 => 347,  1352 => 346,  1347 => 345,  1344 => 344,  1327 => 343,  1324 => 342,  1315 => 340,  1311 => 339,  1303 => 333,  1289 => 332,  1284 => 331,  1281 => 330,  1264 => 329,  1261 => 328,  1252 => 326,  1248 => 325,  1235 => 314,  1221 => 313,  1216 => 312,  1213 => 311,  1196 => 310,  1193 => 309,  1184 => 307,  1180 => 306,  1172 => 300,  1158 => 299,  1153 => 298,  1150 => 297,  1133 => 296,  1130 => 295,  1121 => 293,  1117 => 292,  1109 => 286,  1095 => 285,  1090 => 284,  1087 => 283,  1070 => 282,  1067 => 281,  1058 => 279,  1054 => 278,  1046 => 272,  1032 => 271,  1027 => 270,  1024 => 269,  1007 => 268,  1004 => 267,  995 => 265,  991 => 264,  983 => 258,  969 => 257,  964 => 256,  961 => 255,  944 => 254,  941 => 253,  932 => 251,  928 => 250,  920 => 244,  906 => 243,  901 => 242,  898 => 241,  881 => 240,  878 => 239,  869 => 237,  865 => 236,  857 => 230,  843 => 229,  838 => 228,  835 => 227,  818 => 226,  815 => 225,  806 => 223,  802 => 222,  794 => 216,  780 => 215,  775 => 214,  772 => 213,  755 => 212,  752 => 211,  743 => 209,  739 => 208,  731 => 202,  717 => 201,  712 => 200,  709 => 199,  692 => 198,  689 => 197,  680 => 195,  676 => 194,  663 => 183,  649 => 182,  644 => 181,  641 => 180,  624 => 179,  621 => 178,  612 => 176,  608 => 175,  600 => 169,  586 => 168,  581 => 167,  578 => 166,  561 => 165,  558 => 164,  549 => 162,  545 => 161,  532 => 150,  518 => 149,  513 => 148,  510 => 147,  493 => 146,  490 => 145,  481 => 143,  477 => 142,  469 => 136,  455 => 135,  450 => 134,  447 => 133,  430 => 132,  427 => 131,  418 => 129,  414 => 128,  407 => 123,  393 => 122,  388 => 121,  385 => 120,  368 => 119,  365 => 118,  356 => 116,  352 => 115,  344 => 109,  330 => 108,  325 => 107,  322 => 106,  305 => 105,  302 => 104,  293 => 102,  289 => 101,  281 => 95,  267 => 94,  262 => 93,  259 => 92,  242 => 91,  239 => 90,  230 => 88,  226 => 87,  213 => 76,  204 => 74,  200 => 73,  180 => 60,  171 => 58,  162 => 56,  157 => 54,  150 => 50,  143 => 46,  138 => 44,  127 => 40,  118 => 38,  113 => 36,  104 => 34,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
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
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"print();\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <table class=\"table table-bordered table-responsive\">
                        <tr>
                            <td><strong>CLIENTE</strong></td>
                            <td class=\"text-center\">Proposta n. {{ data.id }} del {{ data.date|date(\"d.m.Y\") }} per <br/> Egregio Signor {{ func.uidToName(data.client) }}</td>
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
                            <td>{% if data.opereMurarie == 1 %}SI{% else %}NO{% endif %}</td>
                            <td class=\"text-center\"><strong>PIETRA</strong></td>
                            <td>{% if data.opereMurarie == 2 %}SI{% else %}NO{% endif %}</td>
                        </tr>
                    </table>
                    <table class=\"table table-bordered mt-3\">
                        <tr>
                            <td class=\"text-center mt-3\">
                                <strong>PIANO 1: TERRA</strong>
                            </td>
                        </tr>
                    </table>
                    <table class=\"table table-bordered table-responsive mt-3\">
                        <tr class=\"mt-3\">
                            <td><strong>TIPOLOGIA</strong></td>
                            {% for item in data.name %}
                                <td>{{ item }}</td>
                            {% endfor %}
                            <td><strong>TOTALE</strong></td>
                        </tr>
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
                                {% for total in item.0.val1 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val2 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val3 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
                            </td>
                        <tr>
                            <td>
                                <strong>Bipolare</strong>
                            </td>
                            {% for data in item.0.val4 %}
                                <td class=\"text-center\">{{ data }}</td>
                            {% endfor %}
                            <td class=\"text-center\">
                                {% for total in item.0.val4 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val5 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val6 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val7 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val8 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val9 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val10 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val11 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val12 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val13 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val14 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val15 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val16 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val17 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val18 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val19 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val20 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val21 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val22 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val23 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val24 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val25 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val26 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val27 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val28 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val29 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val30 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val31 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val32 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val33 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val34 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val35 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val36 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val37 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val38 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val39 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val40 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val41 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val42 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val43 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val44 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val45 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val46 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val47 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val48 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val49 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val50 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val51 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val52 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val53 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val54 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val55 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val56 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val57 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val58 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val59 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val60 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val61 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val62 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val63 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
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
                                {% for total in item.0.val64 %}
                                    {% set sum = total + sum ?? 0 %}
                                    {% if loop.last %}{{ sum }}{% endif %}
                                {% endfor %}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock body %}", "expertations/show.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.advanced.html.twig");
    }
}
