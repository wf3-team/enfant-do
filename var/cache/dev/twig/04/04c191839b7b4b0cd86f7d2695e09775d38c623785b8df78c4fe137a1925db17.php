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
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 32
            echo "                    <tr>
                         <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 33), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                         
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
                
            </table>
        </div>

    ";
        // line 43
        echo "        ";
        // line 44
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 54
            echo "                    <tr>
                        <td>
                        ";
            // line 56
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 56))) {
                // line 57
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } else {
                // line 59
                echo "                        ";
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 59), "quantiteMl", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 59), "quantiteMl", [], "any", false, false, false, 59), "html", null, true))) : (print ("-")));
                echo "
                        ";
            }
            // line 61
            echo "                        
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
                
            </table>
        </div>
        ";
        // line 70
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 81
            echo "                    <tr>
                        <td>
                        ";
            // line 83
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 83))) {
                // line 84
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 85
$context["evenement"], "repas", [], "any", false, false, false, 85), "puree", [], "any", false, false, false, 85)) {
                // line 86
                echo "                            Purée
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 87
$context["evenement"], "repas", [], "any", false, false, false, 87), "compote", [], "any", false, false, false, 87)) {
                // line 88
                echo "                            Compote
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 89
$context["evenement"], "repas", [], "any", false, false, false, 89), "Yaourt", [], "any", false, false, false, 89)) {
                // line 90
                echo "                            Yaourt
                        ";
            } else {
                // line 92
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 94
            echo "                        </td>
                        <td>
                        ";
            // line 96
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 96))) {
                // line 97
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 98
$context["evenement"], "repas", [], "any", false, false, false, 98), "quantitepot", [], "any", false, false, false, 98)) {
                // line 99
                echo "                             ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 99), "quantitepot", [], "any", false, false, false, 99), "html", null, true);
                echo "
                        ";
            } else {
                // line 101
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 103
            echo "                        </td>
                           
                    
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 112
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
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 122
            echo "                    <tr>
                        <td>
                        ";
            // line 124
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 124))) {
                // line 125
                echo "                             <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 126
$context["evenement"], "hygiene", [], "any", false, false, false, 126), "coucheUrine", [], "any", false, false, false, 126)) {
                // line 127
                echo "                            Urine
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 128
$context["evenement"], "hygiene", [], "any", false, false, false, 128), "coucheSelle", [], "any", false, false, false, 128)) {
                // line 129
                echo "                            Selle
                        ";
            } else {
                // line 131
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 132
            echo " 
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 140
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
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 150
            echo "                    <tr>
                        <td>
                        ";
            // line 152
            if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 152))) {
                // line 153
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 154
$context["evenement"], "hygiene", [], "any", false, false, false, 154), "bain", [], "any", false, false, false, 154)) {
                // line 155
                echo "                            <i class=\"fas fa-check\"></i>

                        ";
            } else {
                // line 158
                echo "                            <i class=\"far fa-clock\"></i>
                        ";
            }
            // line 159
            echo " 
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "            </tbody>   
            </table>
        </div>
        ";
        // line 167
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
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 179
            echo "                    <tr>
                        <td>
                            ";
            // line 181
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "dodo", [], "any", false, false, false, 181)) {
                // line 182
                echo "                                <i class=\"fas fa-check\"></i>
                            ";
            } else {
                // line 184
                echo "                                <i class=\"far fa-clock\"></i>
                            ";
            }
            // line 186
            echo "                        </td> 
                        <td>
                            ";
            // line 188
            if (twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 188)) {
                // line 189
                echo "                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 189), "H:i"), "html", null, true);
                echo "
                            ";
            } else {
                // line 191
                echo "                                <i class=\"far fa-clock\"></i>
                            ";
            }
            // line 193
            echo "                        </td>
                        <td><a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 194)]), "html", null, true);
            echo "\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "            </tbody>   
            </table>
        </div>

    ";
        // line 202
        echo "    </div> 
    ";
        // line 204
        echo "    ";
        // line 205
        echo "
";
        // line 207
        echo "

    

    ";
        // line 212
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">

        ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 219, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 220
            echo "            <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 220), "html", null, true);
            echo "</h4>
            <p>";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 221), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "        </div>
    </div>
             
           


    
                    ";
        // line 232
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
        return array (  493 => 232,  484 => 223,  476 => 221,  471 => 220,  467 => 219,  460 => 215,  455 => 212,  449 => 207,  446 => 205,  444 => 204,  441 => 202,  435 => 197,  426 => 194,  423 => 193,  419 => 191,  413 => 189,  411 => 188,  407 => 186,  403 => 184,  399 => 182,  397 => 181,  393 => 179,  389 => 178,  376 => 167,  371 => 163,  362 => 159,  358 => 158,  353 => 155,  351 => 154,  348 => 153,  346 => 152,  342 => 150,  338 => 149,  327 => 140,  322 => 136,  313 => 132,  309 => 131,  305 => 129,  303 => 128,  300 => 127,  298 => 126,  295 => 125,  293 => 124,  289 => 122,  285 => 121,  274 => 112,  269 => 108,  259 => 103,  255 => 101,  249 => 99,  247 => 98,  244 => 97,  242 => 96,  238 => 94,  234 => 92,  230 => 90,  228 => 89,  225 => 88,  223 => 87,  220 => 86,  218 => 85,  215 => 84,  213 => 83,  209 => 81,  205 => 80,  193 => 70,  187 => 65,  178 => 61,  172 => 59,  168 => 57,  166 => 56,  162 => 54,  158 => 53,  147 => 44,  145 => 43,  138 => 37,  128 => 33,  125 => 32,  121 => 31,  110 => 22,  106 => 19,  102 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{parent()}}{% endblock %}

{% block content %}
    <h1>Un coup de pouce pour les parents</h1>
    <p class=\"mb-5\">L'enfantDo est fait pour vous aider dans les tâches qui concerne votre bébé. Grâce à la gestion de bébé, vous pouvez voir toutes les informations qui concerne bébé et ainsi <span class=\"gras\">mieux vous organiser.</span> <br>
    Vous savez ainsi où en est bébé dans les repas, le changement des couches, du bain et du sommeil. <br>
    Vous pouvez aussi inscrire une autre personne qui s'occupe de bébé et ainsi mieux vous répartir les tâches!
    </p>
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">{{ \"now\" | date('d/m/Y à H:i', \"Europe/Paris\" ) }}</h6>

   
    {# {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %} #}

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
    {# {% else %} #}
    {# <p>Pour profiter des fonctionnalités de l'Enfant Do, veuillez-vous authentifier</p><a href=\"{{path('app_login')}}\">Connexion</a> #}

{# {% endif %} #}


    

    {# information #}
    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo2.jpg')}}\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">

        {% for conseil in conseils %}
            <h4>{{conseil.nom}}</h4>
            <p>{{conseil.description}}</p>
        {% endfor %}
        </div>
    </div>
             
           


    
                    {# <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">show</a>
                    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\">edit</a> #}
           

    {# <a href=\"{{ path('evenement_new') }}\">Create new</a> #}
{% endblock %}

", "evenement/index.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/evenement/index.html.twig");
    }
}
