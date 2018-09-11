<?php

/* expertations/list.html.twig */
class __TwigTemplate_838c6096cc69fac9c2fef743669b5324378f4c9ff098b999e8d408fbdd6944fc extends Twig_Template
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
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Lista</small></h3>
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
                                            Data
                                        </th>
                                        <th>
                                            Cliente
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expertations"]) || array_key_exists("expertations", $context) ? $context["expertations"] : (function () { throw new Twig_Error_Runtime('Variable "expertations" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                                        <tr>
                                    <td class=\"py-1\">
                                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 45, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €
                                    </td>
                                    <td>
                                        ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                    </td>
                                    <td style=\"width: 255px;\">
                                        <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-delete\"></span>
                                        </a>
                                        <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-table-edit\"></span>
                                        </a>
                                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
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
        // line 72
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
        return "expertations/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  161 => 66,  149 => 57,  143 => 54,  134 => 50,  126 => 45,  122 => 44,  116 => 41,  112 => 39,  108 => 38,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista Preventivi{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Lista</small></h3>
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
                                            Data
                                        </th>
                                        <th>
                                            Cliente
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
                                        <a href=\"{{ url('clienti', { id : item.client}) }}\">
                                            {{ functions.uidToName(item.client) }}
                                        </a>
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
                                    <td style=\"width: 255px;\">
                                        <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-delete\"></span>
                                        </a>
                                        <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-table-edit\"></span>
                                        </a>
                                        <a href=\"{{ url('mostra_preventivo',{'id' : item.id}) }}\" class=\"btn btn-primary btn-sm float-right mr-1\">
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
{% endblock %}
", "expertations/list.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/expertations/list.html.twig");
    }
}
