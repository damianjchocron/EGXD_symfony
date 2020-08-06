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
class __TwigTemplate_a821b33c31426c4e51a4f0f9bd38f33a238d5575cdd41b5dcc93311059c12d67 extends Template
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
\t\t\t\t\t\t<div class=\"col-xl-6 col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"welcome-msg\">
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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t\t\t\t\t\t\t";
            // line 19
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Sesion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"nav menu-item\" id=\"ulmantemiento\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"spanmanetenimiento\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nuevo Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Modificar Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Categorias</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header></div><nav>
<div class=\"mm-toggle-wrap\">
\t<div class=\"mm-toggle\">
\t\t<i class=\"fa fa-reorder\"></i>
\t\t<span class=\"mm-label\">Menu</span>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"logo\">
\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"/images/logo.png\"></a>
\t</div>
\t";
        // line 77
        echo "\t<ul class=\"nav menu-item menu-item-left hidden-xs mt-5\">
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/\">
\t\t\t\t<span>Principal</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/product/all\">
\t\t\t\t<span>Catalogo</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/contacto\">
\t\t\t\t<span>Conocenos</span>
\t\t\t</a>
\t\t</li>
\t</ul>
\t";
        // line 95
        echo "\t<div class=\"col-lg-5\">
\t\t<ul class=\"uldatos nav menu-item menu-item-right mt-5\">
\t\t\t<li class=\"lidatos level0 parent\">
\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>Monte Grande - Bs. As. | Argentina</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12 emailheader'>
\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"numtelf\" class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>
\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>
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
        return array (  149 => 95,  130 => 77,  110 => 58,  76 => 26,  73 => 25,  65 => 19,  63 => 18,  60 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
\t<header>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-6 col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"welcome-msg\">
\t\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-xs-5 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si NO esta logueado) #}
\t\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Sesion</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav menu-item\" id=\"ulmantemiento\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"spanmanetenimiento\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level1\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nuevo Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Modificar Producto</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Categorias</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"level1 first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header></div><nav>
<div class=\"mm-toggle-wrap\">
\t<div class=\"mm-toggle\">
\t\t<i class=\"fa fa-reorder\"></i>
\t\t<span class=\"mm-label\">Menu</span>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"logo\">
\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"/images/logo.png\"></a>
\t</div>
\t{# <div class=\"col-lg-4\"> #}
\t<ul class=\"nav menu-item menu-item-left hidden-xs mt-5\">
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/\">
\t\t\t\t<span>Principal</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/product/all\">
\t\t\t\t<span>Catalogo</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"level0 parent drop-menu\">
\t\t\t<a href=\"/contacto\">
\t\t\t\t<span>Conocenos</span>
\t\t\t</a>
\t\t</li>
\t</ul>
\t{# </div> #}
\t<div class=\"col-lg-5\">
\t\t<ul class=\"uldatos nav menu-item menu-item-right mt-5\">
\t\t\t<li class=\"lidatos level0 parent\">
\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>Monte Grande - Bs. As. | Argentina</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12 emailheader'>
\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"numtelf\" class=\"col-12\">
\t\t\t\t\t\t<span class='h4 col-12'>
\t\t\t\t\t\t\t<img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>
", "headerNEW.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\headerNEW.html.twig");
    }
}
