<?php

/* SdzBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_646c2df7ad754f86e0da9cddc0b841a1f5ad3db11ef704791bb36fc067e25029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SdzBlogBundle::layout.html.twig", "SdzBlogBundle:Blog:modifier.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37492d4c004bedb139177356c27ba32ad42bb147fb5ad58b220e9be08f493b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37492d4c004bedb139177356c27ba32ad42bb147fb5ad58b220e9be08f493b47->enter($__internal_37492d4c004bedb139177356c27ba32ad42bb147fb5ad58b220e9be08f493b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37492d4c004bedb139177356c27ba32ad42bb147fb5ad58b220e9be08f493b47->leave($__internal_37492d4c004bedb139177356c27ba32ad42bb147fb5ad58b220e9be08f493b47_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d37dd690fea1668ec9793d9532367ce542a7a5adf789de27c978ef5a6620970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d37dd690fea1668ec9793d9532367ce542a7a5adf789de27c978ef5a6620970->enter($__internal_1d37dd690fea1668ec9793d9532367ce542a7a5adf789de27c978ef5a6620970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:modifier.html.twig"));

        // line 6
        echo "\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1d37dd690fea1668ec9793d9532367ce542a7a5adf789de27c978ef5a6620970->leave($__internal_1d37dd690fea1668ec9793d9532367ce542a7a5adf789de27c978ef5a6620970_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_b51efa6155450cf5d76a5415875fcdddb01de52ff630b242a0f05f170b7fb280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51efa6155450cf5d76a5415875fcdddb01de52ff630b242a0f05f170b7fb280->enter($__internal_b51efa6155450cf5d76a5415875fcdddb01de52ff630b242a0f05f170b7fb280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:modifier.html.twig"));

        // line 10
        echo "\t
\t<h2> Modifier un article </h2>
\t
\t";
        // line 13
        $this->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig", "SdzBlogBundle:Blog:modifier.html.twig", 13)->display($context);
        // line 14
        echo "\t
\t<p>
\t\tVous editez un article déja existant,
\t\tne le chnager pas trop pour éviter 
\t\taux membres de ne pas comprendre
\t\tce qu'il se passe.
\t</p>
\t
\t<p>
\t\t<a href= \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour è l'article
\t\t</a>
\t</p>
\t
";
        
        $__internal_b51efa6155450cf5d76a5415875fcdddb01de52ff630b242a0f05f170b7fb280->leave($__internal_b51efa6155450cf5d76a5415875fcdddb01de52ff630b242a0f05f170b7fb280_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  64 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Blog/modifier.html.twig #}

{% extends \"SdzBlogBundle::layout.html.twig\" %}

{% block title %}
\tModifier un article - {{ parent() }}
{% endblock %}

{% block sdzblog_body %}
\t
\t<h2> Modifier un article </h2>
\t
\t{% include \"SdzBlogBundle:Blog:formulaire.html.twig\" %}
\t
\t<p>
\t\tVous editez un article déja existant,
\t\tne le chnager pas trop pour éviter 
\t\taux membres de ne pas comprendre
\t\tce qu'il se passe.
\t</p>
\t
\t<p>
\t\t<a href= \"{{ path('sdzblog_voir', {'id': article.id}) }}\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour è l'article
\t\t</a>
\t</p>
\t
{% endblock %}
", "SdzBlogBundle:Blog:modifier.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/modifier.html.twig");
    }
}
