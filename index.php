<?php
/**
 * 简单的响应式模板
 *
 * @package Maupassant
 * @author cho
 * @version 1.3
 * @link https://github.com/pickcho/maupassant
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
    <div class="res-cons">
        <?php while($this->next()): ?>
            <article class="post">
                <header>
                    <h2 class="post-title">
                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h2>
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
                    <?php $this->content('阅读全文...'); ?>
                </div>
            </article>
        <?php endwhile; ?>
        <?php $this->pageNav('&laquo; 上一页','下一页 &raquo;',10,'...');?>
    </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
