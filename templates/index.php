            <?php
                if(count($papeleria)==0){

            ?>
                <h1>Sin resultados</h1>
            <?php
                }
            ?>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($papeleria as $producto){
                ?>
                <div class="col-sm">
                    <div class="card border-info mb-3 py-2" style="width: 18rem;">
                        <img src="<?=$producto['imagen']?>" class="card-img-top" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?=$producto['nombre']?></h5>
                            <p class="card-text"><?='Precio: $'.$producto['precio']?></p>
                            <p class="card-text"><?='Tamaño: '.$producto['size']?></p>
                            <p class="card-text"><?='Stock: '.$producto['stock']?></p>
                            <!-- <a href="/templates/papeleria.php?id_papeleria=<?=$producto['id']?>" class="btn btn-outline-info">Ver más</a> -->
                            <a type="button" class="btn btn-outline-danger" href="eliminarproducto.php?id=<?=$producto['id']?>">Eliminar</a>
                            <a type="button" class="btn btn-outline-warning" href="editarproducto.php?id=<?=$producto['id']?>">Editar</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>  
            </div>
        </div>
    </body> 
</html>