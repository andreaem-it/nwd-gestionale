<?php

/* settings/ajax/groups.list.html.twig */
class __TwigTemplate_a72def3497fa4da5e50f0453e88b10520578da4ab9e9d565660ef9c84f36fbcb extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/groups.list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/ajax/groups.list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "    <tr>
        <td class=\"py-1\" class=\"text-center\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "isActive", array()) == 0)) {
                // line 11
                echo "                <span class=\"status-indicator\"></span>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 12
$context["group"], "isActive", array()) == 1)) {
                // line 13
                echo "                <span class=\"status-indicator online\"></span>
            ";
            }
            // line 15
            echo "        </td>
        <td class=\"text-center\">
            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "level", array()), "html", null, true);
            echo "
        </td>
        <td class=\"text-center\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "components", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["components"]) {
                // line 21
                echo "                ";
                echo twig_escape_filter($this->env, $context["components"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['components'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </td>
        <td>
            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "father", array()), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["group"], "childs", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["childs"]) {
                // line 29
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childs"], (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 29, $this->source); })()), array(), "array"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </td>
        <td style=\"width: 255px;\">
            <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
<script>
    \$(\"#delete\").click(function(e){
        e.preventDefault();
        var uid = \$(this).attr(\"data-user-id\");

        console.log('clicked' + uid);

        bootbox.setLocale('it');
        bootbox.confirm(\"Sei sicuro di voler eliminare questo utente?<br> <strong>Questa azione non può essere annullata</strong>\", function(result) {
            url = '";
        // line 52
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
        return "settings/ajax/groups.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  122 => 42,  106 => 31,  97 => 29,  93 => 28,  87 => 25,  83 => 23,  74 => 21,  70 => 20,  64 => 17,  60 => 15,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  43 => 7,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for group in groups %}
    <tr>
        <td class=\"py-1\" class=\"text-center\">
            {{ group.id }}
        </td>
        <td class=\"text-center\">
            {{ group.name }}
        </td>
        <td class=\"text-center\">
            {% if group.isActive == 0 %}
                <span class=\"status-indicator\"></span>
            {% elseif group.isActive == 1 %}
                <span class=\"status-indicator online\"></span>
            {% endif %}
        </td>
        <td class=\"text-center\">
            {{ group.level }}
        </td>
        <td class=\"text-center\">
            {% for components in group.components %}
                {{ components }}
            {% endfor %}
        </td>
        <td>
            {{ group.father }}
        </td>
        <td>
            {% for childs in group.childs|keys %}
                {{ childs[key] }}
            {% endfor %}
        </td>
        <td style=\"width: 255px;\">
            <a href=\"\" id=\"delete\" class=\"btn btn-danger btn-sm float-right mr-1\">
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
</script>", "settings/ajax/groups.list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/settings/ajax/groups.list.html.twig");
    }
}
