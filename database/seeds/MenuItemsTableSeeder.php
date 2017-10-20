<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'menu_id' => '1',
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '1',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'menu_id' => '1',
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '5',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => '4',
                'menu_id' => '1',
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '4',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => '7',
                'menu_id' => '1',
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '3',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => '8',
                'menu_id' => '1',
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '9',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => '9',
                'menu_id' => '1',
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => '8',
                'order' => '1',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => '10',
                'menu_id' => '1',
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => '8',
                'order' => '2',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => '11',
                'menu_id' => '1',
                'title' => 'Compass',
                'url' => '/admin/compass',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => '8',
                'order' => '3',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => NULL,
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => '12',
                'menu_id' => '1',
                'title' => 'Hooks',
                'url' => '/admin/hooks',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => '8',
                'order' => '4',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => NULL,
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => '13',
                'menu_id' => '1',
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => '10',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => '14',
                'menu_id' => '1',
                'title' => 'Productos',
                'url' => '/admin/products',
                'target' => '_self',
                'icon_class' => 'voyager-gift',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => '2',
                'created_at' => '2017-10-20 18:33:50',
                'updated_at' => '2017-10-20 18:33:57',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}