<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data dummy
        $guru1 = User::create([
            'name'      => 'PakEko',
            'email'     => 'ekolokasi@gmail.com',
            'password'  => bcrypt('eko123'),
            'login_role'    => 'guru',
        ]);

        $guru1->assignRole('guru');

        $siswa1 = User::create([
            'name'      => 'Andi',
            'email'     => 'andi@gmail.com',
            'password'  => bcrypt('andi123'),
            'login_role'    => 'siswa',
        ]);

        $siswa1->assignRole('siswa');
    }
}
