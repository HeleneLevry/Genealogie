<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_91c2002a50b1edeae8530b7225c63f24fb89bd1a7f4662874e2fb39063922502 extends Twig_Template
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
        $__internal_021121842574707776549b8f0df11f8e50b5d3a1e9e960f325296b91967ac54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021121842574707776549b8f0df11f8e50b5d3a1e9e960f325296b91967ac54d->enter($__internal_021121842574707776549b8f0df11f8e50b5d3a1e9e960f325296b91967ac54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));
=======
        $__internal_b1996772ce08c2136a0e2440deaf8844c0bfa2ab2f1f6b93cc9dbf7ff8e41e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1996772ce08c2136a0e2440deaf8844c0bfa2ab2f1f6b93cc9dbf7ff8e41e4e->enter($__internal_b1996772ce08c2136a0e2440deaf8844c0bfa2ab2f1f6b93cc9dbf7ff8e41e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
<<<<<<< HEAD
        $__internal_021121842574707776549b8f0df11f8e50b5d3a1e9e960f325296b91967ac54d->leave($__internal_021121842574707776549b8f0df11f8e50b5d3a1e9e960f325296b91967ac54d_prof);
=======
        $__internal_b1996772ce08c2136a0e2440deaf8844c0bfa2ab2f1f6b93cc9dbf7ff8e41e4e->leave($__internal_b1996772ce08c2136a0e2440deaf8844c0bfa2ab2f1f6b93cc9dbf7ff8e41e4e_prof);
>>>>>>> dad7e77fe42341e214f1ecf6ee30dc3c3b86ede6

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
