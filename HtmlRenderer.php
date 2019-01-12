<?php

/**
* Html template parser
*
* Input any key->value pair to replace placeholders in html template.
*
* @author   Rune Heidtmann
* @version  0.0.1
* @link     https://github.com/runeheidtmann/html-renderer
*/

class HtmlRenderer{


    /**
    * @param array $valuePairs  Obtained from $_POST.
    * @param string $html Obtained from the view, that holds the $html-template with placeholders. 
    */    

    function __construct($valuePairs, $alias){
        
        echo $this->render_html($valuePairs, $this->getHtmlTemplate($alias));
        
    }

    /**
    * Where the replacement happens.
    *
    * The build in php-function preg_replace_callback performs a regular expression search and replaces using a callback.
    * 
    */  
    
    function render_html($valuePairs, $html) {
        $regex = "!{{\s*(?P<key>[a-zA-Z0-9_-]+?)\s*}}!";
       
        // takes 3 arguments. Regex, callback function, html with placeholders.
        return \preg_replace_callback($regex, 
       
        // A callback that will be called and passed an array of matched elements in the subject string. The callback should return the replacement string.
        // For security, the user input is filtered with htmlentities. The implemented use of it converts all html-tags to text instead letting the browser run it.    
                function($match) use($valuePairs){
                    return  htmlentities($valuePairs[$match["key"]]); }
                ,$html);  
    }


/**
 * Gives renderer html-template with placeholders to be replaced with userinputs.
 * 
 * The function is looking up the alias in the templates folder. If found, it wil be rendered.
 * 
 * every html-template must be called "name.heidt.php" for it to work. (Just like in Laravel "name.blade.php")
 * 
 * Make sure to put the excact amount of placeholders that will be needed. 
 * Whilst the script will ignore any key-value-pairs in excess, placeholders in excess will not be ignored.
 * and if not replaced, the output will include placeholders like  {{placeholder_in_excess}}
 * 
 * It wil take a lot more logic for the script to count and ignore placeholders in excess.
 */ 
    function getHtmlTemplate($fileAlias){

        $htmlFile = 'templates/'.$fileAlias.'.heidt.php';
        $result;
            
            if(file_exists($htmlFile) ) {
                // get contents of a file into a string
                $handle = fopen($htmlFile, "r");
                $result = fread($handle, filesize($htmlFile));                 
                fclose($handle);      
        }
        return $result;
    }
    
    
    
}