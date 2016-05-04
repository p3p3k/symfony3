<?php

/* nhl/details.html.twig */
class __TwigTemplate_8ebb607559793179035d2890ab6ee1c1f230f6f37519aa9c704d158fd6f30550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/details.html.twig", 1);
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
        $__internal_0da21b894d8d11796a1f7a3429c8a300865792fc3c7f1848456c73ec3644be8e = $this->env->getExtension("native_profiler");
        $__internal_0da21b894d8d11796a1f7a3429c8a300865792fc3c7f1848456c73ec3644be8e->enter($__internal_0da21b894d8d11796a1f7a3429c8a300865792fc3c7f1848456c73ec3644be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da21b894d8d11796a1f7a3429c8a300865792fc3c7f1848456c73ec3644be8e->leave($__internal_0da21b894d8d11796a1f7a3429c8a300865792fc3c7f1848456c73ec3644be8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd920062b35618aaf5c02e83e88cd3ee2e64a0721080c64f97b04351df68072f = $this->env->getExtension("native_profiler");
        $__internal_cd920062b35618aaf5c02e83e88cd3ee2e64a0721080c64f97b04351df68072f->enter($__internal_cd920062b35618aaf5c02e83e88cd3ee2e64a0721080c64f97b04351df68072f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"thumbnail\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "path", array()))), "html", null, true);
        echo "\" alt=\"photo\">
    </div>
    ";
        // line 22
        if (($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) > 1)) {
            // line 23
            echo "        <div class=\"pagination\">
        <ul class=\"pagination pagination-sm\">
        ";
            // line 26
            echo "        <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) - 1))), "html", null, true);
            echo "\" class=\"btn btn-primary\">«</a>
        </li>

            ";
            // line 31
            echo "            <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 7)) ? ("class=\"disabled\"") : (""));
            echo ">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) + 1))), "html", null, true);
            echo "\" class=\"btn btn-success\">»</a>
            </li>
        </ul>
        </div>
    ";
        }
        // line 37
        echo "


";
        
        $__internal_cd920062b35618aaf5c02e83e88cd3ee2e64a0721080c64f97b04351df68072f->leave($__internal_cd920062b35618aaf5c02e83e88cd3ee2e64a0721080c64f97b04351df68072f_prof);

    }

    public function getTemplateName()
    {
        return "nhl/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  111 => 32,  106 => 31,  100 => 27,  95 => 26,  91 => 23,  89 => 22,  84 => 20,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  55 => 9,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <div class="thumbnail">*/
/*     <img src="{{ asset('uploads/photos/'~nhl.path) }}" alt="photo">*/
/*     </div>*/
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
