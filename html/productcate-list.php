<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="card">
            <div class="row">
              <div class="col-sm-2 pr-0">
                <select id="biz_area" name="biz_area" class="select2 select2-sm col-sm-2">
                  <option value="">전체</option>
                  <option value="BRD">블랑드</option>
                  <option value="COS">코스메리트</option>
                  <option value="JMU">진마유</option>
                  <option value="KMZ">카마존</option>
                  <option value="MELIKE">난이거</option>
                  <option value="NBR">누벨르</option>
                  <option value="RETTEB">리탭</option>
                  <option value="YS">영시</option>
                </select>
              </div>
              <div class="col-sm-10 pl-0">
              <div class="input-group input-search input-group-sm">
                <input class="form-control" type="text" placeholder="Search"><span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
              </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <colgroup>
                          <col class="c5">
                          <col class="c10">
                          <col class="c65">
                          <col class="c5">
                          <col class="c10">
                      </colgroup>
                      <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">브랜드</th>
                            <th scope="col">이름</th>
                            <th scope="col">삭제</th>
                            <th scope="col">등록일</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1403</td>
                            <td>난이거</td>
                            <td>GA CLP_campaign_CONTENT</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1402</td>
                            <td>난이거</td>
                            <td>GA GROWTH_campaign</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1401</td>
                            <td>난이거</td>
                            <td>GA GROWTH_medium</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1303</td>
                            <td>블랑드</td>
                            <td>GA CLP_campaign_CONTENT</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1302</td>
                            <td>블랑드</td>
                            <td>GA GROWTH_campaign</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1301</td>
                            <td>블랑드</td>
                            <td>GA GROWTH_medium</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1203</td>
                            <td>영시</td>
                            <td>GA CLP_campaign_CONTENT</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1202</td>
                            <td>영시</td>
                            <td>GA GROWTH_campaign</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1201</td>
                            <td>영시</td>
                            <td>GA GROWTH_medium</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
                        </tr>
                        <tr onClick = " location.href='productcate-write.php' ">
                            <td>1103</td>
                            <td>진마유</td>
                            <td>GA CLP_campaign_CONTENT</td>
                            <td>노출</td>
                            <td>2018-07-30 09:37:11</td>
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
              <a href="productcate-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
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

    <!-- Select Filter -->
    <script src="assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
        App.init();
      	App.booking();
      });
    </script>
  </body>
</html>