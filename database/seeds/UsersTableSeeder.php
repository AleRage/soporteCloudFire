<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory(App\User::class)->create([
            'first_name' => 'Alejandro',
            'last_name'  => 'Hurtatiz',
            'email'      => 'admin@proyecto.com',
            'role'       => 'admin',
            'password'   => bcrypt('soporte123'),
        ]);

        factory(App\User::class, 49)->create();
    }
}
