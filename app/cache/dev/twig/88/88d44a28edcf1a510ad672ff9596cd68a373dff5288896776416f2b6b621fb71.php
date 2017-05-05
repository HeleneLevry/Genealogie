<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_961551736ed4243bac3f50d1c06bc51debba64d6414fe064ed28aef2ef8b5031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_95a67a336c73dd122fec174074276e38b53c12ab36c50f74bad6e21dffb1d676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a67a336c73dd122fec174074276e38b53c12ab36c50f74bad6e21dffb1d676->enter($__internal_95a67a336c73dd122fec174074276e38b53c12ab36c50f74bad6e21dffb1d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a67a336c73dd122fec174074276e38b53c12ab36c50f74bad6e21dffb1d676->leave($__internal_95a67a336c73dd122fec174074276e38b53c12ab36c50f74bad6e21dffb1d676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ebad90f1a49fb0db94eed961202595ebb848a5d3abeda0ed280138b38eb3290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebad90f1a49fb0db94eed961202595ebb848a5d3abeda0ed280138b38eb3290->enter($__internal_2ebad90f1a49fb0db94eed961202595ebb848a5d3abeda0ed280138b38eb3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ebad90f1a49fb0db94eed961202595ebb848a5d3abeda0ed280138b38eb3290->leave($__internal_2ebad90f1a49fb0db94eed961202595ebb848a5d3abeda0ed280138b38eb3290_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eee857422e1f7f679d139235b39af79a635adefedf3f9281dfa7006aadfdc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eee857422e1f7f679d139235b39af79a635adefedf3f9281dfa7006aadfdc5c->enter($__internal_4eee857422e1f7f679d139235b39af79a635adefedf3f9281dfa7006aadfdc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4eee857422e1f7f679d139235b39af79a635adefedf3f9281dfa7006aadfdc5c->leave($__internal_4eee857422e1f7f679d139235b39af79a635adefedf3f9281dfa7006aadfdc5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_952686bacf718363b7b06deaa8c1b10a5320f0f8713a8849946e7d982c64ba02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952686bacf718363b7b06deaa8c1b10a5320f0f8713a8849946e7d982c64ba02->enter($__internal_952686bacf718363b7b06deaa8c1b10a5320f0f8713a8849946e7d982c64ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_952686bacf718363b7b06deaa8c1b10a5320f0f8713a8849946e7d982c64ba02->leave($__internal_952686bacf718363b7b06deaa8c1b10a5320f0f8713a8849946e7d982c64ba02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
