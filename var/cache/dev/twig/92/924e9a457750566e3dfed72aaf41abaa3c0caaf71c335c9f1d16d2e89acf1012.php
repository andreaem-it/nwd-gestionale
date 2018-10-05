<?php

/* expertations/new.advanced.html.twig */
class __TwigTemplate_dc017135eea121d6a4dcdc36c9bdfa52dcc51b72a298195291aa8d4b893b9b01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/new.advanced.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.advanced.html.twig"));

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

        echo "Preventivo";
        
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
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
            </div>
        </div>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "client", array()), 'label');
        echo "
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "client", array()), 'widget');
        echo "
                                <div class=\"input-group-prepend\">
                                    <div class=\"form-group-text mx-0 px-0 py-0 mt-1\">
                                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "tipo", array()), 'label');
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "tipo", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "kw", array()), 'label');
        echo "
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "kw", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "piani_casa", array()), 'label');
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "piani_casa", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "riscaldamento", array()), 'label');
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "riscaldamento", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "opere_murarie", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "opere_murarie", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "trifase", array()), 'label');
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "trifase", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "sconto", array()), 'label');
        echo "
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "sconto", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 \">
                                <div class=\"form-group\">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "level", array()), 'label');
        echo "
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "level", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-2 \">
                                <div class=\"form-group\">
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "square_meters", array()), 'label');
        echo "
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "square_meters", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 643
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 643, $this->source); })()), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 648
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 649
        echo "    <style>
        .form-control {
            width: 100%!important;
        }
        select {
            width:100%!important;
        }
        #form_client {
            max-width:85%;
        }
        .input-group label {
            font-size: 13px;
            line-height: 1;
            vertical-align: top;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/new.advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 649,  795 => 648,  780 => 643,  219 => 85,  215 => 84,  207 => 79,  203 => 78,  188 => 66,  184 => 65,  176 => 60,  172 => 59,  164 => 54,  160 => 53,  152 => 48,  148 => 47,  140 => 42,  136 => 41,  128 => 36,  124 => 35,  116 => 30,  112 => 29,  102 => 22,  96 => 19,  92 => 18,  82 => 11,  73 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-9\">
                <h3>Preventivo <small>Nuovo > Avanzato</small></h3>
            </div>
        </div>
        {{ form_start(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                {{ form_label(form.client) }}
                                {{ form_widget(form.client) }}
                                <div class=\"input-group-prepend\">
                                    <div class=\"form-group-text mx-0 px-0 py-0 mt-1\">
                                        <a href=\"{{ url('nuovo_cliente') }}\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                {{ form_label(form.tipo) }}
                                {{ form_widget(form.tipo) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                {{ form_label(form.kw) }}
                                {{ form_widget(form.kw) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                {{ form_label(form.piani_casa) }}
                                {{ form_widget(form.piani_casa) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                {{ form_label(form.riscaldamento) }}
                                {{ form_widget(form.riscaldamento) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 \">
                            <div class=\"form-group\">
                                {{ form_label(form.opere_murarie) }}
                                {{ form_widget(form.opere_murarie) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                {{ form_label(form.trifase) }}
                                {{ form_widget(form.trifase) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 \">
                            <div class=\"form-group\">
                                {{ form_label(form.sconto) }}
                                {{ form_widget(form.sconto) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 \">
                                <div class=\"form-group\">
                                    {{ form_label(form.level) }}
                                    {{ form_widget(form.level) }}
                                </div>
                            </div>
                            <div class=\"col-lg-2 \">
                                <div class=\"form-group\">
                                    {{ form_label(form.square_meters) }}
                                    {{ form_widget(form.square_meters) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>TIPOLOGIA</th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class=\"form-control\">
                                            <option>Ambiente</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI PRESA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong >Punti Presa</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese esterne a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prese aggiuntive e bivalenti 10/16A</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Bipolare</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Ventilatore / Estrattore Aria</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        PUNTI COMANDO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Comando</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Comandi Agg.vi</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        ILLUMINAZIONE PREDISPOSIZIONE ESCLUSI CORPI ILLUMINANTI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Luce</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Punti Lice esterni a parete</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Dimmer</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Predisposizione LED parete o incasso</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensori accendiluce/contatto porta</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Luci emergenza predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Lampada Emergenza</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Segnapasso LED predisposizione</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore luminosità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"10\">
                                        RISCALDAMENTO
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Allaccio condizionatore/termoconvettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Caldaia/Pompa di calore</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Terra ai collettori</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Termostato</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Sensore Umidità</strong>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                    <td>
                                        <input class=\"form-control\" type=\"number\">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}

    </div>
</div>
{% endblock %}
{% block stylesheets %}
    <style>
        .form-control {
            width: 100%!important;
        }
        select {
            width:100%!important;
        }
        #form_client {
            max-width:85%;
        }
        .input-group label {
            font-size: 13px;
            line-height: 1;
            vertical-align: top;
        }
    </style>

{% endblock %}", "expertations/new.advanced.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.advanced.html.twig");
    }
}
