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
        $__internal_854cb9a3a12397a17513122062f4368235f84f9aa2c1ededb07cc52687a3fbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854cb9a3a12397a17513122062f4368235f84f9aa2c1ededb07cc52687a3fbc0->enter($__internal_854cb9a3a12397a17513122062f4368235f84f9aa2c1ededb07cc52687a3fbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_854cb9a3a12397a17513122062f4368235f84f9aa2c1ededb07cc52687a3fbc0->leave($__internal_854cb9a3a12397a17513122062f4368235f84f9aa2c1ededb07cc52687a3fbc0_prof);

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