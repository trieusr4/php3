<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
           'title'=>"BÁN CĂN Q7 RIVERSIDE GIÁ HỖ TRỢ CHỈ 1.95 TỶ, YÊN TÂM LẬP NGHIỆP LH 0706 679 ***",
           'name'=>"Căn hộ chung cư tại Q7 Saigon Riverside",
           'price' => 1.95,
           'img' => "https://file4.batdongsan.com.vn/resize/1275x717/2022/10/23/20221023083824-503b_wm.jpg",
           'description' => '1PN-1WC (53m²): 1.95 tỷ.
           2PN-2WC (66-73m²): 2.6-3 tỷ.
           3PN-2WC (86m²): 3.8-4 tỷ.
           Hỗ trợ toàn bộ thủ tục họp đồng nhận nhà.
           Hỗ trợ vay bank.
           
           Không chỉ sở hữu vị trí đắc địa khi tọa lạc ngay mặt tiền đường Đào Trí và trước mặt là dòng sông Sài Gòn thoáng đãng, Q7 Saigon Riverside Complex còn liền kề các khu đô thị văn minh, hiện đại.
           
           Từ đây cư dân dễ dàng kết nối linh hoạt với toàn khu Nam và di chuyển nhanh chóng về trung tâm thành phố. Đặc biệt, cầu Thủ Thiêm 4 được hình thành trong tương lai sẽ kết nối khu vực dự án đến Khu đô thị mới Thủ Thiêm và đại lộ Mai Chí Thọ chỉ với vài phút di chuyển. Nhờ địa thế hướng thủy và thừa hưởng hạ tầng giao thông hoàn thiện, Q7 Saigon Riverside Complex sẽ giúp tài vận của gia chủ sẽ vô cùng hanh thông và là chốn an cư đẳng cấp dành cho bạn.',
           'acreage' => 60,
           'bedroom' => 3,
           'status' => 1,
           'user_id' => 1
        ]);
    }
}
