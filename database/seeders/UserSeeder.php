<?php

namespace Database\Seeders;

use App\Enums\RoleNames;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => RoleNames::Admin]);
        $basicRole = Role::create(['name' => RoleNames::Basic]);

        $creator = User::factory()->create([
            'email' => 'admin@admin.com'
        ]);
        $creator->assignRole($adminRole);

        $user = User::factory()->create([
            'email' => 'user@user.com'
        ]);
        $user->assignRole($basicRole);

        User::factory()->count(50)->hasAttached($basicRole)->create();
    }
}
