<html>
<head>
<title>My Form</title>
<?php echo $assets; ?>
</head>
<body>

<?php echo form_open('user/add'); ?>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>Password</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5>First Name</h5>
<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" size="50" />

<h5>Last Name</h5>
<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" size="50" />

<h5>Gender</h5>
<input type="text" name="gender" value="<?php echo set_value('gender'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>