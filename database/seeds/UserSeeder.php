<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@nordcaptals.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'Nord',
                'last_name' => 'Captals',
                'status' => 2,
                'username' =>'admin',
                'user_role' => 'admin',
                'email' => 'admin@nordcaptals.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('NORDCapBcUKX9RUc'),

            ]);
        }
    }
}
