<?php require_once 'app/views/templates/private_header.php' ?>
<div class="container" >
        <h1>Update Reminder</h1>
    <form method="POST" action="/reminders/update/<?php echo $data['reminder']['id']; ?> ">
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo htmlspecialchars($data['reminder']['subject']); ?>" required>
            
        </div>
        <button type="submit" class="btn btn-primary ">Update</button>
    </form>
   
</div>
 <?php require_once 'app/views/templates/footer.php' ?>