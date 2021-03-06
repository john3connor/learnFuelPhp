<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Categories
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-sm-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add new</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
 							<?php echo render('admin/categories/_form_create') ?>
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All categories</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        <table class="table table-striped" id="list-item" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Name</th>
					                <th>Slug</th>
        							<th>Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Name</th>
					                <th>Slug</th>
        							<th>Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
                                <?php foreach($categories as $category) :?>
					            <tr>
					                <td>
					                	<a href="/admin/categories/edit/<?php echo $category->id ?>" class="text-success">
					                		<u><?php echo $category->category_name ?></u>
					                	</a>
					                </td>
					                <td><?php echo $category->slug ?></td>
					                <td class="text-center">
					                	<a href="/admin/categories/edit/<?php echo $category->id ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View</a>
					                	<a href="#" data-toggle="modal" data-id="<?php echo $category->id ?>" data-target=".delete_comfirm" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
					                </td>
					            </tr>
                                <?php endforeach ?>
					        </tbody>
					    </table>
                        <!-- content ends here -->
	                    <!-- MODAL -->
						<div class="modal fade delete_comfirm" tabindex="-1" role="dialog" aria-hidden="true">
						  <div class="modal-dialog modal-sm">
						    <div class="modal-content">

						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
						        </button>
						        <h4 class="modal-title" id="myModalLabel2">Are you sure delete this?</h4>
						      </div>
						      <div class="modal-body text-center">
						        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						        <a href="#" type="button" class="btn btn-success" data-method="delete">Yes, I'm sure</a>
						      </div>

						    </div>
						  </div>
						</div>
						<!-- END MODAL -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>