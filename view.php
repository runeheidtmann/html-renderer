<?php 

  include('HtmlRenderer.php');

  // When object is created it prints the rendered page.
  new HtmlRenderer(getHtmlTemplate());
  

/**
 * Gives renderer html-template with placeholders to be replaced with userinputs.
 * 
 * Make sure to put the excact amount of placeholders that will be needed. 
 * Whilst the script will ignore any key-value-pairs in excess, placeholders in excess will not be ignored.
 * and if not replaced, the output will include placeholders like  {{placeholder_in_excess}}
 * 
 * It wil take a lot more logic for the script to count and ignore placeholders in excess.
 */ 

 function getHtmlTemplate(){

    return '<!DOCTYPE html>
    <html>
      <head>
        <title></title>
      </head>
      <body>
        <p>
          Hello {{first_name}} {{last_name}}!
        </p>
        <p>
          I will call you tomorrow on this nummber: {{phone}}
        </p>
      </body>
    </html>';
}


?>