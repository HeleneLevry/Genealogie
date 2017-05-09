<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c3cfefcffdedef05c57d10bb1b6928419de00feba31011622a1bc86992f68cef extends Twig_Template
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
        $__internal_b187ff55da3ed2a5cf087bbef6c29b30eb9ea3b2433459b79383614ed05848ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b187ff55da3ed2a5cf087bbef6c29b30eb9ea3b2433459b79383614ed05848ae->enter($__internal_b187ff55da3ed2a5cf087bbef6c29b30eb9ea3b2433459b79383614ed05848ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));
=======
        $__internal_43906de79407f5ffbf1809ef1d6d51598fccbc3c143424218d1e00454dd643be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43906de79407f5ffbf1809ef1d6d51598fccbc3c143424218d1e00454dd643be->enter($__internal_43906de79407f5ffbf1809ef1d6d51598fccbc3c143424218d1e00454dd643be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
<<<<<<< HEAD
        $__internal_b187ff55da3ed2a5cf087bbef6c29b30eb9ea3b2433459b79383614ed05848ae->leave($__internal_b187ff55da3ed2a5cf087bbef6c29b30eb9ea3b2433459b79383614ed05848ae_prof);
=======
        $__internal_43906de79407f5ffbf1809ef1d6d51598fccbc3c143424218d1e00454dd643be->leave($__internal_43906de79407f5ffbf1809ef1d6d51598fccbc3c143424218d1e00454dd643be_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
