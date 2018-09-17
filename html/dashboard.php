<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
                <div class="chart sparkline" id="spark1"></div>
                <div class="data-info">
                  <div class="desc">New Users</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="113">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
                <div class="chart sparkline" id="spark2"></div>
                <div class="data-info">
                  <div class="desc">Monthly Sales</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="80" data-suffix="%">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
                <div class="chart sparkline" id="spark3"></div>
                <div class="data-info">
                  <div class="desc">Impressions</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="532">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
                <div class="chart sparkline" id="spark4"></div>
                <div class="data-info">
                  <div class="desc">Downloads</div>
                  <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span class="number" data-toggle="counter" data-end="113">0</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  <div class="tools">
                    <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="icon mdi mdi-more-vert d-inline-block d-md-none"></span></a>
                      <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Week</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Year</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Today</a>
                      </div>
                    </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                  </div>
                  <div class="button-toolbar d-none d-md-block">
                    <div class="btn-group">
                      <button class="btn btn-secondary" type="button">Week</button>
                      <button class="btn btn-secondary active" type="button">Month</button>
                      <button class="btn btn-secondary" type="button">Year</button>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-secondary" type="button">Today</button>
                    </div>
                  </div><span class="title">Recent Movement</span>
                </div>
                <div class="widget-chart-container">
                  <div class="widget-chart-info">
                    <ul class="chart-legend-horizontal">
                      <li><span data-color="main-chart-color1"></span> Purchases</li>
                      <li><span data-color="main-chart-color2"></span> Plans</li>
                      <li><span data-color="main-chart-color3"></span> Services</li>
                    </ul>
                  </div>
                  <div class="widget-counter-group widget-counter-group-right">
                    <div class="counter counter-big">
                      <div class="value">25%</div>
                      <div class="desc">Purchase</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Plans</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Services</div>
                    </div>
                  </div>
                  <div id="main-chart" style="height: 260px;"></div>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://-www.w3.org/2000/svg">
                    <circle class="circle" fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card card-table">
                <div class="card-header">
                  <div class="title">공지사항</div>
                </div>
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
                            <td>1</td>
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
                            <td>3</td>
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
                            <td>5</td>
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
            <div class="col-sm-6">
              <div class="card card-table">
                <div class="card-header">
                  <div class="title">일반 게시판</div>
                </div>
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
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar6.png" alt="Avatar"><span>강문식</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar5.png" alt="Avatar"><span>차명건</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Left sidebar adjusments</span><span class="cell-detail-description">Back-end Manager</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar3.png" alt="Avatar"><span>정다희</span></td>
                          <td class="cell-detail"><a href="board-view.php">span>Topbar dropdown style</span><span class="cell-detail-description">Bootstrap Admin</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar.png" alt="Avatar"><span>윤혜란</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Right sidebar adjusments</span><span class="cell-detail-description">CLI Connector</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span></td>
                        </tr>
                        <tr>
                          <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar4.png" alt="Avatar"><span>배재관</span></td>
                          <td class="cell-detail"><a href="board-view.php"><span>Main structure markup</span><span class="cell-detail-description">CLI Connector</span></a></td>
                          <td class="cell-detail"><span>2018.09.13</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- dashboard -->
    <script src="assets/lib/jquery-flot/jquery.flot.js"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/lib/countup/countUp.min.js"></script>
    <script src="assets/js/app-dashboard.js"></script>
  </body>
</html>