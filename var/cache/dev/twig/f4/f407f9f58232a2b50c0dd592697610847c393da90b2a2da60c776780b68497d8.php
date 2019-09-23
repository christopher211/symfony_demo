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

/* product/list.html.twig */
class __TwigTemplate_9c5ff95b8c273d6ed4643e0eb7774566acb98f83583f1bae415b04f77c37aff6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/list.html.twig", 1);
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
        <div class=\"list-product\" :class=\"{'open': formOpen}\">
            <div class=\"button-copy\" v-show=\"!formOpen\" @click=\"formOpen = true\">Show Product</div>
            <form @submit=\"cancel()\" action=\"\" method=\"\">

                <div class=\"row bottom-line-red text-center\">
                    <div class=\"col-md-3\">
                        <label>Product Title</label>
                    </div>
                    <div class=\"col-md-2\">
                        <label>Product Price</label>
                    </div>
                    <div class=\"col-md-3\">
                        <label>Product Rating</label>
                    </div>
                    <div class=\"col-md-4\">
                        <label>Product Description</label>
                    </div>
                </div>

                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "                <div class=\"form--field row text-center\">
                    <div class=\"col-md-3\">
                        <label>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), $context["i"], [], "array", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-md-2\">
                        <label>\$ ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), $context["i"], [], "array", false, false, false, 30), "price", [], "any", false, false, false, 30), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-md-3\">
                        <label>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), $context["i"], [], "array", false, false, false, 33), "rating", [], "any", false, false, false, 33), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"col-md-4\">
                        <label>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</label>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 42
        echo "                <div class=\"text-center\">
                    <a type=\"button\" class=\"btn btn-primary\" href=\"/product/add-product\">Add Product</a>
                </div>
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
        return "product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  126 => 40,  116 => 36,  110 => 33,  104 => 30,  98 => 27,  94 => 25,  90 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\" id=\"app\">
        <div class=\"list-product\" :class=\"{'open': formOpen}\">
            <div class=\"button-copy\" v-show=\"!formOpen\" @click=\"formOpen = true\">Show Product</div>
            <form @submit=\"cancel()\" action=\"\" method=\"\">

                <div class=\"row bottom-line-red text-center\">
                    <div class=\"col-md-3\">
                        <label>Product Title</label>
                    </div>
                    <div class=\"col-md-2\">
                        <label>Product Price</label>
                    </div>
                    <div class=\"col-md-3\">
                        <label>Product Rating</label>
                    </div>
                    <div class=\"col-md-4\">
                        <label>Product Description</label>
                    </div>
                </div>

                {% for i in range(0, (product|length - 1)) %}
                <div class=\"form--field row text-center\">
                    <div class=\"col-md-3\">
                        <label>{{ product[i].name }}</label>
                    </div>
                    <div class=\"col-md-2\">
                        <label>\$ {{ product[i].price }}</label>
                    </div>
                    <div class=\"col-md-3\">
                        <label>{{ product[i].rating }}</label>
                    </div>
                    <div class=\"col-md-4\">
                        <label>{{ product[i].description }}</label>
                    </div>
                </div>
                {% endfor %}

{#                <button type=\"submit\" class=\"submit-button\">Add Product</button>#}
                <div class=\"text-center\">
                    <a type=\"button\" class=\"btn btn-primary\" href=\"/product/add-product\">Add Product</a>
                </div>
                <div class=\"cancel\"><span @click=\"cancel()\">Cancel</span></div>
            </form>
        </div>
    </div>
{% endblock %}", "product/list.html.twig", "/home/user/Documents/Symfony Project/first_project/templates/product/list.html.twig");
    }
}
