<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_807f5bb5cd6cc768584c4d47de5b26eb245c06e474381f80822956b1dad12d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">

       
   
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\"> <strong>Vuillez vous authentifier</strong>
                    </h2>
                    <hr>
                    <p>Certaine page de ce site ne sonts accessible qu'on mode administrateur</p>
                            <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">                       
                                <div class=\"row\">
                            <div class=\"form-group col-lg-4\">
              
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
                                <label for=\"username\">User name</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  class=\"form-control\" />
                            </div>
                            <div class=\"form-group col-lg-4\">
              
                                <label for=\"password\">Password</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
                            </div>
                                <div class=\"form-group col-lg-4\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"form-control\" />
                                    <label for=\"remember_me\"><Strong>Ce souvenir de moi ? </strong></label>
                                    </div>
                            
                            <div class=\"clearfix\"></div>
                            
                            <div class=\"form-group col-lg-12\">
                                 <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Envoyer\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  52 => 21,  45 => 17,  31 => 5,  28 => 4,);
    }
}
