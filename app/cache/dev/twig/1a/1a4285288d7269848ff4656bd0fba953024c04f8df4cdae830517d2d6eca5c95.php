<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6147a6069f9588672e5c5ca37d17c448b007210d283ef3770cf79c66c7cd98c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15b42afc8c7a02191240769a5eab91270ccb07efd1cd82f68cf3e31ce9b328fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b42afc8c7a02191240769a5eab91270ccb07efd1cd82f68cf3e31ce9b328fb->enter($__internal_15b42afc8c7a02191240769a5eab91270ccb07efd1cd82f68cf3e31ce9b328fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b42afc8c7a02191240769a5eab91270ccb07efd1cd82f68cf3e31ce9b328fb->leave($__internal_15b42afc8c7a02191240769a5eab91270ccb07efd1cd82f68cf3e31ce9b328fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ded637e64a2efa2291a11b2590477e98fc186e599295f52794e5494c0234658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded637e64a2efa2291a11b2590477e98fc186e599295f52794e5494c0234658->enter($__internal_7ded637e64a2efa2291a11b2590477e98fc186e599295f52794e5494c0234658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_7ded637e64a2efa2291a11b2590477e98fc186e599295f52794e5494c0234658->leave($__internal_7ded637e64a2efa2291a11b2590477e98fc186e599295f52794e5494c0234658_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_511ba13a293686d3be7b1e29746c68e9228c467ae093cbe3326f01918e68a17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511ba13a293686d3be7b1e29746c68e9228c467ae093cbe3326f01918e68a17b->enter($__internal_511ba13a293686d3be7b1e29746c68e9228c467ae093cbe3326f01918e68a17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_511ba13a293686d3be7b1e29746c68e9228c467ae093cbe3326f01918e68a17b->leave($__internal_511ba13a293686d3be7b1e29746c68e9228c467ae093cbe3326f01918e68a17b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc9a88554ccb0426c1c1aa8757bc3fa9f4ebd5e11f49c1ed60f0d9caae18aa9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9a88554ccb0426c1c1aa8757bc3fa9f4ebd5e11f49c1ed60f0d9caae18aa9f->enter($__internal_cc9a88554ccb0426c1c1aa8757bc3fa9f4ebd5e11f49c1ed60f0d9caae18aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc9a88554ccb0426c1c1aa8757bc3fa9f4ebd5e11f49c1ed60f0d9caae18aa9f->leave($__internal_cc9a88554ccb0426c1c1aa8757bc3fa9f4ebd5e11f49c1ed60f0d9caae18aa9f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
