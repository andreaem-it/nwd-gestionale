<?php

/* ChartjsBundle:charts:chartjs_bar.html.twig */
class __TwigTemplate_38800bb621e90a8933e636fb1a94184c38aad07a6d592d85f4dab2de81b8fb3b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChartjsBundle:charts:chartjs_bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChartjsBundle:charts:chartjs_bar.html.twig"));

        // line 1
        $context["chartGraphic"] = $this->loadTemplate("@Chartjs/macroCharts.html.twig", "ChartjsBundle:charts:chartjs_bar.html.twig", 1);
        // line 2
        echo "
var myChart";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " = new Chart(ctx_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo ", {
    ";
        // line 4
        echo $context["chartGraphic"]->macro_printChart("bar", (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 4, $this->source); })()));
        echo "
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ChartjsBundle:charts:chartjs_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  import \"@Chartjs/macroCharts.html.twig\" as chartGraphic %}

var myChart{{ id }} = new Chart(ctx_{{ id }}, {
    {{ chartGraphic.printChart('bar',graphic)  }}
});
", "ChartjsBundle:charts:chartjs_bar.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/vendor/fados/chartjs-bundle/Resources/views/charts/chartjs_bar.html.twig");
    }
}
