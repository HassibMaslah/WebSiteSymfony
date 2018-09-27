<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/home$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::indexAction',));
        }

        // contact
        if (preg_match('#^/(?P<_locale>[^/]++)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::contactAction',));
        }

        // services
        if (preg_match('#^/(?P<_locale>[^/]++)/services$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'services')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::servicesAction',));
        }

        // training
        if (preg_match('#^/(?P<_locale>[^/]++)/training$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'training')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::trainingAction',));
        }

        // references
        if (preg_match('#^/(?P<_locale>[^/]++)/references$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'references')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::referencesAction',));
        }

        // admin
        if (preg_match('#^/(?P<_locale>[^/]++)/administration$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin')), array (  '_controller' => 'testBundle\\Controller\\AdminController::adminAction',));
        }

        // admin2
        if (preg_match('#^/(?P<_locale>[^/]++)/administration/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin2')), array (  '_controller' => 'testBundle\\Controller\\AdminController::admin2Action',));
        }

        // error
        if (preg_match('#^/(?P<_locale>[^/]++)/error404$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'error')), array (  '_controller' => 'testBundle\\Controller\\DefaultController::errorAction',));
        }

        // logout
        if (preg_match('#^/(?P<_locale>[^/]++)/home$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'logout')), array (  '_controller' => 'testBundle\\Controller\\AdminController::logoutAction',));
        }

        // languagesFR
        if ($pathinfo === '/fr/home') {
            return array (  '_controller' => 'testBundle\\Controller\\DefaultController::indexAction',  '_route' => 'languagesFR',);
        }

        // languagesEN
        if ($pathinfo === '/en/home') {
            return array (  '_controller' => 'testBundle\\Controller\\DefaultController::indexAction',  '_route' => 'languagesEN',);
        }

        if (0 === strpos($pathinfo, '/administration')) {
            // eventt
            if (0 === strpos($pathinfo, '/administration/evennement') && preg_match('#^/administration/evennement/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventt')), array (  '_controller' => 'testBundle\\Controller\\EventtController::eventtAction',));
            }

            // addSlider
            if (0 === strpos($pathinfo, '/administration/addSlider') && preg_match('#^/administration/addSlider/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSlider')), array (  '_controller' => 'testBundle\\Controller\\SlidersController::sliderAction',));
            }

        }

        if (0 === strpos($pathinfo, '/slider')) {
            // slider
            if (preg_match('#^/slider/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider')), array (  '_controller' => 'testBundle\\Controller\\SliderController::indexAction',));
            }

            // slider_show
            if (preg_match('#^/slider/(?P<id>[^/]++)/show/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_show')), array (  '_controller' => 'testBundle\\Controller\\SliderController::showAction',));
            }

            // slider_new
            if (0 === strpos($pathinfo, '/slider/new') && preg_match('#^/slider/new/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_new')), array (  '_controller' => 'testBundle\\Controller\\SliderController::newAction',));
            }

            // slider_create
            if (0 === strpos($pathinfo, '/slider/create') && preg_match('#^/slider/create/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_slider_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_create')), array (  '_controller' => 'testBundle\\Controller\\SliderController::createAction',));
            }
            not_slider_create:

            // slider_edit
            if (preg_match('#^/slider/(?P<id>[^/]++)/edit/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_edit')), array (  '_controller' => 'testBundle\\Controller\\SliderController::editAction',));
            }

            // slider_update
            if (preg_match('#^/slider/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_slider_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_update')), array (  '_controller' => 'testBundle\\Controller\\SliderController::updateAction',));
            }
            not_slider_update:

            // slider_delete
            if (preg_match('#^/slider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_slider_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slider_delete')), array (  '_controller' => 'testBundle\\Controller\\SliderController::deleteAction',));
            }
            not_slider_delete:

        }

        // activity1
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity1$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity1')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity1Action',));
        }

        // activity2
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity2$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity2')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity2Action',));
        }

        // activity3
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity3$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity3')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity3Action',));
        }

        // activity4
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity4$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity4')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity4Action',));
        }

        // activity5
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity5$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity5')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity5Action',));
        }

        // activity6
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity6$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity6')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity6Action',));
        }

        // activity7
        if (preg_match('#^/(?P<_locale>[^/]++)/activity/activity7$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity7')), array (  '_controller' => 'testBundle\\Controller\\ActivityController::activity7Action',));
        }

        // redirection
        if ($pathinfo === '/redirection') {
            return array (  '_controller' => 'testBundle\\Controller\\DefaultController::redirectionAction',  '_route' => 'redirection',);
        }

        // sendMail
        if ($pathinfo === '/sendMail') {
            return array (  '_controller' => 'testBundle\\Controller\\DefaultController::sendMailAction',  '_route' => 'sendMail',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
