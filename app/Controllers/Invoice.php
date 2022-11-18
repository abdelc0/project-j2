<?php
// Stap_11
class Invoice extends Controller
{

    public function __construct()
    {
        // Hier moet je de Invoice model aanroepen.
        $this->InvoiceModel = $this->model('InvoiceModel');
    }

    // Stap_12
    /**
     * Display all Invoices on index Invoice view.
     * @return void
     */
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Fetch all Invoices from product model.
            $Invoices = $this->InvoiceModel->getInvoices();

            // Assign the result data from model to local variable.
            $data = [
                'Invoice' => $Invoices
            ];

            // Send the data to view Invoices/index.
            $this->view('Invoice/index', $data);
        }
    }

    // Stap_13
    /**
     * Display the selected Invoice on details Invoice view.
     * @param integer $id
     * @return void
     */

    public function details(int $id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Fetch selected Invoice by Id from Invoice model.
            $data = $this->InvoiceModel->getInvoicesById($id);

            // Send the selected Invoice to view Invoice/details.
            $this->view('Invoice/details', $data);
        }
    }
}
