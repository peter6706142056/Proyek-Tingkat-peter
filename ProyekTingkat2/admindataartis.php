<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <!-- Bootstrap -->
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "css/tablecss.css" rel = "stylesheet">
    </head>
    <body>
        <nav role="navigation" class="navbar navbar-default" style="background-color: #6ac96f;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Menu Admin</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" style="background-color: #6ac96f;" href="#">Kelola Member & Artis<b class="caret"></b></a>
                        <ul role="menu" style="background-color: #6ac96f;" class="dropdown-menu">
                            <li>
                                <a style="background-color: #6ac96f;" href="admindatamember.php">Lihat Member</a>
                            </li>
                            <li>
                                <a style="background-color: #6ac96f;" href="admindataartis.php">Lihat Artis</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2><center>DATA ARTIS</center></h2>
            <a href="" class="btn btn-primary" title="Tambah Artist"><span>Tambah Artist</span></a>
        </div>
            <div class="scrollit">
            <table class = "table table-fixed">
                <thead style="background-color: #aad8d7;">
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('koneksi.php');
                        $ambil_data=mysql_query("select * from Artist order by Username desc limit 10")or die (mysql_error());
                        while($tampil=mysql_fetch_array($ambil_data)) {
                        $Nama=$tampil['Nama'];
                        $Username=$tampil['Username'];
                        $Password=$tampil['Password'];
                        $Telepon=$tampil['Telepon'];
                    ?>
                    <tr>
                        <td><?php echo $Nama; ?></td>
                        <td><?php echo $Username; ?></td>
                        <td><?php echo $Password; ?></td>
                        <td><?php echo $Telepon; ?></td>
                        <td>
                            <a href="" class="btn btn-primary" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="" class="btn btn-danger"title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                </tbody>
                    <?php
                    }
                    ?>
            </table>
        </div>
        </div>
        </div>
        </div>
        <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #6ac96f;">
            <div class="container-5">
                <p class="navbar-text pull-left">&#169; Copyright by I Play Music, Designed by Bootstrap, Powered by <a href="http://www.telkomuniversity.ac.id">Telkom University</a></p>
                
                <a href="#" style="margin-right: 20px" class="navbar-btn btn-warning btn pull-right">About</a>
                <img class="navbar-right" style="margin-right: 20px" src="assets/d3.png" width="47px" height="47px"/>
                <img class="navbar-right" style="margin-right: 20px" src="assets/telu.png" width="120px" height="51,4px"/>
            </div>
        </nav>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src = "https://code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src = "js/bootstrap.min.js"></script>
    </body>
</html>