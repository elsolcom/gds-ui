<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <colgroup>
                        <col class="col16">
                        <col class="col21">
                        <col class="col21">
                        <col class="col21">
                        <col class="col21">
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">번호</th>
                          <th scope="col">그룹ID</th>
                          <th scope="col">그룹명</th>
                          <th scope="col">등록일</th>
                          <th scope="col">메모</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>9</td>
                            <td>G_MGR</td>
                            <td>시스템 일반 관리자</td>
                            <td>2018-03-16</td>
                            <td>시스템 일반 관리자</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>8</td>
                            <td>G_USR</td>
                            <td>시스템 일반 사용자</td>
                            <td>2018-03-16</td>
                            <td>시스템 일반 사용자</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>7</td>
                            <td>G_ADMIN</td>
                            <td>시스템 총괄 관리자</td>
                            <td>2018-03-16</td>
                            <td>Administrators</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>6</td>
                            <td>G_GST_MEDIA</td>
                            <td>매체 자료 전용 조회전용</td>
                            <td>2018-03-16</td>
                            <td>GUEST</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>5</td>
                            <td>G_GST_SALES</td>
                            <td>매출 자료 전용 조회전용</td>
                            <td>2018-03-16</td>
                            <td>GUEST</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>4</td>
                            <td>G_MGR_MEDIA</td>
                            <td>매체 자료 전용 관리자</td>
                            <td>2018-03-16</td>
                            <td>관리자</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>3</td>
                            <td>G_MGR_SALES</td>
                            <td>매출 자료 전용 관리자</td>
                            <td>2018-03-16</td>
                            <td>관리자</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>2</td>
                            <td>G_USR_MEDIA</td>
                            <td>매체 자료 전용 일반 사용자</td>
                            <td>2018-03-16</td>
                            <td>사용자</td>
                        </tr>
                        <tr onClick = " location.href='group-view.php' ">
                            <td>1</td>
                            <td>G_USR_SALES</td>
                            <td>매출 자료 전용 일반 사용자</td>
                            <td>2018-03-16</td>
                            <td>사용자</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row be-datatable-footer">
                    <ul class="pagination justify_end col-12 m-0">
                      <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span class="mdi mdi-more" aria-hidden="true"></span></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">6</a></li>
                      <li class="page-item"><a class="page-link" href="#">7</a></li>
                      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="mdi mdi-more" aria-hidden="true"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row invoice-footer">
            <div class="col-lg-12">
              <a href="group-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
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

    <!-- menu -->
    <script src="assets/lib/jquery.nestable/jquery.nestable.js"></script>
    <script src="assets/js/app-ui-nestable-lists.js"></script>

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