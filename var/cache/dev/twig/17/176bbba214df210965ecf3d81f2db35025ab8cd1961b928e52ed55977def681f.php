<?php

/* expertations/new.html.twig */
class __TwigTemplate_005dec11b5cbeb407fa2d32a096682da5dc4590fbad9cf9ed088eaec708acd5e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/new.html.twig"));

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
                <h3>Preventivo <small>Nuovo</small></h3>
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
                        <div class=\"col-lg-2 grid-margin stretch-card\">
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
                                    <div class=\"input-group-text mx-0 px-0 py-0\">
                                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
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
        </div>
        ";
        // line 82
        echo "        <script>
            \$(document).on('change', '#form_square_meters', function () {
                dataChanged();

            });
            \$(document).on('change', '#form_level', function() {
                dataChanged();
            });
            function getData(tipo,dest) {

                \$.ajax({
                    url: '../ajax/expertations/get/quadri/' + tipo + '/' + level + '/' + meters,
                    dataType: 'html',
                    success: function (data) {
                        \$(dest).val(data);
                    }
                })
            }
            function dataChanged() {
                meters = \$(\"#form_square_meters\").val();
                level = \$(\"#form_level\").val();

                getData(1,'#form_num_circuiti');
                getData(2,'#form_num_prese_telefono_dati');
                getData(3,'#form_illum_sicurezza');
                if (level === \"1\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"1\");
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                }
            }
        </script>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->source); })()), "level", array()), 'label');
        echo "
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "level", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "square_meters", array()), 'label');
        echo "
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "square_meters", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\"></div>
                        ";
        // line 143
        echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "num_circuiti", array()), 'label');
        echo "
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->source); })()), "num_circuiti", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->source); })()), "num_prese_telefono_dati", array()), 'label');
        echo "
                                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->source); })()), "num_prese_telefono_dati", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->source); })()), "illum_sicurezza", array()), 'label');
        echo "
                                ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->source); })()), "illum_sicurezza", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->source); })()), "spd", array()), 'label');
        echo "
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->source); })()), "spd", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-4 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->source); })()), "imp_ausiliari", array()), 'label');
        echo "
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->source); })()), "imp_ausiliari", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" style=\"overflow-x: scroll\">
                        <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center\" style=\"background-color: #f2f8f9;\">
                                    <th>
                                        Piano
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Ambiente
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Nome
                                    </th>
                                    <th>
                                        Punti prese
                                    </th>
                                    <th>
                                        Punti Luce
                                    </th>
                                    <th>
                                        Prese TV
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                </tr>
                            </tbody>
                            <tbody id=\"email-fields-list\" data-prototype='</tr>
                                    <td>
                                        ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 217, $this->source); })()), "floor", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 220, $this->source); })()), "ambient", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 223, $this->source); })()), "name", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 226, $this->source); })()), "pp", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->source); })()), "pl", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->source); })()), "pt", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>' data-widget-tags=\"";
        // line 248
        echo twig_escape_filter($this->env, "<tr></tr>");
        echo "\">

                            </tbody>
                        </table>
                        <script>
                            function changed(item) {
                                \$(document).on('change', '#form_ambient_' + item, function () {
                                    val = \$(\"#form_ambient_\" + item).val();
                                    level = \$(\"#form_level\").val();
                                    console.log(val);
                                    \$.ajax({
                                        url: '../ajax/expertations/get/outlets/' + level + \"/\" + val,
                                        dataType: 'html',
                                        success: function (data) {
                                            console.log(data);
                                            data = JSON.parse(data);
                                            if (data[0]) {
                                                \$('#form_pp_' + item).val(data[0]['outlets']).attr('min', data[0]['outlets']);
                                            } else {
                                                \$('#form_pp_' + item).val(0);
                                            }
                                            if (data[1]) {
                                                \$('#form_pl_' + item).val(data[1]['outlets']);
                                            } else {
                                                \$('#form_pl_' + item).val(0);
                                            }
                                            if (data[2]) {
                                                \$('#form_pt_' + item).val(data[2]['outlets']);
                                            } else {
                                                \$('#form_pt_' + item).val(0);
                                            }
                                        }
                                    });
                                    toastr.info('Carico valori');

                                    update_total();
                                });
                            }
                            function update_total() {
                                val = Math.floor(Math.random() * (1000 - 10) + 10);
                                \$('#total').text(val + '.00 €');
                            }
                        </script>
                    </div>
                    <button type=\"button\"
                            class=\"add-another-collection-widget btn btn-outline-primary btn-block mt-4\"
                            data-list=\"#email-fields-list\"><i class=\"fa fa-plus-circle\"></i>Aggiungi riga</button>
                    <script>
                        jQuery(document).ready(function () {
                            jQuery('.add-another-collection-widget').click(function (e) {
                                var list = jQuery(jQuery(this).attr('data-list'));
                                var counter = list.data('widget-counter') | list.children().length;
                                if (!counter) { counter = list.children().length; }
                                var newWidget = list.attr('data-prototype');
                                newWidget = newWidget.replace(/__name__/g, counter);
                                changed(counter);
                                dataChanged();
                                counter++;
                                list.data(' widget-counter', counter);
                                var newElem = jQuery(list.attr('data-widget-tags')).append(newWidget);
                                newElem.appendTo(list);
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-9\"></div>
            <div class=\"col-3\">
                <div class=\"card card-generate \">
                    <div class=\"card-body pt-2 pb-4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 323, $this->source); })()), "submit", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-6\">
                                <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3\">Annulla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 334
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 334, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
    <style>
        .form-control {
            width: 100%!important;
        }
        #form_client {
            max-width:85%;
        }
        table tbody tr td input.form-control {
            min-width: 50px;
            max-width: 50px;
            text-align: center;
            margin: 0 auto;
        }
        .level-mt-3 {
            margin-top: 0.7rem !important;
        }
        table tbody tr th {
            min-width: 150px;
        }
        .tbl-lg {
            min-width: 250px;
        }
        .card-generate {
            position: fixed;
            bottom: 0px;
            right: 0px;
            border-top: 1px solid #CCCCCC;
            border-left: 1px solid #CCCCCC;
            border-top-left-radius: 5px;
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
    </style>
    <script>
        jQuery(document).ready(function(){
            jQuery('.scrollbar-dynamic').scrollbar();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 380
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 381
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/scrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 386
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 387
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 388,  615 => 387,  606 => 386,  594 => 384,  590 => 383,  586 => 382,  581 => 381,  572 => 380,  516 => 334,  502 => 323,  424 => 248,  405 => 232,  399 => 229,  393 => 226,  387 => 223,  381 => 220,  375 => 217,  327 => 172,  323 => 171,  315 => 166,  311 => 165,  303 => 160,  299 => 159,  291 => 154,  287 => 153,  279 => 148,  275 => 147,  269 => 143,  262 => 134,  258 => 133,  250 => 128,  246 => 127,  199 => 82,  189 => 66,  185 => 65,  177 => 60,  173 => 59,  165 => 54,  161 => 53,  153 => 48,  149 => 47,  141 => 42,  137 => 41,  129 => 36,  125 => 35,  117 => 30,  113 => 29,  103 => 22,  97 => 19,  93 => 18,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <h3>Preventivo <small>Nuovo</small></h3>
            </div>
        </div>
        {{ form_start(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.client) }}
                                {{ form_widget(form.client) }}
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text mx-0 px-0 py-0\">
                                        <a href=\"{{ url('nuovo_cliente') }}\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.tipo) }}
                                {{ form_widget(form.tipo) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.kw) }}
                                {{ form_widget(form.kw) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.piani_casa) }}
                                {{ form_widget(form.piani_casa) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.riscaldamento) }}
                                {{ form_widget(form.riscaldamento) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.opere_murarie) }}
                                {{ form_widget(form.opere_murarie) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.trifase) }}
                                {{ form_widget(form.trifase) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.sconto) }}
                                {{ form_widget(form.sconto) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {#<div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card mt-3\">
                    <div class=\"card-body\">

                    </div>
                </div>
            </div>
        </div>#}
        <script>
            \$(document).on('change', '#form_square_meters', function () {
                dataChanged();

            });
            \$(document).on('change', '#form_level', function() {
                dataChanged();
            });
            function getData(tipo,dest) {

                \$.ajax({
                    url: '../ajax/expertations/get/quadri/' + tipo + '/' + level + '/' + meters,
                    dataType: 'html',
                    success: function (data) {
                        \$(dest).val(data);
                    }
                })
            }
            function dataChanged() {
                meters = \$(\"#form_square_meters\").val();
                level = \$(\"#form_level\").val();

                getData(1,'#form_num_circuiti');
                getData(2,'#form_num_prese_telefono_dati');
                getData(3,'#form_illum_sicurezza');
                if (level === \"1\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"1\");
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                }
            }
        </script>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.level) }}
                                {{ form_widget(form.level) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.square_meters) }}
                                {{ form_widget(form.square_meters) }}
                            </div>
                        </div>
                        <div class=\"col-lg-3\"></div>
                        {#<div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"mt-5\">
                                <h4>Totale Preliminare: <span id=\"total\" class=\"text-success text-right\">0.00 €</span></h4>
                            </div>
                        </div>#}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_circuiti) }}
                                {{ form_widget(form.num_circuiti) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_prese_telefono_dati) }}
                                {{ form_widget(form.num_prese_telefono_dati) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.illum_sicurezza) }}
                                {{ form_widget(form.illum_sicurezza) }}
                            </div>
                        </div>
                        <div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.spd) }}
                                {{ form_widget(form.spd) }}
                            </div>
                        </div>
                        <div class=\"col-lg-4 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.imp_ausiliari) }}
                                {{ form_widget(form.imp_ausiliari) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" style=\"overflow-x: scroll\">
                        <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center\" style=\"background-color: #f2f8f9;\">
                                    <th>
                                        Piano
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Ambiente
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Nome
                                    </th>
                                    <th>
                                        Punti prese
                                    </th>
                                    <th>
                                        Punti Luce
                                    </th>
                                    <th>
                                        Prese TV
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                    <th>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nuova dotazione\">
                                    </th>
                                </tr>
                            </tbody>
                            <tbody id=\"email-fields-list\" data-prototype='</tr>
                                    <td>
                                        {{ form_widget(form.floor.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.ambient.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.name.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.pp.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.pl.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.pt.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>
                                    <td>
                                        <input type=\"number\" class=\"form-control\" placeholder=\"0\" min=\"0\">
                                    </td>' data-widget-tags=\"{{ '<tr></tr>'|e }}\">

                            </tbody>
                        </table>
                        <script>
                            function changed(item) {
                                \$(document).on('change', '#form_ambient_' + item, function () {
                                    val = \$(\"#form_ambient_\" + item).val();
                                    level = \$(\"#form_level\").val();
                                    console.log(val);
                                    \$.ajax({
                                        url: '../ajax/expertations/get/outlets/' + level + \"/\" + val,
                                        dataType: 'html',
                                        success: function (data) {
                                            console.log(data);
                                            data = JSON.parse(data);
                                            if (data[0]) {
                                                \$('#form_pp_' + item).val(data[0]['outlets']).attr('min', data[0]['outlets']);
                                            } else {
                                                \$('#form_pp_' + item).val(0);
                                            }
                                            if (data[1]) {
                                                \$('#form_pl_' + item).val(data[1]['outlets']);
                                            } else {
                                                \$('#form_pl_' + item).val(0);
                                            }
                                            if (data[2]) {
                                                \$('#form_pt_' + item).val(data[2]['outlets']);
                                            } else {
                                                \$('#form_pt_' + item).val(0);
                                            }
                                        }
                                    });
                                    toastr.info('Carico valori');

                                    update_total();
                                });
                            }
                            function update_total() {
                                val = Math.floor(Math.random() * (1000 - 10) + 10);
                                \$('#total').text(val + '.00 €');
                            }
                        </script>
                    </div>
                    <button type=\"button\"
                            class=\"add-another-collection-widget btn btn-outline-primary btn-block mt-4\"
                            data-list=\"#email-fields-list\"><i class=\"fa fa-plus-circle\"></i>Aggiungi riga</button>
                    <script>
                        jQuery(document).ready(function () {
                            jQuery('.add-another-collection-widget').click(function (e) {
                                var list = jQuery(jQuery(this).attr('data-list'));
                                var counter = list.data('widget-counter') | list.children().length;
                                if (!counter) { counter = list.children().length; }
                                var newWidget = list.attr('data-prototype');
                                newWidget = newWidget.replace(/__name__/g, counter);
                                changed(counter);
                                dataChanged();
                                counter++;
                                list.data(' widget-counter', counter);
                                var newElem = jQuery(list.attr('data-widget-tags')).append(newWidget);
                                newElem.appendTo(list);
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-9\"></div>
            <div class=\"col-3\">
                <div class=\"card card-generate \">
                    <div class=\"card-body pt-2 pb-4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                {{ form_widget(form.submit) }}
                            </div>
                            <div class=\"col-6\">
                                <a href=\"\" class=\"btn btn-outline-danger btn-block btn-sm mt-3\">Annulla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ form_end(form) }}
    </div>
</div>
    <style>
        .form-control {
            width: 100%!important;
        }
        #form_client {
            max-width:85%;
        }
        table tbody tr td input.form-control {
            min-width: 50px;
            max-width: 50px;
            text-align: center;
            margin: 0 auto;
        }
        .level-mt-3 {
            margin-top: 0.7rem !important;
        }
        table tbody tr th {
            min-width: 150px;
        }
        .tbl-lg {
            min-width: 250px;
        }
        .card-generate {
            position: fixed;
            bottom: 0px;
            right: 0px;
            border-top: 1px solid #CCCCCC;
            border-left: 1px solid #CCCCCC;
            border-top-left-radius: 5px;
        }
        @media only screen and (max-width: 600px) {
            .card-generate {
                position: fixed;
                width: 100%;
            }
        }
    </style>
    <script>
        jQuery(document).ready(function(){
            jQuery('.scrollbar-dynamic').scrollbar();
        });
    </script>
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/scrollbar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/fontawesome.all.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/scrollbar.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/jquery.toastr.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "expertations/new.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/expertations/new.html.twig");
    }
}
