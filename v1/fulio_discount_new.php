<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$name_list = "Guest Fulio Discount";
//----------------------------------------------------------------------
require('../main/clerk_security_head_cross.php');
//----------------------------------------------------------------------
?>
<script language="javascript" src="../ajax_new/js/fulio_discount_new_ajax.js"></script>
<script language="javascript">
  function valid() {
    if (document.form1._room1.value.length < 1 || document.form1._room1.value == 0) {
      name_tur43 = document.form1.name_tur43.value;
      alert(name_tur43);
      document.form1._room1.select();
      return false;
    }
    if (document.form1._regs.value.length < 1 || document.form1._regs.value == 0) {
      name_tur54 = document.form1.name_tur54.value;
      alert(name_tur54);
      document.form1._room1.select();
      return false;
    }
    var _amnt = document.form1._amnt.value;
    _amnt = _amnt.replace(',', '');
    _amnt = _amnt.replace(',', '');
    _amnt = _amnt.replace(',', '');
    _amnt = _amnt.replace(',', '');
    if (_amnt.length < 1 || _amnt == 0) {
      name_tur55 = document.form1.name_tur55.value;
      alert(name_tur55);

      document.form1._amnt.select();
      return false;
    }
    if (_amnt < 0) {
      alert("مبلغ نباید منفی باشد");
      document.form1._amnt.select();
      return false;
    }
    var _D4 = parseInt($('#_D4').val());
    if (_D4 == 0) {
      name_tur56 = document.form1.name_tur56.value;
      alert(name_tur56);
      document.form1._D4.focus();
      return false;
    }
    //--------------------
    //------------------
    var date_save = document.form1.date_save.value;
    var date_save_old = '';
    var url = "../ajax_new/php/check_balance_accounting.php";
    $.post(url, {
      date_save: date_save,
      date_save_old: date_save_old
    }, function(data) {
      if (data.result == 'fail') {
        name_tur84 = document.form1.name_tur84.value;
        var res84 = name_tur84.replace("date", date_save);

        name_tur85 = document.form1.name_tur85.value;
        var res85 = name_tur85.replace("number", data.DocumentMasterNum);

        alert(res84 + '\n' + res85);
        document.form1.date_save.focus();
        return false;
      } else {
        valid_select_jquery();
        //--------------------
        document.form1.submit();
      }
    }, "json");
    //------------------
    //--------------------
    //valid_select_jquery();
    //--------------------
    //document.form1.submit();
  }
  //==================
  function tst_room1() {
    var room_D1 = document.form1._D1.value;
    var len_D1 = document.form1._D1.value.length;
    var room_num = document.form1._room1.value;
    var lang_directory = document.form1.lang_directory.value;

    var _dir = document.form1._dir.value;
    var _symbol = document.form1._symbol.value;

    fulio_discount_new_ajax(room_num, room_D1, _dir, _symbol, lang_directory);

    name_doc();
    document.form1._descfar.focus();
  }

  function name_doc() {
    var _d1 = document.form1._D1.value;
    var _d2 = document.form1._D2.value;
    var _room1 = document.form1._room1.value;
    if (_d2 == 0 || _d2 == 2) {
      name_tur57 = document.form1.name_tur57.value;
      txt_rbtfar = name_tur57 + ' ';
      txt_rbtltn = 'Discount';
    } else {
      name_tur58 = document.form1.name_tur58.value;
      txt_rbtfar = name_tur58 + ' ';
      txt_rbtltn = 'Discount Rebate ';
    }
    try {

      switch (_d1) {
        case '1':
          name_tur59 = document.form1.name_tur59.value;
          far_desc = txt_rbtfar + name_tur59;
          ltn_desc = txt_rbtltn + " Accommodation ";
          break;
        case '2':
          name_tur60 = document.form1.name_tur60.value;
          far_desc = txt_rbtfar + name_tur60;
          ltn_desc = txt_rbtltn + "Extra Accommodation";
          break;
        case '3':
          name_tur61 = document.form1.name_tur61.value;
          far_desc = txt_rbtfar + name_tur61;
          ltn_desc = txt_rbtltn + "Tax";
          break;
        case '8':
          name_tur62 = document.form1.name_tur62.value;
          far_desc = txt_rbtfar + name_tur62;
          ltn_desc = txt_rbtltn + " Laundry ";
          break;
        case '30':
          name_tur63 = document.form1.name_tur63.value;
          far_desc = txt_rbtfar + name_tur63;
          ltn_desc = txt_rbtltn + " Restaurant ";
          break;
        case '31':
          name_tur64 = document.form1.name_tur64.value;
          far_desc = txt_rbtfar + name_tur64;
          ltn_desc = txt_rbtltn + " Mini Bar ";
          break;
        case '32':
          name_tur65 = document.form1.name_tur65.value;
          far_desc = txt_rbtfar + name_tur65;
          ltn_desc = txt_rbtltn + " Coffee Shop ";
          break;
        case '33':
          name_tur66 = document.form1.name_tur66.value;
          far_desc = txt_rbtfar + name_tur66;
          ltn_desc = txt_rbtltn + " Room service ";
          break;
        case '34':
          name_tur67 = document.form1.name_tur67.value;
          far_desc = txt_rbtfar + name_tur67;
          ltn_desc = txt_rbtltn + " Banquet ";
          break;
        case '14':
          name_tur68 = document.form1.name_tur68.value;
          far_desc = txt_rbtfar + name_tur68;
          ltn_desc = txt_rbtltn + " Service ";
          break;
        case '15':
          name_tur69 = document.form1.name_tur69.value;
          far_desc = txt_rbtfar + name_tur69;
          ltn_desc = txt_rbtltn + "Long D. Phone";
          break;
        case '16':
          name_tur70 = document.form1.name_tur70.value;
          far_desc = txt_rbtfar + name_tur70;
          ltn_desc = txt_rbtltn + "Fax";
          break;
        case '17':
          name_tur71 = document.form1.name_tur71.value;
          far_desc = txt_rbtfar + name_tur71;
          ltn_desc = txt_rbtltn + "Cabin Phone";
          break;
        case '18':
          name_tur72 = document.form1.name_tur72.value;
          far_desc = txt_rbtfar + name_tur72;
          ltn_desc = txt_rbtltn + "Parking";
          break;
        case '24':
          name_tur73 = document.form1.name_tur73.value;
          far_desc = txt_rbtfar + name_tur73;
          ltn_desc = txt_rbtltn + " BreakFast ";
          break;
        case '25':
          name_tur74 = document.form1.name_tur74.value;
          far_desc = txt_rbtfar + name_tur74;
          ltn_desc = txt_rbtltn + " Miscelaneus ";
          break;
        case '27':
          name_tur75 = document.form1.name_tur75.value;
          far_desc = txt_rbtfar + name_tur75;
          ltn_desc = txt_rbtltn + " Guest Tax";
          break;
        case '28':
          name_tur76 = document.form1.name_tur76.value;
          far_desc = txt_rbtfar + name_tur76;
          ltn_desc = txt_rbtltn + " Guest Service";
          break;
        case '37':
          name_tur77 = document.form1.name_tur77.value;
          far_desc = txt_rbtfar + name_tur77;
          ltn_desc = txt_rbtltn + "Noshow Income";
          break;
        case '43':
          name_tur78 = document.form1.name_tur78.value;
          far_desc = txt_rbtfar + name_tur78;
          ltn_desc = txt_rbtltn + "Extra Person Accommodation";
          break;
        case '44':
          name_tur79 = document.form1.name_tur79.value;
          far_desc = txt_rbtfar + name_tur79;
          ltn_desc = txt_rbtltn + "Extra Person Guest Accommodation";
          break;
        default:
          far_desc = txt_rbtfar;
          ltn_desc = txt_rbtltn;
      }
    } catch (e) {
      console.error("Error : ", e)
    }
    document.form1._descfar.value = far_desc;
    document.form1._descltn.value = ltn_desc;
  }

  //----------------------------------------------------------------------
  function valid_help_room(_cde) {
    window.open('search_all.php?code_id=' + _cde, '_blank', 'width=800,height=600,scrollbars=1');
    document.form1._room1.focus();
  }

  $(document).ready(function() {
    changePossitionFavoriteBox('container_form', -70, 0);
    $("#_room1").on("change", function() {
      const discountType = $("#_D2").val();
      getDiscountsKinds(this.value, null, discountType)
    });

    $("#_regs").on("change", function() {
      const discountType = $("#_D2").val();
      getDiscountsKinds(null, this.value, discountType)
    })

    $("#_D2").on("change", function() {
      getDiscountsKinds($("#_room1").val(), $("#_regs").val(), this.value)
    })

  });
