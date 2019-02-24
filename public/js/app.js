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
                    elChild.innerHTML = '<div class="row"><a href="#!" onClick="elimnarestad(\'id' + contadorpropiedades + '\')" class="closepropiedad" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md"><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[propiedad][]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md"><label for="inputAddress">Variación</label><input type="text" name="propiedades[valorpropiedad][]" class="form-control" placeholder="valor propiedad"></div><div class="form-group col-md"><label for="inputAddress">Stock</label><input type="text" name="propiedades[stock][]" class="form-control" placeholder="stock propiedad"></div><div class="form-group col-md"><label for="inputAddress">Precio</label><input type="text" name="propiedades[Precio][]" class="form-control" placeholder="precio propiedad"></div></div>';
                }
                else {
                    elChild.innerHTML = '<div class="row"><a href="#!" onClick="elimnarestad(\'id' + contadorpropiedades + '\')" class="closepropiedad" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md"><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[propiedad][]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md"><label for="inputAddress">Valor</label><input type="text" name="propiedades[valorpropiedad][]" class="form-control" placeholder="valor propiedad"></div></div>';
                }
                pror.appendChild(elChild);
                contadoragregarcategoria++;
                contadorpropiedades++;
            }
        )

}
