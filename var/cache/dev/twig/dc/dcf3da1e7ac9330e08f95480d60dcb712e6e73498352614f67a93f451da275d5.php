<?php

/* clients/show.html.twig */
class __TwigTemplate_0bc48f5ebadc812eefe02baac93e5f9791e7e124ce9a78ee7c66e628dc25bb27 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

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
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Clienti <small>";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->source); })()), "type", array()) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->source); })()), "ragioneSociale", array()), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->source); })()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->source); })()), "surname", array()), "html", null, true);
            echo " ";
        }
        echo "</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Anagrafica <small><a class=\"float-right animsition-link\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("modifica_cliente", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 15, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" style=\"margin-top: 0.8rem !important;\">Modifica</a></small></h3>
                        </div>
                        <strong>Nome:</strong>";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 17, $this->source); })()), "type", array()) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 17, $this->source); })()), "ragioneSociale", array()), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 17, $this->source); })()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 17, $this->source); })()), "surname", array()), "html", null, true);
            echo " ";
        }
        echo "<br/>
                        <strong>Indirizzo:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "address", array()), "html", null, true);
        echo " <br/>
                        <strong>CAP:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "postalCode", array()), "html", null, true);
        echo " <br/>
                        <strong>Città:</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->source); })()), "phone", array()), "html", null, true);
        echo " <a class=\"\" href=\"tel:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->source); })()), "phone", array()), "html", null, true);
        echo "\"><i class=\"fa fa-phone float-right\"></i></a>  <br/>
                        <strong>E-Mail:</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->source); })()), "email", array()), "html", null, true);
        echo " <a class=\"\" href=\"mailto:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->source); })()), "email", array()), "html", null, true);
        echo "\"><i class=\"fa fa-envelope float-right\"></i></a>  <br/>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Preventivi</h3>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Stato
                                    </th>
                                    <th>
                                        Prezzo
                                    </th>
                                    <th>
                                        Scadenza
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expertations"]) || array_key_exists("expertations", $context) ? $context["expertations"] : (function () { throw new Twig_Error_Runtime('Variable "expertations" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                                    <tr>
                                        <td class=\"py-1\">
                                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </td>
                                        <td>
                                            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €
                                        </td>
                                        <td>
                                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"width: 60px;\">
                                            <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => 1));
            echo "\" class=\"btn btn-primary btn-sm float-right mr-1 animsition-link\">
                                                <span class=\"mdi mdi-eye-outline\"></span>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                </tbody>
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
        return "clients/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 76,  189 => 70,  183 => 67,  177 => 64,  168 => 60,  161 => 56,  157 => 54,  153 => 53,  117 => 22,  111 => 21,  105 => 20,  101 => 19,  97 => 18,  84 => 17,  79 => 15,  59 => 7,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Clienti <small>{% if client.type == 1 %} {{ client.ragioneSociale }} {% else %}{{ client.name }} {{ client.surname }} {% endif %}</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Anagrafica <small><a class=\"float-right animsition-link\" href=\"{{ url('modifica_cliente', {'id': client.id}) }}\" style=\"margin-top: 0.8rem !important;\">Modifica</a></small></h3>
                        </div>
                        <strong>Nome:</strong>{% if client.type == 1 %} {{ client.ragioneSociale }} {% else %}{{ client.name }} {{ client.surname }} {% endif %}<br/>
                        <strong>Indirizzo:</strong> {{ client.address }} <br/>
                        <strong>CAP:</strong> {{ client.postalCode }} <br/>
                        <strong>Città:</strong> {{ client.city }} ({{ client.province }}) <br/>
                        <strong>Telefono:</strong> {{ client.phone }} <a class=\"\" href=\"tel:{{ client.phone }}\"><i class=\"fa fa-phone float-right\"></i></a>  <br/>
                        <strong>E-Mail:</strong> {{ client.email }} <a class=\"\" href=\"mailto:{{ client.email }}\"><i class=\"fa fa-envelope float-right\"></i></a>  <br/>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Preventivi</h3>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Stato
                                    </th>
                                    <th>
                                        Prezzo
                                    </th>
                                    <th>
                                        Scadenza
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for item in expertations %}
                                    <tr>
                                        <td class=\"py-1\">
                                            {{ item.date|date(\"d-m-Y\") }}
                                        </td>
                                        <td>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{ item.status }}%\" aria-valuenow=\"{{ item.status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ item.price }} €
                                        </td>
                                        <td>
                                            {{ item.expiration|date(\"d-m-Y\") }}
                                        </td>
                                        <td style=\"width: 60px;\">
                                            <a href=\"{{ url('mostra_preventivo',{'id' : 1}) }}\" class=\"btn btn-primary btn-sm float-right mr-1 animsition-link\">
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
{% endblock %}", "clients/show.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/clients/show.html.twig");
    }
}
