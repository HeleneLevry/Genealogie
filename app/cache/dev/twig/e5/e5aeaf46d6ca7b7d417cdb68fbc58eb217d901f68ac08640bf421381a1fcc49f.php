<?php

/* SdzBlogBundle:Blog:index.html.twig */
class __TwigTemplate_c1d74dd25ce9f9312aa1b980ad9297d285ad46d85709fcf9c71cc5e0a6e7df4b extends Twig_Template
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
        $__internal_21dc898dd401314b108c6acd13c332bb7753bc47affaaadd41d510b27400e932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dc898dd401314b108c6acd13c332bb7753bc47affaaadd41d510b27400e932->enter($__internal_21dc898dd401314b108c6acd13c332bb7753bc47affaaadd41d510b27400e932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dc898dd401314b108c6acd13c332bb7753bc47affaaadd41d510b27400e932->leave($__internal_21dc898dd401314b108c6acd13c332bb7753bc47affaaadd41d510b27400e932_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5611805dacdb15345a34f2e3a06936c8a8d73b146c026fcafcf4b7c866aec03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5611805dacdb15345a34f2e3a06936c8a8d73b146c026fcafcf4b7c866aec03->enter($__internal_c5611805dacdb15345a34f2e3a06936c8a8d73b146c026fcafcf4b7c866aec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:index.html.twig"));

        // line 6
        echo "\tAcceuil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c5611805dacdb15345a34f2e3a06936c8a8d73b146c026fcafcf4b7c866aec03->leave($__internal_c5611805dacdb15345a34f2e3a06936c8a8d73b146c026fcafcf4b7c866aec03_prof);

    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        $__internal_dca568bcf3b3f456ec1934a768f8205efbb4062069c4a08e76a2229bf505e1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca568bcf3b3f456ec1934a768f8205efbb4062069c4a08e76a2229bf505e1af->enter($__internal_dca568bcf3b3f456ec1934a768f8205efbb4062069c4a08e76a2229bf505e1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SdzBlogBundle:Blog:index.html.twig"));

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
        
        $__internal_dca568bcf3b3f456ec1934a768f8205efbb4062069c4a08e76a2229bf505e1af->leave($__internal_dca568bcf3b3f456ec1934a768f8205efbb4062069c4a08e76a2229bf505e1af_prof);

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