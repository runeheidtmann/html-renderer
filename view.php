<?php 

  include('HtmlRenderer.php');

  // All templates must be named alias.heidt.php.
  // In this case, we get the data from the $_POST.
  // In other scenarios, we might get the data from a route and from some database.
  
  $templateAlias = $_POST['template'];
 
  // When object is created it prints the rendered page.

  new HtmlRenderer($_POST, $templateAlias);
  




?>