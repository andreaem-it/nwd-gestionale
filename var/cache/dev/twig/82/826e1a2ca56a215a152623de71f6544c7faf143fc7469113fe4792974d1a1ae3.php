<?php

/* ChartjsBundle:default:chartjsRender.html.twig */
class __TwigTemplate_0777e3d67f228e9cd338161be8015bedbde19ba5910774f46c620b9df94c9547 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChartjsBundle:default:chartjsRender.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChartjsBundle:default:chartjsRender.html.twig"));

        // line 1
        echo "
<canvas id='";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "' style=\"width:";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ";height:";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\"></canvas>

";
        // line 4
        $context["configuration"] = array("chartjs.animation" => "animation", "chartjs.layout" => "animation", "chartjs.legend" => "animation", "chartjs.title" => "animation");
        // line 5
        echo "
";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 6, $this->source); })()), "data", array())) > 0)) {
            // line 7
            echo "    <script>
       \$( document ).ready( function() {
            var ctx_";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " = document.getElementById('";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "').getContext('2d');
           ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["keyc"] => $context["config"]) {
                // line 11
                echo "               ";
                if ( !twig_test_empty(call_user_func_array($this->env->getFunction('parameter')->getCallable(), array($context["keyc"])))) {
                    // line 12
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('parameter')->getCallable(), array($context["keyc"])));
                    foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                        // line 13
                        echo "                            ";
                        if (twig_test_iterable($context["data"])) {
                            // line 14
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["data"]);
                            foreach ($context['_seq'] as $context["k"] => $context["d"]) {
                                // line 15
                                echo "                                    Chart.defaults.global.";
                                echo twig_escape_filter($this->env, $context["config"], "html", null, true);
                                echo ".";
                                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                                echo "='";
                                echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                                echo "';
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k'], $context['d'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 17
                            echo "                            ";
                        } else {
                            // line 18
                            echo "                                 Chart.defaults.global.";
                            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
                            echo ".";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "='";
                            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
                            echo "';
                            ";
                        }
                        // line 20
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "               ";
                }
                // line 23
                echo "           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyc'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            //Graphic ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 24, $this->source); })()), "type", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "
            ";
            // line 25
            $this->loadTemplate((("ChartjsBundle:charts:chartjs_" . twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 25, $this->source); })()), "type", array())) . ".html.twig"), "ChartjsBundle:default:chartjsRender.html.twig", 25)->display(array_merge($context, array(0 => array("graphic" => (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 25, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 25, $this->source); })()), "type" => twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 25, $this->source); })()), "type", array())))));
            // line 26
            echo "        });
    </script>
";
        } else {
            // line 29
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no.data.found"), "html", null, true);
            echo "</span>
    </div>
";
        }
        // line 33
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ChartjsBundle:default:chartjsRender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  137 => 30,  134 => 29,  129 => 26,  127 => 25,  120 => 24,  114 => 23,  111 => 22,  104 => 20,  94 => 18,  91 => 17,  78 => 15,  73 => 14,  70 => 13,  65 => 12,  62 => 11,  58 => 10,  52 => 9,  48 => 7,  46 => 6,  43 => 5,  41 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<canvas id='{{ id }}' style=\"width:{{ width }};height:{{ height }}\"></canvas>

{% set configuration = {'chartjs.animation':'animation','chartjs.layout':'animation','chartjs.legend':'animation','chartjs.title':'animation'} %}

{% if graphic.data|length>0  %}
    <script>
       \$( document ).ready( function() {
            var ctx_{{ id }} = document.getElementById('{{ id }}').getContext('2d');
           {%  for keyc,config in configuration %}
               {% if  parameter(keyc) is not empty %}
                    {%  for key,data in parameter(keyc) %}
                            {% if data is iterable %}
                                {% for k,d in data %}
                                    Chart.defaults.global.{{ config }}.{{ k }}='{{ d }}';
                                {% endfor %}
                            {% else %}
                                 Chart.defaults.global.{{ config }}.{{ key }}='{{ data }}';
                            {% endif %}

                    {%  endfor %}
               {%  endif  %}
           {%  endfor %}
            //Graphic {{ graphic.type }} - {{ id }}
            {% include 'ChartjsBundle:charts:chartjs_'~graphic.type~'.html.twig' with [{'graphic':graphic,'id':id,'type':graphic.type}] %}
        });
    </script>
{% else %}
    <div class=\"clearfix no-data\">
        <span>{{ 'no.data.found'|trans }}</span>
    </div>
{% endif %}

", "ChartjsBundle:default:chartjsRender.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/vendor/fados/chartjs-bundle/Resources/views/default/chartjsRender.html.twig");
    }
}
