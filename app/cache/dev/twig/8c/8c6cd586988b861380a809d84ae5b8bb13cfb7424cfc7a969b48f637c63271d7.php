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
        $__internal_533d8a74168f35ef10aeb677d7f2117fa25bb0c0cd28a02daf6f6574706d6ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533d8a74168f35ef10aeb677d7f2117fa25bb0c0cd28a02daf6f6574706d6ddc->enter($__internal_533d8a74168f35ef10aeb677d7f2117fa25bb0c0cd28a02daf6f6574706d6ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533d8a74168f35ef10aeb677d7f2117fa25bb0c0cd28a02daf6f6574706d6ddc->leave($__internal_533d8a74168f35ef10aeb677d7f2117fa25bb0c0cd28a02daf6f6574706d6ddc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_802d889c6c66f34518d511dcb2a3f7ddfdcdcb8234fe438a37dcd08dc6e5f944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802d889c6c66f34518d511dcb2a3f7ddfdcdcb8234fe438a37dcd08dc6e5f944->enter($__internal_802d889c6c66f34518d511dcb2a3f7ddfdcdcb8234fe438a37dcd08dc6e5f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:modifier.html.twig"));

        // line 6
        echo "\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_802d889c6c66f34518d511dcb2a3f7ddfdcdcb8234fe438a37dcd08dc6e5f944->leave($__internal_802d889c6c66f34518d511dcb2a3f7ddfdcdcb8234fe438a37dcd08dc6e5f944_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_feb4fd38d76634383e9b19629845fb4112406e3d1150c7de386629b82e3221e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb4fd38d76634383e9b19629845fb4112406e3d1150c7de386629b82e3221e9->enter($__internal_feb4fd38d76634383e9b19629845fb4112406e3d1150c7de386629b82e3221e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:modifier.html.twig"));

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
        
        $__internal_feb4fd38d76634383e9b19629845fb4112406e3d1150c7de386629b82e3221e9->leave($__internal_feb4fd38d76634383e9b19629845fb4112406e3d1150c7de386629b82e3221e9_prof);

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
