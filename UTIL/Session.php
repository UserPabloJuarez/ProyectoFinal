<?php

class Session{
    public static function existsAttribute($name){	
    	$rpta =FALSE;
        if( isset( $_SESSION[$name] ) ){
        	$rpta = TRUE;
        }
        return $rpta;
    }
    
    public static function NoExistsAttribute($name){
    	$rpta =TRUE;
        if( isset( $_SESSION[$name] ) ){
        	$rpta = FALSE;
        }
        return $rpta;
    }
    
    public static function getAttribute($name){
    	$value = null;
        if(self::existsAttribute($name)){
        	$value = $_SESSION[$name];
        }
        return $value;
    }

    public static function getAttribute2($name){
    	$value = null;
        if(self::existsAttribute($name)){
        	$value = $_SESSION[$name];
			self::removeAttribute($name);
        }
        return $value;
    }

    public static function setAttribute($name, $value){
    	$_SESSION[$name] = $value;
    }

    public static function removeAttribute($name){
    	unset( $_SESSION[$name] ) ;
    }
}
?>