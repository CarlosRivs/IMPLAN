function GeoMap(){
    this.map=null;
    this.mainBarCustom =null;
    this.vector = null;
}
GeoMap.prototype.CrearMapa= function(target,layers,center,zoom){
    var _target = target || 'map',
    _layers = layers || [],
    _center = center || [-99.87956208013235, 16.82858237564198],
    _zoom = zoom || 12;

    this.map = new ol.Map({
        target: _target,
        layers: _layers,
        view : new ol.View({
            center: ol.proj.fromLonLat(_center),
            zoom:_zoom
        })
    });

    
    var layerSwitcher = new ol.control.LayerSwitcher({
        tipLabel: 'Leyenda', 
        groupSelectStyle: 'children' // Can be 'children' [default], 'group' or 'none'
    });

    this.map.addControl(layerSwitcher);


    var controlMousePosition = new ol.control.MousePosition({
        coordinateFormat: ol.coordinate.createStringXY(4),
        //projection: 'EPSG:4326',
        className: 'custom-mouse-position',
        target: document.getElementById('mouse-position'),
    });
    this.map.addControl(controlMousePosition);
    ////////////////////////////////////////////////
    var overviewMapControl = new ol.control.OverviewMap({
        className: 'ol-overviewmap ol-custom-overviewmap',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([-99.87956208013235, 16.82858237564198]),
            zoom: 8
        })
    });
      
    //controles
    this.map.addControl(new ol.control.FullScreen());
    this.map.addControl(overviewMapControl);

    /////////////////////////////////////
    
};