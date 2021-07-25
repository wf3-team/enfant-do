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

/* bebe/show.html.twig */
class __TwigTemplate_4dde92073a699253decbe74346fbc11a23200f8f7799a9533694a93344eb9b62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bebe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bebe/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "bebe/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bebe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Bebe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 20, $this->source); })()), "dateNaissance", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 20, $this->source); })()), "dateNaissance", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Poids (en kg) :</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 24, $this->source); })()), "poids", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taille (en cm) :</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 28, $this->source); })()), "taille", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 32, $this->source); })()), "genre", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td> <img src=\"../";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 36, $this->source); })()), "photo", [], "any", false, false, false, 36), "html", null, true);
        echo "\" alt=\"photo de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo "\"></td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bebe_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bebe_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["bebe"]) || array_key_exists("bebe", $context) ? $context["bebe"] : (function () { throw new RuntimeError('Variable "bebe" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "bebe/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bebe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 45,  153 => 43,  148 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Bebe{% endblock %}

{% block body %}
    <h1>Bebe</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bebe.id }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ bebe.prenom }}</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>{{ bebe.dateNaissance ? bebe.dateNaissance|date('d-m-Y') : '' }}</td>
            </tr>
            <tr>
                <th>Poids (en kg) :</th>
                <td>{{ bebe.poids }}</td>
            </tr>
            <tr>
                <th>Taille (en cm) :</th>
                <td>{{ bebe.taille }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ bebe.genre }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td> <img src=\"../{{ bebe.photo }}\" alt=\"photo de {{ bebe.prenom }}\"></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('bebe_index') }}\">back to list</a>

    <a href=\"{{ path('bebe_edit', {'id': bebe.id}) }}\">edit</a>

    {{ include('bebe/_delete_form.html.twig') }}
{% endblock %}
", "bebe/show.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/bebe/show.html.twig");
    }
}
