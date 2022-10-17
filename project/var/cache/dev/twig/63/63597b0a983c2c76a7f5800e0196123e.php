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

/* partials/_taskList.html.twig */
class __TwigTemplate_ff310ec3d99fa1847676680cc134243b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_taskList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_taskList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 2
            echo "

\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title text-capitalize\">
\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t\t<i class=\"bi bi-check-circle-fill\"></i>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "
\t\t\t</h5>
\t\t\t<p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
\t\t</div>

\t\t<div class=\"card-footer\">
\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t<form action=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-success btn-sm pull-right\" name=\"toggleTask\">
\t\t\t\t\t\t";
            // line 19
            if ( !twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t\t\tMarquer comme faite
\t\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t\tMarquer non terminée
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm pull-right mx-1\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t<path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-danger btn-sm pull-right\" name=\"deleteTask\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_taskList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  93 => 26,  89 => 24,  85 => 22,  81 => 20,  79 => 19,  74 => 17,  66 => 12,  60 => 10,  56 => 8,  54 => 7,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for task in tasks %}


\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title text-capitalize\">
\t\t\t\t{% if task.isDone %}
\t\t\t\t\t<i class=\"bi bi-check-circle-fill\"></i>
\t\t\t\t{% endif %}
\t\t\t\t{{ task.title }}
\t\t\t</h5>
\t\t\t<p class=\"card-text\">{{ task.content }}</p>
\t\t</div>

\t\t<div class=\"card-footer\">
\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t<form action=\"{{ path('task_toggle', {'id' : task.id }) }}\">
\t\t\t\t\t<button class=\"btn btn-success btn-sm pull-right\" name=\"toggleTask\">
\t\t\t\t\t\t{% if not task.isDone %}
\t\t\t\t\t\t\tMarquer comme faite
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tMarquer non terminée
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t<a href=\"{{ path('task_edit', {'id' : task.id }) }}\" class=\"btn btn-primary btn-sm pull-right mx-1\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t<path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<form action=\"{{ path('task_delete', {'id' : task.id }) }}\">
\t\t\t\t\t<button class=\"btn btn-danger btn-sm pull-right\" name=\"deleteTask\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


{% endfor %}
", "partials/_taskList.html.twig", "/var/www/templates/partials/_taskList.html.twig");
    }
}
