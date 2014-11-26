<div id="mytable">
<table border='1'>
<tr><th>Title</th>
<th>Author</th>
<th>language</th>
<th>Category</th></tr>
<tr>

<?php

if ($handle = opendir('C:/wamp/www/books/Fiction')) 
{
    while (false !== ($entry = readdir($handle))) 
	{
        if ($entry != "." && $entry != "..") 
		{
            //echo "$entry\n";
			$file = fopen("C:/wamp/www/books/Fiction/$entry", "r");
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



