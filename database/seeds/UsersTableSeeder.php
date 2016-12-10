<?php

use App\Models\User;
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
        $user = new User([
        	'first_name' => 'Peter',
			'last_name' => 'Bedor',
			'email' => 'peterbedor@gmail.com',
			'password' => bcrypt('cartman')
		]);

		$user->save();
    }
}
