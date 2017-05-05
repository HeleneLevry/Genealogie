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
        $__internal_ec422c48dba6a27c34fae19c24fd9a6a94f6417e002ca6122e8255523147b08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec422c48dba6a27c34fae19c24fd9a6a94f6417e002ca6122e8255523147b08f->enter($__internal_ec422c48dba6a27c34fae19c24fd9a6a94f6417e002ca6122e8255523147b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ec422c48dba6a27c34fae19c24fd9a6a94f6417e002ca6122e8255523147b08f->leave($__internal_ec422c48dba6a27c34fae19c24fd9a6a94f6417e002ca6122e8255523147b08f_prof);

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
