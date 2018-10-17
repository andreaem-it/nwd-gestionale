<?php

/* template/navbar.html.twig */
class __TwigTemplate_50d24b1a4d50b7d97e4a4ab0de04effa040042e95c58695c74961d852dd1042f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row\" style=\"background: #759EB8!important;\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-top justify-content-center\" style=\"background: none\">
        <a class=\"navbar-brand brand-logo hidden-md-down\" href=\"index.html\">
          <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_nwd_mini.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"height:100%!important\"/>
        </a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\" style=\"min-width: 130px;margin-left: 60px;\">
          <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_nwd_mini.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"height:100%!important;width: 350px\"/>
        </a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center\">
        <ul class=\"navbar-nav navbar-nav-left header-links d-none d-md-flex\">
            ";
        // line 25
        echo "        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"currentTime\"></a>
            <script>
                var clock = 0;
                var interval_msec = 1000;
                \$(document).ready( function() {
                    clock = setTimeout(\"UpdateClock()\", interval_msec);
                });
                function UpdateClock(){
                    clearTimeout(clock);
                    var dt_now = new Date();
                    var hh\t= dt_now.getUTCHours();
                    var mm\t= dt_now.getUTCMinutes();
                    var ss\t= dt_now.getUTCSeconds();
                    var dd  = dt_now.getUTCDate();
                    var mo  = dt_now.getUTCMonth() + 1;
                    var yy  = dt_now.getUTCFullYear();
                    if(dd < 10){
                        dd = \"0\" + dd;
                    }
                    if(mo < 10){
                        mo = \"0\" + mo;
                    }
                    if(hh < 10){
                        hh = \"0\" + hh;
                    }
                    if(mm < 10){
                        mm = \"0\" + mm;
                    }
                    if(ss < 10){
                        ss = \"0\" + ss;
                    }
                    \$(\"#currentTime\").html(dd + \"/\" + mo + \"/\" + yy + \" \" + hh + \":\" + mm + \":\" + ss);
                    clock = setTimeout(\"UpdateClock()\", interval_msec);

                }
            </script>
          </li>
          <li class=\"nav-item dropdown d-none d-xl-inline-block\">
            <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"profile-text\">
                ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "                    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->source); })()), "user", array()), "username", array())), "html", null, true);
            echo "
                ";
        }
        // line 71
        echo "              </span>
              <img class=\"img-xs rounded-circle\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "user", array()), "picture", array()))), "html", null, true);
        echo "\" alt=\"Profile image\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
              <a class=\"dropdown-item p-0\">
                <div class=\"d-flex border-bottom\">
                  ";
        // line 78
        echo "                    ";
        // line 79
        echo "                  ";
        // line 80
        echo "                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center border-left\">
                      ";
        // line 81
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->source); })()), "user", array()), "username", array())), "html", null, true);
        echo "
                  </div>
                  <a class=\"py-3 px-4 d-flex align-items-center justify-content-center border-right\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_profile_show");
        echo "\">
                    <i class=\"mdi mdi-account-outline mr-0 text-gray\"></i>
                  </a>
                  ";
        // line 87
        echo "                    ";
        // line 88
        echo "                  ";
        // line 89
        echo "                </div>
              </a>
              <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_change_password");
        echo "\" class=\"dropdown-item\">
                Cambia Password
              </a>
              <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"dropdown-item\">
                Esci
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"mdi mdi-menu\"></span>
        </button>
        <script>
          \$('.navbar-toggler').click( function(e) {
              e.preventDefault();

              \$('.sidebar-offcanvas').toggleClass('sidebar-open');
          })
        </script>
        <style>
          .sidebar-open{
            right: 0px;
          }
        </style>
      </div>
    </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  144 => 94,  138 => 91,  134 => 89,  132 => 88,  130 => 87,  124 => 83,  119 => 81,  116 => 80,  114 => 79,  112 => 78,  104 => 72,  101 => 71,  95 => 69,  93 => 68,  48 => 25,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row\" style=\"background: #759EB8!important;\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-top justify-content-center\" style=\"background: none\">
        <a class=\"navbar-brand brand-logo hidden-md-down\" href=\"index.html\">
          <img src=\"{{ asset('images/logo_nwd_mini.png') }}\" alt=\"logo\" style=\"height:100%!important\"/>
        </a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\" style=\"min-width: 130px;margin-left: 60px;\">
          <img src=\"{{ asset('images/logo_nwd_mini.png') }}\" alt=\"logo\" style=\"height:100%!important;width: 350px\"/>
        </a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center\">
        <ul class=\"navbar-nav navbar-nav-left header-links d-none d-md-flex\">
            {#<li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\">Preventivi
                <span class=\"badge badge-primary ml-1\"></span>
              </a>
            </li>
            <li class=\"nav-item active\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-elevation-rise\"></i>Reports</a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-bookmark-plus-outline\"></i>Score</a>
            </li>#}
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"currentTime\"></a>
            <script>
                var clock = 0;
                var interval_msec = 1000;
                \$(document).ready( function() {
                    clock = setTimeout(\"UpdateClock()\", interval_msec);
                });
                function UpdateClock(){
                    clearTimeout(clock);
                    var dt_now = new Date();
                    var hh\t= dt_now.getUTCHours();
                    var mm\t= dt_now.getUTCMinutes();
                    var ss\t= dt_now.getUTCSeconds();
                    var dd  = dt_now.getUTCDate();
                    var mo  = dt_now.getUTCMonth() + 1;
                    var yy  = dt_now.getUTCFullYear();
                    if(dd < 10){
                        dd = \"0\" + dd;
                    }
                    if(mo < 10){
                        mo = \"0\" + mo;
                    }
                    if(hh < 10){
                        hh = \"0\" + hh;
                    }
                    if(mm < 10){
                        mm = \"0\" + mm;
                    }
                    if(ss < 10){
                        ss = \"0\" + ss;
                    }
                    \$(\"#currentTime\").html(dd + \"/\" + mo + \"/\" + yy + \" \" + hh + \":\" + mm + \":\" + ss);
                    clock = setTimeout(\"UpdateClock()\", interval_msec);

                }
            </script>
          </li>
          <li class=\"nav-item dropdown d-none d-xl-inline-block\">
            <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"profile-text\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ app.user.username|capitalize }}
                {% endif %}
              </span>
              <img class=\"img-xs rounded-circle\" src=\"{{ asset('users/' ~ app.user.picture) }}\" alt=\"Profile image\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
              <a class=\"dropdown-item p-0\">
                <div class=\"d-flex border-bottom\">
                  {#<div class=\"py-3 px-4 d-flex align-items-center justify-content-center\">#}
                    {#<i class=\"mdi mdi-bookmark-plus-outline mr-0 text-gray\"></i>#}
                  {#</div>#}
                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center border-left\">
                      {{ app.user.username|capitalize }}
                  </div>
                  <a class=\"py-3 px-4 d-flex align-items-center justify-content-center border-right\" href=\"{{ url('fos_user_profile_show') }}\">
                    <i class=\"mdi mdi-account-outline mr-0 text-gray\"></i>
                  </a>
                  {#<div class=\"py-3 px-4 d-flex align-items-center justify-content-center\">#}
                    {#<i class=\"mdi mdi-alarm-check mr-0 text-gray\"></i>#}
                  {#</div>#}
                </div>
              </a>
              <a href=\"{{ url('security_change_password') }}\" class=\"dropdown-item\">
                Cambia Password
              </a>
              <a href=\"{{ path('logout') }}\" class=\"dropdown-item\">
                Esci
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"mdi mdi-menu\"></span>
        </button>
        <script>
          \$('.navbar-toggler').click( function(e) {
              e.preventDefault();

              \$('.sidebar-offcanvas').toggleClass('sidebar-open');
          })
        </script>
        <style>
          .sidebar-open{
            right: 0px;
          }
        </style>
      </div>
    </nav>", "template/navbar.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/template/navbar.html.twig");
    }
}
