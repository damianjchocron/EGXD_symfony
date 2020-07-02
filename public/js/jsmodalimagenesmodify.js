$(document).ready(function () {
    inicializaEventos();
});

function inicializaEventos() {
    var idproduct;
    $('.botonimagenes').on('click', function () {
        ajaxWithImg(this);
    });

    $('#ModalScrollable').on('show.bs.modal', function (event) {
        EventShowModal(this)
    });
    //borra elementos cuando cierra modal
    $('#ModalScrollable').on('hidden.bs.modal', function (event) {
        $('.elementsmodal').remove();
    });
    $('.deleteproduct').on('click', function () {
        CheckDelete(this);
    });
}

/* Funcion pide imagenes la llama el btnImagenes*/
function ajaxWithImg(objBtn) {
    idproduct = objBtn.getAttribute('data-idproduct');
    var data = { 'idproduct': idproduct }
    var request = $.ajax({
        //Ver que URL va aqui
        url: '/multimedia/ajaxFind',
        method: 'post',
        data: data,
        dataType: 'json',
    });
    request.done(function (response) {
        callBackAjaxWithImg(response);
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Hubo un error: " + textStatus);
    });
}

/* Funcion para borrar la llama el btn borrar*/
function ajaxDeleteMultimedia(idmultimedia, url) {
    var data = { 'idmultimedia': idmultimedia, 'url': url };
    var request = $.ajax({
        //Si en URL pongo amigable /controller/action me devuelve todo el index.php + idmultimedia en main
        //Si en URL pongo 'controllers/ajaxController.php' me pide el URL completo para todos los include 
        url: '/multimedia/borrar',
        method: 'post',
        data: data,
        dataType: "json"
    });
    request.done(function (response) {
        CallBackDelete(response, idmultimedia);
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Hubo un error: " + textStatus);
    });
};

function callBackAjaxWithImg(objImg) {
    console.log(objImg);
    var inputfile;
    $(objImg.objImg).each(function (index) {
        var element = this;
        console.log(this);
        inputfile = `
                    <form id="uploadimage" class="elementsmodal" method="POST" enctype="multipart/form-data" >
                        <div class="input-group mb-3 elementsmodal">
                            <div class="input-group-prepend elementsmodal">
                            <input id="submitformimg" data-idproduct="` + idproduct + `" type="submit" class="input-group-text submitformimg" name="submit" value="Subir" />                                        
                            </div>
                            <div class="custom-file">
                                <input type="file" name="inputfileimg" class="custom-file-input" id="inputfileimg" aria-describedby="` + idproduct + `">
                                <label class="custom-file-label" for="inputfileimg">Eleji Archivo</label>
                            </div>
                        </div>
                    <form>`
        var idmultimedia = element['idmultimedia'];
        var url = element['url'];
        var img = $('<img>', {
            'src': url,
            'class': 'elementsmodal imagenesmodal img-thumbnail idmultimedia' + idmultimedia,
            'alt': 'fotosMaquianas'
        });
        if (element['priority'] != "1") {
            var btn = $('<button>', {
                'class': 'elementsmodal btn-danger botondelete idmultimedia' + idmultimedia,
                'text': 'Borrar',
                'data-idmultimedia': idmultimedia,
                click: function () { ajaxDeleteMultimedia(idmultimedia, url); },// Como agrego la funcion al boton?
            });
        }
        $('.modal-body').append(img);
        $('.modal-body').append(btn);

    });
    $('.modal-body').prepend(inputfile);
}

function EventShowModal(objModal) {
    //Evento para submit de subida imagen.
    $('#submitformimg').on('click', function (event) {
        event.preventDefault();
        idproduct = objModal.getAttribute('data-idproduct');
        //Necesito enviar este id por Ajax
        var formData = new FormData($("#uploadimage")[0]);
        formData.append('idproduct', idproduct);

        var ruta = "/multimedia/guardar";
        var request = $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
        });
        request.done(function (response) {
            alert("Cargada con exito");
        });
        request.fail(function (jqXHR, textStatus) {
            alert("Hubo un error: " + textStatus);
        });
    });
}

function CallBackDelete(response, idmultimedia) {
    //Esto me esta devolviendo el idmultimedia dentro de un TODO el codigo html
    var msj = response.msj;
    var alert = `
                <div class="alert alert-success elementsmodal" role="alert">`+
        msj
        + `</div>`;
    var idmultimediaclass = ".idmultimedia" + idmultimedia; //Aca quiero qe respuesta sea solo el idmultimedia
    $(".modal-body").append(alert);
    //aca quiero qe borre todas las clases qe tengan este idmultimedia pero nose si esta bien
    $(idmultimediaclass).remove();
}

function CheckDelete(objBtn) {
    console.log(objBtn);
    var idProduct = objBtn.getAttribute('data-idproduct');

    var alert = `<div class="alert alert-success elementsmodal" role="alert">Seguro que desea borrar el producto numero: `
        + idProduct +
        `</div>`;
    $(".modal-body").append(alert);
    $(".submitmodal").html("Borrar");
    $(".submitmodal").on("click", function () {
        $('#myModal').modal('hide');
        AjaxDeleteProduct(idProduct);
    })
}

function AjaxDeleteProduct(idProduct) {

    var data = { 'idproduct': idProduct };
    var request = $.ajax({
        //Si en URL pongo amigable /controller/action me devuelve todo el index.php + idmultimedia en main
        //Si en URL pongo 'controllers/ajaxController.php' me pide el URL completo para todos los include 
        url: '/product/borrar',
        method: 'post',
        data: data,
        dataType: "json"
    });
    request.done(function (response) {
        CallBackDeleteProduct(response, idProduct);
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Hubo un error: " + textStatus);
    });
}

function CallBackDeleteProduct(response, idProduct) {

    var idToDelete = "product" + idProduct;

    $("#" + idToDelete).remove();

    alert("Borrado con exito");


}