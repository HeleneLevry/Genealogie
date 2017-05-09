<?php

/* SdzBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_01bcb031685ef12f8a97566daae7e44f2145b7cd2311576a5cbe090c2226e673 extends Twig_Template
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
        $__internal_1287dac27c979f86b67d85cc4591d0fe7969d65367d4ee33c7fb1e3924aee0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1287dac27c979f86b67d85cc4591d0fe7969d65367d4ee33c7fb1e3924aee0cc->enter($__internal_1287dac27c979f86b67d85cc4591d0fe7969d65367d4ee33c7fb1e3924aee0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SdzBlogBundle:Blog:formulaire.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'article </h3>

<div class=\"well\">
\tIci se trouvera le formulaire.
</div>
";
        
        $__internal_1287dac27c979f86b67d85cc4591d0fe7969d65367d4ee33c7fb1e3924aee0cc->leave($__internal_1287dac27c979f86b67d85cc4591d0fe7969d65367d4ee33c7fb1e3924aee0cc_prof);

    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Sdz/BlogBundle/Resources.views/Blog/formulaire.html.twig #}

<h3>Formulaire d'article </h3>

<div class=\"well\">
\tIci se trouvera le formulaire.
</div>
", "SdzBlogBundle:Blog:formulaire.html.twig", "/var/www/genealogie/src/Sdz/BlogBundle/Resources/views/Blog/formulaire.html.twig");
    }
}
