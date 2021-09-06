<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\ReportDetailForm;




class ReportDetailCtrl
{
    private $records;
    private $form;

    public function __construct()
    {

        $this->form = new ReportDetailForm();
    }

    public function validateReport()
    {
        $this->form->id = ParamUtils::getFromGet("report");

        return !App::getMessages()->isError();
    }

    public function action_reportDetail()
    {

        if ($this->validateReport())
        {
            $where = ["id_report" => $this->form->id];
                try {

                    $this->records = App::getDB()->select("report", [
                        "[><]type_of_status" => ["id_status" => "id_status"],
                        "[><]type_of_repair" => ["id_repair" => "id_repair"],
                        "[><]type_of_device" => ["id_device" => "id_device"],],
                        [
                        "id_report",
                        "report.name(report_name)",
                        "report.surname(report_surname)",
                        "phone",
                        "model",
                        "description",
                        "comment",
                        "cost",
                        "date_of_report",
                        "date_of_repair",
                        "type_of_repair.name(repair_name)",
                        "type_of_device.name(device_name)",
                        "type_of_status.name(status_name)"], $where);

    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobrania rekordu');

    }
    $this->generateView();
}
    }
    public function generateView()
    {
        App::getSmarty()->assign('reports', $this->records);
        App::getSmarty()->display('reportDetail.tpl');
    }

}


