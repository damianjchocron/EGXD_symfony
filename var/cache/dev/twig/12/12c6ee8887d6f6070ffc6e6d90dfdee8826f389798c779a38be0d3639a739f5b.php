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

/* headerNEW.html.twig */
class __TwigTemplate_26dc79996853529f6f1e7bc65f93e9c2c51a0bdbacfe83d3c8aed93f8b6714e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNEW.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNEW.html.twig"));

        // line 1
        echo "<div>
\t<header>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-5 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-5 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"divmantenimiento\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav menu-item\" id=\"ulmantemiento\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"spanmanetenimiento\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nuevo Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Modificar Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Categorias</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>
<nav>
\t<div class=\"mm-toggle-wrap\">
\t\t<div class=\"mm-toggle\">
\t\t\t<i class=\"fa fa-reorder\"></i>
\t\t\t<span class=\"mm-label\">Menu</span>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"logo\">
\t\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"/images/logo.png\"></a>
\t\t</div>
\t\t";
        // line 82
        echo "\t\t\t<ul class=\"nav menu-item menu-item-left hidden-xs mt-5\">
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<span>Principal</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
        // line 100
        echo "\t\t<div class=\"col-lg-5\">
\t\t\t<ul class=\"uldatos nav menu-item menu-item-right mt-5\">
\t\t\t\t<li class=\"lidatos level0 parent\">
\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12'>Monte Grande - Bs. As. | Argentina</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12 emailheader'>
\t\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"numtelf\" class=\"col-12\">

\t\t\t\t\t\t\t<span class='h4 col-12'>
\t\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headerNEW.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 100,  139 => 82,  117 => 61,  109 => 55,  107 => 54,  104 => 53,  96 => 47,  93 => 46,  63 => 18,  60 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
\t<header>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-5 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-5 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<div id=\"divmantenimiento\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav menu-item\" id=\"ulmantemiento\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"spanmanetenimiento\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nuevo Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Modificar Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Categorias</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si NO esta logueado) #}
\t\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>
<nav>
\t<div class=\"mm-toggle-wrap\">
\t\t<div class=\"mm-toggle\">
\t\t\t<i class=\"fa fa-reorder\"></i>
\t\t\t<span class=\"mm-label\">Menu</span>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"logo\">
\t\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"/images/logo.png\"></a>
\t\t</div>
\t\t{# <div class=\"col-lg-4\"> #}
\t\t\t<ul class=\"nav menu-item menu-item-left hidden-xs mt-5\">
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<span>Principal</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t{# </div> #}
\t\t<div class=\"col-lg-5\">
\t\t\t<ul class=\"uldatos nav menu-item menu-item-right mt-5\">
\t\t\t\t<li class=\"lidatos level0 parent\">
\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12'>Monte Grande - Bs. As. | Argentina</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<span class='h4 col-12 emailheader'>
\t\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"numtelf\" class=\"col-12\">

\t\t\t\t\t\t\t<span class='h4 col-12'>
\t\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "headerNEW.html.twig", "/var/www/html/EGXD_symfony/templates/headerNEW.html.twig");
    }
}
