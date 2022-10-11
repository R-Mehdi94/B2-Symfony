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

/* stage/index.html.twig */
class __TwigTemplate_615719cd75ec79811ebb92c2a166fc2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1> Stage </h1>

     <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>IdAnimateur</th>
                <th>Date de debut</th>
                <th>Nombre de jours</th>

            </tr>

         </thead>
        
        <tbody>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "animateur", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "dateDebut", [], "any", false, false, false, 22), "format", [0 => "Y-m-d"], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nbJours", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        </tbody>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stage/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  76 => 19,  72 => 18,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <h1> Stage </h1>

     <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>IdAnimateur</th>
                <th>Date de debut</th>
                <th>Nombre de jours</th>

            </tr>

         </thead>
        
        <tbody>

            {% for stage in stages %}
                    <tr>
                        <td>{{stage.id}}</td>
                        <td>{{stage.animateur}}</td>
                        <td>{{stage.dateDebut.format('Y-m-d')}}</td>
                        <td>{{stage.nbJours}}</td>
                    </tr>

            {% endfor %}

        </tbody>

{% endblock %}
", "stage/index.html.twig", "/home/r-mehdi/SIO/B2-Symfony/sbstage/templates/stage/index.html.twig");
    }
}
