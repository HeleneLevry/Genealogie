<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_2987ca8f5982437e810ebf608b8ba7fb726fdec3dfa21bdc13c98b7bb5e5738d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3fe3d63adcb76753c0557a347f2b70760851ebecef24bc02dcddedd65648cf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe3d63adcb76753c0557a347f2b70760851ebecef24bc02dcddedd65648cf3a->enter($__internal_3fe3d63adcb76753c0557a347f2b70760851ebecef24bc02dcddedd65648cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe3d63adcb76753c0557a347f2b70760851ebecef24bc02dcddedd65648cf3a->leave($__internal_3fe3d63adcb76753c0557a347f2b70760851ebecef24bc02dcddedd65648cf3a_prof);
=======
        $__internal_cdf0042ea06de2a33f096a10e3c9a99e5aca9afb0b62a2a206c20d23de52707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf0042ea06de2a33f096a10e3c9a99e5aca9afb0b62a2a206c20d23de52707d->enter($__internal_cdf0042ea06de2a33f096a10e3c9a99e5aca9afb0b62a2a206c20d23de52707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf0042ea06de2a33f096a10e3c9a99e5aca9afb0b62a2a206c20d23de52707d->leave($__internal_cdf0042ea06de2a33f096a10e3c9a99e5aca9afb0b62a2a206c20d23de52707d_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_49f4d88e0c802ca844efc7464374e1b7b678b16155b9c04b01369b14c1748436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f4d88e0c802ca844efc7464374e1b7b678b16155b9c04b01369b14c1748436->enter($__internal_49f4d88e0c802ca844efc7464374e1b7b678b16155b9c04b01369b14c1748436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:ajax.html.twig"));
=======
        $__internal_e8468784cd4cb418f8a568f3ca15cb8635ef209f78cb74965a5e249ad8d23abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8468784cd4cb418f8a568f3ca15cb8635ef209f78cb74965a5e249ad8d23abc->enter($__internal_e8468784cd4cb418f8a568f3ca15cb8635ef209f78cb74965a5e249ad8d23abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:ajax.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
<<<<<<< HEAD
        $__internal_49f4d88e0c802ca844efc7464374e1b7b678b16155b9c04b01369b14c1748436->leave($__internal_49f4d88e0c802ca844efc7464374e1b7b678b16155b9c04b01369b14c1748436_prof);
=======
        $__internal_e8468784cd4cb418f8a568f3ca15cb8635ef209f78cb74965a5e249ad8d23abc->leave($__internal_e8468784cd4cb418f8a568f3ca15cb8635ef209f78cb74965a5e249ad8d23abc_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
