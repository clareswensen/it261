<?php // this will be my errors page

// logically, if we have more than 0 errors, we need to display a message
// if end-user did not fill in the email input field, the message will display- Email is required
// array_push($errors, 'Email is required')
// don't forget, we cannot echo an array - foreach loop
// we will be using foreach loop!

if(count($errors) > 0 ) :?>

<div class="error">
<?php foreach($errors as $error) : ?>
<p><?php echo $error; ?> </p>
<?php endforeach; ?>
</div>

<?php endif; ?>
