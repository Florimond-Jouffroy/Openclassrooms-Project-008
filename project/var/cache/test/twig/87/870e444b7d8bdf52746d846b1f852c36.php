<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_057f927901717a98804cb7ba4e5fa0b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("baseLogin.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 9
        echo "\t<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">

\t\t<div class=\"form-floating mb-3\">
\t\t\t<input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t<label for=\" floatinginput\">Email address</label>
\t\t</div>
\t\t<div class=\"form-floating mb-3\">
\t\t\t<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\" name=\"_password\">
\t\t\t<label for=\"floatingPassword\">Password</label>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<a href=\"#\">Mot de passe oublié ?</a>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" name=\"login\">Se connecter</button>
\t\t<div class=\"mt-4\">
\t\t\t<p>Vous n'avez pas de compte ?
\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_create");
        echo "\">Inscrivez-vous</a>
\t\t\t</p>
\t\t</div>
\t</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  87 => 12,  80 => 9,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseLogin.html.twig' %}

{% block body %}


\t{% if error %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t{% endif %}
\t<form action=\"{{ path('app_login') }}\" method=\"post\">

\t\t<div class=\"form-floating mb-3\">
\t\t\t<input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\" name=\"_username\" value=\"{{ last_username }}\">
\t\t\t<label for=\" floatinginput\">Email address</label>
\t\t</div>
\t\t<div class=\"form-floating mb-3\">
\t\t\t<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\" name=\"_password\">
\t\t\t<label for=\"floatingPassword\">Password</label>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<a href=\"#\">Mot de passe oublié ?</a>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" name=\"login\">Se connecter</button>
\t\t<div class=\"mt-4\">
\t\t\t<p>Vous n'avez pas de compte ?
\t\t\t\t<a href=\"{{path('user_create')}}\">Inscrivez-vous</a>
\t\t\t</p>
\t\t</div>
\t</form>

{% endblock %}
", "security/login.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/security/login.html.twig");
    }
}
