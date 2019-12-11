<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\CauHoi;
class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cauhoi = [];
             $cauhoi[] = [
             	'noi_dung' =>' Có một tàu điện đi về hướng nam. Gió hướng tây bắc. Vậy khói từ con tàu sẽ theo hướng nào?',
             	'linh_vuc_id' =>'1',
             	'phuong_an_a' =>'Đông',
             	'phuong_an_b' =>'Tây',
             	'phuong_an_c' =>'Bắc',
             	'phuong_an_d' =>'Không hướng nào',
             	'dap_an' =>'Không hướng nào',
             ];
              $cauhoi []= ['noi_dung' =>' Làm thế nào để không đụng phải ngón tay khi bạn đập búa vào một cái móng tay?','linh_vuc_id' =>'2','phuong_an_a' =>'Cầm búa bằng cả 2 tay ','phuong_an_b' =>'Cầm búa bằng tay trái ','phuong_an_c' =>'Cầm búa bằng tay phải','phuong_an_d' =>'Cầm búa bằng chân ','dap_an' =>'Cầm búa bằng cả 2 tay'];
              $cauhoi []= ['noi_dung' =>' Nếu bạn nhìn thấy con chim đang đậu trên nhánh cây, làm sao để lấy nhánh cây mà không làm động con chim?','linh_vuc_id' =>'3','phuong_an_a' =>'Bắt chim bỏ ra ngoài ','phuong_an_b' =>'Đợi chim bay đi. ','phuong_an_c' =>'Ru chim ngủ rồi lấy ','phuong_an_d' =>'Cứ đến mà lấy','dap_an' =>'Đợi chim bay đi. '];
              $cauhoi []= ['noi_dung' =>' Từ gì mà 100% người Việt Nam đều phát âm sai?','linh_vuc_id' =>'4','phuong_an_a' =>'Đúng','phuong_an_b' =>'Sai','phuong_an_c' =>'Đúng','phuong_an_d' =>'Đúng','dap_an' =>'Sai'];


            $i = 1;
        // Them vao bang goi_credit
        foreach ($cauhoi as $ch) {
            echo "Them cau hoi thu " . $i . "\n";
            App\CauHoi::create($ch);
            $i++;
        }
        echo "Done...";
    }
}
