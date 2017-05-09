<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f3bf606283d21f1ceee0c20416aca8441ce4c7648b8a4de662929e6703514901 extends Twig_Template
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
        $__internal_d7499b378de4a1845a23837a23ed6b76129f6e4273c9aa54f3e6dcf47531c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7499b378de4a1845a23837a23ed6b76129f6e4273c9aa54f3e6dcf47531c15a->enter($__internal_d7499b378de4a1845a23837a23ed6b76129f6e4273c9aa54f3e6dcf47531c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));
=======
        $__internal_ad9a79ef650daa2f86b2e363019d6e8d04c809e385da7d62e385ef1c3eee3b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a79ef650daa2f86b2e363019d6e8d04c809e385da7d62e385ef1c3eee3b1f->enter($__internal_ad9a79ef650daa2f86b2e363019d6e8d04c809e385da7d62e385ef1c3eee3b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
<<<<<<< HEAD
        $__internal_d7499b378de4a1845a23837a23ed6b76129f6e4273c9aa54f3e6dcf47531c15a->leave($__internal_d7499b378de4a1845a23837a23ed6b76129f6e4273c9aa54f3e6dcf47531c15a_prof);
=======
        $__internal_ad9a79ef650daa2f86b2e363019d6e8d04c809e385da7d62e385ef1c3eee3b1f->leave($__internal_ad9a79ef650daa2f86b2e363019d6e8d04c809e385da7d62e385ef1c3eee3b1f_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
