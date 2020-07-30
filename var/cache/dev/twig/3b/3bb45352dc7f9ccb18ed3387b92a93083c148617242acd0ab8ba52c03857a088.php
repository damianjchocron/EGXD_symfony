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

/* categoria/index.html.twig */
class __TwigTemplate_97aefaa1f59e8bdd3a93119b514e759620954f233560433a8aa0cda833769b70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "categoria/index.html.twig", 1);
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

        echo "Equipamiento Grafico - Mantenimiento
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

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<main>
\t\t<div class=\"container mt-5\">
\t\t\t<div class=\"row pl-5\">
\t\t\t\t<a class=\"btn btn-primary p-3 m-2\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorianuevopost");
        echo "\" role=\"button\">Nuevo</a>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 p-5\">
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t\t\t<div class=\"col-lg-3\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrecategoria", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoriaeditarpost", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "idcategoria", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" role=\"button\">Editar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoriaDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "idcategoria", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" role=\"button\">Borrar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 p-5\">
\t\t\t\t\t<nav aria-label=\"Paginador categoria\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo "\">Primera</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo "\">Anterior</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPag"]) || array_key_exists("numPag", $context) ? $context["numPag"] : (function () { throw new RuntimeError('Variable "numPag" does not exist.', 39, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "\t\t\t\t\t\t\t\t";
            $context["active"] = "";
            // line 41
            echo "\t\t\t\t\t\t\t\t";
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()), $context["i"])) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
                $context["active"] = "active";
                // line 43
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t<li class=\"page-item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 49, $this->source); })())]), "html", null, true);
        echo "\">Ultima</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 52, $this->source); })())]), "html", null, true);
        echo "\">Siguiente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 52,  205 => 49,  202 => 48,  191 => 45,  186 => 44,  183 => 43,  180 => 42,  177 => 41,  174 => 40,  170 => 39,  165 => 37,  159 => 34,  152 => 29,  142 => 25,  136 => 22,  131 => 20,  128 => 19,  124 => 18,  117 => 14,  112 => 11,  102 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Mantenimiento
{% endblock %}

{% block meta %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}
{% block body %}
\t<main>
\t\t<div class=\"container mt-5\">
\t\t\t<div class=\"row pl-5\">
\t\t\t\t<a class=\"btn btn-primary p-3 m-2\" href=\"{{ path(\"categorianuevopost\") }}\" role=\"button\">Nuevo</a>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 p-5\">
\t\t\t\t\t{% for item in categoria %}
\t\t\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t\t\t<div class=\"col-lg-3\">{{item.nombrecategoria}}</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path(\"categoriaeditarpost\", {id: item.idcategoria}) }}\" role=\"button\">Editar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path(\"categoriaDelete\", {id: item.idcategoria}) }}\" role=\"button\">Borrar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 p-5\">
\t\t\t\t\t<nav aria-label=\"Paginador categoria\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: prev}) }}\">Primera</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: prev}) }}\">Anterior</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% for i in 1..numPag %}
\t\t\t\t\t\t\t\t{% set active = \"\" %}
\t\t\t\t\t\t\t\t{% if page==i %}
\t\t\t\t\t\t\t\t\t{% set active = \"active\" %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<li class=\"page-item {{active}}\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: i}) }}\">{{i}}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: next}) }}\">Ultima</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: next}) }}\">Siguiente</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</main>

{% endblock %}
", "categoria/index.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\categoria\\index.html.twig");
    }
}
