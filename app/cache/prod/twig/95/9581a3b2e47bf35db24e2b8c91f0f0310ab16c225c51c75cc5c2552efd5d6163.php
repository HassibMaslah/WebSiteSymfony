<?php

/* ::base.html.twig */
class __TwigTemplate_f6f76bf43d85865a8f34a60ae852fb217112b6ebb431ab72ed843a65fc738630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9369f75c59d5a7efde3c420b7bfce066fc3d914bffc24e7ac2e3637db233cc86 = $this->env->getExtension("native_profiler");
        $__internal_9369f75c59d5a7efde3c420b7bfce066fc3d914bffc24e7ac2e3637db233cc86->enter($__internal_9369f75c59d5a7efde3c420b7bfce066fc3d914bffc24e7ac2e3637db233cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Telcotec</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/faviconTelco.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    <!-- Bootstrap CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Animate CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/animate/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Icon CSS-->
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Camera Slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/camera-slider/camera.css"), "html", null, true);
        echo "\">
    <!-- Owlcarousel CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/owl_carousel/owl.carousel.css"), "html", null, true);
        echo "\" media=\"all\">

    <!--Theme Styles CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/css/style.css"), "html", null, true);
        echo "\" media=\"all\" />
     <!-- styleadmin CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/css/styleadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.min.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>
    <body>
<!-- Preloader >
    <div class=\"preloader\"></div-->
 <!--  Login -->
<section id=\"loginn\" class=\"wow fadeInUp animated\">

<div class=\"containerr\">

    \t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<div class=\"panel panel-login\">
                    <span class=\"input-group-addon login_hide\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"active\" id=\"login-form-link\">Login</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<form id=\"login-form\"  method=\"POST\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\" role=\"form\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\" value=\"remember-me\">
\t\t\t\t\t\t\t\t\t\t<label for=\"remember\"> Remember Me</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"  name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" >Log In</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<div class=\"lum\">
\t<!-- Top Header_Area -->
\t<section class=\"top_header_area\">
\t    <div class=\"container\">
            <ul class=\"nav navbar-nav top_nav\">
                <li><a ><i class=\"fa fa-phone\"></i>(+216) 71 857 498</a></li>
                <li><a href=\"mailto:contact@telcotec.tn\"><i class=\"fa fa-envelope-o\"></i>contact@telcotec.tn</a></li>
                <li><a ><i class=\"fa fa-map-marker\"></i>Telcotec Bloc I2 A14 Elgazala Technopark, Ariana  - Tunisie</a></li> 
                ";
        // line 96
        if (array_key_exists("name", $context)) {
            // line 97
            echo "                <li><a href=\"\"><i class=\"fa fa-user-secret\"></i>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 99
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right social_nav\">
                <li><a href=\"https://www.facebook.com/telcotec2015/\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"https://plus.google.com/114011996287304477560\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"https://www.linkedin.com/company-beta/11186380/\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                
                ";
        // line 105
        if (array_key_exists("name", $context)) {
            // line 106
            echo "                <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" ><i class=\"fa fa-sign-out lg\"></i></a></li>
                 
                ";
        } else {
            // line 109
            echo "                <li><a href=\"#\"><i class=\"fa fa-sign-in lg\" aria-hidden=\"true\"></i></a></li>
                ";
        }
        // line 111
        echo "                
            </ul>
\t    </div>
\t</section>
\t<!-- End Top Header_Area -->
\t<!-- End Login -->
\t<!-- Header_Area -->
    <nav class=\"navbar navbar-default header_aera\" id=\"main_navbar\">
        <div class=\"container\">
           
            <div class=\"col-md-2 p0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-10 p0\">
                <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown submenu\">
                        ";
        // line 138
        if (array_key_exists("name", $context)) {
            // line 139
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link1"), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 141
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link1"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 143
        echo "                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link2"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link3"), "html", null, true);
        echo "</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("activity1");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity1"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("activity2");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity2"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("activity3");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity3"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("activity4");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity4"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("activity5");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity5"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("activity6");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity6"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("activity7");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.activity7"), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("references");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link4"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("training");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link5"), "html", null, true);
        echo "</a>
                        </li>
                        <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link6"), "html", null, true);
        echo "</a></li>
                        <li class=\"dropdown submenu\">
                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.link7"), "html", null, true);
        echo "</i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("languagesFR");
        echo "\">Fr</a></li>
                                <li><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("languagesEN");
        echo "\">En</a></li>
                            </ul>
                        </li>
                        <!--li><a href=\"#\" class=\"nav_searchFrom\"><i class=\"fa fa-search\"></i></a></li-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
