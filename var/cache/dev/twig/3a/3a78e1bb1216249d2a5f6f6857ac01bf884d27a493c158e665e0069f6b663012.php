<?php

/* expertations/list.html.twig */
class __TwigTemplate_bb96f815cb73cfd2eae27c2f2bda9bf09e3c7f01bda2982a33fc7b10ac7efb52 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/list.html.twig"));

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

        echo "Lista Preventivi";
        
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
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h3 class=\"mt-4\">Preventivi <small>Lista</small></h3>
            </div>
            <div class=\"col-lg-6 grid-margin stretch-card mb-3 float-right\">
                <div class=\"card\">
                    <div class=\"card-body\" style=\"padding: 1rem!important;\">
                        <form class=\"row\">
                            <div class=\"col-3 pr-0 border-right-0\">
                                <select id=\"searchType\" class=\"form-control custom-select mt-1\" id=\"inlineFormCustomSelectPref\" style=\"height: calc(2.25rem + -2px)!important;\">
                                    <option value=\"1\">Preventivo</option>
                                    <option value=\"2\">Cliente</option>
                                    <!--<option value=\"3\">Data</option>-->
                                </select>
                            </div>
                            <div class=\"col-6 pl-0 border-left-0\">
                                <input id=\"searchTerms\" type=\"text\" class=\"form-control mt-1\" placeholder=\"Cerca\">
                            </div>
                            <div class=\"col-2\">
                                <div class=\"btn-group mt-1\">
                                    <button id=\"searchBtn\" type=\"submit\" class=\"btn btn-primary\">
                                        <span class=\"mdi mdi-magnify\"></span>
                                    </button>
                                    <button id=\"restoreBtn\" type=\"reset\" class=\"btn btn-secondary\">
                                        <span class=\"mdi mdi-undo-variant\"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 55, $this->source); })()), "ID", "a.pid");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 58, $this->source); })()), "Data", "a.date");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 61
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 61, $this->source); })()), "Cliente", "a.client");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 64, $this->source); })()), "Commerciale", "a.created_by");
        echo "
                                        </th>
                                        ";
        // line 72
        echo "                                        <th style=\"width:200px\"></th>
                                    </tr>
                                </thead>
                                <tbody id=\"resultTable\">
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["u_expertations"]) || array_key_exists("u_expertations", $context) ? $context["u_expertations"] : (function () { throw new Twig_Error_Runtime('Variable "u_expertations" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pid", array()), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"py-1\">
                                            ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                                ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 86, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                                                ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 91, $this->source); })()), "userToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        ";
            // line 100
            echo "                                        <td style=\"width: 255px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("modifica_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "confirm" => false)), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pid", array()), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"py-1\">
                                            ";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                                ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 125, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                                                ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 130, $this->source); })()), "userToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        ";
            // line 139
            echo "                                        <td style=\"max-width: 200px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"\" class=\"btn btn-warning btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "confirm" => false)), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"navigation mt-1\">
                    ";
        // line 164
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 164, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        \$('#searchBtn').click(function(e) {
            e.preventDefault();
            var type = \$(\"#searchType\").val();
            var term = \$(\"#searchTerms\").val();
            \$.ajax({
                url: '../ajax/search/expertations/' + type + '/' + term,
                success: function(data) {
                    \$('#resultTable').html(data);
                }
            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 164,  316 => 154,  303 => 147,  294 => 141,  290 => 139,  284 => 130,  280 => 129,  273 => 125,  269 => 124,  263 => 121,  257 => 118,  253 => 116,  248 => 115,  235 => 108,  229 => 105,  223 => 102,  219 => 100,  213 => 91,  209 => 90,  202 => 86,  198 => 85,  192 => 82,  186 => 79,  182 => 77,  178 => 76,  172 => 72,  167 => 64,  161 => 61,  155 => 58,  149 => 55,  105 => 13,  99 => 12,  90 => 9,  85 => 8,  80 => 7,  76 => 6,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista Preventivi{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h3 class=\"mt-4\">Preventivi <small>Lista</small></h3>
            </div>
            <div class=\"col-lg-6 grid-margin stretch-card mb-3 float-right\">
                <div class=\"card\">
                    <div class=\"card-body\" style=\"padding: 1rem!important;\">
                        <form class=\"row\">
                            <div class=\"col-3 pr-0 border-right-0\">
                                <select id=\"searchType\" class=\"form-control custom-select mt-1\" id=\"inlineFormCustomSelectPref\" style=\"height: calc(2.25rem + -2px)!important;\">
                                    <option value=\"1\">Preventivo</option>
                                    <option value=\"2\">Cliente</option>
                                    <!--<option value=\"3\">Data</option>-->
                                </select>
                            </div>
                            <div class=\"col-6 pl-0 border-left-0\">
                                <input id=\"searchTerms\" type=\"text\" class=\"form-control mt-1\" placeholder=\"Cerca\">
                            </div>
                            <div class=\"col-2\">
                                <div class=\"btn-group mt-1\">
                                    <button id=\"searchBtn\" type=\"submit\" class=\"btn btn-primary\">
                                        <span class=\"mdi mdi-magnify\"></span>
                                    </button>
                                    <button id=\"restoreBtn\" type=\"reset\" class=\"btn btn-secondary\">
                                        <span class=\"mdi mdi-undo-variant\"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'ID', 'a.pid') }}
                                        </th>
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'Data', 'a.date') }}
                                        </th>
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'Cliente', 'a.client') }}
                                        </th>
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'Commerciale', 'a.created_by') }}
                                        </th>
                                        {#<th>
                                            Prezzo
                                        </th>
                                        <th>
                                            Scadenza
                                        </th>#}
                                        <th style=\"width:200px\"></th>
                                    </tr>
                                </thead>
                                <tbody id=\"resultTable\">
                                {% for item in u_expertations %}
                                    <tr>
                                        <td>
                                            {{ item.pid }}
                                        </td>
                                        <td class=\"py-1\">
                                            {{ item.date|date(\"d-m-Y\") }}
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"{{ url('vedi_clienti', { id : item.client}) }}\">
                                                {{ functions.uidToName(item.client) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"{{ url('impostazioni_utenti') }}\">
                                                {{ functions.userToName(item.createdBy) }}
                                            </a>
                                        </td>
                                        {#<td>
                                            {{ item.price }} €
                                        </td>
                                        <td>
                                            {{ item.expiration|date(\"d-m-Y\") }}
                                        </td>#}
                                        <td style=\"width: 255px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"{{ url('mostra_preventivo',{'id' : item.id}) }}\" class=\"btn btn-primary btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"{{ url('modifica_preventivo', {'id' : item.id}) }}\" class=\"btn btn-warning btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"{{ url('preventivi_elimina' , {'id' : item.id , 'confirm' : false}) }}\" class=\"btn btn-danger btn-sm float-right mr-1 animsition-link\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% for item in pagination %}
                                    <tr>
                                        <td>
                                            {{ item.pid }}
                                        </td>
                                        <td class=\"py-1\">
                                            {{ item.date|date(\"d-m-Y\") }}
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"{{ url('vedi_clienti', { id : item.client}) }}\">
                                                {{ functions.uidToName(item.client) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" animsition-link\" href=\"{{ url('impostazioni_utenti') }}\">
                                                {{ functions.userToName(item.createdBy) }}
                                            </a>
                                        </td>
                                        {#<td>
                                            {{ item.price }} €
                                        </td>
                                        <td>
                                            {{ item.expiration|date(\"d-m-Y\") }}
                                        </td>#}
                                        <td style=\"max-width: 200px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"{{ url('mostra_preventivo',{'id' : item.id}) }}\" class=\"btn btn-primary btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"\" class=\"btn btn-warning btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"{{ url('preventivi_elimina' , {'id' : item.id , 'confirm' : false}) }}\" class=\"btn btn-danger btn-sm float-right animsition-link\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"navigation mt-1\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        \$('#searchBtn').click(function(e) {
            e.preventDefault();
            var type = \$(\"#searchType\").val();
            var term = \$(\"#searchTerms\").val();
            \$.ajax({
                url: '../ajax/search/expertations/' + type + '/' + term,
                success: function(data) {
                    \$('#resultTable').html(data);
                }
            })
        })
    </script>
{% endblock %}
", "expertations/list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/list.html.twig");
    }
}
