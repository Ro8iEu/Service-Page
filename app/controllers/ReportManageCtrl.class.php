<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ReportManageForm;

class ReportManageCtrl
{

    private $form;

    public function __construct()
    {

        $this->form = new ReportManageForm();
    }

    public function validateSave()
    {

        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->phone = ParamUtils::getFromRequest('phone', true, 'Błędne wywołanie aplikacji');
        $this->form->description = ParamUtils::getFromRequest('description', true, 'Błędne wywołanie aplikacji1');
        $this->form->model = ParamUtils::getFromRequest('model', true, 'Błędne wywołanie aplikacji');
        $this->form->id_repair = ParamUtils::getFromRequest('id_repair', true, 'Błędne wywołanie aplikacji');
        $this->form->id_device = ParamUtils::getFromRequest('id_device', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;


        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->surname))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->phone))) {
            Utils::addErrorMessage('Wprowadź numer telefonu');
        }
        if (empty(trim($this->form->model))) {
            Utils::addErrorMessage('Wprowadź model');
        }
        if (empty(trim($this->form->description))) {
            Utils::addErrorMessage('Wprowadź opis problemu');
        }
        if (empty(trim($this->form->id_repair))) {
            Utils::addErrorMessage('Wprowadź opcje naprawy');
        }
        if (empty(trim($this->form->id_device))) {
            Utils::addErrorMessage('Wprowadź rodzaj urządzenia');
        }

        if (App::getMessages()->isError())
            return false;


        return !App::getMessages()->isError();
    }


    public function validateEdit()
    {

        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_reportNew()
    {
        $this->generateNewView();
    }

    public function action_reportDelete()
    {


        if ($this->validateEdit()) {

            try {

                App::getDB()->delete("report", [
                    "id_report" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }


        App::getRouter()->redirectTo("reportList");
    }

    public function action_newReport()
    {


        if ($this->validateSave()) {

            try {



                App::getDB()->insert("report", [
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                    "phone" => $this->form->phone,
                    "description" => $this->form->description,
                    "model" => $this->form->model,
                    "id_repair" => $this->form->id_repair,
                    "id_device" => $this->form->id_device,
                    "id_user" => $_SESSION['_currentUser'],
                ]);

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }


            App::getRouter()->redirectTo('reportList');
        } else {

            $this->generateNewView();
        }
    }


    public function generateNewView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('reportNew.tpl');
    }


}
