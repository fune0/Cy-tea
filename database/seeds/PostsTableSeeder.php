<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        
            'area' => '渋谷区',
            'lotname' => '渋谷区第一駐輪場',
            'address' => '渋谷区南平台町13-11',
            'fee' => '200円/1時間',
            'totalnumbers' => '200台',
            'text' => '道玄坂を登りきった先にある渋谷を代表する駐輪場',
            'image' => 'http://www.fukuokatown.com/wp-content/uploads/2018/10/IMG_3073.jpg'
        
        ]);
    }
}
