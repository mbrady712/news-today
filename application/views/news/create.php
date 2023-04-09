<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->  
<div id="create">

    <?= form_open('news/create') ?>

        <label for="title">Title</label><br />
        <input id="title" type="text" name="title" /><br />

        <label for="text">Text</label><br />
        <textarea name="text"></textarea><br />

        <input id="submit" type="submit" name="submit" value="SUBMIT" />

    </form>

    <div id="errors">
        <?= validation_errors() ?>
    </div>

</div>
