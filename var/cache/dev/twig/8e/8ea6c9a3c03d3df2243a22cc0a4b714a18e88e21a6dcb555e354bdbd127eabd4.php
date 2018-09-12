<?php

/* template/sidebar.html.twig */
class __TwigTemplate_78562e73d6d3056f1d52ae0b18503db93dd163299fa86a7025d82c4534dde93b extends Twig_Template
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
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faces-clipart/pic-1.png"), "html", null, true);
        echo "\" alt=\"profile image\" style=\"width: 100%\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </p>
            <div>
              <small class=\"designation text-muted\">Manager</small>
              <span class=\"status-indicator online\"></span>
            </div>
          </div>
        </div>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo");
        echo "\" class=\"btn btn-success btn-block\">Nuovo Preventivo
          <i class=\"mdi mdi-plus\"></i>
        </a>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dashboard");
        echo "\">
        <i class=\"menu-icon mdi mdi-television\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Preventivi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo");
        echo "\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("lista_preventivi");
        echo "\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-clienti\" aria-expanded=\"false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-human-male\"></i>
        <span class=\"menu-title\">Clienti</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-clienti\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_cliente");
        echo "\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("clienti");
        echo "\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-prezzi\" aria-expanded=\"false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-currency-eur\"></i>
        <span class=\"menu-title\">Prezzi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-prezzi\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Listino</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-settings\" aria-expanded=\"false\" aria-controls=\"nav-settings\">
        <i class=\"menu-icon mdi mdi-backup-restore\"></i>
        <span class=\"menu-title\">Impostazioni</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-settings\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_generali");
        echo "\">Generali</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
        echo "\">Utenti</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>";
        
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
        return array (  153 => 92,  147 => 89,  116 => 61,  110 => 58,  93 => 44,  87 => 41,  70 => 27,  61 => 21,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img src=\"{{ asset('images/faces-clipart/pic-1.png') }}\" alt=\"profile image\" style=\"width: 100%\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ app.user.username }}
                {% endif %}
            </p>
            <div>
              <small class=\"designation text-muted\">Manager</small>
              <span class=\"status-indicator online\"></span>
            </div>
          </div>
        </div>
        <a href=\"{{ url('nuovo_preventivo') }}\" class=\"btn btn-success btn-block\">Nuovo Preventivo
          <i class=\"mdi mdi-plus\"></i>
        </a>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ url('dashboard') }}\">
        <i class=\"menu-icon mdi mdi-television\"></i>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
        <i class=\"menu-icon mdi mdi-chart-line\"></i>
        <span class=\"menu-title\">Preventivi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"ui-basic\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('nuovo_preventivo') }}\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('lista_preventivi') }}\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-clienti\" aria-expanded=\"false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-human-male\"></i>
        <span class=\"menu-title\">Clienti</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-clienti\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('nuovo_cliente') }}\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('clienti') }}\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-prezzi\" aria-expanded=\"false\" aria-controls=\"nav-clienti\" >
        <i class=\"menu-icon mdi mdi-currency-eur\"></i>
        <span class=\"menu-title\">Prezzi</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-prezzi\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Listino</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#nav-settings\" aria-expanded=\"false\" aria-controls=\"nav-settings\">
        <i class=\"menu-icon mdi mdi-backup-restore\"></i>
        <span class=\"menu-title\">Impostazioni</span>
        <i class=\"menu-arrow\"></i>
      </a>
      <div class=\"collapse\" id=\"nav-settings\">
        <ul class=\"nav flex-column sub-menu\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('impostazioni_generali') }}\">Generali</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ url('impostazioni_utenti') }}\">Utenti</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>", "template/sidebar.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/template/sidebar.html.twig");
    }
}
