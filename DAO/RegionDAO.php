<?php


class RegionDAO 
{
  
   public    function   MostrarDocentes( )
   {  
       try {
       
           $sql="select   *  from  docente      ";  
           $objc = new ConexionBD();
            $cn=$objc->getConexionBD();   
           $rs= mysql_query($sql,$cn);
           $lista=  array(); 
           while ($fila=  mysql_fetch_assoc($rs))
           {$lista[]=$fila;               
           }     
       } catch (Exception $e) {     
            
       }     
     return  $lista;  
   }  
   
   
   
   public  function InsertarDocentes($nombre,$apellidopar,$apellidomar,$dni,$edad)
   { 
     $i=0;
     try 
     { $sql = "INSERT  INTO docente(nombdocente,apellipaterdocente,"
             . "apellimaterdocente,dnidocente,edaddocente)"
             . " VALUES('$nombre','$apellidopar','$apellidomar','$dni','$edad'); ";
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD(); 
            $i=  mysqli_query($cn,$sql);         
             
     } catch (Exception $exc) 
     {   
         $i=0;
     }
     return  $i;
     }  
   
     public  function EliminarDocente($cod)
 { 
     $i=0;
     try 
     { $sql = "DELETE   FROM  docente   where  coddocente='$cod' ";
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD(); 
            $i=  mysqli_query($cn,$sql);        
            
     } catch (Exception $exc) 
     {   
         $i=0;
     }
     return  $i;
     }  
   
    
 public  function ActualizarDocente($cod,$nombre,$apellidopar,
                                    $apellidomar,$dni,$edad    )
 { 
     $i=0;
     try 
     { $sql = "UPDATE  docente  SET   nombdocente='$nombre',"
             . " apellipaterdocente='$apellidopar' ,"
             . " apellimaterdocente='$apellidomar' ,dnidocente='$dni',"
             . " edaddocente='$edad' where  coddocente='$cod' ";
     
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD(); 
            $i= mysqli_query($cn,$sql);          
            
     } catch (Exception $exc) 
     {   
         $i=0;
     }
     return  $i;
}   
     
    public    function   RegistroBuscado($cod )
   {  try {
$sql="select   *  from  docente  where  coddocente='$cod'    ";  
           $objc = new ConexionBD();
            $cn=$objc->getConexionBD();   
           $rs= mysql_query($sql,$cn);
           $lista=  array(); 
           while ($fila=  mysql_fetch_assoc($rs))
           {$lista[]=$fila;               
           }     
       } catch (Exception $e) {     
            
       }     
     return  $lista;  
   }    
     
   public    function   ListarDocentes( )
   {    try {
           $sql="select *  from docente ";
           $objc = new ConexionBD();
            $cn=$objc->getConexionBD();   
           $rs= mysql_query($sql,$cn);
           $PERSONA['PERSONA']= array();
           while ($fila=  mysql_fetch_assoc($rs))
           {
             array_push($PERSONA['PERSONA'], 
             array('coddocente'=>$fila['coddocente'],'nombdocente'=>$fila['nombdocente'],'apellipaterdocente'=>$fila['apellipaterdocente'],'dnidocente'=>$fila['dnidocente'],'edaddocente'=>$fila['edaddocente']));   
           }           
       } catch (Exception $e) {                 
       }     
     return  $PERSONA;       
   }   
    
}
