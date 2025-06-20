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
            "Admin.view",
            "Admin.create",
            "Admin.edit",
            "Admin.delete",
            
            "Editor.view",
            "Editor.create",
            "Editor.edit",
            "Editor.delete",
            
            "Instructor.view",
            "Instructor.create",
            "Instructor.edit",
            "Instructor.delete",
        ];

        foreach ($permissions as $key => $value) {
            Permission::create(['name' => $value]);
        
        }
    }
}
