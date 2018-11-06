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
                            <a id=\"print\" href=\"\" class=\"btn btn-success btn-sm float-right\">
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 82, $this->source); })()), "name", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "                                            <th class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</th>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->source); })()), 0, array()), "val1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 100
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 104, $this->source); })()), 0, array()), "val1", array()));
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
            // line 105
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 106
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 106, $this->source); })()), "html", null, true);
            }
            // line 107
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
        // line 108
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->source); })()), 0, array()), "val2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 116
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 120, $this->source); })()), 0, array()), "val2", array()));
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
            // line 121
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 122
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 122, $this->source); })()), "html", null, true);
            }
            // line 123
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
        // line 124
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 131, $this->source); })()), 0, array()), "val3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 132
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 136, $this->source); })()), 0, array()), "val3", array()));
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
            // line 137
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 138
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 138, $this->source); })()), "html", null, true);
            }
            // line 139
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
        // line 140
        echo "                                        </strong>
                                    </td>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 146, $this->source); })()), 0, array()), "val4", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 147
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 151, $this->source); })()), 0, array()), "val4", array()));
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
            // line 152
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 153
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 153, $this->source); })()), "html", null, true);
            }
            // line 154
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
        // line 155
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 162, $this->source); })()), 0, array()), "val5", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 163
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 167, $this->source); })()), 0, array()), "val5", array()));
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
            // line 168
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 169
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 169, $this->source); })()), "html", null, true);
            }
            // line 170
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
        // line 171
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
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 183, $this->source); })()), 0, array()), "val6", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 184
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 188, $this->source); })()), 0, array()), "val6", array()));
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
            // line 189
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 190
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 190, $this->source); })()), "html", null, true);
            }
            // line 191
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
        // line 192
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 199, $this->source); })()), 0, array()), "val7", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 200
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 204, $this->source); })()), 0, array()), "val7", array()));
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
            // line 205
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 206
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 206, $this->source); })()), "html", null, true);
            }
            // line 207
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
        // line 208
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
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 220, $this->source); })()), 0, array()), "val8", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 221
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 225, $this->source); })()), 0, array()), "val8", array()));
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
            // line 226
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 227
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 227, $this->source); })()), "html", null, true);
            }
            // line 228
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
        // line 229
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 236, $this->source); })()), 0, array()), "val9", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 237
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 241, $this->source); })()), 0, array()), "val9", array()));
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
            // line 242
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 243
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 243, $this->source); })()), "html", null, true);
            }
            // line 244
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
        // line 245
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 252, $this->source); })()), 0, array()), "val10", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 253
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 257, $this->source); })()), 0, array()), "val10", array()));
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
            // line 258
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 259
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 259, $this->source); })()), "html", null, true);
            }
            // line 260
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
        // line 261
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 268, $this->source); })()), 0, array()), "val11", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 269
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 273, $this->source); })()), 0, array()), "val11", array()));
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
            // line 274
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 275
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 275, $this->source); })()), "html", null, true);
            }
            // line 276
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
        // line 277
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 284, $this->source); })()), 0, array()), "val12", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 285
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 289, $this->source); })()), 0, array()), "val12", array()));
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
            // line 290
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 291
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 291, $this->source); })()), "html", null, true);
            }
            // line 292
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
        // line 293
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 300, $this->source); })()), 0, array()), "val13", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 301
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 305, $this->source); })()), 0, array()), "val13", array()));
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
            // line 306
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 307
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 307, $this->source); })()), "html", null, true);
            }
            // line 308
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
        // line 309
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 316, $this->source); })()), 0, array()), "val14", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 317
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 321, $this->source); })()), 0, array()), "val14", array()));
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
            // line 322
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 323
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 323, $this->source); })()), "html", null, true);
            }
            // line 324
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
        // line 325
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 332, $this->source); })()), 0, array()), "val15", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 333
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 337, $this->source); })()), 0, array()), "val15", array()));
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
            // line 338
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 339
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 339, $this->source); })()), "html", null, true);
            }
            // line 340
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
        // line 341
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 348, $this->source); })()), 0, array()), "val16", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 349
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 353, $this->source); })()), 0, array()), "val16", array()));
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
            // line 354
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 355
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 355, $this->source); })()), "html", null, true);
            }
            // line 356
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
        // line 357
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
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 369, $this->source); })()), 0, array()), "val17", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 370
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 374, $this->source); })()), 0, array()), "val17", array()));
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
            // line 375
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 376
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 376, $this->source); })()), "html", null, true);
            }
            // line 377
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
        // line 378
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 385, $this->source); })()), 0, array()), "val18", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 386
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 390, $this->source); })()), 0, array()), "val18", array()));
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
            // line 391
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 392
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 392, $this->source); })()), "html", null, true);
            }
            // line 393
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
        // line 394
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    ";
        // line 401
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 401, $this->source); })()), 0, array()), "val19", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 402
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 406, $this->source); })()), 0, array()), "val19", array()));
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
            // line 407
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 408
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 408, $this->source); })()), "html", null, true);
            }
            // line 409
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
        // line 410
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 417, $this->source); })()), 0, array()), "val20", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 418
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 422, $this->source); })()), 0, array()), "val20", array()));
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
            // line 423
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 424
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 424, $this->source); })()), "html", null, true);
            }
            // line 425
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
        // line 426
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    ";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 433, $this->source); })()), 0, array()), "val21", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 434
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 438, $this->source); })()), 0, array()), "val21", array()));
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
            // line 439
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 440
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 440, $this->source); })()), "html", null, true);
            }
            // line 441
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
        // line 442
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
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 454, $this->source); })()), 0, array()), "val22", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 455
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 459, $this->source); })()), 0, array()), "val22", array()));
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
            // line 460
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 461
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 461, $this->source); })()), "html", null, true);
            }
            // line 462
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
        // line 463
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 470, $this->source); })()), 0, array()), "val23", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 471
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 475, $this->source); })()), 0, array()), "val23", array()));
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
            // line 476
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 477
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 477, $this->source); })()), "html", null, true);
            }
            // line 478
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
        // line 479
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    ";
        // line 486
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 486, $this->source); })()), 0, array()), "val24", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 487
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 489
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 491, $this->source); })()), 0, array()), "val24", array()));
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
            // line 492
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 493
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 493, $this->source); })()), "html", null, true);
            }
            // line 494
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
        // line 495
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 502, $this->source); })()), 0, array()), "val25", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 503
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 507, $this->source); })()), 0, array()), "val25", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 509
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 509, $this->source); })()), "html", null, true);
            }
            // line 510
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
        // line 511
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 518, $this->source); })()), 0, array()), "val26", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 519
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 523
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 523, $this->source); })()), 0, array()), "val26", array()));
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
            // line 524
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 525
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 525, $this->source); })()), "html", null, true);
            }
            // line 526
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
        // line 527
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 534, $this->source); })()), 0, array()), "val27", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 535
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 539, $this->source); })()), 0, array()), "val27", array()));
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
            // line 540
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 541
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 541, $this->source); })()), "html", null, true);
            }
            // line 542
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
        // line 543
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
        // line 555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 555, $this->source); })()), 0, array()), "val28", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 556
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 558
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 560
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 560, $this->source); })()), 0, array()), "val28", array()));
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
            // line 561
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 562
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 562, $this->source); })()), "html", null, true);
            }
            // line 563
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
        // line 564
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    ";
        // line 571
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 571, $this->source); })()), 0, array()), "val29", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 572
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 576, $this->source); })()), 0, array()), "val29", array()));
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
            // line 577
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 578
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 578, $this->source); })()), "html", null, true);
            }
            // line 579
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
        // line 580
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    ";
        // line 587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 587, $this->source); })()), 0, array()), "val30", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 588
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 592, $this->source); })()), 0, array()), "val30", array()));
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
            // line 593
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 594
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 594, $this->source); })()), "html", null, true);
            }
            // line 595
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
        // line 596
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    ";
        // line 603
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 603, $this->source); })()), 0, array()), "val31", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 604
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 608, $this->source); })()), 0, array()), "val31", array()));
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
            // line 609
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 610
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 610, $this->source); })()), "html", null, true);
            }
            // line 611
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
        // line 612
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 619, $this->source); })()), 0, array()), "val32", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 620
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 624, $this->source); })()), 0, array()), "val32", array()));
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
            // line 625
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 626
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 626, $this->source); })()), "html", null, true);
            }
            // line 627
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
        // line 628
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 635, $this->source); })()), 0, array()), "val33", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 636
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 640, $this->source); })()), 0, array()), "val33", array()));
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
            // line 641
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 642
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 642, $this->source); })()), "html", null, true);
            }
            // line 643
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
        // line 644
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 651, $this->source); })()), 0, array()), "val34", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 652
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 656, $this->source); })()), 0, array()), "val34", array()));
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
            // line 657
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 658
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 658, $this->source); })()), "html", null, true);
            }
            // line 659
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
        // line 660
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 667, $this->source); })()), 0, array()), "val35", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 668
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 672
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 672, $this->source); })()), 0, array()), "val35", array()));
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
            // line 673
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 674
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 674, $this->source); })()), "html", null, true);
            }
            // line 675
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
        // line 676
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    ";
        // line 683
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 683, $this->source); })()), 0, array()), "val36", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 684
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 688, $this->source); })()), 0, array()), "val36", array()));
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
            // line 689
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 690
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 690, $this->source); })()), "html", null, true);
            }
            // line 691
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
        // line 692
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 699, $this->source); })()), 0, array()), "val37", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 700
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 704
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 704, $this->source); })()), 0, array()), "val37", array()));
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
            // line 705
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 706
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 706, $this->source); })()), "html", null, true);
            }
            // line 707
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
        // line 708
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    ";
        // line 715
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 715, $this->source); })()), 0, array()), "val38", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 716
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 720, $this->source); })()), 0, array()), "val38", array()));
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
            // line 721
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 722
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 722, $this->source); })()), "html", null, true);
            }
            // line 723
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
        // line 724
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    ";
        // line 731
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 731, $this->source); })()), 0, array()), "val39", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 732
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 734
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 736
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 736, $this->source); })()), 0, array()), "val39", array()));
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
            // line 737
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 738
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 738, $this->source); })()), "html", null, true);
            }
            // line 739
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
        // line 740
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 747, $this->source); })()), 0, array()), "val40", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 748
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 752
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 752, $this->source); })()), 0, array()), "val40", array()));
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
            // line 753
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 754
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 754, $this->source); })()), "html", null, true);
            }
            // line 755
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
        // line 756
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 763, $this->source); })()), 0, array()), "val41", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 764
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 766
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 768, $this->source); })()), 0, array()), "val41", array()));
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
            // line 769
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 770
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 770, $this->source); })()), "html", null, true);
            }
            // line 771
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
        // line 772
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    ";
        // line 779
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 779, $this->source); })()), 0, array()), "val42", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 780
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 782
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 784
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 784, $this->source); })()), 0, array()), "val42", array()));
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
            // line 785
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 786
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 786, $this->source); })()), "html", null, true);
            }
            // line 787
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
        // line 788
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    ";
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 795, $this->source); })()), 0, array()), "val43", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 796
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 798
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 800, $this->source); })()), 0, array()), "val43", array()));
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
            // line 801
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 802
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 802, $this->source); })()), "html", null, true);
            }
            // line 803
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
        // line 804
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 811, $this->source); })()), 0, array()), "val44", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 812
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 816
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 816, $this->source); })()), 0, array()), "val44", array()));
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
            // line 817
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 818
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 818, $this->source); })()), "html", null, true);
            }
            // line 819
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
        // line 820
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    ";
        // line 827
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 827, $this->source); })()), 0, array()), "val45", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 828
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 832, $this->source); })()), 0, array()), "val45", array()));
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
            // line 833
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 834
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 834, $this->source); })()), "html", null, true);
            }
            // line 835
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
        // line 836
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 843, $this->source); })()), 0, array()), "val46", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 844
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 846
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 848
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 848, $this->source); })()), 0, array()), "val46", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 850
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 850, $this->source); })()), "html", null, true);
            }
            // line 851
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
        // line 852
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
        // line 864
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 864, $this->source); })()), 0, array()), "val47", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 865
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 867
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 869
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 869, $this->source); })()), 0, array()), "val47", array()));
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
            // line 870
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 871
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 871, $this->source); })()), "html", null, true);
            }
            // line 872
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
        // line 873
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    ";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 880, $this->source); })()), 0, array()), "val48", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 881
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 885
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 885, $this->source); })()), 0, array()), "val48", array()));
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
            // line 886
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 887
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 887, $this->source); })()), "html", null, true);
            }
            // line 888
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
        // line 889
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    ";
        // line 896
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 896, $this->source); })()), 0, array()), "val49", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 897
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 899
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 901, $this->source); })()), 0, array()), "val49", array()));
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
            // line 902
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 903
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 903, $this->source); })()), "html", null, true);
            }
            // line 904
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
        // line 905
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    ";
        // line 912
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 912, $this->source); })()), 0, array()), "val50", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 913
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 917, $this->source); })()), 0, array()), "val50", array()));
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
            // line 918
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 919
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 919, $this->source); })()), "html", null, true);
            }
            // line 920
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
        // line 921
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    ";
        // line 928
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 928, $this->source); })()), 0, array()), "val51", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 929
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 931
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 933, $this->source); })()), 0, array()), "val51", array()));
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
            // line 934
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 935
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 935, $this->source); })()), "html", null, true);
            }
            // line 936
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
        // line 937
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    ";
        // line 944
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 944, $this->source); })()), 0, array()), "val52", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 945
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 947
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 949
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 949, $this->source); })()), 0, array()), "val52", array()));
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
            // line 950
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 951
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 951, $this->source); })()), "html", null, true);
            }
            // line 952
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
        // line 953
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    ";
        // line 960
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 960, $this->source); })()), 0, array()), "val53", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 961
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 965
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 965, $this->source); })()), 0, array()), "val53", array()));
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
            // line 966
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 967
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 967, $this->source); })()), "html", null, true);
            }
            // line 968
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
        // line 969
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
        // line 981
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 981, $this->source); })()), 0, array()), "val54", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 982
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 986, $this->source); })()), 0, array()), "val54", array()));
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
            // line 987
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 988
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 988, $this->source); })()), "html", null, true);
            }
            // line 989
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
        // line 990
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    ";
        // line 997
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 997, $this->source); })()), 0, array()), "val55", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 998
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1002, $this->source); })()), 0, array()), "val55", array()));
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
            // line 1003
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1004
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1004, $this->source); })()), "html", null, true);
            }
            // line 1005
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
        // line 1006
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    ";
        // line 1013
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1013, $this->source); })()), 0, array()), "val56", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1014
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1016
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1018
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1018, $this->source); })()), 0, array()), "val56", array()));
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
            // line 1019
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1020
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1020, $this->source); })()), "html", null, true);
            }
            // line 1021
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
        // line 1022
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    ";
        // line 1029
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1029, $this->source); })()), 0, array()), "val57", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1030
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1032
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1034, $this->source); })()), 0, array()), "val57", array()));
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
            // line 1035
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1036
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1036, $this->source); })()), "html", null, true);
            }
            // line 1037
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
        // line 1038
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    ";
        // line 1045
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1045, $this->source); })()), 0, array()), "val58", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1046
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1050
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1050, $this->source); })()), 0, array()), "val58", array()));
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
            // line 1051
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1052
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1052, $this->source); })()), "html", null, true);
            }
            // line 1053
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
        // line 1054
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    ";
        // line 1061
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1061, $this->source); })()), 0, array()), "val59", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1062
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1064
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1066
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1066, $this->source); })()), 0, array()), "val59", array()));
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
            // line 1067
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1068
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1068, $this->source); })()), "html", null, true);
            }
            // line 1069
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
        // line 1070
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
        // line 1082
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1082, $this->source); })()), 0, array()), "val60", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1083
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1085
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1087
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1087, $this->source); })()), 0, array()), "val60", array()));
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
            // line 1088
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1089
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1089, $this->source); })()), "html", null, true);
            }
            // line 1090
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
        // line 1091
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    ";
        // line 1098
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1098, $this->source); })()), 0, array()), "val61", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1099
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1101
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1103, $this->source); })()), 0, array()), "val61", array()));
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
            // line 1104
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1105
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1105, $this->source); })()), "html", null, true);
            }
            // line 1106
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
        // line 1107
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
        // line 1119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1119, $this->source); })()), 0, array()), "val62", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1120
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1122
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1124, $this->source); })()), 0, array()), "val62", array()));
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
            // line 1125
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1126
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1126, $this->source); })()), "html", null, true);
            }
            // line 1127
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
        // line 1128
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 1135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1135, $this->source); })()), 0, array()), "val63", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1136
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1138
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1140, $this->source); })()), 0, array()), "val63", array()));
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
            // line 1141
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1142
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1142, $this->source); })()), "html", null, true);
            }
            // line 1143
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
        // line 1144
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 1151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1151, $this->source); })()), 0, array()), "val64", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1152
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1154
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1156, $this->source); })()), 0, array()), "val64", array()));
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
            // line 1157
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1158
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1158, $this->source); })()), "html", null, true);
            }
            // line 1159
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
        // line 1160
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
                            <div class=\"col-6\">
                                <strong>TOTALE LORDO</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1180
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1180, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>IVA (22%)</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1188
        $context["vat"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1188, $this->source); })()) * 22) / 100);
        // line 1189
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1189, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>SCONTO (";
        // line 1194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1194, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %)</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1197
        $context["sconto"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1197, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1197, $this->source); })()), "sconto", array())) / 100);
        // line 1198
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1198, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>TOTALE NETTO</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1206
        $context["gtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1206, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1206, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1206, $this->source); })()));
        // line 1207
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["gtotal"]) || array_key_exists("gtotal", $context) ? $context["gtotal"] : (function () { throw new Twig_Error_Runtime('Variable "gtotal" does not exist.', 1207, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
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

    // line 1217
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1218
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

    // line 1240
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1241
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
        return array (  4571 => 1241,  4562 => 1240,  4531 => 1218,  4522 => 1217,  4501 => 1207,  4499 => 1206,  4487 => 1198,  4485 => 1197,  4479 => 1194,  4470 => 1189,  4468 => 1188,  4457 => 1180,  4435 => 1160,  4421 => 1159,  4416 => 1158,  4413 => 1157,  4396 => 1156,  4392 => 1154,  4383 => 1152,  4379 => 1151,  4370 => 1144,  4356 => 1143,  4351 => 1142,  4348 => 1141,  4331 => 1140,  4327 => 1138,  4318 => 1136,  4314 => 1135,  4305 => 1128,  4291 => 1127,  4286 => 1126,  4283 => 1125,  4266 => 1124,  4262 => 1122,  4253 => 1120,  4249 => 1119,  4235 => 1107,  4221 => 1106,  4216 => 1105,  4213 => 1104,  4196 => 1103,  4192 => 1101,  4183 => 1099,  4179 => 1098,  4170 => 1091,  4156 => 1090,  4151 => 1089,  4148 => 1088,  4131 => 1087,  4127 => 1085,  4118 => 1083,  4114 => 1082,  4100 => 1070,  4086 => 1069,  4081 => 1068,  4078 => 1067,  4061 => 1066,  4057 => 1064,  4048 => 1062,  4044 => 1061,  4035 => 1054,  4021 => 1053,  4016 => 1052,  4013 => 1051,  3996 => 1050,  3992 => 1048,  3983 => 1046,  3979 => 1045,  3970 => 1038,  3956 => 1037,  3951 => 1036,  3948 => 1035,  3931 => 1034,  3927 => 1032,  3918 => 1030,  3914 => 1029,  3905 => 1022,  3891 => 1021,  3886 => 1020,  3883 => 1019,  3866 => 1018,  3862 => 1016,  3853 => 1014,  3849 => 1013,  3840 => 1006,  3826 => 1005,  3821 => 1004,  3818 => 1003,  3801 => 1002,  3797 => 1000,  3788 => 998,  3784 => 997,  3775 => 990,  3761 => 989,  3756 => 988,  3753 => 987,  3736 => 986,  3732 => 984,  3723 => 982,  3719 => 981,  3705 => 969,  3691 => 968,  3686 => 967,  3683 => 966,  3666 => 965,  3662 => 963,  3653 => 961,  3649 => 960,  3640 => 953,  3626 => 952,  3621 => 951,  3618 => 950,  3601 => 949,  3597 => 947,  3588 => 945,  3584 => 944,  3575 => 937,  3561 => 936,  3556 => 935,  3553 => 934,  3536 => 933,  3532 => 931,  3523 => 929,  3519 => 928,  3510 => 921,  3496 => 920,  3491 => 919,  3488 => 918,  3471 => 917,  3467 => 915,  3458 => 913,  3454 => 912,  3445 => 905,  3431 => 904,  3426 => 903,  3423 => 902,  3406 => 901,  3402 => 899,  3393 => 897,  3389 => 896,  3380 => 889,  3366 => 888,  3361 => 887,  3358 => 886,  3341 => 885,  3337 => 883,  3328 => 881,  3324 => 880,  3315 => 873,  3301 => 872,  3296 => 871,  3293 => 870,  3276 => 869,  3272 => 867,  3263 => 865,  3259 => 864,  3245 => 852,  3231 => 851,  3226 => 850,  3223 => 849,  3206 => 848,  3202 => 846,  3193 => 844,  3189 => 843,  3180 => 836,  3166 => 835,  3161 => 834,  3158 => 833,  3141 => 832,  3137 => 830,  3128 => 828,  3124 => 827,  3115 => 820,  3101 => 819,  3096 => 818,  3093 => 817,  3076 => 816,  3072 => 814,  3063 => 812,  3059 => 811,  3050 => 804,  3036 => 803,  3031 => 802,  3028 => 801,  3011 => 800,  3007 => 798,  2998 => 796,  2994 => 795,  2985 => 788,  2971 => 787,  2966 => 786,  2963 => 785,  2946 => 784,  2942 => 782,  2933 => 780,  2929 => 779,  2920 => 772,  2906 => 771,  2901 => 770,  2898 => 769,  2881 => 768,  2877 => 766,  2868 => 764,  2864 => 763,  2855 => 756,  2841 => 755,  2836 => 754,  2833 => 753,  2816 => 752,  2812 => 750,  2803 => 748,  2799 => 747,  2790 => 740,  2776 => 739,  2771 => 738,  2768 => 737,  2751 => 736,  2747 => 734,  2738 => 732,  2734 => 731,  2725 => 724,  2711 => 723,  2706 => 722,  2703 => 721,  2686 => 720,  2682 => 718,  2673 => 716,  2669 => 715,  2660 => 708,  2646 => 707,  2641 => 706,  2638 => 705,  2621 => 704,  2617 => 702,  2608 => 700,  2604 => 699,  2595 => 692,  2581 => 691,  2576 => 690,  2573 => 689,  2556 => 688,  2552 => 686,  2543 => 684,  2539 => 683,  2530 => 676,  2516 => 675,  2511 => 674,  2508 => 673,  2491 => 672,  2487 => 670,  2478 => 668,  2474 => 667,  2465 => 660,  2451 => 659,  2446 => 658,  2443 => 657,  2426 => 656,  2422 => 654,  2413 => 652,  2409 => 651,  2400 => 644,  2386 => 643,  2381 => 642,  2378 => 641,  2361 => 640,  2357 => 638,  2348 => 636,  2344 => 635,  2335 => 628,  2321 => 627,  2316 => 626,  2313 => 625,  2296 => 624,  2292 => 622,  2283 => 620,  2279 => 619,  2270 => 612,  2256 => 611,  2251 => 610,  2248 => 609,  2231 => 608,  2227 => 606,  2218 => 604,  2214 => 603,  2205 => 596,  2191 => 595,  2186 => 594,  2183 => 593,  2166 => 592,  2162 => 590,  2153 => 588,  2149 => 587,  2140 => 580,  2126 => 579,  2121 => 578,  2118 => 577,  2101 => 576,  2097 => 574,  2088 => 572,  2084 => 571,  2075 => 564,  2061 => 563,  2056 => 562,  2053 => 561,  2036 => 560,  2032 => 558,  2023 => 556,  2019 => 555,  2005 => 543,  1991 => 542,  1986 => 541,  1983 => 540,  1966 => 539,  1962 => 537,  1953 => 535,  1949 => 534,  1940 => 527,  1926 => 526,  1921 => 525,  1918 => 524,  1901 => 523,  1897 => 521,  1888 => 519,  1884 => 518,  1875 => 511,  1861 => 510,  1856 => 509,  1853 => 508,  1836 => 507,  1832 => 505,  1823 => 503,  1819 => 502,  1810 => 495,  1796 => 494,  1791 => 493,  1788 => 492,  1771 => 491,  1767 => 489,  1758 => 487,  1754 => 486,  1745 => 479,  1731 => 478,  1726 => 477,  1723 => 476,  1706 => 475,  1702 => 473,  1693 => 471,  1689 => 470,  1680 => 463,  1666 => 462,  1661 => 461,  1658 => 460,  1641 => 459,  1637 => 457,  1628 => 455,  1624 => 454,  1610 => 442,  1596 => 441,  1591 => 440,  1588 => 439,  1571 => 438,  1567 => 436,  1558 => 434,  1554 => 433,  1545 => 426,  1531 => 425,  1526 => 424,  1523 => 423,  1506 => 422,  1502 => 420,  1493 => 418,  1489 => 417,  1480 => 410,  1466 => 409,  1461 => 408,  1458 => 407,  1441 => 406,  1437 => 404,  1428 => 402,  1424 => 401,  1415 => 394,  1401 => 393,  1396 => 392,  1393 => 391,  1376 => 390,  1372 => 388,  1363 => 386,  1359 => 385,  1350 => 378,  1336 => 377,  1331 => 376,  1328 => 375,  1311 => 374,  1307 => 372,  1298 => 370,  1294 => 369,  1280 => 357,  1266 => 356,  1261 => 355,  1258 => 354,  1241 => 353,  1237 => 351,  1228 => 349,  1224 => 348,  1215 => 341,  1201 => 340,  1196 => 339,  1193 => 338,  1176 => 337,  1172 => 335,  1163 => 333,  1159 => 332,  1150 => 325,  1136 => 324,  1131 => 323,  1128 => 322,  1111 => 321,  1107 => 319,  1098 => 317,  1094 => 316,  1085 => 309,  1071 => 308,  1066 => 307,  1063 => 306,  1046 => 305,  1042 => 303,  1033 => 301,  1029 => 300,  1020 => 293,  1006 => 292,  1001 => 291,  998 => 290,  981 => 289,  977 => 287,  968 => 285,  964 => 284,  955 => 277,  941 => 276,  936 => 275,  933 => 274,  916 => 273,  912 => 271,  903 => 269,  899 => 268,  890 => 261,  876 => 260,  871 => 259,  868 => 258,  851 => 257,  847 => 255,  838 => 253,  834 => 252,  825 => 245,  811 => 244,  806 => 243,  803 => 242,  786 => 241,  782 => 239,  773 => 237,  769 => 236,  760 => 229,  746 => 228,  741 => 227,  738 => 226,  721 => 225,  717 => 223,  708 => 221,  704 => 220,  690 => 208,  676 => 207,  671 => 206,  668 => 205,  651 => 204,  647 => 202,  638 => 200,  634 => 199,  625 => 192,  611 => 191,  606 => 190,  603 => 189,  586 => 188,  582 => 186,  573 => 184,  569 => 183,  555 => 171,  541 => 170,  536 => 169,  533 => 168,  516 => 167,  512 => 165,  503 => 163,  499 => 162,  490 => 155,  476 => 154,  471 => 153,  468 => 152,  451 => 151,  447 => 149,  438 => 147,  434 => 146,  426 => 140,  412 => 139,  407 => 138,  404 => 137,  387 => 136,  383 => 134,  374 => 132,  370 => 131,  361 => 124,  347 => 123,  342 => 122,  339 => 121,  322 => 120,  318 => 118,  309 => 116,  305 => 115,  296 => 108,  282 => 107,  277 => 106,  274 => 105,  257 => 104,  253 => 102,  244 => 100,  240 => 99,  224 => 85,  215 => 83,  211 => 82,  182 => 60,  173 => 58,  164 => 56,  159 => 54,  152 => 50,  145 => 46,  140 => 44,  129 => 40,  120 => 38,  115 => 36,  106 => 34,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                            <a id=\"print\" href=\"\" class=\"btn btn-success btn-sm float-right\">
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
        <div class=\"row\">
            <div class=\"col-8\"></div>
            <div class=\"col-4\">
                <div class=\"card mt-2\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>TOTALE LORDO</strong>
                            </div>
                            <div class=\"col-6\">
                                {{ total|number_format(2) }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>IVA (22%)</strong>
                            </div>
                            <div class=\"col-6\">
                                {% set vat = total * 22 / 100 %}
                                {{ vat|number_format(2) }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>SCONTO ({{ data.sconto }} %)</strong>
                            </div>
                            <div class=\"col-6\">
                                {% set sconto = total * data.sconto / 100 %}
                                {{ (sconto)|number_format(2) }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>TOTALE NETTO</strong>
                            </div>
                            <div class=\"col-6\">
                                {% set gtotal = total + vat - sconto %}
                                {{ gtotal|number_format(2) }} €
                            </div>
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
{% endblock %}", "expertations/show.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.advanced.html.twig");
    }
}
