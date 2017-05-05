<?php

/* base.html.twig */
class __TwigTemplate_a396579343adde71095cd71763e08271d9e2128f87a64e706b42a2b081d4babd extends Twig_Template
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
        $__internal_01d581677d8a3eb8dd3f8c38bd83d13d270a2e609facba0bc51a97e34ec913b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d581677d8a3eb8dd3f8c38bd83d13d270a2e609facba0bc51a97e34ec913b7->enter($__internal_01d581677d8a3eb8dd3f8c38bd83d13d270a2e609facba0bc51a97e34ec913b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01d581677d8a3eb8dd3f8c38bd83d13d270a2e609facba0bc51a97e34ec913b7->leave($__internal_01d581677d8a3eb8dd3f8c38bd83d13d270a2e609facba0bc51a97e34ec913b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2b952751879ee6ad391fc851749a79e74ac1c0264c07bf18e3cb2fd34ec03c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b952751879ee6ad391fc851749a79e74ac1c0264c07bf18e3cb2fd34ec03c3->enter($__internal_f2b952751879ee6ad391fc851749a79e74ac1c0264c07bf18e3cb2fd34ec03c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_f2b952751879ee6ad391fc851749a79e74ac1c0264c07bf18e3cb2fd34ec03c3->leave($__internal_f2b952751879ee6ad391fc851749a79e74ac1c0264c07bf18e3cb2fd34ec03c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2314ae43d755b1c2446cedf58bbfc4407459152d16cb3e3b65a790e557716a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2314ae43d755b1c2446cedf58bbfc4407459152d16cb3e3b65a790e557716a2->enter($__internal_b2314ae43d755b1c2446cedf58bbfc4407459152d16cb3e3b65a790e557716a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b2314ae43d755b1c2446cedf58bbfc4407459152d16cb3e3b65a790e557716a2->leave($__internal_b2314ae43d755b1c2446cedf58bbfc4407459152d16cb3e3b65a790e557716a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3666c6fe2b2c1d6f23ffcdf914608785ee03b96f7ca18fda1f1f60c2ee63abf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3666c6fe2b2c1d6f23ffcdf914608785ee03b96f7ca18fda1f1f60c2ee63abf3->enter($__internal_3666c6fe2b2c1d6f23ffcdf914608785ee03b96f7ca18fda1f1f60c2ee63abf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3666c6fe2b2c1d6f23ffcdf914608785ee03b96f7ca18fda1f1f60c2ee63abf3->leave($__internal_3666c6fe2b2c1d6f23ffcdf914608785ee03b96f7ca18fda1f1f60c2ee63abf3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1986c36a02ad7388c5cf257d9e37c56a91bf7c083c14bc38e6a4ffe1c996cf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1986c36a02ad7388c5cf257d9e37c56a91bf7c083c14bc38e6a4ffe1c996cf8a->enter($__internal_1986c36a02ad7388c5cf257d9e37c56a91bf7c083c14bc38e6a4ffe1c996cf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_1986c36a02ad7388c5cf257d9e37c56a91bf7c083c14bc38e6a4ffe1c996cf8a->leave($__internal_1986c36a02ad7388c5cf257d9e37c56a91bf7c083c14bc38e6a4ffe1c996cf8a_prof);

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
