@extends('welcome')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <div class="col-md-12" style="margin-bottom:10px">
        <button class="btn btn-success" onClick="OpenModal();"><i class="fa fa-plus"></i></button><button class="btn btn-primary" onClick="$('#modalSearch').modal('show');"style="margin-left:10px"><i class="fas fa-search"></i></button>
        </div>
        <div class="table-responsive ">
            <table id="datatable-UserIndex" class="table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th  style="width: 40%;">ID  </th>
                        <th  style="width: 20%;">Nombre</th>
                        <th  style="width: 20%;">Proveedor</th>
                        <th  style="width: 20%;">Catégoria</th>
                        <th  style="width: 20%;">Cantidad por EA</th>
                        <th  style="width: 20%;">Precio unitario</th>
                        <th  style="width: 20%;">Unidades en inventario</th>
                        <th  style="width: 20%;">Unidades por orden</th>
                        <th  style="width: 20%;">Nivel reorden</th>
                        <th  style="width: 20%;">Estado</th>
                        <th  colspan="2" style="width: 30%;">Acciones</th>
                    </tr>
                </thead>
                @include('productos.agregar')
              
                <tbody style="font-size: 15px;">
                    @foreach ($productos as $data)
                        <tr>
                            <td class="">
                                {{ $data->ProductID}}
                            </td>
                            <td class="">
                                {{ $data->ProductName}}
                            </td>
                            <td class="">
                                {{ $data->CompanyName}}
                            </td>
                            <td class="">
                                {{ $data->CategoryName}}
                            </td>
                            <td class="">
                                {{ $data->QuantityPerUnit}}
                            </td>
                            <td class="">
                                {{ $data->UnitPrice}}
                            </td>
                            <td class="">
                                {{ $data->UnitsInStock}}
                            </td>
                            <td class="">
                                {{ $data->UnitsOnOrder}}
                            </td>
                            <td class="">
                                {{ $data->ReorderLevel}}
                            </td>
                            <td class="">
                                {{ $data->estado}}
                            </td>
                            <td class="">
                                <button class="btn btn-primary btn-sm" onClick='EditProduct( {{$data->ProductID}},"{{$data->ProductName}}","{{ $data->CompanyName}}","{{ $data->CategoryName}}","{{ $data->QuantityPerUnit}}", "{{ $data->UnitPrice}}","{{ $data->UnitsOnOrder}}", "{{ $data->ReorderLevel}}","{{ $data->estado}}","{{ $data->UnitsInStock}}")'><i class="fa fa-edit"></i></button>
                            </td>
                            <td class="">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('productos.buscar')
        <script>

        $(document).ready(function() {
           
            @if(session('Exito'))
                Swal.fire({
                    type: 'success',
                    title: '!Se ha guardado con exito!',
                    text: 'El producto ha sido registrado.'
                });
            @endif
            @if(session('Error'))
                Swal.fire({
                    type: 'Warning',
                    title: '!No se ha podido completar!',
                    text: 'El producto no ha podido registrarse.'
                });
            @endif
        });
        function OpenModal (){
            $('#modalAdd').modal('show');
        }


        function EditProduct (id,producto,proveedor,categoria,cantidadea,unitprice,unidadesxorden,nivel,estado,unidades){
            $('#idproduct').val(id);
            $('#txtpreciounitario').val(unitprice);
            $('#txtunidadesinv').val(unidades);
            $('#txtunidadesorden').val(unidadesxorden);
            $('#txtnivel').val(nivel);
            $('#txtproducto').val(producto);
            $('#txtcantidadea').val(cantidadea);

            $('#modalAdd').modal('show');
        }
      

        function clean(){
            $('#idproduct').val("");
            $('#txtpreciounitario').val("");
            $('#txtunidadesinv').val("");
            $('#txtunidadesorden').val("");
            $('#txtnivel').val("");
            $('#txtproducto').val("");
            $('#txtcantidadea').val("");
        }
        </script>
        @endsection
