<?php

/* expertations/show.html.twig */
class __TwigTemplate_f6ea18228f7af0ec7622a0ae280e3e314446695b29045b873aeec6ca6376f460 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "expertations/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expertations/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mostra Preventivo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-10\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"card float-right mb-2 w-sm-100 mw-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <div class=\"btn-group\">
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"print();\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("preventivi_dettaglio_id", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Computometrico
                            </a>
                            ";
        // line 26
        if (((isset($context["gotAdv"]) || array_key_exists("gotAdv", $context) ? $context["gotAdv"] : (function () { throw new Twig_Error_Runtime('Variable "gotAdv" does not exist.', 26, $this->source); })()) == true)) {
            // line 27
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mostra_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Mostra Avanzato
                            </a>
                            ";
        } else {
            // line 31
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("nuovo_preventivo_avanzato", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })()), "id", array()), "floor" => "0")), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Nuovo Avanzato
                            </a>
                            ";
        }
        // line 35
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mb-sm-2\">
            <div class=\"col-md-4\">
                <div class=\"card card-grey mbgitmd-4\">
                    <div class=\"card-body \">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 47, $this->source); })()), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 48, $this->source); })()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 48, $this->source); })()), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 48, $this->source); })()), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 48, $this->source); })()), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 49, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 49, $this->source); })()), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 50, $this->source); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 50, $this->source); })()), "email", array()), "html", null, true);
        echo "</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <strong>Tipo impianto:</strong>  ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 62, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                <strong>Piani edificio:</strong>  ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                <strong>Riscaldamento:</strong>  ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 64, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 64, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                <strong>Trifase:</strong>  ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 65, $this->source); })()), "trifase", array()) == true)) {
            echo " Si ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 65, $this->source); })()), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                            </div>
                            <div class=\"col-sm-6\">
                                <strong>Livello impianto:</strong> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->source); })()), "level", array()), "html", null, true);
        echo " <br/>
                                <strong>Fornitura elettrica:</strong> ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->source); })()), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                <strong>Metratura ambienti:</strong> ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo " m² <br />
                                <strong>Opere murarie:</strong> ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 71, $this->source); })()), "opereMurarie", array()) == 0)) {
            echo " No ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 71, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo " Intonaco ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 71, $this->source); })()), "opereMurarie", array()) == 2)) {
            echo " Mattone/Pietra ";
        }
        // line 72
        echo "                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-4\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title title-dettagli\">
                            Dettaglio Preventivo ";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "level", array()) == 1)) {
            echo " Base ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "level", array()) == 2)) {
            echo " Standard ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 84, $this->source); })()), "level", array()) == 3)) {
            echo " Domotico ";
        }
        // line 85
        echo "                        </h5>
                        <div class=\"scrollable\" style=\"overflow-x: scroll\">
                            <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center table-header\" style=\"background-color: #f2f8f9;\">
                                    <th style=\"max-width: 50px;\">
                                        Piano
                                    </th>
                                    <th class=\"tbl-lg ambient-td\">
                                        Ambiente
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Nome
                                    </th>
                                    <th>
                                        Punti prese
                                    </th>
                                    <th>
                                        Punti Luce
                                    </th>
                                    <th>
                                        Prese TV
                                    </th>
                                    ";
        // line 108
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 108, $this->source); })()), "c1n", array()))) {
            // line 109
            echo "                                        <th>
                                            ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 110, $this->source); })()), "c1n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 113
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 113, $this->source); })()), "c2n", array()))) {
            // line 114
            echo "                                        <th>
                                            ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->source); })()), "c2n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 118
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 118, $this->source); })()), "c3n", array()))) {
            // line 119
            echo "                                        <th>
                                            ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 120, $this->source); })()), "c3n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 123
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 123, $this->source); })()), "c4n", array()))) {
            // line 124
            echo "                                        <th>
                                            ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 125, $this->source); })()), "c4n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 128
        echo "                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 128, $this->source); })()), "c5n", array()))) {
            // line 129
            echo "                                        <th>
                                            ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 130, $this->source); })()), "c5n", array()), "html", null, true);
            echo "
                                        </th>
                                    ";
        }
        // line 133
        echo "                                </tr>
                                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 134, $this->source); })()), "floor", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 135
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 137, $this->source); })()), "floor", array()), $context["key"], array(), "array") == 0)) {
                // line 138
                echo "                                                T
                                            ";
            } else {
                // line 140
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 140, $this->source); })()), "floor", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            ";
            }
            // line 142
            echo "                                        </td>
                                        <td class=\"ambient-td\">
                                            ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 144, $this->source); })()), "convertAIDtoName", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 144, $this->source); })()), "ambient", array()), $context["key"], array(), "array")), "method"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->source); })()), "name", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 150, $this->source); })()), "pp", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 153, $this->source); })()), "pl", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 156, $this->source); })()), "pt", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        ";
            // line 158
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 158, $this->source); })()), "c1n", array()))) {
                // line 159
                echo "                                            <td>
                                                ";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 160, $this->source); })()), "c1v", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 163
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 163, $this->source); })()), "c2n", array()))) {
                // line 164
                echo "                                            <td>
                                                ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 165, $this->source); })()), "c2v", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 168
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 168, $this->source); })()), "c3n", array()))) {
                // line 169
                echo "                                            <td>
                                                ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 170, $this->source); })()), "c3v", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 173
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 173, $this->source); })()), "c4n", array()))) {
                // line 174
                echo "                                            <td>
                                                ";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 175, $this->source); })()), "c4v", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 178
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 178, $this->source); })()), "c5n", array()))) {
                // line 179
                echo "                                            <td>
                                                ";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 180, $this->source); })()), "c5v", array()), $context["key"], array(), "array"), "html", null, true);
                echo "
                                            </td>
                                        ";
            }
            // line 183
            echo "                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-md-3\">
                                <strong>Circuiti:</strong> ";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 192, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-md-3\">
                                <strong>Prese Telefono / Dati:</strong> ";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 195, $this->source); })()), "numPreseTelefonoDati", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-md-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> ";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 198, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-md-6\">
                                <strong>SPD:</strong>
                                ";
        // line 204
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 204, $this->source); })()), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 ";
        }
        // line 205
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 205, $this->source); })()), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni ";
        }
        // line 206
        echo "                            </div>
                            <div class=\"col-md-6\">
                                <strong>Impianti ausiliari e risparmio energetico:</strong>
                                ";
        // line 209
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 209, $this->source); })()), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono ";
        }
        // line 210
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 210, $this->source); })()), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi ";
        }
        // line 211
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 211, $this->source); })()), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica ";
        }
        // line 212
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Totale
                            </div>
                            <div class=\"col-sm-6 text-right text-black\">
                                ";
        // line 229
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 229, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                ";
        // line 237
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 237, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto (";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 242, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                - ";
        // line 245
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 245, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>";
        // line 253
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new Twig_Error_Runtime('Variable "grand_total" does not exist.', 253, $this->source); })()), 2, "."), "html", null, true);
        echo " €</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 265
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/scrollbar.css"), "html", null, true);
        echo "\">

    <style>
    td {
        text-align: center!important;
    }
    @media print {
        .sidebar {
            display: none;
        }
        .footer {
            display: none;
        }
        .sf-toolbar {
            display: none;
        }
        .top-title {
            display: none;
        }
        .navbar {
            display: none;
        }
        .navbar-toggler {
            display: none;
        }
        .title-dettagli {
            display: none;
        }
        .brand-logo-mini img {
            margin-left: 3vw;
        }
        .ambient-td {
            display: none;
        }
        .ambient-th {
            display: none;
        }
        a {
            text-decoration: none!important;
            color: #000000!important;
        }
        .card-grey {
            border: 1px solid #EEEEEE!important;
        }
        .card {
            padding: 0!important;
            margin: 0!important;
        }
        .table-header {
            background-color: #EEEEEE!important;
        }
    }
