@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">          
          <div class="single_post_content">
            <h2>News</h2>              
                <h1>
                    {{$post->title}}
                </h1>
                <hr>        
                {{$post->short_description}}
                <div class="clear"></div>
                <br>
                <div class="imgl borderedbox" align="center">
                  <img src="{{ asset('upload/posts/' . $post->detail_photo) }}" alt="" style="width: 90%" >
                </div>
                <div class="clear"></div>    
                <br>
                <br>
                <p align="justify">
                    {{$post->detail_description}}
                </p>
                <br>
                <br>
                <div class="clear"></div>
          </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
      <div class="latest_post">
        <h2>အလွဴရွင္မ်ား</h2>
        <div class="latest_post_container">
          <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
          <ul class="latest_postnav">
            <li>
              <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore . </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore . </p>
                </div>
              </div>
            </li>
          </ul>
          <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
        </div>
      </div>
    </aside>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
      <div class="single_sidebar">
        <h2>လုပ္ငန္းစဥ္မ်ား</h2>
        <ul class="spost_nav">
          <li>
            <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title">U Mg Mg</a></div>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </li>
          <li>
            <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> U Aung</a> </div>
               <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </li>
          <li>
            <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> U Hla</a> </div>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </li>
          <li>
            <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> U Soe</a> </div>
              <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </li>
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