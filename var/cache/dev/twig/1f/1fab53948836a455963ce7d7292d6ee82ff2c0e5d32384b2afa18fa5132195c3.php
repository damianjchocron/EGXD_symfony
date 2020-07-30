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

/* home/template.html.twig */
class __TwigTemplate_98c4abd62ff901f2909db9a015a3e836509649d1cc081a4f0006b3afe71cda46 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tcharset=\"utf-8\">
\t\t<!--[if IE]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Favicons Icon -->

\t\t<title>Superb premium HTML5 &amp; CSS3 template</title>

\t\t<!-- Mobile Specific -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t<!-- CSS Style -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/revslider.css\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" media=\"all\">

\t\t<!-- Google Fonts -->
\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index\">
\t\t<div
\t\t\tid=\"page\">
\t\t\t<!-- Header -->
\t\t\t<header>
\t\t\t\t<div class=\"header-container\">
\t\t\t\t\t<div class=\"header-top\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t\t\t<!-- Header Top Links -->
\t\t\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"My Account\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"checkout.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Header Company -->
\t\t\t\t\t\t\t\t\t\t\t<!-- End Header Company -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 74
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login\"> <a href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End Header Top Links -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- end header -->

\t\t<!-- Navbar -->
\t\t<nav>
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Header Logo -->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a title=\"Datson\" href=\"index.html\"><img alt=\"Datson\" src=\"images/logo.png\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- End Header Logo -->
\t\t\t\t<ul class=\"nav hidden-xs menu-item menu-item-left\">
\t\t\t\t\t<li class=\"level0 parent drop-menu active\">
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span>Principal</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<!-- end nav -->

\t\t<!-- Slider -->
\t\t<div id=\"thm-slideshow\" class=\"thm-slideshow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\" style=\"margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.7\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-16\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/slide-img1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Intro\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"images/slide-img1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t¿Queres Comprar? ¿Queres vender? Este es el lugar!</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 5; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\tPara Imprentas</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-refresh\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-19\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/video-img.jpg\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"HTML5 Video\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"images/video-img.jpg\" alt=\"\"><!-- LAYERS -->

\t\t\t\t\t\t\t\t<!-- BACKGROUND VIDEO LAYER --><div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videomp4=\"images/bg1.mp4\" data-videowebm=\"images/bg1.webm\" data-videopreload=\"preload\" data-videoloop=\"none\" data-forcecover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0\" id=\"slide-19-layer-10\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:2000;e:Power3.easeInOut;\" data-transform_out=\"opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-start=\"2000\" data-basealign=\"slide\" data-responsive_offset=\"on\" data-responsive=\"off\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 6; white-space: nowrap;\">Empresa de Confianza</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Mas de 30 años Caminando Junto a las Imprentas !
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-ball\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-static-layers\"></div>
\t\t\t\t\t\t<div class=\"tp-bannertimer\" style=\"height: 7px; background-color: rgba(255, 255, 255, 0.25);\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end Slider -->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tid=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t\t<!--<h3></h3>-->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">

\t\t\t\t\t\t\t\t\t\t\t<!--Begin Tab Content -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 197
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate wide-first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a><
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"brand-logo wow bounceInUp animated\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"slider-items-products\">
\t\t\t\t\t<div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"slider-items slider-width-col6\">

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo3.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo2.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo5.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo6.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"our-features-box\">
\t\t<!-- Footer -->
\t\t<footer>
\t\t\t<div class=\"footer-inner\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-lg-8\">
\t\t\t\t\t\t\t<div class=\"footer-column pull-left\">
\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t<h4>Follow Us</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fb pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"tw pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"googleplus pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"rss pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"pintrest pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"linkedin pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"youtube pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">\t
\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 footer-logo\"><img alt=\"Datson\" src=\"images/logo.png\"></div>
\t\t\t\t\t<address>
\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>ThemesGround, 789 Main rd, Anytown, CA 12345  USA
\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t+(888) 123-4567</span>
\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tsuperb@themesground.com</span>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 coppyright\">&copy; 2016 ThemesGround. All Rights Reserved.</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer -->

