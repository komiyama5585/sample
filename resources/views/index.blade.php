
<!doctype html>
<html lang="ja" >
  <head>
    <title>カルーセルテンプレート for Bootstrap · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="{{secure_asset('/css/carousel.css')}}" rel="stylesheet">
    <link href="{{secure_asset('/css/style.css')}}" rel="stylesheet">
  </head>
  <body >
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
     <div class="container">
      <span class="skiplink-text">Skip to main content</span>
     </div>
    </a>

  <header>
   <nav class="navbar navbar-expand-md navbar-danger fixed-top bg-white">
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">お悩みあるある <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">プラン概要</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">制作実績</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">制作の流れ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">料金プラン</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">制作メンバー</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">お申し込みからの流れ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">お申し込み</a>
        </li>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        <input class="form-control mr-sm-2" type="text" placeholder="検索" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
      </form>
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
            　</li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('ログアウト') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
   </nav>
  </header>

  <main role="main">
   <div id="myCarousel">
    <ol class="carousel-indicators">  
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="image/y-woman1.png" class="img-fluid" alt="First slide"width="1200" height="600">
        <div class="container">
          <div class="carousel-caption text-left">
          </div>
        </div>
      </div>
    </div> 
  </div>

  <nav style="height: 90px" class="navbar navbar-expand-md-3 bg-warning mx-auto"width="1200" height="200">
  
    <button type="button" class="btn btn-outline-success height: 80px　">
     <a class="nav-link" href="#">
       <h5>お問い合わせフォーム</h5>
    </button>
    <button type="button" class="btn btn-outline-success height: 60px　">
     <a class="nav-link" href="#">
       <h5>電話番号</h5>
    </button>
   
  </nav>

  <div class="container">
    
      <img class="mw-100 mx-auto"style="width : 1200px" src="image/sub-txt-1.png" alt="Max-width 100%">
  
  </div>

 
 @foreach($posts as $post)
 <p class="card-text"><img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}"  width="350" height="220"></p>
  <p class="card-text">詳細：{{ $post->content }}</p>
 @endforeach


  


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
   

    <!-- Three columns of text below the carousel -->
  <div class="row">
      <div class="col-lg-4">
        <img class="card md-4 shadow-sm" src="image/case1.png" alt="Generic placeholder image" width="350" height="220">
        <img class="card md-4 shadow-sm" src="image/case1-col.png" alt="Generic placeholder image" width="350" height="220">
        
       
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="card md-4 shadow-sm" src="image/case2.png" alt="Generic placeholder image" width="350" height="220">
        <img class="card md-4 shadow-sm" src="image/case2-col.png" alt="Generic placeholder image" width="350" height="220">
        <!-- <h2>Heading</h2> -->
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="card md-4 shadow-sm" src="image/case3.png" alt="Generic placeholder image" width="350" height="220">
        <img class="card md-4 shadow-sm" src="image/case3-col.png" alt="Generic placeholder image" width="350" height="220">
        <!-- <h2>Heading</h2> -->
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
<hr class="featurette-divider">
  <div class="bg_image1"> 
    <div class="row featurette" >   
        <!-- <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2> -->
        <p  class="featurette-heading" data-mce-style="color: #745d00;" >
          <h3 class="text-muted">そこで！</h3>
          <h3 class="text-muted">WEBに精通したプロのクリエイター集団が,HP作成ツールの「ペライチ」を CMSツールとして徹底的に使いこなし、お悩みを解消するプランが誕生しました！</h3>
        </p>
    </div>
    <div class="row featurette">  
        <!-- <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2> -->
        <h3 class="featurette-heading　text-muted">ペライチとは、 専門的な知識や技術が無い方でも、</h3>
        <h3 class="text-success">誰でも簡単に</h3>
        <h3 class="text-muted">WEBサイト(LP)を作れる優れた</h3>
        <h3 class="text-success">HP作成サービス</h3>
        <h3 class="text-muted">です。</h3>
    </div>
    <div class="row featurette">
      <h3 class="text-muted">誰でも簡単に作れる反面、法人企業の方からは、デザイン制作会社が作るような</h3>
      <h2 class="text-success">本格的なWEBデザインを自分達では実現できない…</h2> 
      <h3 class="text-muted">というお声も聞こえてきます。</h3>
      <h3 class="text-muted">そこで！「誰でも簡単に」の部分はそのまま</h3><h2 class="text-success">CMS</h2><h3 class="text-muted">として、制作はゴリゴリと！</h3>
      <h3 class="text-muted">デザイン＋コーディングというもろに</h3>
      <h2 class="text-success">専門的なスキルを総動員してカスタマイズ</h2>
      <h3 class="text-muted">ハイクオリティで編集もできるLPの提供を実現しました。</h3> 
    </div>
    <div class="row">
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/4card1.png" width="200">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/4card2.png" width="200">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/4card3.png" width="200">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/4card4.png" width="200">
      </div><!-- /.col-lg-4 -->
  </div>
