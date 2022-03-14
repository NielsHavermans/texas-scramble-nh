<?php

use classes\Database;

class TexasScramble 
{
	private $Database; // Database

	/**
	* Create a list with all the golfers
	*
	* @param array $golfer The golfers in a array
	*
	* @return string The formatted list
	*/
	private function createGolfersList ( array $golfers ) : string 
	{
		$list = '<div class="golferrow">
			<div class="td"><strong>#</strong></div>
			<div class="td"><strong>Naam</strong></div>
			<div class="td"><strong>Geslacht</strong></div>
			<div class="td"><strong>Handicap</strong></div>
		</div>';
		$i = 0;
		foreach($golfers as $golfer)
		{
			$list.= '<div class="golferrow '.(($i % 2 == 0) ? 'odd' : 'even').'">';
			$list.= '	<div class="td">'.$golfer['id'].'</div>';
			$list.= '	<div class="td">'.$golfer['name'].'</div>';
			$list.= '	<div class="td">'.$golfer['gender'].'</div>';
			$list.= '	<div class="td">'.$golfer['handicap'].'</div>';
			$list.= '</div>';
			$i++;
		}
		return $list;
	}
	
	/**
	* Get all the golfers from Database and create a formatted list
	*
	* @return string All the golfers in a formatted list
	*/
	public function getGolfersList () : string
	{
		$this->Database = new Database(); // Connect to the database
		
		$golfers = $this->Database->get('competitors', '1 = 1', 'id ASC', 40); // Select the golfers, ordered by id
		
		$list = $this->createGolfersList($golfers); // Get the formatted list
		
		return $list;
	}
	
	/**
	* Create a new golfer
	*
	* @param array $golfer The golfers to create
	*
	* @return bool Return status
	*/
	public function createGolfer ( array $golfer ) : bool
	{
		$this->Database = new Database(); // Connect to the database
		
		$create = $this->Database->insert('competitors', $golfer); // Insert the new golfer
				
		return $create;
	}
	
	/**
	* Get all the golfers from Database
	*
	* @return array All the golfers in a ordered list
	*/
	public function getAllGolfers () : array
	{
		$this->Database = new Database(); // Connect to Database 
				
		$golfers = $this->Database->get('competitors', '1 = 1', 'handicap ASC', 40); // Select the golfers, ordered by handicap
		
		return $golfers;
	}
	
	/**
	* Give a list of golfers per flight
	*
	* @param array $golfers The golfers to organize
	* @param int $flightcount The max flight count
	*
	* @return array Flights with golfers, average handicap and playing handicap
	*/
	public function getFlights ( array $golfers, int $flightcount) : array
	{
		
		$flights = array(); //holder for all flights, return holder
		$rawFlights = array(); //holder for all the raw flights
		
		$i = 0; // loop per flight
		$j = 0; // full loop for all golfers
		$total = count($golfers); // get the golfers count
		foreach($golfers as $k => $v) { // loop through all golfers
			if ($i == 0) {
				// Create new flight
				$flight = array();
			} else if ($i<$flightcount) { 
				// Continue current flights
			} else {
				// Finish this flight?
				if ($j != ($total-1)) {
					$i = 0; // Reset
					$flight = array();
				}
			}
			$v['num'] = $i.'/'.$j.'/'.($total-1);
			$flight['golfers'][] = $v; // Add golfer to the flight
			
			if ($i == ($flightcount-1) || $j == ($total-1)) {
				$rawFlights[] = $flight; // Add flight to raw holder
			} 
			//reset
			$i++;
			$j++;
		}
		
		// Loop through raw holder and enrich the flight
		foreach ($rawFlights as $flight) {
			$count = count($flight['golfers']); // Count all golfers
			$lowest = (float) $flight['golfers'][0]['handicap']; // Get the lowest handicap
			$all = 0; // Holder for complete handicap (uses for average and playing handicap)
			foreach($flight['golfers'] as $f) {
				$all = ($all + (float) $f['handicap']); 
			}
			$flight['averagehandicap'] = ($all/$count); // Calc average handicap
			$flight['playinghandicap'] = (($lowest*0.5)+(($all-$lowest)/($count-1)*0.1)); // Calc playing handicap
			$flights[] = $flight;
		}
		
		//return the flights
		return $flights;
	}
	
	/**
	* Give a formatted list with all the flights
	*
	* @param array $flights The calculated flights
	*
	* @return string Formatted list
	*/
	public function createFlightList ( array $flights ) : string
	{
		$flightCount = 1;
		$list = '';
		foreach($flights as $flight) {
			$list.= '<div class="flight"><div class="content">';
			$list.= '<strong>Flight #'.$flightCount.'</strong><br/>';
			$golferCount = 1;
			foreach($flight['golfers'] as $golfer) {
				$list.= $golferCount.': '.$golfer['name'].' ('.$golfer['gender'].') '.$golfer['handicap'].'</br>';
				$golferCount++;
			}
			$list.= '<em>Gemiddelde handicap: '.number_format($flight['averagehandicap'], 1, '.', '.').'<br/>';
			$list.= 'Playing handicap: '.number_format($flight['playinghandicap'], 1, '.', '.').'</em><br/>';
			$list.= '</div></div>';
			$flightCount++;
		}
		
		return $list;
	}
}

?>