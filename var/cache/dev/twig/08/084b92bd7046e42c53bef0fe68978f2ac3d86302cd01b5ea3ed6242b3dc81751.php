<?php

/* default/index.html.twig */
class __TwigTemplate_4c1d1c2cc59438cd88dbb4ae333fe8e5b16b6e0865ca8439b5d226b775ec2f15 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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

        echo "Hello !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "
    <div class=\"home-image-full\">
        <div class=\"container\">
            <div id=\"search\">
                <h2>
                    Un jour j'irai à Chateauroux avec toi !
                </h2>
                <h5>
                    Tous les chemins mènent où vous voulez aller, covoiturez !
                </h5>
                <div id=\"form-search\" class=\"row\">
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">location_on</i>
                            <input class=\"col-10\" type=\"text\" placeholder=\"Départ\">
                        </div>
                    </div>
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">location_on</i>
                            <input class=\"col-10\" type=\"text\" placeholder=\"Arrivée\">
                        </div>
                    </div>
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">date_range</i>
                            <input class=\"col-10\" type=\"date\" placeholder=\"Date\">
                        </div>
                    </div>
                    <div id=\"btn-blue\" class=\"input-search-blue white col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons white col-2\">directions_car</i>
                            <button class=\"button-search \"><span>C'est parti !</span></button>
                        </div>
                    </div>
                    ";
        // line 46
        echo "
                        ";
        // line 48
        echo "                    ";
        // line 49
        echo "                </div>
            </div>
        </div>

    </div>

    <div class=\"container\">

        <article>
            <div class=\"entry_content\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/default/855891006.jpg"), "html", null, true);
        echo "\" alt=\"\">

                    </div>

                    <div class=\"col-md-6 col-sm-12\">
                        <h3>
                            Ta voiture n'est pas une monoplace ?
                        </h3>
                        <p>Partage ta voiture et ton trajet !</p>
                            <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("travel_home");
        echo "\"><button type=\"button\" class=\"button-nav button-blue\" title=\"Proposer un trajet\">
                                    <span>Proposer un trajet</span>
                                </button>
                            </a>
                    </div>


                </div>
            </div>

        </article>


        <article>

            <div class=\"entry_content\">

                <p></p><div class=\"wrapper\" style=\"background-color: #ffffff;\">

                    <div class=\"row \"><div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"><div style=\"height:30px\"></div><div class=\"wrapper  \" style=\"\">

                                <div class=\"row \"><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-building\" style=\"color:;\"></span>

                                            <h3>Faites des économies</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-bookmark-empty\" style=\"color:;\"></span>

                                            <h3>Rencontrez des gens sympas</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-heart-empty\" style=\"color:;\"></span>

                                            <h3>Améliorez vos trajets</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-comment-alt\" style=\"color:;\"></span>

                                            <h3>Soyez libres !</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div></div>

                            </div><div style=\"height:30px\"></div></div></div>

                </div>

            </div>

        </article>



    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  161 => 70,  149 => 61,  135 => 49,  133 => 48,  130 => 46,  93 => 10,  84 => 9,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello !{% endblock %}

{% block body %}

{% endblock %}

{% block main %}

    <div class=\"home-image-full\">
        <div class=\"container\">
            <div id=\"search\">
                <h2>
                    Un jour j'irai à Chateauroux avec toi !
                </h2>
                <h5>
                    Tous les chemins mènent où vous voulez aller, covoiturez !
                </h5>
                <div id=\"form-search\" class=\"row\">
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">location_on</i>
                            <input class=\"col-10\" type=\"text\" placeholder=\"Départ\">
                        </div>
                    </div>
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">location_on</i>
                            <input class=\"col-10\" type=\"text\" placeholder=\"Arrivée\">
                        </div>
                    </div>
                    <div class=\"input-search-white grey col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons grey col-2\">date_range</i>
                            <input class=\"col-10\" type=\"date\" placeholder=\"Date\">
                        </div>
                    </div>
                    <div id=\"btn-blue\" class=\"input-search-blue white col-sm-12 col-md-12 col-lg-3\">
                        <div class=\"input-search-group row\">
                            <i class=\"material-icons white col-2\">directions_car</i>
                            <button class=\"button-search \"><span>C'est parti !</span></button>
                        </div>
                    </div>
                    {#<div class=\"col-sm-12 col-md-12 col-lg-3\">#}

                        {#<button class=\"button-search button-blue\"><i class=\"material-icons\">directions_car</i><span>C'est parti !</span></button>#}
                    {#</div>#}
                </div>
            </div>
        </div>

    </div>

    <div class=\"container\">

        <article>
            <div class=\"entry_content\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                        <img src=\"{{ asset('pictures/default/855891006.jpg') }}\" alt=\"\">

                    </div>

                    <div class=\"col-md-6 col-sm-12\">
                        <h3>
                            Ta voiture n'est pas une monoplace ?
                        </h3>
                        <p>Partage ta voiture et ton trajet !</p>
                            <a href=\"{{ path('travel_home') }}\"><button type=\"button\" class=\"button-nav button-blue\" title=\"Proposer un trajet\">
                                    <span>Proposer un trajet</span>
                                </button>
                            </a>
                    </div>


                </div>
            </div>

        </article>


        <article>

            <div class=\"entry_content\">

                <p></p><div class=\"wrapper\" style=\"background-color: #ffffff;\">

                    <div class=\"row \"><div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"><div style=\"height:30px\"></div><div class=\"wrapper  \" style=\"\">

                                <div class=\"row \"><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-building\" style=\"color:;\"></span>

                                            <h3>Faites des économies</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-bookmark-empty\" style=\"color:;\"></span>

                                            <h3>Rencontrez des gens sympas</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-heart-empty\" style=\"color:;\"></span>

                                            <h3>Améliorez vos trajets</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div><div class=\"col-xs-12 col-xxs-6 col-sm-6 col-md-3 col-lg-3\"><div class=\"blox_element blox_elem_service style1  \">

                                            <span class=\"service_icon icon-comment-alt\" style=\"color:;\"></span>

                                            <h3>Soyez libres !</h3>

                                            <div class=\"service_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>

                                        </div></div></div>

                            </div><div style=\"height:30px\"></div></div></div>

                </div>

            </div>

        </article>



    </div>




{% endblock %}


", "default/index.html.twig", "/var/www/html/papoteCar/templates/default/index.html.twig");
    }
}
