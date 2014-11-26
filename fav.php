<div id="mytable">
<table border='1'>
<tr><th>Title</th>
<th>Author</th>
<th>language</th>
<th>Category</th></tr>
<tr>

<?php

if ($handle = opendir('C:/wamp/www/books/Favorites')) 
{
    while (false !== ($entry = readdir($handle))) 
	{
        if ($entry != "." && $entry != "..") 
		{
            $file = fopen("C:/wamp/www/books/Favorites/$entry", "r");
			while(!feof($file))
			{
				echo "<td>";
				$line = fgets($file);
				echo $line;
				echo "</td>";
			}

		echo "</tr>";
        }
		
    }
    closedir($handle);
}

?>
</table>
</div>



