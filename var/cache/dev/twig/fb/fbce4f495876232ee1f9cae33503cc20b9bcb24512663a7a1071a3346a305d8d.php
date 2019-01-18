<?php

/* settings/ajax/users.list.html.twig */
class __TwigTemplate_093a13443cdafd480b6482f90d1964c5b057d22970beba5c5e64b8045de34811 extends Twig_Template
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
            <img class=\"mg-xs rounded-circle\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("users/" . twig_get_attribute($this->env, $this->source, $context["user"], "picture", array()))), "html", null, true);
            echo "\" alt=\"image\" style=\"width: 40px; height: 40px  \">
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
                if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 22
                    echo "                    <span class=\"badge badge-danger\">
                        SUPER AMMINISTRATORE
                    </span>
                ";
                } elseif ((                // line 25
$context["role"] == "ROLE_ADMIN")) {
                    // line 26
                    echo "                    <span class=\"badge badge-warning\">
                        AMMINISTRATORE
                    </span>
                    ";
                } elseif ((                // line 29
$context["role"] == "ROLE_USER")) {
                    // line 30
                    echo "                    <span class=\"badge badge-info\">
                        UTENTE
                    </span>
                ";
                } else {
                    // line 34
                    echo "                    <span class=\"badge badge-primary\">
                        ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_replace_filter($context["role"], array("ROLE_" => "")), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </td>
        <td class=\"text-center\">
            ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "
        </td>
        <td style=\"width: 255px;\">
            ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "user", array()), "id", array()))) {
                // line 45
                echo "                <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\">
                    <span class=\"mdi mdi-delete\"></span>
                </a>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti_modifica", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm float-right mr-1\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 52
                echo "                <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\">
                    <span class=\"mdi mdi-delete\"></span>
                </a>
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti_modifica", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm float-right mr-1\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
            ";
            }
            // line 59
            echo "        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
<script>
    \$(\"#delete\").click(function(e){
        e.preventDefault();
        var uid = \$(this).attr(\"data-user-id\");

        console.log('clicked' + uid);

        bootbox.setLocale('it');
        bootbox.confirm(\"Sei sicuro di voler eliminare questo utente?<br> <strong>Questa azione non può essere annullata</strong>\", function(result) {
            url = '";
        // line 72
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
        return array (  172 => 72,  160 => 62,  152 => 59,  145 => 55,  138 => 52,  131 => 48,  124 => 45,  122 => 44,  116 => 41,  112 => 39,  106 => 38,  100 => 35,  97 => 34,  91 => 30,  89 => 29,  84 => 26,  82 => 25,  77 => 22,  74 => 21,  70 => 20,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  49 => 10,  43 => 7,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for user in users %}
    <tr>
        <td class=\"py-1\" class=\"text-center\">
            <img class=\"mg-xs rounded-circle\" src=\"{{ asset('users/' ~ user.picture) }}\" alt=\"image\" style=\"width: 40px; height: 40px  \">
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
        </td>
        <td class=\"text-center\">
            {{ user.lastLogin|date(\"d-m-Y H:i:s\") }}
        </td>
        <td style=\"width: 255px;\">
            {% if user.id == app.user.id %}
                <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"{{ user.id }}\">
                    <span class=\"mdi mdi-delete\"></span>
                </a>
                <a href=\"{{ url('impostazioni_utenti_modifica', {'id':user.id}) }}\" class=\"btn btn-warning btn-sm float-right mr-1\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
            {% elseif is_granted('ROLE_SUPER_ADMIN') %}
                <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\" data-user-id=\"{{ user.id }}\">
                    <span class=\"mdi mdi-delete\"></span>
                </a>
                <a href=\"{{ url('impostazioni_utenti_modifica', {'id':user.id}) }}\" class=\"btn btn-warning btn-sm float-right mr-1\">
                    <span class=\"mdi mdi-table-edit\"></span>
                </a>
            {% endif %}
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
</script>", "settings/ajax/users.list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/settings/ajax/users.list.html.twig");
    }
}
