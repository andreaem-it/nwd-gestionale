<?php

/* settings/groups.html.twig */
class __TwigTemplate_14bd319865ab9647ad6176f7a43bef0c656378efbd615ee721daf8ab2b3f2c50 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "settings/groups.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/groups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/groups.html.twig"));

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
                    <h3>Impostazioni <small>Gruppi</small></h3>
                </div>
                <div class=\"col-3\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_gruppi_nuovo");
        echo "\" class=\"float-right btn btn-success btn-sm\">Nuovo Gruppo <i class=\"mdi mdi-plus-circle\"></i></a>
                    <a id=\"reload-btn\" href=\"\" class=\"float-right btn btn-secondary btn-sm mr-1 pr-2\"><i class=\"mdi mdi-reload\"></i></a>
                </div>
            </div>
            <div class=\"alert alert-info\">
                <strong>Funzionalità disattivata!</strong>
                <br/>
                <p>
                    <br/>Non si necessita la modifica dei gruppi in quanto essi vengono gestiti internamente.
                    <br/>Questa sezione sarà disponibile per gli acquirenti esterni del sistema.</p>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-center\">
                                            ID
                                        </th>
                                        <th class=\"text-center\">
                                            Nome
                                        </th>
                                        <th class=\"text-center\">
                                            Attivo
                                        </th>
                                        <th class=\"text-center\">
                                            Livello
                                        </th>
                                        <th class=\"text-center\">
                                            Membri
                                        </th>
                                        <th class=\"text-center\">
                                            Gruppo Padre
                                        </th>
                                        <th class=\"text-center\">
                                            Gruppi Figli
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"u-table\">
                                    </tbody>
                                    <script>
                                        \$(document).ready(function() {
                                            loadTable()
                                        });
                                        \$('#reload-btn').click(function (e) {
                                            e.preventDefault();
                                            loadTable()
                                        });

                                        function loadTable() {
                                            \$.ajax({
                                                url: '";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ajax_settings_groups_list");
        echo "',
                                                dataType: 'html',
                                                beforeSend: function() {
                                                    \$('#u-table').html('<i class=\"mdi mdi-loading text-center mt-5\"></i>');
                                                },
                                                error: function () {
                                                },
                                                method: 'GET',
                                                success: function (data) {
                                                    \$('#u-table').html(data);
                                                }
                                            })
                                        }

                                    </script>
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

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "settings/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 93,  176 => 92,  141 => 67,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                    <h3>Impostazioni <small>Gruppi</small></h3>
                </div>
                <div class=\"col-3\">
                    <a href=\"{{ url('impostazioni_gruppi_nuovo') }}\" class=\"float-right btn btn-success btn-sm\">Nuovo Gruppo <i class=\"mdi mdi-plus-circle\"></i></a>
                    <a id=\"reload-btn\" href=\"\" class=\"float-right btn btn-secondary btn-sm mr-1 pr-2\"><i class=\"mdi mdi-reload\"></i></a>
                </div>
            </div>
            <div class=\"alert alert-info\">
                <strong>Funzionalità disattivata!</strong>
                <br/>
                <p>
                    <br/>Non si necessita la modifica dei gruppi in quanto essi vengono gestiti internamente.
                    <br/>Questa sezione sarà disponibile per gli acquirenti esterni del sistema.</p>
            </div>
            <div class=\"row mt-3\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-center\">
                                            ID
                                        </th>
                                        <th class=\"text-center\">
                                            Nome
                                        </th>
                                        <th class=\"text-center\">
                                            Attivo
                                        </th>
                                        <th class=\"text-center\">
                                            Livello
                                        </th>
                                        <th class=\"text-center\">
                                            Membri
                                        </th>
                                        <th class=\"text-center\">
                                            Gruppo Padre
                                        </th>
                                        <th class=\"text-center\">
                                            Gruppi Figli
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"u-table\">
                                    </tbody>
                                    <script>
                                        \$(document).ready(function() {
                                            loadTable()
                                        });
                                        \$('#reload-btn').click(function (e) {
                                            e.preventDefault();
                                            loadTable()
                                        });

                                        function loadTable() {
                                            \$.ajax({
                                                url: '{{ url('ajax_settings_groups_list') }}',
                                                dataType: 'html',
                                                beforeSend: function() {
                                                    \$('#u-table').html('<i class=\"mdi mdi-loading text-center mt-5\"></i>');
                                                },
                                                error: function () {
                                                },
                                                method: 'GET',
                                                success: function (data) {
                                                    \$('#u-table').html(data);
                                                }
                                            })
                                        }

                                    </script>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/bootbox.min.js') }}\"></script>
{% endblock %}", "settings/groups.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/settings/groups.html.twig");
    }
}
