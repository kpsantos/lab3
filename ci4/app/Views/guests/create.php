<link rel="stylesheet" href="css/website.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--open sans font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto&display=swap" rel="stylesheet">
<!--logo font-->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

<div class="welcome-container">
	<?= session()->getFlashdata('error') ?>
	<?= validation_list_errors() ?>

	<form action="../guests" method="post">
	    <?= csrf_field() ?>
            <h2>Feedback?</h2>
            Name: <input type="text" name="name" value="<?= set_value('name') ?>">
            <br><br>
            E-mail: <input type="text" name="email" value="<?= set_value('email') ?>">
            <br><br>
            Website: <input type="text" name="website" value="<?= set_value('website') ?>">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?= set_value('comment') ?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
            <br><br>

	    <input type="submit" name="submit" value="Create guest item">
	</form>
</article>
