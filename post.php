<?php
/**
* AJAX handlers and functions
*/

require('includes/init.php');

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Check if its an ajax request, exit if not
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		// Exit script outputting JSON data
		$output = json_encode(
			array(
				'type' => 'error',
				'text' => 'Geen Ajax request'
			)
		);
		die($output);
	}

	if (isset($_POST['name'], $_POST['gender'], $_POST['handicap'], $_POST['method']) && $_POST['method'] == 'creategolfer') {
		//method: creategolfer
		// Pre-format the request
		$insert = array(
			'id' => 'NULL',
			'name' => $_POST['name'],
			'gender' => $_POST['gender'],
			'handicap' => $_POST['handicap'],
		);
		// TexasScramble
		$TexasScramble = new TexasScramble();
		$result = $TexasScramble->createGolfer($insert); // Insert the golfer to db
		
		//return result to AXAJ as JSON
		$output = json_encode(
			array(
				'type' => 'success',
				'text' => 'Golfer opgeslagen'
			)
		);
		die($output);
		
	} else if (isset($_POST['count'], $_POST['method']) && $_POST['method'] == 'createflight') {
		//method: creategolfer
		$flightcount = (int) $_POST['count'];
		
		// TexasScramble
		$TexasScramble = new TexasScramble();	
		$golfers = $TexasScramble->getAllGolfers(); // Get all the golfers ordered by handicap
		$flights = $TexasScramble->getFlights($golfers, $flightcount); // Create flights based on golfers and max flight size
		$flightslist = $TexasScramble->createFlightList($flights); // Format the flights to HTML
		
		//return result to AXAJ as JSON
		$output = json_encode(
			array(
				'type' => 'success',
				'text' => 'Golfer opgeslagen',
				'flights' => $flights,
				'flightslist' => $flightslist
			)
		);
		die($output);
		
	} else {
		// Error: show a generic error
		$output = json_encode(
			array(
				'type' => 'error',
				'text' => 'Er is een fout opgetreden'
			)
		);
		die($output);
	}
}

?>