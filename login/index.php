<?php
session_start();
?>
<!doctype html><html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="../tailwind.config.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
        <title>Login</title>
        <meta name="title" content="Login">
    </head>
    <body class="bg-backgroundColor">
        <main class="bg-backgroundAccent w-4/12 flex flex-col mx-auto rounded-md mt-10">
            <h1 class="text-3xl text-primaryText text-center my-5">Login</h1>
            <form method="POST" class="flex flex-col mx-auto">
                <div class="flex flex-col">
                    <label class="">Username or email</label>
                    <input class="" type="text">
                </div>
                <div class="flex flex-col">
                    <label class="">Password</label> 
                    <input class="" type="password">
                </div>
                <div class="">
                    <input class="" type="submit" value="Login">
                </div>
            </form>
            <a class="" href="">Return to site</a>
        </main>
    </body>
</html>