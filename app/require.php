<?php
    // Require libraries from folder libraries
    require_once 'Config/Config.php';
    require_once 'Libraries/Core.php';
    require_once 'Libraries/Database.php';
    require_once 'Helpers/DateTimeHelper.php'; 
    require_once 'Helpers/InvoiceHelper.php';
    require_once 'Helpers/FormatTextHelper.php'; 
    require_once 'Libraries/Controller.php';
    require_once 'Entities/InvoiceEntity.php';
    require_once 'Enumerations/EnumTypeMessage.php';
    require_once 'Validators/InvoiceValidator.php';
    require_once 'Models/MessageModel.php';

    // Instantiate core class
    $init = new Core();
