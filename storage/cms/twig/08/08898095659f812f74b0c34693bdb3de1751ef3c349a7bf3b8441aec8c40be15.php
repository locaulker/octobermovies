<?php

/* /Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/pages/blog-post.htm */
class __TwigTemplate_3b066fa3218d0bf7d9c8174be2eeefec5e47674efb98941871d9599b6ff2ad73 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/pages/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "/Users/locaulker/Tutorials/octobercms-projects/octobermovies/themes/demo/pages/blog-post.htm", "");
    }
}
