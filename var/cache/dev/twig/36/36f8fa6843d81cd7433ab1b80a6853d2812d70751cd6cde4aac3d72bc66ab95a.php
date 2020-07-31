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

/* product/detail.html.twig */
class __TwigTemplate_a3e2b61c0c6f18266f98f5ad12bc2e83d9587cd3fbb7f52bd0a0c28a0f4b5147 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "product/detail.html.twig", 1);
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

        echo "Equipamiento Grafico - Detalle
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
        echo "
\t<section class=\"main-container col1-layout wow bounceInUp animated\">
\t\t<div class=\"main container\">
\t\t\t<div class=\"col-main\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"product-view\">
\t\t\t\t\t\t<div class=\"product-next-prev\">
\t\t\t\t\t\t\t<a class=\"product-next\" href=\"#\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"product-prev\" href=\"#\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-essential\">
\t\t\t\t\t\t\t<form action=\"#\" method=\"post\" id=\"product_addtocart_form\">
\t\t\t\t\t\t\t\t<input name=\"form_key\" value=\"6UbXroakyQlbfQzK\" type=\"hidden\">
\t\t\t\t\t\t\t\t<div class=\"product-img-box col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"new-label new-top-left\">
\t\t\t\t\t\t\t\t\t\tNew
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"large-image\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forrenderimg"]) || array_key_exists("forrenderimg", $context) ? $context["forrenderimg"] : (function () { throw new RuntimeError('Variable "forrenderimg" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<!-- Aca le doy el el active para el carrusel -->
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 37
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["value"], "priority", [], "any", false, false, false, 37), "1")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 38), "html", null, true);
                echo "\" class=\"cloud-zoom\" id=\"zoom1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 39), "html", null, true);
                echo "\" alt=\"product image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flexslider flexslider-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"previews-list slides\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forrenderimg"]) || array_key_exists("forrenderimg", $context) ? $context["forrenderimg"] : (function () { throw new RuntimeError('Variable "forrenderimg" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"width: 76px; float: left; display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 48), "html", null, true);
            echo "' \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 49), "html", null, true);
            echo "\" alt=\"Thumbnail 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"product-shop col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"product-name\">
\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 61, $this->source); })()), "titulo", [], "any", false, false, false, 61), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"price-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-label\">Precio</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"product-price-48\" class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 69, $this->source); })()), "precio", [], "any", false, false, false, 69), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"short-description\">
\t\t\t\t\t\t\t\t\t\t<h2>Descripcion</h2>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 78, $this->source); })()), "descripcion", [], "any", false, false, false, 78), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "\t<script type=\"text/javascript\" src=\"/js/cloud-zoom.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 91,  247 => 90,  225 => 78,  213 => 69,  202 => 61,  192 => 53,  182 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 43,  158 => 42,  152 => 39,  147 => 38,  145 => 37,  142 => 36,  138 => 35,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Detalle
{% endblock %}

{% block meta %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}

{% block body %}

\t<section class=\"main-container col1-layout wow bounceInUp animated\">
\t\t<div class=\"main container\">
\t\t\t<div class=\"col-main\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"product-view\">
\t\t\t\t\t\t<div class=\"product-next-prev\">
\t\t\t\t\t\t\t<a class=\"product-next\" href=\"#\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"product-prev\" href=\"#\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-essential\">
\t\t\t\t\t\t\t<form action=\"#\" method=\"post\" id=\"product_addtocart_form\">
\t\t\t\t\t\t\t\t<input name=\"form_key\" value=\"6UbXroakyQlbfQzK\" type=\"hidden\">
\t\t\t\t\t\t\t\t<div class=\"product-img-box col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"new-label new-top-left\">
\t\t\t\t\t\t\t\t\t\tNew
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"large-image\">
\t\t\t\t\t\t\t\t\t\t\t{% for value in forrenderimg %}
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Aca le doy el el active para el carrusel -->
\t\t\t\t\t\t\t\t\t\t\t\t{% if value.priority == \"1\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{value.url}}\" class=\"cloud-zoom\" id=\"zoom1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{value.url}}\" alt=\"product image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flexslider flexslider-thumb\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"previews-list slides\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for value in forrenderimg %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"width: 76px; float: left; display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{value.url}}\" class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '{{value.url}}' \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{value.url}}\" alt=\"Thumbnail 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"product-shop col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"product-name\">
\t\t\t\t\t\t\t\t\t\t<h1>{{oneProduct.titulo}}</h1>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"price-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-label\">Precio</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"product-price-48\" class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{oneProduct.precio}}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"short-description\">
\t\t\t\t\t\t\t\t\t\t<h2>Descripcion</h2>
\t\t\t\t\t\t\t\t\t\t<p>{{oneProduct.descripcion}}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
{% block javascripts %}
\t<script type=\"text/javascript\" src=\"/js/cloud-zoom.js\"></script>
{% endblock %}
", "product/detail.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\product\\detail.html.twig");
    }
}
