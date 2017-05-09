<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_532bd9294559ac7c77c4e873461068b946a0ab1da98c33fc5bf3cdd3866cada4 extends Twig_Template
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
        $__internal_05c582c1d038a18d5953f93a01c0633667df56da1305d990ee7c2ec95d7ff52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c582c1d038a18d5953f93a01c0633667df56da1305d990ee7c2ec95d7ff52b->enter($__internal_05c582c1d038a18d5953f93a01c0633667df56da1305d990ee7c2ec95d7ff52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
=======
        $__internal_8fe6485e70caffb470ec0c78d33a4086acaff2cd79ebc9761a93771070d8c1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe6485e70caffb470ec0c78d33a4086acaff2cd79ebc9761a93771070d8c1a0->enter($__internal_8fe6485e70caffb470ec0c78d33a4086acaff2cd79ebc9761a93771070d8c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
<<<<<<< HEAD
        $__internal_05c582c1d038a18d5953f93a01c0633667df56da1305d990ee7c2ec95d7ff52b->leave($__internal_05c582c1d038a18d5953f93a01c0633667df56da1305d990ee7c2ec95d7ff52b_prof);
=======
        $__internal_8fe6485e70caffb470ec0c78d33a4086acaff2cd79ebc9761a93771070d8c1a0->leave($__internal_8fe6485e70caffb470ec0c78d33a4086acaff2cd79ebc9761a93771070d8c1a0_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
