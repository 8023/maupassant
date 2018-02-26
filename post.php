<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
    <div class="res-cons">
        <article class="post">
            <header>
                <h1 class="post-title"><?php $this->title() ?></h1>
            </header>
            <div class="post-meta">
                <time datetime="<?php $this->date('c'); ?>;">
                    <?php $this->date(); ?>;
                </time>
                <div class="post-category">
                    归类于 <?php $this->category(', '); ?>;
                </div>
            </div>
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
        </article>
        <?php $this->need('comments.php'); ?>
    </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
