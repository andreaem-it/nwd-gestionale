<?php

/* clients/show.html.twig */
class __TwigTemplate_dd112853cdd0a0f20dcc1e358ed353b2a7dc51d5a1f160aaff57b61aa66eb627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Clienti <small>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array()), "html", null, true);
        echo "</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Anagrafica <small><a class=\"float-right\" href=\"\" style=\"margin-top: 0.8rem !important;\">Modifica</a></small></h3>
                        </div>
                        <strong>Nome:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</a>  <br/>

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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["expertations"] ?? $this->getContext($context, "expertations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                                    <tr>
                                        <td class=\"py-1\">
                                            ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "status", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "status", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </td>
                                        <td>
                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo " €
                                        </td>
                                        <td>
                                            ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"width: 60px;\">
                                            <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mostra_preventivo", array("id" => 1));
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
        // line 74
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
        return array (  172 => 74,  160 => 68,  154 => 65,  148 => 62,  139 => 58,  132 => 54,  128 => 52,  124 => 51,  88 => 20,  82 => 19,  72 => 18,  68 => 17,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Clienti <small>{{ client.name }}</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h3>Anagrafica <small><a class=\"float-right\" href=\"\" style=\"margin-top: 0.8rem !important;\">Modifica</a></small></h3>
                        </div>
                        <strong>Nome:</strong> {{ client.name }} <br/>
                        <strong>Indirizzo:</strong> {{ client.address }}, {{ client.postalCode }}, {{ client.city }} ({{ client.province }}) <br/>
                        <strong>Telefono:</strong> <a href=\"tel:{{ client.phone }}\">{{ client.phone }}</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:{{ client.email }}\">{{ client.email }}</a>  <br/>

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
                                            <a href=\"{{ url('mostra_preventivo',{'id' : 1}) }}\" class=\"btn btn-primary btn-sm float-right mr-1\">
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
{% endblock %}", "clients/show.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/clients/show.html.twig");
    }
}
