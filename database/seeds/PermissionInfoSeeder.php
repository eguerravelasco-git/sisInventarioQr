<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission\Models\Role;
//use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            //DB::table('permission_role')->truncate();
<<<<<<< HEAD
           // Permission::truncate();
=======
            //Permission::truncate();
>>>>>>> e57dee95c186fcfff228142b867161c0ac4ca1e0
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");



        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')    
        ]);

        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'descripcion' => 'Administrador',
            'full-access' => 'si'
    
        ]);

         //rol Registered User
         $roluser=Role::create([
            'name' => 'Usuario Registrado',
            'slug' => 'registereduser',
            'descripcion' => 'Usuario Registrado',
            'full-access' => 'no'
    
        ]);
        
        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);
      
        
<<<<<<< HEAD
       /* //permission
=======
        /*//permission
>>>>>>> e57dee95c186fcfff228142b867161c0ac4ca1e0
        $permission_all = [];

        
        //permission role
        $permission = Permission::create([
            'name' => 'Listar Roles',
            'slug' => 'role.index',
            'descripcion' => 'Un usuario puede listar los roles',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Mirar Roles',
            'slug' => 'role.show',
            'descripcion' => 'Un usuario puede mirar los roles',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Crear Roles',
            'slug' => 'role.create',
            'descripcion' => 'Un usuario puede crear los roles',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Editar Roles',
            'slug' => 'role.edit',
            'descripcion' => 'Un usuario puede modificar los roles',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Eliminar Roles',
            'slug' => 'role.destroy',
            'descripcion' => 'Un usuario puede eliminar los roles',
        ]);

        $permission_all[] = $permission->id;
    
        


        //permission user
        $permission = Permission::create([
            'name' => 'Listar Usuarios',
            'slug' => 'user.index',
            'descripcion' => 'Un usuario puede listar los usuarios',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Mirar usuarios',
            'slug' => 'user.show',
            'descripcion' => 'Un usuario puede mirar los usuarios',
        ]);        
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Editar Usuarios',
            'slug' => 'user.edit',
            'descripcion' => 'Un usuario puede editar los usuarios',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Eliminar Usuarios',
            'slug' => 'user.destroy',
            'descripcion' => 'Un usuario puede eliminar los usuarios',
        ]);
        
        $permission_all[] = $permission->id;


        //new
        $permission = Permission::create([
            'name' => 'Mirar su Usuario',
            'slug' => 'userown.show',
            'descripcion' => 'Un usuario puede mirar su propio usuario',
        ]);        
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Editar su Usuario',
            'slug' => 'userown.edit',
            'descripcion' => 'Un usuario puede editar su usuario',
        ]);

       $permission = Permission::create([
            'name' => 'Crear Usuario',
            'slug' => 'user.create',
            'descripcion' => 'Puede crear usuarios',
        ]);
        
        $permission_all[] = $permission->id;
        
        
        
        $roladmin->permissions()->sync( $permission_all);*/
        
    }
}
