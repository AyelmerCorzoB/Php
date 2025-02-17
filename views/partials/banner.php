<header class="bg-blue-300 shadow">
    <div class="container mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                <?= htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') ?>
            </h1>
        </div>
        <!-- <div class="text-right">
            <h2 class="text-xl">Hello, <?= $_SESSION['name'] ?? 'Invitado' ?></h2>
        </div> -->
    </div>
</header>