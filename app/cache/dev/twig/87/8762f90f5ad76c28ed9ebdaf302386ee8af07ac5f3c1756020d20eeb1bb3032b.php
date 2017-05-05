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
        $__internal_3caf9cc661da5f6c2025cc695343a3076358e018149d976589d59686e2ae81be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caf9cc661da5f6c2025cc695343a3076358e018149d976589d59686e2ae81be->enter($__internal_3caf9cc661da5f6c2025cc695343a3076358e018149d976589d59686e2ae81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3caf9cc661da5f6c2025cc695343a3076358e018149d976589d59686e2ae81be->leave($__internal_3caf9cc661da5f6c2025cc695343a3076358e018149d976589d59686e2ae81be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01342c24d8a3cbaa18149bcc59b609f9514fbf72006efedcd7243b2d29e50b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01342c24d8a3cbaa18149bcc59b609f9514fbf72006efedcd7243b2d29e50b35->enter($__internal_01342c24d8a3cbaa18149bcc59b609f9514fbf72006efedcd7243b2d29e50b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_01342c24d8a3cbaa18149bcc59b609f9514fbf72006efedcd7243b2d29e50b35->leave($__internal_01342c24d8a3cbaa18149bcc59b609f9514fbf72006efedcd7243b2d29e50b35_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b24005609d87a7b02b4956928411f04adbab33e34b95ca9efedce1b3bf6838f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24005609d87a7b02b4956928411f04adbab33e34b95ca9efedce1b3bf6838f1->enter($__internal_b24005609d87a7b02b4956928411f04adbab33e34b95ca9efedce1b3bf6838f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_b24005609d87a7b02b4956928411f04adbab33e34b95ca9efedce1b3bf6838f1->leave($__internal_b24005609d87a7b02b4956928411f04adbab33e34b95ca9efedce1b3bf6838f1_prof);

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
