<?php

/* testBundle::layoutcontact.html.twig */
class __TwigTemplate_20afc014088686e54999a3a11549d2fe341bdfe78ec16801783ac1fe4b0c04c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle::layoutcontact.html.twig", 1);
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
        $__internal_95b479c6de97855f2aaf5dc6a5d000184325096e4d0d89d8b356b2ab2e4f2f51 = $this->env->getExtension("native_profiler");
        $__internal_95b479c6de97855f2aaf5dc6a5d000184325096e4d0d89d8b356b2ab2e4f2f51->enter($__internal_95b479c6de97855f2aaf5dc6a5d000184325096e4d0d89d8b356b2ab2e4f2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle::layoutcontact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b479c6de97855f2aaf5dc6a5d000184325096e4d0d89d8b356b2ab2e4f2f51->leave($__internal_95b479c6de97855f2aaf5dc6a5d000184325096e4d0d89d8b356b2ab2e4f2f51_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee77d700429f18fe726a66dd53849890d94c05b9076a461351896713b38e79c = $this->env->getExtension("native_profiler");
        $__internal_dee77d700429f18fe726a66dd53849890d94c05b9076a461351896713b38e79c->enter($__internal_dee77d700429f18fe726a66dd53849890d94c05b9076a461351896713b38e79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- Banner area -->
    <section class=\"banner_area\" data-stellar-background-ratio=\"0.5\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactUs"), "html", null, true);
        echo "</h2>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class=\"contact_map\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.8871393210843!2d10.18580942240152!3d36.89304811987611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb716548e969%3A0xe69b7aad383f00f3!2sTelcotec!5e0!3m2!1sfr!2s!4v1503523415588\"></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class=\"all_contact_info\">
        <div class=\"container\">
            <div class=\"row contact_row\">
                <div class=\"col-sm-6 contact_info\">
                    <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactInfo"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.aboutCompText"), "html", null, true);
        echo ".</p>

                       <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactInfoText"), "html", null, true);
        echo "</p>
                    <div class=\"location\">
                        <div class=\"location_laft\">
                            <a class=\"f_location\" href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactLoc"), "html", null, true);
        echo ": </a>
                            <a href=\"#\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactPhone"), "html", null, true);
        echo ": </a>
                            <a href=\"#\">email: </a>
                        </div>
                        <div class=\"address\">
                            <a href=\"#\"> Technopark Elghazala pépinière, bloc B232, <br>Raoued, Tunis </a>
                            <a href=\"#\">(+216) 71 857 498</a>
                            <a href=\"mailto:contact@telcotec.tn\">contact@telcotec.tn</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 contact_info send_message\">
                    <h2>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactMsg"), "html", null, true);
        echo "</h2>
                    <form class=\"form-inline contact_box\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("sendMail");
        echo "\" method=\"POST\">
                        <input type=\"text\" class=\"form-control input_box\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactPlcName"), "html", null, true);
        echo "*\" name=\"name\">
                        <input type=\"text\" class=\"form-control input_box\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactPlcEmail"), "html", null, true);
        echo "*\" name=\"email\">
                        <input type=\"text\" class=\"form-control input_box\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactPlcSubject"), "html", null, true);
        echo "\" name=\"subject\">
                        <textarea class=\"form-control input_box\" placeholder=\"Message\" name=\"message\"></textarea>
                        <button type=\"submit\" class=\"btn btn-default\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translate.contactSendMsg"), "html", null, true);
        echo "</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    ";
        
        $__internal_dee77d700429f18fe726a66dd53849890d94c05b9076a461351896713b38e79c->leave($__internal_dee77d700429f18fe726a66dd53849890d94c05b9076a461351896713b38e79c_prof);

    }

    public function getTemplateName()
    {
        return "testBundle::layoutcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  81 => 27,  77 => 26,  71 => 23,  66 => 21,  62 => 20,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*     <!-- Banner area -->*/
/*     <section class="banner_area" data-stellar-background-ratio="0.5">*/
/*         <h2>{{'translate.contactUs'|trans}}</h2>*/
/*     </section>*/
/*     <!-- End Banner area -->*/
/* */
/*     <!-- Map -->*/
/*     <div class="contact_map">*/
/*         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.8871393210843!2d10.18580942240152!3d36.89304811987611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb716548e969%3A0xe69b7aad383f00f3!2sTelcotec!5e0!3m2!1sfr!2s!4v1503523415588"></iframe>*/
/*     </div>*/
/*     <!-- End Map -->*/
/* */
/*     <!-- All contact Info -->*/
/*     <section class="all_contact_info">*/
/*         <div class="container">*/
/*             <div class="row contact_row">*/
/*                 <div class="col-sm-6 contact_info">*/
/*                     <h2>{{'translate.contactInfo'|trans}}</h2>*/
/*                     <p>{{'translate.aboutCompText'|trans}}.</p>*/
/* */
/*                        <p>{{'translate.contactInfoText'|trans}}</p>*/
/*                     <div class="location">*/
/*                         <div class="location_laft">*/
/*                             <a class="f_location" href="#">{{'translate.contactLoc'|trans}}: </a>*/
/*                             <a href="#">{{'translate.contactPhone'|trans}}: </a>*/
/*                             <a href="#">email: </a>*/
/*                         </div>*/
/*                         <div class="address">*/
/*                             <a href="#"> Technopark Elghazala pépinière, bloc B232, <br>Raoued, Tunis </a>*/
/*                             <a href="#">(+216) 71 857 498</a>*/
/*                             <a href="mailto:contact@telcotec.tn">contact@telcotec.tn</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 contact_info send_message">*/
/*                     <h2>{{'translate.contactMsg'|trans}}</h2>*/
/*                     <form class="form-inline contact_box" action="{{ path('sendMail') }}" method="POST">*/
/*                         <input type="text" class="form-control input_box" placeholder="{{'translate.contactPlcName'|trans}}*" name="name">*/
/*                         <input type="text" class="form-control input_box" placeholder="{{'translate.contactPlcEmail'|trans}}*" name="email">*/
/*                         <input type="text" class="form-control input_box" placeholder="{{'translate.contactPlcSubject'|trans}}" name="subject">*/
/*                         <textarea class="form-control input_box" placeholder="Message" name="message"></textarea>*/
/*                         <button type="submit" class="btn btn-default">{{'translate.contactSendMsg'|trans}}</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- End All contact Info -->*/
/* */
/*     {% endblock %}*/
/* */
