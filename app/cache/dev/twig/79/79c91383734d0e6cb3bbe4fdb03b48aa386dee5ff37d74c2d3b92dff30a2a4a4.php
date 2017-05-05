<?php

/* SdzBlogBundle:Default:index.html.twig */
class __TwigTemplate_533b47de246943194a839c7c6559ebc7913c2f698b02df553a11f5d1bdd4638a extends Twig_Template
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
        $__internal_572f41fe55c08062b8d0d58239fc4d39a73c8193d8ee09f9948349428f2183f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572f41fe55c08062b8d0d58239fc4d39a73c8193d8ee09f9948349428f2183f3->enter($__internal_572f41fe55c08062b8d0d58239fc4d39a73c8193d8ee09f9948349428f2183f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
\t<body>
\t\tHello World!
\t</body>
</html>
";
        
        $__internal_572f41fe55c08062b8d0d58239fc4d39a73c8193d8ee09f9948349428f2183f3->leave($__internal_572f41fe55c08062b8d0d58239fc4d39a73c8193d8ee09f9948349428f2183f3_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Default/index.html.twig #}

<html>
\t<body>
\t\tHello World!
\t</body>
</html>
", "SdzBlogBundle:Default:index.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
