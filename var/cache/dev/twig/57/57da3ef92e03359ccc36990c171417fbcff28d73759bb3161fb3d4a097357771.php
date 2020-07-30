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

/* home/indexNEW.html.twig */
class __TwigTemplate_4e41f580d72df1bb058728ce76661284ad4edcf61aabbb124a368fa91e94e2be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/indexNEW.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/indexNEW.html.twig"));

        $this->parent = $this->loadTemplate("baseNEW.html.twig", "home/indexNEW.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipamiento Grafico - Principal
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<main>
\t\t<div id=\"thm-slideshow\" class=\"thm-slideshow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\" style=\"margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t";
        // line 14
        echo "\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.7\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-16\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/slide-img1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Intro\" data-description=\"\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"images/slide-img1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t";
        // line 23
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t¿Queres Comprar? ¿Queres vender? Este es el lugar!</div>

\t\t\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 5; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\tPara Imprentas</div>

\t\t\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-refresh\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-19\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/video-img.jpg\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"HTML5 Video\" data-description=\"\">
\t\t\t\t\t\t\t\t";
        // line 38
        echo "\t\t\t\t\t\t\t\t<img src=\"images/video-img.jpg\" alt=\"\">";
        // line 39
        echo "
\t\t\t\t\t\t\t\t";
        // line 40
        echo "<div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videomp4=\"images/bg1.mp4\" data-videowebm=\"images/bg1.webm\" data-videopreload=\"preload\" data-videoloop=\"none\" data-forcecover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"> </div>

\t\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0\" id=\"slide-19-layer-10\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:2000;e:Power3.easeInOut;\" data-transform_out=\"opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-start=\"2000\" data-basealign=\"slide\" data-responsive_offset=\"on\" data-responsive=\"off\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>

\t\t\t\t\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 6; white-space: nowrap;\">Empresa de Confianza</div>

\t\t\t\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Mas de 30 años Caminando Junto a las Imprentas !
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-ball\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 58
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-static-layers\"></div>
\t\t\t\t\t\t<div class=\"tp-bannertimer\" style=\"height: 7px; background-color: rgba(255, 255, 255, 0.25);\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 66
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t\t<div id=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productRepo"]) || array_key_exists("productRepo", $context) ? $context["productRepo"] : (function () { throw new RuntimeError('Variable "productRepo" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate m-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner m-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailProduct", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["value"], "idproduct", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-card\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "url", [], "any", false, false, false, 88), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titulo", [], "any", false, false, false, 96), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">U";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["value"], "precio", [], "any", false, false, false, 102), "USD"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
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
\t</div>
\t<div class=\"brand-logo wow bounceInUp animated\">
\t\t<div class=\"container\">
\t\t\t<div class=\"slider-items-products\">
\t\t\t\t<div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"slider-items slider-width-col6\">

\t\t\t\t\t\t";
        // line 131
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo3.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 135
        echo "
\t\t\t\t\t\t";
        // line 137
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo2.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 141
        echo "
\t\t\t\t\t\t";
        // line 143
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 147
        echo "

\t\t\t\t\t\t";
        // line 150
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 154
        echo "
\t\t\t\t\t\t";
        // line 156
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo5.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 160
        echo "
\t\t\t\t\t\t";
        // line 162
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo6.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 166
        echo "
\t\t\t\t\t\t";
        // line 168
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 172
        echo "
\t\t\t\t\t\t";
        // line 174
        echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 178
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/indexNEW.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 178,  313 => 174,  310 => 172,  305 => 168,  302 => 166,  297 => 162,  294 => 160,  289 => 156,  286 => 154,  281 => 150,  277 => 147,  272 => 143,  269 => 141,  264 => 137,  261 => 135,  256 => 131,  235 => 111,  220 => 102,  211 => 96,  198 => 88,  192 => 87,  186 => 83,  181 => 82,  176 => 78,  163 => 66,  154 => 58,  148 => 53,  143 => 49,  139 => 46,  135 => 43,  131 => 40,  128 => 39,  126 => 38,  118 => 31,  113 => 27,  108 => 23,  104 => 20,  100 => 17,  96 => 14,  89 => 8,  79 => 7,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseNEW.html.twig' %}
{% block title %}Equipamiento Grafico - Principal
{% endblock %}


