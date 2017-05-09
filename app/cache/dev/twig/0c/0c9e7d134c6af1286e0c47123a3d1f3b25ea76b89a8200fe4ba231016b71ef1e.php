<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_781865d31384a8c92f2628e4137796cdaae9b8de7745502abe130559d5b58f6f extends Twig_Template
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
        $__internal_7e506503fb2b101c116f375ed2183b21ead3014c3b00c1beec1905d40208884b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e506503fb2b101c116f375ed2183b21ead3014c3b00c1beec1905d40208884b->enter($__internal_7e506503fb2b101c116f375ed2183b21ead3014c3b00c1beec1905d40208884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
=======
        $__internal_801bca98eb5d693158c38325d787c88f8c27aa847715e35c1a82ba1d202931b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801bca98eb5d693158c38325d787c88f8c27aa847715e35c1a82ba1d202931b0->enter($__internal_801bca98eb5d693158c38325d787c88f8c27aa847715e35c1a82ba1d202931b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
<<<<<<< HEAD
        $__internal_7e506503fb2b101c116f375ed2183b21ead3014c3b00c1beec1905d40208884b->leave($__internal_7e506503fb2b101c116f375ed2183b21ead3014c3b00c1beec1905d40208884b_prof);
=======
        $__internal_801bca98eb5d693158c38325d787c88f8c27aa847715e35c1a82ba1d202931b0->leave($__internal_801bca98eb5d693158c38325d787c88f8c27aa847715e35c1a82ba1d202931b0_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
