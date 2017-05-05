<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_003aff3f0b8a02b0baf9e4bb49e473b75121870c2b3f4c2d841470cfcc0bb221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5c2e652ae02a495ec9c20c8ade37fec385e28b6d6802143a917f3d7394bea12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2e652ae02a495ec9c20c8ade37fec385e28b6d6802143a917f3d7394bea12d->enter($__internal_5c2e652ae02a495ec9c20c8ade37fec385e28b6d6802143a917f3d7394bea12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c2e652ae02a495ec9c20c8ade37fec385e28b6d6802143a917f3d7394bea12d->leave($__internal_5c2e652ae02a495ec9c20c8ade37fec385e28b6d6802143a917f3d7394bea12d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ce94c6f82fe3b47e90cde112f21ca7aac65e217abc4905adefc89c108b5904b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce94c6f82fe3b47e90cde112f21ca7aac65e217abc4905adefc89c108b5904b->enter($__internal_7ce94c6f82fe3b47e90cde112f21ca7aac65e217abc4905adefc89c108b5904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7ce94c6f82fe3b47e90cde112f21ca7aac65e217abc4905adefc89c108b5904b->leave($__internal_7ce94c6f82fe3b47e90cde112f21ca7aac65e217abc4905adefc89c108b5904b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d7bcade7e83510e04f8296f24d87dc0f5744779f1827ac206e51805b83c7e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7bcade7e83510e04f8296f24d87dc0f5744779f1827ac206e51805b83c7e81->enter($__internal_9d7bcade7e83510e04f8296f24d87dc0f5744779f1827ac206e51805b83c7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d7bcade7e83510e04f8296f24d87dc0f5744779f1827ac206e51805b83c7e81->leave($__internal_9d7bcade7e83510e04f8296f24d87dc0f5744779f1827ac206e51805b83c7e81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a35e1a5eef9687a2cee244b950c4151d5607f7484c54dea6180173a43b47870c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35e1a5eef9687a2cee244b950c4151d5607f7484c54dea6180173a43b47870c->enter($__internal_a35e1a5eef9687a2cee244b950c4151d5607f7484c54dea6180173a43b47870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a35e1a5eef9687a2cee244b950c4151d5607f7484c54dea6180173a43b47870c->leave($__internal_a35e1a5eef9687a2cee244b950c4151d5607f7484c54dea6180173a43b47870c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
