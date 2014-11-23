<html>
<head>
<script type="text/JavaScript">
<!--
function popup() {
alert("Hello World")
}
function tableCreate(){

	var element = document.getElementById("calendarEle");
	element.parentNode.removeChild(element);

    var body = document.body,
        tbl  = document.createElement('table');
        tbl.setAttribute("id","calendarEle");
    tbl.style.width='100px';
    tbl.style.border = "1px solid black";

    for(var i = 0; i < 3; i++){
        var tr = tbl.insertRow();
        for(var j = 0; j < 2; j++){
            if(i==2 && j==1){
                break
            } else {
                var td = tr.insertCell();
                td.appendChild(document.createTextNode('Cell'))
                td.style.border = "1px solid black";
                if(i==1&&j==1){
                    td.setAttribute('rowSpan','2');
                }
            }
        }
    }
    body.appendChild(tbl);
}

//-->
</script>
</head>
<body>
<input type="button" onclick="tableCreate()" value="update">
</body>
</html>