<?php

use Illuminate\Database\Seeder;

class PlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //テーブルのクリア
         DB::table('playlists')->truncate();
        
         //初期データ用意
         $lists = [
             ['playlistid' => 'RDEgOWe9ByNaE',
              'author' => 'xsoul0510x@gmail.com',
              'title' => 'ボカロ'],
             ['playlistid' => 'RDrWPbopR7pdM',
              'author' => 'mazai',
              'title' => '音楽'],
             ['playlistid' => 'RDwZ1gEDquuyQ',
              'author' => 'shy_am1100@ezweb.ne.jp',
              'title' => 'favorite']
            ];
 
         //登録
         foreach($lists as $list) {
         \App\Playlist::create($list);
         }
    }
}
