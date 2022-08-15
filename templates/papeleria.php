<div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card border-info mb-3 py-2" style="width: 18rem;">
                        <img src="<?= $y['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$y['nombre']?></h5>
                            <p class="card-text"><?='Precio: $'.$y['precio']?></p>
                            <p class="card-text"><?='Tamaño: '.$y['size']?></p>
                            <p class="card-text"><?='Stock: '.$y['stock']?></p>
                            <a type="button" class="btn btn-outline-danger" href="/eliminarproducto.php?id=<?=$y['id']?>">Eliminar</a>
                            <a type="button" class="btn btn-outline-warning" href="/editarproducto.php?id=<?=$y['id']?>">Editar</a>
                        </div>
                    </div>  
                </div>      
            </div>
        </div>
    </body>
</html>