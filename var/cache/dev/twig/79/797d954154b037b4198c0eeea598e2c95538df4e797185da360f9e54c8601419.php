<?php

/* expertations/show.html.twig */
class __TwigTemplate_72adca56bd6d846409d16b3b77f2c1c9849f8d8d489e543deb69063cd3049d4e extends Twig_Template
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
                <div class=\"card float-right w-75 mb-2 w-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                            <i class=\"mdi mdi-delete mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                            <i class=\"mdi mdi-pencil mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"javascript:print();\">
                            <i class=\"mdi mdi-printer mr-0\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card card-grey mb-sm-3\">
                    <div class=\"card-body \">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 33, $this->source); })()), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 34, $this->source); })()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 34, $this->source); })()), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 34, $this->source); })()), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 34, $this->source); })()), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 35, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 35, $this->source); })()), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 36, $this->source); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 36, $this->source); })()), "email", array()), "html", null, true);
        echo "</a>  <br/>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Abitazione</h5>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <strong>Tipo impianto:</strong>  ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 48, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 48, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                <strong>Piani edificio:</strong>  ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 49, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                <strong>Riscaldamento:</strong>  ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 50, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                <strong>Trifase:</strong>  ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 51, $this->source); })()), "trifase", array()) == true)) {
            echo " Si ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 51, $this->source); })()), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                            </div>
                            <div class=\"col-sm-6\">
                                <strong>Livello impianto:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->source); })()), "level", array()), "html", null, true);
        echo " <br/>
                                <strong>Fornitura elettrica:</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->source); })()), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                <strong>Metratura ambienti:</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 56, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo " m² <br />
                                <strong>Opere murarie:</strong> ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->source); })()), "opereMurarie", array()) == 0)) {
            echo " No ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo " Intonaco ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->source); })()), "opereMurarie", array()) == 2)) {
            echo " Mattone/Pietra ";
        }
        // line 58
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
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "level", array()) == 1)) {
            echo " Base ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "level", array()) == 2)) {
            echo " Standard ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 70, $this->source); })()), "level", array()) == 3)) {
            echo " Domotico ";
        }
        // line 71
        echo "                        </h5>
                        <div class=\"scrollable\" style=\"overflow-x: scroll\">
                            <table class=\"table table-hover\">
                            <tbody>
                                <tr class=\"text-center table-header\" style=\"background-color: #f2f8f9;\">
                                    <th>
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
                                </tr>
                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 95, $this->source); })()), "floor", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 96
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->source); })()), "floor", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"ambient-td\">
                                            ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 101, $this->source); })()), "convertAIDtoName", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->source); })()), "ambient", array()), $context["key"], array(), "array")), "method"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 104, $this->source); })()), "name", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->source); })()), "pp", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 110, $this->source); })()), "pl", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 113, $this->source); })()), "pt", array()), $context["key"], array(), "array"), "html", null, true);
            echo "
                                        </td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-3\">
                                <strong>Circuiti:</strong> ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-3\">
                                <strong>Prese Telefono / Dati:</strong> ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->source); })()), "numPreseTelefonoDati", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 130, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-6\">
                                <strong>SPD:</strong>
                                ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 136, $this->source); })()), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 ";
        }
        // line 137
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 137, $this->source); })()), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni ";
        }
        // line 138
        echo "                            </div>
                            <div class=\"col-6\">
                                <strong>Impianti ausiliari e risparmio energetico:</strong>
                                ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 141, $this->source); })()), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono ";
        }
        // line 142
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 142, $this->source); })()), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi ";
        }
        // line 143
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 143, $this->source); })()), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica ";
        }
        // line 144
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-8\"></div>
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Totale
                            </div>
                            <div class=\"col-sm-6 text-right text-black\">
                                ";
        // line 161
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 161, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                ";
        // line 169
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["vat"]) || array_key_exists("vat", $context) ? $context["vat"] : (function () { throw new Twig_Error_Runtime('Variable "vat" does not exist.', 169, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto (";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 174, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                - ";
        // line 177
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sconto"]) || array_key_exists("sconto", $context) ? $context["sconto"] : (function () { throw new Twig_Error_Runtime('Variable "sconto" does not exist.', 177, $this->source); })()), 2, "."), "html", null, true);
        echo " €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>";
        // line 185
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new Twig_Error_Runtime('Variable "grand_total" does not exist.', 185, $this->source); })()), 2, "."), "html", null, true);
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

    // line 196
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 197
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
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.toastr.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.toastr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
    ";
        // line 260
        if (((isset($context["generated"]) || array_key_exists("generated", $context) ? $context["generated"] : (function () { throw new Twig_Error_Runtime('Variable "generated" does not exist.', 260, $this->source); })()) == true)) {
            // line 261
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
        return array (  516 => 261,  514 => 260,  505 => 254,  500 => 253,  491 => 252,  479 => 250,  422 => 197,  413 => 196,  393 => 185,  382 => 177,  376 => 174,  368 => 169,  357 => 161,  338 => 144,  333 => 143,  328 => 142,  324 => 141,  319 => 138,  314 => 137,  310 => 136,  301 => 130,  295 => 127,  289 => 124,  281 => 118,  270 => 113,  264 => 110,  258 => 107,  252 => 104,  246 => 101,  240 => 98,  236 => 96,  232 => 95,  206 => 71,  198 => 70,  184 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  125 => 36,  119 => 35,  109 => 34,  105 => 33,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
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
                <div class=\"card float-right w-75 mb-2 w-sm-100\">
                    <div class=\"card-body mx-0 py-1 px-1\">
                        <a href=\"\" class=\"btn btn-danger btn-sm float-right mr-xl-2 mr-md-1 mr-sm-1\">
                            <i class=\"mdi mdi-delete mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-secondary btn-sm float-right mr-1\">
                            <i class=\"mdi mdi-pencil mr-0\"></i>
                        </a>
                        <a href=\"\" class=\"btn btn-success btn-sm float-right mr-1\" onclick=\"javascript:print();\">
                            <i class=\"mdi mdi-printer mr-0\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card card-grey mb-sm-3\">
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
            <div class=\"col-sm-8\">
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
                                    <th>
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
                                </tr>
                                {% for key in item.floor|keys %}
                                    <tr>
                                        <td>
                                            {{ item.floor[key] }}
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
                                    </tr>

                                {% endfor %}

                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-3\">
                                <strong>Circuiti:</strong> {{ item.numCircuiti }}
                            </div>
                            <div class=\"col-3\">
                                <strong>Prese Telefono / Dati:</strong> {{ item.numPreseTelefonoDati }}
                            </div>
                            <div class=\"col-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> {{ item.illumSicurezza }}
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-6\">
                                <strong>SPD:</strong>
                                {% if item.spd == 1 %}SPD ad arrivo linea per rendere tollerabile il rischio R1 {% endif %}
                                {% if item.spd == 2 %}SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni {% endif %}
                            </div>
                            <div class=\"col-6\">
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
            <div class=\"col-sm-8\"></div>
            <div class=\"col-sm-4\">
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
