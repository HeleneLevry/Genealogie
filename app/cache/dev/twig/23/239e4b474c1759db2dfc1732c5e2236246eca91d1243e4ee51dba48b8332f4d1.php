<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_277b1e708377c0fe85a298b65f5552df4ceade05deb491bc9f6681e2c9730090 extends Twig_Template
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
        $__internal_87642459136bc10bb0d692bdcb2cfea9498038589a8ad026c98201227dd023b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87642459136bc10bb0d692bdcb2cfea9498038589a8ad026c98201227dd023b9->enter($__internal_87642459136bc10bb0d692bdcb2cfea9498038589a8ad026c98201227dd023b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_87642459136bc10bb0d692bdcb2cfea9498038589a8ad026c98201227dd023b9->leave($__internal_87642459136bc10bb0d692bdcb2cfea9498038589a8ad026c98201227dd023b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