\t<!-- End Header_Area -->

        ";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo "        
    
<!-- Footer Area -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"footer_row row\">
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutComp"), "html", null, true);
        echo "</h2>
                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/images/logo-footer.png"), "html", null, true);
        echo "\" alt=\"Telcotec\" class=\"wow jackInTheBox animated\">
                    <p>";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutCompText"), "html", null, true);
        echo "</p>
                    <ul class=\"socail_icon\">
                        <li><a href=\"https://www.facebook.com/telcotec2015/\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"https://plus.google.com/114011996287304477560\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"https://www.linkedin.com/company-beta/11186380/\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                    <br>
                    <!--div id=\"google_translate_element\"></div-->
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about quick\">
                    <h2>";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick"), "html", null, true);
        echo "</h2>
                    <ul class=\"quick_link\">
                        <li><a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick1"), "html", null, true);
        echo " </a></li>
                        <li><a href=\"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick2"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick3"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick4"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 207
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick5"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><i class=\"fa fa-chevron-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.Quick6"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.twiter"), "html", null, true);
        echo "</h2>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactUs"), "html", null, true);
        echo "</h2>
                    <address>
                        <p>";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactUsText"), "html", null, true);
        echo ":</p>
                        <ul class=\"my_address\">
                            <li><a href=\"mailto:contact@telcotec.tn\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>contact@telcotec.tn</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>(+216) 71 857 498</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><span>Telcotec Bloc I2 A14 Elgazala Technopark, Ariana  - Tunisie</span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <marquee behavior=\"scroll\" direction=\"left\"><h3 id=\"dateNow\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i></h3></marquee>
        <div class=\"copyright_area\">
            ";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.copyright"), "html", null, true);
        echo "
        </div>
    </footer>
    </div>
    ";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 236
        echo "        <!-- jQuery JS -->
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JS -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Animate JS -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/animate/wow.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Camera Slider -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/camera-slider/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/camera-slider/camera.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Isotope JS -->
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Progress JS -->
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/Counter-Up/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/Counter-Up/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Owlcarousel JS -->
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/owl_carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Stellar JS -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/vendors/stellar/jquery.stellar.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme JS -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/theme.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/jqu.js"), "html", null, true);
        echo "\"></script>

   <!--script type=\"text/javascript\">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>
    <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script-->
