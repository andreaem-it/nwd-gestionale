<?php

/* clients/clients.html.twig */
class __TwigTemplate_a0af6211db4c019bc7d2588a96a6d23f55561963970581a534d1086bc90ff9b8 extends Twig_Template
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
                <div class=\"col-12\">
                    <h3>Clienti <small>Lista</small></h3>
                </div>
            </div>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Cliente
                                        </th>
                                        <th>
                                            Referente
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "                                        <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new Twig_Error_Runtime('Variable "func" does not exist.', 56, $this->source); })()), "convertUName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "refereer", array())), "method"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 59
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
                                                ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phone", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
            echo "
                                            </td>
                                            <td style=\"width: 255px;\">
                                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elimina_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("modifica_cliente", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => 1));
            echo "\" class=\"btn btn-primary btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                    </tbody>
                                </table>
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
        return array (  197 => 80,  185 => 74,  179 => 71,  173 => 68,  167 => 65,  161 => 62,  149 => 59,  143 => 56,  137 => 53,  131 => 50,  127 => 48,  123 => 47,  91 => 17,  85 => 16,  76 => 13,  71 => 12,  66 => 11,  62 => 10,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Clienti <small>Lista</small></h3>
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
                                            ID
                                        </th>
                                        <th>
                                            Cliente
                                        </th>
                                        <th>
                                            Referente
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
                                    {% for item in clients %}
                                        <tr>
                                            <td class=\"py-1\">
                                                {{ item.id }}
                                            </td>
                                            <td>
                                                {{ item.name }}
                                            </td>
                                            <td>
                                                {{ func.convertUName(item.refereer) }}
                                            </td>
                                            <td>
                                                {{ item.address }}, {{ item.postalCode }}, {{ item.city }} ({{ item.province }})
                                            </td>
                                            <td>
                                                {{ item.phone }}
                                            </td>
                                            <td>
                                                {{ item.email }}
                                            </td>
                                            <td style=\"width: 255px;\">
                                                <a href=\"{{ url('elimina_clienti', { 'id' : item.id }) }}\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                                <a href=\"{{ url('modifica_cliente' , { 'id' : item.id }) }}\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"{{ url('vedi_clienti',{'id' : 1}) }}\" class=\"btn btn-primary btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
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
        </div>
    </div>
{% endblock %}", "clients/clients.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/clients/clients.html.twig");
    }
}
