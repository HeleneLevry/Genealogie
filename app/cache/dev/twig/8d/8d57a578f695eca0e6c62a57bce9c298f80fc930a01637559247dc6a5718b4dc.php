<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_128111cf4ad54ad37b59dbe941acf58a57e8f6bda84124c1a5a0005264d86d7f extends Twig_Template
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
        $__internal_e32c36a9df9eb1ef2bee3774a1627b91c0b0bbea187e98f4d3ddec6340290672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32c36a9df9eb1ef2bee3774a1627b91c0b0bbea187e98f4d3ddec6340290672->enter($__internal_e32c36a9df9eb1ef2bee3774a1627b91c0b0bbea187e98f4d3ddec6340290672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
=======
        $__internal_570bef480920b52f65f89fa4444c731fffc9ca9be4762e92fc0a7958b6b1486b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570bef480920b52f65f89fa4444c731fffc9ca9be4762e92fc0a7958b6b1486b->enter($__internal_570bef480920b52f65f89fa4444c731fffc9ca9be4762e92fc0a7958b6b1486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_e32c36a9df9eb1ef2bee3774a1627b91c0b0bbea187e98f4d3ddec6340290672->leave($__internal_e32c36a9df9eb1ef2bee3774a1627b91c0b0bbea187e98f4d3ddec6340290672_prof);
=======
        $__internal_570bef480920b52f65f89fa4444c731fffc9ca9be4762e92fc0a7958b6b1486b->leave($__internal_570bef480920b52f65f89fa4444c731fffc9ca9be4762e92fc0a7958b6b1486b_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
