<div class="news-item">
        <h3><?= $news_item['title'] ?></h3>
                <div class="main">
                        <?= $news_item['text'] ?>
                </div>
        <p><a href="<?= site_url('news/'.$news_item['slug']) ?>">View article</a></p>
</div>
