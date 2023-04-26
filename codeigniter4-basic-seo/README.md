# CodeIgniter3 Basic SEO Library & Helper

Hướng dẫn tích hợp và sử dụng class Basic SEO với CodeIgniter3 Packages develop by @nguyenanhung

Sử dụng trong trường hợp triển khai các website cần tích hợp SEO Onpage cơ bản

## Chỉ định

Hướng dẫn này chỉ có tác dụng nếu sử dụng gói `nguyenanhung/codeigniter-framework` version `>=3.1.15` - Nếu đang thấp hơn thì cần nâng cấp version lên để nhận được tính năng mới, ngoài ra sẽ không tương thích với các framework khác

## Cài đặt

- Khai config, thêm các biến sau trong file `app/config.php`

```php
$config['canonical_url']    = null;
$config['site_title']       = "Default Site Title";
$config['site_description'] = "Default Site Description";
$config['site_image']       = null;
$config['twitter_user']     = "@tw_username";
$config['fb_app_id']        = null;
$config['fb_page_id']       = null;
```

- Khai báo autoload: vào file `app/autoload.php`, thêm `seo` vào trong helper, ví dụ

```php
$autoload['helper'] = array('url', 'seo');
```

## Sử dụng

Có thể sử dụng Seo helper ở bất cứ đâu, controller, views ... 

```php
 bear_simple_seo_header('Title muốn hiển thị', 'Description muốn hiển thị', 'URL Image');
```

Lưu ý: chỉ cần call tới hàm, không cần return, echo hàm này (bản chất bên trong hàm chứa luôn echo)

## Lưu ý thêm

- Cần phân tích nội dung trang để setup title, description cho thích hợp
- VD: ở 1 trang details post thì call hàm trên ví dụ như sau

```php
 bear_simple_seo_header('Tiêu đề bài post', 'Summary bài post', 'URL ảnh đại diện bài post');
```