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

/* stage/test.html.twig */
class __TwigTemplate_55f38f9c21f497742b2ab704161bc1a5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/test.html.twig"));

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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                        ";
            // line 21
            echo "
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "animateur", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "dateDebut", [], "any", false, false, false, 23), "format", [0 => "Y-m-d"], "method", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "nbJours", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "


        </tbody>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stage/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  92 => 24,  88 => 23,  84 => 22,  81 => 21,  77 => 18,  74 => 17,  70 => 16,  54 => 2,  41 => 1,);
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
                {% for test in tests %}
                    <tr>
                        <td>{{ test.id }}</td>
                        {#<td>{{ test.nom }}</td>
                        <td>{{ test.prenom }}</td>#}

                        <td>{{test.animateur}}</td>
                        <td>{{test.dateDebut.format('Y-m-d')}}</td>
                        <td>{{test.nbJours}}</td>
                    </tr>
                {% endfor %}



        </tbody>

{% endblock %}", "stage/test.html.twig", "/home/r-mehdi/SIO/B2-Symfony/sbstage/templates/stage/test.html.twig");
    }
}
