<?php

/* template/footer.html.twig */
class __TwigTemplate_b15852bfb7b6336133f27f7310e74923e544ef0b9003eaaeddbde22c3e00a1a3 extends Twig_Template
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
        echo "<footer class=\"footer\">
          <div class=\"container-fluid clearfix\">
            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © 2018
              <a href=\"http://www.bootstrapdash.com/\" target=\"_blank\">Bootstrapdash</a>. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with
              <i class=\"mdi mdi-heart text-danger\"></i>
            </span>
          </div>
        </footer>";
    }

    public function getTemplateName()
    {
        return "template/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/footer.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/template/footer.html.twig");
    }
}
