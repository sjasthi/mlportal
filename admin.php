
<!DOCTYPE html>
<html lang="en" style="background-color:#1c1c1c">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/81c2c05f29.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <title>Admin Portal</title>
    <style>
        .crud_button{
            font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  margin: 10px;
        }
        .crud_button :hover{
            color: #bdbdbd ;
        }
  </style>
</head>
<body>
    <?php include('header.php'); ?>

    <div class="resource-buttons">
    <a href="add-resource.php">
        <button type="button" class="general-button">Add Resource</button></a>
        <a href="delete-resource.php">
        <button type="button" class="general-button">Delete Resource</button></a>
        <a href="view-resources.php">
        <button type="button" class="general-button">View My Resources</button></a>
    </div>
    
    <table id="resourceTable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th style="color: white;">topic</th>
            <th style="color: white;">description</th>
            <th style="color: white;">type</th>
            <th style="color: white;">keywords</th>
            <th style="color: white;"></th>
            
        </tr>
    </thead>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('#resourceTable').dataTable({
            "processing": true,
            "ajax": "fetch_data.php",
            "columns": [
                {data: 'topic'},
                {data: 'description'},
                {data: 'type'},
                {data: 'keywords'},
                {data:null, "render": function(o){
                    var id = o.id;
                    var htmlString = `
                    <span>
                        <a class= "crud_button" href=index.php> Display </a>
                        <a class= "crud_button" href=modify-resource.php?id=`+id+`> Modify </a>
                        <a class= "crud_button" href=delete-resource.php?id=`+id+`> Delete </a>
                    </span>`;
                    return htmlString;
                }}
               
            ]
        });


    });

 
    </script>
    
</body>
</html>