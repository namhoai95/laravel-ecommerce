<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /*$this->call(ChungLoaiTableSeeder::class);


        */
        $this->call(ThuongHieuTable::class);
        $this->call(LoaiSanPhamTable::class);
        $this->call(SanPhamTable::class);
        Model::reguard();
    }
}

/*class ChungLoaiTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('chung_loai')->insert(array(
            array('ten_chung_loai' => 'Thể thao', 'thu_tu' => '1', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Nam', 'thu_tu' => '2', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Nữ', 'thu_tu' => '3', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Trẻ em', 'thu_tu' => '4', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Thời trang', 'thu_tu' => '5', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Trang trí', 'thu_tu' => '6', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Nội thất', 'thu_tu' => '7', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Quần áo', 'thu_tu' => '8', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Cặp', 'thu_tu' => '9', 'an_hien' => '1'),
            array('ten_chung_loai' => 'Giày', 'thu_tu' => '10', 'an_hien' => '1')
        ));
    }
}*/

class ThuongHieuTable extends Seeder
{
    public function run()
    {
       DB::table('thuong_hieu')->insert(array(
           array('ten_thuong_hieu' => 'Razer','thu_tu' => 1, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'Steelseries','thu_tu' => 2, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'Corsair','thu_tu' => 3, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'CM Storm','thu_tu' => 4, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'Logitech','thu_tu' => 5, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'Ozone','thu_tu' => 6, 'an_hien' => 1),
           array('ten_thuong_hieu' => 'Tt eSports','thu_tu' => 7, 'an_hien' => 1),
       ));
    }
}

class LoaiSanPhamTable extends Seeder
{
    public function run()
    {
        DB::table('loai_san_pham')->insert(array(
            /*array('ten_loai' => 'Nike', 'thu_tu' => '1', 'an_hien' => '1', 'idCL' => '1'),
            array('ten_loai' => 'Under Armour', 'thu_tu' => '2', 'an_hien' => '1', 'idCL' => '1'),
            array('ten_loai' => 'Adidas', 'thu_tu' => '3', 'an_hien' => '1', 'idCL' => '1'),
            array('ten_loai' => 'Puma', 'thu_tu' => '4', 'an_hien' => '1', 'idCL' => '1'),
            array('ten_loai' => 'ASICS', 'thu_tu' => '5', 'an_hien' => '1', 'idCL' => '1'),
            array('ten_loai' => 'Đồ bơi nam', 'thu_tu' => '1', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Đồ vét', 'thu_tu' => '2', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Đồ lót & Tất', 'thu_tu' => '3', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Quần nam', 'thu_tu' => '4', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Áo khoác nam', 'thu_tu' => '5', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Áo len & Cardigan nam', 'thu_tu' => '6', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Áo sơ mi', 'thu_tu' => '7', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Áo thun nam', 'thu_tu' => '8', 'an_hien' => '1', 'idCL' => '2'),
            array('ten_loai' => 'Jeans', 'thu_tu' => '9', 'an_hien' => '1', 'idCL' => '2'),*/

            /*array('ten_loai' => 'Thể thao', 'thu_tu' => '1', 'an_hien' => '1'),
            array('ten_loai' => 'Nam', 'thu_tu' => '2', 'an_hien' => '1'),
            array('ten_loai' => 'Nữ', 'thu_tu' => '3', 'an_hien' => '1'),
            array('ten_loai' => 'Trẻ em', 'thu_tu' => '4', 'an_hien' => '1'),
            array('ten_loai' => 'Thời trang', 'thu_tu' => '5', 'an_hien' => '1'),
            array('ten_loai' => 'Trang trí', 'thu_tu' => '6', 'an_hien' => '1'),
            array('ten_loai' => 'Nội thất', 'thu_tu' => '7', 'an_hien' => '1'),
            array('ten_loai' => 'Quần áo', 'thu_tu' => '8', 'an_hien' => '1'),
            array('ten_loai' => 'Cặp', 'thu_tu' => '9', 'an_hien' => '1'),
            array('ten_loai' => 'Giày', 'thu_tu' => '10', 'an_hien' => '1')*/

            array('ten_loai' => 'Chuột', 'thu_tu' => '1', 'an_hien' => '1'),
            array('ten_loai' => 'Bàn phím', 'thu_tu' => '2', 'an_hien' => '1'),
            array('ten_loai' => 'Tai nghe', 'thu_tu' => '3', 'an_hien' => '1'),
            array('ten_loai' => 'Mousepad', 'thu_tu' => '4', 'an_hien' => '1'),
        ));
    }
}

