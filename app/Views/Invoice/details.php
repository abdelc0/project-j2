<?php
    require_once APPROOT . '/Views/Includes/header.php';
?>

<!-- Stap_15 -->
<!-- Hier voeg jouw layout toe om de geselecteerde Invoice bij Id te tonen -->

<div class="container container-mvckdemo">
    <div class="wrapper-mvckdemo">
        <div class="form-group">
            <h2>Details of product</h2>
            <form id="DetailsInvoice" method="GET" action="<?= URLROOT; ?>/Invoice/details?id=">
                <div class="form-group row">
                    <label class="col-sm-3 control-label">Id</label>
                    <input type="text" disabled value="<?= $data->__get('Id') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">Name</label>
                    <input type="text" disabled value="<?= $data->__get('Name') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">Code</label>
                    <input type="text" disabled value="<?= $data->__get('Code') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">Quantity</label>
                    <input type="text" disabled value="<?= $data->__get('Quantity') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">Price</label>
                    <input type="text" disabled value="<?= $data->__get('Price') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">IsActive</label>
                    <input type="text" disabled value="<?= $data->__get('IsActive') ?>"></input>

                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">Note</label>
                    <input type="text" disabled value="<?= $data->__get('Note') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">DateCreated</label>
                    <input type="text" disabled value="<?= $data->__get('DateCreated') ?>"></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label">DateModified</label>
                    <input type="text" disabled value="<?= $data->__get('DateModified') ?>"></input>

                </div>


            </form>
        </div>
    </div>
</div>

<?php
    require_once APPROOT . '/Views/Includes/footer.php';
?>