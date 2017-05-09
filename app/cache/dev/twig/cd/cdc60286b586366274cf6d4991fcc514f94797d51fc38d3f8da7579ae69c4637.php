<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_39f2e1097c41dfe0291d73581878177d04da407594cdf8e1e0fbee0d05d2aa34 extends Twig_Template
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
        $__internal_b3d21ed9ff0aeaf9c20c7ba6ea0563ecb8218178cbb79e1b044e747436701138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d21ed9ff0aeaf9c20c7ba6ea0563ecb8218178cbb79e1b044e747436701138->enter($__internal_b3d21ed9ff0aeaf9c20c7ba6ea0563ecb8218178cbb79e1b044e747436701138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));
=======
        $__internal_b33a491cc60da5211f3f83bf4b2f3bbe06da0323478a83ea125ad52bb9a561a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33a491cc60da5211f3f83bf4b2f3bbe06da0323478a83ea125ad52bb9a561a7->enter($__internal_b33a491cc60da5211f3f83bf4b2f3bbe06da0323478a83ea125ad52bb9a561a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
<<<<<<< HEAD
        $__internal_b3d21ed9ff0aeaf9c20c7ba6ea0563ecb8218178cbb79e1b044e747436701138->leave($__internal_b3d21ed9ff0aeaf9c20c7ba6ea0563ecb8218178cbb79e1b044e747436701138_prof);
=======
        $__internal_b33a491cc60da5211f3f83bf4b2f3bbe06da0323478a83ea125ad52bb9a561a7->leave($__internal_b33a491cc60da5211f3f83bf4b2f3bbe06da0323478a83ea125ad52bb9a561a7_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
