<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_5dabf0fc76b30e47c811a1e8720f513bb2b5963ed6571b802d87efe24f9a5fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baa5b46b1c56b8b016f4d5c8059efc9ea701272abb8a8ac4fc9710f982776b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa5b46b1c56b8b016f4d5c8059efc9ea701272abb8a8ac4fc9710f982776b90->enter($__internal_baa5b46b1c56b8b016f4d5c8059efc9ea701272abb8a8ac4fc9710f982776b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:menu.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<h3> Les derniers articles </h3>
<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_baa5b46b1c56b8b016f4d5c8059efc9ea701272abb8a8ac4fc9710f982776b90->leave($__internal_baa5b46b1c56b8b016f4d5c8059efc9ea701272abb8a8ac4fc9710f982776b90_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 8,  30 => 7,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources/views/Blog/menu.html.twig #}

{# Ce template n'herite de personne, tout comme le template inckus avec {% include %}. #}

<h3> Les derniers articles </h3>
<ul class=\"nav nav-pills nav-stacked\">
\t{% for article in liste_articles %}
\t\t<li><a href=\"{{ path('sdzblog_voir', {'id':article.id}) }}\">{{ article.titre }}</a></li>
\t{% endfor %}
</ul>
", "SdzBlogBundle:Blog:menu.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/menu.html.twig");
    }
}
