# PHP HTTP客户端

一个简单的HTTP客户端工具

主要功能：

发送请求

## 安装

~~~php
composer require axguowen/http-client
~~~

## 用法示例

发送get请求

~~~php
// 请求url
$url = 'https://domain/path/';
// header参数
$headers = [
    'Content-Type' => 'application/json;charset=utf-8'
];
// 发送请求
$ret = \axguowen\HttpClient::post($url, $headers);
if (!$ret->ok()) {
    return [null, new \axguowen\httpclient\Error($path, $ret)];
}
$r = ($ret->body === null) ? [] : $ret->json();

~~~

发送post请求

~~~php
// 请求url
$url = 'https://domain/path/';
// 请求体
$body = [
    'id' => 1,
    'page' => 2,
];
// header参数
$headers = [
    'Content-Type' => 'application/json;charset=utf-8'
];
// 发送请求
$ret = \axguowen\HttpClient::post($url, $body, $headers);
if (!$ret->ok()) {
    return [null, new \axguowen\httpclient\Error($path, $ret)];
}
$r = ($ret->body === null) ? [] : $ret->json();

~~~