<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('posts')->insert([
                'title'=>"Báo Cáo Quý 1/2023 Của Batdongsan.com.vn Đề Xuất Doanh Nghiệp BĐS “Chủ Động Đón Đầu”".$i,
                'image'=>"https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/7/2023/04/1.4-nhom-doanh-nghiep-phat-trien-BDS.png",
                'des'=>"Báo cáo thị trường bất động sản (BĐS) quý 1/2023 sẽ được Batdongsan.com.vn tổ chức online vào ngày 11/4 tới đây, qua nền tảng Zoom với chủ đề “Chủ động đón đầu”.
                Báo cáo và dữ liệu về thị trường BĐS của Batdongsan.com.vn được công bố định kỳ và là nguồn thông tin tham khảo tin cậy đối với nhiều doanh nghiệp và tổ chức cũng như với người dùng có nhu cầu mua bán BĐS. Trong Hội nghị BĐS – VRES 2022, Batdongsan.com.vn đã đưa ra dự báo về “thời điểm đảo chiều” của thị trường, và báo cáo quý 1 cũng sẽ cập nhật các thông tin để củng cố cho dự báo đó.
                Ngoài ra, những dữ liệu nổi bật sẽ được Batdongsan.com.vn cập nhật và phân tích, bao gồm: (1) Tác động của kinh tế vĩ mô đến thị trường BĐS và dự báo triển vọng thị trường trong tương lai; (2) Vị thế và các xu hướng chuyển mình của 4 nhóm doanh nghiệp BĐS; (3) Biến động thị trường BĐS Hà Nội, TP. Hồ Chí Minh và các tỉnh trọng điểm qua dữ liệu lớn của Batdongsan.com.vn.
                Các “Ông Lớn” BĐS Đang Ở Vị Thế Nào?
                Theo một phân tích của Batdongsan.com.vn trong báo cáo quý 1/2023, doanh nghiệp BĐS Việt Nam được chia thành 4 nhóm điển hình: rủi ro, cân bằng, tiềm lực và người chơi mới. Cách thức phân loại dựa trên đánh giá về áp lực nợ ngắn hạn và tổng nợ so sánh với quy mô tài sản của các doanh nghiệp dựa theo số liệu từ báo cáo tài chính mà doanh nghiệp công bố.
                Thứ nhất là các doanh nghiệp ở nhóm “rủi ro” khi áp lực nợ ngắn hạn và tổng nợ lớn hơn so với quy mô tài sản. Nhóm này bao gồm một số đơn vị như Novaland (NVL), Vinhomes (VHM), Viglacera (VGC), Sunshine Homes (SSH), Phát Đạt (PDR), Hà Đô (HDG), Becamex IDC (BCM), CTCP Đầu tư Phát triển Đô thị và Khu công nghiệp Sông Đà (SJS)… Các doanh nghiệp thuộc nhóm này đang chuyển mình theo hướng thu gọn để cân bằng thông qua tái cơ cấu nợ và cân bằng dòng tiền bằng việc bán bớt tài sản, giảm lượng hàng tồn kho bằng cách điều chỉnh giá bán hoặc đưa ra chính sách ưu đãi, khuyến mãi phù hợp.
                Thứ hai là nhóm các doanh nghiệp phát triển BĐS có vị thế “cân bằng” với tỷ lệ nợ và quy mô tài sản ở mức hợp lý. Đại diện của nhóm này là Văn Phú Invest (VPI), Đất Xanh (DXG), IDICO (IDC), Nam Long (NLG), Sài Gòn Thương Tín (SCR), C.E.O (CEO), Kinh Bắc (KBC),… Giải pháp của họ là tối ưu vận hành và tập trung vào thế mạnh sản phẩm lõi để củng cố dòng tiền ổn định, ưu tiên tái cơ cấu các khoản nợ rủi ro lớn trong ngắn hạn.
                Thứ ba, là nhóm chủ đầu tư BĐS “tiềm lực” có tỷ lệ nợ ngắn hạn và tổng nợ thấp, quy mô tài sản lớn, điển hình có thể kể tới Khang Điền (KDH). Chúng tôi quan sát thấy những doanh nghiệp ở vị thế tiềm lực tập trung vào các sản phẩm BĐS tạo dòng tiền bền vững​, tìm kiếm cơ hội với phân khúc/loại hình mới​ và thu mua quỹ đất hợp lý, mở rộng đến khu vực địa lý mới.
                Ngoài các nhóm hiện tại, thị trường xuất hiện nhóm “người chơi mới”, nhóm này là một ẩn số với các doanh nghiệp, quỹ đầu tư, v.v… đang tìm kiếm cơ hội thâm nhập thị trường BĐS​ ​thông qua M&A, thu mua quỹ đất với những doanh nghiệp BĐS phù hợp​ hoặc tự thành lập doanh nghiệp BĐS để phát triển sản phẩm riêng.
                ",
                'user_id'=>1
            ]);
        }
    }
}
