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
                <div class="card-header card-header-divider">상품카테고리<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="no">상품카테고리키</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="no" class="form-control form-control-sm" name="no" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="business_area">브랜드</label>
                      <div class="col-9 col-lg-6">
                        <select id="business_area" name="business_area" valid="trim,required" element-name="브랜드" class="select2 select2-sm">
                          <option value="">전체</option>
                          <option value="BRD">블랑드</option>
                          <option value="COS">코스메리트</option>
                          <option value="JMU">진마유</option>
                          <option value="KMZ">카마존</option>
                          <option value="MELIKE">난이거</option>
                          <option value="NBR">누벨르</option>
                          <option value="RETTEB">리탭</option>
                          <option value="YS">영시</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="cate_name">이름</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="cate_name" class="form-control form-control-sm" name="cate_name" value="" valid="trim,required" element-name="이름">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="cate_desc">설명</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="cate_desc" class="form-control form-control-sm" name="cate_desc" value="">
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
              <button type="submit" onclick = " location.href='productcate-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
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

    <!-- Select Filter -->
    <script src="assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
        App.init();
      	App.booking();
      });
    </script>

  </body>
</html>