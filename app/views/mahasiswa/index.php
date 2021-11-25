<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Insert Data Student
        </button>

        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Insert Data Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                    <form action="<?= BASEURL;?>/mahasiswa/tambah" method="POST">

                    <input type="hidden" name="id" id="id">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="number" class="form-control" id="nrp" name="nrp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Competetion</label>
                            <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">submit data</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

            
            <h3 class="mt-3" >Student Lists</h3>
            

            <table class="table vw-80">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['mahasiswa'] as $mhs) : ?>
                    <tr>
                    <th scope="row">1</th>
                    <td><?= $mhs['name']?></td>
                    <td><?= $mhs['nrp']?></td>
                    <td><?= $mhs['email']?></td>
                    <td><?= $mhs['jurusan']?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']?>" type="button" class="btn btn-outline-info">Detail</a>
                        
                        <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']?>" type="button" class="btn btn-outline-warning tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>

                        <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']?>" type="button" class="btn btn-outline-danger" onclick="return confirm('yakin?');" >Delete</a>
                    </div>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>