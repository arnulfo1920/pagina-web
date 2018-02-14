<html>
	<head>
		<title>inicio de secion de empleados</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
	</head>

	<body>

        <style type="text/css">
        form {text-align:right;}
        legend {text-align:right;}
        </style>

        <br/>
        <div class="jumbotron">

        <div class="row">
            <div class="col-xs-10">
		<form class="form-inline" role="form">
        <div class="form-group">
        <label class="sr-only" for="ejemplo_email_2">Email</label>
         <input type="email" class="form-control" id="ejemplo_email_2" placeholder="Introduce tu email">
         </div>
        <div class="form-group">
        <label class="sr-only" for="ejemplo_password_2">Contraseña</label>
        <input type="password" class="form-control" id="ejemplo_password_2" placeholder="Contraseña">
        </div>
        </div>
        <div class="col-lg-3">
        <button type="submit" class="btn btn-primary">Entrar</button>
    </div>
</div>
</div><div class="page-header">
        
             <div class="col-md-6 col-md-offset-3">
            <h1><p>registrate</p></h1><br/>
              <div class="form-group">
              <label for="nombre" class="col-lg-2 control-label"></label>
              <div class="col-lg-5">
              <input type="text" class="form-control" id="nombre"
             placeholder="nombre">
            </div>
           </div>


             <div class="form-group">
            <label for="nombre" class="col-lg-2"></label>
            <div class="col-lg-5">
             <input type="text" class="form-control" id="apellido" placeholder="apellido">
              </div>
             </div>

             <div class="form-group">
            <label for="text" class="col-lg-2"></label>
            <div class="col-lg-5">
             <input type="email" class="form-control" id="email" placeholder="email">
             </div>
             </div> 
             <div class="form-group">
            <label for="password" class="col-lg-2"></label>
            <div class="col-lg-5">
             <input type="password" class="form-control" id="password" placeholder="password">
             </div>
             </div>  
             <div class="form-group">
            <label for="confirma tu password" class="col-lg-2"></label>
            <div class="col-lg-5">
             <input type="password" class="form-control" id="password" placeholder="confirma tu password">
             
             </div>
             </div>      
            <div clas="form-group">
             <label for="fecha de nacimiento" class="col-lg-2"></label> 
             <div class="col-lg-5">
            <input type="date" class="form-control" name="fecha">
            </div>
            </div>

             <label class="checkbox-inline">
  <input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Hombre
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Mujer
</label><br/>
            <button type="button" class="btn btn-success">agregar una nueva cuenta</button>

        
			</div>
		</form>

	</body>
</html>