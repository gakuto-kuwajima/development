@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="top-image">
                    <video src="{{ asset('movies/newstylehustlejapan2017.mp4')}}" muted autoplay loop class="img-fluid" id="top-movie"></video>
                    <img src="{{ asset('img/newstylehustlejapan-white.png')}}" class="img-fluid" id="top-icon">
                </div>
            </div>
        </div>
        <div class="about">
            <h2>ニュースタイルハッスルとは</h2>
            <div class="row">
                <div class="text col-md-6">
                    <p>世界中で踊られている最新のペアダンス、それがニュースタイルハッスル。<br>自由な発想で、自分たちの好きな音楽をパートナーと表現します。<br><br>1970年代に誕生したディスコダンス「ハッスル」を元に、2009年ごろにニューヨークでジェフ・セルビーらダンサーたちによって考案されました。<br><br>ダンス初心者でも経験者でも、誰でも始めたその日から楽しめるというのがニュースタイルハッスルの大きな魅力です。</p>
                </div>
                <div class="image col-md-6">
                    <img src="{{ asset('img/zabueri_example.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="section1">
          <h2>世界中に広がるニュースタイルハッスル</h2>
          <div class="row">
              <div class="image col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fnewstylehustle%2Fvideos%2F1807520412896273%2F&show_text=0&width=560" width="560" height="295" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                </div>
              </div>
              <div class="text col-md-6 mx-auto">
                  <p>アメリカを始め、主にイギリスやイタリア、オランダ、ポーランド、チェコ、スロバキア、オーストリア、フィンランド、中国、台湾、韓国、そして日本など世界中で踊られているニュースタイルハッスル。<br><br>日本では東京を中心に、大阪や名古屋、宮城など様々な都道府県でコミュニティが作られ、それぞれの地域でイベントや練習会が行われています。<br><br>また、DREAMS COME TRUEのライブや嵐の楽曲（「未完」）PV、NHKの番組「Eダンスアカデミー」などでも踊られ、エンターテイメントの世界でも注目を浴びています。</p>
              </div>
          </div>
        </div>
        <div class="japan-community">
          <h2>全国のコミュニティ</h2>
          <div class="row">
              <div class="text col-md-12">
                  <p>現在日本各地にニュースタイルハッスルのコミュニティが作られています。<br><br>気になる地域があれば、ぜひその地域のコミュニティの様子をのぞいてみてください。</p>
              </div>
          </div>
          <div class="row">
              <div class="hmap">
                  <div class="hmap_l1">
                      <ul class="hokkaido">
                          <li><a href="./dohoku/" class="pbh">道北<span></span></a></li>
                          <li><a href="./doo/" class="pb5">道央<span></span></a></li>
                          <li><a href="./doto/" class="pb5">道東<span></span></a></li>
                          <li><a href="./donan/" class="pbh">道南<span></span></a></li>
                      </ul>
                      <ul class="tohoku">
                          <li><a href="./aomori/" class="pb10">青森県<span></span></a></li>
                          <li><a href="./akita/" class="pb5">秋田県<span></span></a></li>
                          <li><a href="./iwate/" class="pb5">岩手県<span></span></a></li>
                          <li><a href="./yamagata/" class="pb5">山形県<span></span></a></li>
                          <li><a href="./miyagi/" class="pb5">宮城県<span></span></a></li>
                          <li><a href="./fukushima/" class="pb10">福島県<span></span></a></li>
                      </ul>
                      <ul class="kanto">
                          <li><a href="./gunma/" class="pb3">群馬県<span></span></a></li>
                          <li><a href="./tochigi/" class="pb3">栃木県<span></span></a></li>
                          <li><a href="./ibaraki/" class="pb3">茨城県<span></span></a></li>
                          <li><a href="./saitama/" class="pb3">埼玉県<span></span></a></li>
                          <li><a href="./tokyo/" class="pb3">東京都<span></span></a></li>
                          <li><a href="./chiba/" class="pb3">千葉県<span></span></a></li>
                          <li><a href="./kanagawa/" class="pb5">神奈川県<span></span></a></li>
                      </ul>
                  </div>
                  <div class="hmap_l2">
                      <ul class="hokushin">
                          <li><a href="./ishikawa/" class="pb3">石川県<span></span></a></li>
                          <li><a href="./toyama/" class="pb3">富山県<span></span></a></li>
                          <li><a href="./niigata/" class="pb3">新潟県<span></span></a></li>
                          <li><a href="./fukui/" class="pb3">福井県<span></span></a></li>
                          <li><a href="./nagano/" class="pb3">長野県<span></span></a></li>
                          <li><a href="./yamanashi/" class="pb3">山梨県<span></span></a></li>
                      </ul>
                      <ul class="tokai">
                          <li><a href="./gifu/" class="pb10">岐阜県<span></span></a></li>
                          <li><a href="./mie/" class="pb3">三重県<span></span></a></li>
                          <li><a href="./aichi/" class="pb3">愛知県<span></span></a></li>
                          <li><a href="./shizuoka/" class="pb3">静岡県<span></span></a></li>
                      </ul>
                  </div>
                  <div class="hmap_l3">
                      <ul class="kansai">
                          <li><a href="./hyogo/" class="pb3">兵庫県<span></span></a></li>
                          <li><a href="./kyoto/" class="pb3">京都府<span></span></a></li>
                          <li><a href="./shiga/" class="pb3">滋賀県<span></span></a></li>
                          <li><a href="./osaka/" class="pb5">大阪府<span></span></a></li>
                          <li><a href="./nara/" class="pb5">奈良県<span></span></a></li>
                          <li><a href="./wakayama/" class="pb5">和歌山県<span></span></a></li>
                      </ul>
                  </div>
                  <div class="hmap_l4">
                      <ul class="chugoku">
                          <li><a href="./yamaguchi/" class="pb3">山口県<span></span></a></li>
                          <li><a href="./shimane/" class="pb3">島根県<span></span></a></li>
                          <li><a href="./tottori/" class="pb3">鳥取県<span></span></a></li>
                          <li><a href="./hiroshima/" class="pb5">広島県<span></span></a></li>
                          <li><a href="./okayama/" class="pb5">岡山県<span></span></a></li>
                      </ul>
                      <ul class="shikoku">
                          <li><a href="./ehime/" class="pb5">愛媛県<span></span></a></li>
                          <li><a href="./kagawa/" class="pb5">香川県<span></span></a></li>
                          <li><a href="./kochi/" class="pb5">高知県<span></span></a></li>
                          <li><a href="./tokushima/" class="pb5">徳島県<span></span></a></li>
                      </ul>
                  </div>
                  <div class="hmap_l5">
                      <ul class="kyushu">
                          <li><a href="./nagasaki/" class="pb3">長崎県<span></span></a></li>
                          <li><a href="./saga/" class="pb3">佐賀県<span></span></a></li>
                          <li><a href="./fukuoka/" class="pb3">福岡県<span></span></a></li>
                          <li><a href="./kumamoto/" class="pb5">熊本県<span></span></a></li>
                          <li><a href="./oita/" class="pb5">大分県<span></span></a></li>
                          <li><a href="./kagoshima/" class="pb5">鹿児島県<span></span></a></li>
                          <li><a href="./miyazaki/" class="pb5">宮崎県<span></span></a></li>
                      </ul>
                      <ul class="okinawa">
                          <li><a href="./okinawa/" class="pb5">沖縄県<span></span></a></li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
@endsection
