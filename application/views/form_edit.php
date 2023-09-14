<?php $this->load->view('partials/header'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Artikel</h1><br>
            <form method="POST">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="title" value="<?php echo $blog['title']; ?>"><br>
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <input class="form-control" type="text" name="url" value="<?php echo $blog['url']; ?>"><br>
                </div>

                <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10">
            <?php echo $blog['content']; ?>
        </textarea><br>
                </div>
                <button class="btn btn-primary" type="submit">Simpan Artikel</button>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>