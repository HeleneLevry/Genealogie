<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1c53dc6df6c2c6d5df889c9af5b3648ad284a2603003f2d3dafc7e0de34e0f48 extends Twig_Template
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
        $__internal_0dfa7e609a07aa8e9408dc0941b77d8caa35d9f1c8f02a672e64d1e10cb169ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfa7e609a07aa8e9408dc0941b77d8caa35d9f1c8f02a672e64d1e10cb169ba->enter($__internal_0dfa7e609a07aa8e9408dc0941b77d8caa35d9f1c8f02a672e64d1e10cb169ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));
=======
        $__internal_a7213aada37b2d8c00e03a3994654a8847219aec2dea1417dcc3520c1626cd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7213aada37b2d8c00e03a3994654a8847219aec2dea1417dcc3520c1626cd94->enter($__internal_a7213aada37b2d8c00e03a3994654a8847219aec2dea1417dcc3520c1626cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
<<<<<<< HEAD
        $__internal_0dfa7e609a07aa8e9408dc0941b77d8caa35d9f1c8f02a672e64d1e10cb169ba->leave($__internal_0dfa7e609a07aa8e9408dc0941b77d8caa35d9f1c8f02a672e64d1e10cb169ba_prof);
=======
        $__internal_a7213aada37b2d8c00e03a3994654a8847219aec2dea1417dcc3520c1626cd94->leave($__internal_a7213aada37b2d8c00e03a3994654a8847219aec2dea1417dcc3520c1626cd94_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
