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
    <div class=\"mb-5\">
        <h2>Une urgence ?</h2>
        <p>Vous avez un doute sur le comportement de bébé. Ne cherchez pas suivez le lien pour voir la liste des hopitaux :</p>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soin_liste");
        echo "\">Voir la liste des hopitaux</a>
    </div>
    
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y à H:i", "Europe/Paris"), "html", null, true);
        echo "</h6>

   
    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "        
    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    ";
            // line 25
            echo "        <div class=\"col-md-1\">
        </div>
        ";
            // line 28
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
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 38
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 38), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "      
                    <tr>
                         <td>";
                    // line 40
                    ((twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 40), "H:i"), "html", null, true))) : (print ("")));
                    echo "</td>    
                    </tr>
                    ";
                }
                // line 43
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tbody>
                
            </table>
        </div>

    ";
            // line 50
            echo "        ";
            // line 51
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
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 61
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 61), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 64
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 64))) {
                        // line 65
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } else {
                        // line 67
                        echo "                        ";
                        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 67), "quantiteMl", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 67), "quantiteMl", [], "any", false, false, false, 67), "html", null, true))) : (print ("-")));
                        echo "
                        ";
                    }
                    // line 69
                    echo "                        
                        </td>
                    </tr>
                    ";
                }
                // line 73
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </tbody>
                
            </table>
        </div>
        ";
            // line 79
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
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 90
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 90), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 93
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 95
$context["evenement"], "repas", [], "any", false, false, false, 95), "puree", [], "any", false, false, false, 95)) {
                        // line 96
                        echo "                            Purée
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 97
$context["evenement"], "repas", [], "any", false, false, false, 97), "compote", [], "any", false, false, false, 97)) {
                        // line 98
                        echo "                            Compote
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 99
$context["evenement"], "repas", [], "any", false, false, false, 99), "Yaourt", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "                            Yaourt
                        ";
                    } else {
                        // line 102
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 104
                    echo "                        </td>
                        <td>
                        ";
                    // line 106
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 106))) {
                        // line 107
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 108
$context["evenement"], "repas", [], "any", false, false, false, 108), "quantitepot", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "                             ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 109), "quantitepot", [], "any", false, false, false, 109), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 111
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 113
                    echo "                        </td>
                    </tr>
                    ";
                }
                // line 116
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 121
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
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 130, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 131
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 131), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 134
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 134))) {
                        // line 135
                        echo "                             <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 136
$context["evenement"], "hygiene", [], "any", false, false, false, 136), "coucheUrine", [], "any", false, false, false, 136)) {
                        // line 137
                        echo "                            Urine
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 138
$context["evenement"], "hygiene", [], "any", false, false, false, 138), "coucheSelle", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                            Selle
                        ";
                    } else {
                        // line 141
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 142
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 146
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 151
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
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 160, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 161
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 161), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 164
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 164))) {
                        // line 165
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 166
$context["evenement"], "hygiene", [], "any", false, false, false, 166), "bain", [], "any", false, false, false, 166)) {
                        // line 167
                        echo "                            <i class=\"fas fa-check\"></i>

                        ";
                    } else {
                        // line 170
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 171
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 175
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 180
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
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 191, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 192
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 192), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                            ";
                    // line 195
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "dodo", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                                <i class=\"fas fa-check\"></i>
                            ";
                    } else {
                        // line 198
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 200
                    echo "                        </td> 
                        <td>
                            ";
                    // line 202
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 202)) {
                        // line 203
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 203), "H:i"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 205
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 207
                    echo "                        </td>
                        <td><a href=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 208)]), "html", null, true);
                    echo "\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                    ";
                }
                // line 211
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "            </tbody>   
            </table>
        </div>
    
    ";
            // line 217
            echo "    </div> 
 
    ";
        } else {
            // line 220
            echo "    <div class=\"alert alert-info text-center mt-5 mb-5\" role=\"alert\">
    <p>Pour profiter des fonctionnalités de l'Enfant Do, veuillez-vous authentifier</p>
    <a class=\"underline\" href=\"";
            // line 222
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">Inscrivez-vous</a> ou
    <a href=\"";
            // line 223
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connectez-vous</a> 
   </div>
";
        }
        // line 226
        echo "
    

    ";
        // line 230
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3\">
            <img class=\"me-2\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-9\">

        ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 238
            echo "            <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 238), "html", null, true);
            echo "</h4>
            <p>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 239), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "        </div>
    </div>
             
           


    
                    ";
        // line 250
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
        return array (  547 => 250,  538 => 241,  530 => 239,  525 => 238,  521 => 237,  514 => 233,  509 => 230,  504 => 226,  498 => 223,  494 => 222,  490 => 220,  485 => 217,  479 => 212,  473 => 211,  467 => 208,  464 => 207,  460 => 205,  454 => 203,  452 => 202,  448 => 200,  444 => 198,  440 => 196,  438 => 195,  431 => 192,  427 => 191,  414 => 180,  409 => 176,  403 => 175,  397 => 171,  393 => 170,  388 => 167,  386 => 166,  383 => 165,  381 => 164,  374 => 161,  370 => 160,  359 => 151,  354 => 147,  348 => 146,  342 => 142,  338 => 141,  334 => 139,  332 => 138,  329 => 137,  327 => 136,  324 => 135,  322 => 134,  315 => 131,  311 => 130,  300 => 121,  295 => 117,  289 => 116,  284 => 113,  280 => 111,  274 => 109,  272 => 108,  269 => 107,  267 => 106,  263 => 104,  259 => 102,  255 => 100,  253 => 99,  250 => 98,  248 => 97,  245 => 96,  243 => 95,  240 => 94,  238 => 93,  231 => 90,  227 => 89,  215 => 79,  209 => 74,  203 => 73,  197 => 69,  191 => 67,  187 => 65,  185 => 64,  178 => 61,  174 => 60,  163 => 51,  161 => 50,  154 => 44,  148 => 43,  142 => 40,  136 => 38,  132 => 37,  121 => 28,  117 => 25,  113 => 22,  111 => 21,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"mb-5\">
        <h2>Une urgence ?</h2>
        <p>Vous avez un doute sur le comportement de bébé. Ne cherchez pas suivez le lien pour voir la liste des hopitaux :</p>
        <a href=\"{{path('soin_liste')}}\">Voir la liste des hopitaux</a>
    </div>
    
    <h2>Gestion de bébé</h2>
    <h6 class=\"mt-4\">{{ \"now\" | date('d/m/Y à H:i', \"Europe/Paris\" ) }}</h6>

   
    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
        
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}      
                    <tr>
                         <td>{{ evenement.heureDebut ? evenement.heureDebut|date('H:i') : '' }}</td>    
                    </tr>
                    {% endif %}
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}  
                    <tr>
                        <td>
                        {% if evenement.repas is null %}
                            <i class=\"far fa-clock\"></i>
                        {% else %}
                        {{evenement.repas.quantiteMl ? evenement.repas.quantiteMl : '-'}}
                        {% endif %}
                        
                        </td>
                    </tr>
                    {% endif %}
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}  
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
                    {% endif %}
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}  
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
                    {% endif %}
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}  
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
                    {% endif %}
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
                    {% if evenement.heureDebut|date('d/m/Y') == \"now\" | date('d/m/Y', \"Europe/Paris\" ) %}  
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
                    {% endif %}
                {% endfor %}
            </tbody>   
            </table>
        </div>
    
    {# end div row #}
    </div> 
 
    {% else %}
    <div class=\"alert alert-info text-center mt-5 mb-5\" role=\"alert\">
    <p>Pour profiter des fonctionnalités de l'Enfant Do, veuillez-vous authentifier</p>
    <a class=\"underline\" href=\"{{path('user_new')}}\">Inscrivez-vous</a> ou
    <a href=\"{{path('app_login')}}\">Connectez-vous</a> 
   </div>
{% endif %}

    

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
