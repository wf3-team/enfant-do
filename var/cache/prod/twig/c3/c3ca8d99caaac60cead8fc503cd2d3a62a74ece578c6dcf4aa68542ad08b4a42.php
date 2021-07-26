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
class __TwigTemplate_5503571c8f9eee87f6439b1fea7e47f2ac9d628331cb1b53d0948c7e35012fb4 extends Template
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
        // line 1
        echo " ";
        // line 2
        echo "        <div class=\"section-profil-bebe d-flex\">
            <img class=\"me-2 section-profil-bebe-img\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bebe"] ?? null), "photo", [], "any", false, false, false, 3), "html", null, true);
        echo "\" alt=\"photo-bebe\">

            <div class=\"d-flex flex-column\">
                    <h4>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bebe"] ?? null), "prenom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h4>
                    <h6>Date de naissance :</h6>
                    <h6>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bebe"] ?? null), "dateNaissance", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo "</h6>
            </div>   
        </div>";
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
        return array (  53 => 8,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bebe_layout/_infoBebe.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/bebe_layout/_infoBebe.html.twig");
    }
}
