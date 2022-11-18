<?php
    class InvoiceValidator
    {
        /**
         * Validat all the input fields of Invoice for the create or update views.
         * @param InvoiceEntity $data
         * @return boolean
         */
        public static function validateInvoiceInputFields(InvoiceEntity $data) : bool
        {  
            try
            {
                $isViewValid = false;

                return $isViewValid;
            }
            catch(Exception $ex)
            {
                
            }
        }   
    }
?>