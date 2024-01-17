<div class="card-footer">
    <h2>Kommentare:</h2>
    <div class="container px-5 my-5" style="max-width: 600px">
        <?php include 'commentform.php'; ?>
    </div>
    <!-- Commentframes -->
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-md-8">
                <!-- einzelner Kommentar -->
                <?php
                for ($i = 0; $i <= 3; $i++){
                    include 'commentsingle.php';
                }
                ?>
            </div>
        </div>
    </div>
</div>