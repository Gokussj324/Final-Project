function addRow() {
          
    var myName = document.getElementById("name");
    var id = document.getElementById("id");
    var january = document.getElementById("january");
    var table = document.getElementById("myTableData");
    var february =document.getElementById("february");
    var march =document.getElementById("march");
    var april =document.getElementById("april");
 
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
 
    row.insertCell(0).innerHTML= '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">';
    row.insertCell(1).innerHTML= myName.value;
    row.insertCell(2).innerHTML= id.value;
    row.insertCell(3).innerHTML= january.value;
    row.insertCell(4).innerHTML= february.value;
    row.insertCell(5).innerHTML= march.value;
    row.insertCell(6).innerHTML= april.value;

 
}
 
function deleteRow(obj) {
      
    var index = obj.parentNode.parentNode.rowIndex;
    var table = document.getElementById("myTableData");
    table.deleteRow(index);
    
} 

 
function load() {
    
    console.log("Page load finished");
 
}