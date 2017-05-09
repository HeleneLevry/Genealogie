<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_b844c7a44b072354ae0b93eb9112162c622ec7a08848faeb33016dae06b0da07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SdzBlogBundle::layout.html.twig", "SdzBlogBundle:Blog:voir.html.twig", 3);
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
        $__internal_840eb6500a75c895c68950178cbd5dc06519034f25f40b8ea9feda72dfea8179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840eb6500a75c895c68950178cbd5dc06519034f25f40b8ea9feda72dfea8179->enter($__internal_840eb6500a75c895c68950178cbd5dc06519034f25f40b8ea9feda72dfea8179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840eb6500a75c895c68950178cbd5dc06519034f25f40b8ea9feda72dfea8179->leave($__internal_840eb6500a75c895c68950178cbd5dc06519034f25f40b8ea9feda72dfea8179_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffbf699edca54be75774472b2bb8b48d65bfba669ce500585a836163bfc9ff19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbf699edca54be75774472b2bb8b48d65bfba669ce500585a836163bfc9ff19->enter($__internal_ffbf699edca54be75774472b2bb8b48d65bfba669ce500585a836163bfc9ff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:voir.html.twig"));

        // line 6
        echo "\tLecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ffbf699edca54be75774472b2bb8b48d65bfba669ce500585a836163bfc9ff19->leave($__internal_ffbf699edca54be75774472b2bb8b48d65bfba669ce500585a836163bfc9ff19_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_38498eedc5a3c899478a39ff22789b64137bcce5ce9534cafef8f4beef462334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38498eedc5a3c899478a39ff22789b64137bcce5ce9534cafef8f4beef462334->enter($__internal_38498eedc5a3c899478a39ff22789b64137bcce5ce9534cafef8f4beef462334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:voir.html.twig"));

        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</h2>
\t<i> Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t
\t<div class=\"well\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "
\t</div>
\t
\t<p>
\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-edit\"></i>
\t\t\tModifier l'article
\t\t</a>
\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-trash\"></i>
\t\t\tSupprimer l'article
\t\t</a>
\t</p>
\t
";
        
        $__internal_38498eedc5a3c899478a39ff22789b64137bcce5ce9534cafef8f4beef462334->leave($__internal_38498eedc5a3c899478a39ff22789b64137bcce5ce9534cafef8f4beef462334_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Blog/voir.html.twig #}

{% extends \"SdzBlogBundle::layout.html.twig\" %}

{% block title %}
\tLecture d'un article - {{ parent() }}
{% endblock %}

{% block sdzblog_body %}

\t<h2>{{ article.titre }}</h2>
\t<i> Par {{ article.auteur }}, le {{ article.date|date('d/m/Y') }}</i>
\t
\t<div class=\"well\">
\t\t{{ article.contenu }}
\t</div>
\t
\t<p>
\t\t<a href=\"{{ path('sdzblog_accueil') }}\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"{{ path('sdzblog_modifier', {'id': article.id}) }}\" class=\"btn\">
\t\t\t<i class=\"icon-edit\"></i>
\t\t\tModifier l'article
\t\t</a>
\t\t<a href=\"{{ path('sdzblog_supprimer',{'id': article.id}) }}\" class=\"btn\">
\t\t\t<i class=\"icon-trash\"></i>
\t\t\tSupprimer l'article
\t\t</a>
\t</p>
\t
{% endblock %}
", "SdzBlogBundle:Blog:voir.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/voir.html.twig");
    }
}
