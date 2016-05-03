<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2ad68a7de69a3c21041194161d89737fa9f4fc225ec0088d09665c4902829665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32362b4918b93da6f9412744906a6cf170eaf58cbade0cef3c5c5583f5934715 = $this->env->getExtension("native_profiler");
        $__internal_32362b4918b93da6f9412744906a6cf170eaf58cbade0cef3c5c5583f5934715->enter($__internal_32362b4918b93da6f9412744906a6cf170eaf58cbade0cef3c5c5583f5934715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32362b4918b93da6f9412744906a6cf170eaf58cbade0cef3c5c5583f5934715->leave($__internal_32362b4918b93da6f9412744906a6cf170eaf58cbade0cef3c5c5583f5934715_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_758f9f6bc0646918313d1b12a2d8498265f307f65eba4cf064feea51c6d1c57b = $this->env->getExtension("native_profiler");
        $__internal_758f9f6bc0646918313d1b12a2d8498265f307f65eba4cf064feea51c6d1c57b->enter($__internal_758f9f6bc0646918313d1b12a2d8498265f307f65eba4cf064feea51c6d1c57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 16
        echo "
<div>
    ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "</div>

";
        
        $__internal_758f9f6bc0646918313d1b12a2d8498265f307f65eba4cf064feea51c6d1c57b->leave($__internal_758f9f6bc0646918313d1b12a2d8498265f307f65eba4cf064feea51c6d1c57b_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7a0339a94950ee09ae97d48f1735a558b23b5b65c3849b75d3a5439bc02f5ff = $this->env->getExtension("native_profiler");
        $__internal_f7a0339a94950ee09ae97d48f1735a558b23b5b65c3849b75d3a5439bc02f5ff->enter($__internal_f7a0339a94950ee09ae97d48f1735a558b23b5b65c3849b75d3a5439bc02f5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "    ";
        
        $__internal_f7a0339a94950ee09ae97d48f1735a558b23b5b65c3849b75d3a5439bc02f5ff->leave($__internal_f7a0339a94950ee09ae97d48f1735a558b23b5b65c3849b75d3a5439bc02f5ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  93 => 18,  84 => 20,  82 => 18,  78 => 16,  71 => 14,  62 => 11,  57 => 10,  52 => 9,  47 => 8,  45 => 7,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
/* {% endblock %}*/
