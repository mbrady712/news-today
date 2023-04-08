<div id="create">
    <?= validation_errors() ?>

    <?= form_open('news/create') ?>

        <label for="title">Title</label><br />
        <input id="title" type="text" name="title" /><br />

        <label for="text">Text</label><br />
        <textarea name="text"></textarea><br />

        <input id="submit" type="submit" name="submit" value="SUBMIT" />

    </form>
</div>
