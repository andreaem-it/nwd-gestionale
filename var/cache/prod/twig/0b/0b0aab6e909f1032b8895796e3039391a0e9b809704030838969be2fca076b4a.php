<?php

/* jquery.collection.html.twig */
class __TwigTemplate_45878773f7e0d90ed4bda3d64cb1b93925d2b0dc2fef709c38a7689392e282ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    public function block_collection_widget($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')));
            // line 26
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-add" => ((($context["allow_add"] ?? null)) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-remove" => ((($context["allow_delete"] ?? null)) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-name-prefix" => ($context["full_name"] ?? null)));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "jquery.collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 31,  54 => 30,  51 => 29,  48 => 28,  45 => 27,  42 => 26,  39 => 25,  36 => 24,  33 => 23,  27 => 22,  24 => 21,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "jquery.collection.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/jquery.collection.html.twig");
    }
}
