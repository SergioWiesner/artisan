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

                elChild = document.createElement('div');
                elChild.innerHTML = '<div class="row" id="id' + contadorpropiedades + '"><a href="#!" onClick="elimnarestad(\'id' + contadorpropiedades + '\')" class="closepropiedad" style="position: absolute; right: 15px; z-index: 100;"><span aria-hidden="true">×</span></a><div class="col-md-6"><label for="inputState">Propiedades</label><select id="inputState" class="form-control" name="propiedades[propiedad][]"><option selected> selecciona cualquier propiedad</option>' + complemt + '</select></div><div class="form-group col-md-6"><label for="inputAddress">Valor</label><input type="text" name="propiedades[valorpropiedad][]" class="form-control" placeholder="valor propiedad"></div></div>';
                document.getElementById("anexopropiedades").appendChild(elChild);
                contadoragregarcategoria++;
            }
        )
}

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
            }
        );


}
