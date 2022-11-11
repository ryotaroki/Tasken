@extends('layouts.layouts')
@section('title', 'TOP')
@section('main')
    <div class="container-fluid">
        <div class="top-image" style="padding-top: 30px; text-align:center;">
            <img src="{{ asset('/images/PC.jpg')}}" style="height:500px; width:80%;" alt="">
        </div>
        <div class="top-text" style="text-align: center">
            <h3>日々、多くのタスクがあって管理に疲れていませんか?</h3>
            <p>TaSuKenは頑張るあなたのタスク管理をお手伝いします。</p>
        </div>
    </div>
@endsection
