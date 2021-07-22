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

/* evenement/_form.html.twig */
class __TwigTemplate_54feed1bd68e55589522c3aed3aea74184702afe076a770222a5fdc281239716 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "evenement/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"mb-5\">
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i> Retour à la page d'accueil</a>
    </div>  
   
<h2>Gestion du sommeil</h2>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
  <div class=\"event-section row d-flex justify-content-center mb-5\">

    ";
        // line 14
        echo "    <div class=\"col-md-3 col-10 mb-2 me-3 color-table\">
        <h6 class=\"text-center mt-2\">Sommeil</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dodo", [], "any", false, false, false, 19), 'widget', ["label" => "Bébé dort"]);
        // line 20
        echo "</td>    
                    </tr>
            </tbody>
            </table>
    </div>

    ";
        // line 27
        echo "    ";
        // line 37
        echo "     ";
        // line 38
        echo "    <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Heure de fin</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "heure_fin", [], "any", false, false, false, 43), 'widget');
        echo "</td>    
                    </tr>
            </tbody>
            </table>
    </div>
    
    
   <div>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "enregistrer", [], "any", false, false, false, 50), 'widget');
        echo "</div>
</div> 
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "


";
        // line 56
        echo "        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-3\">
                <img class=\"me-2\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo1.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
            </div>
            <div class=\"col-9\">
            <h4>Quand fera t-il ses nuits ?</h4>
                <p>Pour « faire ses nuits » et rester 5 ou 6 heures d’affilée sans boire, votre bébé doit pouvoir faire des réserves d’énergie. Il doit aussi pouvoir régler son horloge biologique, c’est-à-dire les variations de température de son corps, son système cardiovasculaire et ses cycles hormonaux.
                Chaque nouveau-né apprend à faire ses nuits à son rythme, tout comme il apprendra un jour à ramper et à marcher. Vous pouvez seulement l’aider.
                À l’âge de 2 mois (8 semaines), seul 1 bébé sur 4 fait « ses nuits », c’est-à-dire qu’il dort au moins 5 ou 6 heures de suite entre 11 h du soir et 8 h du matin. À 4 mois, 3 bébés sur 4 le font. À 10 mois, c’est 90 % des bébés qui font leurs nuits.</p>
            </div>
        </div> 
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  134 => 56,  128 => 52,  123 => 50,  113 => 43,  106 => 38,  104 => 37,  102 => 27,  94 => 20,  92 => 19,  85 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<div class=\"container\">
    <div class=\"mb-5\">
        <a href=\"{{path('evenement_index')}}\"><i class=\"fas fa-arrow-left\"></i> Retour à la page d'accueil</a>
    </div>  
   
<h2>Gestion du sommeil</h2>
{{ form_start(form) }}
  <div class=\"event-section row d-flex justify-content-center mb-5\">

    {# Sommeil #}
    <div class=\"col-md-3 col-10 mb-2 me-3 color-table\">
        <h6 class=\"text-center mt-2\">Sommeil</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.dodo, {
                            'label': 'Bébé dort'}) }}</td>    
                    </tr>
            </tbody>
            </table>
    </div>

    {# heure_début #}
    {# <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Heure début</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.heure_debut) }}</td>    
                    </tr>
            </tbody>
            </table>
    </div> #}
     {# heure_fin #}
    <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Heure de fin</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.heure_fin) }}</td>    
                    </tr>
            </tbody>
            </table>
    </div>
    
    
   <div>{{form_widget(form.enregistrer)}}</div>
</div> 
{{ form_end(form) }}


{# information #}
        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-3\">
                <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo1.jpg')}}\" alt=\"rust-texture\">
            </div>
            <div class=\"col-9\">
            <h4>Quand fera t-il ses nuits ?</h4>
                <p>Pour « faire ses nuits » et rester 5 ou 6 heures d’affilée sans boire, votre bébé doit pouvoir faire des réserves d’énergie. Il doit aussi pouvoir régler son horloge biologique, c’est-à-dire les variations de température de son corps, son système cardiovasculaire et ses cycles hormonaux.
                Chaque nouveau-né apprend à faire ses nuits à son rythme, tout comme il apprendra un jour à ramper et à marcher. Vous pouvez seulement l’aider.
                À l’âge de 2 mois (8 semaines), seul 1 bébé sur 4 fait « ses nuits », c’est-à-dire qu’il dort au moins 5 ou 6 heures de suite entre 11 h du soir et 8 h du matin. À 4 mois, 3 bébés sur 4 le font. À 10 mois, c’est 90 % des bébés qui font leurs nuits.</p>
            </div>
        </div> 
</div>


{% endblock %}

", "evenement/_form.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/evenement/_form.html.twig");
    }
}
