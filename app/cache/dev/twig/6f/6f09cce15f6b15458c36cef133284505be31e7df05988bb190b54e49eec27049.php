<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b53e5c79fd540a14098f09ed6c4ebc8a662abf9bcd747cf298840cb0bb9baffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_234107e1be3f3a23e0b372032c5e892095afe61d20725043de30b3b74e255f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234107e1be3f3a23e0b372032c5e892095afe61d20725043de30b3b74e255f2d->enter($__internal_234107e1be3f3a23e0b372032c5e892095afe61d20725043de30b3b74e255f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234107e1be3f3a23e0b372032c5e892095afe61d20725043de30b3b74e255f2d->leave($__internal_234107e1be3f3a23e0b372032c5e892095afe61d20725043de30b3b74e255f2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a2c35920890169e12887e9704dd65d104bd8968839be7c11c2f070e73b36d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2c35920890169e12887e9704dd65d104bd8968839be7c11c2f070e73b36d45->enter($__internal_1a2c35920890169e12887e9704dd65d104bd8968839be7c11c2f070e73b36d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a2c35920890169e12887e9704dd65d104bd8968839be7c11c2f070e73b36d45->leave($__internal_1a2c35920890169e12887e9704dd65d104bd8968839be7c11c2f070e73b36d45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2f83efa59eeb4d3d64843c0582d02e366eb8155ca2e6388bae7a8b4f72a822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2f83efa59eeb4d3d64843c0582d02e366eb8155ca2e6388bae7a8b4f72a822->enter($__internal_3e2f83efa59eeb4d3d64843c0582d02e366eb8155ca2e6388bae7a8b4f72a822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e2f83efa59eeb4d3d64843c0582d02e366eb8155ca2e6388bae7a8b4f72a822->leave($__internal_3e2f83efa59eeb4d3d64843c0582d02e366eb8155ca2e6388bae7a8b4f72a822_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f9ba67d637b421e5309af715ace7044e63929b6e95064ce7b864b3a62f37562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9ba67d637b421e5309af715ace7044e63929b6e95064ce7b864b3a62f37562->enter($__internal_3f9ba67d637b421e5309af715ace7044e63929b6e95064ce7b864b3a62f37562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3f9ba67d637b421e5309af715ace7044e63929b6e95064ce7b864b3a62f37562->leave($__internal_3f9ba67d637b421e5309af715ace7044e63929b6e95064ce7b864b3a62f37562_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
