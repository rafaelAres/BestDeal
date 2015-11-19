<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_26b9437ffe4004391bfbf78fe6ba33304682d677b1a9b4df7a13e33b59d253de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Best Deal</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Add custom CSS here -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bestdeal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jbir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\" language=\"Javascript\"></script>
    </head>

    <body>
        <div>
        <div class=\"brand fl\">Best Deal</div>
        <div class=\"fl1\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Best Deal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"home\">Home</a>
                        </li>
                        <li><a href=\"recherche\">Recherche</a>
                        </li>                                           
                        <li><a href=\"http://localhost/P/bestdeal/web/app_dev.php/login\">Connexion</a>
                        </li>
                        
                        
                        <li><a href=\"http://localhost/P/bestdeal/web/app_dev.php/register/\">Inscription</a>
                        </li>
                        <li><a href=\"logout\">logout</a>
                        </li> 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        ";
        // line 59
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 60
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 61
        echo "
        <footer>
            <div class=\"footer\">
                <div class=\"row\">
                    <div class=\"col-lg-12 text-center\">
                        <p>Copyright &copy; Sticky Bit 3A9 2014                <a href=\"contact\">Contact</a></p>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script>
            // Activates the Carousel
            \$('.carousel').carousel({
                interval: 5000
            })
        </script>

                        </li>
    </body>

</html>
";
    }

    // line 59
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 60
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  134 => 59,  117 => 75,  113 => 74,  98 => 61,  95 => 60,  93 => 59,  49 => 18,  41 => 16,  35 => 13,  21 => 1,  57 => 23,  52 => 21,  45 => 17,  31 => 5,  28 => 4,);
    }
}
