<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // proyecto_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proyecto_homepage');
            }

            return array (  '_controller' => 'Proyecto\\ProyectoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'proyecto_homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/sonata/notification/message')) {
                    // admin_sonata_notification_message_list
                    if ($pathinfo === '/admin/sonata/notification/message/list') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::listAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_list',  '_route' => 'admin_sonata_notification_message_list',);
                    }

                    // admin_sonata_notification_message_batch
                    if ($pathinfo === '/admin/sonata/notification/message/batch') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::batchAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_batch',  '_route' => 'admin_sonata_notification_message_batch',);
                    }

                    // admin_sonata_notification_message_delete
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_delete')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::deleteAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_delete',));
                    }

                    // admin_sonata_notification_message_show
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_show')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::showAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_show',));
                    }

                    // admin_sonata_notification_message_export
                    if ($pathinfo === '/admin/sonata/notification/message/export') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::exportAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_export',  '_route' => 'admin_sonata_notification_message_export',);
                    }

                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
