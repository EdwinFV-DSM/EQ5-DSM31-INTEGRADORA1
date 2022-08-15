        <div class="container">    
            <form method="post" action="crearproducto.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nombre del producto</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Ingresa el nombre de tu producto" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="number" name="precio" placeholder="Ingresa el precio de tu producto" aria-label="default input example" required>
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
                    <input class="form-control" type="number" name="stock" placeholder="Ingresa el stock de tu producto" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen</label>
                    <input class="form-control" type="file" name="imagen" placeholder="Ingresa la imagen" aria-label="default input example" required>
                </div>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </form>    
        </div>
    </body> 
</html>