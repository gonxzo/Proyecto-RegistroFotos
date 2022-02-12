var icono_auto = L.icon({
    iconUrl: "./img/marker.png",
    iconSize: [25, 40]
});

var map = L.map('map', { center: new L.LatLng(-16.499957537926285, -68.12999725341797), zoom: 12, zoomAnimation: true });
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
            var datos12 = '<div class="modal" tabindex="-1" role="dialog"> <div class="modal-dialog" role="document">   <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">Modal title</h5>  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>  </button> </div> <div class="modal-body">  <p>Modal body text goes here.</p>   </div>  <div class="modal-footer"> <button type="button" class="btn btn-primary">Save changes</button>  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div> </div> </div> </div>'
            var imagen = "<img src='./uploads/0.jpg' width='100px height='50px' />";
            var imagen1 = "<img src='./uploads/1.jpg' width='100px height='50px' />";
            var imagen2 = "<img src='./uploads/2.jpg' width='100px height='50px' />";
            var imagen3 = "<img src='./uploads/3.jpg' width='100px height='50px' />";
            var imagen4 = "<img src='./uploads/4.jpg' width='100px height='50px' />";
            var imagen5 = "<img src='./uploads/5.jpg' width='100px height='50px' />";
            var imagen6 = "<img src='./uploads/6.jpg' width='100px height='50px' />";
            var imagen7 = "<img src='./uploads/7.jpg' width='100px height='50px' />";
            var imagen8 = "<img src='./uploads/8.jpg' width='100px height='50px' />";
            var imagen9 = "<img src='./uploads/9.jpg' width='100px height='50px' />";
            var total = imagen + imagen1 + imagen2 + imagen3 + imagen4 + imagen5 + imagen6 + imagen7 + imagen8 + imagen9;
            var text = "Nombre : ";
            var text1 = "Localidad :";
            var datos = "<div style='font-size:13px;color:black; font-family: Helvetica'> " + text + data[geoloc]['name'] + "<br />" + text1 + data[geoloc]['location'] + total + "<br />";
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