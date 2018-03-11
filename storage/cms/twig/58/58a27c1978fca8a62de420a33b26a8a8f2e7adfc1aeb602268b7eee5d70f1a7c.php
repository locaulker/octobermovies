<?php

/* /Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/partials/header.htm */
class __TwigTemplate_3dbfebf2600992d5a4e0c226d60248eb047c2be62bbaa5c2f22a2a85768b9cd6 extends Twig_Template
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
        echo "<header class=\"main-header\">
  <div class=\"container clearfix\">
    <h1 class=\"logo\">October Movies</h1>

    <div class=\"main-nav\">
      <ul>
        <li class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "homepage")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage");
        echo "\">Home</a></li>
        <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "movies")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("movies");
        echo "\">Movies</a></li>
      </ul>
    </div>

  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
  <div class=\"container clearfix\">
    <h1 class=\"logo\">October Movies</h1>

    <div class=\"main-nav\">
      <ul>
        <li class=\"{% if this.page.id == 'homepage'%} active {% endif %}\"><a href=\"{{ 'homepage'|page }}\">Home</a></li>
        <li class=\"{% if this.page.id == 'movies'%} active {% endif %}\"><a href=\"{{ 'movies'|page }}\">Movies</a></li>
      </ul>
    </div>

  </div>
</header>", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/partials/header.htm", "");
    }
}
