<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linhvuc = [];
        $linhvuc = [
                'ten_linh_vuc' => 'Lịch sử',
            ];
             $linhvuc = [
                'ten_linh_vuc' => 'Văn học',
            ];
             $linhvuc = [
                'ten_linh_vuc' => 'Địa lý',
            ];
             $linhvuc = [
                'ten_linh_vuc' => 'Hóa học',
            ];
             $linhvuc = [
                'ten_linh_vuc' => 'Sinh học',
            ];
             $linhvuc = [
                'ten_linh_vuc' => 'Ngu học'
            ];
            $i = 1;
        // Them vao bang goi_credit
        foreach ($linhvuc as $linh_vuc) {
            echo "Them linh vuc thu " . $i . "\n";
            linhVuc::create($linh_vuc);
            $i++;
        }
        echo "Done...";
    }
}
