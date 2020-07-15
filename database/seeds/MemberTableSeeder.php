<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全レコードクリア
        DB::table('member')->truncate();

        // レコード追加
        DB::table('member')->insert([
            [
                'name' => '小深田 大翔',
                'name_kana' => 'コブカタ ヒロト',
                'email' => 'kobukata0@example.com',
            ],
            [
                'name' => '鈴木 大地',
                'name_kana' => 'スズキ ダイチ',
                'email' => 'd-suzuki7@example.com',
            ],
            [
                'name' => '茂木 栄五郎',
                'name_kana' => 'モギ エイゴロウ',
                'email' => 'mogimogi5@example.com',
            ],
            [
                'name' => '浅村 栄斗',
                'name_kana' => 'アサムラ ヒデト',
                'email' => 'asamura3@example.com',
            ],
            [
                'name' => '島内 宏明',
                'name_kana' => 'シマウチ ヒロアキ',
                'email' => 'shimauchi35@example.com',
            ],
        ]);
    }
}
