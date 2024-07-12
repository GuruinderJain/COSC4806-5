document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap toasts
    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl);
    });

    // Show all toasts
    toastList.forEach(toast => toast.show());

    // Form validation
    var forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });

    // Initialize charts if present
    if (document.getElementById('loginChart') && document.getElementById('reminderChart')) {
        var loginCtx = document.getElementById('loginChart').getContext('2d');
        var reminderCtx = document.getElementById('reminderChart').getContext('2d');
        var data = JSON.parse(document.getElementById('chartData').textContent);

        var loginChart = new Chart(loginCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(data.total_logins),
                datasets: [{
                    label: '# of Logins',
                    data: Object.values(data.total_logins),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var reminderChart = new Chart(reminderCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(data.most_reminders),
                datasets: [{
                    label: '# of Reminders',
                    data: Object.values(data.most_reminders),
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
});