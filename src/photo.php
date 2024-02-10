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
        $currentPage = 'photo';
        include('navbar.php');
        ?>
    </header>
    <section class="grid grid-cols-5 px-14 py-5 place-items-center gap-10">
        <a href="add_photo.php">
            <article class="border-2 border-secondary/50 border-dashed w-72 h-72 rounded-lg">
                <div class="flex flex-col items-center justify-center gap-4 text-secondary/70 h-full">
                    <span class="material-symbols-rounded text-7xl">
                        add_circle
                    </span>
                    <span class="font-semibold">Add Photo</span>
                </div>
            </article>
        </a>
        <?php for ($i = 1; $i <= 21; $i++) : ?>
            <article class="border border-secondary/50 w-72 h-72 rounded-lg bg-white p-4">
                <div class="grid grid-cols-1 h-full gap-2">
                    <div class="row-span-4 place-self-center flex flex-col items-center">
                        <span class="font-semibold text-lg">Album <?= $i ?></span>
                        <span class="text-secondary/50">by lorem ipsum</span>
                    </div>
                    <div class="justify-self-center place-self-end flex gap-2">
                        <a href="">
                            <button class="flex items-center text-yellow-500 gap-1 border border-secondary/70 rounded px-2 py-1">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                                <span class="font-semibold text-sm">Edit</span>
                            </button>
                        </a>
                        <button class="flex items-center text-red-500 gap-1 border border-secondary/70 rounded px-2 py-1">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                            <span class="font-semibold text-sm">Delete</span>
                        </button>
                    </div>
                </div>
            </article>
        <?php endfor; ?>
    </section>
</body>

</html>