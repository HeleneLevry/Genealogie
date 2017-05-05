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
        $__internal_313bcb79d45baf682fd9f24181da02866b154815a7665f06d4b541ef506734b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313bcb79d45baf682fd9f24181da02866b154815a7665f06d4b541ef506734b9->enter($__internal_313bcb79d45baf682fd9f24181da02866b154815a7665f06d4b541ef506734b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SdzBlog/Default/index.html.twig~"));

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
        
        $__internal_313bcb79d45baf682fd9f24181da02866b154815a7665f06d4b541ef506734b9->leave($__internal_313bcb79d45baf682fd9f24181da02866b154815a7665f06d4b541ef506734b9_prof);

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
