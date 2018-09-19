<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-divider">상품코드<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="no">상품카테고리키</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="no" class="form-control form-control-sm" name="no" value="" placeholder="입력하지 않을시 자동입력">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="brand_name">브랜드</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="brand_name" class="form-control form-control-sm" name="brand_name" value="" readonly="" style="background-color: #e2e2e2;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="product_cate">상품범주</label>
                      <div class="col-9 col-lg-6">
                        <select id="product_cate" name="product_cate" class="select2 select2-sm">
                          <option value="1">먹어도좋아</option>
                          <option value="2">굵어도좋아</option>
                          <option value="3">빠져라</option>
                          <option value="4">되돌려주세요</option>
                          <option value="5">먹어도좋아 맛있다</option>
                          <option value="6">먹어도좋아x되돌려주세요</option>
                          <option value="7">먹어도좋아x빠져라</option>
                          <option value="8">맛있져라</option>
                          <option value="9">나와라 꾸릉꽝꽝</option>
                          <option value="10">붙여도좋아</option>
                          <option value="21">퓨어 잔티젠 나이트 인핸스드</option>
                          <option value="22">퓨리파잉 다이어트 데이</option>
                          <option value="23">셀루보일리 스무딩 젤</option>
                          <option value="24">셀루보일리 스무딩 패치</option>
                          <option value="25">퓨리파잉데이&amp;스무딩젤</option>
                          <option value="26">퓨리파잉데이&amp;스무딩패치</option>
                          <option value="27">셀루보일리 2주완성</option>
                          <option value="28">셀루보일리 4주완성</option>
                          <option value="29">셀루보일리 스무딩 패치 1box + 스무딩 젤 2ea 세트</option>
                          <option value="30">바나나 IN&amp;OUT 다이어트 프로그램</option>
                          <option value="31">다이어트 4주 완성</option>
                          <option value="32">다이어트 8주 완성</option>
                          <option value="33">[2+1] 퓨리파잉 다이어트 데이 (27일분)</option>
                          <option value="34">[한정판매]퓨어 잔티젠 나이트 인핸스드+스무딩젤 증정</option>
                          <option value="35">뷰즐X누벨르</option>
                          <option value="36"> 4주완성+셀루보일리set</option>
                          <option value="37">여름 캠프 패키지</option>
                          <option value="38">다이어트 1주 완성</option>
                          <option value="39">다이어트 4주완성</option>
                          <option value="41">에이엔 투</option>
                          <option value="42">어려져라 세트</option>
                          <option value="43">더 스노우 에센스</option>
                          <option value="44">미니어쳐 세트</option>
                          <option value="45">영시트</option>
                          <option value="46">여리여리스틱</option>
                          <option value="47">메이크업박스 세트</option>
                          <option value="48">노세범 미스트</option>
                          <option value="49">더 브라운 앰플</option>
                          <option value="50">패밀리</option>
                          <option value="51">리얼쁘띠</option>
                          <option value="52">영시트 샘플 프로그램</option>
                          <option value="53">랜덤박스</option>
                          <option value="54">엄마와딸 SET</option>
                          <option value="55">쿨힐링 패키지</option>
                          <option value="56">선쉴드 패키지</option>
                          <option value="58">TBA2 + TSE1 + 영시트</option>
                          <option value="61">100%마유크림</option>
                          <option value="62">말갈기마유크림</option>
                          <option value="63">사쿠라마유크림</option>
                          <option value="64">백마클렌징오일</option>
                          <option value="65">에스테틱 논실리콘샴푸</option>
                          <option value="66">사쿠라마유립밤</option>
                          <option value="67">에스테틱 논실리콘샴푸 세트</option>
                          <option value="68">수분촉촉 SET</option>
                          <option value="69">꽉찬 보습 SET</option>
                          <option value="70">영양듬뿍 SET</option>
                          <option value="71">100%마유크림 + 백마클렌징오일</option>
                          <option value="72">에스테틱 샴푸 + 100%마유크림 SET</option>
                          <option value="73">에스테틱 샴푸 + 클렌징 오일  SET</option>
                          <option value="74">동안피부SET </option>
                          <option value="81">스킨 파이버 젤리</option>
                          <option value="82">블랑드 크림+스킨파이버 젤리</option>
                          <option value="83">블랑드 스킨파이버 젤리+ 크림 증정</option>
                          <option value="84">[한정수량]블랑드 크림 2+1</option>
                          <option value="85">스킨파이버 젤리 튜브형</option>
                          <option value="86">블랑드 스킨파이버 젤리 알파</option>
                          <option value="87">블랑드 스킨파이버 젤리 알파 + 튜브형</option>
                          <option value="121">다이어트 3개월 완성</option>
                          <option value="221">하드코어 프로그램 430ml</option>
                          <option value="222">하드코어 프로그램 270ml</option>
                          <option value="223">밸런스 프로그램 430ml</option>
                          <option value="224">밸런스 프로그램 270ml</option>
                          <option value="225">1day 6세트 430ml</option>
                          <option value="226">1day 6세트 270ml</option>
                          <option value="227">5days 세트 430ml</option>
                          <option value="228">5days 세트 270ml</option>
                          <option value="229">3days 세트 430ml</option>
                          <option value="230">3days 세트 270ml</option>
                          <option value="231">1day 세트 430ml</option>
                          <option value="232">1day 세트 270ml</option>
                          <option value="401">누벨르</option>
                          <option value="402">진마유</option>
                          <option value="403">전체</option>
                          <option value="601">SUNGLASSES</option>
                          <option value="602">ACCESSORIES</option>
                          <option value="701">밥먹고 난이거</option>
                          <option value="702">치킨먹고 난이거</option>
                          <option value="703">눈에는 난이거</option>
                          <option value="704">스트레스 난이거</option>
                          <option value="705">눈에는 난이거+스트레스 난이거 SET</option>
                          <option value="706">밥먹고 난이거 + 치킨먹고 난이거 SET</option>
                          <option value="707">폭염엔 난이거</option>
                          <option value="708">치밥이 SET (3개월분)</option>
                          <option value="709">수능엔 난이거 SET1</option>
                          <option value="710">수능엔 난이거 SET2</option>
                          <option value="711">치눈이 SET (3개월분)</option>
                          <option value="712">명절엔 난이거 SET</option>
                          <option value="801">지오머드 모이스처 마스크시트</option>
                          <option value="802">지오머드 모이스쳐 토너</option>
                          <option value="803">지오머드 모이스쳐 에센스</option>
                          <option value="804">지오머드 모이스쳐 크림</option>
                          <option value="805">UV 선스틱</option>
                          <option value="806">웨어러블 터치업 에어쿠션</option>
                          <option value="807">지오머드 모이스쳐 에멀젼</option>
                          <option value="808">지오머드 모이스쳐 아이크림</option>
                          <option value="809">지오머드 모이스쳐 딥 폼</option>
                          <option value="810">화이트닝 톤 업 크림</option>
                          <option value="811">블루 수딩 모이스쳐 겔</option>
                          <option value="812">웨어러블 터치 업 립스틱</option>
                          <option value="813">여름을 부탁해SET</option>
                          <option value="1001">GA GROWTH_medium</option>
                          <option value="1002">GA GROWTH_campaign</option>
                          <option value="1003">GA CLP_campaign_CONTENT</option>
                          <option value="1101">GA GROWTH_medium</option>
                          <option value="1102">GA GROWTH_campaign</option>
                          <option value="1103">GA CLP_campaign_CONTENT</option>
                          <option value="1201">GA GROWTH_medium</option>
                          <option value="1202">GA GROWTH_campaign</option>
                          <option value="1203">GA CLP_campaign_CONTENT</option>
                          <option value="1301">GA GROWTH_medium</option>
                          <option value="1302">GA GROWTH_campaign</option>
                          <option value="1303">GA CLP_campaign_CONTENT</option>
                          <option value="1401">GA GROWTH_medium</option>
                          <option value="1402">GA GROWTH_campaign</option>
                          <option value="1403">GA CLP_campaign_CONTENT</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="product_name">상품명</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="product_name" class="form-control form-control-sm" name="product_name" value="" valid="trim,required" element-name="상품명">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="product_code">상품코드</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="product_code" class="form-control form-control-sm" name="product_code" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="product_kind">상품종류</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="product_kind" class="form-control form-control-sm" name="product_kind" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="product_desc">설명</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="product_desc" class="form-control form-control-sm" name="product_desc" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="unit_price">상품단가</label>
                      <div class="col-9 col-lg-6">
                        <input type="number" id="unit_price" class="form-control form-control-sm" name="unit_price" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="sale_price">판매단가</label>
                      <div class="col-9 col-lg-6">
                        <input type="number" id="sale_price" class="form-control form-control-sm" name="sale_price" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right pt-1" for="admin04">삭제</label>
                      <div class="col-9 col-lg-6">
                        <label class="custom-control custom-radio custom-control-inline" for="admin04"><input class="custom-control-input" type="radio" name="delete_yn" id="admin04" value="Y"><span class="custom-control-label">삭제</span></label>
                        <label class="custom-control custom-radio custom-control-inline" for="admin05"><input class="custom-control-input" type="radio" name="delete_yn" id="admin05" value="N" checked=""><span class="custom-control-label">노출</span></label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row invoice-footer">
            <div class="col-lg-12">
              <button type="submit" onclick="" class="btn btn-lg btn-space btn-primary">등록</button>
              <button type="submit" onclick = " location.href='product-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
            </div>
          </div>
        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- form -->
    <script src="/assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="/assets/lib/select2/js/select2.min.js"></script>
    <script src="/assets/lib/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/app-mail-compose.js"></script>
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="/assets/js/app-form-elements.js"></script>

    <!-- Select Filter -->
    <script src="/assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
        App.init();
      	App.booking();
      });
    </script>

  </body>
</html>