<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_bottom">
        <a href="index.php" class="logo"><img src="{{ asset('images/logo.jpeg') }}" alt="" height="200px" width="1200px"></a>
      </div>
    </div>
  </div>
</header>

<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation">
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav main_nav">
        <li class="active"><a href="{{ route('user.index') }}"><span>ပင္မစာမ်က္ႏွာ</span></a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဆရာေတာ္ၾကီးစာအုပ္မ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('user.category.sub', ['category' => 'SayardawBook', 'sub' => 'Abidama']) }}">အဘိဓမၼာပုိ႔ခ်ခ်က္မ်ား</a></li>
            <li><a href="{{ route('user.category.sub',['category'=>'SayardawBook','sub'=>'AuWada']) }}">ၾသ၀ါဒမ်ား</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဂ်ာနယ္မ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'tharkithawe'])}}">သာကီေသြး</a></li>
            <li><a href="{{route('user.category.sub', ['category' => 'Journals', 'sub' => 'aungzayartu'])}}">ေအာင္ေဇယ်တု</a></li>
          </ul>
        </li>
        <li><a href="{{route('user.category', ['category' => 'photo'])}}">လႈပ္ရွားမႈဓာတ္ပုံမ်ား</a></li>
        <li><a href="{{route('user.category', ['category' => 'news'])}}">သတင္းမ်ား</a></li>
        <li><a href="{{route('user.category', ['category' => 'form'])}}">၀င္ခြင့္ေဖာင္</a></li>
        <li><a href="{{route('user.category', ['category' => 'nation'])}}">တုိင္းေဒသၾကီးအဖြဲ႔(၁၄)ခု</a></li>
         <li><a href="{{route('user.category', ['category' => 'poem'])}}">ကဗ်ာ/ေဆာင္းပါမ်ား</a></li>
        <li><a href="{{route('user.category', ['category' => 'contact'])}}">ဆက္သြယ္ရန္</a></li>
      </ul>
    </div>
  </nav>
</section>