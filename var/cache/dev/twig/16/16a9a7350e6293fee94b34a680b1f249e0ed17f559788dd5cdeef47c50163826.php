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

/* layout.html.twig */
class __TwigTemplate_1439930e89023fcd122df0a048489422863d1af72f7455161d2c0c2ad8181565 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <header>
    ";
        // line 8
        echo "        ";
        // line 10
        echo "
    ";
        // line 12
        echo "       <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand logo ms-4\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">L'Enfant Do</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">Actualités</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>
                            
                        ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 28
            echo "
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>

                        ";
        } else {
            // line 34
            echo "                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">Inscription</a>
                        </li>

                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        ";
        }
        // line 42
        echo "
                        
                        ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "                        <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profil
                        </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Gérer mon profil</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Gérer le profil de bébé</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Inscrire une autre personne</a></li>
                            </ul>
                        </li>

                        ";
            // line 60
            echo "                

                        ";
        }
        // line 63
        echo "

                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <div class=\"container\">
    <main>

        <div class=\"row\">    

        ";
        // line 76
        echo "

        <div class=\"d-flex flex-row justify-content-center\">
            <div class=\"icon-link biberon\">
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_new");
        echo "\"><img class=\"text-center\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-biberon.png"), "html", null, true);
        echo "\" alt=\"icone-repas\">
            </a><p>Repas</p></div>
            <div class=\"icon-link couche\">
                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hygiene_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-couche.png"), "html", null, true);
        echo "\" alt=\"icon-hygiene\">
            </a><p>Hygiène</p></div>
            <div class=\"icon-link dodo\">
                <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_sommeil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-dodo.png"), "html", null, true);
        echo "\" alt=\"icone-sommeil\">
            </a><p>Sommeil</p></div>
            <div class=\"icon-link statistique\">
                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conseil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-statistique.png"), "html", null, true);
        echo "\" alt=\"rust-texture\">
            </a><p>Conseils</p></div>
            
            ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)) {
            // line 93
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BebeLayoutController::infoBebe"));
            echo "
            ";
        }
        // line 95
        echo "
        </div>
    ";
        // line 98
        echo "    </div> 
        ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo " 
   
    </main>
</div>

    
    <footer>
        <div class=\"container\">
        
        <div class=\"copyright d-flex justify-content-center\">
            <p class=\"mt-3 mb-1\">
                &copy;EnfantDo 2021 - ";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " all right reserved 
            </p>
        </div>
        <hr>
        <div class=\"row d-flex\">

            <div class=\"col-md-5 col-5\">
                <p>Suivez-nous</p>
                <div class=\"d-flex flex-row\">
                    <a href=\"\"><p class=\"me-2 footer-link\">Twitter</p></a>
                    <a href=\"\"><p class=\"me-2 footer-link\">Facebook</p></a>
                    <a href=\"\"><p p class=\"footer-link\">Instagram</p></a>
                </div>
            </div>
            <div class=\"col-md-7 col-4\">
                <p>L'Enfant Do</p>
                <p>10 rue des alouettes</p>
                <p>750015 Paris</p>
        
            </div>
        
        </div>
    </div>
    </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "            ";
        // line 101
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 101,  281 => 100,  271 => 99,  235 => 112,  222 => 101,  220 => 99,  217 => 98,  213 => 95,  207 => 93,  205 => 92,  197 => 89,  189 => 86,  181 => 83,  173 => 80,  167 => 76,  153 => 63,  148 => 60,  134 => 45,  132 => 44,  128 => 42,  122 => 39,  115 => 35,  112 => 34,  105 => 30,  101 => 28,  98 => 27,  82 => 14,  78 => 12,  75 => 10,  73 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
   
    <header>
    {# Intégration des images, il faut installer : composer require symfony/asset #}
        {# <img src=\"{{ asset('image/header.jpeg')}}\" alt=\"rust-texture\"> 
        #}

    {# Intégration de la nav Bootstrap : #}
       <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand logo ms-4\" href=\"{{path('evenement_index')}}\">L'Enfant Do</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"#\">Actualités</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                            </li>
                            
                        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %} {# signifie que l'utilisateur est authentifié est connecté #}

                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\"app_logout\") }}\">Déconnexion</a>
                        </li>

                        {% else %}
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\"user_new\") }}\">Inscription</a>
                        </li>

                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\"app_login\") }}\">Connexion</a>
                        </li>
                        {% endif %}

                        
                        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                        <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profil
                        </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#\">Gérer mon profil</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Gérer le profil de bébé</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Inscrire une autre personne</a></li>
                            </ul>
                        </li>

                        {# <li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Bonjour {{pseudo}}</a>
                        </li> #}
                

                        {% endif %}


                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <div class=\"container\">
    <main>

        <div class=\"row\">    

        {# Liens #}


        <div class=\"d-flex flex-row justify-content-center\">
            <div class=\"icon-link biberon\">
                <a href=\"{{path('repas_new')}}\"><img class=\"text-center\" src=\"{{ asset('image/icon/icon-biberon.png')}}\" alt=\"icone-repas\">
            </a><p>Repas</p></div>
            <div class=\"icon-link couche\">
                <a href=\"{{path('hygiene_new')}}\"><img src=\"{{ asset('image/icon/icon-couche.png')}}\" alt=\"icon-hygiene\">
            </a><p>Hygiène</p></div>
            <div class=\"icon-link dodo\">
                <a href=\"{{path('evenement_sommeil')}}\"><img src=\"{{ asset('image/icon/icon-dodo.png')}}\" alt=\"icone-sommeil\">
            </a><p>Sommeil</p></div>
            <div class=\"icon-link statistique\">
                <a href=\"{{path('conseil')}}\"><img src=\"{{ asset('image/icon/icon-statistique.png')}}\" alt=\"rust-texture\">
            </a><p>Conseils</p></div>
            
            {% if app.user %}
                {{ render(controller('App\\\\Controller\\\\BebeLayoutController::infoBebe')) }}
            {% endif %}

        </div>
    {# end row #}
    </div> 
        {% block content %}
            {# c'est ici que viendra s'inserer le contenu propre à chaque page  #}
        {% endblock %} 
   
    </main>
</div>

    
    <footer>
        <div class=\"container\">
        
        <div class=\"copyright d-flex justify-content-center\">
            <p class=\"mt-3 mb-1\">
                &copy;EnfantDo 2021 - {{\"now\" | date(\"Y\") }} all right reserved 
            </p>
        </div>
        <hr>
        <div class=\"row d-flex\">

            <div class=\"col-md-5 col-5\">
                <p>Suivez-nous</p>
                <div class=\"d-flex flex-row\">
                    <a href=\"\"><p class=\"me-2 footer-link\">Twitter</p></a>
                    <a href=\"\"><p class=\"me-2 footer-link\">Facebook</p></a>
                    <a href=\"\"><p p class=\"footer-link\">Instagram</p></a>
                </div>
            </div>
            <div class=\"col-md-7 col-4\">
                <p>L'Enfant Do</p>
                <p>10 rue des alouettes</p>
                <p>750015 Paris</p>
        
            </div>
        
        </div>
    </div>
    </footer>

{% endblock %}", "layout.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/layout.html.twig");
    }
}
