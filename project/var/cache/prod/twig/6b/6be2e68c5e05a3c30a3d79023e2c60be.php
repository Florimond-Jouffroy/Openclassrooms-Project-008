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

/* baseLogin.html.twig */
class __TwigTemplate_abb16a23affef8d6062d536917fb98e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "\t</head>
\t<body>

\t\t";
        // line 18
        $this->loadTemplate("partials/_navbar.html.twig", "baseLogin.html.twig", 18)->display($context);
        // line 19
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row flex align-items-top\">
\t\t\t\t<div class=\"col-lg-6 col-sm-12\">
\t\t\t\t\t<h1 class=\"mb-5\">Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-sm-12\"> ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</body>
\t</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!
\t\t\t";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "baseLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  108 => 13,  104 => 12,  97 => 10,  93 => 9,  85 => 6,  75 => 26,  73 => 25,  65 => 19,  63 => 18,  58 => 15,  55 => 12,  53 => 9,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseLogin.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/baseLogin.html.twig");
    }
}
