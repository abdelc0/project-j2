<?php
    // Stap_05
    class InvoiceModel
    {
        private Database $Db;

        /**
         * Constructor InvoiceModel
         * @param [type] $db
         */
        public function __construct(Database $db = new Database)
        {
            $this->Db = $db;
        }

        // Stap_06
        /**
         * Fetch the all Invoices from database.
         * @return mixed
         */

        public function getInvoices(): array
        {
            try {
                // Use sql script to fetch all products from storemysql database.
                $getAllInvoicesQuery = "SELECT * FROM Invoice";
    
                // Set up the query of products
                $this->Db->query($getAllInvoicesQuery);
    
                // Assign the result of database query to local variable.
                $results = $this->Db->resultSet();
    
                // Return the result.
                return $results;
            } catch (PDOException $ex) {
                // Log line
                error_log("ERROR : Failed to get all Invoices from database class InvoiceModel method getInvoices", 0);
    
                // die line
                die('ERROR : Failed to get all Invoices from database class InvoiceModel method getInvoices' . $ex->getMessage());
            }
        }

        public function getInvoicesById(int $id) : object
        {
            try
            {

                $getSelectedInvoices = "SELECT * FROM product WHERE Id = :id";
                $this->Db->query($getSelectedInvoices);
                $this->Db->bind(':id', $id);
                $result = $this->Db->single();
                return $result ?? new InvoiceEntity();
            }

            catch(PDOException $ex)
            {
                error_log("ERROR : Failed to get all Invoices from database class InvoicesModel method getInvoicess!", 0);
                die('ERROR : Failed to get all Invoices from database in class InvoicesModel method getInvoicess! ' . $ex->getMessage());
            }

        }
        
        // // Stap_10
        //  /**
        //  * Fetch the selected Invoice by Id from database.
        //  * @param [type] $id
        //  * @return InvoiceEntity
        //  */
    }
?>