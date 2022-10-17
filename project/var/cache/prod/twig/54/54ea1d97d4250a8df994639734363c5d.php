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

/* base.html.twig */
class __TwigTemplate_4fc32d9f57abe2f5d941a65ad1432fbc extends Template
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
        // line 17
        $this->loadTemplate("partials/_navbar.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "\t\t";
        $this->loadTemplate("partials/_message.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "
\t\t<!-- Page Content -->
\t\t<div class=\"container\">
\t\t\t<div>
\t\t\t\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 26
        $this->loadTemplate("partials/_footer.html.twig", "base.html.twig", 26)->display($context);
        // line 27
        echo "

\t</body>
</html>
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

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  119 => 23,  112 => 13,  108 => 12,  101 => 10,  97 => 9,  89 => 6,  81 => 27,  79 => 26,  75 => 24,  73 => 23,  67 => 19,  64 => 18,  62 => 17,  58 => 15,  55 => 12,  53 => 9,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/base.html.twig");
    }
}
