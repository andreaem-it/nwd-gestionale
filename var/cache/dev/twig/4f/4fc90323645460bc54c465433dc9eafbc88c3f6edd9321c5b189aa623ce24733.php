<?php

/* expertations/list.html.twig */
class __TwigTemplate_4020b1b515d956f6ccf8abfd6dd41fec7cf04330d012c38b18037c81d95b2fdb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/list.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/list.html.twig"));

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

        echo "Lista Preventivi";
        
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
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "flashes", []));
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
        echo "
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
                                            ";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 56, $this->source); })()), "ID", "a.pid");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 59, $this->source); })()), "Data", "a.date");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 62, $this->source); })()), "Cliente", "a.client");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 65, $this->source); })()), "Commerciale", "a.created_by");
        echo "
                                        </th>
                                        <th>
                                            ";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 68, $this->source); })()), "Stato", "a.status");
        echo "
                                        </th>
                                        ";
        // line 76
        echo "                                        <th style=\"width:200px\"></th>
                                    </tr>
                                </thead>
                                <tbody id=\"resultTable\">
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pid", []), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"py-1\">
                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", []), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a class=\" \" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", [])]), "html", null, true);
            echo "\">
                                                ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 90, $this->source); })()), "uidToType", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", [])], "method") == 1)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 90, $this->source); })()), "uidToRagSoc", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", [])], "method"), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 90, $this->source); })()), "uidToSurName", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", [])], "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 90, $this->source); })()), "uidToName", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", [])], "method"), "html", null, true);
            }
            // line 91
            echo "                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" \" href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                                                ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 95, $this->source); })()), "userToName", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [])], "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        <td>
                                            ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 0)) {
                // line 100
                echo "                                                <span class=\"text-warning\"><i class=\"far fa-clock\"></i> In attesa </span>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 101
$context["item"], "status", []) == 1)) {
                // line 102
                echo "                                                <span class=\"text-success\"><i class=\"fa fa-check\"></i> Accettato </span>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
$context["item"], "status", []) == 2)) {
                // line 104
                echo "                                                <span class=\"text-danger\"><i class=\"fa fa-times\"></i> Rifiutato </span>
                                            ";
            }
            // line 106
            echo "                                        </td>
                                        ";
            // line 113
            echo "                                        <td style=\"max-width: 200px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 0)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_imposta_accettato", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [])]), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_imposta_non_accettato", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [])]), "html", null, true);
            }
            echo "\" class=\"btn ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 0)) {
                echo "btn-success";
            } else {
                echo " btn-secondary";
            }
            echo " btn-sm \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 0)) {
                echo "Imposta come Accettato";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 1)) {
                echo "Imposta come Non Accettato";
            }
            echo "\">
                                                    <span class=\"";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", []) == 0)) {
                echo "mdi mdi-check";
            } else {
                echo "fa fa-times pl-1";
            }
            echo "\"></span>
                                                </a>
                                                <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", ["pid" => twig_get_attribute($this->env, $this->source, $context["item"], "pid", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Mostra Preventivo\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"\" class=\"btn btn-warning btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifica Preventivo\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "confirm" => false]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Elimina Preventivo\">
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
        // line 131
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
        // line 141
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 141, $this->source); })()));
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

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip({
                'boundary': 'window',
                'container': 'body',
                'placement': 'top'
            });
        });
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
        return array (  361 => 162,  352 => 161,  322 => 141,  310 => 131,  297 => 124,  288 => 118,  279 => 116,  259 => 115,  255 => 113,  252 => 106,  248 => 104,  246 => 103,  243 => 102,  241 => 101,  238 => 100,  236 => 99,  229 => 95,  225 => 94,  220 => 91,  210 => 90,  206 => 89,  200 => 86,  194 => 83,  190 => 81,  186 => 80,  180 => 76,  175 => 68,  169 => 65,  163 => 62,  157 => 59,  151 => 56,  106 => 13,  100 => 12,  91 => 9,  86 => 8,  81 => 7,  77 => 6,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'Stato', 'a.status') }}
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
                                {% for item in pagination %}
                                    <tr>
                                        <td>
                                            {{ item.pid }}
                                        </td>
                                        <td class=\"py-1\">
                                            {{ item.date|date(\"d-m-Y\") }}
                                        </td>
                                        <td>
                                            <a class=\" \" href=\"{{ url('vedi_clienti', { id : item.client}) }}\">
                                                {% if functions.uidToType(item.client) == 1 %} {{ functions.uidToRagSoc(item.client) }} {% else %}{{ functions.uidToSurName(item.client) }} {{ functions.uidToName(item.client) }}{% endif %}
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\" \" href=\"{{ url('impostazioni_utenti') }}\">
                                                {{ functions.userToName(item.createdBy) }}
                                            </a>
                                        </td>
                                        <td>
                                            {% if item.status == 0 %}
                                                <span class=\"text-warning\"><i class=\"far fa-clock\"></i> In attesa </span>
                                            {% elseif item.status == 1 %}
                                                <span class=\"text-success\"><i class=\"fa fa-check\"></i> Accettato </span>
                                            {% elseif item.status == 2 %}
                                                <span class=\"text-danger\"><i class=\"fa fa-times\"></i> Rifiutato </span>
                                            {% endif %}
                                        </td>
                                        {#<td>
                                            {{ item.price }} €
                                        </td>
                                        <td>
                                            {{ item.expiration|date(\"d-m-Y\") }}
                                        </td>#}
                                        <td style=\"max-width: 200px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"{% if item.status == 0 %}{{ url('preventivi_imposta_accettato', {'id': item.id }) }}{% else %}{{ url('preventivi_imposta_non_accettato', {'id': item.id }) }}{% endif %}\" class=\"btn {% if item.status == 0 %}btn-success{% else %} btn-secondary{% endif %} btn-sm \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{% if item.status == 0 %}Imposta come Accettato{% elseif item.status == 1 %}Imposta come Non Accettato{% endif %}\">
                                                    <span class=\"{% if item.status == 0 %}mdi mdi-check{% else %}fa fa-times pl-1{% endif %}\"></span>
                                                </a>
                                                <a href=\"{{ url('mostra_preventivo',{'pid' : item.pid}) }}\" class=\"btn btn-primary btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Mostra Preventivo\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"\" class=\"btn btn-warning btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifica Preventivo\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"{{ url('preventivi_elimina' , {'id' : item.id , 'confirm' : false}) }}\" class=\"btn btn-danger btn-sm float-right \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Elimina Preventivo\">
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
{% block javascripts %}
    <script>
        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip({
                'boundary': 'window',
                'container': 'body',
                'placement': 'top'
            });
        });
    </script>
{% endblock %}", "expertations/list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/list.html.twig");
    }
}
