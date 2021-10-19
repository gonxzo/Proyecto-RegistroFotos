var icono_auto = L.icon({
    iconUrl: "./img/marker.png",
    iconSize: [25, 40]
});

var map = L.map('map', { center: new L.LatLng(-16.499957537926285, -68.12999725341797), zoom: 13, zoomAnimation: true });
var derechos = "";
//var ggl = new L.Google('HYBRID',{attribution: derechos});
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib = 'Map_OpenLayers © <a href="http://openstreetmap.org">OpenStreetMap   </a> contributors';
var osmOL = new L.TileLayer(osmUrl, { attribution: osmAttrib });
var fsControl = new L.Control.FullScreen();

map.addControl(fsControl);
//map.addLayer(ggl);
map.addLayer(osmOL);
map.addControl(new L.Control.Layers({ /*'Google_Hibryd':ggl,*/ 'Open_Layers': osmOL }, {}));

var Marker_Auto = [];

function Position_Dinamic() {
    var aux = [];
    $.getJSON('/Conexion/conexion.php?callback=parseResponse?', function(data) {
        for (var geoloc in data) {
            console.log(data);
            var ubicacion = parseInt(data[geoloc]['id']);
            var latitude = parseFloat(data[geoloc]['latitud']);
            var longitude = parseFloat(data[geoloc]['longitud']);
            var text = "Nombre : ";
            var text1 = "Localidad :";
            var datos = "<div style='font-size:13px;color:black; font-family: Helvetica'> " + text + data[geoloc]['nombre'] + "<br />" + text1 + data[geoloc]['localidad'] + "<br />" +
                '<embed href="http://127.0.0.1:8000/documentos/create" src="" width="100%" height="550px"/>';
            if (!Marker_Auto[ubicacion]) {
                Marker_Auto[ubicacion] = L.marker([latitude, longitude], { icon: icono_auto }).addTo(map).bindPopup(datos).addTo(map);


            }

            aux[ubicacion] = Marker_Auto[ubicacion];
            Marker_Auto[ubicacion].setLatLng([latitude, longitude]).update();
        }
        for (var x in Marker_Auto) {
            var y = aux.indexOf(Marker_Auto[x]);
            if (y === -1) {
                map.removeLayer(Marker_Auto[x]);
            }
        }
        Marker_Auto = aux;

        setTimeout(Position_Dinamic, 3000);
    });
}
Position_Dinamic();