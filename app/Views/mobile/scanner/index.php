<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"><?= $title ?></div>
    <div class="right"></div>
</div>
<!-- * App Header -->
<br><br>
<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2">
        <center>
            <div style="width: 350px" id="reader"></div>
            <p id="result"></p>
        </center>
    </div>

</div>
<!-- * App Capsule -->

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    // get elemen result
    const resultContainer = document.getElementById('result');

    function onScanSuccess(decodedText, decodedResult) {
        // Handle on success condition with the decoded text or result.
        console.log(`Scan result: ${decodedText}`, decodedResult);
        window.location.href = "<?= base_url('app/result/') ?>" + decodedText;
        html5QrcodeScanner.clear();

    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 200,
        }, {
            facingMode: "environment"
        });

    html5QrcodeScanner.render(onScanSuccess);
</script>
<?= $this->endSection(); ?>