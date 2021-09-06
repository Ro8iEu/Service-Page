<?php

namespace app\controllers;

use app\forms\PagesForm;
use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ReportSearchForm;


class ReportListCtrl
{
    private $pages;
    private $p;
    private $psize = 3;
    private $form;
    private $records;


    public function __construct()
    {

        $this->form = new ReportSearchForm();
        $this->pages = new PagesForm();
    }

    public function validate()
    {

        $this->form->id_report = ParamUtils::getFromRequest('sf_id_report');
        $this->form->id_status = ParamUtils::getFromRequest('sf_id_status');
//        $this->form->number = ParamUtils::getFromGet("sf_number");

        return !App::getMessages()->isError();
    }


    public function action_reportList()
    {

        $this->validate();

        $search_params = [];
        if (isset($this->form->id_report) && strlen($this->form->id_report) > 0) {
            $search_params['id_report[~]'] = $this->form->id_report . '%';
        }
        if ($_SESSION['_currentUser'] != "1") {
            $search_params['id_user[~]'] = $_SESSION['_currentUser'];
        }
        if (isset($this->form->id_status) && strlen($this->form->id_status) > 0) {
            $search_params['report.id_status[~]'] = $this->form->id_status;
        }


        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }


        $where ["ORDER"] = "id_report" ;

        $this->p = ParamUtils::getFromGET('page');
        if (empty($this->p)) {
            $this->p = 1;
        } else {
            if (!is_numeric($this->p)) {
                $this->p = 1;
            }
        }
        if ($this->p < 1) {
            $this->p = 1;
        }
        $offset = ($this->p - 1) * $this->psize;
        $where ["LIMIT"] = [$offset, $this->psize];

        try {

            $this->records = App::getDB()->select("report", [
                "[><]type_of_status" => ["id_status" => "id_status"]], [
                "id_report",
                "model",
                "date_of_report",
                "type_of_status.name",
                "report.id_status",
            ], $where);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


       if ($_SESSION['_currentUser'] == "1"){
            $this->generateViewAdmin();
        }   else {
           $this->generateView();
       }


    }
    public function checkNextPage() {
        try {
            $isNext = App::getDB()->has("report", [
                'LIMIT' => [(($this->p) * $this->psize), $this->psize]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        return $isNext;
    }


    public function generateView()
    {
        App::getSmarty()->assign('p', $this->p);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign("isNextPage", $this->checkNextPage());
        App::getSmarty()->assign("next_page", $this->p + 1);
        App::getSmarty()->assign("previous_page", $this->p - 1);
        App::getSmarty()->assign('reports', $this->records);
        App::getSmarty()->display('reportList.tpl');
    }
    public function generateViewAdmin()
    {
        App::getSmarty()->assign('p', $this->p);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign("isNextPage", $this->checkNextPage());
        App::getSmarty()->assign("next_page", $this->p + 1);
        App::getSmarty()->assign("previous_page", $this->p - 1);
        App::getSmarty()->assign('reports', $this->records);
        App::getSmarty()->display('reportListAdmin.tpl');
    }

}
