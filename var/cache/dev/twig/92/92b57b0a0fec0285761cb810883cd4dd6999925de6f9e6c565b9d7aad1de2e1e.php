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
                <div class=\"col-11\">
                    <h3>Clienti <small>Lista</small></h3>
                </div>
                <div class=\"col-1\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-success mb-2 px-2 float-right\">Aggiungi Cliente</a>
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
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 50, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "
                                            </td>
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
                                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elimina_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("modifica_cliente", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 77
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
        // line 83
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
        return array (  207 => 83,  195 => 77,  189 => 74,  183 => 71,  175 => 68,  167 => 65,  155 => 62,  149 => 59,  143 => 56,  137 => 53,  133 => 51,  129 => 50,  97 => 20,  91 => 19,  82 => 16,  77 => 15,  72 => 14,  68 => 13,  62 => 10,  53 => 3,  44 => 2,  15 => 1,);
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
                    <a href=\"{{ url('nuovo_cliente') }}\" class=\"btn btn-success mb-2 px-2 float-right\">Aggiungi Cliente</a>
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
                                                <a href=\"tel:{{ item.phone }}\">{{ item.phone }}</a>
                                            </td>
                                            <td>
                                                <a href=\"mailto:{{ item.email }}\">{{ item.email }}</a>
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
