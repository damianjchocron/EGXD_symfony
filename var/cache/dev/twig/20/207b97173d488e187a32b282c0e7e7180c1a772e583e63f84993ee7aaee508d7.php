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
class __TwigTemplate_6321dad00c58d220d1f76cc5a60224d9bd24e948605de31ca5ad7d23c21d3869 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/modify.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table class=\"table table-dark mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t<th scope=\"col\">Titulo</th>
\t\t\t\t<th scope=\"col\">Descripcion</th>
\t\t\t\t<th scope=\"col\">Precio</th>
\t\t\t\t<th scope=\"col\">Categoria</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataproductforrender"]) || array_key_exists("dataproductforrender", $context) ? $context["dataproductforrender"] : (function () { throw new RuntimeError('Variable "dataproductforrender" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 16
            echo "\t\t\t\t<tr id=\"product";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
\t\t\t\t\t<form method=\"POST\" action=\"/product/modify\">
\t\t\t\t\t\t<th scope=\"row\"><input name=\"idproductmodify\" type=\"number\" class=\"form-control\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 18), "html", null, true);
            echo "\" readonly></th>
\t\t\t\t\t\t<td><input name=\"titulo\" type=\"text\" class=\"form-control\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 19), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t<td><input name=\"descripcion\" type=\"text\" class=\"form-control\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "descripcion", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t<td><input name=\"precio\" type=\"text\" class=\"form-control\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "precio", [], "any", false, false, false, 21), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"idcategoria\" class=\"custom-select\" id=\"inputGroupSelect01\">
\t\t\t\t\t\t\t\t<option value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 24), "idcategoria", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "idcategoria", [], "any", false, false, false, 24), "nombrecategoria", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 26
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "idcategoria", [], "any", false, false, false, 27), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombrecategoria", [], "any", false, false, false, 27), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button data-idproduct=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 32), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary botonimagenes\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tImagenes
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Actualizar</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button data-idproduct=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 40), "html", null, true);
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
        // line 47
        echo "\t\t</tbody>
\t</table>

\t";
        // line 50
        if ( !twig_test_empty((isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 50, $this->source); })()))) {
            // line 51
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
            // line 61
            echo twig_escape_filter($this->env, (isset($context["showmodal"]) || array_key_exists("showmodal", $context) ? $context["showmodal"] : (function () { throw new RuntimeError('Variable "showmodal" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 67
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

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
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
        return array (  234 => 95,  224 => 94,  189 => 67,  180 => 61,  168 => 51,  166 => 50,  161 => 47,  148 => 40,  137 => 32,  132 => 29,  121 => 27,  116 => 26,  110 => 24,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  86 => 16,  82 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<table class=\"table table-dark mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t<th scope=\"col\">Titulo</th>
\t\t\t\t<th scope=\"col\">Descripcion</th>
\t\t\t\t<th scope=\"col\">Precio</th>
\t\t\t\t<th scope=\"col\">Categoria</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for value in dataproductforrender %}
\t\t\t\t<tr id=\"product{{value.idproduct}}\">
\t\t\t\t\t<form method=\"POST\" action=\"/product/modify\">
\t\t\t\t\t\t<th scope=\"row\"><input name=\"idproductmodify\" type=\"number\" class=\"form-control\" value=\"{{value.idproduct}}\" readonly></th>
\t\t\t\t\t\t<td><input name=\"titulo\" type=\"text\" class=\"form-control\" value=\"{{value.titulo}}\"></td>
\t\t\t\t\t\t<td><input name=\"descripcion\" type=\"text\" class=\"form-control\" value=\"{{value.descripcion}}\"></td>
\t\t\t\t\t\t<td><input name=\"precio\" type=\"text\" class=\"form-control\" value=\"{{value.precio}}\"></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"idcategoria\" class=\"custom-select\" id=\"inputGroupSelect01\">
\t\t\t\t\t\t\t\t<option value=\"{{value.idcategoria.idcategoria}}\">{{value.idcategoria.nombrecategoria}}</option>
\t\t\t\t\t\t\t\t{# Este ciclo ford quiza de problemas y tengo qe utilizar el otro?? #}
\t\t\t\t\t\t\t\t{% for item in categorias %}
\t\t\t\t\t\t\t\t\t<option value=\"{{item.idcategoria}}\">{{item.nombrecategoria}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button data-idproduct=\"{{value.idproduct}}\" type=\"button\" class=\"btn btn-primary botonimagenes\" data-toggle=\"modal\" data-target=\"#ModalScrollable\">
\t\t\t\t\t\t\t\tImagenes
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Actualizar</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
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
", "product/modify.html.twig", "/var/www/html/EGXD_symfony/templates/product/modify.html.twig");
    }
}
