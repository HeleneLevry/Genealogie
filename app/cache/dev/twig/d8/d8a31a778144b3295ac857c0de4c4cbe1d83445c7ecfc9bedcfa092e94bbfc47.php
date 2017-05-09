<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_17e6e3f9a1e89df66854c724cbb0eee8bb2f0d4c5bd55ac3be39205753b9f940 extends Twig_Template
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
        $__internal_9f6c6f5b601fb91a86ffa1b28f9cb298f63b0a81f0ee96eb6d08039662277b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6c6f5b601fb91a86ffa1b28f9cb298f63b0a81f0ee96eb6d08039662277b93->enter($__internal_9f6c6f5b601fb91a86ffa1b28f9cb298f63b0a81f0ee96eb6d08039662277b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));
=======
        $__internal_14ce1b2e700d2e0dd47b739b8024371439a1db6c8a79417cdbc17adc90287492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ce1b2e700d2e0dd47b739b8024371439a1db6c8a79417cdbc17adc90287492->enter($__internal_14ce1b2e700d2e0dd47b739b8024371439a1db6c8a79417cdbc17adc90287492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
<<<<<<< HEAD
        $__internal_9f6c6f5b601fb91a86ffa1b28f9cb298f63b0a81f0ee96eb6d08039662277b93->leave($__internal_9f6c6f5b601fb91a86ffa1b28f9cb298f63b0a81f0ee96eb6d08039662277b93_prof);
=======
        $__internal_14ce1b2e700d2e0dd47b739b8024371439a1db6c8a79417cdbc17adc90287492->leave($__internal_14ce1b2e700d2e0dd47b739b8024371439a1db6c8a79417cdbc17adc90287492_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
