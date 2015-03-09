<?php

$blog = json_decode(file_get_contents('/data/db.json'));

?>
<ul>
<?php foreach ($blog->articles as $article): ?>
<fieldset>
    <legend><?= $article->title ?></legend>
    <p><?= $article->content ?></p>
</fieldset>
<?php endforeach; ?>
</ul>
