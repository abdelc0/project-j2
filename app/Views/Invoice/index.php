<?php
require_once APPROOT . '/Views/Includes/header.php';
?>

<!-- Stap_14 -->
<!-- Hier voeg jouw layout toe om alle Invoices te tonen -->

<div>
    <h1>Invoice</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Invoice Id</th>
                <th scope="col">Invoice Number</th>
                <th scope="col">Invoice Date</th>
                <th scope="col">Invoice Name</th>
                <th scope="col">Invoice Amount</th>
                <th scope="col">Invoice IsActive</th>
                <th scope="col">Invoice Note</th>
                <th scope="col">Invoice DateCreated</th>
                <th scope="col">Invoice DateModified</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['Invoice'] as $Invoice) : ?>
                
                <tr>
                    <th scope="row"><?= $Invoice->Id; ?></th>
                    <td><?= $Invoice->InvoiceNumber; ?></td>
                    <td><?= $Invoice->InvoiceDate; ?></td>
                    <td><?= $Invoice->ProductName; ?></td>
                    <td><?= $Invoice->Amount; ?></td>
                    <td><?= $Invoice->IsActive; ?></td>
                    <td><?= $Invoice->Note; ?></td>
                    <td><?= $Invoice->DateCreated; ?></td>
                    <td><?= $Invoice->DateModified; ?></td>
                    <td>
                        <a href="<?php echo URLROOT; ?>/Invoice/details/<?php echo $Invoice->Id; ?>" class="btn btn-primary">Details</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require_once APPROOT . '/Views/Includes/footer.php';
?>