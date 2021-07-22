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
        echo "    <header>
    ";
        // line 7
        echo "        ";
        // line 9
        echo "
    ";
        // line 11
        echo "       <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"";
        // line 13
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
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Inscription</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Connexion</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Personne connectée
                            </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"#\">Gérer mon profil</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">Gérer le profil de bébé</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">Inscrire une autre personne</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <div class=\"container\">
    <main>

        <div class=\"row\">    

        ";
        // line 53
        echo "

        <div class=\"d-flex flex-row justify-content-center\">
            <div class=\"icon-link biberon\">
                ";
        // line 58
        echo "            </a><p>Repas</p></div>
            <div class=\"icon-link couche\">
                ";
        // line 61
        echo "            </a><p>Hygiène</p></div>
            <div class=\"icon-link dodo\">
                ";
        // line 64
        echo "            </a><p>Sommeil</p></div>
            <div class=\"icon-link statistique\">
                ";
        // line 67
        echo "            </a><p>Conseils</p></div>

            <div class=\"section-profil-bebe d-flex\">
                <img class=\"me-2\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/repas/diversification1.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
                <div class=\"d-flex flex-column\">
                    <h4>Prénom</h4>
                    <h6>Age</h6>
                    <h6>Date de naissance</h6>

                </div>
                
            </div>

        </div>
    ";
        // line 82
        echo "    </div> 
        ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo " 
   
    </main>
</div>

    
    <footer>
        <div class=\"container\">
        
        <div class=\"copyright d-flex justify-content-center\">
            <p class=\"mt-3 mb-1\">
                &copy;EnfantDo 2021 - ";
        // line 96
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

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 84
        echo "            ";
        // line 85
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
        return array (  226 => 85,  224 => 84,  214 => 83,  178 => 96,  165 => 85,  163 => 83,  160 => 82,  146 => 70,  141 => 67,  137 => 64,  133 => 61,  129 => 58,  123 => 53,  81 => 13,  77 => 11,  74 => 9,  72 => 7,  69 => 5,  59 => 4,  36 => 1,);
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
                <a class=\"navbar-brand\" href=\"{{path('evenement_index')}}\">L'Enfant Do</a>
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
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Inscription</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Connexion</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Personne connectée
                            </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"#\">Gérer mon profil</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">Gérer le profil de bébé</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">Inscrire une autre personne</a></li>
                                </ul>
                            </li>
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
                {# <a href=\"{{path('repas_new')}}\"><img class=\"text-center\" src=\"{{ asset('image/icon/icon-biberon.png')}}\" alt=\"rust-texture\"> #}
            </a><p>Repas</p></div>
            <div class=\"icon-link couche\">
                {# <a href=\"{{path('hygiene_new')}}\"><img src=\"{{ asset('image/icon/icon-couche.png')}}\" alt=\"rust-texture\"> #}
            </a><p>Hygiène</p></div>
            <div class=\"icon-link dodo\">
                {# <a href=\"{{path('evenement_sommeil')}}\"><img src=\"{{ asset('image/icon/icon-dodo.png')}}\" alt=\"rust-texture\"> #}
            </a><p>Sommeil</p></div>
            <div class=\"icon-link statistique\">
                {# <a href=\"{{path('conseil')}}\"><img src=\"{{ asset('image/icon/icon-statistique.png')}}\" alt=\"rust-texture\"> #}
            </a><p>Conseils</p></div>

            <div class=\"section-profil-bebe d-flex\">
                <img class=\"me-2\" src=\"{{ asset('image/repas/diversification1.jpg')}}\" alt=\"rust-texture\">
                <div class=\"d-flex flex-column\">
                    <h4>Prénom</h4>
                    <h6>Age</h6>
                    <h6>Date de naissance</h6>

                </div>
                
            </div>

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
