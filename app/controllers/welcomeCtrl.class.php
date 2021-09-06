<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ReportSearchForm;

/**
 * Description of welcomeCtrl
 *
 * @author Robert
 */
class welcomeCtrl
{
    public function action_welcome()
    {

        $this->generateView();

    }

    public function generateView()
    {

        App::getSmarty()->display('welcomeView.tpl');
    }
}