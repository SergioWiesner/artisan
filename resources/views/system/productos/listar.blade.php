@extends('system.productos.productos')
@section('contentproductos')
    <h3 class="titulos">Listar productos</h3>
    <hr>
    <ul class="nav justify-content-left">
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fas fa-plus"></i> Agregar producto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-file-excel"></i> Descargar excel</a>
        </li>
    </ul>
    <form>
        <div class="input-group">
            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected></option>
                <option value="1">One</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Buscar</button>
            </div>
    </form>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Stock</th>
            <th scope="col">Valor</th>
            <th scope="col">categoria</th>
            <th scope="col">Descrpción</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <div class="opcs">
                    <a href=""><i class="fas fa-pencil-alt"></i></a>
                    <a href=""><i class="fas fa-trash"></i></a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
