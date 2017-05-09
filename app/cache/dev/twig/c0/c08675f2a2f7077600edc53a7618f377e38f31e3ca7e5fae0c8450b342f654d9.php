<?php

/* base.html.twig */
class __TwigTemplate_a396579343adde71095cd71763e08271d9e2128f87a64e706b42a2b081d4babd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2c9de142ca664c38797dc4edc8d62f35c1ea54185996e83e14c636a4d13381b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c9de142ca664c38797dc4edc8d62f35c1ea54185996e83e14c636a4d13381b->enter($__internal_c2c9de142ca664c38797dc4edc8d62f35c1ea54185996e83e14c636a4d13381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c2c9de142ca664c38797dc4edc8d62f35c1ea54185996e83e14c636a4d13381b->leave($__internal_c2c9de142ca664c38797dc4edc8d62f35c1ea54185996e83e14c636a4d13381b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_153dc8ce8ab985b0603777a2672c79b8beb3d410c24967b05a7bbf685978cd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153dc8ce8ab985b0603777a2672c79b8beb3d410c24967b05a7bbf685978cd71->enter($__internal_153dc8ce8ab985b0603777a2672c79b8beb3d410c24967b05a7bbf685978cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_153dc8ce8ab985b0603777a2672c79b8beb3d410c24967b05a7bbf685978cd71->leave($__internal_153dc8ce8ab985b0603777a2672c79b8beb3d410c24967b05a7bbf685978cd71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_961c6a96bb70b725f4178f1834e5cb64d3197448e0de25e693f177d838ce6255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961c6a96bb70b725f4178f1834e5cb64d3197448e0de25e693f177d838ce6255->enter($__internal_961c6a96bb70b725f4178f1834e5cb64d3197448e0de25e693f177d838ce6255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_961c6a96bb70b725f4178f1834e5cb64d3197448e0de25e693f177d838ce6255->leave($__internal_961c6a96bb70b725f4178f1834e5cb64d3197448e0de25e693f177d838ce6255_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12523e0d4b1c7408ebb49f40ec8db0d2bdb290735e04491c49cc587dbfb58463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12523e0d4b1c7408ebb49f40ec8db0d2bdb290735e04491c49cc587dbfb58463->enter($__internal_12523e0d4b1c7408ebb49f40ec8db0d2bdb290735e04491c49cc587dbfb58463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_12523e0d4b1c7408ebb49f40ec8db0d2bdb290735e04491c49cc587dbfb58463->leave($__internal_12523e0d4b1c7408ebb49f40ec8db0d2bdb290735e04491c49cc587dbfb58463_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35b9bf9482f81c7a62e6763782245b78833480500982b060a8ef03380a9616af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b9bf9482f81c7a62e6763782245b78833480500982b060a8ef03380a9616af->enter($__internal_35b9bf9482f81c7a62e6763782245b78833480500982b060a8ef03380a9616af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_35b9bf9482f81c7a62e6763782245b78833480500982b060a8ef03380a9616af->leave($__internal_35b9bf9482f81c7a62e6763782245b78833480500982b060a8ef03380a9616af_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/genealogie/app/Resources/views/base.html.twig");
    }
}
