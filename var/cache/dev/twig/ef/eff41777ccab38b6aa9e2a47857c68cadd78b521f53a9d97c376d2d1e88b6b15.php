<?php

/* base.html.twig */
class __TwigTemplate_2dc29fb51d73dcafb4edf81a67212fc11be142ca8176d0e7866c9ec1770627da extends Twig_Template
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
        $__internal_476562dfdde4e347a8d31a05b56ee260af80ec244844313707d1aba5829119a0 = $this->env->getExtension("native_profiler");
        $__internal_476562dfdde4e347a8d31a05b56ee260af80ec244844313707d1aba5829119a0->enter($__internal_476562dfdde4e347a8d31a05b56ee260af80ec244844313707d1aba5829119a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


</head>

<body>

<div class=\"navbar-wrapper\">


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
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("nhl_page");
        echo "\">Home</a></li>

                        <li><a href=\"#\">Search</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li class=\"dropdown\">
                            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("nhl_articles");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Articles <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("nhl_articles");
        echo "\">Show articles</a></li>
                                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("nhl_create");
        echo "\">Add article</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                                <ul class=\"nav navbar-nav navbar-right\">
                                    ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 63
            echo "                                        <p class=\"navbar-text\">
                                        ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                                        </p>
                                        <li>
                                            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        } else {
            // line 72
            echo "                                        <li>
                                            <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        </li>
                                    ";
        }
        // line 79
        echo "
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 102
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 106
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "            &nbsp;
            <br>
            <a href=\"#\" class=\"btn btn-success\" onclick=\"grey()\">click for grey BG </a>
            <a href=\"#\" class=\"btn btn-primary\" onclick=\"white()\">click for white BG </a>
            <a href=\"#\" class=\"btn btn-danger\" alt=\"Increase text size\" onclick=\"resizeText(1)\">Text size +</a>
            <a href=\"#\" class=\"btn btn-default\" alt=\"Increase text size\" onclick=\"resizeText(-1)\">Text size -</a>
        </div>

    </div>

