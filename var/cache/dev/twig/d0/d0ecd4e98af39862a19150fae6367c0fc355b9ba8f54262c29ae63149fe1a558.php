<?php

/* settings/parameters.html.twig */
class __TwigTemplate_bd460251c2b814a0f16b27f6816b0fdccb5e3da4720747b7541a948b89b59d59 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "settings/parameters.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/parameters.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/parameters.html.twig"));

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

        echo "Impostazioni";
        
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
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <h3>Impostazioni <small>Parametri</small></h3>
                </div>
                <div class=\"col-3\">

                </div>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <ul class=\"nav nav-pills nav-fill\" id=\"myTab\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#tab-1\" role=\"tab\" aria-controls=\"tab-1\" aria-selected=\"true\">Sistemi di Riscaldamento</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-2\" role=\"tab\" aria-controls=\"tab-2\" aria-selected=\"false\"></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-3\" role=\"tab\" aria-controls=\"tab-3\" aria-selected=\"false\"></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-4\" role=\"tab\" aria-controls=\"tab-4\" aria-selected=\"false\"></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"tab-1\" role=\"tabpanel\" aria-labelledby=\"tab-1\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-title\">
                                                Sistemi di Riscaldamento
                                            </div>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nome</th>
                                                        <th style=\"max-width: 80px\"></th>
                                                    </tr>
                                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["heating"]) || array_key_exists("heating", $context) ? $context["heating"] : (function () { throw new Twig_Error_Runtime('Variable "heating" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "                                                        <tr>
                                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</td>
                                                            <td class=\"float-right\">
                                                                <div class=\"btn-group\">
                                                                    <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-0\">
                                                                        <span class=\"mdi mdi-table-edit\"></span>
                                                                    </a>
                                                                    <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-0\">
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
        // line 68
        echo "                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-title\">
                                                Aggiungi Nuovo
                                            </div>
                                            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["heatingForm"]) || array_key_exists("heatingForm", $context) ? $context["heatingForm"] : (function () { throw new Twig_Error_Runtime('Variable "heatingForm" does not exist.', 81, $this->source); })()), 'form_start');
        echo "
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["heatingForm"]) || array_key_exists("heatingForm", $context) ? $context["heatingForm"] : (function () { throw new Twig_Error_Runtime('Variable "heatingForm" does not exist.', 82, $this->source); })()), "name", array()), 'label');
        echo "
                                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["heatingForm"]) || array_key_exists("heatingForm", $context) ? $context["heatingForm"] : (function () { throw new Twig_Error_Runtime('Variable "heatingForm" does not exist.', 83, $this->source); })()), "name", array()), 'widget');
        echo "
                                            ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["heatingForm"]) || array_key_exists("heatingForm", $context) ? $context["heatingForm"] : (function () { throw new Twig_Error_Runtime('Variable "heatingForm" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-2\" role=\"tabpanel\" aria-labelledby=\"tab-2\">...</div>
                        <div class=\"tab-pane fade\" id=\"tab-3\" role=\"tabpanel\" aria-labelledby=\"tab-3\">...</div>
                        <div class=\"tab-pane fade\" id=\"tab-4\" role=\"tabpanel\" aria-labelledby=\"tab-4\">...</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#myTab a').on('click', function (e) {
            e.preventDefault()
            \$(this).tab('show')
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "settings/parameters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 102,  207 => 101,  180 => 84,  176 => 83,  172 => 82,  168 => 81,  153 => 68,  134 => 55,  130 => 54,  127 => 53,  123 => 52,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Impostazioni{% endblock %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <h3>Impostazioni <small>Parametri</small></h3>
                </div>
                <div class=\"col-3\">

                </div>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <ul class=\"nav nav-pills nav-fill\" id=\"myTab\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#tab-1\" role=\"tab\" aria-controls=\"tab-1\" aria-selected=\"true\">Sistemi di Riscaldamento</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-2\" role=\"tab\" aria-controls=\"tab-2\" aria-selected=\"false\"></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-3\" role=\"tab\" aria-controls=\"tab-3\" aria-selected=\"false\"></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#tab-4\" role=\"tab\" aria-controls=\"tab-4\" aria-selected=\"false\"></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"tab-1\" role=\"tabpanel\" aria-labelledby=\"tab-1\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-title\">
                                                Sistemi di Riscaldamento
                                            </div>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nome</th>
                                                        <th style=\"max-width: 80px\"></th>
                                                    </tr>
                                                    {% for item in heating %}
                                                        <tr>
                                                            <td>{{ item.id }}</td>
                                                            <td>{{ item.name }}</td>
                                                            <td class=\"float-right\">
                                                                <div class=\"btn-group\">
                                                                    <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-0\">
                                                                        <span class=\"mdi mdi-table-edit\"></span>
                                                                    </a>
                                                                    <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-0\">
                                                                        <span class=\"mdi mdi-delete\"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-title\">
                                                Aggiungi Nuovo
                                            </div>
                                            {{ form_start(heatingForm) }}
                                            {{ form_label(heatingForm.name) }}
                                            {{ form_widget(heatingForm.name) }}
                                            {{ form_end(heatingForm) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-2\" role=\"tabpanel\" aria-labelledby=\"tab-2\">...</div>
                        <div class=\"tab-pane fade\" id=\"tab-3\" role=\"tabpanel\" aria-labelledby=\"tab-3\">...</div>
                        <div class=\"tab-pane fade\" id=\"tab-4\" role=\"tabpanel\" aria-labelledby=\"tab-4\">...</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/bootbox.min.js') }}\"></script>
    <script>
        \$('#myTab a').on('click', function (e) {
            e.preventDefault()
            \$(this).tab('show')
        })
    </script>
{% endblock %}", "settings/parameters.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/settings/parameters.html.twig");
    }
}
