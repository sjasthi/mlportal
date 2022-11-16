<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">

<head>

  <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/81c2c05f29.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  <title>Machine Learning Portal</title>
  <style>
    .dataTables_length select {
      background-color: white !important;
    }

    .dataTables_filter input {
      background-color: white !important;
      color: black;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
      color: white;
    }
  </style>
</head>

<?php include "header.php" ?>


<table id="resourceTable" class="display" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th style="color: white;">id</th>
      <th style="color: white;">topic</th>
      <th style="color: white;">description</th>
      <th style="color: white;">type</th>
      <th style="color: white;">keywords</th>
    </tr>
  </thead>
</table>
<script type="text/javascript">
  $(document).ready(function() {
    $('#resourceTable').dataTable({
      "processing": true,
      "pageLength": 50,
      "ajax": "fetch_data.php",
      "columns": [{
          data: 'id'
        },
        {
          data: null,
          "render": function(o) {
            var id = o.id;
            var topic = o.topic;
            var htmlString = `
                            <a href=view-resources.php?id=` + id + `>` + topic + `</a>
                            `;
            return htmlString;
          }
        },
        {
          data: 'description'
        },
        {
          data: 'type'
        },
        {
          data: 'keywords'
        },
      ]
    });
  });
</script>
</div>

</html>