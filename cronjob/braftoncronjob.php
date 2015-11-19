<?php

if ( !defined('ABSPATH') ) {
    /** Set up WordPress environment */
    require_once( '../../../../wp-load.php' );
}

include_once '../../BraftonWordPressPlugin-master/BraftonError.php';
include_once '../../BraftonWordPressPlugin-master/BraftonOptions.php';
include_once '../../BraftonWordPressPlugin-master/BraftonFeedLoader.php';
include_once '../../BraftonWordPressPlugin-master/BraftonArticleLoader.php';
include_once '../../BraftonWordPressPlugin-master/BraftonVideoLoader.php';
include_once '../../BraftonWordPressPlugin-master/BraftonMarpro.php';
include_once '../../BraftonWordPressPlugin-master/BraftonCustomType.php';
include_once '../../BraftonWordPressPlugin-master/admin/BraftonAdminFunctions.php';
include_once '../../BraftonWordPressPlugin-master/BraftonXML.php';
include_once '../../BraftonWordPressPlugin-master/BraftonUpdate.php';


$import_articles = new BraftonArticleLoader();
$import_articles->ImportArticles();

$import_videos = new BraftonVideoLoader();
$import_videos->ImportVideos();

?>
