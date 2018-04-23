<?php

/* user/emailRegister.html.twig */
class __TwigTemplate_db6fc73e489f7549c2c5e0cc8e340e1318cf84a5638d059b0493cadb43fa0956 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/emailRegister.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/emailRegister.html.twig"));

        // line 1
        echo "
<h3>You did it! You registered!</h3>

<h1>Hi ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "! You're successfully registered to the most beautifull website of the world</h1>

Pour valider votre inscription sur le plus beau site du monde, cliquez sur ce lien:
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</a>

Thanks!

<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\" alt=\"Image Description\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/emailRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h3>You did it! You registered!</h3>

<h1>Hi {{ name }}! You're successfully registered to the most beautifull website of the world</h1>

Pour valider votre inscription sur le plus beau site du monde, cliquez sur ce lien:
<a href=\"{{ url }}\">{{ url }}</a>

Thanks!

<img src=\"{{ image }}\" alt=\"Image Description\">
", "user/emailRegister.html.twig", "/var/www/html/papoteCar/templates/user/emailRegister.html.twig");
    }
}
