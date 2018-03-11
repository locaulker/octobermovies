<?php

/* /Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/fallback.htm */
class __TwigTemplate_c10e85be5297daab61c33b36d0696ac5e5d6f29b11beaf65c9e222eb7b61203e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/olympos/layouts/fallback.htm", "");
    }
}
