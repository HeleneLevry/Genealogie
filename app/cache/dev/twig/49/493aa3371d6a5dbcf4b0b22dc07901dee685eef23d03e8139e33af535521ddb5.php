<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4a15d2a50a8628aa0d9f2fb08b87a2b90d8736760bf46df87738d37bc0add47f extends Twig_Template
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
        $__internal_6c5062f9dcb2540cca91054491694e504db47eb7ed4b699797d796b6632fef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5062f9dcb2540cca91054491694e504db47eb7ed4b699797d796b6632fef3d->enter($__internal_6c5062f9dcb2540cca91054491694e504db47eb7ed4b699797d796b6632fef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));
=======
        $__internal_a5fd1057a956ce654d059a47ca3fa36a0231eba217f905713376f54dcef122bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fd1057a956ce654d059a47ca3fa36a0231eba217f905713376f54dcef122bf->enter($__internal_a5fd1057a956ce654d059a47ca3fa36a0231eba217f905713376f54dcef122bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
<<<<<<< HEAD
        $__internal_6c5062f9dcb2540cca91054491694e504db47eb7ed4b699797d796b6632fef3d->leave($__internal_6c5062f9dcb2540cca91054491694e504db47eb7ed4b699797d796b6632fef3d_prof);
=======
        $__internal_a5fd1057a956ce654d059a47ca3fa36a0231eba217f905713376f54dcef122bf->leave($__internal_a5fd1057a956ce654d059a47ca3fa36a0231eba217f905713376f54dcef122bf_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
