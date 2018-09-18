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
                <div class="card-header card-header-divider">회사코드<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="comp_name">회사이름</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="comp_name" class="form-control form-control-sm" name="comp_name" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="eng_name">영문회사명</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="eng_name" class="form-control form-control-sm" name="eng_name" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="comp_desc">설명</label>
                      <div class="col-9 col-lg-6">
                        <input type="text" id="comp_desc" class="form-control form-control-sm" name="comp_desc" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="home_url">홈페이지 URL</label>
                      <div class="col-9 col-lg-6">
                        <input type="url" id="home_url" class="form-control form-control-sm" name="home_url" value="">
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
              <button type="submit" onclick = " location.href='company-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
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