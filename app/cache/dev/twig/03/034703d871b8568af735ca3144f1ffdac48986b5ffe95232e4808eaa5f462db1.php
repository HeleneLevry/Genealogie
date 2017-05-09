<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5adb4de17e57317a0a64277ba0c054d730542f6f96f6423fdce148990db8432d extends Twig_Template
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
        $__internal_2eebda7f9a8607d5200d2f04b491c4b1118e89f97983b6c6b07329a8837f59c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eebda7f9a8607d5200d2f04b491c4b1118e89f97983b6c6b07329a8837f59c2->enter($__internal_2eebda7f9a8607d5200d2f04b491c4b1118e89f97983b6c6b07329a8837f59c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));
=======
        $__internal_e07b5392b4058e56a711ac4ae02801ba9dac4a504824b4c22947305d24557a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07b5392b4058e56a711ac4ae02801ba9dac4a504824b4c22947305d24557a5b->enter($__internal_e07b5392b4058e56a711ac4ae02801ba9dac4a504824b4c22947305d24557a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
<<<<<<< HEAD
        $__internal_2eebda7f9a8607d5200d2f04b491c4b1118e89f97983b6c6b07329a8837f59c2->leave($__internal_2eebda7f9a8607d5200d2f04b491c4b1118e89f97983b6c6b07329a8837f59c2_prof);
=======
        $__internal_e07b5392b4058e56a711ac4ae02801ba9dac4a504824b4c22947305d24557a5b->leave($__internal_e07b5392b4058e56a711ac4ae02801ba9dac4a504824b4c22947305d24557a5b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
