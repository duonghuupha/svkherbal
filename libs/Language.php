<?php
class Language{
    function array_lang($title){
        $array_lang = array(
            'vi' => array(
                'time_work' => "Giờ mở cửa",
                'keyword' =>  "Từ khóa",
                'register' => "Đăng ký",
                'title_contact' => "Thông tin liên hệ",
                'quick_link' => "Truy cập nhanh",
                'title_contact_1' => 'Liên hệ với chúng tôi',
                'btn_product' => "Sản phẩm",
                'btn_contact' => "Liên hệ",
                'title_phone' => "Điện thoại",
                'title_input_firstname' => "Họ và tên đệm",
                'title_input_lastname' => "Tên",
                'title_input_phone' => "Điện thoại",
                'title_input_msg' => 'Nội dung',
                'title_address' => 'Địa chỉ',
                'title_btn_contact' => 'Gửi liên hệ',
                'title_subscribe' => "Đăng ký bản tin",
                'content_subscribe' => 'Đăng ký nhận bản tin của chúng tôi để nhận tin tức hàng tuần, cập nhật, ưu đãi đặc biệt',
                'title_social' => "Tìm chúng tôi",
                'title_sub_home' => 'Theo dõi bản tin của chúng tôi',
                'title_news' => 'Bài viết mới',
                'title_extra' => 'Bài viết liên quan'
            ),
            'en' =>  array(
                'time_work' => "Opening hours",
                'keyword' =>  "Search",
                'register' => "Subscribe",
                'title_contact' => "Our Contacts",
                'quick_link' => "Quick link",
                'title_contact_1' => 'Get in touch',
                'btn_product' => "Shop now",
                'btn_contact' => "Contact us",
                'title_phone' => "Phone",
                'title_input_firstname' => "First name",
                'title_input_lastname' => "Last name",
                'title_input_phone' => "Phone",
                'title_input_msg' => 'Message',
                'title_address' => 'Address',
                'title_btn_contact' => 'Send message',
                'title_subscribe' => "Newsletter",
                'content_subscribe' => 'Subscribe to our newsletter to receive weekly news, updates, special offers, and exclusive discounts',
                'title_social' => "Get social",
                'title_sub_home' => 'Subscribe to our newsletter',
                'title_news' => 'Latest Posts',
                'title_extra' => 'Related Posts'
            )
        );
        if(isset($_SESSION['lang'])){
            return $array_lang['en'][$title];
        }else{
            return $array_lang['vi'][$title];
        }
    }
}
?>