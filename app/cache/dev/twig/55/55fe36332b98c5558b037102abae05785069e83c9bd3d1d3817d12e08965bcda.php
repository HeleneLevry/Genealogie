<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e09348404ad8061e1ac91a89f8afc2d200a8c43e2e2c36bf0abfbd6fee7878db extends Twig_Template
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
        $__internal_e02bcb7fc535d669014ecc17ebbc297590207542e61a27d0514d0f8e797d0da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02bcb7fc535d669014ecc17ebbc297590207542e61a27d0514d0f8e797d0da4->enter($__internal_e02bcb7fc535d669014ecc17ebbc297590207542e61a27d0514d0f8e797d0da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e02bcb7fc535d669014ecc17ebbc297590207542e61a27d0514d0f8e797d0da4->leave($__internal_e02bcb7fc535d669014ecc17ebbc297590207542e61a27d0514d0f8e797d0da4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}