</style>
    <link rel=\"stylesheet\" href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 321
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
    ";
        // line 328
        if (((isset($context["generated"]) || array_key_exists("generated", $context) ? $context["generated"] : (function () { throw new Twig_Error_Runtime('Variable "generated" does not exist.', 328, $this->source); })()) == true)) {
            // line 329
            echo "        <script>
            \$(document).ready(function() {
                toastr.success(\"Preventivo Generato\");
            })
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "expertations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 329,  674 => 328,  665 => 322,  660 => 321,  651 => 320,  639 => 318,  582 => 265,  573 => 264,  553 => 253,  542 => 245,  536 => 242,  528 => 237,  517 => 229,  498 => 212,  493 => 211,  488 => 210,  484 => 209,  479 => 206,  474 => 205,  470 => 204,  461 => 198,  455 => 195,  449 => 192,  441 => 186,  433 => 183,  427 => 180,  424 => 179,  421 => 178,  415 => 175,  412 => 174,  409 => 173,  403 => 170,  400 => 169,  397 => 168,  391 => 165,  388 => 164,  385 => 163,  379 => 160,  376 => 159,  374 => 158,  369 => 156,  363 => 153,  357 => 150,  351 => 147,  345 => 144,  341 => 142,  335 => 140,  331 => 138,  329 => 137,  325 => 135,  321 => 134,  318 => 133,  312 => 130,  309 => 129,  306 => 128,  300 => 125,  297 => 124,  294 => 123,  288 => 120,  285 => 119,  282 => 118,  276 => 115,  273 => 114,  270 => 113,  264 => 110,  261 => 109,  259 => 108,  234 => 85,  226 => 84,  212 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 68,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  153 => 50,  147 => 49,  137 => 48,  133 => 47,  119 => 35,  111 => 31,  103 => 27,  101 => 26,  95 => 23,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mostra Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-10\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
            <div class=\"col-sm-2\">
                <div class=\"card float-right mb-2 w-sm-100 mw-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <div class=\"btn-group\">
                            <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                                <i class=\"mdi mdi-delete mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                                <i class=\"mdi mdi-pencil mr-0\"></i>
                            </a>
                            <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"print();\">
                                <i class=\"mdi mdi-printer mr-0\"></i>
                            </a>
                            <a href=\"{{ url('preventivi_dettaglio_id', {'id': item.id}) }}\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Computometrico
                            </a>
                            {% if gotAdv == true %}
                            <a href=\"{{ url('mostra_preventivo_avanzato', {'id': item.id}) }}\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Mostra Avanzato
                            </a>
                            {% else %}
                            <a href=\"{{ url('nuovo_preventivo_avanzato', {'id': item.id, 'floor': '0' }) }}\" class=\"btn btn-success btn-sm float-right mr-1\">
                                Nuovo Avanzato
                            </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mb-sm-2\">
            <div class=\"col-md-4\">
                <div class=\"card card-grey mbgitmd-4\">
                    <div class=\"card-body \">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> {{ client.name }} <br/>
                        <strong>Indirizzo:</strong> {{ client.address }}, {{ client.postalCode }}, {{ client.city }} ({{ client.province }}) <br/>
                        <strong>Telefono:</strong> <a href=\"tel:{{ client.phone }}\">{{ client.phone }}</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:{{ client.email }}\">{{ client.email }}</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <strong>Tipo impianto:</strong>  {{ functions.plantIntToName(item.tipo) }}<br/>
                                <strong>Piani edificio:</strong>  {{ item.pianiCasa }}<br/>
                                <strong>Riscaldamento:</strong>  {{ functions.heatingIntToName(item.riscaldamento) }} <br/>
                                <strong>Trifase:</strong>  {% if item.trifase == true %} Si {% elseif item.trifase == false %} No {% endif %}<br/>
                            </div>
                            <div class=\"col-sm-6\">
                                <strong>Livello impianto:</strong> {{ item.level }} <br/>
                                <strong>Fornitura elettrica:</strong> {{ item.kw }} Kw <br/>
                                <strong>Metratura ambienti:</strong> {{ item.squareMeters }} m² <br />
                                <strong>Opere murarie:</strong> {% if item.opereMurarie == 0 %} No {% elseif item.opereMurarie == 1 %} Intonaco {% elseif item.opereMurarie == 2 %} Mattone/Pietra {% endif %}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-4\">
            <div class=\"col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title title-dettagli\">
                            Dettaglio Preventivo {% if item.level == 1 %} Base {% elseif item.level == 2 %} Standard {% elseif item.level == 3 %} Domotico {% endif %}
                        </h5>
                        <div class=\"scrollable\" style=\"overflow-x: scroll\">
                            <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center table-header\" style=\"background-color: #f2f8f9;\">
                                    <th style=\"max-width: 50px;\">
                                        Piano
                                    </th>
                                    <th class=\"tbl-lg ambient-td\">
                                        Ambiente
                                    </th>
                                    <th class=\"tbl-lg\">
                                        Nome
                                    </th>
                                    <th>
                                        Punti prese
                                    </th>
                                    <th>
                                        Punti Luce
                                    </th>
                                    <th>
                                        Prese TV
                                    </th>
                                    {% if item.c1n is not null %}
                                        <th>
                                            {{ item.c1n }}
                                        </th>
                                    {% endif %}
                                    {% if item.c2n is not null %}
                                        <th>
                                            {{ item.c2n }}
                                        </th>
                                    {% endif %}
                                    {% if item.c3n is not null %}
                                        <th>
                                            {{ item.c3n }}
                                        </th>
                                    {% endif %}
                                    {% if item.c4n is not null %}
                                        <th>
                                            {{ item.c4n }}
                                        </th>
                                    {% endif %}
                                    {% if item.c5n is not null %}
                                        <th>
                                            {{ item.c5n }}
                                        </th>
                                    {% endif %}
                                </tr>
                                {% for key in item.floor|keys %}
                                    <tr>
                                        <td>
                                            {% if item.floor[key] == 0 %}
                                                T
                                            {% else %}
                                                {{ item.floor[key] }}
                                            {% endif %}
                                        </td>
                                        <td class=\"ambient-td\">
                                            {{ functions.convertAIDtoName(item.ambient[key]) }}
                                        </td>
                                        <td>
                                            {{ item.name[key] }}
                                        </td>
                                        <td>
                                            {{ item.pp[key] }}
                                        </td>
                                        <td>
                                            {{ item.pl[key] }}
                                        </td>
                                        <td>
                                            {{ item.pt[key] }}
                                        </td>
                                        {% if item.c1n is not null %}
                                            <td>
                                                {{ item.c1v[key] }}
                                            </td>
                                        {% endif %}
                                        {% if item.c2n is not null %}
                                            <td>
                                                {{ item.c2v[key] }}
                                            </td>
                                        {% endif %}
                                        {% if item.c3n is not null%}
                                            <td>
                                                {{ item.c3v[key] }}
                                            </td>
                                        {% endif %}
                                        {% if item.c4n is not null %}
                                            <td>
                                                {{ item.c4v[key] }}
                                            </td>
                                        {% endif %}
                                        {% if item.c5n is not null %}
                                            <td>
                                                {{ item.c5v[key] }}
                                            </td>
                                        {% endif %}
                                    </tr>

                                {% endfor %}

                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-md-3\">
                                <strong>Circuiti:</strong> {{ item.numCircuiti }}
                            </div>
                            <div class=\"col-md-3\">
                                <strong>Prese Telefono / Dati:</strong> {{ item.numPreseTelefonoDati }}
                            </div>
                            <div class=\"col-md-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> {{ item.illumSicurezza }}
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-md-6\">
                                <strong>SPD:</strong>
                                {% if item.spd == 1 %}SPD ad arrivo linea per rendere tollerabile il rischio R1 {% endif %}
                                {% if item.spd == 2 %}SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni {% endif %}
                            </div>
                            <div class=\"col-md-6\">
                                <strong>Impianti ausiliari e risparmio energetico:</strong>
                                {% if item.impAusiliari == 1 %}Campanello, citofono e videocitofono {% endif %}
                                {% if item.impAusiliari == 2 %}Campanello, citofono e antintrusione, Controllo carichi {% endif %}
                                {% if item.impAusiliari == 3 %}Campanello, citofono e antintrusione, Controllo carichi, Domotica {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Totale
                            </div>
                            <div class=\"col-sm-6 text-right text-black\">
                                {{ total|number_format(2,'.') }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                {{ vat|number_format(2,'.') }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto ({{ item.sconto }} %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                - {{ sconto|number_format(2,'.') }} €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>{{ grand_total|number_format(2,'.') }} €</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {#{{ dump(item) }}#}
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/scrollbar.css') }}\">

    <style>
    td {
        text-align: center!important;
    }
    @media print {
        .sidebar {
            display: none;
        }
        .footer {
            display: none;
        }
        .sf-toolbar {
            display: none;
        }
        .top-title {
            display: none;
        }
        .navbar {
            display: none;
        }
        .navbar-toggler {
            display: none;
        }
        .title-dettagli {
            display: none;
        }
        .brand-logo-mini img {
            margin-left: 3vw;
        }
        .ambient-td {
            display: none;
        }
        .ambient-th {
            display: none;
        }
        a {
            text-decoration: none!important;
            color: #000000!important;
        }
        .card-grey {
            border: 1px solid #EEEEEE!important;
        }
        .card {
            padding: 0!important;
            margin: 0!important;
        }
        .table-header {
            background-color: #EEEEEE!important;
        }
    }
</style>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.toastr.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/scrollbar.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/jquery.toastr.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
    {% if generated == true %}
        <script>
            \$(document).ready(function() {
                toastr.success(\"Preventivo Generato\");
            })
        </script>
    {% endif %}
{% endblock %}", "expertations/show.html.twig", "/Users/andreaemili/PhpstormProjects/nwd-gestionale/app/Resources/views/expertations/show.html.twig");
    }
}
