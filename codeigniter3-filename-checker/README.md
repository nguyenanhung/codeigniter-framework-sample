# CodeIgniter3 Filename Checker

This controller checks CodeIgniter 3.0 class filename.

> Starting with CodeIgniter 3.0, all class filenames (libraries, drivers, controllers and models) must be named in a Ucfirst-like manner or in other words - they must start with a capital letter.
[CodeIgniter User Guide](https://www.codeigniter.com/userguide3/installation/upgrade_300.html#step-2-update-your-classes-file-names)

## Installation

Now add **applications/controller/Check.php** file in the repository to your codeigniter **applications/hooks** folder and add the following code in it

```php
<?php
class Check extends HungNG_CI_Base_Controller_Filename_Checker
{
		protected $dir;
		protected $output_ = array();
		protected $fix = false;

		public function __construct()
		{
			parent::__construct();

			$this->dir = array(
				'controllers',
				'libraries',
				'models',
				'core',
			);
		}
}
```
## Usage

Access to `http://your-server/check/filename`.

Or you can run via CLI:
	
~~~
$ php server.php check filename
~~~

If you want to fix filename:

~~~
$ php server.php check filename fix
~~~