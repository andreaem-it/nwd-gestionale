<?php

/* expertations/ajax/list.html.twig */
class __TwigTemplate_aab589a59516525f2fde5a6a91b3684b316b6ee40943dc30aa540d74ea7a287b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/ajax/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/ajax/list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expertations"]) || array_key_exists("expertations", $context) ? $context["expertations"] : (function () { throw new Twig_Error_Runtime('Variable "expertations" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <tr>
        <td>
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
        </td>
        <td class=\"py-1\">
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
        </td>
        <td>
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 11, $this->source); })()), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
            </a>
        </td>
        <td>
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 16, $this->source); })()), "userToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", array())), "method"), "html", null, true);
            echo "
            </a>
        </td>
        ";
            // line 25
            echo "        <td style=\"max-width: 200px;\">
            <div class=\"btn-group\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right\">
                    <span class=\"mdi mdi-eye-outline\"></span>
                </a>
                <a href=\"\" class=\"btn btn-warning btn-sm float-right\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "confirm" => false)), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right\">
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "expertations/ajax/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  74 => 27,  70 => 25,  64 => 16,  60 => 15,  53 => 11,  49 => 10,  43 => 7,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in expertations %}
    <tr>
        <td>
            {{ item.id }}
        </td>
        <td class=\"py-1\">
            {{ item.date|date(\"d-m-Y\") }}
        </td>
        <td>
            <a href=\"{{ url('vedi_clienti', { id : item.client}) }}\">
                {{ functions.uidToName(item.client) }}
            </a>
        </td>
        <td>
            <a href=\"{{ url('impostazioni_utenti') }}\">
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
                <a href=\"{{ url('mostra_preventivo',{'id' : item.id}) }}\" class=\"btn btn-primary btn-sm float-right\">
                    <span class=\"mdi mdi-eye-outline\"></span>
                </a>
                <a href=\"\" class=\"btn btn-warning btn-sm float-right\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
                <a href=\"{{ url('preventivi_elimina' , {'id' : item.id , 'confirm' : false}) }}\" class=\"btn btn-danger btn-sm float-right\">
                    <span class=\"mdi mdi-delete\"></span>
                </a>
            </div>
        </td>
    </tr>
{% endfor %}", "expertations/ajax/list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/ajax/list.html.twig");
    }
}
