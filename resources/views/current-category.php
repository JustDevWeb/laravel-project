<h1><?= $current_category ?></h1>

<?php foreach ($news as $current_news): ?>

    <div style="border:1px solid green; margin-top: 20px; padding: 20px">
        <h4><a href="
        <?= route('news.current', ['id' => $current_news['id']]) ?>">
                <?= $current_news['title'] ?></a>
        </h4>
        <p><strong>Date:</strong><?= $current_news['created_at'] ?></p>
        <p><?= $current_news['description'] ?></p>
        <p><strong>Category:</strong>: <?= $current_news['category'] ?></p>
        <p><strong>Author:</strong><?= $current_news['author'] ?></p>
    </div>

<?php endforeach; ?>

</div>
