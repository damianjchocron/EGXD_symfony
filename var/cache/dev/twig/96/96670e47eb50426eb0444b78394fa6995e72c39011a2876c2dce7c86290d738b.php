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

/* product/all.html.twig */
class __TwigTemplate_88810d85aa76a4bcf30bdbe4670fbd0fc8702fb84614fa209555a85933839992 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "product/all.html.twig", 1);
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

        echo "Equipamiento Grafico - Todos Productos
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
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

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
        echo "\t<main>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-menu \" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 23), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 23, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 23, $this->source); })())]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tOrdenar Por
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 35, $this->source); })()), "sort" => "1", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 35, $this->source); })())]), "html", null, true);
        echo "> Mas Reciente</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 36, $this->source); })()), "sort" => "2", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 36, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo ">Mas Antiguo</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 37, $this->source); })()), "sort" => "3", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo ">Mayor Precio</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 38, $this->source); })()), "sort" => "4", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 38, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 38, $this->source); })())]), "html", null, true);
        echo ">Menor Precio</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 42
        if ( !twig_test_empty((isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"badge badge-info\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 44, $this->source); })()), "nombrecategoria", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t<form id=\"formSearch\" action=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 48, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 48, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo " method=\"GET\">
\t\t\t\t\t<div class=\"input-group col-xl-11 m-3 aling-self-start\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon1\">Buscar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" id=\"inputForm\" class=\"form-control col\" placeholder=\"\" aria-label=\"Example text with button addon\" aria-describedby=\"button-addon1\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>


\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 62
            echo "\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 pr-4 pb-4\">
\t\t\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t\t\t<div class=\"mt1 card\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"card-img-top img-card\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 67), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "descripcion", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Precio \$";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "precio", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a href=";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailProduct", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 70)]), "html", null, true);
            echo " class=\"btn btn-primary\">Ver Mas</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 79
        if (0 !== twig_compare((isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 79, $this->source); })()), "0")) {
            // line 80
            echo "\t\t\t\t<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"pagination\">
\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href=";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 85, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 85, $this->source); })()), "page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 85, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 85, $this->source); })())]), "html", null, true);
            echo ">Anterior</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 88
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 88, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                $context["active"] = "";
                // line 90
                echo "\t\t\t\t\t\t\t";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), $context["i"])) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t";
                    $context["active"] = "active";
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t<li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 94, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 94, $this->source); })()), "page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 94, $this->source); })())]), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href=";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 100, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 100, $this->source); })()), "page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 100, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 100, $this->source); })())]), "html", null, true);
            echo ">Siguiente</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        } else {
            // line 105
            echo "\t\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "\t\t</div>
\t</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "\t<script src=\"/js/productAll.js\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 116,  325 => 115,  312 => 109,  306 => 105,  298 => 100,  295 => 99,  285 => 95,  281 => 94,  276 => 93,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  259 => 88,  254 => 85,  247 => 80,  245 => 79,  240 => 76,  228 => 70,  224 => 69,  220 => 68,  216 => 67,  211 => 65,  206 => 62,  202 => 61,  185 => 48,  178 => 44,  175 => 43,  173 => 42,  166 => 38,  162 => 37,  158 => 36,  153 => 35,  143 => 26,  137 => 25,  131 => 23,  128 => 22,  124 => 21,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Todos Productos
{% endblock %}

{% block meta %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}

{% block body %}
\t<main>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-menu \" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t{% for value in categorias %}
\t\t\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: value.idcategoria, sort: sort, page: page,search: search} ) }}>{{value.nombrecategoria}}</a>
\t\t\t\t\t\t\t\t{# <a class=\"dropdown-item\" href=\"all?{{value.idcategoria}} {{filtersort}} {{filterpage}}\"> {{value.nombrecategoria}}</a> #}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\tOrdenar Por
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t\t{# Aca espera qe el ID categoria no sea vacio ! #}
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"1\", page: page,search: search} ) }}> Mas Reciente</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"2\", page: page,search: search} ) }}>Mas Antiguo</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"3\", page: page,search: search} ) }}>Mayor Precio</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"4\", page: page,search: search} ) }}>Menor Precio</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if categoriaunica is not empty %}
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"badge badge-info\">{{categoriaunica.nombrecategoria}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<form id=\"formSearch\" action={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: page} ) }} method=\"GET\">
\t\t\t\t\t<div class=\"input-group col-xl-11 m-3 aling-self-start\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon1\">Buscar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" id=\"inputForm\" class=\"form-control col\" placeholder=\"\" aria-label=\"Example text with button addon\" aria-describedby=\"button-addon1\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>


\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for value in dataproductforrender %}
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 pr-4 pb-4\">
\t\t\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t\t\t<div class=\"mt1 card\">
\t\t\t\t\t\t\t\t\t<img src=\"{{value.url}}\" class=\"card-img-top img-card\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{value.nombre}}</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{value.descripcion}}</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Precio \${{value.precio}}</p>
\t\t\t\t\t\t\t\t\t\t<a href={{ path(\"detailProduct\", {idproduct:value.idproduct } ) }} class=\"btn btn-primary\">Ver Mas</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if numPaginas != \"0\" %}
\t\t\t\t<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"pagination\">
\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: prev,search: search} ) }}>Anterior</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# {{numPaginas}} #}
\t\t\t\t\t\t{% for i in 1..numPaginas %}
\t\t\t\t\t\t\t{% set active = \"\" %}
\t\t\t\t\t\t\t{% if page==i %}
\t\t\t\t\t\t\t\t{% set active = \"active\" %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<li class=\"page-item {{active}}\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: i,search: search} ) }}>
\t\t\t\t\t\t\t\t\t{{i}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: next,search: search} ) }}>Siguiente</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t{% else %}
\t\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</main>

{% endblock %}


{% block javascripts %}
\t<script src=\"/js/productAll.js\" type=\"text/javascript\"></script>
{% endblock %}
", "product/all.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\product\\all.html.twig");
    }
}
