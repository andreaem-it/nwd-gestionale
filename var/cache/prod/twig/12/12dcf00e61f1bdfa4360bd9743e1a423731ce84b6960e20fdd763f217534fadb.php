<?php

/* template/footer.html.twig */
class __TwigTemplate_72959cb4f95c01ae5d42355a484cc5ec3667e4681dbb7bdb944c8dd3db9c6611 extends Twig_Template
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
        echo "<footer class=\"footer\">
          <div class=\"container-fluid clearfix\">
            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © 2018
              <a href=\"http://www.andreaem.it/\" target=\"_blank\">AndreaEM</a>. All rights reserved.</span>
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
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/footer.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/template/footer.html.twig");
    }
}