</script>

<style type="text/css">
  #container_form {
    width: 600px;
  }
</style>

<body>
  <?php
  //----------
  $id_menu = 134;
  $clerk_test = 2;
  //-------------------------------------------------
  require('../main/clerk_security_test_connect.php');
  //-------------------------------------------------
  require('../main/get_currdate_connect.php');
  //------------------------------------------
  require_once('../main/number_separator.php');
  //-------------------------------------------

  //--------------------------------------------------------------------------------------------
  $query = "select HotelKind from $database_misc.actualyear where ActualYearID='$actual_year_id'";
  require('../php_databases/run_select_query_new_no_connect.php');
  require_once('../php_databases/run_fetch_array.php');
  $row = fetch_array($result);
  $hotel_kind = $row['HotelKind'];

  $submit_text = '';
  //--------------
  function form1()
  {
    global $submit_text, $date_far, $date_ltn, $_room1, $Active_ClerkID, $_time;
    global $actual_year_id, $hotel_kind;
    global $currency_symbol, $currency_symbol_latin;
    global $_language, $lang_directory, $lang_align;

    require('../main/global_database_link.php');
    require('../main/generate_favorite_box.php');

    require('../language/' . $lang_directory . '/fulio_discount_new_var.php');
    if ($lang_align == '1')
      $currency_symbol = $currency_symbol_latin;

    $name_list = $name_tur1;
    //----------------------------------------------------------
    require_once('../main/clerk_menu_security_get_connect.php');
    if (TestClerkSecurity($Active_ClerkID, 74, 3)) {
      $txt_status = $name_tur38;
      $txt_check = 1;
    } else {
      $txt_status = "";
      $txt_check = 0;
    }
  ?>
    <script type="text/javascript" src="../js/jquery.maskedinput-1.14.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#date_save').mask('0000/00/00', {
          placeholder: "____/__/__"
        });
        $('#date_save_ltn').mask('0000-00-00', {
          placeholder: "____-__-__"
        });
        $('#time_save').mask('00:00:00', {
          placeholder: "__:__:__"
        });
      });
    </script>
    <form name="form1" method="post" action="">
      <div id="container_form">
        <?php
        if ($lang_align == '0') {
        ?>
          <div id="header_form">
            <a href="../help/p24.htm"><img src="<?php echo $css_dir['custom']; ?>help.png" width="25" height="25" style="float: left; padding-left: 5px;" title="Help" /></a>
            <div style="padding: 3px; padding-right: 5px;"> <?php print $name_tur1 ?> </div>
            <div style="clear: both;"></div>
          </div>

          <div id="padd">
            <table id="main_tab_form" border="0">
              <tr>
                <td align="right" colspan="3" nowrap='nowrap'>
                  <?php
                  $query = "select CoddingID,IranianName from codding where CoddingID='26' and DisActivity='0'
            union all
            select DiscountCoddingID,DiscountIranianName from discounts where DisCountActivity='0' and DiscountCoddingID!='0'";
                  require_once('../main/main_combo_box_connect.php');
                  initialize_combo('1', '_D3', 'rtl', $query, 'CoddingID', 'IranianName', '', 1, 'class="right_bold_17"', '');
                  ?></td>
                <td align="left" nowrap='nowrap'><?php print $name_tur2 ?></td>
              </tr>
              <tr>
                <td align="right" colspan="3" nowrap='nowrap'>
                  <select size="1" name="_D2" id="_D2" dir="rtl" tabindex="3" onblur="name_doc();" class='right_bold_17'>
                    <option value="0" <?php if ($_D2 == 0) print "selected"; ?>><?php print $name_tur3 ?></option>
                    <option value="1" <?php if ($_D2 == 1) print "selected"; ?>><?php print $name_tur4 ?></option>
                    <option value="2" <?php if ($_D2 == 2) print "selected"; ?>><?php print $name_tur5 ?></option>
                    <option value="3" <?php if ($_D2 == 3) print "selected"; ?>><?php print $name_tur41 ?></option>
                  </select>
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur37 ?> </td>
              </tr>
              <tr>
                <td align="left" colspan="3" dir='rtl'><?php print $name_tur33 ?><?php if ($txt_check == 0) print "$date_far"; ?></td>
                <td align="left" nowrap='nowrap'>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" nowrap='nowrap' colspan="3">
                  <input type="text" name="_roomname1" id="_roomname1" style="width: 378px;" dir="rtl" maxlength="75" value="<?php print $_roomname1; ?>" class='right_bold_17' readonly="readonly" />
                  <img src='../../images/b_help.png' onclick='valid_help_room(1);' />
                  <input type="text" name="_room1" id="_room1" dispatch-input-event-by-search-all size="10" maxlength="10" dir="rtl" onkeydown="return num_func(this,event)" class="number" onblur="tst_room1();" onfocus="this.select();" value="<?php print $_room1; ?>" tabindex="4" />
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur6 ?></td>
              </tr>
              <tr>
                <td align="right" nowrap='nowrap' colspan="3">
                  <input type="text" name="_roomname2" id="_roomname2" style="width: 470px;" dir="rtl" maxlength="75" value="<?php print $_roomname2; ?>" class='right_bold_17' readonly="readonly" />
                </td>
                <td align="left" nowrap='nowrap'>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" align="right">
                  <?php
                  $query = "select 0 as CoddingID , '' as IranianName";
                  require_once('../main/main_combo_box_connect.php');
                  initialize_combo('1', '_D1', 'rtl', $query, 'CoddingID', 'IranianName', '', 2, 'onblur="name_doc();" class="right_bold_17"', '');
                  ?>
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur35 ?></td>
              </tr>
              <tr>
                <td align="right" colspan="3"><span style="color:#F00000"><b><?php print $txt_status; ?></b></td>
                <td align="left" nowrap='nowrap'>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" nowrap='nowrap' colspan="3">
                  <input type="text" name="_descfar" id="_descfar" style="width: 470px;" dir="rtl" maxlength="75" lang="fa" onfocus="this.select();" value="<?php print $_descfar; ?>" tabindex="5" class='right_bold_17' />
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur8 ?></td>
              </tr>
              <tr>
                <td align="right" nowrap='nowrap' colspan="3">
                  <input type="text" name="_descltn" id="_descltn" style="width: 470px;" dir="ltr" maxlength="75" onfocus="this.select();" value="<?php print $_descltn; ?>" tabindex="6" class='right_bold_17' />
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur9 ?></td>
              </tr>
              <tr>
                <td align="left" colspan="3"><b id="regs_id1"><?php print "$_regs"; ?><?php print $name_tur21 ?></b></td>
                <td align="left" nowrap='nowrap'>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" colspan="1" nowrap='nowrap'>
                  <?php
                  $query = "select * from managers where ManagersDisActivity='0'";
                  require_once('../main/main_combo_box_connect.php');
                  initialize_combo('1', '_D4', 'rtl', $query, 'ManagersID', 'ManagersIranianName', $_D4, 8, 'class="right_bold_17"', ' ');
                  ?></td>
                <td align="left" nowrap='nowrap'><?php print $name_tur10 ?></td>
                </td>
                <td align="right" nowrap='nowrap' colspan="1">
                  <?php print $currency_symbol; ?>
                  <input type="text" name="_amnt" id="_amnt" size="14" maxlength="14" dir="ltr" onkeydown="return num_func(this,event)" class="number" onkeyup="comma(this, event);" onfocus="this.select();" onblur="amnt_text('_amnt','amnt_text');" value="<?php print $_amnt; ?>" tabindex="7" />
                </td>
                <td align="left" nowrap='nowrap'><?php print $name_tur11 ?></td>
              </tr>
              <tr>
                <?php
                if ($hotel_kind == '3') {
                ?>
                  <td align="right" colspan='1'>
                    <?php
                    $query = "select * from fuliodividation order by FulioDividationID";
                    require_once('../main/main_combo_box_connect.php');
                    initialize_combo('1', 'fulio_plan', 'rtl', $query, 'FulioDividationID', 'FulioDividationIranianName', $fulio_plan, 8, 'class="right_bold_17"', '');
                    ?></td>
                  <td align="left" nowrap="nowrap"><?php print $name_tur42; ?></td>
                <?php
                  $_colspan = 1;
                } else
                  $_colspan = 3;

                ?>
                <td align="right" colspan="<?php print $_colspan; ?>"> <span id='amnt_text' style="font-family: MH_NassimBold;">&nbsp;</span>&nbsp; </td>
                <td align="left" nowrap='nowrap'>&nbsp;</td>
              </tr>
              <?php
              if ($txt_status != '') {
                print "<tr>";
                print
                  "<td align='right' colspan='1' nowrap='nowrap'>
                <input type='text' name='date_save' id='date_save' size='10' onfocus='this.select();' dir='ltr' value='" . reverce_date($date_far) . "' tabindex='10'  class='right_bold_17' />
            </td>
            <td align='left' nowrap='nowrap' > $name_tur12</td>
            <td align='right' colspan='1' nowrap='nowrap'>
                <input type='text' name='_regs' id='_regs' size='10' value='$_regs' tabindex='9' class='right_bold_17' />
            </td>
            <td align='left' nowrap='nowrap' > $name_tur13</td>
            </tr>";

                print "
            <tr>
            <td align='right'  colspan='1' nowrap='nowrap' dir='ltr'>
                <input type='text' name='date_save_ltn' id='date_save_ltn' size='10' onfocus='this.select();' value='$date_ltn' tabindex='12'  class='right_bold_17' disabled='disabled' />
            </td>
            <td align='left'  nowrap='nowrap' > $name_tur14</td>
            <td align='right'  colspan='1' nowrap='nowrap' dir='rtl'>
            <input type='text' name='time_save' id='time_save' dir='ltr' size='10' onfocus='this.select();' value='$_time' tabindex='11'  class='right_bold_17' /></td>
            <td align='left'  nowrap='nowrap' > $name_tur15</td>
            </tr>";
              } else {
                print "
            <input type='hidden' name='date_save' id='date_save' value='" . reverce_date($date_far) . "' />
            <input type='hidden' name='_regs' id='_regs' value='$_regs' />
            <input type='hidden' name='date_save_ltn' id='date_save_ltn' value='$date_ltn' />
            <input type='hidden' name='time_save' id='time_save' value='$_time' />";
              }
              ?>
              <tr>
              <?php
            } else {
              ?>
                <div id="header_form">
                  <a href="../help/p24.htm"><img src="<?php echo $css_dir['custom']; ?>help.png" width="25" height="25" style="float: right; padding-right: 5px;" title="Help" /></a>
                  <div style="padding: 3px; padding-left: 5px;text-align:left;"> <?php print $name_tur1 ?> </div>
                  <div style="clear: both;"></div>
                </div>

                <div id="padd">
                  <table id="main_tab_form" dir="rtl" border="0">
                    <tr>
                      <td align="left" colspan="3" nowrap='nowrap'>
                        <?php
                        $query = "select CoddingID,ForeignName from codding where CoddingID='26' and DisActivity='0'
            union all
            select DiscountCoddingID,DiscountIranianName from discounts where DisCountActivity='0' and DiscountCoddingID!='0'";
                        require_once('../main/main_combo_box_connect.php');
                        initialize_combo('1', '_D3', 'ltr', $query, 'CoddingID', 'ForeignName', '', 1, 'class="left_bold_17"', '');
                        ?></td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur2 ?></td>
                    </tr>
                    <tr>
                      <td align="left" colspan="3" nowrap='nowrap'>
                        <select size="1" name="_D2" id="_D2" dir="ltr" tabindex="3" onblur="name_doc();" class='left_bold_17'>
                          <option value="0" <?php if ($_D2 == 0) print "selected"; ?>><?php print $name_tur3 ?></option>
                          <option value="1" <?php if ($_D2 == 1) print "selected"; ?>><?php print $name_tur4 ?></option>
                          <option value="2" <?php if ($_D2 == 2) print "selected"; ?>><?php print $name_tur5 ?></option>
                          <option value="3" <?php if ($_D2 == 3) print "selected"; ?>><?php print $name_tur41 ?></option>
                        </select>
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur37 ?> </td>
                    </tr>
                    <tr>
                      <td align="right" colspan="3" dir='ltr'><?php print $name_tur33 ?><?php if ($txt_check == 0) print "$date_far"; ?></td>
                      <td align="right" nowrap='nowrap'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" nowrap='nowrap' colspan="3">
                        <input type="text" name="_roomname1" id="_roomname1" style="width: 360px;" dir="ltr" maxlength="75" value="<?php print $_roomname1; ?>" class='left_bold_17' readonly="readonly" />
                        <img src='../../images/b_help.png' onclick='valid_help_room(1);' />
                        <input type="text" name="_room1" dispatch-input-event-by-search-all id="_room1" size="10" maxlength="10" dir="ltr" onkeydown="return num_func(this,event)" class="left_bold_17" onblur="tst_room1();" onfocus="this.select();" value="<?php print $_room1; ?>" tabindex="4" />
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur6 ?></td>
                    </tr>
                    <tr>
                      <td align="left" nowrap='nowrap' colspan="3">
                        <input type="text" name="_roomname2" id="_roomname2" style="width: 470px;" dir="ltr" maxlength="75" value="<?php print $_roomname2; ?>" class='left_bold_17' readonly="readonly" />
                      </td>
                      <td align="right" nowrap='nowrap'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" colspan="3">
                        <?php
                        $query = "select 0 as CoddingID, '' as ForeignName";
                        require_once('../main/main_combo_box_connect.php');
                        initialize_combo('1', '_D1', 'ltr', $query, 'CoddingID', 'ForeignName', '', 2, 'onblur="name_doc();" class="left_bold_17"', '');
                        ?>
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur35 ?></td>
                    </tr>
                    <tr>
                      <td align="left" colspan="3"><span style="color:#F00000"><b><?php print $txt_status; ?></b></td>
                      <td align="right" nowrap='nowrap'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" nowrap='nowrap' colspan="3">
                        <input type="text" name="_descfar" id="_descfar" style="width: 470px;" dir="ltr" maxlength="75" onfocus="this.select();" value="<?php print $_descfar; ?>" tabindex="5" class='left_bold_17' />
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur8 ?></td>
                    </tr>
                    <tr>
                      <td align="left" nowrap='nowrap' colspan="3">
                        <input type="text" name="_descltn" id="_descltn" style="width: 470px;" dir="rtl" maxlength="75" onfocus="this.select();" value="<?php print $_descltn; ?>" tabindex="6" class='left_bold_17' />
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur9 ?></td>
                    </tr>
                    <tr>
                      <td align="right" colspan="3"><b id="regs_id1"><?php print "$_regs"; ?><?php print $name_tur21 ?></b></td>
                      <td align="right" nowrap='nowrap'>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" colspan="1" nowrap='nowrap'>
                        <?php
                        $query = "select * from managers where ManagersDisActivity='0'";
                        require_once('../main/main_combo_box_connect.php');
                        initialize_combo('1', '_D4', 'ltr', $query, 'ManagersID', 'ManagersForeignName', $_D4, 8, 'class="left_bold_17"', ' ');
                        ?></td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur10 ?></td>
                      </td>
                      <td align="left" nowrap='nowrap' colspan="1">
                        <?php print $currency_symbol_latin; ?>
                        <input type="text" name="_amnt" id="_amnt" size="14" maxlength="14" dir="ltr" onkeydown="return num_func(this,event)" class="left_bold_17" onkeyup="comma(this, event);" onfocus="this.select();" value="<?php print $_amnt; ?>" tabindex="7" />
                      </td>
                      <td align="right" nowrap='nowrap'><?php print $name_tur11 ?></td>
                    </tr>
                    <tr>
                      <?php
                      if ($hotel_kind == '3') {
                      ?>
                        <td align="left" colspan='1'>
                          <?php
                          $query = "select * from fuliodividation order by FulioDividationID";
                          require_once('../main/main_combo_box_connect.php');
                          initialize_combo('1', 'fulio_plan', 'ltr', $query, 'FulioDividationID', 'FulioDividationForeignName', $fulio_plan, 8, 'class="right_bold_17"', '');
                          ?></td>
                        <td align="right" nowrap="nowrap"><?php print $name_tur42; ?></td>
                      <?php
                        $_colspan = 1;
                      } else
                        $_colspan = 3;

                      ?>
                      <td align="right" colspan="<?php print $_colspan; ?>"> <span id='amnt_text' style="font-family: MH_NassimBold;">&nbsp;</span>&nbsp; </td>
                      <td align="right" nowrap="nowrap">&nbsp;</td>
                    </tr>
                    <?php
                    if ($txt_status != '') {
                      print
                        "<tr>";
                      print
                        "<td align='left' colspan='1' nowrap='nowrap'>
                <input type='text' name='date_save' id='date_save' size='10' onfocus='this.select();' dir='ltr' value='" . reverce_date($date_far) . "' tabindex='10'  class='left_bold_17' disabled='disabled'/>
            </td>
            <td align='right' nowrap='nowrap' > $name_tur12</td>
            <td align='left' colspan='1' nowrap='nowrap'>
                <input type='text' name='_regs' id='_regs' size='10' value='$_regs' tabindex='9' class='left_bold_17' />
            </td>
            <td align='right' nowrap='nowrap' > $name_tur13</td>
            </tr>";

                      print "
            <tr>
            <td align='left'  colspan='1' nowrap='nowrap' dir='ltr'>
                <input type='text' name='date_save_ltn' id='date_save_ltn' size='10' onfocus='this.select();' value='$date_ltn' tabindex='12'  class='left_bold_17' />
            </td>
            <td align='right'  nowrap='nowrap' > $name_tur14</td>
            <td align='left'  colspan='1' nowrap='nowrap' dir='ltr'>
            <input type='text' name='time_save' id='time_save' dir='ltr' size='10' onfocus='this.select();' value='$_time' tabindex='11'  class='left_bold_17' /></td>
            <td align='right'  nowrap='nowrap' > $name_tur15</td>
            </tr>";
                    } else {
                      print "
            <input type='hidden' name='date_save' id='date_save' value='" . reverce_date($date_far) . "' />
            <input type='hidden' name='_regs' id='_regs' value='$_regs' />
            <input type='hidden' name='date_save_ltn' id='date_save_ltn' value='$date_ltn' />
            <input type='hidden' name='time_save' id='time_save' value='$_time' />";
                    }
                    ?>
                    <tr>
                    <?php
                  }
                    ?>
                    <td align="center" height="30" colspan="5">
                      <input type="button" class="btn" name="action" id="action" value="<?php print $name_tur ?>" onclick="valid();" style="" tabindex="13" />

                      <input type="hidden" name="beensubmited" value="true" />

                      <input type="hidden" name="_rate1" id="_rate1" value="0" />
                      <input type="hidden" name="_rate2" id="_rate2" value="0" />
                      <input type="hidden" name="_tax" id="_tax" value="0" />
                      <input type="hidden" name="_srvc" id="_srvc" value="0" />
                      <input type="hidden" name="_parking" id="_parking" value="0" />
                      <input type="hidden" name="_breakf" id="_break" value="0" />
                      <input type="hidden" name="_num" id="_num" value="0" />
                      <input type="hidden" name="_tour" id="_tour" value="0" />
                      <input type="hidden" name="test_valid" id="test_valid" value="0" />
                      <input type="hidden" name="main_tour_rial" id="main_tour_rial" value="0" />
                      <input type="hidden" name="main_gust_rial" id="main_gust_rial" value="0" />
                      <input type="hidden" name="kind_tax_service_amnt" id="kind_tax_service_amnt" value="<?php print $kind_tax_service_amnt; ?>" />
                      <input type="hidden" name="main_amnt" id="main_amnt" value="0" />
                      <input type="hidden" name="txt_check" id="txt_check" value="<?php print $txt_check; ?>" />
                      <input type="hidden" name="rdf_id" id="rdf_id" value="<?php print $rdf_id; ?>" />
                      <input type="hidden" name="Full_Board_Food_Rate" id="Full_Board_Food_Rate" value="<?php print $Full_Board_Food_Rate; ?>" />
                      <input type="hidden" name="_dir" id="_dir" value="0" />
                      <input type="hidden" name="_symbol" id="_symbol" value="<?php print $currency_symbol; ?>" />

                      <input type="hidden" name="full_board" id="full_board" value="<?php print $full_board; ?>" />
                      <input type="hidden" name="rate_tour_calc_status" id="rate_tour_calc_status" value="<?php print $rate_tour_calc_status; ?>" />
                      <input type="hidden" name="Full_Board_Tax_Rate" id="Full_Board_Tax_Rate" value="<?php print $Full_Board_Tax_Rate; ?>" />
                      <input type="hidden" name="Full_Board_Service_Rate" id="Full_Board_Service_Rate" value="<?php print $Full_Board_Service_Rate; ?>" />

                      <input type="hidden" name="lang_directory" value="<?php print $lang_directory; ?>" />

                      <input type="hidden" name="name_tur43" value="<?php print $name_tur43; ?>" />
                      <input type="hidden" name="name_tur44" value="<?php print $name_tur44; ?>" />
                      <input type="hidden" name="name_tur45" value="<?php print $name_tur45; ?>" />
                      <input type="hidden" name="name_tur46" value="<?php print $name_tur46; ?>" />
                      <input type="hidden" name="name_tur47" value="<?php print $name_tur47; ?>" />
                      <input type="hidden" name="name_tur48" value="<?php print $name_tur48; ?>" />
                      <input type="hidden" name="name_tur49" value="<?php print $name_tur49; ?>" />
                      <input type="hidden" name="name_tur50" value="<?php print $name_tur50; ?>" />
                      <input type="hidden" name="name_tur51" value="<?php print $name_tur51; ?>" />
                      <input type="hidden" name="name_tur52" value="<?php print $name_tur52; ?>" />
                      <input type="hidden" name="name_tur53" value="<?php print $name_tur53; ?>" />
                      <input type="hidden" name="name_tur54" value="<?php print $name_tur54; ?>" />
                      <input type="hidden" name="name_tur55" value="<?php print $name_tur55; ?>" />
                      <input type="hidden" name="name_tur56" value="<?php print $name_tur56; ?>" />
                      <input type="hidden" name="name_tur57" value="<?php print $name_tur57; ?>" />
                      <input type="hidden" name="name_tur58" value="<?php print $name_tur58; ?>" />
                      <input type="hidden" name="name_tur59" value="<?php print $name_tur59; ?>" />
                      <input type="hidden" name="name_tur60" value="<?php print $name_tur60; ?>" />
                      <input type="hidden" name="name_tur61" value="<?php print $name_tur61; ?>" />
                    </td>
                    </tr>
                  </table>
                </div>
          </div>
    </form>
    <script type="text/javascript">
      document.form1._D1.focus();
    </script>
  <?php
  }
  //--------------------------------------
  function save_new_room1($Active_ClerkID)
  {
    global $date_far, $date_ltn, $submit_text;
    global $_time, $id_menu, $clerk_test, $name_list;
    global $actual_year_id, $hotel_kind;
    global $kind_tax_service_amnt, $auto_tax_chrg, $number_tax, $number_srvc;
    require('../main/global_database_link.php');

    global $_language, $lang_directory, $lang_align;
    require('../language/' . $lang_directory . '/fulio_discount_new_var.php');

    if ($lang_align == '0') {
      if ($_POST['date_save'] != '')
        $_POST['date_save'] = reverce_date($_POST['date_save'], true);

      $mm = jalali_to_gregorian(substr($_POST['date_save'], 6, 4), substr($_POST['date_save'], 3, 2), substr($_POST['date_save'], 0, 2));
      if (strlen($mm[1]) < 2)
        $mm[1] = "0" . $mm[1];
      if (strlen($mm[2]) < 2)
        $mm[2] = "0" . $mm[2];

      $_POST['date_save_ltn'] = "$mm[0]-$mm[1]-$mm[2]";
    } else {
      $date_save_ltn = $_POST['date_save_ltn'];
      $year_ltn = substr($date_save_ltn, 0, 4);
      $month_ltn = substr($date_save_ltn, 5, 2);
      $day_ltn  = substr($date_save_ltn, 8, 2);

      $mm = gregorian_to_jalali($year_ltn, $month_ltn, $day_ltn);
      if (strlen($mm[1]) < 2)
        $mm[1] = "0" . $mm[1];
      if (strlen($mm[2]) < 2)
        $mm[2] = "0" . $mm[2];

      $_POST['date_save'] = "$mm[2]/$mm[1]/$mm[0]";
    }

    //------------------------------------- check the discount codding 
    require_once('../helpers/fulio_helper.php');

    $RoomNumber = $_POST['_room1'] ?? null;
    $RegisterID = $_POST['_regs'] ?? null;
    $coddingID = $_POST['_D1'];
    $discountKind = $_POST['_D2'];
    $discountAmount = (float)str_replace(',', '', $_POST['_amnt']);
    if ($discountKind == 0 || $discountKind == 1) {
      $discountType = 2;
    } else {
      $discountType = 1;
    }

    $coddings = getRoomIncomeCodding($RoomNumber, $RegisterID, $discountType);
    $coddings = array_column($coddings, "CoddingID");

    if (empty($discountAmount)) {
      echo $lang_align == 0 ? "<div align='center'><b>مبلغ تخفیف نمی تواند صفر باشد </b></div>" :
        "<div align='center'><b>The discount amount can not be zero</b></div>";
      die();
    }

    if ($discountAmount < 0) {
      echo $lang_align == 0 ? "<div align='center'><b>مبلغ نمی تواند منفی باشد</b></div>" :
        "<div align='center'><b>The discount amount can not be negative</b></div>";
      die();
    }

    if (!in_array($coddingID, $coddings)) {
      echo $lang_align == 0 ? "<div align='center'><b>کد تخفیف انتخاب شده برای این اتاق معتبر نمی باشد</b></div>" :
        "<div align='center'><b>Selected discount code is not valid for this room</b></div>";
      die();
    }

    if (!checkDiscount($coddingID, $discountAmount, null, $RegisterID, $discountKind)) {
      echo $lang_align == 0 ? "<div align='center'><b>مبلغ وارد شده از جمع درامد های کدینگ بیشتر است.</b></div>" :
        "<div align='center'><b>The entered amount is greater than the sum of the coding revenues.</b></div>";
      die();
    }

    //-------------------------------------
    $date_rvs_save = substr($_POST['date_save'], 6, 4) . "/" . substr($_POST['date_save'], 3, 2) . "/" . substr($_POST['date_save'], 0, 2);
    $date_far_rvs = substr($date_far, 6, 4) . "/" . substr($date_far, 3, 2) . "/" . substr($date_far, 0, 2);

    $query = "select DocumentMasterID,DocumentMasterNum from balance_accounting_send 
	  where Kind='0' and IranianDate1='$date_rvs_save'";
    require('../php_databases/run_select_query_new_no_connect.php');
    require_once('../php_databases/run_fetch_array.php');
    $row = fetch_array($result);

    if ($row['DocumentMasterNum'] > '0') {
      print "<div align='center'><b>سند درآمد " . num2fa($date_rvs_save) . " به حسابداری منتقل شده است<br>
		<font color='#F00000'> شماره سند الحاقی : " . num2fa($row['DocumentMasterNum']) . "</font>
		<br>
		<font color='#0000F0'> غیرقابل ثبت </font>
		</b></div>";

      $_desc = "سند الحاقی " . num2fa($date_rvs_save) . "تصحیح تخفیف فولیو صورتحساب ";

      $query = "insert into balance_accounting_view set Kind='0',Account_IranianDate='$date_rvs_save',
		IranianDate='$date_far_rvs',ForeignDate='$date_ltn $_time',ClerkID='$Active_ClerkID',
		Account_Description='$_desc'";
      require('../php_databases/run_select_query_new_no_connect.php');
      die();
    }
    //-------------------------------------

    $query = "select Codding_Special_Tax,Codding_Special_Service from codding where CoddingID='$_POST[_D1]'";
    require('../php_databases/run_select_query_no_connect.php');
    require_once('../php_databases/run_fetch_array.php');
    $row = fetch_array($result);
    $Codding_Special_Tax = $row['Codding_Special_Tax'];
    $Codding_Special_Service = $row['Codding_Special_Service'];

    //-----------------------------------------------------------------------------------------------------------------------------------------
    $query = "select Discount_Get_Tax,Income_Taxable,Laundry_Tax,Laundry_Service,TelephoneServicePercent,TelephoneTaxPercent,RestaurantTaxPercent
  	from $database_misc.actualyear where ActualYearID='$actual_year_id'";
    require('../php_databases/run_select_query_no_connect.php');
    require_once('../php_databases/run_fetch_array.php');
    $row = fetch_array($result);
    $Discount_Get_Tax = $row['Discount_Get_Tax'];
    $income_taxable = $row['Income_Taxable'];

    $laundry_tax_number = $row['Laundry_Tax'] / 100;
    $laundry_srvc_number = $row['Laundry_Service'] / 100;
    if ($_POST[_D1] == 8) {
      $number_srvc = $laundry_srvc_number;
      $number_tax = $laundry_tax_number;
    }
    $srvc_tell = $row['TelephoneServicePercent'] / 100;
    $tax_tell = $row['TelephoneTaxPercent'] / 100;
    if ($_POST[_D1] == 15 || $_POST[_D1] == 16 || $_POST[_D1] == 17) {
      $number_srvc = $srvc_tell;
      $number_tax = $tax_tell;
    }
    $tax_rstu = $row['RestaurantTaxPercent'] / 100;

    if ($_POST[_D1] == 30 || $_POST[_D1] == 31 || $_POST[_D1] == 32 || $_POST[_D1] == 33 || $_POST[_D1] == 34) {
      $number_srvc = 0;
      $number_tax = $tax_rstu;
      $query = "select RoomServicePercent from restaurantpattern where CoddingID='$_POST[_D1]' order by RestaurantCodeID";
      require('../php_databases/run_select_query_no_connect.php');
      require_once('../php_databases/run_fetch_array.php');
      if ($row = fetch_array($result)) {
        $number_srvc = $row['RoomServicePercent'] / 100;
      }
    }
    $_amnt = str_replace(',', '', $_POST[_amnt]);
    //---------------------------------------
    switch ($_POST[_D2]) {
      case 0:
        $_charges = 0;
        $_credits = $_amnt;

        $far_desc = " " . $name_tur80 . " ";
        $ltn_desc = "Tax Rebate ";

        $_income = 40;
        $code_tax = 3;
        $code_srvc = 14;

        $far_desc_srvc = " " . $name_tur81 . " ";
        $ltn_desc_srvc = "Service Rebate ";
        $_kind = 1;
        break;
      case 1:
        $_charges = $_amnt;
        $_credits = 0;


        $far_desc = " " . $name_tur61 . " ";
        $ltn_desc = " Tax ";

        $_income = 40;
        $code_tax = 3;
        $code_srvc = 14;

        $far_desc_srvc = " " . $name_tur82 . " ";
        $ltn_desc_srvc = "Service ";
        $_kind = 0;
        break;
      case 2:
        $_charges = 0;
        $_credits = $_amnt;
        //$_income=$_POST[_D3];

        $far_desc = " " . $name_tur80 . " ";
        $ltn_desc = "Tax Rebate ";

        $_income = 26;
        $code_tax = 27;
        $code_srvc = 28;

        $far_desc_srvc = " " . $name_tur81 . " ";
        $ltn_desc_srvc = "Service Rebate ";
        $_kind = 1;
        break;
      case 3:
        $_charges = $_amnt;
        $_credits = 0;
        //$_income=$_POST[_D3];

        $far_desc = " " . $name_tur61 . " ";
        $ltn_desc = " Tax ";

        $_income = 26;
        $code_tax = 27;
        $code_srvc = 28;

        $far_desc_srvc = " " . $name_tur82 . " ";
        $ltn_desc_srvc = "Service ";
        $_kind = 0;
        break;
      default:
        $_charges = 0;
        $_credits = $_amnt;
        //$_income=$_POST[_D3];

        $far_desc = " " . $name_tur80 . " ";
        $ltn_desc = "Tax Rebate ";

        $_income = 26;
        $code_tax = 3;
        $code_srvc = 14;

        $far_desc_srvc = " " . $name_tur81 . " ";
        $ltn_desc_srvc = "Service Rebate ";
        $_kind = 1;
    }
    //---------
    $_number = 1;
    $cnt = 0;
    //--------------------------------------------------------------------------------------------------
    if ($_POST[_D1] == 1 || $_POST[_D1] == 3 || $_POST[_D1] == 14) // درآمد فروش عوارض سرویس اتاق های تور
    {
      $query = "select (IranianTourPerson+ForeignTourPerson+IranianTourPersonHulf) as cnt_tour
        from register where RegisterID = $_POST[_regs];";
      //--------------------------------------------------------------- 
      require('../php_databases/run_select_query_new_no_connect.php');
      $row = fetch_array($result);
      $cnt = $row['cnt_tour'];
    } else {
      if ($_POST[_D1] == 2 || $_POST[_D1] == 27 || $_POST[_D1] == 28) // درآمد فروش عوارض سرویس اتاق های میهمان
      {
        $query = "select (IranianGuestPerson+ForeignGuestPerson+IranianGuestPersonHulf) as cnt_guest
	        from register where RegisterID = $_POST[_regs];";
        //---------------------------------------------------------------
        require('../php_databases/run_select_query_new_no_connect.php');
        $row = fetch_array($result);
        $cnt = $row['cnt_guest'];
      }
    }
    //------------------------------------------------------------------
    $query = "select RoomID from rooms where RoomNumber='$_POST[_room1]'";
    require('../php_databases/run_select_query_new_no_connect.php');
    require_once('../php_databases/run_fetch_array.php');
    $row = fetch_array($result);
    $id_room = $row['RoomID'];

    if ($hotel_kind == '3')
      $txt_dividation = "$_POST[fulio_plan]";
    else
      $txt_dividation = "0";

    $query = "insert into fulio (RegisterID,ClerkID,IranianDescription,ForeignDescription,IranianDate,ForeignDate,Charges,Credits,Number,CoddingID,RebateKind,DiscountCoddingID,Persons,Fulio_RoomID, ManagersID,FulioDividationID)
  	VALUES ('$_POST[_regs]','$Active_ClerkID','$_POST[_descfar]','$_POST[_descltn]','$_POST[date_save]','$_POST[date_save_ltn] $_POST[time_save]','$_charges','$_credits','$_number','$_income','$_POST[_D2]','$_POST[_D1]','$cnt','$id_room', '$_POST[_D4]','$txt_dividation')";
    require('../php_databases/run_select_query_new_no_connect.php');

    if ($result) {

      $fulio_main_id = mysqli_insert_id($link);
      //برگشت حق سرویس
      $chrg_srvc = $crdt_srvc = 0;
      if ($Discount_Get_Tax == '1' && $Codding_Special_Service > '0' && ($auto_tax_chrg == 1 || ($auto_tax_chrg == 2 && $_POST[_tour] == 0)) && $number_srvc != 0 && $_amnt != 0) {
        $chrg_srvc = round($_charges * $number_srvc, 0);
        $crdt_srvc = round($_credits * $number_srvc, 0);

        $query = "insert into fulio (RegisterID,ClerkID,IranianDescription,ForeignDescription,IranianDate,ForeignDate,Charges,Credits,Number,CoddingID,RebateKind,DiscountCoddingID,Persons,Fulio_RoomID, ManagersID,FulioDividationID)
			VALUES ('$_POST[_regs]','$Active_ClerkID','$far_desc_srvc $_POST[_descfar]','$ltn_desc_srvc $_POST[_descltn]','$_POST[date_save]','$_POST[date_save_ltn] $_POST[time_save]','$chrg_srvc','$crdt_srvc','$_number','$Codding_Special_Service','$_kind','$_POST[_D1]','$cnt','$id_room', '$_POST[_D4]','$txt_dividation')";
        require('../php_databases/run_select_query_new_no_connect.php');
      }
      //برگشت عوارض		
      //-------------------------------------------------------------------------------------------------------
      if ($Discount_Get_Tax == '1' && $Codding_Special_Tax > '0' && ($auto_tax_chrg == 1 || ($auto_tax_chrg == 2 && $_POST[_tour] == 0)) && $number_tax != 0 && $_amnt != 0) {
        if ($income_taxable == '1') {
          $chrg_tax = round(($chrg_srvc + $_charges) * $number_tax, 0);
          $crdt_tax = round(($crdt_srvc + $_credits) * $number_tax, 0);
        } else {
          $chrg_tax = round($_charges * $number_tax, 0);
          $crdt_tax = round($_credits * $number_tax, 0);
        }
        $query = "insert into fulio (RegisterID,ClerkID,IranianDescription,ForeignDescription,IranianDate,ForeignDate,Charges,Credits,Number,CoddingID,RebateKind,DiscountCoddingID,Persons,Fulio_RoomID, ManagersID,FulioDividationID, Fulio_Main_ID)
  			VALUES ('$_POST[_regs]','$Active_ClerkID','$far_desc $_POST[_descfar]','$ltn_desc $_POST[_descltn]','$_POST[date_save]','$_POST[date_save_ltn] $_POST[time_save]','$chrg_tax','$crdt_tax','$_number','$Codding_Special_Tax','$_kind','$_POST[_D1]','$cnt','$id_room', '$_POST[_D4]','$txt_dividation', '$fulio_main_id')";
        require('../php_databases/run_select_query_new_no_connect.php');
      }
      //--------------------------------------------------------------------------------
      $txt_date = ",IranianDate_Old='$row[IranianDate]',IranianDate_New='$_POST[date_save]'";
      //--------------------------------------------------------------------------------
      if ($_POST[date_save] != $date_far) {
        $code_query = 15;
        $regs_qold = $regs_query = $_POST[_regs];
        //----------------------------------------
        $desc_query = "$name_tur39<b>" . $_POST[_code] . "</b> $name_tur40<b>" . $_POST[_regs] . "</b> $name_tur22<b>" . $_number . "</b> $name_tur23<b>" . $_POST[_D1] . "</b>
  			 $name_tur24<b>" . $_POST[date_save] . "</b>$name_tur25<b>" . $_charges . "</b>$name_tur26<b>" . $_credits . "</b><br>
  			 $name_tur27<b>" . $_POST[_descfar] . "</b>$name_tur28<b>" . $_POST[_descltn] . "</b>";

        //-------------------------------------------------------------------------------------------------------------------------
        $query = "insert into logfile_register set Desc_Query=\"$desc_query\",IranianDate='$date_far',ForeignDate='$date_ltn $_time',
  			ClerkID='$Active_ClerkID',LogFileCodePatternID='$code_query',MenuID='$id_menu',MenuIDKind='$clerk_test',MenuMassage='$name_list',
  			RegisterID='$regs_query',RegisterID_old='$regs_qold' $txt_date";

        require('../php_databases/run_select_query_new_no_connect.php');
      }

      print "<br><div align=center id=ok><h3>$name_tur29</h3></div><br>";
    } else {
      print "<br><div align=center id=err><h3>$name_tur19 Cancel...</h3></div><br>";
    }
  }
  //----------- Main Program ----------
  //----------- Main Program ----------
  $beensubmited = $_POST['beensubmited'];
  //----------- Main Program ----------
  //----------- Main Program ----------
  if (isset($beensubmited)) {
    save_new_room1($Active_ClerkID);
    form1();
  } else {
    form1();
  }
  //------- End Of Main Program ---------------
  //-------------------------------------------
  require('../php_databases/run_close_db.php');
  //-------------------------------------------
  if ($lang_align == '0') {
    print "<br />
    <div align='center'>
	<input class='btn' type='button' name='Home' value=' بازگشت ' onclick=\"document.location='fulio_list.php'\" >
	</div>";
  } else {
    print "<br />
    <div align='center'>
	<input class='btn' type='button' name='Home' value='Home' onclick=\"document.location='fulio_list.php'\" >
	</div>";
  }
  ?>
</body>

</html>
