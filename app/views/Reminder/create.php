<?php require_once 'app/views/templates/private_header.php' ?>
<div class="container">
         <h1 >Create New Reminder</h1>
    
        <form action="/reminders/create" method="POST">
     <div class="form-group">
         <label for="subject">Subject</label>
         <input type="text" class="form-control" id="subject" name="subject" required>
       </div>
      <button type="submit" class="btn btn-primary">Create</button>
     </form>
    </div>

          <?php require_once 'app/views/templates/footer.php' ?>