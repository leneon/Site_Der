<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Car Rental Admin Dashboard
  </title>
  <style>
  .err{
    color:rgb(255, 81, 0);
    font-weight: bold;
    font-style: italic;
    margin-left: 10px;
    }
  th{
      width: ;
  }


  </style>
  <!-- Favicon -->
  <link href="/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
   <!-- Favicon -->
   <link href="/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <link rel="stylesheet" href="css/font-awesome-ie7.css">
  <link rel="stylesheet" href="css/font-awesome.css">


  <script src="/js/swal.js"></script>

  <!--Inject SWAL-->
  <?php

  if(!empty(session()->has('success'))) {?>
  <!--This code for injecting an alert-->
          <script>
                      setTimeout(function ()
                      {
                          swal("Succès","<?php echo session()->get('success');?>","success");
                      },50);
          </script>

  <?php } ?>

  <?php if(!empty(session()->has('err') )){?>
  <!--This code for injecting an alert-->
          <script>
                      setTimeout(function ()
                      {
                          swal("Echoué","<?php echo session()->get('err');?>","error");
                      },
                          50);
          </script>

  <?php } ?>

</head>
