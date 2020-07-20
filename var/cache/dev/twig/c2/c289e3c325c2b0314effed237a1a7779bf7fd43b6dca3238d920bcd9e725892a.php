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
class __TwigTemplate_0f8b9d636645d382235ce56fcd8126625b75296da8dce2dfaa5067738c845784 extends Template
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
        echo "<div id=\"page\">
\t<header>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t\t\t\t\t<div class=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t<a title=\"My Account\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 19
        echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"checkout.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
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
\t<div class=\"container\">
\t\t<div class=\"logo\">
\t\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"images/logo.png\"></a>
\t\t</div>
\t\t<ul class=\"nav hidden-xs menu-item menu-item-left\">
\t\t\t<li class=\"level0 parent drop-menu active\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<span>Principal</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t";
        // line 75
        echo "\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headerNEW.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 75,  74 => 28,  67 => 22,  63 => 19,  58 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"page\">
\t<header>
\t\t<div class=\"header-container\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t<div class=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t<a title=\"My Account\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t{# Aqui va dropDown #}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"checkout.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si NO esta logueado) #}
\t\t\t\t\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
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
\t<div class=\"container\">
\t\t<div class=\"logo\">
\t\t\t<a title=\"equipamiento grafico\" href=\"/\"><img alt=\"equipamiento grafico\" src=\"images/logo.png\"></a>
\t\t</div>
\t\t<ul class=\"nav hidden-xs menu-item menu-item-left\">
\t\t\t<li class=\"level0 parent drop-menu active\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<span>Principal</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t{# <ul class=\"ml-3 nav menu-item menu-item-rigth mystyle\">
\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Monte Grande - Bs. As. | Argentina
\t\t\t</span>
\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\tequipamientografico@gmail.com
\t\t\t</span>
\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t(011) 9 11 6110 0402
\t\t\t</span>
\t\t</ul> #}
\t</div>
</nav>
", "headerNEW.html.twig", "/var/www/html/EGXD_symfony/templates/headerNEW.html.twig");
    }
}
