<?php
namespace Grav\Plugin;

use Grav\Common\Grav;

class Breadcrumbs
{

    public function __construct()
    {
    }


    /**
     * Get from article
     *
     * @return array
     */
    public function getFromArticle( $article )
    {

      $hierarchy = array();

      if (!$article) {
          return;
      }

      // if (!$article->root()) {

          $article = $article->parent();

          while ($article && !$article->root()) {
              $hierarchy[$article->url()] = $article;
              $article = $article->parent();
          }
      // }

      return array_reverse($hierarchy);
    }

}
