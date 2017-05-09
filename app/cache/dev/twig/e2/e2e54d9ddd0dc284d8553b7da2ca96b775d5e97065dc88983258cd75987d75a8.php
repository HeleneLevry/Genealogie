<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7f70dac70cfa12dddeeef5c65113f1e19246e970cffc54a0c9f46e287d84a424 extends Twig_Template
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
        $__internal_225a8d8e0fca27ad484afa402351f80764a08564b60700920a48bb7913cc6981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225a8d8e0fca27ad484afa402351f80764a08564b60700920a48bb7913cc6981->enter($__internal_225a8d8e0fca27ad484afa402351f80764a08564b60700920a48bb7913cc6981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));
=======
        $__internal_64861ea2ecc5f0e6b60fe3420182ef3a30425bc59d401a687adb3d6ad5054aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64861ea2ecc5f0e6b60fe3420182ef3a30425bc59d401a687adb3d6ad5054aa2->enter($__internal_64861ea2ecc5f0e6b60fe3420182ef3a30425bc59d401a687adb3d6ad5054aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
<<<<<<< HEAD
        $__internal_225a8d8e0fca27ad484afa402351f80764a08564b60700920a48bb7913cc6981->leave($__internal_225a8d8e0fca27ad484afa402351f80764a08564b60700920a48bb7913cc6981_prof);
=======
        $__internal_64861ea2ecc5f0e6b60fe3420182ef3a30425bc59d401a687adb3d6ad5054aa2->leave($__internal_64861ea2ecc5f0e6b60fe3420182ef3a30425bc59d401a687adb3d6ad5054aa2_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
