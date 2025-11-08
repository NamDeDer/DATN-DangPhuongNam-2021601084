<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;
use Illuminate\Support\Facades\DB;
class SizeSeeder extends Seeder
{
    public function run(): void
    {
        // Tắt kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate bảng con trước
        DB::table('product_sizes')->truncate();

        // Truncate bảng cha
        DB::table('sizes')->truncate();

        // Bật lại kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Seed lại dữ liệu size quần áo
        $sizes = ['M', 'L', 'XL', 'XXL'];

        foreach ($sizes as $size) {
            Size::create([
                'name' => $size
            ]);
        }
    }
}

