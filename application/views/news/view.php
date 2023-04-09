<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->  
<div class="news-item">
    <h2><?= $news_item['title'] ?></h2>
    <p>
        <?= $news_item['text'] ?>   
    </p>
</div>
