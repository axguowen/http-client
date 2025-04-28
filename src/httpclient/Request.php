<?php
// +----------------------------------------------------------------------
// | HttpClient [Simple HTTP Client Library for PHP]
// +----------------------------------------------------------------------
// | PHP HTTP客户端
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: axguowen <axguowen@qq.com>
// +----------------------------------------------------------------------

namespace axguowen\httpclient;

class Request
{
    /**
     * 请求地址
     * @var string
     */
    public $url;

    /**
     * 请求头参数
     * @var array
     */
    public $headers;

    /**
     * 请求体
     * @var array|string
     */
    public $body;

    /**
     * 请求方法
     * @var string
     */
    public $method;

    /**
     * 请求超时时间
     * @var int
     */
    public $timeout;

    /**
     * 架构函数
     * @access public
     * @param string $method 请求方法
     * @param string $url 请求地址
     * @param array $headers 请求头参数
     * @param array|string $data 请求体
     */
    public function __construct($method, $url, $headers = [], $body = null, $timeout = 0)
    {
        $this->method = strtoupper($method);
        $this->url = $url;
        $this->headers = $headers;
        $this->body = $body;
        $this->timeout = $timeout;
    }
}
