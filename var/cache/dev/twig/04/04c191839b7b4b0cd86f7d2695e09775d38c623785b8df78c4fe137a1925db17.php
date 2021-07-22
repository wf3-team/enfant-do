<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* evenement/index.html.twig */
class __TwigTemplate_927be46647b739e204eb2d2162dc199f3a9ebcf64fa3cb127f02a36612959b3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <p class=\"mt-5 mb-5\">L'enfantDo est fait pour vous aider dans les tâches qui concerne votre bébé. Grâce à la gestion de bébé, vous pouvez voir toutes les informations qui concerne bébé et ainsi mieux vous organiser.</p>
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y à H:i", "Europe/Paris"), "html", null, true);
        echo "</h6>

    ";
        // line 11
        echo "    

    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    ";
        // line 15
        echo "        <div class=\"col-md-1\">
        </div>
        ";
        // line 18
        echo "        <div class=\"col-md-1 me-3 col-2 mb-2 base\">
        <h6 class=\"text-center mt-2\">Heure</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Début</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 28
            echo "                    <tr>
                         <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 29), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                         
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>
                
            </table>
        </div>

    ";
        // line 39
        echo "        ";
        // line 40
        echo "        <div class=\"col-md-1 me-3 col-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Biberon</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 50
            echo "                    <tr>
                        <td>
                        ";
            // line 52
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 52))) {
                // line 53
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } else {
                // line 55
                echo "                        ";
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 55), "quantiteMl", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 55), "quantiteMl", [], "any", false, false, false, 55), "html", null, true))) : (print ("-")));
                echo "
                        ";
            }
            // line 57
            echo "                        
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
                
            </table>
        </div>
        ";
        // line 66
        echo "        <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Diversification</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Quantité (pot)</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 77
            echo "                    <tr>
                        <td>
                        ";
            // line 79
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 79))) {
                // line 80
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 81
$context["evenement"], "repas", [], "any", false, false, false, 81), "puree", [], "any", false, false, false, 81)) {
                // line 82
                echo "                            Purée
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 83
$context["evenement"], "repas", [], "any", false, false, false, 83), "compote", [], "any", false, false, false, 83)) {
                // line 84
                echo "                            Compote
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 85
$context["evenement"], "repas", [], "any", false, false, false, 85), "Yaourt", [], "any", false, false, false, 85)) {
                // line 86
                echo "                            Yaourt
                        ";
            } else {
                // line 88
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 90
            echo "                        </td>
                        <td>
                        ";
            // line 92
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 92))) {
                // line 93
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 94
$context["evenement"], "repas", [], "any", false, false, false, 94), "quantitepot", [], "any", false, false, false, 94)) {
                // line 95
                echo "                             ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 95), "quantitepot", [], "any", false, false, false, 95), "html", null, true);
                echo "
                        ";
            } else {
                // line 97
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 99
            echo "                        </td>
                           
                    
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 108
        echo "        <div class=\"col-md-1 me-3 mb-2 col-3 color-table\">
        <h6 class=\"text-center mt-2\">Couche</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 118
            echo "                    <tr>
                        <td>
                        ";
            // line 120
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 120))) {
                // line 121
                echo "                             <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 122
$context["evenement"], "hygiene", [], "any", false, false, false, 122), "coucheUrine", [], "any", false, false, false, 122)) {
                // line 123
                echo "                            Urine
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 124
$context["evenement"], "hygiene", [], "any", false, false, false, 124), "coucheSelle", [], "any", false, false, false, 124)) {
                // line 125
                echo "                            Selle
                        ";
            } else {
                // line 127
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 128
            echo " 
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 136
        echo "        <div class=\"col-md-1 me-3 mb-2 col-3 color-table\">
        <h6 class=\"text-center mt-2\">Bain</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Prise</th>
                </tr>
            </thead>
            <tbody>
               ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 146
            echo "                    <tr>
                        <td>
                        ";
            // line 148
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 148))) {
                // line 149
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 150
$context["evenement"], "hygiene", [], "any", false, false, false, 150), "bain", [], "any", false, false, false, 150)) {
                // line 151
                echo "                            <i class=\"fas fa-check\"></i>

                        ";
            } else {
                // line 154
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 155
            echo " 
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 163
        echo "        <div class=\"col-md-2 me-3 mb-2 col-4 color-table\">
        <h6 class=\"text-center mt-2\">Sommeil</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Début</th>
                    <th>Fin</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 175
            echo "                    <tr>
                        <td>
                            ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "dodo", [], "any", false, false, false, 177)) {
                // line 178
                echo "                                <i class=\"fas fa-check\"></i>
                            ";
            } else {
                // line 180
                echo "                                <i class=\"far fa-clock\"></i>
                            ";
            }
            // line 182
            echo "                        </td> 
                        <td>
                            ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 184)) {
                // line 185
                echo "                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 185), "H:i"), "html", null, true);
                echo "
                            ";
            } else {
                // line 187
                echo "                                <i class=\"far fa-clock\"></i>
                            ";
            }
            // line 189
            echo "                        </td>
                        <td><a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "            </tbody>   
            </table>
        </div>

    ";
        // line 198
        echo "    </div> 
    ";
        // line 202
        echo "

    

    ";
        // line 207
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">
        <h4>Conseil d’ Eté !</h4>
            <p>Bébé et la chaleur : le mot d’ordre est « ombre et hydratation ».  
                Habillez bébé légèrement, ne le mettez jamais au soleil. Prévoyez de l’eau, tant qu’il en voudra. Si vous lui donnez du lait, attention à ne pas conserver celui-ci trop longtemps dans un biberon hors du frigo. Un brumisateur d’eau sera un accessoire très utile, pour bébé comme pour maman.

                Bébé et les petites bêtes : loin des villes, les insectes sont en leur royaume. 
                Pensez aux accessoires (moustiquaires, prises insecticides) pour la nuit. Attention aux crèmes antimoustiques pour adultes, pas toujours adaptées pour bébé. Attention à la curiosité de bébé envers les insectes piquants, ceux-ci n’aiment pas être attrapés.</p>
        </div>
    </div>
             
           


    
                    ";
        // line 228
        echo "           

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 228,  451 => 210,  446 => 207,  440 => 202,  437 => 198,  431 => 193,  422 => 190,  419 => 189,  415 => 187,  409 => 185,  407 => 184,  403 => 182,  399 => 180,  395 => 178,  393 => 177,  389 => 175,  385 => 174,  372 => 163,  367 => 159,  358 => 155,  354 => 154,  349 => 151,  347 => 150,  344 => 149,  342 => 148,  338 => 146,  334 => 145,  323 => 136,  318 => 132,  309 => 128,  305 => 127,  301 => 125,  299 => 124,  296 => 123,  294 => 122,  291 => 121,  289 => 120,  285 => 118,  281 => 117,  270 => 108,  265 => 104,  255 => 99,  251 => 97,  245 => 95,  243 => 94,  240 => 93,  238 => 92,  234 => 90,  230 => 88,  226 => 86,  224 => 85,  221 => 84,  219 => 83,  216 => 82,  214 => 81,  211 => 80,  209 => 79,  205 => 77,  201 => 76,  189 => 66,  183 => 61,  174 => 57,  168 => 55,  164 => 53,  162 => 52,  158 => 50,  154 => 49,  143 => 40,  141 => 39,  134 => 33,  124 => 29,  121 => 28,  117 => 27,  106 => 18,  102 => 15,  97 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{parent()}}{% endblock %}

