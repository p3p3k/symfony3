<?php

/* base.html.twig */
class __TwigTemplate_60894863d2df4670c4bf647b998720e7ae544444e27c9c09587c93d65e0de9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a76088147f87042c42b4c03da6910e6eeb090f7f755a2cc221b07faca6fd4723 = $this->env->getExtension("native_profiler");
        $__internal_a76088147f87042c42b4c03da6910e6eeb090f7f755a2cc221b07faca6fd4723->enter($__internal_a76088147f87042c42b4c03da6910e6eeb090f7f755a2cc221b07faca6fd4723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <!--<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">-->



    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


</head>

<body>

<div class=\"navbar-wrapper\">
    <div class=\"container\">

        <nav class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">NHL app</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Home</a></li>

                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li class=\"dropdown\">
                            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("nhl_articles");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Articles <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("nhl_articles");
        echo "\">Show articles</a></li>
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("nhl_create");
        echo "\">Add article</a></li>
                                <li><a href=\"#\">Something else here</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 73
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 77
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            <script type=\"text/javascript\">

                <!--//
                function resizeText(multiplier) {
                    if (document.body.style.fontSize == \"\") {
                        document.body.style.fontSize = \"1.0em\";
                    }
                    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + \"em\";
                }

                function grey()

                {

                    document.body.style.backgroundColor=\"grey\";
                    document.getElementById('p').style.fontSize = '1.2em';


                }

                //-->
                function white()

                {

                    document.body.style.backgroundColor=\"white\";


                }


            </script>





            ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "            <a href=\"#\" class=\"btn btn-success\" onclick=\"grey()\">click for grey BG </a>
            <a href=\"#\" class=\"btn btn-primary\" onclick=\"white()\">click for white BG </a>
            <a href=\"#\" class=\"btn btn-danger\" alt=\"Increase text size\" onclick=\"resizeText(1)\">Text size +</a>
            <a href=\"#\" class=\"btn btn-default\" alt=\"Increase text size\" onclick=\"resizeText(-1)\">Text size -</a>
        </div>

    </div>

</div><!-- /.container -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "<div class=\"container\">
<h2 class=\"page-header\">Add comment</h2>

<div id=\"disqus_thread\"></div>
<script>
    /**
     * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
     var disqus_config = function () {
     this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//nhl-app.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\" rel=\"nofollow\">comments powered by Disqus.</a></noscript>

<script id=\"dsq-count-scr\" src=\"//nhl-app.disqus.com/count.js\" async></script>
</div>
</body>
</html>
";
        
        $__internal_a76088147f87042c42b4c03da6910e6eeb090f7f755a2cc221b07faca6fd4723->leave($__internal_a76088147f87042c42b4c03da6910e6eeb090f7f755a2cc221b07faca6fd4723_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2ef41b1b0c3196c8f6b20424b2c527536e1cf6e26785f7d58e58c38129185a8 = $this->env->getExtension("native_profiler");
        $__internal_d2ef41b1b0c3196c8f6b20424b2c527536e1cf6e26785f7d58e58c38129185a8->enter($__internal_d2ef41b1b0c3196c8f6b20424b2c527536e1cf6e26785f7d58e58c38129185a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2ef41b1b0c3196c8f6b20424b2c527536e1cf6e26785f7d58e58c38129185a8->leave($__internal_d2ef41b1b0c3196c8f6b20424b2c527536e1cf6e26785f7d58e58c38129185a8_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22924b571caa505ad2164dc90cb0e2ddfc35e5a726025adc4e5e560a8d6cf194 = $this->env->getExtension("native_profiler");
        $__internal_22924b571caa505ad2164dc90cb0e2ddfc35e5a726025adc4e5e560a8d6cf194->enter($__internal_22924b571caa505ad2164dc90cb0e2ddfc35e5a726025adc4e5e560a8d6cf194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_22924b571caa505ad2164dc90cb0e2ddfc35e5a726025adc4e5e560a8d6cf194->leave($__internal_22924b571caa505ad2164dc90cb0e2ddfc35e5a726025adc4e5e560a8d6cf194_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_b00e6bf0d55b23d9f23c7bbf683bc96884dca91cefc6e15d11931161b643cea1 = $this->env->getExtension("native_profiler");
        $__internal_b00e6bf0d55b23d9f23c7bbf683bc96884dca91cefc6e15d11931161b643cea1->enter($__internal_b00e6bf0d55b23d9f23c7bbf683bc96884dca91cefc6e15d11931161b643cea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b00e6bf0d55b23d9f23c7bbf683bc96884dca91cefc6e15d11931161b643cea1->leave($__internal_b00e6bf0d55b23d9f23c7bbf683bc96884dca91cefc6e15d11931161b643cea1_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8d8e261cd74685ea30db77dc035307d0d44879679683171ef162877bf682865 = $this->env->getExtension("native_profiler");
        $__internal_b8d8e261cd74685ea30db77dc035307d0d44879679683171ef162877bf682865->enter($__internal_b8d8e261cd74685ea30db77dc035307d0d44879679683171ef162877bf682865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8d8e261cd74685ea30db77dc035307d0d44879679683171ef162877bf682865->leave($__internal_b8d8e261cd74685ea30db77dc035307d0d44879679683171ef162877bf682865_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 128,  265 => 116,  255 => 21,  252 => 20,  246 => 19,  234 => 12,  197 => 129,  195 => 128,  182 => 117,  180 => 116,  141 => 79,  132 => 77,  128 => 76,  125 => 75,  116 => 73,  112 => 72,  92 => 55,  88 => 54,  83 => 52,  51 => 24,  49 => 19,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->*/
/* */
/* */
/* */
/*     {% block stylesheets %}*/
/* */
/*         <link type="text/css" rel="stylesheet" href="{{asset('bundles/framework/css/bootstrap.min.css')}}"/>*/
/* */
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="navbar-wrapper">*/
/*     <div class="container">*/
/* */
/*         <nav class="navbar navbar-inverse">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#">NHL app</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li><a href="/">Home</a></li>*/
/* */
/*                         <li><a href="#">About</a></li>*/
/*                         <li><a href="#">Contact</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="{{ path('nhl_articles') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('nhl_articles') }}">Show articles</a></li>*/
/*                                 <li><a href="{{ path('nhl_create') }}">Add article</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/* */
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% for flash_message in app.session.flashbag.get('notice')%}*/
/*                 <div class="alert alert-success">{{ flash_message }}</div>*/
/*             {% endfor %}*/
/* */
/*             {% for flash_message in app.session.flashbag.get('error')%}*/
/*                 <div class="alert alert-danger">{{ flash_message }}</div>*/
/*             {% endfor %}*/
/*             <script type="text/javascript">*/
/* */
/*                 <!--//*/
/*                 function resizeText(multiplier) {*/
/*                     if (document.body.style.fontSize == "") {*/
/*                         document.body.style.fontSize = "1.0em";*/
/*                     }*/
/*                     document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";*/
/*                 }*/
/* */
/*                 function grey()*/
/* */
/*                 {*/
/* */
/*                     document.body.style.backgroundColor="grey";*/
/*                     document.getElementById('p').style.fontSize = '1.2em';*/
/* */
/* */
/*                 }*/
/* */
/*                 //-->*/
/*                 function white()*/
/* */
/*                 {*/
/* */
/*                     document.body.style.backgroundColor="white";*/
/* */
/* */
/*                 }*/
/* */
/* */
/*             </script>*/
/* */
/* */
/* */
/* */
/* */
/*             {% block body %}{% endblock %}*/
/*             <a href="#" class="btn btn-success" onclick="grey()">click for grey BG </a>*/
/*             <a href="#" class="btn btn-primary" onclick="white()">click for white BG </a>*/
/*             <a href="#" class="btn btn-danger" alt="Increase text size" onclick="resizeText(1)">Text size +</a>*/
/*             <a href="#" class="btn btn-default" alt="Increase text size" onclick="resizeText(-1)">Text size -</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div><!-- /.container -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* <div class="container">*/
/* <h2 class="page-header">Add comment</h2>*/
/* */
/* <div id="disqus_thread"></div>*/
/* <script>*/
/*     /***/
/*      * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.*/
/*      * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*      *//* */
/*     /**/
/*      var disqus_config = function () {*/
/*      this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable*/
/*      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable*/
/*      };*/
/*      *//* */
/*     (function() { // DON'T EDIT BELOW THIS LINE*/
/*         var d = document, s = d.createElement('script');*/
/* */
/*         s.src = '//nhl-app.disqus.com/embed.js';*/
/* */
/*         s.setAttribute('data-timestamp', +new Date());*/
/*         (d.head || d.body).appendChild(s);*/
/*     })();*/
/* </script>*/
/* <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>*/
/* */
/* <script id="dsq-count-scr" src="//nhl-app.disqus.com/count.js" async></script>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
