<?php

/* nhl/articles.html.twig */
class __TwigTemplate_8439ec3395f363ae52318c2b3c2594d7679efcd17e34679ee0fc6d9da8ff4457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/articles.html.twig", 1);
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
        $__internal_3dcaa7260411e6b62536318bf90eb7aabfc914b366303d6e6fd015ee51972743 = $this->env->getExtension("native_profiler");
        $__internal_3dcaa7260411e6b62536318bf90eb7aabfc914b366303d6e6fd015ee51972743->enter($__internal_3dcaa7260411e6b62536318bf90eb7aabfc914b366303d6e6fd015ee51972743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dcaa7260411e6b62536318bf90eb7aabfc914b366303d6e6fd015ee51972743->leave($__internal_3dcaa7260411e6b62536318bf90eb7aabfc914b366303d6e6fd015ee51972743_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3fa39963138b9be7660f92942cb1ae39d1a7a89031f6ca6f0756c797ce88a65 = $this->env->getExtension("native_profiler");
        $__internal_c3fa39963138b9be7660f92942cb1ae39d1a7a89031f6ca6f0756c797ce88a65->enter($__internal_c3fa39963138b9be7660f92942cb1ae39d1a7a89031f6ca6f0756c797ce88a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Articles</h2>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>#</th>
            <th>Article Name</th>
            <th>Author Name</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
        </thead>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["nhl"]);
        foreach ($context['_seq'] as $context["_key"] => $context["nhl"]) {
            // line 16
            echo "        <tbody>
        <tr>
            <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "articleName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "name", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["nhl"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "
            </td>
            <td>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_details", array("id" => $this->getAttribute($context["nhl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">View </a>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_edit", array("id" => $this->getAttribute($context["nhl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit </a>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nhl_delete", array("id" => $this->getAttribute($context["nhl"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete </a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nhl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>





";
        
        $__internal_c3fa39963138b9be7660f92942cb1ae39d1a7a89031f6ca6f0756c797ce88a65->leave($__internal_c3fa39963138b9be7660f92942cb1ae39d1a7a89031f6ca6f0756c797ce88a65_prof);

    }

    public function getTemplateName()
    {
        return "nhl/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  88 => 27,  84 => 26,  80 => 25,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Articles</h2>*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Article Name</th>*/
/*             <th>Author Name</th>*/
/*             <th>Create Date</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         {% for nhl in nhl %}*/
/*         <tbody>*/
/*         <tr>*/
/*             <th scope="row">{{ nhl.id }}</th>*/
/*             <td>{{ nhl.articleName }}</td>*/
/*             <td>{{ nhl.name }}</td>*/
/*             <td>*/
/*                 {{ nhl.createDate|date('F j, Y, g:i a') }}*/
/*             </td>*/
/*             <td>*/
/*                 <a href="{{ path('nhl_details',{'id':nhl.id}) }}" class="btn btn-success">View </a>*/
/*                 <a href="{{ path('nhl_edit',{'id':nhl.id}) }}" class="btn btn-primary">Edit </a>*/
/*                 <a href="{{ path('nhl_delete',{'id':nhl.id}) }}" class="btn btn-danger">Delete </a>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
