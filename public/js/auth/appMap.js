function CargarMapa(objetosJSON = null){
    var map = new GeoMap();
    var layers = new mapas();

    var layersBase = layers.ObtenerLayersBase();

    map.CrearMapa('map',[layersBase],null,12);

    if (objetosJSON != null){
        // Obtenemos los elementos a eliminar
        var mapElement = document.getElementById('map');
        var mousePositionElement = document.getElementById('mouse-position');

        // Eliminamos los elementos existentes
        if (mapElement) {
            mapElement.parentNode.removeChild(mapElement);
        }
        if (mousePositionElement) {
            mousePositionElement.parentNode.removeChild(mousePositionElement);
        }
        // Crea nuevos elementos
        var mapaAdentroDiv = document.getElementById('MapaAdentro');
        var newMapElement = document.createElement('div');
        newMapElement.setAttribute('id', 'map');
        newMapElement.classList.add('map');
        mapaAdentroDiv.appendChild(newMapElement);

        var newMousePositionElement = document.createElement('div');
        newMousePositionElement.setAttribute('id', 'mouse-position');
        mapaAdentroDiv.appendChild(newMousePositionElement);

        // carga la informacion de las capas del mapa
        var map = new GeoMap();
        var layers = new mapas();
    
        var layersBase = layers.ObtenerLayersBase();
        var layersJSON = layers.ObtenerLayersJSON(objetosJSON);
       
        map.CrearMapa('map',[layersBase, layersJSON],null,12);

    }
}