</hr> 
    <!-- /END THE FEATURETTES -->
    

</div><!-- /.container -->
<hr class="featurette-divider">
 <div class=" bg_image2"style="height: 1200px" >
  <div class="row"style="position:relative; top:400px;">     
   <div class="col-lg-4">
    <img src="image/case1.png" class="button " onclick="goClick()" width="350" height="220" alt="サンプルボタン">
   </div>
   <div class="col-lg-4">
    <img src="image/case2.png" class="button" onclick="goClick()" width="350" height="220" alt="サンプルボタン">
   </div>
   <div class="col-lg-4">
    <img src="image/case3.png" class="button " onclick="goClick()" width="350" height="220" alt="サンプルボタン">
  </div>
 </div>
</div>
</hr>

  <nav style="height: 90px" class="navbar navbar-expand-md-3 bg-warning mx-auto"width="1200" height="200"> 
    <button type="button" class="btn btn-outline-success height: 80px　">
     <a class="nav-link" href="#">
       <h5>お問い合わせフォーム</h5>
    </button>
    <button type="button" class="btn btn-outline-success height: 60px　">
     <a class="nav-link" href="#">
       <h5>電話番号</h5>
    </button>
  </nav>
  <div class="bg_image1 mx-auto"> 
   <div style="width: 1000px">
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/term1.png" >
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/term2.png" >
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/term3.png" >
      </div>
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/price1.png" >
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/price2.png" >
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4" style="position:relative; left:200px;">
        <img  src="image/price3.png" >
      </div><!-- /.col-lg-4 -->
    </div>
  </div>
  <hr class="featurette-divider "> 
    <h3 >作成メンバーの紹介</h3>
    <div class="row">
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/ojisan.png" width="250">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/obasan.png" width="250">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/ojisan2.png" width="250">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="card md-3 shadow-sm" src="image/4card4.png" width="250">
      </div><!-- /.col-lg-4 -->
  </hr>
  <div class="container">  <!-- 申し込みの流れ -->
      <img class="mw-100 mx-auto"style="width : 1200px" src="image/plan-flow.png" alt="Max-width 100%">
  </div>

<hr class="featurette-divider "> <!-- 入力フォーム -->
 <div class="bg_image1 mx-auto"style="width : 1200px">入力フォーム
　 <div class="cp_iptxt">　
	  <label class="ef">お名前
	   <input type="text" placeholder="お名前">
	  </label>
　 </div>
   <div class="cp_iptxt">　
	  <label class="ef">住所
	   <input type="text" placeholder="住所">
	  </label>
　 </div>
　 <div class="cp_iptxt">　
	  <label class="ef">年齢
	   <input type="text" placeholder="年齢">
	  </label>
　 </div>

 </div>
</hr>



   


  

  </div>


  <!-- FOOTER -->
  <footer class="container">
    <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
    <p class="float-right"><a href="#">トップに戻る</a></p>
    <!-- <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
    <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">プライバシー</a> &middot; <a href="#">利用規約</a></p>
  </footer>

</main>
<script src="../../assets/js/vendor/holder.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script><script src="/docs/4.5/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.5/assets/js/src/application.js"></script>
<script src="/docs/4.5/assets/js/src/search.js"></script>
<script src="/docs/4.5/assets/js/src/ie-emulation-modes-warning.js"></script>
  </body>
</html>
