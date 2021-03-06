<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-divider card-header-flex card-header-sm">데이터 등록
                  <div>
                    <button class="btn btn-primary" type="submit">등록</button>
                    <button class="btn btn-secondary" type="button"><i class="mdi mdi-download"></i> 엑셀 템플릿 다운로드</button>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="biz_area">브랜드 선택</label>
                        <select id="biz_area" name="biz_area" class="select2 select2-xs">
                          <option value="MELIKE">난이거</option>
                          <option value="NBR" selected="">누벨르</option>
                          <option value="RETTEB">리탭</option>
                          <option value="BRD">블랑드</option>
                          <option value="YS">영시</option>
                          <option value="JMU">진마유</option>
                          <option value="KMZ">카마존</option>
                          <option value="COS">코스메리트</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="media">매장(매체)</label>
                        <select id="media" name="media" class="select2 select2-xs">
                          <option value="1">공식몰(Cafe24)</option>
                          <option value="2">스토어팜</option>
                          <option value="3">셀메이트</option>
                          <option value="5">11번가</option>
                          <option value="6">티몬</option>
                          <option value="7">GS SHOP</option>
                          <option value="8">CJ오쇼핑</option>
                          <option value="9">지마켓</option>
                          <option value="10">옥션</option>
                          <option value="11">위메프</option>
                          <option value="12">쿠팡</option>
                          <option value="17">인터파크</option>
                          <option value="26">사방넷</option>
                          <option value="27">신세계몰</option>
                          <option value="28">다이소몰</option>
                          <option value="29">비즈마켓</option>
                          <option value="30">하프클럽</option>
                          <option value="31">스킨판다</option>
                          <option value="32">이마트몰</option>
                          <option value="51">리탭</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="file-1">엑셀파일</label>
                        <input class="inputfile inputfile-xs" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple>
                        <label class="btn-secondary d-block" for="file-1"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                      </div>
                    </div>
                  </form>
                  <div>jqgrid 들어갈 위치</div>
                </div>
             </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- write -->
    <script src="/assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="/assets/lib/select2/js/select2.min.js"></script>
    <script src="/assets/lib/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/app-mail-compose.js"></script>

    <!-- file -->
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="/assets/js/app-form-elements.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
        App.formElements();
      });
    </script>
  </body>
</html>