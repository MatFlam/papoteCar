<?php

/* travel/travel_detail.twig */
class __TwigTemplate_b9e1f467178c3b9312dcd8b9373fb103ef25f1f7b7d6220fe558169bf1690df7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "travel/travel_detail.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travel/travel_detail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travel/travel_detail.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "information du trajet ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"panel panel-info\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 9, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 11
        if ((isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            <div class=\"active\">Date de création de l'annonce: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 12, $this->source); })()), "datecreated", array())), "html", null, true);
            echo "</div>
            <div class=\"btn\"> Titre de l'annonce </div>:<div class=\"btn btn-1\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 13, $this->source); })()), "title", array()), "html", null, true);
            echo "</div><br>
            <div class=\"btn\"> Auteur </div>:<div class=\"btn btn-1\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 14, $this->source); })()), "userid", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 14, $this->source); })()), "userid", array()), "name", array())), "html", null, true);
            echo "</div><br>
            <div class=\"btn\"> Ville de départ </div>:<div class=\"btn btn-1\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 15, $this->source); })()), "startcity", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 15, $this->source); })()), "endzipcode", array()), "html", null, true);
            echo "</div><br>
            <div class=\"btn\"> Heure de départ </div>:<div class=\"btn btn-1\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 16, $this->source); })()), "starthour", array())), "html", null, true);
            echo "</div><br>
            -------<br>
            <div class=\"btn\"> Ville d'arrivée </div>:<div class=\"btn btn-1\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 18, $this->source); })()), "endaddress", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 18, $this->source); })()), "endcity", array()), "html", null, true);
            echo "</div><br>
            <div class=\"btn\"> Prix du trajet </div>:<div class=\"btn btn-1\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["travelDetail"]) || array_key_exists("travelDetail", $context) ? $context["travelDetail"] : (function () { throw new Twig_Error_Runtime('Variable "travelDetail" does not exist.', 19, $this->source); })()), "price", array()), "html", null, true);
            echo " Euros</div><br>

            <hr>
    ";
        } else {
            // line 23
            echo "        <div class=\"btn btn-error\">There are actually no travel</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "travel/travel_detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 23,  135 => 19,  129 => 18,  124 => 16,  118 => 15,  112 => 14,  108 => 13,  103 => 12,  101 => 11,  96 => 9,  93 => 8,  84 => 7,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}information du trajet {% endblock %}
{% block stylesheets %}

{% endblock %}
{% block main %}
    <div class=\"panel panel-info\">
        <h1>{{ travelDetail.title }}</h1>
    </div>
    {% if travelDetail %}
            <div class=\"active\">Date de création de l'annonce: {{ travelDetail.datecreated|date }}</div>
            <div class=\"btn\"> Titre de l'annonce </div>:<div class=\"btn btn-1\">{{ travelDetail.title }}</div><br>
            <div class=\"btn\"> Auteur </div>:<div class=\"btn btn-1\">{{ travelDetail.userid.firstname }} {{ travelDetail.userid.name|upper }}</div><br>
            <div class=\"btn\"> Ville de départ </div>:<div class=\"btn btn-1\">{{ travelDetail.startcity }} {{ travelDetail.endzipcode }}</div><br>
            <div class=\"btn\"> Heure de départ </div>:<div class=\"btn btn-1\">{{ travelDetail.starthour|date }}</div><br>
            -------<br>
            <div class=\"btn\"> Ville d'arrivée </div>:<div class=\"btn btn-1\">{{ travelDetail.endaddress }} {{ travelDetail.endcity }}</div><br>
            <div class=\"btn\"> Prix du trajet </div>:<div class=\"btn btn-1\">{{ travelDetail.price }} Euros</div><br>

            <hr>
    {% else %}
        <div class=\"btn btn-error\">There are actually no travel</div>
    {% endif %}
{% endblock %}
", "travel/travel_detail.twig", "/var/www/html/papoteCar/templates/travel/travel_detail.twig");
    }
}
