<?php

/* expertations/show.advanced.html.twig */
class __TwigTemplate_ecf4ac58c80124c7298c6b43c29cbc4f2e5d11872725cab4daa14fc1a8a3a2fd extends Twig_Template
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
                            ";
        if ($this->env->isDebug()) {
            // line 34
            \Symfony\Component\VarDumper\VarDumper::dump(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "client", array()));
        }
        // line 35
        echo "                            <td class=\"text-center\">Proposta n. ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "pid", array()), "html", null, true);
        echo " del ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "date", array()), "d.m.Y"), "html", null, true);
        echo " per <br/> ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 35, $this->source); })()), "uidToGenre", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "client", array())), "method") == 1)) {
            echo "Egregio Signor ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 35, $this->source); })()), "uidToGenre", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "client", array())), "method") == 2)) {
            echo "Gentile Signora ";
        } else {
            echo "Spett.le ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 35, $this->source); })()), "uidToSurName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 35, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "client", array())), "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>PIANI CASA</strong></td>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>CIVILE</strong></td>
                            <td>";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 39, $this->source); })()), "tipo", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>DOMOTICO</strong></td>
                            <td>";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 41, $this->source); })()), "level", array()) == 3)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>DATA</strong></td>
                            <td class=\"text-center\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 45, $this->source); })()), "date", array()), "d.m.y"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>METRI QUADRI (TOTALI)</strong></td>
                            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 47, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>DISTANZA QUADRO TOUCH</strong></td>
                            <td>-</td>
                            <td class=\"text-center\"><strong>ENEL KW</strong></td>
                            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 51, $this->source); })()), "kw", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td><strong>TIPO CLIMA</strong></td>
                            <td class=\"text-center\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 55, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 55, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo "</td>
                            <td class=\"text-center\"><strong>OPERE MURARIE</strong></td>
                            <td>";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 57, $this->source); })()), "opereMurarie", array()) != 0)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>INTONACO</strong></td>
                            <td>";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 59, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        echo "</td>
                            <td class=\"text-center\"><strong>PIETRA</strong></td>
                            <td>";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 61, $this->source); })()), "opereMurarie", array()) == 2)) {
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
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 83, $this->source); })()), "name", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "                                            <th class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</th>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 100, $this->source); })()), 0, array()), "val1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 101
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 105, $this->source); })()), 0, array()), "val1", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 107
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 107, $this->source); })()), "html", null, true);
            }
            // line 108
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
        // line 109
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 116, $this->source); })()), 0, array()), "val2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 117
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 121, $this->source); })()), 0, array()), "val2", array()));
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
            // line 122
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 123
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 123, $this->source); })()), "html", null, true);
            }
            // line 124
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
        // line 125
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 132, $this->source); })()), 0, array()), "val3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 133
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 137, $this->source); })()), 0, array()), "val3", array()));
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
            // line 138
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 139
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 139, $this->source); })()), "html", null, true);
            }
            // line 140
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
        // line 141
        echo "                                        </strong>
                                    </td>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->source); })()), 0, array()), "val4", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 148
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 152, $this->source); })()), 0, array()), "val4", array()));
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
            // line 153
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 154
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 154, $this->source); })()), "html", null, true);
            }
            // line 155
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
        // line 156
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 163, $this->source); })()), 0, array()), "val5", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 164
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 168, $this->source); })()), 0, array()), "val5", array()));
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
            // line 169
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 170
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 170, $this->source); })()), "html", null, true);
            }
            // line 171
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
        // line 172
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
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 184, $this->source); })()), 0, array()), "val6", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 185
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 189, $this->source); })()), 0, array()), "val6", array()));
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
            // line 190
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 191
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 191, $this->source); })()), "html", null, true);
            }
            // line 192
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
        // line 193
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 200, $this->source); })()), 0, array()), "val7", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 201
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 205, $this->source); })()), 0, array()), "val7", array()));
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
            // line 206
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 207
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 207, $this->source); })()), "html", null, true);
            }
            // line 208
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
        // line 209
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
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 221, $this->source); })()), 0, array()), "val8", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 222
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 226, $this->source); })()), 0, array()), "val8", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 228
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 228, $this->source); })()), "html", null, true);
            }
            // line 229
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
        // line 230
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 237, $this->source); })()), 0, array()), "val9", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 238
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 242, $this->source); })()), 0, array()), "val9", array()));
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
            // line 243
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 244
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 244, $this->source); })()), "html", null, true);
            }
            // line 245
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
        // line 246
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 253, $this->source); })()), 0, array()), "val10", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 254
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 258, $this->source); })()), 0, array()), "val10", array()));
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
            // line 259
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 260
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 260, $this->source); })()), "html", null, true);
            }
            // line 261
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
        // line 262
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 269, $this->source); })()), 0, array()), "val11", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 270
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 274, $this->source); })()), 0, array()), "val11", array()));
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
            // line 275
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 276
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 276, $this->source); })()), "html", null, true);
            }
            // line 277
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
        // line 278
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 285, $this->source); })()), 0, array()), "val12", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 286
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 290, $this->source); })()), 0, array()), "val12", array()));
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
            // line 291
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 292
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 292, $this->source); })()), "html", null, true);
            }
            // line 293
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
        // line 294
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 301, $this->source); })()), 0, array()), "val13", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 302
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 306, $this->source); })()), 0, array()), "val13", array()));
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
            // line 307
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 308
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 308, $this->source); })()), "html", null, true);
            }
            // line 309
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
        // line 310
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 317, $this->source); })()), 0, array()), "val14", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 318
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 322, $this->source); })()), 0, array()), "val14", array()));
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
            // line 323
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 324
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 324, $this->source); })()), "html", null, true);
            }
            // line 325
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
        // line 326
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 333, $this->source); })()), 0, array()), "val15", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 334
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 338, $this->source); })()), 0, array()), "val15", array()));
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
            // line 339
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 340
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 340, $this->source); })()), "html", null, true);
            }
            // line 341
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
        // line 342
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 349, $this->source); })()), 0, array()), "val16", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 350
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 354, $this->source); })()), 0, array()), "val16", array()));
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
            // line 355
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 356
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 356, $this->source); })()), "html", null, true);
            }
            // line 357
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
        // line 358
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
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 370, $this->source); })()), 0, array()), "val17", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 371
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 375, $this->source); })()), 0, array()), "val17", array()));
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
            // line 376
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 377
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 377, $this->source); })()), "html", null, true);
            }
            // line 378
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
        // line 379
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 386, $this->source); })()), 0, array()), "val18", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 387
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 391, $this->source); })()), 0, array()), "val18", array()));
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
            // line 392
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 393
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 393, $this->source); })()), "html", null, true);
            }
            // line 394
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
        // line 395
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 402, $this->source); })()), 0, array()), "val19", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 403
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 407, $this->source); })()), 0, array()), "val19", array()));
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
            // line 408
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 409
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 409, $this->source); })()), "html", null, true);
            }
            // line 410
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
        // line 411
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 418, $this->source); })()), 0, array()), "val20", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 419
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 423, $this->source); })()), 0, array()), "val20", array()));
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
            // line 424
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 425
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 425, $this->source); })()), "html", null, true);
            }
            // line 426
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
        // line 427
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 434, $this->source); })()), 0, array()), "val21", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 435
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 439, $this->source); })()), 0, array()), "val21", array()));
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
            // line 440
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 441
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 441, $this->source); })()), "html", null, true);
            }
            // line 442
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
        // line 443
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
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 455, $this->source); })()), 0, array()), "val22", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 456
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 460, $this->source); })()), 0, array()), "val22", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 462
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 462, $this->source); })()), "html", null, true);
            }
            // line 463
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
        // line 464
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 36 Moduli</strong>
                                    </td>
                                    ";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 471, $this->source); })()), 0, array()), "val23", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 472
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 476, $this->source); })()), 0, array()), "val23", array()));
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
            // line 477
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 478
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 478, $this->source); })()), "html", null, true);
            }
            // line 479
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
        // line 480
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 54 Moduli</strong>
                                    </td>
                                    ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 487, $this->source); })()), 0, array()), "val24", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 488
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 492, $this->source); })()), 0, array()), "val24", array()));
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
            // line 493
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 494
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 494, $this->source); })()), "html", null, true);
            }
            // line 495
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
        // line 496
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Quadro 72 Moduli</strong>
                                    </td>
                                    ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 503, $this->source); })()), 0, array()), "val25", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 504
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 508, $this->source); })()), 0, array()), "val25", array()));
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
            // line 509
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 510
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 510, $this->source); })()), "html", null, true);
            }
            // line 511
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
        // line 512
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sezionatore</strong>
                                    </td>
                                    ";
        // line 519
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 519, $this->source); })()), 0, array()), "val26", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 520
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 524
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 524, $this->source); })()), 0, array()), "val26", array()));
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
            // line 525
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 526
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 526, $this->source); })()), "html", null, true);
            }
            // line 527
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
        // line 528
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>MTD</strong>
                                    </td>
                                    ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 535, $this->source); })()), 0, array()), "val27", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 536
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 540, $this->source); })()), 0, array()), "val27", array()));
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
            // line 541
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 542
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 542, $this->source); })()), "html", null, true);
            }
            // line 543
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
        // line 544
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
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 556, $this->source); })()), 0, array()), "val28", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 557
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 561, $this->source); })()), 0, array()), "val28", array()));
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
            // line 562
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 563
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 563, $this->source); })()), "html", null, true);
            }
            // line 564
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
        // line 565
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allagamento predisposizione</strong>
                                    </td>
                                    ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 572, $this->source); })()), 0, array()), "val29", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 573
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 577, $this->source); })()), 0, array()), "val29", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 579
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 579, $this->source); })()), "html", null, true);
            }
            // line 580
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
        // line 581
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allarme predisposizione</strong>
                                    </td>
                                    ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 588, $this->source); })()), 0, array()), "val30", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 589
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 591
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 593, $this->source); })()), 0, array()), "val30", array()));
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
            // line 594
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 595
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 595, $this->source); })()), "html", null, true);
            }
            // line 596
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
        // line 597
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Rilevatore di fumo predisposizione</strong>
                                    </td>
                                    ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 604, $this->source); })()), 0, array()), "val31", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 605
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 609
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 609, $this->source); })()), 0, array()), "val31", array()));
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
            // line 610
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 611
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 611, $this->source); })()), "html", null, true);
            }
            // line 612
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
        // line 613
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Centralino telefonico</strong>
                                    </td>
                                    ";
        // line 620
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 620, $this->source); })()), 0, array()), "val32", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 621
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 623
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 625
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 625, $this->source); })()), 0, array()), "val32", array()));
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
            // line 626
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 627
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 627, $this->source); })()), "html", null, true);
            }
            // line 628
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
        // line 629
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telefono</strong>
                                    </td>
                                    ";
        // line 636
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 636, $this->source); })()), 0, array()), "val33", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 637
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 639
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 641
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 641, $this->source); })()), 0, array()), "val33", array()));
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
            // line 642
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 643
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 643, $this->source); })()), "html", null, true);
            }
            // line 644
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
        // line 645
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Interno</strong>
                                    </td>
                                    ";
        // line 652
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 652, $this->source); })()), 0, array()), "val34", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 653
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 657
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 657, $this->source); })()), 0, array()), "val34", array()));
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
            // line 658
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 659
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 659, $this->source); })()), "html", null, true);
            }
            // line 660
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
        // line 661
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Citofono Esterno</strong>
                                    </td>
                                    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 668, $this->source); })()), 0, array()), "val35", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 669
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 673
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 673, $this->source); })()), 0, array()), "val35", array()));
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
            // line 674
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 675
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 675, $this->source); })()), "html", null, true);
            }
            // line 676
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
        // line 677
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono a parete</strong>
                                    </td>
                                    ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 684, $this->source); })()), 0, array()), "val36", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 685
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 689, $this->source); })()), 0, array()), "val36", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 691
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 691, $this->source); })()), "html", null, true);
            }
            // line 692
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
        // line 693
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Videocitofono esterno</strong>
                                    </td>
                                    ";
        // line 700
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 700, $this->source); })()), 0, array()), "val37", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 701
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 705, $this->source); })()), 0, array()), "val37", array()));
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
            // line 706
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 707
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 707, $this->source); })()), "html", null, true);
            }
            // line 708
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
        // line 709
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Campanello suoneria</strong>
                                    </td>
                                    ";
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 716, $this->source); })()), 0, array()), "val38", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 717
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 719
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 721, $this->source); })()), 0, array()), "val38", array()));
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
            // line 722
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 723
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 723, $this->source); })()), "html", null, true);
            }
            // line 724
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
        // line 725
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dati predisposizione</strong>
                                    </td>
                                    ";
        // line 732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 732, $this->source); })()), 0, array()), "val39", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 733
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 737, $this->source); })()), 0, array()), "val39", array()));
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
            // line 738
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 739
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 739, $this->source); })()), "html", null, true);
            }
            // line 740
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
        // line 741
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Telecamere predisposizione</strong>
                                    </td>
                                    ";
        // line 748
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 748, $this->source); })()), 0, array()), "val40", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 749
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 751
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 753
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 753, $this->source); })()), 0, array()), "val40", array()));
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
            // line 754
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 755
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 755, $this->source); })()), "html", null, true);
            }
            // line 756
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
        // line 757
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tiranti e/o pulsanti emergenza</strong>
                                    </td>
                                    ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 764, $this->source); })()), 0, array()), "val41", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 765
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 769, $this->source); })()), 0, array()), "val41", array()));
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
            // line 770
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 771
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 771, $this->source); })()), "html", null, true);
            }
            // line 772
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
        // line 773
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ronzatore emergenza</strong>
                                    </td>
                                    ";
        // line 780
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 780, $this->source); })()), 0, array()), "val42", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 781
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 785
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 785, $this->source); })()), 0, array()), "val42", array()));
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
            // line 786
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 787
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 787, $this->source); })()), "html", null, true);
            }
            // line 788
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
        // line 789
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>TV frutti</strong>
                                    </td>
                                    ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 796, $this->source); })()), 0, array()), "val43", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 797
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 799
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 801
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 801, $this->source); })()), 0, array()), "val43", array()));
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
            // line 802
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 803
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 803, $this->source); })()), "html", null, true);
            }
            // line 804
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
        // line 805
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>SAT frutti</strong>
                                    </td>
                                    ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 812, $this->source); })()), 0, array()), "val44", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 813
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 817
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 817, $this->source); })()), 0, array()), "val44", array()));
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
            // line 818
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 819
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 819, $this->source); })()), "html", null, true);
            }
            // line 820
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
        // line 821
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Antenna terrestre</strong>
                                    </td>
                                    ";
        // line 828
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 828, $this->source); })()), 0, array()), "val45", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 829
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 831
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 833, $this->source); })()), 0, array()), "val45", array()));
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
            // line 834
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 835
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 835, $this->source); })()), "html", null, true);
            }
            // line 836
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
        // line 837
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Parabola</strong>
                                    </td>
                                    ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 844, $this->source); })()), 0, array()), "val46", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 845
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 847
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 849
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 849, $this->source); })()), 0, array()), "val46", array()));
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
            // line 850
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 851
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 851, $this->source); })()), "html", null, true);
            }
            // line 852
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
        // line 853
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
        // line 865
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 865, $this->source); })()), 0, array()), "val47", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 866
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 868
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 870, $this->source); })()), 0, array()), "val47", array()));
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
            // line 871
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 872
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 872, $this->source); })()), "html", null, true);
            }
            // line 873
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
        // line 874
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 41</strong>
                                    </td>
                                    ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 881, $this->source); })()), 0, array()), "val48", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 882
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 886
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 886, $this->source); })()), 0, array()), "val48", array()));
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
            // line 887
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 888
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 888, $this->source); })()), "html", null, true);
            }
            // line 889
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
        // line 890
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Equinox 73</strong>
                                    </td>
                                    ";
        // line 897
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 897, $this->source); })()), 0, array()), "val49", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 898
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 900
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 902, $this->source); })()), 0, array()), "val49", array()));
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
            // line 903
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 904
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 904, $this->source); })()), "html", null, true);
            }
            // line 905
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
        // line 906
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Keypad Vantage</strong>
                                    </td>
                                    ";
        // line 913
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 913, $this->source); })()), 0, array()), "val50", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 914
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 916
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 918, $this->source); })()), 0, array()), "val50", array()));
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
            // line 919
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 920
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 920, $this->source); })()), "html", null, true);
            }
            // line 921
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
        // line 922
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi diffusione sonora</strong>
                                    </td>
                                    ";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 929, $this->source); })()), 0, array()), "val51", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 930
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 932
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 934
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 934, $this->source); })()), 0, array()), "val51", array()));
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
            // line 935
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 936
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 936, $this->source); })()), "html", null, true);
            }
            // line 937
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
        // line 938
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Diffusori</strong>
                                    </td>
                                    ";
        // line 945
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 945, $this->source); })()), 0, array()), "val52", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 946
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 948
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 950
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 950, $this->source); })()), 0, array()), "val52", array()));
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
            // line 951
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 952
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 952, $this->source); })()), "html", null, true);
            }
            // line 953
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
        // line 954
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Surround</strong>
                                    </td>
                                    ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 961, $this->source); })()), 0, array()), "val53", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 962
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 966, $this->source); })()), 0, array()), "val53", array()));
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
            // line 967
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 968
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 968, $this->source); })()), "html", null, true);
            }
            // line 969
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
        // line 970
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
        // line 982
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 982, $this->source); })()), 0, array()), "val54", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 983
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 985
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 987
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 987, $this->source); })()), 0, array()), "val54", array()));
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
            // line 988
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 989
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 989, $this->source); })()), "html", null, true);
            }
            // line 990
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
        // line 991
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore persiana/ lucernai/ grata</strong>
                                    </td>
                                    ";
        // line 998
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 998, $this->source); })()), 0, array()), "val55", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 999
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1001
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1003
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1003, $this->source); })()), 0, array()), "val55", array()));
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
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1005
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1005, $this->source); })()), "html", null, true);
            }
            // line 1006
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
        // line 1007
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore tapparella / oscurante</strong>
                                    </td>
                                    ";
        // line 1014
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1014, $this->source); })()), 0, array()), "val56", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1015
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1017
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1019, $this->source); })()), 0, array()), "val56", array()));
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
            // line 1020
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1021
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1021, $this->source); })()), "html", null, true);
            }
            // line 1022
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
        // line 1023
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>P.to comando motori</strong>
                                    </td>
                                    ";
        // line 1030
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1030, $this->source); })()), 0, array()), "val57", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1031
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1033
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1035, $this->source); })()), 0, array()), "val57", array()));
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
            // line 1036
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1037
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1037, $this->source); })()), "html", null, true);
            }
            // line 1038
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
        // line 1039
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Basculante</strong>
                                    </td>
                                    ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1046, $this->source); })()), 0, array()), "val58", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1047
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1049
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1051
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1051, $this->source); })()), 0, array()), "val58", array()));
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
            // line 1052
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1053
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1053, $this->source); })()), "html", null, true);
            }
            // line 1054
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
        // line 1055
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Cancello</strong>
                                    </td>
                                    ";
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1062, $this->source); })()), 0, array()), "val59", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1063
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1065
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1067
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1067, $this->source); })()), 0, array()), "val59", array()));
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
            // line 1068
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1069
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1069, $this->source); })()), "html", null, true);
            }
            // line 1070
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
        // line 1071
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
        // line 1083
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1083, $this->source); })()), 0, array()), "val60", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1084
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1086
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1088
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1088, $this->source); })()), 0, array()), "val60", array()));
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
            // line 1089
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1090
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1090, $this->source); })()), "html", null, true);
            }
            // line 1091
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
        // line 1092
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Motore</strong>
                                    </td>
                                    ";
        // line 1099
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1099, $this->source); })()), 0, array()), "val61", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1100
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1102
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1104, $this->source); })()), 0, array()), "val61", array()));
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
            // line 1105
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1106
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1106, $this->source); })()), "html", null, true);
            }
            // line 1107
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
        // line 1108
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
        // line 1120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1120, $this->source); })()), 0, array()), "val62", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1121
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1123
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1125, $this->source); })()), 0, array()), "val62", array()));
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
            // line 1126
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1127
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1127, $this->source); })()), "html", null, true);
            }
            // line 1128
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
        // line 1129
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 504</strong>
                                    </td>
                                    ";
        // line 1136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1136, $this->source); })()), 0, array()), "val63", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1137
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1139
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1141, $this->source); })()), 0, array()), "val63", array()));
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
            // line 1142
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1143
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1143, $this->source); })()), "html", null, true);
            }
            // line 1144
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
        // line 1145
        echo "                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Supporti 506</strong>
                                    </td>
                                    ";
        // line 1152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1152, $this->source); })()), 0, array()), "val64", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 1153
            echo "                                        <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1155
        echo "                                    <td class=\"text-center\">
                                        <strong>
                                        ";
        // line 1157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1157, $this->source); })()), 0, array()), "val64", array()));
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
            // line 1158
            echo "                                            ";
            $context["sum"] = ($context["total"] + (($context["sum"]) ?? (0)));
            // line 1159
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new Twig_Error_Runtime('Variable "sum" does not exist.', 1159, $this->source); })()), "html", null, true);
            }
            // line 1160
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
        // line 1161
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
        // line 1181
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1181, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>IVA (22%)</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1189
        $context["vat"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1189, $this->source); })()) * 22) / 100);
        // line 1190
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1190, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>SCONTO (";
        // line 1195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1195, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %)</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1198
        $context["sconto"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1198, $this->source); })()) * twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1198, $this->source); })()), "sconto", array())) / 100);
        // line 1199
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1199, $this->source); })()), 2), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>TOTALE NETTO</strong>
                            </div>
                            <div class=\"col-6\">
                                ";
        // line 1207
        $context["gtotal"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 1207, $this->source); })()) + (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 1207, $this->source); })())) - (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 1207, $this->source); })()));
        // line 1208
        echo "                                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["gtotal"]) || array_key_exists("gtotal", $context) ? $context["gtotal"] : (function () { throw new Twig_Error_Runtime('Variable "gtotal" does not exist.', 1208, $this->source); })()), 2), "html", null, true);
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

    // line 1218
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1219
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

    // line 1241
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1242
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
        return array (  4585 => 1242,  4576 => 1241,  4545 => 1219,  4536 => 1218,  4515 => 1208,  4513 => 1207,  4501 => 1199,  4499 => 1198,  4493 => 1195,  4484 => 1190,  4482 => 1189,  4471 => 1181,  4449 => 1161,  4435 => 1160,  4430 => 1159,  4427 => 1158,  4410 => 1157,  4406 => 1155,  4397 => 1153,  4393 => 1152,  4384 => 1145,  4370 => 1144,  4365 => 1143,  4362 => 1142,  4345 => 1141,  4341 => 1139,  4332 => 1137,  4328 => 1136,  4319 => 1129,  4305 => 1128,  4300 => 1127,  4297 => 1126,  4280 => 1125,  4276 => 1123,  4267 => 1121,  4263 => 1120,  4249 => 1108,  4235 => 1107,  4230 => 1106,  4227 => 1105,  4210 => 1104,  4206 => 1102,  4197 => 1100,  4193 => 1099,  4184 => 1092,  4170 => 1091,  4165 => 1090,  4162 => 1089,  4145 => 1088,  4141 => 1086,  4132 => 1084,  4128 => 1083,  4114 => 1071,  4100 => 1070,  4095 => 1069,  4092 => 1068,  4075 => 1067,  4071 => 1065,  4062 => 1063,  4058 => 1062,  4049 => 1055,  4035 => 1054,  4030 => 1053,  4027 => 1052,  4010 => 1051,  4006 => 1049,  3997 => 1047,  3993 => 1046,  3984 => 1039,  3970 => 1038,  3965 => 1037,  3962 => 1036,  3945 => 1035,  3941 => 1033,  3932 => 1031,  3928 => 1030,  3919 => 1023,  3905 => 1022,  3900 => 1021,  3897 => 1020,  3880 => 1019,  3876 => 1017,  3867 => 1015,  3863 => 1014,  3854 => 1007,  3840 => 1006,  3835 => 1005,  3832 => 1004,  3815 => 1003,  3811 => 1001,  3802 => 999,  3798 => 998,  3789 => 991,  3775 => 990,  3770 => 989,  3767 => 988,  3750 => 987,  3746 => 985,  3737 => 983,  3733 => 982,  3719 => 970,  3705 => 969,  3700 => 968,  3697 => 967,  3680 => 966,  3676 => 964,  3667 => 962,  3663 => 961,  3654 => 954,  3640 => 953,  3635 => 952,  3632 => 951,  3615 => 950,  3611 => 948,  3602 => 946,  3598 => 945,  3589 => 938,  3575 => 937,  3570 => 936,  3567 => 935,  3550 => 934,  3546 => 932,  3537 => 930,  3533 => 929,  3524 => 922,  3510 => 921,  3505 => 920,  3502 => 919,  3485 => 918,  3481 => 916,  3472 => 914,  3468 => 913,  3459 => 906,  3445 => 905,  3440 => 904,  3437 => 903,  3420 => 902,  3416 => 900,  3407 => 898,  3403 => 897,  3394 => 890,  3380 => 889,  3375 => 888,  3372 => 887,  3355 => 886,  3351 => 884,  3342 => 882,  3338 => 881,  3329 => 874,  3315 => 873,  3310 => 872,  3307 => 871,  3290 => 870,  3286 => 868,  3277 => 866,  3273 => 865,  3259 => 853,  3245 => 852,  3240 => 851,  3237 => 850,  3220 => 849,  3216 => 847,  3207 => 845,  3203 => 844,  3194 => 837,  3180 => 836,  3175 => 835,  3172 => 834,  3155 => 833,  3151 => 831,  3142 => 829,  3138 => 828,  3129 => 821,  3115 => 820,  3110 => 819,  3107 => 818,  3090 => 817,  3086 => 815,  3077 => 813,  3073 => 812,  3064 => 805,  3050 => 804,  3045 => 803,  3042 => 802,  3025 => 801,  3021 => 799,  3012 => 797,  3008 => 796,  2999 => 789,  2985 => 788,  2980 => 787,  2977 => 786,  2960 => 785,  2956 => 783,  2947 => 781,  2943 => 780,  2934 => 773,  2920 => 772,  2915 => 771,  2912 => 770,  2895 => 769,  2891 => 767,  2882 => 765,  2878 => 764,  2869 => 757,  2855 => 756,  2850 => 755,  2847 => 754,  2830 => 753,  2826 => 751,  2817 => 749,  2813 => 748,  2804 => 741,  2790 => 740,  2785 => 739,  2782 => 738,  2765 => 737,  2761 => 735,  2752 => 733,  2748 => 732,  2739 => 725,  2725 => 724,  2720 => 723,  2717 => 722,  2700 => 721,  2696 => 719,  2687 => 717,  2683 => 716,  2674 => 709,  2660 => 708,  2655 => 707,  2652 => 706,  2635 => 705,  2631 => 703,  2622 => 701,  2618 => 700,  2609 => 693,  2595 => 692,  2590 => 691,  2587 => 690,  2570 => 689,  2566 => 687,  2557 => 685,  2553 => 684,  2544 => 677,  2530 => 676,  2525 => 675,  2522 => 674,  2505 => 673,  2501 => 671,  2492 => 669,  2488 => 668,  2479 => 661,  2465 => 660,  2460 => 659,  2457 => 658,  2440 => 657,  2436 => 655,  2427 => 653,  2423 => 652,  2414 => 645,  2400 => 644,  2395 => 643,  2392 => 642,  2375 => 641,  2371 => 639,  2362 => 637,  2358 => 636,  2349 => 629,  2335 => 628,  2330 => 627,  2327 => 626,  2310 => 625,  2306 => 623,  2297 => 621,  2293 => 620,  2284 => 613,  2270 => 612,  2265 => 611,  2262 => 610,  2245 => 609,  2241 => 607,  2232 => 605,  2228 => 604,  2219 => 597,  2205 => 596,  2200 => 595,  2197 => 594,  2180 => 593,  2176 => 591,  2167 => 589,  2163 => 588,  2154 => 581,  2140 => 580,  2135 => 579,  2132 => 578,  2115 => 577,  2111 => 575,  2102 => 573,  2098 => 572,  2089 => 565,  2075 => 564,  2070 => 563,  2067 => 562,  2050 => 561,  2046 => 559,  2037 => 557,  2033 => 556,  2019 => 544,  2005 => 543,  2000 => 542,  1997 => 541,  1980 => 540,  1976 => 538,  1967 => 536,  1963 => 535,  1954 => 528,  1940 => 527,  1935 => 526,  1932 => 525,  1915 => 524,  1911 => 522,  1902 => 520,  1898 => 519,  1889 => 512,  1875 => 511,  1870 => 510,  1867 => 509,  1850 => 508,  1846 => 506,  1837 => 504,  1833 => 503,  1824 => 496,  1810 => 495,  1805 => 494,  1802 => 493,  1785 => 492,  1781 => 490,  1772 => 488,  1768 => 487,  1759 => 480,  1745 => 479,  1740 => 478,  1737 => 477,  1720 => 476,  1716 => 474,  1707 => 472,  1703 => 471,  1694 => 464,  1680 => 463,  1675 => 462,  1672 => 461,  1655 => 460,  1651 => 458,  1642 => 456,  1638 => 455,  1624 => 443,  1610 => 442,  1605 => 441,  1602 => 440,  1585 => 439,  1581 => 437,  1572 => 435,  1568 => 434,  1559 => 427,  1545 => 426,  1540 => 425,  1537 => 424,  1520 => 423,  1516 => 421,  1507 => 419,  1503 => 418,  1494 => 411,  1480 => 410,  1475 => 409,  1472 => 408,  1455 => 407,  1451 => 405,  1442 => 403,  1438 => 402,  1429 => 395,  1415 => 394,  1410 => 393,  1407 => 392,  1390 => 391,  1386 => 389,  1377 => 387,  1373 => 386,  1364 => 379,  1350 => 378,  1345 => 377,  1342 => 376,  1325 => 375,  1321 => 373,  1312 => 371,  1308 => 370,  1294 => 358,  1280 => 357,  1275 => 356,  1272 => 355,  1255 => 354,  1251 => 352,  1242 => 350,  1238 => 349,  1229 => 342,  1215 => 341,  1210 => 340,  1207 => 339,  1190 => 338,  1186 => 336,  1177 => 334,  1173 => 333,  1164 => 326,  1150 => 325,  1145 => 324,  1142 => 323,  1125 => 322,  1121 => 320,  1112 => 318,  1108 => 317,  1099 => 310,  1085 => 309,  1080 => 308,  1077 => 307,  1060 => 306,  1056 => 304,  1047 => 302,  1043 => 301,  1034 => 294,  1020 => 293,  1015 => 292,  1012 => 291,  995 => 290,  991 => 288,  982 => 286,  978 => 285,  969 => 278,  955 => 277,  950 => 276,  947 => 275,  930 => 274,  926 => 272,  917 => 270,  913 => 269,  904 => 262,  890 => 261,  885 => 260,  882 => 259,  865 => 258,  861 => 256,  852 => 254,  848 => 253,  839 => 246,  825 => 245,  820 => 244,  817 => 243,  800 => 242,  796 => 240,  787 => 238,  783 => 237,  774 => 230,  760 => 229,  755 => 228,  752 => 227,  735 => 226,  731 => 224,  722 => 222,  718 => 221,  704 => 209,  690 => 208,  685 => 207,  682 => 206,  665 => 205,  661 => 203,  652 => 201,  648 => 200,  639 => 193,  625 => 192,  620 => 191,  617 => 190,  600 => 189,  596 => 187,  587 => 185,  583 => 184,  569 => 172,  555 => 171,  550 => 170,  547 => 169,  530 => 168,  526 => 166,  517 => 164,  513 => 163,  504 => 156,  490 => 155,  485 => 154,  482 => 153,  465 => 152,  461 => 150,  452 => 148,  448 => 147,  440 => 141,  426 => 140,  421 => 139,  418 => 138,  401 => 137,  397 => 135,  388 => 133,  384 => 132,  375 => 125,  361 => 124,  356 => 123,  353 => 122,  336 => 121,  332 => 119,  323 => 117,  319 => 116,  310 => 109,  296 => 108,  291 => 107,  288 => 106,  271 => 105,  267 => 103,  258 => 101,  254 => 100,  238 => 86,  229 => 84,  225 => 83,  196 => 61,  187 => 59,  178 => 57,  173 => 55,  166 => 51,  159 => 47,  154 => 45,  143 => 41,  134 => 39,  129 => 37,  110 => 35,  107 => 34,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                            {% dump(data.client) %}
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
    <script>
        \$(document).ready(function () {
            \$('#nav-hide-btn-icon').trigger('click');
        });
    </script>
{% endblock %}
", "expertations/show.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.advanced.html.twig");
    }
}
