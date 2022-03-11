# CodeIgniter Framework Samples

## Example HMVC Modules
### Hướng dẫn tích hợp mô hình HMVC vào dự án

1. Create folder: `modules` trong thư mục `application`. Tham khảo cấu trúc thư mục `modules` tại `sample/modules/` trong thư viện này

```shell
.
└── modules
    └── startup
        ├── config
        │   ├── index.html
        │   └── routes.php
        ├── controllers
        │   ├── Startup.php
        │   └── index.html
        ├── index.html
        ├── models
        │   ├── Startup_model.php
        │   └── index.html
        └── views
            └── index.html

6 directories, 8 files
```

2. Create file `hmvc.php` với nội dung như sau

```php
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| HMVC settings
| -------------------------------------------------------------------------
| See: https://github.com/nguyenanhung/CodeIgniter-HMVC
|
*/
$config['modules_locations'] = array(
    APPPATH . 'modules/' => '../modules/'
);

```

3. Nạp file `hmvc.php` vào file `config.php`

```php
require_once __DIR__ . '/hmvc.php';
```

4. Create file `MY_Loader.php` trong thư mục `application/core/` có nội dung như sau

```php
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class MY_Loader
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MY_Loader extends HungNG_Loader
{

}
```

5. Create file `MY_Router.php` trong thư mục `application/core/` có nội dung như sau

```php
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class MY_Router
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MY_Router extends HungNG_Router
{

}

```

6. Triển khai viết code trong thư mục modules mới, tương tự như sau

```php
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class TestModule
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class TestModule extends HungNG_CI_Base_Module
{
	public function __construct()
    {
        parent::__construct();
    }
  	
	public function index()
    {
		echo "This is ".get_class($this); // show: This is TestModule
		exit();
    }
}

```