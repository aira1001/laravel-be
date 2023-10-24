<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as SpatieRole;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        foreach (array_column(Role::cases(), 'value') as $role) {
            SpatieRole::findOrCreate($role);
        }
    }
}
