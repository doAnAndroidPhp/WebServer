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
             
                $cauhoi []= ['noi_dung' =>' Làm thế nào để không đụng phải ngón tay khi bạn đập búa vào một cái móng tay?','linh_vuc_id' =>'3','phuong_an_a' =>'Cầm búa bằng cả 2 tay ','phuong_an_b' =>'Cầm búa bằng tay trái ','phuong_an_c' =>'Cầm búa bằng tay phải','phuong_an_d' =>'Cầm búa bằng chân ','dap_an' =>'Cầm búa bằng cả 2 tay'];
 $cauhoi []= ['noi_dung' =>' Nếu bạn nhìn thấy con chim đang đậu trên nhánh cây, làm sao để lấy nhánh cây mà không làm động con chim?','linh_vuc_id' =>'3','phuong_an_a' =>'Bắt chim bỏ ra ngoài ','phuong_an_b' =>'Đợi chim bay đi. ','phuong_an_c' =>'Ru chim ngủ rồi lấy ','phuong_an_d' =>'Cứ đến mà lấy','dap_an' =>'Đợi chim bay đi. '];
 $cauhoi []= ['noi_dung' =>' Từ gì mà 100% người Việt Nam đều phát âm sai?','linh_vuc_id' =>'3','phuong_an_a' =>'Đúng','phuong_an_b' =>'Sai','phuong_an_c' =>'Đúng','phuong_an_d' =>'Đúng','dap_an' =>'Sai'];
 $cauhoi []= ['noi_dung' =>' Chồng người da đen, vợ người da trắng vừa sinh một đứa bé, răng của nó màu gì?','linh_vuc_id' =>'3','phuong_an_a' =>'Trắng','phuong_an_b' =>'Đen','phuong_an_c' =>'Vàng','phuong_an_d' =>'Đỏ','dap_an' =>'Trắng'];
 $cauhoi []= ['noi_dung' =>' Bố mẹ có 6 người con trai, mỗi người con trai có một đứa em gái. Vậy gia đình đó có mấy người?','linh_vuc_id' =>'3','phuong_an_a' =>'8','phuong_an_b' =>'9','phuong_an_c' =>'10','phuong_an_d' =>'11','dap_an' =>'9'];
 $cauhoi []= ['noi_dung' =>' Cái gì mà đi thì nằm, đứng cũng nằm, nhưng nằm lại đứng?','linh_vuc_id' =>'3','phuong_an_a' =>'Cái bàn','phuong_an_b' =>'Cái ghế','phuong_an_c' =>'Bàn chân','phuong_an_d' =>'Bàn tay','dap_an' =>'Bàn chân'];
 $cauhoi []= ['noi_dung' =>' Có 1 đàn chuột điếc đi ngang qua hố cống, hỏi có mấy con?','linh_vuc_id' =>'3','phuong_an_a' =>'12','phuong_an_b' =>'18','phuong_an_c' =>'24','phuong_an_d' =>'30','dap_an' =>'24'];
 $cauhoi []= ['noi_dung' =>' Có 2 người cha và 2 người con cùng chia đều số tiền là 27 nghìn. Hỏi mỗi người được bao nhiều','linh_vuc_id' =>'3','phuong_an_a' =>'6.75','phuong_an_b' =>'7','phuong_an_c' =>'7.5','phuong_an_d' =>'9','dap_an' =>'9'];
 $cauhoi []= ['noi_dung' =>' Một anh thanh niên đánh 1 bà già hỏi anh ấy mất gì?','linh_vuc_id' =>'3','phuong_an_a' =>'Mất tiền','phuong_an_b' =>'Mất dạy','phuong_an_c' =>'Mất sức','phuong_an_d' =>'Mất trí','dap_an' =>'Mất dạy'];
 $cauhoi []= ['noi_dung' =>' Tìm điểm sai trong câu: "Dưới ánh nắng sương long lanh triệu cành hồng khoe sắc thắm".','linh_vuc_id' =>'3','phuong_an_a' =>'Ánh nắng sương ','phuong_an_b' =>'Triệu cành hồng ','phuong_an_c' =>'Khoe sắc thắm','phuong_an_d' =>'Sương long lanh ','dap_an' =>'Khoe sắc thắm'];
 $cauhoi []= ['noi_dung' =>' Cái gì luôn đi đến mà không bao giờ đến nơi?','linh_vuc_id' =>'3','phuong_an_a' =>'Cơn gió','phuong_an_b' =>'Tình yêu','phuong_an_c' =>'Ngày mai','phuong_an_d' =>'Không biết','dap_an' =>'Ngày mai'];
 $cauhoi []= ['noi_dung' =>' Vào lúc nửa đêm đồng hồ bất chợt gõ 13 tiếng, chuyện gì xảy ra?','linh_vuc_id' =>'3','phuong_an_a' =>'Có ma','phuong_an_b' =>'Chuyện xấu','phuong_an_c' =>'Tận thế','phuong_an_d' =>'Đồng hồ hỏng','dap_an' =>'Đồng hồ hỏng'];
 $cauhoi []= ['noi_dung' =>' Cái gì bạn không mượn mà trả?','linh_vuc_id' =>'3','phuong_an_a' =>'Tiền','phuong_an_b' =>'Lời cảm ơn','phuong_an_c' =>'Tình cảm','phuong_an_d' =>'Không thứ gì','dap_an' =>'Lời cảm ơn'];
 $cauhoi []= ['noi_dung' =>' Loại nước giải khát nào chứa Canxi và Sắt?','linh_vuc_id' =>'3','phuong_an_a' =>'CoCa','phuong_an_b' =>'Pepsi','phuong_an_c' =>'Café','phuong_an_d' =>'Sinh tố','dap_an' =>'Café'];
 $cauhoi []= ['noi_dung' =>' Có bao nhiêu chữ C trong câu sau: "Cơm, canh, cá, tất cả em đều thích"?','linh_vuc_id' =>'3','phuong_an_a' =>'1','phuong_an_b' =>'2','phuong_an_c' =>'4','phuong_an_d' =>'5','dap_an' =>'1'];
 $cauhoi []= ['noi_dung' =>' Miệng rộng lớn nhưng không nói một từ, là con gì?','linh_vuc_id' =>'3','phuong_an_a' =>'Con chim','phuong_an_b' =>'Con sông','phuong_an_c' =>'Con voi','phuong_an_d' =>'Con khỉ','dap_an' =>'Con sông'];
 $cauhoi []= ['noi_dung' =>' Nước nào dưới đây không phải là một trong những nước đầu tiên kí Hiệp ước Bắc Đại Tây Dương ?','linh_vuc_id' =>'2','phuong_an_a' =>'Canada','phuong_an_b' =>'Bỉ','phuong_an_c' =>'Lúcxămbua','phuong_an_d' =>'CHLB Đức','dap_an' =>'CHLB Đức'];
 $cauhoi []= ['noi_dung' =>' Xu thế hoà hoãn Đông - Tây xuất hiện từ khi nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Đầu những năm 70.','phuong_an_b' =>'Cuối những năm 70.','phuong_an_c' =>'Đầu những năm 80.','phuong_an_d' =>'Cuối những năm 80.','dap_an' =>'Đầu những năm 70.'];
 $cauhoi []= ['noi_dung' =>' Chiến tranh lạnh chính thức chấm dứt vào thời điểm nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Tháng 2/1989. ','phuong_an_b' =>'Tháng 12/1991.','phuong_an_c' =>'Tháng 12/1989. ','phuong_an_d' =>'Tháng 2/1988.','dap_an' =>'Tháng 12/1991.'];
 $cauhoi []= ['noi_dung' =>' Trật tự 2 cực lanta sụp đổ vào thời điểm nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Năm 1989.   ','phuong_an_b' =>'Năm 1990.','phuong_an_c' =>'Năm 1991.  ','phuong_an_d' =>'Năm 1992.','dap_an' =>'Năm 1991.  '];
 $cauhoi []= ['noi_dung' =>' Đầu tháng 12 - 1989 đã diễn ra cuộc gặp gỡ không chính thức giữa Tổng Bí thư Đảng Cộng sản Liên Xô và Tổng thống Mĩ G. Bush ở đâu?','linh_vuc_id' =>'2','phuong_an_a' =>'Ở Luân Đôn (Anh).','phuong_an_b' =>'Ở I-an-ta (Liên xô).','phuong_an_c' =>'Ở Man-ta (Địa Trung Hải).','phuong_an_d' =>'Ở Oa-sinh-tơn (Mì).','dap_an' =>'Ở Man-ta (Địa Trung Hải).'];
 $cauhoi []= ['noi_dung' =>' Thành tựu lớn của Sinh học ở thập niên 90 của thế kỉ XX gây ra nhiều tranh cãi nhất ?','linh_vuc_id' =>'2','phuong_an_a' =>'Tìm ra cấu trúc xoắn đôi của ADN.','phuong_an_b' =>'Giải mã bản đồ gen.','phuong_an_c' =>'Sinh sản vô tính.','phuong_an_d' =>'Tất cả các ý trên.','dap_an' =>'Sinh sản vô tính.'];
 $cauhoi []= ['noi_dung' =>' Ai là du khách đầu tiên của ngành du lịch vũ trụ ?','linh_vuc_id' =>'2','phuong_an_a' =>'Đennít Títô. ','phuong_an_b' =>'Amstrong.','phuong_an_c' =>'Bê cơn.  ','phuong_an_d' =>'I. Gagarin.','dap_an' =>'Đennít Títô. '];
 $cauhoi []= ['noi_dung' =>' Vị du khách thứ 3 của ngành du lịch vũ trụ là người nước nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Anh','phuong_an_b' =>'Pháp','phuong_an_c' =>'Trung Quốc','phuong_an_d' =>'Nga','dap_an' =>'Trung Quốc'];
 $cauhoi []= ['noi_dung' =>' Nước đầu tiên trên thế giới xây dựng nhà máy điện nguyên tử ?','linh_vuc_id' =>'2','phuong_an_a' =>'Mỹ','phuong_an_b' =>'Nga','phuong_an_c' =>'Anh','phuong_an_d' =>'Pháp','dap_an' =>'Nga'];
 $cauhoi []= ['noi_dung' =>' Xu thế toàn cầu hoá bắt đầu từ khi nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Những năm 60 của thế kỉ XX.','phuong_an_b' =>'Những năm 70 của thế kỉ XX.','phuong_an_c' =>'Những năm 80 của thế kỉ XX.','phuong_an_d' =>'Những năm 90 của thế kỉ XX.','dap_an' =>'Những năm 80 của thế kỉ XX.'];
 $cauhoi []= ['noi_dung' =>' Phong trào Đông Dương đại hội Đảng ta đã vận dụng hình thức đấu tranh nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Công khai, hợp pháp.','phuong_an_b' =>'Bất hợp pháp.','phuong_an_c' =>'Bán công khai, bán hợp pháp.','phuong_an_d' =>'Công khai, bất hợp pháp.','dap_an' =>'Công khai, hợp pháp.'];
 $cauhoi []= ['noi_dung' =>' Phong trào Đông Dương đại hội khởi đầu ở khu vực nào ?','linh_vuc_id' =>'2','phuong_an_a' =>'Bắc Kỳ.','phuong_an_b' =>'Trung Kỳ.','phuong_an_c' =>'Nam Kỳ.','phuong_an_d' =>'Trung Kỳ và Nam Kỳ.','dap_an' =>'Nam Kỳ.'];
 $cauhoi []= ['noi_dung' =>' Cuộc khủng hoảng kinh tế (1929 - 1933) đã ảnh hưởng lớn nhất đến nền kinh tế Việt Nam trên lĩnh vực nào:','linh_vuc_id' =>'2','phuong_an_a' =>'Nông nghiệp','phuong_an_b' =>'Công nghiệp','phuong_an_c' =>'Xuất khẩu','phuong_an_d' =>'Thủ công nghiệp','dap_an' =>'Nông nghiệp'];
 $cauhoi []= ['noi_dung' =>' Lần đâu tiên nhân dân lao động Việt Nam kỉ niệm ngày Quốc tế lao động vào thời gian nào?','linh_vuc_id' =>'2','phuong_an_a' =>'1 - 5 - 1929.','phuong_an_b' =>'1 - 5 - 1930.','phuong_an_c' =>'1 - 5 - 1931.','phuong_an_d' =>'1 - 5 - 1933.','dap_an' =>'1 - 5 - 1930.'];
 $cauhoi []= ['noi_dung' =>' Cuộc biểu tình trong phong trào cách mạng 1930 - 1931 ở Nghệ - Tĩnh có gần 2 vạn nông dân tham gia diễn ra ở đâu?','linh_vuc_id' =>'2','phuong_an_a' =>'Anh Sơn','phuong_an_b' =>'Hưng Nguyên','phuong_an_c' =>'Thanh Chương','phuong_an_d' =>'Can Lộc','dap_an' =>'Hưng Nguyên'];
 $cauhoi []= ['noi_dung' =>' Điểm cực Bắc phần đất liền nước ta ở vĩ độ 23° 22 B tại xã Lũng Cú, huyện Đồng Văn, thuộc tỉnh','linh_vuc_id' =>'4','phuong_an_a' =>'Lào Cai','phuong_an_b' =>'Cao Bằng ','phuong_an_c' =>'Hà Giang','phuong_an_d' =>'Lạng Sơn','dap_an' =>'Hà Giang'];
 $cauhoi []= ['noi_dung' =>' Điểm cực Nam phần đất liền nước ta ở vĩ độ 8o30N tại xã Đất Mũi, huyện, Ngọc Hiển, tỉnh','linh_vuc_id' =>'4','phuong_an_a' =>'Kiên Giang','phuong_an_b' =>'Cà Mau','phuong_an_c' =>'An Giang','phuong_an_d' =>'Bạc Liêu','dap_an' =>'Cà Mau'];
 $cauhoi []= ['noi_dung' =>' Điểm cực Tây phần đất liền ở kinh độ 102° 09Đ tại xã Sín Thầu, huyện Mường Nhé, thuộc tỉnh','linh_vuc_id' =>'4','phuong_an_a' =>'Lai Châu','phuong_an_b' =>'Điện Biên','phuong_an_c' =>'Sơn La','phuong_an_d' =>'Hòa Bình','dap_an' =>'Điện Biên'];
 $cauhoi []= ['noi_dung' =>' Điểm cực Đông phần đất liền ở kinh độ 102o24Đ tại xã Vạn Thạch, huyện Vạn Ninh, thuộc tỉnh','linh_vuc_id' =>'4','phuong_an_a' =>'Quảng Ninh','phuong_an_b' =>'Bình Định','phuong_an_c' =>'Phú Yên ','phuong_an_d' =>'Khánh Hòa','dap_an' =>'Khánh Hòa'];
 $cauhoi []= ['noi_dung' =>' Huyện đảo Hoàng Sa trực thuộc','linh_vuc_id' =>'4','phuong_an_a' =>'Tỉnh Quảng Trị ','phuong_an_b' =>'Thành phố Đà Nẵng','phuong_an_c' =>'Tỉnh Khánh Hòa  ','phuong_an_d' =>'Tỉnh Quảng Ngãi','dap_an' =>'Thành phố Đà Nẵng'];
 $cauhoi []= ['noi_dung' =>' Huyện đảo Trường Xa trực thuộc','linh_vuc_id' =>'4','phuong_an_a' =>'Thành phố Đà Nẵng ','phuong_an_b' =>'Tỉnh Quảng Nam','phuong_an_c' =>'Tỉnh Khánh Hòa  ','phuong_an_d' =>'Tỉnh Quảng Ngãi','dap_an' =>'Tỉnh Khánh Hòa  '];
 $cauhoi []= ['noi_dung' =>' Vùng tiếp giáp với đất liền, ở phía trong đường cơ sở là','linh_vuc_id' =>'4','phuong_an_a' =>'Vùng tiếp giáp lãnh hải','phuong_an_b' =>'Lãnh hải','phuong_an_c' =>'Vùng đặc quyền kinh tế','phuong_an_d' =>'Nội thủy','dap_an' =>'Nội thủy'];
 $cauhoi []= ['noi_dung' =>' Vùng biển được quy định nhằm đảm bảo cho việc thực hiện chủ quyền của nước ven biển gọi là','linh_vuc_id' =>'4','phuong_an_a' =>'Vùng tiếp giáp lãnh hải ','phuong_an_b' =>'Nội thủy','phuong_an_c' =>'Vùng đặc quyền về kinh tế ','phuong_an_d' =>'Lãnh hải','dap_an' =>'Vùng tiếp giáp lãnh hải '];
 $cauhoi []= ['noi_dung' =>' Vùng biển mà ở đó nhà nước ta thực hiện chủ quyền như trên lãnh thổ đất liền, được gọi là :','linh_vuc_id' =>'4','phuong_an_a' =>'Nội thủy ','phuong_an_b' =>'Lãnh hải','phuong_an_c' =>'Vùng tiếp giáp lãnh hải ','phuong_an_d' =>'Vùng đặc quyền về kinh tế','dap_an' =>'Nội thủy '];
 $cauhoi []= ['noi_dung' =>' Vùng biển mà ranh giới ngoài của nó chính là biên giới trên biển của quốc gia, được gọi là:','linh_vuc_id' =>'4','phuong_an_a' =>'Nội thủy','phuong_an_b' =>'Lãnh hải','phuong_an_c' =>'Vùng tiếp giáp lãnh hải   ','phuong_an_d' =>'Vùng đặc quyền về kinh tế','dap_an' =>'Lãnh hải'];
 $cauhoi []= ['noi_dung' =>' Dạng địa hình chiếm diện tích lớn nhất trên lãnh thổ nước ta là:','linh_vuc_id' =>'4','phuong_an_a' =>'Đồng bằng ','phuong_an_b' =>'Đồi núi thấp','phuong_an_c' =>'Núi trung bình ','phuong_an_d' =>'Núi cao','dap_an' =>'Đồi núi thấp'];
 $cauhoi []= ['noi_dung' =>' Độ dốc chung của địa hình nước ta là','linh_vuc_id' =>'4','phuong_an_a' =>'thấp dần từ Bắc xuống Nam','phuong_an_b' =>'thấp dần từ Tây sang Đông','phuong_an_c' =>'thấp dần từ Đông Bắc xuống Tây Nam','phuong_an_d' =>'thấp dần từ Tây Bắc xuống Đông Nam','dap_an' =>'thấp dần từ Tây Bắc xuống Đông Nam'];
 $cauhoi []= ['noi_dung' =>' Cấu trúc địa hình của nước ta gồm hai hướng chính là','linh_vuc_id' =>'4','phuong_an_a' =>'hướng bắc – nam và hướng vòng cung','phuong_an_b' =>'hướng tây bắc- đông nam và hướng vòng cung','phuong_an_c' =>'hướng đông – tây và hướng vòng cung','phuong_an_d' =>'hướng đông bắc- tây nam và hướng vòng cung','dap_an' =>'hướng tây bắc- đông nam và hướng vòng cung'];
 $cauhoi []= ['noi_dung' =>' Hang Sơn Đoòng thuộc khối núi đá vôi Kẻ Bàng (Quảng Bình) nằm trong vùng núi','linh_vuc_id' =>'4','phuong_an_a' =>'Trường Sơn Bắc','phuong_an_b' =>'Trường Sơn Nam','phuong_an_c' =>'Đông Bắc ','phuong_an_d' =>'Tây Bắc','dap_an' =>'Trường Sơn Bắc'];
 $cauhoi []= ['noi_dung' =>' Khối núi Thượng nguồn sông Chảy gồm nhiều đỉnh núi cao trên 2000m nằm trong vùng núi','linh_vuc_id' =>'4','phuong_an_a' =>'Trường Sơn Bắc','phuong_an_b' =>'Trường Sơn Nam','phuong_an_c' =>'Đông Bắc  ','phuong_an_d' =>'Tây Bắc','dap_an' =>'Đông Bắc  '];
 $cauhoi []= ['noi_dung' =>' Sáng tác của Nguyễn Ái Quốc, Hồ Chí Minh không bao gồm những thể loại nào trong các thể loại sau đây:','linh_vuc_id' =>'1','phuong_an_a' =>'Văn chính luận.','phuong_an_b' =>'Truyện kí.','phuong_an_c' =>'Thơ ca','phuong_an_d' =>'Hò vè','dap_an' =>'Hò vè'];
 $cauhoi []= ['noi_dung' =>' Thể loại nào trong các thể loại văn học sau đây ra đời trong giai đoạn kháng chiến chống Pháp (1946 - 1954) ?','linh_vuc_id' =>'1','phuong_an_a' =>'Truyện ngắn','phuong_an_b' =>'Kí','phuong_an_c' =>'Thơ','phuong_an_d' =>'Truyện dài','dap_an' =>'Kí'];
 $cauhoi []= ['noi_dung' =>' Quê hương của Quang Dũng ở:','linh_vuc_id' =>'1','phuong_an_a' =>'Hà Nội','phuong_an_b' =>'Hà Tây','phuong_an_c' =>'Nam Hà','phuong_an_d' =>'Hải Dương','dap_an' =>'Hà Tây'];
 $cauhoi []= ['noi_dung' =>' Đoàn quân Tây tiến được thành lập năm nào sau đây:','linh_vuc_id' =>'1','phuong_an_a' =>'1945','phuong_an_b' =>'1946','phuong_an_c' =>'1947','phuong_an_d' =>'1948','dap_an' =>'1947'];
 $cauhoi []= ['noi_dung' =>' Bút pháp tiêu biểu của bài thơ Tây Tiến là:','linh_vuc_id' =>'1','phuong_an_a' =>'Hiện thực','phuong_an_b' =>'Lãng mạn','phuong_an_c' =>'Hiện thực XHCN','phuong_an_d' =>'Trào lộng','dap_an' =>'Lãng mạn'];
 $cauhoi []= ['noi_dung' =>'  Hoạt động nghệ thuật của Nguyễn Đình Thi nổi bật nhất ở lĩnh vực nào ?','linh_vuc_id' =>'1','phuong_an_a' =>'Viết văn','phuong_an_b' =>'Làm thơ','phuong_an_c' =>'Soạn nhạc','phuong_an_d' =>'Viết phê bình','dap_an' =>'Làm thơ'];



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
