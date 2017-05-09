<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4ea8a352edf5b706cc39282da07c2732fc4c7f4f989bbadec0102969b7d8920d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e05de265741448375e11111603dbb04cd8c1cb3cd69b0d453bb9bd6c571ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e05de265741448375e11111603dbb04cd8c1cb3cd69b0d453bb9bd6c571ed97->enter($__internal_8e05de265741448375e11111603dbb04cd8c1cb3cd69b0d453bb9bd6c571ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e05de265741448375e11111603dbb04cd8c1cb3cd69b0d453bb9bd6c571ed97->leave($__internal_8e05de265741448375e11111603dbb04cd8c1cb3cd69b0d453bb9bd6c571ed97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ddaa619178a1f31e531707653347d2abaa19581ef3fd235dc4fbacdab7c94c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddaa619178a1f31e531707653347d2abaa19581ef3fd235dc4fbacdab7c94c2->enter($__internal_4ddaa619178a1f31e531707653347d2abaa19581ef3fd235dc4fbacdab7c94c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_4ddaa619178a1f31e531707653347d2abaa19581ef3fd235dc4fbacdab7c94c2->leave($__internal_4ddaa619178a1f31e531707653347d2abaa19581ef3fd235dc4fbacdab7c94c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e709101af485fedd1b3cc63721c4306128b7b0f0e4372b55db35ef752083f8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e709101af485fedd1b3cc63721c4306128b7b0f0e4372b55db35ef752083f8ac->enter($__internal_e709101af485fedd1b3cc63721c4306128b7b0f0e4372b55db35ef752083f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e709101af485fedd1b3cc63721c4306128b7b0f0e4372b55db35ef752083f8ac->leave($__internal_e709101af485fedd1b3cc63721c4306128b7b0f0e4372b55db35ef752083f8ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
