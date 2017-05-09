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
        $__internal_2dc41c0dbb36d67beb169b3114a296f0bcc31fe6fe169a442a8a0ea452960f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc41c0dbb36d67beb169b3114a296f0bcc31fe6fe169a442a8a0ea452960f4a->enter($__internal_2dc41c0dbb36d67beb169b3114a296f0bcc31fe6fe169a442a8a0ea452960f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2dc41c0dbb36d67beb169b3114a296f0bcc31fe6fe169a442a8a0ea452960f4a->leave($__internal_2dc41c0dbb36d67beb169b3114a296f0bcc31fe6fe169a442a8a0ea452960f4a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5095468dc8c658fa78705ca762420ae9af8294c1c47b12ed8f3795317de67b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5095468dc8c658fa78705ca762420ae9af8294c1c47b12ed8f3795317de67b3->enter($__internal_a5095468dc8c658fa78705ca762420ae9af8294c1c47b12ed8f3795317de67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_a5095468dc8c658fa78705ca762420ae9af8294c1c47b12ed8f3795317de67b3->leave($__internal_a5095468dc8c658fa78705ca762420ae9af8294c1c47b12ed8f3795317de67b3_prof);

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
