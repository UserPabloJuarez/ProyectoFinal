<?php
    require_once '../BEAN/UsuarioBean.php';
    require_once '../DAO/UsuarioDAO.php';
   $op=$_REQUEST['op'];
   $pagina="";
   switch ($op)
   {
       case 1:{  
$pagina="../Seguridad/LoginAcceso/Personal/FrmLoginPersonal.php";
           break;}
       case 2:{           
$pagina="../Seguridad/LoginAcceso/Estudiante/FrmLoginAlumno.php";
           break;}
           
       case 3:
       {  
          $USUARIO=$_REQUEST['txtusu'];
          $CLAVE=$_REQUEST['txtcla'];
          $TIPO=$_REQUEST['tipousuario'];
          $objUsuarioBean=new UsuarioBean();
          $objUsuarioBean->setUSUARIO($USUARIO);
          $objUsuarioBean->setCLAVE($CLAVE);
          $objUsuarioBean->setCODTIPOUSUARIO($TIPO);
          $objUsuarioDAO=new UsuarioDAO();
          $estado=$objUsuarioDAO->validarUsuario($objUsuarioBean);
          
          if($estado==1)
          {    switch ($TIPO)
               {    case  1:{  $pagina="../Seguridad/LoginAcceso/Personal/FrmPrincipalAdministrador.php";    break;  }
                    case  2:{  $pagina="../Seguridad/LoginAcceso/Personal/FrmPrincipalDocenteCoordinador.php";      break;  }
                    case  3:{  $pagina="../Seguridad/LoginAcceso/Personal/FrmPrincipalDocente.php";    break;  }
               }
              
          }else
          {
              $mensaje="Usuario y Clave Incorrecto !!!!!!";
              $pagina="../Seguridad/LoginAcceso/Personal/FrmLoginPersonal.php";
          }
         
        break;   
       }   
   }
   header('Location:'.$pagina)
?>