<?php
?>

<div style="border:1px solid green; margin-top: 20px; padding: 20px">
    <h4><?= $current_news['title'] ?></h4>
    <p><strong>Date:</strong><?= $current_news['created_at']?></p>
    <p><?= $current_news['description']?></p>
    <p><strong>Category:</strong>: <?= $current_news['category']?></p>
    <p><strong>Author:</strong><?= $current_news['author']?></p>
</div>
