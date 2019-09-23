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

/* product/index.html.twig */
class __TwigTemplate_04f9dcd2ee5aef34564791a8fcce8a01da20d2652a72535c5325e7552ad2af3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Product name' placeholder='Type your product name'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Price' placeholder='Type product price'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='number' min=\"0\" max=\"5\" step=\"0.5\">
                    <label alt='Rating' placeholder='Rate'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Description' placeholder='Type product description'></label>
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
        return "product/index.html.twig";
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

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Product name' placeholder='Type your product name'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Price' placeholder='Type product price'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='number' min=\"0\" max=\"5\" step=\"0.5\">
                    <label alt='Rating' placeholder='Rate'></label>
                </div>

                <div class=\"row\">
                    <input required='' type='text'>
                    <label alt='Description' placeholder='Type product description'></label>
                </div>

                <button type=\"submit\" class=\"submit-button\">Add Product</button>
                <div class=\"cancel\"><span @click=\"cancel()\">Cancel</span></div>
            </form>
        </div>
    </div>
{% endblock %}", "product/index.html.twig", "/home/user/Documents/Symfony Project/first_project/templates/product/index.html.twig");
    }
}
