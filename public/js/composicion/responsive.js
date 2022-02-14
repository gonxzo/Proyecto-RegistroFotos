$(document).ready(function() {
    $('#project').DataTable({
        responsive: true,
        iDisplayStart: 5,
        iDisplayLength: 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

});
$(document).ready(function() {
    $('#usuario').DataTable({
        responsive: true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

});