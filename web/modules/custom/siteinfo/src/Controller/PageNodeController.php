<?php
namespace Drupal\siteinfo\Controller;

/**
 * @file
 * Contains \Drupal\siteinfo\Controller
 */


use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\Core\Controller\ControllerBase;


/**
 * A Page Node Controller
 */
class PageNodeController extends ControllerBase {

    /**
     * {@inheritdoc}
     */
    public function content($API_key,$nid) {
        $site_config = \Drupal::config('system.site');
        $siteapikey = $site_config->get('siteapikey');
        if ($API_key!=$siteapikey) {
            throw new AccessDeniedHttpException();
        }

        //$node = \Drupal::entityTypeManager()->getListBuilder('node')->getStorage()->loadByProperties($values);
      // $te = $node->get('field_body')->getValue();
      // print_r($te); exit;

        $nid = $nid;
        if($nid>0) {
            $entity_type = 'node';

            $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
            $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
            $node = $storage->load($nid);
            if(is_object($node)) {
                $body = $node->body->getString();
                $NodeID = $node->nid->getString();

                $title = $node->title->getString();
            }
            //echo $title; exit;
            if($NodeID>0) {
                $returnArray = array('nid' => $NodeID, 'title' => $title);
                echo json_encode($returnArray);
            } else{
                echo 'Record not found';
            }
            exit;
        }
    }

}

?>