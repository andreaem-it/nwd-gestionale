<?php

/* template/sidebar.html.twig */
class __TwigTemplate_602a524a7a277741a69ff1f46ec7e9096e0d06be25dc3368fcfba44b01603222 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/sidebar.html.twig"));

        // line 1
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\" id=\"navbarSupportedContent\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img class=\"img-xs rounded-circle border\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "user", array()), "picture", array()))), "html", null, true);
        echo "\" alt=\"profile image\" style=\"width: 100%\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "username", array())), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </p>
            <div>
              <small class=\"designation text-muted\">
                  ";
        // line 18
        echo "                    ";
        if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "user", array()), "roles", array())) == "ROLE_ADMIN")) {
            // line 19
            echo "                        ";
            $context["role"] = "Amministratore";
            // line 20
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "roles", array())) == "ROLE_SUPER_ADMIN")) {
            // line 21
            echo "                        ";
            $context["role"] = "SuperAmministratore";
            // line 22
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "user", array()), "roles", array())) == "ROLE_AGENT")) {
            // line 23
            echo "                        ";
            $context["role"] = "Agente";
            // line 24
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()), "roles", array())) == "ROLE_PROGETTISTA")) {
            // line 25
            echo "                        ";
            $context["role"] = "Progettista";
            // line 26
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", array()), "roles", array())) == "ROLE_SEGNALATORE")) {
            // line 27
            echo "                        ";
            $context["role"] = "Segnalatore";
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new Twig_Error_Runtime('Variable "role" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "
                  ";
        // line 31
        echo "              </small>
              <span class=\"status-indicator online\"></span>
            </div>
              <div class=\"row d-none d-md-block d-lg-none mt-2 ml-1 text-small\">
                  <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_profile_show");
        echo "\">Profilo</a> &nbsp; <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\">Logout</a>
              </div>
          </div>

        </div>
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo");
        echo "\" class=\"btn btn-success btn-block\">Nuovo Preventivo
          <i class=\"mdi mdi-plus\"></i>
        </a>
      </div>
    </li>
    <li class=\"nav-item ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dashboard")) {
            echo "active";
        }
        echo "\">
      <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dashboard");
        echo "\">
        <i class=\"menu-icon mdi mdi-television\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"";
        // line 52
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo_avanzato")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Preventivi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse ";
        // line 57
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo_avanzato")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi"))) {
            echo "show";
        }
        echo "\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo");
        echo "\">Nuovo Base</a>
          </li>
          ";
        // line 65
        echo "          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("lista_preventivi");
        echo "\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-clienti\" aria-expanded=\"";
        // line 72
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-human-male\"></i>
        <span class=\"menu-title\">Clienti</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse ";
        // line 77
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti"))) {
            echo "show";
        }
        echo "\" id=\"nav-clienti\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("clienti");
        echo "\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-prezzi\" aria-expanded=\"";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-currency-eur\"></i>
        <span class=\"menu-title\">Prezzi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
            echo "show";
        }
        echo "\" id=\"nav-prezzi\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 97, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prezzi_listino");
        echo "\">Listino</a>
          </li>
        </ul>
      </div>
    </li>
      ";
        // line 102
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 103
            echo "    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-settings\" aria-expanded=\"";
            // line 104
            if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"nav-settings\">
        <i class=\"menu-icon mdi mdi-backup-restore\"></i>
        <span class=\"menu-title\">Impostazioni</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse ";
            // line 109
            if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters"))) {
                echo "show";
            }
            echo "\" id=\"nav-settings\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_generali");
            echo "\">Generali</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 115, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("settings_parameters");
            echo "\">Parametri</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 118, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">Utenti</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_gruppi");
            echo "\">Gruppi</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 124, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_annunci");
            echo "\">Annunci</a>
          </li>
        </ul>
      </div>
    </li>
    ";
        }
        // line 130
        echo "  </ul>
</nav>
<div id=\"nav-hide-btn-holder\">
  <a id=\"nav-hide-btn\" href=\"\" class=\"btn btn-secondary btn-xs\">&lt;</a>
</div>
<style>
  #nav-hide-btn {
    position: absolute;
    left: 14.6%;
  }
  #nav-hide-btn:hover {
    left: 15.2%;
  }
  #sidebar {
    position: relative;
  }
