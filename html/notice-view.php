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
                  <li><a href="board-list.php"><i class="icon mdi mdi-assignment"></i><span>일반 게시판</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="be-content">

        <div class="main-content container-fluid">
          <div class="email-head">
            <div class="email-head-subject">
              <div class="title"><span>제목</span> 
                <div class="icons"><a href="javascript:history.back()"><i class="icon mdi mdi-mail-reply"></i></a><a href="#"><i class="icon mdi mdi-print"></i></a><a href="#"><i class="icon mdi mdi-delete"></i></a></div>
              </div>
            </div>
            <div class="email-head-sender">
              <div class="date">2018.09.13 3:37</div>
              <div class="avatar"><img src="assets/img/avatar3.png" alt="Avatar"></div>
              <div class="sender"><span class="author">배재관</span><span class="author-detail-description">IT innovation. manager</span></div>
            </div>
          </div>
          <div class="email-body">
            <p>Hello,</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
            <p>Regards,<br> Justine Myranda</p>
          </div>
          <div class="email-attachments">
            <div class="title">Attachments <span>(2 files, 16,24 KB)</span></div>
            <ul>
              <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> new-release.zip <span>(5.12 KB)</span></a></li>
              <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> guidelines.pdf <span>(11.3 MB)</span></a></li>
            </ul>
          </div>
          <div class="row invoice-footer mt30">
            <div class="col-lg-12">
              <a href="notice-list.php" class="btn btn-lg btn-space btn-secondary">목록</a>
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