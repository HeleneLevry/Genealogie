<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3adcb97c06323210f9cd6c9941f965b3b1497b131036f9077b83218bd8e8041e extends Twig_Template
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
        $__internal_19d8b5eca21e2e4f7bbd9d9146091d6b5ad874aea14886311b3ec982044bd3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8b5eca21e2e4f7bbd9d9146091d6b5ad874aea14886311b3ec982044bd3c0->enter($__internal_19d8b5eca21e2e4f7bbd9d9146091d6b5ad874aea14886311b3ec982044bd3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));
=======
        $__internal_6dc18ddb0c458ed619b7f7d6296522cf095643bd69908718cbfd3a76f9bc6d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc18ddb0c458ed619b7f7d6296522cf095643bd69908718cbfd3a76f9bc6d5b->enter($__internal_6dc18ddb0c458ed619b7f7d6296522cf095643bd69908718cbfd3a76f9bc6d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
<<<<<<< HEAD
        $__internal_19d8b5eca21e2e4f7bbd9d9146091d6b5ad874aea14886311b3ec982044bd3c0->leave($__internal_19d8b5eca21e2e4f7bbd9d9146091d6b5ad874aea14886311b3ec982044bd3c0_prof);
=======
        $__internal_6dc18ddb0c458ed619b7f7d6296522cf095643bd69908718cbfd3a76f9bc6d5b->leave($__internal_6dc18ddb0c458ed619b7f7d6296522cf095643bd69908718cbfd3a76f9bc6d5b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
