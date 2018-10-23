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
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right\" onclick=\"print();\">
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
                    <table class=\"table table-bordered table-responsive-md\">
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
                    <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 82, $this->source); })()), "name", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "                                            <th>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</th>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                        <th><strong>TOTALE</strong></th>
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
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->source); })()), 0, array()), "val1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 99
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 103, $this->source); })()), 0, array()), "val1", array()));
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
            // line 104
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 105
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 105, $this->source); })()), "html", null, true);
            }
            // line 106
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
        // line 107
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 114, $this->source); })()), 0, array()), "val2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 115
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 119, $this->source); })()), 0, array()), "val2", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 121
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 121, $this->source); })()), "html", null, true);
            }
            // line 122
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
        // line 123
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 130, $this->source); })()), 0, array()), "val3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 131
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 135, $this->source); })()), 0, array()), "val3", array()));
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
            // line 136
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 137
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 137, $this->source); })()), "html", null, true);
            }
            // line 138
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
        // line 139
        echo "                                        </strong>
                                    </td>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 145, $this->source); })()), 0, array()), "val4", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 146
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 150, $this->source); })()), 0, array()), "val4", array()));
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
            // line 151
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 152
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 152, $this->source); })()), "html", null, true);
            }
            // line 153
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
        // line 154
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 161, $this->source); })()), 0, array()), "val5", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 162
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 166, $this->source); })()), 0, array()), "val5", array()));
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
            // line 167
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 168
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 168, $this->source); })()), "html", null, true);
            }
            // line 169
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
        // line 170
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
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 182, $this->source); })()), 0, array()), "val6", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 183
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 187, $this->source); })()), 0, array()), "val6", array()));
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
            // line 188
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 189
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 189, $this->source); })()), "html", null, true);
            }
            // line 190
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
        // line 191
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 198, $this->source); })()), 0, array()), "val7", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 199
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 203, $this->source); })()), 0, array()), "val7", array()));
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
            // line 204
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 205
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 205, $this->source); })()), "html", null, true);
            }
            // line 206
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
        // line 207
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
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 219, $this->source); })()), 0, array()), "val8", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 220
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 224, $this->source); })()), 0, array()), "val8", array()));
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
            // line 225
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 226
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 226, $this->source); })()), "html", null, true);
            }
            // line 227
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
        // line 228
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 235, $this->source); })()), 0, array()), "val9", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 236
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 240, $this->source); })()), 0, array()), "val9", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 242
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 242, $this->source); })()), "html", null, true);
            }
            // line 243
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
        // line 244
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 251, $this->source); })()), 0, array()), "val10", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 252
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 256, $this->source); })()), 0, array()), "val10", array()));
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
            // line 257
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 258
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 258, $this->source); })()), "html", null, true);
            }
            // line 259
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
        // line 260
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 267, $this->source); })()), 0, array()), "val11", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 268
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 272, $this->source); })()), 0, array()), "val11", array()));
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
            // line 273
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 274
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 274, $this->source); })()), "html", null, true);
            }
            // line 275
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
        // line 276
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 283, $this->source); })()), 0, array()), "val12", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 284
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 288, $this->source); })()), 0, array()), "val12", array()));
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
            // line 289
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 290
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 290, $this->source); })()), "html", null, true);
            }
            // line 291
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
        // line 292
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 299, $this->source); })()), 0, array()), "val13", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 300
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 304, $this->source); })()), 0, array()), "val13", array()));
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
            // line 305
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 306
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 306, $this->source); })()), "html", null, true);
            }
            // line 307
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
        // line 308
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 315, $this->source); })()), 0, array()), "val14", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 316
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 320, $this->source); })()), 0, array()), "val14", array()));
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
            // line 321
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 322
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 322, $this->source); })()), "html", null, true);
            }
            // line 323
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
        // line 324
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 331, $this->source); })()), 0, array()), "val15", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 332
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 336, $this->source); })()), 0, array()), "val15", array()));
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
            // line 337
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 338
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 338, $this->source); })()), "html", null, true);
            }
            // line 339
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
        // line 340
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    ";
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 347, $this->source); })()), 0, array()), "val16", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 348
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 352, $this->source); })()), 0, array()), "val16", array()));
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
            // line 353
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 354
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 354, $this->source); })()), "html", null, true);
            }
            // line 355
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
        // line 356
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
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 368, $this->source); })()), 0, array()), "val17", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 369
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 373, $this->source); })()), 0, array()), "val17", array()));
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
            // line 374
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 375
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 375, $this->source); })()), "html", null, true);
            }
            // line 376
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
        // line 377
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 384, $this->source); })()), 0, array()), "val18", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 385
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 389, $this->source); })()), 0, array()), "val18", array()));
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
            // line 390
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 391
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 391, $this->source); })()), "html", null, true);
            }
            // line 392
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
        // line 393
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 400, $this->source); })()), 0, array()), "val19", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 401
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 405, $this->source); })()), 0, array()), "val19", array()));
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
            // line 406
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 407
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 407, $this->source); })()), "html", null, true);
            }
            // line 408
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
        // line 409
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 416, $this->source); })()), 0, array()), "val20", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 417
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 421, $this->source); })()), 0, array()), "val20", array()));
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
            // line 422
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 423
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 423, $this->source); })()), "html", null, true);
            }
            // line 424
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
        // line 425
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 432, $this->source); })()), 0, array()), "val21", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 433
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 437, $this->source); })()), 0, array()), "val21", array()));
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
            // line 438
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 439
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 439, $this->source); })()), "html", null, true);
            }
            // line 440
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
        // line 441
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
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 453, $this->source); })()), 0, array()), "val22", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 454
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 458, $this->source); })()), 0, array()), "val22", array()));
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
            // line 459
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 460
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 460, $this->source); })()), "html", null, true);
            }
            // line 461
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
        // line 462
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    ";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 469, $this->source); })()), 0, array()), "val23", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 470
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 474, $this->source); })()), 0, array()), "val23", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 476
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 476, $this->source); })()), "html", null, true);
            }
            // line 477
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
        // line 478
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 485, $this->source); })()), 0, array()), "val24", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 486
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 490, $this->source); })()), 0, array()), "val24", array()));
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
            // line 491
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 492
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 492, $this->source); })()), "html", null, true);
            }
            // line 493
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
        // line 494
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 501, $this->source); })()), 0, array()), "val25", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 502
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 504
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 506, $this->source); })()), 0, array()), "val25", array()));
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
            // line 507
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 508
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 508, $this->source); })()), "html", null, true);
            }
            // line 509
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
        // line 510
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 517, $this->source); })()), 0, array()), "val26", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 518
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 522
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 522, $this->source); })()), 0, array()), "val26", array()));
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
            // line 523
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 524
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 524, $this->source); })()), "html", null, true);
            }
            // line 525
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
        // line 526
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    ";
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 533, $this->source); })()), 0, array()), "val27", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 534
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 538, $this->source); })()), 0, array()), "val27", array()));
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
            // line 539
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 540
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 540, $this->source); })()), "html", null, true);
            }
            // line 541
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
        // line 542
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
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 554, $this->source); })()), 0, array()), "val28", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 555
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 559
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 559, $this->source); })()), 0, array()), "val28", array()));
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
            // line 560
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 561
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 561, $this->source); })()), "html", null, true);
            }
            // line 562
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
        // line 563
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 570, $this->source); })()), 0, array()), "val29", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 571
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 575, $this->source); })()), 0, array()), "val29", array()));
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
            // line 576
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 577
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 577, $this->source); })()), "html", null, true);
            }
            // line 578
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
        // line 579
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    ";
        // line 586
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 586, $this->source); })()), 0, array()), "val30", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 587
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 591, $this->source); })()), 0, array()), "val30", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 593
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 593, $this->source); })()), "html", null, true);
            }
            // line 594
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
        // line 595
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 602, $this->source); })()), 0, array()), "val31", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 603
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 607
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 607, $this->source); })()), 0, array()), "val31", array()));
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
            // line 608
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 609
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 609, $this->source); })()), "html", null, true);
            }
            // line 610
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
        // line 611
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    ";
        // line 618
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 618, $this->source); })()), 0, array()), "val32", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 619
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 623
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 623, $this->source); })()), 0, array()), "val32", array()));
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
            // line 624
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 625
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 625, $this->source); })()), "html", null, true);
            }
            // line 626
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
        // line 627
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    ";
        // line 634
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 634, $this->source); })()), 0, array()), "val33", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 635
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 639, $this->source); })()), 0, array()), "val33", array()));
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
            // line 640
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 641
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 641, $this->source); })()), "html", null, true);
            }
            // line 642
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
        // line 643
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    ";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 650, $this->source); })()), 0, array()), "val34", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 651
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 653
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 655, $this->source); })()), 0, array()), "val34", array()));
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
            // line 656
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 657
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 657, $this->source); })()), "html", null, true);
            }
            // line 658
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
        // line 659
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    ";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 666, $this->source); })()), 0, array()), "val35", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 667
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 669
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 671, $this->source); })()), 0, array()), "val35", array()));
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
            // line 672
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 673
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 673, $this->source); })()), "html", null, true);
            }
            // line 674
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
        // line 675
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    ";
        // line 682
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 682, $this->source); })()), 0, array()), "val36", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 683
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 687
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 687, $this->source); })()), 0, array()), "val36", array()));
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
            // line 688
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 689
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 689, $this->source); })()), "html", null, true);
            }
            // line 690
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
        // line 691
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    ";
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 698, $this->source); })()), 0, array()), "val37", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 699
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 703, $this->source); })()), 0, array()), "val37", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 705
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 705, $this->source); })()), "html", null, true);
            }
            // line 706
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
        // line 707
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    ";
        // line 714
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 714, $this->source); })()), 0, array()), "val38", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 715
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 719, $this->source); })()), 0, array()), "val38", array()));
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
            // line 720
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 721
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 721, $this->source); })()), "html", null, true);
            }
            // line 722
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
        // line 723
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 730, $this->source); })()), 0, array()), "val39", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 731
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 735, $this->source); })()), 0, array()), "val39", array()));
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
            // line 736
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 737
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 737, $this->source); })()), "html", null, true);
            }
            // line 738
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
        // line 739
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    ";
        // line 746
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 746, $this->source); })()), 0, array()), "val40", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 747
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 749
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 751
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 751, $this->source); })()), 0, array()), "val40", array()));
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
            // line 752
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 753
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 753, $this->source); })()), "html", null, true);
            }
            // line 754
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
        // line 755
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 762, $this->source); })()), 0, array()), "val41", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 763
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 765
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 767
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 767, $this->source); })()), 0, array()), "val41", array()));
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
            // line 768
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 769
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 769, $this->source); })()), "html", null, true);
            }
            // line 770
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
        // line 771
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 778, $this->source); })()), 0, array()), "val42", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 779
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 781
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 783, $this->source); })()), 0, array()), "val42", array()));
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
            // line 784
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 785
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 785, $this->source); })()), "html", null, true);
            }
            // line 786
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
        // line 787
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    ";
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 794, $this->source); })()), 0, array()), "val43", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 795
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 799, $this->source); })()), 0, array()), "val43", array()));
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
            // line 800
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 801
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 801, $this->source); })()), "html", null, true);
            }
            // line 802
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
        // line 803
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 810, $this->source); })()), 0, array()), "val44", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 811
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 815, $this->source); })()), 0, array()), "val44", array()));
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
            // line 816
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 817
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 817, $this->source); })()), "html", null, true);
            }
            // line 818
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
        // line 819
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    ";
        // line 826
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 826, $this->source); })()), 0, array()), "val45", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 827
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 829
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 831, $this->source); })()), 0, array()), "val45", array()));
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
            // line 832
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 833
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 833, $this->source); })()), "html", null, true);
            }
            // line 834
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
        // line 835
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    ";
        // line 842
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 842, $this->source); })()), 0, array()), "val46", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 843
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 845
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 847
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 847, $this->source); })()), 0, array()), "val46", array()));
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
            // line 848
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 849
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 849, $this->source); })()), "html", null, true);
            }
            // line 850
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
        // line 851
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
        // line 863
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 863, $this->source); })()), 0, array()), "val47", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 864
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 868, $this->source); })()), 0, array()), "val47", array()));
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
            // line 869
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 870
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 870, $this->source); })()), "html", null, true);
            }
            // line 871
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
        // line 872
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    ";
        // line 879
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 879, $this->source); })()), 0, array()), "val48", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 880
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 882
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 884
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 884, $this->source); })()), 0, array()), "val48", array()));
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
            // line 885
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 886
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 886, $this->source); })()), "html", null, true);
            }
            // line 887
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
        // line 888
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    ";
        // line 895
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 895, $this->source); })()), 0, array()), "val49", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 896
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 900, $this->source); })()), 0, array()), "val49", array()));
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
            // line 901
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 902
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 902, $this->source); })()), "html", null, true);
            }
            // line 903
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
        // line 904
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 911, $this->source); })()), 0, array()), "val50", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 912
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 914
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 916, $this->source); })()), 0, array()), "val50", array()));
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
            // line 917
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 918
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 918, $this->source); })()), "html", null, true);
            }
            // line 919
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
        // line 920
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    ";
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 927, $this->source); })()), 0, array()), "val51", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 928
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 930
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 932
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 932, $this->source); })()), 0, array()), "val51", array()));
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
            // line 933
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 934
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 934, $this->source); })()), "html", null, true);
            }
            // line 935
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
        // line 936
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    ";
        // line 943
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 943, $this->source); })()), 0, array()), "val52", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 944
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 946
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 948
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 948, $this->source); })()), 0, array()), "val52", array()));
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
            // line 949
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 950
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 950, $this->source); })()), "html", null, true);
            }
            // line 951
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
        // line 952
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    ";
        // line 959
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 959, $this->source); })()), 0, array()), "val53", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 960
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 962
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 964
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 964, $this->source); })()), 0, array()), "val53", array()));
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
            // line 965
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 966
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 966, $this->source); })()), "html", null, true);
            }
            // line 967
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
        // line 968
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
        // line 980
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 980, $this->source); })()), 0, array()), "val54", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 981
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 983
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 985
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 985, $this->source); })()), 0, array()), "val54", array()));
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
            // line 986
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 987
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 987, $this->source); })()), "html", null, true);
            }
            // line 988
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
        // line 989
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 996, $this->source); })()), 0, array()), "val55", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 997
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 999
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1001, $this->source); })()), 0, array()), "val55", array()));
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
            // line 1002
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1003
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1003, $this->source); })()), "html", null, true);
            }
            // line 1004
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
        // line 1005
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    ";
        // line 1012
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1012, $this->source); })()), 0, array()), "val56", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1013
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1015
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1017
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1017, $this->source); })()), 0, array()), "val56", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1019
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1019, $this->source); })()), "html", null, true);
            }
            // line 1020
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
        // line 1021
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    ";
        // line 1028
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1028, $this->source); })()), 0, array()), "val57", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1029
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1033
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1033, $this->source); })()), 0, array()), "val57", array()));
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
            // line 1034
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1035
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1035, $this->source); })()), "html", null, true);
            }
            // line 1036
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
        // line 1037
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    ";
        // line 1044
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1044, $this->source); })()), 0, array()), "val58", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1045
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1047
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1049
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1049, $this->source); })()), 0, array()), "val58", array()));
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
            // line 1050
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1051
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1051, $this->source); })()), "html", null, true);
            }
            // line 1052
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
        // line 1053
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    ";
        // line 1060
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1060, $this->source); })()), 0, array()), "val59", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1061
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1063
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1065
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1065, $this->source); })()), 0, array()), "val59", array()));
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
            // line 1066
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1067
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1067, $this->source); })()), "html", null, true);
            }
            // line 1068
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
        // line 1069
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
        // line 1081
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1081, $this->source); })()), 0, array()), "val60", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1082
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1086
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1086, $this->source); })()), 0, array()), "val60", array()));
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
            // line 1087
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1088
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1088, $this->source); })()), "html", null, true);
            }
            // line 1089
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
        // line 1090
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    ";
        // line 1097
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1097, $this->source); })()), 0, array()), "val61", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1098
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1100
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1102, $this->source); })()), 0, array()), "val61", array()));
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
            // line 1103
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1104
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1104, $this->source); })()), "html", null, true);
            }
            // line 1105
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
        // line 1106
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
        // line 1118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1118, $this->source); })()), 0, array()), "val62", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1119
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1121
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1123, $this->source); })()), 0, array()), "val62", array()));
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
            // line 1124
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1125
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1125, $this->source); })()), "html", null, true);
            }
            // line 1126
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
        // line 1127
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 1134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1134, $this->source); })()), 0, array()), "val63", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1135
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1137
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1139, $this->source); })()), 0, array()), "val63", array()));
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
            // line 1140
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1141
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1141, $this->source); })()), "html", null, true);
            }
            // line 1142
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
        // line 1143
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 1150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1150, $this->source); })()), 0, array()), "val64", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1151
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1153
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1155, $this->source); })()), 0, array()), "val64", array()));
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
            // line 1156
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1157
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1157, $this->source); })()), "html", null, true);
            }
            // line 1158
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
        // line 1159
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
        <div class=\"row\">
            <div class=\"col-8\"></div>
            <div class=\"col-4\">
                <div class=\"card mt-2\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            TOTALE

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

    // line 1185
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1186
        echo "<style>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1205
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1206
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
        return array (  4515 => 1206,  4506 => 1205,  4478 => 1186,  4469 => 1185,  4434 => 1159,  4420 => 1158,  4415 => 1157,  4412 => 1156,  4395 => 1155,  4391 => 1153,  4382 => 1151,  4378 => 1150,  4369 => 1143,  4355 => 1142,  4350 => 1141,  4347 => 1140,  4330 => 1139,  4326 => 1137,  4317 => 1135,  4313 => 1134,  4304 => 1127,  4290 => 1126,  4285 => 1125,  4282 => 1124,  4265 => 1123,  4261 => 1121,  4252 => 1119,  4248 => 1118,  4234 => 1106,  4220 => 1105,  4215 => 1104,  4212 => 1103,  4195 => 1102,  4191 => 1100,  4182 => 1098,  4178 => 1097,  4169 => 1090,  4155 => 1089,  4150 => 1088,  4147 => 1087,  4130 => 1086,  4126 => 1084,  4117 => 1082,  4113 => 1081,  4099 => 1069,  4085 => 1068,  4080 => 1067,  4077 => 1066,  4060 => 1065,  4056 => 1063,  4047 => 1061,  4043 => 1060,  4034 => 1053,  4020 => 1052,  4015 => 1051,  4012 => 1050,  3995 => 1049,  3991 => 1047,  3982 => 1045,  3978 => 1044,  3969 => 1037,  3955 => 1036,  3950 => 1035,  3947 => 1034,  3930 => 1033,  3926 => 1031,  3917 => 1029,  3913 => 1028,  3904 => 1021,  3890 => 1020,  3885 => 1019,  3882 => 1018,  3865 => 1017,  3861 => 1015,  3852 => 1013,  3848 => 1012,  3839 => 1005,  3825 => 1004,  3820 => 1003,  3817 => 1002,  3800 => 1001,  3796 => 999,  3787 => 997,  3783 => 996,  3774 => 989,  3760 => 988,  3755 => 987,  3752 => 986,  3735 => 985,  3731 => 983,  3722 => 981,  3718 => 980,  3704 => 968,  3690 => 967,  3685 => 966,  3682 => 965,  3665 => 964,  3661 => 962,  3652 => 960,  3648 => 959,  3639 => 952,  3625 => 951,  3620 => 950,  3617 => 949,  3600 => 948,  3596 => 946,  3587 => 944,  3583 => 943,  3574 => 936,  3560 => 935,  3555 => 934,  3552 => 933,  3535 => 932,  3531 => 930,  3522 => 928,  3518 => 927,  3509 => 920,  3495 => 919,  3490 => 918,  3487 => 917,  3470 => 916,  3466 => 914,  3457 => 912,  3453 => 911,  3444 => 904,  3430 => 903,  3425 => 902,  3422 => 901,  3405 => 900,  3401 => 898,  3392 => 896,  3388 => 895,  3379 => 888,  3365 => 887,  3360 => 886,  3357 => 885,  3340 => 884,  3336 => 882,  3327 => 880,  3323 => 879,  3314 => 872,  3300 => 871,  3295 => 870,  3292 => 869,  3275 => 868,  3271 => 866,  3262 => 864,  3258 => 863,  3244 => 851,  3230 => 850,  3225 => 849,  3222 => 848,  3205 => 847,  3201 => 845,  3192 => 843,  3188 => 842,  3179 => 835,  3165 => 834,  3160 => 833,  3157 => 832,  3140 => 831,  3136 => 829,  3127 => 827,  3123 => 826,  3114 => 819,  3100 => 818,  3095 => 817,  3092 => 816,  3075 => 815,  3071 => 813,  3062 => 811,  3058 => 810,  3049 => 803,  3035 => 802,  3030 => 801,  3027 => 800,  3010 => 799,  3006 => 797,  2997 => 795,  2993 => 794,  2984 => 787,  2970 => 786,  2965 => 785,  2962 => 784,  2945 => 783,  2941 => 781,  2932 => 779,  2928 => 778,  2919 => 771,  2905 => 770,  2900 => 769,  2897 => 768,  2880 => 767,  2876 => 765,  2867 => 763,  2863 => 762,  2854 => 755,  2840 => 754,  2835 => 753,  2832 => 752,  2815 => 751,  2811 => 749,  2802 => 747,  2798 => 746,  2789 => 739,  2775 => 738,  2770 => 737,  2767 => 736,  2750 => 735,  2746 => 733,  2737 => 731,  2733 => 730,  2724 => 723,  2710 => 722,  2705 => 721,  2702 => 720,  2685 => 719,  2681 => 717,  2672 => 715,  2668 => 714,  2659 => 707,  2645 => 706,  2640 => 705,  2637 => 704,  2620 => 703,  2616 => 701,  2607 => 699,  2603 => 698,  2594 => 691,  2580 => 690,  2575 => 689,  2572 => 688,  2555 => 687,  2551 => 685,  2542 => 683,  2538 => 682,  2529 => 675,  2515 => 674,  2510 => 673,  2507 => 672,  2490 => 671,  2486 => 669,  2477 => 667,  2473 => 666,  2464 => 659,  2450 => 658,  2445 => 657,  2442 => 656,  2425 => 655,  2421 => 653,  2412 => 651,  2408 => 650,  2399 => 643,  2385 => 642,  2380 => 641,  2377 => 640,  2360 => 639,  2356 => 637,  2347 => 635,  2343 => 634,  2334 => 627,  2320 => 626,  2315 => 625,  2312 => 624,  2295 => 623,  2291 => 621,  2282 => 619,  2278 => 618,  2269 => 611,  2255 => 610,  2250 => 609,  2247 => 608,  2230 => 607,  2226 => 605,  2217 => 603,  2213 => 602,  2204 => 595,  2190 => 594,  2185 => 593,  2182 => 592,  2165 => 591,  2161 => 589,  2152 => 587,  2148 => 586,  2139 => 579,  2125 => 578,  2120 => 577,  2117 => 576,  2100 => 575,  2096 => 573,  2087 => 571,  2083 => 570,  2074 => 563,  2060 => 562,  2055 => 561,  2052 => 560,  2035 => 559,  2031 => 557,  2022 => 555,  2018 => 554,  2004 => 542,  1990 => 541,  1985 => 540,  1982 => 539,  1965 => 538,  1961 => 536,  1952 => 534,  1948 => 533,  1939 => 526,  1925 => 525,  1920 => 524,  1917 => 523,  1900 => 522,  1896 => 520,  1887 => 518,  1883 => 517,  1874 => 510,  1860 => 509,  1855 => 508,  1852 => 507,  1835 => 506,  1831 => 504,  1822 => 502,  1818 => 501,  1809 => 494,  1795 => 493,  1790 => 492,  1787 => 491,  1770 => 490,  1766 => 488,  1757 => 486,  1753 => 485,  1744 => 478,  1730 => 477,  1725 => 476,  1722 => 475,  1705 => 474,  1701 => 472,  1692 => 470,  1688 => 469,  1679 => 462,  1665 => 461,  1660 => 460,  1657 => 459,  1640 => 458,  1636 => 456,  1627 => 454,  1623 => 453,  1609 => 441,  1595 => 440,  1590 => 439,  1587 => 438,  1570 => 437,  1566 => 435,  1557 => 433,  1553 => 432,  1544 => 425,  1530 => 424,  1525 => 423,  1522 => 422,  1505 => 421,  1501 => 419,  1492 => 417,  1488 => 416,  1479 => 409,  1465 => 408,  1460 => 407,  1457 => 406,  1440 => 405,  1436 => 403,  1427 => 401,  1423 => 400,  1414 => 393,  1400 => 392,  1395 => 391,  1392 => 390,  1375 => 389,  1371 => 387,  1362 => 385,  1358 => 384,  1349 => 377,  1335 => 376,  1330 => 375,  1327 => 374,  1310 => 373,  1306 => 371,  1297 => 369,  1293 => 368,  1279 => 356,  1265 => 355,  1260 => 354,  1257 => 353,  1240 => 352,  1236 => 350,  1227 => 348,  1223 => 347,  1214 => 340,  1200 => 339,  1195 => 338,  1192 => 337,  1175 => 336,  1171 => 334,  1162 => 332,  1158 => 331,  1149 => 324,  1135 => 323,  1130 => 322,  1127 => 321,  1110 => 320,  1106 => 318,  1097 => 316,  1093 => 315,  1084 => 308,  1070 => 307,  1065 => 306,  1062 => 305,  1045 => 304,  1041 => 302,  1032 => 300,  1028 => 299,  1019 => 292,  1005 => 291,  1000 => 290,  997 => 289,  980 => 288,  976 => 286,  967 => 284,  963 => 283,  954 => 276,  940 => 275,  935 => 274,  932 => 273,  915 => 272,  911 => 270,  902 => 268,  898 => 267,  889 => 260,  875 => 259,  870 => 258,  867 => 257,  850 => 256,  846 => 254,  837 => 252,  833 => 251,  824 => 244,  810 => 243,  805 => 242,  802 => 241,  785 => 240,  781 => 238,  772 => 236,  768 => 235,  759 => 228,  745 => 227,  740 => 226,  737 => 225,  720 => 224,  716 => 222,  707 => 220,  703 => 219,  689 => 207,  675 => 206,  670 => 205,  667 => 204,  650 => 203,  646 => 201,  637 => 199,  633 => 198,  624 => 191,  610 => 190,  605 => 189,  602 => 188,  585 => 187,  581 => 185,  572 => 183,  568 => 182,  554 => 170,  540 => 169,  535 => 168,  532 => 167,  515 => 166,  511 => 164,  502 => 162,  498 => 161,  489 => 154,  475 => 153,  470 => 152,  467 => 151,  450 => 150,  446 => 148,  437 => 146,  433 => 145,  425 => 139,  411 => 138,  406 => 137,  403 => 136,  386 => 135,  382 => 133,  373 => 131,  369 => 130,  360 => 123,  346 => 122,  341 => 121,  338 => 120,  321 => 119,  317 => 117,  308 => 115,  304 => 114,  295 => 107,  281 => 106,  276 => 105,  273 => 104,  256 => 103,  252 => 101,  243 => 99,  239 => 98,  224 => 85,  215 => 83,  211 => 82,  182 => 60,  173 => 58,  164 => 56,  159 => 54,  152 => 50,  145 => 46,  140 => 44,  129 => 40,  120 => 38,  115 => 36,  106 => 34,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right\" onclick=\"print();\">
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
                    <table class=\"table table-bordered table-responsive-md\">
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
                    <div class=\"wrapper1\" style=\"height: 30px;\">
                        <div id=\"buttons\" class=\"div1 float-right btn-group\">
                            <a class=\"btn btn-secondary btn-sm\" id=\"scroll-l\" href=\"#\" disabled=\"disabled\"> < </a>
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
                                            <th>{{ item }}</th>
                                        {% endfor %}
                                        <th><strong>TOTALE</strong></th>
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
        <div class=\"row\">
            <div class=\"col-8\"></div>
            <div class=\"col-4\">
                <div class=\"card mt-2\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            TOTALE

                        </div>
                    </div>
                </div>
            </div>
        </div>
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


    </script>
{% endblock %}", "expertations/show.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.advanced.html.twig");
    }
}
