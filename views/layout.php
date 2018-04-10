<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="image/favicon.ico">

    <!-- <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

    <div class="menu-logo">
        <h1 class="big-logo"><a href="/">Anders Nygren</a></h1>
        <h5 class="sub-logo">Webbutveckling, fullstack, student@<a href="https://dbwebb.se">dbwebb</a></h5>

        <div class="side-panel">
            <header>
                <div class="">
                    <div class="header-logo">
                        <!-- <h2>litemerafrukt</h2> -->
                        <nav class="header-nav">
                            <a class="<?= $page == "/" ? 'nav-selected' : '' ?>" href="/">Hem</a>
                            <a class="<?= $page == "/code" ? 'nav-selected' : '' ?>" href="/code">Kod</a>
                            <a class="<?= $page == "/contact" ? 'nav-selected' : '' ?>" href="/contact">Kontakt</a>
                            <a class="<?= $page == "/about" ? 'nav-selected' : '' ?>" href="/about">Om</a>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="contact">
                <p>
                    <a class="dim" href="http://litemerafrukt.se/retrome/">Retrome</a>
                </p>
                <p>
                    <a href="mailto:litemerafrukt@gmail.com">litemerafrukt@gmail.com</a>
                </p>

            </div>
        </div>
    </div>

    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>


</body>
</html>
