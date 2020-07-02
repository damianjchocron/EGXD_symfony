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
class __TwigTemplate_a5d4ef9bd7542d6b1828e45d9c6ac4766c3720e2c21da7e2a77c5a10bb5d0a0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/all.html.twig", 1);
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

        echo "Hello ProductController!
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
        echo "
\t<div class=\"row justify-content-between\">
\t\t<div class=\"row\">
\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tCategoria
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu \" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 16
            echo "\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 17), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 17, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 17, $this->source); })())]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
            // line 19
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tOrdenar Por
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 29, $this->source); })()), "sort" => "1", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "> Mas Reciente</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 30, $this->source); })()), "sort" => "2", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo ">Mas Antiguo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 31, $this->source); })()), "sort" => "3", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo ">Mayor Precio</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 32, $this->source); })()), "sort" => "4", "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 32, $this->source); })())]), "html", null, true);
        echo ">Menor Precio</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 36
        if ( !twig_test_empty((isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "\t\t\t<div>
\t\t\t\t<span class=\"badge badge-info\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 38, $this->source); })()), "nombrecategoria", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "\t\t<form action=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 42, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 42, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo " method=\"GET\">
\t\t\t<div class=\"input-group col-xl-11 m-3 aling-self-start\">
\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon1\">Buscar</button>
\t\t\t\t</div>
\t\t\t\t<input type=\"text\" id=\"search\" name=\"search\" class=\"form-control col\" placeholder=\"\" aria-label=\"Example text with button addon\" aria-describedby=\"button-addon1\">
\t\t\t</div>
\t\t</form>
\t</div>


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 56
            echo "\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 pr-4 pb-4\">
\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t<div class=\"mt1 card\">
\t\t\t\t\t\t\t<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 61), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "descripcion", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Precio \$";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "precio", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"/product/detail&idproduct=";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 64), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ver Mas</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t</div>
\t</div>

\t";
        // line 73
        if (0 !== twig_compare((isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 73, $this->source); })()), "0")) {
            // line 74
            echo "\t\t<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t\t\t<ul
\t\t\t\tclass=\"pagination\">
\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 79, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 79, $this->source); })()), "page" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new RuntimeError('Variable "prev" does not exist.', 79, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 79, $this->source); })())]), "html", null, true);
            echo ">Anterior</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 82
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPaginas"]) || array_key_exists("numPaginas", $context) ? $context["numPaginas"] : (function () { throw new RuntimeError('Variable "numPaginas" does not exist.', 82, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "\t\t\t\t\t";
                $context["active"] = "";
                // line 84
                echo "\t\t\t\t\t";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()), $context["i"])) {
                    // line 85
                    echo "\t\t\t\t\t\t";
                    $context["active"] = "active";
                    // line 86
                    echo "\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t<li class=\"page-item ";
                echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 87, $this->source); })()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a class=\"page-link\" href=";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 88, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 88, $this->source); })()), "page" => $context["i"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 88, $this->source); })())]), "html", null, true);
                echo ">
\t\t\t\t\t\t\t";
                // line 89
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allProduct", ["idcategoria" => (isset($context["idcategoria"]) || array_key_exists("idcategoria", $context) ? $context["idcategoria"] : (function () { throw new RuntimeError('Variable "idcategoria" does not exist.', 94, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 94, $this->source); })()), "page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 94, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 94, $this->source); })())]), "html", null, true);
            echo ">Siguiente</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t";
        } else {
            // line 99
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t</div>
\t";
        }
        
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
        return array (  281 => 99,  273 => 94,  270 => 93,  260 => 89,  256 => 88,  251 => 87,  248 => 86,  245 => 85,  242 => 84,  239 => 83,  234 => 82,  229 => 79,  222 => 74,  220 => 73,  215 => 70,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  186 => 59,  181 => 56,  177 => 55,  160 => 42,  153 => 38,  150 => 37,  148 => 36,  141 => 32,  137 => 31,  133 => 30,  128 => 29,  118 => 20,  112 => 19,  106 => 17,  103 => 16,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!
{% endblock %}

{% block body %}

\t<div class=\"row justify-content-between\">
\t\t<div class=\"row\">
\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tCategoria
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu \" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t{% for value in categorias %}
\t\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: value.idcategoria, sort: sort, page: page,search: search} ) }}>{{value.nombrecategoria}}</a>
\t\t\t\t\t\t{# <a class=\"dropdown-item\" href=\"all?{{value.idcategoria}} {{filtersort}} {{filterpage}}\"> {{value.nombrecategoria}}</a> #}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tOrdenar Por
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t{# Aca espera qe el ID categoria no sea vacio ! #}
\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"1\", page: page,search: search} ) }}> Mas Reciente</a>
\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"2\", page: page,search: search} ) }}>Mas Antiguo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"3\", page: page,search: search} ) }}>Mayor Precio</a>
\t\t\t\t\t<a class=\"dropdown-item\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: \"4\", page: page,search: search} ) }}>Menor Precio</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if categoriaunica is not empty %}
\t\t\t<div>
\t\t\t\t<span class=\"badge badge-info\">{{categoriaunica.nombrecategoria}}
\t\t\t\t</span>
\t\t\t</div>
\t\t{% endif %}
\t\t<form action={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: page,search: search} ) }} method=\"GET\">
\t\t\t<div class=\"input-group col-xl-11 m-3 aling-self-start\">
\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon1\">Buscar</button>
\t\t\t\t</div>
\t\t\t\t<input type=\"text\" id=\"search\" name=\"search\" class=\"form-control col\" placeholder=\"\" aria-label=\"Example text with button addon\" aria-describedby=\"button-addon1\">
\t\t\t</div>
\t\t</form>
\t</div>


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{% for value in dataproductforrender %}
\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 pr-4 pb-4\">
\t\t\t\t\t<div class=\"card-deck\">
\t\t\t\t\t\t<div class=\"mt1 card\">
\t\t\t\t\t\t\t<img src=\"{{value.url}}\" class=\"card-img-top\" alt=\"FotosMaquinas\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{value.nombre}}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{value.descripcion}}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Precio \${{value.precio}}</p>
\t\t\t\t\t\t\t\t<a href=\"/product/detail&idproduct={{value.idproduct}}\" class=\"btn btn-primary\">Ver Mas</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>

\t{% if numPaginas != \"0\" %}
\t\t<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t\t\t<ul
\t\t\t\tclass=\"pagination\">
\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: prev,search: search} ) }}>Anterior</a>
\t\t\t\t</li>
\t\t\t\t{# {{numPaginas}} #}
\t\t\t\t{% for i in 1..numPaginas %}
\t\t\t\t\t{% set active = \"\" %}
\t\t\t\t\t{% if page==i %}
\t\t\t\t\t\t{% set active = \"active\" %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"page-item {{active}}\">
\t\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: i,search: search} ) }}>
\t\t\t\t\t\t\t{{i}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href={{ path(\"allProduct\", {idcategoria: idcategoria, sort: sort, page: next,search: search} ) }}>Siguiente</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t{% else %}
\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\tProximamente habra productos en esta categoria, Gracias !
\t\t</div>
\t{% endif %}
{% endblock %}
", "product/all.html.twig", "/var/www/html/EGXD_symfony/templates/product/all.html.twig");
    }
}
