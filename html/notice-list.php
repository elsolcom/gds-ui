<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper">

      <?php include("include/nav.php"); ?>

      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="notice-list.php"><i class="icon mdi mdi-assignment-alert"></i><span>공지사항</span></a></li>
                  <li><a href="notice-list.php"><i class="icon mdi mdi-assignment"></i><span>일반 게시판</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <colgroup>
                        <col class="c10">
                        <col class="c60">
                        <col class="c10">
                        <col class="c20">
                    </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">번호</th>
                          <th scope="col">제목</th>
                          <th scope="col">조회수</th>
                          <th scope="col">작성일</th>
                        </tr>
                      </thead>
                      <tbody>
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
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>