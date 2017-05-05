<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fc9345a32749c3fe0cf0bf03f6708fcfdfd191571cd28d44afded668dc4bde30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3eaaf3eac3f5be76b2ee1f5c25334b27991286abe9ddd3240deac804d6db22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3eaaf3eac3f5be76b2ee1f5c25334b27991286abe9ddd3240deac804d6db22->enter($__internal_8d3eaaf3eac3f5be76b2ee1f5c25334b27991286abe9ddd3240deac804d6db22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8d3eaaf3eac3f5be76b2ee1f5c25334b27991286abe9ddd3240deac804d6db22->leave($__internal_8d3eaaf3eac3f5be76b2ee1f5c25334b27991286abe9ddd3240deac804d6db22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
