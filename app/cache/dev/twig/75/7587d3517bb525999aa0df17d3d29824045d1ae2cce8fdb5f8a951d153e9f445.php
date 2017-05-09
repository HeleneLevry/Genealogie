<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c3e1f37da65533b19fa0220fd3ff64cd761831593b4be5fbb3db0f523955dc84 extends Twig_Template
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
        $__internal_70abb068a39fd7a298d83c5a5288eba43d2a490f2ba9b03c01547f708fd8b1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70abb068a39fd7a298d83c5a5288eba43d2a490f2ba9b03c01547f708fd8b1d0->enter($__internal_70abb068a39fd7a298d83c5a5288eba43d2a490f2ba9b03c01547f708fd8b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_70abb068a39fd7a298d83c5a5288eba43d2a490f2ba9b03c01547f708fd8b1d0->leave($__internal_70abb068a39fd7a298d83c5a5288eba43d2a490f2ba9b03c01547f708fd8b1d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
