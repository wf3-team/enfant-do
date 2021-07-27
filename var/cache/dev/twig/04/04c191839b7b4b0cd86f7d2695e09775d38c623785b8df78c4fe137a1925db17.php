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
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y à H:i", "Europe/Paris"), "html", null, true);
        echo "</h6>

   
    ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "        
    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    ";
            // line 20
            echo "        <div class=\"col-md-1\">
        </div>
        ";
            // line 23
            echo "        <div class=\"col-md-1 me-3 col-3 mb-2 base\">
        <h6 class=\"text-center mt-2\">Heure</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Début</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 33
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 33), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "      
                    <tr>
                         <td>";
                    // line 35
                    ((twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 35), "H:i"), "html", null, true))) : (print ("")));
                    echo "</td>    
                    </tr>
                    ";
                }
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tbody>
                
            </table>
        </div>

    ";
            // line 45
            echo "        ";
            // line 46
            echo "        <div class=\"col-md-1 me-3 col-7 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Biberon</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 56
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 56), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 59
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 59))) {
                        // line 60
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } else {
                        // line 62
                        echo "                        ";
                        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 62), "quantiteMl", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 62), "quantiteMl", [], "any", false, false, false, 62), "html", null, true))) : (print ("-")));
                        echo "
                        ";
                    }
                    // line 64
                    echo "                        
                        </td>
                    </tr>
                    ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </tbody>
                
            </table>
        </div>
        ";
            // line 74
            echo "        <div class=\"col-md-3 col-6 me-3 mb-2 color-table\">
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
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 85
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 85), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 88
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 88))) {
                        // line 89
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 90
$context["evenement"], "repas", [], "any", false, false, false, 90), "puree", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "                            Purée
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 92
$context["evenement"], "repas", [], "any", false, false, false, 92), "compote", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "                            Compote
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 94
$context["evenement"], "repas", [], "any", false, false, false, 94), "Yaourt", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "                            Yaourt
                        ";
                    } else {
                        // line 97
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 99
                    echo "                        </td>
                        <td>
                        ";
                    // line 101
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 101))) {
                        // line 102
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 103
$context["evenement"], "repas", [], "any", false, false, false, 103), "quantitepot", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "                             ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "repas", [], "any", false, false, false, 104), "quantitepot", [], "any", false, false, false, 104), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 106
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 108
                    echo "                        </td>
                    </tr>
                    ";
                }
                // line 111
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 116
            echo "        <div class=\"col-md-1 me-3 mb-2 col-4 color-table\">
        <h6 class=\"text-center mt-2\">Couche</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 126
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 126), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 129
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 129))) {
                        // line 130
                        echo "                             <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 131
$context["evenement"], "hygiene", [], "any", false, false, false, 131), "coucheUrine", [], "any", false, false, false, 131)) {
                        // line 132
                        echo "                            Urine
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 133
$context["evenement"], "hygiene", [], "any", false, false, false, 133), "coucheSelle", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "                            Selle
                        ";
                    } else {
                        // line 136
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 137
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 141
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 146
            echo "        <div class=\"col-md-1 me-3 mb-2 col-4 color-table\">
        <h6 class=\"text-center mt-2\">Bain</h6>
            <table class=\"table text-center\">
            <thead>
                <tr>
                    <th>Prise</th>
                </tr>
            </thead>
            <tbody>
               ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 156
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 156), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                        ";
                    // line 159
                    if ((null === twig_get_attribute($this->env, $this->source, $context["evenement"], "hygiene", [], "any", false, false, false, 159))) {
                        // line 160
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 161
$context["evenement"], "hygiene", [], "any", false, false, false, 161), "bain", [], "any", false, false, false, 161)) {
                        // line 162
                        echo "                            <i class=\"fas fa-check\"></i>

                        ";
                    } else {
                        // line 165
                        echo "                            <i class=\"far fa-clock\"></i>
                        ";
                    }
                    // line 166
                    echo " 
                        </td>
                    </tr>
                    ";
                }
                // line 170
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "            </tbody>   
            </table>
        </div>
        ";
            // line 175
            echo "        <div class=\"col-md-2 me-3 mb-2 col-6 color-table\">
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
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 186, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 187
                echo "                    ";
                if ((0 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureDebut", [], "any", false, false, false, 187), "d/m/Y"), twig_date_format_filter($this->env, "now", "d/m/Y", "Europe/Paris")))) {
                    echo "  
                    <tr>
                        <td>
                            ";
                    // line 190
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "dodo", [], "any", false, false, false, 190)) {
                        // line 191
                        echo "                                <i class=\"fas fa-check\"></i>
                            ";
                    } else {
                        // line 193
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 195
                    echo "                        </td> 
                        <td>
                            ";
                    // line 197
                    if (twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 197)) {
                        // line 198
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "heureFin", [], "any", false, false, false, 198), "H:i"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 200
                        echo "                                <i class=\"far fa-clock\"></i>
                            ";
                    }
                    // line 202
                    echo "                        </td>
                        <td><a href=\"";
                    // line 203
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                    echo "\"><i class=\"fas fa-feather\"></i></a></td>
                    </tr>
                    ";
                }
                // line 206
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "            </tbody>   
            </table>
        </div>
    
    ";
            // line 212
            echo "    </div> 
 
    ";
        } else {
            // line 215
            echo "    <div class=\"alert alert-info text-center mt-5 mb-5\" role=\"alert\">
    <p>Pour profiter des fonctionnalités de l'Enfant Do, veuillez-vous authentifier</p>
    <a class=\"underline\" href=\"";
            // line 217
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">Inscrivez-vous</a> ou
    <a href=\"";
            // line 218
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connectez-vous</a> 
   </div>
";
        }
        // line 221
        echo "
    ";
        // line 223
        echo "     <div class=\"mb-5\">
        <h2>Une urgence ?</h2>
        <p>Vous avez un doute sur le comportement de bébé. Ne cherchez pas suivez le lien pour voir la liste des hopitaux :</p>
        <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soin_liste");
        echo "\">Voir la liste des hopitaux</a>
    </div>

    

    ";
        // line 232
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3 col-3\">
            <img class=\"me-2\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-md-9 col-12\">
        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 239
            echo "            <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 239), "html", null, true);
            echo "</h4>
            <p>";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 240), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
             
           


    
                    ";
        // line 251
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
        return array (  549 => 251,  540 => 242,  532 => 240,  527 => 239,  523 => 238,  517 => 235,  512 => 232,  504 => 226,  499 => 223,  496 => 221,  490 => 218,  486 => 217,  482 => 215,  477 => 212,  471 => 207,  465 => 206,  459 => 203,  456 => 202,  452 => 200,  446 => 198,  444 => 197,  440 => 195,  436 => 193,  432 => 191,  430 => 190,  423 => 187,  419 => 186,  406 => 175,  401 => 171,  395 => 170,  389 => 166,  385 => 165,  380 => 162,  378 => 161,  375 => 160,  373 => 159,  366 => 156,  362 => 155,  351 => 146,  346 => 142,  340 => 141,  334 => 137,  330 => 136,  326 => 134,  324 => 133,  321 => 132,  319 => 131,  316 => 130,  314 => 129,  307 => 126,  303 => 125,  292 => 116,  287 => 112,  281 => 111,  276 => 108,  272 => 106,  266 => 104,  264 => 103,  261 => 102,  259 => 101,  255 => 99,  251 => 97,  247 => 95,  245 => 94,  242 => 93,  240 => 92,  237 => 91,  235 => 90,  232 => 89,  230 => 88,  223 => 85,  219 => 84,  207 => 74,  201 => 69,  195 => 68,  189 => 64,  183 => 62,  179 => 60,  177 => 59,  170 => 56,  166 => 55,  155 => 46,  153 => 45,  146 => 39,  140 => 38,  134 => 35,  128 => 33,  124 => 32,  113 => 23,  109 => 20,  105 => 17,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

   
    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
        
    <div class=\"event-section row d-flex justify-content-center mb-5 pt-4 pb-4\">
    {# edition #}
        <div class=\"col-md-1\">
        </div>
        {# Tableau heure #}
        <div class=\"col-md-1 me-3 col-3 mb-2 base\">
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
        <div class=\"col-md-1 me-3 col-7 mb-2 color-table\">
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
        <div class=\"col-md-3 col-6 me-3 mb-2 color-table\">
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
        <div class=\"col-md-1 me-3 mb-2 col-4 color-table\">
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
        <div class=\"col-md-1 me-3 mb-2 col-4 color-table\">
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
        <div class=\"col-md-2 me-3 mb-2 col-6 color-table\">
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

    {# urgence #}
     <div class=\"mb-5\">
        <h2>Une urgence ?</h2>
        <p>Vous avez un doute sur le comportement de bébé. Ne cherchez pas suivez le lien pour voir la liste des hopitaux :</p>
        <a href=\"{{path('soin_liste')}}\">Voir la liste des hopitaux</a>
    </div>

    

    {# information #}
    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info row d-flex pt-4 pb-4 mb-5\">
        <div class=\"col-md-3 col-3\">
            <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo2.jpg')}}\" alt=\"rust-texture\">
        </div>
        <div class=\"col-md-9 col-12\">
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
