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
class __TwigTemplate_123d92b33e1652ea1aac47509e013446dffe6c2779d17b35ba77cf29388b47c8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conseil");
        echo "\">Actualités</a>
                            </li>
                            

                        ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 26
            echo "
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>

                        ";
        } else {
            // line 32
            echo "                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">Inscription</a>
                        </li>

                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        ";
        }
        // line 40
        echo "
                        
                        ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
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
            // line 58
            echo "                

                        ";
        }
        // line 61
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
        // line 74
        echo "

        <div class=\"d-flex flex-row justify-content-center\">
            <div class=\"icon-link biberon\">
                <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_new");
        echo "\"><img class=\"text-center\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-biberon.png"), "html", null, true);
        echo "\" alt=\"icone-repas\">
            </a><p>Repas</p></div>
            <div class=\"icon-link couche\">
                <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hygiene_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-couche.png"), "html", null, true);
        echo "\" alt=\"icon-hygiene\">
            </a><p>Hygiène</p></div>
            <div class=\"icon-link dodo\">
                <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_sommeil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-dodo.png"), "html", null, true);
        echo "\" alt=\"icone-sommeil\">
            </a><p>Sommeil</p></div>
            <div class=\"icon-link statistique\">
                <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conseil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/icon/icon-statistique.png"), "html", null, true);
        echo "\" alt=\"rust-texture\">
            </a><p>Conseils</p></div>
            
            ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 90)) {
            // line 91
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BebeLayoutController::infoBebe"));
            echo "
            ";
        }
        // line 93
        echo "
        </div>
    ";
        // line 96
        echo "    </div> 
        ";
        // line 97
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo " 
   
    </main>
</div>

    
    <footer>
        <div class=\"container\">
        
        <div class=\"copyright d-flex justify-content-center\">
            <p class=\"mt-3 mb-1\">
                &copy;EnfantDo 2021 - ";
        // line 110
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
    }

    // line 97
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "            ";
        // line 99
        echo "        ";
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
        return array (  254 => 99,  252 => 98,  248 => 97,  218 => 110,  205 => 99,  203 => 97,  200 => 96,  196 => 93,  190 => 91,  188 => 90,  180 => 87,  172 => 84,  164 => 81,  156 => 78,  150 => 74,  136 => 61,  131 => 58,  117 => 43,  115 => 42,  111 => 40,  105 => 37,  98 => 33,  95 => 32,  88 => 28,  84 => 26,  81 => 25,  74 => 21,  64 => 14,  60 => 12,  57 => 10,  55 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/layout.html.twig");
    }
}
