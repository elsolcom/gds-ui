<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-7">
              <div class="card">
                <div class="card-header card-header-divider">사업영역코드<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="comp_no">관리회사코드</label>
                      <div class="col-9 col-lg-9">
                        <select id="comp_no" name="comp_no" class="select2 select2-sm">
                          <option value="1">엘솔컴퍼니</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="id">ID</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="id" class="form-control form-control-sm" name="id" value="" valid="trim,required" element-name="ID">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="area_name">이름</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="area_name" class="form-control form-control-sm" name="area_name" value="" valid="trim,required" element-name="이름">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="area_desc">설명</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="area_desc" class="form-control form-control-sm" name="area_desc" value="">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="card">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-3 col-lg-4 col-form-label text-right pt-1" for="admin01">사용</label>
                    <div class="col-9 col-lg-8">
                      <label class="custom-control custom-radio custom-control-inline" for="admin01"><input type="radio" class="custom-control-input" name="use_yn" id="admin01" value="Y"><span class="custom-control-label">사용</span></label>
                      <label class="custom-control custom-radio custom-control-inline" for="admin02"><input type="radio" class="custom-control-input" name="use_yn" id="admin02" value="N" checked=""><span class="custom-control-label">사용안함</span></label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-3 col-lg-4 col-form-label text-right pt-1" for="admin03">삭제</label>
                    <div class="col-9 col-lg-8">
                      <label class="custom-control custom-radio custom-control-inline" for="admin03"><input type="radio" class="custom-control-input" name="delete_yn" id="admin03" value="Y"><span class="custom-control-label">삭제</span></label>
                      <label class="custom-control custom-radio custom-control-inline" for="admin04"><input type="radio" class="custom-control-input" name="delete_yn" id="admin04" value="N" checked=""><span class="custom-control-label">노출</span></label>
                    </div>
                  </div>
                  <div class="form-group row pt-1 pb-1">
                    <label class="col-3 col-lg-4 col-form-label text-right pt-1" for="admin05">그로스데이터반영여부</label>
                    <div class="col-9 col-lg-8 form-check mt0">
                      <label class="custom-control custom-radio custom-control-inline" for="admin05"><input type="radio" class="custom-control-input" name="gds_yn" id="admin05" value="Y"><span class="custom-control-label">사용</span></label>
                      <label class="custom-control custom-radio custom-control-inline" for="admin06"><input type="radio" class="custom-control-input" name="gds_yn" id="admin06" value="N" checked=""><span class="custom-control-label">사용안함</span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row invoice-footer">
            <div class="col-lg-12">
              <button type="submit" onclick="" class="btn btn-lg btn-space btn-primary">등록</button>
              <button type="submit" onclick="" class="btn btn-lg btn-space btn-danger">삭제</button>
              <button type="submit" onclick = " location.href='business-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
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