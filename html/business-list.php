<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="be-aside-header">
            <div class="row justify_end">
              <div class="col-lg-6">
              </div>
              <div class="col-lg-6">
                <div class="be-aside-header-search">
                  <div class="input-group input-search input-group-sm">
                    <input class="form-control" type="text" placeholder="Search"><span class="input-group-btn"><button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
                  </div>
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
                            <col class="c40">
                            <col class="c5">
                            <col class="c10">
                            <col class="c15">
                            <col class="c10">
                        </colgroup>
                        <thead>
                            <tr onClick = " location.href='business-write.php' ">
                                <th scope="col">번호</th>
                                <th scope="col">코드</th>
                                <th scope="col">이름</th>
                                <th scope="col">사용</th>
                                <th scope="col">삭제</th>
                                <th scope="col">그로스데이터반영여부</th>
                                <th scope="col">등록일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>50</td>
                                <td>@direct</td>
                                <td>direct for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>49</td>
                                <td>@google</td>
                                <td>google for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>48</td>
                                <td>@daum</td>
                                <td>daum for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>47</td>
                                <td>@naver</td>
                                <td>naver for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>46</td>
                                <td>@tx</td>
                                <td>AC for GA, (구)tx</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>45</td>
                                <td>@mobon</td>
                                <td>mobon for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>44</td>
                                <td>@facebook</td>
                                <td>facebook for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>43</td>
                                <td>@da_gdn</td>
                                <td>gdnDA for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>42</td>
                                <td>@sa_google</td>
                                <td>googleSA for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
                            </tr>
                            <tr onClick = " location.href='business-write.php' ">
                                <td>41</td>
                                <td>@da_daum</td>
                                <td>daumDA for GA</td>
                                <td>사용</td>
                                <td>노출</td>
                                <td>사용안함</td>
                                <td>2018-07-30 09:35:27</td>
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
              <a href="business-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
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