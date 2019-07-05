window.onload = function () {
    let load = document.getElementById('loadingdiv');
    load.className += " loadingnone";
}

let contadoragregarcategoria = 0;
let contadoragregarayudante = 0;


function elimnarestad(ident) {
    let ele = document.getElementById(ident);
    ele.remove();
}

function agregarUsuarioEmpleado() {
    fetch('/usuarios/listar/json', {mode: 'cors'})
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            let complemt = "";
            let idusr = document.getElementById('usuarioid').value;

            for (let a = 0; a < json.length; a++) {
                if (idusr != json[a]['id']) {
                    complemt += "<option value='" + json[a]['id'] + "'>" + json[a]['name'] + "</option>";
                }
            }

            elChild = document.createElement('div');
            elChild.setAttribute('class', "form-group col-md-12");
            elChild.setAttribute('id', "ayudante" + contadoragregarayudante);
            elChild.innerHTML = '<a href="#!" onClick="elimnarestad(\'ayudante' + contadoragregarayudante + '\')" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a></br><select id="inputState" class="form-control" name="ayudante[' + contadoragregarayudante + ']"><option selected> selecciona cualquier ayudante</option>' + complemt + '</select>';
            document.getElementById("anexoayudanteusuario").appendChild(elChild);
            contadoragregarayudante++;
        });
}

let contadorpropiedades = 0;
let pror = document.getElementById("anexopropiedades");
let prorold = document.getElementById("anexopropiedadesold");

function variacion() {
    while (pror.hasChildNodes()) {
        pror.removeChild(pror.firstChild);
    }
    while (prorold.hasChildNodes()) {
        prorold.removeChild(prorold.firstChild);
    }
    if (document.getElementById('variaiones').checked) {
        document.getElementById("stocks").setAttribute('style', 'display:none;');
    } else {
        document.getElementById("stocks").setAttribute('style', 'display:block;');
    }
}


function agregarNuevaPropiedad() {
    fetch('/propiedades/lista/', {mode: 'cors'})
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
                let complemt = "";

                for (let a = 0; a < json.length; a++) {
                    complemt += "<option value='" + json[a]['id'] + "'>" + json[a]['nombre'] + "</option>";
                }

                elChild = document.createElement('div');
                elChild.setAttribute('class', 'col-md-12');
                elChild.setAttribute('id', 'id' + contadorpropiedades);

                if (document.getElementById('variaiones').checked) {
                    elChild.innerHTML = '<div class="row propiedadadd"><a href="#!" onClick="elimnarestad(\'id' + contadorpropiedades + '\')" class="closepropiedad" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md-6"><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[propiedad][]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md-3"><label for="inputAddress">Variación</label><input type="text" name="propiedades[valorpropiedad][]" class="form-control" placeholder="valor propiedad"></div><div class="form-group col-md-3"><label for="inputAddress">Stock</label><input type="text" name="propiedades[stock][]" class="form-control" placeholder="stock propiedad"></div><div class="form-group col-md-4"><label for="inputAddress">Precio</label><input type="text" name="propiedades[precio][]" value="0" class="form-control" placeholder="precio propiedad"></div><div class="form-group col-md-4"><label for="inputAddress">Rebaja</label><input type="text" name="propiedades[rebaja][]" class="form-control" value="0" placeholder="precio con rebaja"></div><div class="form-group col-md-4"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="propiedades[activado][]" id="Activado' + contadorpropiedades + '"><br><label class="custom-control-label" for="Activado' + contadorpropiedades + '">Activado</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="propiedades[sumable][]" id="Sumable' + contadorpropiedades + '"><label class="custom-control-label" for="Sumable' + contadorpropiedades + '">Sumable</label></div></div><div class="form-group col-md-12"><label for="inputState">imagen de la variación</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFileLang" lang="es" name="propiedades[img][]"><label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label></div></div><div class="form-group col-md-12"><label for="descripcion">Descripción</label><textarea class="form-control" id="descripcion" name="propiedades[descripcion][]" style="width: 100%; height: 200px;"></textarea></div></div>';
                } else {
                    elChild.innerHTML = '<div class="row propiedadadd"><a href="#!" onClick="elimnarestad(\'id' + contadorpropiedades + '\')" class="closepropiedad" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md"><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[propiedad][]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md"><label for="inputAddress">Valor</label><input type="text" name="propiedades[valorpropiedad][]" class="form-control" placeholder="valor propiedad"></div><div class="form-group col-md-12"><label for="inputState">imagen de la variación</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFileLang" lang="es" name="propiedades[img][]"><label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label></div></div><div class="form-group col-md-12"><label for="descripcion">Descripción</label><textarea class="form-control" id="descripcion" name="propiedades[descripcion][]" style="width: 100%; height: 200px;"></textarea></div></div>';
                }
                pror.appendChild(elChild);
                contadoragregarcategoria++;
                contadorpropiedades++;
            }
        )

}
