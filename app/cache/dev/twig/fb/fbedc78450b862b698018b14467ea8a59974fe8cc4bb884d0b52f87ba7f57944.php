<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f8067ffc260cdcf508f95ca9b6837c8d589b299f9a52cb0c49d503063ecea01d extends Twig_Template
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
        $__internal_e0ef223737f43e62512d9570a4314b9948c70ceb294a83bae2acf0e8b44468cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ef223737f43e62512d9570a4314b9948c70ceb294a83bae2acf0e8b44468cc->enter($__internal_e0ef223737f43e62512d9570a4314b9948c70ceb294a83bae2acf0e8b44468cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
=======
        $__internal_89b4696ce676fad21403c98fe7a1113790a8588feb2620de6cbddaba2d498096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b4696ce676fad21403c98fe7a1113790a8588feb2620de6cbddaba2d498096->enter($__internal_89b4696ce676fad21403c98fe7a1113790a8588feb2620de6cbddaba2d498096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_e0ef223737f43e62512d9570a4314b9948c70ceb294a83bae2acf0e8b44468cc->leave($__internal_e0ef223737f43e62512d9570a4314b9948c70ceb294a83bae2acf0e8b44468cc_prof);
=======
        $__internal_89b4696ce676fad21403c98fe7a1113790a8588feb2620de6cbddaba2d498096->leave($__internal_89b4696ce676fad21403c98fe7a1113790a8588feb2620de6cbddaba2d498096_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
