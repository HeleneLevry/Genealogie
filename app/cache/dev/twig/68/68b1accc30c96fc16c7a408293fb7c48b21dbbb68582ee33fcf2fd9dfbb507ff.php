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
        $__internal_fbd628b40ea015a16150a28e2da2d5217f2c0fa3daa0118615d2cfa1eeded0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd628b40ea015a16150a28e2da2d5217f2c0fa3daa0118615d2cfa1eeded0e3->enter($__internal_fbd628b40ea015a16150a28e2da2d5217f2c0fa3daa0118615d2cfa1eeded0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fbd628b40ea015a16150a28e2da2d5217f2c0fa3daa0118615d2cfa1eeded0e3->leave($__internal_fbd628b40ea015a16150a28e2da2d5217f2c0fa3daa0118615d2cfa1eeded0e3_prof);

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