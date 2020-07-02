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

/* product/insertform.html.twig */
class __TwigTemplate_123cca0a6f993bbef6f424b07bb5d462251d0d5ac4f88defbef2260ba09e3c77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/insertform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/insertform.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/insertform.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ( !twig_test_empty((isset($context["msj"]) || array_key_exists("msj", $context) ? $context["msj"] : (function () { throw new RuntimeError('Variable "msj" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["msj"]) || array_key_exists("msj", $context) ? $context["msj"] : (function () { throw new RuntimeError('Variable "msj" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 9
        echo "\t<form action=\"/product/insertform\" enctype=\"multipart/form-data\" method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"titulo\">Titulo</label>
\t\t\t<input name=\"titulo\" type=\"text\" class=\"form-control\" id=\"titulo\" placeholder=\"Titulo\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"categoria\">Seleccione Una Categoria</label>
\t\t\t<select name=\"idcategoria\" class=\"form-control\" id=\"idcategoria\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 18
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"descripcion\">Descripcion</label>
\t\t\t<textarea name=\"descripcion\" class=\"form-control\" id=\"descripcion\" rows=\"3\"></textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"precio\">Precio</label>
\t\t\t<input name=\"precio\" type=\"number\" class=\"form-control\" id=\"precio\" placeholder=\"Precio\">
\t\t</div>
\t\t<div class=\"form-group inputFiles\">
\t\t\t<label class=\"col-12 mt-3\" for=\"image\">Imagenes, la primera sera la Predefinida.</label>
\t\t\t<button type=\"button\" class=\"btn-primary btn\" id=\"btnAdd\">Agregar Foto</button>
\t\t\t<div class=\"mt-3\">
\t\t\t\t<input type=\"file\" id=\"image\" class=\"form-control\" name=\"fichero[]\" aria-describedby=\"fichero\" placeholder=\"Fichero\">
\t\t\t</div>
\t\t</div>
\t\t<input type=\"submit\" class=\"btn btn-primary m-3\" name=\"submit\" value=\"Upload\"/>

\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t<script src=\"../js/insertform.js\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/insertform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  136 => 41,  106 => 20,  95 => 18,  91 => 17,  81 => 9,  75 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t{% if msj is not empty %}
\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t{{msj}}
\t\t</div>
\t{% endif %}
\t<form action=\"/product/insertform\" enctype=\"multipart/form-data\" method=\"POST\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"titulo\">Titulo</label>
\t\t\t<input name=\"titulo\" type=\"text\" class=\"form-control\" id=\"titulo\" placeholder=\"Titulo\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"categoria\">Seleccione Una Categoria</label>
\t\t\t<select name=\"idcategoria\" class=\"form-control\" id=\"idcategoria\">
\t\t\t\t{% for value in categorias %}
\t\t\t\t\t<option value=\"{{value.idcategoria}}\">{{value.nombrecategoria}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"descripcion\">Descripcion</label>
\t\t\t<textarea name=\"descripcion\" class=\"form-control\" id=\"descripcion\" rows=\"3\"></textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"precio\">Precio</label>
\t\t\t<input name=\"precio\" type=\"number\" class=\"form-control\" id=\"precio\" placeholder=\"Precio\">
\t\t</div>
\t\t<div class=\"form-group inputFiles\">
\t\t\t<label class=\"col-12 mt-3\" for=\"image\">Imagenes, la primera sera la Predefinida.</label>
\t\t\t<button type=\"button\" class=\"btn-primary btn\" id=\"btnAdd\">Agregar Foto</button>
\t\t\t<div class=\"mt-3\">
\t\t\t\t<input type=\"file\" id=\"image\" class=\"form-control\" name=\"fichero[]\" aria-describedby=\"fichero\" placeholder=\"Fichero\">
\t\t\t</div>
\t\t</div>
\t\t<input type=\"submit\" class=\"btn btn-primary m-3\" name=\"submit\" value=\"Upload\"/>

\t</form>
{% endblock %}
{% block javascripts %}
\t<script src=\"../js/insertform.js\" type=\"text/javascript\"></script>
{% endblock %}
", "product/insertform.html.twig", "/var/www/html/EGXD_symfony/templates/product/insertform.html.twig");
    }
}
