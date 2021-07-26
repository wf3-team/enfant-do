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
class __TwigTemplate_962e629e93dfe3e90e3cab2836fd71a9ed9e57b6b1e9379ff7ccfd1b188ac6fc extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Un coup de pouce pour les parents</h1>
    <p class=\"mb-5\">L'enfantDo est fait pour vous aider dans les tâches qui concerne votre bébé. Grâce à la gestion de bébé, vous pouvez voir toutes les informations qui concerne bébé et ainsi <span class=\"gras\">mieux vous organiser.</span> <br>
    Vous savez ainsi où en est bébé dans les repas, le changement des couches, du bain et du sommeil. <br>
    Vous pouvez aussi inscrire une autre personne qui s'occupe de bébé et ainsi mieux vous répartir les tâches!
    </p>
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y à H:i", "Europe/Paris"), "html", null, true);
        echo "</h6>

   
    ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "        
    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    ";
            // line 19
            echo "        <div class=\"col-md-1\">
        </div>
        ";
            // line 22
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
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 32
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 32), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "      
                    <tr>
                         <td>";
                    // line 34
                    ((twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 34), "H:i"), "html", null, true))) : (print ("")));
                    echo "</td>    
                    </tr>
                    ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </tbody>
                
            </table>
        </div>

    ";
            // line 44
            echo "        ";
            // line 45
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
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 55
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 55), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 58
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 58))) {
                        // line 59
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } else {
                        // line 61
                        echo "                        ";
                        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 61), "quantiteMl", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 61), "quantiteMl", [], "any", false, false, false, 61), "html", null, true))) : (print ("-")));
                        echo "
                        ";
                    }
                    // line 63
                    echo "                        
                        </td>
                    </tr>
                    ";
                }
                // line 67
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </tbody>
                
            </table>
        </div>
        ";
            // line 73
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
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 84
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 84), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 87
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 87))) {
                        // line 88
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 89
$context["evenement"], "repas", [], "any", false, false, false, 89), "puree", [], "any", false, false, false, 89)) {
                        // line 90
                        echo "                            Purée
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 91
$context["evenement"], "repas", [], "any", false, false, false, 91), "compote", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "                            Compote
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 93
$context["evenement"], "repas", [], "any", false, false, false, 93), "Yaourt", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                            Yaourt
                        ";
                    } else {
                        // line 96
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 98
                    echo "                        </td>
                        <td>
                        ";
                    // line 100
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 100))) {
                        // line 101
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 102
$context["evenement"], "repas", [], "any", false, false, false, 102), "quantitepot", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "                             ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 103), "quantitepot", [], "any", false, false, false, 103), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 105
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 107
                    echo "                        </td>
                    </tr>
                    ";
                }
                // line 110
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 115
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
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 125
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 125), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 128
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 128))) {
                        // line 129
                        echo "                             <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 130
$context["evenement"], "hygiene", [], "any", false, false, false, 130), "coucheUrine", [], "any", false, false, false, 130)) {
                        // line 131
                        echo "                            Urine
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 132
$context["evenement"], "hygiene", [], "any", false, false, false, 132), "coucheSelle", [], "any", false, false, false, 132)) {
                        // line 133
                        echo "                            Selle
                        ";
                    } else {
                        // line 135
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 136
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 140
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 145
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
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 155
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 155), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 158
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 158))) {
                        // line 159
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 160
$context["evenement"], "hygiene", [], "any", false, false, false, 160), "bain", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                            <i class=\"fas fa-check\"></i>

                        ";
                    } else {
                        // line 164
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 165
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 169
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 174
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
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 186
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 186), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                            ";
                    // line 189
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "dodo", [], "any", false, false, false, 189)) {
                        // line 190
                        echo "                                <i class=\"fas fa-check\"></i>
                            ";
                    } else {
                        // line 192
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 194
                    echo "                        </td> 
                        <td>
                            ";
                    // line 196
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 196)) {
                        // line 197
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 197), "H:i"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 199
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 201
                    echo "                        </td>
                        <td><a href=\"";
                    // line 202
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 202)]), "html", null, true);
                    echo "\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                    ";
                }
                // line 205
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "            </tbody>   
            </table>
        </div>
    
    ";
            // line 211
            echo "    </div> 
 
    ";
        } else {
            // line 214
            echo "    <div class=\"alert alert-info text-center mt-5 mb-5\" role=\"alert\">
    <p>Pour profiter des fonctionnalités de l'Enfant Do, veuillez-vous authentifier</p>
    <a class=\"underline\" href=\"";
            // line 216
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">Inscrivez-vous</a> ou
    <a href=\"";
            // line 217
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connectez-vous</a> 
   </div>
";
        }
        // line 220
        echo "
    

    ";
        // line 224
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">

        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conseils"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 232
            echo "            <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 232), "html", null, true);
            echo "</h4>
            <p>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 233), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "        </div>
    </div>
             
           


    
                    ";
        // line 244
        echo "           

    ";
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
        return array (  508 => 244,  499 => 235,  491 => 233,  486 => 232,  482 => 231,  475 => 227,  470 => 224,  465 => 220,  459 => 217,  455 => 216,  451 => 214,  446 => 211,  440 => 206,  434 => 205,  428 => 202,  425 => 201,  421 => 199,  415 => 197,  413 => 196,  409 => 194,  405 => 192,  401 => 190,  399 => 189,  392 => 186,  388 => 185,  375 => 174,  370 => 170,  364 => 169,  358 => 165,  354 => 164,  349 => 161,  347 => 160,  344 => 159,  342 => 158,  335 => 155,  331 => 154,  320 => 145,  315 => 141,  309 => 140,  303 => 136,  299 => 135,  295 => 133,  293 => 132,  290 => 131,  288 => 130,  285 => 129,  283 => 128,  276 => 125,  272 => 124,  261 => 115,  256 => 111,  250 => 110,  245 => 107,  241 => 105,  235 => 103,  233 => 102,  230 => 101,  228 => 100,  224 => 98,  220 => 96,  216 => 94,  214 => 93,  211 => 92,  209 => 91,  206 => 90,  204 => 89,  201 => 88,  199 => 87,  192 => 84,  188 => 83,  176 => 73,  170 => 68,  164 => 67,  158 => 63,  152 => 61,  148 => 59,  146 => 58,  139 => 55,  135 => 54,  124 => 45,  122 => 44,  115 => 38,  109 => 37,  103 => 34,  97 => 32,  93 => 31,  82 => 22,  78 => 19,  74 => 16,  72 => 15,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenement/index.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/evenement/index.html.twig");
    }
}
