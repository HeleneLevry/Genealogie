<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_99ec87ef2f69b3c17ffb7cd6065317c0618176fc17cf32c8a67ce1d620f2f3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a12fd76e72ef85e7e468c27bef1f627aecde4d6a0942dc0845c0733f28724ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12fd76e72ef85e7e468c27bef1f627aecde4d6a0942dc0845c0733f28724ae8->enter($__internal_a12fd76e72ef85e7e468c27bef1f627aecde4d6a0942dc0845c0733f28724ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a12fd76e72ef85e7e468c27bef1f627aecde4d6a0942dc0845c0733f28724ae8->leave($__internal_a12fd76e72ef85e7e468c27bef1f627aecde4d6a0942dc0845c0733f28724ae8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_efcc53128b4fa04c07bf77508867c29f4fde180a90d5cdd5d31ba109d3d57863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcc53128b4fa04c07bf77508867c29f4fde180a90d5cdd5d31ba109d3d57863->enter($__internal_efcc53128b4fa04c07bf77508867c29f4fde180a90d5cdd5d31ba109d3d57863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_efcc53128b4fa04c07bf77508867c29f4fde180a90d5cdd5d31ba109d3d57863->leave($__internal_efcc53128b4fa04c07bf77508867c29f4fde180a90d5cdd5d31ba109d3d57863_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
