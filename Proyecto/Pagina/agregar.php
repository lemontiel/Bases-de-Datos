<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bibleoteca</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type= "text/css" href="style.css">
       
        <!--[if lt IE 9]>
        <[endif]-->

       

    </head>
    <body>
    
    	<nav class="navbar navbar-inverse navbar-fixed-top barrah">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<a class="navbar-brand" href="index.html">
          				<span class="glyphicon glyphicon-book"></span>
    				</a>
    			</div>
    			<div>
    				<ul class="nav navbar-nav">
    					<li><a href="#">Catalogo</a></li>
    					<li><a href="#">Perfil</a></li>
    				</ul>
    				</div>
    				<div class="col-sm-3 col-md-3 pull-right">
        				<form class="navbar-form" role="search" action="serch.php">
		    				<div class="input-group">
		    					<form action="buscar.php">
			        				<input type="search" class="form-control" placeholder="Buscar" name="bucar" id="bscr">
			       					<div class="input-group-btn">
			            				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			        				</div>
		        				</form>
		    				</div>
						</form>
        			</div>
    		</div>
    		
    	</nav>
		<div class="container central">
			<div class="row">
				<div class="col-sm-2 lateral">
					
				</div>
				<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-vertical" action="usuario_registrado.php" method="post" enctype="multipart/form-data">
								<div class="form-group form-center">
									<label>Nombre: </label>
									<input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre"  maxlength="20" />
									<label>Apellido Paterno:</label>
									<input type="text" class="form-control" name="aPaterno" placeholder="Ingresa tu apellido paterno"  maxlength="20" />
									<label>Apellido Materno:</label>
									<input type="text" class="form-control" name="aMAterno" placeholder="Ingresa tu apellido materno"  maxlength="20" />
									<label>Apodo: </label>
									<input type="text" class="form-control" name="apodo" placeholder="Ingresa tu apodo (opcional)" maxlength="15" />
									<label>Fecha de nacimento:</label>
									<input type="date" class="form-control" name="fnacimiento"/>
									<label>Email:</label>
									<input type="email" class="form-control" name="email" placeholder="Ingresa email"  maxlength="20" />
									<label>Contraseña:</label>
									<input type="password" class="form-control" name="contraseña" />
									<label>Tipo de usuario:</label>
									<input type="text" class="form-control" name="tipo" placeholder="Ingresa empleado o alumno" maxlength="30"/>
									<label>Carrera:</label>
									<input type="text" class="form-control" name="carrera" placeholder="Ingresa tu carrera" maxlength="30"/>
									<button type="submit" class="btn btn-default" style="margin-top: 15px; width: 200px;">
										<span class="glyphicon glyphicon-book"></span><strong> Enviar</strong>
									</button>
									
									
									
									
								</div>
							</form>
						</div>
				   	</div>
				</div>
				<div class="col-sm-2">
					<!--TODO Menu Lateral-->
				</div>	
			</div>
		</div>
		
		<footer class="footer container-fluid text-center ">
			<h4>&copy; LEMA</h4>
		</footer>
		
    </body>

</html>