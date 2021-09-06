<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('welcome'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('register', 'LoginCtrl');
Utils::addRoute('newUser', 'LoginCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('reportDeleteAll', 'ReportManageCtrl',    ['admin']);
Utils::addRoute('reportAll', 'ReportListCtrl',          ['admin']);
Utils::addRoute('newReport', 'ReportManageCtrl',        ['user','admin']);
Utils::addRoute('reportDetail', 'ReportDetailCtrl',    ['user','admin']);
Utils::addRoute('reportList', 'ReportListCtrl',         ['user','admin']);
Utils::addRoute('welcome', 'welcomeCtrl',               ['user','admin']);
Utils::addRoute('newEdit', 'ReportModifyCtrl',          ['admin']);
Utils::addRoute('reportNew',     'ReportManageCtrl',	['user','admin']);
Utils::addRoute('reportEdit',    'ReportModifyCtrl',	['user','admin']);
Utils::addRoute('reportSave',    'ReportManageCtrl',	['user','admin']);
Utils::addRoute('reportDelete',  'ReportManageCtrl',	['user','admin']);
