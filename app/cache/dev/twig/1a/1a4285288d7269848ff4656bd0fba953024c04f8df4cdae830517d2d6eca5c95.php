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
        $__internal_ee0089bd7cc68c2a264c17b55c88614eeb89d2e0d4e605a352e4b53b5f349099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0089bd7cc68c2a264c17b55c88614eeb89d2e0d4e605a352e4b53b5f349099->enter($__internal_ee0089bd7cc68c2a264c17b55c88614eeb89d2e0d4e605a352e4b53b5f349099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0089bd7cc68c2a264c17b55c88614eeb89d2e0d4e605a352e4b53b5f349099->leave($__internal_ee0089bd7cc68c2a264c17b55c88614eeb89d2e0d4e605a352e4b53b5f349099_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb8e105eb2c26c2ae913c98e78a93f32ac3cb571e92ce437f57a0eee0cac668a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8e105eb2c26c2ae913c98e78a93f32ac3cb571e92ce437f57a0eee0cac668a->enter($__internal_cb8e105eb2c26c2ae913c98e78a93f32ac3cb571e92ce437f57a0eee0cac668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_cb8e105eb2c26c2ae913c98e78a93f32ac3cb571e92ce437f57a0eee0cac668a->leave($__internal_cb8e105eb2c26c2ae913c98e78a93f32ac3cb571e92ce437f57a0eee0cac668a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6be2525af3c1118dde62b16ef221d3110ec7b92fbb1c297a87f82ac08d1299e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be2525af3c1118dde62b16ef221d3110ec7b92fbb1c297a87f82ac08d1299e3->enter($__internal_6be2525af3c1118dde62b16ef221d3110ec7b92fbb1c297a87f82ac08d1299e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6be2525af3c1118dde62b16ef221d3110ec7b92fbb1c297a87f82ac08d1299e3->leave($__internal_6be2525af3c1118dde62b16ef221d3110ec7b92fbb1c297a87f82ac08d1299e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_002ec559dbe28a82cdbe20c7e4b349327a8d1bc95b43b2780d48585e4f2bcabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002ec559dbe28a82cdbe20c7e4b349327a8d1bc95b43b2780d48585e4f2bcabf->enter($__internal_002ec559dbe28a82cdbe20c7e4b349327a8d1bc95b43b2780d48585e4f2bcabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_002ec559dbe28a82cdbe20c7e4b349327a8d1bc95b43b2780d48585e4f2bcabf->leave($__internal_002ec559dbe28a82cdbe20c7e4b349327a8d1bc95b43b2780d48585e4f2bcabf_prof);

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
