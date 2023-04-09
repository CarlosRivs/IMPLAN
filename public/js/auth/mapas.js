
function mapas(){
  this.vectorGeoJson=null;
}

mapas.prototype.ObtenerLayersBase = function(){
  var listaLayers = [];
  
  var lyrOSM = new ol.layer.Tile({
      title:'Open Street Map',
      visible: true,
      baseLayer:true,
      source: new ol.source.OSM()
  });
  listaLayers.push(lyrOSM);

  var lyrGoogleMap = new ol.layer.Tile({
    title: 'Google Maps',
    visible: false,
    baseLayer: true,
    source: new ol.source.XYZ({
      url: "https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}"
    })
  });
  listaLayers.push(lyrGoogleMap);
      
  var lyrGoogleMapS = new ol.layer.Tile({
      title:'Google Maps Satelite',
      visible: false,
      baseLayer:true,
      source: new ol.source.XYZ({
          url: "http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}"
      })
  });
  listaLayers.push(lyrGoogleMapS);

  return new ol.layer.Group({
      title:'Capas Base',
      layers:listaLayers
  });
};

mapas.prototype.ObtenerLayersJSON = function(objetosJSON){
  
  var layersJSON = [];
 /* 
  objetosJSON.forEach(function(objeto) {
    var vectorSource = new ol.source.Vector({
      url: '/resources/JSON/' + objeto.title,
      format: new ol.format.GeoJSON()
    });
    
    var capaTitulo = objeto.title;

    // Crear una nueva capa de vector y usar la fuente de vector creada anteriormente
    var vectorLayer = new ol.layer.Vector({
      title: 'capaTitulo',
      visible: false,
      source: vectorSource
    });
    layersJSON.push(vectorLayer);
  });
 */
  objetosJSON.forEach(function(objeto){
    var dato = objeto.datos
    var vectorSource = new ol.source.Vector({
      url: "/resources/JSON/" + objeto.nombreArch,
      format: new ol.format.GeoJSON({
        featureProjection: 'EPSG:4326',
      })
    });
    
    var nombre = objeto.nombre;
    var vectorLayer = new ol.layer.Vector({
      title: nombre,
      visible: false,
      source: vectorSource
    });
    layersJSON.push(vectorLayer);
  })
  console.log(objetosJSON);
  // Devolver un objeto de capa de grupo que contenga todas las capas JSON
  return new ol.layer.Group({
    title: 'Capas JSON',
    layers: layersJSON
  });
}
