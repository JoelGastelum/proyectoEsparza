<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductoController extends Controller
{
    //

    public function  index(){
      
        $productos=DB::select("
        select p.ProductID,p.ProductName,s.CompanyName, c.CategoryName,p.QuantityPerUnit,p.UnitPrice,p.UnitsInStock,p.UnitsOnOrder,p.ReorderLevel,
           CASE
		   WHEN p.Discontinued=1 THEN 'Activo'
			ELSE 'Descontinuado'
		END estado
        from products p
        inner join categories c on p.CategoryID=c.CategoryID
        inner join suppliers s on p.SupplierID=s.SupplierID  ");

        $categorias=DB::select('select * from categories');

        $proveedores=DB::Select("select * from Suppliers");

        return view('productos.index',compact('productos','categorias','proveedores'));
    }

    public function  Store(Request $request){
        $estado=0;
        if($request->txtestado=='on'){
            $estado=1;
        }

      /*  $result=DB::Select("EXEC sp_Products 3,'','',1,1,0,1,1,1,1");
       dd($result);
        $var;
        $result2 = DB::select('call sp_Products(?,?,?,?,?,?,?,?,?)',
        array("'".$request->txtproducto."'",
        "'".$request->txtcantidadea."'",
        $request->idproveedor,
        $request->idcategoria,
        $request->txtpreciounitario,
        $request->txtunidadesinv,
        $request->txtunidadesorden,
        $request->txtnivel,
        $estado));

        dd($result2);
*/

        if(!$request->idproduct){
            $result2 = DB::update(
                "DECLARE @ProductID int
                EXEC sp_Products @ProductID output,'$request->txtproducto','$request->txtcantidadea','$request->idproveedor',$request->idcategoria,$request->txtpreciounitario,$request->txtunidadesinv,$request->txtunidadesorden,$request->txtnivel,$estado
                SELECT ProductID=@ProductID"
            );
        }else {
            $result2 = DB::update(
                "
                EXEC sp_Products $request->idproduct,'$request->txtproducto','$request->txtcantidadea','$request->idproveedor',$request->idcategoria,$request->txtpreciounitario,$request->txtunidadesinv,$request->txtunidadesorden,$request->txtnivel,$estado
                "
            );
        }
        
     
        if($result2){
            return redirect('productos')->with("Exito",'exit');
        }

        return redirect('productos')->with("Error",'error');

    }


    public function  Buscar(Request $request){
        $sqlProv="";
        $sqlCat="";
  
        if($request->idproveedor>0){
            $sqlProv="AND p.SupplierID=$request->idproveedor";
        }
        if($request->idcategoria>0){
            $sqlCat="AND p.CategoryID=$request->idcategoria";
        }
        $productos=DB::select("
        select p.ProductID,p.ProductName,s.CompanyName, c.CategoryName,p.QuantityPerUnit,p.UnitPrice,p.UnitsInStock,p.UnitsOnOrder,p.ReorderLevel,
           CASE
		   WHEN p.Discontinued=1 THEN 'Activo'
			ELSE 'Descontinuado'
		END estado
        from products p
        inner join categories c on p.CategoryID=c.CategoryID
        inner join suppliers s on p.SupplierID=s.SupplierID 
        WHERE p.ProductName like '%$request->txtproducto%' 
        $sqlCat
        $sqlProv
        ");

        $categorias=DB::select('select * from categories');

        $proveedores=DB::Select("select * from Suppliers");

        return view('productos.index',compact('productos','categorias','proveedores'));
    }
}
