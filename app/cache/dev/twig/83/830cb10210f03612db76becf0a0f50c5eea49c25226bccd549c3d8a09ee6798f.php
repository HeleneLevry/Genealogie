<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4bbb3c85a2aa5720825df7931a908a5dfa163c0ff451a19f6fe6425d598c5493 extends Twig_Template
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
        $__internal_948f7fcd737041b85b33e23c65bb68e2fd1689b7c16fc7b4ae43b73dd37261b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948f7fcd737041b85b33e23c65bb68e2fd1689b7c16fc7b4ae43b73dd37261b2->enter($__internal_948f7fcd737041b85b33e23c65bb68e2fd1689b7c16fc7b4ae43b73dd37261b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_948f7fcd737041b85b33e23c65bb68e2fd1689b7c16fc7b4ae43b73dd37261b2->leave($__internal_948f7fcd737041b85b33e23c65bb68e2fd1689b7c16fc7b4ae43b73dd37261b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
