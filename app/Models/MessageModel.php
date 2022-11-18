<?php

/**
 * Dit is de model voor de controller Countries
 */

class MessageModel
{
    //properties
    private $db;

    // Dit is de constructor van de Country model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getmessageuss() : array
    {
        try
        {
            $getMessagesQuery = "SELECT * FROM messageuss";
            $this->db->query($getMessagesQuery);
            $result = $this->db->resultSet();

            return $result ?? [];

        }
        catch (PDOException $ex)
        {
            error_log("ERROR : Failed to get message uss in Message model class method getmessageuss!", 0);
            die('ERROR : Failed to get message uss in Message model class method getmessageuss! '. $ex->getMessage());
        }
    }



    public function createmessageuss($post)
    {
        $this->db->query('INSERT INTO `messageuss` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `subjects`) VALUES (NULL, :firstname, :lastname, :email, :phonenumber, :subjects);');
        $this->db->bind(':firstname', $post['firstname'], PDO::PARAM_STR);
        $this->db->bind(':lastname', $post['lastname'], PDO::PARAM_STR);
        $this->db->bind(':email', $post['email'], PDO::PARAM_STR);
        $this->db->bind(':phonenumber', $post['phonenumber'], PDO::PARAM_STR);
        $this->db->bind(':subjects', $post['subjects'], PDO::PARAM_STR);
        // var_dump($this->db);
        // exit;
        return $this->db->execute();
    }
}
