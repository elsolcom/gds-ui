<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="card">
            <div class="input-group input-search input-group-sm">
              <input class="form-control" type="text" placeholder="Search"><span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <colgroup>
                        <col class="c16">
                        <col class="c21">
                        <col class="c21">
                        <col class="c21">
                        <col class="c21">
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">번호</th>
                          <th scope="col">아이디</th>
                          <th scope="col">이름</th>
                          <th scope="col">삭제</th>
                          <th scope="col">등록일</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>17</td>
                          <td>shnam</td>
                          <td>남승훈</td>
                          <td>노출</td>
                          <td>2018-09-03</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>16</td>
                          <td>ldw</td>
                          <td>임동욱</td>
                          <td>노출</td>
                          <td>2018-05-25</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>15</td>
                          <td>keesik</td>
                          <td>함기식</td>
                          <td>노출</td>
                          <td>2018-05-25</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>14</td>
                          <td>rich</td>
                          <td>이창헌</td>
                          <td>노출</td>
                          <td>2018-05-21</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>13</td>
                          <td>leejoomy</td>
                          <td>이주미</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>12</td>
                          <td>leemk13579</td>
                          <td>이민경</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>11</td>
                          <td>uramaci</td>
                          <td>노승욱</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>10</td>
                          <td>lovyjy</td>
                          <td>유진영</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>9</td>
                          <td>unee</td>
                          <td>장하윤</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
                        </tr>
                        <tr onClick = " location.href='admin-write.php' ">
                          <td>8</td>
                          <td>lsj521</td>
                          <td>이서정</td>
                          <td>노출</td>
                          <td>2018-05-17</td>
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
              <a href="admin-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
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

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
    </script>
  </body>
</html>