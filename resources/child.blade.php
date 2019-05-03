@extends('layouts.hello')

@section('title','頁面標題')

@section('sidebar')
    @parent
    <p>這邊增加主要的側邊欄</p>
@endsection

@section('content')
    <p>這是我主要內容</p>
    @if (count($recordes)===1)
        
    @endif
@endsection