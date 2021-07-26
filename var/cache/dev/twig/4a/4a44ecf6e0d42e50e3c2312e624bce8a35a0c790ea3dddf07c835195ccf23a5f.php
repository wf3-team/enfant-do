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

/* hygiene/_form.html.twig */
class __TwigTemplate_e55ebc0ed2e0cef9ae0cbadadf012c72a3d57b6e6352c6c819026eaadf854693 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hygiene/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hygiene/_form.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "hygiene/_form.html.twig", 1);
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

<h2 class=\"mb-2 p-1\">Gestion de l'hygiène</h2>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
 <div class=\"event-section row d-flex justify-content-center mb-5 pt-5 pb-5\">

    ";
        // line 14
        echo "    <div class=\"col-md-4 col-12 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Couche</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "couche_urine", [], "any", false, false, false, 19), 'widget');
        echo "</td>  
                         <td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "couche_selle", [], "any", false, false, false, 20), 'widget');
        echo "</td>  
                    </tr>
                 
            </tbody>
            </table>
    </div>
    ";
        // line 27
        echo "    <div class=\"col-md-5 col-12 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Bain</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "bain", [], "any", false, false, false, 32), 'widget');
        echo "</td>   
                    </tr>
            </tbody>
            </table>
    </div>
    
    ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "         <div class=\"row\">
            <div class=\"offset-1 col-2 mt-4\">
                <button class=\"btn btn-primary\">";
            // line 41
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            echo "</button>
            </div>
        </div>
    ";
        } else {
            // line 45
            echo "        <div class=\"alert alert-info m-3\" role=\"alert\">
            Authentifiez-vous pour rentrer les informations de bébé  <a class=\"underline\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\"> Inscrivez-vous</a> ou
            <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Connectez-vous</a> 
        </div> 
    ";
        }
        // line 50
        echo "    </div>  
    


";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "

";
        // line 57
        echo "    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
        <div class=\"col-md-3 col-3\">
            <img class=\"me-2\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/hygiene/photo-hygiène2.png"), "html", null, true);
        echo "\" alt=\"rust-texture\">
        </div>
        <div class=\"col-md-9 col-12\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 64
            echo "            <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "</h4>
            <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hygiene/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 67,  178 => 65,  173 => 64,  169 => 63,  163 => 60,  158 => 57,  153 => 54,  147 => 50,  141 => 47,  137 => 46,  134 => 45,  127 => 41,  123 => 39,  121 => 38,  112 => 32,  105 => 27,  96 => 20,  92 => 19,  85 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<div class=\"container\">
    <div class=\"mb-5\">
        <a href=\"{{path('evenement_index')}}\"><i class=\"fas fa-arrow-left\"></i> Retour à la page d'accueil</a>
    </div>  

<h2 class=\"mb-2 p-1\">Gestion de l'hygiène</h2>
{{ form_start(form) }}
 <div class=\"event-section row d-flex justify-content-center mb-5 pt-5 pb-5\">

    {# Couche #}
    <div class=\"col-md-4 col-12 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Couche</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.couche_urine) }}</td>  
                         <td>{{ form_widget(form.couche_selle) }}</td>  
                    </tr>
                 
            </tbody>
            </table>
    </div>
    {# Diversification #}
    <div class=\"col-md-5 col-12 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Bain</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.bain) }}</td>   
                    </tr>
            </tbody>
            </table>
    </div>
    
    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
         <div class=\"row\">
            <div class=\"offset-1 col-2 mt-4\">
                <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
            </div>
        </div>
    {% else %}
        <div class=\"alert alert-info m-3\" role=\"alert\">
            Authentifiez-vous pour rentrer les informations de bébé  <a class=\"underline\" href=\"{{path('user_new')}}\"> Inscrivez-vous</a> ou
            <a href=\"{{path('app_login')}}\"> Connectez-vous</a> 
        </div> 
    {% endif %}
    </div>  
    


{{ form_end(form) }}

{# information #}
    <h2>Conseils autour de bébé</h2>
    <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
        <div class=\"col-md-3 col-3\">
            <img class=\"me-2\" src=\"{{ asset('image/hygiene/photo-hygiène2.png')}}\" alt=\"rust-texture\">
        </div>
        <div class=\"col-md-9 col-12\">
        {% for conseil in conseils %}
            <h4>{{conseil.nom}}</h4>
            <p>{{conseil.description}}</p>
        {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "hygiene/_form.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/hygiene/_form.html.twig");
    }
}
