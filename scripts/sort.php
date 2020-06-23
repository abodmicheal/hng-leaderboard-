<?php
$data_array = array( 
    array( 
    "name" => "Austin Okocha",
    "tracks" => "Front End",
    "group" => "Eagle",
    "points" => "10"    
    ), 
    array( 
    	"name" => "Sunday Oliseh",
    	"tracks" => "Back End",
    	"group" => "Eagle",
    	"points" => "9"
    ),  
    array( 
 		"name" => "Roger Miller",
 		 "tracks" => "Front End",
 		 "group" => "Lions",
 		 "points" => "9"  
    ), 
    array( 
  		"name" => "Lucas Radebe",
  		"tracks" => "Back End",
  		"group" => "Tiger",
  		"points" => "8"
    ),
    array( 
 		"name" => "Rabah Madger",
 		 "tracks" => "Design",
 		 "group" => "Fennecs",
 		 "points" => "7"
    ), 
    array( 
		"name" => "Kalusha Bwalya",
		"tracks" => "Front End",
		"group" => "Copper Bullets",
		"points" => "6"
    ), 
    array( 
 		"name" => "Jonathan Pitroipa",
 		"tracks" => "Design",
  		"group" => "Stallions",
  		"points" => "5"
    ), 
    array( 
  		"name" => "Jonson Okocha",
  		"tracks" => "Front End",
  		"group" => "Eagle",
  		"points" => "4"
    ), 
    array( 
		"name" => " Jicheal owolabi",
		"tracks" => "Design",
		"group" => "Tiger",
		"points" => "4"
    ),  
    array( 
		"name" => "kennedy okoh",
		"tracks" => "Front End",
		"group" => "Eagle",
		"points" => "2"
    ) 
); 


/*$data = file_get_contents("users.json");
$array = json_decode($data, true);
var_dump($array);*/

class hng { 
	
	var $name, $tracks, $group, $points; 

	// Constructor for class initialization 

	public function hng($data) { 
		$this->name = $data['name']; 
		$this->tracks = $data['tracks']; 
		$this->group = $data['group']; 
		$this->points = $data['points']; 
	} 
} 

// Function to convert array data to class object 
function data2Object($data) { 
	$class_object = new hng($data); 
	return $class_object; 
} 

// Comparator function used for comparator 
// scores of two object/students 
function comparator($object1, $object2) { 
	return $object1->points < $object2->points; 
} 

// Generating array of objects 
$school_data = array_map('data2Object', $data_array); 

// Sorting the class objects according 
// to their scores 
usort($school_data, 'comparator'); 

// Printing sorted object array data 
print("\nSorted object array:\n"); 
echo "<br>";
print_r($school_data); 
?> 