<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_573f84d37c5bedda996f8b95f3d11730e33d569b82715563f5c548881281a3ad extends Twig_Template
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
        $__internal_2fbf11bcb261ed4b78c6a51ac4e31bbdeb5db67156615fc534509724b53d610e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbf11bcb261ed4b78c6a51ac4e31bbdeb5db67156615fc534509724b53d610e->enter($__internal_2fbf11bcb261ed4b78c6a51ac4e31bbdeb5db67156615fc534509724b53d610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));
=======
        $__internal_53f33f3a20c1f0c8ab4682ccf98c54ee4606a804f4793fd91ec476497750dc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f33f3a20c1f0c8ab4682ccf98c54ee4606a804f4793fd91ec476497750dc5f->enter($__internal_53f33f3a20c1f0c8ab4682ccf98c54ee4606a804f4793fd91ec476497750dc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
<<<<<<< HEAD
        $__internal_2fbf11bcb261ed4b78c6a51ac4e31bbdeb5db67156615fc534509724b53d610e->leave($__internal_2fbf11bcb261ed4b78c6a51ac4e31bbdeb5db67156615fc534509724b53d610e_prof);
=======
        $__internal_53f33f3a20c1f0c8ab4682ccf98c54ee4606a804f4793fd91ec476497750dc5f->leave($__internal_53f33f3a20c1f0c8ab4682ccf98c54ee4606a804f4793fd91ec476497750dc5f_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
