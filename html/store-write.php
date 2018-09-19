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
                <div class="card-header card-header-divider">매장정보<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="store_kind">매장종류</label>
                      <div class="col-9 col-lg-9">
                        <select id="store_kind" name="store_kind" class="select2 select2-sm">
                          <option value="PUB">공식몰</option>
                          <option value="OM">오픈마켓</option>
                          <option value="SC">Social Commerce</option>
                          <option value="SA">검색광고</option>
                          <option value="DA">디스플레이광고</option>
                          <option value="VA">비디오광고</option>
                          <option value="CM">폐쇄몰</option>
                          <option value="ETC">기타</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="data_division">업무관점 데이터 구분</label>
                      <div class="col-9 col-lg-9">
                        <select id="data_division" name="data_division" class="select2 select2-sm">
                          <option value="DS">매출데이터</option>
                          <option value="DM">매체데이터</option>
                          <option value="DG">그로스데이터</option>
                          <option value="CS">CS(Customer Service) 데이터</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="store_code">코드</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="store_code" class="form-control form-control-sm" name="store_code" value="" valid="trim,required" element-name="코드">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="store_name">이름</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="store_name" class="form-control form-control-sm" name="store_name" value="" valid="trim,required" element-name="이름">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="store_desc">설명</label>
                      <div class="col-9 col-lg-9">
                        <input type="text" id="store_desc" class="form-control form-control-sm" name="store_desc" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="home_url">매장 홈페이지 URL</label>
                      <div class="col-9 col-lg-9">
                        <input type="url" id="home_url" class="form-control form-control-sm" name="home_url" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-3 col-form-label text-right" for="store_url">관리자 페이지 URL</label>
                      <div class="col-9 col-lg-9">
                        <input type="url" id="store_url" class="form-control form-control-sm" name="store_url" value="">
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
                    <label class="col-3 col-lg-4 col-form-label text-right pt-1" for="admin07">딜단위 처리 여부</label>
                    <div class="col-9 col-lg-8">
                      <label class="custom-control custom-radio custom-control-inline" for="admin07"><input type="radio" class="custom-control-input" name="use_deal" id="admin07" value="Y"><span class="custom-control-label">딜단위</span></label>
                      <label class="custom-control custom-radio custom-control-inline" for="admin08"><input type="radio" class="custom-control-input" name="use_deal" id="admin08" value="N" checked=""><span class="custom-control-label">상품별</span></label>
                    </div>
                  </div>
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
              <button type="submit" onclick = " location.href='store-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
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