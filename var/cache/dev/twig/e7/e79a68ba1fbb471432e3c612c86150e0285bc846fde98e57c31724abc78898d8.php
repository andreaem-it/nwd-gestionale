<?php

/* @Chartjs/macroCharts.html.twig */
class __TwigTemplate_70560757f20d4ecb14afdd04fd2196af4c2a512b8cad02dbb8bcf2196bea7f9f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Chartjs/macroCharts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Chartjs/macroCharts.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_printChart($__type__ = null, $__graphic__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "graphic" => $__graphic__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printChart"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printChart"));

            // line 2
            echo "        type: '";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "',
           data: {
            ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["graphic"] ?? null), "datasets", array(), "any", true, true)) {
                // line 5
                echo "              labels: ";
                echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 5, $this->source); })()), "datasets", array()), 0, array(), "array"), "labels", array()));
                echo ",
            ";
            } else {
                // line 7
                echo "                labels: ";
                echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 7, $this->source); })()), "labels", array()));
                echo ",
            ";
            }
            // line 9
            echo "            datasets: [
                ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["graphic"] ?? null), "datasets", array(), "any", true, true)) {
                // line 11
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 11, $this->source); })()), "datasets", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["dataset"]) {
                    // line 12
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dataset"], "data", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                        // line 13
                        echo "                            {
                            type: '";
                        // line 14
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dataset"], "type", array()), "html", null, true);
                        echo "',
                            label: '";
                        // line 15
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "',
                            data: ";
                        // line 16
                        echo json_encode($context["data"]);
                        echo ",
                            backgroundColor: \"rgba(";
                        // line 17
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dataset"], "backgroundcolor", array()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dataset"], "backgroundOpacity", array()), "html", null, true);
                        echo ")\",
                            borderColor: \"rgba(";
                        // line 18
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dataset"], "backgroundcolor", array()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                        echo ",1)\",
                            ";
                        // line 19
                        echo twig_get_attribute($this->env, $this->source, $context["dataset"], "datasetConfig", array());
                        echo "
                            borderWidth: 1
                            },
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "
                ";
            } else {
                // line 26
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 26, $this->source); })()), "data", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                    // line 27
                    echo "                    {
                        label: '";
                    // line 28
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "',
                        data: ";
                    // line 29
                    echo json_encode($context["data"]);
                    echo ",
                        backgroundColor: \"rgba(";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 30, $this->source); })()), "backgroundcolor", array()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 30, $this->source); })()), "backgroundOpacity", array()), "html", null, true);
                    echo ")\",
                        borderColor: \"rgba(";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 31, $this->source); })()), "backgroundcolor", array()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
                    echo ",1)\",
                        ";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 32, $this->source); })()), "datasetConfig", array());
                    echo "
                        borderWidth: 1
                    },
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                ";
            }
            // line 37
            echo "            ]
        },
        options: {
            ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, (isset($context["graphic"]) || array_key_exists("graphic", $context) ? $context["graphic"] : (function () { throw new Twig_Error_Runtime('Variable "graphic" does not exist.', 40, $this->source); })()), "options", array());
            echo "
        }
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Chartjs/macroCharts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 40,  238 => 37,  235 => 36,  217 => 32,  213 => 31,  207 => 30,  203 => 29,  199 => 28,  196 => 27,  178 => 26,  174 => 24,  160 => 23,  142 => 19,  138 => 18,  132 => 17,  128 => 16,  124 => 15,  120 => 14,  117 => 13,  99 => 12,  81 => 11,  79 => 10,  76 => 9,  70 => 7,  64 => 5,  62 => 4,  56 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro printChart(type, graphic) %}
        type: '{{ type }}',
           data: {
            {% if graphic.datasets is defined  %}
              labels: {{ graphic.datasets[0].labels | json_encode() | raw  }},
            {% else %}
                labels: {{ graphic.labels | json_encode() | raw  }},
            {% endif %}
            datasets: [
                {% if graphic.datasets is defined  %}
                    {% for dataset in graphic.datasets %}
                        {% for key,data in dataset.data %}
                            {
                            type: '{{dataset.type }}',
                            label: '{{ key }}',
                            data: {{data | json_encode() | raw  }},
                            backgroundColor: \"rgba({{ dataset.backgroundcolor[loop.index-1] }},{{ dataset.backgroundOpacity }})\",
                            borderColor: \"rgba({{ dataset.backgroundcolor[loop.index-1] }},1)\",
                            {{ dataset.datasetConfig |raw }}
                            borderWidth: 1
                            },
                        {% endfor %}
                    {% endfor %}

                {% else %}
                    {% for key,data in graphic.data %}
                    {
                        label: '{{  key }}',
                        data: {{data | json_encode() | raw  }},
                        backgroundColor: \"rgba({{ graphic.backgroundcolor[loop.index-1] }},{{ graphic.backgroundOpacity }})\",
                        borderColor: \"rgba({{ graphic.backgroundcolor[loop.index-1] }},1)\",
                        {{ graphic.datasetConfig |raw }}
                        borderWidth: 1
                    },
                    {% endfor %}
                {% endif %}
            ]
        },
        options: {
            {{ graphic.options |raw }}
        }
{% endmacro %}", "@Chartjs/macroCharts.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/vendor/fados/chartjs-bundle/Resources/views/macroCharts.html.twig");
    }
}
