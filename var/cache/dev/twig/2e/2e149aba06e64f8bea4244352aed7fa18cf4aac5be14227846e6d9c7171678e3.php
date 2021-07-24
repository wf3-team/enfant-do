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
        echo "    <div class=\"col-md-3 col-5 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Heure de fin</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "heure_fin", [], "any", false, false, false, 32), 'widget');
        echo "</td>    
                    </tr>
            </tbody>
            </table>
    </div>
      <div>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "enregistrer", [], "any", false, false, false, 37), 'widget');
        echo "</div>
   ";
        // line 46
        echo "</div> 
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "


";
        // line 51
        echo "        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-3\">
                <img class=\"me-2\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo1.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
            </div>
            <div class=\"col-9\">

            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 59
            echo "                <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 59), "html", null, true);
            echo "</h4>
                <p>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
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
        return array (  159 => 62,  151 => 60,  146 => 59,  142 => 58,  135 => 54,  130 => 51,  124 => 47,  121 => 46,  117 => 37,  109 => 32,  102 => 27,  94 => 20,  92 => 19,  85 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
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
   {# {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
        <div>{{form_widget(form.enregistrer)}}</div>
        {% else %}
        <div class=\"alert alert-info m-3\" role=\"alert\">
            Authentifiez-vous pour rentrer les informations de bébé  <a class=\"underline\" href=\"{{path('user_new')}}\"> Inscrivez-vous</a> ou
            <a href=\"{{path('app_login')}}\"> Connectez-vous</a> 
        </div> 
        {% endif %} #}
</div> 
{{ form_end(form) }}


{# information #}
        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-3\">
                <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo1.jpg')}}\" alt=\"rust-texture\">
            </div>
            <div class=\"col-9\">

            {% for conseil in conseils %}
                <h4>{{conseil.nom}}</h4>
                <p>{{conseil.description}}</p>
            {% endfor %}
            </div>
        </div> 
</div>


{% endblock %}

", "evenement/_form.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/evenement/_form.html.twig");
    }
}
