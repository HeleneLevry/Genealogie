<?php

/* ::layout.html.twig */
class __TwigTemplate_4cbb912ae1e072cb0558706cb9976ea32d6adde89c93e86853e175994f16d1a0 extends Twig_Template
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
        $__internal_4d1eeb14244e05f7ee5b44e960658f69b48bd21402ed6f006cf0870e6a732468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1eeb14244e05f7ee5b44e960658f69b48bd21402ed6f006cf0870e6a732468->enter($__internal_4d1eeb14244e05f7ee5b44e960658f69b48bd21402ed6f006cf0870e6a732468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t</head>
\t
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1> Mon Projet Symfony2 </h1>
\t\t\t\t<p> Ce projet est propulsé par Symfony2, et contruit grace au tuto </p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfon2\">
\t\t\t\tLire le tutoriel >>
\t\t\t\t</a></p>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_accueil");
        echo "\"> Accueil du blog </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_ajouter");
        echo "\"> Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr>
\t\t\t
\t\t\t<footer>
\t\t\t\t<p>The sky's the limit. </p>
\t\t\t</footer>
\t\t</div>
\t\t
\t";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t\t
\t\t
\t</body>
</html>
";
        
        $__internal_4d1eeb14244e05f7ee5b44e960658f69b48bd21402ed6f006cf0870e6a732468->leave($__internal_4d1eeb14244e05f7ee5b44e960658f69b48bd21402ed6f006cf0870e6a732468_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b2ad1f7f8f3137a6e8ce9802e6f25108eeadbf434b0c6d21aa36e172815d3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2ad1f7f8f3137a6e8ce9802e6f25108eeadbf434b0c6d21aa36e172815d3ce->enter($__internal_1b2ad1f7f8f3137a6e8ce9802e6f25108eeadbf434b0c6d21aa36e172815d3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "SdzBlog";
        
        $__internal_1b2ad1f7f8f3137a6e8ce9802e6f25108eeadbf434b0c6d21aa36e172815d3ce->leave($__internal_1b2ad1f7f8f3137a6e8ce9802e6f25108eeadbf434b0c6d21aa36e172815d3ce_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ffd852329489ed616ebf34577f9516d447c8c248c42fcc277e7adc20ad899a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffd852329489ed616ebf34577f9516d447c8c248c42fcc277e7adc20ad899a3->enter($__internal_0ffd852329489ed616ebf34577f9516d447c8c248c42fcc277e7adc20ad899a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 10
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
        
        $__internal_0ffd852329489ed616ebf34577f9516d447c8c248c42fcc277e7adc20ad899a3->leave($__internal_0ffd852329489ed616ebf34577f9516d447c8c248c42fcc277e7adc20ad899a3_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7aa629aecd06860c83211a2af8d82606c65093e649c817e1645968bc5080f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7aa629aecd06860c83211a2af8d82606c65093e649c817e1645968bc5080f2b->enter($__internal_e7aa629aecd06860c83211a2af8d82606c65093e649c817e1645968bc5080f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 35
        echo "\t\t\t\t\t";
        
        $__internal_e7aa629aecd06860c83211a2af8d82606c65093e649c817e1645968bc5080f2b->leave($__internal_e7aa629aecd06860c83211a2af8d82606c65093e649c817e1645968bc5080f2b_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be7606065e5ea85e11bcba7af9a43f6d035c228a4add0e0173d796a8b9487cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7606065e5ea85e11bcba7af9a43f6d035c228a4add0e0173d796a8b9487cbc->enter($__internal_be7606065e5ea85e11bcba7af9a43f6d035c228a4add0e0173d796a8b9487cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 47
        echo "\t\t";
        // line 48
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" scr=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_be7606065e5ea85e11bcba7af9a43f6d035c228a4add0e0173d796a8b9487cbc->leave($__internal_be7606065e5ea85e11bcba7af9a43f6d035c228a4add0e0173d796a8b9487cbc_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  149 => 48,  147 => 47,  141 => 46,  134 => 35,  128 => 34,  118 => 10,  112 => 9,  100 => 7,  89 => 50,  87 => 46,  75 => 36,  73 => 34,  67 => 31,  61 => 28,  57 => 27,  40 => 12,  38 => 9,  33 => 7,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>{% block title %}SdzBlog{% endblock %}</title>
\t\t
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" type=\"text/css\" />
\t\t{% endblock %}
\t</head>
\t
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1> Mon Projet Symfony2 </h1>
\t\t\t\t<p> Ce projet est propulsé par Symfony2, et contruit grace au tuto </p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfon2\">
\t\t\t\tLire le tutoriel >>
\t\t\t\t</a></p>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"{{ path('sdzblog_accueil') }}\"> Accueil du blog </a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('sdzblog_ajouter') }}\"> Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t{{ render(controller(\"SdzBlogBundle:Blog:menu\",{'nombre':3})) }}
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t{% block body %}
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr>
\t\t\t
\t\t\t<footer>
\t\t\t\t<p>The sky's the limit. </p>
\t\t\t</footer>
\t\t</div>
\t\t
\t{% block javascripts %}
\t\t{# Bootstrap Twitter #}
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" scr=\"{{ asset('js/bootstrap.js') }}\"></script>
\t{% endblock %}\t\t
\t\t
\t</body>
</html>
", "::layout.html.twig", "/var/www/genealogie/app/Resources/views/layout.html.twig");
    }
}
