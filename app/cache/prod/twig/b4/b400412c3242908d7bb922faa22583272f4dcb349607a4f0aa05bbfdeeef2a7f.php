<?php

/* testBundle::layoutservices.html.twig */
class __TwigTemplate_e5329f9d135e0f5e4b39aa6c32c7bdab1dd706c0dc5d18af5b50d4efd21b72c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle::layoutservices.html.twig", 1);
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
        $__internal_35b8fab8de6593fb705fa264d11b0ca3146edb99b160b94bf059ab441ac950c2 = $this->env->getExtension("native_profiler");
        $__internal_35b8fab8de6593fb705fa264d11b0ca3146edb99b160b94bf059ab441ac950c2->enter($__internal_35b8fab8de6593fb705fa264d11b0ca3146edb99b160b94bf059ab441ac950c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle::layoutservices.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b8fab8de6593fb705fa264d11b0ca3146edb99b160b94bf059ab441ac950c2->leave($__internal_35b8fab8de6593fb705fa264d11b0ca3146edb99b160b94bf059ab441ac950c2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1152e3556c3a69e6a7e338112bb817db4c31a54d9a3520fd994c53ab4a7d25b6 = $this->env->getExtension("native_profiler");
        $__internal_1152e3556c3a69e6a7e338112bb817db4c31a54d9a3520fd994c53ab4a7d25b6->enter($__internal_1152e3556c3a69e6a7e338112bb817db4c31a54d9a3520fd994c53ab4a7d25b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Banner area -->
    <section class=\"banner_area2 services\" data-stellar-background-ratio=\"0.5\">
        <h2>Services</h2>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class=\"our_services_tow\">
        <div class=\"container\">
            <div class=\"architecture_area services_pages\">
                <div class=\"portfolio_filter portfolio_filter_2\">
                    <ul>
                        <li data-filter=\".optimization\" class=\"active\"><a href=\"\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink11"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".indoor\"><a href=\"\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink21"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".design\"><a href=\"\"><i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink31"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".benchmarking\"><a href=\"\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink41"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".audit\"><a href=\"\"><i class=\"fa fa-cloud\" aria-hidden=\"true\"></i>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink51"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".operational\"><a href=\"\"><i class=\"fa fa-pie-chart\" aria-hidden=\"true\"></i>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink61"), "html", null, true);
        echo "</a></li>
                        <li data-filter=\".training\"><a href=\"\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink71"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"portfolio_items \">
                            <div class=\"portfolio_item optimization portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink12"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink13"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/performance.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item indoor portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink21"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink23"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/indoorSolution.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item design portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink32"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink33"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/desgin.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item benchmarking portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink41"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink43"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/bunch.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item audit portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink51"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink53"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/audit.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item operational portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink61"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink63"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/strategie.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>

                            <div class=\"portfolio_item training portfolio_2\">
                                <div class=\"grid-sizer-2\"></div>
                                <div class=\"single_facilities col-sm-7 painting building painting adversting\">
                                    <div class=\"who_we_area\">
                                        <div class=\"subtittle\">
                                            <h2>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink71"), "html", null, true);
        echo "</h2>
                                        </div>
                                        <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink73"), "html", null, true);
        echo "</p>
                                        <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"button_all\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.ServicesLink0"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                                <div class=\"single_facilities col-sm-5 painting webdesign\">
                                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/training2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->
";
        
        $__internal_1152e3556c3a69e6a7e338112bb817db4c31a54d9a3520fd994c53ab4a7d25b6->leave($__internal_1152e3556c3a69e6a7e338112bb817db4c31a54d9a3520fd994c53ab4a7d25b6_prof);

    }

    public function getTemplateName()
    {
        return "testBundle::layoutservices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 133,  279 => 129,  275 => 128,  270 => 126,  258 => 117,  249 => 113,  245 => 112,  240 => 110,  228 => 101,  219 => 97,  215 => 96,  210 => 94,  198 => 85,  189 => 81,  185 => 80,  180 => 78,  168 => 69,  159 => 65,  155 => 64,  150 => 62,  138 => 53,  129 => 49,  125 => 48,  120 => 46,  108 => 37,  99 => 33,  95 => 32,  90 => 30,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <!-- Banner area -->*/
/*     <section class="banner_area2 services" data-stellar-background-ratio="0.5">*/
/*         <h2>Services</h2>*/
/*     </section>*/
/*     <!-- End Banner area -->*/
/* */
/*     <!-- Our Services Area -->*/
/*     <section class="our_services_tow">*/
/*         <div class="container">*/
/*             <div class="architecture_area services_pages">*/
/*                 <div class="portfolio_filter portfolio_filter_2">*/
/*                     <ul>*/
/*                         <li data-filter=".optimization" class="active"><a href=""><i class="fa fa-line-chart" aria-hidden="true"></i>{{'translate.ServicesLink11'|trans}}</a></li>*/
/*                         <li data-filter=".indoor"><a href=""><i class="fa fa-home" aria-hidden="true"></i>{{'translate.ServicesLink21'|trans}}</a></li>*/
/*                         <li data-filter=".design"><a href=""><i class="fa fa-connectdevelop" aria-hidden="true"></i>{{'translate.ServicesLink31'|trans}}</a></li>*/
/*                         <li data-filter=".benchmarking"><a href=""><i class="fa fa-bar-chart" aria-hidden="true"></i>{{'translate.ServicesLink41'|trans}}</a></li>*/
/*                         <li data-filter=".audit"><a href=""><i class="fa fa-cloud" aria-hidden="true"></i>{{'translate.ServicesLink51'|trans}}</a></li>*/
/*                         <li data-filter=".operational"><a href=""><i class="fa fa-pie-chart" aria-hidden="true"></i>{{'translate.ServicesLink61'|trans}}</a></li>*/
/*                         <li data-filter=".training"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>{{'translate.ServicesLink71'|trans}}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="portfolio_items ">*/
/*                             <div class="portfolio_item optimization portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink12'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink13'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/performance.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item indoor portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink21'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink23'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/indoorSolution.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item design portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink32'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink33'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/desgin.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item benchmarking portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink41'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink43'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/bunch.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item audit portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink51'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink53'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/audit.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item operational portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink61'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink63'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/strategie.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="portfolio_item training portfolio_2">*/
/*                                 <div class="grid-sizer-2"></div>*/
/*                                 <div class="single_facilities col-sm-7 painting building painting adversting">*/
/*                                     <div class="who_we_area">*/
/*                                         <div class="subtittle">*/
/*                                             <h2>{{'translate.ServicesLink71'|trans}}</h2>*/
/*                                         </div>*/
/*                                         <p>{{'translate.ServicesLink73'|trans}}</p>*/
/*                                         <a href="{{ path('contact') }}" class="button_all">{{'translate.ServicesLink0'|trans}}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="single_facilities col-sm-5 painting webdesign">*/
/*                                     <img src="{{asset('bundles/test/images/training2.jpg')}}" alt="">*/
/*                                 </div>*/
/*                             </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End Our Services Area -->*/
/* {% endblock %}*/
