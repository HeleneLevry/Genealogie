<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4e86ad06b52ffaac2dc9a44f0821d198336ad9fd36bcb57424d80f8b28450eb5 extends Twig_Template
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
        $__internal_7d3dcc0307ed0cc5409d42d22932f3b558d7017279e4d840c9425299b929ac43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3dcc0307ed0cc5409d42d22932f3b558d7017279e4d840c9425299b929ac43->enter($__internal_7d3dcc0307ed0cc5409d42d22932f3b558d7017279e4d840c9425299b929ac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));
=======
        $__internal_b297ee192858eb05a3364ed9772cb4cbe39acc47e3cb5816fc35937fa14f4ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b297ee192858eb05a3364ed9772cb4cbe39acc47e3cb5816fc35937fa14f4ac2->enter($__internal_b297ee192858eb05a3364ed9772cb4cbe39acc47e3cb5816fc35937fa14f4ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
<<<<<<< HEAD
        $__internal_7d3dcc0307ed0cc5409d42d22932f3b558d7017279e4d840c9425299b929ac43->leave($__internal_7d3dcc0307ed0cc5409d42d22932f3b558d7017279e4d840c9425299b929ac43_prof);
=======
        $__internal_b297ee192858eb05a3364ed9772cb4cbe39acc47e3cb5816fc35937fa14f4ac2->leave($__internal_b297ee192858eb05a3364ed9772cb4cbe39acc47e3cb5816fc35937fa14f4ac2_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
