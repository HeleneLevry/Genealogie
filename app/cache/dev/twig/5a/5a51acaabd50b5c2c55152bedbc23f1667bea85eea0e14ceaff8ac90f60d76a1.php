<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_aa0b243edab35b24481d6d256b8688c188f74d375f39ec9bbd44b81006921385 extends Twig_Template
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
        $__internal_24550c92c450ac9b4134fc34ad7ab66af0a08a293c2ae9f1bc4582274bb693ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24550c92c450ac9b4134fc34ad7ab66af0a08a293c2ae9f1bc4582274bb693ae->enter($__internal_24550c92c450ac9b4134fc34ad7ab66af0a08a293c2ae9f1bc4582274bb693ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_24550c92c450ac9b4134fc34ad7ab66af0a08a293c2ae9f1bc4582274bb693ae->leave($__internal_24550c92c450ac9b4134fc34ad7ab66af0a08a293c2ae9f1bc4582274bb693ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
