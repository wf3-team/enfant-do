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

/* repas/show.html.twig */
class __TwigTemplate_a50021c179bd05b4dae689b39d8a7962a35aa5138c09779fc1764fafe9d3e675 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "repas/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "repas/show.html.twig", 1);
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

        echo "Repas";
        
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
        echo "    <h1>Repas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Biberon</th>
                <td>";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 16, $this->source); })()), "biberon", [], "any", false, false, false, 16)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Quantite_ml</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 20, $this->source); })()), "quantiteMl", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Puree</th>
                <td>";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 24, $this->source); })()), "puree", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Compote</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 28, $this->source); })()), "compote", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Yaourt</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 32, $this->source); })()), "yaourt", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Quantite_pot</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 36, $this->source); })()), "quantitePot", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repas_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["repa"]) || array_key_exists("repa", $context) ? $context["repa"] : (function () { throw new RuntimeError('Variable "repa" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "repas/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "repas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Repas{% endblock %}

{% block body %}
    <h1>Repas</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ repa.id }}</td>
            </tr>
            <tr>
                <th>Biberon</th>
                <td>{{ repa.biberon ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Quantite_ml</th>
                <td>{{ repa.quantiteMl }}</td>
            </tr>
            <tr>
                <th>Puree</th>
                <td>{{ repa.puree ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Compote</th>
                <td>{{ repa.compote ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Yaourt</th>
                <td>{{ repa.yaourt ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Quantite_pot</th>
                <td>{{ repa.quantitePot }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('repas_index') }}\">back to list</a>

    <a href=\"{{ path('repas_edit', {'id': repa.id}) }}\">edit</a>

    {{ include('repas/_delete_form.html.twig') }}
{% endblock %}
", "repas/show.html.twig", "/Users/carolinezaini/Desktop/enfant-do/templates/repas/show.html.twig");
    }
}
