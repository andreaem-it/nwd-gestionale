<?php

/* template/sidebar.html.twig */
class __TwigTemplate_49fc3da6eedbbcccb3cf6d642d5c2a010c4c79d2ad43c7007d9c6b91ed5e33dd extends Twig_Template
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
        // line 1
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\" id=\"navbarSupportedContent\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img class=\"img-xs rounded-circle border\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "picture", array()))), "html", null, true);
        echo "\" alt=\"profile image\" style=\"width: 100%\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array())), "html", null, true);
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
        if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) == "ROLE_ADMIN")) {
            // line 19
            echo "                        ";
            $context["role"] = "Amministratore";
            // line 20
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) == "ROLE_SUPER_ADMIN")) {
            // line 21
            echo "                        ";
            $context["role"] = "SuperAmministratore";
            // line 22
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) == "ROLE_AGENT")) {
            // line 23
            echo "                        ";
            $context["role"] = "Agente";
            // line 24
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) == "ROLE_PROGETTISTA")) {
            // line 25
            echo "                        ";
            $context["role"] = "Progettista";
            // line 26
            echo "                    ";
        } elseif ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "roles", array())) == "ROLE_SEGNALATORE")) {
            // line 27
            echo "                        ";
            $context["role"] = "Segnalatore";
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dashboard")) {
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
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo_avanzato")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi"))) {
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
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo_avanzato")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi"))) {
            echo "show";
        }
        echo "\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_preventivo")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lista_preventivi")) {
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti"))) {
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti"))) {
            echo "show";
        }
        echo "\" id=\"nav-clienti\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nuovo_cliente")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "clienti")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
            echo "show";
        }
        echo "\" id=\"nav-prezzi\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "prezzi_listino")) {
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
            if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters"))) {
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
            if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters"))) {
                echo "show";
            }
            echo "\" id=\"nav-settings\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_generali")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_generali");
            echo "\">Generali</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "settings_parameters")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("settings_parameters");
            echo "\">Parametri</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_utenti")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">Utenti</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_gruppi")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_gruppi");
            echo "\">Gruppi</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "impostazioni_annunci")) {
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
</nav>";
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
        return array (  326 => 130,  313 => 124,  303 => 121,  293 => 118,  283 => 115,  273 => 112,  265 => 109,  253 => 104,  250 => 103,  248 => 102,  236 => 97,  228 => 94,  216 => 89,  203 => 83,  193 => 80,  185 => 77,  173 => 72,  160 => 66,  157 => 65,  148 => 60,  140 => 57,  128 => 52,  119 => 46,  113 => 45,  105 => 40,  95 => 35,  89 => 31,  84 => 29,  81 => 28,  78 => 27,  75 => 26,  72 => 25,  69 => 24,  66 => 23,  63 => 22,  60 => 21,  57 => 20,  54 => 19,  51 => 18,  46 => 14,  40 => 12,  38 => 11,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/sidebar.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/template/sidebar.html.twig");
    }
}
