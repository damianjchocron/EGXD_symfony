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
\t\t\t\t\t\t";
            // line 18
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"all?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["filtersort"]) || array_key_exists("filtersort", $context) ? $context["filtersort"] : (function () { throw new RuntimeError('Variable "filtersort" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombrecategoria", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
\t\t\t\t\t";
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
\t\t\t\t<div
\t\t\t\t\tclass=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=1 ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["filtercategory"]) || array_key_exists("filtercategory", $context) ? $context["filtercategory"] : (function () { throw new RuntimeError('Variable "filtercategory" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " \">Mas Reciente</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=2 ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["filtercategory"]) || array_key_exists("filtercategory", $context) ? $context["filtercategory"] : (function () { throw new RuntimeError('Variable "filtercategory" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " \">Mas Antiguo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=3 ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["filtercategory"]) || array_key_exists("filtercategory", $context) ? $context["filtercategory"] : (function () { throw new RuntimeError('Variable "filtercategory" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " \">Mayor Precio</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=4 ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["filtercategory"]) || array_key_exists("filtercategory", $context) ? $context["filtercategory"] : (function () { throw new RuntimeError('Variable "filtercategory" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " \">Menor Precio</a>
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
            echo twig_escape_filter($this->env, (isset($context["categoriaunica"]) || array_key_exists("categoriaunica", $context) ? $context["categoriaunica"] : (function () { throw new RuntimeError('Variable "categoriaunica" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "\t\t<form action=\"product/all?\" ";
        echo twig_escape_filter($this->env, (isset($context["filtercategory"]) || array_key_exists("filtercategory", $context) ? $context["filtercategory"] : (function () { throw new RuntimeError('Variable "filtercategory" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filtersort"]) || array_key_exists("filtersort", $context) ? $context["filtersort"] : (function () { throw new RuntimeError('Variable "filtersort" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["filterpage"]) || array_key_exists("filterpage", $context) ? $context["filterpage"] : (function () { throw new RuntimeError('Variable "filterpage" does not exist.', 42, $this->source); })()), "html", null, true);
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

<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t<ul
\t\tclass=\"pagination\">
\t\t<!-- Aca en los href van los FILTROS  -->
\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"product/all&page=\" . \$prev . \$filtersort . \$filtercategory ?>\">Anterior</a>
\t\t</li>
\t\t";
        // line 83
        echo "<li class=\"page-item <?php echo \$active ?>\">
\t\t\t<a class=\"page-link\" href=\"product/all&page=\" . \$i . \$filtersort . \$filtercategory ?>\"><?php echo \$i ?></a>
\t\t</li>
\t\t";
        // line 87
        echo "\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"product/all&page= . \$next . \$filtersort . \$filtercategory . \$filtersearch\">Siguiente</a>
\t\t</li>
\t</ul>
</nav>";
        
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
        return array (  247 => 87,  242 => 83,  230 => 70,  218 => 64,  214 => 63,  210 => 62,  206 => 61,  201 => 59,  196 => 56,  192 => 55,  171 => 42,  164 => 38,  161 => 37,  159 => 36,  150 => 32,  144 => 31,  138 => 30,  132 => 29,  121 => 20,  106 => 18,  103 => 16,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\t{# <a class=\"dropdown-item\" href=\"{{ path(\"all\", {idcategoria: value.idcategoria}, {sort: sort}, {page: page}) }}>{{value.nombrecategoria}}</a> #}
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"all?{{value.idcategoria}} {{filtersort}} {{filterpage}}\">{{value.nombrecategoria}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-4 dropdown\">
\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tOrdenar Por
\t\t\t\t</button>
\t\t\t\t<div
\t\t\t\t\tclass=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t<!-- Aca en los href van los FILTROS  -->
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=1 {{filtercategory}} {{filterpage}} \">Mas Reciente</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=2 {{filtercategory}} {{filterpage}} \">Mas Antiguo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=3 {{filtercategory}} {{filterpage}} \">Mayor Precio</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"product/all&sort=4 {{filtercategory}} {{filterpage}} \">Menor Precio</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if categoriaunica is not empty %}
\t\t\t<div>
\t\t\t\t<span class=\"badge badge-info\">{{categoriaunica}}
\t\t\t\t</span>
\t\t\t</div>
\t\t{% endif %}
\t\t<form action=\"product/all?\" {{filtercategory}} {{filtersort}} {{filterpage}} method=\"GET\">
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

<nav aria-label=\"Page navigation example\" class=\"m-5\">
\t<ul
\t\tclass=\"pagination\">
\t\t<!-- Aca en los href van los FILTROS  -->
\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"product/all&page=\" . \$prev . \$filtersort . \$filtercategory ?>\">Anterior</a>
\t\t</li>
\t\t{# <?php for (\$i = 1; \$i <= \$numPaginas; \$i++) : ?>
\t\t<?php \$active = \"\" ?>
\t\t<?php if (\$page == \$i) \$active = \"active\" ?>
\t\t #}<li class=\"page-item <?php echo \$active ?>\">
\t\t\t<a class=\"page-link\" href=\"product/all&page=\" . \$i . \$filtersort . \$filtercategory ?>\"><?php echo \$i ?></a>
\t\t</li>
\t\t{# <?php endfor ?> #}
\t\t<li class=\"page-item\">
\t\t\t<a class=\"page-link\" href=\"product/all&page= . \$next . \$filtersort . \$filtercategory . \$filtersearch\">Siguiente</a>
\t\t</li>
\t</ul>
</nav>{% endblock %}
", "product/all.html.twig", "/var/www/html/EGXD_symfony/templates/product/all.html.twig");
    }
}
