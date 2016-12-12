<?php

use App\Models\User;
use App\Models\Account;
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
		$account = new Account([
			'name' => 'Caddis',
			'slug' => str_slug('Caddis'),
			'active' => 1
		]);

		$account->save();

        $user = new User([
        	'first_name' => 'Peter',
			'last_name' => 'Bedor',
			'email' => 'peterbedor@gmail.com',
			'account_id' => $account->id,
			'password' => bcrypt('cartman')
		]);

		$user->save();
    }
}
