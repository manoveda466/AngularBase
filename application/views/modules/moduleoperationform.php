<?php
//Variable Initialization
$action_id    = "";
$action_code  = "";
$action_desc  = "";
$category_id  = "";
 
if(!empty($tabledata))
{
    foreach ($tabledata as $row) 
    {
        $action_id   = $row->action_id;        
        $action_code = $row->action_code;
        $action_desc = $row->action_desc;
        $category_id = $row->category_id;
    }
}
else
{
    $action_id   = $this->input->post('action_id');
    $action_code = $this->input->post('action_code');
    $action_desc = $this->input->post('action_desc');
    $category_id = $this->input->post('category_id');
}
?>
<form action="<?php echo base_url($ActionUrl);?>" method="post">
    <input type="hidden" name="action_id" id="action_id" value="<?php echo $action_id;?>">
    <h5 class="form-header"></h5>
    <div class="form-desc"><?php echo $this->lang->line('activity_form_description');?></div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for=""><?php echo $this->lang->line('label_module');?></label><span class="mandatory">*</span>
                <?php
                    $extraAttr="id='category_id' class='form-control select2'";
                    echo form_dropdown('category_id', $moduleDropdown, $category_id, $extraAttr);
                ?> 
                <span class="help-block"><?php echo form_error('category_id')?></span>
            </div>
        </div> 
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_operation_name');?></label><span class="mandatory">*</span>
                <input type="text" name="action_code" id="action_code" value="<?php echo $action_code;?>" class="form-control" />
                <span class="help-block"><?php echo form_error('action_code')?></span>
            </div>  
        </div>
    </div>                        
        
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_action_description');?></label><span class="mandatory">*</span>
                <textarea name="action_desc" cols="40" rows="3" id="action_desc" class="form-control"><?php echo $action_desc;?></textarea> 
                <span class="help-block"><?php echo form_error('action_desc')?></span>
            </div>
        </div>                        
    </div>
    <hr>
    <div class="form-buttons-w text-right">
        <a href="<?php echo base_url('modules/moduleoperations/add'); ?>" class="btn btn-danger"><?php echo $this->lang->line('label_cancel');?></a>
        <button class="btn btn-success" type="submit" name="submit"><?php echo $this->lang->line('label_submit');?></button>
    </div>
</form>