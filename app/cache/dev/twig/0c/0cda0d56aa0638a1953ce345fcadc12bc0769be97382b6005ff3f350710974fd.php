<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8c61ab62b999ea815aacf6901d8ab0829f6b7c894a0ffaff4314e279924dc6d6 extends Twig_Template
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
        $__internal_4a1012b7b3b0c81ab3358c5b58f00f9e753fa3461097c4af3ab68fa932f58c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1012b7b3b0c81ab3358c5b58f00f9e753fa3461097c4af3ab68fa932f58c4f->enter($__internal_4a1012b7b3b0c81ab3358c5b58f00f9e753fa3461097c4af3ab68fa932f58c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4a1012b7b3b0c81ab3358c5b58f00f9e753fa3461097c4af3ab68fa932f58c4f->leave($__internal_4a1012b7b3b0c81ab3358c5b58f00f9e753fa3461097c4af3ab68fa932f58c4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
