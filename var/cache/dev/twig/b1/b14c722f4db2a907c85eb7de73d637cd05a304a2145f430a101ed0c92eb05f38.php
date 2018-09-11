<?php

/* template/navbar.html.twig */
class __TwigTemplate_90cc60dca8be6d7ca0abee22cf538a7f6ba33b6e44a06a547466cd1c239f37a6 extends Twig_Template
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
          ";
        // line 137
        echo "          <li class=\"nav-item dropdown d-none d-xl-inline-block\">
            <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"profile-text\">
                ";
        // line 140
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 141
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 141, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        }
        // line 143
        echo "              </span>
              <img class=\"img-xs rounded-circle\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faces-clipart/pic-1.png"), "html", null, true);
        echo "\" alt=\"Profile image\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
              <a class=\"dropdown-item p-0\">
                <div class=\"d-flex border-bottom\">
                  ";
        // line 150
        echo "                    ";
        // line 151
        echo "                  ";
        // line 152
        echo "                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center border-left\">
                      ";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 153, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "
                  </div>
                  <a class=\"py-3 px-4 d-flex align-items-center justify-content-center border-right\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_profile_show");
        echo "\">
                    <i class=\"mdi mdi-account-outline mr-0 text-gray\"></i>
                  </a>
                  ";
        // line 159
        echo "                    ";
        // line 160
        echo "                  ";
        // line 161
        echo "                </div>
              </a>
              <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_change_password");
        echo "\" class=\"dropdown-item\">
                Cambia Password
              </a>
              <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
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
        return array (  108 => 166,  102 => 163,  98 => 161,  96 => 160,  94 => 159,  88 => 155,  83 => 153,  80 => 152,  78 => 151,  76 => 150,  68 => 144,  65 => 143,  59 => 141,  57 => 140,  52 => 137,  48 => 25,  40 => 7,  34 => 4,  29 => 1,);
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
          {#<li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <i class=\"mdi mdi-file-document-box\"></i>
              <span class=\"count\">7</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
              <div class=\"dropdown-item\">
                <p class=\"mb-0 font-weight-normal float-left\">You have 7 unread mails
                </p>
                <span class=\"badge badge-info badge-pill float-right\">View all</span>
              </div>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey
                    <span class=\"float-right font-weight-light small-text\">1 Minutes ago</span>
                  </h6>
                  <p class=\"font-weight-light small-text\">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-medium text-dark\">Tim Cook
                    <span class=\"float-right font-weight-light small-text\">15 Minutes ago</span>
                  </h6>
                  <p class=\"font-weight-light small-text\">
                    New product launch
                  </p>
                </div>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-medium text-dark\"> Johnson
                    <span class=\"float-right font-weight-light small-text\">18 Minutes ago</span>
                  </h6>
                  <p class=\"font-weight-light small-text\">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"mdi mdi-bell\"></i>
              <span class=\"count\">4</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <a class=\"dropdown-item\">
                <p class=\"mb-0 font-weight-normal float-left\">You have 4 new notifications
                </p>
                <span class=\"badge badge-pill badge-warning float-right\">View all</span>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"mdi mdi-alert-circle-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-medium text-dark\">Application Error</h6>
                  <p class=\"font-weight-light small-text\">
                    Just now
                  </p>
                </div>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"mdi mdi-comment-text-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-medium text-dark\">Settings</h6>
                  <p class=\"font-weight-light small-text\">
                    Private message
                  </p>
                </div>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"mdi mdi-email-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-medium text-dark\">New user registration</h6>
                  <p class=\"font-weight-light small-text\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>#}
          <li class=\"nav-item dropdown d-none d-xl-inline-block\">
            <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"profile-text\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ app.user.username }}
                {% endif %}
              </span>
              <img class=\"img-xs rounded-circle\" src=\"{{ asset('images/faces-clipart/pic-1.png') }}\" alt=\"Profile image\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
              <a class=\"dropdown-item p-0\">
                <div class=\"d-flex border-bottom\">
                  {#<div class=\"py-3 px-4 d-flex align-items-center justify-content-center\">#}
                    {#<i class=\"mdi mdi-bookmark-plus-outline mr-0 text-gray\"></i>#}
                  {#</div>#}
                  <div class=\"py-3 px-4 d-flex align-items-center justify-content-center border-left\">
                      {{ app.user.username }}
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
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"mdi mdi-menu\"></span>
        </button>
      </div>
    </nav>", "template/navbar.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/template/navbar.html.twig");
    }
}
