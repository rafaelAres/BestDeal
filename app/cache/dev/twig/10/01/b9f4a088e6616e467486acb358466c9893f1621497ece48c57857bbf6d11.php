<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_1001b9f4a088e6616e467486acb358466c9893f1621497ece48c57857bbf6d11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layoutinternaute.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layoutinternaute.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("UserBundle:Registration:register_content.html.twig")->display($context);
        // line 5
        echo "<a href=\"http://localhost/P/bestdeal/web/app_dev.php/registerPres/\">s'insecrire en tant que prestataire de services</a>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  31 => 4,  28 => 3,);
    }
}
