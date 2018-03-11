<?php

/* /Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/default.htm */
class __TwigTemplate_fd06ba7b65caed4f152d82bfbc4a4b086e2c9490ba11ac5684ab40c9f3b158e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t\t<meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
\t\t<meta name=\"author\" content=\"OctoberCMS\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"generator\" content=\"OctoberCMS\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
\t\t";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "\t\t<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/compiled/css/style.css");
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>

\t\t<!-- Header -->
\t\t<header id=\"layout-header\">
\t\t\t
\t\t</header>

\t\t<!-- Content -->
\t\t<section id=\"layout-content\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 25
        echo "\t\t</section>

\t\t<!-- Footer -->
\t\t<footer id=\"layout-footer\">
\t\t\t
\t\t</footer>

\t\t<!-- Scripts -->
    <script src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/compiled/js/all.js");
        echo "\"></script>
      ";
        // line 34
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 35
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  85 => 35,  78 => 34,  74 => 33,  64 => 25,  62 => 24,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>October CMS - {{ this.page.title }}</title>
\t\t<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
\t\t<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
\t\t<meta name=\"author\" content=\"OctoberCMS\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"generator\" content=\"OctoberCMS\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
\t\t{% styles %}
\t\t<link href=\"{{ 'assets/compiled/css/style.css'|theme }}\" rel=\"stylesheet\">
\t</head>
\t<body>

\t\t<!-- Header -->
\t\t<header id=\"layout-header\">
\t\t\t
\t\t</header>

\t\t<!-- Content -->
\t\t<section id=\"layout-content\">
\t\t\t{% page %}
\t\t</section>

\t\t<!-- Footer -->
\t\t<footer id=\"layout-footer\">
\t\t\t
\t\t</footer>

\t\t<!-- Scripts -->
    <script src=\"{{ 'assets/compiled/js/all.js'|theme }}\"></script>
      {% framework extras %}
      {% scripts %}

\t</body>
</html>", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/default.htm", "");
    }
}
