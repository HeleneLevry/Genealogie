<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a489917d652f7563873e9348af79b80a3b12818fc2de371bb8dd3e57b68bdf98 extends Twig_Template
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
        $__internal_73e4c4aee2d1fd224b29228e9c85d8174fb2c97a1c87859bfa02c4adcd913a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e4c4aee2d1fd224b29228e9c85d8174fb2c97a1c87859bfa02c4adcd913a7c->enter($__internal_73e4c4aee2d1fd224b29228e9c85d8174fb2c97a1c87859bfa02c4adcd913a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
=======
        $__internal_e385ee41b7200b5069b37971fbbb91ba78cec60d09886b117f747bb723ac40d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e385ee41b7200b5069b37971fbbb91ba78cec60d09886b117f747bb723ac40d6->enter($__internal_e385ee41b7200b5069b37971fbbb91ba78cec60d09886b117f747bb723ac40d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_73e4c4aee2d1fd224b29228e9c85d8174fb2c97a1c87859bfa02c4adcd913a7c->leave($__internal_73e4c4aee2d1fd224b29228e9c85d8174fb2c97a1c87859bfa02c4adcd913a7c_prof);
=======
        $__internal_e385ee41b7200b5069b37971fbbb91ba78cec60d09886b117f747bb723ac40d6->leave($__internal_e385ee41b7200b5069b37971fbbb91ba78cec60d09886b117f747bb723ac40d6_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