{# Slider #}
{% block body %}
\t<main>
\t\t<div id=\"thm-slideshow\" class=\"thm-slideshow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\" style=\"margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t{# START REVOLUTION SLIDER 5.0.7 auto mode #}
\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.7\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{# SLIDE  #}
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-16\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/slide-img1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"Intro\" data-description=\"\">
\t\t\t\t\t\t\t\t{# MAIN IMAGE #}
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"images/slide-img1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t{# LAYER NR. 1 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t¿Queres Comprar? ¿Queres vender? Este es el lugar!</div>

\t\t\t\t\t\t\t\t{# LAYER NR. 2 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 5; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\tPara Imprentas</div>

\t\t\t\t\t\t\t\t{# LAYER NR. 3 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-16-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-refresh\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tdata-index=\"rs-19\" data-transition=\"zoomout\" data-slotamount=\"default\" data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-thumb=\"images/video-img.jpg\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"HTML5 Video\" data-description=\"\">
\t\t\t\t\t\t\t\t{# MAIN IMAGE #}
\t\t\t\t\t\t\t\t<img src=\"images/video-img.jpg\" alt=\"\">{# LAYERS #}

\t\t\t\t\t\t\t\t{# BACKGROUND VIDEO LAYER #}<div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videomp4=\"images/bg1.mp4\" data-videowebm=\"images/bg1.webm\" data-videopreload=\"preload\" data-videoloop=\"none\" data-forcecover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"> </div>

\t\t\t\t\t\t\t\t{# LAYER NR. 1 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0\" id=\"slide-19-layer-10\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:2000;e:Power3.easeInOut;\" data-transform_out=\"opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-start=\"2000\" data-basealign=\"slide\" data-responsive_offset=\"on\" data-responsive=\"off\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>

\t\t\t\t\t\t\t\t{# LAYER NR. 2 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-lineheight=\"['70','70','70','50']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1000\" data-splitin=\"chars\" data-splitout=\"none\" data-responsive_offset=\"on\" data-elementdelay=\"0.05\" style=\"z-index: 6; white-space: nowrap;\">Empresa de Confianza</div>

\t\t\t\t\t\t\t\t{# LAYER NR. 3 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['52','52','52','51']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"1500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Mas de 30 años Caminando Junto a las Imprentas !
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{# LAYER NR. 4 #}
\t\t\t\t\t\t\t\t<div class=\"tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0\" id=\"slide-19-layer-8\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-68','-68','-68','-68']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-transform_idle=\"o:1;\" data-style_hover=\"cursor:default;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;\" data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" data-mask_in=\"x:0px;y:[100%];s:inherit;e:inherit;\" data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\" data-start=\"2000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-ball\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# SLIDE  #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-static-layers\"></div>
\t\t\t\t\t\t<div class=\"tp-bannertimer\" style=\"height: 7px; background-color: rgba(255, 255, 255, 0.25);\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{# end Slider #}

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"products-grid\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"std\">
\t\t\t\t\t\t\t<div class=\"home-tabs wow bounceInUp animated\">
\t\t\t\t\t\t\t\t<div class=\"producttabs\">
\t\t\t\t\t\t\t\t\t<div id=\"thm_producttabs1\" class=\"thm-producttabs\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"thm-pdt-container\">
\t\t\t\t\t\t\t\t\t\t\t{#Begin Tab Content #}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pdt-content pdt_new_arrivals is-loaded  tab-content-actived\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pdt-list products-grid zoomOut play\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{# La clase wide-first es importante #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for value in productRepo %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item item-animate m-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner m-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path(\"detailProduct\", {idproduct:value.idproduct } ) }}\" title=\"{{value.titulo}}\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-card\" src=\"{{value.url}}\" alt=\"{{value.titulo}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"card-title\">{{value.titulo}}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">U{{ value.precio|format_currency('USD') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
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
\t</div>
\t<div class=\"brand-logo wow bounceInUp animated\">
\t\t<div class=\"container\">
\t\t\t<div class=\"slider-items-products\">
\t\t\t\t<div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"slider-items slider-width-col6\">

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo3.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo2.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}


\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo5.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo6.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo1.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t\t{# item #}
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/b-logo4.png\" alt=\"Image\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# END item #}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>{% endblock %}
", "home/indexNEW.html.twig", "/var/www/html/EGXD_symfony/templates/home/indexNEW.html.twig");
    }
}
