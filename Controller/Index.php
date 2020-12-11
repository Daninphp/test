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
            $response = $this->model->checkAdminCredentials($data);
            if(!empty($response)){
                session_start();
                $_SESSION['username'] = $response[0]['username'];
                $_SESSION['password'] = $response[0]['password'];
                echo json_encode('Successful Login');
            } else {
                echo json_encode('Error');
            }
        }
    }

    public function destroySession()
    {
        session_start();
        session_destroy();
    }

}
