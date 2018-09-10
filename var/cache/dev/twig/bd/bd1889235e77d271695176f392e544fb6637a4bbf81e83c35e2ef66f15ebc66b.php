<?php

/* expertations/show.html.twig */
class __TwigTemplate_aae222f9a77f00a1dd362fa87c8f713e0e54e88a69a92aa99638241259e3d35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mostra Preventivo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>Tipo impianto:</strong>  ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["functions"] ?? $this->getContext($context, "functions")), "plantIntToName", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                <strong>Piani edificio:</strong>  ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                <strong>Riscaldamento:</strong>  ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["functions"] ?? $this->getContext($context, "functions")), "heatingIntToName", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                <strong>Trifase:</strong>  ";
        // line 36
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "trifase", array()) == true)) {
            echo " Si ";
        } elseif (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                            </div>
                            <div class=\"col-6\">
                                <strong>Livello impianto:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()), "html", null, true);
        echo " <br/>
                                <strong>Fornitura elettrica:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                <strong>Metratura ambienti:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "squareMeters", array()), "html", null, true);
        echo " m²
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["item"] ?? $this->getContext($context, "item")));
        echo "
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
        return "expertations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  151 => 41,  147 => 40,  143 => 39,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  104 => 21,  98 => 20,  88 => 19,  84 => 18,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Mostra Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> {{ client.name }} <br/>
                        <strong>Indirizzo:</strong> {{ client.address }}, {{ client.postalCode }}, {{ client.city }} ({{ client.province }}) <br/>
                        <strong>Telefono:</strong> <a href=\"tel:{{ client.phone }}\">{{ client.phone }}</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:{{ client.email }}\">{{ client.email }}</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <strong>Tipo impianto:</strong>  {{ functions.plantIntToName(item.tipo) }}<br/>
                                <strong>Piani edificio:</strong>  {{ item.pianiCasa }}<br/>
                                <strong>Riscaldamento:</strong>  {{ functions.heatingIntToName(item.riscaldamento) }} <br/>
                                <strong>Trifase:</strong>  {% if item.trifase == true %} Si {% elseif item.trifase == false %} No {% endif %}<br/>
                            </div>
                            <div class=\"col-6\">
                                <strong>Livello impianto:</strong> {{ item.level }} <br/>
                                <strong>Fornitura elettrica:</strong> {{ item.kw }} Kw <br/>
                                <strong>Metratura ambienti:</strong> {{ item.squareMeters }} m²
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {{ dump(item) }}
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
{% endblock %}", "expertations/show.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/expertations/show.html.twig");
    }
}
