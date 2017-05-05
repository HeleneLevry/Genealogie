<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4f5e9d75cb8b5260145dee99fb6901a437c86d1a65313ef66cacac0a4078645b extends Twig_Template
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
        $__internal_6b3064976228cbb499b6435030c9ada3fbcd088e2c43379fcd0e06652edc796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3064976228cbb499b6435030c9ada3fbcd088e2c43379fcd0e06652edc796c->enter($__internal_6b3064976228cbb499b6435030c9ada3fbcd088e2c43379fcd0e06652edc796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6b3064976228cbb499b6435030c9ada3fbcd088e2c43379fcd0e06652edc796c->leave($__internal_6b3064976228cbb499b6435030c9ada3fbcd088e2c43379fcd0e06652edc796c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
