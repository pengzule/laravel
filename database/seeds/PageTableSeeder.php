<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\User;
class PageTableSeeder extends Seeder {

  public function run()
  {
    DB::table('pages')->delete();
    DB::table('users')->delete();
    for ($i=0; $i < 10; $i++) {
      Page::create([
        'title'   => 'Title '.$i,
        'slug'    => 'first-page',
        'body'    => 'Body '.$i,
        'user_id' => 1,
      ]);
    }
    User::create([
	'name'	   => 'pengzule',
	'email'    => '295129789@qq.com',
	'password' => Hash::make('123456'),
	'is_admin' =>1,

	]);
  }

}
