<?php
/**
 * Plugin Name: LH Remove Query Strings
 * Plugin URI: https://lhero.org/portfolio/lh-remove-query-strings/
 * Description: A graceful way of removing query strings with php and htaccess
 * Author: Peter Shaw
 * Version: 1.00
 * Author URI: https://shawfactor.com/
 * Text Domain: lh_remove_query_strings
*/

if (!class_exists('LH_Remove_query_strings_plugin')) {


class LH_Remove_query_strings_plugin {
    
     private function return_content_host(){
         
         $url = parse_url(content_url());
         
         return $url['host'];
         
     }
     
    private function return_local_host(){
         
         $url = parse_url(get_site_url());
         
         return $url['host'];
         
     }
    
    private function return_safe_string($string){
        
        $res = preg_replace("/[^0-9]/", "", $string );
        
        $string = $res;
        
        return $string;

    }
    
    
    private static $instance;
    
    public function remove_version( $src, $handle ){ 
        
        
         if ( strpos( $src, $this->return_content_host() ) or strpos( $src, $this->return_local_host() ) ){
        
        if ( strpos( $src, '.js?ver=' ) ){
            
            $parts = explode( '.js?ver=', $src );
            
            $src = $parts[0].'.'.$this->return_safe_string($parts[1]).'.js';
            
            
        } elseif ( strpos( $src, '.css?ver=' ) ){
            
            $parts = explode( '.css?ver=', $src );
            
            $src = $parts[0].'.'.$this->return_safe_string($parts[1]).'.css';
            
            
            
            
        }
        

}

return $src; 

        
    } 
    
    
    
      /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }

    
    public function __construct() {
        
        add_filter( 'script_loader_src', array($this,"remove_version"), 98, 2 );
        
        add_filter( 'style_loader_src', array($this,"remove_version"), 98, 2 );
        
        
    }
    
}

$lh_remove_query_strings_instance = LH_Remove_query_strings_plugin::get_instance();


}



?>