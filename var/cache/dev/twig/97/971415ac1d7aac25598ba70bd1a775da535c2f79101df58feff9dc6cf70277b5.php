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

/* categoria/categorias/insertupdate.html.twig */
class __TwigTemplate_851431fc5003ff423b68339447c3d8c1b258fc94c233a1aca10a58392d05b59e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/categorias/insertupdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoria/categorias/insertupdate.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoria/categorias/insertupdate.html.twig", 1);
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
        echo "\t<div class=\"row mt-5 pl-5\">
\t\t<div class=\"col-6\">
\t\t\t<form class=\"mb-5\" action=\"/categoria/guardar\" method=\"post\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"textTitulo\">Titulo</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" aria-describedby=\"nombre\" placeholder=\"Nombre\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 9, $this->source); })()), "nombre", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 11, $this->source); })()), "idcategoria", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t<a class=\"btn btn-primary\" href=\"/categoria\" role=\"button\">Volver</a>
\t\t\t</form>
\t\t\t";
        // line 15
        if ((isset($context["mensaje"]) || array_key_exists("mensaje", $context))) {
            // line 16
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t";
        }
        // line 18
        echo "\t\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 18, $this->source); })()));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categoria/categorias/insertupdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  89 => 16,  87 => 15,  80 => 11,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"row mt-5 pl-5\">
\t\t<div class=\"col-6\">
\t\t\t<form class=\"mb-5\" action=\"/categoria/guardar\" method=\"post\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"textTitulo\">Titulo</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" aria-describedby=\"nombre\" placeholder=\"Nombre\" value=\"{{categoria.nombre}}\">
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{categoria.idcategoria}}\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t<a class=\"btn btn-primary\" href=\"/categoria\" role=\"button\">Volver</a>
\t\t\t</form>
\t\t\t{% if mensaje is defined%}
\t\t\t\t<span>{{mensaje}}</span>
\t\t\t{% endif %}
\t\t\t{{dump(categoria)}}
\t\t</div>
\t</div>
{% endblock %}
", "categoria/categorias/insertupdate.html.twig", "/var/www/html/EGXD_symfony/templates/categoria/categorias/insertupdate.html.twig");
    }
}