\t\t<!-- JavaScript -->
\t\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/common.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/countdown.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/jquery.mobile-menu.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution-slider.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution.extension.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tvar dthen1 = new Date(\"12/25/17 11:59:00 PM\");
\t\t\tstart = \"05/03/15 03:02:11 AM\";
\t\t\tstart_date = Date.parse(start);
\t\t\tvar dnow1 = new Date(start_date);
\t\t\tif (CountStepper > 0) 
\t\t\tddiff = new Date((dnow1) - (dthen1));
\t\t\telse 
\t\t\tddiff = new Date((dthen1) - (dnow1));



\t\t\tgsecs1 = Math.floor(ddiff.valueOf() / 1000);

\t\t\tvar iid1 = \"countbox_1\";
\t\t\tCountBack_slider(gsecs1, \"countbox_1\", 1);

\t\t\tvar dthen1 = new Date(\"12/12/17 11:59:00 PM\");
\t\t\tstart = \"01/20/16 03:02:11 AM\";
\t\t\tstart_date = Date.parse(start);
\t\t\tvar dnow1 = new Date(start_date);
\t\t\tif (CountStepper > 0) 
\t\t\tddiff = new Date((dnow1) - (dthen1));
\t\t\telse 
\t\t\tddiff = new Date((dthen1) - (dnow1));



\t\t\tgsecs1 = Math.floor(ddiff.valueOf() / 1000);

\t\t\tvar iid1 = \"countbox_2\";
\t\t\tCountBack_slider(gsecs1, \"countbox_2\", 1);</script><script type=\"text/javascript\">var tpj = jQuery;
\t\t\tvar revapi4;
\t\t\ttpj(document).ready(function () {
\t\t\tif (tpj(\"#rev_slider_4_1\").revolution == undefined) {
\t\t\trevslider_showDoubleJqueryError(\"#rev_slider_4_1\");
\t\t\t} else {
\t\t\trevapi4 = tpj(\"#rev_slider_4_1\").show().revolution({
\t\t\tsliderType: \"standard\",
\t\t\tsliderLayout: \"fullwidth\",
\t\t\tdottedOverlay: \"none\",
\t\t\tdelay: 9000,
\t\t\tnavigation: {
\t\t\tkeyboardNavigation: \"off\",
\t\t\tkeyboard_direction: \"horizontal\",
\t\t\tmouseScrollNavigation: \"off\",
\t\t\tonHoverStop: \"off\",
\t\t\ttouch: {
\t\t\ttouchenabled: \"on\",
\t\t\tswipe_threshold: 75,
\t\t\tswipe_min_touches: 1,
\t\t\tswipe_direction: \"horizontal\",
\t\t\tdrag_block_vertical: false
\t\t\t},
\t\t\tarrows: {
\t\t\tstyle: \"zeus\",
\t\t\tenable: true,
\t\t\thide_onmobile: true,
\t\t\thide_under: 750,
\t\t\thide_onleave: true,
\t\t\thide_delay: 200,
\t\t\thide_delay_mobile: 1200,
\t\t\ttmp: '<div class=\"tp-title-wrap\">  \t<div class=\"tp-arr-imgholder\"></div> </div>',
\t\t\tleft: {
\t\t\th_align: \"left\",
\t\t\tv_align: \"center\",
\t\t\th_offset: 30,
\t\t\tv_offset: 0
\t\t\t},
\t\t\tright: {
\t\t\th_align: \"right\",
\t\t\tv_align: \"center\",
\t\t\th_offset: 30,
\t\t\tv_offset: 0
\t\t\t}
\t\t\t},
\t\t\tbullets: {
\t\t\tenable: true,
\t\t\thide_onmobile: true,
\t\t\thide_under: 600,
\t\t\tstyle: \"metis\",
\t\t\thide_onleave: true,
\t\t\thide_delay: 200,
\t\t\thide_delay_mobile: 1200,
\t\t\tdirection: \"horizontal\",
\t\t\th_align: \"center\",
\t\t\tv_align: \"bottom\",
\t\t\th_offset: 0,
\t\t\tv_offset: 30,
\t\t\tspace: 5,
\t\t\ttmp: '<span class=\"tp-bullet-img-wrap\">  <span class=\"tp-bullet-image\"></span></span><span class=\"tp-bullet-title\"></span>'
\t\t\t}
\t\t\t},
\t\t\tviewPort: {
\t\t\tenable: true,
\t\t\toutof: \"pause\",
\t\t\tvisible_area: \"80%\"
\t\t\t},
\t\t\tresponsiveLevels: [
\t\t\t1240, 1024, 778, 480
\t\t\t],
\t\t\tgridwidth: [
\t\t\t768, 1024, 778, 480
\t\t\t],
\t\t\tgridheight: [
\t\t\t890, 600, 500, 400
\t\t\t],
\t\t\tlazyType: \"none\",
\t\t\tparallax: {
\t\t\ttype: \"mouse\",
\t\t\torigo: \"slidercenter\",
\t\t\tspeed: 2000,
\t\t\tlevels: [
\t\t\t2,
\t\t\t3,
\t\t\t4,
\t\t\t5,
\t\t\t6,
\t\t\t7,
\t\t\t12,
\t\t\t16,
\t\t\t10,
\t\t\t50
\t\t\t]
\t\t\t},
\t\t\tshadow: 0,
\t\t\tspinner: \"off\",
\t\t\tstopLoop: \"off\",
\t\t\tstopAfterLoops: -1,
\t\t\tstopAtSlide: -1,
\t\t\tshuffle: \"off\",
\t\t\tautoHeight: \"off\",
\t\t\thideThumbsOnMobile: \"off\",
\t\t\thideSliderAtLimit: 0,
\t\t\thideCaptionAtLimit: 0,
\t\t\thideAllCaptionAtLilmit: 0,
\t\t\tdebugMode: false,
\t\t\tfallbacks: {
\t\t\tsimplifyAll: \"off\",
\t\t\tnextSlideOnWindowFocus: \"off\",
\t\t\tdisableFocusListener: false
\t\t\t}
\t\t\t});
\t\t\t}
\t\t\t}); /*ready*/\t\t
\t\t</script>
\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  244 => 197,  120 => 74,  111 => 66,  107 => 63,  102 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tcharset=\"utf-8\">
\t\t<!--[if IE]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta
\t\tname=\"author\" content=\"\">

\t\t<!-- Favicons Icon -->

\t\t<title>Superb premium HTML5 &amp; CSS3 template</title>

\t\t<!-- Mobile Specific -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t\t<!-- CSS Style -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/simple-line-icons.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.bxslider.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.mobile-menu.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/revslider.css\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" media=\"all\">

\t\t<!-- Google Fonts -->
\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t</head>

\t<body class=\"cms-index-index index\">
\t\t<div
\t\t\tid=\"page\">
\t\t\t<!-- Header -->
\t\t\t<header>
\t\t\t\t<div class=\"header-container\">
\t\t\t\t\t<div class=\"header-top\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"welcome-msg hidden-xs ml-3\">
\t\t\t\t\t\t\t\t\tBienvenido a Equipamiento Grafico
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-xs-5 col-sm-6\">
\t\t\t\t\t\t\t\t\t<!-- Header Top Links -->
\t\t\t\t\t\t\t\t\t<div class=\"toplinks\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"links\">
\t\t\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"My Account\" href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Mantenimiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# Aqui va dropDown #}
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si esta logueado) #}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"check\">
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Checkout\" href=\"checkout.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Cerrar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Header Company -->
\t\t\t\t\t\t\t\t\t\t\t<!-- End Header Company -->
\t\t\t\t\t\t\t\t\t\t\t{# Poner dentro de condicional app.user (si NO esta logueado) #}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login\"> <a href=\"login.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Iniciar Secion</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End Header Top Links -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- end header -->

\t\t<!-- Navbar -->
\t\t<nav>
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Header Logo -->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a title=\"Datson\" href=\"index.html\"><img alt=\"Datson\" src=\"images/logo.png\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- End Header Logo -->
\t\t\t\t<ul class=\"nav hidden-xs menu-item menu-item-left\">
\t\t\t\t\t<li class=\"level0 parent drop-menu active\">
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span>Principal</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t<a href=\"/product/all\">
\t\t\t\t\t\t\t<span>Catalogo</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"level0 parent drop-menu\">
\t\t\t\t\t\t<a href=\"/contacto\">
\t\t\t\t\t\t\t<span>Conocenos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<!-- end nav -->

\t\t<!-- Slider -->
\t\t<div id=\"thm-slideshow\" class=\"thm-slideshow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\" style=\"margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.7\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-16\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/slide-img1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Intro\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"images/slide-img1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t¿Queres Comprar? ¿Queres vender? Este es el lugar!</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 5; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\tPara Imprentas</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-refresh\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-19\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/video-img.jpg\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"HTML5 Video\" data-description=\"\">
\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t<img src=\"images/video-img.jpg\" alt=\"\"><!-- LAYERS -->

\t\t\t\t\t\t\t\t<!-- BACKGROUND VIDEO LAYER --><div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videomp4=\"images/bg1.mp4\" data-videowebm=\"images/bg1.webm\" data-videopreload=\"preload\" data-videoloop=\"none\" data-forcecover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"> </div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0\" id=\"slide-19-layer-10\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:2000;e:Power3.easeInOut;\" data-transform_out=\"opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-start=\"2000\" data-basealign=\"slide\" data-responsive_offset=\"on\" data-responsive=\"off\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 6; white-space: nowrap;\">Empresa de Confianza</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Mas de 30 años Caminando Junto a las Imprentas !
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-ball\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-static-layers\"></div>
\t\t\t\t\t\t<div class=\"tp-bannertimer\" style=\"height: 7px; background-color: rgba(255, 255, 255, 0.25);\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end Slider -->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tid=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t\t<!--<h3></h3>-->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">

\t\t\t\t\t\t\t\t\t\t\t<!--Begin Tab Content -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{# La clase wide-first es importante #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate wide-first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a><
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"products-images/product.jpg\" alt=\"Retis lapen casen\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Quick View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Quick View</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Compare</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"Add to Cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\" style=\"width:80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rating-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1 Review(s)</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"separator\">|</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Retis lapen casen\">Retis lapen casen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\$125.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"brand-logo wow bounceInUp animated\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"slider-items-products\">
\t\t\t\t\t<div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"slider-items slider-width-col6\">

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo3.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo2.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo5.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo6.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Item -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"our-features-box\">
\t\t<!-- Footer -->
\t\t<footer>
\t\t\t<div class=\"footer-inner\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-lg-8\">
\t\t\t\t\t\t\t<div class=\"footer-column pull-left\">
\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t<h4>Follow Us</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fb pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"tw pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"googleplus pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"rss pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"pintrest pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"linkedin pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"youtube pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">\t
\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 footer-logo\"><img alt=\"Datson\" src=\"images/logo.png\"></div>
\t\t\t\t\t<address>
\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>ThemesGround, 789 Main rd, Anytown, CA 12345  USA
\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t+(888) 123-4567</span>
\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tsuperb@themesground.com</span>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 coppyright\">&copy; 2016 ThemesGround. All Rights Reserved.</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer -->

\t\t<!-- JavaScript -->
\t\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/common.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/countdown.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/jquery.mobile-menu.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution-slider.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/revolution.extension.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tvar dthen1 = new Date(\"12/25/17 11:59:00 PM\");
\t\t\tstart = \"05/03/15 03:02:11 AM\";
\t\t\tstart_date = Date.parse(start);
\t\t\tvar dnow1 = new Date(start_date);
\t\t\tif (CountStepper > 0) 
\t\t\tddiff = new Date((dnow1) - (dthen1));
\t\t\telse 
\t\t\tddiff = new Date((dthen1) - (dnow1));



\t\t\tgsecs1 = Math.floor(ddiff.valueOf() / 1000);

\t\t\tvar iid1 = \"countbox_1\";
\t\t\tCountBack_slider(gsecs1, \"countbox_1\", 1);

\t\t\tvar dthen1 = new Date(\"12/12/17 11:59:00 PM\");
\t\t\tstart = \"01/20/16 03:02:11 AM\";
\t\t\tstart_date = Date.parse(start);
\t\t\tvar dnow1 = new Date(start_date);
\t\t\tif (CountStepper > 0) 
\t\t\tddiff = new Date((dnow1) - (dthen1));
\t\t\telse 
\t\t\tddiff = new Date((dthen1) - (dnow1));



\t\t\tgsecs1 = Math.floor(ddiff.valueOf() / 1000);

\t\t\tvar iid1 = \"countbox_2\";
\t\t\tCountBack_slider(gsecs1, \"countbox_2\", 1);</script><script type=\"text/javascript\">var tpj = jQuery;
\t\t\tvar revapi4;
\t\t\ttpj(document).ready(function () {
\t\t\tif (tpj(\"#rev_slider_4_1\").revolution == undefined) {
\t\t\trevslider_showDoubleJqueryError(\"#rev_slider_4_1\");
\t\t\t} else {
\t\t\trevapi4 = tpj(\"#rev_slider_4_1\").show().revolution({
\t\t\tsliderType: \"standard\",
\t\t\tsliderLayout: \"fullwidth\",
\t\t\tdottedOverlay: \"none\",
\t\t\tdelay: 9000,
\t\t\tnavigation: {
\t\t\tkeyboardNavigation: \"off\",
\t\t\tkeyboard_direction: \"horizontal\",
\t\t\tmouseScrollNavigation: \"off\",
\t\t\tonHoverStop: \"off\",
\t\t\ttouch: {
\t\t\ttouchenabled: \"on\",
\t\t\tswipe_threshold: 75,
\t\t\tswipe_min_touches: 1,
\t\t\tswipe_direction: \"horizontal\",
\t\t\tdrag_block_vertical: false
\t\t\t},
\t\t\tarrows: {
\t\t\tstyle: \"zeus\",
\t\t\tenable: true,
\t\t\thide_onmobile: true,
\t\t\thide_under: 750,
\t\t\thide_onleave: true,
\t\t\thide_delay: 200,
\t\t\thide_delay_mobile: 1200,
\t\t\ttmp: '<div class=\"tp-title-wrap\">  \t<div class=\"tp-arr-imgholder\"></div> </div>',
\t\t\tleft: {
\t\t\th_align: \"left\",
\t\t\tv_align: \"center\",
\t\t\th_offset: 30,
\t\t\tv_offset: 0
\t\t\t},
\t\t\tright: {
\t\t\th_align: \"right\",
\t\t\tv_align: \"center\",
\t\t\th_offset: 30,
\t\t\tv_offset: 0
\t\t\t}
\t\t\t},
\t\t\tbullets: {
\t\t\tenable: true,
\t\t\thide_onmobile: true,
\t\t\thide_under: 600,
\t\t\tstyle: \"metis\",
\t\t\thide_onleave: true,
\t\t\thide_delay: 200,
\t\t\thide_delay_mobile: 1200,
\t\t\tdirection: \"horizontal\",
\t\t\th_align: \"center\",
\t\t\tv_align: \"bottom\",
\t\t\th_offset: 0,
\t\t\tv_offset: 30,
\t\t\tspace: 5,
\t\t\ttmp: '<span class=\"tp-bullet-img-wrap\">  <span class=\"tp-bullet-image\"></span></span><span class=\"tp-bullet-title\"></span>'
\t\t\t}
\t\t\t},
\t\t\tviewPort: {
\t\t\tenable: true,
\t\t\toutof: \"pause\",
\t\t\tvisible_area: \"80%\"
\t\t\t},
\t\t\tresponsiveLevels: [
\t\t\t1240, 1024, 778, 480
\t\t\t],
\t\t\tgridwidth: [
\t\t\t768, 1024, 778, 480
\t\t\t],
\t\t\tgridheight: [
\t\t\t890, 600, 500, 400
\t\t\t],
\t\t\tlazyType: \"none\",
\t\t\tparallax: {
\t\t\ttype: \"mouse\",
\t\t\torigo: \"slidercenter\",
\t\t\tspeed: 2000,
\t\t\tlevels: [
\t\t\t2,
\t\t\t3,
\t\t\t4,
\t\t\t5,
\t\t\t6,
\t\t\t7,
\t\t\t12,
\t\t\t16,
\t\t\t10,
\t\t\t50
\t\t\t]
\t\t\t},
\t\t\tshadow: 0,
\t\t\tspinner: \"off\",
\t\t\tstopLoop: \"off\",
\t\t\tstopAfterLoops: -1,
\t\t\tstopAtSlide: -1,
\t\t\tshuffle: \"off\",
\t\t\tautoHeight: \"off\",
\t\t\thideThumbsOnMobile: \"off\",
\t\t\thideSliderAtLimit: 0,
\t\t\thideCaptionAtLimit: 0,
\t\t\thideAllCaptionAtLilmit: 0,
\t\t\tdebugMode: false,
\t\t\tfallbacks: {
\t\t\tsimplifyAll: \"off\",
\t\t\tnextSlideOnWindowFocus: \"off\",
\t\t\tdisableFocusListener: false
\t\t\t}
\t\t\t});
\t\t\t}
\t\t\t}); /*ready*/\t\t
\t\t</script>
\t</body>
</html>

", "home/template.html.twig", "/var/www/html/EGXD_symfony/templates/home/template.html.twig");
    }
}
