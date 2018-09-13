<?php

/* settings/ajax/users.list.html.twig */
class __TwigTemplate_056239aeffae94df390ff198afadf45ca02909cb06e8baa5aef834b8b2ef37da extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/users.list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/users.list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            echo "    <tr>
        <td class=\"py-1\" class=\"text-center\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "usernameCanonical", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "emailCanonical", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array()) == 0)) {
                // line 14
                echo "                <span class=\"status-indicator\"></span>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 15
$context["user"], "enabled", array()) == 1)) {
                // line 16
                echo "                <span class=\"status-indicator online\"></span>
            ";
            }
            // line 18
            echo "        </td>
        <td class=\"text-center\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo " &nbsp;
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </td>
        <td class=\"text-center\">
            ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "
        </td>
        <td style=\"width: 255px;\">
            <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">
                <span class=\"mdi mdi-delete\"></span>
            </a>
            <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                <span class=\"mdi mdi-table-edit\"></span>
            </a>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
<script>
    \$(\"#delete\").click(function(e){
        e.preventDefault();
        var uid = \$(this).attr(\"data-user-id\");

        console.log('clicked' + uid);

        bootbox.setLocale('it');
        bootbox.confirm(\"Sei sicuro di voler eliminare questo utente?<br> <strong>Questa azione non può essere annullata</strong>\", function(result) {
            url = '";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ajax_settings_users_delete", array("id" => 0));
        echo "';
            url = url.replace(\"0\",uid);
            console.log(url);
            if(result){
                \$.ajax({
                    url: url,
                    type: 'delete',
                    success: function(result) {
                        console.log('Delete');
                    },
                    error: function(e){
                        console.log(e.responseText);
                    }
                });
            }
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "settings/ajax/users.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  108 => 37,  93 => 28,  87 => 25,  83 => 23,  74 => 21,  70 => 20,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  49 => 10,  43 => 7,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for user in users %}
    <tr>
        <td class=\"py-1\" class=\"text-center\">
            {{ user.id }}
        </td>
        <td class=\"text-center\">
            {{ user.usernameCanonical }}
        </td>
        <td class=\"text-center\">
            {{ user.emailCanonical }}
        </td>
        <td class=\"text-center\">
            {% if user.enabled == 0 %}
                <span class=\"status-indicator\"></span>
            {% elseif user.enabled == 1 %}
                <span class=\"status-indicator online\"></span>
            {% endif %}
        </td>
        <td class=\"text-center\">
            {% for role in user.roles %}
                {{ role }} &nbsp;
            {% endfor %}
        </td>
        <td class=\"text-center\">
            {{ user.lastLogin|date(\"d-m-Y H:i:s\") }}
        </td>
        <td style=\"width: 255px;\">
            <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"{{ user.id }}\">
                <span class=\"mdi mdi-delete\"></span>
            </a>
            <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                <span class=\"mdi mdi-table-edit\"></span>
            </a>
        </td>
    </tr>
{% endfor %}

<script>
    \$(\"#delete\").click(function(e){
        e.preventDefault();
        var uid = \$(this).attr(\"data-user-id\");

        console.log('clicked' + uid);

        bootbox.setLocale('it');
        bootbox.confirm(\"Sei sicuro di voler eliminare questo utente?<br> <strong>Questa azione non può essere annullata</strong>\", function(result) {
            url = '{{ url('ajax_settings_users_delete', { 'id': 0 }) }}';
            url = url.replace(\"0\",uid);
            console.log(url);
            if(result){
                \$.ajax({
                    url: url,
                    type: 'delete',
                    success: function(result) {
                        console.log('Delete');
                    },
                    error: function(e){
                        console.log(e.responseText);
                    }
                });
            }
        });
    });
</script>", "settings/ajax/users.list.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/settings/ajax/users.list.html.twig");
    }
}
