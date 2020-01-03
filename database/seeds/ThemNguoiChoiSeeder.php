<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	App\NguoiChoi::create([
        		'ten_dang_nhap' => 'a',
        		'mat_khau'		=> Hash::make('123'),
        		'email'			=> 'q@gmail.com',
        		'hinh_dai_dien'	=>'a.jpg',
        		'diem_cao_nhat'	=> '1111',
        		'credit'		=>'11'
        	]);
    }
}
