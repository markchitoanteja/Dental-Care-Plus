<style>
    .border-4 {
        border-width: 4px !important;
    }

    .card:hover {
        transform: translateY(-3px);
        transition: 0.2s ease-in-out;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }
</style>

<section class="ftco-section bg-light py-5">
    <div class="container">
        <h2 class="mb-5 font-weight-bold text-center">Messages</h2>

        <!-- Analytics Cards -->
        <div class="row text-center mb-5">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-left border-primary border-4">
                    <div class="card-body py-4">
                        <div class="mb-3"><i class="fas fa-envelope fa-3x text-primary"></i></div>
                        <h6 class="text-muted">Total Messages</h6>
                        <h3 class="font-weight-bold mb-0"><?= esc(count($messages)) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-left border-success border-4">
                    <div class="card-body py-4">
                        <div class="mb-3"><i class="fas fa-envelope-open-text fa-3x text-success"></i></div>
                        <h6 class="text-muted">Unread Messages</h6>
                        <h3 class="font-weight-bold mb-0"><?= esc($unreadCount) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-left border-info border-4">
                    <div class="card-body py-4">
                        <div class="mb-3"><i class="fas fa-envelope-open fa-3x text-info"></i></div>
                        <h6 class="text-muted">Read Messages</h6>
                        <h3 class="font-weight-bold mb-0"><?= esc($readCount) ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Table -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="mb-0"><i class="fas fa-comments mr-2 text-primary"></i>Message Inbox</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle">
                        <thead class="thead-light">
                            <tr>
                                <th>Subject</th>
                                <th>Received</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($messages)): ?>
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No messages found.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($messages as $msg): ?>
                                    <tr class="<?= $msg['unread'] ? 'font-weight-bold' : '' ?>">
                                        <td><?= esc($msg['subject']) ?></td>
                                        <td><?= esc(date('F j, Y, g:i A', strtotime($msg['received_at']))) ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-danger delete-message-btn">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>