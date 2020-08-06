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

/* product/modify.html.twig */
class __TwigTemplate_3280fbdc7d5534b8db11ae67ff312cbd9662aef72c3a7e379550e016c28d2510 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/modify.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "product/modify.html.twig", 1);
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

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"container mt-3 mb-3\">
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "\t\t\t<div class=\"row\" id=\"product";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-sm-2\">
\t\t\t\t\t<input class=\"cienxcienmodify form-control hidden-xs\" name=\"idproductmodify\" type=\"number\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 16), "html", null, true);
            echo "\" readonly>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-5 col-lg-5 col-sm-10\">
\t\t\t\t\t<input name=\"titulo\" type=\"text\" class=\"cienxcienmodify form-control\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 19), "html", null, true);
            echo "\" readonly>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<button data-idproduct=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 22), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary botonimagenes cienxcienmodify\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\tImagenes
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<a class=\"btn btn-success cienxcienmodify\" href=";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 27)]), "html", null, true);
            echo ">
\t\t\t\t\t\tActualizar
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<button data-idproduct=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 32), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger deleteproduct cienxcienmodify mb-3\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\tBorrar
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</div>

\t";
        // line 66
        echo "
\t";
        // line 67
        if ( !twig_test_empty((isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "\t\t<div id=\"myModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\">Aviso Accion</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 84
        echo "\t<!-- Button trigger modal -->

\t<!-- Modal -->

\t<div class=\"modal fade\" id=\"ModalScrollable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalScrollableTitle\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-scrollable\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"ModalScrollableTitle\">Imagenes</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\"><!-- Aca quiero qe me muestre las fotos correspondientes al product  -->
\t\t\t\t\t<!--  qe llama al modal en cada caso -->
\t\t\t\t\t<!-- Append con jquery -->

\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button id=\"saveChanges\" class=\"btn btn-primary submitmodal\" data-dismiss=\"modal\">Guardar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "\t<script src=\"../js/jsmodalimagenesmodify.js\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 112,  231 => 111,  196 => 84,  187 => 78,  175 => 68,  173 => 67,  170 => 66,  166 => 38,  154 => 32,  146 => 27,  138 => 22,  132 => 19,  126 => 16,  120 => 14,  116 => 13,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
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
\t<div class=\"container mt-3 mb-3\">
\t\t{% for value in dataproductforrender %}
\t\t\t<div class=\"row\" id=\"product{{value.idproduct}}\">
\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-sm-2\">
\t\t\t\t\t<input class=\"cienxcienmodify form-control hidden-xs\" name=\"idproductmodify\" type=\"number\" value=\"{{value.idproduct}}\" readonly>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-5 col-lg-5 col-sm-10\">
\t\t\t\t\t<input name=\"titulo\" type=\"text\" class=\"cienxcienmodify form-control\" value=\"{{value.titulo}}\" readonly>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<button data-idproduct=\"{{value.idproduct}}\" type=\"button\" class=\"btn btn-primary botonimagenes cienxcienmodify\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\tImagenes
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<a class=\"btn btn-success cienxcienmodify\" href={{ path(\"updateProduct\", {id: value.idproduct} ) }}>
\t\t\t\t\t\tActualizar
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-3\">
\t\t\t\t\t<button data-idproduct=\"{{value.idproduct}}\" type=\"button\" class=\"btn btn-danger deleteproduct cienxcienmodify mb-3\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\tBorrar
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>

\t{# <!-- Button trigger modal -->
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\tLaunch demo modal
\t\t\t</button>
\t\t
\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t...
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t #}

\t{% if showmodal is not empty %}
\t\t<div id=\"myModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\">Aviso Accion</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>{{showmodal}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t<!-- Button trigger modal -->

\t<!-- Modal -->

\t<div class=\"modal fade\" id=\"ModalScrollable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalScrollableTitle\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-scrollable\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"ModalScrollableTitle\">Imagenes</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\"><!-- Aca quiero qe me muestre las fotos correspondientes al product  -->
\t\t\t\t\t<!--  qe llama al modal en cada caso -->
\t\t\t\t\t<!-- Append con jquery -->

\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button id=\"saveChanges\" class=\"btn btn-primary submitmodal\" data-dismiss=\"modal\">Guardar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"../js/jsmodalimagenesmodify.js\" type=\"text/javascript\"></script>
{% endblock %}
", "product/modify.html.twig", "C:\\xampp\\htdocs\\Ejercicios\\damian\\EGXD_symfony\\templates\\product\\modify.html.twig");
    }
}
