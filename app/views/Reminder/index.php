<div class="container">
    <h1>Reminders</h1>
    <?php if (!empty($data['reminders'])): ?>
        <ul class="list-group">
            <?php foreach ($data['reminders'] as $reminder): ?>
                <li class="list-group-item">
                    <?php echo htmlspecialchars($reminder['subject']); ?>
                    <a href="/reminders/update/<?php echo $reminder['id']; ?>" class="btn btn-sm btn-primary">Update</a>
                    <a href="/reminders/delete/<?php echo $reminder['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No reminders found.</p>
    <?php endif; ?>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>