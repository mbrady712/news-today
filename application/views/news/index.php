<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->  
<div class="news-item">
        <h3 class="<?= $news_item['importance'] ?>"><?= $news_item['title'] ?></h3>
                <p>
                        <?= $news_item['text'] ?>
                </p>
        <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>
</div>
