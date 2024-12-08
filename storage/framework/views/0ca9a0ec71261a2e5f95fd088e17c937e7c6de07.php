<?php
$user = Auth::guard('web')->user();
$unseenMessages = Modules\SupportTicket\Entities\TicketMessage::where(['unseen_user' => 0, 'user_id' => $user->id])->groupBy('ticket_id')->get();
$count = $unseenMessages->count();
?>

<li class="<?php echo e(Route::is('seller.ticket') || Route::is('seller.ticket-show') || Route::is('seller.create-new-ticket') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('seller.ticket')); ?>"><i class="fas fa-envelope-open-text"></i>
        <span><?php echo e(__('admin.Support Ticket')); ?> <sup class="badge badge-danger"><?php echo e($count); ?></sup></span>
    </a>
</li>
<?php /**PATH C:\testing\complete_game_topup\pak_game\Modules/SupportTicket\Resources/views/seller/sideber.blade.php ENDPATH**/ ?>