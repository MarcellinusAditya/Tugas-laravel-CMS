<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'users_id' => 1,
            'categories_id' => 2,
            'title' => 'Ronaldo Retired',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet rhoncus diam, ut dapibus lectus. Maecenas eros leo, suscipit eget congue nec, imperdiet sit amet magna. Duis blandit vehicula enim in ullamcorper. Aliquam erat volutpat. Mauris dapibus quis turpis ac euismod. Duis quis orci volutpat nibh malesuada accumsan eu non neque. Morbi ac turpis faucibus, laoreet ante nec, convallis nisi. Donec nec commodo justo, eu pulvinar massa. Fusce id ex id purus malesuada consectetur in sed nisi. Vivamus viverra lobortis metus eget laoreet. In non nunc facilisis orci cursus feugiat. Curabitur ut ex accumsan, consequat velit ut, lacinia eros. Curabitur commodo bibendum sapien, sed pharetra neque. Vestibulum et risus purus. Suspendisse id neque sit amet dolor rhoncus finibus.

            Cras viverra finibus molestie. Etiam bibendum pretium nisi, aliquam dapibus enim pellentesque at. Nunc semper, tellus et rhoncus sagittis, lectus nisi bibendum mauris, sit amet condimentum eros purus nec diam. Vivamus vitae volutpat justo. Mauris malesuada velit quis sem pellentesque, a eleifend neque interdum. Integer consectetur varius urna, vel rhoncus odio efficitur non. Nunc vitae orci non leo suscipit hendrerit.',
            'created_at' => Carbon::now(),
        ]);
    }
}
