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

/* task/new.html.twig */
class __TwigTemplate_73457730a5f8ff6e380aaca23f229969d99cf748029d8f92c77dc1d00f27b85f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
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
        echo "    <div class=\"container\" id=\"app\">
        <div class=\"add-product\" :class=\"{'open': formOpen}\">
            <div class=\"button-copy\" v-show=\"!formOpen\" @click=\"formOpen = true\">Add Product</div>
            <form @submit=\"cancel()\" action=\"asset{}\" method=\"POST\">

                <div class=\"form--field\">
                    <label>Product Title *</label>
                    <input type=\"text\" class=\"form--element\" name=\"title\" v-model=\"productData.title\" placeholder=\"Title\" required=\"\">
                </div>
                <div class=\"form--container -inline\">
                    <div class=\"form--field -short\">
                        <label>Product Rating *</label>
                        <input type=\"number\" class=\"form--element\" name=\"rating\" v-model=\"productData.rating\" placeholder=\"Rating\" required=\"\" min=\"0\" max=\"5\" step=\"0.5\">
                    </div>
                    <div class=\"form--field -short\">
                        <label>Product Price *</label>
                        <span class=\"form--price\">\$</span>
                        <input type=\"text\" class=\"form--element\" name=\"price\" v-model=\"productData.price\" placeholder=\"Price\" required=\"\" min=\"0\" max=\"500\" pattern=\"\\d+(\\.\\d{2})?\">
                    </div>
                </div>
                <div class=\"form--field\">
                </div>
                <div class=\"form--field\">
                    <label>Product Description</label>
                    <textarea class=\"form--element textarea\" v-model=\"productData.description\" placeholder=\"Description\">
                    </textarea>
                </div>

                <button type=\"submit\" class=\"submit-button\">Add Product</button>
                <div class=\"cancel\"><span @click=\"cancel()\">Cancel</span></div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\" id=\"app\">
        <div class=\"add-product\" :class=\"{'open': formOpen}\">
            <div class=\"button-copy\" v-show=\"!formOpen\" @click=\"formOpen = true\">Add Product</div>
            <form @submit=\"cancel()\" action=\"asset{}\" method=\"POST\">

                <div class=\"form--field\">
                    <label>Product Title *</label>
                    <input type=\"text\" class=\"form--element\" name=\"title\" v-model=\"productData.title\" placeholder=\"Title\" required=\"\">
                </div>
                <div class=\"form--container -inline\">
                    <div class=\"form--field -short\">
                        <label>Product Rating *</label>
                        <input type=\"number\" class=\"form--element\" name=\"rating\" v-model=\"productData.rating\" placeholder=\"Rating\" required=\"\" min=\"0\" max=\"5\" step=\"0.5\">
                    </div>
                    <div class=\"form--field -short\">
                        <label>Product Price *</label>
                        <span class=\"form--price\">\$</span>
                        <input type=\"text\" class=\"form--element\" name=\"price\" v-model=\"productData.price\" placeholder=\"Price\" required=\"\" min=\"0\" max=\"500\" pattern=\"\\d+(\\.\\d{2})?\">
                    </div>
                </div>
                <div class=\"form--field\">
                </div>
                <div class=\"form--field\">
                    <label>Product Description</label>
                    <textarea class=\"form--element textarea\" v-model=\"productData.description\" placeholder=\"Description\">
                    </textarea>
                </div>

                <button type=\"submit\" class=\"submit-button\">Add Product</button>
                <div class=\"cancel\"><span @click=\"cancel()\">Cancel</span></div>
            </form>
        </div>
    </div>
{% endblock %}", "task/new.html.twig", "/home/user/Documents/Symfony Project/first_project/templates/task/new.html.twig");
    }
}
