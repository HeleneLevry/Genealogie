<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be01e6fcaea76d51381ce11b933b54237fc2b2dac4d2c9d187f7e43f3c3cc96c extends Twig_Template
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
        $__internal_dcc5c44e04880794f84a5879c3df5d73a978bd4147801ab288adb21c2826b1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc5c44e04880794f84a5879c3df5d73a978bd4147801ab288adb21c2826b1b5->enter($__internal_dcc5c44e04880794f84a5879c3df5d73a978bd4147801ab288adb21c2826b1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));
=======
        $__internal_b0cce8c6b2735bc6b93dc6cdfd7707612b0cf0a7420d506214aca367d308c4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cce8c6b2735bc6b93dc6cdfd7707612b0cf0a7420d506214aca367d308c4a1->enter($__internal_b0cce8c6b2735bc6b93dc6cdfd7707612b0cf0a7420d506214aca367d308c4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
<<<<<<< HEAD
        $__internal_dcc5c44e04880794f84a5879c3df5d73a978bd4147801ab288adb21c2826b1b5->leave($__internal_dcc5c44e04880794f84a5879c3df5d73a978bd4147801ab288adb21c2826b1b5_prof);
=======
        $__internal_b0cce8c6b2735bc6b93dc6cdfd7707612b0cf0a7420d506214aca367d308c4a1->leave($__internal_b0cce8c6b2735bc6b93dc6cdfd7707612b0cf0a7420d506214aca367d308c4a1_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
