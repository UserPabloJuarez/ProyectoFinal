<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">    
    <title>.:: Pagina Oficial ::.</title>   
    
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <script src="bootstrap/bootstrap.min.js" ></script>  
    
    <style type="text/css">		    
		  .div_cuerpo
                   {  margin-top: 15px;
                   }
    </style>
    
    <script>
    function  iniciar1()
    {   var url="CONTROLADOR/UsuarioControlador.php?op=1";	 
        var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1500,height=2000";
        window.open(url,"otra",opciones);
     }
     
    function  iniciar2()
    {   var url="CONTROLADOR/UsuarioControlador.php?op=2";	 
        var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1500,height=2000";
        window.open(url,"otra",opciones);
     }   
     
    </script> 
    
</head>

<body>
	<div class="container div_cuerpo" id="div_cuerpo1">	
        <div class="panel panel-primary">
            <div class="panel-heading text-center" >
                <h4>UNIVERSIDAD PERUANA SIMON BOLIVAR</h4>
               
            </div>
            <div class="alert alert-info">
                                    <h4><strong><center> SISTEMA VIRTUAL DE EVALUACION EN  LINEA</center></strong></h4>                            
                        </div>
            <div class="panel-body">
			    <div class="row">
                                
			    	<div class="col-md-6 col-md-offset-3">
                                    <center>  <img  src="imagenes/seguridadloguin.png"></center>
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
			    <div class="row">
			    	<div class="col-md-6 col-md-offset-3 soluc">
                                    <center> 
                                        <button    class="btn btn-success btn-xlarge" onclick="iniciar1()" >
                                            <center>  <img  src="imagenes/personal.png" width="100px" height="100px"></center><br>
                                            Personal
                                        </button> 
                                        <button    class="btn btn-warning btn-xlarge"  onclick="iniciar2()" >
                                            <center>  <img  src="imagenes/alumno.png" width="100px" height="100px"></center><br>
                                            Alumno
                                        </button> 
                                    </center>
			    	</div>
			    </div>
            </div>
            <div class="panel-footer text-center">
                Sistema Virtual Evaluacion en Linea - Derechos reservados &copy; 2015-2016
            </div>            
        </div>					
	</div>
</body>