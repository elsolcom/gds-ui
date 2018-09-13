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
          <div class="email-head">
            <div class="email-head-title">새 공지사항 작성<span class="icon mdi mdi-edit"></span></div>
          </div>
          <div class="email-compose-fields">
            <div class="to">
              <div class="form-group row pt-0">
                <label class="col-md-1 control-label">To:</label>
                <div class="col-md-11">
                  <select class="tags" multiple="">
                    <option value="1" selected="">Yellow</option>
                    <option value="2" selected="">Violet</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="to cc">
              <div class="form-group row pt-2">
                <label class="col-md-1 control-label">Cc</label>
                <div class="col-md-11">
                  <select class="tags" multiple="">
                    <option value="1" selected="">Colorado</option>
                    <option value="2" selected="">Arkansas</option>
                    <option value="3" selected="">Nevada</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="subject">
              <div class="form-group row pt-2">
                <label class="col-md-1 control-label">Subject</label>
                <div class="col-md-11">
                  <input class="form-control" type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="email editor">
            <div id="email-editor"></div>
          </div>
          <div class="row invoice-footer mt30">
            <div class="col-lg-12">
              <a href="javascript:history.back()" class="btn btn-lg btn-space btn-secondary">취소</a>
              <button type="submit" class="btn btn-lg btn-space btn-primary">등록</button>
            </div>
          </div>
        </div>

      </div>

    </div><!-- be-wrapper -->
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>

    <script src="assets/lib/summernote/summernote-bs4.min.js" type="text/javascript"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/js/app-mail-compose.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
      });
      
    </script>
  </body>
</html>