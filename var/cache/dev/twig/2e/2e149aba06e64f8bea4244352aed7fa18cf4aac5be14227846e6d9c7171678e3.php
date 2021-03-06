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
        echo "\"><i class=\"fas fa-arrow-left\"></i> Retour ?? la page d'accueil</a>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dodo", [], "any", false, false, false, 19), 'widget', ["label" => "B??b?? dort"]);
        // line 20
        echo "</td>    
                    </tr>
            </tbody>
            </table>
    </div>

    ";
        // line 27
        echo "    <div class=\"col-md-3 col-10 me-3 mb-2 color-table\">
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

   ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "        <div class=\"row\">
            <div class=\"offset-md-2 col-2 mt-4 mb-4\">
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
            Authentifiez-vous pour rentrer les informations de b??b??  <a class=\"underline\" href=\"";
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
        echo "</div> 
";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "


";
        // line 55
        echo "        <h2>Conseils autour de b??b??</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-md-3 col-3\">
                <img class=\"me-2\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/dodo/photo-dodo1.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
            </div>
            <div class=\"col-md-9 col-12\">

            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 63
            echo "                <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 63), "html", null, true);
            echo "</h4>
                <p>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return array (  182 => 66,  174 => 64,  169 => 63,  165 => 62,  158 => 58,  153 => 55,  147 => 51,  144 => 50,  138 => 47,  134 => 46,  131 => 45,  124 => 41,  120 => 39,  118 => 38,  109 => 32,  102 => 27,  94 => 20,  92 => 19,  85 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<div class=\"container\">
    <div class=\"mb-5\">
        <a href=\"{{path('evenement_index')}}\"><i class=\"fas fa-arrow-left\"></i> Retour ?? la page d'accueil</a>
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
                            'label': 'B??b?? dort'}) }}</td>    
                    </tr>
            </tbody>
            </table>
    </div>

    {# heure_fin #}
    <div class=\"col-md-3 col-10 me-3 mb-2 color-table\">
        <h6 class=\"text-center mt-2\">Heure de fin</h6>
            <table class=\"table text-center\">
            <tbody>
                    <tr>
                         <td>{{ form_widget(form.heure_fin) }}</td>    
                    </tr>
            </tbody>
            </table>
    </div>

   {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
        <div class=\"row\">
            <div class=\"offset-md-2 col-2 mt-4 mb-4\">
                <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
            </div>
        </div>
        {% else %}
        <div class=\"alert alert-info m-3\" role=\"alert\">
            Authentifiez-vous pour rentrer les informations de b??b??  <a class=\"underline\" href=\"{{path('user_new')}}\"> Inscrivez-vous</a> ou
            <a href=\"{{path('app_login')}}\"> Connectez-vous</a> 
        </div> 
        {% endif %}
</div> 
{{ form_end(form) }}


{# information #}
        <h2>Conseils autour de b??b??</h2>
        <div class=\"section-info d-flex row pt-4 pb-4 mb-5\">
            <div class=\"col-md-3 col-3\">
                <img class=\"me-2\" src=\"{{ asset('image/dodo/photo-dodo1.jpg')}}\" alt=\"rust-texture\">
            </div>
            <div class=\"col-md-9 col-12\">

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
