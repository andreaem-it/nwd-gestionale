<?php

/* prices/prices.html.twig */
class __TwigTemplate_3dd99fc9e4ab727731375934c4b4fa36644de3d80992280bd8686cb321788939 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "prices/prices.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prices/prices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prices/prices.html.twig"));

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
        echo "<div class=\"main-panel\">
    <div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"flush-prices\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confermi Svuotamento?</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p><strong>Attenzione:</strong> L'operazione non può essere annullata.</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " Elementi saranno eliminati definitivamente.</p>
                    <hr>
                    <small>L'operazione può impiegare fino a 20 minuti a seconda del carico sul server e del numero di elementi. Nel caso duri di più, il sistema bloccherà l'esecuzione per evitare ulteriori rallentamenti, si prega di aggiornare la pagina.</small>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annulla</button>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("action_prices_flush");
        echo "\" class=\"btn btn-danger\">Elimina</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Prezzi <small>Prezzario Avanzato</small></h3>
            </div>
            <div class=\"col-3\">

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-9\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">
                            Listino Prezzi Avanzato
                        </h3>

                        <table class=\"table table-responsive-sm\">
                            <tr>
                                <th>Codice</th>
                                <th>Descrizione</th>
                                <th>Prezzo</th>
                            </tr>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new Twig_Error_Runtime('Variable "prices" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                                <tr>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), 75, true), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), 2), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            Importa File prezzario
                        </h4>
                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "prices_file", array()), 'widget');
        echo "
                        <small class=\"text-muted text-small mb-3\">Richiesto file CSV Prezzario</small>
                        <br/><br/>
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "submit", array()), 'widget');
        echo "
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
                        <a href=\"\" class=\"btn btn-danger mt-2 btn-block\" data-toggle=\"modal\" data-target=\"#flush-prices\">Svuota Prezzario</a>
                        <small class=\"mt-3\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " Elementi attualmente in lista.</small>
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

    public function getTemplateName()
    {
        return "prices/prices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 74,  176 => 72,  172 => 71,  166 => 68,  162 => 67,  150 => 57,  141 => 54,  137 => 53,  133 => 52,  130 => 51,  126 => 50,  95 => 22,  86 => 16,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Impostazioni{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"flush-prices\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confermi Svuotamento?</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p><strong>Attenzione:</strong> L'operazione non può essere annullata.</p>
                    <p>{{ count }} Elementi saranno eliminati definitivamente.</p>
                    <hr>
                    <small>L'operazione può impiegare fino a 20 minuti a seconda del carico sul server e del numero di elementi. Nel caso duri di più, il sistema bloccherà l'esecuzione per evitare ulteriori rallentamenti, si prega di aggiornare la pagina.</small>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annulla</button>
                    <a href=\"{{ url('action_prices_flush') }}\" class=\"btn btn-danger\">Elimina</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Prezzi <small>Prezzario Avanzato</small></h3>
            </div>
            <div class=\"col-3\">

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-9\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">
                            Listino Prezzi Avanzato
                        </h3>

                        <table class=\"table table-responsive-sm\">
                            <tr>
                                <th>Codice</th>
                                <th>Descrizione</th>
                                <th>Prezzo</th>
                            </tr>
                            {% for item in prices %}
                                <tr>
                                    <td>{{ item.code }}</td>
                                    <td>{{ item.description|truncate(75, true) }}</td>
                                    <td>{{ item.price|number_format(2) }}</td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            Importa File prezzario
                        </h4>
                        {{ form_start(form) }}
                        {{ form_widget(form.prices_file) }}
                        <small class=\"text-muted text-small mb-3\">Richiesto file CSV Prezzario</small>
                        <br/><br/>
                        {{ form_widget(form.submit) }}
                        {{ form_end(form) }}
                        <a href=\"\" class=\"btn btn-danger mt-2 btn-block\" data-toggle=\"modal\" data-target=\"#flush-prices\">Svuota Prezzario</a>
                        <small class=\"mt-3\">{{ count }} Elementi attualmente in lista.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "prices/prices.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/prices/prices.html.twig");
    }
}
