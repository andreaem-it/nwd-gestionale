<?php

/* security/login.html.twig */
class __TwigTemplate_e4767aa3c20506bb8ef187e7c972615e52d949f3405796fd7e13a780e6777d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>NWD ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iconfonts/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/css/vendor.bundle.addons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container-scroller\">
            <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
                <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
                    <div class=\"row w-100\">
                        <div class=\"col-lg-4 mx-auto\">
                            <div class=\"auto-form-wrapper\">
                                <img class=\"mx-auto d-block mt-3 mb-3\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_nwd_mini.png"), "html", null, true);
        echo "\" style=\"width:100%\">
                                <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                                    ";
        // line 27
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 28
            echo "                                        <div class=\"\">
                                            <div class=\"alert alert-danger\">
                                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    ";
        }
        // line 35
        echo "                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"label\">Username</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                            <div class=\"input-group-append\">
                                  <span class=\"input-group-text\">
                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"label\">Password</label>
                                        <div class=\"input-group\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary submit-btn btn-block\">Accedi</button>
                                    </div>
                                    <div class=\"form-group d-flex justify-content-between\">
                                        <div class=\"form-check form-check-flat mt-0\">
                                            <label class=\"form-check-label\">
                                                <input type=\"checkbox\" class=\"form-check-input\" checked> Ricordami
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class=\"footer-text text-center mt-5\">copyright © ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " NWD srl. All rights reserved.</p>
                        </div>
                    </div>
                </div>
        <!-- content-wrapper ends -->
            </div>
        </div>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/js/vendor.bundle.addons.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/off-canvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/misc.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accesso";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 12,  178 => 6,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  140 => 71,  123 => 57,  101 => 38,  96 => 35,  88 => 30,  84 => 28,  82 => 27,  78 => 26,  74 => 25,  62 => 16,  57 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>NWD {% block title %} Accesso{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/vendor.bundle.base.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/vendor.bundle.addons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% block stylesheets %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container-scroller\">
            <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
                <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
                    <div class=\"row w-100\">
                        <div class=\"col-lg-4 mx-auto\">
                            <div class=\"auto-form-wrapper\">
                                <img class=\"mx-auto d-block mt-3 mb-3\" src=\"{{ asset('images/logo_nwd_mini.png') }}\" style=\"width:100%\">
                                <form action=\"{{ path('login') }}\" method=\"post\">
                                    {% if error %}
                                        <div class=\"\">
                                            <div class=\"alert alert-danger\">
                                                {{ error.messageKey|trans(error.messageData, 'security') }}
                                            </div>
                                        </div>

                                    {% endif %}
                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"label\">Username</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
                                            <div class=\"input-group-append\">
                                  <span class=\"input-group-text\">
                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"label\">Password</label>
                                        <div class=\"input-group\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary submit-btn btn-block\">Accedi</button>
                                    </div>
                                    <div class=\"form-group d-flex justify-content-between\">
                                        <div class=\"form-check form-check-flat mt-0\">
                                            <label class=\"form-check-label\">
                                                <input type=\"checkbox\" class=\"form-check-input\" checked> Ricordami
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class=\"footer-text text-center mt-5\">copyright © {{ \"now\"|date(\"Y\") }} NWD srl. All rights reserved.</p>
                        </div>
                    </div>
                </div>
        <!-- content-wrapper ends -->
            </div>
        </div>
        <script src=\"{{ asset('vendors/js/vendor.bundle.base.js') }}\"></script>
        <script src=\"{{ asset('vendors/js/vendor.bundle.addons.js') }}\"></script>
        <script src=\"{{ asset('js/off-canvas.js') }}\"></script>
        <script src=\"{{ asset('js/misc.js') }}\"></script>
    </body>
</html>


", "security/login.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/security/login.html.twig");
    }
}
