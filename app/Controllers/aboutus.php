<?php
class  aboutus extends Controller
{
    //properties
    private $MessageObj;
    private readonly mixed $MessageModel;

    public function __construct()
    {
      $this->MessageModel = $this->model('MessageModel');
    }

    // public function create()
    // {
    //     $this->Message = new MessageModel();
       

    //     if ($_SERVER["REQUEST_METHOD"] == "POST") 
    //     {
    //         // $_POST array schoonmaken
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //         $result = $this->MessageObj->createmessageuss($_POST);

    //         if ($result) {
    //             echo "Het invoeren is gelukt";
    //             //header("Refresh:3; URL=" . URLROOT . "/countries/index");
    //         } else {
    //             echo "Het invoeren is NIET gelukt";
    //             // header("Refresh:3; URL=" . URLROOT . "/countries/index");
    //         }
    //     }
     

    //     $data = [
    //         'title' => 'Voeg een nieuw land toe'
    //     ];
    //     $this->view('countries/create', $data);
    // }


    public function index()
    {
        
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            // $_POST array schoonmaken
            $messages = $this->MessageModel->getmessageuss();
            $data = ['messages' => $messages];
            $this->view('aboutus/index', $data);
        }
    }
    public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      try {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $this->MessageModel->createmessageuss($_POST);

        header('Location: ' . URLROOT . '/countries/index');
      } catch (PDOException $e) {
        echo 'Er is iets misgegaan tijdens het aanmaken van het land';
        header('Refresh: 2; url=' . URLROOT . '/countries/index');
      }
    } else {
      $data = [
        'title' => '<h1>Nieuw land toevoegen</h1>'
      ];

      $this->view('aboutus/indix', $data);
    }
  }

        
    
    
}

