<?php

/* expertations/new.html.twig */
class __TwigTemplate_217eda7123c900fdc36e508ba428ad60fe869e950474bd24075e2d414816eadf extends Twig_Template
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
                <h3>Preventivo <small>Nuovo > Base</small></h3>
            </div>
        </div>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
        echo "
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "client", array()), 'label');
        echo "
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "client", array()), 'widget');
        echo "
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text mx-0 px-0 py-0\">
                                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "tipo", array()), 'label');
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "tipo", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "square_meters", array()), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "square_meters", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "piani_casa", array()), 'label');
        echo "
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "piani_casa", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "riscaldamento", array()), 'label');
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "riscaldamento", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "opere_murarie", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "opere_murarie", array()), 'widget');
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "opere_murarie_intonaco", array()), 'label');
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "opere_murarie_intonaco", array()), 'widget');
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "opere_murarie_pietra", array()), 'label');
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "opere_murarie_pietra", array()), 'widget');
        echo "
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "trifase", array()), 'label');
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "trifase", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "sconto", array()), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "sconto", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(document).ready(function () {
                \$('#form_num_infissi').prop('disabled', true);
                \$('#nav-hide-btn-icon').trigger('click');
                //\$('#form_num_infissi_label').hide();
            });
            \$(document).on('change', '#form_square_meters', function () {
                dataChanged();
            });
            \$(document).on('change', '#form_level', function() {
                dataChanged();
            });
            function getData(tipo,dest) {
                if(meters) {
                    \$.ajax({
                        url: '../ajax/expertations/get/quadri/' + tipo + '/' + level + '/' + meters,
                        dataType: 'html',
                        success: function (data) {
                            \$(dest).val(data);
                        }
                    })
                }
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
                    \$('#form_num_infissi').prop('disabled', true);
                    //\$('#form_num_infissi_label').hide();
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                    \$('#form_num_infissi').prop('disabled', false);
                    //\$('#form_num_infissi_label').show();
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                    \$('#form_num_infissi').prop('disabled', false);
                    //\$('#form_num_infissi_label').show();
                }
                if(meters <= 75) {
                    \$('#form_kw').val(\"3\");
                } else {
                    \$('#form_kw').val(\"6\");
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
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->source); })()), "level", array()), 'label');
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "level", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->source); })()), "kw", array()), 'label');
        echo "
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "kw", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "cit_vid", array()), 'label');
        echo "
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->source); })()), "cit_vid", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->source); })()), "num_infissi", array()), 'label');
        echo "
                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->source); })()), "num_infissi", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->source); })()), "antenna", array()), 'label');
        echo "
                                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->source); })()), "antenna", array()), 'widget');
        echo "
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->source); })()), "campanello", array()), 'label');
        echo "
                                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), "campanello", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\"></div>
                        ";
        // line 176
        echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), "num_circuiti", array()), 'label');
        echo "
                                ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->source); })()), "num_circuiti", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 186, $this->source); })()), "num_prese_telefono_dati", array()), 'label');
        echo "
                                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 187, $this->source); })()), "num_prese_telefono_dati", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 192, $this->source); })()), "illum_sicurezza", array()), 'label');
        echo "
                                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->source); })()), "illum_sicurezza", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->source); })()), "spd", array()), 'label');
        echo "
                                ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 199, $this->source); })()), "spd", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-4 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->source); })()), "imp_ausiliari", array()), 'label');
        echo "
                                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->source); })()), "imp_ausiliari", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\" style=\"overflow-x: scroll\">
                        <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center\" style=\"background-color: #f2f8f9;\">
                                    <th style=\"max-width:20px; width: 20px; min-width: 20px;\">

                                    </th>
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
                                        Punti di Comando
                                    </th>
                                    <th>
                                        Tiranti
                                    </th>
                                    <th>
                                        ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 247, $this->source); })()), "c3n", array()), 'widget');
        echo "
                                    </th>
                                    <th>
                                        ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 250, $this->source); })()), "c4n", array()), 'widget');
        echo "
                                    </th>
                                    <th>
                                        ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->source); })()), "c5n", array()), 'widget');
        echo "
                                    </th>
                                </tr>
                            </tbody>
                            <tbody id=\"email-fields-list\" data-prototype='
                                </tr>
                                <td style=\"max-width:20px\">
                                        <button type=\"button\" class=\"remove-collection-widget btn  px-1 pl-2\" style=\"left: -10px; position: relative;\"><i class=\"fa fa-minus-square \"></i></button>
                                    </td>
                                    <td>
                                        ";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->source); })()), "floor", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 266, $this->source); })()), "ambient", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 269, $this->source); })()), "name", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->source); })()), "pp", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->source); })()), "pl", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 278, $this->source); })()), "pt", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 281, $this->source); })()), "c1v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->source); })()), "c2v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 287, $this->source); })()), "c3v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->source); })()), "c4v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->source); })()), "c5v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    ' data-widget-tags=\"";
        // line 295
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
                                    \$('#form_name_' + item).val(\$('#form_ambient_' + item + ' option:selected').text());
                                    change_tirante(val,item);
                                    toastr.info('Carico valori');
                                });
                            }
                            function update_total() {
                                val = Math.floor(Math.random() * (1000 - 10) + 10);
                                \$('#total').text(val + '.00 €');
                            }
                            function change_tirante(val,item) {
                                \$.ajax({
                                    url: '../ajax/expertation/get/tiranti/' + val,
                                    dataType: 'html',
                                    success: function (data) {
                                        if(\$('#form_c1n').val() === 'Tirante') {
                                            \$('#form_c1v_' + item).val(data);
                                        } else if(\$('#form_c2n').val() === 'Tirante') {
                                            \$('#form_c2v_' + item).val(data);
                                        }
                                    }
                                });
                            }

                        </script>
                    </div>
                    <button type=\"button\"
                            class=\"add-another-collection-widget btn btn-outline-primary btn-block mt-4\"
                            data-list=\"#email-fields-list\"><i class=\"fa fa-plus-circle\"></i>Aggiungi riga</button>
                    <script>
                        \$(document).ready(function () {
                            \$('.add-another-collection-widget').click(function (e) {
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
                                \$(newElem).children('.remove-collection-widget').attr('disabled','disabled');
                                \$('.remove-collection-widget').click(function(e) {
                                    e.preventDefault();

                                    \$(newElem).remove();

                                    return false;
                                });
                                \$(document).on('change', '#form_c1n', function () {
                                    change_tirante(\$(\"#form_ambient_\" + item).val(),item)
                                });
                                \$(document).on('change', '#form_c2n', function () {
                                    change_tirante(\$(\"#form_ambient_\" + item).val(),item)
                                });
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
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 399, $this->source); })()), "submit", array()), 'widget');
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
        // line 409
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 409, $this->source); })()), 'form_end');
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
        .form-check {
            margin-top: 0!important;
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

    // line 460
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 461
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/scrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 466
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 467
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 468
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
        return array (  770 => 468,  765 => 467,  756 => 466,  744 => 464,  740 => 463,  736 => 462,  731 => 461,  722 => 460,  661 => 409,  648 => 399,  541 => 295,  536 => 293,  530 => 290,  524 => 287,  518 => 284,  512 => 281,  506 => 278,  500 => 275,  494 => 272,  488 => 269,  482 => 266,  476 => 263,  463 => 253,  457 => 250,  451 => 247,  406 => 205,  402 => 204,  394 => 199,  390 => 198,  382 => 193,  378 => 192,  370 => 187,  366 => 186,  358 => 181,  354 => 180,  348 => 176,  341 => 167,  337 => 166,  333 => 165,  329 => 164,  321 => 159,  317 => 158,  309 => 153,  305 => 152,  297 => 147,  293 => 146,  285 => 141,  281 => 140,  207 => 69,  203 => 68,  195 => 63,  191 => 62,  184 => 58,  180 => 57,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  157 => 49,  153 => 48,  145 => 43,  141 => 42,  133 => 37,  129 => 36,  121 => 31,  117 => 30,  107 => 23,  101 => 20,  97 => 19,  87 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <h3>Preventivo <small>Nuovo > Base</small></h3>
            </div>
        </div>
        {{ form_start(form) }}
        {{ form_errors(form) }}
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
                                {{ form_label(form.square_meters) }}
                                {{ form_widget(form.square_meters) }}
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
                        <div class=\"col-lg-2\">
                                {{ form_label(form.opere_murarie) }}
                                {{ form_widget(form.opere_murarie) }}
                                {{ form_label(form.opere_murarie_intonaco) }}
                                {{ form_widget(form.opere_murarie_intonaco) }}
                                {{ form_label(form.opere_murarie_pietra) }}
                                {{ form_widget(form.opere_murarie_pietra) }}
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
        <script>
            \$(document).ready(function () {
                \$('#form_num_infissi').prop('disabled', true);
                \$('#nav-hide-btn-icon').trigger('click');
                //\$('#form_num_infissi_label').hide();
            });
            \$(document).on('change', '#form_square_meters', function () {
                dataChanged();
            });
            \$(document).on('change', '#form_level', function() {
                dataChanged();
            });
            function getData(tipo,dest) {
                if(meters) {
                    \$.ajax({
                        url: '../ajax/expertations/get/quadri/' + tipo + '/' + level + '/' + meters,
                        dataType: 'html',
                        success: function (data) {
                            \$(dest).val(data);
                        }
                    })
                }
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
                    \$('#form_num_infissi').prop('disabled', true);
                    //\$('#form_num_infissi_label').hide();
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                    \$('#form_num_infissi').prop('disabled', false);
                    //\$('#form_num_infissi_label').show();
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                    \$('#form_num_infissi').prop('disabled', false);
                    //\$('#form_num_infissi_label').show();
                }
                if(meters <= 75) {
                    \$('#form_kw').val(\"3\");
                } else {
                    \$('#form_kw').val(\"6\");
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
                                {{ form_label(form.kw) }}
                                {{ form_widget(form.kw) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                {{ form_label(form.cit_vid) }}
                                {{ form_widget(form.cit_vid) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                {{ form_label(form.num_infissi) }}
                                {{ form_widget(form.num_infissi) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input_group\">
                                {{ form_label(form.antenna) }}
                                {{ form_widget(form.antenna) }}
                                {{ form_label(form.campanello) }}
                                {{ form_widget(form.campanello) }}
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
                </div>
            </div>
        </div>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\" style=\"overflow-x: scroll\">
                        <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center\" style=\"background-color: #f2f8f9;\">
                                    <th style=\"max-width:20px; width: 20px; min-width: 20px;\">

                                    </th>
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
                                        Punti di Comando
                                    </th>
                                    <th>
                                        Tiranti
                                    </th>
                                    <th>
                                        {{ form_widget(form.c3n) }}
                                    </th>
                                    <th>
                                        {{ form_widget(form.c4n) }}
                                    </th>
                                    <th>
                                        {{ form_widget(form.c5n) }}
                                    </th>
                                </tr>
                            </tbody>
                            <tbody id=\"email-fields-list\" data-prototype='
                                </tr>
                                <td style=\"max-width:20px\">
                                        <button type=\"button\" class=\"remove-collection-widget btn  px-1 pl-2\" style=\"left: -10px; position: relative;\"><i class=\"fa fa-minus-square \"></i></button>
                                    </td>
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
                                        {{ form_widget(form.c1v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c2v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c3v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c4v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c5v.vars.prototype)|e }}
                                    </td>
                                    ' data-widget-tags=\"{{ '<tr></tr>'|e }}\">

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
                                    \$('#form_name_' + item).val(\$('#form_ambient_' + item + ' option:selected').text());
                                    change_tirante(val,item);
                                    toastr.info('Carico valori');
                                });
                            }
                            function update_total() {
                                val = Math.floor(Math.random() * (1000 - 10) + 10);
                                \$('#total').text(val + '.00 €');
                            }
                            function change_tirante(val,item) {
                                \$.ajax({
                                    url: '../ajax/expertation/get/tiranti/' + val,
                                    dataType: 'html',
                                    success: function (data) {
                                        if(\$('#form_c1n').val() === 'Tirante') {
                                            \$('#form_c1v_' + item).val(data);
                                        } else if(\$('#form_c2n').val() === 'Tirante') {
                                            \$('#form_c2v_' + item).val(data);
                                        }
                                    }
                                });
                            }

                        </script>
                    </div>
                    <button type=\"button\"
                            class=\"add-another-collection-widget btn btn-outline-primary btn-block mt-4\"
                            data-list=\"#email-fields-list\"><i class=\"fa fa-plus-circle\"></i>Aggiungi riga</button>
                    <script>
                        \$(document).ready(function () {
                            \$('.add-another-collection-widget').click(function (e) {
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
                                \$(newElem).children('.remove-collection-widget').attr('disabled','disabled');
                                \$('.remove-collection-widget').click(function(e) {
                                    e.preventDefault();

                                    \$(newElem).remove();

                                    return false;
                                });
                                \$(document).on('change', '#form_c1n', function () {
                                    change_tirante(\$(\"#form_ambient_\" + item).val(),item)
                                });
                                \$(document).on('change', '#form_c2n', function () {
                                    change_tirante(\$(\"#form_ambient_\" + item).val(),item)
                                });
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
        .form-check {
            margin-top: 0!important;
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
{% endblock %}", "expertations/new.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/new.html.twig");
    }
}
