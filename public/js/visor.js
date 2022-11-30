var icono_auto = L.icon({
    iconUrl: "./img/marker.png",
    iconSize: [25, 40]
});

var map = L.map('map', { center: new L.LatLng(-16.499957537926285, -68.12999725341797), zoom: 9, zoomAnimation: true });
var derechos = "";
//var ggl = new L.Google('HYBRID',{attribution: derechos});
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmAttrib = 'Map_OpenLayers © <a href="http://openstreetmap.org">OpenStreetMap   </a> contributors';
var osmOL = new L.TileLayer(osmUrl, { attribution: osmAttrib });
var fsControl = new L.Control.FullScreen();

map.addControl(fsControl);
//map.addLayer(ggl);
map.addLayer(osmOL);
map.addControl(new L.Control.Layers({ /*'Google_Hibryd':ggl,*/ 'Open_Layers': osmOL }, {}));

var Marker_Auto = [];
var numero = 1;

function Position_Dinamic() {
    var aux = [];
    var image = [];
    $.getJSON('/Conexion/conexion.php?callback=parseResponse?', function(data) {
        for (var geoloc in data) {
            console.log(data);
            var ubicacion = parseInt(data[geoloc]['id']);
            var latitude = parseFloat(data[geoloc]['latitud']);
            var longitude = parseFloat(data[geoloc]['longitud']);
            var i = "<img src='./uploads/1a.jpg' width='150px height='100px' />";
            var i1 = "<img src='./uploads/2a.jpg' width='150px height='100px' />";
            var i2 = "<img src='./uploads/3a.jpg' width='150px height='100px' />";
            var i3 = "<img src='./uploads/4a.jpg' width='150px height='100px' />";
            var i4 = "<img src='./uploads/5a.jpg' width='150px height='100px' />";
            var i5 = "<img src='./uploads/6a.jpg' width='150px height='100px' />";
            var i6 = "<img src='./uploads/1b.jpg' width='150px height='100px' />";
            var i7 = "<img src='./uploads/2b.jpg' width='150px height='100px' />";
            var i8 = "<img src='./uploads/3b.jpg' width='150px height='100px' />";
            var i9 = "<img src='./uploads/4b.jpg' width='150px height='100px' />";
            var i10 = "<img src='./uploads/5b.jpg' width='150px height='100px' />";
            var i11 = "<img src='./uploads/6b.jpg' width='150px height='100px' />";
            var i12 = "<img src='./uploads/1c.jpg' width='150px height='100px' />";
            var i13 = "<img src='./uploads/2c.jpg' width='150px height='100px' />";
            var i14 = "<img src='./uploads/3c.jpg' width='150px height='100px' />";
            var i15 = "<img src='./uploads/4c.jpg' width='150px height='100px' />";
            var i16 = "<img src='./uploads/5c.jpg' width='150px height='100px' />";
            var i17 = "<img src='./uploads/6c.jpg' width='150px height='100px' />";
            var total1 = i + i1 + i2 + i3 + i4 + i5;
            var total2 = i6 + i7 + i8 + i9 + i10 + i11;
            var total3 = i12 + i13 + i14 + i15 + i16 + i17;
            if (numero == 1) {
                var total = total1;
                numero = numero + 1;
            } else {
                if (numero == 2) {
                    var total = total2;
                    numero = numero + 1;
                } else {
                    var total = total3;
                    numero = 1;
                }

            }


            var text = "Nombre : ";
            var text1 = "Localidad :";
            var datos = "<div style='font-size:13px;color:black; font-family: Helvetica'> " + text + data[geoloc]['name'] + "<br />" + text1 + data[geoloc]['location'] + "<br />" + total;

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