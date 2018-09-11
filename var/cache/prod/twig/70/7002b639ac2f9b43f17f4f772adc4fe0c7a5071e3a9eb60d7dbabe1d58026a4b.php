<?php

/* security/login.html.twig */
class __TwigTemplate_8d81565a7dea0e74981d900c9969131b950d81b6b5705962d30091293c584738 extends Twig_Template
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
        echo "\">
                                <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                                    ";
        // line 27
        if (($context["error"] ?? null)) {
            // line 28
            echo "                                        <div class=\"\">
                                            <div class=\"alert alert-danger\">
                                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    ";
        }
        // line 35
        echo "                                    <div class=\"form-group\">
                                        <label class=\"label\">Username</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Username\">
                                            <div class=\"input-group-append\">
                                  <span class=\"input-group-text\">
                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"label\">Password</label>
                                        <div class=\"input-group\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"*********\">
                                            <div class=\"input-group-append\">
                                  <span class=\"input-group-text\">
                                    <i class=\"mdi mdi-check-circle-outline\"></i>
                                  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary submit-btn btn-block\">Login</button>
                                    </div>
                                    <div class=\"form-group d-flex justify-content-between\">
                                        <div class=\"form-check form-check-flat mt-0\">
                                            <label class=\"form-check-label\">
                                                <input type=\"checkbox\" class=\"form-check-input\" checked> Keep me signed in
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class=\"footer-text text-center\">copyright © 2018 NWD srl. All rights reserved.</p>
                        </div>
                    </div>
                </div>
        <!-- content-wrapper ends -->
            </div>
        </div>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/js/vendor.bundle.addons.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/off-canvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/misc.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>


";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
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
        return array (  163 => 12,  158 => 6,  148 => 79,  144 => 78,  140 => 77,  136 => 76,  95 => 38,  90 => 35,  82 => 30,  78 => 28,  76 => 27,  72 => 26,  68 => 25,  56 => 16,  51 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  28 => 6,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/security/login.html.twig");
    }
}
