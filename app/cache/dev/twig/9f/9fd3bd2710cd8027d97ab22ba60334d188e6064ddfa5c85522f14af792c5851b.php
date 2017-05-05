<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5e528391e06a04ab0cf62dc500c23a420be2d0984cf304a9a1213938249db752 extends Twig_Template
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
        $__internal_b5d19953982deba66633e9d6e734b0e2669c3a19a28d27cdf2413a90e6aa912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d19953982deba66633e9d6e734b0e2669c3a19a28d27cdf2413a90e6aa912d->enter($__internal_b5d19953982deba66633e9d6e734b0e2669c3a19a28d27cdf2413a90e6aa912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b5d19953982deba66633e9d6e734b0e2669c3a19a28d27cdf2413a90e6aa912d->leave($__internal_b5d19953982deba66633e9d6e734b0e2669c3a19a28d27cdf2413a90e6aa912d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
