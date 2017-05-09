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
        $__internal_f03944158c1d3c6d843c492f14b564a8c20f73e84615ce10a340edcec32e240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03944158c1d3c6d843c492f14b564a8c20f73e84615ce10a340edcec32e240c->enter($__internal_f03944158c1d3c6d843c492f14b564a8c20f73e84615ce10a340edcec32e240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f03944158c1d3c6d843c492f14b564a8c20f73e84615ce10a340edcec32e240c->leave($__internal_f03944158c1d3c6d843c492f14b564a8c20f73e84615ce10a340edcec32e240c_prof);

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
