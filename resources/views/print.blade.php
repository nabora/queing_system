<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print View</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body
    class="bg-image"
    style="
        background-image: url('/images/bgImg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
  ">

    <div class="container-print bg-white">
        <h1><strong>{{ $queue_number }}</strong></h4>
        <p>{{ $office }}</p>
        <p><strong>Services Selected:</strong></p>
        <p>{{ $services }}</p>
    </div>

    <div class="container justify-content-center">
        <button type="button" class="btn btn-primary btn-lg">Print</button>
    </div>
    

</body>
</html>