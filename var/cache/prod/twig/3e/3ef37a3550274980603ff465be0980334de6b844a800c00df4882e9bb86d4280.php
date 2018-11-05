<?php

/* expertations/list.html.twig */
class __TwigTemplate_5af8d707a6cbe640f53eb5593b125edb79617779d7562d744e6ec58b46ddbbe0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Lista Preventivi";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h3>Preventivi <small>Lista</small></h3>
            </div>
        </div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>
                                            Cliente
                                        </th>
                                        <th>
                                            Creatore
                                        </th>
                                        <th>
                                            Prezzo
                                        </th>
                                        <th>
                                            Scadenza
                                        </th>
                                        <th style=\"width:200px\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["u_expertations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"py-1\">
                                            ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                                ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "userToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", array())), "method"), "html", null, true);
            echo "
                                            </a>
                                        </td>
                                        <td>
                                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €
                                        </td>
                                        <td>
                                            ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                        </td>
                                        <td style=\"width: 255px;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-eye-outline\"></span>
                                                </a>
                                                <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-table-edit\"></span>
                                                </a>
                                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "confirm" => false)), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                                    <span class=\"mdi mdi-delete\"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["expertations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 88
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                <td class=\"py-1\">
                                    ";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("vedi_clienti", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "client", array()))), "html", null, true);
            echo "\">
                                        ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "uidToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "client", array())), "method"), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("impostazioni_utenti");
            echo "\">
                                        ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["functions"] ?? null), "userToName", array(0 => twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", array())), "method"), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " €
                                </td>
                                <td>
                                    ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "expiration", array()), "d-m-Y"), "html", null, true);
            echo "
                                </td>
                                <td style=\"max-width: 200px;\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-eye-outline\"></span>
                                        </a>
                                        <a href=\"\" class=\"btn btn-warning btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-table-edit\"></span>
                                        </a>
                                        <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_elimina", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "confirm" => false)), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm float-right mr-1\">
                                            <span class=\"mdi mdi-delete\"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "expertations/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 126,  254 => 119,  245 => 113,  238 => 109,  232 => 106,  225 => 102,  221 => 101,  214 => 97,  210 => 96,  204 => 93,  198 => 90,  194 => 88,  189 => 87,  176 => 80,  167 => 74,  160 => 70,  154 => 67,  147 => 63,  143 => 62,  136 => 58,  132 => 57,  126 => 54,  120 => 51,  116 => 49,  112 => 48,  80 => 18,  74 => 17,  65 => 14,  60 => 13,  55 => 12,  51 => 11,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "expertations/list.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/list.html.twig");
    }
}
