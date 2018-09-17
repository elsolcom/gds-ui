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
                        <col class="c10">
                        <col class="c60">
                        <col class="c10">
                        <col class="c15">
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Views</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>10</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><a href="notice-view.php" class="block">제목</a></td>
                          <td>100</td>
                          <td>2018.09.13</td>
                        </tr>
                        <tr>
                          <td colspan="4" class="text_center">게시글이 없습니다.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row be-datatable-footer">
                    <ul class="pagination justify_end col-12 m-0">
                      <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span class="mdi mdi-more" aria-hidden="true"></span></a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
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
              <a href="notice-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>