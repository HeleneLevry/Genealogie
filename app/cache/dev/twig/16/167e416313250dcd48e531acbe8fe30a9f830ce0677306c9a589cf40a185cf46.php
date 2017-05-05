<?php

/* SdzBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_c22f8fa42cde0329e643f644c40151954bf62f46c6b68caa66b7e299da24e565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SdzBlogBundle::layout.html.twig", "SdzBlogBundle:Blog:ajouter.html.twig", 3);
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
        $__internal_a9951785963a0a129a44595a79c1faf974ca19a153364cc24e765b7ee890b2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9951785963a0a129a44595a79c1faf974ca19a153364cc24e765b7ee890b2b6->enter($__internal_a9951785963a0a129a44595a79c1faf974ca19a153364cc24e765b7ee890b2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9951785963a0a129a44595a79c1faf974ca19a153364cc24e765b7ee890b2b6->leave($__internal_a9951785963a0a129a44595a79c1faf974ca19a153364cc24e765b7ee890b2b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d5d202a0cc606c2f687daabdc330efae309c019fa7d5e08a65dcd5d892206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d5d202a0cc606c2f687daabdc330efae309c019fa7d5e08a65dcd5d892206b->enter($__internal_35d5d202a0cc606c2f687daabdc330efae309c019fa7d5e08a65dcd5d892206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:ajouter.html.twig"));

        // line 6
        echo "\tAjouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35d5d202a0cc606c2f687daabdc330efae309c019fa7d5e08a65dcd5d892206b->leave($__internal_35d5d202a0cc606c2f687daabdc330efae309c019fa7d5e08a65dcd5d892206b_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_69a7618b8e91355a4dfce873280363176a9f3c651e87177599b5a1335d19e080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a7618b8e91355a4dfce873280363176a9f3c651e87177599b5a1335d19e080->enter($__internal_69a7618b8e91355a4dfce873280363176a9f3c651e87177599b5a1335d19e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:ajouter.html.twig"));

        // line 10
        echo "\t
\t<h2> Ajouter un article </h2>
\t
\t";
        // line 13
        $this->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig", "SdzBlogBundle:Blog:ajouter.html.twig", 13)->display($context);
        // line 14
        echo "\t
\t<p>
\t\tVous ajoutez un article.
\t</p>
\t
\t<p>
\t\t<a href= \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>
\t
";
        
        $__internal_69a7618b8e91355a4dfce873280363176a9f3c651e87177599b5a1335d19e080->leave($__internal_69a7618b8e91355a4dfce873280363176a9f3c651e87177599b5a1335d19e080_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  64 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Blog/ajouter.html.twig #}

{% extends \"SdzBlogBundle::layout.html.twig\" %}

{% block title %}
\tAjouter un article - {{ parent() }}
{% endblock %}

{% block sdzblog_body %}
\t
\t<h2> Ajouter un article </h2>
\t
\t{% include \"SdzBlogBundle:Blog:formulaire.html.twig\" %}
\t
\t<p>
\t\tVous ajoutez un article.
\t</p>
\t
\t<p>
\t\t<a href= \"{{ path('sdzblog_voir', {'id': article.id}) }}\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>
\t
{% endblock %}
", "SdzBlogBundle:Blog:ajouter.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/ajouter.html.twig");
    }
}
