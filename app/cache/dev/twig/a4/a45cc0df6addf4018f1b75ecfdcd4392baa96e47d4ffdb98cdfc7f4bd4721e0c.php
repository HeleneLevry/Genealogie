<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f923bd9bd32953f5e6a61c6d8df531cc9bf4eb7a80dda0aa157963cd9a0295af extends Twig_Template
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
        $__internal_8e16f9c2e513be5d626da3fe840505f0fa0ae912c9a8f9c8c9f8a5aa4be5cccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e16f9c2e513be5d626da3fe840505f0fa0ae912c9a8f9c8c9f8a5aa4be5cccb->enter($__internal_8e16f9c2e513be5d626da3fe840505f0fa0ae912c9a8f9c8c9f8a5aa4be5cccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));
=======
        $__internal_7ffb455555e4083f0fd7abfe66820434c9959352ce75afc32971881f62778979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffb455555e4083f0fd7abfe66820434c9959352ce75afc32971881f62778979->enter($__internal_7ffb455555e4083f0fd7abfe66820434c9959352ce75afc32971881f62778979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
<<<<<<< HEAD
        $__internal_8e16f9c2e513be5d626da3fe840505f0fa0ae912c9a8f9c8c9f8a5aa4be5cccb->leave($__internal_8e16f9c2e513be5d626da3fe840505f0fa0ae912c9a8f9c8c9f8a5aa4be5cccb_prof);
=======
        $__internal_7ffb455555e4083f0fd7abfe66820434c9959352ce75afc32971881f62778979->leave($__internal_7ffb455555e4083f0fd7abfe66820434c9959352ce75afc32971881f62778979_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
