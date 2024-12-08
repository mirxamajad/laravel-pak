<?php
$unseenMessages = Modules\SupportTicket\Entities\TicketMessage::where('unseen_admin', 0)->groupBy('ticket_id')->get();
$count = $unseenMessages->count();
?>

<li class="<?php echo e(Route::is('admin.ticket') || Route::is('admin.ticket-show') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('admin.ticket')); ?>">
        <i class="fas fa-envelope-open-text"></i>
         <span><?php echo e(__('admin.Support Ticket')); ?> <sup class="badge badge-danger"><?php echo e($count); ?></sup></span>
    </a>
</li>
<?php /**PATH C:\xampp\htdocs\axtro\axtro_cc\admin_panel\main_files\Modules/SupportTicket\Resources/views/admin/sideber.blade.php ENDPATH**/ ?>