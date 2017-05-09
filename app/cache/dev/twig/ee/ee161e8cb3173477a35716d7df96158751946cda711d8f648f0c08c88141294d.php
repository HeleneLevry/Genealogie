<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a2f5ccd73f0df913ec3018a979b0e7de8292cac10f99c69ad39a408a8cbb1b70 extends Twig_Template
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
        $__internal_27930a379b178f6f29b9bd1ebc93b0b4fc1b31a778afdebdb9dc62927c750ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27930a379b178f6f29b9bd1ebc93b0b4fc1b31a778afdebdb9dc62927c750ae9->enter($__internal_27930a379b178f6f29b9bd1ebc93b0b4fc1b31a778afdebdb9dc62927c750ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
=======
        $__internal_0521199275dca81a035d658550e222a25a8f9274dc6d8c9a0fb795f7bc84e847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0521199275dca81a035d658550e222a25a8f9274dc6d8c9a0fb795f7bc84e847->enter($__internal_0521199275dca81a035d658550e222a25a8f9274dc6d8c9a0fb795f7bc84e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
<<<<<<< HEAD
        $__internal_27930a379b178f6f29b9bd1ebc93b0b4fc1b31a778afdebdb9dc62927c750ae9->leave($__internal_27930a379b178f6f29b9bd1ebc93b0b4fc1b31a778afdebdb9dc62927c750ae9_prof);
=======
        $__internal_0521199275dca81a035d658550e222a25a8f9274dc6d8c9a0fb795f7bc84e847->leave($__internal_0521199275dca81a035d658550e222a25a8f9274dc6d8c9a0fb795f7bc84e847_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
