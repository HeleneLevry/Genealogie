<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_933647e5028e283759709799ffd2346bcd9754eabaeba7477a359c3a6c64dad2 extends Twig_Template
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
        $__internal_28702fbf5ce98e9614523f6f38bd83426b6b66d4e088ba88cfce60ff341e1b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28702fbf5ce98e9614523f6f38bd83426b6b66d4e088ba88cfce60ff341e1b68->enter($__internal_28702fbf5ce98e9614523f6f38bd83426b6b66d4e088ba88cfce60ff341e1b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));
=======
        $__internal_33ba41d93ca00ea2fd0ba634611ea9dca739e7b1ffc8fd3d3ef5a70620dbec08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ba41d93ca00ea2fd0ba634611ea9dca739e7b1ffc8fd3d3ef5a70620dbec08->enter($__internal_33ba41d93ca00ea2fd0ba634611ea9dca739e7b1ffc8fd3d3ef5a70620dbec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
<<<<<<< HEAD
        $__internal_28702fbf5ce98e9614523f6f38bd83426b6b66d4e088ba88cfce60ff341e1b68->leave($__internal_28702fbf5ce98e9614523f6f38bd83426b6b66d4e088ba88cfce60ff341e1b68_prof);
=======
        $__internal_33ba41d93ca00ea2fd0ba634611ea9dca739e7b1ffc8fd3d3ef5a70620dbec08->leave($__internal_33ba41d93ca00ea2fd0ba634611ea9dca739e7b1ffc8fd3d3ef5a70620dbec08_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
