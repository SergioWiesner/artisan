const buscador = document.getElementById('busquedaproducto');
const log = document.getElementById('log');
const logdocumento = document.getElementById('logdocumento');
const bandeja = document.getElementById('curponuevoproducto');
const documento = document.getElementById('documentoBuscar');
let lista = [];

buscador.addEventListener('keyup', logKey);
documento.addEventListener('keyup', documente);

function documente() {
    if (documento.value !== "") {
        var data = {
            tipodocumento: document.getElementById('tipodocumento').value,
            documento: documento.value
        };
        fetch('/buscar/usuario/documento', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                logdocumento.innerHTML = "";
                for (let a = 0; a < response.length; a++) {
                    logdocumento.innerHTML += "<a class='agregarproducto agregarproductoestilo' href='#!' onclick='traerusuario(" + response[a]['documento'] + ", " + response[a]['tipodocumento'] + ")'><i class='fas fa-plus'></i> " + response[a]['documento'] + "</a>";
                }
            });
    } else {
        logdocumento.innerHTML = "";
    }
}


function logKey() {
    if (buscador.value !== "") {
        var data = {valor: buscador.value};
        fetch('/buscar/productos', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                log.innerHTML = "";
                for (let a = 0; a < response.length; a++) {
                    log.innerHTML += "<a class='agregarproducto agregarproductoestilo' href='#!' onclick='agregarProducto(" + response[a]['id'] + ")'><i class='fas fa-plus'></i> " + response[a]['nombre'] + "</a>";
                }
            });
    } else {
        log.innerHTML = "";
    }
}

let calc = function calculo() {
    let lugar = this.getAttribute('item');
    let precio = this.getAttribute('precio');
    let total = this.value * precio;
    //document.getElementById("text2").value=document.getElementById("text1").value;
    console.log("valor multiplicar " + this.value + " por precio " + precio);
    if (!isNaN(total)) {
        document.getElementById('totalprice' + lugar).innerText = "$" + new Intl.NumberFormat("COP-CO").format(total);
    } else {
        document.getElementById('totalprice' + lugar).innerText = "$0";
    }
}

let contpro = 0;

// ELIMINAR PRODUCTO DEL CARRO DE COMPRAS
function elimnaproducto(ident, id) {
    lista.splice(lista.indexOf(id), 1)
    let ele = document.getElementById(ident);
    ele.remove();
}

// SE HACE LA SUMATORIA DE LOS PRECIOS

function cambiodeprecios(idselect, produ) {
    console.log(idselect);
    var data = {id: document.getElementById(idselect).value};
    fetch('/buscar/propiedad/producto/id', {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log(response);
            let precioparcial = parseInt(document.getElementById('preciounitario' + produ).value);
            let acumulado = 0;
            for (let x = 0; x < response.length; x++) {
                acumulado += parseInt(response[x]['precio']);
            }
            console.log(acumulado);
            let totalparcial = acumulado + precioparcial;

            document.getElementById('preciounitario' + produ).value = totalparcial;
        });

}


// SE AGREGA EL PRODUCTO AL CARRITO COTIZADOR

function agregarProducto(id) {
    while (log.hasChildNodes()) {
        log.removeChild(log.firstChild);
    }

    buscador.value = "";
    let flag = false;
    if (lista.length > 0) {
        for (let b = 0; b < lista.length; b++) {
            if (lista[b] == id) {
                flag = true;
            }
        }
    }

    if (flag != true) {
        lista.push(id);
        var data = {valor: id};
        fetch('/buscar/productos/id', {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                console.log(response);
                let propiedades = "";
                let options = "";
                let acumuladostock = 0;
                for (let c = 0; c < response.length; c++) {
                    acumuladostock = response[c]['stock'];
                    for (let d = 0; d < response[c]['propiedades'].length; d++) {
                        options = "";
                        for (let e = 0; e < response[c]['propiedades'][d]['valores'].length; e++) {
                            options += "<option value='" + response[c]['propiedades'][d]['valores'][e]['id'] + "'>" + response[c]['propiedades'][d]['valores'][e]['valor'] + "</option>";
                            acumuladostock += response[c]['propiedades'][d]['valores'][e]['stock'];
                        }
                        propiedades += '<div class="col-md-3"><div class="form-group"><label for="' + response[c]['propiedades'][d]['nombre'] + '" >' + response[c]['propiedades'][d]['nombre'] + '</label><select class="form-control" onchange="cambiodeprecios(\'' + response[c]['propiedades'][d]['nombre'] + d + '\', ' + contpro + ')" id="' + response[c]['propiedades'][d]['nombre'] + d + '" name="tipodocumento" required><option></option>' + options + '</select></div></div>';
                    // ACÁ VOYYYY    document.getElementById(response[c]['propiedades'][d]['nombre'] + d).addEventListener('change', calc);
                    }
                    elChild = document.createElement('div');
                    elChild.innerHTML = '<div class="row productostiend" id="pro' + contpro + '"><div class="col-md-12"><div class="row"><a href="#!" onClick="elimnaproducto(\'pro' + contpro + '\', ' + id + ')" style="position: absolute; right: 15px; z-index: 100;" class="vermasproductos"><span aria-hidden="true">×</span></a><div class="col-md"><div class="form-group"> <input type="hidden" value="' + response[c]["id"] + '" name="[' + c + '][id]"><label for="Cantidad">Nombre</label><a href="/productos/ver/' + response[c]["id"] + '" class="vermasproductos" target="_blank"><h5>' + response[c]["nombre"] + '</h5></a></div></div> <div class="col-md-2"><div class="form-group"><label for="Cantidad">Cantidad</label><input type="text" id="cantidadfact' + contpro + '" class="form-control" precio="' + response[c]["valor"] + '" item="' + contpro + '" name="[' + c + '][stock]" placeholder="' + acumuladostock + '" required></div></div><div class="col-md"><div class="form-group"><label for="Unidad">Precio U.</label><input class="form-control" type="text" id="preciounitario' + contpro + '"  value="' + response[c]["valor"] + '" readonly></div></div><div class="col-md"><div class="form-group"><label>Subtotal</label><p id="totalprice' + contpro + '"></p></div></div></div><div class="col-md-12"><div class="row">' + propiedades + '</div></div></div></div>';
                    bandeja.appendChild(elChild);
                }
                document.getElementById('cantidadfact' + contpro).addEventListener('keyup', calc);
            });
    }
    contpro++;
}

// FUNCION PARA TRAER LA INFO DEL USUARIO A COTIZAR
function traerusuario(documentobus, tipodocumentobus) {
    while (logdocumento.hasChildNodes()) {
        logdocumento.removeChild(logdocumento.firstChild);
    }
    var data = {
        tipodocumento: tipodocumentobus,
        documento: documentobus
    };
    fetch('/buscar/usuario/documento', {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log(response);
            logdocumento.innerHTML = "";
            for (let a = 0; a < response.length; a++) {
                document.getElementById('nombre').value = response[a]['name'];
                document.getElementById('email').value = response[a]['email'];
                document.getElementById('telefono').value = response[a]['telefono'];
                document.getElementById('direccion').value = response[a]['direccion'];
            }
        });
}
