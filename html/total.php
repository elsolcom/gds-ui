<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">매출종합</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">매출데이터</li>
              <li class="breadcrumb-item">통계</li>
              <li class="breadcrumb-item active">매출종합</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-divider">검색설정</div>
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
                        <label class="control-label">주기설정</label>
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
                        <label class="control-label">브랜드 선택</label>
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
                    </div>
                    <div class="row pt-3 mt-1">
                      <p class="text-right col-sm-12">
                        <button class="btn btn-lg btn-primary" type="submit">검색</button>
                        <button class="btn btn-lg btn-secondary" type="button"><i class="mdi mdi-download"></i> 엑셀 다운로드</button>
                      </p>
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