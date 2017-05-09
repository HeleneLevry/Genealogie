<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e036a5c18a2132d42574049bb015b5bf4e3edcc5f75fd5289cd87cb5eef606f3 extends Twig_Template
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
        $__internal_4641081e1b674a28b5045b90901ad8cef0321643b859bf4daa87e715fe74f783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4641081e1b674a28b5045b90901ad8cef0321643b859bf4daa87e715fe74f783->enter($__internal_4641081e1b674a28b5045b90901ad8cef0321643b859bf4daa87e715fe74f783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));
=======
        $__internal_475723fdc20b12fdb929271ab0a4e52f82fc1605b1d5d1017cfc96acc761205b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475723fdc20b12fdb929271ab0a4e52f82fc1605b1d5d1017cfc96acc761205b->enter($__internal_475723fdc20b12fdb929271ab0a4e52f82fc1605b1d5d1017cfc96acc761205b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
<<<<<<< HEAD
        $__internal_4641081e1b674a28b5045b90901ad8cef0321643b859bf4daa87e715fe74f783->leave($__internal_4641081e1b674a28b5045b90901ad8cef0321643b859bf4daa87e715fe74f783_prof);
=======
        $__internal_475723fdc20b12fdb929271ab0a4e52f82fc1605b1d5d1017cfc96acc761205b->leave($__internal_475723fdc20b12fdb929271ab0a4e52f82fc1605b1d5d1017cfc96acc761205b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
