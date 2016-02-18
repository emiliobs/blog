<?php 
    include_once './app/ConexionInc.php';
    include_once 'app/RepositorioUsuarioInc.php';
    $titulo = "Blog de Emilio";
    include_once './plantillas/documentoDlaracionInc.php';
    include_once './plantillas/navBarInc.php';
    
    
?>
        
        
        <div class="container">
<!--            <div class="jumbotron">
                <h1>Blog de Emilio Barrera.!!</h1>                   
                <p>Blog dedicado a Emilio Barrera......</p>
            </div>-->
            <img src="img/emi.jpg" alt="Emilio Barrera"> 
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                                    </h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Qué Buscas.?"/>
                                    </div>
                                    <button class="form-control">Buscar.</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                            </h5>
                        </div>
                        <div class="panel-body">
                            Aquí va el filtro...
                        </div>
                    </div>
                </div>
            </div>
                            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                            </h5>
                        </div>
                        <div class="panel-body">
                            Aquíva archivo...
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5>
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Ültimas entradas
                          </h5>
                        </div>
                        <div class="panel-body">
                            <?php 
                                                               
                                
                            ?>
                            <p>Todavia no hay entradas que mostrar.......</p> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
<?php 

 include_once './plantillas/documentoCierreInc.php';

?>
