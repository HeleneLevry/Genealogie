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
        $__internal_cc68160d796aa4d038458fa4d58d361a2758d72dbdc935b9d7009c0788118194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc68160d796aa4d038458fa4d58d361a2758d72dbdc935b9d7009c0788118194->enter($__internal_cc68160d796aa4d038458fa4d58d361a2758d72dbdc935b9d7009c0788118194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc68160d796aa4d038458fa4d58d361a2758d72dbdc935b9d7009c0788118194->leave($__internal_cc68160d796aa4d038458fa4d58d361a2758d72dbdc935b9d7009c0788118194_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24f2bba2a07d22b540eef2b0fa6948e55be7bbd45ad2082ae2d2f1e204276250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f2bba2a07d22b540eef2b0fa6948e55be7bbd45ad2082ae2d2f1e204276250->enter($__internal_24f2bba2a07d22b540eef2b0fa6948e55be7bbd45ad2082ae2d2f1e204276250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:voir.html.twig"));

        // line 6
        echo "\tLecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24f2bba2a07d22b540eef2b0fa6948e55be7bbd45ad2082ae2d2f1e204276250->leave($__internal_24f2bba2a07d22b540eef2b0fa6948e55be7bbd45ad2082ae2d2f1e204276250_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_e6922c8c8a61e5b8d6ed42f55cc77eb769290619f27efcff91f00a80b16b6cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6922c8c8a61e5b8d6ed42f55cc77eb769290619f27efcff91f00a80b16b6cb9->enter($__internal_e6922c8c8a61e5b8d6ed42f55cc77eb769290619f27efcff91f00a80b16b6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:voir.html.twig"));

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
        
        $__internal_e6922c8c8a61e5b8d6ed42f55cc77eb769290619f27efcff91f00a80b16b6cb9->leave($__internal_e6922c8c8a61e5b8d6ed42f55cc77eb769290619f27efcff91f00a80b16b6cb9_prof);

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
