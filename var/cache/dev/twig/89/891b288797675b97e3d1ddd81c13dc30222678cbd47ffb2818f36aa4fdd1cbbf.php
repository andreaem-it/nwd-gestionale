<?php

/* clients/clients.html.twig */
class __TwigTemplate_3e3e82a1b7cbb6a5953a7e9dd9d02bf9c30dc115796c3a7f451b6c2f2b1afc15 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/clients.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/clients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <h3>Clienti <small>Lista</small></h3>
                </div>
                <div class=\"col-1\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-success mb-2 px-2 float-right animsition-link\">Aggiungi Cliente</a>
                </div>
            </div>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->source); })()), "ID", "a.id");
        echo "
                                        </th>
                                        <th
                                            ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()), "isSorted", array(0 => "a.Surname"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()), "Cliente", "a.surname");
        echo "
                                        </th>
                                        <th
                                            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->source); })()), "isSorted", array(0 => "a.Refereer"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->source); })()), "Commerciale", "a.refereer");
        echo "
                                        </th>
                                        <th>
                                            Indirizzo
                                        </th>
                                        <th>
                                            Telefono
                                        </th>
                                        <th>
                                            E-Mail
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                                        <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", array()) == 1)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ragioneSociale", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "surname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            }
            // line 57
            echo "                                            </td>
                                            <td>
                                                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 59, $this->source); })()), "convertUName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "refereer", array())), "method"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "address", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "postalCode", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "city", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "province", array()), "html", null, true);
            echo ")
                                            </td>
                                            <td>
                                                <a href=\"tel:";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phone", array()), "html", null, true);
            echo "</a>
                                            </td>
                                            <td>
                                                <a href=\"mailto:";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
            echo "</a>
                                            </td>
                                            <td style=\"width: 255px;\">
                                                <div class=\"btn-group\">
                                                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right animsition-link\">
                                                        <span class=\"mdi mdi-eye-outline\"></span>
                                                    </a>
                                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("modifica_cliente", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm float-right animsition-link\">
                                                        <span class=\"mdi mdi-table-edit\"></span>
                                                    </a>
                                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elimina_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
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
        // line 85
        echo "                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 88
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 88, $this->source); })()));
        echo "
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

    public function getTemplateName()
    {
        return "clients/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 88,  234 => 85,  221 => 78,  215 => 75,  209 => 72,  200 => 68,  192 => 65,  180 => 62,  174 => 59,  170 => 57,  160 => 56,  154 => 53,  150 => 51,  146 => 50,  124 => 35,  114 => 32,  108 => 29,  97 => 20,  91 => 19,  82 => 16,  77 => 15,  72 => 14,  68 => 13,  62 => 10,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <h3>Clienti <small>Lista</small></h3>
                </div>
                <div class=\"col-1\">
                    <a href=\"{{ url('nuovo_cliente') }}\" class=\"btn btn-success mb-2 px-2 float-right animsition-link\">Aggiungi Cliente</a>
                </div>
            </div>
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>
                                            {{ knp_pagination_sortable(pagination, 'ID', 'a.id') }}
                                        </th>
                                        <th
                                            {% if pagination.isSorted('a.Surname') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Cliente', 'a.surname') }}
                                        </th>
                                        <th
                                            {% if pagination.isSorted('a.Refereer') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Commerciale', 'a.refereer') }}
                                        </th>
                                        <th>
                                            Indirizzo
                                        </th>
                                        <th>
                                            Telefono
                                        </th>
                                        <th>
                                            E-Mail
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for item in pagination %}
                                        <tr>
                                            <td class=\"py-1\">
                                                {{ item.id }}
                                            </td>
                                            <td>
                                                {% if item.type == 1 %} {{ item.ragioneSociale }} {% else %}{{ item.surname }} {{ item.name }}{% endif %}
                                            </td>
                                            <td>
                                                {{ func.convertUName(item.refereer) }}
                                            </td>
                                            <td>
                                                {{ item.address }}, {{ item.postalCode }}, {{ item.city }} ({{ item.province }})
                                            </td>
                                            <td>
                                                <a href=\"tel:{{ item.phone }}\">{{ item.phone }}</a>
                                            </td>
                                            <td>
                                                <a href=\"mailto:{{ item.email }}\">{{ item.email }}</a>
                                            </td>
                                            <td style=\"width: 255px;\">
                                                <div class=\"btn-group\">
                                                    <a href=\"{{ url('vedi_clienti',{'id' : item.id}) }}\" class=\"btn btn-primary btn-sm float-right animsition-link\">
                                                        <span class=\"mdi mdi-eye-outline\"></span>
                                                    </a>
                                                    <a href=\"{{ url('modifica_cliente' , { 'id' : item.id }) }}\" class=\"btn btn-warning btn-sm float-right animsition-link\">
                                                        <span class=\"mdi mdi-table-edit\"></span>
                                                    </a>
                                                    <a href=\"{{ url('elimina_clienti', { 'id' : item.id }) }}\" class=\"btn btn-danger btn-sm float-right animsition-link\">
                                                        <span class=\"mdi mdi-delete\"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(pagination) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "clients/clients.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/clients/clients.html.twig");
    }
}
