<?php

/* testBundle:Default:Administration/administration.html.twig */
class __TwigTemplate_06496c97119b7b971ef2cda4108d04b26c1e36bb4b79d93e1f46f37b7e6aa7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Default:Administration/administration.html.twig", 1);
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
        $__internal_78ab92600fbbd25a51390e30ebda6d4d0447ea38f2c161786ac6bd4cbe7982b6 = $this->env->getExtension("native_profiler");
        $__internal_78ab92600fbbd25a51390e30ebda6d4d0447ea38f2c161786ac6bd4cbe7982b6->enter($__internal_78ab92600fbbd25a51390e30ebda6d4d0447ea38f2c161786ac6bd4cbe7982b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:Administration/administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ab92600fbbd25a51390e30ebda6d4d0447ea38f2c161786ac6bd4cbe7982b6->leave($__internal_78ab92600fbbd25a51390e30ebda6d4d0447ea38f2c161786ac6bd4cbe7982b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69fb33166de843d5c7eadfaae82c7305de36f4c6b02a13142cb2cc5335fdd11b = $this->env->getExtension("native_profiler");
        $__internal_69fb33166de843d5c7eadfaae82c7305de36f4c6b02a13142cb2cc5335fdd11b->enter($__internal_69fb33166de843d5c7eadfaae82c7305de36f4c6b02a13142cb2cc5335fdd11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <section class=\"bg-light\" id=\"portfolio\" >
      <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
              <h2 class=\" text-uppercase\">administration</h2>
            </div>
          </div>
        
         <div class=\"row\">
         <table>
         <tr>    
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eventt", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
                <div class=\"portfolio-hover\">
                  <div class=\"portfolio-hover-content\">
                    <i class=\"fa fa-plus fa-3x\"></i>
                  </div>
                </div>
                <img class=\"img-fluid\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/events.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <div class=\"portfolio-caption wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <h4>Generate Events</h4>
                  </div>
            </a>
            </div>


            <div class=\"col-md-4 col-sm-6 portfolio-item\">
              <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                <div class=\"portfolio-hover\">
                  <div class=\"portfolio-hover-content\">
                    <i class=\"fa fa-plus fa-3x\"></i>
                  </div>
                </div>
                <img class=\"img-fluid\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/stage.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"portfolio-caption wow fadeInUp\" data-wow-delay=\"0.8s\">
                  <h4>Generate internship offers</h4> 
                </div>
             </a>
            </div>

           <div class=\"col-md-4 col-sm-6 portfolio-item\">
           <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fa fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/sliders.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"portfolio-caption wow fadeInUp\" data-wow-delay=\"0.5s\">
              <h4>Generate Sliders</h4>
            </div>
            </a>
            </div>
          </tr>

          <!--tr>
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
           <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fa fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/Partners.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"portfolio-caption wow fadeInUp\" data-wow-delay=\"0.5s\">
              <h4>Generate Partenrs</h4>
            </div>
            </a>
            </div>
              <div class=\"col-md-4 col-sm-6 portfolio-item\">
           <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fa fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/sliders.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"portfolio-caption wow fadeInUp\" data-wow-delay=\"0.5s\">
              <h4>Generate Sliders</h4>
            </div>
            </a>
            </div>
               </tr--> 
          </table>         
      </div>
    </section>

";
        
        $__internal_69fb33166de843d5c7eadfaae82c7305de36f4c6b02a13142cb2cc5335fdd11b->leave($__internal_69fb33166de843d5c7eadfaae82c7305de36f4c6b02a13142cb2cc5335fdd11b_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:Administration/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 80,  120 => 67,  101 => 51,  92 => 45,  81 => 37,  63 => 22,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*   */
/*    {% block body %}*/
/*    <section class="bg-light" id="portfolio" >*/
/*       <div class="container">*/
/*           <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*               <h2 class=" text-uppercase">administration</h2>*/
/*             </div>*/
/*           </div>*/
/*         */
/*          <div class="row">*/
/*          <table>*/
/*          <tr>    */
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*             <a class="portfolio-link" data-toggle="modal" href="{{ path('eventt',{'name': name })}}">*/
/*                 <div class="portfolio-hover">*/
/*                   <div class="portfolio-hover-content">*/
/*                     <i class="fa fa-plus fa-3x"></i>*/
/*                   </div>*/
/*                 </div>*/
/*                 <img class="img-fluid" src="{{asset('bundles/test/images/events.jpg')}}" alt="">*/
/*                   <div class="portfolio-caption wow fadeInUp" data-wow-delay="0.5s">*/
/*                     <h4>Generate Events</h4>*/
/*                   </div>*/
/*             </a>*/
/*             </div>*/
/* */
/* */
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*               <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">*/
/*                 <div class="portfolio-hover">*/
/*                   <div class="portfolio-hover-content">*/
/*                     <i class="fa fa-plus fa-3x"></i>*/
/*                   </div>*/
/*                 </div>*/
/*                 <img class="img-fluid" src="{{asset('bundles/test/images/stage.jpg')}}" alt="">*/
/*                 <div class="portfolio-caption wow fadeInUp" data-wow-delay="0.8s">*/
/*                   <h4>Generate internship offers</h4> */
/*                 </div>*/
/*              </a>*/
/*             </div>*/
/* */
/*            <div class="col-md-4 col-sm-6 portfolio-item">*/
/*            <a class="portfolio-link" data-toggle="modal" href="{{ path('slider',{'name': name })}}">*/
/*               <div class="portfolio-hover">*/
/*                 <div class="portfolio-hover-content">*/
/*                   <i class="fa fa-plus fa-3x"></i>*/
/*                 </div>*/
/*               </div>*/
/*               <img class="img-fluid" src="{{asset('bundles/test/images/sliders.jpg')}}" alt="">*/
/*               <div class="portfolio-caption wow fadeInUp" data-wow-delay="0.5s">*/
/*               <h4>Generate Sliders</h4>*/
/*             </div>*/
/*             </a>*/
/*             </div>*/
/*           </tr>*/
/* */
/*           <!--tr>*/
/*             <div class="col-md-4 col-sm-6 portfolio-item">*/
/*            <a class="portfolio-link" data-toggle="modal" href="">*/
/*               <div class="portfolio-hover">*/
/*                 <div class="portfolio-hover-content">*/
/*                   <i class="fa fa-plus fa-3x"></i>*/
/*                 </div>*/
/*               </div>*/
/*               <img class="img-fluid" src="{{asset('bundles/test/images/Partners.jpg')}}" alt="">*/
/*               <div class="portfolio-caption wow fadeInUp" data-wow-delay="0.5s">*/
/*               <h4>Generate Partenrs</h4>*/
/*             </div>*/
/*             </a>*/
/*             </div>*/
/*               <div class="col-md-4 col-sm-6 portfolio-item">*/
/*            <a class="portfolio-link" data-toggle="modal" href="">*/
/*               <div class="portfolio-hover">*/
/*                 <div class="portfolio-hover-content">*/
/*                   <i class="fa fa-plus fa-3x"></i>*/
/*                 </div>*/
/*               </div>*/
/*               <img class="img-fluid" src="{{asset('bundles/test/images/sliders.jpg')}}" alt="">*/
/*               <div class="portfolio-caption wow fadeInUp" data-wow-delay="0.5s">*/
/*               <h4>Generate Sliders</h4>*/
/*             </div>*/
/*             </a>*/
/*             </div>*/
/*                </tr--> */
/*           </table>         */
/*       </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
