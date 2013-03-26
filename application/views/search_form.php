<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>HR Application</title>

    <title>ECWM604 Advanced Web Technologies - Coursework 2 </title>
    <script language="javascript" src="/testDev/js/jquery.js"></script>
    <script language="javascript" src="/testDev/js/bootstrap-rowlink.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-rowlink.css"rel="stylesheet">
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <style>
        p, li, h2, h3, h4 { font-family: 'Average Sans', sans-serif';'}
        p, li { font-size: 18px; }
        li { padding-bottom: 5px; }
    </style>
</head>
<body>

<form action="" method="GET">
                <div>
                    
                    <div>First names:        <br /> <input type=text id="fn" name='firstname'> </div>
                    <div>Last name:        <br />  <input type=text id="ln" name='lastname'> </div>
                    <div>Department Name:  <br />  <select type=text id="dt" name='dept'>
                        <option value="">Select Department</option>
                        <option value="ENCE">ENCE</option>
                        <option value="BIS">BIS</option>
                        <option value="CSSE">CSSE</option>
                       
                    </select>
                    </div>
                    <!-- <div>Current job Title: <br /> <input type=text id="jt" name='jobtitle'> </div> -->
                    <br /><div><input value="Search" type="submit" id="search">

            </form>
            <button id="reset">Reset</button>
            </br></br>
            <form action="" method="POST">
            <span><div id="result" class="span5"></div></span></table>    </form>

<script language="javascript">
    $('#search').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),dept : $('#dt').val() },function(data) {  //  ,jobtitle : $('#jt').val()
            var names = '<table class="table table-hover">';
            $.each(data, function(index, element) {
                if (index > 0) {names;}
               // names += "<tr>'<a href="index.php/lecDisplay/display id=element.id">'<td>"+element.firstName +"</td> "+"<td>"+ element.lastName+ "</td> <td>"+ element.department+"<td/> <td> "+ element.officeDay+"</td><td>"+element.AvStatus+"</td></a></tr>'"+ "<br/>";
                names += "<tr><td>"+element.firstName +"</td> "+"<td>"+ element.lastName+ "</td> <td>"+ element.department+"<td/> <td> "+ element.officeDay+"</td><td>"+element.AvStatus+"</td></tr>"+ "<br/>";
                //names += '<tr><td><a href="index.php/lecDisplay/display?id='+element.firstName +'>'+element.firstName +'</a></td> '+'<td class="nolink"><a href="#">'+ element.lastName+ "</a></td> <td>"+ element.department+"<td/> <td> "+ element.officeDay+"</td><td>"+element.AvStatus+"</td></tr>"+ "<br/>";
            });
            names+='';
            $('#result').html(names);
        },"json");
        return false;
    });
</script>
</body>
</html>