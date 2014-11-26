<?php
function showlist()
{
?>
<script src="fav_link.js" type="text/javascript"></script>
<script src="fiction_link.js" type="text/javascript"></script>
<script src="recent_link.js" type="text/javascript"></script>
<a href="#" onclick="return fav()">favorites</a>
&nbsp &nbsp &nbsp
<a href="#" onclick="return fiction()">fiction</a>
&nbsp &nbsp &nbsp
<a href="#" onclick="return recent()">Recently read</a>
&nbsp &nbsp &nbsp

&nbsp &nbsp &nbsp
&nbsp
<div id="mytable">
<table border='1'>
<tr><th>Title</th>
<th>Author</th>
<th>language</th>
<th>Category</th></tr>
<tr>

<?php
//changes 
if ($handle = opendir('C:/wamp/www/books/Classics')) 
{
    while (false !== ($entry = readdir($handle))) 
	{
        if ($entry != "." && $entry != "..") 
		{
            $file = fopen("C:/wamp/www/books/Classics/$entry", "r");
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
}
echo "</table>";
echo "</div>";
?>

