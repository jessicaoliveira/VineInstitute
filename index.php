<?php
include 'core/init.php';
include 'includes/overall/header.php'; 

if (has_access($session_user_id, 1) === true) {
 	?> <p><b>(Administrator Access)</b></p> <?php
} else if (has_access($session_user_id, 2) === true) {
	?> <p><b>(Teacher Only Access)</b></p> <?php
}
?> 

<h1>Home</h1> 

<p> Just a template.</p>
 

<?php include 'includes/overall/footer.php'; ?>