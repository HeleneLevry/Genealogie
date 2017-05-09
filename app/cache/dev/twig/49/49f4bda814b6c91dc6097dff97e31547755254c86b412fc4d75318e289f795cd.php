<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_820299f6603ce3fd2b624da86aaebf192885e06a63a0fba9ad407323c26de263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "UserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f7148acc5cc918de134c8142ad10ef7f9bfca39e3312bf43e37d20d249df3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7148acc5cc918de134c8142ad10ef7f9bfca39e3312bf43e37d20d249df3ae->enter($__internal_9f7148acc5cc918de134c8142ad10ef7f9bfca39e3312bf43e37d20d249df3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7148acc5cc918de134c8142ad10ef7f9bfca39e3312bf43e37d20d249df3ae->leave($__internal_9f7148acc5cc918de134c8142ad10ef7f9bfca39e3312bf43e37d20d249df3ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_938ed316bbf2ccc7d6d662b648478588cac16f29454321161d60e96291876594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938ed316bbf2ccc7d6d662b648478588cac16f29454321161d60e96291876594->enter($__internal_938ed316bbf2ccc7d6d662b648478588cac16f29454321161d60e96291876594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "UserBundle:Security:login.html.twig"));

        // line 6
        echo "
\t";
        // line 8
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "\t\t<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 11
        echo "\t
\t";
        // line 13
        echo "\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
\t\t<label for=\"username\">Login :</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t<label for=\"password\">Mot de passe :</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t<br />
\t\t<input type=\"submit\" value=\"Connexion\" />
\t</form>

";
        
        $__internal_938ed316bbf2ccc7d6d662b648478588cac16f29454321161d60e96291876594->leave($__internal_938ed316bbf2ccc7d6d662b648478588cac16f29454321161d60e96291876594_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 13,  52 => 11,  46 => 9,  43 => 8,  40 => 6,  34 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/UserBundle/Resources/views/Security/login.html.twg #}

{% extends \"::layout.html.twig\" %}

{% block body %}

\t{# S'il y a une erreur, on l'affiche dans un cadre #}
\t{% if error %}
\t\t<div class=\"alert alert-error\">{{ error.message }}</div>
\t{% endif %}
\t
\t{# Le formulaire, avec URL de soumission vers la route \"login_check\" #}
\t<form action=\"{{ path('login_check') }}\" method=\"post\">
\t\t<label for=\"username\">Login :</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
\t\t<label for=\"password\">Mot de passe :</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t<br />
\t\t<input type=\"submit\" value=\"Connexion\" />
\t</form>

{% endblock %}
", "UserBundle:Security:login.html.twig", "/var/www/genealogie/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
