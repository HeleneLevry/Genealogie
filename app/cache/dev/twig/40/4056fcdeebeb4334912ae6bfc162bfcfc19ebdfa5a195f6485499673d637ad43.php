<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_988e7a930d87de6f1437c8dc762bdc04d28c2a680a574c7098ffc6cd129fc4aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
<<<<<<< HEAD
        $__internal_b7bddd071541107de941151f5c894168a56a41fc39c6c4f850750ec80e4da08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bddd071541107de941151f5c894168a56a41fc39c6c4f850750ec80e4da08b->enter($__internal_b7bddd071541107de941151f5c894168a56a41fc39c6c4f850750ec80e4da08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7bddd071541107de941151f5c894168a56a41fc39c6c4f850750ec80e4da08b->leave($__internal_b7bddd071541107de941151f5c894168a56a41fc39c6c4f850750ec80e4da08b_prof);
=======
        $__internal_6d298746e32b1946e114ca0770e9ea4e8a129211158b97531901f455b8cf826b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d298746e32b1946e114ca0770e9ea4e8a129211158b97531901f455b8cf826b->enter($__internal_6d298746e32b1946e114ca0770e9ea4e8a129211158b97531901f455b8cf826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d298746e32b1946e114ca0770e9ea4e8a129211158b97531901f455b8cf826b->leave($__internal_6d298746e32b1946e114ca0770e9ea4e8a129211158b97531901f455b8cf826b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d0f3a587d8b7d5dcc3de70ce9cd8e3d799ee2bd198d4ed69bb2dfc3d15a8bb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f3a587d8b7d5dcc3de70ce9cd8e3d799ee2bd198d4ed69bb2dfc3d15a8bb9e->enter($__internal_d0f3a587d8b7d5dcc3de70ce9cd8e3d799ee2bd198d4ed69bb2dfc3d15a8bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_e757041549f7f0a6f15a907754472632584c869551e4004c643cfba2b4828610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e757041549f7f0a6f15a907754472632584c869551e4004c643cfba2b4828610->enter($__internal_e757041549f7f0a6f15a907754472632584c869551e4004c643cfba2b4828610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
<<<<<<< HEAD
        $__internal_d0f3a587d8b7d5dcc3de70ce9cd8e3d799ee2bd198d4ed69bb2dfc3d15a8bb9e->leave($__internal_d0f3a587d8b7d5dcc3de70ce9cd8e3d799ee2bd198d4ed69bb2dfc3d15a8bb9e_prof);
=======
        $__internal_e757041549f7f0a6f15a907754472632584c869551e4004c643cfba2b4828610->leave($__internal_e757041549f7f0a6f15a907754472632584c869551e4004c643cfba2b4828610_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_230c8b34d1dc8f98bfc2c583b5bd77b5495eca363275ad560592814f5b41ef9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230c8b34d1dc8f98bfc2c583b5bd77b5495eca363275ad560592814f5b41ef9f->enter($__internal_230c8b34d1dc8f98bfc2c583b5bd77b5495eca363275ad560592814f5b41ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_4b9d982a126587ffd7ab27bc20ae6545e811f80c491575c8ab9a5cae389d4dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9d982a126587ffd7ab27bc20ae6545e811f80c491575c8ab9a5cae389d4dbc->enter($__internal_4b9d982a126587ffd7ab27bc20ae6545e811f80c491575c8ab9a5cae389d4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
<<<<<<< HEAD
        $__internal_230c8b34d1dc8f98bfc2c583b5bd77b5495eca363275ad560592814f5b41ef9f->leave($__internal_230c8b34d1dc8f98bfc2c583b5bd77b5495eca363275ad560592814f5b41ef9f_prof);
=======
        $__internal_4b9d982a126587ffd7ab27bc20ae6545e811f80c491575c8ab9a5cae389d4dbc->leave($__internal_4b9d982a126587ffd7ab27bc20ae6545e811f80c491575c8ab9a5cae389d4dbc_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4bcd3d2bf5438b1a5ca540510168a09de6f3d0c7ececa428653a048cd08eb175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcd3d2bf5438b1a5ca540510168a09de6f3d0c7ececa428653a048cd08eb175->enter($__internal_4bcd3d2bf5438b1a5ca540510168a09de6f3d0c7ececa428653a048cd08eb175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_5a4dfe9da4a6e13c3e7fdf5e4a512e60cc325fe094ce9f1de545b57141025b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4dfe9da4a6e13c3e7fdf5e4a512e60cc325fe094ce9f1de545b57141025b7c->enter($__internal_5a4dfe9da4a6e13c3e7fdf5e4a512e60cc325fe094ce9f1de545b57141025b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
<<<<<<< HEAD
        $__internal_4bcd3d2bf5438b1a5ca540510168a09de6f3d0c7ececa428653a048cd08eb175->leave($__internal_4bcd3d2bf5438b1a5ca540510168a09de6f3d0c7ececa428653a048cd08eb175_prof);
=======
        $__internal_5a4dfe9da4a6e13c3e7fdf5e4a512e60cc325fe094ce9f1de545b57141025b7c->leave($__internal_5a4dfe9da4a6e13c3e7fdf5e4a512e60cc325fe094ce9f1de545b57141025b7c_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
