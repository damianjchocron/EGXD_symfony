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
class __TwigTemplate_d9abf884ab490364304522881caa49cb0a4861c5332f4f59b25745e7294d7c6a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/index.html.twig", 1);
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

        echo "Listado Categorias
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"row pl-5\">
\t\t<a class=\"btn btn-primary p-3 m-2\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorianuevopost");
        echo "\" role=\"button\">Nuevo</a>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 p-5\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t<div class=\"col-3\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrecategoria", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoriaeditarpost", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "idcategoria", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" role=\"button\">Editar</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categoriaDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "idcategoria", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" role=\"button\">Borrar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</div>
\t\t<div class=\"col-12 p-5\">
\t\t\t\t        <nav aria-label=\"Paginador categoria\">
\t\t\t\t            <ul class=\"pagination\">
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\">Primera</a></li>
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 28, $this->source); })())]), "html", null, true);
        echo "\">Anterior</a></li>
\t\t\t\t                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPag"]) || array_key_exists("numPag", $context) ? $context["numPag"] : (function () { throw new RuntimeError('Variable "numPag" does not exist.', 29, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "                
\t\t\t\t                    ";
            // line 30
            $context["active"] = "";
            // line 31
            echo "\t\t\t\t                    ";
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()), $context["i"])) {
                // line 32
                echo "\t\t\t\t                        ";
                $context["active"] = "active";
                // line 33
                echo "\t\t\t\t                    ";
            }
            // line 34
            echo "\t\t\t\t                    <li class=\"page-item ";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "\">Ultima</a></li>
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Categoria", ["page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo "\">Siguiente</a></li>
\t\t\t\t            </ul>
\t\t\t\t        </nav>
\t\t\t\t    </div>
\t</div>
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
        return array (  178 => 37,  174 => 36,  171 => 35,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  147 => 30,  141 => 29,  137 => 28,  133 => 27,  127 => 23,  117 => 19,  111 => 16,  106 => 14,  103 => 13,  99 => 12,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado Categorias
{% endblock %}

{% block body %}
\t<div class=\"row pl-5\">
\t\t<a class=\"btn btn-primary p-3 m-2\" href=\"{{ path(\"categorianuevopost\") }}\" role=\"button\">Nuevo</a>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 p-5\">
\t\t\t{% for item in categoria %}
\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t<div class=\"col-3\">{{item.nombrecategoria}}</div>
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path(\"categoriaeditarpost\", {id: item.idcategoria}) }}\" role=\"button\">Editar</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path(\"categoriaDelete\", {id: item.idcategoria}) }}\" role=\"button\">Borrar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"col-12 p-5\">
\t\t\t\t        <nav aria-label=\"Paginador categoria\">
\t\t\t\t            <ul class=\"pagination\">
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: prev}) }}\">Primera</a></li>
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: prev}) }}\">Anterior</a></li>
\t\t\t\t                {% for i in 1..numPag %}                
\t\t\t\t                    {% set active = \"\" %}
\t\t\t\t                    {% if page==i %}
\t\t\t\t                        {% set active = \"active\" %}
\t\t\t\t                    {% endif %}
\t\t\t\t                    <li class=\"page-item {{active}}\"><a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: i}) }}\">{{i}}</a></li>
\t\t\t\t                {% endfor %}                        
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: next}) }}\">Ultima</a></li>
\t\t\t\t                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(\"Categoria\", {page: next}) }}\">Siguiente</a></li>
\t\t\t\t            </ul>
\t\t\t\t        </nav>
\t\t\t\t    </div>
\t</div>
{% endblock %}
", "categoria/index.html.twig", "/var/www/html/EGXD_symfony/templates/categoria/index.html.twig");
    }
}
