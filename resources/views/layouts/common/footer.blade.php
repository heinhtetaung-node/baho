<footer id="footer">
  <div class="footer_top">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="footer_widget wow fadeInLeftBig">
          <h2>တည္ေထာင္သူမ်ား</h2>
           <ul class="spost_nav">
            @foreach($founders as $f)
            <li>
              <div class="media wow fadeInDown"> 
                <a href="#" class="media-left"> 
                  <img src="{{ asset('upload/posts/'.$f->feature_photo) }}" alt="founder photo" >
                </a>
                <div class="media-body"> <a href="#" class="catg_title">{{$f->title}}</a><p>{{$f->short_description}}</p></div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="footer_widget wow fadeInDown">
          <h2>Tag</h2>
          <ul class="tag_nav">
            <li><a href="index.php">ပင္မစာမ်က္ႏွာ</a></li>
            <li><a href="#">ဆရာေတာ္ၾကီးစာအုပ္မ်ား</a></li>
            <li><a href="#">ဂ်ာနယ္မ်ား</a></li>
            <li><a href="photo.php">လႈပ္ရွားမႈဓာတ္ပုံမ်ား</a></li>
            <li><a href="news.php">သတင္းမ်ား</a></li>
            <li><a href="form.php">၀င္ခြင့္ေဖာင္</a></li>
            <li><a href="nation.php">တုိင္းေဒသၾကီးအဖြဲ႔(၁၄)ခု</a></li>
            <li><a href="poem.php">ကဗ်ာ/ေဆာင္းပါမ်ား</a></li>
            <li><a href="contact.php">ဆက္သြယ္ရန္</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="footer_widget wow fadeInRightBig">
          <h2>CONTACT</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <address>
          Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
          </address>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <p class="copyright">Developed By 5 Pros</p>
  </div>
</footer>