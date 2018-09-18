<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar be-aside">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content be-no-padding">
        <aside class="page-aside">
          <div class="be-scroller-aside">
            <div class="aside-content">
              <div class="content">
                <div class="aside-header">
                  <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon mdi mdi-caret-down"></span></button><span class="title">검색 설정</span>
                  <p class="description">다양한 검색 조건을 설정하여 원하는 데이터를 검색합니다.</p>
                </div>
              </div>
              <div class="aside-nav collapse">
                <div class="content">
                  <div class="form-group">
                    <label for="">시작일</label>
                    <div class="input-group input-group-sm date datetimepicker" data-min-view="2" data-date-format="yyyymmdd">
                      <input class="form-control" size="16" type="text" value="">
                      <div class="input-group-append">
                        <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="w-100">종료일</label>
                    <div class="input-group input-group-sm date datetimepicker" data-min-view="2" data-date-format="yyyymmdd">
                      <input class="form-control" size="16" type="text" value="">
                      <div class="input-group-append">
                        <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="period">주기설정</label>
                    <select id="period" name="period" class="select2 select2-sm">
                      <option value="D" selected="">일</option>
                      <option value="W">주</option>
                      <option value="M">월</option>
                      <option value="Q">분기</option>
                      <option value="H">반기</option>
                      <option value="Y">년</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="group_name">그룹명</label>
                    <input class="form-control form-control-sm" id="group_name" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="memo">메모</label>
                    <input class="form-control form-control-sm" id="memo" type="text" placeholder="">
                  </div>
                  <div class="accordion accordion-sm col-12 mb-0" id="accordion">
                      <div class="row">
                        <div class="card col-12">
                          <div class="card-header" id="headingOne">
                            <button class="btn pt-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" type="button"><i class="icon mdi mdi-chevron-right"></i> 브랜드 선택</button>
                          </div>
                          <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <div class="custom-controls-stacked row">
                                <div class="col-12"><label class="custom-control custom-checkbox" for="srhBiz"><input id="srhBiz" class="custom-control-input check_all" type="checkbox" checked><span class="custom-control-label">모두선택</span></label></div>
                                <div class="col-sm-6">
                                  <label class="custom-control custom-checkbox" for="srhBiz1"><input id="srhBiz1" name="biz_area[]" value="MELIKE" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">난이거</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz2"><input id="srhBiz2" name="biz_area[]" value="NBR" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">누벨르</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz3"><input id="srhBiz3" name="biz_area[]" value="RETTEB" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">리탭</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz4"><input id="srhBiz4" name="biz_area[]" value="BRD" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">블랑드</span></label>
                                </div>
                                <div class="col-sm-6">
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
                    </div>
                  <a class="btn btn-lg btn-primary btn-block" href="#">검색</a>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="main-content container-fluid">
          <div class="row be-booking-promos">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-divider">Overview
                  <div class="tools dropdown"><a href="" class="icon mdi mdi-download" data-toggle="tooltip" data-placement="left" title="엑셀로 다운로드"></a><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  jqgrid 들어갈 위치
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

    <!-- write -->
    <script src="assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/select2/js/select2.full.min.js"></script>
    <script src="assets/js/app-mail-compose.js"></script>

    <!-- file -->
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