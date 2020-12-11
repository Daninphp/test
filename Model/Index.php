<?php
namespace Model;
require_once(__DIR__ . '/../config.php');
require_once(PROJECT_ROOT . '/Db/Connection.php');
use Db\Connection;

class Index
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance()->conn;
    }

    public function getProductCollection()
    {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getCommentsCollection()
    {
        $stmt = $this->db->prepare("SELECT * FROM comments WHERE status = '1'");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUnaprovedComments()
    {
        $stmt = $this->db->prepare("SELECT * FROM comments WHERE status = '0'");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function approveComment($id)
    {
        try {
            $id = htmlentities($id);
            $stmt = $this->db->prepare("UPDATE comments SET STATUS = 1 WHERE id = :commentid");
            $stmt->bindParam(':commentid', $id);
            $stmt->execute();
            echo json_encode('Comment approved!');
        } catch (\Exception $e){
            echo json_encode($e->getMessage());
        }
    }

    public function insertComment($data)
    {
        try {
            $name = htmlentities($data['name']);
            $email = htmlentities($data['email']);
            $comment = htmlentities($data['comment']);
            $stmt = $this->db->prepare("INSERT INTO comments(status, name, email, comment) VALUES (0, :username, :useremail, :usercomment)");
            $stmt->bindParam(':username', $name);
            $stmt->bindParam(':useremail', $email);
            $stmt->bindParam(':usercomment', $comment);
            $stmt->execute();
            echo json_encode('Comment sent, wait for administrator approval!');
        } catch (\Exception $e){
            echo json_encode($e->getMessage());
        }

    }

    public function checkAdminCredentials($data)
    {
        try {
            $username = htmlentities($data['username']);
            $password = htmlentities($data['password']);
            $stmt = $this->db->prepare("SELECT * FROM admin WHERE (username) = (:adminusername) AND (password) = (:adminpassword)");
            $stmt->bindParam(':adminusername', $username);
            $stmt->bindParam(':adminpassword', $password);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e){
            echo json_encode($e->getMessage());
        }

    }

}