{% block content %}
    <p class=\"mt-5 mb-5\">L'enfantDo est fait pour vous aider dans les tâches qui concerne votre bébé. Grâce à la gestion de bébé, vous pouvez voir toutes les informations qui concerne bébé et ainsi mieux vous organiser.</p>
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">{{ \"now\" | date('d/m/Y à H:i', \"Europe/Paris\" ) }}</h6>

    {# {% if isToday %} #}
    

    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    {# edition #}
        <div class=\"col-md-1\">
        </div>
        {# Tableau heure #}
        <div class=\"col-md-1 me-3 col-2 mb-2 base\">
        <h6 class=\"text-center mt-2\">Heure</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Début</th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>
                         <td>{{ evenement.heureDebut ? evenement.heureDebut|date('H:i') : '' }}</td>
                         
                    </tr>
                {% endfor %}
            </tbody>
                
            </table>
        </div>

    {# Tableau repas #}
        {# Tableau biberon #}
        <div class=\"col-md-1 me-3 col-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Biberon</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>
                        <td>
                        {% if evenement.repas is null %}
                            <i class=\"far fa-clock\"></i>
                        {% else %}
                        {{evenement.repas.quantiteMl ? evenement.repas.quantiteMl : '-'}}
                        {% endif %}
                        
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
                
            </table>
        </div>
        {# Tableau diversification #}
        <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Diversification</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Quantité (pot)</th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>
                        <td>
                        {% if evenement.repas is null %}
                            <i class=\"far fa-clock\"></i>
                        {% elseif evenement.repas.puree %}
                            Purée
                        {% elseif evenement.repas.compote %}
                            Compote
                        {% elseif evenement.repas.Yaourt %}
                            Yaourt
                        {% else %}
                            <i class=\"far fa-clock\"></i>
                        {% endif %}
                        </td>
                        <td>
                        {% if evenement.repas is null %}
                            <i class=\"far fa-clock\"></i>
                        {% elseif evenement.repas.quantitepot %}
                             {{evenement.repas.quantitepot}}
                        {% else %}
                            <i class=\"far fa-clock\"></i>
                        {% endif %}
                        </td>
                           
                    
                    </tr>
                {% endfor %}
            </tbody>   
            </table>
        </div>
        {# Tableau hygiène #}
        <div class=\"col-md-1 me-3 mb-2 col-3 color-table\">
        <h6 class=\"text-center mt-2\">Couche</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>
                        <td>
                        {% if evenement.hygiene is null %}
                             <i class=\"far fa-clock\"></i>
                        {% elseif evenement.hygiene.coucheUrine %}
                            Urine
                        {% elseif evenement.hygiene.coucheSelle %}
                            Selle
                        {% else %}
                            <i class=\"far fa-clock\"></i>
                        {% endif %} 
                        </td>
                    </tr>
                {% endfor %}
            </tbody>   
            </table>
        </div>
        {# Tableau bain #}
        <div class=\"col-md-1 me-3 mb-2 col-3 color-table\">
        <h6 class=\"text-center mt-2\">Bain</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Prise</th>
                </tr>
            </thead>
            <tbody>
               {% for evenement in evenements %}
                    <tr>
                        <td>
                        {% if evenement.hygiene is null %}
                            <i class=\"far fa-clock\"></i>
                        {% elseif evenement.hygiene.bain %}
                            <i class=\"fas fa-check\"></i>

                        {% else %}
                            <i class=\"far fa-clock\"></i>
                        {% endif %} 
                        </td>
                    </tr>
                {% endfor %}
            </tbody>   
            </table>
        </div>
        {# Tableau dodo #}
        <div class=\"col-md-2 me-3 mb-2 col-4 color-table\">
        <h6 class=\"text-center mt-2\">Sommeil</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Début</th>
                    <th>Fin</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>
                        <td>
                            {% if evenement.dodo %}
                                <i class=\"fas fa-check\"></i>
                            {% else %}
                                <i class=\"far fa-clock\"></i>
                            {% endif %}
                        </td> 
                        <td>
                            {% if evenement.heureFin %}
                                {{evenement.heureFin|date('H:i')}}
                            {% else %}
                                <i class=\"far fa-clock\"></i>
                            {% endif %}
                        </td>
                        <td><a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                {% endfor %}
            </tbody>   
            </table>
        </div>

    {# end div row #}
    </div> 
    {# {% else %}
    <p>Veuillez rentrer de nouvelles informations</p> 
{% endif %}  #}


    

    {# information #}
    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo2.jpg')}}\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">
        <h4>Conseil d’ Eté !</h4>
            <p>Bébé et la chaleur : le mot d’ordre est « ombre et hydratation ».  
                Habillez bébé légèrement, ne le mettez jamais au soleil. Prévoyez de l’eau, tant qu’il en voudra. Si vous lui donnez du lait, attention à ne pas conserver celui-ci trop longtemps dans un biberon hors du frigo. Un brumisateur d’eau sera un accessoire très utile, pour bébé comme pour maman.

                Bébé et les petites bêtes : loin des villes, les insectes sont en leur royaume. 
                Pensez aux accessoires (moustiquaires, prises insecticides) pour la nuit. Attention aux crèmes antimoustiques pour adultes, pas toujours adaptées pour bébé. Attention à la curiosité de bébé envers les insectes piquants, ceux-ci n’aiment pas être attrapés.</p>
        </div>
    </div>
             
           


    
                    {# <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">show</a>
                    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\">edit</a> #}
           

    {# <a href=\"{{ path('evenement_new') }}\">Create new</a> #}
{% endblock %}

", "evenement/index.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/evenement/index.html.twig");
    }
}
