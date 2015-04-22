<table id="sampleTable" >
	<tr>
		<th width="5%">sampleID</th>
		<th width="5%">skill</th>
		<th width="15%">name</th>
		<th width="35%">description</th>
		<th width="15%">icon</th>
		<th width="15%">url</th>
		<th width="10%">edit</th>
	</tr>
</table>

<datalist id="skillList">
    <option value="1">PHP</option>
    <option value="2">MySQL</option>
    <option value="3">JavaScript</option>
    <option value="4">HTML5</option>
    <option value="5">CSS3</option>
</datalist>

<style>
	table tr td {
		padding: 0px;
		margin: 0px;
	}
	
	table table, table table tr, table table tr td, table table tr th {
		padding: 0px;
		margin: 0px;
		background: none;
		border: none;
	}
</style>

<script>
	function addRow(rowData) {
		rowData = "<td colspan=\"7\"><form action=\"#\" method=\"get\"><table>" + 
			"<th>" + rowData["sampleID"] + "</th>" +
			"<td><input list=\"skillList\" name=\"name\" value=\"" + rowData["name"] + "\" /></td>" +
			"<td><input type=\"text\" name=\"name\" value=\"" + rowData["name"] + "\" /></td>" +
			"<td><textarea type=\"text\" name=\"description\">" + rowData["description"] + "</textarea></td>" +
			"<td><input type=\"url\" name=\"icon\" value=\"" + rowData["icon"] + "\" /></td>" +
			"<td><input type=\"url\" name=\"url\" value=\"" + rowData["url"] + "\" /></td>" +
			"<td><input type=\"submit\" name=\"Update\" value=\"Update\" /><input type=\"submit\" name=\"Delete\" value=\"Delete\" /></td>" +
		"</table></form></td>";
		
		console.log(rowData);
		row = $("<tr />").appendTo("#sampleTable");
		row[0].innerHTML = rowData;
	}
	
	function getSampleData() {
		var last
	}
</script>