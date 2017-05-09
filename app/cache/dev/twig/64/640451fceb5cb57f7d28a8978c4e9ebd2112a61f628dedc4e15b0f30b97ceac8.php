<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_52c627ca4f70dc19cbd6aa16090db0857973cc32a8fdd3f5d9bf445542ef7e01 extends Twig_Template
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
        $__internal_cc210e989b28203d20bd1964cd5eaf210b9fc7672604f58968c031487cc6c75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc210e989b28203d20bd1964cd5eaf210b9fc7672604f58968c031487cc6c75c->enter($__internal_cc210e989b28203d20bd1964cd5eaf210b9fc7672604f58968c031487cc6c75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
=======
        $__internal_3c6b3bdae0482e9efb84c4e8b3469286dbfac6f6966136814f9d900a237df09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6b3bdae0482e9efb84c4e8b3469286dbfac6f6966136814f9d900a237df09b->enter($__internal_3c6b3bdae0482e9efb84c4e8b3469286dbfac6f6966136814f9d900a237df09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_cc210e989b28203d20bd1964cd5eaf210b9fc7672604f58968c031487cc6c75c->leave($__internal_cc210e989b28203d20bd1964cd5eaf210b9fc7672604f58968c031487cc6c75c_prof);
=======
        $__internal_3c6b3bdae0482e9efb84c4e8b3469286dbfac6f6966136814f9d900a237df09b->leave($__internal_3c6b3bdae0482e9efb84c4e8b3469286dbfac6f6966136814f9d900a237df09b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
