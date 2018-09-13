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
            <div class=\"col-sm-12\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
                        <div class=\"card-title\">
                            <h5>Cliente</h5>
                        </div>
                        <strong>Nome:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->source); })()), "name", array()), "html", null, true);
        echo " <br/>
                        <strong>Indirizzo:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "postalCode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "city", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->source); })()), "province", array()), "html", null, true);
        echo ") <br/>
                        <strong>Telefono:</strong> <a href=\"tel:";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->source); })()), "phone", array()), "html", null, true);
        echo "</a>  <br/>
                        <strong>E-Mail:</strong> <a href=\"mailto:";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->source); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->source); })()), "email", array()), "html", null, true);
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 33, $this->source); })()), "plantIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), "tipo", array())), "method"), "html", null, true);
        echo "<br/>
                                <strong>Piani edificio:</strong>  ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->source); })()), "pianiCasa", array()), "html", null, true);
        echo "<br/>
                                <strong>Riscaldamento:</strong>  ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 35, $this->source); })()), "heatingIntToName", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "riscaldamento", array())), "method"), "html", null, true);
        echo " <br/>
                                <strong>Trifase:</strong>  ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "trifase", array()) == true)) {
            echo " Si ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "trifase", array()) == false)) {
            echo " No ";
        }
        echo "<br/>
                            </div>
                            <div class=\"col-sm-6\">
                                <strong>Livello impianto:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "level", array()), "html", null, true);
        echo " <br/>
                                <strong>Fornitura elettrica:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), "kw", array()), "html", null, true);
        echo " Kw <br/>
                                <strong>Metratura ambienti:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "squareMeters", array()), "html", null, true);
        echo " m² <br />
                                <strong>Opere murarie:</strong> ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->source); })()), "opereMurarie", array()) == 0)) {
            echo " No ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->source); })()), "opereMurarie", array()) == 1)) {
            echo " Intonaco ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->source); })()), "opereMurarie", array()) == 2)) {
            echo " Mattone/Pietra ";
        }
        // line 43
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
                            Dettaglio Preventivo
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
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 81
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "roof", array()), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"ambient-td\">
                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["functions"]) || array_key_exists("functions", $context) ? $context["functions"] : (function () { throw new Twig_Error_Runtime('Variable "functions" does not exist.', 86, $this->source); })()), "convertAIDtoName", array(0 => twig_get_attribute($this->env, $this->source, $context["items"], "ambient", array())), "method"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "name", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "pp", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "pl", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["items"], "pt", array()), "html", null, true);
            echo "
                                        </td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                            </tbody>
                        </table>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-3\">
                                <strong>Circuiti:</strong> ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 109, $this->source); })()), "numCircuiti", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-3\">
                                <strong>Prese Telefono / Dati:</strong> ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 112, $this->source); })()), "numPreseTelefonoDati", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-4\">
                                <strong>Dispositivi per l'illuminazione di sicurezza:</strong> ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->source); })()), "illumSicurezza", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-6\">
                                <strong>SPD:</strong>
                                ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 121, $this->source); })()), "spd", array()) == 1)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 ";
        }
        // line 122
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 122, $this->source); })()), "spd", array()) == 2)) {
            echo "SPD ad arrivo linea per rendere tollerabile il rischio R1 e ai fini della protezione contro le sovratensioni ";
        }
        // line 123
        echo "                            </div>
                            <div class=\"col-6\">
                                <strong>Impianti ausiliari e risparmio energetico:</strong>
                                ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 126, $this->source); })()), "impAusiliari", array()) == 1)) {
            echo "Campanello, citofono e videocitofono ";
        }
        // line 127
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->source); })()), "impAusiliari", array()) == 2)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi ";
        }
        // line 128
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 128, $this->source); })()), "impAusiliari", array()) == 3)) {
            echo "Campanello, citofono e antintrusione, Controllo carichi, Domotica ";
        }
        // line 129
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
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto (";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 159, $this->source); })()), "sconto", array()), "html", null, true);
        echo " %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>0.00 €</strong>
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

    // line 181
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 182
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 237
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
";
        
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
        return array (  460 => 237,  451 => 236,  386 => 182,  377 => 181,  346 => 159,  314 => 129,  309 => 128,  304 => 127,  300 => 126,  295 => 123,  290 => 122,  286 => 121,  277 => 115,  271 => 112,  265 => 109,  257 => 103,  246 => 98,  240 => 95,  234 => 92,  228 => 89,  222 => 86,  216 => 83,  212 => 81,  208 => 80,  169 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  110 => 21,  104 => 20,  94 => 19,  90 => 18,  74 => 4,  65 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mostra Preventivo{% endblock %}
{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"row top-title\">
            <div class=\"col-sm-12\">
                <h3>Preventivi <small>Mostra</small></h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card card-grey\">
                    <div class=\"card-body\">
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
                            Dettaglio Preventivo
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
                                {% for items in data %}
                                    <tr>
                                        <td>
                                            {{ items.roof }}
                                        </td>
                                        <td class=\"ambient-td\">
                                            {{ functions.convertAIDtoName(items.ambient) }}
                                        </td>
                                        <td>
                                            {{ items.name }}
                                        </td>
                                        <td>
                                            {{ items.pp }}
                                        </td>
                                        <td>
                                            {{ items.pl }}
                                        </td>
                                        <td>
                                            {{ items.pt }}
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
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                IVA (22%)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                Sconto ({{ item.sconto }} %)
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                0.00 €
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">
                                <strong>Totale</strong>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <strong>0.00 €</strong>
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
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/scrollbar.min.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function(){
            \$('.scrollable').scrollbar();
        });
    </script>
{% endblock %}", "expertations/show.html.twig", "/Users/andreaemili/Desktop/gestionale/app/Resources/views/expertations/show.html.twig");
    }
}
