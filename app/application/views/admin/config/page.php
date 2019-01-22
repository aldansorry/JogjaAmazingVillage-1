



<!-- Primary table end -->
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3">
                Data <?php echo $c_name ?> 
            </h4>

            <?php echo form_open(''); ?>
            <div class="form-group row">
                <label for="input-subdomain" class="col-sm-2 col-form-label">Sub Domain</label>
                <div class="col-sm-10">
                    <input name="subdomain" type="text" class="form-control" id="input-subdomain" value="<?php echo $data->subdomain ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input-template" class="col-sm-2 col-form-label">Template</label>
                <div class="col-sm-10">
                    <select name="template" class="form-control" id="input-template">
                        <option value="template1">Template 1</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="submit">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
