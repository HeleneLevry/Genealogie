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
        $__internal_bc5ff965a07dd8877a3d224dba763639332f8e631faa07b8892b32127f8a6985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5ff965a07dd8877a3d224dba763639332f8e631faa07b8892b32127f8a6985->enter($__internal_bc5ff965a07dd8877a3d224dba763639332f8e631faa07b8892b32127f8a6985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5ff965a07dd8877a3d224dba763639332f8e631faa07b8892b32127f8a6985->leave($__internal_bc5ff965a07dd8877a3d224dba763639332f8e631faa07b8892b32127f8a6985_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae0bd90db7d8d37790d099011250a744fa4794fa15c1d48c9bb7b950d5e306d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0bd90db7d8d37790d099011250a744fa4794fa15c1d48c9bb7b950d5e306d3->enter($__internal_ae0bd90db7d8d37790d099011250a744fa4794fa15c1d48c9bb7b950d5e306d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 6
        echo "\tBLog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ae0bd90db7d8d37790d099011250a744fa4794fa15c1d48c9bb7b950d5e306d3->leave($__internal_ae0bd90db7d8d37790d099011250a744fa4794fa15c1d48c9bb7b950d5e306d3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fae5b915818f89be92c7ca4020e1ac22011bbc31d7fd8040958e03a721b4d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fae5b915818f89be92c7ca4020e1ac22011bbc31d7fd8040958e03a721b4d67->enter($__internal_7fae5b915818f89be92c7ca4020e1ac22011bbc31d7fd8040958e03a721b4d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

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
        
        $__internal_7fae5b915818f89be92c7ca4020e1ac22011bbc31d7fd8040958e03a721b4d67->leave($__internal_7fae5b915818f89be92c7ca4020e1ac22011bbc31d7fd8040958e03a721b4d67_prof);

    }

    // line 17
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_393b7b4dbd50ee06c43794f8a5eedcdf843eaba3a12f0f052efbf21b0f4d57fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393b7b4dbd50ee06c43794f8a5eedcdf843eaba3a12f0f052efbf21b0f4d57fa->enter($__internal_393b7b4dbd50ee06c43794f8a5eedcdf843eaba3a12f0f052efbf21b0f4d57fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 18
        echo "\t";
        
        $__internal_393b7b4dbd50ee06c43794f8a5eedcdf843eaba3a12f0f052efbf21b0f4d57fa->leave($__internal_393b7b4dbd50ee06c43794f8a5eedcdf843eaba3a12f0f052efbf21b0f4d57fa_prof);

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
