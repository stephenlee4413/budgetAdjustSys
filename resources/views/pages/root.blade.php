@extends('layouts.app')
@section('title', '首页')

@section('style')
  @parent
  <style>
    .module {
      padding: 20px;
      text-align: center;
      color: #eee;
      max-height: 120px;
      min-width: 120px;
      background-color: #607D8B;
      border-radius: 2px;
    }
    .module:hover {
      background-color: #EEE;
      cursor: pointer;
      color: #607d8b;
    }
    .col-1-4 {
      width: 25%;
      margin: 10px;

    }
    h1 {
      position: relative;
      float: left;
    }
    .item {
      margin-left: 10%;
      margin-top: 20%;
    }
  </style>
@endsection

@section('content')
  <div class="item">
    <a href="#" ><h1 class="module col-1-4">系统首页</h1></a>
    <a href="/typedata" ><h1 class="module col-1-4" >数据填报</h1></a>
    <a href="/test" ><h1 class="module col-1-4">填报数据汇总</h1></a>
  </div>

@stop