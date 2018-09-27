<?php

/* testBundle::layout.html.twig */
class __TwigTemplate_cbb0a30e60ae41b065891ac909fd76f5ec5e758067be8e19ae53efa3d2114d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fba5ed7d5a153714efc3cffe85af43735c6c52c866231a6e2183c663722d4dc = $this->env->getExtension("native_profiler");
        $__internal_9fba5ed7d5a153714efc3cffe85af43735c6c52c866231a6e2183c663722d4dc->enter($__internal_9fba5ed7d5a153714efc3cffe85af43735c6c52c866231a6e2183c663722d4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fba5ed7d5a153714efc3cffe85af43735c6c52c866231a6e2183c663722d4dc->leave($__internal_9fba5ed7d5a153714efc3cffe85af43735c6c52c866231a6e2183c663722d4dc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d95e2782f4b2d6149f27886433cb39d29471793fbfedc6416cca77579a1675 = $this->env->getExtension("native_profiler");
        $__internal_63d95e2782f4b2d6149f27886433cb39d29471793fbfedc6416cca77579a1675->enter($__internal_63d95e2782f4b2d6149f27886433cb39d29471793fbfedc6416cca77579a1675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  

    <!-- Slider area -->
    <section class=\"slider_area row m0\">
        <div class=\"slider_inner\">
         ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Sliders"]) ? $context["Sliders"] : $this->getContext($context, "Sliders")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 9
            echo "            <div data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/test/uploads/sliders/" . $this->getAttribute($context["slide"], "path", array()))), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/test/uploads/sliders/" . $this->getAttribute($context["slide"], "path", array()))), "html", null, true);
            echo "\">
                <div class=\"camera_caption\">
                   <div class=\"container\">
                        <h5 class=\" wow fadeInUp animated\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
            echo "</h5>
                        <h3 class=\" wow fadeInUp animated\" data-wow-delay=\"0.5s\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "subtitle", array()), "html", null, true);
            echo "</h3>
                   </div>
                </div>
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    </section>
    <!-- End Slider area -->

    <!-- About Us Area -->
     <section class=\"about_us_area row\">
        <div class=\"container\">
            <div class=\"tittle wow fadeInUp\">
                <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.about"), "html", null, true);
        echo "</h2>
                <h4></h4>
            </div>
            <div class=\"row about_row \">
                <div class=\"col-md-5 col-sm-6 about_client wow fadeInLeft\">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/about/approach1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"who_we_area col-md-7 col-sm-6 wow fadeInRight\">
                    <div class=\"subtittle\">
                        <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutApp"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAppText"), "html", null, true);
        echo "</p>
                </div>
                
            </div>
            <div class=\"row about_row\">
                <div class=\"col-md-5 col-sm-6 about_client wow fadeInLeft\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/about/goal1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"who_we_area col-md-7 col-sm-6 wow fadeInRight\">
                    <div class=\"subtittle\">
                        <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutGoal"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutGoalText"), "html", null, true);
        echo "</p>
                </div>
                
            </div>
            
            <div class=\"row about_row\">
                <div class=\"col-md-5 col-sm-6 about_client wow fadeInLeft\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/about/mission1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"who_we_area col-md-7 col-sm-6 wow fadeInRight\">
                    <div class=\"subtittle\">
                        <h2>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutMis"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutMisText"), "html", null, true);
        echo "</p>
                  </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
