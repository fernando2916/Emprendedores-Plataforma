<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "ver panel",
           
            "usuarios index",
            "usuarios create",
            "usuarios edit",
            "usuarios delete",
            
            "roles index",
            "roles create",
            "roles edit",
            "roles delete",
            
            "permisos index",
            "permisos create",
            "permisos edit",
            "permisos delete",

            "ver blog",
            "ver promo",

            "banner index",
            "banner create",
            "banner edit",
            "banner delete",
            
            "aviso index",
            "aviso create",
            "aviso edit",
            "aviso delete",
                      
            "blog index",
            "blog create",
            "blog edit",
            "blog delete",
            
            "ver diseño",
            "cotizacion desing index",
                      
            "plan desing index",
            "plan desing create",
            "plan desing edit",
            "plan desing delete",
            
            "proyectos index",
            "proyectos create",
            "proyectos edit",
            "proyectos delete",
            
            "opinion desing index",
            "opinion desing create",
            "opinion desing edit",
            "opinion desing delete",
            
            "categoria post index",
            "categoria post create",
            "categoria post edit",
            "categoria post delete",
            
            "categoria curso index",
            "categoria curso create",
            "categoria curso edit",
            "categoria curso delete",
            
            "categoria producto index",
            "categoria producto create",
            "categoria producto edit",
            "categoria producto delete",
        ];

        foreach ($permissions as $key => $value) {
            Permission::create(['name' => $value]);
        
        }
    }
}