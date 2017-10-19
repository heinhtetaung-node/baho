@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <img src="images/1.jpeg" name="Banner" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2>အလွဴရွင္မ်ား</h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              @foreach($donors as $d)
              <li>
                
                <div class="media"> 
                  <a href="#" class="media-left"> 
                    <img src="{{ asset('upload/posts/'.$d->feature_photo) }}" alt="donor photo" >
                  </a>
                  <div class="media-body"> 
                    <a href="#" class="catg_title">
                      {{$d->title}}
                    </a>
                  <p>{{$d->short_description}}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
        <div class="single_post_content">
            <h2>News</h2>
              @foreach($posts as $p)         
                  <div class="single_post_content">
                    <div class="single_post_content_left">
                      <ul class="business_catgnav  wow fadeInDown">
                        <li>
                          <figure class="bsbig_fig"> 
                            <a href="{{route('news.show',$p->id)}}" class="featured_img">
                              <img src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="" >
                            </a>
                          </figure>
                        </li>
                      </ul>
                    </div>
                    <div class="single_post_content_right">
                      <figure class="bsbig_fig">
                        <figcaption> <a href="{{route('news.show',$p->id)}}">  {{$p->title}} </a> </figcaption>
                        <p>{{$p->short_description}}</p>                 
                      </figure>
                    </div>                      
                  </div>
              @endforeach

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2>လုပ္ငန္းစဥ္မ်ား</h2>
            <ul class="spost_nav">
              @foreach($process as $p)
              <li>                
                <div class="media"> 
                  <a href="#" class="media-left"> 
                    <img src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="donor photo" >
                  </a>
                  <div class="media-body"> 
                    <a href="#" class="catg_title">
                      {{$p->title}}
                    </a>
                  <p>{{$p->short_description}}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>   
          <div class="single_sidebar wow fadeInDown">             
              <h2>ရည္ရြယ္ခ်က္</h2>
              <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
         </div>
        </aside>
      </div>
    </div>
</section>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection