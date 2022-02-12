<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //usuarios
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.index',
            'description'=>'NAVEGA LA TABLA USUARIOS',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.show',
            'description'=>'VISUALIZA A UN USUARIO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.edit',
            'description'=>'EDITA A UN USUARIO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.destroy',
            'description'=>'ELIMINA UN USUARIO EN ESPECIFICO',
        ]);

        //roles
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.index',
            'description'=>'NAVEGA LA TABLA USUARIOS',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.show',
            'description'=>'VISUALIZA A UN ROL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.create',
            'description'=>'CREA UN NUEVO ROL EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.edit',
            'description'=>'EDITA UN ROL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.destroy',
            'description'=>'ELIMINA UN ROL EN ESPECIFICO',
        ]);

        //DOCUMENTS
        Permission::create([
            'name'=>'DOCUMENTO',
            'slug'=>'documents.index',
            'description'=>'NAVEGA LA TABLA IMAGENES',
        ]);
        Permission::create([
            'name'=>'DOCUMENTO',
            'slug'=>'documents.show',
            'description'=>'VISUALIZA A UN IMAGENES EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'DOCUMENTO',
            'slug'=>'documents.create',
            'description'=>'CREA UN NUEVO IMAGENES EN EL SISTEMA',
        ]);
      
        Permission::create([
            'name'=>'DOCUMENTO',
            'slug'=>'documents.destroy',
            'description'=>'ELIMINA N REGISTRO DE IMAGEN EN ESPECIFICO',
        ]);

         //PROYECTOS
         Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.index',
            'description'=>'NAVEGA LA TABLA PROYECTO',
        ]);
        Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.show',
            'description'=>'VISUALIZA A UN PROYECTO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.create',
            'description'=>'CREA UN NUEVO PROYECTO EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.edit',
            'description'=>'EDITA UN PROYECTO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.destroy',
            'description'=>'ELIMINA UN PROYECTO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'PROYECTO',
            'slug'=>'projects.pdf',
            'description'=>'SACA REPORTE DEL SEGUIMIENTO EN PDF',
        ]);

         //TRABAJADORES
         Permission::create([
            'name'=>'TRABAJADORES',
            'slug'=>'workers.index',
            'description'=>'NAVEGA LA TABLA TRABAJADORES',
        ]);
        Permission::create([
            'name'=>'TRABAJADORES',
            'slug'=>'workers.show',
            'description'=>'VISUALIZA A UN TRABAJADOR EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'TRABAJADORES',
            'slug'=>'workers.create',
            'description'=>'CREA UN NUEVO TRABAJADOR EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'TRABAJADORES',
            'slug'=>'workers.edit',
            'description'=>'EDITA UN TRABAJADOR EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'TRABAJADORES',
            'slug'=>'workers.destroy',
            'description'=>'ELIMINA UN TRABAJADOR EN ESPECIFICO',
        ]);
        
    }
}
