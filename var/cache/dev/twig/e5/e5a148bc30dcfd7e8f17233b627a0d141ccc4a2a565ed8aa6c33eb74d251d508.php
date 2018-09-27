<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b92ad6f5e9ad69fa51d56187e164fdce5b16bc2c40da1822aa2f5a92109271ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

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
                <div class=\"col-9\">
                    <h3>Profilo <small></small></h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"mt-3 col-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <img class=\"img-md rounded-circle\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faces-clipart/pic-1.png"), "html", null, true);
        echo "\" alt=\"Profile image\">
                                </div>
                                <div class=\"col-9\">
                                    <div class=\"font-weight-bold\">
                                        ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "                                    </div>
                                    ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->source); })()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()), "id", array()))) {
            // line 25
            echo "                                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_change_password");
            echo "\">
                                            Cambia Password
                                        </a>
                                    ";
        }
        // line 29
        echo "                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-3 col-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">Account Figli</h3>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Nome
                                        </th>
                                        ";
        // line 52
        echo "                                    </tr>
                                    </thead>
                                    <tbody>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["childs"]) || array_key_exists("childs", $context) ? $context["childs"] : (function () { throw new Twig_Error_Runtime('Variable "childs" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 56
            echo "                                    <tr>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "username", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 81
            echo "                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    </tbody>
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

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "                                            ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 21)->display($context);
        // line 22
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 22,  169 => 21,  160 => 20,  140 => 83,  133 => 81,  129 => 58,  125 => 57,  122 => 56,  118 => 55,  113 => 52,  91 => 29,  83 => 25,  81 => 24,  78 => 23,  76 => 20,  69 => 16,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-9\">
                    <h3>Profilo <small></small></h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"mt-3 col-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <img class=\"img-md rounded-circle\" src=\"{{ asset('images/faces-clipart/pic-1.png') }}\" alt=\"Profile image\">
                                </div>
                                <div class=\"col-9\">
                                    <div class=\"font-weight-bold\">
                                        {% block fos_user_content %}
                                            {% include \"@FOSUser/Profile/show_content.html.twig\" %}
                                        {% endblock fos_user_content %}
                                    </div>
                                    {% if user.id == app.user.id %}
                                        <a href=\"{{ url('fos_user_change_password') }}\">
                                            Cambia Password
                                        </a>
                                    {% endif %}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-3 col-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">Account Figli</h3>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Nome
                                        </th>
                                        {#<th>
                                            Ruolo
                                        </th>#}
                                    </tr>
                                    </thead>
                                    <tbody>
                            {% for child in childs %}
                                    <tr>
                                        <td>{{ child.id }}</td>
                                        <td>{{ child.username }}</td>
                                        {#<td>
                                            {{ dump(child.roles) }}
                                            {% for role in childs.roles %}
                                                {% if role == 'ROLE_SUPER_ADMIN' %}
                                                    <span class=\"badge badge-danger\">
                                                        SUPER AMMINISTRATORE
                                                    </span>
                                                {% elseif role == 'ROLE_ADMIN' %}
                                                    <span class=\"badge badge-warning\">
                                                        AMMINISTRATORE
                                                    </span>
                                                {% elseif role == 'ROLE_USER' %}
                                                    <span class=\"badge badge-info\">
                                                        UTENTE
                                                    </span>
                                                {% else %}
                                                    <span class=\"badge badge-primary\">
                                                    {{ role|replace({'ROLE_':''}) }}
                                                </span>
                                                {% endif %}
                                            {% endfor %}
                                        </td>#}
                                    </tr>
                            {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}", "@FOSUser/Profile/show.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
