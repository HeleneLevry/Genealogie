<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_0d1988f9b57135b7363a1afb6f05849803b27a85e52c28c794624a9dad694cee extends Twig_Template
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
        $__internal_477ce0f446ffaefa90a8b62badfea4d2112a06883a944fa37ee67ec51f37af0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477ce0f446ffaefa90a8b62badfea4d2112a06883a944fa37ee67ec51f37af0d->enter($__internal_477ce0f446ffaefa90a8b62badfea4d2112a06883a944fa37ee67ec51f37af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));
=======
        $__internal_e1ff370f26b27c843d1c203a70eda50b709fc6a40c21c6fd0f3ebe15fb22c690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ff370f26b27c843d1c203a70eda50b709fc6a40c21c6fd0f3ebe15fb22c690->enter($__internal_e1ff370f26b27c843d1c203a70eda50b709fc6a40c21c6fd0f3ebe15fb22c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_477ce0f446ffaefa90a8b62badfea4d2112a06883a944fa37ee67ec51f37af0d->leave($__internal_477ce0f446ffaefa90a8b62badfea4d2112a06883a944fa37ee67ec51f37af0d_prof);
=======
        $__internal_e1ff370f26b27c843d1c203a70eda50b709fc6a40c21c6fd0f3ebe15fb22c690->leave($__internal_e1ff370f26b27c843d1c203a70eda50b709fc6a40c21c6fd0f3ebe15fb22c690_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
