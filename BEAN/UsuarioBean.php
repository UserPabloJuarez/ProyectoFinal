<?php
class UsuarioBean 
{ public   $CODUSUARIO;
  public   $USUARIO;
  public   $CLAVE;
  public   $CODTIPOUSUARIO;  
  
  function getCLAVE() {
      return $this->CLAVE;
  }
  function setCLAVE($CLAVE) {
      $this->CLAVE = $CLAVE;
  }
  function getCODUSUARIO() {
      return $this->CODUSUARIO;
  }

  function getUSUARIO() {
      return $this->USUARIO;
  }

  function getCODTIPOUSUARIO() {
      return $this->CODTIPOUSUARIO;
  }

  function setCODUSUARIO($CODUSUARIO) {
      $this->CODUSUARIO = $CODUSUARIO;
  }

  function setUSUARIO($USUARIO) {
      $this->USUARIO = $USUARIO;
  }

  function setCODTIPOUSUARIO($CODTIPOUSUARIO) {
      $this->CODTIPOUSUARIO = $CODTIPOUSUARIO;
  }  
}

?>
