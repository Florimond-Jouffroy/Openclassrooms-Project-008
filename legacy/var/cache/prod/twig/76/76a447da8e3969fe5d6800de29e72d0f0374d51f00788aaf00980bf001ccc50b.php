<?php

/* base.html.twig */
class __TwigTemplate_c8f0519e69d717ec0cf14b1e5939eb396ac4c9bee0065cdfb2446d1ecb50d2af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>To Do List app</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <nav class=\"navbar navbar-light navbar-fixed-top\" style=\"background-color: #e3f2fd;\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">To Do List app</a>

                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Logo_OpenClassrooms.png"), "html", null, true);
        echo "\" alt=\"OpenClassrooms\" />
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create");
        echo "\" class=\"btn btn-primary\">Créer un utilisateur</a>

                ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 44
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"pull-right btn btn-danger\">Se déconnecter</a>
                ";
        }
        // line 46
        echo "
                ";
        // line 47
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ("login" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")))) {
            // line 48
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-success\">Se connecter</a>
                ";
        }
        // line 50
        echo "            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            <strong>Superbe !</strong> ";
            // line 56
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <strong>Oops !</strong> ";
            // line 62
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                    ";
        // line 66
        $this->displayBlock('header_title', $context, $blocks);
        // line 67
        echo "                    ";
        $this->displayBlock('header_img', $context, $blocks);
        // line 68
        echo "                </div>
            </div>

            <br />

            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class=\"container\">

            <hr>
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p class=\"pull-right\">Copyright &copy; OpenClassrooms</p>
                    </div>
                </div>
            </footer>

        </div>

        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 66
    public function block_header_title($context, array $blocks = array())
    {
    }

    // line 67
    public function block_header_img($context, array $blocks = array())
    {
        echo "<img class=\"slide-image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/todolist_homepage.jpg"), "html", null, true);
        echo "\" alt=\"todo list\">";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
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
        return array (  202 => 75,  194 => 67,  189 => 66,  181 => 95,  177 => 94,  157 => 76,  155 => 75,  146 => 68,  143 => 67,  141 => 66,  138 => 65,  129 => 62,  126 => 61,  122 => 60,  119 => 59,  110 => 56,  107 => 55,  103 => 54,  97 => 50,  91 => 48,  89 => 47,  86 => 46,  80 => 44,  78 => 43,  73 => 41,  62 => 33,  43 => 17,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/app/Resources/views/base.html.twig");
    }
}
