<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">    
    <title>.:: Pagina Oficial ::.</title>   
       <link href="../../../css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="../../../css/jquery.ui.base.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/jquery.ui.theme.css" rel="stylesheet" type="text/css"/>          
        <link href="../../../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">    
       
 
      
        <script src="../../../jquery/jquery.alerts.js" type="text/javascript"></script>
        <script src="../../../js/javascript.js"></script>
     
        <script src="../../../jquery/jquery-ui.js"></script>
        <script src="../../../jquery/jquery.dataTables.min1.js"></script>
         <script src="../../../bootstrap/dataTables.bootstrap.min1.js"></script>
         <script src="../../../js/dataTables.responsive.min1.js"></script>
         <script src="../../../js/responsive.bootstrap.min1.js"></script>       
       
         <link href="../../../css/style1.css" rel='stylesheet' type='text/css' />
         <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css" />
         <link rel="stylesheet" type="text/css" href="../../../css/responsive.bootstrap.min.css">
        
         <script src="../../../jquery/jquery.js"></script>  
         <link rel="stylesheet" href="../../../css/bootstrap.min.css">        
        <script src="../../../bootstrap/bootstrap.min.js" ></script>    
        <style type="text/css">		    
		  .div_cuerpo
                   {  margin-top: 15px;
                   }
    </style>
    
    <script>
    function  iniciar1()
    {   var url="Seguridad/LoginAcceso/Personal/FrmLoginPersonal.jsp";	 
        var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1500,height=2000";
        window.open(url,"otra",opciones);
     }
     
    function  iniciar2()
    {   var url="Seguridad/LoginAcceso/Estudiante/FrmLoginAlumno.jsp";	 
        var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1500,height=2000";
        window.open(url,"otra",opciones);
     }   
     
    </script> 
    
</head>

<body>
   
   <nav class="navbar navbar-default" role="navigation">
	<div class="container div_cuerpo" id="div_cuerpo1">	
        <div class="panel panel-primary">
            <div class="panel-heading text-center" >
                <h4>UNIVERSIDAD PERUANA SIMON BOLIVAR</h4>
               
            </div>
            <div class="navbar-header">       
       
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
           
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
   
  </div>  
              <div class="collapse navbar-collapse navbar-ex1-collapse">     
    <ul class="nav navbar-nav">      
      <li class="dropdown">
        <a href="javascript:inicio()" >
        <img src="../../../imagenes/main.png"     >   Principal</b>
        </a>        
      </li>
    </ul>   
       <ul class="nav navbar-nav">      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../../../imagenes/mantenimiento.png"     >  Mantenimientos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">        
           <li><a href="javascript:CallMant('','Semestre',1,'')">Semestre</a></li>
                                <li><a href="javascript:CallMant('','CarreraProfesional',1,'')">Carrera Profesional</a></li>
                                <li><a href="javascript:CallMant('','Alumno',1,'')">Alumno</a></li>
                                <li><a href="javascript:CallMant('','Docente',1,'')">Docente</a></li>
                                <li><a href="javascript:CallMant('','Materia',1,'')">Materia</a></li>
                                <li><a href="javascript:CallMant('','UnidadTematica',1,'')">Unidad Tematica</a></li>
                                <li><a href="javascript:CallMant('','Tema',1,'')">Tema</a></li>
                                <li><a href="javascript:CallMant('','Dia',1,'')">Dia</a></li>
                                <li><a href="javascript:CallMant('','Turno',1,'')">Turno</a></li>
                                <li><a href="javascript:CallMant('','TipoExamen',1,'')">Tipo Examen</a></li>
                                <li><a href="javascript:CallMant('','Rol',1,'')">Rol</a></li>                                
                                <li><a href="javascript:CallMant('','NivelDificultad',1,'')">Nivel Dificultad</a></li>                                   
        </ul>
      </li>
      
    </ul>            
   
    <ul class="nav navbar-nav">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../../imagenes/candado1.png"     >Seguridad<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                    
            <li><a href="javascript:CrearUsuario('','CrearUsuario',0)"><img src="../../../imagenes/gestionarusuarios.png"  width="35px" height="35px"   alt="Gestionar Usuario y Privilegios">Gestionar Usuario<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y Privilegios</a></li>
                  
                  </ul>
        </li>        
      
    </ul>    
        
      <ul class="nav navbar-nav navbar-right">   
      <li class="divider-vertical"></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <img src="../../../imagenes/configuracion.png"     > Configuracion<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">                 
            <li><a href="javascript:CallMant('','Docente',24,'     ')"><img src="../../../imagenes/actualizar.png"     > Actualizar Informacion</a></li>
            <li class="divider"></li>
            <li><a href="javascript:CallMant('','Docente',18,'    ')"><img src="../../../imagenes/llaves.png"    > Cambiar Contraseña</a></li>
           <li class="divider"></li>
           <li><a href="/CerrarSesion?opciones=1"><img src="../../../imagenes/exit.png"    > Salir</a></li>      
                
        </ul>
        </li>
      
    </ul>  
        
       
      
  </div>           
            <div class="alert alert-info">
                                    <h4><strong><center> SISTEMA VIRTUAL DE EVALUACION EN  LINEA</center></strong></h4>                            
                        </div>
            <div class="panel-body">
			    <div class="row">
                                
			    	<div class="col-md-6 col-md-offset-3">
                                    <center>  <img  src="../../../imagenes/evaluacion.jpg"></center>
			    	</div>
			    </div>			
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3 error text-center">Acceso al Sistema
			    	</div>
				</div>
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3"><HR size="3px" color="#0000ff">
			    	</div>
				</div>	
			    
            </div>
            <div class="panel-footer text-center">
                Sistema Virtual Evaluacion en Linea - Derechos reservados &copy; 2015-2016
            </div>            
        </div>					
	</div>
</body>

