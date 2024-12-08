<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Contact Message')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Contact Message')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
              <div class="breadcrumb-item"><?php echo e(__('admin.Contact Message')); ?></div>
            </div>
          </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.enable-save-contact-message')); ?>" method="POST">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Receive contact message email')); ?></label>
                                    <input type="email" name="contact_email" class="form-control" value="<?php echo e($setting->contact_email); ?>">
                                </div>

                                <div class="form-group">
                                    <label for=""><?php echo e(__('admin.Want to save email in database?')); ?></label>
                                    <select name="enable_save_contact_message" id="" class="form-control">
                                        <option <?php echo e($setting->enable_save_contact_message == 1 ? 'selected' : ''); ?> value="1"><?php echo e(__('admin.Yes')); ?></option>
                                        <option <?php echo e($setting->enable_save_contact_message == 0 ? 'selected' : ''); ?> value="0"><?php echo e(__('admin.No')); ?></option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th width="5%"><?php echo e(__('admin.SN')); ?></th>
                                    <th width="10%"><?php echo e(__('admin.Name')); ?></th>
                                    <th width="15%"><?php echo e(__('admin.Email')); ?></th>
                                    <th width="10%"><?php echo e(__('admin.Phone')); ?></th>
                                    <th width="20%"><?php echo e(__('admin.Subject')); ?></th>
                                    <th width="35%"><?php echo e(__('admin.Message')); ?></th>
                                    <th width="5%"><?php echo e(__('admin.Action')); ?></th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $contactMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contactMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$index); ?></td>
                                        <td><?php echo e(html_decode($contactMessage->name)); ?></td>
                                        <td><?php echo e(html_decode($contactMessage->email)); ?></td>
                                        <td><?php echo e(html_decode($contactMessage->phone)); ?></td>
                                        <td><?php echo e(html_decode($contactMessage->subject)); ?></td>
                                        <td><?php echo e(html_decode($contactMessage->message)); ?></td>

                                        <td>
                                        <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm" onclick="deleteData(<?php echo e($contactMessage->id); ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>

                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

      <script>
        "use strict";
          function handleSaveContactMessage(){
            var isDemo = "<?php echo e(env('APP_MODE')); ?>"
            if(isDemo == 'DEMO'){
                toastr.error('This Is Demo Version. You Can Not Change Anything');
                return;
            }
              $.ajax({
                type:"put",
                data: { _token : '<?php echo e(csrf_token()); ?>' },
                url:"<?php echo e(url('/admin/enable-save-contact-message')); ?>",
                success:function(response){
                   toastr.success(response)
                },
                error:function(err){

                }
              })
          }

        function deleteData(id){
            $("#deleteForm").attr("action",'<?php echo e(url("admin/delete-contact-message/")); ?>'+"/"+id)
        }

      </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/contact_message.blade.php ENDPATH**/ ?>