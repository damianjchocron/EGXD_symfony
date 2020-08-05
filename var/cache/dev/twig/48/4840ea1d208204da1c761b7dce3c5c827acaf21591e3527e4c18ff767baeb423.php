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

/* baseNEW.html.twig */
class __TwigTemplate_0d3ba918d031ceef8042186bf850888545f179ddaf39512b86281a5299570e8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseNEW.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseNEW.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t";
        // line 13
        echo "\t\t<link rel=\"icon\" type=\"image/png\" href=\"/img/favicon.png\">
\t\t<title>
\t\t\t";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 17
        echo "\t\t</title>

\t\t";
        // line 20
        echo "\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t";
        // line 24
        echo "\t\t<link
\t\trel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
\t\t";
        // line 27
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/revslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\" media=\"all\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNEW.css\" media=\"all\">

\t\t";
        // line 39
        echo "\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index mmPushBody\">
\t\t<div id=\"page\">

\t\t\t";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
\t\t\t";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "
\t\t\t";
        // line 60
        echo "\t\t\t<script type=\"text/javascript\" src=\"/js/jquery.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/common.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/countdown.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/owl.carousel.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/jquery.mobile-menu.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/revolution-slider.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/revolution.extension.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/newJSneedInforTemplate.js\"></script>
\t\t\t";
        // line 70
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
\t\t\t";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "\t\t</body>
\t</body>
</html></div><div id=\"mobile-menu\">
<ul>
\t<li>
\t\t<div class=\"principal\">
\t\t\t<a href=\"/\">
\t\t\t\t<i class=\"icon-home\"></i>Principal</a>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"home\">
\t\t\t<a href=\"/product/all\">
\t\t\t\t<i class=\"icon-home\"></i>Catelogo</a>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"home\">
\t\t\t<a href=\"/contacto\">
\t\t\t\t<i class=\"icon-home\"></i>Conocenos</a>
\t\t</div>
\t</li>
\t";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t<i class=\"icon-home\"></i>Nuevo Producto</a>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t<i class=\"icon-home\"></i>Modificar Producto</a>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t<i class=\"icon-home\"></i>Categorias</a>
\t\t\t</div>
\t\t</li>
\t";
        }
        // line 117
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            echo "\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/login\">
\t\t\t\t\t<i class=\"icon-home\"></i>Iniciar Secion</a>
\t\t\t</div>
\t\t</li>
\t";
        }
        // line 125
        echo "</ul></div></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipamiento Grafico
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 48
        echo "\t\t\t\t";
        $this->loadTemplate("headerNEW.html.twig", "baseNEW.html.twig", 48)->display($context);
        // line 49
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "\t\t\t\t<p>Aqui falta body
\t\t\t\t</p>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "\t\t\t\t";
        $this->loadTemplate("footerNEW.html.twig", "baseNEW.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t\t\t\t<script></script>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseNEW.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 73,  314 => 72,  304 => 57,  301 => 56,  291 => 55,  279 => 51,  269 => 50,  259 => 49,  256 => 48,  246 => 47,  226 => 15,  216 => 5,  206 => 4,  195 => 125,  186 => 118,  183 => 117,  162 => 98,  160 => 97,  136 => 75,  134 => 72,  130 => 70,  119 => 60,  116 => 58,  114 => 55,  111 => 54,  108 => 50,  106 => 47,  96 => 39,  83 => 27,  79 => 24,  74 => 20,  70 => 17,  68 => 15,  64 => 13,  56 => 6,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t{% block meta %}
\t\t{% endblock%}
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t{# Favicons Icon #}
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/img/favicon.png\">
\t\t<title>
\t\t\t{% block title %}Equipamiento Grafico
\t\t\t{% endblock %}
\t\t</title>

\t\t{# Mobile Specific #}
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t{# CSS Style #}
\t\t<link
\t\trel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
\t\t{# <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\"> #}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/revslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\" media=\"all\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"/css/cssNEW.css\" media=\"all\">

\t\t{# Google Fonts #}
\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index mmPushBody\">
\t\t<div id=\"page\">

\t\t\t{% block header %}
\t\t\t\t{% include 'headerNEW.html.twig' %}
\t\t\t{% endblock %}
\t\t\t{% block body %}
\t\t\t\t<p>Aqui falta body
\t\t\t\t</p>
\t\t\t{% endblock %}

\t\t\t{% block footer %}
\t\t\t\t{% include 'footerNEW.html.twig' %}
\t\t\t{% endblock %}

\t\t\t{# JavaScript #}
\t\t\t<script type=\"text/javascript\" src=\"/js/jquery.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/bootstrap.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/common.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/countdown.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/owl.carousel.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/jquery.mobile-menu.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/revolution-slider.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/revolution.extension.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/js/newJSneedInforTemplate.js\"></script>
\t\t\t{# <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script> #}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
\t\t\t{% block javascripts %}
\t\t\t\t<script></script>
\t\t\t{% endblock %}
\t\t</body>
\t</body>
</html></div><div id=\"mobile-menu\">
<ul>
\t<li>
\t\t<div class=\"principal\">
\t\t\t<a href=\"/\">
\t\t\t\t<i class=\"icon-home\"></i>Principal</a>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"home\">
\t\t\t<a href=\"/product/all\">
\t\t\t\t<i class=\"icon-home\"></i>Catelogo</a>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"home\">
\t\t\t<a href=\"/contacto\">
\t\t\t\t<i class=\"icon-home\"></i>Conocenos</a>
\t\t</div>
\t</li>
\t{% if app.user %}
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/product/insertform\">
\t\t\t\t\t<i class=\"icon-home\"></i>Nuevo Producto</a>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/product/modify\">
\t\t\t\t\t<i class=\"icon-home\"></i>Modificar Producto</a>
\t\t\t</div>
\t\t</li>
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/categoria\">
\t\t\t\t\t<i class=\"icon-home\"></i>Categorias</a>
\t\t\t</div>
\t\t</li>
\t{% endif %}
\t{% if not app.user %}
\t\t<li>
\t\t\t<div class=\"home\">
\t\t\t\t<a href=\"/login\">
\t\t\t\t\t<i class=\"icon-home\"></i>Iniciar Secion</a>
\t\t\t</div>
\t\t</li>
\t{% endif %}
</ul></div></body></html>
", "baseNEW.html.twig", "/var/www/html/EGXD_symfony/templates/baseNEW.html.twig");
    }
}
