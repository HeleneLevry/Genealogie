<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4774e4cf4d9eaf04a4cc167c970c3649af2e06f050b851ad43925ce95d0d887b extends Twig_Template
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
        $__internal_30c4970aa110fdc2383836c6ed2b68ab8836d62830ccaf7ae8a484ca4a8a24cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c4970aa110fdc2383836c6ed2b68ab8836d62830ccaf7ae8a484ca4a8a24cb->enter($__internal_30c4970aa110fdc2383836c6ed2b68ab8836d62830ccaf7ae8a484ca4a8a24cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30c4970aa110fdc2383836c6ed2b68ab8836d62830ccaf7ae8a484ca4a8a24cb->leave($__internal_30c4970aa110fdc2383836c6ed2b68ab8836d62830ccaf7ae8a484ca4a8a24cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
