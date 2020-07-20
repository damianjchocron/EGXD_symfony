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
class __TwigTemplate_4b3d13c68f57a642cf76631dd61222455a460ff5958b3fad31c8eefa8d7db6d7 extends Template
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
        // line 5
        echo "\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t";
        // line 12
        echo "
\t\t<title>
\t\t\t";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "\t\t</title>

\t\t";
        // line 19
        echo "\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t";
        // line 23
        echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/revslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/cssNEW.css\" media=\"all\">

\t\t";
        // line 35
        echo "\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index\">
\t\t";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "\t\t
\t\t";
        // line 50
        echo "\t\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/common.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/countdown.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/jquery.mobile-menu.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution-slider.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution.extension.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/newJSneedInforTemplate.js\"></script>
\t\t";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "\t</body>
</html>
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
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

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "\t\t\t";
        $this->loadTemplate("headerNEW.html.twig", "baseNEW.html.twig", 42)->display($context);
        // line 43
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "\t\t\t";
        $this->loadTemplate("footerNEW.html.twig", "baseNEW.html.twig", 46)->display($context);
        // line 47
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseNEW.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 59,  228 => 47,  225 => 46,  215 => 45,  197 => 44,  187 => 43,  184 => 42,  174 => 41,  154 => 14,  136 => 4,  124 => 60,  122 => 59,  111 => 50,  108 => 48,  105 => 45,  102 => 44,  100 => 41,  92 => 35,  79 => 23,  74 => 19,  70 => 16,  68 => 14,  64 => 12,  56 => 5,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t{% block meta %}{% endblock%}
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">
\t\t{# Favicons Icon #}

\t\t<title>
\t\t\t{% block title %}Equipamiento Grafico
\t\t\t{% endblock %}
\t\t</title>

\t\t{# Mobile Specific #}
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t{# CSS Style #}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/revslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/cssNEW.css\" media=\"all\">

\t\t{# Google Fonts #}
\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index\">
\t\t{% block header %}
\t\t\t{% include 'headerNEW.html.twig' %}
\t\t{% endblock %}
\t\t{% block body %}{% endblock %}
\t\t{% block footer %}
\t\t\t{% include 'footerNEW.html.twig' %}
\t\t{% endblock %}
\t\t
\t\t{# JavaScript #}
\t\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/common.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/countdown.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/jquery.mobile-menu.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution-slider.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution.extension.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/newJSneedInforTemplate.js\"></script>
\t\t{% block javascripts %}{% endblock %}
\t</body>
</html>
", "baseNEW.html.twig", "/var/www/html/EGXD_symfony/templates/baseNEW.html.twig");
    }
}
