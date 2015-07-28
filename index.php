<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Substring Function</title>
	</head>
	<body>
		<?php
			
			$substrings = array("hi", "there", "how", "what", "howdy", "do", "you", "me", "day", "ow", "to", "i", "re", "h");
			$string = "Hi there, how are you today?";
			
			/* Takes an array of substrings (parameter 2) within a larger string (parameter 1)
			** and returns an associative array with all the substrings as index names and 
			** the number of occurances as their values
			*/
			function find_substrings($string, $substrings)
			{
				$string = strtolower($string);
				for($i = 0; $i < count($substrings); $i++)
				{
					$pattern = strtolower("/$substrings[$i]/");
					$found_match = preg_match_all($pattern, $string, $matches);
					if($found_match)
					{
						$substring_array[$substrings[$i]] = count($matches[0]);
					}
				}
				return $substring_array;
			}

			echo "<pre>";
			print_r(find_substrings($string, $substrings));
			echo "</pre>";
		?>
	</body>
</html>