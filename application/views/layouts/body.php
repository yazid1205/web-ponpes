<html>
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <ul>
            <li>
                <a href="<?php echo base_url('blog') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('blog/berita') ?>">Berita</a>
            </li>
        </ul>

        <?php $this->load->view($page); ?>

        <br>
        <p>Footer</p>
    </body>
</html>