<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
            [
                'name' => 'Ipong 7+',
                'price' => 4500000,
                'description' => 'Gawai legendaris yang bisa memotret wanita saat mandi.',
                'image' => 'https://apollo-singapore.akamaized.net/v1/files/a7ecshw9ntdb3-ID/image;s=272x0',
                'category' => 'Second'
            ]
        );
        DB::table('items')->insert(
            [
                'name' => 'Buku Catatan Citra',
                'price' => 15000,
                'description' => 'Buku Catatan dengan cover cantik yang dibuat dengan hati, bukan ampla.',
                'image' => 'https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2022/7/20/ec8fa9d1-594e-49af-a634-fa63dddc355c.jpg',
                'category' => 'Recycle'
            ]
        );
        DB::table('items')->insert(
            [
                'name' => 'Tempat Pensil Ajaib',
                'price' => 25000,
                'description' => 'Tempat Pensil unyuuuu UwU.',
                'image' => 'https://cdn.kreasiprimaland.com/wp-content/uploads/2021/07/ide-kreatif-barang-bekas.jpg',
                'category' => 'Recycle'
            ]
        );
        DB::table('items')->insert(
            [
                'name' => 'Jaket Holo Preloved',
                'price' => 85000,
                'description' => 'Size: M | Sex: Male | Source: RebahGanteng.',
                'image' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2020/7/21/9089118/9089118_fbc64fde-e4d8-4251-b65b-408499b5b29d_640_640.jpg',
                'category' => 'Second'
            ]
        );
    }
}
