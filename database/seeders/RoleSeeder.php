<?php

namespace Database\Seeders;
use App\Models\User;
use App\RoleEnum;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $roleAdmin = Role::create(['name' => RoleEnum::Admin->value]);
        $roleTeacher = Role::create(['name' => RoleEnum::Teacher->value]);
        $roleStudent = Role::create(['name' => RoleEnum::Student->value]);

        // Create permissions
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign all permissions to the Admin role
        $roleAdmin->givePermissionTo($this->permissions);

        // Create users for each role
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password') // Use a secure way to handle passwords!
        ]);
        $adminUser->assignRole($roleAdmin);

        $teacherUser = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => bcrypt('password')
        ]);
        $teacherUser->assignRole($roleTeacher);

        $studentUser = User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => bcrypt('password')
        ]);
        $studentUser->assignRole($roleStudent);
    }
}
