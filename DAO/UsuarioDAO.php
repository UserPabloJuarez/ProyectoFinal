<?php
require_once "../UTIL/ConexionBD.php";
require_once '../BEAN/UsuarioBean.php';
class    UsuarioDAO 
{     
 public function validarUsuario(UsuarioBean  $objUsuBean)
 {
     $estado=0;
      try{                
            $sql = "select  *  from    usuario    where "
                 . "   USUARIO='$objUsuBean->USUARIO' and "
                 . "   CLAVE='$objUsuBean->CLAVE' and "
                 . "   CODTIPUSUARIO='$objUsuBean->CODTIPOUSUARIO' ;  "; 
            
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();            
            $rs = mysqli_query($cn,$sql);             
            $lista = array();
            while( $fila = mysqli_fetch_assoc($rs) ){
            	$lista[] = $fila;
            }                        
            if( count($lista) == 1 ){
            	 $estado=1;                 
            }
            mysqli_close($cn);
        }catch(Exception $e){
             $estado=0;
        }
     return $estado;
 }  
    
    
  public    function   cargardatos($codigo )
   { 
      
      try {
           $sql="select   *  from  usuario where    codusu='$codigo'";  
           $objc = new ConexionBD();
            $cn=$objc->getConexion();   
           $rs = mysqli_query($cn,$sql);    
           $lista=  array(); 
           while ($fila=  mysql_fetch_assoc($rs))
           {     
               $lista[]=$fila;               
           } 
           mysqli_close($cn);
       } catch (Exception $e) {     
            
       }     
     return  $lista;  
   }     
    
    
    
    
    
    
    
    
    
    
    
}
?>
