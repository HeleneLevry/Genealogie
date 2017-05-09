<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_e4f06064b407c1a5793606a4359631df9d640ac09d452cf7f3c39ea803c45a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "SdzBlogBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_573c7b8c3886c10a7f3c6a315504c4bb86f8c0a0fa3baba2c154413cb960ee0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573c7b8c3886c10a7f3c6a315504c4bb86f8c0a0fa3baba2c154413cb960ee0b->enter($__internal_573c7b8c3886c10a7f3c6a315504c4bb86f8c0a0fa3baba2c154413cb960ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573c7b8c3886c10a7f3c6a315504c4bb86f8c0a0fa3baba2c154413cb960ee0b->leave($__internal_573c7b8c3886c10a7f3c6a315504c4bb86f8c0a0fa3baba2c154413cb960ee0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b9bad259ff0179c40e7c014220e4bee4d279055a23e39fe542e5b8158370f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b9bad259ff0179c40e7c014220e4bee4d279055a23e39fe542e5b8158370f3->enter($__internal_44b9bad259ff0179c40e7c014220e4bee4d279055a23e39fe542e5b8158370f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 6
        echo "\tBLog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_44b9bad259ff0179c40e7c014220e4bee4d279055a23e39fe542e5b8158370f3->leave($__internal_44b9bad259ff0179c40e7c014220e4bee4d279055a23e39fe542e5b8158370f3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ac600a0c018765233bc38d9f4ca1152eceaa82dd781ce651c73f7e91826a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ac600a0c018765233bc38d9f4ca1152eceaa82dd781ce651c73f7e91826a08->enter($__internal_25ac600a0c018765233bc38d9f4ca1152eceaa82dd781ce651c73f7e91826a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 10
        echo "
\t";
        // line 12
        echo "\t<h1> Blog </h1>
\t
\t<hr>
\t
\t";
        // line 17
        echo "\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 19
        echo "\t
";
        
        $__internal_25ac600a0c018765233bc38d9f4ca1152eceaa82dd781ce651c73f7e91826a08->leave($__internal_25ac600a0c018765233bc38d9f4ca1152eceaa82dd781ce651c73f7e91826a08_prof);

    }

    // line 17
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_f6babd6a98e00ca919ca53eb26709bb8dead7226ee27e360d1649d1de8ec85e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6babd6a98e00ca919ca53eb26709bb8dead7226ee27e360d1649d1de8ec85e1->enter($__internal_f6babd6a98e00ca919ca53eb26709bb8dead7226ee27e360d1649d1de8ec85e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 18
        echo "\t";
        
        $__internal_f6babd6a98e00ca919ca53eb26709bb8dead7226ee27e360d1649d1de8ec85e1->leave($__internal_f6babd6a98e00ca919ca53eb26709bb8dead7226ee27e360d1649d1de8ec85e1_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# scr/Sdz/BlogBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
\tBLog - {{ parent() }}
{% endblock %}

{% block body %}

\t{# Sous titres commun a toutes les pages du bundle #}
\t<h1> Blog </h1>
\t
\t<hr>
\t
\t{# on definti un nouveau bloc que les vues du bundle pourront remplir #}
\t{% block sdzblog_body %}
\t{% endblock %}
\t
{% endblock %}
", "SdzBlogBundle::layout.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/layout.html.twig");
    }
}
