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
        $admin = User::where('email', '=', 'admin@sam-trader.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'Sam',
                'last_name' => 'Trader',
                'status' => 2,
                'username' =>'admin',
                'user_role' => 'admin',
                'email' => 'admin@sam-trader.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('JDhBcUKX9RUcu2'),

            ]);
        }
    }
}
