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
                        <div class="input-group date datetimepicker" id="dateSince" data-min-view="2" data-date-format="yyyy-mm-dd">
                          <input class="form-control form-control-sm" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 col-xl-3">
                        <label class="control-label">&nbsp;</label>
                        <div class="input-group date datetimepicker" id="dateTo" data-min-view="2" data-date-format="yyyy-mm-dd">
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
                    </div>
                    <div class="accordion accordion-sm col-12 mb-0" id="accordion">
                      <div class="row">
                        <div class="card col-12">
                          <div class="card-header" id="headingOne">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" type="button"><i class="icon mdi mdi-chevron-right"></i> 브랜드 선택</button>
                          </div>
                          <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox" for="srhBiz"><input id="srhBiz" class="custom-control-input check-all" type="checkbox" checked><span class="custom-control-label">모두선택</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz1"><input id="srhBiz1" name="biz_area[]" value="MELIKE" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">난이거</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz2"><input id="srhBiz2" name="biz_area[]" value="NBR" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">누벨르</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz3"><input id="srhBiz3" name="biz_area[]" value="RETTEB" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">리탭</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz4"><input id="srhBiz4" name="biz_area[]" value="BRD" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">블랑드</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz5"><input id="srhBiz5" name="biz_area[]" value="YS" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">영시</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz6"><input id="srhBiz6" name="biz_area[]" value="JMU" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">진마유</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz7"><input id="srhBiz7" name="biz_area[]" value="KMZ" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">카마존</span></label>
                                <label class="custom-control custom-checkbox" for="srhBiz8"><input id="srhBiz8" name="biz_area[]" value="COS" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">코스메리트</span></label>
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
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/assets/js/app.js" type="text/javascript"></script>

    <!-- write -->
    <script src="/assets/lib/summernote/summernote-bs4.min.js" type="text/javascript"></script>
    <script src="/assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <script src="/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-mail-compose.js" type="text/javascript"></script>

    <!-- file -->
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-elements.js" type="text/javascript"></script>

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