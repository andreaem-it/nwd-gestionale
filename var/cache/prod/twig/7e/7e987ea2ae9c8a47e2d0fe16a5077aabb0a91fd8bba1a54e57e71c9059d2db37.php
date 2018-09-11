<?php

/* template/sidebar.html.twig */
class __TwigTemplate_014812dbed0df88966be403db9c44e77cec01da0c587039ee5f6073fe1462502 extends Twig_Template
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
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\" style=\"-webkit-box-shadow: 2px 0 5px -2px #888;box-shadow: 2px 0 5px -2px #888;\">
  <ul class=\"nav\">
    <li class=\"nav-item nav-profile\">
      <div class=\"nav-link\">
        <div class=\"user-wrapper\">
          <div class=\"profile-image\">
            <img src=\"images/faces/face1.jpg\" alt=\"profile image\">
          </div>
          <div class=\"text-wrapper\">
            <p class=\"profile-name\">Richard V.Welsh</p>
            <div>
              <small class=\"designation text-muted\">Manager</small>
              <span class=\"status-indicator online\"></span>
            </div>
          </div>
        </div>
        <button class=\"btn btn-success btn-block\">Nuovo Preventivo
          <i class=\"mdi mdi-plus\"></i>
        </button>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("dashboard");
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
            <a class=\"nav-link\" href=\"\">Nuovo</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Lista</a>
          </li>
        </ul>
      </div>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"\">
        <i class=\"menu-icon mdi mdi-backup-restore\"></i>
        <span class=\"menu-title\">Impostazioni</span>
      </a>
    </li>
  </ul>
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
        return array (  43 => 23,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/sidebar.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/template/sidebar.html.twig");
    }
}
