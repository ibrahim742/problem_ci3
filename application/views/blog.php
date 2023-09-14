<?php $this->load->view('partials/header'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>ITech Web</h1>
                    <span class="subheading">ITech Web Memberikan Sebuah Edukasi Seputar Perkembangan Teknologi</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <form method="get">
                <input type="text" name="find">
                <button type="submit">Search</button>
            </form>

            <!-- Php foreach -->
            <?php foreach ($blogs as $key => $blog) : ?>

                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>">
                        <h2 class="post-title"><?php echo $blog['title']; ?></h2>
                    </a>
                    <p class="post-meta">
                        Posted on <?php echo $blog['date']; ?>
                        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>">Edit</a>
                        <a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>">Delete</a>
                    </p>

                    <?php echo $blog['content']; ?>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>