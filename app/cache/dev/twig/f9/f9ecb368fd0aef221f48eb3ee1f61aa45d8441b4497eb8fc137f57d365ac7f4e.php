<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_4fd3fec537eed4e8825407ae99a9fceaedc13fb58abee4ad99e467662f7ff9ac extends Twig_Template
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
        $__internal_d8a56ac8ae66d6d39e1b1037955235947653a9c4305805bcd72d379f5b9e3dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a56ac8ae66d6d39e1b1037955235947653a9c4305805bcd72d379f5b9e3dfb->enter($__internal_d8a56ac8ae66d6d39e1b1037955235947653a9c4305805bcd72d379f5b9e3dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a56ac8ae66d6d39e1b1037955235947653a9c4305805bcd72d379f5b9e3dfb->leave($__internal_d8a56ac8ae66d6d39e1b1037955235947653a9c4305805bcd72d379f5b9e3dfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f32e4f58cda082e9c90e5989ee1cfc81ef17836f2fb608f57e939ce1784a11a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e4f58cda082e9c90e5989ee1cfc81ef17836f2fb608f57e939ce1784a11a2->enter($__internal_f32e4f58cda082e9c90e5989ee1cfc81ef17836f2fb608f57e939ce1784a11a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 6
        echo "\tBLog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f32e4f58cda082e9c90e5989ee1cfc81ef17836f2fb608f57e939ce1784a11a2->leave($__internal_f32e4f58cda082e9c90e5989ee1cfc81ef17836f2fb608f57e939ce1784a11a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc9e8de46962f0d20f61c29eb6e9b318b30718623cfd0b8c87fa7872ce9d348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc9e8de46962f0d20f61c29eb6e9b318b30718623cfd0b8c87fa7872ce9d348->enter($__internal_6dc9e8de46962f0d20f61c29eb6e9b318b30718623cfd0b8c87fa7872ce9d348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

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
        
        $__internal_6dc9e8de46962f0d20f61c29eb6e9b318b30718623cfd0b8c87fa7872ce9d348->leave($__internal_6dc9e8de46962f0d20f61c29eb6e9b318b30718623cfd0b8c87fa7872ce9d348_prof);

    }

    // line 17
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_2f9a832338e297f807603d035cd9c992540be5c70e8c1223eac3cbcbbd5ff40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9a832338e297f807603d035cd9c992540be5c70e8c1223eac3cbcbbd5ff40b->enter($__internal_2f9a832338e297f807603d035cd9c992540be5c70e8c1223eac3cbcbbd5ff40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle::layout.html.twig"));

        // line 18
        echo "\t";
        
        $__internal_2f9a832338e297f807603d035cd9c992540be5c70e8c1223eac3cbcbbd5ff40b->leave($__internal_2f9a832338e297f807603d035cd9c992540be5c70e8c1223eac3cbcbbd5ff40b_prof);

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
