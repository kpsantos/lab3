<!--<h2><?= esc($title) ?></h2>-->
<body class="bg">
<main>

<div class="welcome-container">
    <header class="welcome-text">Guest Form</header>
</div>
<div class="article">
<section class="aboutme1">
<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $g): ?>

        <h3><?= esc($g['name']) ?></h3>

        <div class="main">
            <?= esc($g['email']) ?>
	    <br>
            <?= esc($g['website']) ?>
            <br>
            <?= esc($g['comment']) ?>
	    <br>
            <?= esc($g['gender']) ?>
	    <br>
        </div>
       
    <?php endforeach ?>
    <a href=<?= base_url('guests/new') ?>>Leave your feedback here!</a>
<?php else: ?>
    
    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>
    

<?php endif ?>
</section>
</div>
</main>
</body>