<?php 

/**
 * Template Name: Vintage Vehicle Registration
 *
 * @package WordPress
 * @subpackage Field Day
 * @since Field Day 1.0
 */

include('header.php');

if (isset($_POST['submit'])) {
	$fname = $_POST['FNAME']; 
	$lname = $_POST['LNAME']; 
	$email = $_POST['EMAIL'];
	$address = $_POST['ADDRESS'];
	$city = $_POST['CITY'];
	$state = $_POST['STATE'];
	$zip = $_POST['ZIP'];
	$make = $_POST['MAKE'];
	$series = $_POST['SERIES'];
	$body = $_POST['BODY'];
	$year = $_POST['YEAR'];
	$engine = $_POST['ENGINE'];
	$signature = $_POST['SIGNATURE'];

	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'php_head_start')
	or die('Error establishing connection to database.');

	$query = "INSERT INTO antique_vehicle_registration(fname, lname, email, address, city, state, zip, make, series, body, year, engine, signature) " .
		 "VALUES ('$fname', '$lname', '$email', '$address', '$city', '$state', '$zip', '$make', '$series', '$body', '$year', '$engine', '$signature')";

	mysqli_query($dbc, $query)
		or die('Error querying database');

	mysqli_close($dbc);
}

?>

<div class="col-md-8 col-md-offset-2 col-xs-12 registration-form body">
	<?php echo do_shortcode("[mc4wp_form id='63']"); ?>
</div>