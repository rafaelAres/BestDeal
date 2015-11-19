<?php

/* UserBundle:BestDeal:rechercheliste.html.twig */
class __TwigTemplate_8203e47bb7f09a6c9d7cea3b9ef60a58eced722d35a07f007393a6288f1fb10d extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"container\">

    <div class=\"row\"  >
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("user_recherche");
        echo "\" method=\"POST\" >
            <div class=\"box\" align=\"center\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\"> Recherche Avancée</h2>
                    <hr>
                    <h3 class=\"intro-text\"> Recherche par Nom:</h3> <input type=\"text\" name=\"nom\" > <br>
                    <h3 class=\"intro-text\">Recherche par Type:</h3><br> Produit <input type=\"radio\"  name=\"type\" value=\"Produit\"> Service <input type=\"radio\"  name=\"type\" value=\"Service\">
                    <h3 class=\"intro-text\"> Recherche par Catégorie:</h3><br> Technologie <input type=\"radio\"  name=\"cat\" value=\"Technologie\"> Vêtements <input type=\"radio\"  name=\"cat\"> Domestique <input type=\"radio\"  name=\"cat\"> Sanitaire <input type=\"radio\"  name=\"cat\" value=\"Sanitaire\"><br><br> 
                    <h3 align=\"center\"> <center><input type=\"submit\" class=\"col-sm-2\" value=\"Rechercher\"></center></h3>

                </div>
            </div>
        </form>   

                 <div class=\"box\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 24
            echo "
                <div class=\"col-sm-4 text-center\">
                    <div class=\"test\">
                        <div id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\">
                            <div class=\"libelle\">  <span class=\"shorttitle\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</span></div>
                            <img src='";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"100%\" height=\"180px\">
                            <br><span class=\"discount_text\">A partir de</span> <span class=\"item_price\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt</span> <span class=\"original_price\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt</span><br>

                            <div class=\"dealex\"><span class=\"dealexp\">  Ce deal est valable jusqu'au<br> </span> <span class=\"dealdateexp\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "</span></div>
                            
                            <div class=\"dealr\"><span class=\"remise\"> - ";
            // line 34
            echo twig_escape_filter($this->env, twig_round((100 / ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") / $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"))), 1, "floor"), "html", null, true);
            echo " %</span></div>
                            
                        </div>
                    </div>   

                    <div id=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "\"  class=\"divkbira\" style=\"display:none;\">                             
                        <h4 class=\"dealtitr\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                        <div class=\"imgdet\"><img src='";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"600px\" height=\"300px\"></div>
                        <div class=\"dealdet\"><span class=\"discount_text\">A partir de</span> <span class=\"item_price\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt</span> <span class=\"original_price\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt</span><br>
                        La date du dépôt du deal est le ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                        Profitez VITE, ce deal est valable jusqu'au <span class=\"dealdateexp\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "</span><br>
                        <b>Type :</b> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "TypeDeal"), "html", null, true);
            echo "<br>
                        <b> Catégorie:</b> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Categorie"), "html", null, true);
            echo "<br>
                        Vous économisez ";
            // line 47
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") - $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel")), "html", null, true);
            echo " dt<br>
                        <span class=\"remise\"> - ";
            // line 48
            echo twig_escape_filter($this->env, twig_round((100 / ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") / $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"))), 1, "floor"), "html", null, true);
            echo " %</span><br>
                        </div>
                            <div class=\"detdeal\"><b> Détail de l'offre:</b><br>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Descriptif"), "html", null, true);
            echo "
                    
                                </br> <div class=\"dealre\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_areserver", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/reservez.jpg"), "html", null, true);
            echo "\"></a></div> 
                          
                        <div class=\"evaluation\">
                            <form action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_evaluer", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "iduser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\" method=\"POST\" >
                                 
                                <fieldset class=\"rating\">
                                    <legend>Notez le deal:</legend>
                                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\" /><label for=\"star5\" title=\"Rocks!\">5 stars</label>
                                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" /><label for=\"star4\" title=\"Pretty good\">4 stars</label>
                                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" /><label for=\"star3\" title=\"Meh\">3 stars</label>
                                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" /><label for=\"star2\" title=\"Kinda bad\">2 stars</label>
                                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" /><label for=\"star1\" title=\"Sucks big time\">1 star</label>
                                </fieldset>

                                <br>
                                <textarea name=\"commentaire\" rows=\"4\" cols=\"50\">
                                    Commentez le deal
                                </textarea><br>
                                <center><input id=\"eval\" type=\"submit\" class=\"col-sm-2\" value=\"Evaluer\"></center>
                                <div id=\"zone\"></div>
                            </form>
                        </div>
                              </div>
                ";
            // line 88
            echo "                    </div>

                </div>



                <script>
                    // Lors du clique sur le boutton le div #d1 sera AFFICHER


                    \$('#";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').click(function() {

                        \$('.test').addClass(\"transparence\");
                        \$('#";
            // line 101
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').fadeIn(\"slow\");
                    });
                    \$('#";
            // line 103
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').dblclick(function() {

                        \$('#";
            // line 105
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').hide();
                        \$('.test').removeClass(\"transparence\");
                    });


                    \$('#eval').click(function() {

                        \$('.evaluation').hide(\"slow\");
                    });






                    </script>         
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                </div>

        </div>

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:rechercheliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 122,  204 => 105,  199 => 103,  194 => 101,  188 => 98,  176 => 88,  153 => 55,  145 => 52,  140 => 50,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  89 => 34,  84 => 32,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  60 => 24,  56 => 23,  37 => 7,  31 => 3,  28 => 2,);
    }
}