class SanPhamTable extends Seeder
{
    public function run()
    {
        /*DB::table('san_pham')->insert(array(
            array('ten_san_pham' => 'Áo khoác TITISHOP AKN45 (Đen)', 'gia' => '469.000 VND', 'mo_ta' => 'Một chiếc áo khoác đúng nghĩa sẽ là phương tiện hữu hiệu để nói lên phong cách, cá tính và gu thời trang rất riêng của mỗi mày râu. Chiếc áo khoác giả vest Titishop AKN45 với thiết kế cực trẻ trung và hiện đại chắc chắn sẽ mang đến nét mới lạ và độc đáo, giúp hoàn thiện thêm vẻ ngoài của các chàng trai năng động, cá tính. Áo khoác giả vest Titishop AKN45 sở hữu dáng đứng hiện đại, cổ trụ lịch lãm và thiết kế đơn giản, tinh tế sẽ làm cho các bạn nam trở nên ấn tượng, cá tính và vẻ ngoài luôn đầy sức cuốn hút. Bên cạnh đó, chiếc áo khoác này còn được làm từ chất liệu vải kaki cao cấp bền đẹp, thoáng mát, ít nhăn nhàu và kháng bẩn tốt nên sẽ mang đến cho bạn sự thoải mái, tươm tất và vẻ chỉn chu hoàn hảo nhất mỗi khi khoác trên người. Hãy để áo khoác giả vest Titishop AKN45 giúp bạn hoàn thiện set trang phục và tạo được dấu ấn về gout thời trang đặc sắc trong mắt mọi người.',
                'url_hinh' => 'ao-khoac-gia-vest-titishop-akn45-den.jpg', 'ngay_dang' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2'),
            array('ten_san_pham' => 'Áo khoác TITISHOP AKN51 (Đen)', 'gia' => '450.000 VND', 'mo_ta' => 'Một chiếc áo khoác đúng nghĩa sẽ là phương tiện hữu hiệu để nói lên phong cách, cá tính và gout thời trang rất riêng của mỗi mày râu. Chiếc áo khoác giả vest Titishop AKN51 với thiết kế cực trẻ trung và hiện đại chắc chắn sẽ mang đến nét mới lạ và độc đáo, giúp hoàn thiện thêm vẻ ngoài của các chàng trai năng động, cá tính. Áo khoác giả vest Titishop AKN51  sở hữu dáng đứng hiện đại, cổ trụ lịch lãm và thiết kế đơn giản, tinh tế sẽ làm cho các bạn nam trở nên ấn tượng, cá tính và vẻ ngoài luôn đầy sức cuốn hút. Bên cạnh đó, chiếc áo khoác này còn được làm từ chất liệu vải kaki cao cấp bền đẹp, thoáng mát, ít nhăn nhàu và kháng bẩn tốt nên sẽ mang đến cho bạn sự thoải mái, tươm tất và vẻ chỉn chu hoàn hảo nhất mỗi khi khoác trên người. Hãy để áo khoác giả vest Titishop AKN51  giúp bạn hoàn thiện set trang phục và tạo được dấu ấn về gout thời trang đặc sắc trong mắt mọi người.',
                'url_hinh' => 'ao-khoac-gia-vest-titishop-akn51-den.jpg', 'ngay_dang' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2'),
            array('ten_san_pham' => 'Áo thun nam HU02 (Trắng)', 'gia' => '259.000 VND', 'mo_ta' => '',
                'url_hinh' => 'ao-thun-nam-thoitrangtichtac-hu02-trang.jpg', 'ngay_dang' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2'),
            array('ten_san_pham' => 'Áo khoác phối dù (Xanh)', 'gia' => '569.000 VND', 'mo_ta' => 'Thiết kế tay dài, cổ cao, có 2 túi mang đến cho người mặc phong cách trẻ trung, năng động. ',
                'url_hinh' => 'ao-khoac-phoi-du-nam-xanh.jpg', 'ngay_dang' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2'),
            array('ten_san_pham' => 'Áo khoác nam phối dù (Đen)', 'gia' => '559.000 VND', 'mo_ta' => 'Thiết kế tay dài, cổ cao, có 2 túi mang đến cho người mặc phong cách trẻ trung, năng động. ',
                'url_hinh' => 'ao-khoac-phoi-du-nam-xanh.jpg', 'ngay_dang' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2')
        ));*/
        DB::table('san_pham')->insert(array(
            array('ten_san_pham' => 'Chuột Razer Mamba Chroma 2016', 'gia' => '3489000', 'mo_ta' => 'Sản phẩm chuột không dây mới nhất của năm 2015 sử dụng kết nối wireless hỗ trợ cho màn hình 4k hiện nay . sản phẩm có thể dùng không dây và có dây , đèn Led lên đến 16,8 triệu màu với nhiều hiệu ứng chạy đèn . Khi xài không dây , chuột có thể dùng chơi game thời gian lên đến 20 giờ , hiệu ứng đèn led thông báo khi đang sạc và khi đầy Pin',
                'url_hinh' => 'razer-mamba-gallery-03.jpg', 'ngay_nhap' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '1', 'id_thuong_hieu' => '1'),
            array('ten_san_pham' => 'Bàn phím Razer DeathStalker Ultimate ', 'gia' => '4000000 ', 'mo_ta' => 'Với mục đích tạo ra một chiếc bàn phím thân thiện hơn với game thủ, cũng như tạo cho họ khả năng ít có bàn phím nào có được, Razer đã tạo ra Deathstalker Ultimate , chiếc bàn phím sở hữu touchpad kiêm màn hình cảm ứng, cùng hệ thống 10 phím lập trình riêng cho từng ứng dụng, với lời giới thiệu “mô phỏng hệ thống giao diện Switchblade UI”. Bên cạnh đó, phiên bản bình dân hơn của Deathstalker lại sở hữu cụm phím numpad thay cho hệ thống màn hình rườm rà và đắt đỏ kia, trong khi cảm giác phím bấm không hề có khác biệt.',
                'url_hinh' => 'razer deathstalker ultimate.jpg', 'ngay_nhap' => 'now()',
                'ton_kho' => '5', 'an_hien' => '1', 'id_loai' => '2', 'id_thuong_hieu' => '1'),
        ));
    }
}
