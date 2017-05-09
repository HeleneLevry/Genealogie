<?php

/* @SdzBlog/Default/index.html.twig~ */
class __TwigTemplate_db8c41e451e72e228d74b3084079f6e674b6ea23b753211ac81cc3b1f03fe278 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b8e08db055fc828884f86cd6a3dd0ec830958478fe317018c5c7a43dfcfc6f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e08db055fc828884f86cd6a3dd0ec830958478fe317018c5c7a43dfcfc6f19->enter($__internal_b8e08db055fc828884f86cd6a3dd0ec830958478fe317018c5c7a43dfcfc6f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SdzBlog/Default/index.html.twig~"));
=======
        $__internal_6d4d7450b388f1f5e6effb2d4961521e9439190b024bd5c5303c589711d8947e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4d7450b388f1f5e6effb2d4961521e9439190b024bd5c5303c589711d8947e->enter($__internal_6d4d7450b388f1f5e6effb2d4961521e9439190b024bd5c5303c589711d8947e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SdzBlog/Default/index.html.twig~"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 2
        echo "
<html>
\t<body>
\t\tHello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
\t</body>
</html>
";
        
<<<<<<< HEAD
        $__internal_b8e08db055fc828884f86cd6a3dd0ec830958478fe317018c5c7a43dfcfc6f19->leave($__internal_b8e08db055fc828884f86cd6a3dd0ec830958478fe317018c5c7a43dfcfc6f19_prof);
=======
        $__internal_6d4d7450b388f1f5e6effb2d4961521e9439190b024bd5c5303c589711d8947e->leave($__internal_6d4d7450b388f1f5e6effb2d4961521e9439190b024bd5c5303c589711d8947e_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@SdzBlog/Default/index.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,);
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
\t\tHello {{ name }}!
\t</body>
</html>
", "@SdzBlog/Default/index.html.twig~", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Default/index.html.twig~");
    }
}
