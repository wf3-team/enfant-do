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

/* repas/_form.html.twig */
class __TwigTemplate_959033b5643230423b5dea643fc143adbf7c789e40b63f9002138180102b0842 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/_form.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "repas/_form.html.twig", 1);
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
    <div class=\"mb-5 retour-accueil\">
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i> Retour à la page d'accueil</a>
    </div>  

    <h2>Gestion des repas</h2>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

    <div class=\"event-section row d-flex flex-row justify-content-center mb-5 pt-5 pb-5\">

        ";
        // line 15
        echo "        <div class=\"col-md-4 col-8 me-3 mb-2 color-table\">
            <h6 class=\"text-center mt-2\">Biberon</h6>
                <table class=\"table text-center\">
                <tbody>
                        <tr>
                            <td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "biberon", [], "any", false, false, false, 20), 'widget');
        echo "</td>    
                        </tr>
                        <tr>
                            <td>Quantité (en ml) :";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "quantite_ml", [], "any", false, false, false, 23), 'widget');
        echo "</td>
                        </tr>
                </tbody>
                </table>
        </div>
        ";
        // line 29
        echo "        <div class=\"col-md-5 col-8 me-3 mb-2 color-table\">
            <h6 class=\"text-center mt-2\">Diversification</h6>
                <table class=\"table text-center\">
                <tbody>
                        <tr>
                            <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "puree", [], "any", false, false, false, 34), 'widget');
        echo "</td>  
                            <td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "compote", [], "any", false, false, false, 35), 'widget');
        echo "</td> 
                            <td>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "yaourt", [], "any", false, false, false, 36), 'widget');
        echo "</td>   
                        </tr>
                
                            <td>Quantité (en pot) : ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "quantite_pot", [], "any", false, false, false, 39), 'widget');
        echo "</td>
            
                </tbody>
                </table>
        </div>
        ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "        <div class=\"row\">
            <div class=\"offset-1 col-2 mt-4\">
                <button class=\"btn btn-primary\">";
            // line 47
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            echo "</button>
            </div>
        </div>
        ";
        } else {
            // line 51
            echo "        <div class=\"alert alert-info m-3\" role=\"alert\">
            Authentifiez-vous pour rentrer les informations de bébé  <a class=\"underline\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\"> Inscrivez-vous</a> ou
            <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Connectez-vous</a> 
        </div> 
        ";
        }
        // line 56
        echo "        ";
        // line 57
        echo "        </div>

            

    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "

    ";
        // line 64
        echo "        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info\">
        
            <div class=\"row d-flex justify-content-center pt-4 pb-4 mb-5\">
                <div class=\"col-3\">
                    <img class=\"me-2 w-75\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/repas/biberon2.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
                </div>
                <div class=\"col-9\">

                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseilsBiberon"]) || array_key_exists("conseilsBiberon", $context) ? $context["conseilsBiberon"] : (function () { throw new RuntimeError('Variable "conseilsBiberon" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 74
            echo "                    <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 74), "html", null, true);
            echo "</h4>
                    <p>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 75), "html", null, true);
            echo "}}</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        
                </div>
            </div>

            <div class=\"row pb-4 ps-4 pe-4 mb-5\">
               
                <div class=\"col-9\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseilsDivers"]) || array_key_exists("conseilsDivers", $context) ? $context["conseilsDivers"] : (function () { throw new RuntimeError('Variable "conseilsDivers" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 85
            echo "                    <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "nom", [], "any", false, false, false, 85), "html", null, true);
            echo "</h4>
                    <p>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conseil"], "description", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>
                 <div class=\"col-3\">
                    <img class=\"me-2\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/repas/diversification3.jpg"), "html", null, true);
        echo "\" alt=\"rust-texture\">
                </div>
            </div>


        </div>

";
        // line 98
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 98,  236 => 90,  232 => 88,  224 => 86,  219 => 85,  215 => 84,  206 => 77,  198 => 75,  193 => 74,  189 => 73,  182 => 69,  175 => 64,  170 => 61,  164 => 57,  162 => 56,  156 => 53,  152 => 52,  149 => 51,  142 => 47,  138 => 45,  136 => 44,  128 => 39,  122 => 36,  118 => 35,  114 => 34,  107 => 29,  99 => 23,  93 => 20,  86 => 15,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<div class=\"container\">
    <div class=\"mb-5 retour-accueil\">
        <a href=\"{{path('evenement_index')}}\"><i class=\"fas fa-arrow-left\"></i> Retour à la page d'accueil</a>
    </div>  

    <h2>Gestion des repas</h2>
    {{ form_start(form) }}

    <div class=\"event-section row d-flex flex-row justify-content-center mb-5 pt-5 pb-5\">

        {# Biberon #}
        <div class=\"col-md-4 col-8 me-3 mb-2 color-table\">
            <h6 class=\"text-center mt-2\">Biberon</h6>
                <table class=\"table text-center\">
                <tbody>
                        <tr>
                            <td>{{ form_widget(form.biberon) }}</td>    
                        </tr>
                        <tr>
                            <td>Quantité (en ml) :{{ form_widget(form.quantite_ml) }}</td>
                        </tr>
                </tbody>
                </table>
        </div>
        {# Diversification #}
        <div class=\"col-md-5 col-8 me-3 mb-2 color-table\">
            <h6 class=\"text-center mt-2\">Diversification</h6>
                <table class=\"table text-center\">
                <tbody>
                        <tr>
                            <td>{{ form_widget(form.puree) }}</td>  
                            <td>{{ form_widget(form.compote) }}</td> 
                            <td>{{ form_widget(form.yaourt) }}</td>   
                        </tr>
                
                            <td>Quantité (en pot) : {{ form_widget(form.quantite_pot) }}</td>
            
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
        {# Fin de la row #}
        </div>

            

    {{ form_end(form) }}

    {# information #}
        <h2>Conseils autour de bébé</h2>
        <div class=\"section-info\">
        
            <div class=\"row d-flex justify-content-center pt-4 pb-4 mb-5\">
                <div class=\"col-3\">
                    <img class=\"me-2 w-75\" src=\"{{ asset('image/repas/biberon2.jpg')}}\" alt=\"rust-texture\">
                </div>
                <div class=\"col-9\">

                {% for conseil in conseilsBiberon %}
                    <h4>{{conseil.nom}}</h4>
                    <p>{{conseil.description}}}}</p>
                {% endfor %}
                        
                </div>
            </div>

            <div class=\"row pb-4 ps-4 pe-4 mb-5\">
               
                <div class=\"col-9\">
                {% for conseil in conseilsDivers %}
                    <h4>{{conseil.nom}}</h4>
                    <p>{{conseil.description}}</p>
                {% endfor %}
                </div>
                 <div class=\"col-3\">
                    <img class=\"me-2\" src=\"{{ asset('image/repas/diversification3.jpg')}}\" alt=\"rust-texture\">
                </div>
            </div>


        </div>

{# Fin div container #}
</div>
{% endblock %}", "repas/_form.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/repas/_form.html.twig");
    }
}