</style>
<script>
  let opened;
  opened = true;
  \$('.main-panel').css('width', '100%');
  \$('#nav-hide-btn').click(function(e) {
      e.preventDefault();

      if (opened == true) {
          \$('#sidebar').animate({left: -255}, 3000);
          percent = 100;
          add_width = (percent * \$('.main-panel').parent().width()) + 'px';
          \$('.main-panel').animate({marginLeft: -255},2500);
          \$(this).animate({left: -10}, 3000);
          opened = false;
      }else {
          \$('#sidebar').animate({left: 0}, 3000);
          \$(this).animate({left: 245}, 3000);
          \$('.main-panel').animate({marginLeft: 0},2500);
          opened = true;
          \$(this).html('>');
      }
  })
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 130,  319 => 124,  309 => 121,  299 => 118,  289 => 115,  279 => 112,  271 => 109,  259 => 104,  256 => 103,  254 => 102,  242 => 97,  234 => 94,  222 => 89,  209 => 83,  199 => 80,  191 => 77,  179 => 72,  166 => 66,  163 => 65,  154 => 60,  146 => 57,  134 => 52,  125 => 46,  119 => 45,  111 => 40,  101 => 35,  95 => 31,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\" id=\"navbarSupportedContent\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img class=\"img-xs rounded-circle border\" src=\"{{ asset('users/' ~ app.user.picture) }}\" alt=\"profile image\" style=\"width: 100%\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ app.user.username|capitalize }}
                {% endif %}
            </p>
            <div>
              <small class=\"designation text-muted\">
                  {#{% for roles in app.user.roles %}#}
                    {% if app.user.roles|first == 'ROLE_ADMIN' %}
                        {% set role = 'Amministratore' %}
                    {% elseif app.user.roles|first == 'ROLE_SUPER_ADMIN' %}
                        {% set role = 'SuperAmministratore' %}
                    {% elseif app.user.roles|first == 'ROLE_AGENT' %}
                        {% set role = 'Agente' %}
                    {% elseif app.user.roles|first == 'ROLE_PROGETTISTA' %}
                        {% set role = 'Progettista' %}
                    {% elseif app.user.roles|first == 'ROLE_SEGNALATORE' %}
                        {% set role = 'Segnalatore' %}
                    {% endif %}
                    {{ role }}
                  {#{% endfor %}#}
              </small>
              <span class=\"status-indicator online\"></span>
            </div>
              <div class=\"row d-none d-md-block d-lg-none mt-2 ml-1 text-small\">
                  <a href=\"{{ url('fos_user_profile_show') }}\">Profilo</a> &nbsp; <a href=\"{{ url('logout') }}\">Logout</a>
              </div>
          </div>

        </div>
        <a href=\"{{ url('nuovo_preventivo') }}\" class=\"btn btn-success btn-block\">Nuovo Preventivo
          <i class=\"mdi mdi-plus\"></i>
        </a>
      </div>
    </li>
    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'dashboard'%}active{% endif %}\">
      <a class=\"nav-link\" href=\"{{ url('dashboard') }}\">
        <i class=\"menu-icon mdi mdi-television\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"{% if app.request.attributes.get('_route') == 'nuovo_preventivo' or app.request.attributes.get('_route') == 'nuovo_preventivo_avanzato' or app.request.attributes.get('_route') == 'lista_preventivi' %}true{% else %}false{% endif %}\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Preventivi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse {% if app.request.attributes.get('_route') == 'nuovo_preventivo' or app.request.attributes.get('_route') == 'nuovo_preventivo_avanzato' or app.request.attributes.get('_route') == 'lista_preventivi' %}show{% endif %}\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'nuovo_preventivo' %}active{% endif %}\" href=\"{{ url('nuovo_preventivo') }}\">Nuovo Base</a>
          </li>
          {#<li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'nuovo_preventivo_avanzato' %}active{% endif %}\" href=\"{{ url('nuovo_preventivo_avanzato') }}\">Nuovo Avanzato</a>
          </li>#}
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'lista_preventivi' %}active{% endif %}\" href=\"{{ url('lista_preventivi') }}\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-clienti\" aria-expanded=\"{% if app.request.attributes.get('_route') == 'nuovo_cliente' or app.request.attributes.get('_route') == 'clienti' %}true{% else %}false{% endif %}false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-human-male\"></i>
        <span class=\"menu-title\">Clienti</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse {% if app.request.attributes.get('_route') == 'nuovo_cliente' or app.request.attributes.get('_route') == 'clienti' %}show{% endif %}\" id=\"nav-clienti\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'nuovo_cliente'%}active{% endif %}\" href=\"{{ url('nuovo_cliente') }}\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'clienti' %}active{% endif %}\" href=\"{{ url('clienti') }}\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-prezzi\" aria-expanded=\"{% if app.request.attributes.get('_route') == 'prezzi_listino' %}true{% else %}false{% endif %}\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-currency-eur\"></i>
        <span class=\"menu-title\">Prezzi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse {% if app.request.attributes.get('_route') == 'prezzi_listino'%}show{% endif %}\" id=\"nav-prezzi\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'prezzi_listino' %}active{% endif %}\" href=\"{{ path('prezzi_listino') }}\">Listino</a>
          </li>
        </ul>
      </div>
    </li>
      {% if is_granted('ROLE_ADMIN') %}
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-settings\" aria-expanded=\"{% if app.request.attributes.get('_route') == 'impostazioni_generali' or app.request.attributes.get('_route') == 'impostazioni_utenti' or app.request.attributes.get('_route') == 'impostazioni_gruppi' or app.request.attributes.get('_route') == 'impostazioni_annunci' or app.request.attributes.get('_route') == 'settings_parameters' %}true{% else %}false{% endif %}\" aria-controls=\"nav-settings\">
        <i class=\"menu-icon mdi mdi-backup-restore\"></i>
        <span class=\"menu-title\">Impostazioni</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse {% if app.request.attributes.get('_route') == 'impostazioni_generali' or app.request.attributes.get('_route') == 'impostazioni_utenti' or app.request.attributes.get('_route') == 'impostazioni_gruppi' or app.request.attributes.get('_route') == 'impostazioni_annunci' or app.request.attributes.get('_route') == 'settings_parameters' %}show{% endif %}\" id=\"nav-settings\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'impostazioni_generali' %}active{% endif %}\" href=\"{{ url('impostazioni_generali') }}\">Generali</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'settings_parameters' %}active{% endif %}\" href=\"{{ url('settings_parameters') }}\">Parametri</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'impostazioni_utenti' %}active{% endif %}\" href=\"{{ url('impostazioni_utenti') }}\">Utenti</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'impostazioni_gruppi' %}active{% endif %}\" href=\"{{ url('impostazioni_gruppi') }}\">Gruppi</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if app.request.attributes.get('_route') == 'impostazioni_annunci' %}active{% endif %}\" href=\"{{ url('impostazioni_annunci') }}\">Annunci</a>
          </li>
        </ul>
      </div>
    </li>
    {% endif %}
  </ul>
</nav>
<div id=\"nav-hide-btn-holder\">
  <a id=\"nav-hide-btn\" href=\"\" class=\"btn btn-secondary btn-xs\">&lt;</a>
</div>
<style>
  #nav-hide-btn {
    position: absolute;
    left: 14.6%;
  }
  #nav-hide-btn:hover {
    left: 15.2%;
  }
  #sidebar {
    position: relative;
  }
</style>
<script>
  let opened;
  opened = true;
  \$('.main-panel').css('width', '100%');
  \$('#nav-hide-btn').click(function(e) {
      e.preventDefault();

      if (opened == true) {
          \$('#sidebar').animate({left: -255}, 3000);
          percent = 100;
          add_width = (percent * \$('.main-panel').parent().width()) + 'px';
          \$('.main-panel').animate({marginLeft: -255},2500);
          \$(this).animate({left: -10}, 3000);
          opened = false;
      }else {
          \$('#sidebar').animate({left: 0}, 3000);
          \$(this).animate({left: 245}, 3000);
          \$('.main-panel').animate({marginLeft: 0},2500);
          opened = true;
          \$(this).html('>');
      }
  })
</script>", "template/sidebar.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/template/sidebar.html.twig");
    }
}
