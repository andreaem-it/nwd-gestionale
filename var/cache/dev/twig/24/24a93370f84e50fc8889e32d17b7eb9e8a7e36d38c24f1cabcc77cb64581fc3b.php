<?php

/* settings/ajax/users.list.html.twig */
class __TwigTemplate_59e48270ed4277f1ef853fa44d436fa7c8fe6efe5ce36302d014d9858849fe09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/users.list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/users.list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            echo "    <tr>
        <td class=\"py-1\" class=\"text-center\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usernameCanonical", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "emailCanonical", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 13
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                // line 14
                echo "                <span class=\"status-indicator\"></span>
            ";
            } elseif (($this->getAttribute(            // line 15
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "
        </td>
        <td style=\"width: 255px;\">
            <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajax_settings_users_delete", array("id" => 0));
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
        return array (  116 => 47,  104 => 37,  89 => 28,  83 => 25,  79 => 23,  70 => 21,  66 => 20,  62 => 18,  58 => 16,  56 => 15,  53 => 14,  51 => 13,  45 => 10,  39 => 7,  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
