<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6288a6e422575ccb64424886ea8e17e342e5cd383e4f3d666f6b67424befaa7a extends Twig_Template
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
        $__internal_27241a7e43bbe903a7de9a6a7962ae6d6fde843364dd6e79a9b21b694dbd7f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27241a7e43bbe903a7de9a6a7962ae6d6fde843364dd6e79a9b21b694dbd7f81->enter($__internal_27241a7e43bbe903a7de9a6a7962ae6d6fde843364dd6e79a9b21b694dbd7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));
=======
        $__internal_c70160cb999f18c99451a8516e25c68698f6a024e3bce0586024a70a81b5879f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70160cb999f18c99451a8516e25c68698f6a024e3bce0586024a70a81b5879f->enter($__internal_c70160cb999f18c99451a8516e25c68698f6a024e3bce0586024a70a81b5879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
<<<<<<< HEAD
        $__internal_27241a7e43bbe903a7de9a6a7962ae6d6fde843364dd6e79a9b21b694dbd7f81->leave($__internal_27241a7e43bbe903a7de9a6a7962ae6d6fde843364dd6e79a9b21b694dbd7f81_prof);
=======
        $__internal_c70160cb999f18c99451a8516e25c68698f6a024e3bce0586024a70a81b5879f->leave($__internal_c70160cb999f18c99451a8516e25c68698f6a024e3bce0586024a70a81b5879f_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
