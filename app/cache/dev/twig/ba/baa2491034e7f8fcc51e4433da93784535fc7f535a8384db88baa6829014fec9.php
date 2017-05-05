<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a879651bdd055b111db1f7c5d0425cbff3f0209ffbfb6480f7d77d9ae14fc2c9 extends Twig_Template
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
        $__internal_0a7c69aeb887e07ea553d21d6f10ac38e53d51adcaeefccfc1db687a6476eca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7c69aeb887e07ea553d21d6f10ac38e53d51adcaeefccfc1db687a6476eca0->enter($__internal_0a7c69aeb887e07ea553d21d6f10ac38e53d51adcaeefccfc1db687a6476eca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0a7c69aeb887e07ea553d21d6f10ac38e53d51adcaeefccfc1db687a6476eca0->leave($__internal_0a7c69aeb887e07ea553d21d6f10ac38e53d51adcaeefccfc1db687a6476eca0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
