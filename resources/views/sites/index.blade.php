@extends('layouts.default')

@section('title')
{{ lang('Recommended Sites') }} @parent
@stop

@section('content')

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        欢迎交换友链，请加我微信 <i class="fa fa-weixin text-md"></i> summer_charlie，只接受 PHP、Laravel 相关话题的站点，如果微信回复较慢可以私信 <i class="fa fa-weibo text-md"></i> <a href="http://weibo.com/phphub">PHPHub</a>
    </div>

    <div class="sites-index">

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-weibo text-md"></i> Laravel/PHP 圈内人的微博', 'filterd_sites' => $sites['weibo']])

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-globe text-md"></i> 推荐网站', 'filterd_sites' => $sites['site']])

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-flag text-md"></i> 推荐博客', 'filterd_sites' => $sites['blog']])

        @include('sites.partials.sites', ['heading_title' => '<i class="fa fa-cloud text-md"></i> 开发者服务推荐', 'filterd_sites' => $sites['dev_service']])

    </div>

    @include('layouts.partials.topbanner')

@stop
