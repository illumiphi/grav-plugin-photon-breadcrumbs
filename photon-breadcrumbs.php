<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;

class PhotonBreadcrumbsPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * set variables for templates.
     */
    public function onTwigSiteVariables()
    {
        require_once __DIR__ . '/classes/breadcrumbs.php';

        $this->grav['twig']->twig_vars['breadcrumbs'] = new Breadcrumbs();

    }
}
