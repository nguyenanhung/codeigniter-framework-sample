<?php
/**
 * Project codeigniter-framework-sample
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 21/07/2022
 * Time: 16:49
 */

class Elastic_search extends HungNG_CI_Base_Lib_ElasticSearch
{
    public function __construct($host = 'http://127.0.0.1:9200')
    {
        parent::__construct($host);
    }
}