<section class=\"what_we_area \">
        <div class=\"container\">
            <div class=\"tittle wow fadeInUp\">
                <h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOffer"), "html", null, true);
        echo "</h2>
                <h4>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferText"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"row construction_iner\">
                <div class=\"col-md-4 col-sm-6 construction wow fadeInLeft\">
                   <div class=\"cns-img\">
                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/performance.jpg"), "html", null, true);
        echo "\" alt=\"\">
                   </div>
                   <div class=\"cns-content\">
                        <i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferPer"), "html", null, true);
        echo "</a>
                        <p>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferPerText"), "html", null, true);
        echo "</p>
                   </div>
                </div>
                <div class=\"col-md-4 col-sm-6 construction wow fadeInUp\">
                   <div class=\"cns-img\">
                        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/indoorSolution.jpg"), "html", null, true);
        echo "\" alt=\"\">
                   </div>
                   <div class=\"cns-content\">
                        <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                        <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick2"), "html", null, true);
        echo "</a>
                        <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferIndoorText"), "html", null, true);
        echo "</p>
                   </div>
                </div>
                <div class=\"col-md-4 col-sm-6 construction wow fadeInRight\">
                   <div class=\"cns-img\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/desgin.jpg"), "html", null, true);
        echo "\" alt=\"\">
                   </div>
                   <div class=\"cns-content\">
                        <i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>
                        <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferDesign"), "html", null, true);
        echo "</a>
                        <p>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutOfferDesignText"), "html", null, true);
        echo "</p>
                   </div>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">
            <input type=\"submit\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutSeeBtn"), "html", null, true);
        echo "\" class=\"See_more\"> 
            </a>
    </section>
    <!-- Our Achievments Area -->
    <section class=\"our_achievments_area\" data-stellar-background-ratio=\"0.3\">
        <div class=\"container\">
            <div class=\"tittle wow fadeInUp\">
                <h2>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchiv"), "html", null, true);
        echo "</h2>
                <h4>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchivText"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"achievments_row row\">
                <div class=\"col-md-3 col-sm-6 p0 completed\">
                    <i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>
                    <span class=\"counter\">8</span>
                    <h6>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchivProj"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-md-3 col-sm-6 p0 completed\">
                    <i class=\"fa fa-euro\" aria-hidden=\"true\"></i>
                    <span class=\"counter\">500000</span>
                    <h6>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchivTurn"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-md-3 col-sm-6 p0 completed\">
                    <i class=\"fa fa-child\" aria-hidden=\"true\"></i>
                    <span class=\"counter\">25</span>
                    <h6>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchivEmpl"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-md-3 col-sm-6 p0 completed\">
                    <i class=\"fa fa-flag\" aria-hidden=\"true\"></i>
                    <span class=\"counter\">18</span>
                    <h6>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutAchivCountries"), "html", null, true);
        echo "</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->
    <!-- Our Partners Area -->
    <section class=\"our_partners_area\">
        <div class=\"container\">
            <div class=\"tittle wow fadeInUp\">
                <h2>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutPart"), "html", null, true);
        echo "</h2>
                <h4></h4>
            </div>
            <div class=\"partners\">
                <div class=\"item\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-1.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-5.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-6.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-7.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-8.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-9.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-10.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"item\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/client_logo/client_logo-11.png"), "html", null, true);
        echo "\" alt=\"\"></div>
           
            </div>
        </div>
    </section>
