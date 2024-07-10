<?php require_once 'app/views/templates/header.php' ?>
<div class="container mt-5">
    <div class="page-header text-center mb-4">
         <h1 class="display-4">Create New Reminder</h1>
     </div>
        <form action="/reminders/create" method="POST" class="needs-validation" novalidate>
     <div class="form-group">
         <label for="subject">Subject</label>
         <input type="text" class="form-control" id="subject" name="subject" required>
     <div class="invalid-feedback">
             Please provide a subject.
    </div>
     </div>
      <button type="submit" class="btn btn-success btn-lg">Create</button>
     </form>
     <?php require_once 'app/views/templates/footer.php' ?>
    </div>

          <style>
             .container {
                 background-color: #f8f9fa;
                     border-radius: 8px;
                      padding: 20px;
                     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                         }
            .display-4 {
                 font-weight: 300;
                  color: #343a40;
                       }
            .btn-lg {   
                margin-top: 20px;
                         }
                        </style>

                        <script>
                          
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    var forms = document.getElementsByClassName('needs-validation');
                                    Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
