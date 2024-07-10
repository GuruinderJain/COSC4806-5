<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminder</h1>
              </div>
        </div>
    </div>
    <p>

        <?php foreach ($reminders as $reminder): ?>
            <p>
                <a href="/reminders/update/<?php echo $reminder['id']; ?>">Update</a>
                <a href="/reminders/delete/<?php echo $reminder['id']; ?>">Delete</a>
                <a href="/reminders/create/<?php echo $reminder['id']; ?>">Create</a>
            </p>
        <?php endforeach; ?>

    <?php require_once 'app/views/templates/footer.php' ?>
