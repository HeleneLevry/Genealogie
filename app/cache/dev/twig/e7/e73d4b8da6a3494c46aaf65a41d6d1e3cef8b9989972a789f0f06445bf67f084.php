<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f8b13c51efcb9fb9b6b046a6c557c668d84ffe4f9e529ca852590173d13941a2 extends Twig_Template
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
        $__internal_6e0c3f147910da27525e52fd635f51dd0905cf6da5ef0d5e160621b8e5408fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0c3f147910da27525e52fd635f51dd0905cf6da5ef0d5e160621b8e5408fd5->enter($__internal_6e0c3f147910da27525e52fd635f51dd0905cf6da5ef0d5e160621b8e5408fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6e0c3f147910da27525e52fd635f51dd0905cf6da5ef0d5e160621b8e5408fd5->leave($__internal_6e0c3f147910da27525e52fd635f51dd0905cf6da5ef0d5e160621b8e5408fd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
