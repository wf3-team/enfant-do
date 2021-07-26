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

/* bebe_layout/_infoBebe.html.twig */
class __TwigTemplate_a4d4f62a4f676942eda83a3fc0025ac4d1d82911ff8096009e79e5566dc16f87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bebe_layout/_infoBebe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bebe_layout/_infoBebe.html.twig"));

        // line 1
        echo " ";
        // line 2
        echo "        <div class=\"section-profil-bebe d-flex\">
            <img class=\"me-2 section-profil-bebe-img\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 3, $this->source); })()), "photo", [], "any", false, false, false, 3), "html", null, true);
        echo "\" alt=\"photo-bebe\">

            <div class=\"d-flex flex-column\">
                    <h4>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h4>
                    <h6>Date de naissance :</h6>
                    <h6>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 8, $this->source); })()), "dateNaissance", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo "</h6>
            </div>   
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bebe_layout/_infoBebe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {# Informations du bébé #}
        <div class=\"section-profil-bebe d-flex\">
            <img class=\"me-2 section-profil-bebe-img\" src=\"{{bebe.photo}}\" alt=\"photo-bebe\">

            <div class=\"d-flex flex-column\">
                    <h4>{{bebe.prenom}}</h4>
                    <h6>Date de naissance :</h6>
                    <h6>{{bebe.dateNaissance| date('d/m/Y')}}</h6>
            </div>   
        </div>", "bebe_layout/_infoBebe.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/bebe_layout/_infoBebe.html.twig");
    }
}
