<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Muhammad Fakhri',
            'email' => 'fakhri@codepanda.id',
            'job' => 'College Student',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
