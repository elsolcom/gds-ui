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
                <div class="card-header card-header-divider">사용자 정보<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form data-parsley-validate="" novalidate="">
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="name">이름</label>
                      <div class="col-9 col-lg-10">
                        <input class="form-control form-control-sm" id="name" name="name" value="" valid="trim,required" element-name="이름" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="userid">아이디</label>
                      <div class="col-9 col-lg-10">
                        <input type="text" id="userid" class="form-control form-control-sm" name="userid" value="" valid="trim,required" element-name="아이디">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="password">패스워드</label>
                      <div class="col-9 col-lg-10">
                        <input type="password" id="password" class="form-control form-control-sm" name="password" valid="trim,required" element-name="패스워드">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="password_confirm">패스워드 확인</label>
                      <div class="col-9 col-lg-10">
                        <input class="form-control form-control-sm" type="password" id="password_confirm" name="password_confirm" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="email_1">이메일</label>
                      <div class="col-9 col-lg-10">
                        <div class="row">
                          <div class="col-sm-4">
                            <input type="text" id="email_1" class="arEmail form-control form-control-sm" name="email_1" value="" maxlength="30" valid="trim,required" element-name="이메일">
                          </div>
                          <div class="col-sm-4">
                            <input type="text" title="이메일" class="arEmail form-control form-control-sm" name="email_2" id="email_2" value="" maxlength="30" style="ime-mode:disabled;" valid="trim,required" element-name="이메일 도메인">
                          </div>
                          <div class="col-sm-4">
                            <select id="group_id" name="group_id" class="select2 select2-sm">
                              <option value="group1">직접입력</option>
                              <option value="group2">그룹2</option>
                              <option value="group3">그룹3</option>
                              <option value="group4">그룹4</option>
                              <option value="group5">그룹5</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="card">
                <div class="card-header card-header-divider">그룹리스트<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="admin010" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_ADMIN" id="admin010" value="1" type="checkbox"><span class="custom-control-label">G_ADMIN(시스템 총괄 관리자)</span></label>
                      <label for="admin011" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_GST_MEDIA" id="admin011" value="1" type="checkbox"><span class="custom-control-label">G_GST_MEDIA(매체 자료 전용 조회전용)</span></label>
                      <label for="admin012" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_GST_SALES" id="admin012" value="1" type="checkbox"><span class="custom-control-label">G_GST_SALES(매출 자료 전용 조회전용)</span></label>
                      <label for="admin013" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_MGR" id="admin013" value="1" type="checkbox"><span class="custom-control-label">G_MGR(시스템 일반 관리자)</span></label>
                      <label for="admin014" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_MGR_MEDIA" id="admin014" value="1" type="checkbox"><span class="custom-control-label">G_MGR_MEDIA(매체 자료 전용 관리자)</span></label>
                      <label for="admin015" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_MGR_SALES" id="admin015" value="1" type="checkbox"><span class="custom-control-label">G_MGR_SALES(매출 자료 전용 관리자)</span></label>
                      <label for="admin016" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_USR" id="admin016" value="1" type="checkbox"><span class="custom-control-label">G_USR(시스템 일반 사용자)</span></label>
                      <label for="admin017" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_USR_MEDIA" id="admin017" value="1" type="checkbox"><span class="custom-control-label">G_USR_MEDIA(매체 자료 전용 일반 사용자)</span></label>
                      <label for="admin018" class="custom-control custom-checkbox"><input class="custom-control-input" name="G_USR_SALES" id="admin018" value="1" type="checkbox"><span class="custom-control-label">G_USR_SALES(매출 자료 전용 일반 사용자)</span></label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 col-sm-8 col-lg-10 form-check mt-1">
                      <label for="admin04" class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="agree" checked="" id="admin04" value="1"><span class="custom-control-label">승인</span>
                      </label>
                      <label for="admin05" class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="agree" id="admin05" value="0"><span class="custom-control-label">미 승인</span>
                      </label>
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
              <button type="submit" onclick = " location.href='admin-list.php' " class="btn btn-lg btn-space btn-secondary">목록</button>
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