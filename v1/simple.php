<?php



$query = "INSERT 

        into fulio (
        RegisterID,
        ClerkID,
        IranianDescription,
        ForeignDescription,
        IranianDate,
        ForeignDate,
        Charges,
        Credits,
        Number,
        CoddingID,
        RebateKind,
        DiscountCoddingID,
        Persons,
        Fulio_RoomID,
        ManagersID,
        FulioDividationID
      )

      values (
        '$_POST[_regs]'      ,
        '$Active_ClerkID',
        '$_POST[_descfar]',
        '$_POST[_descltn]',
        '$_POST[date_save]',
        '$_POST[date_save_ltn] $_POST[time_save]',
        '$_charges',
        '$_credits',
        '$_number',
        '$_income',
        '$_POST[_D2]',
        '$_POST[_D1]',
        '$cnt',
        '$id_room',
        '$_POST[_D4]',
        '$txt_dividation'
      )";
