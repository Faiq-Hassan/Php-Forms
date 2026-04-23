<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['sumbit'])) {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        if (empty($name) || $weight <= 0 || $height <= 0) {
            echo "The provided information is not according to the requirment ❌";
        } else {
            $heightM = $height / 100;
            $bmi = $weight / ($heightM ** 2);
            $bmi = round($bmi, 1);
        };
        if ($bmi < 18.5) {
            $catagorey = "Under Weight";
            $advise = "Eat more nutrition";
        } else if ($bmi < 24.9) {
            $catagorey = "Normal";
            $advise = "You are prefectely fir";
        } else if ($bmi < 29.9) {
            $catagorey = "Overweight";
            $advise = "You have to loose your weight";
        } else {
            $catagorey = "Invalid";
            $advise = "Please enter correct values";
        }
        ;

    }
    ?>

    <body class="text-center" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1285.0"
        data-gr-ext-installed="">

        <main class="form-signin">
            <form method="POST">
                <?php if (isset($_POST['sumbit'])): ?>
                    <h3><?php echo $name; ?></h3>
                    <h3><?php echo $catagorey; ?></h3>
                    <h3><?php echo $advise; ?></h3>
                <?php endif; ?>
                <div class="form-floating">
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-floating">
                    <input type="number" name="height" id="height" placeholder="height">
                </div>
                <div class="form-floating">
                    <input type="number" name="weight" id="weight" placeholder="weight">
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-50 btn btn-lg btn-primary" type="submit" name="sumbit">submit</button>
                <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
            </form>
        </main>




        <audio class="audio-output" style="display: none;"></audio>
        <div id="volume-booster-visusalizer">
            <div class="sound">
                <div class="sound-icon"></div>
                <div class="sound-wave sound-wave_one"></div>
                <div class="sound-wave sound-wave_two"></div>
                <div class="sound-wave sound-wave_three"></div>
            </div>
            <div class="segments-box">
                <div data-range="1-20" class="segment"><span></span></div>
                <div data-range="21-40" class="segment"><span></span></div>
                <div data-range="41-60" class="segment"><span></span></div>
                <div data-range="61-80" class="segment"><span></span></div>
                <div data-range="81-100" class="segment"><span></span></div>
            </div>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>