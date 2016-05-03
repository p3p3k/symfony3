<?php

/* :nhl:details.html.twig */
class __TwigTemplate_87e7d84f6a158787cb4223900941d56e33acec68ab7a968a874c6d90bfb57f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nhl:details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_839f85bf1c068efedecb52265761b509742e74bbcdea0f1e96dc9552eac17050 = $this->env->getExtension("native_profiler");
        $__internal_839f85bf1c068efedecb52265761b509742e74bbcdea0f1e96dc9552eac17050->enter($__internal_839f85bf1c068efedecb52265761b509742e74bbcdea0f1e96dc9552eac17050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nhl:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_839f85bf1c068efedecb52265761b509742e74bbcdea0f1e96dc9552eac17050->leave($__internal_839f85bf1c068efedecb52265761b509742e74bbcdea0f1e96dc9552eac17050_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d38d2357525630a482ad55ecb979a592dc87b69476eb31fb449210f69f8533 = $this->env->getExtension("native_profiler");
        $__internal_85d38d2357525630a482ad55ecb979a592dc87b69476eb31fb449210f69f8533->enter($__internal_85d38d2357525630a482ad55ecb979a592dc87b69476eb31fb449210f69f8533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("nhl_articles");
        echo "\">Back To Articles</a>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) + 1))), "html", null, true);
        echo "\" class=\"btn btn-success\">Next</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) - 1))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Previous</a>

    <hr>
    <h2 class=\"page-header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "ArticleName", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Author name: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Author email: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "AuthorEmail", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Created at:<strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "DueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong> </li>
    </ul>
    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "description", array()), "html", null, true);
        echo "
    </p>

    ";
        // line 20
        if (($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) > 1)) {
            // line 21
            echo "        <div class=\"pagination\">
        <ul class=\"pagination pagination-sm\">
        ";
            // line 24
            echo "        <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) - 1))), "html", null, true);
            echo "\" class=\"btn btn-primary\">«</a>
        </li>

            ";
            // line 29
            echo "            <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 7)) ? ("class=\"disabled\"") : (""));
            echo ">
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) + 1))), "html", null, true);
            echo "\" class=\"btn btn-success\">»</a>
            </li>
        </ul>
        </div>
    ";
        }
        // line 35
        echo "


";
        
        $__internal_85d38d2357525630a482ad55ecb979a592dc87b69476eb31fb449210f69f8533->leave($__internal_85d38d2357525630a482ad55ecb979a592dc87b69476eb31fb449210f69f8533_prof);

    }

    public function getTemplateName()
    {
        return ":nhl:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  106 => 30,  101 => 29,  95 => 25,  90 => 24,  86 => 21,  84 => 20,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  55 => 9,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="{{ path('nhl_articles') }}">Back To Articles</a>*/
/*     <a href="{{ path('nhl_details',{'id':nhl.id+1}) }}" class="btn btn-success">Next</a>*/
/*     <a href="{{ path('nhl_details',{'id':nhl.id-1}) }}" class="btn btn-primary">Previous</a>*/
/* */
/*     <hr>*/
/*     <h2 class="page-header">{{ nhl.ArticleName }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ nhl.category }}</li>*/
/*         <li class="list-group-item">Author name: {{ nhl.name }}</li>*/
/*         <li class="list-group-item">Author email: {{ nhl.AuthorEmail }}</li>*/
/*         <li class="list-group-item">Created at:<strong>{{ nhl.DueDate|date('F j, Y, g:i a') }}</strong> </li>*/
/*     </ul>*/
/*     <p>*/
/*         {{ nhl.description }}*/
/*     </p>*/
/* */
/*     {% if nhl.id > 1 %}*/
/*         <div class="pagination">*/
/*         <ul class="pagination pagination-sm">*/
/*         {# `«` arrow  #}*/
/*         <li {{ nhl.id == 1 ? 'class="disabled"' }}>*/
/*             <a href="{{ path('nhl_details',{'id':nhl.id-1}) }}" class="btn btn-primary">«</a>*/
/*         </li>*/
/* */
/*             {# `»` arrow #}*/
/*             <li {{ nhl.id == 7 ? 'class="disabled"' }}>*/
/*                 <a href="{{ path('nhl_details',{'id':nhl.id+1}) }}" class="btn btn-success">»</a>*/
/*             </li>*/
/*         </ul>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {% endblock %}*/
