<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body>
    <div class="min-h-screen bg-gray-100 text-gray-800">
        <div class="p-6 space-y-8">

            <main>
                <div class="container mx-auto space-y-16">
                    <section class="grid gap-6 text-center lg:grid-cols-2 xl:grid-cols-5">
                        <div class="w-full p-6 rounded-md drop-shadow-xl sm:p-16 xl:col-span-2 bg-gray-50">
                            <span
                                class="text-5xl font-extrabold  block mb-2 text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500">PKKS
                                2024</span>
                            <h1 class="text-3xl mt-5 font-semibold text-gray-900 p-2">Penilaian Kinerja Kepala
                                Sekolah<br><span class="text-4xl">SLB Negeri Badegan</span></h1>
                            <p class="my-8">
                                <span class="text-2xl font-medium text-gray-900">"Menggali potensi, melampaui batas".
                            </p>
                            <a type="button" href="/about"
                                class="relative px-8 py-4 ml-4 overflow-hidden font-semibold rounded bg-gray-800 text-gray-50 hover:bg-sky-500">Cek
                                About
                                <span
                                    class="absolute top-0 right-0 px-5 py-1 text-xs tracki text-center uppercase whitespace-no-wrap origin-bottom-left transform rotate-45 -translate-y-full translate-x-1/3 bg-violet-600">New</span>
                            </a>
                        </div>
                        <img src="../assets/img/about.jpg" alt=""
                            class="object-cover w-full h-full drop-shadow-xl rounded-md xl:col-span-3 bg-gray-500">
                    </section>

                </div>
            </main>

        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2529536361-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>



    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>

</html><?php /**PATH D:\APLIKASI\pkks24\resources\views/index.blade.php ENDPATH**/ ?>