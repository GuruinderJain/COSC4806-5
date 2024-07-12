<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    header('Location: login.php');
    exit();
}

require_once 'app/views/templates/private_header.php';

// Dummy data
$data = [
    'total_logins' => [
        'user1' => 20,
        'user2' => 35,
        'user3' => 15
    ],
    'most_reminders' => [
        'user1' => 10,
        'user2' => 5,
        'user3' => 15
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Reports</title>
</head>
<body>
    <div class="container">
        <h2>Reports</h2>
        <canvas id="loginChart"></canvas>
        <canvas id="reminderChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginCtx = document.getElementById('loginChart').getContext('2d');
            const reminderCtx = document.getElementById('reminderChart').getContext('2d');
            const data = <?php echo json_encode($data); ?>;

            const loginChart = new Chart(loginCtx, {
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

            const reminderChart = new Chart(reminderCtx, {
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
        });
    </script>
</body>
</html>
