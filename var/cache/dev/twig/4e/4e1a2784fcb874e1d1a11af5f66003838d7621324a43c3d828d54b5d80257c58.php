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
class __TwigTemplate_ccd4ab289d5187187f7e03bff81736ed52623b84bfdb029933e4648d3920de3c extends Template
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
        echo "\t<main>
\t\t<div class=\"row mt-3\">
\t\t\t<div class=\"col-12 col text-center\">
\t\t\t\t";
        // line 15
        if ( !twig_test_empty((isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "\t\t\t\t\t<span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 16, $this->source); })()), "nombrecategoria", [], "any", false, false, false, 16), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between mt-3\">
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t<ul class=\"nav menu-item\">
\t\t\t\t\t\t<div class=\"col-6 divfilter\">
\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span id=\"btn-categoria\" class=\"btn-filter btn\">Categorias</span>
\t\t\t\t\t\t\t\t<ul class=\"level1\">
\t\t\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t<a href=";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 31), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 31, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 31, $this->source); })())]), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 divfilter\">
\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t<span id=\"btn-orden\" class=\"btn-filter btn\">Ordenar Por</span>
\t\t\t\t\t\t\t\t<ul class=\"level1\">
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 44, $this->source); })()), "sort" => "1", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 44, $this->source); })())]), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>Mas Reciente</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 49, $this->source); })()), "sort" => "2", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 49, $this->source); })())]), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>Mas Antiguo</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 54, $this->source); })()), "sort" => "3", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 54, $this->source); })())]), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>Mayor Precio</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 59, $this->source); })()), "sort" => "4", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 59, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 59, $this->source); })())]), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>Menor Precio</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 divsearch\">
\t\t\t\t\t<form id=\"formSearch\" action=";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 69, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 69, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 69, $this->source); })())]), "html", null, true);
        echo " method=\"GET\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"inputForm\" class=\"form-control simple\" placeholder=\"Buscar ...\" name=\"srch-term\" id=\"srch-term\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">

\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t<div id=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">
\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailProduct", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 102), "html", null, true);
            echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-card\" src=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 103), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 111), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">U";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["value"], "precio", [], "any", false, false, false, 117), "USD"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 138
        if (0 !== twig_compare((isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 138, $this->source); })()), "0")) {
            // line 139
            echo "\t\t\t<div aria-label=\"Page navigation example\" class=\"m-3\">
\t\t\t\t<ul
\t\t\t\t\tclass=\"pagination\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 144, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 144, $this->source); })()), "page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 144, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 144, $this->source); })())]), "html", null, true);
            echo ">Anterior</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 147
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 147, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 148
                echo "\t\t\t\t\t\t";
                $context["active"] = "";
                // line 149
                echo "\t\t\t\t\t\t";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 149, $this->source); })()), $context["i"])) {
                    // line 150
                    echo "\t\t\t\t\t\t\t";
                    $context["active"] = "active";
                    // line 151
                    echo "\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t<li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 152, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<a class=\"page-link\" href=";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 153, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 153, $this->source); })()), "page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 153, $this->source); })())]), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t";
                // line 154
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href=";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 159, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 159, $this->source); })()), "page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 159, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 159, $this->source); })())]), "html", null, true);
            echo ">Siguiente</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        } else {
            // line 164
            echo "\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t\t</div>
\t\t";
        }
        // line 168
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "\t\t<script src=\"/js/productAll.js\" type=\"text/javascript\"></script>
\t";
        
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
        return array (  393 => 170,  383 => 169,  373 => 168,  367 => 164,  359 => 159,  356 => 158,  346 => 154,  342 => 153,  337 => 152,  334 => 151,  331 => 150,  328 => 149,  325 => 148,  320 => 147,  315 => 144,  308 => 139,  306 => 138,  292 => 126,  277 => 117,  268 => 111,  255 => 103,  249 => 102,  243 => 98,  238 => 97,  233 => 93,  207 => 69,  194 => 59,  186 => 54,  178 => 49,  170 => 44,  160 => 36,  150 => 32,  146 => 31,  143 => 30,  139 => 29,  127 => 19,  120 => 16,  118 => 15,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Todos Productos
{% endblock %}

{% block meta %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}

{% block body %}
\t<main>
\t\t<div class=\"row mt-3\">
\t\t\t<div class=\"col-12 col text-center\">
\t\t\t\t{% if categoriaunica is not empty %}
\t\t\t\t\t<span class=\"badge badge-info\">{{categoriaunica.nombrecategoria}}
\t\t\t\t\t</span>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between mt-3\">
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t<ul class=\"nav menu-item\">
\t\t\t\t\t\t<div class=\"col-6 divfilter\">
\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span id=\"btn-categoria\" class=\"btn-filter btn\">Categorias</span>
\t\t\t\t\t\t\t\t<ul class=\"level1\">
\t\t\t\t\t\t\t\t\t{% for value in categorias %}
\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t<a href={{ path(\"allProduct\", {idcategoria: value.idcategoria, sort: sort, page: page,search: search} ) }}>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{value.nombrecategoria}}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 divfilter\">
\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t<span id=\"btn-orden\" class=\"btn-filter btn\">Ordenar Por</span>
\t\t\t\t\t\t\t\t<ul class=\"level1\">
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"1\", page: page,search: search} ) }}>
\t\t\t\t\t\t\t\t\t\t\t<span>Mas Reciente</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"2\", page: page,search: search} ) }}>
\t\t\t\t\t\t\t\t\t\t\t<span>Mas Antiguo</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"3\", page: page,search: search} ) }}>
\t\t\t\t\t\t\t\t\t\t\t<span>Mayor Precio</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t<a class=\"\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"4\", page: page,search: search} ) }}>
\t\t\t\t\t\t\t\t\t\t\t<span>Menor Precio</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 divsearch\">
\t\t\t\t\t<form id=\"formSearch\" action={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: page} ) }} method=\"GET\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"inputForm\" class=\"form-control simple\" placeholder=\"Buscar ...\" name=\"srch-term\" id=\"srch-term\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">

\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t<div id=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">
\t\t\t\t\t\t\t\t\t\t{#Begin Tab Content #}
\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t{# La clase wide-first es importante #}
\t\t\t\t\t\t\t\t\t\t\t\t{% for value in dataproductforrender %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path(\"detailProduct\", {idproduct:value.idproduct } ) }}\" title=\"{{value.nombre}}\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-card\" src=\"{{value.url}}\" alt=\"{{value.nombre}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"card-title\">{{value.nombre}}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">U{{ value.precio|format_currency('USD') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{% if numPaginas != \"0\" %}
\t\t\t<div aria-label=\"Page navigation example\" class=\"m-3\">
\t\t\t\t<ul
\t\t\t\t\tclass=\"pagination\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: prev,search: search} ) }}>Anterior</a>
\t\t\t\t\t</li>
\t\t\t\t\t{# {{numPaginas}} #}
\t\t\t\t\t{% for i in 1..numPaginas %}
\t\t\t\t\t\t{% set active = \"\" %}
\t\t\t\t\t\t{% if page==i %}
\t\t\t\t\t\t\t{% set active = \"active\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li class=\"page-item {{active}}\">
\t\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: i,search: search} ) }}>
\t\t\t\t\t\t\t\t{{i}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: next,search: search} ) }}>Siguiente</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t\t</div>
\t\t{% endif %}
\t{% endblock %}
\t{% block javascripts %}
\t\t<script src=\"/js/productAll.js\" type=\"text/javascript\"></script>
\t{% endblock %}
", "product/all.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\product\\all.html.twig");
    }
}
