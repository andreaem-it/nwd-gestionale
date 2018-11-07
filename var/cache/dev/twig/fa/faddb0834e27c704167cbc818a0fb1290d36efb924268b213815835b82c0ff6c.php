<?php

/* expertations/delete.html.twig */
class __TwigTemplate_80c177e9d7846d74a6a62b00598d8b147e3e8d34ac33b2f9425a110e24bcfe73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/delete.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/delete.html.twig"));

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
                    <h3>Cliente <small>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->source); })()), "name", array()), "html", null, true);
        echo "</small></h3>
                </div>
            </div>
            <div class=\"row mb-sm-2\">
                <div class=\"col-md-4\">
                    <div class=\"card card-grey mbgitmd-4\">
                        <div class=\"card-body \">
                            <div class=\"card-title\">
                                <h5>Cliente</h5>
                            </div>
                            <strong>Nome:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 17, $this->source); })()), "name", array()), "html", null, true);
        echo " <br/>
                            <strong>Indirizzo:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "province", array()), "html", null, true);
        echo ") <br/>
                            <strong>Telefono:</strong> <a href=\"tel:";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                            <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "</a>  <br/>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card card-grey\">
                        <div class=\"card-body\">
                            <div class=\"card-title\">
                                <h5>Abitazione</h5>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <strong>Tipo impianto:</strong>  ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 32, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                    <strong>Piani edificio:</strong>  ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                    <strong>Riscaldamento:</strong>  ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 34, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                    <strong>Trifase:</strong>  ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "trifase", array()) == true)) {
            echo " Si ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                                </div>
                                <div class=\"col-sm-6\">
                                    <strong>Livello impianto:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 38, $this->source); })()), "level", array()), "html", null, true);
        echo " <br/>
                                    <strong>Fornitura elettrica:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                    <strong>Metratura ambienti:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo " m² <br />
                                    <strong>Opere murarie:</strong> ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "opereMurarie", array()) == 0)) {
            echo " No ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo " Intonaco ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "opereMurarie", array()) == 2)) {
            echo " Mattone/Pietra ";
        }
        // line 42
        echo "                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3>Eliminare definitivamente questo preventivo?</h3>
                            <br/>
                            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->source); })()), "id", array()), "confirm" => true)), "html", null, true);
        echo "\" class=\"btn btn-danger\">Conferma</a>
                            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("lista_preventivi");
        echo "\" class=\"btn btn-secondary\">Annulla</a>
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
        return "expertations/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  166 => 55,  151 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  92 => 20,  86 => 19,  76 => 18,  72 => 17,  59 => 7,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Cliente <small>{{ client.name }}</small></h3>
                </div>
            </div>
            <div class=\"row mb-sm-2\">
                <div class=\"col-md-4\">
                    <div class=\"card card-grey mbgitmd-4\">
                        <div class=\"card-body \">
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
                <div class=\"col-md-8\">
                    <div class=\"card card-grey\">
                        <div class=\"card-body\">
                            <div class=\"card-title\">
                                <h5>Abitazione</h5>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <strong>Tipo impianto:</strong>  {{ functions.plantIntToName(item.tipo) }}<br/>
                                    <strong>Piani edificio:</strong>  {{ item.pianiCasa }}<br/>
                                    <strong>Riscaldamento:</strong>  {{ functions.heatingIntToName(item.riscaldamento) }} <br/>
                                    <strong>Trifase:</strong>  {% if item.trifase == true %} Si {% elseif item.trifase == false %} No {% endif %}<br/>
                                </div>
                                <div class=\"col-sm-6\">
                                    <strong>Livello impianto:</strong> {{ item.level }} <br/>
                                    <strong>Fornitura elettrica:</strong> {{ item.kw }} Kw <br/>
                                    <strong>Metratura ambienti:</strong> {{ item.squareMeters }} m² <br />
                                    <strong>Opere murarie:</strong> {% if item.opereMurarie == 0 %} No {% elseif item.opereMurarie == 1 %} Intonaco {% elseif item.opereMurarie == 2 %} Mattone/Pietra {% endif %}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3>Eliminare definitivamente questo preventivo?</h3>
                            <br/>
                            <a href=\"{{ url('preventivi_elimina' , { 'id' : item.id , 'confirm' : true }) }}\" class=\"btn btn-danger\">Conferma</a>
                            <a href=\"{{ url('lista_preventivi') }}\" class=\"btn btn-secondary\">Annulla</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
{% endblock %}", "expertations/delete.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/delete.html.twig");
    }
}
