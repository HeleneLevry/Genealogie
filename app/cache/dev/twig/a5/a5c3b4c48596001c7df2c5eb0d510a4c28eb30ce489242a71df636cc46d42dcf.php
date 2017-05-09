<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_03c49c5e5ae3208aa74c097fc992c52117236f561773abae39d3e681e83ee091 extends Twig_Template
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
        $__internal_f1f21681de9bb563a3fc46aaf2b2e8086328dad6ded29af454211db1e0eec053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f21681de9bb563a3fc46aaf2b2e8086328dad6ded29af454211db1e0eec053->enter($__internal_f1f21681de9bb563a3fc46aaf2b2e8086328dad6ded29af454211db1e0eec053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));
=======
        $__internal_4b56ea310f8c1687b573d4ba74973c4b62cd99d7f73547af85ac3bcd18ee85c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b56ea310f8c1687b573d4ba74973c4b62cd99d7f73547af85ac3bcd18ee85c5->enter($__internal_4b56ea310f8c1687b573d4ba74973c4b62cd99d7f73547af85ac3bcd18ee85c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
<<<<<<< HEAD
        $__internal_f1f21681de9bb563a3fc46aaf2b2e8086328dad6ded29af454211db1e0eec053->leave($__internal_f1f21681de9bb563a3fc46aaf2b2e8086328dad6ded29af454211db1e0eec053_prof);
=======
        $__internal_4b56ea310f8c1687b573d4ba74973c4b62cd99d7f73547af85ac3bcd18ee85c5->leave($__internal_4b56ea310f8c1687b573d4ba74973c4b62cd99d7f73547af85ac3bcd18ee85c5_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
