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

/* partials/_footer.html.twig */
class __TwigTemplate_3c9f903b5f7eb32fc3b00aa705b58776 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
\t<hr>
\t<footer>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<p class=\"pull-right\">Copyright &copy; OpenClassrooms</p>
\t\t\t</div>
\t\t</div>
\t</footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_footer.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/partials/_footer.html.twig");
    }
}
