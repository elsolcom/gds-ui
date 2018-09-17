<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-divider card-header-flex">데이터 등록
                  <div>
                    <button class="btn btn-lg btn-primary" type="submit">엑셀일괄등록</button>
                    <button class="btn btn-lg btn-secondary" type="button"><i class="mdi mdi-download"></i> 엑셀 템플릿 다운로드</button>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="biz_area">브랜드 선택</label>
                        <select id="biz_area" name="biz_area" class="select2 select2-sm">
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
                        <select id="media" name="media" class="select2 select2-sm">
                          <option value="13">네이버광고시스템</option>
                          <option value="14">다음광고시스템</option>
                          <option value="15">구글광고시스템</option>
                          <option value="16">TG관리자</option>
                          <option value="18">페이스북</option>
                          <option value="24">AT(에이스 트레이더)</option>
                          <option value="25">모비온관리자</option>
                          <option value="41">리얼클릭</option>
                          <option value="42">크리테오</option>
                          <option value="43">아크로스</option>
                          <option value="46">네이버브랜드검색</option>
                          <option value="47">네이버쇼핑검색</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="file-1">엑셀파일</label>
                        <input class="inputfile inputfile-sm" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple>
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
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- form -->
    <script src="assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/select2/js/select2.full.min.js"></script>
    <script src="assets/js/app-mail-compose.js"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="assets/js/app-form-elements.js"></script>

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