<?php

class ErpController extends BaseController
{

    public function ListaGastos(){
        
        $filter = DataFilter::source(Gastos::with('usuario'));
        $filter->attributes(array('class'=>'form-inline'));
        $filter->add('fecha','Fecha','daterange')->format('d/m/Y', 'es');
        $filter->submit('search');
        $filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('fecha','Fecha');
        $grid->add('descripcion','Descripción');
        $grid->add('usuario.nombre','Usuario');
        $grid->add('monto','Monto');
        $grid->edit(url().'/gastos/edit', 'Ver/Editar/Borrar','show|modify|delete');
        $grid->link('/gastos/edit', 'Crear Nuevo', 'TR');
        $grid->orderBy('id','desc'); 
        $grid->paginate(10); 

        return View::make('gastos.lista', compact('filter', 'grid'));
    }

    public function CrudGastos(){
        $edit = DataEdit::source(new Gastos());
        $edit->label('Gastos');
        $edit->link("/ListaGastos","Volver a la lista", "TR")->back();
        $edit->add('descripcion','Descripción', 'textarea')->rule('required');
        $edit->add('monto','Monto', 'text')->rule('required');
        $edit->add('fecha','Fecha', 'date')->rule('required');
        $edit->add('foto','Foto', 'image')
                        ->rule('mimes:jpeg,png,jpg')
                        ->move('uploads');
        $edit->add('id_usuario','Usuario','select')->options(Usuario::lists('nombre', 'id'))->rule('required');
        
        return $edit->view('gastos.crud', compact('edit'));
    }

}