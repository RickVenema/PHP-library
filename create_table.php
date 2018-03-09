 <?php
	/*
		---------------------
		Author: Rick Venema
		Version: 1.0
		License: GNU GPL/GPL
		---------------------
		# About:
		This object represents a table. This program can be used to make and display a table. 
		It is usable with own created CSS files and has the standard HTML layout without a css file
		
		# How to use:
		To use this program, you need to create an empty table first like this: 
		``` {php Creation of new table}
		$Table = new Table(); 
		```
		
		After this creation, the rows needs to be added. This is done using the add_Row() function:
		``` {php Adding of Rows to the table}
		$row = array("first item", "second item");
		$Table->add_Row($row);
		```
		
		When the rows are added, the table can have an ID. To set this ID the __setTitleID() function needs to be called:
		``` {php Set ID of table}
		$Table->__setTitleID("This_is_the_ID");
		```
		
		As conclusion we can print this created table using __print_object():
		``` {php Print table object}
		$Table->__print_object();
		``` 
		
		
	*/
	class Table {
		## Declaring the variables
		#start and stop of the table
		public $start_table;
		const stop_table = "</table>";
		# start and stop of rows
		const start_row = "<tr>";
		const stop_row = "</tr>";
		# start and stop of items
		const start_item = "<th>";
		const stop_item = "</th>";
		# variables declaration
		public $inhoud_array;
		public $input_Row;
		public $print_function;
		public $Total_rows;
		public $row_to_add;
		public $ID;
		
		/* 
		The functional code part
		*/
		public function __construct() {
			/* construct an empty table */
			$this->inhoud_array = array();
			$this->Total_rows = array();
			$this->start_table = "<table>";
		}
		
		public function add_Row($row_to_add){
			/* function to add a row to the table */
			array_push($this->Total_rows, $row_to_add);
		}
		
		public function __print_object() {
			/* function to print the table */
			echo $this->start_table; # prints the start of the table
			foreach ($this->Total_rows as $rows){
				/*
				loop thru all the rows the Total_rows variable
				*/
				echo self::start_row; # Prints the start row constant
				foreach ($rows as $item){
					echo self::start_item; # Prints the start of items
					echo $item; # Prints the item
					echo self::stop_item; # Prints the stop of items
				}
				echo self::stop_row; # Prints the stop of row.
			}
			
			echo self::stop_table; # Prints the stop of the table
			
		}
		
		public function __setTitleID($ID){
			/* function to set the ID of the table */
			$this->start_table = "<table id=". $ID .">";
		}
		
	}
 ?>