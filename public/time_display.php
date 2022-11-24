<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Display</title>
    <link rel="stylesheet" href="/assets/css/adminlte.min.css">
    <script src="/assets/js/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    Your Current Time is: <span id="currentTime"></span><br />
    <?= "Current System Time is: " . time(); ?><br />
    <?= "Date Format: " . date("l jS \of F Y h:i:s A") ?>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '/unix_time.php',
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(response) {
                        const span = document.getElementById('currentTime');
                        span.innerHTML = '<span id="currentTime">' + response['formattedTime'] + '</span>';
                    }
                });
            }, 1000);
        });
    </script>

</body>

</html>