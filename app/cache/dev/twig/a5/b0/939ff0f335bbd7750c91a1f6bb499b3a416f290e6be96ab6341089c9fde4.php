<?php

/* AdminAdminBundle:Default:index.html.twig */
class __TwigTemplate_a5b0939ff0f335bbd7750c91a1f6bb499b3a416f290e6be96ab6341089c9fde4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminAdminBundle::layout.html.twig");

        $this->blocks = array(
            'pagewrapper' => array($this, 'block_pagewrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagewrapper($context, array $blocks = array())
    {
        // line 3
        echo "        

<div id=\"pagewrapper\">
            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <h1 class=\"page-header\">Notifications</h1>
                </div>
                  <div class=\"col-lg-2\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.PNG"), "html", null, true);
        echo "\">   
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests"))) != 0)) {
            // line 19
            echo "                    <div class=\"panel panel-danger\">
                        <div class=\"panel-heading\">
                           Notification Prestataire
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            
                           <div class=\"alert alert-warning\">
                                Il ya ";
            // line 27
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests"))), "html", null, true);
            echo " Prestataire a valider .
                            
                            </div>
                             <a href=\"prest_a_Valider\" class=\"btn btn-warning btn-lg btn-block\">Valider Prestataire</a>  
                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                                ";
        } else {
            // line 36
            echo "                                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                           Notification Prestataire
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                             
                            
                                <div class=\"alert alert-success\">
                                Il ya aucun prestataire a valider .
                                </div>
                             
                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                                ";
        }
        // line 53
        echo "                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class=\"col-lg-6\">
                     ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals"))) != 0)) {
            // line 58
            echo "                    <div class=\"panel panel-danger\">
                        <div class=\"panel-heading\">
                           Notification Deal
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            
                           <div class=\"alert alert-warning\">
                                Il ya ";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals"))), "html", null, true);
            echo " Deal a valider .
                            
                            </div>
                             <a href=\"deal_a_Valider\" class=\"btn btn-warning btn-lg btn-block\">Valider Deal</a>  
                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                                ";
        } else {
            // line 75
            echo "                                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                           Notification Deal
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                             
                            
                                <div class=\"alert alert-success\">
                                Il ya aucun Deal a valider .
                                </div>
                             
                            
                        </div>
                        <!-- .panel-body -->
                    </div>
                                ";
        }
        // line 92
        echo "                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
           
            <!-- /.row -->
        </div>

    <!-- /#page-wrapper -->
    ";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 92,  124 => 75,  112 => 66,  102 => 58,  100 => 57,  94 => 53,  75 => 36,  63 => 27,  53 => 19,  51 => 18,  41 => 11,  31 => 3,  28 => 2,);
    }
}
