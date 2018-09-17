<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-divider card-header-flex">검색설정
                  <div>
                    <button class="btn btn-lg btn-primary" type="submit">검색</button>
                    <button class="btn btn-lg btn-secondary" type="button"><i class="mdi mdi-download"></i> 엑셀 다운로드</button>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label">기간설정</label>
                        <div class="input-group date datetimepicker" id="dateSince" data-min-view="2" data-date-format="yyyymmdd">
                          <input class="form-control form-control-sm" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label">&nbsp;</label>
                        <div class="input-group date datetimepicker" id="dateTo" data-min-view="2" data-date-format="yyyymmdd">
                          <input class="form-control form-control-sm" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="period">주기설정</label>
                        <select id="period" name="period" class="select2 select2-sm">
                          <option value="D" selected="">일</option>
                          <option value="W">주</option>
                          <option value="M">월</option>
                          <option value="Q">분기</option>
                          <option value="H">반기</option>
                          <option value="Y">년</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label" for="biz_area">브랜드 선택</label>
                        <select id="biz_area" name="biz_area" class="select2 select2-sm">
                          <option value="ALL" selected="">전체</option>
                          <option value="MELIKE">난이거</option>
                          <option value="NBR">누벨르</option>
                          <option value="RETTEB">리탭</option>
                          <option value="BRD">블랑드</option>
                          <option value="YS">영시</option>
                          <option value="JMU">진마유</option>
                          <option value="KMZ">카마존</option>
                          <option value="COS">코스메리트</option>
                        </select>
                      </div>
                    </div>
                    <div class="accordion accordion-sm col-12 mb-0" id="accordion">
                      <div class="row">
                        <div class="card col-12">
                          <div class="card-header" id="headingOne">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" type="button"><i class="icon mdi mdi-chevron-right"></i> 미디어 제공 업체</button>
                          </div>
                          <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox" for="srhMedia"><input id="srhMedia" class="custom-control-input check_all" type="checkbox"><span class="custom-control-label">모두선택</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia1"><input id="srhMedia1" name="media[]" value="13" checked="" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">네이버광고시스템</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia2"><input id="srhMedia2" name="media[]" value="14" checked="" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">다음광고시스템</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia3"><input id="srhMedia3" name="media[]" value="15" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">구글광고시스템</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia4"><input id="srhMedia4" name="media[]" value="16" checked="" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">TG관리자</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia5"><input id="srhMedia5" name="media[]" value="18" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">페이스북</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia6"><input id="srhMedia6" name="media[]" value="24" checked="" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">AT(에이스 트레이더)</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia7"><input id="srhMedia7" name="media[]" value="25" checked="" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">모비온관리자</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia8"><input id="srhMedia8" name="media[]" value="41" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">리얼클릭</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia9"><input id="srhMedia9" name="media[]" value="42" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">크리테오</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia10"><input id="srhMedia10" name="media[]" value="43" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">아크로스</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia11"><input id="srhMedia11" name="media[]" value="46" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">네이버브랜드검색</span></label>
                                <label class="custom-control custom-checkbox" for="srhMedia12"><input id="srhMedia12" name="media[]" value="47" class="srhMedia custom-control-input" type="checkbox"><span class="custom-control-label">네이버쇼핑검색</span></label>
                              </div>
                            </div>
                          </div>
                        </div>
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
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>

    <!-- write -->
    <script src="assets/lib/summernote/summernote-bs4.min.js" type="text/javascript"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/js/app-mail-compose.js" type="text/javascript"></script>

    <!-- file -->
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/js/app-form-elements.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
        App.formElements();
      });
    </script>
  </body>
</html>