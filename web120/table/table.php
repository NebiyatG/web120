<?php include "includes/header.php";?>
<style>
#menu {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#menu td, #menu th {
  border: 1px solid #ddd;
  padding: 8px;
}

#menu tr:nth-child(even){background-color: #f2f2f2;}

#menu tr:hover {background-color: #ddd;}

#menu th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  <table id="menu">
	<thead>
	<tr>
		<th>Neme</th>
		<th>Description and base ingredients</th>
		<th>Cost</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Pasta</td>
		<td>Tomato, oliveoil, solt, </td>
		<td>20</td>
	</tr>
        <tr>
		<td>Tuna Sandwich</td>
		<td>Tuna, Bread, Sald</td>
		<td>12</td>
	</tr>
        <tr>
		<td>Salad</td>
		<td>Lemon juice,Olivem oil, Garlic </td>
		<td>10</td>
	</tr>
        <tr>
		<td>Shiro</td>
		<td>Chopped beans, garlic, butter</td>
		<td>8</td>
	</tr>
        <tr>
		<td>Kitfo</td>
		<td>Grounded beef, chilie powder, butter</td>
		<td>20</td>
	</tr>
        <tr>
		<td>Tihilo</td>
		<td>Barly powder, salt, hot sauce</td>
		<td>14</td>
	</tr>
	</tbody>
</table>
<?php include "includes/footer.php";?>