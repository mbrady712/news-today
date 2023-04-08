<div class="news-item">
        <h3><?= $news_item['title'] ?></h3>
                <p>
                        <?= $news_item['text'] ?>
                </p>
        <p><a href="<?= site_url('news/'.$news_item['slug']) ?>">View article</a></p>
</div>
