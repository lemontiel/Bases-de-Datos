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
        <link rel="stylesheet" type= "text/css" "style.css">
       
        <!--[if lt IE 9]>
        <![endif]-->

       

    </head>
    <body>
    
	<div class="row">
    	<nav class="navbar navbar-inverse navbar-fixed-top barrah">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<a class="navbar-brand" href="#">
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
        				<form class="navbar-form" role="search">
		    				<div class="input-group">
		        				<input type="search" class="form-control" placeholder="Buscar" name="bucar" id="bscr">
		       					<div class="input-group-btn">
		            				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		        				</div>
		    				</div>
						</form>
        			</div>
    		</div>  		
    	</nav>
	</div>>
		<div class="container central">
			<div class="row">
				<div class="col-sm-2">
					<!--TODO Menu Lateral-->
				</div>
				<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel-body">
							
							
							<h2>Buscar por:</h2>
							
                            <form role="form">
                                <div class="form-group">
                                    <label for="usr">T&iacute;tulo:</label> <input type="text" class="form-control" id="b_titulo">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Tema:</label> <input type="text" class="form-control" id="b_tema">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Editorial:</label> <input type="text" class="form-control" id="b_editorial">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Autor:</label> <input type="text" class="form-control" id="b_autor">
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
		
		
    </body>

</html>
