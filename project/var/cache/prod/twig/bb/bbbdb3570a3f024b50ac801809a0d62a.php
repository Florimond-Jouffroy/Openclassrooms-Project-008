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
class __TwigTemplate_d1d2ce00ace341116404ecd3b7b7e303 extends Template
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
        $this->parent = $this->loadTemplate("baseLogin.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

\t";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  85 => 25,  69 => 12,  62 => 9,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/security/login.html.twig");
    }
}
