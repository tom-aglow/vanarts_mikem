<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts">

<!--    stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">

<!--    external java-script libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <title>Admin panel</title>
</head>
<body>
<!--    navbar-->
    <header class="navbar navbar-inverse">
        <div class="container">
            <span class="navbar-brand text_logo">Admin panel</span>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-li"><a href="/">go to the site</a></li>
                <li class="navbar-li"><a href="/admin/auth/logout">logout</a></li>
            </ul>
        </div>
    </header>

<!--page content-->
    <main class="container">
        <?=$sideBar ?? ''?>
        <?=$pageContent ?? ''?>
    </main>

<!--    custom js script-->
    <script src="/js/admin.js"></script>
</body>
</html>