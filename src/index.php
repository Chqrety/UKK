<?php
include('cek_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Gallery</title>

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- link icon -->
    <!-- no fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,1,0" />

    <!-- fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- import costum css -->
    <link rel="stylesheet" href="costum.css">

</head>

<body>
    <header>
        <?php
        $currentPage = 'dashboard';
        include('navbar.php');
        ?>
    </header>
    <section class="columns-5 px-14 py-5 gap-5">
        <?php for ($i = 1; $i <= 15; $i++) : ?>
            <div class="break-inside-avoid flex flex-col items-center w-full mb-5 transition-all hover:scale-105 hover:shadow-xl shadow-black">
                <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
                    <span class="font-bold">asukabhe</span>
                    <span class="italic">Album <?= $i ?></span>
                </div>
                <div class="overflow-hidden">
                    <img src="https://source.unsplash.com/random/?<?= $i ?>" alt="random unsplash image" class="w-full h-full object-cover object-center cursor-pointer">
                </div>
                <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
                    <div class="flex gap-x-3 text-sm p-2">
                        <div class="flex items-center">
                            <span class="material-symbols-rounded">favorite</span>
                            <span>12</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-symbols-rounded">chat_bubble</span>
                            <span>13</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </section>
    <!-- <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/afternoon.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/duck.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/day.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/japan.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/musquito.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="break-inside-avoid flex flex-col items-center w-full cursor-pointer mb-5">
        <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
            <span>asukabhe</span>
            <span>Album 1</span>
        </div>
        <div class="overflow-hidden">
            <img src="/img/window.jpg" alt="post.jpg" class="w-full h-full object-cover object-center">
        </div>
        <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <section class="columns-5 px-14 py-5">
        <div class="flex flex-col break-inside-avoid">
            <div class="flex justify-between">
                <span>Username</span>
                <span>Album</span>
            </div>
            <div>
                <img src="/img/hand.jpg" alt="asd">
            </div>
            <div class="flex gap-x-3 text-sm p-2">
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        favorite
                    </span>
                    <span>
                        12
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="material-symbols-rounded">
                        chat_bubble
                    </span>
                    <span>
                        13
                    </span>
                </div>
            </div>
        </div>
    </section> -->
</body>

</html>