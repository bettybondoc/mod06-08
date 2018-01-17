<?php 
	function getTitle() {
		return '12 Days of Christmas';
	}

	function getLyrics() {
		$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth');

		$gifts = array(
			'A partridge in a pear tree',
			'Two turtle doves',
			'Three french hens',
			'Four calling birds',
			'Five golden rings',
			'Six geese a-laying',
			'Seven swans a-swimming',
			'Eight maids a-milking',
			'Nine ladies dancing',
			'Ten lords a-leaping',
			'Eleven pipers piping',
			'Twelve drummers drumming'
		);

		for ($y=0; $y<=11; $y++) {
				echo '<div id = "day' . $y . '">';
				echo "On the $days[$y] day of Christmas <br> my true love sent to me: <br>";
			if ($y == 0) {
				echo "$gifts[$y] <br>";	
			} else {
				for ($x=$y; $x>=0; $x--) {
					if ($x == 0)
						echo "And " . strtolower($gifts[$x]) . " <br>";	
					else
						echo "$gifts[$x] <br>";	
					}
				}
			echo '</div>';
			}
		}