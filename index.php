<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  
  case 'viewArticle':
    viewArticle();
    break;
  default:
    homepage();
}



function viewArticle() {
  if ( !isset($_GET["id"]) || !$_GET["id"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["id"] );
  $results['pageTitle'] = $results['article']->title . " | Widget News";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function homepage() {
  $results = array();
  $data = Article::getList(  );
  $countRows = Article::getCountRows();
  $results['countRows'] = $countRows;
  $results['articles'] = $data['results'];
  
  $results['pageTitle'] = "Widget News";
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>
