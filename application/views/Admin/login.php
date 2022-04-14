<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Public info</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Biography</label>
                                        <textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="<?= base_url('asset/adminkit/examples/') ?>img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
                                        </div>
                                        <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>