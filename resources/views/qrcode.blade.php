<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Scan QR Code For Menu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">

        <div class="card text-center">
            <div class="card-header">
                <h2>Scan QR Code</h2>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        {!! QrCode::size(300)->wiFi([
                            'encryption' => 'WPA/WEP',
                            'ssid' => 'AhmedWIFI',
                            'password' => '04RDE149A2J',
                            'hidden' => 'Whether the network is a hidden SSID or not.',
                        ]) !!}
                        <h4 class="text-center">WIFI</h4>
                    </div>
                    <div class="col-md-4">
                        {!! QrCode::size(300)->geo(37.822214, -122.481769) !!}
                        <h4 class="text-center">Location</h4>
                    </div>
                    <div class="col-md-4">
                        {!! QrCode::size(300)->backgroundColor(0, 188, 212)->generate('https://book-store.sonorcastle.com/%D8%B1%D9%8A%D8%A7%D8%B6%20%D8%A7%D9%84%D8%B5%D8%A7%D9%84%D8%AD%D9%8A%D9%86') !!}
                        <h4 class="text-center">URL</h4>
                    </div>
                </div>



            </div>
        </div>

    </div>
</body>

</html>
