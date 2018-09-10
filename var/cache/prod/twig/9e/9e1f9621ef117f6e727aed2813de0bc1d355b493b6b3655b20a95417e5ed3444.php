<?php

/* template/navbar.html.twig */
class __TwigTemplate_89786b11aac170c4d95687ebfe27fae6c4f19bb5b85cf417aa5a4d5242f0d6d0 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-top justify-content-center\">
        <a class=\"navbar-brand brand-logo\" href=\"index.html\">
          <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_nwd_mini.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"height:100%!important\"/>
        </a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
          <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_nwd_mini.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"height:100%!important\"/>
        </a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center\">
        <ul class=\"navbar-nav navbar-nav-left header-links d-none d-md-flex\">
            ";
        // line 25
        echo "        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          ";
        // line 137
        echo "          <li class=\"nav-item dropdown d-none d-xl-inline-block\">
            <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"profile-text\">
                ";
        // line 140
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 141
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        }
        // line 143
        echo "              </span>
              <img class=\"img-xs rounded-circle\" src=\"images/faces/face1.jpg\" alt=\"Profile image\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
              <a class=\"dropdown-item p-0\">
                <div class=\"d-flex border-bottom\">
                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center\">
                    <i class=\"mdi mdi-bookmark-plus-outline mr-0 text-gray\"></i>
                  </div>
                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center border-left border-right\">
                    <i class=\"mdi mdi-account-outline mr-0 text-gray\"></i>
                  </div>
                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center\">
                    <i class=\"mdi mdi-alarm-check mr-0 text-gray\"></i>
                  </div>
                </div>
              </a>
              <a class=\"dropdown-item\">
                Cambia Password
              </a>
              <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"dropdown-item\">
                Esci
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"mdi mdi-menu\"></span>
        </button>
      </div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "template/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 163,  55 => 143,  49 => 141,  47 => 140,  42 => 137,  38 => 25,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/navbar.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/template/navbar.html.twig");
    }
}
