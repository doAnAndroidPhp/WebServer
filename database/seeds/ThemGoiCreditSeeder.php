<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $credit = [];

            $credit = [
                'ten_goi' => 'goi10',
                'credit' => '100',
                'so_tien' => '10.000',
            ];

            $credit = [
                'ten_goi' => 'goi20',
                'credit' => '350',
                'so_tien' => '20.000',
            ];

            $credit = [
                'ten_goi' => 'goi50',
                'credit' => '750',
                'so_tien' => '50.000',
            ];

            $credit = [
                'ten_goi' => 'goi100',
                'credit' => '1150',
                'so_tien' => '100.000',
            ];
            $i = 1;
        // Them vao bang goi_credit
        foreach ($credit as $goi_credit) {
            echo "Them goicredit thu " . $i . "\n";
            GoiCredit::create($goi_credit);
            $i++;
        }
        echo "Done...";
    }
}
