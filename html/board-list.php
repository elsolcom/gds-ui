<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">일반 게시판</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">게시판</li>
              <li class="breadcrumb-item active">일반 게시판</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <colgroup>
                        <col class="c20">
                        <col class="">
                        <col class="c15">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Subject</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar6.png" alt="Avatar"><span>강문식</span><span class="cell-detail-description">IT innovation. Team Leader</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span><span class="cell-detail-description">8:30</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar5.png" alt="Avatar"><span>차명건</span><span class="cell-detail-description">IT innovation. manager</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Left sidebar adjusments</span><span class="cell-detail-description">Back-end Manager</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span><span class="cell-detail-description">10:00</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar3.png" alt="Avatar"><span>정다희</span><span class="cell-detail-description">IT innovation. manager</span></td>
                          <td class="cell-detail"><a href="board-view.php">span>Topbar dropdown style</span><span class="cell-detail-description">Bootstrap Admin</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span><span class="cell-detail-description">17:24</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar.png" alt="Avatar"><span>윤혜란</span><span class="cell-detail-description">IT innovation. manager</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Right sidebar adjusments</span><span class="cell-detail-description">CLI Connector</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span><span class="cell-detail-description">13:02</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar4.png" alt="Avatar"><span>배재관</span><span class="cell-detail-description">IT innovation. manager</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Main structure markup</span><span class="cell-detail-description">CLI Connector</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span><span class="cell-detail-description">14:45</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row invoice-footer">
            <div class="col-lg-12"> <a href="board-write.php" class="btn btn-lg btn-space btn-primary">등록</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- be-wrapper --> 
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