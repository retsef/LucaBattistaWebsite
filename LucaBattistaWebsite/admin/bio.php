<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bio</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include './parts/sidebar.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bio
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Bio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            
            <div id="page-wrapper">
                
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <h2>Titolo</h2>
                        <div class="input-group" id="bio_title" style="width: 1%; display: table-cell;">
                            <input type="text" class="form-control" placeholder="Titolo" aria-describedby="basic-addon1">
                          </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h2>Descrizione</h2>
                        <div class="input-group" id="bio_description" style="width: 1%; display: table-cell;">
                            <textarea type="text" class="form-control" placeholder="Descrizione"  rows="7" aria-describedby="basic-addon1" required></textarea> 
                          </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Foto</h2>
                        <img id="bio_photo" width="350px" src=""/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button id="savebtn" type="button" style="margin-top: 50px" class="btn btn-primary btn-lg">
                            <span class="glyphicon glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> 
                            Salva
                          </button>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

                <script>
                $(function() {
                   $.getJSON('../../../../content/bio.json', function(data) {

                       $("#bio_title input").val(data.title);
                       $("#bio_description textarea").val(data.description);
                       $("#bio_photo").replaceWith("<img id=\"bio_photo\" width=\"350px\" src=\"../"+data.photo+"\"/>")

                   });
                });
                </script>
                
                <script>
                    $('#savebtn').click(function() {
                    
                        var json = 
                        "{\n"+
                            "\"title\":"+"\""+$("#bio_title input").val()+"\""+",\n"+
                            "\"description\":"+"\""+$("#bio_description textarea").val()+"\""+",\n"+
                            "\"photo\":"+"\""+"images/pic/foto_interno.jpg"+"\"\n"+
                        "}";

                        $.ajax
                        ({
                            type: "GET",
                            contentType : 'application/json',   
                            async: false,
                            url: './save_json.php',
                            data: {'file':"../content/bio.json",'data':json},//JSON.stringify(json),
                            success: function () {alert("Salvataggio riuscito!"); },
                            failure: function() {alert("Errore!");}
                        });
                    });
                </script>
            
        </div>
        <!-- /#page-wrapper -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
