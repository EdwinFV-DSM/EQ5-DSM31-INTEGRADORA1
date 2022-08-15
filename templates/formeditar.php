        <div class="container">    
            <form method="post" action="modificar.php?id=<?=$producto['id']?>" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nombre del producto</label>
                    <input class="form-control" type="text" value="<?=$producto['nombre']?>" name="nombre" placeholder="Modifica el nombre de tu producto" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="number" step="0.01" value="<?=$producto['precio']?>" name="precio" placeholder="Modifica el precio de tu producto" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tamaño</label>
                    <select name="size" id="size" class="form-select" aria-label="Default select example" required>
                        <option value="Chico">Chico</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input class="form-control" type="number" value="<?=$producto['stock']?>" name="stock" placeholder="Modifica el stock de tu producto" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen</label>
                    <input class="form-control" type="file" value="<?=$producto['imagen']?>" name="imagen" placeholder="Ingresa la imagen" aria-label="default input example" required>
                </div>
                <button type="submit" class="btn btn-outline-success">Actualizar</button>
            </form>    
        </div>
    </body> 
</html>