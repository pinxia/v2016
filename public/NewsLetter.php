<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/index.css" rel="stylesheet"-->
        <title>news, newsLetter</title>
    </head>
    <body>
        <header>
            <?php include "header.html"; ?>
        </header>
        <div class="container body-col" id="body">
            <div class="row">
                <div class="col-sm-4 body-col">
                    <?php include "NewsMenu.html"; ?>
                </div>
                <div class="col-sm-8 body-col">
                    <?php include "NewsLetter.html"; ?>
                </div>
            </div>
        </div>
        <footer>
            <?php include "footer.html" ?>
        </footer>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    </body>
</html>
