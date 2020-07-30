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
        echo "\t<table class=\"table table-dark mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\" class=\"col-2\">ID</th>
\t\t\t\t<th scope=\"col\" class=\"col-4\">Titulo</th>
\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t<tr id=\"product";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t<form method=\"POST\" action=\"/product/modify\">
\t\t\t\t\t\t<th class=\"col-2\" scope=\"row\"><input name=\"idproductmodify\" type=\"number\" class=\"form-control\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 24), "html", null, true);
            echo "\" readonly></th>
\t\t\t\t\t\t<td class=\"col-2\" ><input name=\"titulo\" type=\"text\" class=\"form-control\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 25), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<button data-idproduct=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 28), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary botonimagenes\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tImagenes
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 33)]), "html", null, true);
            echo ">Actualizar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<button data-idproduct=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 36), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger deleteproduct\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</tbody>
\t</table>

\t";
        // line 46
        if ( !twig_test_empty((isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 46, $this->source); })()))) {
            // line 47
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
            // line 57
            echo twig_escape_filter($this->env, (isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 63
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
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary submitmodal\" data-dismiss=\"modal\">Save changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
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
        return array (  244 => 91,  234 => 90,  199 => 63,  190 => 57,  178 => 47,  176 => 46,  171 => 43,  158 => 36,  152 => 33,  144 => 28,  138 => 25,  134 => 24,  128 => 22,  124 => 21,  113 => 12,  103 => 11,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}

{% block title %}Equipamiento Grafico - Mantenimiento
{% endblock %}

{% block meta %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNotIndexNEW.css\" media=\"all\">

{% endblock %}

{% block body %}
\t<table class=\"table table-dark mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\" class=\"col-2\">ID</th>
\t\t\t\t<th scope=\"col\" class=\"col-4\">Titulo</th>
\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for value in dataproductforrender %}
\t\t\t\t<tr id=\"product{{value.idproduct}}\">
\t\t\t\t\t<form method=\"POST\" action=\"/product/modify\">
\t\t\t\t\t\t<th class=\"col-2\" scope=\"row\"><input name=\"idproductmodify\" type=\"number\" class=\"form-control\" value=\"{{value.idproduct}}\" readonly></th>
\t\t\t\t\t\t<td class=\"col-2\" ><input name=\"titulo\" type=\"text\" class=\"form-control\" value=\"{{value.titulo}}\"></td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<button data-idproduct=\"{{value.idproduct}}\" type=\"button\" class=\"btn btn-primary botonimagenes\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tImagenes
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<a class=\"btn btn-success\" href={{ path(\"updateProduct\", {id: value.idproduct} ) }}>Actualizar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"col-2\">
\t\t\t\t\t\t\t<button data-idproduct=\"{{value.idproduct}}\" type=\"button\" class=\"btn btn-danger deleteproduct\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tBorrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

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
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary submitmodal\" data-dismiss=\"modal\">Save changes</button>
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
