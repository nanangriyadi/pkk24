<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <span class="text-5xl font-extrabold  block mb-2 text-violet-600">PKKS
                                2024</span>
                            <h1 class="text-3xl mt-5 font-semibold text-gray-900 p-2">Penilaian Kinerja Kepala
                                Sekolah<br><span class="text-4xl">SLB Negeri Badegan</span></h1>
                            <p class="my-8">
                                <span class="text-2xl font-medium text-gray-900">"Menggali potensi, melampaui batas".
                            </p>
                            <a type="button" href="/about"
                                class="relative px-8 py-4 ml-4 overflow-hidden font-semibold rounded bg-gray-800 text-gray-50">Cek
                                About
                                <span
                                    class="absolute top-0 right-0 px-5 py-1 text-xs tracki text-center uppercase whitespace-no-wrap origin-bottom-left transform rotate-45 -translate-y-full translate-x-1/3 bg-violet-600">New</span>
                            </a>
                        </div>
                        <img src="../assets/img/about.jpg" alt=""
                            class="object-cover w-full h-full drop-shadow-xl rounded-md xl:col-span-3 bg-gray-500">
                    </section>
                    <section>
                        <span class="block mb-2 text-xs font-medium tracki uppercase lg:text-center text-violet-600">How
                            it
                            works</span>
                        <h2 class="text-5xl font-bold lg:text-center text-gray-900">Building with Mamba is simple</h2>
                        <div class="grid gap-6 my-16 lg:grid-cols-3">
                            <div class="flex flex-col p-8 space-y-4 rounded-md bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full bg-violet-600 text-gray-50">
                                    1</div>
                                <p class="text-2xl font-semibold">
                                    <b>Nulla.</b>Nostrum, corrupti blanditiis. Illum, architecto?
                                </p>
                            </div>
                            <div class="flex flex-col p-8 space-y-4 rounded-md bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full bg-violet-600 text-gray-50">
                                    2</div>
                                <p class="text-2xl font-semibold">
                                    <b>Accusantium.</b>Vitae saepe atque neque sunt eius dolor veniam alias debitis?
                                </p>
                            </div>
                            <div class="flex flex-col p-8 space-y-4 rounded-md bg-gray-50">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full bg-violet-600 text-gray-50">
                                    3</div>
                                <p class="text-2xl font-semibold">
                                    <b>Maxime.</b>Expedita temporibus culpa reprehenderit doloribus consectetur odio!
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="grid gap-6 lg:grid-cols-2">
                        <img src="https://source.unsplash.com/random/360x480" alt=""
                            class="object-cover w-full rounded-md max-h-96 bg-gray-500">
                        <div
                            class="flex flex-col items-center w-full p-6 space-y-8 rounded-md lg:h-full lg:p-8 bg-gray-50">
                            <img src="https://source.unsplash.com/random/100x100" alt=""
                                class="object-cover w-20 h-20 rounded-full bg-gray-500">
                            <blockquote class="max-w-lg text-lg italic font-medium text-center">"Et, dignissimos
                                obcaecati.
                                Recusandae praesentium doloribus vitae? Rem unde atque mollitia!"</blockquote>
                            <div class="text-center text-gray-600">
                                <p>Leroy Jenkins</p>
                                <p>CEO of Company Co.</p>
                            </div>
                            <div class="flex space-x-2">
                                <button type="button" aria-label="Page 1"
                                    class="w-2 h-2 rounded-full bg-gray-900"></button>
                                <button type="button" aria-label="Page 2"
                                    class="w-2 h-2 rounded-full bg-gray-400"></button>
                                <button type="button" aria-label="Page 3"
                                    class="w-2 h-2 rounded-full bg-gray-400"></button>
                                <button type="button" aria-label="Page 4"
                                    class="w-2 h-2 rounded-full bg-gray-400"></button>
                            </div>
                        </div>
                        <div class="p-8 space-y-8 rounded-md lg:col-span-full lg:py-12 bg-gray-50">
                            <h2 class="text-5xl font-bold text-gray-900">Create with us</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt
                                facilis quod accusantium beatae cum nam adipisci reiciendis omnis possimus error quo
                                animi
                                voluptas magni, at incidunt. Nulla ex at ullam corporis quidem adipisci vitae,
                                perferendis
                                dolorem libero minus atque tenetur enim pariatur cupiditate commodi in beatae, ipsa
                                eligendi? Quis, saepe.</p>
                        </div>
                    </section>
                    <section>
                        <div class="grid gap-6 lg:grid-cols-3">
                            <div class="overflow-hidden rounded lg:flex lg:col-span-3">
                                <img src="https://source.unsplash.com/random/485x365" alt=""
                                    class="object-cover w-full h-auto max-h-96 bg-gray-500">
                                <div class="p-6 space-y-6 lg:p-8 md:flex md:flex-col bg-gray-50">
                                    <span
                                        class="self-start px-3 py-1 text-sm rounded-full bg-violet-600 text-gray-50">Business</span>
                                    <h2 class="text-3xl font-bold md:flex-1">Curating a workplace that inspires team
                                        movement</h2>
                                    <div>
                                        <p class="text-gray-600">November 30, 2020</p>
                                        <p class="text-gray-600">By Leroy Jenkins</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 rounded lg:p-8 lg:py-12 bg-gray-50">
                                <h3 class="inline font-medium text-gray-900">Panel-based blocks.</h3>
                                <p class="inline">Flexible panels that are perfect for building functional layouts.</p>
                            </div>
                            <div class="p-6 rounded lg:p-8 lg:py-12 bg-gray-50">
                                <h3 class="inline font-medium text-gray-900">Responsive design.</h3>
                                <p class="inline">Panels look great no matter the device.</p>
                            </div>
                            <div class="p-6 rounded lg:p-8 lg:py-12 bg-gray-50">
                                <h3 class="inline font-medium text-gray-900">Premium support.</h3>
                                <p class="inline">Join over 50 000 satisfied customers who use our templates.</p>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container p-6 py-20 mx-auto rounded lg:px-8 bg-gray-50">
                            <h2 class="text-5xl font-bold text-center">Our team is here to help you.</h2>
                            <div class="flex justify-center p-4">
                                <a rel="noopener noreferrer" href="#">Meet our crew &gt;</a>
                            </div>
                            <img src="https://source.unsplash.com/random/360x240" alt=""
                                class="object-cover w-full h-auto mt-8 rounded max-h-96 bg-gray-500">
                        </div>
                    </section>
                </div>
            </main>

        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-122560650-0', $__slots ?? [], get_defined_vars());

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

</html><?php /**PATH D:\APLIKASI\pkks24\resources\views/welcome.blade.php ENDPATH**/ ?>