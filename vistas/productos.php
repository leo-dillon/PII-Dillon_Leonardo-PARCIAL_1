<form action="" method="GET">
    <h2>Filtrado por:</h2>
    <input type="hidden" name="sec" value="productos">
    <div>
        <label for="cat">Categoría:</label>
        <select name="cat" id="cat">
            <option value="beauty">Beauty</option>
            <option value="fragrances">Fragrances</option>
            <option value="forniture">Forniture</option>
            <option value="groceries">Groceries</option>
        </select>
    </div>
    <div>
        <label for="pri">Precio minimo <samll class="valor">- 10</samll></label>
        <input class="inputPrecio" type="range" name="pri" min="10" max="100" value="10">
    </div>
    <div>
        <label for="rat">Calificación</label>
        <div>
            <input type="radio" name="rat" value="12">
        </div>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
<section class="productos">

</section>
<script src="./js/productos.js"></script>