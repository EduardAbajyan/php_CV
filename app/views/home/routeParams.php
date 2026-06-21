<?php
include base_path('app/views/partials/flash');
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Route Parameters</h4>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-3"><strong>Method:</strong></div>
                <div class="col-md-9"><?php echo htmlspecialchars($method ?? 'Data not found'); ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"><strong>ID:</strong></div>
                <div class="col-md-9"><?php echo htmlspecialchars($id ?? 'Data not found'); ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"><strong>Username:</strong></div>
                <div class="col-md-9"><?php echo htmlspecialchars($username ?? 'Data not found'); ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"><strong>Password:</strong></div>
                <div class="col-md-9"><?php echo htmlspecialchars($password ?? 'Data not found'); ?></div>
            </div>

        </div>
    </div>
</div>