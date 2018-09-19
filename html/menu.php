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
                <div class="card-header">관리자 권한 설정<span class="card-subtitle">관리자 권한 목록 테이블</span></div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <colgroup>
                        <col class="col33">
                        <col class="col33">
                        <col class="col34">
                        </colgroup>
                        <thead>
                            <tr>
                            <th scope="col"><div class="flex_box justify_between align_center"><label for="menu1">1차메뉴</label> <a class="btn btn-primary" href="javascript:;" id="menu1_add">메뉴추가</a></div></th>
                            <th scope="col"><div class="flex_box justify_between align_center"><label for="menu2">2차메뉴</label> <a class="btn btn-primary" href="javascript:;" id="menu2_add">메뉴추가</a></div></th>
                            <th scope="col"><div class="flex_box justify_between align_center"><label for="menu3">3차메뉴</label> <a class="btn btn-primary" href="javascript:;" id="menu3_add">메뉴추가</a></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <select class="form-control" multiple="" name="menu1" id="menu1" title="항목선택">
                                            <option value="36">환경설정</option>
                                            <option value="40">게시판</option>
                                            <option value="96">매출데이터</option>
                                            <option value="111">매체데이터</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <select class="form-control" multiple="" name="menu2" id="menu2" title="항목선택">
                                            <option value="43">메뉴관리</option>
                                            <option value="103">사용자관리</option>
                                            <option value="39">코드관리</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <select class="form-control" multiple="" name="menu3" id="menu3" title="항목선택">
                                            <option value="104">사용자그룹</option>
                                            <option value="105">계정관리</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">메뉴 추가 및 수정<span class="card-subtitle">위에서 선택한 메뉴 수정하거나 새로운 메뉴를 추가합니다.</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="menu_id2" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴ID</label>
                      <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="menu_id2" type="text" placeholder="" readonly></div>
                    </div>
                    <div class="form-group row">
                      <label for="title2" class="col-12 col-sm-2 col-form-label text-sm-right">제목</label>
                      <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="title2" type="text" placeholder=""></div>
                    </div>
                    <div class="form-group row">
                      <label for="memo2" class="col-12 col-sm-2 col-form-label text-sm-right">메모</label>
                      <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="memo2" type="text" placeholder=""></div>
                    </div>
                    <div class="form-group row">
                      <label for="url2" class="col-12 col-sm-2 col-form-label text-sm-right">URL</label>
                      <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="url2" type="url" placeholder=""></div>
                    </div>
                    <div class="form-group row">
                      <label for="seq2" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴순서</label>
                      <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="seq2" type="text" placeholder=""></div>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                      <label for="admin06" class="col-12 col-sm-2 col-form-label text-sm-right">삭제</label>
                      <div class="col-12 col-sm-8 col-lg-9 form-check mt-1">
                        <label for="admin06" class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-inline" checked="" id="admin06"><span class="custom-control-label">삭제</span>
                        </label>
                        <label for="admin07" class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-inline" id="admin07"><span class="custom-control-label">노출</span>
                        </label>
                      </div>
                    </div>
                    <div class="row pt-3">
                      <div class="col-12">
                        <p class="text-right">
                          <button class="btn btn-space btn-primary" type="submit">등록</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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

    <!-- menu -->
    <script src="/assets/lib/jquery.nestable/jquery.nestable.js"></script>
    <script src="/assets/js/app-ui-nestable-lists.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
        App.formElements();
        App.uiNestableLists();
      });
    </script>
  </body>
</html>