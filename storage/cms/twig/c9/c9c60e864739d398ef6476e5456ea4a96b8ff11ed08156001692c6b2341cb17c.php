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
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/style.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
      ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "\t</head>
\t<body>

\t\t<!-- Header -->
\t\t<header id=\"layout-header\">
\t\t\t
\t\t</header>

\t\t<!-- Content -->
\t\t<section id=\"layout-content\">
\t\t\t";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 28
        echo "\t\t</section>

\t\t<!-- Footer -->
\t\t<footer id=\"layout-footer\">
\t\t\t
\t\t</footer>

\t\t<!-- Scripts -->
    <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.js", 2 => "assets/js/app.js"));
        // line 40
        echo "\"></script>
      ";
        // line 41
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 42
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 43
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
        return array (  92 => 43,  88 => 42,  81 => 41,  78 => 40,  76 => 36,  66 => 28,  64 => 27,  52 => 17,  49 => 16,  46 => 15,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
    <link href=\"{{ [
      'assets/css/bootstrap.css',
      'assets/css/style.css'
      ]|theme }}\" rel=\"stylesheet\">
      {% styles %}
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
    <script src=\"{{ [
      'assets/js/jquery.js',
      'assets/js/bootstrap.js',
      'assets/js/app.js'
      ] |theme }}\"></script>
      {% framework extras %}
      {% scripts %}

\t</body>
</html>", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/default.htm", "");
    }
}
