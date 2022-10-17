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

/* default/index.html.twig */
class __TwigTemplate_6ca776d60c39cccd712528cb34f28bb0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t<div class=\"row\">

\t\t<div class=\"col-lg-6 col-sm-12\">
\t\t\t<div class=\"d-grid gap-2\" style=\"margin-top: 45px;\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
        echo "\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_list");
        echo "\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
\t\t\t\t<a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6 col-sm-12\" id=\"indexTasks\">
\t\t\t<h2>Vos 3 dernieres tâches :</h2>
\t\t\t";
        // line 16
        $this->loadTemplate("/partials/_taskList.html.twig", "default/index.html.twig", 16)->display($context);
        // line 17
        echo "\t\t</div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  69 => 16,  60 => 10,  56 => 9,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "/home/florimond/code/Florimond-Jouffroy/Openclassrooms-Project-008/templates/default/index.html.twig");
    }
}
