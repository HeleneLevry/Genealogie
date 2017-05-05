<?php

/* SdzBlogBundle:Blog:index.html.twig */
class __TwigTemplate_a4431b7fdbb6507a9586989cd2834f5e21de6bbd5cd77ff4f3e895cf390da54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SdzBlogBundle::layout.html.twig", "SdzBlogBundle:Blog:index.html.twig", 3);
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
        $__internal_402ef0543d31ae562187e233da3a0733fbc8aab8a4ce683f02cb3242b4357b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402ef0543d31ae562187e233da3a0733fbc8aab8a4ce683f02cb3242b4357b37->enter($__internal_402ef0543d31ae562187e233da3a0733fbc8aab8a4ce683f02cb3242b4357b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402ef0543d31ae562187e233da3a0733fbc8aab8a4ce683f02cb3242b4357b37->leave($__internal_402ef0543d31ae562187e233da3a0733fbc8aab8a4ce683f02cb3242b4357b37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_593ae8c83511d17945deb12f018c50b288645e2ed3a5455be41e0a1e3308a7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593ae8c83511d17945deb12f018c50b288645e2ed3a5455be41e0a1e3308a7a0->enter($__internal_593ae8c83511d17945deb12f018c50b288645e2ed3a5455be41e0a1e3308a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:index.html.twig"));

        // line 6
        echo "\tAcceuil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_593ae8c83511d17945deb12f018c50b288645e2ed3a5455be41e0a1e3308a7a0->leave($__internal_593ae8c83511d17945deb12f018c50b288645e2ed3a5455be41e0a1e3308a7a0_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_a90acd6d0df476af2c6c706821ba8ece10ede248a5a3722b45e4ba06a3e2bc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90acd6d0df476af2c6c706821ba8ece10ede248a5a3722b45e4ba06a3e2bc5b->enter($__internal_a90acd6d0df476af2c6c706821ba8ece10ede248a5a3722b45e4ba06a3e2bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:index.html.twig"));

        // line 10
        echo "\t<h2> Liste des articles </h2>
\t
\t<ul>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a>
\t\t\t\tpar ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "\t\t\t<li> Pas (encore !) d'articles</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</ul>
\t
";
        
        $__internal_a90acd6d0df476af2c6c706821ba8ece10ede248a5a3722b45e4ba06a3e2bc5b->leave($__internal_a90acd6d0df476af2c6c706821ba8ece10ede248a5a3722b45e4ba06a3e2bc5b_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  88 => 20,  80 => 17,  76 => 16,  70 => 15,  67 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Blog/index.html.twig #}

{% extends \"SdzBlogBundle::layout.html.twig\" %}

{% block title %}
\tAcceuil - {{ parent() }}
{% endblock %}

{% block sdzblog_body %}
\t<h2> Liste des articles </h2>
\t
\t<ul>
\t\t{% for article in articles %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('sdzblog_voir', {'id': article.id}) }}\">{{ article.titre }}</a>
\t\t\t\tpar {{ article.auteur }},
\t\t\t\tle {{ article.date|date('d/m/Y') }}
\t\t\t</li>
\t\t{% else %}
\t\t\t<li> Pas (encore !) d'articles</li>
\t\t{% endfor %}
\t</ul>
\t
{% endblock %}

{#
<! DOCTYPE html>
<html>
\t<head>
\t\t<title> Bienvenue sur ma premiere page ! </title>
\t</head>
\t<body>
\t\t<h1>Hello Marine!</h1>

\t\t<p>
\t\t\tLe Hello World est un grand classique de la programmation.
\t\t\tafficher ce hello world!
\t\t</p>
\t</body>
\t<footer> Responsable du site: {{webmaster}}.</footer>
</html>\t\t
#}
", "SdzBlogBundle:Blog:index.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
