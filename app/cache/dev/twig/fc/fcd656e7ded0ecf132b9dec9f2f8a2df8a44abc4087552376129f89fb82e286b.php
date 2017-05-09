<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f7e3685de3f70826b625f352bbf3beb75a56f38ae49fec090ad89b3f0f6af634 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_af04f5d742034330d536fd253090d3000466ed0cef9546d5054b10cc82562e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af04f5d742034330d536fd253090d3000466ed0cef9546d5054b10cc82562e25->enter($__internal_af04f5d742034330d536fd253090d3000466ed0cef9546d5054b10cc82562e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));
=======
        $__internal_abe339ade04179514312131e22d1e70e46037260fb1a2048eabbb83e1ab01af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe339ade04179514312131e22d1e70e46037260fb1a2048eabbb83e1ab01af4->enter($__internal_abe339ade04179514312131e22d1e70e46037260fb1a2048eabbb83e1ab01af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_af04f5d742034330d536fd253090d3000466ed0cef9546d5054b10cc82562e25->leave($__internal_af04f5d742034330d536fd253090d3000466ed0cef9546d5054b10cc82562e25_prof);
=======
        $__internal_abe339ade04179514312131e22d1e70e46037260fb1a2048eabbb83e1ab01af4->leave($__internal_abe339ade04179514312131e22d1e70e46037260fb1a2048eabbb83e1ab01af4_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
