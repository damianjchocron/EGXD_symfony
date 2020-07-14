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

/* header.html.twig */
class __TwigTemplate_fbd6da2c74fe6611029e0f66b92801b3b4ec3d8fbe5175f254531823c1a5f3aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "\t<nav class=\"navbar navbar-dark bg-dark mt-2\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-xl-5 col-md-7 col-sm-12 mt-5\">
\t\t\t\t<span class=\"mb-0 h1 col-xl-12 titulo\">Equipamiento Grafico Monte Grande</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>Tu concesionaria de Máquinas Gráficás.</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>¿Queres vender? ¿Queres Comprar?</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>Carlos Alfredo Gonzalez</span>
\t\t\t</div>
\t\t\t<div class=\" paraPadingImagen col-md-5 col-sm-12 col-xl-3 mt-5\">
\t\t\t\t<img id=\"maquinaHeader\" src=\"/img/header/maquinaheader.png\" alt=\"maquina\">
\t\t\t</div>
\t\t\t<div class='align-items-end col-xl-3 col-sm-12 col-md-3 mt-5 infoCabecera '>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Monte Grande - Bs. As. | Argentina
\t\t\t\t</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<nav class=\"navbar  fixed-top navbar-expand-lg navbar-dark bg-info row\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse col-xl-12 col-md-6 offset-md-5\" id=\"navbarNavAltMarkup\">
\t\t\t<div class=\"navbar-nav\">
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/\">Principal</a>
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/product/all\">Maquinas</a>
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/contacto\">Contacto</a>
\t\t\t</div>
\t\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tMantenimiento
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<a id=\"linkinsert\" class=\"dropdown-item\" href=\"/product/insertform\">Insertar Maquina</a>
\t\t\t\t\t\t<a id=\"linkmodify\" class=\"dropdown-item\" href=\"/product/modify\">Modificar Maquina</a>
\t\t\t\t\t\t<a id=\"linkcategoria\" class=\"dropdown-item\" href=\"/categoria\">Agregar Categorias</a>
\t\t\t\t\t\t<a  class=\"dropdown-item\" href=\"/logout\">Cerrar Sesion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 49
        echo "\t\t</div>
\t</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 49,  101 => 37,  99 => 36,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
\t<nav class=\"navbar navbar-dark bg-dark mt-2\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-xl-5 col-md-7 col-sm-12 mt-5\">
\t\t\t\t<span class=\"mb-0 h1 col-xl-12 titulo\">Equipamiento Grafico Monte Grande</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>Tu concesionaria de Máquinas Gráficás.</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>¿Queres vender? ¿Queres Comprar?</span>
\t\t\t\t<span class='navbar-brand mb-0 h2 col-12 eslogan'>Carlos Alfredo Gonzalez</span>
\t\t\t</div>
\t\t\t<div class=\" paraPadingImagen col-md-5 col-sm-12 col-xl-3 mt-5\">
\t\t\t\t<img id=\"maquinaHeader\" src=\"/img/header/maquinaheader.png\" alt=\"maquina\">
\t\t\t</div>
\t\t\t<div class='align-items-end col-xl-3 col-sm-12 col-md-3 mt-5 infoCabecera '>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Carlos Pellegrini 1055 - CP 1842</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'>Monte Grande - Bs. As. | Argentina
\t\t\t\t</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/mail.png\" alt=\"mail\">
\t\t\t\t\tequipamientografico@gmail.com
\t\t\t\t</span>
\t\t\t\t<span class='navbar-brand mb-0 h4 col-12'><img class=\"imagenesHeader\" src=\"/img/header/whatsapp.png\" alt=\"telf\">
\t\t\t\t\t(011) 9 11 6110 0402
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<nav class=\"navbar  fixed-top navbar-expand-lg navbar-dark bg-info row\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse col-xl-12 col-md-6 offset-md-5\" id=\"navbarNavAltMarkup\">
\t\t\t<div class=\"navbar-nav\">
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/\">Principal</a>
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/product/all\">Maquinas</a>
\t\t\t\t<a class=\"nav-item nav-link navbar-brand\" href=\"/contacto\">Contacto</a>
\t\t\t</div>
\t\t\t{% if app.user %}
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tMantenimiento
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t<a id=\"linkinsert\" class=\"dropdown-item\" href=\"/product/insertform\">Insertar Maquina</a>
\t\t\t\t\t\t<a id=\"linkmodify\" class=\"dropdown-item\" href=\"/product/modify\">Modificar Maquina</a>
\t\t\t\t\t\t<a id=\"linkcategoria\" class=\"dropdown-item\" href=\"/categoria\">Agregar Categorias</a>
\t\t\t\t\t\t<a  class=\"dropdown-item\" href=\"/logout\">Cerrar Sesion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</nav>
{% endblock %}
", "header.html.twig", "/var/www/html/EGXD_symfony/templates/header.html.twig");
    }
}
