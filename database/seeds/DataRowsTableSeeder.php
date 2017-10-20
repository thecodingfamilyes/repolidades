<?php

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => '1',
                'data_type_id' => '7',
                'field' => 'id',
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => '1',
                'browse' => '0',
                'read' => '0',
                'edit' => '0',
                'add' => '0',
                'delete' => '0',
                'details' => NULL,
                'order' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'data_type_id' => '7',
                'field' => 'reference',
                'type' => 'text',
                'display_name' => 'Referencia',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '2',
            ),
            2 => 
            array (
                'id' => '3',
                'data_type_id' => '7',
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Nombre',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '3',
            ),
            3 => 
            array (
                'id' => '4',
                'data_type_id' => '7',
                'field' => 'description',
                'type' => 'text_area',
                'display_name' => 'Descripción',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '4',
            ),
            4 => 
            array (
                'id' => '5',
                'data_type_id' => '7',
                'field' => 'price',
                'type' => 'number',
                'display_name' => 'Precio',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '5',
            ),
            5 => 
            array (
                'id' => '6',
                'data_type_id' => '7',
                'field' => 'category',
                'type' => 'select_dropdown',
                'display_name' => 'Categoría',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => '{"options":{"reposteria":"Repostería","manualidades":"Manualidades"}}',
                'order' => '6',
            ),
            6 => 
            array (
                'id' => '7',
                'data_type_id' => '7',
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'Foto',
                'required' => '1',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => '{"resize":{"width":"1280","height":"720"},"quality":"85%","upsize":true}',
                'order' => '7',
            ),
            7 => 
            array (
                'id' => '8',
                'data_type_id' => '7',
                'field' => 'created_at',
                'type' => 'hidden',
                'display_name' => 'Created At',
                'required' => '0',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '8',
            ),
            8 => 
            array (
                'id' => '9',
                'data_type_id' => '7',
                'field' => 'updated_at',
                'type' => 'hidden',
                'display_name' => 'Updated At',
                'required' => '0',
                'browse' => '1',
                'read' => '1',
                'edit' => '1',
                'add' => '1',
                'delete' => '1',
                'details' => NULL,
                'order' => '9',
            ),
        ));
        
        
    }
}