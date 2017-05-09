<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_13fad58788da28f2f56637d7f3527f2685a60d9a4c2051d86fcb93066bd67279 extends Twig_Template
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
        $__internal_be7363444bae8f81fa65e9c0607195f76c57dafc2b1b7ca51c0e4d610eb1ec9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7363444bae8f81fa65e9c0607195f76c57dafc2b1b7ca51c0e4d610eb1ec9d->enter($__internal_be7363444bae8f81fa65e9c0607195f76c57dafc2b1b7ca51c0e4d610eb1ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));
=======
        $__internal_1f812adef580a12cd908a11e22b9108cca54c7b8640c3bc28824fca67ddc7ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f812adef580a12cd908a11e22b9108cca54c7b8640c3bc28824fca67ddc7ac7->enter($__internal_1f812adef580a12cd908a11e22b9108cca54c7b8640c3bc28824fca67ddc7ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
<<<<<<< HEAD
        $__internal_be7363444bae8f81fa65e9c0607195f76c57dafc2b1b7ca51c0e4d610eb1ec9d->leave($__internal_be7363444bae8f81fa65e9c0607195f76c57dafc2b1b7ca51c0e4d610eb1ec9d_prof);
=======
        $__internal_1f812adef580a12cd908a11e22b9108cca54c7b8640c3bc28824fca67ddc7ac7->leave($__internal_1f812adef580a12cd908a11e22b9108cca54c7b8640c3bc28824fca67ddc7ac7_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
