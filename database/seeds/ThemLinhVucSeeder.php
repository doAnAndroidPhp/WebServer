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
        $linhvuc=[];
            $linhvuc[] = [
                'ten_linh_vuc' => 'Lịch sử',
            ];
             $linhvuc[] = [
                'ten_linh_vuc' => 'Văn học',
            ];
             $linhvuc[] = [
                'ten_linh_vuc' => 'Địa lý',
            ];
             $linhvuc[] = [
                'ten_linh_vuc' => 'Hỏi vui'
            ];

            $i = 1;
        // Them vao bang linh vuc
        foreach ($linhvuc as $lv) {
            echo "Them linh vuc thu " . $i . "\n";
            App\linhVuc::create($lv);
            $i++;
        }
        echo "Done...";
    }
}
