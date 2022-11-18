<?php
    // Stap_08
    class InvoiceHelper
    {
        /**
         * Create new empty Invoice object.
         * @return InvoiceEntity
         */
        public static function createEmptyInvoiceObject() : InvoiceEntity
        {
            $newInvoice = new InvoiceEntity();

            return $newInvoice;
        }

        // Stap_09
        /**
         * Map the selected database Invoice row from to Invoice object. 
         * @param mixed $selectedInvoice
         * @return InvoiceEntity
         */
        public static function mapInvoiceRowToObject(mixed $selectedInvoice) : InvoiceEntity
        {
            $selectedInvoice = new InvoiceEntity();

            return $selectedInvoice;
        }

                /**
         * Set the values of input fields from the view to Invoice object.
         * @param [type] $inputPost
         * @param string $methodType
         * @return InvoiceEntity
         */
        public static function setInputInvoiceFieldsToInvoiceObject($inputPost, string $methodType) : InvoiceEntity
        {
            $inputInvoice = new InvoiceEntity();

            return $inputInvoice;
        }
    }
?>