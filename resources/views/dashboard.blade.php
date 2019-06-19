@extends('layouts.master')

@section('title','管理后台')

@section('content')
    <p>环境访问 Laravel 学院后台！ </p>

    <div class="content" data-page-name="{{ $pageName }}">
        <p>为什么要注册 Laravel 学院: <strong>能提供更多服务</strong></p>
        @include('sign-up-button', ['text' => '看看到底有哪些服务', 'pageName'=>'default']) 
    </div>
@endsection

@section('footerScripts')
    @parent
    <script src="{{ asset('js/dashboard.js') }}"></script> 
@endsection