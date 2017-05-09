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
        $__internal_001f8274aebc0c495cbf27faf5389af6b4518fa19fe36bbd1eecf53aa9a43b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001f8274aebc0c495cbf27faf5389af6b4518fa19fe36bbd1eecf53aa9a43b97->enter($__internal_001f8274aebc0c495cbf27faf5389af6b4518fa19fe36bbd1eecf53aa9a43b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001f8274aebc0c495cbf27faf5389af6b4518fa19fe36bbd1eecf53aa9a43b97->leave($__internal_001f8274aebc0c495cbf27faf5389af6b4518fa19fe36bbd1eecf53aa9a43b97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b83760d638eb7d833ae24b2c6de4099943e3692c3db3f6cfb90cae9c5890f302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83760d638eb7d833ae24b2c6de4099943e3692c3db3f6cfb90cae9c5890f302->enter($__internal_b83760d638eb7d833ae24b2c6de4099943e3692c3db3f6cfb90cae9c5890f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_b83760d638eb7d833ae24b2c6de4099943e3692c3db3f6cfb90cae9c5890f302->leave($__internal_b83760d638eb7d833ae24b2c6de4099943e3692c3db3f6cfb90cae9c5890f302_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b631c9c447b56fb755c035d1d19f182f28b09db6459d0ab3cc0ba9cf6916f729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b631c9c447b56fb755c035d1d19f182f28b09db6459d0ab3cc0ba9cf6916f729->enter($__internal_b631c9c447b56fb755c035d1d19f182f28b09db6459d0ab3cc0ba9cf6916f729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b631c9c447b56fb755c035d1d19f182f28b09db6459d0ab3cc0ba9cf6916f729->leave($__internal_b631c9c447b56fb755c035d1d19f182f28b09db6459d0ab3cc0ba9cf6916f729_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecd6a0fb758d0648728349e4c1bc098153b04129d85ee61011bbcb1d9e5ce027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd6a0fb758d0648728349e4c1bc098153b04129d85ee61011bbcb1d9e5ce027->enter($__internal_ecd6a0fb758d0648728349e4c1bc098153b04129d85ee61011bbcb1d9e5ce027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ecd6a0fb758d0648728349e4c1bc098153b04129d85ee61011bbcb1d9e5ce027->leave($__internal_ecd6a0fb758d0648728349e4c1bc098153b04129d85ee61011bbcb1d9e5ce027_prof);

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
