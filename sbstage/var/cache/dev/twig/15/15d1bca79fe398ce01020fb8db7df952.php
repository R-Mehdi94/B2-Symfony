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

/* stage/base.html.twig */
class __TwigTemplate_dd63e4c4b8f88cfc3d374e5e6519ec4f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/base.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
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

            
                    <tr>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</td>
                        ";
        // line 23
        echo "                    </tr>


        </tbody>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stage/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  79 => 19,  60 => 2,  53 => 1,  43 => 29,  41 => 1,);
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

            
                    <tr>
                        <td>{{ stage }}</td>
                        {# <td>{{stage.animateur}}</td>
                        <td>{{stage.dateDebut.format('Y-m-d')}}</td>
                        <td>{{stage.nbJours}}</td>#}
                    </tr>


        </tbody>

{% endblock %}



", "stage/base.html.twig", "/home/r-mehdi/SIO/B2-Symfony/sbstage/templates/stage/base.html.twig");
    }
}
