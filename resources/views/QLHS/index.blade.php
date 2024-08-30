@extends('QLHS\layout');
@section('title','Quản lý học sinh')
@section('content')
<section id="about-section" class="about-section">
                <h1 class="title-about text-center">About us</h1>
                <div class="content-about row">
                    <div class="col-lg-3 col-sm-12 item-about about-1"></div>
                    <div class="col-lg-3 col-sm-12 item-about about-2"></div>
                    <div class="col-lg-3 col-sm-12 item-about about-3"></div>
                </div>
            </section>
            <section id="creater-section" class="creater-section">
                <h1 class="title-creater text-center">Productor</h1>
                <div class="creater row">
                    <div class="creater-1 col-lg-6">
                        <img class="cre-1 col-lg-6" src="{{ asset('images/hongkong.jpg') }}">
                        <blockquote id="blq1" class="blq1 col-lg-6">
                            
                        </blockquote>
                    </div>
                    <div class="creater-1 col-lg-6">
                        <img class="cre-2 col-lg-6" src="{{ asset('images/paris.jpg') }}">
                        <blockquote id="blq2" class="blq2 col-lg-6">
                            
                        </blockquote>
                    </div>
                    
                </div>
                <div class="tt-creater row">
                    <img class="cre-img col-lg-3" src="">
                    <ul class="tt-product col-lg-5 text-center">
                        <li class="fb"> </li>
                        <li class="phone"></li>
                        <li class="yahoo"></li>
                    </ul>
                </div>
            </section>
@endsection
