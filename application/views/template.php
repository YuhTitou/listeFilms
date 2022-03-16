<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $content;?></title>
        <meta name="description" content="Films">
        <style>
                    .barre {
            text-align: center;
            background-color: #3A5859;
            position: sticky;
        }
        
        .barre li a {
            display: block;
            font-size: 24px;
            text-decoration: none;
            color: #fff;
            margin: 30px;
        }
        
        .barre li a:hover {
            color: #000;
            border-radius: 3px;
        }
        
        .barre ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        li {
            display: inline-block;
        }
        
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #233A3B;
            color: #fff;
        }
        
        #films {
            text-align: center;
            font-weight: 500;
            letter-spacing: 5px;
            font-style: italic;
        }
        
        .box {
            margin: 0 auto;
            width: 400px;
        }
        
        .box1 {
            margin: 0 auto;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        #contenu{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            width: 30%;
            padding: 45px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            color: #000;
            margin-top: 50px;
            margin-left: -50px;
        }


        
        h1 {
            text-align: center;
        }
        
        input[type=input],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        input[type=submit] {
            background-color: #3A5859;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        input[type=submit]:hover {
            background-color: white;
            color: #000;
            border: 1px solid #000;
        }

        table{
            text-align: center;
            width:80%;
            border-spacing: 10px;
            border-collapse: collapse;
        }

        td{
            border: thin solid black;
            width: 15px;
            height: 5px;
        }
    </style>
    </head>
    <header>
        <nav class="barre">
            <ul>
                <li><a href="http://webetuinfo.iutlan.univ-rennes1.fr/b13/html/index.php">Accueil</a></li>
                <li><a href="http://webetuinfo.iutlan.univ-rennes1.fr/b13/html/index.php/films/allfilms">Films</a></li>
                <li><a href="http://webetuinfo.iutlan.univ-rennes1.fr/b13/html/index.php/films/create">Inscription</a></li>
                <li><a href="http://webetuinfo.iutlan.univ-rennes1.fr/b13/html/index.php/films/connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <body>
    <div id="global">
        <div id="entete">

        </div><!--# entete -->
        <div id="contenu">
            <?php $this->load->view($content);?>
        </div><!--# contenu -->
        <!--<div id="pied">
            <strong>&copy;2018</strong>
        </div>#pied-->
    </div><!--#global-->
    </body>
</html>