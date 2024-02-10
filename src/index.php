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
    <section class="grid grid-cols-5 px-14 py-5 gap-5">
        <article class="flex flex-col items-center w-72 cursor-pointer">
            <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
                <span>asukabhe</span>
                <span>Album 1</span>
            </div>
            <div class="w-fit h-fit overflow-hidden">
                <img src="/img/hand.jpg" alt="post.jpg" class="w-72 h-72 object-cover object-center">
            </div>
            <div class="border-b border-x border-secondary/30 rounded-b-lg">
                <div class="p-2">
                    <span class="text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio pariatur odit possimus quasi quia
                        explicabo?
                    </span>
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
        </article>
    </section>
</body>

</html>