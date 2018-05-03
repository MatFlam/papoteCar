<?php

/* comment/alerteOffense.html.twig */
class __TwigTemplate_d85893fd66c5ee5c890efe761e5e9cfd3550ec2000fe05639c639a14c3fc6482 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/alerteOffense.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/alerteOffense.html.twig"));

        // line 1
        echo "<h1>Un de vos commentaires a été supprimé</h1>

<p>Le ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 3, $this->source); })()), "date", array()), "d m Y"), "html", null, true);
        echo " à propos de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 3, $this->source); })()), "usertargetid", array()), "html", null, true);
        echo "</p>

<p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 5, $this->source); })()), "content", array()), "html", null, true);
        echo "</p>

<p>Raison : contenu ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offense"]) || array_key_exists("offense", $context) ? $context["offense"] : (function () { throw new Twig_Error_Runtime('Variable "offense" does not exist.', 7, $this->source); })()), "type", array()), "html", null, true);
        echo "</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "comment/alerteOffense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Un de vos commentaires a été supprimé</h1>

<p>Le {{ comment.date|date('d m Y') }} à propos de {{ comment.usertargetid }}</p>

<p>{{ comment.content }}</p>

<p>Raison : contenu {{ offense.type }}</p>", "comment/alerteOffense.html.twig", "/var/www/html/papoteCar/templates/comment/alerteOffense.html.twig");
    }
}
