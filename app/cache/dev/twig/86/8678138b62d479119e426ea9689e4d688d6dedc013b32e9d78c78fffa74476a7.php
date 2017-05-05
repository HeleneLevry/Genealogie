<?php

/* base.html.twig */
class __TwigTemplate_0eb4a6a820c0819e1edf50f025a7fad1afad071592df312b54a16d00c30d293c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a05184b6b5ac4dd1d70ed0f22d797af7e2fa20108467947cdb171d7434ad9b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05184b6b5ac4dd1d70ed0f22d797af7e2fa20108467947cdb171d7434ad9b6e->enter($__internal_a05184b6b5ac4dd1d70ed0f22d797af7e2fa20108467947cdb171d7434ad9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a05184b6b5ac4dd1d70ed0f22d797af7e2fa20108467947cdb171d7434ad9b6e->leave($__internal_a05184b6b5ac4dd1d70ed0f22d797af7e2fa20108467947cdb171d7434ad9b6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f832d51818cfee681c38958c763f515826f54a2d479eafed2b4c2bee80a7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f832d51818cfee681c38958c763f515826f54a2d479eafed2b4c2bee80a7bb->enter($__internal_c3f832d51818cfee681c38958c763f515826f54a2d479eafed2b4c2bee80a7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_c3f832d51818cfee681c38958c763f515826f54a2d479eafed2b4c2bee80a7bb->leave($__internal_c3f832d51818cfee681c38958c763f515826f54a2d479eafed2b4c2bee80a7bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26b5e63d6bf3fe6a8227df9ec597ace17b612cf521005f4af882fb60241eaeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b5e63d6bf3fe6a8227df9ec597ace17b612cf521005f4af882fb60241eaeb1->enter($__internal_26b5e63d6bf3fe6a8227df9ec597ace17b612cf521005f4af882fb60241eaeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_26b5e63d6bf3fe6a8227df9ec597ace17b612cf521005f4af882fb60241eaeb1->leave($__internal_26b5e63d6bf3fe6a8227df9ec597ace17b612cf521005f4af882fb60241eaeb1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35e96847532c169c6e9e1978ae71261f1d2b350f35680b1b8a1be440dd27db60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e96847532c169c6e9e1978ae71261f1d2b350f35680b1b8a1be440dd27db60->enter($__internal_35e96847532c169c6e9e1978ae71261f1d2b350f35680b1b8a1be440dd27db60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_35e96847532c169c6e9e1978ae71261f1d2b350f35680b1b8a1be440dd27db60->leave($__internal_35e96847532c169c6e9e1978ae71261f1d2b350f35680b1b8a1be440dd27db60_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7ff9bb690a3c6f930f5c948f81f976e80e1e08a7e0af92f35df91a2ea14c169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ff9bb690a3c6f930f5c948f81f976e80e1e08a7e0af92f35df91a2ea14c169->enter($__internal_b7ff9bb690a3c6f930f5c948f81f976e80e1e08a7e0af92f35df91a2ea14c169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b7ff9bb690a3c6f930f5c948f81f976e80e1e08a7e0af92f35df91a2ea14c169->leave($__internal_b7ff9bb690a3c6f930f5c948f81f976e80e1e08a7e0af92f35df91a2ea14c169_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/genealogie/app/Resources/views/base.html.twig");
    }
}
