<?php

/* expertations/edit.html.twig */
class __TwigTemplate_0fcfc6ea52db5e8106fcb83228eaf886e27f4987ecf9591aeb6bfd5864163f96 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/edit.html.twig"));

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
                <h3>Preventivo <small>Modifica > Base</small></h3>
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
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "pid", array()), 'label');
        echo "
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "pid", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "client", array()), 'label');
        echo "
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "client", array()), 'widget');
        echo "
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text mx-0 px-0 py-0\">
                                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\" class=\"btn btn-outline-success mx-0 px-2\">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "tipo", array()), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "tipo", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "square_meters", array()), 'label');
        echo "
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "square_meters", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "piani_casa", array()), 'label');
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "piani_casa", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "riscaldamento", array()), 'label');
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "riscaldamento", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "opere_murarie", array()), 'label');
        echo "
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "opere_murarie", array()), 'widget');
        echo "
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "opere_murarie_intonaco", array()), 'label');
        echo "
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "opere_murarie_intonaco", array()), 'widget');
        echo "
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "opere_murarie_pietra", array()), 'label');
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "opere_murarie_pietra", array()), 'widget');
        echo "
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
            \$(function() {
                /*\$('.freeze-table').freezeTable({
                    'freezeColumn': false,
                    'freezeHead' : true,
                    'callback' : function() {
                    },
                    'headWrapStyles' : {'style':'margin-top:60px'},
                    'fixedNavbar' : 'navbar'
                });*/
            });

            \$(document).ready(function () {
                \$('#form_num_infissi').prop('disabled', true);
                \$('#nav-hide-btn-icon').trigger('click');
                //\$('#form_num_infissi_label').hide();
                \$('#form_allarme').change(function() {
                    if(this.checked) {
                        \$('#form_num_infissi').prop('disabled', false);
                    } else {
                        \$('#form_num_infissi').prop('disabled', true);
                    }
                })
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
                getData(2,'#form_num_prese_dati');
                getData(3,'#form_illum_sicurezza');

                if (level === \"1\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"1\");
                    //\$('#form_num_infissi_label').hide();
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                    //\$('#form_num_infissi_label').show();
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                    //\$('#form_num_infissi_label').show();
                }
                if(meters <= 75) {
                    \$('#form_kw').val(\"3\");
                } else {
                    \$('#form_kw').val(\"6\");
                }
            }

            var v = \$(\"#form_num_prese_dati\").val(); //Let's say this is the value from PHP....
            var preVal = 0;

            \$(\"#form_num_prese_dati\").val(v);

            \$(\"#form_num_prese_telefono\").on(\"change keyup keydown\", function(event) {
                let currVal = parseInt(\$(\"#form_num_prese_telefono\").val());

                console.log(preVal);
                console.log(currVal);

                // store current positions in variables
                var start = this.selectionStart,
                    end = this.selectionEnd;

                if (!currVal || currVal == 0) {
                    preVal = 0;
                    \$(\"#form_num_prese_telefono\").val(v);
                } else if (currVal <= v) {
                    \$(\"#form_num_prese_dati\").val((v - currVal) == 0 ? 0 : (v - currVal));
                    preVal = currVal;
                } else {
                    \$(\"#form_num_prese_telefono\").val(v);
                }

                this.setSelectionRange(start, end);

            });
        </script>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body pb-2\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->source); })()), "level", array()), 'label');
        echo "
                                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->source); })()), "level", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 188, $this->source); })()), "kw", array()), 'label');
        echo "
                                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->source); })()), "kw", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 194, $this->source); })()), "trifase", array()), 'label');
        echo "
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 195, $this->source); })()), "trifase", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->source); })()), "cit_vid", array()), 'label');
        echo "
                                ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->source); })()), "cit_vid", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 206, $this->source); })()), "num_infissi", array()), 'label');
        echo "
                                ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->source); })()), "num_infissi", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 212, $this->source); })()), "antenna", array()), 'label');
        echo "
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->source); })()), "antenna", array()), 'widget');
        echo "
                                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 214, $this->source); })()), "campanello", array()), 'label');
        echo "
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 215, $this->source); })()), "campanello", array()), 'widget');
        echo "
                                ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 216, $this->source); })()), "allarme", array()), 'label');
        echo "
                                ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 217, $this->source); })()), "allarme", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 222, $this->source); })()), "illum_esterna", array()), 'label');
        echo "
                                ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 223, $this->source); })()), "illum_esterna", array()), 'widget');
        echo "
                            </div>
                        </div>
                        ";
        // line 231
        echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->source); })()), "num_circuiti", array()), 'label');
        echo "
                                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->source); })()), "num_circuiti", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->source); })()), "num_prese_dati", array()), 'label');
        echo "
                                ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->source); })()), "num_prese_dati", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 247, $this->source); })()), "num_prese_telefono", array()), 'label');
        echo "
                                ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 248, $this->source); })()), "num_prese_telefono", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->source); })()), "illum_sicurezza", array()), 'label');
        echo "
                                ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 254, $this->source); })()), "illum_sicurezza", array()), 'widget');
        echo "
                                ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 255, $this->source); })()), "lampada", array()), 'label');
        echo "
                                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 256, $this->source); })()), "lampada", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"input-group\">
                                ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 261, $this->source); })()), "spd", array()), 'label');
        echo "
                                ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 262, $this->source); })()), "spd", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"input-group\">
                                ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 267, $this->source); })()), "imp_ausiliari", array()), 'label');
        echo "
                                ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 268, $this->source); })()), "imp_ausiliari", array()), 'widget');
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
                    <div class=\"row\">
                        <div class=\"freeze-table\">
                            <table class=\"table table-hover table-responsive-lg float-right\" style=\"display: block !important;\">
                                <thead id=\"table-head\" class=\"table-light\">
                                <th style=\"max-width:20px; width: 20px; min-width: 20px;\"></th>
                                <th>
                                    Piano
                                </th>
                                <th class=\"tbl-lg\">
                                    Ambiente
                                </th>
                                <th  style=\"min-width:270px\" class=\"tbl-lg\">
                                    Nome
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti prese
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti Luce
                                </th>
                                <th style=\"min-width:150px\">
                                    Prese TV
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti di Comando
                                </th>
                                <th style=\"min-width:150px\">
                                    Tiranti
                                </th>
                                ";
        // line 316
        echo "                                </thead>
                                ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->source); })()), "floor", array()), "vars", array()), "prototype", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 318
            echo "                                    <td>
                                        ";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 319, $this->source); })()), "floor", array()), "vars", array()), "prototype", array()), 'widget'));
            echo "
                                    </td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                                <tbody id=\"email-fields-list\" data-prototype='
                                </tr>
                                <td style=\"max-width:20px\">
                                        <button type=\"button\" class=\"remove-collection-widget btn  px-1 pl-2\" style=\"left: -10px; position: relative;\"><i class=\"fa fa-minus-square \"></i></button>
                                    </td>
                                    <td>
                                        ";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 328, $this->source); })()), "floor", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 331, $this->source); })()), "ambient", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:270px\">
                                        ";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 334, $this->source); })()), "name", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:150px\">
                                        ";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 337, $this->source); })()), "pp", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:150px\">
                                        ";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 340, $this->source); })()), "pl", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:150px\">
                                        ";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 343, $this->source); })()), "pt", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:150px\">
                                        ";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->source); })()), "c1v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    <td style=\"min-width:150px\">
                                        ";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 349, $this->source); })()), "c2v", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "
                                    </td>
                                    ";
        // line 360
        echo "                                    ' data-widget-tags=\"";
        echo twig_escape_filter($this->env, "<tr></tr>");
        echo "\">

                                </tbody>

                            </table>
                        </div>

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
                        window.onbeforeunload = function() {
                            alert('You have unsaved changes!');
                        };
                        var unloadEvent = function (e) {
                            var confirmationMessage = \"Warning: Leaving this page will result in any unsaved data being lost. Are you sure you wish to continue?\";
                            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                            return confirmationMessage; //Webkit, Safari, Chrome etc.
                        };
                        window.addEventListener(\"beforeunload\", unloadEvent);
                        \$(document).ready(function () {
                            \$('.add-another-collection-widget').click(function (e) {
                                var list = jQuery(jQuery(this).attr('data-list'));
                                var counter = list.data('widget-counter') | list.children().length;
                                if (!counter) { counter = list.children().length; }
                                var newWidget = list.attr('data-prototype');
                                newWidget = newWidget.replace(/__name__/g, counter);
                                changed(counter);
                                dataChanged();
                                var newcount = counter - 1;
                                var exval = \$(\"#form_floor_\" + newcount).val();
                                console.log(exval);
                                console.log(\"#form_floor_\" + counter);
                                counter++;
                                console.log(\$(\"#form_floor_\" + (counter + 1) ).val());
                                list.data(' widget-counter', counter);
                                var newElem = jQuery(list.attr('data-widget-tags')).append(newWidget);
                                newElem.appendTo(list);
                                \$(\"#form_floor_\" + (counter + 1)).val(exval);
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
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 480, $this->source); })()), "submit", array()), 'widget');
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
        // line 490
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 490, $this->source); })()), 'form_end');
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

    // line 541
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 542
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/scrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 547
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 548
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 549,  856 => 548,  847 => 547,  835 => 545,  831 => 544,  827 => 543,  822 => 542,  813 => 541,  752 => 490,  739 => 480,  615 => 360,  610 => 349,  604 => 346,  598 => 343,  592 => 340,  586 => 337,  580 => 334,  574 => 331,  568 => 328,  560 => 322,  551 => 319,  548 => 318,  544 => 317,  541 => 316,  499 => 268,  495 => 267,  487 => 262,  483 => 261,  475 => 256,  471 => 255,  467 => 254,  463 => 253,  455 => 248,  451 => 247,  443 => 242,  439 => 241,  431 => 236,  427 => 235,  421 => 231,  415 => 223,  411 => 222,  403 => 217,  399 => 216,  395 => 215,  391 => 214,  387 => 213,  383 => 212,  375 => 207,  371 => 206,  363 => 201,  359 => 200,  351 => 195,  347 => 194,  339 => 189,  335 => 188,  327 => 183,  323 => 182,  207 => 69,  203 => 68,  196 => 64,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  169 => 55,  165 => 54,  157 => 49,  153 => 48,  145 => 43,  141 => 42,  133 => 37,  129 => 36,  119 => 29,  113 => 26,  109 => 25,  101 => 20,  97 => 19,  87 => 12,  83 => 11,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <h3>Preventivo <small>Modifica > Base</small></h3>
            </div>
        </div>
        {{ form_start(form) }}
        {{ form_errors(form) }}
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                {{ form_label(form.pid) }}
                                {{ form_widget(form.pid) }}
                            </div>
                        </div>
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
                                {{ form_label(form.sconto) }}
                                {{ form_widget(form.sconto) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(function() {
                /*\$('.freeze-table').freezeTable({
                    'freezeColumn': false,
                    'freezeHead' : true,
                    'callback' : function() {
                    },
                    'headWrapStyles' : {'style':'margin-top:60px'},
                    'fixedNavbar' : 'navbar'
                });*/
            });

            \$(document).ready(function () {
                \$('#form_num_infissi').prop('disabled', true);
                \$('#nav-hide-btn-icon').trigger('click');
                //\$('#form_num_infissi_label').hide();
                \$('#form_allarme').change(function() {
                    if(this.checked) {
                        \$('#form_num_infissi').prop('disabled', false);
                    } else {
                        \$('#form_num_infissi').prop('disabled', true);
                    }
                })
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
                getData(2,'#form_num_prese_dati');
                getData(3,'#form_illum_sicurezza');

                if (level === \"1\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"1\");
                    //\$('#form_num_infissi_label').hide();
                }
                if (level === \"2\") {
                    \$('#form_spd').val(\"1\");
                    \$('#form_imp_ausiliari').val(\"2\");
                    //\$('#form_num_infissi_label').show();
                }
                if (level === \"3\") {
                    \$('#form_spd').val(\"2\");
                    \$('#form_imp_ausiliari').val(\"3\");
                    //\$('#form_num_infissi_label').show();
                }
                if(meters <= 75) {
                    \$('#form_kw').val(\"3\");
                } else {
                    \$('#form_kw').val(\"6\");
                }
            }

            var v = \$(\"#form_num_prese_dati\").val(); //Let's say this is the value from PHP....
            var preVal = 0;

            \$(\"#form_num_prese_dati\").val(v);

            \$(\"#form_num_prese_telefono\").on(\"change keyup keydown\", function(event) {
                let currVal = parseInt(\$(\"#form_num_prese_telefono\").val());

                console.log(preVal);
                console.log(currVal);

                // store current positions in variables
                var start = this.selectionStart,
                    end = this.selectionEnd;

                if (!currVal || currVal == 0) {
                    preVal = 0;
                    \$(\"#form_num_prese_telefono\").val(v);
                } else if (currVal <= v) {
                    \$(\"#form_num_prese_dati\").val((v - currVal) == 0 ? 0 : (v - currVal));
                    preVal = currVal;
                } else {
                    \$(\"#form_num_prese_telefono\").val(v);
                }

                this.setSelectionRange(start, end);

            });
        </script>
        <div class=\"mt-3\">
            <div class=\"card\">
                <div class=\"card-body pb-2\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.level) }}
                                {{ form_widget(form.level) }}
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
                                {{ form_label(form.trifase) }}
                                {{ form_widget(form.trifase) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.cit_vid) }}
                                {{ form_widget(form.cit_vid) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_infissi) }}
                                {{ form_widget(form.num_infissi) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2 grid-margin stretch-card\">
                            <div class=\"input-group\">
                                {{ form_label(form.antenna) }}
                                {{ form_widget(form.antenna) }}
                                {{ form_label(form.campanello) }}
                                {{ form_widget(form.campanello) }}
                                {{ form_label(form.allarme) }}
                                {{ form_widget(form.allarme) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                {{ form_label((form.illum_esterna)) }}
                                {{ form_widget((form.illum_esterna)) }}
                            </div>
                        </div>
                        {#<div class=\"col-lg-3 grid-margin stretch-card\">
                            <div class=\"mt-5\">
                                <h4>Totale Preliminare: <span id=\"total\" class=\"text-success text-right\">0.00 €</span></h4>
                            </div>
                        </div>#}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_circuiti) }}
                                {{ form_widget(form.num_circuiti) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_prese_dati) }}
                                {{ form_widget(form.num_prese_dati) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"input-group\">
                                {{ form_label(form.num_prese_telefono) }}
                                {{ form_widget(form.num_prese_telefono) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"input-group\">
                                {{ form_label(form.illum_sicurezza) }}
                                {{ form_widget(form.illum_sicurezza) }}
                                {{ form_label(form.lampada) }}
                                {{ form_widget(form.lampada) }}
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"input-group\">
                                {{ form_label(form.spd) }}
                                {{ form_widget(form.spd) }}
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
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
                    <div class=\"row\">
                        <div class=\"freeze-table\">
                            <table class=\"table table-hover table-responsive-lg float-right\" style=\"display: block !important;\">
                                <thead id=\"table-head\" class=\"table-light\">
                                <th style=\"max-width:20px; width: 20px; min-width: 20px;\"></th>
                                <th>
                                    Piano
                                </th>
                                <th class=\"tbl-lg\">
                                    Ambiente
                                </th>
                                <th  style=\"min-width:270px\" class=\"tbl-lg\">
                                    Nome
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti prese
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti Luce
                                </th>
                                <th style=\"min-width:150px\">
                                    Prese TV
                                </th>
                                <th style=\"min-width:150px\">
                                    Punti di Comando
                                </th>
                                <th style=\"min-width:150px\">
                                    Tiranti
                                </th>
                                {#<th>
                                    {{ form_widget(form.c3n) }}
                                </th>
                                <th>
                                    {{ form_widget(form.c4n) }}
                                </th>
                                <th>
                                    {{ form_widget(form.c5n) }}
                                </th>#}
                                </thead>
                                {% for items in form.floor.vars.prototype|e %}
                                    <td>
                                        {{ form_widget(form.floor.vars.prototype)|e }}
                                    </td>
                                {% endfor %}
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
                                    <td style=\"min-width:270px\">
                                        {{ form_widget(form.name.vars.prototype)|e }}
                                    </td>
                                    <td style=\"min-width:150px\">
                                        {{ form_widget(form.pp.vars.prototype)|e }}
                                    </td>
                                    <td style=\"min-width:150px\">
                                        {{ form_widget(form.pl.vars.prototype)|e }}
                                    </td>
                                    <td style=\"min-width:150px\">
                                        {{ form_widget(form.pt.vars.prototype)|e }}
                                    </td>
                                    <td style=\"min-width:150px\">
                                        {{ form_widget(form.c1v.vars.prototype)|e }}
                                    </td>
                                    <td style=\"min-width:150px\">
                                        {{ form_widget(form.c2v.vars.prototype)|e }}
                                    </td>
                                    {#<td>
                                        {{ form_widget(form.c3v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c4v.vars.prototype)|e }}
                                    </td>
                                    <td>
                                        {{ form_widget(form.c5v.vars.prototype)|e }}
                                    </td>#}
                                    ' data-widget-tags=\"{{ '<tr></tr>'|e }}\">

                                </tbody>

                            </table>
                        </div>

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
                        window.onbeforeunload = function() {
                            alert('You have unsaved changes!');
                        };
                        var unloadEvent = function (e) {
                            var confirmationMessage = \"Warning: Leaving this page will result in any unsaved data being lost. Are you sure you wish to continue?\";
                            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                            return confirmationMessage; //Webkit, Safari, Chrome etc.
                        };
                        window.addEventListener(\"beforeunload\", unloadEvent);
                        \$(document).ready(function () {
                            \$('.add-another-collection-widget').click(function (e) {
                                var list = jQuery(jQuery(this).attr('data-list'));
                                var counter = list.data('widget-counter') | list.children().length;
                                if (!counter) { counter = list.children().length; }
                                var newWidget = list.attr('data-prototype');
                                newWidget = newWidget.replace(/__name__/g, counter);
                                changed(counter);
                                dataChanged();
                                var newcount = counter - 1;
                                var exval = \$(\"#form_floor_\" + newcount).val();
                                console.log(exval);
                                console.log(\"#form_floor_\" + counter);
                                counter++;
                                console.log(\$(\"#form_floor_\" + (counter + 1) ).val());
                                list.data(' widget-counter', counter);
                                var newElem = jQuery(list.attr('data-widget-tags')).append(newWidget);
                                newElem.appendTo(list);
                                \$(\"#form_floor_\" + (counter + 1)).val(exval);
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
{% endblock %}", "expertations/edit.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/edit.html.twig");
    }
}
