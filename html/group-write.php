<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-divider">권한 설정</div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-sm-2">
                      <label for="group_id">그룹ID</label>
                      <select id="group_id" name="group_id" class="select2 select2-sm">
                        <option value="group1">그룹1</option>
                        <option value="group2">그룹2</option>
                        <option value="group3">그룹3</option>
                        <option value="group4">그룹4</option>
                        <option value="group5">그룹5</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="group_name">그룹명</label>
                      <input class="form-control form-control-sm" id="group_name" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="memo">메모</label>
                      <input class="form-control form-control-sm" id="memo" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="row custom-controls-stacked">
                    <div class="col-sm-2"><label class="custom-control custom-checkbox" for="all_menu"><input id="all_menu" class="custom-control-input check_all" type="checkbox"><span class="custom-control-label">모든 메뉴</span></label></div>
                    <div class="col-sm-10" id="all_menu_list">
                      <div class="row">
                        <div class="col-sm-2"><label class="custom-control custom-checkbox" for="m_id_all"><input class="custom-control-input c2" id="m_id_all" name="m_id_all" value="*" type="checkbox"><span class="custom-control-label">모든 메뉴</span></label></div>
                        <div class="col-sm-10" id="m_id_all_list">
                          <label class="custom-control custom-checkbox" for="m_id_all_R"><input class="custom-control-input c3" id="m_id_all_R" name="m_id_all_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="m_id_all_C"><input class="custom-control-input c3" id="m_id_all_C" name="m_id_all_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="m_id_all_D"><input class="custom-control-input c3" id="m_id_all_D" name="m_id_all_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-divider"></div>

                  <div class="row custom-controls-stacked">
                    <div class="col-sm-2"><label class="custom-control custom-checkbox" for="M_ID_00001"><input id="M_ID_00001" class="check_all custom-control-input" type="checkbox"><span class="custom-control-label">환경설정</span></label></div>
                    <div class="col-sm-10" id="M_ID_00001_list">
                      <div class="row">
                        <div class="col-sm-2"><label class="custom-control custom-checkbox" for="M_ID_00005"><input class="custom-control-input c2" id="M_ID_00005" name="M_ID_00005" value="1" type="checkbox"><span class="custom-control-label">메뉴관리</span></label></div>
                        <div class="col-sm-10" id="M_ID_00005_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00005_R"><input class="custom-control-input c3" id="M_ID_00005_R" name="M_ID_00005_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00005_C"><input class="custom-control-input c3" id="M_ID_00005_C" name="M_ID_00005_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00005_D"><input class="custom-control-input c3" id="M_ID_00005_D" name="M_ID_00005_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2"><label class="custom-control custom-checkbox" for="M_ID_00012"><input class="custom-control-input c2" id="M_ID_00012" name="M_ID_00012" value="1" type="checkbox"><span class="custom-control-label">사용자그룹</span></label></div>
                        <div class="col-sm-10" id="M_ID_00012_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00012_R"><input class="custom-control-input c3" id="M_ID_00012_R" name="M_ID_00012_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00012_C"><input class="custom-control-input c3" id="M_ID_00012_C" name="M_ID_00012_C" value="2" type="checkbox"><span class="custom-control-label">
                        등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00012_D"><input class="custom-control-input c3" id="M_ID_00012_D" name="M_ID_00012_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00013"><input class="custom-control-input c2" id="M_ID_00013" name="M_ID_00013" value="1" type="checkbox"><span class="custom-control-label">계정관리</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00013_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00013_R"><input class="custom-control-input c3" id="M_ID_00013_R" name="M_ID_00013_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00013_C"><input class="custom-control-input c3" id="M_ID_00013_C" name="M_ID_00013_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00013_D"><input class="custom-control-input c3" id="M_ID_00013_D" name="M_ID_00013_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00014"><input class="custom-control-input c2" id="M_ID_00014" name="M_ID_00014" value="1" type="checkbox"><span class="custom-control-label">공통코드</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00014_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00014_R"><input class="custom-control-input c3" id="M_ID_00014_R" name="M_ID_00014_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00014_C"><input class="custom-control-input c3" id="M_ID_00014_C" name="M_ID_00014_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00014_D"><input class="custom-control-input c3" id="M_ID_00014_D" name="M_ID_00014_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00025"><input class="custom-control-input c2" id="M_ID_00025" name="M_ID_00025" value="1" type="checkbox"><span class="custom-control-label">매장코드</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00025_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00025_R"><input class="custom-control-input c3" id="M_ID_00025_R" name="M_ID_00025_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00025_C"><input class="custom-control-input c3" id="M_ID_00025_C" name="M_ID_00025_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00025_D"><input class="custom-control-input c3" id="M_ID_00025_D" name="M_ID_00025_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00028"><input class="custom-control-input c2" id="M_ID_00028" name="M_ID_00028" value="1" type="checkbox"><span class="custom-control-label">상품카테고리</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00028_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00028_R"><input class="custom-control-input c3" id="M_ID_00028_R" name="M_ID_00028_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00028_C"><input class="custom-control-input c3" id="M_ID_00028_C" name="M_ID_00028_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00028_D"><input class="custom-control-input c3" id="M_ID_00028_D" name="M_ID_00028_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00015"><input class="custom-control-input c2" id="M_ID_00015" name="M_ID_00015" value="1" type="checkbox"><span class="custom-control-label">상품코드</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00015_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00015_R"><input class="custom-control-input c3" id="M_ID_00015_R" name="M_ID_00015_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00015_C"><input class="custom-control-input c3" id="M_ID_00015_C" name="M_ID_00015_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00015_D"><input class="custom-control-input c3" id="M_ID_00015_D" name="M_ID_00015_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00029"><input class="custom-control-input c2" id="M_ID_00029" name="M_ID_00029" value="1" type="checkbox"><span class="custom-control-label">상품코드매핑</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00029_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00029_R"><input class="custom-control-input c3" id="M_ID_00029_R" name="M_ID_00029_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00029_C"><input class="custom-control-input c3" id="M_ID_00029_C" name="M_ID_00029_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00029_D"><input class="custom-control-input c3" id="M_ID_00029_D" name="M_ID_00029_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00016"><input class="custom-control-input c2" id="M_ID_00016" name="M_ID_00016" value="1" type="checkbox"><span class="custom-control-label">사업영역코드</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00016_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00016_R"><input class="custom-control-input c3" id="M_ID_00016_R" name="M_ID_00016_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00016_C"><input class="custom-control-input c3" id="M_ID_00016_C" name="M_ID_00016_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00016_D"><input class="custom-control-input c3" id="M_ID_00016_D" name="M_ID_00016_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00017"><input class="custom-control-input c2" id="M_ID_00017" name="M_ID_00017" value="1" type="checkbox"><span class="custom-control-label">회사코드</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00017_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00017_R"><input class="custom-control-input c3" id="M_ID_00017_R" name="M_ID_00017_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00017_C"><input class="custom-control-input c3" id="M_ID_00017_C" name="M_ID_00017_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00017_D"><input class="custom-control-input c3" id="M_ID_00017_D" name="M_ID_00017_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-divider"></div>

                  <div class="row custom-controls-stacked">
                    <div class="col-sm-2">
                      <label class="custom-control custom-checkbox" for="M_ID_00006"><input id="M_ID_00006" class="check_all custom-control-input" type="checkbox"><span class="custom-control-label">게시판</span></label>
                    </div>
                    <div class="col-sm-10" id="M_ID_00006_list">
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00007"><input class="custom-control-input c2" id="M_ID_00007" name="M_ID_00007" value="1" type="checkbox"><span class="custom-control-label">공지사항</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00007_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00007_R"><input class="custom-control-input c3" id="M_ID_00007_R" name="M_ID_00007_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00007_C"><input class="custom-control-input c3" id="M_ID_00007_C" name="M_ID_00007_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00007_D"><input class="custom-control-input c3" id="M_ID_00007_D" name="M_ID_00007_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00008"><input class="custom-control-input c2" id="M_ID_00008" name="M_ID_00008" value="1" type="checkbox"><span class="custom-control-label">일반게시판</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00008_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00008_R"><input class="custom-control-input c3" id="M_ID_00008_R" name="M_ID_00008_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00008_C"><input class="custom-control-input c3" id="M_ID_00008_C" name="M_ID_00008_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00008_D"><input class="custom-control-input c3" id="M_ID_00008_D" name="M_ID_00008_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-divider"></div>

                  <div class="row custom-controls-stacked">
                    <div class="col-sm-2">
                      <label class="custom-control custom-checkbox" for="M_ID_00009"><input id="M_ID_00009" class="check_all custom-control-input" type="checkbox"><span class="custom-control-label">매출데이터</span></label>
                    </div>
                    <div class="col-sm-10" id="M_ID_00009_list">
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00018"><input class="custom-control-input c2" id="M_ID_00018" name="M_ID_00018" value="1" type="checkbox"><span class="custom-control-label">Overview</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00018_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00018_R"><input class="custom-control-input c3" id="M_ID_00018_R" name="M_ID_00018_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00018_C"><input class="custom-control-input c3" id="M_ID_00018_C" name="M_ID_00018_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00018_D"><input class="custom-control-input c3" id="M_ID_00018_D" name="M_ID_00018_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00022"><input class="custom-control-input c2" id="M_ID_00022" name="M_ID_00022" value="1" type="checkbox"><span class="custom-control-label">매출종합</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00022_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00022_R"><input class="custom-control-input c3" id="M_ID_00022_R" name="M_ID_00022_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00022_C"><input class="custom-control-input c3" id="M_ID_00022_C" name="M_ID_00022_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00022_D"><input class="custom-control-input c3" id="M_ID_00022_D" name="M_ID_00022_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00023"><input class="custom-control-input c2" id="M_ID_00023" name="M_ID_00023" value="1" type="checkbox"><span class="custom-control-label">공식몰매출(상품별)</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00023_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00023_R"><input class="custom-control-input c3" id="M_ID_00023_R" name="M_ID_00023_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00023_C"><input class="custom-control-input c3" id="M_ID_00023_C" name="M_ID_00023_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00023_D"><input class="custom-control-input c3" id="M_ID_00023_D" name="M_ID_00023_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00024"><input class="custom-control-input c2" id="M_ID_00024" name="M_ID_00024" value="1" type="checkbox"><span class="custom-control-label">외부몰매출(상품별)</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00024_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00024_R"><input class="custom-control-input c3" id="M_ID_00024_R" name="M_ID_00024_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00024_C"><input class="custom-control-input c3" id="M_ID_00024_C" name="M_ID_00024_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00024_D"><input class="custom-control-input c3" id="M_ID_00024_D" name="M_ID_00024_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00031"><input class="custom-control-input c2" id="M_ID_00031" name="M_ID_00031" value="1" type="checkbox"><span class="custom-control-label">상품별 매출 일괄등록</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00031_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00031_R"><input class="custom-control-input c3" id="M_ID_00031_R" name="M_ID_00031_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00031_C"><input class="custom-control-input c3" id="M_ID_00031_C" name="M_ID_00031_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00031_D"><input class="custom-control-input c3" id="M_ID_00031_D" name="M_ID_00031_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-divider"></div>

                  <div class="row custom-controls-stacked">
                    <div class="col-sm-2">
                      <label class="custom-control custom-checkbox" for="M_ID_00019"><input id="M_ID_00019" class="check_all custom-control-input" type="checkbox"><span class="custom-control-label">매체데이터</span></label>
                    </div>
                    <div class="col-sm-10" id="M_ID_00019_list">
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00021"><input class="custom-control-input c2" id="M_ID_00021" name="M_ID_00021" value="1" type="checkbox"><span class="custom-control-label">Overview</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00021_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00021_R"><input class="custom-control-input c3" id="M_ID_00021_R" name="M_ID_00021_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00021_C"><input class="custom-control-input c3" id="M_ID_00021_C" name="M_ID_00021_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00021_D"><input class="custom-control-input c3" id="M_ID_00021_D" name="M_ID_00021_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-2">
                          <label class="custom-control custom-checkbox" for="M_ID_00027"><input class="custom-control-input c2" id="M_ID_00027" name="M_ID_00027" value="1" type="checkbox"><span class="custom-control-label">ROAS 데이터 일괄등록</span></label>
                        </div>
                        <div class="col-sm-10" id="M_ID_00027_list">
                          <label class="custom-control custom-checkbox" for="M_ID_00027_R"><input class="custom-control-input c3" id="M_ID_00027_R" name="M_ID_00027_R" value="1" type="checkbox"><span class="custom-control-label">조회</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00027_C"><input class="custom-control-input c3" id="M_ID_00027_C" name="M_ID_00027_C" value="2" type="checkbox"><span class="custom-control-label">등록/수정</span></label>
                          <label class="custom-control custom-checkbox" for="M_ID_00027_D"><input class="custom-control-input c3" id="M_ID_00027_D" name="M_ID_00027_D" value="4" type="checkbox"><span class="custom-control-label">삭제</span></label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="row invoice-footer">
            <div class="col-lg-12">
              <button type="submit" onclick="" class="btn btn-lg btn-space btn-primary">등록</button>
              <button type="submit" onclick="" class="btn btn-lg btn-space btn-danger">삭제</button>
              <button type="submit" onclick="javascript:history.back()" class="btn btn-lg btn-space btn-secondary">목록</button>
            </div>
          </div>
        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- form -->
    <script src="/assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="/assets/lib/select2/js/select2.min.js"></script>
    <script src="/assets/lib/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/app-mail-compose.js"></script>
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="/assets/js/app-form-elements.js"></script>

    <!-- Select Filter -->
    <script src="/assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.booking();
      });
    </script>


    <script>
      $(document).ready(function(){

          $(document).on('click', '.check_all, .c2', function(e){
              var area = $(this).attr("id");
              if( $(this).is(":checked") ){
                  $("#"+area+"_list").find(":input[type=checkbox]").each(function(){
                      $(this).prop("checked", true);
                  });
              }else{
                  $("#"+area+"_list").find(":input[type=checkbox]").each(function(){
                      $(this).prop("checked", false);
                  });
              }
          });

      });

      //-->
    </script>

  </body>
</html>