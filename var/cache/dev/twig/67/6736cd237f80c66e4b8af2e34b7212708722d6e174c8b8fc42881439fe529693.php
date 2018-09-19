<?php

/* :settings:users.html.twig */
class __TwigTemplate_c55d24f1a9d54a2c2e29de955e4d31a238389336886bbd843ad0d200d4d22b4e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":settings:users.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:users.html.twig"));

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
                    <h3>Impostazioni <small>Utenti</small></h3>
                </div>
                <div class=\"col-3\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti_aggiungi");
        echo "\" class=\"float-right btn btn-success btn-sm\">Nuovo Utente <i class=\"mdi mdi-plus-circle\"></i></a>
                    <a id=\"reload-btn\" href=\"\" class=\"float-right btn btn-secondary btn-sm mr-1 pr-2\"><i class=\"mdi mdi-reload\"></i></a>
                </div>
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
                                            Username
                                        </th>
                                        <th class=\"text-center\">
                                            Email
                                        </th>
                                        <th class=\"text-center\">
                                            Abilitato
                                        </th>
                                        <th class=\"text-center\">
                                            Ruolo
                                        </th>
                                        <th class=\"text-center\">
                                            Ultimo Login
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
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ajax_settings_users_list");
        echo "',
                                                dataType: 'html',
                                                beforeSend: function() {
                                                    \$('#u-table').html('<i class=\"mdi mdi-loading text-center mt-5\"></i>');
                                                },
                                                error: function () {
                                                    alert('Error')
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

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":settings:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 84,  167 => 83,  131 => 57,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
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
                    <h3>Impostazioni <small>Utenti</small></h3>
                </div>
                <div class=\"col-3\">
                    <a href=\"{{ url('impostazioni_utenti_aggiungi') }}\" class=\"float-right btn btn-success btn-sm\">Nuovo Utente <i class=\"mdi mdi-plus-circle\"></i></a>
                    <a id=\"reload-btn\" href=\"\" class=\"float-right btn btn-secondary btn-sm mr-1 pr-2\"><i class=\"mdi mdi-reload\"></i></a>
                </div>
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
                                            Username
                                        </th>
                                        <th class=\"text-center\">
                                            Email
                                        </th>
                                        <th class=\"text-center\">
                                            Abilitato
                                        </th>
                                        <th class=\"text-center\">
                                            Ruolo
                                        </th>
                                        <th class=\"text-center\">
                                            Ultimo Login
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
                                                url: '{{ url('ajax_settings_users_list') }}',
                                                dataType: 'html',
                                                beforeSend: function() {
                                                    \$('#u-table').html('<i class=\"mdi mdi-loading text-center mt-5\"></i>');
                                                },
                                                error: function () {
                                                    alert('Error')
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
{% endblock %}", ":settings:users.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/settings/users.html.twig");
    }
}
