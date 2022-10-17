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

/* user/create.html.twig */
class __TwigTemplate_4a3c655d233ce62501a6c8903cd7d5e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_title' => [$this, 'block_header_title'],
            'header_img' => [$this, 'block_header_img'],
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
        $this->parent = $this->loadTemplate("baseLogin.html.twig", "user/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Créer un utilisateur</h1>
";
    }

    // line 6
    public function block_header_img($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<div class=\"row\">
\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

\t\t<button type=\"submit\" class=\"btn btn-success pull-right\" name=\"addUser\">S'inscrire</button>
\t\t<div class=\"mt-4\">
\t\t\t<p>Vous êtes déjà inscrit ?
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous !</a>
\t\t\t</p>

\t\t</div>
\t\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 16,  74 => 11,  70 => 10,  67 => 9,  63 => 8,  57 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/create.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/user/create.html.twig");
    }
}
