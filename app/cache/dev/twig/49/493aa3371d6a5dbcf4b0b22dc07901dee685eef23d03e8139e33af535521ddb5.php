<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4a15d2a50a8628aa0d9f2fb08b87a2b90d8736760bf46df87738d37bc0add47f extends Twig_Template
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
        $__internal_6ac9a7b41c2ca04e7e94a853b1ece0dbae1ad7be4aa636ab47de8547ad745462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac9a7b41c2ca04e7e94a853b1ece0dbae1ad7be4aa636ab47de8547ad745462->enter($__internal_6ac9a7b41c2ca04e7e94a853b1ece0dbae1ad7be4aa636ab47de8547ad745462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6ac9a7b41c2ca04e7e94a853b1ece0dbae1ad7be4aa636ab47de8547ad745462->leave($__internal_6ac9a7b41c2ca04e7e94a853b1ece0dbae1ad7be4aa636ab47de8547ad745462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}