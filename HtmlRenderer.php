<?php

/**
* Html template parser
*
* Input any key->value pair to replace placeholders in html template.
*
* @author   Rune Heidtmann
* @version  0.0.2
* @link     https://github.com/mariodian/bitfinex-api-php
*/

class HtmlRenderer{


    /**
    * @param array $valuePairs  Obtained from $_POST given to the view.
    * @param string $html Obtained from the view, that holds the $html-template with placeholders. 
    */    

    function __construct($html){
        
        echo $this->render_html($_POST,$html);
        
    }

    /**
    * Where the replacement happens.
    *
    * The build in php-function preg_replace_callback performs a regular expression search and replaces using a callback.
    * 
    */  
    
    function render_html($valuePairs, $html) {
        $regex = "!{{\s*(?P<key>[a-zA-Z0-9_-]+?)\s*}}!";
       
        //takes 3 arguments. Regex, callback function, html with placeholders.
        return \preg_replace_callback($regex, 
       
        //A callback that will be called and passed an array of matched elements in the subject string. The callback should return the replacement string. This is the callback signature:    
                function($match) use($valuePairs){
                    return $valuePairs[$match["key"]]; }
                ,$html);  
    }
    
    
}