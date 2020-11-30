<div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
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
        <form action="{{ route('productos.buscar') }}" id="form_buscar" method="POST">
        {{ csrf_field() }}
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
                        <option value="0">Seleccionar</option>
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
                        <option value="0">Seleccionar</option>
                        @foreach($proveedores as $prov)
                        <option value="{{$prov->SupplierID}}">{{$prov->CompanyName}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm bg-primary" style="color:white;" onClick="document.getElementById('form_buscar').submit();">
                <i class="fa fa-floppy"></i> Guardar
            </button>
            <button type="button" class="btn btn-sm bg-primary" onClick="clean();" style="color:white;" data-dismiss="modal" aria-label="Close">Cerrar</button>
        </div>
    </div>
</div>

