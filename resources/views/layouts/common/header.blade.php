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
            <li><a href="book2.php">ၾသ၀ါဒမ်ား</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ဂ်ာနယ္မ်ား</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="journal1.php">သာကီေသြး</a></li>
            <li><a href="journal2.php">ေအာင္ေဇယ်တု</a></li>
          </ul>
        </li>
        <li><a href="photo.php">လႈပ္ရွားမႈဓာတ္ပုံမ်ား</a></li>
        <li><a href="news.php">သတင္းမ်ား</a></li>
        <li><a href="form.php">၀င္ခြင့္ေဖာင္</a></li>
        <li><a href="nation.php">တုိင္းေဒသၾကီးအဖြဲ႔(၁၄)ခု</a></li>
         <li><a href="poem.php">ကဗ်ာ/ေဆာင္းပါမ်ား</a></li>
        <li><a href="contact.php">ဆက္သြယ္ရန္</a></li>
      </ul>
    </div>
  </nav>
</section>