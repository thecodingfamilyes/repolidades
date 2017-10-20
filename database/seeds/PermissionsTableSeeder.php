<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => '1',
                'key' => 'browse_admin',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'key' => 'browse_database',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'key' => 'browse_media',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'key' => 'browse_compass',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'key' => 'browse_menus',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'menus',
            ),
            5 => 
            array (
                'id' => '6',
                'key' => 'read_menus',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'menus',
            ),
            6 => 
            array (
                'id' => '7',
                'key' => 'edit_menus',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'menus',
            ),
            7 => 
            array (
                'id' => '8',
                'key' => 'add_menus',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'menus',
            ),
            8 => 
            array (
                'id' => '9',
                'key' => 'delete_menus',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'menus',
            ),
            9 => 
            array (
                'id' => '10',
                'key' => 'browse_pages',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'pages',
            ),
            10 => 
            array (
                'id' => '11',
                'key' => 'read_pages',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'pages',
            ),
            11 => 
            array (
                'id' => '12',
                'key' => 'edit_pages',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'pages',
            ),
            12 => 
            array (
                'id' => '13',
                'key' => 'add_pages',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'pages',
            ),
            13 => 
            array (
                'id' => '14',
                'key' => 'delete_pages',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'pages',
            ),
            14 => 
            array (
                'id' => '15',
                'key' => 'browse_roles',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'roles',
            ),
            15 => 
            array (
                'id' => '16',
                'key' => 'read_roles',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'roles',
            ),
            16 => 
            array (
                'id' => '17',
                'key' => 'edit_roles',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'roles',
            ),
            17 => 
            array (
                'id' => '18',
                'key' => 'add_roles',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'roles',
            ),
            18 => 
            array (
                'id' => '19',
                'key' => 'delete_roles',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'roles',
            ),
            19 => 
            array (
                'id' => '20',
                'key' => 'browse_users',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'users',
            ),
            20 => 
            array (
                'id' => '21',
                'key' => 'read_users',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'users',
            ),
            21 => 
            array (
                'id' => '22',
                'key' => 'edit_users',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'users',
            ),
            22 => 
            array (
                'id' => '23',
                'key' => 'add_users',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'users',
            ),
            23 => 
            array (
                'id' => '24',
                'key' => 'delete_users',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'users',
            ),
            24 => 
            array (
                'id' => '25',
                'key' => 'browse_posts',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'posts',
            ),
            25 => 
            array (
                'id' => '26',
                'key' => 'read_posts',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'posts',
            ),
            26 => 
            array (
                'id' => '27',
                'key' => 'edit_posts',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'posts',
            ),
            27 => 
            array (
                'id' => '28',
                'key' => 'add_posts',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'posts',
            ),
            28 => 
            array (
                'id' => '29',
                'key' => 'delete_posts',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'posts',
            ),
            29 => 
            array (
                'id' => '30',
                'key' => 'browse_categories',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'categories',
            ),
            30 => 
            array (
                'id' => '31',
                'key' => 'read_categories',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'categories',
            ),
            31 => 
            array (
                'id' => '32',
                'key' => 'edit_categories',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'categories',
            ),
            32 => 
            array (
                'id' => '33',
                'key' => 'add_categories',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'categories',
            ),
            33 => 
            array (
                'id' => '34',
                'key' => 'delete_categories',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'categories',
            ),
            34 => 
            array (
                'id' => '35',
                'key' => 'browse_settings',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'settings',
            ),
            35 => 
            array (
                'id' => '36',
                'key' => 'read_settings',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'settings',
            ),
            36 => 
            array (
                'id' => '37',
                'key' => 'edit_settings',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'settings',
            ),
            37 => 
            array (
                'id' => '38',
                'key' => 'add_settings',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'settings',
            ),
            38 => 
            array (
                'id' => '39',
                'key' => 'delete_settings',
                'created_at' => '2017-10-13 11:07:34',
                'updated_at' => '2017-10-13 11:07:34',
                'permission_group_id' => NULL,
                'table_name' => 'settings',
            ),
            39 => 
            array (
                'id' => '40',
                'key' => 'browse_products',
                'created_at' => '2017-10-20 18:17:38',
                'updated_at' => '2017-10-20 18:17:38',
                'permission_group_id' => NULL,
                'table_name' => 'products',
            ),
            40 => 
            array (
                'id' => '41',
                'key' => 'read_products',
                'created_at' => '2017-10-20 18:17:38',
                'updated_at' => '2017-10-20 18:17:38',
                'permission_group_id' => NULL,
                'table_name' => 'products',
            ),
            41 => 
            array (
                'id' => '42',
                'key' => 'edit_products',
                'created_at' => '2017-10-20 18:17:38',
                'updated_at' => '2017-10-20 18:17:38',
                'permission_group_id' => NULL,
                'table_name' => 'products',
            ),
            42 => 
            array (
                'id' => '43',
                'key' => 'add_products',
                'created_at' => '2017-10-20 18:17:38',
                'updated_at' => '2017-10-20 18:17:38',
                'permission_group_id' => NULL,
                'table_name' => 'products',
            ),
            43 => 
            array (
                'id' => '44',
                'key' => 'delete_products',
                'created_at' => '2017-10-20 18:17:38',
                'updated_at' => '2017-10-20 18:17:38',
                'permission_group_id' => NULL,
                'table_name' => 'products',
            ),
        ));
        
        
    }
}