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
class __TwigTemplate_d58f9bf52faeeb812456904800324041d26d52de13991d3c90f9932de2e10816 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/detail.html.twig", 1);
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
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xl-6 mb-3 mt-3\">
\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forrenderimg"]) || array_key_exists("forrenderimg", $context) ? $context["forrenderimg"] : (function () { throw new RuntimeError('Variable "forrenderimg" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 9
            echo "\t\t\t\t\t\t<!-- Aca le doy el el active para el carrusel -->
\t\t\t\t\t\t";
            // line 10
            $context["active"] = "";
            // line 11
            echo "\t\t\t\t\t\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["value"], "priority", [], "any", false, false, false, 11), "1")) {
                // line 12
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "active";
                // line 13
                echo "\t\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t\t\t<div class=\"carousel-item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"vhImg d-block w-100\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xl-5 mb-3\">
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t<li class=\"list-group-item\"><h1>Maquina: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 31, $this->source); })()), "titulo", [], "any", false, false, false, 31), "html", null, true);
        echo "</h1></li>
\t\t\t\t\t<li class=\"list-group-item\">Descripcion: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 32, $this->source); })()), "descripcion", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>
\t\t\t\t\t<li class=\"list-group-item\">U\$D ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneProduct"]) || array_key_exists("oneProduct", $context) ? $context["oneProduct"] : (function () { throw new RuntimeError('Variable "oneProduct" does not exist.', 33, $this->source); })()), "precio", [], "any", false, false, false, 33), "html", null, true);
        echo "</li>
\t\t\t\t\t<li class=\"list-group-item\">Categoria: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoryInstance"]) || array_key_exists("categoryInstance", $context) ? $context["categoryInstance"] : (function () { throw new RuntimeError('Variable "categoryInstance" does not exist.', 34, $this->source); })()), "nombrecategoria", [], "any", false, false, false, 34), "html", null, true);
        echo "</li>
\t\t\t</ul>
\t\t</div>
\t</div>
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
        return array (  133 => 34,  129 => 33,  125 => 32,  121 => 31,  106 => 18,  97 => 15,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  81 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-xl-6 mb-3 mt-3\">
\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for value in forrenderimg %}
\t\t\t\t\t\t<!-- Aca le doy el el active para el carrusel -->
\t\t\t\t\t\t{% set active = \"\" %}
\t\t\t\t\t\t{% if value.priority == \"1\" %}
\t\t\t\t\t\t\t{% set active = \"active\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"carousel-item {{active}}\">
\t\t\t\t\t\t\t<img src=\"{{value.url}}\" class=\"vhImg d-block w-100\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xl-5 mb-3\">
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t<li class=\"list-group-item\"><h1>Maquina: {{oneProduct.titulo}}</h1></li>
\t\t\t\t\t<li class=\"list-group-item\">Descripcion: {{oneProduct.descripcion}}</li>
\t\t\t\t\t<li class=\"list-group-item\">U\$D {{oneProduct.precio}}</li>
\t\t\t\t\t<li class=\"list-group-item\">Categoria: {{categoryInstance.nombrecategoria}}</li>
\t\t\t</ul>
\t\t</div>
\t</div>
{% endblock %}
", "product/detail.html.twig", "/var/www/html/EGXD_symfony/templates/product/detail.html.twig");
    }
}
