
    <!-- /.row -->
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form method="GET">
                        <div class="input-group custom-search-form pull-left col-lg-4 col-md-6 col-sm-9 col-xs-12">
                            <input value="<?php echo !empty($search) ? $search: ''; ?>" type="text" class="form-control" placeholder="<?php echo $this->lang->line('placeholder_text_search'); ?>" name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <div class="pull-right col-lg-1 col-md-1 col-sm-3 col-xs-3">
                        <a href="<?php echo base_url('admin/config/post_types/create'); ?>">
                            <button title="<?php echo $this->lang->line('post_type_add_text'); ?>" type="button" class="btn btn-success btn-sm col-xs-12 button-add">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php
                    if(!empty($pagination)){
                        echo $pagination;
                    }
                    ?>
                    <div class="dataTable_wrapper table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th width="6%" class="text-center"><?php echo $this->lang->line('head_title_no'); ?></th>
                                <th width="35%" class="text-center"><?php echo $this->lang->line('post_type_name'); ?></th>
                                <th width="35%" class="text-center"><?php echo $this->lang->line('post_type_description'); ?></th>
                                <th width="10%" class="text-center"><?php echo $this->lang->line('post_type_avatar'); ?></th>
                                <th width="14%" class="text-center"><?php echo $this->lang->line('text_edit_delete'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($post_type_list)>0): ?>
                                <?php foreach($post_type_list as $key => $row): ?>
                                    <tr class="post-type-<?php echo $row['id']; ?>">
                                        <td class="text-center align-middel"><?php echo ++$page_stt; ?></td>
                                        <td class="align-middel"><?php echo $row['name']; ?></td>
                                        <td class="align-middel"><?php echo $row['description']; ?></td>
                                        <td  class="text-center align-middel">
                                            <img src="<?php echo $row['avatar_link']; ?>" width="50" height="50">
                                        </td>
                                        <td class="text-center align-middel">
                                                <a title="<?php echo $this->lang->line('post_type_btn_edit_title'); ?>" class="btn btn-success btn-xs" href="<?php echo base_url('admin/config/post_types/edit/'.$row['id']); ?>">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                            <?php if($row['id'] != 1){ ?>
                                                <button title="<?php echo $this->lang->line('post_type_btn_delete_title'); ?>" type="button" data-id="<?php echo $row['id']; ?>" class="btn btn-danger btn-xs button-delete-post-type">
                                                    <span class="glyphicon glyphicon-trash "></span>
                                                </button>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if(!empty($pagination)){
                        echo $pagination;
                    }
                    ?>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
    </div>
    <!-- /.row -->


<div class="modal fade" id="modalDeleteItem" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header fontbold"><?php echo $this->lang->line('message_text_confirm'); ?></div>
            <div class="modal-body text-center">
                <i class="glyphicon warning glyphicon-warning-sign"></i>&nbsp;<?php echo $this->lang->line('delete_message_confirm'); ?>
                <label class="text-name-replace"></label> ?
            </div>
            <div class="col-lg-12 messageAlert"></div>
            <div class="clear"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger btn-delete-confirm"><?php echo $this->lang->line('btn_delete'); ?></button>
                <button type="button" class="btn btn-sm btn-default btnCancelDelete" data-dismiss="modal"><?php echo $this->lang->line('btn_cancel'); ?></button>
            </div>
        </div>
    </div>
</div>