</body> 
</html>
";
        
        $__internal_9369f75c59d5a7efde3c420b7bfce066fc3d914bffc24e7ac2e3637db233cc86->leave($__internal_9369f75c59d5a7efde3c420b7bfce066fc3d914bffc24e7ac2e3637db233cc86_prof);

    }

    // line 181
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c669d0923cafba8929b1c7d0aad1cf43c79143b56a50cfe62f6a51c0ca0c19 = $this->env->getExtension("native_profiler");
        $__internal_b3c669d0923cafba8929b1c7d0aad1cf43c79143b56a50cfe62f6a51c0ca0c19->enter($__internal_b3c669d0923cafba8929b1c7d0aad1cf43c79143b56a50cfe62f6a51c0ca0c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3c669d0923cafba8929b1c7d0aad1cf43c79143b56a50cfe62f6a51c0ca0c19->leave($__internal_b3c669d0923cafba8929b1c7d0aad1cf43c79143b56a50cfe62f6a51c0ca0c19_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b435c2492dba66615829657567c75d2649b80f49159a23d8376f57c75401c16 = $this->env->getExtension("native_profiler");
        $__internal_2b435c2492dba66615829657567c75d2649b80f49159a23d8376f57c75401c16->enter($__internal_2b435c2492dba66615829657567c75d2649b80f49159a23d8376f57c75401c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b435c2492dba66615829657567c75d2649b80f49159a23d8376f57c75401c16->leave($__internal_2b435c2492dba66615829657567c75d2649b80f49159a23d8376f57c75401c16_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 235,  526 => 181,  508 => 257,  504 => 256,  499 => 254,  494 => 252,  489 => 250,  485 => 249,  480 => 247,  476 => 246,  471 => 244,  467 => 243,  462 => 241,  457 => 239,  452 => 237,  449 => 236,  447 => 235,  440 => 231,  425 => 219,  420 => 217,  412 => 212,  403 => 208,  397 => 207,  391 => 206,  385 => 205,  379 => 204,  373 => 203,  368 => 201,  355 => 191,  351 => 190,  347 => 189,  338 => 182,  336 => 181,  322 => 170,  318 => 169,  313 => 167,  306 => 165,  299 => 163,  291 => 160,  282 => 156,  276 => 155,  270 => 154,  264 => 153,  258 => 152,  252 => 151,  246 => 150,  241 => 148,  233 => 145,  229 => 143,  221 => 141,  213 => 139,  211 => 138,  197 => 129,  177 => 111,  173 => 109,  166 => 106,  164 => 105,  156 => 99,  150 => 97,  148 => 96,  106 => 57,  72 => 26,  67 => 24,  61 => 21,  56 => 19,  51 => 17,  46 => 15,  41 => 13,  36 => 11,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>Telcotec</title>*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="icon" href="{{asset('bundles/test/images/faviconTelco.ico')}}" type="image/x-icon" />*/
/*     <!-- Bootstrap CSS -->*/
/*     <link href="{{asset('bundles/test/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Animate CSS -->*/
/*     <link href="{{asset('bundles/test/vendors/animate/animate.css')}}" rel="stylesheet">*/
/*     <!-- Icon CSS-->*/
/* 	<link rel="stylesheet" href="{{asset('bundles/test/vendors/font-awesome/css/font-awesome.min.css')}}">*/
/*     <!-- Camera Slider -->*/
/*     <link rel="stylesheet" href="{{asset('bundles/test/vendors/camera-slider/camera.css')}}">*/
/*     <!-- Owlcarousel CSS-->*/
/* 	<link rel="stylesheet" type="text/css" href="{{asset('bundles/test/vendors/owl_carousel/owl.carousel.css')}}" media="all">*/
/* */
/*     <!--Theme Styles CSS-->*/
/* 	<link rel="stylesheet" type="text/css" href="{{asset('bundles/test/css/style.css')}}" media="all" />*/
/*      <!-- styleadmin CSS -->*/
/*     <link href="{{asset('bundles/test/css/styleadmin.css')}}" rel="stylesheet">*/
/*     */
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="js/html5shiv.min.js"></script>*/
/*     <script src="js/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/*     <body>*/
/* <!-- Preloader >*/
/*     <div class="preloader"></div-->*/
/*  <!--  Login -->*/
/* <section id="loginn" class="wow fadeInUp animated">*/
/* */
/* <div class="containerr">*/
/* */
/*     	<div class="row">*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<div class="panel panel-login">*/
/*                     <span class="input-group-addon login_hide"><i class="fa fa-times"></i></span>*/
/* 					<div class="panel-heading">*/
/* 						<div class="row">*/
/* 							<div class="col-xs-6">*/
/* 								<a href="#" class="active" id="login-form-link">Login</a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<hr>*/
/* 					</div>*/
/* 					<div class="panel-body">*/
/* 						<div class="row">*/
/* 							<div class="col-lg-12">*/
/* 								<form id="login-form"  method="POST" action="{{path('admin')}}" role="form" style="display: block;">*/
/* 									<div class="form-group">*/
/* 										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>*/
/* 									</div>*/
/* 									<div class="form-group text-center">*/
/* 										<input type="checkbox" tabindex="3" class="" name="remember" id="remember" value="remember-me">*/
/* 										<label for="remember"> Remember Me</label>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<div class="row">*/
/* 											<div class="col-sm-6 col-sm-offset-3">*/
/* 												<button type="submit"  name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" >Log In</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</form>*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* */
/* <div class="lum">*/
/* 	<!-- Top Header_Area -->*/
/* 	<section class="top_header_area">*/
/* 	    <div class="container">*/
/*             <ul class="nav navbar-nav top_nav">*/
/*                 <li><a ><i class="fa fa-phone"></i>(+216) 71 857 498</a></li>*/
/*                 <li><a href="mailto:contact@telcotec.tn"><i class="fa fa-envelope-o"></i>contact@telcotec.tn</a></li>*/
/*                 <li><a ><i class="fa fa-map-marker"></i>Telcotec Bloc I2 A14 Elgazala Technopark, Ariana  - Tunisie</a></li> */
/*                 {% if name is defined%}*/
/*                 <li><a href=""><i class="fa fa-user-secret"></i>{{name}}</a></li>*/
/*                 {%endif%}*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right social_nav">*/
/*                 <li><a href="https://www.facebook.com/telcotec2015/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>*/
/*                 <li><a href="https://plus.google.com/114011996287304477560"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>*/
/*                 <li><a href="https://www.linkedin.com/company-beta/11186380/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>*/
/*                 */
/*                 {% if name is defined%}*/
/*                 <li><a  href="{{path('logout')}}" ><i class="fa fa-sign-out lg"></i></a></li>*/
/*                  */
/*                 {% else %}*/
/*                 <li><a href="#"><i class="fa fa-sign-in lg" aria-hidden="true"></i></a></li>*/
/*                 {%endif%}*/
/*                 */
/*             </ul>*/
/* 	    </div>*/
/* 	</section>*/
/* 	<!-- End Top Header_Area -->*/
/* 	<!-- End Login -->*/
/* 	<!-- Header_Area -->*/
/*     <nav class="navbar navbar-default header_aera" id="main_navbar">*/
/*         <div class="container">*/
/*            */
/*             <div class="col-md-2 p0">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('homepage') }}"><img src="{{asset('bundles/test/images/logo.png')}}" alt=""></a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="col-md-10 p0">*/
/*                 <div class="collapse navbar-collapse" id="min_navbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown submenu">*/
/*                         {% if name is defined%}*/
/*                             <a href="{{ path('homepage') }}" >{{'translate.link1'|trans}}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ path('homepage') }}" >{{'translate.link1'|trans}}</a>*/
/*                         {%endif%}*/
/*                         </li>*/
/*                         <li class="dropdown submenu">*/
/*                             <a href="{{ path('services') }}">{{'translate.link2'|trans}}</a>*/
/*                         </li>*/
/*                         <li class="dropdown submenu">*/
/*                             <a href="" class="dropdown-toggle" data-toggle="dropdown">{{'translate.link3'|trans}}</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('activity1') }}">{{'translate.activity1'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity2') }}">{{'translate.activity2'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity3') }}">{{'translate.activity3'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity4') }}">{{'translate.activity4'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity5') }}">{{'translate.activity5'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity6') }}">{{'translate.activity6'|trans}}</a></li>*/
/*                                 <li><a href="{{ path('activity7') }}">{{'translate.activity7'|trans}}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown submenu">*/
/*                             <a href="{{ path('references') }}" >{{'translate.link4'|trans}}</a>*/
/*                         </li>*/
/*                         <li class="dropdown submenu">*/
/*                             <a href="{{ path('training') }}">{{'translate.link5'|trans}}</a>*/
/*                         </li>*/
/*                         <li><a href="{{ path('contact') }}">{{'translate.link6'|trans}}</a></li>*/
/*                         <li class="dropdown submenu">*/
/*                             <a href="" class="dropdown-toggle" data-toggle="dropdown">{{'translate.link7'|trans}}</i></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('languagesFR') }}">Fr</a></li>*/
/*                                 <li><a href="{{ path('languagesEN') }}">En</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!--li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li-->*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div>*/
/*         </div><!-- /.container -->*/
/*     </nav>*/
/* 	<!-- End Header_Area -->*/
/* */
/*         {% block body %}{% endblock %}*/
/*         */
/*     */
/* <!-- Footer Area -->*/
/*     <footer class="footer_area">*/
/*         <div class="container">*/
/*             <div class="footer_row row">*/
/*                 <div class="col-md-3 col-sm-6 footer_about">*/
/*                     <h2>{{'translate.aboutComp'|trans}}</h2>*/
/*                     <img src="{{asset('bundles/test/images/logo-footer.png')}}" alt="Telcotec" class="wow jackInTheBox animated">*/
/*                     <p>{{'translate.aboutCompText'|trans}}</p>*/
/*                     <ul class="socail_icon">*/
/*                         <li><a href="https://www.facebook.com/telcotec2015/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>*/
/*                         <li><a href="https://plus.google.com/114011996287304477560"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>*/
/*                         <li><a href="https://www.linkedin.com/company-beta/11186380/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>*/
/*                     </ul>*/
/*                     <br>*/
/*                     <!--div id="google_translate_element"></div-->*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 footer_about quick">*/
/*                     <h2>{{'translate.Quick'|trans}}</h2>*/
/*                     <ul class="quick_link">*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick1'|trans}} </a></li>*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick2'|trans}}</a></li>*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick3'|trans}}</a></li>*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick4'|trans}}</a></li>*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick5'|trans}}</a></li>*/
/*                         <li><a href="{{ path('services') }}"><i class="fa fa-chevron-right"></i>{{'translate.Quick6'|trans}}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 footer_about">*/
/*                     <h2>{{'translate.twiter'|trans}}</h2>*/
/*                     <a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>*/
/*                     <a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6 footer_about">*/
/*                     <h2>{{'translate.contactUs'|trans}}</h2>*/
/*                     <address>*/
/*                         <p>{{'translate.contactUsText'|trans}}:</p>*/
/*                         <ul class="my_address">*/
/*                             <li><a href="mailto:contact@telcotec.tn"><i class="fa fa-envelope" aria-hidden="true"></i>contact@telcotec.tn</a></li>*/
/*                             <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>(+216) 71 857 498</a></li>*/
/*                             <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Telcotec Bloc I2 A14 Elgazala Technopark, Ariana  - Tunisie</span></a></li>*/
/*                         </ul>*/
/*                     </address>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <marquee behavior="scroll" direction="left"><h3 id="dateNow"><i class="fa fa-clock-o" aria-hidden="true"></i></h3></marquee>*/
/*         <div class="copyright_area">*/
/*             {{'translate.copyright'|trans}}*/
/*         </div>*/
/*     </footer>*/
/*     </div>*/
/*     {% block javascripts %}{% endblock %}*/
/*         <!-- jQuery JS -->*/
/*     <script src="{{asset('bundles/test/js/jquery-1.12.0.min.js')}}"></script>*/
/*     <!-- Bootstrap JS -->*/
/*     <script src="{{asset('bundles/test/js/bootstrap.min.js')}}"></script>*/
/*     <!-- Animate JS -->*/
/*     <script src="{{asset('bundles/test/vendors/animate/wow.min.js')}}"></script>*/
/*     <!-- Camera Slider -->*/
/*     <script src="{{asset('bundles/test/vendors/camera-slider/jquery.easing.1.3.js')}}"></script>*/
/*     <script src="{{asset('bundles/test/vendors/camera-slider/camera.min.js')}}"></script>*/
/*     <!-- Isotope JS -->*/
/*     <script src="{{asset('bundles/test/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/test/vendors/isotope/isotope.pkgd.min.js')}}"></script>*/
/*     <!-- Progress JS -->*/
/*     <script src="{{asset('bundles/test/vendors/Counter-Up/jquery.counterup.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/test/vendors/Counter-Up/waypoints.min.js')}}"></script>*/
/*     <!-- Owlcarousel JS -->*/
/*     <script src="{{asset('bundles/test/vendors/owl_carousel/owl.carousel.min.js')}}"></script>*/
/*     <!-- Stellar JS -->*/
/*     <script src="{{asset('bundles/test/vendors/stellar/jquery.stellar.js')}}"></script>*/
/*     <!-- Theme JS -->*/
/*     <script src="{{asset('bundles/test/js/theme.js')}}"></script>*/
/*     <script src="{{asset('bundles/test/js/jqu.js')}}"></script>*/
/* */
/*    <!--script type="text/javascript">*/
/*     function googleTranslateElementInit() {*/
/*     new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');*/
/*     }*/
/*     </script>*/
/*     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script-->*/
/* </body> */
/* </html>*/
/* */
