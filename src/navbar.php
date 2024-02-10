<nav class="flex border-b-2 drop-shadow-lg border-ascent justify-between px-8 py-6">
    <div class="flex gap-x-5 items-center font-semibold text-ascentBlack">
        <span class="material-symbols-outlined text-5xl">
            photo_library
        </span>
        <span class="text-2xl">
            E-Gallery
        </span>
    </div>
    <div class="flex items-center gap-x-5 text-xl font-semibold text-ascentBlack">
        <a href="index.php" class="cursor-pointer <?php echo $currentPage === 'dashboard' ? 'text-white bg-ascentBlack' : ''; ?> px-5 py-2 rounded-lg">Dashboard</a>
        <a href="album.php" class="cursor-pointer <?php echo $currentPage === 'album' ? 'text-white bg-ascentBlack' : ''; ?> px-5 py-2 rounded-lg">Album</a>
        <a href="photo.php" class="cursor-pointer <?php echo $currentPage === 'photo' ? 'text-white bg-ascentBlack' : ''; ?> px-5 py-2 rounded-lg">Photo</a>
    </div>

</nav>