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

/* product/update.html.twig */
class __TwigTemplate_9e79692dc9700248748a16a507aa2c020af24aa5d9fe30dca5eb1438f71fb12e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseNEW.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/update.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "product/update.html.twig", 1);
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

        echo "Equipamiento Grafico - Actualizar
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t";
        if ( !twig_test_empty((isset($context["msj"]) || array_key_exists("msj", $context) ? $context["msj"] : (function () { throw new RuntimeError('Variable "msj" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["msj"]) || array_key_exists("msj", $context) ? $context["msj"] : (function () { throw new RuntimeError('Variable "msj" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 17
        echo "\t<form action=\"/product/updatePost\" enctype=\"multipart/form-data\" method=\"POST\">
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"titulo\">Titulo</label>
\t\t\t<input name=\"titulo\" type=\"text\" class=\"form-control\" id=\"titulo\" placeholder=\"Titulo\" value=";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "titulo", [], "any", false, false, false, 20), "html", null, true);
        echo ">
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"categoria\">Seleccione Una Categoria</label>
\t\t\t<select name=\"idcategoria\" class=\"form-control\" id=\"idcategoria\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 26
            echo "\t\t\t\t\t";
            $context["selected"] = "";
            // line 27
            echo "\t\t\t\t\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "idcategoria", [], "any", false, false, false, 27), "idcategoria", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 27))) {
                // line 28
                echo "\t\t\t\t\t\t";
                $context["selected"] = "selected";
                // line 29
                echo "\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t<option ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 30, $this->source); })()), "html", null, true);
            echo " value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 30), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 30), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"descripcion\">Descripcion</label>
\t\t\t<textarea name=\"descripcion\" class=\"form-control\" id=\"descripcion\" rows=\"3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "descripcion", [], "any", false, false, false, 36), "html", null, true);
        echo "</textarea>
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"precio\">Precio</label>
\t\t\t<input name=\"precio\" type=\"number\" class=\"form-control\" id=\"precio\" placeholder=\"Precio\" value=";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "precio", [], "any", false, false, false, 40), "html", null, true);
        echo ">
\t\t</div>
                    <input type=\"hidden\" name=\"idproduct\" value=";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "idproduct", [], "any", false, false, false, 42), "html", null, true);
        echo ">

\t\t<input type=\"submit\" class=\"btn btn-success m-3\" name=\"submit\" value=\"Actualizar\"/>
                    <button class=\"btn btn-danger\">
                              <a class=\"volver\" href=\"/product/modify\">Volver</a>
                    </button>
\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t<script src=\"../js/insertform.js\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 51,  203 => 50,  185 => 42,  180 => 40,  173 => 36,  167 => 32,  154 => 30,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  138 => 25,  130 => 20,  125 => 17,  119 => 14,  116 => 13,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Actualizar
{% endblock %}

{% block meta %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}

{% block body %}
\t{% if msj is not empty %}
\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t{{msj}}
\t\t</div>
\t{% endif %}
\t<form action=\"/product/updatePost\" enctype=\"multipart/form-data\" method=\"POST\">
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"titulo\">Titulo</label>
\t\t\t<input name=\"titulo\" type=\"text\" class=\"form-control\" id=\"titulo\" placeholder=\"Titulo\" value={{product.titulo}}>
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"categoria\">Seleccione Una Categoria</label>
\t\t\t<select name=\"idcategoria\" class=\"form-control\" id=\"idcategoria\">
\t\t\t\t{% for value in categorias %}
\t\t\t\t\t{% set selected = \"\" %}
\t\t\t\t\t{% if product.idcategoria.idcategoria == value.idcategoria %}
\t\t\t\t\t\t{% set selected = \"selected\" %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<option {{selected}} value={{value.idcategoria}}>{{value.nombrecategoria}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"descripcion\">Descripcion</label>
\t\t\t<textarea name=\"descripcion\" class=\"form-control\" id=\"descripcion\" rows=\"3\">{{product.descripcion}}</textarea>
\t\t</div>
\t\t<div class=\"form-group m-3\">
\t\t\t<label for=\"precio\">Precio</label>
\t\t\t<input name=\"precio\" type=\"number\" class=\"form-control\" id=\"precio\" placeholder=\"Precio\" value={{product.precio}}>
\t\t</div>
                    <input type=\"hidden\" name=\"idproduct\" value={{product.idproduct}}>

\t\t<input type=\"submit\" class=\"btn btn-success m-3\" name=\"submit\" value=\"Actualizar\"/>
                    <button class=\"btn btn-danger\">
                              <a class=\"volver\" href=\"/product/modify\">Volver</a>
                    </button>
\t</form>
{% endblock %}
{% block javascripts %}
\t<script src=\"../js/insertform.js\" type=\"text/javascript\"></script>
{% endblock %}
", "product/update.html.twig", "/var/www/html/EGXD_symfony/templates/product/update.html.twig");
    }
}
