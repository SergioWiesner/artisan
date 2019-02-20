window.onload = function () {
    let load = document.getElementById('loadingdiv');
    load.className += " loadingnone";
}

let contadoragregarcategoria = 0;
let contadoragregarayudante = 0;
let contadorpropiedades = 0;

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
                let espacio = document.getElementById("anexopropiedades");
                espacio.innerHTML += '<div id="id' + contadorpropiedades + '"><div class="form-group col"><a href="#!" onClick="elimnarestad(id' + contadorpropiedades + ')" class="closepropiedad" style="position: absolute; right: 10px;"><span aria-hidden="true">×</span></a><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[' + contadoragregarcategoria + '][propiedad]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md-12"><label for="inputAddress">Valor</label><input type="text" name="propiedades[' + contadoragregarcategoria + '][valorpropiedad]" class="form-control" placeholder="valor propiedad"></div></div>';
                contadoragregarcategoria++;
            }
        )
}

function elimnarestad(ident) {
    document.getElementById(ident).remove();
}

function agregarUsuarioEmpleado() {
    fetch('/usuarios/listar/json', {mode: 'cors'})
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
                console.log(json);
                let complemt = "";
                let idusr = document.getElementById('usuarioid').value;

                for (let a = 0; a < json.length; a++) {
                    if (idusr != json[a]['id']) {
                        complemt += "<option value='" + json[a]['id'] + "'>" + json[a]['name'] + "</option>";
                    }
                }
                let espacio = document.getElementById("anexoayudanteusuario");
                espacio.innerHTML += '<div class="form-group col"><select id="inputState" class="form-control" name="ayudante[' + contadoragregarayudante + ']"><option selected> selecciona cualquier ayudante</option>' + complemt + '</select></div>';
                contadoragregarayudante++;
            }
        );


}
