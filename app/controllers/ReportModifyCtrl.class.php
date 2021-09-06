<?php


namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ReportModifyForm;
use app\controllers\LoginCtrl;


class ReportModifyCtrl
{
    private $form;

    public function __construct()
    {

        $this->form = new ReportModifyForm();
    }

    public function validateEdit()
    {


        $this->form->id = ParamUtils::getFromGet("report");
        return !App::getMessages()->isError();
    }

    public function validateSave()
    {

        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->comment = ParamUtils::getFromRequest('comment', true, 'Błędne wywołanie aplikacji');
        $this->form->cost = ParamUtils::getFromRequest('cost', true, 'Błędne wywołanie aplikacji');

        $this->form->id_status = ParamUtils::getFromRequest('id_status', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;



        if (empty(trim($this->form->id_status))) {
            Utils::addErrorMessage('Nie wybrano statusu');
        }


        if (App::getMessages()->isError())
            return false;


        return !App::getMessages()->isError();
    }

    public function action_newEdit()
    {



        if ($this->validateSave()) {
            if ((empty($this->form->cost))){
                try {

                    App::getDB()->update("report", [
                        "comment" => $this->form->comment,
                        "date_of_repair" => date("y-m-d"),
                        "id_status" => $this->form->id_status,
                    ], [
                        "id_report" => $this->form->id
                    ]);

                    Utils::addInfoMessage('Pomyślnie zapisano rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                App::getRouter()->forwardTo('reportList');
            }
            else if((empty($this->form->comment))){
                try {

                    App::getDB()->update("report", [
                        "cost" => $this->form->cost,
                        "date_of_repair" => date("y-m-d"),
                        "id_status" => $this->form->id_status,
                    ], [
                        "id_report" => $this->form->id
                    ]);

                    Utils::addInfoMessage('Pomyślnie zapisano rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                App::getRouter()->forwardTo('reportList');
            }
            else if((empty($this->form->comment)) && (empty($this->form->cost))){
                try {

                    App::getDB()->update("report", [

                        "date_of_repair" => date("y-m-d"),
                        "id_status" => $this->form->id_status,
                    ], [
                        "id_report" => $this->form->id
                    ]);

                    Utils::addInfoMessage('Pomyślnie zapisano rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                App::getRouter()->forwardTo('reportList');
            }

            else {
                try {

                    App::getDB()->update("report", [
                        "comment" => $this->form->comment,
                        "cost" => $this->form->cost,
                        "date_of_repair" => date("y-m-d"),
                        "id_status" => $this->form->id_status,
                    ], [
                        "id_report" => $this->form->id
                    ]);

                    Utils::addInfoMessage('Pomyślnie zapisano rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                App::getRouter()->forwardTo('reportList');
            }

        } else {

            $this->generateView();

        }
    }

    public function action_reportEdit()
    {

        if ($this->validateEdit()) {
            try {

                App::getDB()->get("report", "*", [
                    "id_report" => $this->form->id
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }


        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->assign('p', $this->form->id);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('reportManage.tpl');
    }

}