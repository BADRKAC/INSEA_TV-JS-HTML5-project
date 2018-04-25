<?php

@$con=mysql_connect("localhost","root","");
@mysql_select_db("inseatv",$con);

$req="SELECT * FROM tv" ;
$res=mysql_query($req);

echo "<table border=1 >  <tr>   <td> numero </td > <td>  Name </td>  <td> Email </td>  <td>  Message </td>      </tr>";

while($data=mysql_fetch_assoc($res))
{

echo " <tr><td>".$data['ens']." </td>  <td> ".$data['nom']."</td>  <td>  ".$data['email']."</td>  <td>  ".$data['msg']." </td>    </tr>";

}
echo "</table>";


?>

<form method=Get   action=supptv.php>
 ISM :<select name=name> 
<?php

$req="select nom ,ens from tv" ;
$res=mysql_query($req);
while($data=mysql_fetch_assoc($res))
{
	
	$lig="<option value=".$data['ens'].">".$data['nom']."</option>";
	echo $lig ;
}

mysql_close();
?>
</select>
 <input type=submit name=valider value=Supprimer>
</form>
	
