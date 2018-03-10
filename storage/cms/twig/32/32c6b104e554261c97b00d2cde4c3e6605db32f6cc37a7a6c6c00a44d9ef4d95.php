<?php

/* /Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/layouts/fallback.htm */
class __TwigTemplate_a646d990014b08fe452d8f0976551d40458444e0cbf26b74ebbce3d8c4050ead extends Twig_Template
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
        return "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/layouts/fallback.htm", "");
    }
}
