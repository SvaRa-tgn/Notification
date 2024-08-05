<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('/css/main.min.css?v=').time()}}">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<main class="main">
    <section class="wrap-form">
        <form class="form" method="POST" action="{{ route('api.v1.notification')}}" enctype="multipart/form-data">
            @csrf
            <article class="name-admin-block">
                <h1 class="h1">Отправка POST</h1>
            </article>
            <div class="wrap-input">
                <label class="form-label">
                    Email отправителя
                </label>
                <input class="input" type="text" name="sender"/>
            </div>
            <div class="wrap-input">
                <label class="form-label">
                    Email получателя
                </label>
                <input class="input" type="text" name="recipient"/>
            </div>
            <div class="wrap-input">
                <label class="form-label">
                    Текст сообщения
                </label>
                <input class="input" type="text" name="text"/>
            </div>
            <div class="wrap-button">
                <button class="button-auth accept"type="submit" name="submit-auth">Отправить</button>
            </div>
        </form>
    </section>

    <section class="wrap-form">
        <form class="form" method="POST" action="{{ route('api.v1.notification.rabbit')}}" enctype="multipart/form-data">
            @csrf
            <article class="name-admin-block">
                <h1 class="h1">Отправка RabbitMQ</h1>
            </article>
            <div class="wrap-input">
                <label class="form-label">
                    Email отправителя
                </label>
                <input class="input" type="text" name="sender"/>
            </div>
            <div class="wrap-input">
                <label class="form-label">
                    Email получателя
                </label>
                <input class="input" type="text" name="recipient"/>
            </div>
            <div class="wrap-input">
                <label class="form-label">
                    Текст сообщения
                </label>
                <input class="input" type="text" name="text"/>
            </div>
            <div class="wrap-button">
                <button class="button-auth accept"type="submit" name="submit-auth">Отправить</button>
            </div>
        </form>
    </section>
</main>

<script src="js/main.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
