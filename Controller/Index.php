<?php
namespace Controller;

require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Model/Index.php');

class Index
{
    private $model;

    public function __construct()
    {
        $this->model = new \Model\Index();
    }

    public function getCollection()
    {
        return $this->model->getProductCollection();
    }

    public function getComments()
    {
        return $this->model->getCommentsCollection();
    }

    public function getUnaprovedComments()
    {
        return $this->model->getUnaprovedComments();
    }

    public function approveComment($id)
    {
       return $this->model->approveComment($id);
    }

    public function insertComment($data)
    {
        if(!empty($data)){
            $this->model->insertComment($data);
        }
    }

    public function adminLogin($data)
    {
        if(!empty($data)){
            session_start();
            $response = $this->model->checkAdminCredentials($data);
            if(!empty($response)){
                $_SESSION['username'] = $response[0]['username'];
                $_SESSION['password'] = $response[0]['password'];
            } else {
                $_SESSION['message'] = "Wrong username or password, try again!";
            }
        }
    }

    public function destroySession()
    {
        session_start();
        session_destroy();
    }

}
