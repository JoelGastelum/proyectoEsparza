<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fadein modal-lg" role="document">
        <div class="modal-content" id="contenidomodal">
        <div class="modal-header bg-primary-dark">
            <h3 class="modal-title text-white">
                Agregar Producto
            </h3>
            <button type="button" class="close" data-dismiss="modal" onClick="clean();" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="col-md-12">
        <form action="{{ route('productos.store') }}" id="form_save" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="idproduct" id="idproduct">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Nombre del producto:</label>
                        <input type="text" class="form-control" id="txtproducto" name="txtproducto">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Catégoria:</label>
                        <select name="idcategoria" id="idcategoria" class="form-control">
                        @foreach($categorias as $cat)
                        <option value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Proveedor:</label>
                        <select name="idproveedor" id="idcategoria" class="form-control">
                        @foreach($proveedores as $prov)
                        <option value="{{$prov->SupplierID}}">{{$prov->CompanyName}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Canditad EA:</label>
                        <input type="text" class="form-control" id="txtcantidadea" name="txtcantidadea">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Precio Unitario:</label>
                        <input type="number" class="form-control" id="txtpreciounitario" name="txtpreciounitario">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Unidades en Inventario:</label>
                        <input type="number" class="form-control" id="txtunidadesinv" name="txtunidadesinv">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Unidades por orden:</label>
                        <input type="number" class="form-control" id="txtunidadesorden" name="txtunidadesorden">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Nivel de reorden:</label>
                        <input type="number" class="form-control" id="txtnivel" name="txtnivel">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="certificado">Activo:</label>
                      <!-- Default unchecked -->
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="txtestado" value='1' name="txtestado1">
                        <label class="custom-control-label" for="txtestado">Si</label>
                        </div>
                        <!-- Default checked -->
                        <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="txtestado2" valie='0' name="txtestado1" checked>
                        <label class="custom-control-label" for="txtestado2">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm bg-primary" style="color:white;" onClick="validarCampos();">
                <i class="fa fa-floppy"></i> Guardar
            </button>
            <button type="button" class="btn btn-sm bg-primary" onClick="clean();" style="color:white;" data-dismiss="modal" aria-label="Close">Cerrar</button>
        </div>
    </div>
</div>

<script>
function validarCampos(){

  preciounit=$('#txtpreciounitario').val()
  unidadinv=$('#txtunidadesinv').val();
  unidadorden=$('#txtunidadesorden').val();
  nivel=$('#txtnivel').val();
  productos=$('#txtproducto').val()
  cantidadea=$('#txtcantidadea').val();
    console.log("entra");
    if(productos.length>40 || productos.length==0){
        return alert("Ingrese un producto valido");
    }else if(preciounit==0){
        return alert("Ingrese un precio unitario valido");
  }else if(unidadinv==0){
    return alert("Ingrese una unidad de inventario valida");
  }else if(unidadorden==0){
    return alert("Ingrese una unidad de orden valida");
  }else if(nivel==0){
    return alert("Ingrese una nivel valido");
  }
  else if( cantidadea===0){
    return alert("Ingrese una cantidad valida");
  }else{
    document.getElementById('form_save').submit();
  }
   
}

</script>