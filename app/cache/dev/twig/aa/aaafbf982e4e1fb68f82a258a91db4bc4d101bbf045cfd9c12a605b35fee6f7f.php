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
        $__internal_6407e13820b390b20b4738ef3d5746a546068f682ee05b305dbcd0091ef885f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6407e13820b390b20b4738ef3d5746a546068f682ee05b305dbcd0091ef885f2->enter($__internal_6407e13820b390b20b4738ef3d5746a546068f682ee05b305dbcd0091ef885f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6407e13820b390b20b4738ef3d5746a546068f682ee05b305dbcd0091ef885f2->leave($__internal_6407e13820b390b20b4738ef3d5746a546068f682ee05b305dbcd0091ef885f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e690f8d1a73c44280aed87bfcfdf62c26be74b112b70cd0e8c4a24f738c64328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e690f8d1a73c44280aed87bfcfdf62c26be74b112b70cd0e8c4a24f738c64328->enter($__internal_e690f8d1a73c44280aed87bfcfdf62c26be74b112b70cd0e8c4a24f738c64328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e690f8d1a73c44280aed87bfcfdf62c26be74b112b70cd0e8c4a24f738c64328->leave($__internal_e690f8d1a73c44280aed87bfcfdf62c26be74b112b70cd0e8c4a24f738c64328_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62df48f5d1108b3b55266b4ee1f3825d0e7cc1539eb4a293592adc4db3f5f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62df48f5d1108b3b55266b4ee1f3825d0e7cc1539eb4a293592adc4db3f5f5fb->enter($__internal_62df48f5d1108b3b55266b4ee1f3825d0e7cc1539eb4a293592adc4db3f5f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62df48f5d1108b3b55266b4ee1f3825d0e7cc1539eb4a293592adc4db3f5f5fb->leave($__internal_62df48f5d1108b3b55266b4ee1f3825d0e7cc1539eb4a293592adc4db3f5f5fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6dfe46b9e91b53f281f9646f4be34248fca3ec53cdb3b5486dcae6333dc6794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dfe46b9e91b53f281f9646f4be34248fca3ec53cdb3b5486dcae6333dc6794->enter($__internal_e6dfe46b9e91b53f281f9646f4be34248fca3ec53cdb3b5486dcae6333dc6794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6dfe46b9e91b53f281f9646f4be34248fca3ec53cdb3b5486dcae6333dc6794->leave($__internal_e6dfe46b9e91b53f281f9646f4be34248fca3ec53cdb3b5486dcae6333dc6794_prof);

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
