<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl
{


    private $form;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function validate()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');


        if (!isset($this->form->login))
            return false;


        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }


        if (App::getMessages()->isError())
            return false;

        $admin = ["login" => $this->form->login, "password" => $this->form->pass, "id_role" => "1"];
        $user = ["login" => $this->form->login, "password" => $this->form->pass, "id_role" => "2"];
        if ($this->records = App::getDB()->Select("user",
            ["id_role", "name", "id_user"
            ], $admin)
        ) {


            RoleUtils::addRole('admin');
            $this->addUserID();


        } else if ($this->records = App::getDB()->Select("user",
            ["id_role", "name", "id_user"
            ], $user)
        ) {


            RoleUtils::addRole('user');
            $this->addUserID();


        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }


        return !App::getMessages()->isError();
    }

    public function action_loginShow()
    {
        $this->generateView();
    }

    public function action_login()
    {
        if ($this->validate()) {


            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getSmarty()->assign('id', $this->records);
            App::getSmarty()->display('welcomeView.tpl');
        } else {

            $this->generateView();
        }
    }

    public function action_logout()
    {

        session_destroy();

        App::getRouter()->redirectTo('login');
    }

    public function addUserID()
    {

        $_SESSION['_currentUser'] = App::getDB()->get("user", "id_user", ["login" => $this->form->login]);
    }

    public function action_register()
    {
        $this->generateRegisterView();
    }

    public function validateSave()
    {
        //0. Pobranie parametrów z walidacją
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji1');


        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->surname))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('login');
        }
        if (empty(trim($this->form->password))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }

        if (App::getMessages()->isError())
            return false;


        return !App::getMessages()->isError();
    }

    public function action_newUser()
    {


        if ($this->validateSave()) {

            try {


//
                App::getDB()->insert("user", [
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                    "login" => $this->form->login  ,
                    "password" => $this->form->password,
                    "id_role" => 2,

                ]);

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->redirectTo('login');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateRegisterView();
        }
    }

    public function generateView()
    {

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
    }

    public function generateRegisterView()
    {


        App::getSmarty()->display('RegisterView.tpl');
    }

}