</div><!-- /.container -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "<div class=\"container\">
<h2 class=\"page-header\">Add comment</h2>


    <div id=\"disqus_thread\"></div>
    <script>
        /**
         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */

         var disqus_config = function () {
         this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };

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
        
        $__internal_476562dfdde4e347a8d31a05b56ee260af80ec244844313707d1aba5829119a0->leave($__internal_476562dfdde4e347a8d31a05b56ee260af80ec244844313707d1aba5829119a0_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2d102c1e3bd3d6b27f83332a824e452e729cbd600ad51b7e4e169d9f9395bf7 = $this->env->getExtension("native_profiler");
        $__internal_a2d102c1e3bd3d6b27f83332a824e452e729cbd600ad51b7e4e169d9f9395bf7->enter($__internal_a2d102c1e3bd3d6b27f83332a824e452e729cbd600ad51b7e4e169d9f9395bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NHL App";
        
        $__internal_a2d102c1e3bd3d6b27f83332a824e452e729cbd600ad51b7e4e169d9f9395bf7->leave($__internal_a2d102c1e3bd3d6b27f83332a824e452e729cbd600ad51b7e4e169d9f9395bf7_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e85d07623740a70e0e209cdd48b58450298e1c7a0e9e2760865f3825e9c410fb = $this->env->getExtension("native_profiler");
        $__internal_e85d07623740a70e0e209cdd48b58450298e1c7a0e9e2760865f3825e9c410fb->enter($__internal_e85d07623740a70e0e209cdd48b58450298e1c7a0e9e2760865f3825e9c410fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_e85d07623740a70e0e209cdd48b58450298e1c7a0e9e2760865f3825e9c410fb->leave($__internal_e85d07623740a70e0e209cdd48b58450298e1c7a0e9e2760865f3825e9c410fb_prof);

    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2d0ac6675e12611e0229e2505caeb04bb1c13d88617d4b3399fbca75c1fa4f = $this->env->getExtension("native_profiler");
        $__internal_ca2d0ac6675e12611e0229e2505caeb04bb1c13d88617d4b3399fbca75c1fa4f->enter($__internal_ca2d0ac6675e12611e0229e2505caeb04bb1c13d88617d4b3399fbca75c1fa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca2d0ac6675e12611e0229e2505caeb04bb1c13d88617d4b3399fbca75c1fa4f->leave($__internal_ca2d0ac6675e12611e0229e2505caeb04bb1c13d88617d4b3399fbca75c1fa4f_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf716d8307b2bd9c933b0efe55422a37ed62cddc2dd134734847d32c928fcb78 = $this->env->getExtension("native_profiler");
        $__internal_bf716d8307b2bd9c933b0efe55422a37ed62cddc2dd134734847d32c928fcb78->enter($__internal_bf716d8307b2bd9c933b0efe55422a37ed62cddc2dd134734847d32c928fcb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf716d8307b2bd9c933b0efe55422a37ed62cddc2dd134734847d32c928fcb78->leave($__internal_bf716d8307b2bd9c933b0efe55422a37ed62cddc2dd134734847d32c928fcb78_prof);

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
        return array (  337 => 160,  326 => 145,  316 => 22,  313 => 21,  307 => 20,  295 => 12,  258 => 161,  256 => 160,  240 => 146,  238 => 145,  199 => 108,  190 => 106,  186 => 105,  183 => 104,  174 => 102,  170 => 101,  146 => 79,  138 => 76,  130 => 73,  127 => 72,  120 => 68,  116 => 67,  110 => 64,  107 => 63,  105 => 62,  96 => 56,  92 => 55,  87 => 53,  79 => 48,  52 => 25,  50 => 20,  39 => 12,  26 => 1,);
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
/*     <title>{% block title %}NHL App{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->*/
/* */
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
/* */
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
/*                         <li><a href="{{ path('nhl_page') }}">Home</a></li>*/
/* */
/*                         <li><a href="#">Search</a></li>*/
/*                         <li><a href="#">Contact</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="{{ path('nhl_articles') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('nhl_articles') }}">Show articles</a></li>*/
/*                                 <li><a href="{{ path('nhl_create') }}">Add article</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                                 <ul class="nav navbar-nav navbar-right">*/
/*                                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                         <p class="navbar-text">*/
/*                                         {{ 'layout.logged_in_as'|trans ({'%username%':app.user.username}, 'FOSUserBundle') }}*/
/*                                         </p>*/
/*                                         <li>*/
/*                                             <a href="{{ path('fos_user_security_logout') }}">*/
/*                                                 {{ 'Logout'|trans({}, 'FOSUserBundle') }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% else %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('fos_user_registration_register') }}">{{ 'registration.submit'|trans({},'FOSUserBundle')}}</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('fos_user_security_login') }}">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/* */
/*                                 </ul>*/
/* */
/* */
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
/* */
/* */
/* */
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
/*             &nbsp;*/
/*             <br>*/
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
/* */
/* {% block javascripts %}{% endblock %}*/
/* <div class="container">*/
/* <h2 class="page-header">Add comment</h2>*/
/* */
/* */
/*     <div id="disqus_thread"></div>*/
/*     <script>*/
/*         /***/
/*          * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.*/
/*          * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*          *//* */
/* */
/*          var disqus_config = function () {*/
/*          this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable*/
/*          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable*/
/*          };*/
/* */
/*         (function() { // DON'T EDIT BELOW THIS LINE*/
/*             var d = document, s = d.createElement('script');*/
/* */
/*             s.src = '//nhl-app.disqus.com/embed.js';*/
/* */
/*             s.setAttribute('data-timestamp', +new Date());*/
/*             (d.head || d.body).appendChild(s);*/
/*         })();*/
/*     </script>*/
/*     <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>*/
/*     <script id="dsq-count-scr" src="//nhl-app.disqus.com/count.js" async></script>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
