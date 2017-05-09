<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2088fe3fba686926b986822876c1ab716bcb9bb8512204a4201ea17c1d154420 extends Twig_Template
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
        $__internal_da462849b9df2ed9a16bca83cfc2268cb97db13e01cb17c806d95fb97e7b11b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da462849b9df2ed9a16bca83cfc2268cb97db13e01cb17c806d95fb97e7b11b5->enter($__internal_da462849b9df2ed9a16bca83cfc2268cb97db13e01cb17c806d95fb97e7b11b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_da462849b9df2ed9a16bca83cfc2268cb97db13e01cb17c806d95fb97e7b11b5->leave($__internal_da462849b9df2ed9a16bca83cfc2268cb97db13e01cb17c806d95fb97e7b11b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
