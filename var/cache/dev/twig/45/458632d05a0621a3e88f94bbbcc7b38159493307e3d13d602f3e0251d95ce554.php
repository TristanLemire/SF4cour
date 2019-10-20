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

/* _template.html.twig */
class __TwigTemplate_8274f59f743eb820490ab4a2511f6a618261665a876e175f68ee1c7ed4debbee extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_template.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "_template.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar has-background-grey-darker is-dark\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                <p class=\"subtitle is-4 has-text-primary\">
                    <i class=\"fab fa-korvue\"></i><b>RITIK</b>
                </p>
            </a>
            <a role=\"button\" class=\"navbar-burger burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
                <span aria-hidden=\"true\"></span>
                <span aria-hidden=\"true\"></span>
                <span aria-hidden=\"true\"></span>
            </a>
        </div>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list");
        echo ">
                    Artistes
                </a>
                <a class=\"navbar-item\" href=";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking");
        echo ">
                    Nouveautés
                </a>
            </div>
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary is-small\" href=\"#\">
                            <strong>Inscription</strong>
                        </a>
                        <a class=\"button is-light is-small\" href=\"#\">
                            Connexion
                        </a>
                    </div>
                </div>
                <a class=\"navbar-item\">
                    <form action=\"#\">
                        <div class=\"field has-addons\">
                            <div class=\"control is-expanded\">
                                <input name=\"query\" type=\"text\" class=\"input is-small\" placeholder=\"Recherche ...\" required>
                            </div>
                            <div class=\"control\">
                                <button type=\"submit\" class=\"button is-primary is-small\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </a>
            </div>
        </div>
    </nav>
    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  95 => 22,  89 => 19,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <nav class=\"navbar has-background-grey-darker is-dark\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" href=\"{{ path('homepage') }}\">
                <p class=\"subtitle is-4 has-text-primary\">
                    <i class=\"fab fa-korvue\"></i><b>RITIK</b>
                </p>
            </a>
            <a role=\"button\" class=\"navbar-burger burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
                <span aria-hidden=\"true\"></span>
                <span aria-hidden=\"true\"></span>
                <span aria-hidden=\"true\"></span>
            </a>
        </div>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href={{ path('list') }}>
                    Artistes
                </a>
                <a class=\"navbar-item\" href={{ path('ranking') }}>
                    Nouveautés
                </a>
            </div>
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary is-small\" href=\"#\">
                            <strong>Inscription</strong>
                        </a>
                        <a class=\"button is-light is-small\" href=\"#\">
                            Connexion
                        </a>
                    </div>
                </div>
                <a class=\"navbar-item\">
                    <form action=\"#\">
                        <div class=\"field has-addons\">
                            <div class=\"control is-expanded\">
                                <input name=\"query\" type=\"text\" class=\"input is-small\" placeholder=\"Recherche ...\" required>
                            </div>
                            <div class=\"control\">
                                <button type=\"submit\" class=\"button is-primary is-small\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </a>
            </div>
        </div>
    </nav>
    {% block content %}{% endblock %}
{% endblock %}", "_template.html.twig", "/Users/tristanlemire/Desktop/symphony-projets/sf4/templates/_template.html.twig");
    }
}
