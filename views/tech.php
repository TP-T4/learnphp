<?php
$title = 'Technology';
$posts = [
    [
        'title' => 'The Quiet Revolution of Edge Computing',
        'date' => 'September 18, 2026',
        'author' => 'Marta Saar',
        'body' => 'Edge computing brings data processing closer to the devices that create it, making connected services faster and more resilient.',
    ],
    [
        'title' => 'Why Small Models Are Finding Their Place',
        'date' => 'September 12, 2026',
        'author' => 'Rasmus Tamm',
        'body' => 'Compact AI models can run locally with lower costs and less latency, opening practical new uses for everyday software.',
    ],
    [
        'title' => 'Designing Better Developer Tools',
        'date' => 'September 5, 2026',
        'author' => 'Kaisa Kask',
        'body' => 'The best developer tools remove friction from familiar tasks while making the important decisions easier to see and understand.',
    ],
];

include __DIR__ . '/partials/header.php';
?>

<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
            <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
    </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
