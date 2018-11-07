<?php

/* prices/ajax/list.html.twig */
class __TwigTemplate_c4e9a575c2a36a2bfd8a9ca70b07496a7cbae9d40746bc325ef3082cf3ee8219 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prices/ajax/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prices/ajax/list.html.twig"));

        // line 1
        echo "
<div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <tbody>
        <tr>
            <th>
                ID
            </th>
            <th>
                Codice Interno
            </th>
            <th>
                Nome Canonico
            </th>
            <th>
                Prezzo
            </th>
            <th style=\"width: 80px\">
                Opzioni
            </th>
        </tr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "canonical", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €</td>
                <td class=\"float-right\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("prezzi_aggiorna", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm \" data-id=\"\">
                        <i class=\"mdi mdi-table-edit mr-0\"></i>
                    </a>
                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>

    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prices/ajax/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  76 => 29,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  56 => 23,  52 => 22,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <tbody>
        <tr>
            <th>
                ID
            </th>
            <th>
                Codice Interno
            </th>
            <th>
                Nome Canonico
            </th>
            <th>
                Prezzo
            </th>
            <th style=\"width: 80px\">
                Opzioni
            </th>
        </tr>
        {% for item in items %}
            <tr>
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.canonical }}</td>
                <td>{{ item.price }} €</td>
                <td class=\"float-right\">
                    <a href=\"{{ url('prezzi_aggiorna', { 'id' : item.id } ) }}\" class=\"btn btn-secondary btn-sm \" data-id=\"\">
                        <i class=\"mdi mdi-table-edit mr-0\"></i>
                    </a>
                </td>
            </tr>

        {% endfor %}
        </tbody>

    </table>
</div>", "prices/ajax/list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/prices/ajax/list.html.twig");
    }
}
