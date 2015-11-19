<?php

/* UserBundle:BestDeal:internaute.html.twig */
class __TwigTemplate_b8806093ea192029e6576bef7be005ef0d916bfcedc0c3c45dc06812be656677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layoutinternaute.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layoutinternaute.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">

    <div class=\"row\">
        <div class=\"box diapo\">
            <div class=\"col-lg-12 text-center\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators hidden-xs\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img class=\"img-responsive img-full\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img class=\"img-responsive img-full\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"item\">
                            <img class=\"img-responsive img-full\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                        <span class=\"icon-prev\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                        <span class=\"icon-next\"></span>
                    </a>
                </div>
                <div class=\"deal1\"> <h3>
                        <small>Welcome to</small>
                    </h3></div>
                <div class=\"deal\"> <h1>
                        <span class=\"brand-name\">Best Deal</span>
                    </h1></div>

            </div>
        </div>

        <div class=\"box\">
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 49
            echo "
                <div class=\"col-sm-4 text-center\">
                    <div class=\"test\">
                        <div id=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\">
                            <div class=\"libelle\">  <span class=\"shorttitle\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</span></div>
                            <img src='";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"100%\" height=\"180px\">
                            <br><span class=\"discount_text\">A partir de</span> <span class=\"item_price\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt</span> <span class=\"original_price\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt</span><br>

                            <div class=\"dealex\"><span class=\"dealexp\">  Ce deal est valable jusqu'au<br> </span> <span class=\"dealdateexp\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "</span></div>
                            
                            <div class=\"dealr\"><span class=\"remise\"> - ";
            // line 59
            echo twig_escape_filter($this->env, twig_round((100 / ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") / $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"))), 1, "floor"), "html", null, true);
            echo " %</span></div>
                            
                        </div>
                    </div>   

                    <div id=\"";
            // line 64
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "\"  class=\"divkbira\" style=\"display:none;\">                             
                        <h4 class=\"dealtitr\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                        <div class=\"imgdet\"><img src='";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"600px\" height=\"300px\"></div>
                        <div class=\"dealdet\"><span class=\"discount_text\">A partir de</span> <span class=\"item_price\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt</span> <span class=\"original_price\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt</span><br>
                        La date du dépôt du deal est le ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                        Profitez VITE, ce deal est valable jusqu'au <span class=\"dealdateexp\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "</span><br>
                        <b>Type :</b> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "TypeDeal"), "html", null, true);
            echo "<br>
                        <b> Catégorie:</b> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Categorie"), "html", null, true);
            echo "<br>
                        Vous économisez ";
            // line 72
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") - $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel")), "html", null, true);
            echo " dt<br>
                        <span class=\"remise\"> - ";
            // line 73
            echo twig_escape_filter($this->env, twig_round((100 / ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial") / $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"))), 1, "floor"), "html", null, true);
            echo " %</span><br>
                        </div>
                            <div class=\"detdeal\"><b> Détail de l'offre:</b><br>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Descriptif"), "html", null, true);
            echo "
                    
                                </br> <div class=\"dealre\"><a href=\"#\" id=\"a";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/reservez.jpg"), "html", null, true);
            echo "\"></a></div> 
                          
                        <div class=\"evaluation\">
                            <form action=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_evaluer", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"))), "html", null, true);
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
                                <center><input id=\"b";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\" type=\"button\" class=\"col-sm-2\" value=\"Evaluer\"></center>
                                <div id=\"zone\"></div>
                            </form>
                        </div>
                              </div>
                            <div id=\"c";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\" style=\"color: red; display: none;\"><b>Vous devez être inscrit pour pouvoir réserver ou évaluer ce deal.</b></div>
                            
                    </div>

                </div>



                <script>
                    // Lors du clique sur le boutton le div #d1 sera AFFICHER


                    \$('#";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').click(function() {

                        \$('.test').addClass(\"transparence\");
                        \$('#";
            // line 115
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').fadeIn(\"slow\");
                    });
                    \$('#";
            // line 117
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').dblclick(function() {

                        \$('#";
            // line 119
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').hide();
                        \$('.test').removeClass(\"transparence\");
                    });


                    \$('#a";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').click(function() {

                        \$('#c";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').slideDown(\"slow\");
                    });
                    \$('#b";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').click(function() {

                        \$('#c";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').slideDown(\"slow\");
                    });


                    </script>         
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                </div>
            </div>



        </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:internaute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 136,  264 => 130,  259 => 128,  254 => 126,  249 => 124,  241 => 119,  236 => 117,  231 => 115,  225 => 112,  210 => 100,  202 => 95,  184 => 80,  176 => 77,  171 => 75,  166 => 73,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  146 => 68,  140 => 67,  136 => 66,  132 => 65,  128 => 64,  120 => 59,  115 => 57,  108 => 55,  104 => 54,  100 => 53,  96 => 52,  91 => 49,  87 => 48,  61 => 25,  55 => 22,  49 => 19,  31 => 3,  28 => 2,);
    }
}