";
        
        $__internal_63d95e2782f4b2d6149f27886433cb39d29471793fbfedc6416cca77579a1675->leave($__internal_63d95e2782f4b2d6149f27886433cb39d29471793fbfedc6416cca77579a1675_prof);

    }

    public function getTemplateName()
    {
        return "testBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 161,  342 => 160,  338 => 159,  334 => 158,  330 => 157,  326 => 156,  322 => 155,  318 => 154,  314 => 153,  310 => 152,  306 => 151,  299 => 147,  286 => 137,  278 => 132,  270 => 127,  262 => 122,  253 => 116,  249 => 115,  239 => 108,  235 => 107,  227 => 102,  221 => 101,  214 => 97,  206 => 92,  200 => 91,  193 => 87,  185 => 82,  179 => 81,  172 => 77,  164 => 72,  160 => 71,  148 => 62,  143 => 60,  136 => 56,  126 => 49,  121 => 47,  114 => 43,  105 => 37,  100 => 35,  93 => 31,  85 => 26,  75 => 18,  64 => 13,  60 => 12,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*   */
/* */
/*     <!-- Slider area -->*/
/*     <section class="slider_area row m0">*/
/*         <div class="slider_inner">*/
/*          {% for slide in Sliders %}*/
/*             <div data-thumb="{{asset('bundles/test/uploads/sliders/' ~ slide.path)}}" data-src="{{asset('bundles/test/uploads/sliders/' ~ slide.path)}}">*/
/*                 <div class="camera_caption">*/
/*                    <div class="container">*/
/*                         <h5 class=" wow fadeInUp animated">{{ slide.title }}</h5>*/
/*                         <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">{{ slide.subtitle }}</h3>*/
/*                    </div>*/
/*                 </div>*/
/*             </div>*/
/*          {% endfor %}*/
/*         </div>*/
/*     </section>*/
/*     <!-- End Slider area -->*/
/* */
/*     <!-- About Us Area -->*/
/*      <section class="about_us_area row">*/
/*         <div class="container">*/
/*             <div class="tittle wow fadeInUp">*/
/*                 <h2>{{'translate.about'|trans}}</h2>*/
/*                 <h4></h4>*/
/*             </div>*/
/*             <div class="row about_row ">*/
/*                 <div class="col-md-5 col-sm-6 about_client wow fadeInLeft">*/
/*                     <img src="{{asset('bundles/test/images/about/approach1.jpg')}}" alt="">*/
/*                 </div>*/
/*                 <div class="who_we_area col-md-7 col-sm-6 wow fadeInRight">*/
/*                     <div class="subtittle">*/
/*                         <h2>{{'translate.aboutApp'|trans}}</h2>*/
/*                     </div>*/
/*                     <p>{{'translate.aboutAppText'|trans}}</p>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="row about_row">*/
/*                 <div class="col-md-5 col-sm-6 about_client wow fadeInLeft">*/
/*                     <img src="{{asset('bundles/test/images/about/goal1.jpg')}}" alt="">*/
/*                 </div>*/
/*                 <div class="who_we_area col-md-7 col-sm-6 wow fadeInRight">*/
/*                     <div class="subtittle">*/
/*                         <h2>{{'translate.aboutGoal'|trans}}</h2>*/
/*                     </div>*/
/*                     <p>{{'translate.aboutGoalText'|trans}}</p>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             */
/*             <div class="row about_row">*/
/*                 <div class="col-md-5 col-sm-6 about_client wow fadeInLeft">*/
/*                     <img src="{{asset('bundles/test/images/about/mission1.jpg')}}" alt="">*/
/*                 </div>*/
/*                 <div class="who_we_area col-md-7 col-sm-6 wow fadeInRight">*/
/*                     <div class="subtittle">*/
/*                         <h2>{{'translate.aboutMis'|trans}}</h2>*/
/*                     </div>*/
/*                     <p>{{'translate.aboutMisText'|trans}}</p>*/
/*                   </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End About Us Area -->*/
/* <section class="what_we_area ">*/
/*         <div class="container">*/
/*             <div class="tittle wow fadeInUp">*/
/*                 <h2>{{'translate.aboutOffer'|trans}}</h2>*/
/*                 <h4>{{'translate.aboutOfferText'|trans}}</h4>*/
/*             </div>*/
/*             <div class="row construction_iner">*/
/*                 <div class="col-md-4 col-sm-6 construction wow fadeInLeft">*/
/*                    <div class="cns-img">*/
/*                         <img src="{{asset('bundles/test/images/performance.jpg')}}" alt="">*/
/*                    </div>*/
/*                    <div class="cns-content">*/
/*                         <i class="fa fa-line-chart" aria-hidden="true"></i>*/
/*                         <a href="{{ path('services') }}">{{'translate.aboutOfferPer'|trans}}</a>*/
/*                         <p>{{'translate.aboutOfferPerText'|trans}}</p>*/
/*                    </div>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-6 construction wow fadeInUp">*/
/*                    <div class="cns-img">*/
/*                         <img src="{{asset('bundles/test/images/indoorSolution.jpg')}}" alt="">*/
/*                    </div>*/
/*                    <div class="cns-content">*/
/*                         <i class="fa fa-home" aria-hidden="true"></i>*/
/*                         <a href="{{ path('services') }}">{{'translate.Quick2'|trans}}</a>*/
/*                         <p>{{'translate.aboutOfferIndoorText'|trans}}</p>*/
/*                    </div>*/
/*                 </div>*/
/*                 <div class="col-md-4 col-sm-6 construction wow fadeInRight">*/
/*                    <div class="cns-img">*/
/*                         <img src="{{asset('bundles/test/images/desgin.jpg')}}" alt="">*/
/*                    </div>*/
/*                    <div class="cns-content">*/
/*                         <i class="fa fa-connectdevelop" aria-hidden="true"></i>*/
/*                         <a href="{{ path('services') }}">{{'translate.aboutOfferDesign'|trans}}</a>*/
/*                         <p>{{'translate.aboutOfferDesignText'|trans}}</p>*/
/*                    </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <a href="{{ path('services') }}">*/
/*             <input type="submit" value="{{'translate.aboutSeeBtn'|trans}}" class="See_more"> */
/*             </a>*/
/*     </section>*/
/*     <!-- Our Achievments Area -->*/
/*     <section class="our_achievments_area" data-stellar-background-ratio="0.3">*/
/*         <div class="container">*/
/*             <div class="tittle wow fadeInUp">*/
/*                 <h2>{{'translate.aboutAchiv'|trans}}</h2>*/
/*                 <h4>{{'translate.aboutAchivText'|trans}}</h4>*/
/*             </div>*/
/*             <div class="achievments_row row">*/
/*                 <div class="col-md-3 col-sm-6 p0 completed">*/
/*                     <i class="fa fa-connectdevelop" aria-hidden="true"></i>*/
/*                     <span class="counter">8</span>*/
/*                     <h6>{{'translate.aboutAchivProj'|trans}}</h6>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 p0 completed">*/
/*                     <i class="fa fa-euro" aria-hidden="true"></i>*/
/*                     <span class="counter">500000</span>*/
/*                     <h6>{{'translate.aboutAchivTurn'|trans}}</h6>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 p0 completed">*/
/*                     <i class="fa fa-child" aria-hidden="true"></i>*/
/*                     <span class="counter">25</span>*/
/*                     <h6>{{'translate.aboutAchivEmpl'|trans}}</h6>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 p0 completed">*/
/*                     <i class="fa fa-flag" aria-hidden="true"></i>*/
/*                     <span class="counter">18</span>*/
/*                     <h6>{{'translate.aboutAchivCountries'|trans}}</h6>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End Our Achievments Area -->*/
/*     <!-- Our Partners Area -->*/
/*     <section class="our_partners_area">*/
/*         <div class="container">*/
/*             <div class="tittle wow fadeInUp">*/
/*                 <h2>{{'translate.aboutPart'|trans}}</h2>*/
/*                 <h4></h4>*/
/*             </div>*/
/*             <div class="partners">*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-1.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-2.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-3.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-4.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-5.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-6.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-7.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-8.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-9.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-10.png')}}" alt=""></div>*/
/*                 <div class="item"><img src="{{asset('bundles/test/images/client_logo/client_logo-11.png')}}" alt=""></div>*/
/*            */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
