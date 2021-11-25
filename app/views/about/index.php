<section class="about d-flex justify-content-center mt-5">

    <div class="card mb-3 shadow-lg" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= BASEURL;?>/assets/img/me.jpg" class="img-fluid rounded-start" alt="<?= $data['name']?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">About Me</h5>
                    <p class="card-text">Hallo I'm <?= $data['name']?>.i'm also <?= $data['job']?> and this December i will be <?= $data['age']?> yo</p>
                </div>
            </div>
        </div>
    </div>
</section>